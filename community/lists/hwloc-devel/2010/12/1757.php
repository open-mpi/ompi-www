<?
$subject_val = "Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 22 15:59:52 2010" -->
<!-- isoreceived="20101222205952" -->
<!-- sent="Wed, 22 Dec 2010 14:59:46 -0600" -->
<!-- isosent="20101222205946" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?" -->
<!-- id="4D1266C2.7080606_at_redhat.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D125668.6080700_at_redhat.com" -->
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
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-22 15:59:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1758.php">Brice Goglin: "Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
<li><strong>Previous message:</strong> <a href="1756.php">Guy Streeter: "[hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
<li><strong>In reply to:</strong> <a href="1756.php">Guy Streeter: "[hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1758.php">Brice Goglin: "Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
<li><strong>Reply:</strong> <a href="1758.php">Brice Goglin: "Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/22/2010 01:50 PM, Guy Streeter wrote:
<br>
<span class="quotelev1">&gt; I'm using 1.1 on Fedora 13. I start with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; set = hwloc_bitmap_alloc_full()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and it looks like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0xf...f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I call
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_from_ith_ulong(set, 1, 0xdeadbeef)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and I get
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0xdeadbeef,0x00000034,0x3f77aed8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which I don't understand.
</span><br>
<span class="quotelev1">&gt; Example code is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; --Guy
</span><br>
<p>hwloc_bitmap_set_ith_ulong() seems to behave in a similar way.
<br>
<p>full: 0xf...f
<br>
ith:  0xf...f,,0xdeadbeef,0xffffffff,0xffffffff
<br>
<p>Example attached.
<br>
thanks,
<br>
--Guy
<br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1757/try2.c">try2.c</a>
</ul>
<!-- attachment="try2.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1758.php">Brice Goglin: "Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
<li><strong>Previous message:</strong> <a href="1756.php">Guy Streeter: "[hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
<li><strong>In reply to:</strong> <a href="1756.php">Guy Streeter: "[hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1758.php">Brice Goglin: "Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
<li><strong>Reply:</strong> <a href="1758.php">Brice Goglin: "Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
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
