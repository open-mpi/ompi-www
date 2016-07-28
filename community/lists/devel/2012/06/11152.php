<?
$subject_val = "Re: [OMPI devel] bug in r26626";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 22 10:22:19 2012" -->
<!-- isoreceived="20120622142219" -->
<!-- sent="Fri, 22 Jun 2012 14:22:12 +0000" -->
<!-- isosent="20120622142212" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in r26626" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D71516FEFEFF_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FE46D9B.9050402_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bug in r26626<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-22 10:22:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11153.php">Eugene Loh: "Re: [OMPI devel] bug in r26626"</a>
<li><strong>Previous message:</strong> <a href="11151.php">TERRY DONTJE: "[OMPI devel] bug in r26626"</a>
<li><strong>In reply to:</strong> <a href="11151.php">TERRY DONTJE: "[OMPI devel] bug in r26626"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11153.php">Eugene Loh: "Re: [OMPI devel] bug in r26626"</a>
<li><strong>Reply:</strong> <a href="11153.php">Eugene Loh: "Re: [OMPI devel] bug in r26626"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like I missed a few places in udapl and osc. Fixed with r26635 and r26634. Hopefully thats the last of them outside of btl/vw.
<br>
<p>-Nathan
<br>
<p>On Friday, June 22, 2012 7:05 AM, TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; To: Open MPI Developers; Hjelm, Nathan T
</span><br>
<span class="quotelev1">&gt; Subject: bug in r26626
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like compilation of 32 bit platforms is failing due to a missing field.  It looks to me that for some reason r26626 deleted hdr_segkey in ompi/mca/osc/rdma/osc_rdma_header.h which is used in the macro OMPI_OSC_RDMA_RDMA_INFO_HDR_NTOH and HTON.  Is there a reason that hdr_segkey was removed, if so more changes are needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]&lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11153.php">Eugene Loh: "Re: [OMPI devel] bug in r26626"</a>
<li><strong>Previous message:</strong> <a href="11151.php">TERRY DONTJE: "[OMPI devel] bug in r26626"</a>
<li><strong>In reply to:</strong> <a href="11151.php">TERRY DONTJE: "[OMPI devel] bug in r26626"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11153.php">Eugene Loh: "Re: [OMPI devel] bug in r26626"</a>
<li><strong>Reply:</strong> <a href="11153.php">Eugene Loh: "Re: [OMPI devel] bug in r26626"</a>
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
