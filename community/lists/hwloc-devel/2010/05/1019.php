<?
$subject_val = "Re: [hwloc-devel] Cacheline sizes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 25 17:12:59 2010" -->
<!-- isoreceived="20100525211259" -->
<!-- sent="Tue, 25 May 2010 15:12:21 -0600" -->
<!-- isosent="20100525211221" -->
<!-- name="Wheeler, Kyle Bruce" -->
<!-- email="kbwheel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Cacheline sizes" -->
<!-- id="B04D9D83-8311-492D-A38F-94325A7ADDBD_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BFC3A5C.9050307_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Cacheline sizes<br>
<strong>From:</strong> Wheeler, Kyle Bruce (<em>kbwheel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-25 17:12:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1020.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2145)"</a>
<li><strong>Previous message:</strong> <a href="1018.php">Brice Goglin: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>In reply to:</strong> <a href="1018.php">Brice Goglin: "Re: [hwloc-devel] Cacheline sizes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 25, 2010, at 3:00 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; The attached patch implements a &quot;linesize&quot; cache attribute. You now get
</span><br>
<span class="quotelev1">&gt; things like
</span><br>
<span class="quotelev1">&gt;      L3Cache #0 (8192KB line=64)
</span><br>
<span class="quotelev1">&gt;        L2Cache #0 (256KB line=64)
</span><br>
<span class="quotelev1">&gt;          L1Cache #0 (32KB line=64)
</span><br>
<p>Cool!
<br>
<p><span class="quotelev2">&gt;&gt; Why is runtime icache information important? :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some people manually optimizing their kernels want this kind of info as
</span><br>
<span class="quotelev1">&gt; well as TLB size for instance...
</span><br>
<p>I was being flip; I don't see why icache is more relevant to topology and the apparent purpose of hwloc than any other miscellaneous hardware detail (such as floating point unit count).
<br>
<p><pre>
-- 
Kyle Wheeler, PhD
kbwheel_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1020.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2145)"</a>
<li><strong>Previous message:</strong> <a href="1018.php">Brice Goglin: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>In reply to:</strong> <a href="1018.php">Brice Goglin: "Re: [hwloc-devel] Cacheline sizes"</a>
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
