<?
$subject_val = "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 13 06:06:46 2010" -->
<!-- isoreceived="20100713100646" -->
<!-- sent="Tue, 13 Jul 2010 12:04:28 +0200" -->
<!-- isosent="20100713100428" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets" -->
<!-- id="4C3C3A2C.1090201_at_inria.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1279014996.2239.72.camel_at_kallies.zib.de" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-13 06:04:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1162.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<li><strong>Previous message:</strong> <a href="1160.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<li><strong>In reply to:</strong> <a href="1160.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1162.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<li><strong>Reply:</strong> <a href="1162.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 13/07/2010 11:56, Bernd Kallies a &#233;crit :
<br>
<span class="quotelev1">&gt; Thanks for the quick reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I expect that one can safely use the tree-traversing functions of the
</span><br>
<span class="quotelev1">&gt; hwloc API with a topology, that is returned by hwloc_topology_load. When
</span><br>
<span class="quotelev1">&gt; they crash, then the topology is broken. This should not happen.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Sure, this is a bug, the depth field of PU#4 is wrong, it breaks
<br>
hwloc_get_common_ancestor_obj(), I am looking into it.
<br>
<p>I thought you were expecting something else from lstopo --merge.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1162.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<li><strong>Previous message:</strong> <a href="1160.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<li><strong>In reply to:</strong> <a href="1160.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1162.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<li><strong>Reply:</strong> <a href="1162.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
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
