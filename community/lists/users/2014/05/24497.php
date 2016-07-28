<?
$subject_val = "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 16:40:58 2014" -->
<!-- isoreceived="20140527204058" -->
<!-- sent="Tue, 27 May 2014 13:40:55 -0700" -->
<!-- isosent="20140527204055" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3604568AC00_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5384F05F.3080104_at_calculquebec.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 16:40:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24498.php">Alain Miniussi: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Previous message:</strong> <a href="24496.php">Maxime Boissonneault: "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<li><strong>In reply to:</strong> <a href="24496.php">Maxime Boissonneault: "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Maxime
</span><br>
<span class="quotelev1">&gt;Boissonneault
</span><br>
<span class="quotelev1">&gt;Sent: Tuesday, May 27, 2014 4:07 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Answers inline too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) Is the absence of btl_openib_have_driver_gdr an indicator of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something missing ?
</span><br>
<span class="quotelev2">&gt;&gt; Yes, that means that somehow the GPU Direct RDMA is not installed
</span><br>
<span class="quotelev1">&gt;correctly. All that check does is make sure that the file
</span><br>
<span class="quotelev1">&gt;/sys/kernel/mm/memory_peers/nv_mem/version exists.  Does that exist?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;It does not. There is no
</span><br>
<span class="quotelev1">&gt;/sys/kernel/mm/memory_peers/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) Are the default parameters, especially the rdma limits and such,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; optimal for our configuration ?
</span><br>
<span class="quotelev2">&gt;&gt; That is hard to say.  GPU Direct RDMA does not work well when the GPU
</span><br>
<span class="quotelev1">&gt;and IB card are not &quot;close&quot; on the system. Can you run &quot;nvidia-smi topo -m&quot;
</span><br>
<span class="quotelev1">&gt;on your system?
</span><br>
<span class="quotelev1">&gt;nvidia-smi topo -m
</span><br>
<span class="quotelev1">&gt;gives me the error
</span><br>
<span class="quotelev1">&gt;[mboisson_at_login-gpu01 ~]$ nvidia-smi topo -m Invalid combination of input
</span><br>
<span class="quotelev1">&gt;arguments. Please run 'nvidia-smi -h' for help.
</span><br>
Sorry, my mistake.  That may be a future feature.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I could not find anything related to topology in the help. However, I can tell
</span><br>
<span class="quotelev1">&gt;you the following which I believe to be true
</span><br>
<span class="quotelev1">&gt;- GPU0 and GPU1 are on PCIe bus 0, socket 0
</span><br>
<span class="quotelev1">&gt;- GPU2 and GPU3 are on PCIe bus 1, socket 0
</span><br>
<span class="quotelev1">&gt;- GPU4 and GPU5 are on PCIe bus 2, socket 1
</span><br>
<span class="quotelev1">&gt;- GPU6 and GPU7 are on PCIe bus 3, socket 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;There is one IB card which I believe is on socket 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I know that we do not have the Mellanox Ofed. We use the Linux RDMA from
</span><br>
<span class="quotelev1">&gt;CentOS 6.5. However, should that completely disable GDR within a single
</span><br>
<span class="quotelev1">&gt;node ? i.e. does GDR _have_ to go through IB ? I would assume that our lack
</span><br>
<span class="quotelev1">&gt;of Mellanox OFED would result in no-GDR inter-node, but GDR intra-node.
</span><br>
<p>Without Mellanox OFED, then GPU Direct RDMA is unavailable.  However, the term GPU Direct is a somewhat overloaded term and I think that is where I was getting confused.  GPU Direct (also known as CUDA IPC) will work between GPUs that do not cross a QPI connection.  That means that I believe GPU0,1,2,3 should be able to use GPU Direct between them and GPU4,5,6,7 can also between them.   In this case, this means that GPU memory does not need to get staged through host memory for transferring between the GPUs.  With Open MPI, there is a mca parameter you can set that will allow you to see whether GPU Direct is being used between the GPUs.
<br>
<p>--mca btl_smcuda_cuda_ipc_verbose 100
<br>
<p>&nbsp;Rolf
<br>
<p>-----------------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="24498.php">Alain Miniussi: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Previous message:</strong> <a href="24496.php">Maxime Boissonneault: "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<li><strong>In reply to:</strong> <a href="24496.php">Maxime Boissonneault: "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
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
