<?
$subject_val = "Re: [hwloc-devel] thread safety";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 10:34:40 2010" -->
<!-- isoreceived="20100312153440" -->
<!-- sent="Fri, 12 Mar 2010 07:34:36 -0800" -->
<!-- isosent="20100312153436" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] thread safety" -->
<!-- id="0DC68042-134B-49EE-8972-3281D33CDBB4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100312080128.GC5044_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] thread safety<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 10:34:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0750.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Previous message:</strong> <a href="0748.php">Brice Goglin: "Re: [hwloc-devel] [PATCH 2/2] Provide hwloc_cpuset_next() and use it in	hwloc_cpuset_foreach"</a>
<li><strong>In reply to:</strong> <a href="0747.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 12, 2010, at 12:01 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; That being said, we could easily add a mutex which we take in write
</span><br>
<span class="quotelev1">&gt; operations to become completely THREAD_MULTIPLE-safe, as there aren't so
</span><br>
<span class="quotelev1">&gt; many write operations.
</span><br>
<p>For now, let's just leave the mutex out and solve the issue through documentation.  If it turns out that people want hwloc to use the one-big-mutex approach and make things like multiple writes safe, then we can always add that later.
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
<li><strong>Next message:</strong> <a href="0750.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Previous message:</strong> <a href="0748.php">Brice Goglin: "Re: [hwloc-devel] [PATCH 2/2] Provide hwloc_cpuset_next() and use it in	hwloc_cpuset_foreach"</a>
<li><strong>In reply to:</strong> <a href="0747.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
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
