<?
$subject_val = "[OMPI devel] RFC: Remove --without-hwloc configure option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 11:05:26 2015" -->
<!-- isoreceived="20150903150526" -->
<!-- sent="Thu, 3 Sep 2015 08:03:50 -0700" -->
<!-- isosent="20150903150350" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Remove --without-hwloc configure option" -->
<!-- id="0E62DC57-5FB2-4807-A6F3-62788A628717_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Remove --without-hwloc configure option<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 11:03:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17939.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17937.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17942.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Reply:</strong> <a href="17942.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>We have carried the ability to build without hwloc since we first pulled that package into OMPI. This made sense initially as the code was still maturing, and we were concerned about the breadth of support. However, that has certainly changed, and I propose we remove this configure option.
<br>
<p>Doing so would clean out a lot of #if OPAL_HAVE_HWLOC cruft sprinkled all over the code. Given that we are constantly breaking this support, it might even make things easier to maintain.
<br>
<p>Does anyone know of a reason why we shouldn&#226;&#128;&#153;t do this?
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17939.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17937.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17942.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Reply:</strong> <a href="17942.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
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
