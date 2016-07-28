<?
$subject_val = "Re: [hwloc-users] rebind subarray";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 16:08:55 2013" -->
<!-- isoreceived="20130227210855" -->
<!-- sent="Wed, 27 Feb 2013 22:08:48 +0100" -->
<!-- isosent="20130227210848" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] rebind subarray" -->
<!-- id="512E75E0.6020705_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="490923A666B75F48B14718E0440C4C730EB577C7_at_ECS-EXG-P-MB01.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-users] rebind subarray<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-27 16:08:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0876.php">Aulwes, Rob: "Re: [hwloc-users] rebind subarray"</a>
<li><strong>Previous message:</strong> <a href="0874.php">Aulwes, Rob: "[hwloc-users] rebind subarray"</a>
<li><strong>In reply to:</strong> <a href="0874.php">Aulwes, Rob: "[hwloc-users] rebind subarray"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0876.php">Aulwes, Rob: "Re: [hwloc-users] rebind subarray"</a>
<li><strong>Reply:</strong> <a href="0876.php">Aulwes, Rob: "Re: [hwloc-users] rebind subarray"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Rob,
<br>
<p>That's exactly what set_area_membind() was meant for.
<br>
<p>That said, you can only move entire pages (usually 4kbytes) to another
<br>
domain. So you can only move half of your array if you array is larger
<br>
than a single page.
<br>
<p><p><p>You likely need something like this:
<br>
<p>[... initialize the hwloc topology ... ]
<br>
<p>hwloc_bitmap_t set = hwloc_bitmap_alloc();
<br>
hwloc_bitmap_only(set, N); /* where N is the number of the
<br>
domain/numa-node where you want to move */
<br>
hwloc_set_area_membind(topology, buffer_start, buffer_length_in_bytes,
<br>
set, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_MIGRATE);
<br>
hwloc_bitmap_free(set);
<br>
<p><p>Brice
<br>
<p><p><p>Le 27/02/2013 22:02, Aulwes, Rob a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running OpenMP tests and I see a slow down going from 8 to 16
</span><br>
<span class="quotelev1">&gt; threads.  I'm suspecting that the arrays I'm using are all allocated
</span><br>
<span class="quotelev1">&gt; on a single NUMA domain, so that threads 9-15 encounter a slowdown
</span><br>
<span class="quotelev1">&gt; when accessing those arrays, because they have to cross domains.
</span><br>
<span class="quotelev1">&gt;  Suppose that I've allocated an array v[1..100].  Is it possible to
</span><br>
<span class="quotelev1">&gt; use hwloc_set_area_membind_nodeset to reset a portion of the array to
</span><br>
<span class="quotelev1">&gt; another domain?  That is, can I &quot;move&quot; v[51..100] to a different NUMA
</span><br>
<span class="quotelev1">&gt; domain?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,Rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0875/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0876.php">Aulwes, Rob: "Re: [hwloc-users] rebind subarray"</a>
<li><strong>Previous message:</strong> <a href="0874.php">Aulwes, Rob: "[hwloc-users] rebind subarray"</a>
<li><strong>In reply to:</strong> <a href="0874.php">Aulwes, Rob: "[hwloc-users] rebind subarray"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0876.php">Aulwes, Rob: "Re: [hwloc-users] rebind subarray"</a>
<li><strong>Reply:</strong> <a href="0876.php">Aulwes, Rob: "Re: [hwloc-users] rebind subarray"</a>
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
