<?
$subject_val = "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  6 14:57:13 2015" -->
<!-- isoreceived="20151006185713" -->
<!-- sent="Tue, 6 Oct 2015 20:57:08 +0200" -->
<!-- isosent="20151006185708" -->
<!-- name="marcin.krotkiewski" -->
<!-- email="marcin.krotkiewski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM" -->
<!-- id="56141984.8020602_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="561363C7.2050904_at_rist.or.jp" -->
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
<strong>From:</strong> marcin.krotkiewski (<em>marcin.krotkiewski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-06 14:57:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27819.php">Hector E Barrios Molano: "[OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
<li><strong>Previous message:</strong> <a href="27817.php">marcin.krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>In reply to:</strong> <a href="27812.php">Gilles Gouaillardet: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27820.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Reply:</strong> <a href="27820.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Gilles. This is a good suggestion and I will pursue this 
<br>
direction. The problem is that currently SLURM does not support 
<br>
--cpu_bind on my system for whatever reasons. I may work towards turning 
<br>
this option on if that will be necessary, but it would also be good to 
<br>
be able to do it with pure openmpi..
<br>
<p>Marcin
<br>
<p><p>On 10/06/2015 08:01 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Marcin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; did you investigate direct launch (e.g. srun) instead of mpirun ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for example, you can do
</span><br>
<span class="quotelev1">&gt; srun --ntasks=2 --cpus-per-task=4 -l grep Cpus_allowed_list 
</span><br>
<span class="quotelev1">&gt; /proc/self/status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; note, you might have to use the srun --cpu_bind option, and make sure 
</span><br>
<span class="quotelev1">&gt; your slurm config does support that :
</span><br>
<span class="quotelev1">&gt; srun --ntasks=2 --cpus-per-task=4 --cpu_bind=core,verbose -l grep 
</span><br>
<span class="quotelev1">&gt; Cpus_allowed_list /proc/self/status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/6/2015 4:38 AM, marcin.krotkiewski wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yet another question about cpu binding under SLURM environment..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Short version: will OpenMPI support SLURM_CPUS_PER_TASK for the 
</span><br>
<span class="quotelev2">&gt;&gt; purpose of cpu binding?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Full version: When you allocate a job like, e.g., this
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; salloc --ntasks=2 --cpus-per-task=4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SLURM will allocate 8 cores in total, 4 for each 'assumed' MPI tasks. 
</span><br>
<span class="quotelev2">&gt;&gt; This is useful for hybrid jobs, where each MPI process spawns some 
</span><br>
<span class="quotelev2">&gt;&gt; internal worker threads (e.g., OpenMP). The intention is that there 
</span><br>
<span class="quotelev2">&gt;&gt; are 2 MPI procs started, each of them 'bound' to 4 cores. SLURM will 
</span><br>
<span class="quotelev2">&gt;&gt; also set an environment variable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_CPUS_PER_TASK=4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which should (probably?) be taken into account by the method that 
</span><br>
<span class="quotelev2">&gt;&gt; launches the MPI processes to figure out the cpuset. In case of 
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI + mpirun I think something should happen in 
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/ras/slurm/ras_slurm_module.c, where the variable _is_ 
</span><br>
<span class="quotelev2">&gt;&gt; actually parsed. Unfortunately, it is never really used...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As a result, cpuset of all tasks started on a given compute node 
</span><br>
<span class="quotelev2">&gt;&gt; includes all CPU cores of all MPI tasks on that node, just as 
</span><br>
<span class="quotelev2">&gt;&gt; provided by SLURM (in the above example - 8). In general, there is no 
</span><br>
<span class="quotelev2">&gt;&gt; simple way for the user code in the MPI procs to 'split' the cores 
</span><br>
<span class="quotelev2">&gt;&gt; between themselves. I imagine the original intention to support this 
</span><br>
<span class="quotelev2">&gt;&gt; in OpenMPI was something like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --bind-to subtask_cpuset
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; with an artificial bind target that would cause OpenMPI to divide the 
</span><br>
<span class="quotelev2">&gt;&gt; allocated cores between the mpi tasks. Is this right? If so, it seems 
</span><br>
<span class="quotelev2">&gt;&gt; that at this point this is not implemented. Is there plans to do 
</span><br>
<span class="quotelev2">&gt;&gt; this? If no, does anyone know another way to achieve that?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Marcin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27803.php">http://www.open-mpi.org/community/lists/users/2015/10/27803.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27812.php">http://www.open-mpi.org/community/lists/users/2015/10/27812.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27819.php">Hector E Barrios Molano: "[OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
<li><strong>Previous message:</strong> <a href="27817.php">marcin.krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>In reply to:</strong> <a href="27812.php">Gilles Gouaillardet: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27820.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Reply:</strong> <a href="27820.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
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
