<?
$subject_val = "Re: [hwloc-devel] Some practical hwloc API feedback";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 22 16:25:15 2011" -->
<!-- isoreceived="20110922202515" -->
<!-- sent="Thu, 22 Sep 2011 22:25:08 +0200" -->
<!-- isosent="20110922202508" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Some practical hwloc API feedback" -->
<!-- id="4E7B99A4.2080406_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C9AE4810-33A1-4D32-BE7C-47968B147FC9_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-22 16:25:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2438.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Previous message:</strong> <a href="2436.php">Ralph Castain: "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<li><strong>In reply to:</strong> <a href="2433.php">Jeff Squyres: "[hwloc-devel] Some practical hwloc API feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2438.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Reply:</strong> <a href="2438.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 22/09/2011 21:36, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; 1. The depth-specific accessors are Bad.  Given the warning language in the docs paired with the practical realities that some people actually do mix and match CPUs in a single server (especially when testing new chips), the depth-based accessors *can/will* fail.  Meaning: you have to write application code that can handle the non-uniform depth cases, making the depth-based accessors essentially useless.
</span><br>
<p>I don't see any real problem with having depth accessors and mixed types
<br>
of CPUs in a server. You can have different levels of caches in
<br>
different CPUs,, but you still have a uniform depth/level for important
<br>
things like PUs, Core, Socket.
<br>
<p>The only problem so far is caches. But do you actually walk the list of
<br>
caches? People would walk the list of PUs, Cores, Sockets, NUMA nodes.
<br>
But when talking about Caches, I would rather see them ask &quot;which cache
<br>
do I have above these cores?&quot;.
<br>
<p>And I don't see how DFS would help. Any concrete example?
<br>
<p><span class="quotelev1">&gt; 2. All caches are listed as HWLOC_OBJ_CACHE, regardless of their level.  We would like to request changing these to having specific enums for each level of cache -- perhaps adding HWLOC_OBJ_CACHE_L1 through L10 to cover future possible platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reasons we are asking for this are as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (2a) the depth-based accessors are automatically broken for any machine with more than one level of cache (i.e., they return -1 because caches exist at multiple levels).  Yes, #1 expounded on how the depth-based accessors are bad, but I mention this point anyway.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (2b) by the same logic, calling get_nbobjs() on HWLOC_OBJ_CACHE fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (2c) to find the set of any given Lx caches, you basically have to traverse the tree looking for HWLOC_OBJ_CACHE *and* attr-&gt;cache.depth==x.  It would be cleaner if we could just look for HWLOC_OBJ_CACHE_L&lt;whatever&gt;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (2d) more specifically: since all caches are of type HWLOC_OBJ_CACHE, we find ourselves putting in special case logic for caches all over our code.  Ick.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note: I'm not sure how to add new HWLOC_OBJ_CACHE_Lx types and preserve backwards compatibility.  :-\
</span><br>
<p>Long standing problem, yes. Not only about caches unfortunately. Also
<br>
about groups, and maybe other one day.
<br>
<p>There's a trac ticket about basically having an &quot;extended type&quot; which
<br>
would contain the current type + a depth attribute. This guy can be
<br>
converted into string, level depth, ...
<br>
<p><span class="quotelev1">&gt; 3. It would be really great to have some kind of flag in each object that says whether all of its children are homogeneous or not.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically: if the flag is true, it means that the trees rooted by obj-&gt;children[i] are &quot;the same&quot;, meaning that each contain the same number of same-typed objects in the same topology layout, and have the same attributes (e.g., their memory sizes are the same, etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, the OS indexes and cpusets will be different between the objects in the different trees.  The homogeneous flag does not apply to those kinds of things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But having this flag means that you might be able to traverse just the obj-&gt;children[0] tree and then be able to prune all other DFS searches and extrapolate the discovered results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We ended up implementing this kind of feature in a struct hanging off obj-&gt;userdata; it saved extra compute cycles and some extra logic in some cases.
</span><br>
<p>Ack.
<br>
<p><span class="quotelev1">&gt; 4. src/topology-synthetic.c emits error messages on stderr when you try to import invalid XML.  I am guessing that this was put there because it's a much more specific error message than simply returning, for example, EINVAL -- the stderr message tells you the XML file line number of the problem, for example.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could this be done in a different way?  I ask because test suites that import synthetic XML to hwloc do not want their stdout/stderr interrupted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Your talking about topology-xml.c right ? topology-synthetic is
<br>
something different.
<br>
<p>All stderr warnings are gone in trunk (not in v1.3 iirc). The single one
<br>
that remains is the one saying &quot;if you need full XML support, use
<br>
libxml2&quot;. There's an env variable to reenable them.
<br>
<p>And we return better error values when failing to parse XML in trunk too.
<br>
<p><p><span class="quotelev1">&gt; 5. The XML dump of the topology doesn't include all the support information, such as whether you can bind to threads/cores/etc.  I'm guessing this was done because the emphasis on importing XML was for drawing pretty lstopo pictures.
</span><br>
<p>Come on, the emphasis on importing XML is for remote debugging :)
<br>
<p><span class="quotelev1">&gt; But we're using the XML export in OMPI to send the topology of compute nodes up to the scheduler, where decisions are made about how to lay out processes on the back-end compute nodes, what the binding width will be, etc.  This front-end scheduler needs to know whether the back-end node is capable of supporting binding, for example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We manually added this information into the message that we send up to the scheduler, but it would be much nicer if the XML export/import just handled that automatically.
</span><br>
<p>I guess we could add some &quot;support&quot; attributes to the XML.
<br>
<p>Does your scheduler actually need to know if binding is supported? What
<br>
does it do if not supported? Can't just try to bind and get an error if
<br>
not supported?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2438.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Previous message:</strong> <a href="2436.php">Ralph Castain: "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<li><strong>In reply to:</strong> <a href="2433.php">Jeff Squyres: "[hwloc-devel] Some practical hwloc API feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2438.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Reply:</strong> <a href="2438.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
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
