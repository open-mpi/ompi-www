<?
$subject_val = "[OMPI devel] RFC: move hwloc code base to opal/hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 13 20:35:29 2010" -->
<!-- isoreceived="20100514003529" -->
<!-- sent="Thu, 13 May 2010 20:35:25 -0400" -->
<!-- isosent="20100514003525" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: move hwloc code base to opal/hwloc" -->
<!-- id="3A7E019D-9DDB-4A54-88D2-EABB57A36F64_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: move hwloc code base to opal/hwloc<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-13 20:35:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7926.php">Christopher Samuel: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="7924.php">Jeff Squyres: "[OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8024.php">Jeff Squyres: "Re: [OMPI devel] RFC: move hwloc code base to opal/hwloc"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8024.php">Jeff Squyres: "Re: [OMPI devel] RFC: move hwloc code base to opal/hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: hwloc is currently embedded in opal/mca/paffinity/hwloc/hwloc -- move it to be a first class citizen in opal/hwloc.
<br>
<p>WHY: Let other portions of the OPAL, ORTE, and OMPI code bases use hwloc services (remember that hwloc provides detailed topology information, not just processor binding).
<br>
<p>WHERE: Move opal/mca/paffinity/hwloc/hwloc to opal/hwloc, and adjust associated configury
<br>
<p>WHEN: For v1.5.1
<br>
<p>TIMEOUT: Tuesday call, May 25
<br>
<p>-----------------------------------------------------------------------------
<br>
<p>MORE DETAILS:
<br>
<p>The hwloc code base is *much* more powerful and useful than PLPA -- it provides a wealth of information that PLPA did not.  Specifically: hwloc provides data structures detailing the internal topology of a server.  You can see cache line sizes, NUMA layouts, sockets, cores, hardware threads, ...etc.
<br>
<p>This information should be available to the entire OMPI code base -- not just locked up in a paffinity component.  Putting hwloc up in opal/hwloc makes it available everywhere.  Developers can just call hwloc_&lt;foo&gt;, and OMPI's build system will automatically do all the right symbol-shifting if the embedded hwloc is used in OMPI (and not symbol-shift if an external hwloc is used, obviously).  It's magically delicious!
<br>
<p>One immediate use that I'd like to see is to have the openib BTL use hwloc's ibv functionality to find &quot;nearby&quot; HCAs (right now, you can only do this with rankfiles).
<br>
<p>I can foresee other components using cache line size information to help tune performance (e.g., sm btl and sm coll...?).
<br>
<p>To be clear: there will still be an hwloc paffinity component.  It just won't embed its own copy of hwloc anymore.  It'll use the hwloc services provided by the OMPI build system, just like the rest of the OPAL / ORTE / OMPI code bases.
<br>
<p>There will also be an option to compile hwloc out altogether -- some stubs will be left that return ERR_NOT_SUPPORTED, or somesuch (details TBD).  The reason for this is that there are some systems where processor affinity and NUMA information aren't relevant (e.g., embedded systems).  Memory footprint is key in such systems; hwloc would simply take up valuable RAM.
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
<li><strong>Next message:</strong> <a href="7926.php">Christopher Samuel: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="7924.php">Jeff Squyres: "[OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8024.php">Jeff Squyres: "Re: [OMPI devel] RFC: move hwloc code base to opal/hwloc"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8024.php">Jeff Squyres: "Re: [OMPI devel] RFC: move hwloc code base to opal/hwloc"</a>
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
