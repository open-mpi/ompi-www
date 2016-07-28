<?
$subject_val = "Re: [hwloc-devel] structure assumptions, duplication";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 03:29:33 2009" -->
<!-- isoreceived="20090930072933" -->
<!-- sent="Wed, 30 Sep 2009 09:29:27 +0200" -->
<!-- isosent="20090930072927" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] structure assumptions, duplication" -->
<!-- id="20090930072927.GI5922_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="32B8107A-03D3-4ED6-8149-A8401987D035_at_gmx.ch" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-30 03:29:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0119.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0117.php">Brice Goglin: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0116.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0120.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0120.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Fawzi Mohamed, le Wed 30 Sep 2009 09:16:36 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; 1) a fully hierarchical representation of the machine/hardware where each level
</span><br>
<span class="quotelev1">&gt; is a partition, and each level fully covers the previous one (from any node you
</span><br>
<span class="quotelev1">&gt; go through all levels using father/childrens, father/child are just one level
</span><br>
<span class="quotelev1">&gt; away from each other.
</span><br>
<span class="quotelev1">&gt; This is basically what is there now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) outside the hierarchy 1 (but built using its object, probably the NUMA
</span><br>
<span class="quotelev1">&gt; nodes) there will be
</span><br>
<span class="quotelev1">&gt; 2.1) maybe the full connection graph
</span><br>
<span class="quotelev1">&gt; 2.2) a hierarchical view of it, like the lgroups, where the levels are not
</span><br>
<span class="quotelev1">&gt; necessarily a partition, and that could also refer not to the sublevel, but
</span><br>
<span class="quotelev1">&gt; directly to lower levels. Going up the hierarchy you get the next neighbors.
</span><br>
<p>Err, no, in our plans 2.2 was in 1) already, and levels are thus still
<br>
partitions, but somehow arbitrary ones, according to heuristics based on
<br>
the graph. Isn't that the case with lgroups ? (I haven't ever had access
<br>
to a solaris numa machine)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0119.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0117.php">Brice Goglin: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0116.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0120.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0120.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
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
