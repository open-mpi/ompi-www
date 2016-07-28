<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 15 10:26:31 2010" -->
<!-- isoreceived="20101115152631" -->
<!-- sent="Mon, 15 Nov 2010 10:26:09 -0500" -->
<!-- isosent="20101115152609" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="4CE15111.7000608_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-15 10:26:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14763.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14761.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14760.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14763.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I am still trying to grok all your email as what the problem you 
<br>
are trying to solve.  So is the issue is trying to have two jobs having 
<br>
processes on the same node be able to bind there processes on different 
<br>
resources.  Like core 1 for the first job and core 2 and 3 for the 2nd job?
<br>
<p>--td
<br>
<p>On 11/15/2010 09:29 AM, Chris Jewell wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If, indeed, it is not possible currently to implement this type of core-binding in tightly integrated OpenMPI/GE, then a solution might lie in a custom script run in the parallel environment's 'start proc args'. This script would have to find out which slots are allocated where on the cluster, and write an OpenMPI rankfile.
</span><br>
<span class="quotelev2">&gt;&gt; Exactly this should work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you use &quot;binding_instance&quot; &quot;pe&quot; and reformat the information in the $PE_HOSTFILE to a &quot;rankfile&quot;, it should work to get the desired allocation. Maybe you can share the script with this list once you got it working.
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
<span class="quotelev1">&gt; exec1.cluster.stats.local 1 batch.q_at_exec1.cluster.stats.local 0,1:0,2
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14762/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14762/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14763.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14761.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14760.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14763.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
