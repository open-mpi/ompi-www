<?
$subject_val = "Re: [hwloc-users] hwloc_get_latency() failures and confusion";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  6 18:08:29 2012" -->
<!-- isoreceived="20120806220829" -->
<!-- sent="Tue, 07 Aug 2012 00:08:23 +0200" -->
<!-- isosent="20120806220823" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc_get_latency() failures and confusion" -->
<!-- id="50204057.8020405_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2367E49CF1319C4FAF0E51EC778BD33126804C51_at_EXMB03.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc_get_latency() failures and confusion<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-06 18:08:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0660.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>Previous message:</strong> <a href="0658.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] hwloc_get_latency() failures and confusion"</a>
<li><strong>In reply to:</strong> <a href="0657.php">Wheeler, Kyle Bruce: "[hwloc-users] hwloc_get_latency() failures and confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0660.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>Reply:</strong> <a href="0660.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 06/08/2012 23:47, Wheeler, Kyle Bruce a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm failing to understand what hwloc (v1.5) is doing. I'm trying to use hwloc_get_latency() to determine the distance between two cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The two cores are on different sockets. According to libnuma's numactl, the latency between the two sockets is 20, whereas between cores on the same socket is 10. According to hwloc-ls -v, the latency is 2.0, whereas between cores on the same socket is 1.0. Thus, I know that hwloc is getting topology information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, programmatically, hwloc_get_latency() just returns -1. I tried using hwloc_get_whole_distance_matrix_by_depth(), and found that the distance matrix is only defined for depth 0
</span><br>
<p>Hello Kyle,
<br>
The distance/latency API is indeed difficult to understand because it
<br>
tries to be (too) generic.
<br>
You should not be getting a distance matrix for depth 0 above. You get
<br>
one for depth=1 (the depth of NUMAnodes in your topology).
<br>
<p><span class="quotelev1">&gt;  which, according to hwloc_obj_type_string(hwloc_get_depth_type(topology, 0)) is &quot;Machine&quot;. Now, the documentation for hwloc_get_whole_distance_matrix_by_depth() says it returns &quot;a distances structure containing a matrix with all distances between all objects at the given depth&quot;. Given that I only have one object that depth 0 (just the one machine), what does this mean? If I try with depth 1 (aka &quot;NUMANode&quot; or HWLOC_OBJ_NODE), I get NULL back, suggesting that there is no matrix of distances between NUMANodes. Of course, that's not true; hwloc-ls reports that matrix! So what's going on here?
</span><br>
<p>hwloc-ls uses hwloc_get_whole_distance_matrix_by_depth() :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (depth = 0; depth &lt; topodepth; depth++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;distances = hwloc_get_whole_distance_matrix_by_depth(topology, depth);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!distances || !distances-&gt;latency)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;latency matrix between %ss (depth %u) by %s indexes:\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_obj_type_string(hwloc_get_depth_type(topology, depth)),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;logical ? &quot;logical&quot; : &quot;physical&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_utils_print_distance_matrix(topology, hwloc_get_root_obj(topology), distances-&gt;nbobjs, depth, distances-&gt;latency, logical);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>So I don't see how you could be seeing something different. Can you send
<br>
your code and your XML topology?
<br>
<p><span class="quotelev1">&gt; I would add that the hwloc_distances_s returned by hwloc_get_whole_distance_matrix_by_depth(topology, 0) is: { 0, 0, 0x0, 0, 0 }
</span><br>
<p>That's strange, I need to look at this.
<br>
<p><span class="quotelev1">&gt; And why is hwloc_get_latency() failing?
</span><br>
<p>If you pass some Core objects to get_latency(), it's expected that it
<br>
fails because the topology only has latencies between NUMA nodes. You
<br>
should walk up the object parent links until you find NUMAnode objects.
<br>
We've been thinking of handling this case inside hwloc but we're not
<br>
sure it's always a good idea to do so.
<br>
<p><p>We have several tickets open against the distance code. We know it's not
<br>
perfect so we'll be happy to hear your feedback. There are so many
<br>
things involved in this case that it's hard to figure out what's
<br>
actually important to users.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0660.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>Previous message:</strong> <a href="0658.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] hwloc_get_latency() failures and confusion"</a>
<li><strong>In reply to:</strong> <a href="0657.php">Wheeler, Kyle Bruce: "[hwloc-users] hwloc_get_latency() failures and confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0660.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>Reply:</strong> <a href="0660.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
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
