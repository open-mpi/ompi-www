<?
$subject_val = "[OMPI users] Hybrid OpenMPI / OpenMP programming";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 05:08:15 2012" -->
<!-- isoreceived="20120229100815" -->
<!-- sent="Wed, 29 Feb 2012 11:08:09 +0100" -->
<!-- isosent="20120229100809" -->
<!-- name="Auclair Francis" -->
<!-- email="francis.auclair_at_[hidden]" -->
<!-- subject="[OMPI users] Hybrid OpenMPI / OpenMP programming" -->
<!-- id="4F4DF909.4070400_at_aero.obs-mip.fr" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Hybrid OpenMPI / OpenMP programming<br>
<strong>From:</strong> Auclair Francis (<em>francis.auclair_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 05:08:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18591.php">adrian sabou: "[OMPI users] Drastic OpenMPI performance reduction when message exeeds 128 KB"</a>
<li><strong>Previous message:</strong> <a href="18589.php">Muhammad Wahaj Sethi: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18623.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<li><strong>Reply:</strong> <a href="18623.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open-MPI users,
<br>
<p>Our code is currently running Open-MPI (1.5.4) with SLURM on a NUMA 
<br>
machine (2 sockets by nodes and 4 cores by socket) with basically two
<br>
levels of implementation for Open-MPI:
<br>
- at lower level n &quot;Master&quot; MPI-processes (one by socket) are
<br>
simultaneously runned by dividing classically the physical domain into n
<br>
sub-domains
<br>
- while at higher level 4n MPI-processes are spawn to run a sparse 
<br>
Poisson solver.
<br>
At each time step, the code is thus going back and forth between these 
<br>
two levels of implementation using two MPI communicators. This also 
<br>
means that during about half of the computation time, 3n cores are at 
<br>
best sleeping (if not 'waiting' at a barrier) when not inside &quot;Solver 
<br>
routines&quot;. We consequently decided to implement OpenMP functionality in 
<br>
our code when solver was not running (we declare one single &quot;parallel&quot; 
<br>
region and use the omp &quot;master&quot; command when OpenMP threads are not 
<br>
active). We however face several difficulties:
<br>
<p>a) It seems that both the 3n-MPI processes and the OpenMP threads 
<br>
'consume processor cycles while waiting'. We consequently tried: mpirun
<br>
-mpi_yield_when_idle 1 &#194;&#133; , export OMP_WAIT_POLICY=passive or export
<br>
KMP_BLOCKTIME=0 ... The latest finally leads to an interesting reduction
<br>
of computing time but worsens the second problem we have to face (see
<br>
bellow).
<br>
<p>b) We managed to have a &quot;correct&quot; (?) implementation of our MPI-processes
<br>
on our sockets by using: mpirun -bind-to-socket -bysocket -np 4n &#194;&#133;
<br>
However if OpenMP threads initially seem to scatter on each socket (one
<br>
thread by core) they slowly migrate to the same core as their 'Master 
<br>
MPI process' or gather on one or two cores by socket&#194;&#133; We play around 
<br>
with the environment variable KMP_AFFINITY but the best we could obtain 
<br>
was a pinning of the OpenMP threads to their own core... disorganizing 
<br>
at the same time the implementation of the 4n Level-2 MPI processes. 
<br>
When added, neither the specification of a rankfile nor the mpirun 
<br>
option -x IPATH_NO_CPUAFFINITY=1 seem to change significantly the situation.
<br>
This comportment looks rather inefficient but so far we did not manage 
<br>
to prevent the migration of the 4 threads to at most a couple of cores !
<br>
<p>Is there something wrong in our &quot;Hybrid&quot; implementation?
<br>
Do you have any advices?
<br>
Thanks for your help,
<br>
Francis
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18591.php">adrian sabou: "[OMPI users] Drastic OpenMPI performance reduction when message exeeds 128 KB"</a>
<li><strong>Previous message:</strong> <a href="18589.php">Muhammad Wahaj Sethi: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18623.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<li><strong>Reply:</strong> <a href="18623.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
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
