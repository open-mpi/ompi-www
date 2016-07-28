<?
$subject_val = "[OMPI devel] OMPI 1.8.4rc1 issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 11:54:04 2014" -->
<!-- isoreceived="20141103165404" -->
<!-- sent="Mon, 3 Nov 2014 08:54:01 -0800" -->
<!-- isosent="20141103165401" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI 1.8.4rc1 issues" -->
<!-- id="C78AD916-0A7D-4A67-A548-D965A42E6990_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI 1.8.4rc1 issues<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-03 11:54:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16152.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated.	dev-206-g87dffac"</a>
<li><strong>Previous message:</strong> <a href="16150.php">Alexander Mikheev: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-206-g87dffac"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16172.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI 1.8.4rc1 issues"</a>
<li><strong>Reply:</strong> <a href="16172.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI 1.8.4rc1 issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>Looking at the over-the-weekend MTT reports plus at least one comment on the list, we have the following issues to address:
<br>
<p>* many-to-one continues to fail. Shall I just assume this is an unfixable problem or a bad test and ignore it?
<br>
<p>* neighbor_allgather_self segfaults in ompi_request_null or coll_base_comm_unselect or comm_activate or..., take your pick
<br>
<p>* MPI_IN_PLACE returns zero (issue #259 <a href="https://github.com/open-mpi/ompi/issues/259">https://github.com/open-mpi/ompi/issues/259</a>)
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16152.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated.	dev-206-g87dffac"</a>
<li><strong>Previous message:</strong> <a href="16150.php">Alexander Mikheev: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-206-g87dffac"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16172.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI 1.8.4rc1 issues"</a>
<li><strong>Reply:</strong> <a href="16172.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI 1.8.4rc1 issues"</a>
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
