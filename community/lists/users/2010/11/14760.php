<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 15 09:29:15 2010" -->
<!-- isoreceived="20101115142915" -->
<!-- sent="Mon, 15 Nov 2010 14:29:06 +0000" -->
<!-- isosent="20101115142906" -->
<!-- name="Chris Jewell" -->
<!-- email="chris.jewell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="9E57FF46-5E36-4787-B023-EA94B089F451_at_warwick.ac.uk" -->
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
<strong>Date:</strong> 2010-11-15 09:29:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14761.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14759.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14371.php">Chris Jewell: "[OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14761.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14761.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14762.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev2">&gt; &gt; If, indeed, it is not possible currently to implement this type of core-binding in tightly integrated OpenMPI/GE, then a solution might lie in a custom script run in the parallel environment's 'start proc args'. This script would have to find out which slots are allocated where on the cluster, and write an OpenMPI rankfile. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Exactly this should work. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you use &quot;binding_instance&quot; &quot;pe&quot; and reformat the information in the $PE_HOSTFILE to a &quot;rankfile&quot;, it should work to get the desired allocation. Maybe you can share the script with this list once you got it working. 
</span><br>
<p><p>As far as I can see, that's not going to work.  This is because, exactly like &quot;binding_instance&quot; &quot;set&quot;, for -binding pe linear:n you get n cores bound per node.  This is easily verifiable by using a long job and examining the pe_hostfile.  For example, I submit a job with:
<br>
<p>$ qsub -pe mpi 8 -binding pe linear:1 myScript.com
<br>
<p>and my pe_hostfile looks like:
<br>
<p>exec6.cluster.stats.local 2 batch.q_at_exec6.cluster.stats.local 0,1
<br>
exec1.cluster.stats.local 1 batch.q_at_exec1.cluster.stats.local 0,1
<br>
exec7.cluster.stats.local 1 batch.q_at_exec7.cluster.stats.local 0,1
<br>
exec5.cluster.stats.local 1 batch.q_at_exec5.cluster.stats.local 0,1
<br>
exec4.cluster.stats.local 1 batch.q_at_exec4.cluster.stats.local 0,1
<br>
exec3.cluster.stats.local 1 batch.q_at_exec3.cluster.stats.local 0,1
<br>
exec2.cluster.stats.local 1 batch.q_at_exec2.cluster.stats.local 0,1
<br>
<p>Notice that, because I have specified the -binding pe linear:1, each execution node binds processes for the job_id to one core.  If I have -binding pe linear:2, I get:
<br>
<p>exec6.cluster.stats.local 2 batch.q_at_exec6.cluster.stats.local 0,1:0,2
<br>
exec1.cluster.stats.local 1 batch.q_at_exec1.cluster.stats.local 0,1:0,2
<br>
exec7.cluster.stats.local 1 batch.q_at_exec7.cluster.stats.local 0,1:0,2
<br>
exec4.cluster.stats.local 1 batch.q_at_exec4.cluster.stats.local 0,1:0,2
<br>
exec3.cluster.stats.local 1 batch.q_at_exec3.cluster.stats.local 0,1:0,2
<br>
exec2.cluster.stats.local 1 batch.q_at_exec2.cluster.stats.local 0,1:0,2
<br>
exec5.cluster.stats.local 1 batch.q_at_exec5.cluster.stats.local 0,1:0,2
<br>
<p>So the pe_hostfile still doesn't give an accurate representation of the binding allocation for use by OpenMPI.  Question: is there a system file or command that I could use to check which processors are &quot;occupied&quot;?
<br>
<p>Chris
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
<li><strong>Next message:</strong> <a href="14761.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14759.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14371.php">Chris Jewell: "[OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14761.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14761.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14762.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
