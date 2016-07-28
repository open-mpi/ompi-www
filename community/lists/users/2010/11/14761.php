<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 15 09:42:27 2010" -->
<!-- isoreceived="20101115144227" -->
<!-- sent="Mon, 15 Nov 2010 15:42:05 +0100" -->
<!-- isosent="20101115144205" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="2793E7D3-44FB-4C9B-A5D6-A2DE3492D151_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9E57FF46-5E36-4787-B023-EA94B089F451_at_warwick.ac.uk" -->
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
<strong>Date:</strong> 2010-11-15 09:42:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14762.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14760.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14760.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14762.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 15.11.2010 um 15:29 schrieb Chris Jewell:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If, indeed, it is not possible currently to implement this type of core-binding in tightly integrated OpenMPI/GE, then a solution might lie in a custom script run in the parallel environment's 'start proc args'. This script would have to find out which slots are allocated where on the cluster, and write an OpenMPI rankfile. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Exactly this should work. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you use &quot;binding_instance&quot; &quot;pe&quot; and reformat the information in the $PE_HOSTFILE to a &quot;rankfile&quot;, it should work to get the desired allocation. Maybe you can share the script with this list once you got it working. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I can see, that's not going to work.  This is because, exactly like &quot;binding_instance&quot; &quot;set&quot;, for -binding pe linear:n you get n cores bound per node.  This is easily verifiable by using a long job and examining the pe_hostfile.  For example, I submit a job with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ qsub -pe mpi 8 -binding pe linear:1 myScript.com
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and my pe_hostfile looks like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; exec6.cluster.stats.local 2 batch.q_at_exec6.cluster.stats.local 0,1
</span><br>
<span class="quotelev1">&gt; exec1.cluster.stats.local 1 batch.q_at_exec1.cluster.stats.local 0,1
</span><br>
<span class="quotelev1">&gt; exec7.cluster.stats.local 1 batch.q_at_exec7.cluster.stats.local 0,1
</span><br>
<span class="quotelev1">&gt; exec5.cluster.stats.local 1 batch.q_at_exec5.cluster.stats.local 0,1
</span><br>
<span class="quotelev1">&gt; exec4.cluster.stats.local 1 batch.q_at_exec4.cluster.stats.local 0,1
</span><br>
<span class="quotelev1">&gt; exec3.cluster.stats.local 1 batch.q_at_exec3.cluster.stats.local 0,1
</span><br>
<span class="quotelev1">&gt; exec2.cluster.stats.local 1 batch.q_at_exec2.cluster.stats.local 0,1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Notice that, because I have specified the -binding pe linear:1, each execution node binds processes for the job_id to one core.  If I have -binding pe linear:2, I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; exec6.cluster.stats.local 2 batch.q_at_exec6.cluster.stats.local 0,1:0,2
</span><br>
<p>So the cores 1 and 2 on socket 0 aren't free?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; exec1.cluster.stats.local 1 batch.q_at_exec1.cluster.stats.local 0,1:0,2
</span><br>
<span class="quotelev1">&gt; exec7.cluster.stats.local 1 batch.q_at_exec7.cluster.stats.local 0,1:0,2
</span><br>
<span class="quotelev1">&gt; exec4.cluster.stats.local 1 batch.q_at_exec4.cluster.stats.local 0,1:0,2
</span><br>
<span class="quotelev1">&gt; exec3.cluster.stats.local 1 batch.q_at_exec3.cluster.stats.local 0,1:0,2
</span><br>
<span class="quotelev1">&gt; exec2.cluster.stats.local 1 batch.q_at_exec2.cluster.stats.local 0,1:0,2
</span><br>
<span class="quotelev1">&gt; exec5.cluster.stats.local 1 batch.q_at_exec5.cluster.stats.local 0,1:0,2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the pe_hostfile still doesn't give an accurate representation of the binding allocation for use by OpenMPI.  Question: is there a system file or command that I could use to check which processors are &quot;occupied&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chris
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
<li><strong>Next message:</strong> <a href="14762.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14760.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14760.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14762.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
