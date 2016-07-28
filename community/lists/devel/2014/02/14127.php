<?
$subject_val = "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 12 10:50:30 2014" -->
<!-- isoreceived="20140212155030" -->
<!-- sent="Wed, 12 Feb 2014 16:50:30 +0100" -->
<!-- isosent="20140212155030" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems" -->
<!-- id="20140212155030.GD31985_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E89F1DFE-8519-40AD-8F30-57AC3EAD586B_at_open-mpi.org" -->
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
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-12 10:50:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14128.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Previous message:</strong> <a href="14126.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>In reply to:</strong> <a href="14126.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14128.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb 12, 2014 at 07:47:53AM -0800, Ralph Castain wrote:
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ msub -I -l nodes=3:ppn=8
</span><br>
<span class="quotelev2">&gt; &gt; salloc: Job is in held state, pending scheduler release
</span><br>
<span class="quotelev2">&gt; &gt; salloc: Pending job allocation 131828
</span><br>
<span class="quotelev2">&gt; &gt; salloc: job 131828 queued and waiting for resources
</span><br>
<span class="quotelev2">&gt; &gt; salloc: job 131828 has been allocated resources
</span><br>
<span class="quotelev2">&gt; &gt; salloc: Granted job allocation 131828
</span><br>
<span class="quotelev2">&gt; &gt; sh-4.1$ echo $SLURM_TASKS_PER_NODE 
</span><br>
<span class="quotelev2">&gt; &gt; 1
</span><br>
<span class="quotelev2">&gt; &gt; sh-4.1$ rpm -q slurm
</span><br>
<span class="quotelev2">&gt; &gt; slurm-2.6.5-1.el6.x86_64
</span><br>
<span class="quotelev2">&gt; &gt; sh-4.1$ echo $SLURM_NNODES 
</span><br>
<span class="quotelev2">&gt; &gt; 1
</span><br>
<span class="quotelev2">&gt; &gt; sh-4.1$ echo $SLURM_JOB_NODELIST 
</span><br>
<span class="quotelev2">&gt; &gt; xxxx[107-108,176]
</span><br>
<span class="quotelev2">&gt; &gt; sh-4.1$ echo $SLURM_JOB_CPUS_PER_NODE 
</span><br>
<span class="quotelev2">&gt; &gt; 8(x3)
</span><br>
<span class="quotelev2">&gt; &gt; sh-4.1$ echo $SLURM_NODELIST 
</span><br>
<span class="quotelev2">&gt; &gt; xxxx[107-108,176]
</span><br>
<span class="quotelev2">&gt; &gt; sh-4.1$ echo $SLURM_NPROCS  
</span><br>
<span class="quotelev2">&gt; &gt; 1
</span><br>
<span class="quotelev2">&gt; &gt; sh-4.1$ echo $SLURM_NTASKS 
</span><br>
<span class="quotelev2">&gt; &gt; 1
</span><br>
<span class="quotelev2">&gt; &gt; sh-4.1$ echo $SLURM_TASKS_PER_NODE 
</span><br>
<span class="quotelev2">&gt; &gt; 1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The information in *_NODELIST seems to make sense, but all the other
</span><br>
<span class="quotelev2">&gt; &gt; variables (PROCS, TASKS, NODES) report '1', which seems wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed - and that's the problem. Slurm 2.6.5 is the most recent release, and my guess is that SchedMD once again has changed the @$!#%#@ meaning of their envars. Frankly, it is nearly impossible to track all the variants they have created over the years.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please check to see if someone did a little customizing on your end as sometimes people do that to Slurm. Could also be they did something in the Slurm config file that is causing the changed behavior.
</span><br>
<p>I will try to find out if there is something special about the slurm
<br>
configuration and let you know as soon as possible.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14128.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Previous message:</strong> <a href="14126.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>In reply to:</strong> <a href="14126.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14128.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
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
