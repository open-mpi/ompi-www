<?
$subject_val = "Re: [hwloc-devel] memory size attributes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 10:09:18 2010" -->
<!-- isoreceived="20100126150918" -->
<!-- sent="Tue, 26 Jan 2010 16:09:13 +0100" -->
<!-- isosent="20100126150913" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] memory size attributes" -->
<!-- id="4B5F0599.3020303_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B5612D7.4030709_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] memory size attributes<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-26 10:09:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0627.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0625.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1671)"</a>
<li><strong>In reply to:</strong> <a href="0619.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0627.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0627.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0630.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have pushed some changes in the memoryattrs branch. See the new memory
<br>
attributes starting at line 138 of
<br>
<a href="https://svn.open-mpi.org/trac/hwloc/browser/branches/memoryattrs/include/hwloc.h">https://svn.open-mpi.org/trac/hwloc/browser/branches/memoryattrs/include/hwloc.h</a>
<br>
<p>I am still working on the XML backend. It'd be good if people could
<br>
complain about the API before I convert everything else.
<br>
<p>Random things to think about:
<br>
* should we enforce the ordering of pages size+count structures ? I am
<br>
sorting by page size for now
<br>
* how is the pages array terminated ? size = 0 ? or both size and count
<br>
= 0 ? if some OS fail to give the size of normal pages or huge pages, we
<br>
might have count !=0 while size = 0 in some cases.
<br>
* or should we add pages_count to the memory strcuture to explictly
<br>
store the length of the pages array ?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0627.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0625.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1671)"</a>
<li><strong>In reply to:</strong> <a href="0619.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0627.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0627.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0630.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
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
