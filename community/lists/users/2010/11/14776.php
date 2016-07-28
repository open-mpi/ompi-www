<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 06:08:08 2010" -->
<!-- isoreceived="20101116110808" -->
<!-- sent="Tue, 16 Nov 2010 12:07:57 +0100" -->
<!-- isosent="20101116110757" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="E6D4DC1D-D838-4D58-A4B0-49AEEEC6DDD2_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7E2C45A0-DBD8-4321-A2BF-7A66C73FC343_at_warwick.ac.uk" -->
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
<strong>Date:</strong> 2010-11-16 06:07:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14777.php">Jeff Squyres: "Re: [OMPI users] source code for presentation/papers"</a>
<li><strong>Previous message:</strong> <a href="14775.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14774.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14778.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14778.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 16.11.2010 um 10:26 schrieb Chris Jewell:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 11/15/2010 02:11 PM, Reuti wrote: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just to give my understanding of the problem: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sorry, I am still trying to grok all your email as what the problem you 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; are trying to solve. So is the issue is trying to have two jobs having 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; processes on the same node be able to bind there processes on different 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; resources. Like core 1 for the first job and core 2 and 3 for the 2nd job? 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --td 
</span><br>
<span class="quotelev2">&gt;&gt; You can't get 2 slots on a machine, as it's limited by the core count to one here, so such a slot allocation shouldn't occur at all. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So to clarify, the current -binding &lt;binding_strategy&gt;:&lt;binding_amount&gt; allocates binding_amount cores to each sge_shepherd process associated with a job_id.  There appears to be only one sge_shepherd process per job_id per execution node, so all child processes run on these allocated cores.  This is irrespective of the number of slots allocated to the node.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree with Reuti that the binding_amount parameter should be a maximum number of bound cores per node, with the actual number determined by the number of slots allocated per node.  FWIW, an alternative approach might be to have another binding_type ('slot', say) that automatically allocated one core per slot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, a complex situation might arise if a user submits a combined MPI/multithreaded job, but then I guess we're into the realm of setting allocation_rule.
</span><br>
<p>IIRC there was a discussion on the [GE users] list about it, to get an uniform distribution on all slave nodes for such jobs, as also e.g. $OMP_NUM_THREADS will be set to the same value for all slave nodes for hybrid jobs. Otherwise it would be necessary to adjust SGE to set this value in the &quot;-builtin-&quot; startup method automatically on all nodes to the local granted slots value. For now a fixed allocation rule of 1,2,4 or whatever must be used and you have to submit by reqeusting a wildcard PE to get any of these defined PEs for an even distribution and you don't care whether it's two times two slots, one time four slots, or four times one slot.
<br>
<p>In my understanding, any type of parallel job should always request and get the total number of slots equal to the cores it needs to execute. Independent whether these are threads, forks or any hybrid type of jobs. Otherwise any resource planing and reservation will most likely fail. Nevertheless, there might exist rare cases where you submit an exclusive serial job but create threads/forks in the end. But such a setup should be an exception, not the default.
<br>
<p><p><span class="quotelev1">&gt; Is it going to be worth looking at creating a patch for this?
</span><br>
<p>Absolute.
<br>
<p><p><span class="quotelev1">&gt;  I don't know much of the internals of SGE -- would it be hard work to do?  I've not that much time to dedicate towards it, but I could put some effort in if necessary...
</span><br>
<p>I don't know about the exact coding for it, but when it's for now a plain &quot;copy&quot; of the binding list, then it should become a loop to create a list of cores from the original specification until all granted slots got a core allocated.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="14777.php">Jeff Squyres: "Re: [OMPI users] source code for presentation/papers"</a>
<li><strong>Previous message:</strong> <a href="14775.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14774.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14778.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14778.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
