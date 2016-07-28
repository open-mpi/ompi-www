<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 08:07:49 2010" -->
<!-- isoreceived="20101116130749" -->
<!-- sent="Tue, 16 Nov 2010 06:07:36 -0700" -->
<!-- isosent="20101116130736" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="AANLkTim2hDZuAfYCewwWEepxQA+391DxFG1WOULuW8FM_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E6D4DC1D-D838-4D58-A4B0-49AEEEC6DDD2_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-16 08:07:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14779.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14777.php">Jeff Squyres: "Re: [OMPI users] source code for presentation/papers"</a>
<li><strong>In reply to:</strong> <a href="14776.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14779.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14779.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perhaps I'm missing it, but it seems to me that the real problem lies in the
<br>
interaction between SGE and OMPI during OMPI's two-phase launch. The verbose
<br>
output shows that SGE dutifully allocated the requested number of cores on
<br>
each node. However, OMPI launches only one process on each node (the ORTE
<br>
daemon), which SGE &quot;binds&quot; to a single core since that is what it was told
<br>
to do.
<br>
<p>Since SGE never sees the local MPI procs spawned by ORTE, it can't assign
<br>
bindings to them. The ORTE daemon senses its local binding (i.e., to a
<br>
single core in the allocation), and subsequently binds all its local procs
<br>
to that core.
<br>
<p>I believe all you need to do is tell SGE to:
<br>
<p>1. allocate a specified number of cores on each node to your job
<br>
<p>2. have SGE bind procs it launches to -all- of those cores. I believe SGE
<br>
does this automatically to constrain the procs to running on only those
<br>
cores.
<br>
<p>3. tell OMPI to --bind-to-core.
<br>
<p>In other words, tell SGE to allocate a certain number of cores on each node,
<br>
but to bind each proc to all of them (i.e., don't bind a proc to a specific
<br>
core). I'm pretty sure that is a standard SGE option today (at least, I know
<br>
it used to be). I don't believe any patch or devel work is required (to
<br>
either SGE or OMPI).
<br>
<p><p><p>On Tue, Nov 16, 2010 at 4:07 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 16.11.2010 um 10:26 schrieb Chris Jewell:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 11/15/2010 02:11 PM, Reuti wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Just to give my understanding of the problem:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Sorry, I am still trying to grok all your email as what the problem
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; are trying to solve. So is the issue is trying to have two jobs
</span><br>
<span class="quotelev1">&gt; having
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; processes on the same node be able to bind there processes on
</span><br>
<span class="quotelev1">&gt; different
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; resources. Like core 1 for the first job and core 2 and 3 for the
</span><br>
<span class="quotelev1">&gt; 2nd job?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You can't get 2 slots on a machine, as it's limited by the core count to
</span><br>
<span class="quotelev1">&gt; one here, so such a slot allocation shouldn't occur at all.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So to clarify, the current -binding &lt;binding_strategy&gt;:&lt;binding_amount&gt;
</span><br>
<span class="quotelev1">&gt; allocates binding_amount cores to each sge_shepherd process associated with
</span><br>
<span class="quotelev1">&gt; a job_id.  There appears to be only one sge_shepherd process per job_id per
</span><br>
<span class="quotelev1">&gt; execution node, so all child processes run on these allocated cores.  This
</span><br>
<span class="quotelev1">&gt; is irrespective of the number of slots allocated to the node.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I agree with Reuti that the binding_amount parameter should be a maximum
</span><br>
<span class="quotelev1">&gt; number of bound cores per node, with the actual number determined by the
</span><br>
<span class="quotelev1">&gt; number of slots allocated per node.  FWIW, an alternative approach might be
</span><br>
<span class="quotelev1">&gt; to have another binding_type ('slot', say) that automatically allocated one
</span><br>
<span class="quotelev1">&gt; core per slot.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Of course, a complex situation might arise if a user submits a combined
</span><br>
<span class="quotelev1">&gt; MPI/multithreaded job, but then I guess we're into the realm of setting
</span><br>
<span class="quotelev1">&gt; allocation_rule.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IIRC there was a discussion on the [GE users] list about it, to get an
</span><br>
<span class="quotelev1">&gt; uniform distribution on all slave nodes for such jobs, as also e.g.
</span><br>
<span class="quotelev1">&gt; $OMP_NUM_THREADS will be set to the same value for all slave nodes for
</span><br>
<span class="quotelev1">&gt; hybrid jobs. Otherwise it would be necessary to adjust SGE to set this value
</span><br>
<span class="quotelev1">&gt; in the &quot;-builtin-&quot; startup method automatically on all nodes to the local
</span><br>
<span class="quotelev1">&gt; granted slots value. For now a fixed allocation rule of 1,2,4 or whatever
</span><br>
<span class="quotelev1">&gt; must be used and you have to submit by reqeusting a wildcard PE to get any
</span><br>
<span class="quotelev1">&gt; of these defined PEs for an even distribution and you don't care whether
</span><br>
<span class="quotelev1">&gt; it's two times two slots, one time four slots, or four times one slot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my understanding, any type of parallel job should always request and get
</span><br>
<span class="quotelev1">&gt; the total number of slots equal to the cores it needs to execute.
</span><br>
<span class="quotelev1">&gt; Independent whether these are threads, forks or any hybrid type of jobs.
</span><br>
<span class="quotelev1">&gt; Otherwise any resource planing and reservation will most likely fail.
</span><br>
<span class="quotelev1">&gt; Nevertheless, there might exist rare cases where you submit an exclusive
</span><br>
<span class="quotelev1">&gt; serial job but create threads/forks in the end. But such a setup should be
</span><br>
<span class="quotelev1">&gt; an exception, not the default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is it going to be worth looking at creating a patch for this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Absolute.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  I don't know much of the internals of SGE -- would it be hard work to
</span><br>
<span class="quotelev1">&gt; do?  I've not that much time to dedicate towards it, but I could put some
</span><br>
<span class="quotelev1">&gt; effort in if necessary...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know about the exact coding for it, but when it's for now a plain
</span><br>
<span class="quotelev1">&gt; &quot;copy&quot; of the binding list, then it should become a loop to create a list of
</span><br>
<span class="quotelev1">&gt; cores from the original specification until all granted slots got a core
</span><br>
<span class="quotelev1">&gt; allocated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Chris
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Dr Chris Jewell
</span><br>
<span class="quotelev2">&gt; &gt; Department of Statistics
</span><br>
<span class="quotelev2">&gt; &gt; University of Warwick
</span><br>
<span class="quotelev2">&gt; &gt; Coventry
</span><br>
<span class="quotelev2">&gt; &gt; CV4 7AL
</span><br>
<span class="quotelev2">&gt; &gt; UK
</span><br>
<span class="quotelev2">&gt; &gt; Tel: +44 (0)24 7615 0778
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14778/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14779.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14777.php">Jeff Squyres: "Re: [OMPI users] source code for presentation/papers"</a>
<li><strong>In reply to:</strong> <a href="14776.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14779.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14779.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
