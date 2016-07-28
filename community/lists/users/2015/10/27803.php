<?
$subject_val = "[OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  5 15:39:04 2015" -->
<!-- isoreceived="20151005193904" -->
<!-- sent="Mon, 5 Oct 2015 21:38:57 +0200" -->
<!-- isosent="20151005193857" -->
<!-- name="marcin.krotkiewski" -->
<!-- email="marcin.krotkiewski_at_[hidden]" -->
<!-- subject="[OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM" -->
<!-- id="5612D1D1.3080202_at_gmail.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM<br>
<strong>From:</strong> marcin.krotkiewski (<em>marcin.krotkiewski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-05 15:38:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27804.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Previous message:</strong> <a href="27802.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27804.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Reply:</strong> <a href="27804.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Reply:</strong> <a href="27812.php">Gilles Gouaillardet: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yet another question about cpu binding under SLURM environment..
<br>
<p>Short version: will OpenMPI support SLURM_CPUS_PER_TASK for the purpose 
<br>
of cpu binding?
<br>
<p><p>Full version: When you allocate a job like, e.g., this
<br>
<p>salloc --ntasks=2 --cpus-per-task=4
<br>
<p>SLURM will allocate 8 cores in total, 4 for each 'assumed' MPI tasks. 
<br>
This is useful for hybrid jobs, where each MPI process spawns some 
<br>
internal worker threads (e.g., OpenMP). The intention is that there are 
<br>
2 MPI procs started, each of them 'bound' to 4 cores. SLURM will also 
<br>
set an environment variable
<br>
<p>SLURM_CPUS_PER_TASK=4
<br>
<p>which should (probably?) be taken into account by the method that 
<br>
launches the MPI processes to figure out the cpuset. In case of OpenMPI 
<br>
+ mpirun I think something should happen in 
<br>
orte/mca/ras/slurm/ras_slurm_module.c, where the variable _is_ actually 
<br>
parsed. Unfortunately, it is never really used...
<br>
<p>As a result, cpuset of all tasks started on a given compute node 
<br>
includes all CPU cores of all MPI tasks on that node, just as provided 
<br>
by SLURM (in the above example - 8). In general, there is no simple way 
<br>
for the user code in the MPI procs to 'split' the cores between 
<br>
themselves. I imagine the original intention to support this in OpenMPI 
<br>
was something like
<br>
<p>mpirun --bind-to subtask_cpuset
<br>
<p>with an artificial bind target that would cause OpenMPI to divide the 
<br>
allocated cores between the mpi tasks. Is this right? If so, it seems 
<br>
that at this point this is not implemented. Is there plans to do this? 
<br>
If no, does anyone know another way to achieve that?
<br>
<p>Thanks a lot!
<br>
<p>Marcin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27804.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Previous message:</strong> <a href="27802.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27804.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Reply:</strong> <a href="27804.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Reply:</strong> <a href="27812.php">Gilles Gouaillardet: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
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
