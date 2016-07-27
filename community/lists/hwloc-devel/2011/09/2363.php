<?
$subject_val = "[hwloc-devel] xmlbuffer and xmlFree()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  5 03:15:47 2011" -->
<!-- isoreceived="20110905071547" -->
<!-- sent="Mon, 05 Sep 2011 09:15:42 +0200" -->
<!-- isosent="20110905071542" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] xmlbuffer and xmlFree()" -->
<!-- id="4E64771E.6090904_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] xmlbuffer and xmlFree()<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-05 03:15:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2364.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2362.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2366.php">Samuel Thibault: "Re: [hwloc-devel] xmlbuffer and xmlFree()"</a>
<li><strong>Maybe reply:</strong> <a href="2366.php">Samuel Thibault: "Re: [hwloc-devel] xmlbuffer and xmlFree()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(side note from the current discussion about XML/JSON/...)
<br>
<p>The doc of hwloc_topology_export_xmlbuffer() says that the returned
<br>
buffer should be freed with xmlFree(). xmlFree() is in libxml2, but
<br>
hwloc can be built without libxml2 support. So the application can
<br>
always use hwloc_topology_export_xmlbuffer() but it cannot safely use
<br>
xmlFree() without checking again if libxml2 is available. We need to
<br>
something about this:
<br>
<p>1) add HWLOC_HAVE_XML to hwloc/autogen/config.h and tell the application
<br>
to look at it
<br>
2) add hwloc_free_xmlbuffer()
<br>
3a) change hwloc_topology_export_xmlbuffer() to return a normal buffer
<br>
copied from the xml-allocated one
<br>
3b) change hwloc_topology_export_xmlbuffer() to have the application
<br>
provide the destination buffer (would require one export to get the
<br>
actual length, malloc, and an another export with the right length).
<br>
<p>(1) isn't very nice, and doesn't abstract us away from libxml2
<br>
(2) is easy
<br>
(3) breaks the ABI
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2364.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2362.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2366.php">Samuel Thibault: "Re: [hwloc-devel] xmlbuffer and xmlFree()"</a>
<li><strong>Maybe reply:</strong> <a href="2366.php">Samuel Thibault: "Re: [hwloc-devel] xmlbuffer and xmlFree()"</a>
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
