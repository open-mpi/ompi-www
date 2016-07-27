<?
$subject_val = "Re: [hwloc-devel] First plugin namespace issue report";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  4 08:11:54 2013" -->
<!-- isoreceived="20130604121154" -->
<!-- sent="Tue, 04 Jun 2013 14:11:48 +0200" -->
<!-- isosent="20130604121148" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] First plugin namespace issue report" -->
<!-- id="51ADD984.7010009_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F659447_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] First plugin namespace issue report<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-04 08:11:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3784.php">Brice Goglin: "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>Previous message:</strong> <a href="3782.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Move to git?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3784.php">Brice Goglin: "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>Reply:</strong> <a href="3784.php">Brice Goglin: "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>Reply:</strong> <a href="3785.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(adding the list to CC)
<br>
<p><p>Le 04/06/2013 13:35, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; On Jun 4, 2013, at 4:10 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess I'm asking - why can't that plugin link against an embedded (non-DSO) hwloc?
</span><br>
<span class="quotelev2">&gt;&gt; It can for sure. But if there's a hwloc package in your distrib (and
</span><br>
<span class="quotelev2">&gt;&gt; this one usually has plugins enabled), people usually force you to use
</span><br>
<span class="quotelev2">&gt;&gt; it instead of shipping another hwloc in your own package.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does hwloc support building its modules in libhwloc.la by default, but also lt_dlopening any modules that it finds?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, perhaps passing a flag to hwloc's init saying &quot;don't open any plugins&quot; might be sufficient...?
</span><br>
<p>Once you pass --enable-plugins to get plugin loading support, you can
<br>
still have both statically-built-in and plugin at the same time.
<br>
<p>The main point for making hwloc plugins was to avoid dependencies on
<br>
crazy things like cuda/opencl/nvml/nvctrl/pci/libxml in the hwloc core.
<br>
So only these components can be built as plugins, others are always
<br>
static (Linux, x86, minimalistic xml without libxml).
<br>
<p><p>Adding topology flag to disable plugin may indeed be a nice workaround.
<br>
As long as the hwloc user doesn't need what's in plugin, things will
<br>
work fine. And I think things will work fine in the OpenCL case.
<br>
<p>Also, we have seen two behaviors:
<br>
1) OpenCL: the program aborts because the lazy symbol lookup fails, and
<br>
we can't easily force BIND_NOW
<br>
2) custom test with ltdl: The program just silently fails to load hwloc
<br>
symbols. Equivalent to passing the topology flag above.
<br>
I hope we'll see (2) more often than (1) in the future.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3784.php">Brice Goglin: "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>Previous message:</strong> <a href="3782.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Move to git?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3784.php">Brice Goglin: "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>Reply:</strong> <a href="3784.php">Brice Goglin: "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>Reply:</strong> <a href="3785.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
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
