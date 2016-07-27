<?
$subject_val = "[hwloc-devel] hwloc_topology_export_xml()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 21 08:21:04 2010" -->
<!-- isoreceived="20100421122104" -->
<!-- sent="Wed, 21 Apr 2010 08:20:59 -0400" -->
<!-- isosent="20100421122059" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc_topology_export_xml()" -->
<!-- id="F8CAE365-9B6C-456A-B222-9A4F679EF5D9_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc_topology_export_xml()<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-21 08:20:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0922.php">Jeff Squyres: "[hwloc-devel] Please review r1986"</a>
<li><strong>Previous message:</strong> <a href="0920.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r1980)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0923.php">Brice Goglin: "Re: [hwloc-devel] hwloc_topology_export_xml()"</a>
<li><strong>Reply:</strong> <a href="0923.php">Brice Goglin: "Re: [hwloc-devel] hwloc_topology_export_xml()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Doing some compiler warning validation this morning, it looks like topology-xml.c:hwloc_topology_export_xml() creates a DTD by calling xmlCreateIntSubset() but then never does anything with this DTD.
<br>
<p>Is the call to xmlCreateIntSubset() necessary?  If so, does the resulting dtd need to be used and later freed?
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
<li><strong>Next message:</strong> <a href="0922.php">Jeff Squyres: "[hwloc-devel] Please review r1986"</a>
<li><strong>Previous message:</strong> <a href="0920.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r1980)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0923.php">Brice Goglin: "Re: [hwloc-devel] hwloc_topology_export_xml()"</a>
<li><strong>Reply:</strong> <a href="0923.php">Brice Goglin: "Re: [hwloc-devel] hwloc_topology_export_xml()"</a>
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
