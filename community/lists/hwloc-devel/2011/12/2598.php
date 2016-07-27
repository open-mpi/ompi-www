<?
$subject_val = "Re: [hwloc-devel] 1.3.1 and 1.4rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 10:20:00 2011" -->
<!-- isoreceived="20111213152000" -->
<!-- sent="Tue, 13 Dec 2011 10:19:55 -0500" -->
<!-- isosent="20111213151955" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.1 and 1.4rc1" -->
<!-- id="1EF9EBD7-92C1-4B64-9F8F-7C3D328DAE77_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EE26E10.80305_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.3.1 and 1.4rc1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 10:19:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2599.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2597.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>In reply to:</strong> <a href="2593.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2596.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(sorry for the delay in replying...)
<br>
<p>On Dec 9, 2011, at 3:22 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 1. Will there ever be any differentiation between cache levels in hwloc_obj.type?  I ask because in OMPI, we found that the various counting routines were not helpful because they only search by *type*, not by (obj.type, obj.attr-&gt;cache.depth).  This was somewhat of a bummer; we basically ended up writing our own traversal helpers in OMPI because when searching for an OBJ_CACHE, we had to search on the tuple -- not just the type.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What you need is just a way to convert OBJ_CACHE + cache.depth into a
</span><br>
<span class="quotelev1">&gt; hwloc level depth, and then use hwloc_get_obj_by_depth() and friends as
</span><br>
<span class="quotelev1">&gt; usual. This is actually included in ticket #41. However, ticket #41 is
</span><br>
<span class="quotelev1">&gt; blocked until #50 is sorted out because adding instruction caches may
</span><br>
<span class="quotelev1">&gt; mean that OBJ_CACHE + cache.depth does not always identify a unique
</span><br>
<span class="quotelev1">&gt; level anymore.
</span><br>
<p>Got it.
<br>
<p><span class="quotelev1">&gt; In the meantime, I could easily write a helper that you guys would use
</span><br>
<span class="quotelev1">&gt; for OMPI for now.
</span><br>
<p>I think Ralph did that already.
<br>
<p><span class="quotelev1">&gt; Adding new types OBJ_CACHE_L1... L3 may not help that much if we add
</span><br>
<span class="quotelev1">&gt; instruction caches. We'd need L1d L1i ... many possible types.
</span><br>
<p>Roger; I can see the need for a more generalized helper.
<br>
<p><span class="quotelev2">&gt;&gt; 2. It would be helpful to have a member in the obj that represents the logical AND of online_cpuset and allowed_cpuset.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am never sure about all this. I don't like all these cpusets. Samuel
</span><br>
<span class="quotelev1">&gt; will answer better :)
</span><br>
<p>Samuel -- any thoughts?
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
<li><strong>Next message:</strong> <a href="2599.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2597.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>In reply to:</strong> <a href="2593.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2596.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
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
