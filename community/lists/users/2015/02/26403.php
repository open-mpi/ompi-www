<?
$subject_val = "[OMPI users] using MPI_Comm_spawn in OpenMPI 1.8.4 with SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 08:26:26 2015" -->
<!-- isoreceived="20150226132626" -->
<!-- sent="Thu, 26 Feb 2015 08:26:21 -0500" -->
<!-- isosent="20150226132621" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="[OMPI users] using MPI_Comm_spawn in OpenMPI 1.8.4 with SLURM" -->
<!-- id="20150226132621.GD4151_at_avicenna.ee.columbia.edu" -->
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
<strong>Subject:</strong> [OMPI users] using MPI_Comm_spawn in OpenMPI 1.8.4 with SLURM<br>
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-26 08:26:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26404.php">Ralph Castain: "Re: [OMPI users] using MPI_Comm_spawn in OpenMPI 1.8.4 with SLURM"</a>
<li><strong>Previous message:</strong> <a href="26402.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26404.php">Ralph Castain: "Re: [OMPI users] using MPI_Comm_spawn in OpenMPI 1.8.4 with SLURM"</a>
<li><strong>Reply:</strong> <a href="26404.php">Ralph Castain: "Re: [OMPI users] using MPI_Comm_spawn in OpenMPI 1.8.4 with SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been using OpenMPI 1.8.4 manually built on Ubuntu 14.04.2 against the PMI
<br>
libraries provided by the stock SLURM 2.6.5 Ubuntu packages. Although I am able
<br>
to successfully run MPI jobs that use MPI_Comm_spawn via mpi4py 1.3.1 (also
<br>
manually built against OpenMPI 1.8.4) to dynamically create processes when I
<br>
launch those jobs via mpiexec directly, I can't seem to get SLURM to start them
<br>
(I am able to use SLURM to successfully start jobs with a fixed number of
<br>
processes, however). For example, attempting to run a job that spawns more than
<br>
one process with
<br>
<p>srun -n 1 python myprogram.py
<br>
<p>results in the following error:
<br>
<p>[huxley:24037] [[5176,1],0] ORTE_ERROR_LOG: Not available in file dpm_orte.c at line 1100
<br>
[huxley:24037] *** An error occurred in MPI_Comm_spawn
<br>
[huxley:24037] *** reported by process [339214337,0]
<br>
[huxley:24037] *** on communicator MPI_COMM_SELF
<br>
[huxley:24037] *** MPI_ERR_UNKNOWN: unknown error
<br>
[huxley:24037] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
[huxley:24037] ***    and potentially your MPI job)
<br>
<p>Running the same program with
<br>
<p>mpiexec -np 1 python myprogram.py
<br>
<p>works properly.
<br>
<p>Has anyone successfully used SLURM (possibly a more recent version than 2.6.5)
<br>
to submit spawning OpenMPI jobs? If so, what might be causing the above error?
<br>
<pre>
-- 
Lev Givon
Bionet Group | Neurokernel Project
<a href="http://www.columbia.edu/~lev/">http://www.columbia.edu/~lev/</a>
<a href="http://lebedov.github.io/">http://lebedov.github.io/</a>
<a href="http://neurokernel.github.io/">http://neurokernel.github.io/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26404.php">Ralph Castain: "Re: [OMPI users] using MPI_Comm_spawn in OpenMPI 1.8.4 with SLURM"</a>
<li><strong>Previous message:</strong> <a href="26402.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26404.php">Ralph Castain: "Re: [OMPI users] using MPI_Comm_spawn in OpenMPI 1.8.4 with SLURM"</a>
<li><strong>Reply:</strong> <a href="26404.php">Ralph Castain: "Re: [OMPI users] using MPI_Comm_spawn in OpenMPI 1.8.4 with SLURM"</a>
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
