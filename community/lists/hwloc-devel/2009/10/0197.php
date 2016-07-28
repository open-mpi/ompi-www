<?
$subject_val = "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 08:58:27 2009" -->
<!-- isoreceived="20091021125827" -->
<!-- sent="Wed, 21 Oct 2009 14:56:53 +0200" -->
<!-- isosent="20091021125653" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] ibverbs -&amp;gt; not just infiniband!" -->
<!-- id="4ADF0515.80005_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="58DD6C9D-9C63-4F1A-9E0B-81884D68F887_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 08:56:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0198.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Previous message:</strong> <a href="0196.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0196.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0198.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Reply:</strong> <a href="0198.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Reply:</strong> <a href="0222.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 21, 2009, at 8:41 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Or, we could install it only on Linux for now? (and document this in
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; doxyfile)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, a colleague from Sun tells me that Sun's verbs stack is
</span><br>
<span class="quotelev1">&gt; available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What should we return from hwloc_ibv_get_device_cpuset() if not #ifdef
</span><br>
<span class="quotelev1">&gt; LINUX?
</span><br>
<p><p>I'd say a full cpuset.
<br>
Or the full-system cpuset:
<br>
&nbsp;&nbsp;&nbsp;return hwloc_cpuset_dup(hwloc_get_system_obj(topology)-&gt;cpuset);
<br>
If the latter we'll need to add a topology parameter to
<br>
hwloc_ibv_get_device_cpuset()
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0198.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Previous message:</strong> <a href="0196.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0196.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0198.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Reply:</strong> <a href="0198.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Reply:</strong> <a href="0222.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
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
