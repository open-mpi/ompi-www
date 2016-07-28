<?
$subject_val = "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 17 13:47:58 2015" -->
<!-- isoreceived="20150617174758" -->
<!-- sent="Wed, 17 Jun 2015 13:47:53 -0400" -->
<!-- isosent="20150617174753" -->
<!-- name="Fei Mao" -->
<!-- email="powerreactor_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5" -->
<!-- id="DA43D4A8-99A3-411A-BA56-DCCACBFA2BAF_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="51cbd9ba879b41e0b224f010d5d4f9d9_at_DRHQMAIL102.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5<br>
<strong>From:</strong> Fei Mao (<em>powerreactor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-17 13:47:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27149.php">Na Zhang: "[OMPI users] No suitable active ports warning and -mca btl_openib_if_include option"</a>
<li><strong>Previous message:</strong> <a href="27147.php">Rolf vandeVaart: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<li><strong>In reply to:</strong> <a href="27147.php">Rolf vandeVaart: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27151.php">Rolf vandeVaart: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<li><strong>Reply:</strong> <a href="27151.php">Rolf vandeVaart: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rolf,
<br>
<p>Thank you very much for clarifying the problem. Is there any plan to support GPU RDMA for reduction in the future?
<br>
<p>On Jun 17, 2015, at 1:38 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Fei:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The reduction support for CUDA-aware in Open MPI is rather simple.  The GPU buffers are copied into temporary host buffers and then the reduction is done with the host buffers.  At the completion of the host reduction, the data is copied back into the GPU buffers.  So, there is no use of CUDA IPC or GPU Direct RDMA in the reduction.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Fei Mao
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 17, 2015 1:08 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am doing benchmarks on a GPU cluster with two CPU sockets and 4 K80 GPUs each node. Two K80 are connected with CPU socket 0, another two with socket 1. An IB ConnectX-3 (FDR) is also under socket 1. We are using Linux&#146;s OFED, so I know there is no way to do GPU RDMA inter-node communication. I can do intra-node IPC for MPI_Send and MPI_Receive with two K80 (4 GPUs in total) which are connected under same socket (PCI-e switch). So I thought I could do intra-node MPI_Reduce with IPC support in openmpi 1.8.5.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The benchmark I was using is osu-micro-benchmarks-4.4.1, and I got the same results when I use two GPU under the same socket or different socket. The result was the same even I used two GPUs in different nodes. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Does MPI_Reduce use IPC for intra-node? Should I have to install Mellanox OFED stack to support GPU RDMA reduction on GPUs even they are under with the same PCI-e switch?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Fei Mao
</span><br>
<span class="quotelev1">&gt; High Performance Computing Technical Consultant 
</span><br>
<span class="quotelev1">&gt; SHARCNET | <a href="http://www.sharcnet.ca">http://www.sharcnet.ca</a>
</span><br>
<span class="quotelev1">&gt; Compute/Calcul Canada | <a href="http://www.computecanada.ca">http://www.computecanada.ca</a>
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27147.php">http://www.open-mpi.org/community/lists/users/2015/06/27147.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27148/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27149.php">Na Zhang: "[OMPI users] No suitable active ports warning and -mca btl_openib_if_include option"</a>
<li><strong>Previous message:</strong> <a href="27147.php">Rolf vandeVaart: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<li><strong>In reply to:</strong> <a href="27147.php">Rolf vandeVaart: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27151.php">Rolf vandeVaart: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<li><strong>Reply:</strong> <a href="27151.php">Rolf vandeVaart: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
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
