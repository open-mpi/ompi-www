<?
$subject_val = "Re: [hwloc-devel] Memory affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 16:44:58 2011" -->
<!-- isoreceived="20110228214458" -->
<!-- sent="Mon, 28 Feb 2011 16:44:43 -0500" -->
<!-- isosent="20110228214443" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Memory affinity" -->
<!-- id="165F2250-841A-406C-A1B3-04A4651621CD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D6C162C.2060103_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Memory affinity<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 16:44:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2023.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2021.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2021.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2023.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 28, 2011, at 4:39 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; So: binding + pinning = binding (as long as you can ensure that the binding + pinning was atomic!).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the application swaps for real, do you really care about NUMA
</span><br>
<span class="quotelev1">&gt; locality ? It seems to me that the overhead of accessing distant NUMA
</span><br>
<span class="quotelev1">&gt; memory may be negligible against the cost of swapping.
</span><br>
<p>True, but what if the swapping was temporary?  The overhead due to swap out/swap in may be tiny in comparison to the longer-lasting effects that it causes (putting your memory far away, when then sucks up memory and bus bandwidth, etc.).  
<br>
<p>I'm thinking outside the realm of HPC environments, where swapping isn't uncommon.
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
<li><strong>Next message:</strong> <a href="2023.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2021.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2021.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2023.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
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
