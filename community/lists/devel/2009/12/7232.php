<?
$subject_val = "Re: [OMPI devel] carto vs. hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 14 20:47:18 2009" -->
<!-- isoreceived="20091215014718" -->
<!-- sent="Mon, 14 Dec 2009 20:47:12 -0500" -->
<!-- isosent="20091215014712" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] carto vs. hwloc" -->
<!-- id="9F7084C2-FCF4-45E6-A7EE-CF6E04DC6ECF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1FDCCC5F-A408-4FB1-86F2-A87DA5F087EE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] carto vs. hwloc<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-14 20:47:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7233.php">Kenneth Lloyd: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Previous message:</strong> <a href="7231.php">Jeff Squyres: "[OMPI devel] carto vs. hwloc"</a>
<li><strong>In reply to:</strong> <a href="7231.php">Jeff Squyres: "[OMPI devel] carto vs. hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7233.php">Kenneth Lloyd: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Reply:</strong> <a href="7233.php">Kenneth Lloyd: "Re: [OMPI devel] carto vs. hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had a nice chat with Ralph this afternoon about this topic.
<br>
<p>He pointed out a few things to me:
<br>
<p>- I had forgotten (ahem) that carto has weights associated with each of its edges (and that's kind of a defining feature).  hwloc, at present, does not.  So perhaps hwloc would not initially replace carto -- maybe in some future future hwloc version.
<br>
<p>- He also pointed out that not only paffinity, but also sysinfo, could be replaced if hwloc comes in.
<br>
<p>He also made a good point that hwloc is only &quot;sorta&quot; extensible right now -- meaning that, sure, you can add support for new OS's and platforms, but not in as easy/clean a way as we have in Open MPI.  Specifically, adding new support right now means editing much of the current hwloc code: configure, adding #if's to the top-level tools and library core, etc.  It's not nearly as clean as just adding a new plugin that is totally independent of the rest of the code base.  He thought it would be [greatly] beneficial if hwloc uses the same plugin system as Open MPI before bringing it in.  Indeed, Open MPI may wish to extend hwloc in ways that the main hwloc project is not interested in extending (e.g., supporting some of Cisco's custom hardware).  Fair point.
<br>
<p>Additionally, the topic of plugins came up within the context of heterogeneity: have code to get the topology of the machine (RAM + processors), but have separate code to mix in accelerators/co-processors and other entities in the box.  One could easily imagine plugins for each different type of entity that you would want to detect within a server.
<br>
<p>To some extent, the hwloc crew has already been discussing these issues -- we can probably work elements of much of it into what we're doing.  For example, Brice and Samuel are working on adding PCI device support to hwloc (although I haven't been following the details of what they're doing).  We've also talked about adding hwloc functions for editing the map that comes back.  For example, hwloc could be used as the cornerstone for a new OPAL framework base, and new plugins in this base can use functions to add more information to the initial map that is reported back by the hwloc core.  [shrug]  Need to think about that more.
<br>
<p>This is all excellent feedback (I need to take it back to the hwloc crew); please let me know what else you think about these ideas tomorrow on the call.
<br>
<p><p><p>On Dec 14, 2009, at 4:13 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Question for everyone (possibly a topic for tomorrow's call...):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc is evolving into a fairly nice package.  It's not ready for inclusion into Open MPI yet, but it's getting there.  I predict it will come in somewhere early in the 1.5 series (potentially not 1.5.0, though).  hwloc will provide two things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. A listing of all processors and memory, to include caches (and cache sizes!) laid out in a map, so you can see what processors share what memory (e.g., caches).  Open MPI currently does not have this capability.  Additionally, hwloc is currently growing support to include PCI devices in the map; that may make it into hwloc v1.0 or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Cross-platform / OS support.  hwloc currently support a nice variety of OSs and hardware platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given that hwloc is already cross-platform, do we really need the carto framework?  I.e., do we really need multiple carto plugins?  More specifically: should we just use hwloc directly -- with no framework? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Random points:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - I'm about halfway finished with &quot;embedding&quot; code for hwloc like PLPA has, so, for example, all of hwloc's symbols can be prepended with opal_ or orte_ or whatever.  Hence, embedding hwloc in OMPI would be &quot;safe&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - If we keep the carto framework, then we'll have to translate from hwloc's map to carto's map; there may be subtleties involved in the translation.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - I guarantee that [much] more thought has been put into the hwloc map data structure design than carto's.  :-)  Indeed, to make all of hwloc's data available to OMPI, carto's map data structures may end up evolving to look pretty much exactly like hwloc's.  In which case -- what's the point of carto?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc also provides processor binding functions, so it might also make the paffinity framework moot...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7233.php">Kenneth Lloyd: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Previous message:</strong> <a href="7231.php">Jeff Squyres: "[OMPI devel] carto vs. hwloc"</a>
<li><strong>In reply to:</strong> <a href="7231.php">Jeff Squyres: "[OMPI devel] carto vs. hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7233.php">Kenneth Lloyd: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Reply:</strong> <a href="7233.php">Kenneth Lloyd: "Re: [OMPI devel] carto vs. hwloc"</a>
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
