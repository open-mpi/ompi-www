<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  4 06:03:33 2011" -->
<!-- isoreceived="20110204110333" -->
<!-- sent="Fri, 04 Feb 2011 12:03:29 +0100" -->
<!-- isosent="20110204110329" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157" -->
<!-- id="4D4BDD01.2080307_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110204105622.GD5539_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-04 06:03:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1906.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157"</a>
<li><strong>Previous message:</strong> <a href="1904.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157"</a>
<li><strong>In reply to:</strong> <a href="1904.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1906.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/02/2011 11:56, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev2">&gt;&gt; +  if (topology-&gt;flags &amp; HWLOC_TOPOLOGY_FLAG_RESTRICT_TO_BINDING) {
</span><br>
<span class="quotelev2">&gt;&gt; +    hwloc_cpuset_t cpuset = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev2">&gt;&gt; +    int err = hwloc_get_cpubind(topology, cpuset, HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev2">&gt;&gt; +    if (!err)
</span><br>
<span class="quotelev2">&gt;&gt; +      hwloc_topology_restrict(topology, cpuset);
</span><br>
<span class="quotelev2">&gt;&gt; +    hwloc_bitmap_free(cpuset);
</span><br>
<span class="quotelev2">&gt;&gt; +  }
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Mmm, I then wonder whether we should really provide a flag, then, if
</span><br>
<span class="quotelev1">&gt; it's a matter of calling restrict() afterwards. What would be more
</span><br>
<span class="quotelev1">&gt; generic and useful is a topology configuration option which restricts
</span><br>
<span class="quotelev1">&gt; detection to a given cpuset: the core filters out objects outside from
</span><br>
<span class="quotelev1">&gt; that cpuset, and OS backends can also avoid trying to detect them,
</span><br>
<span class="quotelev1">&gt; making detection faster.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Right, we can optimize these things later. The above is just an easy implem.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1906.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157"</a>
<li><strong>Previous message:</strong> <a href="1904.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157"</a>
<li><strong>In reply to:</strong> <a href="1904.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1906.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157"</a>
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
