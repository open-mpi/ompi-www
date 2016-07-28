<?
$subject_val = "Re: [OMPI devel] RTE node allocation component";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 13 12:43:35 2012" -->
<!-- isoreceived="20120413164335" -->
<!-- sent="Fri, 13 Apr 2012 10:43:28 -0600" -->
<!-- isosent="20120413164328" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE node allocation component" -->
<!-- id="7B847416-4F02-4BA2-8260-6A68CBA5DAE5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F884F33.6010307_at_mail.huji.ac.il" -->
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
<strong>Date:</strong> 2012-04-13 12:43:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10863.php">TERRY DONTJE: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
<li><strong>Previous message:</strong> <a href="10861.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
<li><strong>In reply to:</strong> <a href="10860.php">Alex Margolin: "[OMPI devel] RTE node allocation component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10871.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Reply:</strong> <a href="10871.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like you are using an old version - the trunk RAS has changed a bit. I'll shortly be implementing further changes to support dynamic allocation requests that might be relevant here as well.
<br>
<p>Adding job data to the RAS base isn't a good idea - remember, multiple jobs can be launching at the same time!
<br>
<p>On Apr 13, 2012, at 10:07 AM, Alex Margolin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The next component I'm writing is a component for allocating nodes to
</span><br>
<span class="quotelev1">&gt; run the processes of an MPI job.
</span><br>
<span class="quotelev1">&gt; Suppose I have a &quot;getbestnode&quot; executable which not only tells me the
</span><br>
<span class="quotelev1">&gt; best location for spawning a new process,
</span><br>
<span class="quotelev1">&gt; but it also reserves the space (for some time), so that every time I run
</span><br>
<span class="quotelev1">&gt; it I get different results (as the best cores are already reserved).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought I should write a component under orte/mca/ras, similar to
</span><br>
<span class="quotelev1">&gt; loadleveler, but the problem is that I can't determine inside the module
</span><br>
<span class="quotelev1">&gt; the amount of slots required allocate. It gets an list to fill in as a parameter, and
</span><br>
<span class="quotelev1">&gt; I guess it assumes I somehow know how many processes are run because the
</span><br>
<span class="quotelev1">&gt; allocation was done externally and now I'm just asking the allocator for
</span><br>
<span class="quotelev1">&gt; the list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A related location, the rmaps, has this information (and much more), but
</span><br>
<span class="quotelev1">&gt; it doesn't look like a good location for such a module since it maps
</span><br>
<span class="quotelev1">&gt; already allocated resources, and has a lot of irrelevant code in this case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe the answer is to change the base module a bit, to contain this
</span><br>
<span class="quotelev1">&gt; information? It could be used as a decent sanity check for other modules
</span><br>
<span class="quotelev1">&gt; - making sure the external allocation fits the amount of processes we
</span><br>
<span class="quotelev1">&gt; intend to run. Maybe orte_ras_base_allocate(orte_job_t *jdata) in
</span><br>
<span class="quotelev1">&gt; ras_base_allocate.c can store the relevant information from jdata in
</span><br>
<span class="quotelev1">&gt; orte_ras_base? In the long run it can become a parameter passed to the
</span><br>
<span class="quotelev1">&gt; ras components, but for backwards-compatability the global will do for now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. An RDS component is elaborately mentioned in ras.h, yet it is no
</span><br>
<span class="quotelev1">&gt; longer available, right?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="10863.php">TERRY DONTJE: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
<li><strong>Previous message:</strong> <a href="10861.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
<li><strong>In reply to:</strong> <a href="10860.php">Alex Margolin: "[OMPI devel] RTE node allocation component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10871.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Reply:</strong> <a href="10871.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
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
