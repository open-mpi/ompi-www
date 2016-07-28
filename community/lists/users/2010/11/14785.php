<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 12:14:43 2010" -->
<!-- isoreceived="20101116171443" -->
<!-- sent="Tue, 16 Nov 2010 17:13:30 +0000" -->
<!-- isosent="20101116171330" -->
<!-- name="Chris Jewell" -->
<!-- email="chris.jewell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="B73F8C9D-D779-43CF-8B42-0533400778C6_at_warwick.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CE2949A.6050404_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts<br>
<strong>From:</strong> Chris Jewell (<em>chris.jewell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-16 12:13:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14786.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14784.php">Hicham Mouline: "[OMPI users] architecture questions"</a>
<li><strong>In reply to:</strong> <a href="14780.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14786.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14786.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14787.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 16 Nov 2010, at 14:26, Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the original case of 7 nodes and processes if we do -binding pe linear:2, and add the -bind-to-core to mpirun  I'd actually expect 6 of the nodes processes bind to one core and the 7th node with 2 processes to have each of those processes bound to different cores on the same machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can we get a full output of such a run with -report-bindings turned on.  I think we should find out that things actually are happening correctly except for the fact that the 6 of the nodes have 2 cores allocated but only one is being bound to by a process.
</span><br>
<p>Sure.   Here's the stderr of a job submitted to my cluster with 'qsub -pe mpi 8 -binding linear:2 myScript.com'  where myScript.com runs 'mpirun -mca ras_gridengine_verbose 100 --report-bindings ./unterm':
<br>
<p>[exec4:17384] System has detected external process binding to cores 0022
<br>
[exec4:17384] ras:gridengine: JOB_ID: 59352
<br>
[exec4:17384] ras:gridengine: PE_HOSTFILE: /usr/sge/default/spool/exec4/active_jobs/59352.1/pe_hostfile
<br>
[exec4:17384] ras:gridengine: exec4.cluster.stats.local: PE_HOSTFILE shows slots=2
<br>
[exec4:17384] ras:gridengine: exec2.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec4:17384] ras:gridengine: exec7.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec4:17384] ras:gridengine: exec3.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec4:17384] ras:gridengine: exec6.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec4:17384] ras:gridengine: exec1.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec4:17384] ras:gridengine: exec5.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
<p><p>Chris
<br>
<p><pre>
--
Dr Chris Jewell
Department of Statistics
University of Warwick
Coventry
CV4 7AL
UK
Tel: +44 (0)24 7615 0778
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14786.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14784.php">Hicham Mouline: "[OMPI users] architecture questions"</a>
<li><strong>In reply to:</strong> <a href="14780.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14786.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14786.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14787.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
