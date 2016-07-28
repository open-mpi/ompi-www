<?
$subject_val = "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  5 16:59:14 2012" -->
<!-- isoreceived="20120105215914" -->
<!-- sent="Thu, 5 Jan 2012 16:59:09 -0500" -->
<!-- isosent="20120105215909" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn" -->
<!-- id="334E06F7-6288-47E4-B8E5-07DF3D8AE4AD_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="408380987.20120106014654_at_compcenter.org" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-05 16:59:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2012/03/0751.php">Andrew Senin: "[MTT users] Git repository"</a>
<li><strong>Previous message:</strong> <a href="0749.php">&#208;&#174;&#208;&#187;&#208;&#190;&#208;&#178; &#208;&#148;&#208;&#188;&#208;&#184;&#209;&#130;&#209;&#128;&#208;&#184;&#208;&#185;: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>In reply to:</strong> <a href="0749.php">&#208;&#174;&#208;&#187;&#208;&#190;&#208;&#178; &#208;&#148;&#208;&#188;&#208;&#184;&#209;&#130;&#209;&#128;&#208;&#184;&#208;&#185;: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 5, 2012, at 4:46 PM, &#208;&#174;&#208;&#187;&#208;&#190;&#208;&#178; &#208;&#148;&#208;&#188;&#208;&#184;&#209;&#130;&#209;&#128;&#208;&#184;&#208;&#185; wrote:
<br>
<p><span class="quotelev1">&gt; Yes,  but  a  little.  Unfortunately  I  don't  see description of the
</span><br>
<span class="quotelev1">&gt; structure tree of tests. :(
</span><br>
<p>I'm not sure what you're asking here -- the tree structure doesn't matter...?
<br>
<p>We have a particular tree structure in the ompi-tests SVN repository, of course, but MTT doesn't depend on that (or any other) specific tree structure.
<br>
<p>Let me give you an example -- the IBM MPI test suite from the ARM .ini file example I sent earlier:
<br>
<p>-----
<br>
[Test get: ibm]
<br>
module = SCM
<br>
scm_module = SVN
<br>
scm_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm">https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm</a>
<br>
scm_post_copy = &lt;&lt;EOT
<br>
./autogen.sh
<br>
EOT
<br>
-----
<br>
<p>This just does a check out of the IBM MPI test suite.  It's multiple directories.  After it does the checkout, it runs &quot;autogen.sh&quot; in the top-level directory of the checkout (which runs the GNU autotools, like autoconf, automake, ...etc.).
<br>
<p>Then we build the IBM MPI test suite with:
<br>
<p>-----
<br>
[Test build: ibm]
<br>
test_get = ibm
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 1
<br>
<p>module = Shell
<br>
shell_build_command = &lt;&lt;EOT
<br>
./configure
<br>
make
<br>
EOT
<br>
-----
<br>
<p>The &quot;Shell&quot; module allows you to specify simply shell commands.  In this case, it's a simple &quot;./configure&quot; followed by &quot;make&quot;.
<br>
<p>The test run is a bit more complicated, because we have several kinds of tests 
<br>
in the IBM MPI test suite:
<br>
<p>-----
<br>
[Test run: ibm]
<br>
include_section = Defaults Test run
<br>
<p>test_build = ibm
<br>
timeout = &amp;max(30, &amp;multiply(10, &amp;test_np()))
<br>
<p>specify_module = Simple
<br>
simple_first:np = &amp;env_max_procs()
<br>
simple_first:tests = &amp;find_executables(&quot;collective&quot;, &quot;communicator&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;datatype&quot;, &quot;dynamic&quot;, &quot;environment&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;group&quot;, &quot;info&quot;, &quot;io&quot;, &quot;onesided&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;pt2pt&quot;, &quot;random&quot;, &quot;topology&quot;)
<br>
-----
<br>
<p>Let's look at this part ^^ so far.
<br>
<p>The &quot;Simple&quot; specify module specifies which executes to run.  We use the &amp;find_executables() funclet to find all executables in the directories listed (collective/, communicator/, ...etc.).  This is a simpler way of identifying which tests to run rather than listing them all in the .ini file.
<br>
<p>You could also do &amp;find_executables(&quot;.&quot;), which would search the whole tree.  But that would find things like &quot;configure&quot; and &quot;libtool&quot;, and the like.  So in this case, we listed all the subdirectories that contain the built MPI tests.
<br>
<p>Continuing on...
<br>
<p>-----
<br>
# Tests that are supposed to fail
<br>
simple_fail:tests = environment/abort environment/final
<br>
simple_fail:pass = &amp;and(&amp;test_wifexited(), &amp;ne(&amp;test_wexitstatus(), 0))
<br>
simple_fail:exclusive = 1
<br>
simple_fail:timeout = &amp;env_max_procs()
<br>
-----
<br>
<p>You can put an arbitrary tag before a colon (:) and then list keywords like tests, pass, np, exclusive, timeout, etc.  This creates a subset of tests.
<br>
<p>In this case, we have 2 tests that are *supposed* to fail (i.e., they call MPI_Abort), and therefore the &quot;pass&quot; criteria for these two tests needs to be different than the rest.  The executables environment/abort and environment/final are the two tests in question.
<br>
<p>We specify a different &quot;pass&quot; criteria here.  The &quot;exclusive&quot; field means that this subset of tests should not be run in any other subsets (i.e., the main set of tests that were found by &amp;find_executables(), above.
<br>
<p>Continuing on...
<br>
<p>-----
<br>
# Spawn tests; need to run very few
<br>
simple_spawns:tests  = dynamic/spawn dynamic/spawn_multiple
<br>
simple_spawns:np = 3
<br>
simple_spawns:pass = &amp;and(&amp;test_wifexited(), &amp;eq(&amp;test_wexitstatus(),0))
<br>
simple_spawns:exclusive = 1
<br>
simple_spawns:timeout = &amp;multiply(5,&amp;env_max_procs())
<br>
-----
<br>
<p>This subset needed an override on the np value and the timeout.
<br>
<p>-----
<br>
# Big loop o' spawns
<br>
loop_spawn:tests = dynamic/loop_spawn
<br>
loop_spawn:np = 1
<br>
loop_spawn:pass = &amp;and(&amp;test_wifexited(), &amp;eq(&amp;test_wexitstatus(),0))
<br>
loop_spawn:exclusive = 1
<br>
loop_spawn:timeout = 600
<br>
-----
<br>
<p>Again, override the np and timeout values for this subset.
<br>
<p>-----
<br>
# THREAD_MULTIPLE test will fail with the openib btl because it
<br>
# deactivates itself in the presence of THREAD_MULTIPLE.  So just skip
<br>
# it.  loop_child is the target for loop_spawn, so we don't need to
<br>
# run it (although it'll safely pass if you run it by itself).
<br>
simple_skip:tests = environment/init_thread_multiple dynamic/loop_child
<br>
simple_skip:exclusive = 1
<br>
simple_skip:do_not_run = 1
<br>
-----
<br>
<p>I am explicitly skipping these tests (do_not_run), mainly out of laziness. :-)
<br>
<p>Does this help?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2012/03/0751.php">Andrew Senin: "[MTT users] Git repository"</a>
<li><strong>Previous message:</strong> <a href="0749.php">&#208;&#174;&#208;&#187;&#208;&#190;&#208;&#178; &#208;&#148;&#208;&#188;&#208;&#184;&#209;&#130;&#209;&#128;&#208;&#184;&#208;&#185;: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>In reply to:</strong> <a href="0749.php">&#208;&#174;&#208;&#187;&#208;&#190;&#208;&#178; &#208;&#148;&#208;&#188;&#208;&#184;&#209;&#130;&#209;&#128;&#208;&#184;&#208;&#185;: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
