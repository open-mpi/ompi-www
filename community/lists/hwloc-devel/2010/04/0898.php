<?
$subject_val = "[hwloc-devel] HWLOC_OBJ_GROUP  &amp; hwloc_topology_support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 14 08:05:51 2010" -->
<!-- isoreceived="20100414120551" -->
<!-- sent="Wed, 14 Apr 2010 14:05:45 +0200" -->
<!-- isosent="20100414120545" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="[hwloc-devel] HWLOC_OBJ_GROUP  &amp;amp; hwloc_topology_support" -->
<!-- id="B0493FD2-6071-4856-9314-F4CC96BAC51A_at_gmx.ch" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="201004120102.o3C12xJP016957_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> [hwloc-devel] HWLOC_OBJ_GROUP  &amp; hwloc_topology_support<br>
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-14 08:05:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0899.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_OBJ_GROUP  &amp; hwloc_topology_support"</a>
<li><strong>Previous message:</strong> <a href="0897.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1944)"</a>
<li><strong>In reply to:</strong> <a href="0897.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1944)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0899.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_OBJ_GROUP  &amp; hwloc_topology_support"</a>
<li><strong>Reply:</strong> <a href="0899.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_OBJ_GROUP  &amp; hwloc_topology_support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Always a bit sow, but here are my comments after the latest changes (I  
<br>
wake up when I get time to update my bindings...)
<br>
<p>HWLOC_OBJ_GROUP
<br>
<p>nice!, I like it, it makes my job easier, as one of the main things I  
<br>
use hwloc for is exactly having groups of uniform latency.
<br>
I suppose that those groups still form a partition, if not it should  
<br>
be noted in the documentation.
<br>
One should note that a priori nodes of uniform latency do *not* build  
<br>
a partition, for example in a ring topology with 4 elements (4,1,2)  
<br>
(1,2,3) (2,3,4) (3,4,1) are the groups of uniform latency coming from  
<br>
1,2,3,4.
<br>
But I guess that breaking the simple partitioning is not a good idea  
<br>
in the &quot;normal&quot; hwloc view, and an non partitioning hierarchy is  
<br>
better kept separated.
<br>
<p>hwloc_topology_support
<br>
<p>I know that was changed also due to my comments, but I am not sure the  
<br>
change really better: the structure is not really hidden, so adding a  
<br>
flags it breaks binary compatibility, well it is not as bad as it  
<br>
sounds, because the normally the structure should be only read, and  
<br>
one receives only pointers, not directly the structure, so even using  
<br>
old bindings should not really lead to catastrophic failures, but I  
<br>
find it still non clean.
<br>
With a user visible structure I find enum flags bla=(1&lt;&lt;x) still the  
<br>
best solution.
<br>
Anyway for a readonly structure also the current solution is certainly  
<br>
viable...
<br>
<p>ciao
<br>
Fawzi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0899.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_OBJ_GROUP  &amp; hwloc_topology_support"</a>
<li><strong>Previous message:</strong> <a href="0897.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1944)"</a>
<li><strong>In reply to:</strong> <a href="0897.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1944)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0899.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_OBJ_GROUP  &amp; hwloc_topology_support"</a>
<li><strong>Reply:</strong> <a href="0899.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_OBJ_GROUP  &amp; hwloc_topology_support"</a>
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
