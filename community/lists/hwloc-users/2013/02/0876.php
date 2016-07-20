<?
$subject_val = "Re: [hwloc-users] rebind subarray";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 16:10:47 2013" -->
<!-- isoreceived="20130227211047" -->
<!-- sent="Wed, 27 Feb 2013 21:10:43 +0000" -->
<!-- isosent="20130227211043" -->
<!-- name="Aulwes, Rob" -->
<!-- email="rta_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] rebind subarray" -->
<!-- id="490923A666B75F48B14718E0440C4C730EB57807_at_ECS-EXG-P-MB01.win.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="512E75E0.6020705_at_inria.fr" -->
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
<strong>From:</strong> Aulwes, Rob (<em>rta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-27 16:10:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0877.php">Erik Schnetter: "[hwloc-users] Zero cache line size on Power7?"</a>
<li><strong>Previous message:</strong> <a href="0875.php">Brice Goglin: "Re: [hwloc-users] rebind subarray"</a>
<li><strong>In reply to:</strong> <a href="0875.php">Brice Goglin: "Re: [hwloc-users] rebind subarray"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll give that a try.  Thanks Brice!
<br>
<p>From: Brice Goglin &lt;Brice.Goglin_at_[hidden]&lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
<br>
Reply-To: Hardware locality user list &lt;hwloc-users_at_[hidden]&lt;mailto:hwloc-users_at_[hidden]&gt;&gt;
<br>
Date: Wed, 27 Feb 2013 22:08:48 +0100
<br>
To: &lt;hwloc-users_at_[hidden]&lt;mailto:hwloc-users_at_[hidden]&gt;&gt;
<br>
Subject: Re: [hwloc-users] rebind subarray
<br>
<p>Hello Rob,
<br>
<p>That's exactly what set_area_membind() was meant for.
<br>
<p>That said, you can only move entire pages (usually 4kbytes) to another domain. So you can only move half of your array if you array is larger than a single page.
<br>
<p><p><p>You likely need something like this:
<br>
<p>[... initialize the hwloc topology ... ]
<br>
<p>hwloc_bitmap_t set = hwloc_bitmap_alloc();
<br>
hwloc_bitmap_only(set, N); /* where N is the number of the domain/numa-node where you want to move */
<br>
hwloc_set_area_membind(topology, buffer_start, buffer_length_in_bytes, set, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_MIGRATE);
<br>
hwloc_bitmap_free(set);
<br>
<p><p>Brice
<br>
<p><p><p>Le 27/02/2013 22:02, Aulwes, Rob a &#233;crit :
<br>
Hi,
<br>
<p>I'm running OpenMP tests and I see a slow down going from 8 to 16 threads.  I'm suspecting that the arrays I'm using are all allocated on a single NUMA domain, so that threads 9-15 encounter a slowdown when accessing those arrays, because they have to cross domains.  Suppose that I've allocated an array v[1..100].  Is it possible to use hwloc_set_area_membind_nodeset to reset a portion of the array to another domain?  That is, can I &quot;move&quot; v[51..100] to a different NUMA domain?
<br>
<p>Thanks,Rob
<br>
<p><p><p>_______________________________________________
<br>
hwloc-users mailing list
<br>
hwloc-users_at_[hidden]&lt;mailto:hwloc-users_at_[hidden]&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
<br>
<p>_______________________________________________ hwloc-users mailing list hwloc-users_at_[hidden]&lt;mailto:hwloc-users_at_[hidden]&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0876/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0877.php">Erik Schnetter: "[hwloc-users] Zero cache line size on Power7?"</a>
<li><strong>Previous message:</strong> <a href="0875.php">Brice Goglin: "Re: [hwloc-users] rebind subarray"</a>
<li><strong>In reply to:</strong> <a href="0875.php">Brice Goglin: "Re: [hwloc-users] rebind subarray"</a>
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
