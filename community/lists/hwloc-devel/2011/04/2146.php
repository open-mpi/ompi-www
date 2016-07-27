<?
$subject_val = "Re: [hwloc-devel] hwloc support added in Grid Engine /	Grid	Scheduler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 05:52:49 2011" -->
<!-- isoreceived="20110414095249" -->
<!-- sent="Thu, 14 Apr 2011 11:52:43 +0200 (CEST)" -->
<!-- isosent="20110414095243" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc support added in Grid Engine /	Grid	Scheduler" -->
<!-- id="174528239.709542.1302774763848.JavaMail.root_at_zmbs2.inria.fr" -->
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
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 05:52:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2147.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3453)"</a>
<li><strong>Previous message:</strong> <a href="2145.php">Brice Goglin: "Re: [hwloc-devel] 1.2rc2 released"</a>
<li><strong>In reply to:</strong> <a href="2142.php">Jeff Squyres: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I added a FAQ section about this
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/hwloc/changeset/3442">https://svn.open-mpi.org/trac/hwloc/changeset/3442</a>
<br>
and fixed some other comments
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/hwloc/changeset/3440">https://svn.open-mpi.org/trac/hwloc/changeset/3440</a>
<br>
If that looks good, I'll backport in the v1.2 branch before releasing the final 1.2.
<br>
<p>Brice
<br>
<p><p><p>----- Mail original -----
<br>
<span class="quotelev1">&gt; De: &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#192;: &quot;Hardware locality development list&quot; &lt;hwloc-devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Envoy&#233;: Mercredi 13 Avril 2011 22:47:45
</span><br>
<span class="quotelev1">&gt; Objet: Re: [hwloc-devel] hwloc support added in Grid Engine / Grid Scheduler
</span><br>
<span class="quotelev1">&gt; On Apr 13, 2011, at 1:32 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Don't worry about the depth. Even if you have less levels of caches
</span><br>
<span class="quotelev2">&gt; &gt; in
</span><br>
<span class="quotelev2">&gt; &gt; some parts of the machine, or no hyperthreading or whatever
</span><br>
<span class="quotelev2">&gt; &gt; different,
</span><br>
<span class="quotelev2">&gt; &gt; we still build levels of identical objects. So you still get a
</span><br>
<span class="quotelev2">&gt; &gt; consistent depth for all cores, threads, sockets, and different
</span><br>
<span class="quotelev2">&gt; &gt; levels
</span><br>
<span class="quotelev2">&gt; &gt; of caches. But obviously, you will see less objects when iterating
</span><br>
<span class="quotelev2">&gt; &gt; through levels within the &quot;smaller&quot; part of the machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This would be good to add to the documentation; I've been doing manual
</span><br>
<span class="quotelev1">&gt; traversals of hwloc trees just to future-proof/heterogeneous-proof my
</span><br>
<span class="quotelev1">&gt; code (because I didn't know that the depth would always be the same
</span><br>
<span class="quotelev1">&gt; for a given object type even if some branches don't have all object
</span><br>
<span class="quotelev1">&gt; types).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So let's say I have a (fictitious) machine with one socket with an L1
</span><br>
<span class="quotelev1">&gt; and L2 cache for its cores, and another socket that only has an L1
</span><br>
<span class="quotelev1">&gt; cache for its cores:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; numa_node
</span><br>
<span class="quotelev1">&gt; / \
</span><br>
<span class="quotelev1">&gt; socket 0 socket 1
</span><br>
<span class="quotelev1">&gt; L2 L1
</span><br>
<span class="quotelev1">&gt; L1 core
</span><br>
<span class="quotelev1">&gt; core
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I traverse down through children in the tree, are you saying that
</span><br>
<span class="quotelev1">&gt; there will be some kind of fake/empty object in the right sub tree
</span><br>
<span class="quotelev1">&gt; corresponding to where the L2 is in the left sub tree?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2147.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3453)"</a>
<li><strong>Previous message:</strong> <a href="2145.php">Brice Goglin: "Re: [hwloc-devel] 1.2rc2 released"</a>
<li><strong>In reply to:</strong> <a href="2142.php">Jeff Squyres: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
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
