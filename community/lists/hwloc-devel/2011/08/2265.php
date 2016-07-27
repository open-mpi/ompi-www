<?
$subject_val = "[hwloc-devel] -lpthread in LIBS and REQUIRES?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 10:58:01 2011" -->
<!-- isoreceived="20110804145801" -->
<!-- sent="Thu, 04 Aug 2011 16:57:55 +0200" -->
<!-- isosent="20110804145755" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] -lpthread in LIBS and REQUIRES?" -->
<!-- id="4E3AB373.1070204_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] -lpthread in LIBS and REQUIRES?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-04 10:57:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2266.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Previous message:</strong> <a href="2264.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2.1rc1r3579)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2266.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Maybe reply:</strong> <a href="2266.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Reply:</strong> <a href="2267.php">Jeff Squyres: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Maybe reply:</strong> <a href="2268.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Maybe reply:</strong> <a href="2271.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Maybe reply:</strong> <a href="2272.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Maybe reply:</strong> <a href="2274.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>While playing with static hwloc libraries and binaries [1], I had to
<br>
manually add -lpthread to LIBS to get the fully-static binaries to link
<br>
properly. We use some pthread functions, so is there a good reason not
<br>
to put -lpthread in LIBS? (and HWLOC_REQUIRES?)
<br>
<p>Brice
<br>
<p>[1] <a href="https://svn.open-mpi.org/trac/hwloc/wiki/StaticBuild">https://svn.open-mpi.org/trac/hwloc/wiki/StaticBuild</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2266.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Previous message:</strong> <a href="2264.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2.1rc1r3579)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2266.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Maybe reply:</strong> <a href="2266.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Reply:</strong> <a href="2267.php">Jeff Squyres: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Maybe reply:</strong> <a href="2268.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Maybe reply:</strong> <a href="2271.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Maybe reply:</strong> <a href="2272.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Maybe reply:</strong> <a href="2274.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
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
