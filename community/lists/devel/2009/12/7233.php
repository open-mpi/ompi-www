<?
$subject_val = "Re: [OMPI devel] carto vs. hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 07:06:20 2009" -->
<!-- isoreceived="20091215120620" -->
<!-- sent="Tue, 15 Dec 2009 05:06:17 -0700" -->
<!-- isosent="20091215120617" -->
<!-- name="Kenneth Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] carto vs. hwloc" -->
<!-- id="DB625754064C4AD8BA4DE282D455B24E_at_wattp4" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9F7084C2-FCF4-45E6-A7EE-CF6E04DC6ECF_at_cisco.com" -->
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
<strong>From:</strong> Kenneth Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-15 07:06:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7234.php">Terry Dontje: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Previous message:</strong> <a href="7232.php">Jeff Squyres: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>In reply to:</strong> <a href="7232.php">Jeff Squyres: "Re: [OMPI devel] carto vs. hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7234.php">Terry Dontje: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Reply:</strong> <a href="7234.php">Terry Dontje: "Re: [OMPI devel] carto vs. hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My 2 cents: Carto is a weighted graph structure that describes the topology
<br>
of the compute cluster, not just locations of nodes. Many view topologies
<br>
(trees, meshes, torii) to be static - but I've found this an unnecessary and
<br>
undesirable constraint.
<br>
<p>The compute fabric may better be left open to dynamic configuration,
<br>
dependent upon the partitioning of jobs, tasks and data to be run.
<br>
<p>How do others see this?
<br>
<p>Ken Lloyd
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Monday, December 14, 2009 6:47 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers List
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] carto vs. hwloc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had a nice chat with Ralph this afternoon about this topic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; He pointed out a few things to me:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - I had forgotten (ahem) that carto has weights associated 
</span><br>
<span class="quotelev1">&gt; with each of its edges (and that's kind of a defining 
</span><br>
<span class="quotelev1">&gt; feature).  hwloc, at present, does not.  So perhaps hwloc 
</span><br>
<span class="quotelev1">&gt; would not initially replace carto -- maybe in some future 
</span><br>
<span class="quotelev1">&gt; future hwloc version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - He also pointed out that not only paffinity, but also 
</span><br>
<span class="quotelev1">&gt; sysinfo, could be replaced if hwloc comes in.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; He also made a good point that hwloc is only &quot;sorta&quot; 
</span><br>
<span class="quotelev1">&gt; extensible right now -- meaning that, sure, you can add 
</span><br>
<span class="quotelev1">&gt; support for new OS's and platforms, but not in as easy/clean 
</span><br>
<span class="quotelev1">&gt; a way as we have in Open MPI.  Specifically, adding new 
</span><br>
<span class="quotelev1">&gt; support right now means editing much of the current hwloc 
</span><br>
<span class="quotelev1">&gt; code: configure, adding #if's to the top-level tools and 
</span><br>
<span class="quotelev1">&gt; library core, etc.  It's not nearly as clean as just adding a 
</span><br>
<span class="quotelev1">&gt; new plugin that is totally independent of the rest of the 
</span><br>
<span class="quotelev1">&gt; code base.  He thought it would be [greatly] beneficial if 
</span><br>
<span class="quotelev1">&gt; hwloc uses the same plugin system as Open MPI before bringing 
</span><br>
<span class="quotelev1">&gt; it in.  Indeed, Open MPI may wish to extend hwloc in ways 
</span><br>
<span class="quotelev1">&gt; that the main hwloc project is not interested in extending 
</span><br>
<span class="quotelev1">&gt; (e.g., supporting some of Cisco's custom hardware).  Fair point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additionally, the topic of plugins came up within the context 
</span><br>
<span class="quotelev1">&gt; of heterogeneity: have code to get the topology of the 
</span><br>
<span class="quotelev1">&gt; machine (RAM + processors), but have separate code to mix in 
</span><br>
<span class="quotelev1">&gt; accelerators/co-processors and other entities in the box.  
</span><br>
<span class="quotelev1">&gt; One could easily imagine plugins for each different type of 
</span><br>
<span class="quotelev1">&gt; entity that you would want to detect within a server.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To some extent, the hwloc crew has already been discussing 
</span><br>
<span class="quotelev1">&gt; these issues -- we can probably work elements of much of it 
</span><br>
<span class="quotelev1">&gt; into what we're doing.  For example, Brice and Samuel are 
</span><br>
<span class="quotelev1">&gt; working on adding PCI device support to hwloc (although I 
</span><br>
<span class="quotelev1">&gt; haven't been following the details of what they're doing).  
</span><br>
<span class="quotelev1">&gt; We've also talked about adding hwloc functions for editing 
</span><br>
<span class="quotelev1">&gt; the map that comes back.  For example, hwloc could be used as 
</span><br>
<span class="quotelev1">&gt; the cornerstone for a new OPAL framework base, and new 
</span><br>
<span class="quotelev1">&gt; plugins in this base can use functions to add more 
</span><br>
<span class="quotelev1">&gt; information to the initial map that is reported back by the 
</span><br>
<span class="quotelev1">&gt; hwloc core.  [shrug]  Need to think about that more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is all excellent feedback (I need to take it back to the 
</span><br>
<span class="quotelev1">&gt; hwloc crew); please let me know what else you think about 
</span><br>
<span class="quotelev1">&gt; these ideas tomorrow on the call.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 14, 2009, at 4:13 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Question for everyone (possibly a topic for tomorrow's call...):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; hwloc is evolving into a fairly nice package.  It's not 
</span><br>
<span class="quotelev1">&gt; ready for inclusion into Open MPI yet, but it's getting 
</span><br>
<span class="quotelev1">&gt; there.  I predict it will come in somewhere early in the 1.5 
</span><br>
<span class="quotelev1">&gt; series (potentially not 1.5.0, though).  hwloc will provide 
</span><br>
<span class="quotelev1">&gt; two things:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1. A listing of all processors and memory, to include 
</span><br>
<span class="quotelev1">&gt; caches (and cache sizes!) laid out in a map, so you can see 
</span><br>
<span class="quotelev1">&gt; what processors share what memory (e.g., caches).  Open MPI 
</span><br>
<span class="quotelev1">&gt; currently does not have this capability.  Additionally, hwloc 
</span><br>
<span class="quotelev1">&gt; is currently growing support to include PCI devices in the 
</span><br>
<span class="quotelev1">&gt; map; that may make it into hwloc v1.0 or not.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2. Cross-platform / OS support.  hwloc currently support a 
</span><br>
<span class="quotelev1">&gt; nice variety of OSs and hardware platforms.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Given that hwloc is already cross-platform, do we really 
</span><br>
<span class="quotelev1">&gt; need the carto framework?  I.e., do we really need multiple 
</span><br>
<span class="quotelev1">&gt; carto plugins?  More specifically: should we just use hwloc 
</span><br>
<span class="quotelev1">&gt; directly -- with no framework? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Random points:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - I'm about halfway finished with &quot;embedding&quot; code for 
</span><br>
<span class="quotelev1">&gt; hwloc like PLPA has, so, for example, all of hwloc's symbols 
</span><br>
<span class="quotelev1">&gt; can be prepended with opal_ or orte_ or whatever.  Hence, 
</span><br>
<span class="quotelev1">&gt; embedding hwloc in OMPI would be &quot;safe&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - If we keep the carto framework, then we'll have to 
</span><br>
<span class="quotelev1">&gt; translate from hwloc's map to carto's map; there may be 
</span><br>
<span class="quotelev1">&gt; subtleties involved in the translation.  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - I guarantee that [much] more thought has been put into 
</span><br>
<span class="quotelev1">&gt; the hwloc map data structure design than carto's.  :-)  
</span><br>
<span class="quotelev1">&gt; Indeed, to make all of hwloc's data available to OMPI, 
</span><br>
<span class="quotelev1">&gt; carto's map data structures may end up evolving to look 
</span><br>
<span class="quotelev1">&gt; pretty much exactly like hwloc's.  In which case -- what's 
</span><br>
<span class="quotelev1">&gt; the point of carto?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thoughts?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; hwloc also provides processor binding functions, so it 
</span><br>
<span class="quotelev1">&gt; might also make the paffinity framework moot...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7234.php">Terry Dontje: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Previous message:</strong> <a href="7232.php">Jeff Squyres: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>In reply to:</strong> <a href="7232.php">Jeff Squyres: "Re: [OMPI devel] carto vs. hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7234.php">Terry Dontje: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Reply:</strong> <a href="7234.php">Terry Dontje: "Re: [OMPI devel] carto vs. hwloc"</a>
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
