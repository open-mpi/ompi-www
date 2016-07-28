<?
$subject_val = "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 17 15:09:02 2015" -->
<!-- isoreceived="20150617190902" -->
<!-- sent="Wed, 17 Jun 2015 19:08:57 +0000" -->
<!-- isosent="20150617190857" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5" -->
<!-- id="d8c3678cfc4d4ee2b96200f460ef89a7_at_DRHQMAIL102.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DA43D4A8-99A3-411A-BA56-DCCACBFA2BAF_at_gmail.com" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-17 15:08:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27152.php">Fei Mao: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<li><strong>Previous message:</strong> <a href="27150.php">Mike Dubman: "Re: [OMPI users] No suitable active ports warning and -mca btl_openib_if_include option"</a>
<li><strong>In reply to:</strong> <a href="27148.php">Fei Mao: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27152.php">Fei Mao: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<li><strong>Reply:</strong> <a href="27152.php">Fei Mao: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is no short-term plan but we are always looking at ways to improve things so this could be looked at some time in the future.
<br>
<p>Rolf
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Fei Mao
<br>
Sent: Wednesday, June 17, 2015 1:48 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5
<br>
<p>Hi Rolf,
<br>
<p>Thank you very much for clarifying the problem. Is there any plan to support GPU RDMA for reduction in the future?
<br>
<p>On Jun 17, 2015, at 1:38 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&lt;mailto:rvandevaart_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Hi Fei:
<br>
<p>The reduction support for CUDA-aware in Open MPI is rather simple.  The GPU buffers are copied into temporary host buffers and then the reduction is done with the host buffers.  At the completion of the host reduction, the data is copied back into the GPU buffers.  So, there is no use of CUDA IPC or GPU Direct RDMA in the reduction.
<br>
<p>Rolf
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Fei Mao
<br>
Sent: Wednesday, June 17, 2015 1:08 PM
<br>
To: users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subject: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5
<br>
<p>Hi there,
<br>
<p>I am doing benchmarks on a GPU cluster with two CPU sockets and 4 K80 GPUs each node. Two K80 are connected with CPU socket 0, another two with socket 1. An IB ConnectX-3 (FDR) is also under socket 1. We are using Linux's OFED, so I know there is no way to do GPU RDMA inter-node communication. I can do intra-node IPC for MPI_Send and MPI_Receive with two K80 (4 GPUs in total) which are connected under same socket (PCI-e switch). So I thought I could do intra-node MPI_Reduce with IPC support in openmpi 1.8.5.
<br>
<p>The benchmark I was using is osu-micro-benchmarks-4.4.1, and I got the same results when I use two GPU under the same socket or different socket. The result was the same even I used two GPUs in different nodes.
<br>
<p>Does MPI_Reduce use IPC for intra-node? Should I have to install Mellanox OFED stack to support GPU RDMA reduction on GPUs even they are under with the same PCI-e switch?
<br>
<p>Thanks,
<br>
<p>Fei Mao
<br>
High Performance Computing Technical Consultant
<br>
SHARCNET | <a href="http://www.sharcnet.ca<http://www.sharcnet.ca/">http://www.sharcnet.ca<http://www.sharcnet.ca/</a>&gt;
<br>
Compute/Calcul Canada | <a href="http://www.computecanada.ca<http://www.computecanada.ca/">http://www.computecanada.ca<http://www.computecanada.ca/</a>&gt;
<br>
________________________________
<br>
This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
<br>
________________________________
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27147.php">http://www.open-mpi.org/community/lists/users/2015/06/27147.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27151/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27152.php">Fei Mao: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<li><strong>Previous message:</strong> <a href="27150.php">Mike Dubman: "Re: [OMPI users] No suitable active ports warning and -mca btl_openib_if_include option"</a>
<li><strong>In reply to:</strong> <a href="27148.php">Fei Mao: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27152.php">Fei Mao: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<li><strong>Reply:</strong> <a href="27152.php">Fei Mao: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
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
