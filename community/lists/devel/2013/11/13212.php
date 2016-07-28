<?
$subject_val = "[OMPI devel] RFC: add a context pointer to the base mpool registration";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  6 14:09:25 2013" -->
<!-- isoreceived="20131106190925" -->
<!-- sent="Wed, 6 Nov 2013 12:09:22 -0700" -->
<!-- isosent="20131106190922" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: add a context pointer to the base mpool registration" -->
<!-- id="20131106190922.GG37395_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: add a context pointer to the base mpool registration<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-06 14:09:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13213.php">Christopher Samuel: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<li><strong>Previous message:</strong> <a href="13211.php">Brice Goglin: "Re: [OMPI devel] debian/ directory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: I want to add another member to mca_mpool_base_registration_t for mpools that
<br>
need to keep track of extra context data.
<br>
<p>Why: I plan to add a new mpool to support Cray's udreg registration cache. This new
<br>
mpool will allow us to turn off the memory hooks on Cray systems. Unfortunately, in
<br>
order to get the symantics right I need to keep track of the udreg context for the base
<br>
registration. Originally, I subclassed the base registration and put the context in
<br>
there but it makes switching mpools more awkward than it already is. I want to move
<br>
this pointer down to the base registration as void *mpool_context for both trunk
<br>
and 1.7.4 (the target for the new mpool).
<br>
<p>When: This is a small change and shouldn't have much impact on the code base but I would
<br>
like some feedback on this change before committing it. Timeout set for next Tuesday
<br>
around noon.
<br>
<p><p><p>-Nathan Hjelm
<br>
HPC-5, LANL
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13213.php">Christopher Samuel: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<li><strong>Previous message:</strong> <a href="13211.php">Brice Goglin: "Re: [OMPI devel] debian/ directory"</a>
<!-- nextthread="start" -->
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
