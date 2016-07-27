<?
$subject_val = "[hwloc-devel] asymmetric trees";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 21:08:22 2011" -->
<!-- isoreceived="20110415010822" -->
<!-- sent="Thu, 14 Apr 2011 21:08:16 -0400" -->
<!-- isosent="20110415010816" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] asymmetric trees" -->
<!-- id="169ACF91-1666-4A5A-BE2D-E6F9853C4694_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] asymmetric trees<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 21:08:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2151.php">Jeff Squyres: "Re: [hwloc-devel] asymmetric trees"</a>
<li><strong>Previous message:</strong> <a href="2149.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2.1rc1r3456)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2151.php">Jeff Squyres: "Re: [hwloc-devel] asymmetric trees"</a>
<li><strong>Reply:</strong> <a href="2151.php">Jeff Squyres: "Re: [hwloc-devel] asymmetric trees"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On the subject of asymmetric trees, I see the description of hwloc_type_get_depth() in hwloc.h:
<br>
<p>/** \brief Returns the depth of objects of type \p type.
<br>
&nbsp;*
<br>
&nbsp;* ...snipped...
<br>
&nbsp;*
<br>
&nbsp;* If some objects of the given type exist in different levels, for instance
<br>
&nbsp;* L1 and L2 caches, the function returns HWLOC_TYPE_DEPTH_MULTIPLE.
<br>
<p>Am I reading the FAQ wrong?  I thought the figure on page 21 (US letter) indicated that, for example, the depth of CORE objects would always be the same, even though one of them doesn't have the same caches as its siblings.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2151.php">Jeff Squyres: "Re: [hwloc-devel] asymmetric trees"</a>
<li><strong>Previous message:</strong> <a href="2149.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2.1rc1r3456)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2151.php">Jeff Squyres: "Re: [hwloc-devel] asymmetric trees"</a>
<li><strong>Reply:</strong> <a href="2151.php">Jeff Squyres: "Re: [hwloc-devel] asymmetric trees"</a>
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
