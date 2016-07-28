<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 14:27:34 2007" -->
<!-- isoreceived="20070710182734" -->
<!-- sent="Tue, 10 Jul 2007 14:27:27 -0400" -->
<!-- isosent="20070710182727" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [MTT users] Textfile Reporter" -->
<!-- id="200707101427.28911.tprins_at_cs.indiana.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20070710154633.GB18600_at_sun.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 14:27:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0352.php">Ethan Mallove: "Re: [MTT users] Textfile Reporter"</a>
<li><strong>Previous message:</strong> <a href="0350.php">Ethan Mallove: "Re: [MTT users] Textfile Reporter"</a>
<li><strong>In reply to:</strong> <a href="0350.php">Ethan Mallove: "Re: [MTT users] Textfile Reporter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0352.php">Ethan Mallove: "Re: [MTT users] Textfile Reporter"</a>
<li><strong>Reply:</strong> <a href="0352.php">Ethan Mallove: "Re: [MTT users] Textfile Reporter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, the INI file reporter does not seem to work for me. For the test results 
<br>
I only get the information about the last test run. 
<br>
<p>Anyways, I like the idea of pulling the data directly in from perl output but 
<br>
just don't have the time to mess with it right now. For me bringing back the 
<br>
old reporter would be easiest for the time being. However, I also need the 
<br>
following patch applied to resurect a couple output fields that were removed 
<br>
which we need:
<br>
<p>Index: lib/MTT/Test/Analyze/Correctness.pm
<br>
===================================================================
<br>
--- lib/MTT/Test/Analyze/Correctness.pm (revision 737)
<br>
+++ lib/MTT/Test/Analyze/Correctness.pm (working copy)
<br>
@@ -53,6 +53,8 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test_name =&gt; $run-&gt;{name},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;command =&gt; $run-&gt;{cmd},
<br>
+        test_build_section_name =&gt; $run-&gt;{test_build_simple_section_name},
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;np =&gt; $run-&gt;{np},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit_value =&gt; MTT::DoCommand::exit_value($results-&gt;{exit_status}),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit_signal =&gt; MTT::DoCommand::exit_signal($results-&gt;{exit_status}),
<br>
Index: lib/MTT/MPI/Install.pm
<br>
===================================================================
<br>
--- lib/MTT/MPI/Install.pm      (revision 737)
<br>
+++ lib/MTT/MPI/Install.pm      (working copy)
<br>
@@ -505,6 +505,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $report = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phase =&gt; &quot;MPI Install&quot;,
<br>
<p>+            mpi_install_section_name =&gt; $config-&gt;{simple_section_name},
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bitness =&gt; $config-&gt;{bitness},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endian =&gt; $config-&gt;{endian},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compiler_name =&gt; $config-&gt;{compiler_name},
<br>
<p><p>Thanks,
<br>
<p>Tim
<br>
<p>On Tuesday 10 July 2007 11:46:34 am Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; Whoops! I didn't realize anyone was using that Textfile
</span><br>
<span class="quotelev1">&gt; module. We can resurrect that if you'd like (call it
</span><br>
<span class="quotelev1">&gt; ParseableTextfile).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's also the INIFile Reporter. That might be your best
</span><br>
<span class="quotelev1">&gt; bet, since there's a Config::INIFiles CPAN module. (Your
</span><br>
<span class="quotelev1">&gt; wrappers are in Perl, right?) Though wouldn't it be even
</span><br>
<span class="quotelev1">&gt; easier if there were a PerlDumper Reporter module so you
</span><br>
<span class="quotelev1">&gt; could read in the data *directly* to your Perl wrappers?
</span><br>
<span class="quotelev1">&gt; Your wrapper would do no parsing then. E.g.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     open(FILE, &quot;&lt; $file&quot;);
</span><br>
<span class="quotelev1">&gt;     undef $/;
</span><br>
<span class="quotelev1">&gt;     $mtt_results = &lt;FILE&gt;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul/09/2007 06:07:51PM, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; With the new version of MTT, the textfile report file
</span><br>
<span class="quotelev2">&gt; &gt; format changed to a more human readable format. Since we
</span><br>
<span class="quotelev2">&gt; &gt; here at IU use a script to parse this, it presents a bit
</span><br>
<span class="quotelev2">&gt; &gt; of a problem. I can update our script, but was wondering
</span><br>
<span class="quotelev2">&gt; &gt; how stable this new output format is.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If it will not be very stable, I was wondering if the
</span><br>
<span class="quotelev2">&gt; &gt; developers would consider adding a parseable textfile
</span><br>
<span class="quotelev2">&gt; &gt; output module. The easiest thing to do for this would be
</span><br>
<span class="quotelev2">&gt; &gt; to just import the old textfile module as a new parseable
</span><br>
<span class="quotelev2">&gt; &gt; module. I have tried this and it seems to work fine,
</span><br>
<span class="quotelev2">&gt; &gt; however there may be problems with this that I am unaware
</span><br>
<span class="quotelev2">&gt; &gt; of.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can deal with this either way, but just thought it might
</span><br>
<span class="quotelev2">&gt; &gt; make things easier to have a parseable format that is
</span><br>
<span class="quotelev2">&gt; &gt; relatively static, and a human readable format that can be
</span><br>
<span class="quotelev2">&gt; &gt; tweaked for useability as time goes by.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tim
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0352.php">Ethan Mallove: "Re: [MTT users] Textfile Reporter"</a>
<li><strong>Previous message:</strong> <a href="0350.php">Ethan Mallove: "Re: [MTT users] Textfile Reporter"</a>
<li><strong>In reply to:</strong> <a href="0350.php">Ethan Mallove: "Re: [MTT users] Textfile Reporter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0352.php">Ethan Mallove: "Re: [MTT users] Textfile Reporter"</a>
<li><strong>Reply:</strong> <a href="0352.php">Ethan Mallove: "Re: [MTT users] Textfile Reporter"</a>
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
