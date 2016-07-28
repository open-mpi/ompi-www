<?
$subject_val = "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  1 12:03:22 2010" -->
<!-- isoreceived="20100901160322" -->
<!-- sent="Wed, 1 Sep 2010 10:03:12 -0600" -->
<!-- isosent="20100901160312" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH" -->
<!-- id="ED35306A-9430-4CC0-9BD6-068FEB4FE1EC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201009012115.37768.samuel_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-01 12:03:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8441.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8439.php">David Gunter: "[OMPI devel] Fwd: Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers"</a>
<li><strong>In reply to:</strong> <a href="8435.php">Chris Samuel: "[OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8444.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid that triggering a notifier message isn't that simple - instances where notifier is invoked are still rare in the code base.
<br>
<p>I'll be adding some to the developer's trunk shortly that will provide a better test (i.e., will trigger on things like failed-to-launch). Will let you know when they are available!
<br>
<p>On Sep 1, 2010, at 5:15 AM, Chris Samuel wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at the code for the Twitter notifier in OMPI 1.5
</span><br>
<span class="quotelev1">&gt; and seeing its use of HTTP basic authentication I would
</span><br>
<span class="quotelev1">&gt; suggest that it may be non-functional due to Twitters
</span><br>
<span class="quotelev1">&gt; switch to purely OAUTH based authentication for their API.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to test it out here but I'm at a bit of a loss
</span><br>
<span class="quotelev1">&gt; to find a trivial command line to trigger a notifier, even
</span><br>
<span class="quotelev1">&gt; the syslog one!  I've Googled and grep'd with no joy..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For instance:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; chris_at_quad:/tmp/ompi$ ./bin/mpirun --mca notifier syslog --mca notifier_threshold_severity 99 --mca 
</span><br>
<span class="quotelev1">&gt; notifier_base_verbose 99  /bin/doesnotexist
</span><br>
<span class="quotelev1">&gt; [quad:18429] mca: base: components_open: Looking for notifier components
</span><br>
<span class="quotelev1">&gt; [quad:18429] mca: base: components_open: opening notifier components
</span><br>
<span class="quotelev1">&gt; [quad:18429] mca: base: components_open: found loaded component syslog
</span><br>
<span class="quotelev1">&gt; [quad:18429] mca: base: components_open: component syslog has no register function
</span><br>
<span class="quotelev1">&gt; [quad:18429] mca: base: components_open: component syslog open function successful
</span><br>
<span class="quotelev1">&gt; [quad:18429] mca:base:select: Auto-selecting notifier components
</span><br>
<span class="quotelev1">&gt; [quad:18429] mca:base:select:(notifier) Querying component [syslog]
</span><br>
<span class="quotelev1">&gt; [quad:18429] mca:base:select:(notifier) Query of component [syslog] set priority to 1
</span><br>
<span class="quotelev1">&gt; [quad:18429] mca:base:select:(notifier) Selected component [syslog]
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it could not access
</span><br>
<span class="quotelev1">&gt; or execute an executable:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Executable: /bin/doesnotexist
</span><br>
<span class="quotelev1">&gt; Node: quad
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [quad:18429] mca: base: close: component syslog closed
</span><br>
<span class="quotelev1">&gt; [quad:18429] mca: base: close: unloading component syslog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But nothing appears in the syslog.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ideas ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers!
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel          Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computational Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;          <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8441.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8439.php">David Gunter: "[OMPI devel] Fwd: Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers"</a>
<li><strong>In reply to:</strong> <a href="8435.php">Chris Samuel: "[OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8444.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
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
