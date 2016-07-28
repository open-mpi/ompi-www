<?
$subject_val = "Re: [OMPI users] SGE and openMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 07:11:17 2014" -->
<!-- isoreceived="20140903111117" -->
<!-- sent="Wed, 03 Sep 2014 13:11:15 +0200" -->
<!-- isosent="20140903111115" -->
<!-- name="Donato Pera" -->
<!-- email="donato.pera_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE and openMPI" -->
<!-- id="5406F753.7030709_at_dm.univaq.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FCAF9EFA-22CD-4EA4-88F8-52BB0CFFEBDB_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] SGE and openMPI<br>
<strong>From:</strong> Donato Pera (<em>donato.pera_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-03 07:11:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25241.php">Siegmar Gross: "[OMPI users] internal-failure in openmpi-1.9a1r32664 on Linux with Sun C"</a>
<li><strong>Previous message:</strong> <a href="25239.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>In reply to:</strong> <a href="25239.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25242.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Reply:</strong> <a href="25242.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I get
<br>
<p>ompi_info | grep grid
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.6.5)
<br>
<p><p>and using this script
<br>
<p>#!/bin/bash
<br>
#$ -S /bin/bash
<br>
#$ -pe orte 64
<br>
#$ -cwd
<br>
#$ -o ./file.out
<br>
#$ -e ./file.err
<br>
<p>export LD_LIBRARY_PATH=/home/SWcbbc/openmpi-1.6.5/lib:$LD_LIBRARY_PATH
<br>
export OMP_NUM_THREADS=1
<br>
<p>CPMD_PATH=/home/tanzi/myroot/X86_66intel-mpi/
<br>
PP_PATH=/home/tanzi
<br>
/home/SWcbbc/openmpi-1.6.5/bin/mpirun -mca btl openib -np 64
<br>
-machinefile $TMPDIR/machines  ${CPMD_PATH}cpmd.x  input ${PP_PATH}/PP/
<br>
<span class="quotelev1">&gt; out
</span><br>
<p><p>I get this error
<br>
<p>Open RTE was unable to open the hostfile:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/tmp/21213.1.debug.q/machines
<br>
Check to make sure the path and filename are correct.
<br>
--------------------------------------------------------------------------
<br>
[compute-2-6.local:22452] [[5218,0],0] ORTE_ERROR_LOG: Not found in file
<br>
base/rmaps_base_support_fns.c at line 207
<br>
[compute-2-6.local:22452] [[5218,0],0] ORTE_ERROR_LOG: Not found in file
<br>
rmaps_rr.c at line 82
<br>
[compute-2-6.local:22452] [[5218,0],0] ORTE_ERROR_LOG: Not found in file
<br>
base/rmaps_base_map_job.c at line 88
<br>
[compute-2-6.local:22452] [[5218,0],0] ORTE_ERROR_LOG: Not found in file
<br>
base/plm_base_launch_support.c at line 105
<br>
[compute-2-6.local:22452] [[5218,0],0] ORTE_ERROR_LOG: Not found in file
<br>
plm_rsh_module.c at line 1173
<br>
<p><p><p><p><p>Instead using this script
<br>
<p><p>#!/bin/bash
<br>
#$ -S /bin/bash
<br>
#$ -pe orte 64
<br>
#$ -cwd
<br>
#$ -o ./file.out
<br>
#$ -e ./file.err
<br>
<p>export LD_LIBRARY_PATH=/home/SWcbbc/openmpi-1.6.5/lib:$LD_LIBRARY_PATH
<br>
export OMP_NUM_THREADS=1
<br>
<p>CPMD_PATH=/home/tanzi/myroot/X86_66intel-mpi/
<br>
PP_PATH=/home/tanzi
<br>
/home/SWcbbc/openmpi-1.6.5/bin/mpirun -mca btl openib -np 64
<br>
$TMPDIR/machines  ${CPMD_PATH}cpmd.x  input ${PP_PATH}/PP/ &gt; out
<br>
<p><p>I get
<br>
Executable: /tmp/21214.1.debug.q/machines
<br>
Node: compute-2-0.local
<br>
<p>while attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
<p>can you help me
<br>
<p><p>Thanks and Regards Donato
<br>
<p><p><p><p>On 03/09/2014 12:28, Reuti wrote:
<br>
<span class="quotelev1">&gt; ompi_info | grep grid
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25241.php">Siegmar Gross: "[OMPI users] internal-failure in openmpi-1.9a1r32664 on Linux with Sun C"</a>
<li><strong>Previous message:</strong> <a href="25239.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>In reply to:</strong> <a href="25239.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25242.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Reply:</strong> <a href="25242.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
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
