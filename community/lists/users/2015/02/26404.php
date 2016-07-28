<?
$subject_val = "Re: [OMPI users] using MPI_Comm_spawn in OpenMPI 1.8.4 with SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 09:44:22 2015" -->
<!-- isoreceived="20150226144422" -->
<!-- sent="Thu, 26 Feb 2015 06:44:18 -0800" -->
<!-- isosent="20150226144418" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using MPI_Comm_spawn in OpenMPI 1.8.4 with SLURM" -->
<!-- id="A978F1AF-A6B7-4805-8C42-B82DE51931E9_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20150226132621.GD4151_at_avicenna.ee.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] using MPI_Comm_spawn in OpenMPI 1.8.4 with SLURM<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-26 09:44:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26405.php">Lev Givon: "[OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>Previous message:</strong> <a href="26403.php">Lev Givon: "[OMPI users] using MPI_Comm_spawn in OpenMPI 1.8.4 with SLURM"</a>
<li><strong>In reply to:</strong> <a href="26403.php">Lev Givon: "[OMPI users] using MPI_Comm_spawn in OpenMPI 1.8.4 with SLURM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pretty sure Slurm doesn&#226;&#128;&#153;t support dynamic spawn - we don&#226;&#128;&#153;t support it when direct launched using srun. It is only supported when launched by mpiexec
<br>
<p>Might change in future releases, assuming Slurm has or adds the support
<br>
<p><p><span class="quotelev1">&gt; On Feb 26, 2015, at 5:26 AM, Lev Givon &lt;lev_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been using OpenMPI 1.8.4 manually built on Ubuntu 14.04.2 against the PMI
</span><br>
<span class="quotelev1">&gt; libraries provided by the stock SLURM 2.6.5 Ubuntu packages. Although I am able
</span><br>
<span class="quotelev1">&gt; to successfully run MPI jobs that use MPI_Comm_spawn via mpi4py 1.3.1 (also
</span><br>
<span class="quotelev1">&gt; manually built against OpenMPI 1.8.4) to dynamically create processes when I
</span><br>
<span class="quotelev1">&gt; launch those jobs via mpiexec directly, I can't seem to get SLURM to start them
</span><br>
<span class="quotelev1">&gt; (I am able to use SLURM to successfully start jobs with a fixed number of
</span><br>
<span class="quotelev1">&gt; processes, however). For example, attempting to run a job that spawns more than
</span><br>
<span class="quotelev1">&gt; one process with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; srun -n 1 python myprogram.py
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; results in the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [huxley:24037] [[5176,1],0] ORTE_ERROR_LOG: Not available in file dpm_orte.c at line 1100
</span><br>
<span class="quotelev1">&gt; [huxley:24037] *** An error occurred in MPI_Comm_spawn
</span><br>
<span class="quotelev1">&gt; [huxley:24037] *** reported by process [339214337,0]
</span><br>
<span class="quotelev1">&gt; [huxley:24037] *** on communicator MPI_COMM_SELF
</span><br>
<span class="quotelev1">&gt; [huxley:24037] *** MPI_ERR_UNKNOWN: unknown error
</span><br>
<span class="quotelev1">&gt; [huxley:24037] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [huxley:24037] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running the same program with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -np 1 python myprogram.py
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; works properly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anyone successfully used SLURM (possibly a more recent version than 2.6.5)
</span><br>
<span class="quotelev1">&gt; to submit spawning OpenMPI jobs? If so, what might be causing the above error?
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lev Givon
</span><br>
<span class="quotelev1">&gt; Bionet Group | Neurokernel Project
</span><br>
<span class="quotelev1">&gt; <a href="http://www.columbia.edu/~lev/">http://www.columbia.edu/~lev/</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://lebedov.github.io/">http://lebedov.github.io/</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://neurokernel.github.io/">http://neurokernel.github.io/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26403.php">http://www.open-mpi.org/community/lists/users/2015/02/26403.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26405.php">Lev Givon: "[OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>Previous message:</strong> <a href="26403.php">Lev Givon: "[OMPI users] using MPI_Comm_spawn in OpenMPI 1.8.4 with SLURM"</a>
<li><strong>In reply to:</strong> <a href="26403.php">Lev Givon: "[OMPI users] using MPI_Comm_spawn in OpenMPI 1.8.4 with SLURM"</a>
<!-- nextthread="start" -->
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
