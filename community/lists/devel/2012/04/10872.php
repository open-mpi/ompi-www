<?
$subject_val = "Re: [OMPI devel] RTE node allocation component";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 14 17:36:55 2012" -->
<!-- isoreceived="20120414213655" -->
<!-- sent="Sat, 14 Apr 2012 15:36:46 -0600" -->
<!-- isosent="20120414213646" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE node allocation component" -->
<!-- id="65ED6685-F3CB-4DD7-AA6B-11B93084EC1D_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F89E426.5020709_at_mail.huji.ac.il" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-14 17:36:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10873.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Previous message:</strong> <a href="10871.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>In reply to:</strong> <a href="10871.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10873.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Reply:</strong> <a href="10873.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Reply:</strong> <a href="10874.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The 1.6 branch is a stable series - no new features will be added to it, so your patch won't be going there. I'd focus solely on the trunk.
<br>
<p>What you're doing with he RAS is fine for now. In the next few days, I'll be changing the API to the RAS components, but it isn't a big change and we can adjust as you get closer. The orte_job_t object does contain the number of procs to be launched prior to the RAS being invoked, but you have to compute it. Each app_context contains that number - so to get it for the job, you cycle across all the app_contexts and add it up.
<br>
<p>The mapper assigns the final num_procs value in the orte_job_t object. We do this because the user can also run the job without specifying the number of procs, and we'll simply run one proc for every allocated slot. It's a popular option, but wouldn't work here for obvious reasons.
<br>
<p><p>On Apr 14, 2012, at 2:55 PM, Alex Margolin wrote:
<br>
<p><span class="quotelev1">&gt; As to the old version: I'm working in parallel on a patch to branch 1.6 and the trunk, which (the patches, not the versions) are almost identical.
</span><br>
<span class="quotelev1">&gt; There is a minor difference in my patch for the RAS: in the trunk I used the preexisting total_slots_alloc while in 1.6 I added it to orte_ras_base (exactly whee it is located in the trunk). I admit it's not the original intent of the author of orte_ras_base data struct specifically or maybe even the RAS component in general, but I see no other way to implement it now...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I've written for RAS (attached is my current patch for the 1.6 branch, incl. BTL and ODLS modules previously sent here) is a module which does 2 things (for mpirun -n X foo):
</span><br>
<span class="quotelev1">&gt; 1. Waits for X slots to become available somewhere in the cluster (optional)
</span><br>
<span class="quotelev1">&gt; 2. Create the allocation composed of the X best machines to use
</span><br>
<span class="quotelev1">&gt; - This requires the RAS module to know the amount of slots to allocate in advance... is there a better way to do it? (in 1.6/trunk?)
</span><br>
<span class="quotelev1">&gt; I tried to access the orte_job_t struct using my jobid from inside the ras module, but that struct isn't initialized with content at that time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. I'm preparing a patch for both 1.6 branch and trunk because I want to do some benchmarking (note saying trunk is bad for this purpose) and I want it to be available in the long run. Am I missing something here? I hope I'll get the contributor paper signed so I can commit rather then working on my laptop...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/13/2012 07:43 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Looks like you are using an old version - the trunk RAS has changed a bit. I'll shortly be implementing further changes to support dynamic allocation requests that might be relevant here as well.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Adding job data to the RAS base isn't a good idea - remember, multiple jobs can be launching at the same time!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 13, 2012, at 10:07 AM, Alex Margolin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The next component I'm writing is a component for allocating nodes to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run the processes of an MPI job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Suppose I have a &quot;getbestnode&quot; executable which not only tells me the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; best location for spawning a new process,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but it also reserves the space (for some time), so that every time I run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it I get different results (as the best cores are already reserved).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I thought I should write a component under orte/mca/ras, similar to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loadleveler, but the problem is that I can't determine inside the module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the amount of slots required allocate. It gets an list to fill in as a parameter, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess it assumes I somehow know how many processes are run because the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation was done externally and now I'm just asking the allocator for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A related location, the rmaps, has this information (and much more), but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it doesn't look like a good location for such a module since it maps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; already allocated resources, and has a lot of irrelevant code in this case.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe the answer is to change the base module a bit, to contain this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information? It could be used as a decent sanity check for other modules
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - making sure the external allocation fits the amount of processes we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intend to run. Maybe orte_ras_base_allocate(orte_job_t *jdata) in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ras_base_allocate.c can store the relevant information from jdata in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_ras_base? In the long run it can become a parameter passed to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ras components, but for backwards-compatability the global will do for now.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alex
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P.S. An RDS component is elaborately mentioned in ras.h, yet it is no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; longer available, right?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; &lt;patch-openmpi-1.6&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10873.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Previous message:</strong> <a href="10871.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>In reply to:</strong> <a href="10871.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10873.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Reply:</strong> <a href="10873.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Reply:</strong> <a href="10874.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
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
