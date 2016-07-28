<?
$subject_val = "[hwloc-devel] Ordering of cache and cpu objects";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  8 03:41:31 2010" -->
<!-- isoreceived="20100908074131" -->
<!-- sent="Wed, 08 Sep 2010 02:41:25 -0500" -->
<!-- isosent="20100908074125" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="[hwloc-devel] Ordering of cache and cpu objects" -->
<!-- id="4C873E25.1090909_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] Ordering of cache and cpu objects<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-08 03:41:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1288.php">Brice Goglin: "Re: [hwloc-devel] Ordering of cache and cpu objects"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/08/1286.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.3a1r2430)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1288.php">Brice Goglin: "Re: [hwloc-devel] Ordering of cache and cpu objects"</a>
<li><strong>Reply:</strong> <a href="1288.php">Brice Goglin: "Re: [hwloc-devel] Ordering of cache and cpu objects"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>I was poking around with the ordering of the objects found by hwloc. 
<br>
Here's the output I got (custom program: space represents the depth of 
<br>
the object):
<br>
<p>[MACHINE] total memory: 4089507840; local memory: 4089507840
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[SOCKET]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[CACHE] L2 cache size: 4194304
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[CACHE] L1 cache size: 32768
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[CORE]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[CACHE] L1 cache size: 32768
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[CORE]
<br>
<p>It is clear that the second-level cache is at depth 3, and is contained 
<br>
within a socket (depth 2). However, the first-level cache is at a lower 
<br>
depth (depth 4) than the cores themselves (depth 5). Is there a reason 
<br>
why the ordering of the caches and CPU objects is not consistent, or am 
<br>
I misreading these results?
<br>
<p>Here's the lstopo output for information on my machine:
<br>
<p>% ./src/pm/hydra/tools/bind/hwloc/hwloc/utils/lstopo
<br>
Machine (3900MB) + Socket #0 + L2 #0 (4096KB)
<br>
&nbsp;&nbsp;&nbsp;L1 #0 (32KB) + Core #0 + PU #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;L1 #1 (32KB) + Core #1 + PU #1 (phys=1)
<br>
<p>Thanks,
<br>
<p>&nbsp;&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1288.php">Brice Goglin: "Re: [hwloc-devel] Ordering of cache and cpu objects"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/08/1286.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.3a1r2430)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1288.php">Brice Goglin: "Re: [hwloc-devel] Ordering of cache and cpu objects"</a>
<li><strong>Reply:</strong> <a href="1288.php">Brice Goglin: "Re: [hwloc-devel] Ordering of cache and cpu objects"</a>
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
