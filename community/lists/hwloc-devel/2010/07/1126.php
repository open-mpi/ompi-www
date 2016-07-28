<?
$subject_val = "Re: [hwloc-devel] How to get information about hwloc objects?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  4 18:05:57 2010" -->
<!-- isoreceived="20100704220557" -->
<!-- sent="Mon, 05 Jul 2010 00:04:16 +0200" -->
<!-- isosent="20100704220416" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] How to get information about hwloc objects?" -->
<!-- id="4C310560.6080106_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201007042334.23744.jhladky_at_redhat.com" -->
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
<strong>Date:</strong> 2010-07-04 18:04:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1127.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1125.php">Jirka Hladky: "[hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>In reply to:</strong> <a href="1125.php">Jirka Hladky: "[hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1127.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1127.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/07/2010 23:34, Jirka Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to get information about hwloc objects, particularly processor. I would 
</span><br>
<span class="quotelev1">&gt; love to get 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NUMANode number
</span><br>
<span class="quotelev1">&gt; Socket number
</span><br>
<span class="quotelev1">&gt; Core number
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for given processor. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently, I'm parsing lstopo output but it's awkward:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GREPLINES=$(lstopo --physical --cpuset - | wc -l)
</span><br>
<span class="quotelev1">&gt; lstopo --physical --cpuset - | grep -B${GREPLINES} &quot;PU p#1\b&quot; | grep Core | 
</span><br>
<span class="quotelev1">&gt; tail -1
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>sed should reduce this dramatically, for instance with:
<br>
&nbsp;&nbsp;lstopo --physical --cpuset - | sed -n -e '0,/PU p#1/p' | grep Core |
<br>
tail -1
<br>
and probably something even more simple.
<br>
<p><span class="quotelev1">&gt; With first grep I will get all lines before the line with processor I'm 
</span><br>
<span class="quotelev1">&gt; interested in. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With second grep I will get information about Cores and finally I will pick up 
</span><br>
<span class="quotelev1">&gt; the last line. (So it's first line with keyword Core before the line with 
</span><br>
<span class="quotelev1">&gt; processor.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a better way to do it?
</span><br>
<p>hwloc-calc is probably the best tool for such computations, but I don't
<br>
see any easy way to find which object of a given type covers a given
<br>
cpuset or set of objects. Except for PUs and NUMA nodes: we have
<br>
--pulist and --nodelist which print a comma-separated list of object
<br>
numbers. So you should be able to get the NUMA node you're looking for with
<br>
&nbsp;&nbsp;&nbsp;hwloc-calc --physical proc:1 --nodelist
<br>
(assuming you want OS/physical indexes for both input and output).
<br>
<p>By the way, if you want the socket and core OS/physical indexes, you
<br>
should note that they may be unknown or non-unique in the system.
<br>
Basically, only PUs and NUMA nodes have meaningful OS/physical indexes.
<br>
<p><span class="quotelev1">&gt; Something like hwloc-info proc:1 ???
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>hwloc-info is equivalent to lstopo -s IIRC. I made it this way to match
<br>
what plpa-info does.
<br>
<p><span class="quotelev1">&gt; Or perhaps some c-api function to easily accomplish it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>In C, it's trivial. Once you have a PU object, you just go up using
<br>
-&gt;parent and look at -&gt;type until you find what you want. To get the
<br>
initial PU object, you may use hwloc_get_pu_obj_by_os_index() if you
<br>
have a OS/physical index as input, or hwloc_get_obj_by_type() if you
<br>
have a logical index as input.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1127.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1125.php">Jirka Hladky: "[hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>In reply to:</strong> <a href="1125.php">Jirka Hladky: "[hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1127.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1127.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
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
