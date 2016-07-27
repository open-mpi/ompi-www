<?
$subject_val = "Re: [hwloc-devel] hwloc_topology_export_xml()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 21 08:41:38 2010" -->
<!-- isoreceived="20100421124138" -->
<!-- sent="Wed, 21 Apr 2010 14:41:34 +0200" -->
<!-- isosent="20100421124134" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc_topology_export_xml()" -->
<!-- id="4BCEF27E.9090608_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F8CAE365-9B6C-456A-B222-9A4F679EF5D9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc_topology_export_xml()<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-21 08:41:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0924.php">Brice Goglin: "Re: [hwloc-devel] Please review r1986"</a>
<li><strong>Previous message:</strong> <a href="0922.php">Jeff Squyres: "[hwloc-devel] Please review r1986"</a>
<li><strong>In reply to:</strong> <a href="0921.php">Jeff Squyres: "[hwloc-devel] hwloc_topology_export_xml()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Doing some compiler warning validation this morning, it looks like topology-xml.c:hwloc_topology_export_xml() creates a DTD by calling xmlCreateIntSubset() but then never does anything with this DTD.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the call to xmlCreateIntSubset() necessary?  
</span><br>
<p>I was not very familiar with the libxml API when I wrote this code (and
<br>
I am still not).
<br>
<p><span class="quotelev1">&gt;From what I remember, this line was necessary if we want &quot;hwloc.dtd&quot; to
</span><br>
appear the XML file header.
<br>
<p><span class="quotelev1">&gt; If so, does the resulting dtd need to be used and later freed?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Valgrind looks happy. If I add xmlFreeDtd near the end of the export
<br>
function, I am getting some valgrind warnings. So unless somebody really
<br>
needs what to do here (in both import and export), I'd just keep things
<br>
as they are :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0924.php">Brice Goglin: "Re: [hwloc-devel] Please review r1986"</a>
<li><strong>Previous message:</strong> <a href="0922.php">Jeff Squyres: "[hwloc-devel] Please review r1986"</a>
<li><strong>In reply to:</strong> <a href="0921.php">Jeff Squyres: "[hwloc-devel] hwloc_topology_export_xml()"</a>
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
