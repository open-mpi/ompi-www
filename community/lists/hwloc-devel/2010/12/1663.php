<?
$subject_val = "Re: [hwloc-devel] SWIG bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  2 17:58:47 2010" -->
<!-- isoreceived="20101202225847" -->
<!-- sent="Thu, 2 Dec 2010 17:58:42 -0500" -->
<!-- isosent="20101202225842" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] SWIG bindings" -->
<!-- id="1A15FBA4-05EE-4253-A71F-5A801617900B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1291325144.2480.327.camel_at_kallies" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] SWIG bindings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-02 17:58:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1664.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r2897)"</a>
<li><strong>Previous message:</strong> <a href="1662.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>In reply to:</strong> <a href="1660.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1665.php">Brice Goglin: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 2, 2010, at 4:25 PM, Bernd Kallies wrote:
<br>
<p><span class="quotelev1">&gt; Your understanding was right. There may be a method hwloc_get_obj_data
</span><br>
<span class="quotelev1">&gt; which returns a hasref containing (at least most of) the hwloc_obj_t
</span><br>
<span class="quotelev1">&gt; struct members in a perl representation. The hwloc_obj_t struct members
</span><br>
<span class="quotelev1">&gt; that are of type hwloc_obj_t would be still the C pointer values, which
</span><br>
<span class="quotelev1">&gt; are meaningless outside the API.
</span><br>
<p>Ok.  
<br>
<p>Per your comments below (that I snipped), it's a shame that doing the hash tree of objects is terrible.  This is simply reflecting my bias how I've written perl scripts to read XML and C code to traverse the obj tree directly.  But if it really does become performance inhibitive on large-core-count machines, then you're right and something else will have to be done (e.g., the &quot;combo&quot; method of hashes + accessor functions).
<br>
<p><span class="quotelev1">&gt; Hmm. I did no profiling. The machines in question have 64 NUMA nodes
</span><br>
<span class="quotelev1">&gt; with 16 logical CPUs, each. The topology depth is 10. So parsing
</span><br>
<span class="quotelev1">&gt; of /sys/devices/system/node/* and evaluating the distance matrix to
</span><br>
<span class="quotelev1">&gt; fiddle out the topology tree should be quite expensive. But I guess this
</span><br>
<span class="quotelev1">&gt; statement is trivial and does not help very much.
</span><br>
<p>If you ever get some time to compile hwloc with -g and run it through a profiler, that would be great.  Maybe we can't avoid the overhead of traversing /sys/devices/system/node/*, but the data may point out some other inadvertent bottlenecks.
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1664.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r2897)"</a>
<li><strong>Previous message:</strong> <a href="1662.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>In reply to:</strong> <a href="1660.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1665.php">Brice Goglin: "Re: [hwloc-devel] SWIG bindings"</a>
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
