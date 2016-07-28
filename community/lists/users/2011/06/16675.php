<?
$subject_val = "Re: [OMPI users] Program hangs when using OpenMPI and CUDA";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  5 02:21:03 2011" -->
<!-- isoreceived="20110605062103" -->
<!-- sent="Sun, 05 Jun 2011 08:20:54 +0200" -->
<!-- isosent="20110605062054" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program hangs when using OpenMPI and CUDA" -->
<!-- id="4DEB2046.1050903_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="715FB89F-DE41-4E9D-98BF-236A35DACC44_at_eecs.utk.edu" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-05 02:20:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16676.php">Fengguang Song: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<li><strong>Previous message:</strong> <a href="16674.php">Fengguang Song: "[OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<li><strong>In reply to:</strong> <a href="16674.php">Fengguang Song: "[OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16676.php">Fengguang Song: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<li><strong>Reply:</strong> <a href="16676.php">Fengguang Song: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 05/06/2011 00:15, Fengguang Song a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm confronting a problem when using OpenMPI 1.5.1 on a GPU cluster. My program uses MPI to exchange data
</span><br>
<span class="quotelev1">&gt; between nodes, and uses cudaMemcpyAsync to exchange data between Host and GPU devices within a node.
</span><br>
<span class="quotelev1">&gt; When the MPI message size is less than 1MB, everything works fine. However, when the message size
</span><br>
<span class="quotelev1">&gt; is &gt; 1MB, the program hangs (i.e., an MPI send never reaches its destination based on my trace).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The issue may be related to locked-memory contention between OpenMPI and CUDA.
</span><br>
<span class="quotelev1">&gt; Does anyone have the experience to solve the problem? Which MCA parameters should I tune to increase 
</span><br>
<span class="quotelev1">&gt; the message size to be &gt; 1MB (to avoid the program hang)? Any help would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Fengguang
</span><br>
<p>Hello,
<br>
<p>I may have seen the same problem when testing GPU direct. Do you use the
<br>
same host buffer for copying from/to GPU and for sending/receiving on
<br>
the network ? If so, you need a GPUDirect enabled kernel and mellanox
<br>
drivers, but it only helps before 1MB.
<br>
<p>You can work around the problem with one of the following solution:
<br>
* add --mca btl_openib_flags 304 to force OMPI to always send/recv
<br>
through an intermediate (internal buffer), but it'll decrease
<br>
performance before 1MB too
<br>
* use different host buffers for the GPU and the network and manually
<br>
copy between them
<br>
<p>I never got any reply from NVIDIA/Mellanox/here when I reported this
<br>
problem with GPUDirect and messages larger than 1MB.
<br>
<a href="http://www.open-mpi.org/community/lists/users/2011/03/15823.php">http://www.open-mpi.org/community/lists/users/2011/03/15823.php</a>
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16676.php">Fengguang Song: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<li><strong>Previous message:</strong> <a href="16674.php">Fengguang Song: "[OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<li><strong>In reply to:</strong> <a href="16674.php">Fengguang Song: "[OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16676.php">Fengguang Song: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<li><strong>Reply:</strong> <a href="16676.php">Fengguang Song: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
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
