<?
$subject_val = "Re: [OMPI devel] GPUDirect v1 issues";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 17 10:02:31 2012" -->
<!-- isoreceived="20120117150231" -->
<!-- sent="Tue, 17 Jan 2012 06:53:56 -0800" -->
<!-- isosent="20120117145356" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GPUDirect v1 issues" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F34C09AC776B_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1C765AD9-82A1-4B90-A7CA-0893A1654CF6_at_grs-sim.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] GPUDirect v1 issues<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-17 09:53:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10218.php">Kenneth A. Lloyd: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Previous message:</strong> <a href="10216.php">Sebastian Rinke: "[OMPI devel] GPUDirect v1 issues"</a>
<li><strong>In reply to:</strong> <a href="10216.php">Sebastian Rinke: "[OMPI devel] GPUDirect v1 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10218.php">Kenneth A. Lloyd: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Reply:</strong> <a href="10218.php">Kenneth A. Lloyd: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not aware of any issues.  Can you send me a test program and I can try it out?
<br>
Which version of CUDA are you using?
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Sebastian Rinke
</span><br>
<span class="quotelev1">&gt;Sent: Tuesday, January 17, 2012 8:50 AM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI devel] GPUDirect v1 issues
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm using GPUDirect v1 with Open MPI 1.4.3 and experience blocking
</span><br>
<span class="quotelev1">&gt;MPI_SEND/RECV to block forever.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;For two subsequent MPI_RECV, it hangs if the recv buffer pointer of the
</span><br>
<span class="quotelev1">&gt;second recv points to somewhere, i.e. not at the beginning, in the recv buffer
</span><br>
<span class="quotelev1">&gt;(previously allocated with cudaMallocHost()).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I tried the same with MVAPICH2 and did not see the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Does anybody know about issues with GPUDirect v1 using Open MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks for your help,
</span><br>
<span class="quotelev1">&gt;Sebastian
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10218.php">Kenneth A. Lloyd: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Previous message:</strong> <a href="10216.php">Sebastian Rinke: "[OMPI devel] GPUDirect v1 issues"</a>
<li><strong>In reply to:</strong> <a href="10216.php">Sebastian Rinke: "[OMPI devel] GPUDirect v1 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10218.php">Kenneth A. Lloyd: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Reply:</strong> <a href="10218.php">Kenneth A. Lloyd: "Re: [OMPI devel] GPUDirect v1 issues"</a>
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
