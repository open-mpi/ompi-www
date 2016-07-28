<?
$subject_val = "Re: [OMPI users] Program hangs when using OpenMPI and CUDA";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  5 09:54:03 2011" -->
<!-- isoreceived="20110605135403" -->
<!-- sent="Sun, 5 Jun 2011 09:53:58 -0400" -->
<!-- isosent="20110605135358" -->
<!-- name="Fengguang Song" -->
<!-- email="song_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program hangs when using OpenMPI and CUDA" -->
<!-- id="4ED38514-6A56-4BB4-8FF7-6232AF68886A_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4DEB2046.1050903_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program hangs when using OpenMPI and CUDA<br>
<strong>From:</strong> Fengguang Song (<em>song_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-05 09:53:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16677.php">Marcin Zielinski: "Re: [OMPI users] running MPI application and using C/R OpenMPI 1.5.3"</a>
<li><strong>Previous message:</strong> <a href="16675.php">Brice Goglin: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<li><strong>In reply to:</strong> <a href="16675.php">Brice Goglin: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16680.php">Rolf vandeVaart: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<li><strong>Reply:</strong> <a href="16680.php">Rolf vandeVaart: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>Thank you! I saw your previous discussion and actually have tried &quot;--mca btl_openib_flags 304&quot;.
<br>
It didn't solve the problem unfortunately. In our case, the MPI buffer is different from the cudaMemcpy
<br>
buffer and we do manually copy between them. I'm still trying to figure out how to configure OpenMPI's mca 
<br>
parameters to solve the problem...
<br>
<p>Thanks,
<br>
Fengguang
<br>
<p><p>On Jun 5, 2011, at 2:20 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 05/06/2011 00:15, Fengguang Song a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm confronting a problem when using OpenMPI 1.5.1 on a GPU cluster. My program uses MPI to exchange data
</span><br>
<span class="quotelev2">&gt;&gt; between nodes, and uses cudaMemcpyAsync to exchange data between Host and GPU devices within a node.
</span><br>
<span class="quotelev2">&gt;&gt; When the MPI message size is less than 1MB, everything works fine. However, when the message size
</span><br>
<span class="quotelev2">&gt;&gt; is &gt; 1MB, the program hangs (i.e., an MPI send never reaches its destination based on my trace).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The issue may be related to locked-memory contention between OpenMPI and CUDA.
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone have the experience to solve the problem? Which MCA parameters should I tune to increase 
</span><br>
<span class="quotelev2">&gt;&gt; the message size to be &gt; 1MB (to avoid the program hang)? Any help would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Fengguang
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I may have seen the same problem when testing GPU direct. Do you use the
</span><br>
<span class="quotelev1">&gt; same host buffer for copying from/to GPU and for sending/receiving on
</span><br>
<span class="quotelev1">&gt; the network ? If so, you need a GPUDirect enabled kernel and mellanox
</span><br>
<span class="quotelev1">&gt; drivers, but it only helps before 1MB.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can work around the problem with one of the following solution:
</span><br>
<span class="quotelev1">&gt; * add --mca btl_openib_flags 304 to force OMPI to always send/recv
</span><br>
<span class="quotelev1">&gt; through an intermediate (internal buffer), but it'll decrease
</span><br>
<span class="quotelev1">&gt; performance before 1MB too
</span><br>
<span class="quotelev1">&gt; * use different host buffers for the GPU and the network and manually
</span><br>
<span class="quotelev1">&gt; copy between them
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I never got any reply from NVIDIA/Mellanox/here when I reported this
</span><br>
<span class="quotelev1">&gt; problem with GPUDirect and messages larger than 1MB.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2011/03/15823.php">http://www.open-mpi.org/community/lists/users/2011/03/15823.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16677.php">Marcin Zielinski: "Re: [OMPI users] running MPI application and using C/R OpenMPI 1.5.3"</a>
<li><strong>Previous message:</strong> <a href="16675.php">Brice Goglin: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<li><strong>In reply to:</strong> <a href="16675.php">Brice Goglin: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16680.php">Rolf vandeVaart: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<li><strong>Reply:</strong> <a href="16680.php">Rolf vandeVaart: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
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
