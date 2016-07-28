<?
$subject_val = "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 29 03:29:40 2010" -->
<!-- isoreceived="20100729072940" -->
<!-- sent="Thu, 29 Jul 2010 09:26:41 +0200" -->
<!-- isosent="20100729072641" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet" -->
<!-- id="4C512D31.7000300_at_inria.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4C50609C.7080905_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-29 03:26:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1231.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Previous message:</strong> <a href="1229.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2369)"</a>
<li><strong>In reply to:</strong> <a href="1223.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1224.php">Samuel Thibault: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/07/2010 18:53, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Actually no, but it's very hard to see :)
</span><br>
<span class="quotelev1">&gt;   lstopo - | egrep &quot;(NUMA|Group)&quot;
</span><br>
<span class="quotelev1">&gt; shows that Group4#0 only contains Group3#0 and #1.
</span><br>
<span class="quotelev1">&gt; Group3#2 is directly a child of the machine (the indentation is smaller).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>For the record, this is caused by the fact that Group objects are
<br>
ignored when they bring no new hierarchy (when they have a single child
<br>
or are the only child of another object). Group4#1 is created first and
<br>
removed later. I don't think there's any way to change this default
<br>
behavior with the current API. Maybe we should have something
<br>
intermediate such as &quot;ignore what does not bring no new hierarchy if you
<br>
can remove the entire level&quot; so that we don't get only half of Group4 level.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1231.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Previous message:</strong> <a href="1229.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2369)"</a>
<li><strong>In reply to:</strong> <a href="1223.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1224.php">Samuel Thibault: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
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
