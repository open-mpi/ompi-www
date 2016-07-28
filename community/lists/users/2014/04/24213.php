<?
$subject_val = "[OMPI users] probable bug in 1.9a1r31409";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 08:25:50 2014" -->
<!-- isoreceived="20140416122550" -->
<!-- sent="Wed, 16 Apr 2014 14:25:43 +0200" -->
<!-- isosent="20140416122543" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] probable bug in 1.9a1r31409" -->
<!-- id="534E76C7.3060504_at_hpc2n.umu.se" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] probable bug in 1.9a1r31409<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-16 08:25:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24214.php">Muhammad Ansar Javed: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Previous message:</strong> <a href="24212.php">Victor Vysotskiy: "[OMPI users] FW:  Performance issue of mpirun/mpi_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24217.php">흆e Sandgren: "Re: [OMPI users] probable bug in 1.9a1r31409"</a>
<li><strong>Reply:</strong> <a href="24217.php">흆e Sandgren: "Re: [OMPI users] probable bug in 1.9a1r31409"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>Found this problem when building r31409 with Pathscale 5.0
<br>
<p>pshmem_barrier.c:81:6: error: redeclaration of 'pshmem_barrier_all' must 
<br>
have the 'overloadable' attribute
<br>
void shmem_barrier_all(void)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../oshmem/shmem/c/profile/defines.h:193:37: note: expanded from 
<br>
macro 'shmem_barrier_all'
<br>
#define shmem_barrier_all           pshmem_barrier_all
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pshmem_barrier.c:78:14: note: previous overload of function is here
<br>
#pragma weak shmem_barrier_all = pshmem_barrier_all
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../oshmem/shmem/c/profile/defines.h:193:37: note: expanded from 
<br>
macro 'shmem_barrier_all'
<br>
#define shmem_barrier_all           pshmem_barrier_all
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pragma weak and define clashing...
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90-580 14
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24214.php">Muhammad Ansar Javed: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Previous message:</strong> <a href="24212.php">Victor Vysotskiy: "[OMPI users] FW:  Performance issue of mpirun/mpi_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24217.php">흆e Sandgren: "Re: [OMPI users] probable bug in 1.9a1r31409"</a>
<li><strong>Reply:</strong> <a href="24217.php">흆e Sandgren: "Re: [OMPI users] probable bug in 1.9a1r31409"</a>
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
