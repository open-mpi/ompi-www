<?
$subject_val = "Re: [hwloc-devel] 1.0-rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 03:56:48 2010" -->
<!-- isoreceived="20100303085648" -->
<!-- sent="Wed, 03 Mar 2010 09:56:42 +0100" -->
<!-- isosent="20100303085642" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.0-rc1" -->
<!-- id="4B8E244A.1060108_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B8A50D3.9010209_at_inria.fr" -->
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
<strong>Date:</strong> 2010-03-03 03:56:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0706.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0704.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1797)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/02/0700.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0706.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="0706.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin wrote:
<br>
<span class="quotelev2">&gt;&gt; What hasn't been finished yet and to my opinion needs to be for v1.0, is
</span><br>
<span class="quotelev2">&gt;&gt; the prefix/suffix/whatever to easily distinguish between physical and
</span><br>
<span class="quotelev2">&gt;&gt; logical numbers in lstopo.  
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I played with this today and arrived to these conclusions:
</span><br>
<span class="quotelev1">&gt; * Having 'l' or 'p' prefix without # or any other special character is
</span><br>
<span class="quotelev1">&gt; very confusing since we already have things like L1 for cache levels and
</span><br>
<span class="quotelev1">&gt; P for proc numbers
</span><br>
<span class="quotelev1">&gt; * Having nothing before the number is a bad idea, it would be confusing
</span><br>
<span class="quotelev1">&gt; with cache/misc levels
</span><br>
<span class="quotelev1">&gt; * I like '#' as a prefix since it's widely used as a symbol meaning
</span><br>
<span class="quotelev1">&gt; &quot;number&quot; and I found no other nice character
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I see two solutions:
</span><br>
<span class="quotelev1">&gt; * p#2 and l#2 (prefixed with a space)
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; * #2p and #2l
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<p>I am asking people here, some are confused by all these
<br>
--logical/--physical outputs. One idea that came is to always keep the
<br>
logical index and print the physical index as an attribute. Something like:
<br>
<p>$ lstopo -
<br>
Machine(1508MB) + Socket#0 (phys=0) + L2(phys=0,2048KB)
<br>
&nbsp;&nbsp;L1(phys=0,32KB) + Core#0(phys=0) + P#0(phys=0)
<br>
&nbsp;&nbsp;L1(phys=1,32KB) + Core#1(phys=1) + P#1(phys=1)
<br>
<p><p>I am interested by this idea. The physical index could actually be
<br>
displayed as an attribute for Proc all the time since it's often
<br>
interesting. The physical index of other objects is often useless and
<br>
even confusing.
<br>
<p>So what about we:
<br>
1) keep --logical by default, add physical index in Proc attributes by
<br>
default
<br>
2) if --verbose, we add the physical index in every object attribute
<br>
3) if --physical, we replace #0 with physical indexes as #0p (and don't
<br>
print logical indexes anywhere)
<br>
I would actually just drop (3). If we really need --physical to match
<br>
other tools command-line options, we could just make --physical
<br>
equivalent to --verbose.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0706.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0704.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1797)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/02/0700.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0706.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="0706.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
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
