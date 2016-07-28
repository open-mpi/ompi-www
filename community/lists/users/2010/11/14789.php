<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 12:39:33 2010" -->
<!-- isoreceived="20101116173933" -->
<!-- sent="Tue, 16 Nov 2010 17:39:25 +0000" -->
<!-- isosent="20101116173925" -->
<!-- name="Chris Jewell" -->
<!-- email="chris.jewell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="848907BA-975F-48EE-8963-C02B0CAEC40C_at_warwick.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CE2BE7B.3000008_at_oracle.com" -->
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
<strong>Date:</strong> 2010-11-16 12:39:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14790.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14788.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14786.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14787.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 16 Nov 2010, at 17:25, Terry Dontje wrote:
<br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sure.   Here's the stderr of a job submitted to my cluster with 'qsub -pe mpi 8 -binding linear:2 myScript.com'  where myScript.com runs 'mpirun -mca ras_gridengine_verbose 100 --report-bindings ./unterm':
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [exec4:17384] System has detected external process binding to cores 0022
</span><br>
<span class="quotelev2">&gt;&gt; [exec4:17384] ras:gridengine: JOB_ID: 59352
</span><br>
<span class="quotelev2">&gt;&gt; [exec4:17384] ras:gridengine: PE_HOSTFILE: /usr/sge/default/spool/exec4/active_jobs/59352.1/pe_hostfile
</span><br>
<span class="quotelev2">&gt;&gt; [exec4:17384] ras:gridengine: exec4.cluster.stats.local: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev2">&gt;&gt; [exec4:17384] ras:gridengine: exec2.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev2">&gt;&gt; [exec4:17384] ras:gridengine: exec7.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev2">&gt;&gt; [exec4:17384] ras:gridengine: exec3.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev2">&gt;&gt; [exec4:17384] ras:gridengine: exec6.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev2">&gt;&gt; [exec4:17384] ras:gridengine: exec1.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev2">&gt;&gt; [exec4:17384] ras:gridengine: exec5.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Is that all that came out?  I would have expected a some output from each process after the orted forked the processes but before the exec of unterm.
</span><br>
<p>Yes.  It appears that if orted detects binding done by external processes, then this is all you get.  Scratch the GE enforced binding, and you get:
<br>
<p>[exec4:17670] [[23443,0],0] odls:default:fork binding child [[23443,1],0] to cpus 0001
<br>
[exec4:17670] [[23443,0],0] odls:default:fork binding child [[23443,1],1] to cpus 0002
<br>
[exec7:06781] [[23443,0],2] odls:default:fork binding child [[23443,1],3] to cpus 0001
<br>
[exec2:24160] [[23443,0],1] odls:default:fork binding child [[23443,1],2] to cpus 0001
<br>
[exec6:30097] [[23443,0],4] odls:default:fork binding child [[23443,1],5] to cpus 0001
<br>
[exec5:02736] [[23443,0],6] odls:default:fork binding child [[23443,1],7] to cpus 0001
<br>
[exec1:30779] [[23443,0],5] odls:default:fork binding child [[23443,1],6] to cpus 0001
<br>
[exec3:12818] [[23443,0],3] odls:default:fork binding child [[23443,1],4] to cpus 0001
<br>
.....
<br>
<p><p>C
<br>
<pre>
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
<li><strong>Next message:</strong> <a href="14790.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14788.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14786.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14787.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
