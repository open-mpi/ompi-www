<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 16:41:23 2007" -->
<!-- isoreceived="20070710204123" -->
<!-- sent="Tue, 10 Jul 2007 16:40:40 -0400" -->
<!-- isosent="20070710204040" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Textfile Reporter" -->
<!-- id="20070710204040.GD18600_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200707101427.28911.tprins_at_cs.indiana.edu" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 16:40:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0353.php">Tim Prins: "Re: [MTT users] Textfile Reporter"</a>
<li><strong>Previous message:</strong> <a href="0351.php">Tim Prins: "Re: [MTT users] Textfile Reporter"</a>
<li><strong>In reply to:</strong> <a href="0351.php">Tim Prins: "Re: [MTT users] Textfile Reporter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0353.php">Tim Prins: "Re: [MTT users] Textfile Reporter"</a>
<li><strong>Reply:</strong> <a href="0353.php">Tim Prins: "Re: [MTT users] Textfile Reporter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Done. 
<br>
<p>I brought it back as &quot;ParsableTextfile&quot; in both the trunk
<br>
and ompi-core-testers. You'll just have to do two things in
<br>
your INI file:
<br>
<p>&nbsp;* Change &quot;module = Textfile&quot; to &quot;module = ParsableTextfile&quot;
<br>
&nbsp;* Rename &quot;textfile_&quot; params to &quot;parsabletextfile_&quot; params
<br>
<p>Let me know if you run into any other issues with this.
<br>
<p>-Ethan
<br>
<p><p>On Tue, Jul/10/2007 02:27:27PM, Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Hmm, the INI file reporter does not seem to work for me. For the test results 
</span><br>
<span class="quotelev1">&gt; I only get the information about the last test run. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyways, I like the idea of pulling the data directly in from perl output but 
</span><br>
<span class="quotelev1">&gt; just don't have the time to mess with it right now. For me bringing back the 
</span><br>
<span class="quotelev1">&gt; old reporter would be easiest for the time being. However, I also need the 
</span><br>
<span class="quotelev1">&gt; following patch applied to resurect a couple output fields that were removed 
</span><br>
<span class="quotelev1">&gt; which we need:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: lib/MTT/Test/Analyze/Correctness.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- lib/MTT/Test/Analyze/Correctness.pm (revision 737)
</span><br>
<span class="quotelev1">&gt; +++ lib/MTT/Test/Analyze/Correctness.pm (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -53,6 +53,8 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          test_name =&gt; $run-&gt;{name},
</span><br>
<span class="quotelev1">&gt;          command =&gt; $run-&gt;{cmd},
</span><br>
<span class="quotelev1">&gt; +        test_build_section_name =&gt; $run-&gt;{test_build_simple_section_name},
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;          np =&gt; $run-&gt;{np},
</span><br>
<span class="quotelev1">&gt;          exit_value =&gt; MTT::DoCommand::exit_value($results-&gt;{exit_status}),
</span><br>
<span class="quotelev1">&gt;          exit_signal =&gt; MTT::DoCommand::exit_signal($results-&gt;{exit_status}),
</span><br>
<span class="quotelev1">&gt; Index: lib/MTT/MPI/Install.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- lib/MTT/MPI/Install.pm      (revision 737)
</span><br>
<span class="quotelev1">&gt; +++ lib/MTT/MPI/Install.pm      (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -505,6 +505,8 @@
</span><br>
<span class="quotelev1">&gt;          my $report = {
</span><br>
<span class="quotelev1">&gt;              phase =&gt; &quot;MPI Install&quot;,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +            mpi_install_section_name =&gt; $config-&gt;{simple_section_name},
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;              bitness =&gt; $config-&gt;{bitness},
</span><br>
<span class="quotelev1">&gt;              endian =&gt; $config-&gt;{endian},
</span><br>
<span class="quotelev1">&gt;              compiler_name =&gt; $config-&gt;{compiler_name},
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tuesday 10 July 2007 11:46:34 am Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Whoops! I didn't realize anyone was using that Textfile
</span><br>
<span class="quotelev2">&gt; &gt; module. We can resurrect that if you'd like (call it
</span><br>
<span class="quotelev2">&gt; &gt; ParseableTextfile).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There's also the INIFile Reporter. That might be your best
</span><br>
<span class="quotelev2">&gt; &gt; bet, since there's a Config::INIFiles CPAN module. (Your
</span><br>
<span class="quotelev2">&gt; &gt; wrappers are in Perl, right?) Though wouldn't it be even
</span><br>
<span class="quotelev2">&gt; &gt; easier if there were a PerlDumper Reporter module so you
</span><br>
<span class="quotelev2">&gt; &gt; could read in the data *directly* to your Perl wrappers?
</span><br>
<span class="quotelev2">&gt; &gt; Your wrapper would do no parsing then. E.g.,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     open(FILE, &quot;&lt; $file&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;     undef $/;
</span><br>
<span class="quotelev2">&gt; &gt;     $mtt_results = &lt;FILE&gt;;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Jul/09/2007 06:07:51PM, Tim Prins wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; With the new version of MTT, the textfile report file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; format changed to a more human readable format. Since we
</span><br>
<span class="quotelev3">&gt; &gt; &gt; here at IU use a script to parse this, it presents a bit
</span><br>
<span class="quotelev3">&gt; &gt; &gt; of a problem. I can update our script, but was wondering
</span><br>
<span class="quotelev3">&gt; &gt; &gt; how stable this new output format is.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If it will not be very stable, I was wondering if the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; developers would consider adding a parseable textfile
</span><br>
<span class="quotelev3">&gt; &gt; &gt; output module. The easiest thing to do for this would be
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to just import the old textfile module as a new parseable
</span><br>
<span class="quotelev3">&gt; &gt; &gt; module. I have tried this and it seems to work fine,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; however there may be problems with this that I am unaware
</span><br>
<span class="quotelev3">&gt; &gt; &gt; of.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I can deal with this either way, but just thought it might
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make things easier to have a parseable format that is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; relatively static, and a human readable format that can be
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tweaked for useability as time goes by.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Tim
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0353.php">Tim Prins: "Re: [MTT users] Textfile Reporter"</a>
<li><strong>Previous message:</strong> <a href="0351.php">Tim Prins: "Re: [MTT users] Textfile Reporter"</a>
<li><strong>In reply to:</strong> <a href="0351.php">Tim Prins: "Re: [MTT users] Textfile Reporter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0353.php">Tim Prins: "Re: [MTT users] Textfile Reporter"</a>
<li><strong>Reply:</strong> <a href="0353.php">Tim Prins: "Re: [MTT users] Textfile Reporter"</a>
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
