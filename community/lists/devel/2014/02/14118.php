<?
$subject_val = "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 12 09:12:51 2014" -->
<!-- isoreceived="20140212141251" -->
<!-- sent="Wed, 12 Feb 2014 06:12:45 -0800" -->
<!-- isosent="20140212141245" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems" -->
<!-- id="C2161142-1344-4BFC-BF1C-5454E36B9FE4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140212124248.GE9359_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-12 09:12:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14119.php">Ralph Castain: "Re: [OMPI devel] SLURM affinity accounting in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="14117.php">Ralph Castain: "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression	vs 1.7.4)"</a>
<li><strong>In reply to:</strong> <a href="14113.php">Adrian Reber: "[OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14121.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Reply:</strong> <a href="14121.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Seems rather odd - since this is managed by Moab, you shouldn't be seeing SLURM envars at all. What you should see are PBS_* envars, including a PBS_NODEFILE that actually contains the allocation.
<br>
<p><p>On Feb 12, 2014, at 4:42 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I tried the nightly snapshot (openmpi-1.7.5a1r30692.tar.gz) on a system
</span><br>
<span class="quotelev1">&gt; with slurm and moab. I requested an interactive session using:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; msub -I -l nodes=3:ppn=8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and started a simple test case which fails:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 ./mpi-test 1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 2 slots 
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt;  ./mpi-test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev1">&gt; for use.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; srun: error: xxxx108: task 1: Exited with exit code 1
</span><br>
<span class="quotelev1">&gt; srun: Terminating job step 131823.4
</span><br>
<span class="quotelev1">&gt; srun: error: xxxx107: task 0: Exited with exit code 1
</span><br>
<span class="quotelev1">&gt; srun: Job step aborted
</span><br>
<span class="quotelev1">&gt; slurmd[xxxx108]: *** STEP 131823.4 KILLED AT 2014-02-12T13:30:32 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; requesting only one core works:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun  ./mpi-test 1
</span><br>
<span class="quotelev1">&gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 0 on xxxx106 out of 1: 0.000000
</span><br>
<span class="quotelev1">&gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 0 on xxxx106 out of 1: 0.000000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; using openmpi-1.6.5 works with multiple cores:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 24 ./mpi-test 2
</span><br>
<span class="quotelev1">&gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 0 on xxxx106 out of 24: 0.000000
</span><br>
<span class="quotelev1">&gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 12 on xxxx106 out of 24: 12.000000
</span><br>
<span class="quotelev1">&gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 11 on xxxx108 out of 24: 11.000000
</span><br>
<span class="quotelev1">&gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 18 on xxxx106 out of 24: 18.000000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ echo $SLURM_JOB_CPUS_PER_NODE 
</span><br>
<span class="quotelev1">&gt; 8(x3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I never used slurm before so this could also be a user error on my side.
</span><br>
<span class="quotelev1">&gt; But as 1.6.5 works it seems something has changed and wanted to let
</span><br>
<span class="quotelev1">&gt; you know in case it was not intentionally.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14119.php">Ralph Castain: "Re: [OMPI devel] SLURM affinity accounting in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="14117.php">Ralph Castain: "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression	vs 1.7.4)"</a>
<li><strong>In reply to:</strong> <a href="14113.php">Adrian Reber: "[OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14121.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Reply:</strong> <a href="14121.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
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
