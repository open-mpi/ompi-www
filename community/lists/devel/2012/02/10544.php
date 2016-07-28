<?
$subject_val = "[OMPI devel] RFC: Allocate free list payload if free list isn't specified";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 15:54:22 2012" -->
<!-- isoreceived="20120221205422" -->
<!-- sent="Tue, 21 Feb 2012 13:54:12 -0700 (MST)" -->
<!-- isosent="20120221205412" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Allocate free list payload if free list isn't specified" -->
<!-- id="alpine.OSX.2.00.1202211117060.11396_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Allocate free list payload if free list isn't specified<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 15:54:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10545.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<li><strong>Previous message:</strong> <a href="10543.php">Paul H. Hargrove: "[OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10545.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<li><strong>Reply:</strong> <a href="10545.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Allocate free list payload even if a payload size is specified even if no mpool is specified.
<br>
<p>When: Thursday, Feb 23, 2012
<br>
<p>Why: The current behavior is to ignore the payload size if no mpool is specified. I see no reason why a payload buffer should't be allocated in the no mpool case. Thoughts?
<br>
<p>Patch is attached.
<br>
<p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>

<br><hr>
<ul>
<li>TEXT/PLAIN attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10544/free_list_alloc.patch">free_list_alloc.patch</a>
</ul>
<!-- attachment="free_list_alloc.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10545.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<li><strong>Previous message:</strong> <a href="10543.php">Paul H. Hargrove: "[OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10545.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<li><strong>Reply:</strong> <a href="10545.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
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
