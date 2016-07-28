<?
$subject_val = "Re: [hwloc-devel] distances branch";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 17 04:12:00 2011" -->
<!-- isoreceived="20110117091200" -->
<!-- sent="Mon, 17 Jan 2011 10:11:54 +0100" -->
<!-- isosent="20110117091154" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] distances branch" -->
<!-- id="4D3407DA.604_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110112121640.GR5617_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] distances branch<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-17 04:11:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1825.php">Samuel Thibault: "Re: [hwloc-devel] distances branch"</a>
<li><strong>Previous message:</strong> <a href="1823.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc6r3069)"</a>
<li><strong>In reply to:</strong> <a href="1815.php">Samuel Thibault: "Re: [hwloc-devel] distances branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1825.php">Samuel Thibault: "Re: [hwloc-devel] distances branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 12/01/2011 13:16, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Thanks for the summary!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice Goglin, le Tue 11 Jan 2011 17:38:00 +0100, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; More thinking needed here, and it may make us revise the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;latency&quot; names in the above &quot;struct hwloc_distances_s&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Why?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>How would you store the following types of distance information ?
<br>
1) latency
<br>
2) bandwidth
<br>
3) number of hops
<br>
4) interconnect graph and/or routing table
<br>
<p>(1) and (2) can go in the same float array. (3) can go in a float or
<br>
integer array. (4) needs more work.
<br>
<p>I see three ways:
<br>
1) the distance structure contains latency fields, bandwidth fields, ...
<br>
whatever we ever need to add... possibly making a very long list of
<br>
distance information.
<br>
2) the distance structure contains float fields, integer fields, ...
<br>
whatever we ever need to add... probably not a very long list. if we
<br>
ever get latency + bandwidth at the same time for the same objects, we'd
<br>
need two distance structures for the same objects (already supported).
<br>
if ever get latency + interconnect graph at the same time, we can store
<br>
them in the same distance structure...
<br>
3) the distance structure contains a union instead of the list in (1).
<br>
and we have one distance structure per type of distance info.
<br>
<p>I think I woudl vote for (3). We would to replace the current
<br>
&nbsp;&nbsp;&nbsp;obj-&gt;distances[X]-&gt;latency{,_max,_base}
<br>
with
<br>
&nbsp;&nbsp;&nbsp;obj-&gt;distances[X]-&gt;type = LATENCY
<br>
&nbsp;&nbsp;&nbsp;obj-&gt;distances[X]-&gt;values.latency.{matrix,max,base}
<br>
(better names for &quot;values&quot; and &quot;matrix&quot; are welcome).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1825.php">Samuel Thibault: "Re: [hwloc-devel] distances branch"</a>
<li><strong>Previous message:</strong> <a href="1823.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc6r3069)"</a>
<li><strong>In reply to:</strong> <a href="1815.php">Samuel Thibault: "Re: [hwloc-devel] distances branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1825.php">Samuel Thibault: "Re: [hwloc-devel] distances branch"</a>
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
