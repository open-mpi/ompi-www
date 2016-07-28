<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 15 14:35:16 2010" -->
<!-- isoreceived="20101115193516" -->
<!-- sent="Mon, 15 Nov 2010 14:23:22 -0500" -->
<!-- isosent="20101115192322" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="4CE188AA.1010004_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DAC96CAC-3169-4ED8-AC43-0A778C2D9271_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-15 14:23:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14771.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14769.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14769.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14771.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14771.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14772.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/15/2010 02:11 PM, Reuti wrote:
<br>
<span class="quotelev1">&gt; Just to give my understanding of the problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 15.11.2010 um 19:57 schrieb Terry Dontje:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 11/15/2010 11:08 AM, Chris Jewell wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry, I am still trying to grok all your email as what the problem you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are trying to solve. So is the issue is trying to have two jobs having
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes on the same node be able to bind there processes on different
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; resources. Like core 1 for the first job and core 2 and 3 for the 2nd job?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That's exactly it.  Each MPI process needs to be bound to 1 processor in a way that reflects GE's slot allocation scheme.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I actually don't think that I got it.  So you give two cases:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Case 1:
</span><br>
<span class="quotelev2">&gt;&gt; $ qsub -pe mpi 8 -binding pe linear:1 myScript.com
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and my pe_hostfile looks like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; exec6.cluster.stats.local 2
</span><br>
<span class="quotelev2">&gt;&gt; batch.q_at_exec6.cluster.stats.local
</span><br>
<span class="quotelev2">&gt;&gt;   0,1
</span><br>
<span class="quotelev1">&gt; Shouldn't here two cores be reserved for exec6 as it got two slots?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
That's what I was wondering.
<br>
<span class="quotelev2">&gt;&gt; exec1.cluster.stats.local 1
</span><br>
<span class="quotelev2">&gt;&gt; batch.q_at_exec1.cluster.stats.local
</span><br>
<span class="quotelev2">&gt;&gt;   0,1
</span><br>
<span class="quotelev2">&gt;&gt; exec7.cluster.stats.local 1
</span><br>
<span class="quotelev2">&gt;&gt; batch.q_at_exec7.cluster.stats.local
</span><br>
<span class="quotelev2">&gt;&gt;   0,1
</span><br>
<span class="quotelev2">&gt;&gt; exec5.cluster.stats.local 1
</span><br>
<span class="quotelev2">&gt;&gt; batch.q_at_exec5.cluster.stats.local
</span><br>
<span class="quotelev2">&gt;&gt;   0,1
</span><br>
<span class="quotelev2">&gt;&gt; exec4.cluster.stats.local 1
</span><br>
<span class="quotelev2">&gt;&gt; batch.q_at_exec4.cluster.stats.local
</span><br>
<span class="quotelev2">&gt;&gt;   0,1
</span><br>
<span class="quotelev2">&gt;&gt; exec3.cluster.stats.local 1
</span><br>
<span class="quotelev2">&gt;&gt; batch.q_at_exec3.cluster.stats.local
</span><br>
<span class="quotelev2">&gt;&gt;   0,1
</span><br>
<span class="quotelev2">&gt;&gt; exec2.cluster.stats.local 1
</span><br>
<span class="quotelev2">&gt;&gt; batch.q_at_exec2.cluster.stats.local
</span><br>
<span class="quotelev2">&gt;&gt;   0,1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Case 2:
</span><br>
<span class="quotelev2">&gt;&gt; Notice that, because I have specified the -binding pe linear:1, each execution node binds processes for the job_id to one core.  If I have -binding pe linear:2, I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; exec6.cluster.stats.local 2
</span><br>
<span class="quotelev2">&gt;&gt; batch.q_at_exec6.cluster.stats.local
</span><br>
<span class="quotelev2">&gt;&gt;   0,1:0,2
</span><br>
<span class="quotelev2">&gt;&gt; exec1.cluster.stats.local 1
</span><br>
<span class="quotelev2">&gt;&gt; batch.q_at_exec1.cluster.stats.local
</span><br>
<span class="quotelev2">&gt;&gt;   0,1:0,2
</span><br>
<span class="quotelev2">&gt;&gt; exec7.cluster.stats.local 1
</span><br>
<span class="quotelev2">&gt;&gt; batch.q_at_exec7.cluster.stats.local
</span><br>
<span class="quotelev2">&gt;&gt;   0,1:0,2
</span><br>
<span class="quotelev2">&gt;&gt; exec4.cluster.stats.local 1
</span><br>
<span class="quotelev2">&gt;&gt; batch.q_at_exec4.cluster.stats.local
</span><br>
<span class="quotelev2">&gt;&gt;   0,1:0,2
</span><br>
<span class="quotelev2">&gt;&gt; exec3.cluster.stats.local 1
</span><br>
<span class="quotelev2">&gt;&gt; batch.q_at_exec3.cluster.stats.local
</span><br>
<span class="quotelev2">&gt;&gt;   0,1:0,2
</span><br>
<span class="quotelev2">&gt;&gt; exec2.cluster.stats.local 1
</span><br>
<span class="quotelev2">&gt;&gt; batch.q_at_exec2.cluster.stats.local
</span><br>
<span class="quotelev2">&gt;&gt;   0,1:0,2
</span><br>
<span class="quotelev2">&gt;&gt; exec5.cluster.stats.local 1
</span><br>
<span class="quotelev2">&gt;&gt; batch.q_at_exec5.cluster.stats.local
</span><br>
<span class="quotelev2">&gt;&gt;   0,1:0,2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is your complaint really the fact that exec6 has been allocated two slots but there seems to only be one slot worth of resources allocated
</span><br>
<span class="quotelev1">&gt; All are wrong except exec6. They should only get one core assigned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Huh?  I would have thought exec6 would get 4 cores and the rest are correct.
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; to it (ie in case one exec6 only has 1 core and case 2 it has two where maybe you'd expect 2 and 4 cores allocated respectively)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Mail-Anhang.gif&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev2">&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14770/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14770/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14771.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14769.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14769.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14771.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14771.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14772.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
