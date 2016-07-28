<?
$subject_val = "Re: [OMPI devel] carto vs. hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 14:21:05 2009" -->
<!-- isoreceived="20091215192105" -->
<!-- sent="Tue, 15 Dec 2009 12:20:49 -0700" -->
<!-- isosent="20091215192049" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] carto vs. hwloc" -->
<!-- id="EA1C61AF-47BE-4374-A6C8-5C7319E803B6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B27A01E.8030800_at_sun.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-15 14:20:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7236.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22317"</a>
<li><strong>Previous message:</strong> <a href="7234.php">Terry Dontje: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>In reply to:</strong> <a href="7234.php">Terry Dontje: "Re: [OMPI devel] carto vs. hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7237.php">Jeff Squyres: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Reply:</strong> <a href="7237.php">Jeff Squyres: "Re: [OMPI devel] carto vs. hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 15, 2009, at 7:41 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Kenneth Lloyd wrote:
</span><br>
<span class="quotelev2">&gt;&gt; My 2 cents: Carto is a weighted graph structure that describes the topology
</span><br>
<span class="quotelev2">&gt;&gt; of the compute cluster, not just locations of nodes. Many view topologies
</span><br>
<span class="quotelev2">&gt;&gt; (trees, meshes, torii) to be static - but I've found this an unnecessary and
</span><br>
<span class="quotelev2">&gt;&gt; undesirable constraint.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The compute fabric may better be left open to dynamic configuration,
</span><br>
<span class="quotelev2">&gt;&gt; dependent upon the partitioning of jobs, tasks and data to be run.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How do others see this?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; At a network and actually even a node's resource level I think a case can be made for a dynamically changing topology as you mention above.  However, is MPI the right level to compensate for interfaces coming and going? 
</span><br>
<p>It probably should be done at a lower level, but it begs a different question. For example, I've created the capability  in the new cluster manager to detect interfaces that are lost, ride through the problem by moving affected procs to other nodes (reconnecting ORTE-level comm), and move procs back if/when nodes reappear. So someone can remove a node &quot;on-the-fly&quot; and replace that hardware with another node without having to stop and restart the job, etc. A lot of that infrastructure is now down inside ORTE, though a few key pieces remain in the ORCM code base (and most likely will stay there).
<br>
<p>Works great - unless it is an MPI job. If we can figure out a way for the MPI procs to (a) be properly restarted on the &quot;new&quot; node, and (b) update the BTL connection info on the other MPI procs in the job, then we would be good to go...
<br>
<p>Trivial problem, I am sure :-)
<br>
<p><p><p><span class="quotelev1">&gt; It would be nice/cool if there was an APM like feature that spanned HCAs and not just between ports on the same HCA available at a network api level.  I know why this is currently done the way it is for IB but it always struck me that you'd want to handle interface/path changes below MPI.  That way more than just MPI codes could reap the benefits. 
</span><br>
<span class="quotelev1">&gt; At a node level the whole locality issue of a process in relation to its memory or other processes seem to cry out to possibly be more of a OS type of job than MPI.  Reason being is first you could end up with quite a complex layout for a job and second things really become complicated if you want to take into account other MPI jobs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The above being said, I don't hold too much hope that things below MPI will actually take on these tasks, even though it seems like a logical level for these things to occur IMO.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyways, I think keeping in mind dynamic changes is well worth it but it seems to start moving there from a static position makes a lot of sense.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; Ken Lloyd
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Monday, December 14, 2009 6:47 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers List
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] carto vs. hwloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I had a nice chat with Ralph this afternoon about this topic.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; He pointed out a few things to me:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - I had forgotten (ahem) that carto has weights associated with each of its edges (and that's kind of a defining feature).  hwloc, at present, does not.  So perhaps hwloc would not initially replace carto -- maybe in some future future hwloc version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - He also pointed out that not only paffinity, but also sysinfo, could be replaced if hwloc comes in.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; He also made a good point that hwloc is only &quot;sorta&quot; extensible right now -- meaning that, sure, you can add support for new OS's and platforms, but not in as easy/clean a way as we have in Open MPI.  Specifically, adding new support right now means editing much of the current hwloc code: configure, adding #if's to the top-level tools and library core, etc.  It's not nearly as clean as just adding a new plugin that is totally independent of the rest of the code base.  He thought it would be [greatly] beneficial if hwloc uses the same plugin system as Open MPI before bringing it in.  Indeed, Open MPI may wish to extend hwloc in ways that the main hwloc project is not interested in extending (e.g., supporting some of Cisco's custom hardware).  Fair point.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Additionally, the topic of plugins came up within the context of heterogeneity: have code to get the topology of the machine (RAM + processors), but have separate code to mix in accelerators/co-processors and other entities in the box.  One could easily imagine plugins for each different type of entity that you would want to detect within a server.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To some extent, the hwloc crew has already been discussing these issues -- we can probably work elements of much of it into what we're doing.  For example, Brice and Samuel are working on adding PCI device support to hwloc (although I haven't been following the details of what they're doing).  We've also talked about adding hwloc functions for editing the map that comes back.  For example, hwloc could be used as the cornerstone for a new OPAL framework base, and new plugins in this base can use functions to add more information to the initial map that is reported back by the hwloc core.  [shrug]  Need to think about that more.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is all excellent feedback (I need to take it back to the hwloc crew); please let me know what else you think about these ideas tomorrow on the call.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 14, 2009, at 4:13 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Question for everyone (possibly a topic for tomorrow's call...):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc is evolving into a fairly nice package.  It's not       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ready for inclusion into Open MPI yet, but it's getting there.  I predict it will come in somewhere early in the 1.5 series (potentially not 1.5.0, though).  hwloc will provide two things:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. A listing of all processors and memory, to include       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; caches (and cache sizes!) laid out in a map, so you can see what processors share what memory (e.g., caches).  Open MPI currently does not have this capability.  Additionally, hwloc is currently growing support to include PCI devices in the map; that may make it into hwloc v1.0 or not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. Cross-platform / OS support.  hwloc currently support a       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nice variety of OSs and hardware platforms.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Given that hwloc is already cross-platform, do we really       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need the carto framework?  I.e., do we really need multiple carto plugins?  More specifically: should we just use hwloc directly -- with no framework?     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Random points:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - I'm about halfway finished with &quot;embedding&quot; code for       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc like PLPA has, so, for example, all of hwloc's symbols can be prepended with opal_ or orte_ or whatever.  Hence, embedding hwloc in OMPI would be &quot;safe&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - If we keep the carto framework, then we'll have to       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; translate from hwloc's map to carto's map; there may be subtleties involved in the translation.      
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - I guarantee that [much] more thought has been put into       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the hwloc map data structure design than carto's.  :-)  Indeed, to make all of hwloc's data available to OMPI, carto's map data structures may end up evolving to look pretty much exactly like hwloc's.  In which case -- what's the point of carto?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thoughts?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc also provides processor binding functions, so it       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might also make the paffinity framework moot...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;  
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
<li><strong>Next message:</strong> <a href="7236.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22317"</a>
<li><strong>Previous message:</strong> <a href="7234.php">Terry Dontje: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>In reply to:</strong> <a href="7234.php">Terry Dontje: "Re: [OMPI devel] carto vs. hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7237.php">Jeff Squyres: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Reply:</strong> <a href="7237.php">Jeff Squyres: "Re: [OMPI devel] carto vs. hwloc"</a>
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
