<?
$subject_val = "Re: [OMPI devel] RTE node allocation component";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 14 16:55:16 2012" -->
<!-- isoreceived="20120414205516" -->
<!-- sent="Sat, 14 Apr 2012 23:55:02 +0300" -->
<!-- isosent="20120414205502" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE node allocation component" -->
<!-- id="4F89E426.5020709_at_mail.huji.ac.il" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7B847416-4F02-4BA2-8260-6A68CBA5DAE5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTE node allocation component<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-14 16:55:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10872.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Previous message:</strong> <a href="10870.php">TERRY DONTJE: "Re: [OMPI devel] Non-zero exit status"</a>
<li><strong>In reply to:</strong> <a href="10862.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10872.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Reply:</strong> <a href="10872.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As to the old version: I'm working in parallel on a patch to branch 1.6 
<br>
and the trunk, which (the patches, not the versions) are almost identical.
<br>
There is a minor difference in my patch for the RAS: in the trunk I used 
<br>
the preexisting total_slots_alloc while in 1.6 I added it to 
<br>
orte_ras_base (exactly whee it is located in the trunk). I admit it's 
<br>
not the original intent of the author of orte_ras_base data struct 
<br>
specifically or maybe even the RAS component in general, but I see no 
<br>
other way to implement it now...
<br>
<p>What I've written for RAS (attached is my current patch for the 1.6 
<br>
branch, incl. BTL and ODLS modules previously sent here) is a module 
<br>
which does 2 things (for mpirun -n X foo):
<br>
1. Waits for X slots to become available somewhere in the cluster (optional)
<br>
2. Create the allocation composed of the X best machines to use
<br>
- This requires the RAS module to know the amount of slots to allocate 
<br>
in advance... is there a better way to do it? (in 1.6/trunk?)
<br>
I tried to access the orte_job_t struct using my jobid from inside the 
<br>
ras module, but that struct isn't initialized with content at that time.
<br>
<p>Thanks,
<br>
Alex
<br>
<p>P.S. I'm preparing a patch for both 1.6 branch and trunk because I want 
<br>
to do some benchmarking (note saying trunk is bad for this purpose) and 
<br>
I want it to be available in the long run. Am I missing something here? 
<br>
I hope I'll get the contributor paper signed so I can commit rather then 
<br>
working on my laptop...
<br>
<p><p>On 04/13/2012 07:43 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Looks like you are using an old version - the trunk RAS has changed a bit. I'll shortly be implementing further changes to support dynamic allocation requests that might be relevant here as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Adding job data to the RAS base isn't a good idea - remember, multiple jobs can be launching at the same time!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 13, 2012, at 10:07 AM, Alex Margolin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The next component I'm writing is a component for allocating nodes to
</span><br>
<span class="quotelev2">&gt;&gt; run the processes of an MPI job.
</span><br>
<span class="quotelev2">&gt;&gt; Suppose I have a &quot;getbestnode&quot; executable which not only tells me the
</span><br>
<span class="quotelev2">&gt;&gt; best location for spawning a new process,
</span><br>
<span class="quotelev2">&gt;&gt; but it also reserves the space (for some time), so that every time I run
</span><br>
<span class="quotelev2">&gt;&gt; it I get different results (as the best cores are already reserved).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I thought I should write a component under orte/mca/ras, similar to
</span><br>
<span class="quotelev2">&gt;&gt; loadleveler, but the problem is that I can't determine inside the module
</span><br>
<span class="quotelev2">&gt;&gt; the amount of slots required allocate. It gets an list to fill in as a parameter, and
</span><br>
<span class="quotelev2">&gt;&gt; I guess it assumes I somehow know how many processes are run because the
</span><br>
<span class="quotelev2">&gt;&gt; allocation was done externally and now I'm just asking the allocator for
</span><br>
<span class="quotelev2">&gt;&gt; the list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A related location, the rmaps, has this information (and much more), but
</span><br>
<span class="quotelev2">&gt;&gt; it doesn't look like a good location for such a module since it maps
</span><br>
<span class="quotelev2">&gt;&gt; already allocated resources, and has a lot of irrelevant code in this case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe the answer is to change the base module a bit, to contain this
</span><br>
<span class="quotelev2">&gt;&gt; information? It could be used as a decent sanity check for other modules
</span><br>
<span class="quotelev2">&gt;&gt; - making sure the external allocation fits the amount of processes we
</span><br>
<span class="quotelev2">&gt;&gt; intend to run. Maybe orte_ras_base_allocate(orte_job_t *jdata) in
</span><br>
<span class="quotelev2">&gt;&gt; ras_base_allocate.c can store the relevant information from jdata in
</span><br>
<span class="quotelev2">&gt;&gt; orte_ras_base? In the long run it can become a parameter passed to the
</span><br>
<span class="quotelev2">&gt;&gt; ras components, but for backwards-compatability the global will do for now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Alex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P.S. An RDS component is elaborately mentioned in ras.h, yet it is no
</span><br>
<span class="quotelev2">&gt;&gt; longer available, right?
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10871/patch-openmpi-1.6">patch-openmpi-1.6</a>
</ul>
<!-- attachment="patch-openmpi-1.6" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10872.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Previous message:</strong> <a href="10870.php">TERRY DONTJE: "Re: [OMPI devel] Non-zero exit status"</a>
<li><strong>In reply to:</strong> <a href="10862.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10872.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Reply:</strong> <a href="10872.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
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
