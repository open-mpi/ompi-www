<?
$subject_val = "Re: [hwloc-devel] 1.1 .so version number";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  9 14:27:27 2010" -->
<!-- isoreceived="20101109192727" -->
<!-- sent="Tue, 09 Nov 2010 20:27:22 +0100" -->
<!-- isosent="20101109192722" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.1 .so version number" -->
<!-- id="4CD9A09A.6030209_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20101109174954.GM5785_at_const.umh.ac.be" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.1 .so version number<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-09 14:27:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1456.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc2r2759)"</a>
<li><strong>Previous message:</strong> <a href="1454.php">Jeff Squyres: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>In reply to:</strong> <a href="1451.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1453.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 09/11/2010 18:49, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; That is not a problem here.  The attr field of hwloc_obj will be NULL,
</span><br>
<span class="quotelev1">&gt; that's all, the application won't ever read it anyway.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>We will see segfaults if applications were looking at machine-&gt;attr
<br>
without checking that it's non-NULL. It's a buggy behavior (but may not
<br>
be that well documented :)) and there are very likely a single user of
<br>
these machine attributes anyway (and I am going to fix it now :)).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1456.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc2r2759)"</a>
<li><strong>Previous message:</strong> <a href="1454.php">Jeff Squyres: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>In reply to:</strong> <a href="1451.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1453.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
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
