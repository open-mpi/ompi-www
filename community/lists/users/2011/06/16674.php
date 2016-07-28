<?
$subject_val = "[OMPI users] Program hangs when using OpenMPI and CUDA";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  4 18:15:45 2011" -->
<!-- isoreceived="20110604221545" -->
<!-- sent="Sat, 4 Jun 2011 18:15:39 -0400" -->
<!-- isosent="20110604221539" -->
<!-- name="Fengguang Song" -->
<!-- email="song_at_[hidden]" -->
<!-- subject="[OMPI users] Program hangs when using OpenMPI and CUDA" -->
<!-- id="715FB89F-DE41-4E9D-98BF-236A35DACC44_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Program hangs when using OpenMPI and CUDA<br>
<strong>From:</strong> Fengguang Song (<em>song_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-04 18:15:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16675.php">Brice Goglin: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<li><strong>Previous message:</strong> <a href="16673.php">amjad ali: "[OMPI users] difference between MTL and BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16675.php">Brice Goglin: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<li><strong>Reply:</strong> <a href="16675.php">Brice Goglin: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm confronting a problem when using OpenMPI 1.5.1 on a GPU cluster. My program uses MPI to exchange data
<br>
between nodes, and uses cudaMemcpyAsync to exchange data between Host and GPU devices within a node.
<br>
When the MPI message size is less than 1MB, everything works fine. However, when the message size
<br>
is &gt; 1MB, the program hangs (i.e., an MPI send never reaches its destination based on my trace).
<br>
<p>The issue may be related to locked-memory contention between OpenMPI and CUDA.
<br>
Does anyone have the experience to solve the problem? Which MCA parameters should I tune to increase 
<br>
the message size to be &gt; 1MB (to avoid the program hang)? Any help would be appreciated.
<br>
<p>Thanks,
<br>
Fengguang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16675.php">Brice Goglin: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<li><strong>Previous message:</strong> <a href="16673.php">amjad ali: "[OMPI users] difference between MTL and BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16675.php">Brice Goglin: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<li><strong>Reply:</strong> <a href="16675.php">Brice Goglin: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
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
