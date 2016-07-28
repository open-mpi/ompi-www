<?
$subject_val = "Re: [hwloc-devel] structure assumptions, duplication";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 03:16:44 2009" -->
<!-- isoreceived="20090930071644" -->
<!-- sent="Wed, 30 Sep 2009 09:16:36 +0200" -->
<!-- isosent="20090930071636" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] structure assumptions, duplication" -->
<!-- id="32B8107A-03D3-4ED6-8149-A8401987D035_at_gmx.ch" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8473166B-5E68-4294-9491-82CDD7475600_at_gmx.ch" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] structure assumptions, duplication<br>
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-30 03:16:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0117.php">Brice Goglin: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0115.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1028)"</a>
<li><strong>In reply to:</strong> <a href="0104.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0117.php">Brice Goglin: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0117.php">Brice Goglin: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0118.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 29-set-09, at 18:55, Fawzi Mohamed wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; ok, I was thinking that maybe you did/would like to provide in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; future something akin to what opensolaris does with locality groups
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://opensolaris.org/os/community/performance/mpo_overview.pdf">http://opensolaris.org/os/community/performance/mpo_overview.pdf</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, we intend to provide something similar.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In fact what I &quot;need&quot; (or at least I think I need ;) is just the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; next
</span><br>
<span class="quotelev3">&gt;&gt;&gt; neighbors, basically I go up the hierarchy, and look which new
</span><br>
<span class="quotelev3">&gt;&gt;&gt; neighbors I have, so some hierarchy like the lgroups is close to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I need, and simpler to handle than the full graph.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's what future heuristics would build for you, yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tha's great, I am really looking forward to it.
</span><br>
<p>So as summary, if I have understood correctly the current idea for the  
<br>
(future) structure of hwloc is:
<br>
<p>1) a fully hierarchical representation of the machine/hardware where  
<br>
each level is a partition, and each level fully covers the previous  
<br>
one (from any node you go through all levels using father/childrens,  
<br>
father/child are just one level away from each other.
<br>
This is basically what is there now.
<br>
<p>2) outside the hierarchy 1 (but built using its object, probably the  
<br>
NUMA nodes) there will be
<br>
2.1) maybe the full connection graph
<br>
2.2) a hierarchical view of it, like the lgroups, where the levels are  
<br>
not necessarily a partition, and that could also refer not to the  
<br>
sublevel, but directly to lower levels. Going up the hierarchy you get  
<br>
the next neighbors.
<br>
<p>Separating 1 &amp; 2 has the advantage that stronger assumption can be  
<br>
done on 1, simplifying it.
<br>
<p>ciao
<br>
Fawzi
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0116/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0117.php">Brice Goglin: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0115.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1028)"</a>
<li><strong>In reply to:</strong> <a href="0104.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0117.php">Brice Goglin: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0117.php">Brice Goglin: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0118.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
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
