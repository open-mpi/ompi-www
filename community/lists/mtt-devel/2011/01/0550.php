<?
$subject_val = "Re: [MTT devel] mtt questions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 07:24:45 2011" -->
<!-- isoreceived="20110106122445" -->
<!-- sent="Thu, 6 Jan 2011 14:24:39 +0200" -->
<!-- isosent="20110106122439" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] mtt questions" -->
<!-- id="AANLkTinGgh=ATGNV0=WXX7z6hscfCetHLJTjczpzU8f4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="205373D1-DBCF-4D51-8EE0-521CD5DF715D_at_open-mpi.org" -->
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
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 07:24:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0551.php">Mike Dubman: "[MTT devel] mtt eval problem on new perl"</a>
<li><strong>Previous message:</strong> <a href="0549.php">Jeff Squyres: "Re: [MTT devel] mtt questions"</a>
<li><strong>In reply to:</strong> <a href="0548.php">Joshua Hursey: "Re: [MTT devel] mtt questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0549.php">Jeff Squyres: "Re: [MTT devel] mtt questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot!
<br>
<p>On Wed, Jan 5, 2011 at 4:01 PM, Joshua Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Since I used Open MPI, I didn't have to change the MPI Install phase much
</span><br>
<span class="quotelev1">&gt; at all. But if you are running something non-MPI, you may have to update
</span><br>
<span class="quotelev1">&gt; this section.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the MPI Details I have:
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; [MPI Details: OMPI]
</span><br>
<span class="quotelev1">&gt; exec = ./run-correctness.pl -test &amp;test_executable() \
</span><br>
<span class="quotelev1">&gt;       -storage-dir /nfs/odinnfs1/san36-1-0/jjhursey/tmp/snapshot/ \
</span><br>
<span class="quotelev1">&gt;       -np &amp;test_np() \
</span><br>
<span class="quotelev1">&gt;       -mca &quot;@fixes@ -am ft-enable-cr @pml@&quot; \
</span><br>
<span class="quotelev1">&gt;       --prefix &amp;test_prefix() -v 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fixes = -mca orte_base_help_aggregate 0
</span><br>
<span class="quotelev1">&gt; ft_options = -am ft-enable-cr
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the Test Get/Build/Run phases I have:
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt; [Test get: iu_ft_cr]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/iu/ft/correctness">https://svn.open-mpi.org/svn/ompi-tests/trunk/iu/ft/correctness</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test build: iu_ft_cr]
</span><br>
<span class="quotelev1">&gt; test_get = iu_ft_cr
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; stderr_save_lines = -1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module = Shell
</span><br>
<span class="quotelev1">&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; make clean all ADD_FLAGS=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test run: iu_ft_cr]
</span><br>
<span class="quotelev1">&gt; include_section = Defaults Test run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; test_build = iu_ft_cr
</span><br>
<span class="quotelev1">&gt; timeout = &amp;max(240, &amp;multiply(30, &amp;test_np()))
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;test_wifexited(), &amp;eq(&amp;test_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = &amp;enumerate( &quot;noop&quot;, &quot;quiet&quot;, &quot;simple&quot;, &quot;progress&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;inflight&quot;, &quot;barrier&quot; )
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 5, 2011, at 7:35 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for info!
</span><br>
<span class="quotelev2">&gt; &gt; Josh, can you please send me mtt.ini file you used with C/R tests as a
</span><br>
<span class="quotelev1">&gt; reference for using non-MPI application?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, found following inside RunEngine.pm code:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # Set some thresholds for an early exit
</span><br>
<span class="quotelev2">&gt; &gt; my $break_threshold;
</span><br>
<span class="quotelev2">&gt; &gt; $break_threshold-&gt;{MTT::Values::PASS}      = Value($ini, $section,
</span><br>
<span class="quotelev1">&gt; &quot;break_threshold_pass&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; $break_threshold-&gt;{MTT::Values::FAIL}      = Value($ini, $section,
</span><br>
<span class="quotelev1">&gt; &quot;break_threshold_fail&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; $break_threshold-&gt;{MTT::Values::TIMED_OUT} = Value($ini, $section,
</span><br>
<span class="quotelev1">&gt; &quot;break_threshold_timeout&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; $break_threshold-&gt;{MTT::Values::SKIPPED}   = Value($ini, $section,
</span><br>
<span class="quotelev1">&gt; &quot;break_threshold_skipped&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; but it seems like &quot;break rules&quot; are available per single test section
</span><br>
<span class="quotelev1">&gt; instead of whole mtt session.
</span><br>
<span class="quotelev2">&gt; &gt; Regards
</span><br>
<span class="quotelev2">&gt; &gt; Mike
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Jan 4, 2011 at 3:42 PM, Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 4, 2011, at 8:04 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Jan 4, 2011, at 7:06 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Do you know if there is mtt option to stop mtt execution if job`s
</span><br>
<span class="quotelev1">&gt; failure ratio succeeds specified value, something like:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [mtt]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; stop_on_test_failures=1%
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I don't recall an option like that, offhand.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't think so either. This would be neat to have for those rare
</span><br>
<span class="quotelev1">&gt; scenarios when something fundamental in Open MPI breaks and we would prefer
</span><br>
<span class="quotelev1">&gt; to stop testing early instead of continuing to run tests even if they are
</span><br>
<span class="quotelev1">&gt; all going to fail.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Also, are there any ini files examples/successes of how to use mtt
</span><br>
<span class="quotelev1">&gt; with non-MPI based applications?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; No.  It *shouldn't* be hard, though -- just make the MPI Details exec
</span><br>
<span class="quotelev1">&gt; statement not use &quot;mpirun&quot;...?  (of course, our phase names are biased
</span><br>
<span class="quotelev1">&gt; towards &quot;MPI&quot;, but they could just as well be &quot;Middleware&quot;, for example)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I successfully did this when testing the C/R functionality in Open MPI,
</span><br>
<span class="quotelev1">&gt; and a couple other groups are looking at supporting non-MPI middleware as
</span><br>
<span class="quotelev1">&gt; well. The C/R tests are all wrapped up in their own perl script (to do
</span><br>
<span class="quotelev1">&gt; start/checkpoint/restart/...), so were essentially a non-MPI application. As
</span><br>
<span class="quotelev1">&gt; Jeff mentioned, it was just enough to change the MPI Details section to use
</span><br>
<span class="quotelev1">&gt; your own launcher (or you may be able to even go without a launcher if you
</span><br>
<span class="quotelev1">&gt; just want to run the tests directly). Then you will need to define new Test
</span><br>
<span class="quotelev1">&gt; Build/Run phases for the non-MPI test suite that you are using. And you
</span><br>
<span class="quotelev1">&gt; should be all set.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If for some reason that does not work, let us know since it is something
</span><br>
<span class="quotelev1">&gt; that needs to be fixed since the MTT client should be flexible enough to
</span><br>
<span class="quotelev1">&gt; support a wide manner of middleware.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt; &gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt; &gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a> &lt;<a href="http://users.nccs.gov/%7Ejjhursey">http://users.nccs.gov/%7Ejjhursey</a>&gt;
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
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a> &lt;<a href="http://users.nccs.gov/%7Ejjhursey">http://users.nccs.gov/%7Ejjhursey</a>&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0550/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0551.php">Mike Dubman: "[MTT devel] mtt eval problem on new perl"</a>
<li><strong>Previous message:</strong> <a href="0549.php">Jeff Squyres: "Re: [MTT devel] mtt questions"</a>
<li><strong>In reply to:</strong> <a href="0548.php">Joshua Hursey: "Re: [MTT devel] mtt questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0549.php">Jeff Squyres: "Re: [MTT devel] mtt questions"</a>
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
