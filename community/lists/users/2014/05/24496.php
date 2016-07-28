<?
$subject_val = "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 16:06:56 2014" -->
<!-- isoreceived="20140527200656" -->
<!-- sent="Tue, 27 May 2014 16:06:55 -0400" -->
<!-- isosent="20140527200655" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI" -->
<!-- id="5384F05F.3080104_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F3604568AA75_at_HQMAIL02.nvidia.com" -->
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
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 16:06:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24497.php">Rolf vandeVaart: "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<li><strong>Previous message:</strong> <a href="24495.php">Brock Palen: "Re: [OMPI users] mpiifort mpiicc not found"</a>
<li><strong>In reply to:</strong> <a href="24488.php">Rolf vandeVaart: "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24497.php">Rolf vandeVaart: "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<li><strong>Reply:</strong> <a href="24497.php">Rolf vandeVaart: "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Answers inline too.
<br>
<span class="quotelev2">&gt;&gt; 2) Is the absence of btl_openib_have_driver_gdr an indicator of something
</span><br>
<span class="quotelev2">&gt;&gt; missing ?
</span><br>
<span class="quotelev1">&gt; Yes, that means that somehow the GPU Direct RDMA is not installed correctly. All that check does is make sure that the file /sys/kernel/mm/memory_peers/nv_mem/version exists.  Does that exist?
</span><br>
<span class="quotelev1">&gt;
</span><br>
It does not. There is no
<br>
/sys/kernel/mm/memory_peers/
<br>
<p><span class="quotelev2">&gt;&gt; 3) Are the default parameters, especially the rdma limits and such, optimal for
</span><br>
<span class="quotelev2">&gt;&gt; our configuration ?
</span><br>
<span class="quotelev1">&gt; That is hard to say.  GPU Direct RDMA does not work well when the GPU and IB card are not &quot;close&quot; on the system. Can you run &quot;nvidia-smi topo -m&quot; on your system?
</span><br>
nvidia-smi topo -m
<br>
gives me the error
<br>
[mboisson_at_login-gpu01 ~]$ nvidia-smi topo -m
<br>
Invalid combination of input arguments. Please run 'nvidia-smi -h' for help.
<br>
<p>I could not find anything related to topology in the help. However, I 
<br>
can tell you the following which I believe to be true
<br>
- GPU0 and GPU1 are on PCIe bus 0, socket 0
<br>
- GPU2 and GPU3 are on PCIe bus 1, socket 0
<br>
- GPU4 and GPU5 are on PCIe bus 2, socket 1
<br>
- GPU6 and GPU7 are on PCIe bus 3, socket 1
<br>
<p>There is one IB card which I believe is on socket 0.
<br>
<p><p>I know that we do not have the Mellanox Ofed. We use the Linux RDMA from 
<br>
CentOS 6.5. However, should that completely disable GDR within a single 
<br>
node ? i.e. does GDR _have_ to go through IB ? I would assume that our 
<br>
lack of Mellanox OFED would result in no-GDR inter-node, but GDR intra-node.
<br>
<p><p>Thanks
<br>
<p><p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24497.php">Rolf vandeVaart: "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<li><strong>Previous message:</strong> <a href="24495.php">Brock Palen: "Re: [OMPI users] mpiifort mpiicc not found"</a>
<li><strong>In reply to:</strong> <a href="24488.php">Rolf vandeVaart: "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24497.php">Rolf vandeVaart: "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<li><strong>Reply:</strong> <a href="24497.php">Rolf vandeVaart: "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
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
