<?
$subject_val = "[hwloc-devel] Some practical hwloc API feedback";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 22 15:36:10 2011" -->
<!-- isoreceived="20110922193610" -->
<!-- sent="Thu, 22 Sep 2011 15:36:01 -0400" -->
<!-- isosent="20110922193601" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Some practical hwloc API feedback" -->
<!-- id="C9AE4810-33A1-4D32-BE7C-47968B147FC9_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Some practical hwloc API feedback<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-22 15:36:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2434.php">Brice Goglin: "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<li><strong>Previous message:</strong> <a href="2432.php">Jeff Squyres: "[hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2437.php">Brice Goglin: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Reply:</strong> <a href="2437.php">Brice Goglin: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Maybe reply:</strong> <a href="2477.php">Samuel Thibault: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Maybe reply:</strong> <a href="2478.php">Samuel Thibault: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We're integrating hwloc deeper into Open MPI, and are also using it in some other projects.  As a result, I have some practical feedback.
<br>
<p>(SIDENOTE: reading this letter after I wrote it, I see that it sounds overwhelmingly negative.  Please do not take it that way!  We love the use of hwloc in our projects -- we just have some very specific feedback on things that we would like changed.  We're just not noting all the GOOD things about hwloc in this email.  I'll send pink hwloc ponies and rainbows in a different email)
<br>
<p>-----
<br>
<p>1. The depth-specific accessors are Bad.  Given the warning language in the docs paired with the practical realities that some people actually do mix and match CPUs in a single server (especially when testing new chips), the depth-based accessors *can/will* fail.  Meaning: you have to write application code that can handle the non-uniform depth cases, making the depth-based accessors essentially useless.
<br>
<p>Note that this also affects the non-depth-based accessors, because many (all?) of them just turn around and call the depth-based accessors.  :-\
<br>
<p>In every project where we've used hwloc, we've ended up writing tree traversal based accessors (e.g., DFS kinds of search algorithms) for things like finding the Nth object of a given type for the reasons listed above.
<br>
<p>We suggest adding DFS-based accessors and possibly deprecating the depth-based accessors.  True, the depth-based accessors can be faster to find a given object, but even with a really large hwloc tree (e.g., 1,000 PUs), does the speed difference really matter?  I wonder if people put hwloc searches in critical performance code paths where such a cost difference would matter -- we certainly don't.  FWIW: we've generally used hwloc during setup phases.
<br>
<p>2. All caches are listed as HWLOC_OBJ_CACHE, regardless of their level.  We would like to request changing these to having specific enums for each level of cache -- perhaps adding HWLOC_OBJ_CACHE_L1 through L10 to cover future possible platforms.
<br>
<p>The reasons we are asking for this are as follows:
<br>
<p>(2a) the depth-based accessors are automatically broken for any machine with more than one level of cache (i.e., they return -1 because caches exist at multiple levels).  Yes, #1 expounded on how the depth-based accessors are bad, but I mention this point anyway.  :-)
<br>
<p>(2b) by the same logic, calling get_nbobjs() on HWLOC_OBJ_CACHE fails.
<br>
<p>(2c) to find the set of any given Lx caches, you basically have to traverse the tree looking for HWLOC_OBJ_CACHE *and* attr-&gt;cache.depth==x.  It would be cleaner if we could just look for HWLOC_OBJ_CACHE_L&lt;whatever&gt;.
<br>
<p>(2d) more specifically: since all caches are of type HWLOC_OBJ_CACHE, we find ourselves putting in special case logic for caches all over our code.  Ick.
<br>
<p>Note: I'm not sure how to add new HWLOC_OBJ_CACHE_Lx types and preserve backwards compatibility.  :-\
<br>
<p>3. It would be really great to have some kind of flag in each object that says whether all of its children are homogeneous or not.  
<br>
<p>Specifically: if the flag is true, it means that the trees rooted by obj-&gt;children[i] are &quot;the same&quot;, meaning that each contain the same number of same-typed objects in the same topology layout, and have the same attributes (e.g., their memory sizes are the same, etc.).
<br>
<p>Of course, the OS indexes and cpusets will be different between the objects in the different trees.  The homogeneous flag does not apply to those kinds of things.
<br>
<p>But having this flag means that you might be able to traverse just the obj-&gt;children[0] tree and then be able to prune all other DFS searches and extrapolate the discovered results.
<br>
<p>We ended up implementing this kind of feature in a struct hanging off obj-&gt;userdata; it saved extra compute cycles and some extra logic in some cases.
<br>
<p>4. src/topology-synthetic.c emits error messages on stderr when you try to import invalid XML.  I am guessing that this was put there because it's a much more specific error message than simply returning, for example, EINVAL -- the stderr message tells you the XML file line number of the problem, for example.  
<br>
<p>Could this be done in a different way?  I ask because test suites that import synthetic XML to hwloc do not want their stdout/stderr interrupted.
<br>
<p>Here's two suggestions from Andreas Kupries (tcl-hwloc guy) for this issue:
<br>
<p>(4a) One possibility would be a general error callback the user can configure and which is invoked with such messages. An application can then set up a callback doing whatever processing is proper for it.  Or NULL to disable.
<br>
<p>(4b) A second possibility would be to save the message internally somewhere (can't use the topology, unfortunately) and provide an API to read it from there. Then, when an application gets an error it can use that API to get a more detailed message, if any, and process it as it sees fit.  This has thread safety implications, however.
<br>
<p>5. The XML dump of the topology doesn't include all the support information, such as whether you can bind to threads/cores/etc.  I'm guessing this was done because the emphasis on importing XML was for drawing pretty lstopo pictures.
<br>
<p>But we're using the XML export in OMPI to send the topology of compute nodes up to the scheduler, where decisions are made about how to lay out processes on the back-end compute nodes, what the binding width will be, etc.  This front-end scheduler needs to know whether the back-end node is capable of supporting binding, for example.
<br>
<p>We manually added this information into the message that we send up to the scheduler, but it would be much nicer if the XML export/import just handled that automatically.
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
<li><strong>Next message:</strong> <a href="2434.php">Brice Goglin: "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<li><strong>Previous message:</strong> <a href="2432.php">Jeff Squyres: "[hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2437.php">Brice Goglin: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Reply:</strong> <a href="2437.php">Brice Goglin: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Maybe reply:</strong> <a href="2477.php">Samuel Thibault: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Maybe reply:</strong> <a href="2478.php">Samuel Thibault: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
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
