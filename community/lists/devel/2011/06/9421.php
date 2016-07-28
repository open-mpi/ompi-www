<?
$subject_val = "Re: [OMPI devel] Resilience 2011";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 26 18:01:29 2011" -->
<!-- isoreceived="20110626220129" -->
<!-- sent="Sun, 26 Jun 2011 16:01:19 -0600" -->
<!-- isosent="20110626220119" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Resilience 2011" -->
<!-- id="36073779-B4FC-432C-AF5B-0C308F3797C2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1308932644.3084.52.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Resilience 2011<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-26 18:01:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9422.php">Ralf Wildenhues: "Re: [OMPI devel] Tarball distribution"</a>
<li><strong>Previous message:</strong> <a href="9420.php">John Esmet: "Re: [OMPI devel] Tarball distribution"</a>
<li><strong>In reply to:</strong> <a href="9410.php">Ken Lloyd: "[OMPI devel] Resilience 2011"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9424.php">Josh Hursey: "Re: [OMPI devel] Resilience 2011"</a>
<li><strong>Reply:</strong> <a href="9424.php">Josh Hursey: "Re: [OMPI devel] Resilience 2011"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think we're some ways away from declaring a &quot;resilient ORTE&quot;. Josh and I have been committing pieces of it over the last two years, and Wes just committed another piece the other day that might have been titled &quot;fault tolerant OOB&quot; as it primarily addressed maintaining comm routing during node failures.
<br>
<p>Setting aside the obvious MPI issues, there are several branches/organizations working different aspects of the ORTE problem, including:
<br>
<p>* fault prediction and proactive migration
<br>
<p>* mapping algorithms to minimize failure cascades
<br>
<p>* simultaneous failure handling
<br>
<p>* alternative wiring methods that eliminate the OOB routing issues
<br>
<p>etc. We expect most of those developments to arrive over the next 6-12 months. Once that has occurred, we'll probably be close to what we would call a &quot;resilient&quot; system.
<br>
<p>Until then, we are improving, but still far from &quot;resilient&quot;.
<br>
<p><p>On Jun 24, 2011, at 10:24 AM, Ken Lloyd wrote:
<br>
<p><span class="quotelev1">&gt; Josh and Wesley,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will you be presenting Resilient ORTE at Resilience 2011 in Bordeaux?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://xcr.cenit.latech.edu/resilience2011/">http://xcr.cenit.latech.edu/resilience2011/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =====================
</span><br>
<span class="quotelev1">&gt; Kenneth A. Lloyd
</span><br>
<span class="quotelev1">&gt; CEO - Director of Systems Science
</span><br>
<span class="quotelev1">&gt; Watt Systems Technologies Inc.
</span><br>
<span class="quotelev1">&gt; www.wattsys.com
</span><br>
<span class="quotelev1">&gt; kenneth.lloyd_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This e-mail is covered by the Electronic Communications Privacy Act, 18 U.S.C. 2510-2521 and is intended only for the addressee named above. It may contain privileged or confidential information. If you are not the addressee you must not copy, distribute, disclose or use any of the information in it. If you have received it in error please delete it and immediately notify the sender.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9421/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9422.php">Ralf Wildenhues: "Re: [OMPI devel] Tarball distribution"</a>
<li><strong>Previous message:</strong> <a href="9420.php">John Esmet: "Re: [OMPI devel] Tarball distribution"</a>
<li><strong>In reply to:</strong> <a href="9410.php">Ken Lloyd: "[OMPI devel] Resilience 2011"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9424.php">Josh Hursey: "Re: [OMPI devel] Resilience 2011"</a>
<li><strong>Reply:</strong> <a href="9424.php">Josh Hursey: "Re: [OMPI devel] Resilience 2011"</a>
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
