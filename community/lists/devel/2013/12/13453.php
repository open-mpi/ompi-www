<?
$subject_val = "[OMPI devel] RFC: move openib free list initialization to add procs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 16 13:49:24 2013" -->
<!-- isoreceived="20131216184924" -->
<!-- sent="Mon, 16 Dec 2013 11:49:22 -0700" -->
<!-- isosent="20131216184922" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: move openib free list initialization to add procs" -->
<!-- id="20131216184922.GJ37237_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: move openib free list initialization to add procs<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-16 13:49:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13454.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  IB tests in OSHMEM"</a>
<li><strong>Previous message:</strong> <a href="13452.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Move the initialization of the openib btl's free lists from
<br>
btl_init to btl_add_procs.
<br>
<p>Why: We are planning to always initialize the btls to support
<br>
oshmem. Since the openib btl always sets up its free lists, allocates
<br>
fragments, starts the async event thread, etc as part of btl_init we
<br>
will waste memory. This only happens when there is an mtl what supports
<br>
the same hardware (ex. mxm, psm). To alleviate this problem I am moving
<br>
the final part of device initialization to btl_add_procs.
<br>
<p>When: This is intended for inclusion in the 1.7.5 release. I would like
<br>
mellanox to review this now but they may also review it for the
<br>
CMR. Setting the timeout to a week from today (Dec 23).
<br>
<p><p>This will come into the trunk if there are no objections. So, if you see
<br>
a problem with the change say something now and DO NOT wait until we are
<br>
rolling 1.7.5 release candidates. I have tested the changes on LANL
<br>
systems with Mellanox and QLogic hardware and we see no issues with
<br>
performance.
<br>
<p>Patch attached.
<br>
<p>-Nathan Hjelm
<br>
Application Readiness, HPC-5, LANL
<br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13453/0001-btl-openib-Move-free-list-memory-allocation-to-add_p.patch">0001-btl-openib-Move-free-list-memory-allocation-to-add_p.patch</a>
</ul>
<!-- attachment="0001-btl-openib-Move-free-list-memory-allocation-to-add_p.patch" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13453/02-part">stored</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13454.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  IB tests in OSHMEM"</a>
<li><strong>Previous message:</strong> <a href="13452.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
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
