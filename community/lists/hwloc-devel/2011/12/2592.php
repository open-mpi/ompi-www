<?
$subject_val = "Re: [hwloc-devel] 1.3.1 and 1.4rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  9 07:48:02 2011" -->
<!-- isoreceived="20111209124802" -->
<!-- sent="Fri, 9 Dec 2011 07:47:57 -0500" -->
<!-- isosent="20111209124757" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.1 and 1.4rc1" -->
<!-- id="108DD19D-A572-4F96-8372-C02404A223EC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EE1C451.5070607_at_inria.fr" -->
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
<strong>Date:</strong> 2011-12-09 07:47:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2593.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2591.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4030"</a>
<li><strong>In reply to:</strong> <a href="2587.php">Brice Goglin: "[hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2593.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Reply:</strong> <a href="2593.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Two other enhancements that would be good to get (sometime -- not necessarily for 1.4):
<br>
<p>1. Will there ever be any differentiation between cache levels in hwloc_obj.type?  I ask because in OMPI, we found that the various counting routines were not helpful because they only search by *type*, not by (obj.type, obj.attr-&gt;cache.depth).  This was somewhat of a bummer; we basically ended up writing our own traversal helpers in OMPI because when searching for an OBJ_CACHE, we had to search on the tuple -- not just the type.
<br>
<p>(I think I might have brought this up before, but I don't remember where that discussion ended up...)
<br>
<p>2. It would be helpful to have a member in the obj that represents the logical AND of online_cpuset and allowed_cpuset.  This is the set of CPUs that you can actually *use*.  Admittedly, this is purely a convenience; I mention it because we found ourselves always computing this value when deciding which PU's to bind to.  So it would be nice if it was pre-computed by hwloc and stashed on the obj.  (I'm not saying to remove the online_cpuset and allowed_cpuset fields -- they're useful information, too; I'm just saying that the AND of these values is also a useful piece of information)
<br>
<p><p>On Dec 9, 2011, at 3:18 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I want to release 1.3.1 for christmas, so I'll do a 1.3.1rc1 on monday.
</span><br>
<span class="quotelev1">&gt; There are no critical fixes in there, but several changes that are
</span><br>
<span class="quotelev1">&gt; useful, so it's better to finally flush all these (some have been
</span><br>
<span class="quotelev1">&gt; waiting almost since the 1.3.1 two months ago).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additionally, some people want a multinode support release soon too and
</span><br>
<span class="quotelev1">&gt; I kind of promised it would arrive by the end of the year. So I'll start
</span><br>
<span class="quotelev1">&gt; polishing the v1.4 branch and do a first 1.4rc next week or so, so that
</span><br>
<span class="quotelev1">&gt; people can start playing with it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are currently 3 tickets against v1.4:
</span><br>
<span class="quotelev1">&gt; #50 is about adding instruction caches
</span><br>
<span class="quotelev1">&gt; #41 wants conversion function between &quot;L2cache&quot;-like string and
</span><br>
<span class="quotelev1">&gt; (type,depth) and actual depth within the tree
</span><br>
<span class="quotelev1">&gt; #43 wants throughput matrices on the side of the existing latency matrices
</span><br>
<span class="quotelev1">&gt; None of this is ready, and there are still open questions in #50 and #43
</span><br>
<span class="quotelev1">&gt; so I intend to defer all these to v1.5 so that multinode support doesn't
</span><br>
<span class="quotelev1">&gt; wait too long.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
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
<li><strong>Next message:</strong> <a href="2593.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2591.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4030"</a>
<li><strong>In reply to:</strong> <a href="2587.php">Brice Goglin: "[hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2593.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Reply:</strong> <a href="2593.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
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
