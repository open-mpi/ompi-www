<?
$subject_val = "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  5 16:40:39 2015" -->
<!-- isoreceived="20151005204039" -->
<!-- sent="Mon, 5 Oct 2015 13:40:33 -0700" -->
<!-- isosent="20151005204033" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM" -->
<!-- id="58366C2E-49FE-457F-B1CF-993C8CEF5961_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5612DCD0.1030904_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-05 16:40:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27807.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Process binding with SLURM and 'heterogeneous'	nodes"</a>
<li><strong>Previous message:</strong> <a href="27805.php">marcin.krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>In reply to:</strong> <a href="27805.php">marcin.krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27809.php">tmishima_at_[hidden]: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Reply:</strong> <a href="27809.php">tmishima_at_[hidden]: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm&#226;&#128;&#166;okay, try -map-by socket:pe=4
<br>
<p>We&#226;&#128;&#153;ll still hit the asymmetric topology issue, but otherwise this should work
<br>
<p><p><span class="quotelev1">&gt; On Oct 5, 2015, at 1:25 PM, marcin.krotkiewski &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for a fast response! Sounds very good, unfortunately I get an error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun --map-by core:pe=4 ./affinity
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A request for multiple cpus-per-proc was given, but a directive
</span><br>
<span class="quotelev1">&gt; was also give to map to an object level that cannot support that
</span><br>
<span class="quotelev1">&gt; directive.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please specify a mapping level that has more than one cpu, or
</span><br>
<span class="quotelev1">&gt; else let us define a default mapping that will allow multiple
</span><br>
<span class="quotelev1">&gt; cpus-per-proc.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have allocated my slurm job as
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; salloc --ntasks=2 --cpus-per-task=4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have checked in 1.10.0 and 1.10.1rc1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/05/2015 09:58 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You would presently do:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun &#226;&#128;&#148;map-by core:pe=4
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; to get what you are seeking. If we don&#226;&#128;&#153;t already set that qualifier when we see &#226;&#128;&#156;cpus_per_task&#226;&#128;&#157;, then we probably should do so as there isn&#226;&#128;&#153;t any reason to make you set it twice (well, other than trying to track which envar slurm is using now).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 5, 2015, at 12:38 PM, marcin.krotkiewski &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yet another question about cpu binding under SLURM environment..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Short version: will OpenMPI support SLURM_CPUS_PER_TASK for the purpose of cpu binding?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Full version: When you allocate a job like, e.g., this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; salloc --ntasks=2 --cpus-per-task=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM will allocate 8 cores in total, 4 for each 'assumed' MPI tasks. This is useful for hybrid jobs, where each MPI process spawns some internal worker threads (e.g., OpenMP). The intention is that there are 2 MPI procs started, each of them 'bound' to 4 cores. SLURM will also set an environment variable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_CPUS_PER_TASK=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which should (probably?) be taken into account by the method that launches the MPI processes to figure out the cpuset. In case of OpenMPI + mpirun I think something should happen in orte/mca/ras/slurm/ras_slurm_module.c, where the variable _is_ actually parsed. Unfortunately, it is never really used...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As a result, cpuset of all tasks started on a given compute node includes all CPU cores of all MPI tasks on that node, just as provided by SLURM (in the above example - 8). In general, there is no simple way for the user code in the MPI procs to 'split' the cores between themselves. I imagine the original intention to support this in OpenMPI was something like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --bind-to subtask_cpuset
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with an artificial bind target that would cause OpenMPI to divide the allocated cores between the mpi tasks. Is this right? If so, it seems that at this point this is not implemented. Is there plans to do this? If no, does anyone know another way to achieve that?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks a lot!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27803.php">http://www.open-mpi.org/community/lists/users/2015/10/27803.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27804.php">http://www.open-mpi.org/community/lists/users/2015/10/27804.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27805.php">http://www.open-mpi.org/community/lists/users/2015/10/27805.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27807.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Process binding with SLURM and 'heterogeneous'	nodes"</a>
<li><strong>Previous message:</strong> <a href="27805.php">marcin.krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>In reply to:</strong> <a href="27805.php">marcin.krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27809.php">tmishima_at_[hidden]: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Reply:</strong> <a href="27809.php">tmishima_at_[hidden]: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
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
