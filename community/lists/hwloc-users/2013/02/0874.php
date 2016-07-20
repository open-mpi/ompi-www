<?
$subject_val = "[hwloc-users] rebind subarray";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 16:02:18 2013" -->
<!-- isoreceived="20130227210218" -->
<!-- sent="Wed, 27 Feb 2013 21:02:13 +0000" -->
<!-- isosent="20130227210213" -->
<!-- name="Aulwes, Rob" -->
<!-- email="rta_at_[hidden]" -->
<!-- subject="[hwloc-users] rebind subarray" -->
<!-- id="490923A666B75F48B14718E0440C4C730EB577C7_at_ECS-EXG-P-MB01.win.lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-users] rebind subarray<br>
<strong>From:</strong> Aulwes, Rob (<em>rta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-27 16:02:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0875.php">Brice Goglin: "Re: [hwloc-users] rebind subarray"</a>
<li><strong>Previous message:</strong> <a href="0873.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0875.php">Brice Goglin: "Re: [hwloc-users] rebind subarray"</a>
<li><strong>Reply:</strong> <a href="0875.php">Brice Goglin: "Re: [hwloc-users] rebind subarray"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm running OpenMP tests and I see a slow down going from 8 to 16 threads.  I'm suspecting that the arrays I'm using are all allocated on a single NUMA domain, so that threads 9-15 encounter a slowdown when accessing those arrays, because they have to cross domains.  Suppose that I've allocated an array v[1..100].  Is it possible to use hwloc_set_area_membind_nodeset to reset a portion of the array to another domain?  That is, can I &quot;move&quot; v[51..100] to a different NUMA domain?
<br>
<p>Thanks,Rob
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0874/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0875.php">Brice Goglin: "Re: [hwloc-users] rebind subarray"</a>
<li><strong>Previous message:</strong> <a href="0873.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0875.php">Brice Goglin: "Re: [hwloc-users] rebind subarray"</a>
<li><strong>Reply:</strong> <a href="0875.php">Brice Goglin: "Re: [hwloc-users] rebind subarray"</a>
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
