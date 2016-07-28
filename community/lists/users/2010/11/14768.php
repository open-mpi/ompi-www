<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 15 13:57:20 2010" -->
<!-- isoreceived="20101115185720" -->
<!-- sent="Mon, 15 Nov 2010 13:57:03 -0500" -->
<!-- isosent="20101115185703" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="4CE1827F.9070500_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2A260427-EF45-4D33-BE62-0559FD4E3930_at_warwick.ac.uk" -->
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
<strong>Date:</strong> 2010-11-15 13:57:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14769.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14767.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14766.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14769.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14769.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/15/2010 11:08 AM, Chris Jewell wrote:
<br>
<span class="quotelev2">&gt;&gt; Sorry, I am still trying to grok all your email as what the problem you
</span><br>
<span class="quotelev2">&gt;&gt; are trying to solve. So is the issue is trying to have two jobs having
</span><br>
<span class="quotelev2">&gt;&gt; processes on the same node be able to bind there processes on different
</span><br>
<span class="quotelev2">&gt;&gt; resources. Like core 1 for the first job and core 2 and 3 for the 2nd job?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev1">&gt; That's exactly it.  Each MPI process needs to be bound to 1 processor in a way that reflects GE's slot allocation scheme.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I actually don't think that I got it.  So you give two cases:
<br>
<p>Case 1:
<br>
<p>$ qsub -pe mpi 8 -binding pe linear:1 myScript.com
<br>
<p>and my pe_hostfile looks like:
<br>
<p>exec6.cluster.stats.local 2batch.q_at_exec6.cluster.stats.local  0,1
<br>
exec1.cluster.stats.local 1batch.q_at_exec1.cluster.stats.local  0,1
<br>
exec7.cluster.stats.local 1batch.q_at_exec7.cluster.stats.local  0,1
<br>
exec5.cluster.stats.local 1batch.q_at_exec5.cluster.stats.local  0,1
<br>
exec4.cluster.stats.local 1batch.q_at_exec4.cluster.stats.local  0,1
<br>
exec3.cluster.stats.local 1batch.q_at_exec3.cluster.stats.local  0,1
<br>
exec2.cluster.stats.local 1batch.q_at_exec2.cluster.stats.local  0,1
<br>
<p><p>Case 2:
<br>
<p>Notice that, because I have specified the -binding pe linear:1, each execution node binds processes for the job_id to one core.  If I have -binding pe linear:2, I get:
<br>
<p>exec6.cluster.stats.local 2batch.q_at_exec6.cluster.stats.local  0,1:0,2
<br>
exec1.cluster.stats.local 1batch.q_at_exec1.cluster.stats.local  0,1:0,2
<br>
exec7.cluster.stats.local 1batch.q_at_exec7.cluster.stats.local  0,1:0,2
<br>
exec4.cluster.stats.local 1batch.q_at_exec4.cluster.stats.local  0,1:0,2
<br>
exec3.cluster.stats.local 1batch.q_at_exec3.cluster.stats.local  0,1:0,2
<br>
exec2.cluster.stats.local 1batch.q_at_exec2.cluster.stats.local  0,1:0,2
<br>
exec5.cluster.stats.local 1batch.q_at_exec5.cluster.stats.local  0,1:0,2
<br>
<p>Is your complaint really the fact that exec6 has been allocated two 
<br>
slots but there seems to only be one slot worth of resources allocated 
<br>
to it (ie in case one exec6 only has 1 core and case 2 it has two where 
<br>
maybe you'd expect 2 and 4 cores allocated respectively)?
<br>
<p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14768/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14768/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14769.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14767.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14766.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14769.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14769.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
