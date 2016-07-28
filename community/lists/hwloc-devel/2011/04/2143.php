<?
$subject_val = "Re: [hwloc-devel] hwloc support added in Grid Engine /	Grid	Scheduler";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 16:53:22 2011" -->
<!-- isoreceived="20110413205322" -->
<!-- sent="Wed, 13 Apr 2011 22:53:16 +0200" -->
<!-- isosent="20110413205316" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc support added in Grid Engine /	Grid	Scheduler" -->
<!-- id="4DA60D3C.9040309_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6B7D82D6-10BC-44E7-9B09-5AAEDAE8EADA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc support added in Grid Engine /	Grid	Scheduler<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 16:53:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2144.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3439)"</a>
<li><strong>Previous message:</strong> <a href="2142.php">Jeff Squyres: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
<li><strong>In reply to:</strong> <a href="2142.php">Jeff Squyres: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2146.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine /	Grid	Scheduler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 13/04/2011 22:47, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Apr 13, 2011, at 1:32 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Don't worry about the depth. Even if you have less levels of caches in
</span><br>
<span class="quotelev2">&gt;&gt; some parts of the machine, or no hyperthreading or whatever different,
</span><br>
<span class="quotelev2">&gt;&gt; we still build levels of identical objects. So you still get a
</span><br>
<span class="quotelev2">&gt;&gt; consistent depth for all cores, threads, sockets, and different levels
</span><br>
<span class="quotelev2">&gt;&gt; of caches. But obviously, you will see less objects when iterating
</span><br>
<span class="quotelev2">&gt;&gt; through levels within the &quot;smaller&quot; part of the machine.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; This would be good to add to the documentation; I've been doing manual traversals of hwloc trees just to future-proof/heterogeneous-proof my code (because I didn't know that the depth would always be the same for a given object type even if some branches don't have all object types).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So let's say I have a (fictitious) machine with one socket with an L1 and L2 cache for its cores, and another socket that only has an L1 cache for its cores:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     numa_node
</span><br>
<span class="quotelev1">&gt;                 /               \
</span><br>
<span class="quotelev1">&gt;       socket 0                     socket 1
</span><br>
<span class="quotelev1">&gt;         L2                           L1
</span><br>
<span class="quotelev1">&gt;         L1                           core
</span><br>
<span class="quotelev1">&gt;         core
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I traverse down through children in the tree, are you saying that there will be some kind of fake/empty object in the right sub tree corresponding to where the L2 is in the left sub tree?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>There will no fake object. socket1 will be at depth 1 and its child will
<br>
be the second L1 at depth 3. There's nothing at depth 2 in the right
<br>
part of the machine.
<br>
<p>We'll try to make this more clear in the doc.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2144.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3439)"</a>
<li><strong>Previous message:</strong> <a href="2142.php">Jeff Squyres: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
<li><strong>In reply to:</strong> <a href="2142.php">Jeff Squyres: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2146.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine /	Grid	Scheduler"</a>
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
