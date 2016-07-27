<?
$subject_val = "Re: [hwloc-devel] distances branch";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 17 12:53:04 2011" -->
<!-- isoreceived="20110117175304" -->
<!-- sent="Mon, 17 Jan 2011 18:53:00 +0100" -->
<!-- isosent="20110117175300" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] distances branch" -->
<!-- id="20110117175300.GR12649_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="549199907.129073.1295255541837.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-17 12:53:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1826.php">Guy Streeter: "[hwloc-devel] python bindings"</a>
<li><strong>Previous message:</strong> <a href="1824.php">Brice Goglin: "Re: [hwloc-devel] distances branch"</a>
<li><strong>Maybe in reply to:</strong> <a href="1808.php">Brice Goglin: "[hwloc-devel] distances branch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Brice Goglin, le Mon 17 Jan 2011 10:12:21 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 12/01/2011 13:16, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Brice Goglin, le Tue 11 Jan 2011 17:38:00 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; More thinking needed here, and it may make us revise the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;latency&quot; names in the above &quot;struct hwloc_distances_s&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt; Why?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) the distance structure contains float fields, integer fields, ...
</span><br>
<span class="quotelev1">&gt; whatever we ever need to add... probably not a very long list. if we
</span><br>
<span class="quotelev1">&gt; ever get latency + bandwidth at the same time for the same objects, we'd
</span><br>
<span class="quotelev1">&gt; need two distance structures for the same objects (already supported).
</span><br>
<span class="quotelev1">&gt; if ever get latency + interconnect graph at the same time, we can store
</span><br>
<span class="quotelev1">&gt; them in the same distance structure...
</span><br>
<p>Looks hairy, yes :)
<br>
<p><span class="quotelev1">&gt; 1) the distance structure contains latency fields, bandwidth fields, ...
</span><br>
<span class="quotelev1">&gt; whatever we ever need to add... possibly making a very long list of
</span><br>
<span class="quotelev1">&gt; distance information.
</span><br>
<p><p><span class="quotelev1">&gt; 3) the distance structure contains a union instead of the list in (1).
</span><br>
<span class="quotelev1">&gt; and we have one distance structure per type of distance info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I woudl vote for (3). We would to replace the current
</span><br>
<span class="quotelev1">&gt;    obj-&gt;distances[X]-&gt;latency{,_max,_base}
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;    obj-&gt;distances[X]-&gt;type = LATENCY
</span><br>
<span class="quotelev1">&gt;    obj-&gt;distances[X]-&gt;values.latency.{matrix,max,base}
</span><br>
<span class="quotelev1">&gt; (better names for &quot;values&quot; and &quot;matrix&quot; are welcome).
</span><br>
<p>Mmm, in the end they are not so far apart: in 1) distances_s enumerates
<br>
the kind of measures you may have, and in 3) distances_s contains a
<br>
union which enumerates the kind of measures you may have. The difference
<br>
would mostly be in the way to obtain the information:
<br>
<p>- with 1) once you get to the distances_s to some level, you can start
<br>
&nbsp;&nbsp;browsing latencies, bandwidths, graph, etc., while with 3) you have to
<br>
&nbsp;&nbsp;look again in the distances array for the other information.
<br>
- 3) needs a lot of .stuff.bar.thing which makes code less readable.
<br>
- 3) saves some room by only allocating storage for the available
<br>
&nbsp;&nbsp;information. 1) can already avoid the matrices which is most of the
<br>
&nbsp;&nbsp;room, however.
<br>
<p>In the end I think I'd prefer 1).
<br>
<p>Also, from an ABI point of view, I'm realizing that hwloc_obj_t should
<br>
rather contain a struct hwloc_distances_s **distances rather than just
<br>
struct hwloc_distances_s *distances, so that the hwloc_distances_s
<br>
structure can grow as needed.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1826.php">Guy Streeter: "[hwloc-devel] python bindings"</a>
<li><strong>Previous message:</strong> <a href="1824.php">Brice Goglin: "Re: [hwloc-devel] distances branch"</a>
<li><strong>Maybe in reply to:</strong> <a href="1808.php">Brice Goglin: "[hwloc-devel] distances branch"</a>
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
