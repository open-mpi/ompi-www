<?
$subject_val = "Re: [OMPI devel] RFC: move hwloc code base to opal/hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 10:03:35 2010" -->
<!-- isoreceived="20100602140335" -->
<!-- sent="Wed, 2 Jun 2010 10:03:29 -0400" -->
<!-- isosent="20100602140329" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: move hwloc code base to opal/hwloc" -->
<!-- id="1F0C6AC8-7CB8-4B3F-B342-A62A971CE0EB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3A7E019D-9DDB-4A54-88D2-EABB57A36F64_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: move hwloc code base to opal/hwloc<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 10:03:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8025.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="8023.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7925.php">Jeff Squyres: "[OMPI devel] RFC: move hwloc code base to opal/hwloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To follow up on this RFC...
<br>
<p>We discussed this RFC on the weekly call and no one seemed to hate it.  But there was a desire to:
<br>
<p>a) be able to compile out hwloc for environments that don't want/need it (e.g., embedded environments)
<br>
b) have some degree of isolation in case hwloc ever dies
<br>
c) have some comonality of hwloc support (e.g., a central copy of the topology as an OPAL global variable, etc.)
<br>
<p>The agreed-on compromise was to have a small set of OPAL wrappers that hide the real hwloc API.  I.e., the OPAL/ORTE/OMPI code bases would use the OPAL wrappers, not hwloc itself.  This allows OMPI to cleanly compile out hwloc (e.g., return OPAL_ERR_NOT_AVAILABLE when hwloc is compiled out) for platforms that do not want hwloc support and hwloc-unsupported platforms.
<br>
<p>The ball is in my court to come up with a decent OPAL subset of the hwloc API that makes sense.  On the one hand, the hwloc API is huge because it has many, many accessors for all different kinds of access patterns.  But OTOH, we probably don't need all those accessors, even if having a smaller set of accessors may mean slightly less convenient/efficient access to the hwloc data.  
<br>
<p>I'll try to strike a balance and come back to the community with a proposal.
<br>
<p><p><p><p>On May 13, 2010, at 8:35 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: hwloc is currently embedded in opal/mca/paffinity/hwloc/hwloc -- move it to be a first class citizen in opal/hwloc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: Let other portions of the OPAL, ORTE, and OMPI code bases use hwloc services (remember that hwloc provides detailed topology information, not just processor binding).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: Move opal/mca/paffinity/hwloc/hwloc to opal/hwloc, and adjust associated configury
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: For v1.5.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Tuesday call, May 25
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MORE DETAILS:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The hwloc code base is *much* more powerful and useful than PLPA -- it provides a wealth of information that PLPA did not.  Specifically: hwloc provides data structures detailing the internal topology of a server.  You can see cache line sizes, NUMA layouts, sockets, cores, hardware threads, ...etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This information should be available to the entire OMPI code base -- not just locked up in a paffinity component.  Putting hwloc up in opal/hwloc makes it available everywhere.  Developers can just call hwloc_&lt;foo&gt;, and OMPI's build system will automatically do all the right symbol-shifting if the embedded hwloc is used in OMPI (and not symbol-shift if an external hwloc is used, obviously).  It's magically delicious!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One immediate use that I'd like to see is to have the openib BTL use hwloc's ibv functionality to find &quot;nearby&quot; HCAs (right now, you can only do this with rankfiles).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can foresee other components using cache line size information to help tune performance (e.g., sm btl and sm coll...?).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be clear: there will still be an hwloc paffinity component.  It just won't embed its own copy of hwloc anymore.  It'll use the hwloc services provided by the OMPI build system, just like the rest of the OPAL / ORTE / OMPI code bases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There will also be an option to compile hwloc out altogether -- some stubs will be left that return ERR_NOT_SUPPORTED, or somesuch (details TBD).  The reason for this is that there are some systems where processor affinity and NUMA information aren't relevant (e.g., embedded systems).  Memory footprint is key in such systems; hwloc would simply take up valuable RAM.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="8025.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="8023.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7925.php">Jeff Squyres: "[OMPI devel] RFC: move hwloc code base to opal/hwloc"</a>
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
