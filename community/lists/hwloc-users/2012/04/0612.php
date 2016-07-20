<?
$subject_val = "Re: [hwloc-users] Using distances";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 21 07:15:20 2012" -->
<!-- isoreceived="20120421111520" -->
<!-- sent="Sat, 21 Apr 2012 07:15:15 -0400" -->
<!-- isosent="20120421111515" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Using distances" -->
<!-- id="A255CB22-CD7E-42DB-A2C3-9C920A57C7B2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F929575.50701_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Using distances<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-21 07:15:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0613.php">Brice Goglin: "Re: [hwloc-users] Using distances"</a>
<li><strong>Previous message:</strong> <a href="0611.php">Brice Goglin: "Re: [hwloc-users] Using distances"</a>
<li><strong>In reply to:</strong> <a href="0611.php">Brice Goglin: "Re: [hwloc-users] Using distances"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0613.php">Brice Goglin: "Re: [hwloc-users] Using distances"</a>
<li><strong>Reply:</strong> <a href="0613.php">Brice Goglin: "Re: [hwloc-users] Using distances"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 21, 2012, at 7:09 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I assume you have the entire distance (latency) matrix between all NUMA nodes as usually reported by the BIOS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; const struct hwloc_distance_s *distances = hwloc_get_whole_distance_matrix_by_type(topology, HWLOC_OBJ_NODE);
</span><br>
<span class="quotelev1">&gt; assert(distances);
</span><br>
<span class="quotelev1">&gt; assert(distances-&gt;latency);
</span><br>
<p>Is this stored on the topology object?
<br>
<p>I ask because we've already done stuff to ensure that there's only 1 hwloc discovery per machine.  If you recall, we do that in the ORTE daemon, export it to XML, and then locally send it to each MPI process on the same machine.  They, in turn, import the XML to create their own topology object.
<br>
<p>Hence, if this distance data is already covered by the XML export/import, then I should have this data.
<br>
<p><span class="quotelev1">&gt; Now distances-&gt;latency[a+b*distances-&gt;nbobjs] contains the latency between NUMA nodes whose *logical* indexes are a and b (it may be asymmetrical).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now get the NUMA node object close to your PUs and the NUMA objects close to each OFED device, take their -&gt;logical_index and you'll get the latencies.
</span><br>
<p>Ah, ok.  This is what I didn't understand from the docs -- is there no distance to actual PCI devices?  I.e., distance is only measured between NUMA nodes?
<br>
<p>I ask because the functions allow measuring distance by depth and type -- are those effectively ignored, and really all you can check is the distance between NUMA nodes?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0613.php">Brice Goglin: "Re: [hwloc-users] Using distances"</a>
<li><strong>Previous message:</strong> <a href="0611.php">Brice Goglin: "Re: [hwloc-users] Using distances"</a>
<li><strong>In reply to:</strong> <a href="0611.php">Brice Goglin: "Re: [hwloc-users] Using distances"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0613.php">Brice Goglin: "Re: [hwloc-users] Using distances"</a>
<li><strong>Reply:</strong> <a href="0613.php">Brice Goglin: "Re: [hwloc-users] Using distances"</a>
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
