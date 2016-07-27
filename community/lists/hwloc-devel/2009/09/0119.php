<?
$subject_val = "Re: [hwloc-devel] structure assumptions, duplication";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 03:40:56 2009" -->
<!-- isoreceived="20090930074056" -->
<!-- sent="Wed, 30 Sep 2009 09:40:50 +0200" -->
<!-- isosent="20090930074050" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] structure assumptions, duplication" -->
<!-- id="4F0FDDC9-973C-4127-BAB4-081840DD024A_at_gmx.ch" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AC306CF.3030000_at_inria.fr" -->
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
<strong>Date:</strong> 2009-09-30 03:40:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0120.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0118.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0117.php">Brice Goglin: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0121.php">Brice Goglin: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0121.php">Brice Goglin: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 30-set-09, at 09:20, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Fawzi Mohamed wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 1) a fully hierarchical representation of the machine/hardware where
</span><br>
<span class="quotelev2">&gt;&gt; each level is a partition, and each level fully covers the previous
</span><br>
<span class="quotelev2">&gt;&gt; one (from any node you go through all levels using father/childrens,
</span><br>
<span class="quotelev2">&gt;&gt; father/child are just one level away from each other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, we support heterogeneous topologies where one level may not
</span><br>
<span class="quotelev1">&gt; cover entirely the previous one, for instance if you have two  
</span><br>
<span class="quotelev1">&gt; different
</span><br>
<span class="quotelev1">&gt; processors with different levels of caches.
</span><br>
<p>thanks that is good to know.
<br>
In that case the upper level (let's assume it is a NODE) is still all  
<br>
at the same level, but the depth of the children of this might be  
<br>
different from depth-1?
<br>
like this (I am skipping some levels, as just the structure is  
<br>
important):
<br>
<p>NODE 1
<br>
&nbsp;&nbsp;&nbsp;cache2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cache1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p0
<br>
&nbsp;&nbsp;&nbsp;cache2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cache1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p1
<br>
NODE 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cache1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cache1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p3
<br>
<p>or is it even possible to have a node with children of a single node  
<br>
of different depth?
<br>
<p>this is supposing that you want to keep that a level has a single type  
<br>
(and given the api I suppose it is so).
<br>
<p>Fawzi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0120.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0118.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0117.php">Brice Goglin: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0121.php">Brice Goglin: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0121.php">Brice Goglin: "Re: [hwloc-devel] structure assumptions, duplication"</a>
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
