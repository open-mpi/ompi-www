<?
$subject_val = "Re: [hwloc-devel] How to get information about hwloc objects?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  4 20:06:16 2010" -->
<!-- isoreceived="20100705000616" -->
<!-- sent="Mon, 5 Jul 2010 02:06:07 +0200" -->
<!-- isosent="20100705000607" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] How to get information about hwloc objects?" -->
<!-- id="201007050206.08037.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C310560.6080106_at_inria.fr" -->
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
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-04 20:06:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1128.php">Jirka Hladky: "[hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<li><strong>Previous message:</strong> <a href="1126.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>In reply to:</strong> <a href="1126.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1129.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1129.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1131.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p><span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; GREPLINES=$(lstopo --physical --cpuset - | wc -l)
</span><br>
<span class="quotelev2">&gt; &gt; lstopo --physical --cpuset - | grep -B${GREPLINES} &quot;PU p#1\b&quot; | grep Core
</span><br>
<span class="quotelev2">&gt; &gt; | tail -1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sed should reduce this dramatically, for instance with:
</span><br>
<span class="quotelev1">&gt;   lstopo --physical --cpuset - | sed -n -e '0,/PU p#1/p' | grep Core |
</span><br>
<span class="quotelev1">&gt; tail -1
</span><br>
<span class="quotelev1">&gt; and probably something even more simple.
</span><br>
<p>Good point! Thanks!
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; With first grep I will get all lines before the line with processor I'm
</span><br>
<span class="quotelev2">&gt; &gt; interested in.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; With second grep I will get information about Cores and finally I will
</span><br>
<span class="quotelev2">&gt; &gt; pick up the last line. (So it's first line with keyword Core before the
</span><br>
<span class="quotelev2">&gt; &gt; line with processor.)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is there a better way to do it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc-calc is probably the best tool for such computations, but I don't
</span><br>
<span class="quotelev1">&gt; see any easy way to find which object of a given type covers a given
</span><br>
<span class="quotelev1">&gt; cpuset or set of objects. Except for PUs and NUMA nodes: we have
</span><br>
<span class="quotelev1">&gt; --pulist and --nodelist which print a comma-separated list of object
</span><br>
<span class="quotelev1">&gt; numbers. So you should be able to get the NUMA node you're looking for with
</span><br>
<span class="quotelev1">&gt;    hwloc-calc --physical proc:1 --nodelist
</span><br>
<span class="quotelev1">&gt; (assuming you want OS/physical indexes for both input and output).
</span><br>
<p>hwloc-calc --physical proc:1 --nodelist is another useful hint!
<br>
<p>It's much better than this piece of code:-)
<br>
======================================================
<br>
lstopo --physical --cpuset - | 
<br>
grep -B${GREPLINES} &quot;PU p#1\b&quot; | 
<br>
grep NUMANode | 
<br>
tail -1 | 
<br>
perl -nle &quot;print for m/NUMANode p#([0-9]*)/g&quot;
<br>
======================================================
<br>
<p>I need to get NUMAnode since I'm comparing numactl and taskset commands.
<br>
<p><span class="quotelev1">&gt; By the way, if you want the socket and core OS/physical indexes, you
</span><br>
<span class="quotelev1">&gt; should note that they may be unknown or non-unique in the system.
</span><br>
<span class="quotelev1">&gt; Basically, only PUs and NUMA nodes have meaningful OS/physical indexes.
</span><br>
<p>I know. I use Socket and Core only as debugging information.
<br>
<p><span class="quotelev1">&gt; In C, it's trivial. Once you have a PU object, you just go up using
</span><br>
<span class="quotelev1">&gt; -&gt;parent and look at -&gt;type until you find what you want. To get the
</span><br>
<span class="quotelev1">&gt; initial PU object, you may use hwloc_get_pu_obj_by_os_index() if you
</span><br>
<span class="quotelev1">&gt; have a OS/physical index as input, or hwloc_get_obj_by_type() if you
</span><br>
<span class="quotelev1">&gt; have a logical index as input.
</span><br>
<p>It sounds easy. I have already checked-out the source code of hwloc utils. API 
<br>
seems to be simple and clean, very easy to use. I will consider to write a 
<br>
small utility instead of chain of sed and grep.
<br>
<p>Thanks a lot!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1128.php">Jirka Hladky: "[hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<li><strong>Previous message:</strong> <a href="1126.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>In reply to:</strong> <a href="1126.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1129.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1129.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1131.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
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
