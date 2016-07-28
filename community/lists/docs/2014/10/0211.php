<?
$subject_val = "Re: [OMPI docs] FAQ: GPUDirect support for MPI_PACK/MPI_UNPACK";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 10:48:23 2014" -->
<!-- isoreceived="20141003144823" -->
<!-- sent="Fri, 3 Oct 2014 14:48:21 +0000" -->
<!-- isosent="20141003144821" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] FAQ: GPUDirect support for MPI_PACK/MPI_UNPACK" -->
<!-- id="02BD72C6-7B27-463D-8CE3-536A3ED793BA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="542EB5D4.1080904_at_nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI docs] FAQ: GPUDirect support for MPI_PACK/MPI_UNPACK<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 10:48:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2015/01/0212.php">Alexander Pozdneev: "[OMPI docs] Possible outdated documentation on MPI_Isend()"</a>
<li><strong>Previous message:</strong> <a href="0210.php">Carl Ponder: "[OMPI docs] FAQ: GPUDirect support for MPI_PACK/MPI_UNPACK"</a>
<li><strong>In reply to:</strong> <a href="0210.php">Carl Ponder: "[OMPI docs] FAQ: GPUDirect support for MPI_PACK/MPI_UNPACK"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adding Rolf vandeVaart, OMPI's NVIDIA rep.  He can help you out.
<br>
<p><p>On Oct 3, 2014, at 10:42 AM, Carl Ponder &lt;cponder_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have a GPUDirect test-case that appears to work correctly with OpenMPI 1.8.2 and CUDA 6.5.
</span><br>
<span class="quotelev1">&gt; It uses MPI_BCAST plus MPI_PACK &amp; MPI_UNPACK with GPU-located data, programmed in OpenACC with PGI 14.9.
</span><br>
<span class="quotelev1">&gt; The OpenMPI FAQ entry
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=all#mpi-cuda-support">http://www.open-mpi.org/faq/?category=all#mpi-cuda-support</a>
</span><br>
<span class="quotelev1">&gt; states that
</span><br>
<span class="quotelev1">&gt; Here is the list of APIs that currently support sending and receiving CUDA device memory.
</span><br>
<span class="quotelev1">&gt; MPI_Send, MPI_Bsend, MPI_Ssend, MPI_Rsend, MPI_Isend, MPI_Ibsend, MPI_Issend, MPI_Irsend, MPI_Send_init, MPI_Bsend_init, MPI_Ssend_init, MPI_Rsend_init, MPI_Recv, MPI_Irecv, MPI_Recv_init, MPI_Sendrecv, MPI_Bcast, MPI_Gather, MPI_Gatherv, MPI_Allgather, MPI_Allgatherv, MPI_Alltoall, MPI_Alltoallv, MPI_Scatter, MPI_Scatterv
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; implying that the MPI_PACK &amp; MPI_UNPACK aren't supported, but the FAQ also only references OpenMPI up to 1.7.4 and CUDA up to 6.0.
</span><br>
<span class="quotelev1">&gt; Are these MPI_PACK &amp; MPI_UNPACK supported with the OpenMPI 1.8.* releases?
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 Carl Ponder
</span><br>
<span class="quotelev1">&gt;                 HPC Applications Performance
</span><br>
<span class="quotelev1">&gt;                 NVIDIA Developer Technology
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/docs/2014/10/0211.php">http://www.open-mpi.org/community/lists/docs/2014/10/0211.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2015/01/0212.php">Alexander Pozdneev: "[OMPI docs] Possible outdated documentation on MPI_Isend()"</a>
<li><strong>Previous message:</strong> <a href="0210.php">Carl Ponder: "[OMPI docs] FAQ: GPUDirect support for MPI_PACK/MPI_UNPACK"</a>
<li><strong>In reply to:</strong> <a href="0210.php">Carl Ponder: "[OMPI docs] FAQ: GPUDirect support for MPI_PACK/MPI_UNPACK"</a>
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
