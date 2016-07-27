<?
$subject_val = "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 15:39:40 2009" -->
<!-- isoreceived="20091021193940" -->
<!-- sent="Wed, 21 Oct 2009 15:39:34 -0400" -->
<!-- isosent="20091021193934" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] ibverbs -&amp;gt; not just infiniband!" -->
<!-- id="1D4C0784-AC6F-4AED-8D9C-6ADEC2F58004_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4ADF0515.80005_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] ibverbs -&gt; not just infiniband!<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 15:39:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0223.php">Brice Goglin: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Previous message:</strong> <a href="0221.php">Jeff Squyres: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>In reply to:</strong> <a href="0197.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0200.php">Samuel Thibault: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 21, 2009, at 8:56 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt; &gt; What should we return from hwloc_ibv_get_device_cpuset() if not  
</span><br>
<span class="quotelev1">&gt; #ifdef
</span><br>
<span class="quotelev2">&gt; &gt; LINUX?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd say a full cpuset.
</span><br>
<span class="quotelev1">&gt; Or the full-system cpuset:
</span><br>
<span class="quotelev1">&gt;    return hwloc_cpuset_dup(hwloc_get_system_obj(topology)-&gt;cpuset);
</span><br>
<span class="quotelev1">&gt; If the latter we'll need to add a topology parameter to
</span><br>
<span class="quotelev1">&gt; hwloc_ibv_get_device_cpuset()
</span><br>
<span class="quotelev1">&gt;
</span><br>
Oh crud, I missed your last statement about adding a topology  
<br>
parameter, so I didn't add it (i.e., to be fixed pre-final-release).
<br>
<p>So how about this:
<br>
<p>- make it non-inline
<br>
- add the topology parameter
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0223.php">Brice Goglin: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Previous message:</strong> <a href="0221.php">Jeff Squyres: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>In reply to:</strong> <a href="0197.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0200.php">Samuel Thibault: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
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
