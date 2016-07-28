<?
$subject_val = "Re: [hwloc-devel] How to get information about hwloc objects?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  5 04:06:39 2010" -->
<!-- isoreceived="20100705080639" -->
<!-- sent="Mon, 05 Jul 2010 10:04:57 +0200" -->
<!-- isosent="20100705080457" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] How to get information about hwloc objects?" -->
<!-- id="4C319229.8030309_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201007050206.08037.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] How to get information about hwloc objects?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-05 04:04:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1132.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2290)"</a>
<li><strong>Previous message:</strong> <a href="1130.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<li><strong>In reply to:</strong> <a href="1127.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 05/07/2010 02:06, Jirka Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; hwloc-calc --physical proc:1 --nodelist is another useful hint!
</span><br>
<p>The attached patch (against trunk, doesn't apply against 1.0.x) implements
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--list &lt;type|depth&gt;
<br>
and replaces
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--nodelist with --list numanode (still supported but undocumented)
<br>
It should work for core and socket as well.
<br>
<p>Maybe I should rename --objects into something else (it reports objects
<br>
included in the CPU set while --list reports objects that intersects
<br>
with the CPU set).
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1131/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1132.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2290)"</a>
<li><strong>Previous message:</strong> <a href="1130.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<li><strong>In reply to:</strong> <a href="1127.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
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
