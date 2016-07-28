<?
$subject_val = "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  6 02:01:53 2015" -->
<!-- isoreceived="20151006060153" -->
<!-- sent="Tue, 6 Oct 2015 15:01:43 +0900" -->
<!-- isosent="20151006060143" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM" -->
<!-- id="561363C7.2050904_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5612D1D1.3080202_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-06 02:01:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27813.php">Dimitar Pashov: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.10.1rc1 release"</a>
<li><strong>Previous message:</strong> <a href="27811.php">tmishima_at_[hidden]: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>In reply to:</strong> <a href="27803.php">marcin.krotkiewski: "[OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27818.php">marcin.krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Reply:</strong> <a href="27818.php">marcin.krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Marcin,
<br>
<p>did you investigate direct launch (e.g. srun) instead of mpirun ?
<br>
<p>for example, you can do
<br>
srun --ntasks=2 --cpus-per-task=4 -l grep Cpus_allowed_list 
<br>
/proc/self/status
<br>
<p>note, you might have to use the srun --cpu_bind option, and make sure 
<br>
your slurm config does support that :
<br>
srun --ntasks=2 --cpus-per-task=4 --cpu_bind=core,verbose -l grep 
<br>
Cpus_allowed_list /proc/self/status
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 10/6/2015 4:38 AM, marcin.krotkiewski wrote:
<br>
<span class="quotelev1">&gt; Yet another question about cpu binding under SLURM environment..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Short version: will OpenMPI support SLURM_CPUS_PER_TASK for the 
</span><br>
<span class="quotelev1">&gt; purpose of cpu binding?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Full version: When you allocate a job like, e.g., this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; salloc --ntasks=2 --cpus-per-task=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM will allocate 8 cores in total, 4 for each 'assumed' MPI tasks. 
</span><br>
<span class="quotelev1">&gt; This is useful for hybrid jobs, where each MPI process spawns some 
</span><br>
<span class="quotelev1">&gt; internal worker threads (e.g., OpenMP). The intention is that there 
</span><br>
<span class="quotelev1">&gt; are 2 MPI procs started, each of them 'bound' to 4 cores. SLURM will 
</span><br>
<span class="quotelev1">&gt; also set an environment variable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_CPUS_PER_TASK=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which should (probably?) be taken into account by the method that 
</span><br>
<span class="quotelev1">&gt; launches the MPI processes to figure out the cpuset. In case of 
</span><br>
<span class="quotelev1">&gt; OpenMPI + mpirun I think something should happen in 
</span><br>
<span class="quotelev1">&gt; orte/mca/ras/slurm/ras_slurm_module.c, where the variable _is_ 
</span><br>
<span class="quotelev1">&gt; actually parsed. Unfortunately, it is never really used...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a result, cpuset of all tasks started on a given compute node 
</span><br>
<span class="quotelev1">&gt; includes all CPU cores of all MPI tasks on that node, just as provided 
</span><br>
<span class="quotelev1">&gt; by SLURM (in the above example - 8). In general, there is no simple 
</span><br>
<span class="quotelev1">&gt; way for the user code in the MPI procs to 'split' the cores between 
</span><br>
<span class="quotelev1">&gt; themselves. I imagine the original intention to support this in 
</span><br>
<span class="quotelev1">&gt; OpenMPI was something like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --bind-to subtask_cpuset
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with an artificial bind target that would cause OpenMPI to divide the 
</span><br>
<span class="quotelev1">&gt; allocated cores between the mpi tasks. Is this right? If so, it seems 
</span><br>
<span class="quotelev1">&gt; that at this point this is not implemented. Is there plans to do this? 
</span><br>
<span class="quotelev1">&gt; If no, does anyone know another way to achieve that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marcin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27803.php">http://www.open-mpi.org/community/lists/users/2015/10/27803.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27813.php">Dimitar Pashov: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.10.1rc1 release"</a>
<li><strong>Previous message:</strong> <a href="27811.php">tmishima_at_[hidden]: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>In reply to:</strong> <a href="27803.php">marcin.krotkiewski: "[OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27818.php">marcin.krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Reply:</strong> <a href="27818.php">marcin.krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
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
