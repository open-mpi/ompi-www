<?
$subject_val = "Re: [OMPI devel] RDMA with non-contiguous payload";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  4 10:37:57 2012" -->
<!-- isoreceived="20120104153757" -->
<!-- sent="Wed, 4 Jan 2012 07:37:50 -0800" -->
<!-- isosent="20120104153750" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RDMA with non-contiguous payload" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F34C097355D9_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="33C7E8D5-EC68-4E0F-9C44-3352897EECD6_at_grs-sim.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RDMA with non-contiguous payload<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-04 10:37:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10207.php">Kawashima: "[OMPI devel] [patch] One-sided communication with derived datatype fails on sparc64"</a>
<li><strong>Previous message:</strong> <a href="10205.php">Sebastian Rinke: "[OMPI devel] RDMA with non-contiguous payload"</a>
<li><strong>In reply to:</strong> <a href="10205.php">Sebastian Rinke: "[OMPI devel] RDMA with non-contiguous payload"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your observations are correct.  If the payload is non-contiguous, then RDMA is not used.  The data has to be copied first into an intermediate buffer and then sent.
<br>
This has not changed in later version of Open MPI.
<br>
<p>Rolf  
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Sebastian Rinke
</span><br>
<span class="quotelev1">&gt;Sent: Wednesday, January 04, 2012 10:01 AM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI devel] RDMA with non-contiguous payload
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Playing around with GPUDirect v1 and Infiniband I noticed that once the
</span><br>
<span class="quotelev1">&gt;payload is non-contiguous no RDMA is used at all.
</span><br>
<span class="quotelev1">&gt;Can anybody confirm this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm using Open MPI  1.4.3. If the above is true, has this behavior changed with
</span><br>
<span class="quotelev1">&gt;later versions of Open MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks a lot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Best,
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
<li><strong>Next message:</strong> <a href="10207.php">Kawashima: "[OMPI devel] [patch] One-sided communication with derived datatype fails on sparc64"</a>
<li><strong>Previous message:</strong> <a href="10205.php">Sebastian Rinke: "[OMPI devel] RDMA with non-contiguous payload"</a>
<li><strong>In reply to:</strong> <a href="10205.php">Sebastian Rinke: "[OMPI devel] RDMA with non-contiguous payload"</a>
<!-- nextthread="start" -->
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
