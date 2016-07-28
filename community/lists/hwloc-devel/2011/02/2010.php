<?
$subject_val = "Re: [hwloc-devel] Memory affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 15:36:03 2011" -->
<!-- isoreceived="20110228203603" -->
<!-- sent="Mon, 28 Feb 2011 15:35:59 -0500" -->
<!-- isosent="20110228203559" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Memory affinity" -->
<!-- id="17642BB4-F465-4BC6-9E77-44B68E0660CA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D6C062C.8040009_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Memory affinity<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 15:35:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2011.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2009.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2009.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2011.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2011.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 28, 2011, at 3:31 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt; That would seem to imply that I should always hwloc_set_area_membind() if I want it to persist beyond any potential future swapping.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The kernel only looks at the current virtual memory area policy. If you
</span><br>
<span class="quotelev1">&gt; didn't call set_area_membind, the default policy is used. It doesn't
</span><br>
<span class="quotelev1">&gt; care about the location of the old page before swap-out.
</span><br>
<p>I'm not sure exactly what you mean here -- if I call hwloc_set_area_membind() to bind an area to numa node X, and then area pages get swapped out, then swapped back in, will be guaranteed to be swapped back in somewhere on numa node X?  (I don't care if they're exactly the same physical page)
<br>
<p><span class="quotelev1">&gt; It's similar to
</span><br>
<span class="quotelev1">&gt; first-touch: use a local page as long as some pages are available there.
</span><br>
<p>I'm not sure how to reconcile that statement with what I *think* your prior statement means... which probably means I don't understand your prior statement.  :-)
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
<li><strong>Next message:</strong> <a href="2011.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2009.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2009.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2011.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2011.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
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
