<?
$subject_val = "[OMPI devel] RTE node allocation component";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 13 12:07:28 2012" -->
<!-- isoreceived="20120413160728" -->
<!-- sent="Fri, 13 Apr 2012 19:07:15 +0300" -->
<!-- isosent="20120413160715" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="[OMPI devel] RTE node allocation component" -->
<!-- id="4F884F33.6010307_at_mail.huji.ac.il" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] RTE node allocation component<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-13 12:07:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10861.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
<li><strong>Previous message:</strong> <a href="10859.php">TERRY DONTJE: "Re: [OMPI devel] r26255 has made openib unusable on Solaris platforms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10862.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Reply:</strong> <a href="10862.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The next component I'm writing is a component for allocating nodes to
<br>
run the processes of an MPI job.
<br>
Suppose I have a &quot;getbestnode&quot; executable which not only tells me the
<br>
best location for spawning a new process,
<br>
but it also reserves the space (for some time), so that every time I run
<br>
it I get different results (as the best cores are already reserved).
<br>
<p>I thought I should write a component under orte/mca/ras, similar to
<br>
loadleveler, but the problem is that I can't determine inside the module
<br>
the amount of slots required allocate. It gets an list to fill in as a 
<br>
parameter, and
<br>
I guess it assumes I somehow know how many processes are run because the
<br>
allocation was done externally and now I'm just asking the allocator for
<br>
the list.
<br>
<p>A related location, the rmaps, has this information (and much more), but
<br>
it doesn't look like a good location for such a module since it maps
<br>
already allocated resources, and has a lot of irrelevant code in this case.
<br>
<p>Maybe the answer is to change the base module a bit, to contain this
<br>
information? It could be used as a decent sanity check for other modules
<br>
- making sure the external allocation fits the amount of processes we
<br>
intend to run. Maybe orte_ras_base_allocate(orte_job_t *jdata) in
<br>
ras_base_allocate.c can store the relevant information from jdata in
<br>
orte_ras_base? In the long run it can become a parameter passed to the
<br>
ras components, but for backwards-compatability the global will do for now.
<br>
<p>Thanks,
<br>
Alex
<br>
<p>P.S. An RDS component is elaborately mentioned in ras.h, yet it is no
<br>
longer available, right?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10861.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
<li><strong>Previous message:</strong> <a href="10859.php">TERRY DONTJE: "Re: [OMPI devel] r26255 has made openib unusable on Solaris platforms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10862.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Reply:</strong> <a href="10862.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
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
