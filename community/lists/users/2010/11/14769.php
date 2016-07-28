<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 15 14:11:48 2010" -->
<!-- isoreceived="20101115191148" -->
<!-- sent="Mon, 15 Nov 2010 20:11:37 +0100" -->
<!-- isosent="20101115191137" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="DAC96CAC-3169-4ED8-AC43-0A778C2D9271_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CE1827F.9070500_at_oracle.com" -->
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
<strong>Date:</strong> 2010-11-15 14:11:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14770.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14768.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14768.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14770.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14770.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to give my understanding of the problem:
<br>
<p>Am 15.11.2010 um 19:57 schrieb Terry Dontje:
<br>
<p><span class="quotelev1">&gt; On 11/15/2010 11:08 AM, Chris Jewell wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry, I am still trying to grok all your email as what the problem you 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are trying to solve. So is the issue is trying to have two jobs having 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes on the same node be able to bind there processes on different 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resources. Like core 1 for the first job and core 2 and 3 for the 2nd job? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's exactly it.  Each MPI process needs to be bound to 1 processor in a way that reflects GE's slot allocation scheme.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; I actually don't think that I got it.  So you give two cases:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Case 1:
</span><br>
<span class="quotelev1">&gt; $ qsub -pe mpi 8 -binding pe linear:1 myScript.com
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and my pe_hostfile looks like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; exec6.cluster.stats.local 2 
</span><br>
<span class="quotelev1">&gt; batch.q_at_exec6.cluster.stats.local
</span><br>
<span class="quotelev1">&gt;  0,1
</span><br>
<p>Shouldn't here two cores be reserved for exec6 as it got two slots?
<br>
<p><p><span class="quotelev1">&gt; exec1.cluster.stats.local 1 
</span><br>
<span class="quotelev1">&gt; batch.q_at_exec1.cluster.stats.local
</span><br>
<span class="quotelev1">&gt;  0,1
</span><br>
<span class="quotelev1">&gt; exec7.cluster.stats.local 1 
</span><br>
<span class="quotelev1">&gt; batch.q_at_exec7.cluster.stats.local
</span><br>
<span class="quotelev1">&gt;  0,1
</span><br>
<span class="quotelev1">&gt; exec5.cluster.stats.local 1 
</span><br>
<span class="quotelev1">&gt; batch.q_at_exec5.cluster.stats.local
</span><br>
<span class="quotelev1">&gt;  0,1
</span><br>
<span class="quotelev1">&gt; exec4.cluster.stats.local 1 
</span><br>
<span class="quotelev1">&gt; batch.q_at_exec4.cluster.stats.local
</span><br>
<span class="quotelev1">&gt;  0,1
</span><br>
<span class="quotelev1">&gt; exec3.cluster.stats.local 1 
</span><br>
<span class="quotelev1">&gt; batch.q_at_exec3.cluster.stats.local
</span><br>
<span class="quotelev1">&gt;  0,1
</span><br>
<span class="quotelev1">&gt; exec2.cluster.stats.local 1 
</span><br>
<span class="quotelev1">&gt; batch.q_at_exec2.cluster.stats.local
</span><br>
<span class="quotelev1">&gt;  0,1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Case 2:
</span><br>
<span class="quotelev1">&gt; Notice that, because I have specified the -binding pe linear:1, each execution node binds processes for the job_id to one core.  If I have -binding pe linear:2, I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; exec6.cluster.stats.local 2 
</span><br>
<span class="quotelev1">&gt; batch.q_at_exec6.cluster.stats.local
</span><br>
<span class="quotelev1">&gt;  0,1:0,2
</span><br>
<span class="quotelev1">&gt; exec1.cluster.stats.local 1 
</span><br>
<span class="quotelev1">&gt; batch.q_at_exec1.cluster.stats.local
</span><br>
<span class="quotelev1">&gt;  0,1:0,2
</span><br>
<span class="quotelev1">&gt; exec7.cluster.stats.local 1 
</span><br>
<span class="quotelev1">&gt; batch.q_at_exec7.cluster.stats.local
</span><br>
<span class="quotelev1">&gt;  0,1:0,2
</span><br>
<span class="quotelev1">&gt; exec4.cluster.stats.local 1 
</span><br>
<span class="quotelev1">&gt; batch.q_at_exec4.cluster.stats.local
</span><br>
<span class="quotelev1">&gt;  0,1:0,2
</span><br>
<span class="quotelev1">&gt; exec3.cluster.stats.local 1 
</span><br>
<span class="quotelev1">&gt; batch.q_at_exec3.cluster.stats.local
</span><br>
<span class="quotelev1">&gt;  0,1:0,2
</span><br>
<span class="quotelev1">&gt; exec2.cluster.stats.local 1 
</span><br>
<span class="quotelev1">&gt; batch.q_at_exec2.cluster.stats.local
</span><br>
<span class="quotelev1">&gt;  0,1:0,2
</span><br>
<span class="quotelev1">&gt; exec5.cluster.stats.local 1 
</span><br>
<span class="quotelev1">&gt; batch.q_at_exec5.cluster.stats.local
</span><br>
<span class="quotelev1">&gt;  0,1:0,2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is your complaint really the fact that exec6 has been allocated two slots but there seems to only be one slot worth of resources allocated
</span><br>
<p>All are wrong except exec6. They should only get one core assigned.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; to it (ie in case one exec6 only has 1 core and case 2 it has two where maybe you'd expect 2 and 4 cores allocated respectively)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &lt;Mail-Anhang.gif&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
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
<li><strong>Next message:</strong> <a href="14770.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14768.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14768.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14770.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14770.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
