<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 04:26:27 2010" -->
<!-- isoreceived="20101116092627" -->
<!-- sent="Tue, 16 Nov 2010 09:26:19 +0000" -->
<!-- isosent="20101116092619" -->
<!-- name="Chris Jewell" -->
<!-- email="chris.jewell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="7E2C45A0-DBD8-4321-A2BF-7A66C73FC343_at_warwick.ac.uk" -->
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
<strong>Date:</strong> 2010-11-16 04:26:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14775.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14773.php">tmishima_at_[hidden]: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14371.php">Chris Jewell: "[OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14775.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14775.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14776.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p><span class="quotelev1">&gt; On 11/15/2010 02:11 PM, Reuti wrote: 
</span><br>
<span class="quotelev2">&gt;&gt; Just to give my understanding of the problem: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sorry, I am still trying to grok all your email as what the problem you 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are trying to solve. So is the issue is trying to have two jobs having 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes on the same node be able to bind there processes on different 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; resources. Like core 1 for the first job and core 2 and 3 for the 2nd job? 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --td 
</span><br>
<span class="quotelev1">&gt; You can't get 2 slots on a machine, as it's limited by the core count to one here, so such a slot allocation shouldn't occur at all. 
</span><br>
<p>So to clarify, the current -binding &lt;binding_strategy&gt;:&lt;binding_amount&gt; allocates binding_amount cores to each sge_shepherd process associated with a job_id.  There appears to be only one sge_shepherd process per job_id per execution node, so all child processes run on these allocated cores.  This is irrespective of the number of slots allocated to the node.  
<br>
<p>I agree with Reuti that the binding_amount parameter should be a maximum number of bound cores per node, with the actual number determined by the number of slots allocated per node.  FWIW, an alternative approach might be to have another binding_type ('slot', say) that automatically allocated one core per slot.
<br>
<p>Of course, a complex situation might arise if a user submits a combined MPI/multithreaded job, but then I guess we're into the realm of setting allocation_rule.
<br>
<p>Is it going to be worth looking at creating a patch for this?  I don't know much of the internals of SGE -- would it be hard work to do?  I've not that much time to dedicate towards it, but I could put some effort in if necessary...
<br>
<p>Chris
<br>
&nbsp;
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
<li><strong>Next message:</strong> <a href="14775.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14773.php">tmishima_at_[hidden]: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14371.php">Chris Jewell: "[OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14775.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14775.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14776.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
