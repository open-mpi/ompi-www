<?
$subject_val = "[OMPI devel] memory binding";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 16:56:40 2010" -->
<!-- isoreceived="20101210215640" -->
<!-- sent="Sat, 11 Dec 2010 08:56:33 +1100" -->
<!-- isosent="20101210215633" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="[OMPI devel] memory binding" -->
<!-- id="4D02A211.7050703_at_anu.edu.au" -->
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
<strong>Subject:</strong> [OMPI devel] memory binding<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 16:56:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8769.php">Guillaume Thouvenin: "[OMPI devel] [PATCH] OSC/RDMA: Add a missing OBJ_DESTRUCT"</a>
<li><strong>Previous message:</strong> <a href="8767.php">Ralph Castain: "[OMPI devel] Gatekeeper request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8771.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<li><strong>Reply:</strong> <a href="8771.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there any plan to support NUMA memory binding for tasks?
<br>
<p>Even with bind-to-core and memory affinity in 1.4.3 we were seeing 15-20%
<br>
variation in run times on a Nehalem cluster.  This turned out to be mostly due
<br>
to bad page placement.  Residual pagecache pages from the last job on a node (or
<br>
the memory of a suspended job in the case of preemption) could occasionally cause
<br>
a lot of non-local page placement.  We hacked the libnuma module to MPOL_BIND
<br>
tasks to their local memory and eliminated the majority of this variability.
<br>
We are currently running with this as default behaviour since its &quot;the right
<br>
thing&quot; for 99% of jobs (we have an environment variable to back off to affinity
<br>
for the rest).
<br>
<p>I'm guessing/hoping doing the above based on hwloc will be easier/more
<br>
maintainable. As a first pass, when is that likely to be an option?
<br>
<p>David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8769.php">Guillaume Thouvenin: "[OMPI devel] [PATCH] OSC/RDMA: Add a missing OBJ_DESTRUCT"</a>
<li><strong>Previous message:</strong> <a href="8767.php">Ralph Castain: "[OMPI devel] Gatekeeper request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8771.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<li><strong>Reply:</strong> <a href="8771.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
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
