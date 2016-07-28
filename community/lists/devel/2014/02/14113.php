<?
$subject_val = "[OMPI devel] openmpi-1.7.5a1r30692 and slurm problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 12 07:42:49 2014" -->
<!-- isoreceived="20140212124249" -->
<!-- sent="Wed, 12 Feb 2014 13:42:48 +0100" -->
<!-- isosent="20140212124248" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi-1.7.5a1r30692 and slurm problems" -->
<!-- id="20140212124248.GE9359_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-12 07:42:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14114.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7 and trunk: hello_oshmemfh link failure with	xlc/ppc32/linux"</a>
<li><strong>Previous message:</strong> <a href="14112.php">Artem Polyakov: "[OMPI devel] SLURM affinity accounting in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14118.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Reply:</strong> <a href="14118.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried the nightly snapshot (openmpi-1.7.5a1r30692.tar.gz) on a system
<br>
with slurm and moab. I requested an interactive session using:
<br>
<p>msub -I -l nodes=3:ppn=8
<br>
<p>and started a simple test case which fails:
<br>
<p>$ mpirun -np 2 ./mpi-test 1
<br>
--------------------------------------------------------------------------
<br>
There are not enough slots available in the system to satisfy the 2 slots 
<br>
that were requested by the application:
<br>
&nbsp;&nbsp;./mpi-test
<br>
<p>Either request fewer slots for your application, or make more slots available
<br>
for use.
<br>
--------------------------------------------------------------------------
<br>
srun: error: xxxx108: task 1: Exited with exit code 1
<br>
srun: Terminating job step 131823.4
<br>
srun: error: xxxx107: task 0: Exited with exit code 1
<br>
srun: Job step aborted
<br>
slurmd[xxxx108]: *** STEP 131823.4 KILLED AT 2014-02-12T13:30:32 WITH SIGNAL 9 ***
<br>
<p><p>requesting only one core works:
<br>
<p>$ mpirun  ./mpi-test 1
<br>
4.4.7 20120313 (Red Hat 4.4.7-4):Process 0 on xxxx106 out of 1: 0.000000
<br>
4.4.7 20120313 (Red Hat 4.4.7-4):Process 0 on xxxx106 out of 1: 0.000000
<br>
<p><p>using openmpi-1.6.5 works with multiple cores:
<br>
<p>$ mpirun -np 24 ./mpi-test 2
<br>
4.4.7 20120313 (Red Hat 4.4.7-4):Process 0 on xxxx106 out of 24: 0.000000
<br>
4.4.7 20120313 (Red Hat 4.4.7-4):Process 12 on xxxx106 out of 24: 12.000000
<br>
4.4.7 20120313 (Red Hat 4.4.7-4):Process 11 on xxxx108 out of 24: 11.000000
<br>
4.4.7 20120313 (Red Hat 4.4.7-4):Process 18 on xxxx106 out of 24: 18.000000
<br>
<p>$ echo $SLURM_JOB_CPUS_PER_NODE 
<br>
8(x3)
<br>
<p>I never used slurm before so this could also be a user error on my side.
<br>
But as 1.6.5 works it seems something has changed and wanted to let
<br>
you know in case it was not intentionally.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14114.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7 and trunk: hello_oshmemfh link failure with	xlc/ppc32/linux"</a>
<li><strong>Previous message:</strong> <a href="14112.php">Artem Polyakov: "[OMPI devel] SLURM affinity accounting in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14118.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Reply:</strong> <a href="14118.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
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
