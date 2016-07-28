<?
$subject_val = "Re: [OMPI users] OpenMPI and SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 12 11:29:38 2013" -->
<!-- isoreceived="20130112162938" -->
<!-- sent="Sat, 12 Jan 2013 08:29:30 -0800" -->
<!-- isosent="20130112162930" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and SLURM" -->
<!-- id="5985022A-393A-4C61-B3CE-7B9FE1101393_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50F181FF.8050801_at_0x1b.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and SLURM<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-12 11:29:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21115.php">Beat Rubischon: "Re: [OMPI users] OpenMPI and SLURM"</a>
<li><strong>Previous message:</strong> <a href="21113.php">Beat Rubischon: "[OMPI users] OpenMPI and SLURM"</a>
<li><strong>In reply to:</strong> <a href="21113.php">Beat Rubischon: "[OMPI users] OpenMPI and SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21115.php">Beat Rubischon: "Re: [OMPI users] OpenMPI and SLURM"</a>
<li><strong>Reply:</strong> <a href="21115.php">Beat Rubischon: "Re: [OMPI users] OpenMPI and SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sadly, we incorrectly removed the required grpcomm component to make that work. I'm restoring it this weekend and we will be issuing a 1.6.4 shortly.
<br>
<p>Meantime, you can use the PMI support in its place. Just configure OMPI --with-pmi=&lt;path-to-slurm's-pmi.h&gt; and you will be able to direct-launch your job.
<br>
<p>Sorry for the problem.
<br>
<p>On Jan 12, 2013, at 7:32 AM, Beat Rubischon &lt;beat_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm currently trying to run OpenMPI 1.6.3 binaries directly under SLURM
</span><br>
<span class="quotelev1">&gt; 2.5.1 [1]. OpenMPI is built using --with-slurm, $SLURM_STEP_RESV_PORTS
</span><br>
<span class="quotelev1">&gt; is successfully set by SLURM. According to the error message I assume a
</span><br>
<span class="quotelev1">&gt; shared library couldn't be found, unfortunately I'm not able to find a
</span><br>
<span class="quotelev1">&gt; failed stat() or open() in strace.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	[1] <a href="http://www.schedmd.com/slurmdocs/mpi_guide.html#open_mpi">http://www.schedmd.com/slurmdocs/mpi_guide.html#open_mpi</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's probably a stupid mistake on my side. It drives me crazy as I
</span><br>
<span class="quotelev1">&gt; already realized such setups in the early OpenMPI 1.5 days :-/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using mpirun works:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ salloc -n 2 mpirun ./IMB-MPI1
</span><br>
<span class="quotelev1">&gt; [dalco_at_master imb]$ salloc -n 2 mpirun ./IMB-MPI1
</span><br>
<span class="quotelev1">&gt; salloc: Granted job allocation 72
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #    Intel (R) MPI Benchmark Suite V3.2.2, MPI-1 part
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Direct invocation fails:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [dalco_at_master imb]$ salloc -n 2 srun ./IMB-MPI1
</span><br>
<span class="quotelev1">&gt; salloc: Granted job allocation 74
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host:      node30.cluster
</span><br>
<span class="quotelev1">&gt; Framework: grpcomm
</span><br>
<span class="quotelev1">&gt; Component: hier
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [node30.cluster:42203] [[74,1],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; base/ess_base_std_app.c at line 93
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  orte_grpcomm_base_open failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [node30.cluster:42203] [[74,1],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; ess_slurmd_module.c at line 385
</span><br>
<span class="quotelev1">&gt; [node30.cluster:42203] [[74,1],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 128
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [node30.cluster:42203] *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev1">&gt; [node30.cluster:42203] *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; [node30.cluster:42203] *** Unknown error
</span><br>
<span class="quotelev1">&gt; [node30.cluster:42203] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev1">&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev1">&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;  Local host: node30.cluster
</span><br>
<span class="quotelev1">&gt;  PID:        42203
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host:      node30.cluster
</span><br>
<span class="quotelev1">&gt; Framework: grpcomm
</span><br>
<span class="quotelev1">&gt; Component: hier
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [node30.cluster:42204] [[74,1],1] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; base/ess_base_std_app.c at line 93
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  orte_grpcomm_base_open failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [node30.cluster:42204] [[74,1],1] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; ess_slurmd_module.c at line 385
</span><br>
<span class="quotelev1">&gt; [node30.cluster:42204] [[74,1],1] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 128
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [node30.cluster:42204] *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev1">&gt; [node30.cluster:42204] *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; [node30.cluster:42204] *** Unknown error
</span><br>
<span class="quotelev1">&gt; [node30.cluster:42204] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev1">&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev1">&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;  Local host: node30.cluster
</span><br>
<span class="quotelev1">&gt;  PID:        42204
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; srun: error: node30: tasks 0-1: Exited with exit code 1
</span><br>
<span class="quotelev1">&gt; salloc: Relinquishing job allocation 74
</span><br>
<span class="quotelev1">&gt; salloc: Job allocation 74 has been revoked.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for any input!
</span><br>
<span class="quotelev1">&gt; Beat
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;     \|/                           Beat Rubischon &lt;beat_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;   ( 0-0 )                             <a href="http://www.0x1b.ch/~beat/">http://www.0x1b.ch/~beat/</a>
</span><br>
<span class="quotelev1">&gt; oOO--(_)--OOo---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Meine Erlebnisse, Gedanken und Traeume: <a href="http://www.0x1b.ch/blog/">http://www.0x1b.ch/blog/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21115.php">Beat Rubischon: "Re: [OMPI users] OpenMPI and SLURM"</a>
<li><strong>Previous message:</strong> <a href="21113.php">Beat Rubischon: "[OMPI users] OpenMPI and SLURM"</a>
<li><strong>In reply to:</strong> <a href="21113.php">Beat Rubischon: "[OMPI users] OpenMPI and SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21115.php">Beat Rubischon: "Re: [OMPI users] OpenMPI and SLURM"</a>
<li><strong>Reply:</strong> <a href="21115.php">Beat Rubischon: "Re: [OMPI users] OpenMPI and SLURM"</a>
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
