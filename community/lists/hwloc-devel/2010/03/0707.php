<?
$subject_val = "Re: [hwloc-devel] 1.0-rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 05:56:47 2010" -->
<!-- isoreceived="20100303105647" -->
<!-- sent="Wed, 03 Mar 2010 11:56:42 +0100" -->
<!-- isosent="20100303105642" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.0-rc1" -->
<!-- id="4B8E406A.70203_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100303092829.GC5779_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.0-rc1<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 05:56:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0708.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0706.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>In reply to:</strong> <a href="0706.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0710.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="0710.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="0711.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Brice Goglin, le Wed 03 Mar 2010 09:56:42 +0100, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I am asking people here, some are confused by all these
</span><br>
<span class="quotelev2">&gt;&gt; --logical/--physical outputs. One idea that came is to always keep the
</span><br>
<span class="quotelev2">&gt;&gt; logical index and print the physical index as an attribute. Something like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ lstopo -
</span><br>
<span class="quotelev2">&gt;&gt; Machine(1508MB) + Socket#0 (phys=0) + L2(phys=0,2048KB)
</span><br>
<span class="quotelev2">&gt;&gt;   L1(phys=0,32KB) + Core#0(phys=0) + P#0(phys=0)
</span><br>
<span class="quotelev2">&gt;&gt;   L1(phys=1,32KB) + Core#1(phys=1) + P#1(phys=1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am interested by this idea. The physical index could actually be
</span><br>
<span class="quotelev2">&gt;&gt; displayed as an attribute for Proc all the time since it's often
</span><br>
<span class="quotelev2">&gt;&gt; interesting.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And for NUMA nodes too I guess?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Good point.
<br>
<p><span class="quotelev1">&gt; However, what to show in the graphical output? Printing both indexes
</span><br>
<span class="quotelev1">&gt; will make the output very large.
</span><br>
<p>By the way, would it possible to print multiple lines in each objects?
<br>
<p><span class="quotelev1">&gt; The usage I mostly have there is to
</span><br>
<span class="quotelev1">&gt; pass --physical, to print the physical indexes of NUMA nodes and procs.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Keep --physical unchanged for the graphic output then ? But we'd have an
<br>
inconsistency between the graphic and text outputs then. So maybe we're
<br>
back to the initial question.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0708.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0706.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>In reply to:</strong> <a href="0706.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0710.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="0710.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="0711.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
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
