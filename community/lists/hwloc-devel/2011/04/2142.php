<?
$subject_val = "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 16:47:52 2011" -->
<!-- isoreceived="20110413204752" -->
<!-- sent="Wed, 13 Apr 2011 16:47:45 -0400" -->
<!-- isosent="20110413204745" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler" -->
<!-- id="6B7D82D6-10BC-44E7-9B09-5AAEDAE8EADA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DA5DE12.8090903_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 16:47:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2143.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine /	Grid	Scheduler"</a>
<li><strong>Previous message:</strong> <a href="2141.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
<li><strong>In reply to:</strong> <a href="2141.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2143.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine /	Grid	Scheduler"</a>
<li><strong>Reply:</strong> <a href="2143.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine /	Grid	Scheduler"</a>
<li><strong>Reply:</strong> <a href="2146.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine /	Grid	Scheduler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 13, 2011, at 1:32 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Don't worry about the depth. Even if you have less levels of caches in
</span><br>
<span class="quotelev1">&gt; some parts of the machine, or no hyperthreading or whatever different,
</span><br>
<span class="quotelev1">&gt; we still build levels of identical objects. So you still get a
</span><br>
<span class="quotelev1">&gt; consistent depth for all cores, threads, sockets, and different levels
</span><br>
<span class="quotelev1">&gt; of caches. But obviously, you will see less objects when iterating
</span><br>
<span class="quotelev1">&gt; through levels within the &quot;smaller&quot; part of the machine.
</span><br>
<p>This would be good to add to the documentation; I've been doing manual traversals of hwloc trees just to future-proof/heterogeneous-proof my code (because I didn't know that the depth would always be the same for a given object type even if some branches don't have all object types).
<br>
<p>So let's say I have a (fictitious) machine with one socket with an L1 and L2 cache for its cores, and another socket that only has an L1 cache for its cores:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numa_node
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/               \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;socket 0                     socket 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2                           L1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1                           core
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;core
<br>
<p>If I traverse down through children in the tree, are you saying that there will be some kind of fake/empty object in the right sub tree corresponding to where the L2 is in the left sub tree?
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
<li><strong>Next message:</strong> <a href="2143.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine /	Grid	Scheduler"</a>
<li><strong>Previous message:</strong> <a href="2141.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
<li><strong>In reply to:</strong> <a href="2141.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2143.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine /	Grid	Scheduler"</a>
<li><strong>Reply:</strong> <a href="2143.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine /	Grid	Scheduler"</a>
<li><strong>Reply:</strong> <a href="2146.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine /	Grid	Scheduler"</a>
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
