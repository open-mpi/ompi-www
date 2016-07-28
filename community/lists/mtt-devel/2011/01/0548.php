<?
$subject_val = "Re: [MTT devel] mtt questions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 09:01:23 2011" -->
<!-- isoreceived="20110105140123" -->
<!-- sent="Wed, 5 Jan 2011 09:01:16 -0500" -->
<!-- isosent="20110105140116" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] mtt questions" -->
<!-- id="205373D1-DBCF-4D51-8EE0-521CD5DF715D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=h_H5mUSKLd-+73=acfy7Fh7fTfvmRd0QUvuze_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] mtt questions<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-05 09:01:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0549.php">Jeff Squyres: "Re: [MTT devel] mtt questions"</a>
<li><strong>Previous message:</strong> <a href="0547.php">Mike Dubman: "Re: [MTT devel] mtt questions"</a>
<li><strong>In reply to:</strong> <a href="0547.php">Mike Dubman: "Re: [MTT devel] mtt questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0550.php">Mike Dubman: "Re: [MTT devel] mtt questions"</a>
<li><strong>Reply:</strong> <a href="0550.php">Mike Dubman: "Re: [MTT devel] mtt questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since I used Open MPI, I didn't have to change the MPI Install phase much at all. But if you are running something non-MPI, you may have to update this section.
<br>
<p>For the MPI Details I have:
<br>
------------------------------
<br>
[MPI Details: OMPI]
<br>
exec = ./run-correctness.pl -test &amp;test_executable() \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-storage-dir /nfs/odinnfs1/san36-1-0/jjhursey/tmp/snapshot/ \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-np &amp;test_np() \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca &quot;@fixes@ -am ft-enable-cr @pml@&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--prefix &amp;test_prefix() -v 2
<br>
<p>fixes = -mca orte_base_help_aggregate 0
<br>
ft_options = -am ft-enable-cr
<br>
-------------------------------
<br>
<p>For the Test Get/Build/Run phases I have:
<br>
-------------------------------
<br>
[Test get: iu_ft_cr]
<br>
module = SVN
<br>
svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/iu/ft/correctness">https://svn.open-mpi.org/svn/ompi-tests/trunk/iu/ft/correctness</a>
<br>
<p><p>[Test build: iu_ft_cr]
<br>
test_get = iu_ft_cr
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 1
<br>
stderr_save_lines = -1
<br>
<p>module = Shell
<br>
shell_build_command = &lt;&lt;EOT
<br>
make clean all ADD_FLAGS=&quot;&quot;
<br>
EOT
<br>
<p><p>[Test run: iu_ft_cr]
<br>
include_section = Defaults Test run
<br>
<p>test_build = iu_ft_cr
<br>
timeout = &amp;max(240, &amp;multiply(30, &amp;test_np()))
<br>
pass = &amp;and(&amp;test_wifexited(), &amp;eq(&amp;test_wexitstatus(), 0))
<br>
np = &amp;env_max_procs()
<br>
<p>simple_pass:tests = &amp;enumerate( &quot;noop&quot;, &quot;quiet&quot;, &quot;simple&quot;, &quot;progress&quot;, &quot;inflight&quot;, &quot;barrier&quot; )
<br>
-------------------------------
<br>
<p><p>-- Josh
<br>
<p><p>On Jan 5, 2011, at 7:35 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for info!
</span><br>
<span class="quotelev1">&gt; Josh, can you please send me mtt.ini file you used with C/R tests as a reference for using non-MPI application?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, found following inside RunEngine.pm code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Set some thresholds for an early exit
</span><br>
<span class="quotelev1">&gt; my $break_threshold;
</span><br>
<span class="quotelev1">&gt; $break_threshold-&gt;{MTT::Values::PASS}      = Value($ini, $section, &quot;break_threshold_pass&quot;);
</span><br>
<span class="quotelev1">&gt; $break_threshold-&gt;{MTT::Values::FAIL}      = Value($ini, $section, &quot;break_threshold_fail&quot;);
</span><br>
<span class="quotelev1">&gt; $break_threshold-&gt;{MTT::Values::TIMED_OUT} = Value($ini, $section, &quot;break_threshold_timeout&quot;);
</span><br>
<span class="quotelev1">&gt; $break_threshold-&gt;{MTT::Values::SKIPPED}   = Value($ini, $section, &quot;break_threshold_skipped&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but it seems like &quot;break rules&quot; are available per single test section instead of whole mtt session.
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Mike
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 4, 2011 at 3:42 PM, Joshua Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 4, 2011, at 8:04 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 4, 2011, at 7:06 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Do you know if there is mtt option to stop mtt execution if job`s failure ratio succeeds specified value, something like:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [mtt]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; stop_on_test_failures=1%
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't recall an option like that, offhand.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think so either. This would be neat to have for those rare scenarios when something fundamental in Open MPI breaks and we would prefer to stop testing early instead of continuing to run tests even if they are all going to fail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Also, are there any ini files examples/successes of how to use mtt with non-MPI based applications?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; No.  It *shouldn't* be hard, though -- just make the MPI Details exec statement not use &quot;mpirun&quot;...?  (of course, our phase names are biased towards &quot;MPI&quot;, but they could just as well be &quot;Middleware&quot;, for example)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I successfully did this when testing the C/R functionality in Open MPI, and a couple other groups are looking at supporting non-MPI middleware as well. The C/R tests are all wrapped up in their own perl script (to do start/checkpoint/restart/...), so were essentially a non-MPI application. As Jeff mentioned, it was just enough to change the MPI Details section to use your own launcher (or you may be able to even go without a launcher if you just want to run the tests directly). Then you will need to define new Test Build/Run phases for the non-MPI test suite that you are using. And you should be all set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If for some reason that does not work, let us know since it is something that needs to be fixed since the MTT client should be flexible enough to support a wide manner of middleware.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0549.php">Jeff Squyres: "Re: [MTT devel] mtt questions"</a>
<li><strong>Previous message:</strong> <a href="0547.php">Mike Dubman: "Re: [MTT devel] mtt questions"</a>
<li><strong>In reply to:</strong> <a href="0547.php">Mike Dubman: "Re: [MTT devel] mtt questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0550.php">Mike Dubman: "Re: [MTT devel] mtt questions"</a>
<li><strong>Reply:</strong> <a href="0550.php">Mike Dubman: "Re: [MTT devel] mtt questions"</a>
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
