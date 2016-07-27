<?
$subject_val = "Re: [hwloc-devel] Memory affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 16:18:16 2011" -->
<!-- isoreceived="20110228211816" -->
<!-- sent="Mon, 28 Feb 2011 22:18:11 +0100" -->
<!-- isosent="20110228211811" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Memory affinity" -->
<!-- id="4D6C1113.3090209_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D6C09D1.6010506_at_anu.edu.au" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 16:18:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2019.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2017.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>In reply to:</strong> <a href="2012.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2019.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2019.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/02/2011 21:47, David Singleton a &#233;crit :
<br>
<span class="quotelev1">&gt; I dont think you can avoid the problem.  Unless it has changed very
</span><br>
<span class="quotelev1">&gt; recently, Linux swapin_readahead is the main culprit in messing with
</span><br>
<span class="quotelev1">&gt; NUMA locality on that platform.  Faulting a single page causes 8 or 16
</span><br>
<span class="quotelev1">&gt; or whatever contiguous pages to be read from swap.  An arbitrary
</span><br>
<span class="quotelev1">&gt; contiguous range of pages in swap may not even come from the same
</span><br>
<span class="quotelev1">&gt; process far less the same NUMA node.  My understanding is that since
</span><br>
<span class="quotelev1">&gt; there is no NUMA info with the swap entry, the only policy that can be
</span><br>
<span class="quotelev1">&gt; applied to is that of the faulting vma in the faulting process.  The
</span><br>
<span class="quotelev1">&gt; faulted page will have the desired NUMA placement but possibly not the
</span><br>
<span class="quotelev1">&gt; rest. So swapping mixes different process' NUMA policies leading to a
</span><br>
<span class="quotelev1">&gt; &quot;NUMA diffusion process&quot;.
</span><br>
<p>Ah good point! So Jeff has to hope that pages of different processes
<br>
won't be highly mixed in the swap partition, good luck :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2019.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2017.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>In reply to:</strong> <a href="2012.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2019.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2019.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
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
