<?
$subject_val = "Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 22 18:15:19 2010" -->
<!-- isoreceived="20101222231519" -->
<!-- sent="Thu, 23 Dec 2010 00:15:13 +0100" -->
<!-- isosent="20101222231513" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?" -->
<!-- id="4D128681.8030904_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D1266C2.7080606_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-22 18:15:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1759.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r2987)"</a>
<li><strong>Previous message:</strong> <a href="1757.php">Guy Streeter: "Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
<li><strong>In reply to:</strong> <a href="1757.php">Guy Streeter: "Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 22/12/2010 21:59, Guy Streeter a &#233;crit :
<br>
<span class="quotelev1">&gt; On 12/22/2010 01:50 PM, Guy Streeter wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm using 1.1 on Fedora 13. I start with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; set = hwloc_bitmap_alloc_full()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and it looks like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 0xf...f
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then I call
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_bitmap_from_ith_ulong(set, 1, 0xdeadbeef)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and I get
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 0xdeadbeef,0x00000034,0x3f77aed8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which I don't understand.
</span><br>
<p>Oops, looks like we have a typo, I forgot to reset to first ulong. Patch
<br>
attached.
<br>
<p><span class="quotelev1">&gt; hwloc_bitmap_set_ith_ulong() seems to behave in a similar way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; full: 0xf...f
</span><br>
<span class="quotelev1">&gt; ith:  0xf...f,,0xdeadbeef,0xffffffff,0xffffffff
</span><br>
<p>This is expected. set_ith_ulong replaces exactly one ulong, and ulongs
<br>
are likely 64bits on your machine (but we always print using 32bit masks
<br>
to be arch-independent). That's why the third and fourth 32bit masks are
<br>
replaced above (with 0xdeadbeef and nothing respectively).
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1758/fix_from_ith_ulong.patch">fix_from_ith_ulong.patch</a>
</ul>
<!-- attachment="fix_from_ith_ulong.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1759.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r2987)"</a>
<li><strong>Previous message:</strong> <a href="1757.php">Guy Streeter: "Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
<li><strong>In reply to:</strong> <a href="1757.php">Guy Streeter: "Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
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
