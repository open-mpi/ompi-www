<?
$subject_val = "Re: [hwloc-devel] 1.3.1 and 1.4rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 12:13:37 2011" -->
<!-- isoreceived="20111213171337" -->
<!-- sent="Tue, 13 Dec 2011 18:13:31 +0100" -->
<!-- isosent="20111213171331" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.1 and 1.4rc1" -->
<!-- id="4EE787BB.1070008_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20111213170255.GU4359_at_type.bordeaux.inria.fr" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 12:13:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2610.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2608.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>In reply to:</strong> <a href="2606.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2610.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 13/12/2011 18:02, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice Goglin, le Tue 13 Dec 2011 16:41:08 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Le 13/12/2011 16:22, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can't speak for GPUs, but I think the PCI information will be useful to know what devices are close to what PUs / NUMA nodes.  That information can be used to make decisions about binding, for example (i.e., you want to be &quot;close&quot; to the specific PCI resources that you'll be using).
</span><br>
<span class="quotelev2">&gt;&gt; In most cases, you don't need PCI support for this, you juste manipulate
</span><br>
<span class="quotelev2">&gt;&gt; a cuda device, an ibv_device, a MX endpoint, ... and use one of the
</span><br>
<span class="quotelev2">&gt;&gt; inline helpers to get the corresponding locality (a cpuset).
</span><br>
<span class="quotelev1">&gt; A problem I see there is that although you can write such helper for
</span><br>
<span class="quotelev1">&gt; Linux, nothing guarantees that it'll be so easy for other OSes.
</span><br>
<p>And ? :)
<br>
<p>We already have many features that are only supported on Linux. OS
<br>
devices for instance. libpci isn't portable to all OS we support, ...
<br>
<p>As long as we don't add something obviously not portable, I am fine. And
<br>
we still have hwloc/linux.h for other cases.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2610.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2608.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>In reply to:</strong> <a href="2606.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2610.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
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
