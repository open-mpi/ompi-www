<?
$subject_val = "Re: [hwloc-devel] 1.3.1 and 1.4rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 10:23:04 2011" -->
<!-- isoreceived="20111213152304" -->
<!-- sent="Tue, 13 Dec 2011 10:22:59 -0500" -->
<!-- isosent="20111213152259" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.1 and 1.4rc1" -->
<!-- id="7EFBB09D-B0F7-453B-9122-6F2F53C0711A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EE74E89.9060602_at_inria.fr" -->
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
<strong>Date:</strong> 2011-12-13 10:22:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2600.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2598.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>In reply to:</strong> <a href="2597.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2600.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Reply:</strong> <a href="2600.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 13, 2011, at 8:09 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Last feeling: The more I think about PCI support, the more I wonder
</span><br>
<span class="quotelev1">&gt; whether it will be used for anything but getting nice lstopo outputs.
</span><br>
<span class="quotelev1">&gt; Inline helpers are already great for many cases, people just need
</span><br>
<span class="quotelev1">&gt; locality info in most cases, so I wonder if people will actually use PCI
</span><br>
<span class="quotelev1">&gt; as hwloc objects except in lstopo. The same question comes for GPUs.
</span><br>
<p>I can't speak for GPUs, but I think the PCI information will be useful to know what devices are close to what PUs / NUMA nodes.  That information can be used to make decisions about binding, for example (i.e., you want to be &quot;close&quot; to the specific PCI resources that you'll be using).
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
<li><strong>Next message:</strong> <a href="2600.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2598.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>In reply to:</strong> <a href="2597.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2600.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Reply:</strong> <a href="2600.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
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
