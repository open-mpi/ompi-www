<?
$subject_val = "[hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 22 14:50:06 2010" -->
<!-- isoreceived="20101222195006" -->
<!-- sent="Wed, 22 Dec 2010 13:50:00 -0600" -->
<!-- isosent="20101222195000" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="[hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?" -->
<!-- id="4D125668.6080700_at_redhat.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-22 14:50:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1757.php">Guy Streeter: "Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
<li><strong>Previous message:</strong> <a href="1755.php">Guy Streeter: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1757.php">Guy Streeter: "Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
<li><strong>Reply:</strong> <a href="1757.php">Guy Streeter: "Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using 1.1 on Fedora 13. I start with
<br>
<p>set = hwloc_bitmap_alloc_full()
<br>
<p>and it looks like
<br>
<p>0xf...f
<br>
<p>Then I call
<br>
<p>hwloc_bitmap_from_ith_ulong(set, 1, 0xdeadbeef)
<br>
<p>and I get
<br>
<p>0xdeadbeef,0x00000034,0x3f77aed8
<br>
<p>which I don't understand.
<br>
Example code is attached.
<br>
<p>thanks,
<br>
--Guy
<br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1756/try.c">try.c</a>
</ul>
<!-- attachment="try.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1757.php">Guy Streeter: "Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
<li><strong>Previous message:</strong> <a href="1755.php">Guy Streeter: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1757.php">Guy Streeter: "Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
<li><strong>Reply:</strong> <a href="1757.php">Guy Streeter: "Re: [hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
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
