<?
$subject_val = "Re: [hwloc-devel] Some practical hwloc API feedback";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 22 16:42:36 2011" -->
<!-- isoreceived="20110922204236" -->
<!-- sent="Thu, 22 Sep 2011 14:42:29 -0600" -->
<!-- isosent="20110922204229" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Some practical hwloc API feedback" -->
<!-- id="3D119B30-0C2E-4A2A-BBF9-0F616DE45A30_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E7B99A4.2080406_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Some practical hwloc API feedback<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-22 16:42:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2439.php">Brice Goglin: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Previous message:</strong> <a href="2437.php">Brice Goglin: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>In reply to:</strong> <a href="2437.php">Brice Goglin: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2439.php">Brice Goglin: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Reply:</strong> <a href="2439.php">Brice Goglin: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2011, at 2:25 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 22/09/2011 21:36, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; 1. The depth-specific accessors are Bad.  Given the warning language in the docs paired with the practical realities that some people actually do mix and match CPUs in a single server (especially when testing new chips), the depth-based accessors *can/will* fail.  Meaning: you have to write application code that can handle the non-uniform depth cases, making the depth-based accessors essentially useless.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't see any real problem with having depth accessors and mixed types
</span><br>
<span class="quotelev1">&gt; of CPUs in a server. You can have different levels of caches in
</span><br>
<span class="quotelev1">&gt; different CPUs,, but you still have a uniform depth/level for important
</span><br>
<span class="quotelev1">&gt; things like PUs, Core, Socket.
</span><br>
<p>I guess I didn't get that from your documentation. Since caches sit between socket and core, they appear to affect the depth of the core in a given socket. Thus, if there are different numbers of caches in the different sockets on a node, then the core/pu level would change across the sockets.
<br>
<p>Is that not true?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only problem so far is caches. But do you actually walk the list of
</span><br>
<span class="quotelev1">&gt; caches?
</span><br>
<p>Yes we do
<br>
<p><span class="quotelev1">&gt; People would walk the list of PUs, Cores, Sockets, NUMA nodes.
</span><br>
<span class="quotelev1">&gt; But when talking about Caches, I would rather see them ask &quot;which cache
</span><br>
<span class="quotelev1">&gt; do I have above these cores?&quot;.
</span><br>
<p>But that isn't exactly how people use that info. Instead, they ask us to &quot;map N processes on each L2 cache across the node&quot;, or to &quot;bind all procs to their local L3 cache&quot;.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And I don't see how DFS would help. Any concrete example?
</span><br>
<p>As above. If I'm trying to map a process to (say) a core, then I have to search for all the cores. If the system has different numbers of caches on each socket, then the current search for a core object seems to have a problem as it is looking at a specific depth, yet the cores are at different depths on each socket. So I have to manually traverse the tree looking for core objects at any depth.
<br>
<p>Perhaps my understanding of your tree topology is wrong, though...
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But we're using the XML export in OMPI to send the topology of compute nodes up to the scheduler, where decisions are made about how to lay out processes on the back-end compute nodes, what the binding width will be, etc.  This front-end scheduler needs to know whether the back-end node is capable of supporting binding, for example.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We manually added this information into the message that we send up to the scheduler, but it would be much nicer if the XML export/import just handled that automatically.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess we could add some &quot;support&quot; attributes to the XML.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does your scheduler actually need to know if binding is supported? What
</span><br>
<span class="quotelev1">&gt; does it do if not supported? Can't just try to bind and get an error if
</span><br>
<span class="quotelev1">&gt; not supported?
</span><br>
<p>When dealing with large scale systems, it is much faster and easier to check these things -before- launching the job. Remember, on these systems, it can take minutes to launch a full-scale job! Nobody wants to sit there for that much time, only to find that the system doesn't support the requested operation.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2439.php">Brice Goglin: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Previous message:</strong> <a href="2437.php">Brice Goglin: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>In reply to:</strong> <a href="2437.php">Brice Goglin: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2439.php">Brice Goglin: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Reply:</strong> <a href="2439.php">Brice Goglin: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
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
