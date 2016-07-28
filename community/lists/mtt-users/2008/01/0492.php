<?
$subject_val = "[MTT users] Help starting out with MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 16:26:57 2008" -->
<!-- isoreceived="20080125212657" -->
<!-- sent="Fri, 25 Jan 2008 14:26:43 -0700" -->
<!-- isosent="20080125212643" -->
<!-- name="Jennis Pruett" -->
<!-- email="jennyp_at_[hidden]" -->
<!-- subject="[MTT users] Help starting out with MTT" -->
<!-- id="005901c85f98$fb239520$bcf3a580_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [MTT users] Help starting out with MTT<br>
<strong>From:</strong> Jennis Pruett (<em>jennyp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-25 16:26:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0493.php">Jeff Squyres: "Re: [MTT users] Help starting out with MTT"</a>
<li><strong>Previous message:</strong> <a href="0491.php">Jeff Squyres: "Re: [MTT users] [OMPI devel] Svn password issues with MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0493.php">Jeff Squyres: "Re: [MTT users] Help starting out with MTT"</a>
<li><strong>Reply:</strong> <a href="0493.php">Jeff Squyres: "Re: [MTT users] Help starting out with MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, Everyone, 
<br>
&nbsp;
<br>
I'm trying to find something that is a beginner's
<br>
guide/configure/explanation to using MTT.
<br>
Anything like that out there? I've searched the website, finding nothing. 
<br>
&nbsp;
<br>
I do have access to the mtt database now, and it ran along using 
<br>
client/mtt --file samples/ompi-core-template.ini --debug
<br>
until it stopped with the following. 
<br>
&nbsp;
<br>
&nbsp;Where do I begin?
<br>
&nbsp;
<br>
Thanks,
<br>
Jenny
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
&lt;cut&gt;
<br>
<span class="quotelev2">&gt;&gt; Running with [ompi-nightly-v1.2] / [1.2.5rc2r16941] / [gcc warnings]
</span><br>
Found MPI details: [mpi details: open mpi]
<br>
Using [mpi details: open mpi] with [MPI Install: gcc warnings]
<br>
Evaluating: # We can exit if the test passed or was skipped (i.e., there's
<br>
&nbsp;&nbsp;&nbsp;no need
<br>
&nbsp;&nbsp;&nbsp;# to cleanup).
<br>
&nbsp;&nbsp;&nbsp;if test &quot;$MTT_TEST_RUN_RESULT&quot; = &quot;passed&quot; -o &quot;$MTT_TEST_RUN_RESULT&quot; =
<br>
&nbsp;&nbsp;&nbsp;&quot;skipped&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit 0
<br>
&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;if test &quot;$MTT_TEST_HOSTFILE&quot; != &quot;&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;args=&quot;--hostfile $MTT_TEST_HOSTFILE&quot;
<br>
&nbsp;&nbsp;&nbsp;elif test &quot;$MTT_TEST_HOSTLIST&quot; != &quot;&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;args=&quot;--host $MTT_TEST_HOSTLIST&quot;
<br>
&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX
<br>
&nbsp;&nbsp;&nbsp;mtt_ompi_cleanup.pl
<br>
Got final exec: mpirun &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;,
<br>
&nbsp;&nbsp;&nbsp;&quot;&amp;hostfile()&quot;)&quot;,             &quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;,
<br>
&nbsp;&nbsp;&nbsp;&quot;&amp;hostlist()&quot;)&quot;, &quot;&quot;)&quot;) -np &amp;test_np() &amp;enumerate(         &quot;--mca btl
<br>
&nbsp;&nbsp;&nbsp;sm,tcp,self&amp;if(&amp;eq(&quot;&amp;mpi_get_name()&quot;, &quot;ompi-nightly-v1.1&quot;),       &quot;
<br>
&nbsp;&nbsp;&nbsp;--mca btl_tcp_if_include eth0 --mca oob_tcp_if_include eth0 --mca
<br>
&nbsp;&nbsp;&nbsp;btl_openib_max_btls 1&quot;, &quot;&quot;)&quot;,         &quot;--mca btl
<br>
&nbsp;&nbsp;&nbsp;tcp,self&amp;if(&amp;eq(&quot;&amp;mpi_get_name()&quot;, &quot;ompi-nightly-v1.1&quot;),   &quot; --mca
<br>
&nbsp;&nbsp;&nbsp;btl_tcp_if_include eth0 --mca oob_tcp_if_include eth0 --mca
<br>
&nbsp;&nbsp;&nbsp;btl_openib_max_btls 1&quot;, &quot;&quot;)&quot;) --prefix &amp;test_prefix() &amp;test_executable()
<br>
&nbsp;&nbsp;&nbsp;&amp;test_argv()
<br>
chdir
<br>
&nbsp;&nbsp;&nbsp;/usr/projects/hpctools/jennyp/ompi-core-testers/installs/3lYp/tests/ones
<br>
&nbsp;&nbsp;&nbsp;ided/onesided
<br>
Evaluating: require MTT::Test::Specify::Simple
<br>
&nbsp;&nbsp;&nbsp;Simple
<br>
*** ERROR: Module aborted during require: MTT::Test::Specify::Simple
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Simple: syntax error at (eval 11095) line 4, near &quot;require
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTT::Test::Specify::Simple
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Simple
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;
<br>
<p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0492/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0493.php">Jeff Squyres: "Re: [MTT users] Help starting out with MTT"</a>
<li><strong>Previous message:</strong> <a href="0491.php">Jeff Squyres: "Re: [MTT users] [OMPI devel] Svn password issues with MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0493.php">Jeff Squyres: "Re: [MTT users] Help starting out with MTT"</a>
<li><strong>Reply:</strong> <a href="0493.php">Jeff Squyres: "Re: [MTT users] Help starting out with MTT"</a>
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
