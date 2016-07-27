<?
$subject_val = "Re: [hwloc-devel] hwloc-distrib --among";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 18:46:01 2010" -->
<!-- isoreceived="20101116234601" -->
<!-- sent="Wed, 17 Nov 2010 00:45:56 +0100" -->
<!-- isosent="20101116234556" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-distrib --among" -->
<!-- id="20101116234556.GV5862_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1619783297.239230.1289943098416.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-distrib --among<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-16 18:45:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1486.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r2792)"</a>
<li><strong>Previous message:</strong> <a href="1484.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>Maybe in reply to:</strong> <a href="1481.php">Jirka Hladky: "[hwloc-devel] hwloc-distrib --among"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 16 Nov 2010 22:31:38 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 16/11/2010 15:18, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Same here, distributing 4 elements between the PUs, thus selecting the
</span><br>
<span class="quotelev2">&gt; &gt; first 4 PUs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'd say that --among should indeed be the horizontal portion of the
</span><br>
<span class="quotelev2">&gt; &gt; machine to distribute on, and the existing --among option should be
</span><br>
<span class="quotelev2">&gt; &gt; renamed into --from, and a --to option could be added to stop the
</span><br>
<span class="quotelev2">&gt; &gt; hierarchical distribution to a given object type.
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Works for me but won't have time to look at it before the end of the
</span><br>
<span class="quotelev1">&gt; week. I don't think --among was available in 1.0, so maybe we can rename
</span><br>
<span class="quotelev1">&gt; it in 1.1 and we'll add other options in 1.2 ?
</span><br>
<p>I have renamed --among into --from, added --to and --at, and documented
<br>
a bit more.  Restricting the topology to some cpuset is actually
<br>
something more global, I think it should be a topology configuration
<br>
option, which would also be useful for lstopo for instance.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1486.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r2792)"</a>
<li><strong>Previous message:</strong> <a href="1484.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>Maybe in reply to:</strong> <a href="1481.php">Jirka Hladky: "[hwloc-devel] hwloc-distrib --among"</a>
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
