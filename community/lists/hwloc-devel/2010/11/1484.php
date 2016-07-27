<?
$subject_val = "Re: [hwloc-devel] hwloc-distrib --among";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 16:31:19 2010" -->
<!-- isoreceived="20101116213119" -->
<!-- sent="Tue, 16 Nov 2010 15:31:11 -0600" -->
<!-- isosent="20101116213111" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-distrib --among" -->
<!-- id="4CE2F81F.4010906_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20101116211826.GL5862_at_const.famille.thibault.fr" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-16 16:31:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1485.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>Previous message:</strong> <a href="1483.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>In reply to:</strong> <a href="1482.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1490.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>Reply:</strong> <a href="1490.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 16/11/2010 15:18, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Jirka Hladky, le Tue 16 Nov 2010 21:37:01 +0100, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; There was some discussion about hwloc-distrib --among
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I understand it correctly, --among accepts one of 
</span><br>
<span class="quotelev2">&gt;&gt; {pu,core,socket,node,machine}
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; I actually didn't know about the --among option. It seems a bit
</span><br>
<span class="quotelev1">&gt; difficult to comprehend without reading the source code...  Actually I'm
</span><br>
<span class="quotelev1">&gt; not even sure about the cases where it is useful.
</span><br>
<p>I don't remember the exact use case but it was basically a machine where
<br>
the topology strange or broken and the user wanted to force the
<br>
distribution among some given object type (the distribution of objects
<br>
of other types was unusable).
<br>
<p><p><span class="quotelev1">&gt; Same here, distributing 4 elements between the PUs, thus selecting the
</span><br>
<span class="quotelev1">&gt; first 4 PUs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd say that --among should indeed be the horizontal portion of the
</span><br>
<span class="quotelev1">&gt; machine to distribute on, and the existing --among option should be
</span><br>
<span class="quotelev1">&gt; renamed into --from, and a --to option could be added to stop the
</span><br>
<span class="quotelev1">&gt; hierarchical distribution to a given object type.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Works for me but won't have time to look at it before the end of the
<br>
week. I don't think --among was available in 1.0, so maybe we can rename
<br>
it in 1.1 and we'll add other options in 1.2 ?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1485.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>Previous message:</strong> <a href="1483.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>In reply to:</strong> <a href="1482.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1490.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>Reply:</strong> <a href="1490.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib --among"</a>
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
