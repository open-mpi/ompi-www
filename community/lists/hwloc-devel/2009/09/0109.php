<?
$subject_val = "Re: [hwloc-devel] dynamic cpuset_t?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 14:39:10 2009" -->
<!-- isoreceived="20090929183910" -->
<!-- sent="Tue, 29 Sep 2009 20:39:02 +0200" -->
<!-- isosent="20090929183902" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] dynamic cpuset_t?" -->
<!-- id="0B05AEFA-8F7D-40F3-A4E8-421BBE980236_at_gmx.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090929171848.GD25109_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] dynamic cpuset_t?<br>
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-29 14:39:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0110.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Previous message:</strong> <a href="0108.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0107.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0110.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0110.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 29-set-09, at 19:18, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Samuel Thibault, le Wed 23 Sep 2009 23:51:30 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Also, dynamic-size cpuset_t is actually more efficient for small  
</span><br>
<span class="quotelev2">&gt;&gt; boxes
</span><br>
<span class="quotelev2">&gt;&gt; for most operations, as the bitmask will be smaller.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As raised in another thread, dynamic-size cpuset_t could also permit a
</span><br>
<span class="quotelev1">&gt; sparse implementation for really big boxes (100 000 cores).
</span><br>
<p>that was me, sorry I was not aware of this thread...
<br>
<p><span class="quotelev1">&gt; Just to be clear: I'm not concerned by the ABI we choose right now,  
</span><br>
<span class="quotelev1">&gt; as I
</span><br>
<span class="quotelev1">&gt; believe recompiling to get better support is not a problem for people.
</span><br>
<span class="quotelev1">&gt; I'm concerned by the needed API changes, i.e. providing functions to
</span><br>
<span class="quotelev1">&gt; allocate/copy/destroy cpusets so that later ABI changes don't  
</span><br>
<span class="quotelev1">&gt; require a
</span><br>
<span class="quotelev1">&gt; change in the API.
</span><br>
<p>well for large machines probably one doesn't need the full  
<br>
granularity, there will be some basic hierarchy that can be used so  
<br>
that the cpuset will remain small.
<br>
something like
<br>
<p>numa_nodes_bitmap  proc_in_first_selected_numa_node_bitmap
<br>
<p>would still mostly allow quick bitmap comparisons (one can also think  
<br>
other encoding schemes).
<br>
<p>such an approach would probably make the bit setting/testing functions  
<br>
more complex, but not overly so.
<br>
<p>One could even always have a compressing/uncompressing function if the  
<br>
full granularity is really needed in some occasions.
<br>
<p>So probably you are right in saying that one can avoid allocating/ 
<br>
deallocating functions in most cases.
<br>
<p>Still programmatically building the cpuset for the low lying nodes by  
<br>
looping on the processors is going to be fast, so maybe giving a  
<br>
function
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_cpuset_t hwloc_get_cpuset(hwloc_obj_t)
<br>
or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int hwloc_get_cpuset(hwloc_obj_t,	hwloc_cpuset_t *)
<br>
is a good idea (so that in the future some hwloc_obj_t might avoid  
<br>
storing the set).
<br>
<p>The other way to really use little memory is indeed as you say to  
<br>
allocate memory as needed and use a sparse set.
<br>
In that would allow maximum granularity, and still small memory usage  
<br>
at the proc level.
<br>
but then the api needs alloc/free, that as you point out make the  
<br>
interface more complex and uglier.
<br>
<p>It comes down to what you want to have, if you think you might want to  
<br>
go the sparse full granularity way then indeed alloc/copy/free should  
<br>
be added
<br>
<p>Fawzi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0110.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Previous message:</strong> <a href="0108.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0107.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0110.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0110.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
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
