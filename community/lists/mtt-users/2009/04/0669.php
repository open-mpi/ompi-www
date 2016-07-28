<?
$subject_val = "Re: [MTT users] MTT Error on SLES11";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 10:23:10 2009" -->
<!-- isoreceived="20090408142310" -->
<!-- sent="Wed, 8 Apr 2009 10:22:58 -0400" -->
<!-- isosent="20090408142258" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT Error on SLES11" -->
<!-- id="20090408142258.GM26923_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1239130429.6909.29.camel_at_T42" -->
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
<strong>Subject:</strong> Re: [MTT users] MTT Error on SLES11<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-08 10:22:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0670.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Previous message:</strong> <a href="0668.php">Rafael Folco: "[MTT users] MTT Error on SLES11"</a>
<li><strong>In reply to:</strong> <a href="0668.php">Rafael Folco: "[MTT users] MTT Error on SLES11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0670.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Apr/07/2009 03:53:48PM, Rafael Folco wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to run MTT on SLES11, but I am getting an error message
</span><br>
<span class="quotelev1">&gt; during the RUN phase and I can't figure out what is the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** ERROR: Module aborted: MTT::Test::Specify::Simple:Specify: Can't use
</span><br>
<span class="quotelev1">&gt;     string (&quot;183&quot;) as an ARRAY ref while &quot;strict refs&quot; in use at
</span><br>
<span class="quotelev1">&gt;     /tmp/ompi-core-testers/lib/MTT/Values.pm line 75.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I could see was that this error is nothing specific to any
</span><br>
<span class="quotelev1">&gt; particular test, it happens at certain points during the RUN phase.
</span><br>
<span class="quotelev1">&gt; Also, the BUILD phase has been completed successfully for all tests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anybody have already seen this? Any thoughts ?
</span><br>
<p>Hi Rafael,
<br>
<p>Try the MTT trunk, as many bugs have been ironed out since the last
<br>
time an ompi-core-testers branch was cut.  
<br>
<p>&nbsp;&nbsp;<a href="http://svn.open-mpi.org/svn/mtt/trunk">http://svn.open-mpi.org/svn/mtt/trunk</a>
<br>
<p>Also, I believe the INI syntax rules differ between &quot;trunk&quot; and
<br>
&quot;ompi-core-testers&quot;, and you maybe using the &quot;trunk&quot; INI syntax. Could
<br>
you post your INI file? I do not think this is operating system
<br>
related. If anything, the key variable would be your Perl version.
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rafael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Rafael Folco
</span><br>
<span class="quotelev1">&gt; OpenHPC / Test Lead
</span><br>
<span class="quotelev1">&gt; IBM Linux Technology Center
</span><br>
<span class="quotelev1">&gt; E-Mail: rfolco_at_[hidden]
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
<li><strong>Next message:</strong> <a href="0670.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Previous message:</strong> <a href="0668.php">Rafael Folco: "[MTT users] MTT Error on SLES11"</a>
<li><strong>In reply to:</strong> <a href="0668.php">Rafael Folco: "[MTT users] MTT Error on SLES11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0670.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
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
