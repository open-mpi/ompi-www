<?
$subject_val = "[OMPI devel] carto vs. hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 14 16:13:38 2009" -->
<!-- isoreceived="20091214211338" -->
<!-- sent="Mon, 14 Dec 2009 16:13:31 -0500" -->
<!-- isosent="20091214211331" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] carto vs. hwloc" -->
<!-- id="1FDCCC5F-A408-4FB1-86F2-A87DA5F087EE_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] carto vs. hwloc<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-14 16:13:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7232.php">Jeff Squyres: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Previous message:</strong> <a href="7230.php">Terry Dontje: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7232.php">Jeff Squyres: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Reply:</strong> <a href="7232.php">Jeff Squyres: "Re: [OMPI devel] carto vs. hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Question for everyone (possibly a topic for tomorrow's call...):
<br>
<p>hwloc is evolving into a fairly nice package.  It's not ready for inclusion into Open MPI yet, but it's getting there.  I predict it will come in somewhere early in the 1.5 series (potentially not 1.5.0, though).  hwloc will provide two things:
<br>
<p>1. A listing of all processors and memory, to include caches (and cache sizes!) laid out in a map, so you can see what processors share what memory (e.g., caches).  Open MPI currently does not have this capability.  Additionally, hwloc is currently growing support to include PCI devices in the map; that may make it into hwloc v1.0 or not.
<br>
<p>2. Cross-platform / OS support.  hwloc currently support a nice variety of OSs and hardware platforms.
<br>
<p>Given that hwloc is already cross-platform, do we really need the carto framework?  I.e., do we really need multiple carto plugins?  More specifically: should we just use hwloc directly -- with no framework? 
<br>
<p>Random points:
<br>
<p>- I'm about halfway finished with &quot;embedding&quot; code for hwloc like PLPA has, so, for example, all of hwloc's symbols can be prepended with opal_ or orte_ or whatever.  Hence, embedding hwloc in OMPI would be &quot;safe&quot;.
<br>
<p>- If we keep the carto framework, then we'll have to translate from hwloc's map to carto's map; there may be subtleties involved in the translation.  
<br>
<p>- I guarantee that [much] more thought has been put into the hwloc map data structure design than carto's.  :-)  Indeed, to make all of hwloc's data available to OMPI, carto's map data structures may end up evolving to look pretty much exactly like hwloc's.  In which case -- what's the point of carto?
<br>
<p>Thoughts?
<br>
<p>hwloc also provides processor binding functions, so it might also make the paffinity framework moot...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7232.php">Jeff Squyres: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Previous message:</strong> <a href="7230.php">Terry Dontje: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7232.php">Jeff Squyres: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Reply:</strong> <a href="7232.php">Jeff Squyres: "Re: [OMPI devel] carto vs. hwloc"</a>
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
