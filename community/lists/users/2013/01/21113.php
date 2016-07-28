<?
$subject_val = "[OMPI users] OpenMPI and SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 12 10:34:19 2013" -->
<!-- isoreceived="20130112153419" -->
<!-- sent="Sat, 12 Jan 2013 16:32:15 +0100" -->
<!-- isosent="20130112153215" -->
<!-- name="Beat Rubischon" -->
<!-- email="beat_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI and SLURM" -->
<!-- id="50F181FF.8050801_at_0x1b.ch" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI and SLURM<br>
<strong>From:</strong> Beat Rubischon (<em>beat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-12 10:32:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21114.php">Ralph Castain: "Re: [OMPI users] OpenMPI and SLURM"</a>
<li><strong>Previous message:</strong> <a href="21112.php">Ake Sandgren: "[OMPI users] libmpi_f90 shared lib version number change in 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21114.php">Ralph Castain: "Re: [OMPI users] OpenMPI and SLURM"</a>
<li><strong>Reply:</strong> <a href="21114.php">Ralph Castain: "Re: [OMPI users] OpenMPI and SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p>I'm currently trying to run OpenMPI 1.6.3 binaries directly under SLURM
<br>
2.5.1 [1]. OpenMPI is built using --with-slurm, $SLURM_STEP_RESV_PORTS
<br>
is successfully set by SLURM. According to the error message I assume a
<br>
shared library couldn't be found, unfortunately I'm not able to find a
<br>
failed stat() or open() in strace.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1] <a href="http://www.schedmd.com/slurmdocs/mpi_guide.html#open_mpi">http://www.schedmd.com/slurmdocs/mpi_guide.html#open_mpi</a>
<br>
<p>It's probably a stupid mistake on my side. It drives me crazy as I
<br>
already realized such setups in the early OpenMPI 1.5 days :-/
<br>
<p>Using mpirun works:
<br>
<p>$ salloc -n 2 mpirun ./IMB-MPI1
<br>
[dalco_at_master imb]$ salloc -n 2 mpirun ./IMB-MPI1
<br>
salloc: Granted job allocation 72
<br>
#---------------------------------------------------
<br>
#    Intel (R) MPI Benchmark Suite V3.2.2, MPI-1 part
<br>
...
<br>
<p>Direct invocation fails:
<br>
<p>[dalco_at_master imb]$ salloc -n 2 srun ./IMB-MPI1
<br>
salloc: Granted job allocation 74
<br>
--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      node30.cluster
<br>
Framework: grpcomm
<br>
Component: hier
<br>
--------------------------------------------------------------------------
<br>
[node30.cluster:42203] [[74,1],0] ORTE_ERROR_LOG: Error in file
<br>
base/ess_base_std_app.c at line 93
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_grpcomm_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[node30.cluster:42203] [[74,1],0] ORTE_ERROR_LOG: Error in file
<br>
ess_slurmd_module.c at line 385
<br>
[node30.cluster:42203] [[74,1],0] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_init.c at line 128
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
[node30.cluster:42203] *** An error occurred in MPI_Init_thread
<br>
[node30.cluster:42203] *** on a NULL communicator
<br>
[node30.cluster:42203] *** Unknown error
<br>
[node30.cluster:42203] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
--------------------------------------------------------------------------
<br>
An MPI process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>
<p>&nbsp;&nbsp;Reason:     Before MPI_INIT completed
<br>
&nbsp;&nbsp;Local host: node30.cluster
<br>
&nbsp;&nbsp;PID:        42203
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      node30.cluster
<br>
Framework: grpcomm
<br>
Component: hier
<br>
--------------------------------------------------------------------------
<br>
[node30.cluster:42204] [[74,1],1] ORTE_ERROR_LOG: Error in file
<br>
base/ess_base_std_app.c at line 93
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_grpcomm_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[node30.cluster:42204] [[74,1],1] ORTE_ERROR_LOG: Error in file
<br>
ess_slurmd_module.c at line 385
<br>
[node30.cluster:42204] [[74,1],1] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_init.c at line 128
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
[node30.cluster:42204] *** An error occurred in MPI_Init_thread
<br>
[node30.cluster:42204] *** on a NULL communicator
<br>
[node30.cluster:42204] *** Unknown error
<br>
[node30.cluster:42204] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
--------------------------------------------------------------------------
<br>
An MPI process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>
<p>&nbsp;&nbsp;Reason:     Before MPI_INIT completed
<br>
&nbsp;&nbsp;Local host: node30.cluster
<br>
&nbsp;&nbsp;PID:        42204
<br>
--------------------------------------------------------------------------
<br>
srun: error: node30: tasks 0-1: Exited with exit code 1
<br>
salloc: Relinquishing job allocation 74
<br>
salloc: Job allocation 74 has been revoked.
<br>
<p>Thanks for any input!
<br>
Beat
<br>
<p><pre>
-- 
     \|/                           Beat Rubischon &lt;beat_at_[hidden]&gt;
   ( 0-0 )                             <a href="http://www.0x1b.ch/~beat/">http://www.0x1b.ch/~beat/</a>
oOO--(_)--OOo---------------------------------------------------
Meine Erlebnisse, Gedanken und Traeume: <a href="http://www.0x1b.ch/blog/">http://www.0x1b.ch/blog/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21114.php">Ralph Castain: "Re: [OMPI users] OpenMPI and SLURM"</a>
<li><strong>Previous message:</strong> <a href="21112.php">Ake Sandgren: "[OMPI users] libmpi_f90 shared lib version number change in 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21114.php">Ralph Castain: "Re: [OMPI users] OpenMPI and SLURM"</a>
<li><strong>Reply:</strong> <a href="21114.php">Ralph Castain: "Re: [OMPI users] OpenMPI and SLURM"</a>
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
