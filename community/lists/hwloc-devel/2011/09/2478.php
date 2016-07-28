<?
$subject_val = "Re: [hwloc-devel] Some practical hwloc API feedback";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 25 17:41:45 2011" -->
<!-- isoreceived="20110925214145" -->
<!-- sent="Sun, 25 Sep 2011 23:41:39 +0200" -->
<!-- isosent="20110925214139" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Some practical hwloc API feedback" -->
<!-- id="20110925214139.GK30247_at_type" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="381947541.283683.1316720191628.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-25 17:41:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2479.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3866)"</a>
<li><strong>Previous message:</strong> <a href="2477.php">Samuel Thibault: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Maybe in reply to:</strong> <a href="2433.php">Jeff Squyres: "[hwloc-devel] Some practical hwloc API feedback"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Thu 22 Sep 2011 21:36:31 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; (SIDENOTE: reading this letter after I wrote it, I see that it sounds overwhelmingly negative.  Please do not take it that way!
</span><br>
<p>Sure! If these are the only negative points of our API, it's actually a
<br>
very positive mail ;)
<br>
<p><span class="quotelev1">&gt; 1. The depth-specific accessors are Bad.  Given the warning language in the docs paired with the practical realities that some people actually do mix and match CPUs in a single server (especially when testing new chips), the depth-based accessors *can/will* fail.  Meaning: you have to write application code that can handle the non-uniform depth cases, making the depth-based accessors essentially useless.
</span><br>
<p>I believe this issue is solved by better pointers at documentation,
<br>
right?
<br>
<p><span class="quotelev1">&gt; (2c) to find the set of any given Lx caches, you basically have to traverse the tree looking for HWLOC_OBJ_CACHE *and* attr-&gt;cache.depth==x.  It would be cleaner if we could just look for HWLOC_OBJ_CACHE_L&lt;whatever&gt;.
</span><br>
<p>But then you wouldn't be able to look at OBJ_CACHE when you only want to
<br>
care about caches, whatever their level.
<br>
<p><span class="quotelev1">&gt; 4. src/topology-synthetic.c emits error messages on stderr when you try to import invalid XML.
</span><br>
<p>Already fixed, AIUI.
<br>
<p><span class="quotelev1">&gt; 3. It would be really great to have some kind of flag in each object that says whether all of its children are homogeneous or not.  
</span><br>
<span class="quotelev1">&gt; 5. The XML dump of the topology doesn't include all the support information, such as whether you can bind to threads/cores/etc.
</span><br>
<p>These are doable, indeed (Thanks Brice for adding it to the TODO ticket).
<br>
<p>Thanks for the feedback, that's extremely precious to make hwloc what
<br>
people want!
<br>
Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2479.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3866)"</a>
<li><strong>Previous message:</strong> <a href="2477.php">Samuel Thibault: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Maybe in reply to:</strong> <a href="2433.php">Jeff Squyres: "[hwloc-devel] Some practical hwloc API feedback"</a>
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
