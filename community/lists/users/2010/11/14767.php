<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 15 11:39:52 2010" -->
<!-- isoreceived="20101115163952" -->
<!-- sent="Mon, 15 Nov 2010 17:39:41 +0100" -->
<!-- isosent="20101115163941" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="3FA66F97-3CBE-4F31-AFF1-C0DD51B22AA8_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="21D7ED53-1B2B-4D53-873A-7E468385B065_at_warwick.ac.uk" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-15 11:39:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14768.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14766.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14765.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14766.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 15.11.2010 um 17:06 schrieb Chris Jewell:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the tip.  With the command
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ qsub -pe mpi 8 -binding linear:1 myScript.com
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [exec6:29172] System has detected external process binding to cores 0008
</span><br>
<span class="quotelev1">&gt; [exec6:29172] ras:gridengine: JOB_ID: 59282
</span><br>
<span class="quotelev1">&gt; [exec6:29172] ras:gridengine: PE_HOSTFILE: /usr/sge/default/spool/exec6/active_jobs/59282.1/pe_hostfile
</span><br>
<span class="quotelev1">&gt; [exec6:29172] ras:gridengine: exec6.cluster.stats.local: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev1">&gt; [exec6:29172] ras:gridengine: exec2.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec6:29172] ras:gridengine: exec5.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec6:29172] ras:gridengine: exec3.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec6:29172] ras:gridengine: exec4.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec6:29172] ras:gridengine: exec7.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec6:29172] ras:gridengine: exec1.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Presumably that means that OMPI is detecting the external binding okay.  If so, then that confirms my problem as an issue with how GE sets the processor affinity -- essentially the controlling sge_shepherd process  on each physical exec node gets bound to the requested number of cores (in this case 1) resulting in any child process (ie the ompi parallel processes) being bound to the same core.  What we really need is for GE to set the binding on each execution node according to the number of parallel processes that will run there.  Not sure this is doable currently...
</span><br>
<p>on SGE's side it could be the problem that local MPI processes on each slave node are threads and don't invoke an  additional `qrsh -inherit ...`. If you have only one MPI process per node it's working fine?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr Chris Jewell
</span><br>
<span class="quotelev1">&gt; Department of Statistics
</span><br>
<span class="quotelev1">&gt; University of Warwick
</span><br>
<span class="quotelev1">&gt; Coventry
</span><br>
<span class="quotelev1">&gt; CV4 7AL
</span><br>
<span class="quotelev1">&gt; UK
</span><br>
<span class="quotelev1">&gt; Tel: +44 (0)24 7615 0778
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="14768.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14766.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14765.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14766.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
