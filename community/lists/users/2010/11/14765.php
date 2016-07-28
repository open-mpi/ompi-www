<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 15 11:06:26 2010" -->
<!-- isoreceived="20101115160626" -->
<!-- sent="Mon, 15 Nov 2010 16:06:17 +0000" -->
<!-- isosent="20101115160617" -->
<!-- name="Chris Jewell" -->
<!-- email="chris.jewell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="21D7ED53-1B2B-4D53-873A-7E468385B065_at_warwick.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
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
<strong>Date:</strong> 2010-11-15 11:06:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14766.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14764.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14371.php">Chris Jewell: "[OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14767.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14767.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks for the tip.  With the command
<br>
<p>$ qsub -pe mpi 8 -binding linear:1 myScript.com
<br>
<p>I get the output
<br>
<p>[exec6:29172] System has detected external process binding to cores 0008
<br>
[exec6:29172] ras:gridengine: JOB_ID: 59282
<br>
[exec6:29172] ras:gridengine: PE_HOSTFILE: /usr/sge/default/spool/exec6/active_jobs/59282.1/pe_hostfile
<br>
[exec6:29172] ras:gridengine: exec6.cluster.stats.local: PE_HOSTFILE shows slots=2
<br>
[exec6:29172] ras:gridengine: exec2.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec6:29172] ras:gridengine: exec5.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec6:29172] ras:gridengine: exec3.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec6:29172] ras:gridengine: exec4.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec6:29172] ras:gridengine: exec7.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec6:29172] ras:gridengine: exec1.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
<p>Presumably that means that OMPI is detecting the external binding okay.  If so, then that confirms my problem as an issue with how GE sets the processor affinity -- essentially the controlling sge_shepherd process  on each physical exec node gets bound to the requested number of cores (in this case 1) resulting in any child process (ie the ompi parallel processes) being bound to the same core.  What we really need is for GE to set the binding on each execution node according to the number of parallel processes that will run there.  Not sure this is doable currently...
<br>
<p>Cheers,
<br>
<p>Chris
<br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="14766.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14764.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14371.php">Chris Jewell: "[OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14767.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14767.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
