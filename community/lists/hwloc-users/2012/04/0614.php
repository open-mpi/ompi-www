<?
$subject_val = "Re: [hwloc-users] Using distances";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 21 09:14:11 2012" -->
<!-- isoreceived="20120421131411" -->
<!-- sent="Sat, 21 Apr 2012 09:14:06 -0400" -->
<!-- isosent="20120421131406" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Using distances" -->
<!-- id="A493F562-C118-4491-A5D8-4F5445BCF6D6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F92A2A4.1050700_at_inria.fr" -->
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
<strong>Date:</strong> 2012-04-21 09:14:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0615.php">Vlad: "[hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Previous message:</strong> <a href="0613.php">Brice Goglin: "Re: [hwloc-users] Using distances"</a>
<li><strong>In reply to:</strong> <a href="0613.php">Brice Goglin: "Re: [hwloc-users] Using distances"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Got it.  Thanks!
<br>
<p>On Apr 21, 2012, at 8:05 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; On 21/04/2012 13:15, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 21, 2012, at 7:09 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I assume you have the entire distance (latency) matrix between all NUMA nodes as usually reported by the BIOS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; const struct hwloc_distance_s *distances = hwloc_get_whole_distance_matrix_by_type(topology, HWLOC_OBJ_NODE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assert(distances);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assert(distances-&gt;latency);
</span><br>
<span class="quotelev2">&gt;&gt; Is this stored on the topology object?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No it's stored in the object that covers all objects connected by the distance matrix. So usually in the root object.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hence, if this distance data is already covered by the XML export/import, then I should have this data.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes it should be there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now distances-&gt;latency[a+b*distances-&gt;nbobjs] contains the latency between NUMA nodes whose *logical* indexes are a and b (it may be asymmetrical).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now get the NUMA node object close to your PUs and the NUMA objects close to each OFED device, take their -&gt;logical_index and you'll get the latencies.
</span><br>
<span class="quotelev2">&gt;&gt; Ah, ok.  This is what I didn't understand from the docs -- is there no distance to actual PCI devices?  I.e., distance is only measured between NUMA nodes?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I ask because the functions allow measuring distance by depth and type -- are those effectively ignored, and really all you can check is the distance between NUMA nodes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can have distance matrices between any object sets of any type/depth. Depends what the BIOS reports or what the user adds. The BIOS usually only reports NUMA node distances.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We could extend them by saying that the distance between any child of NUMA node X and any child of NUMA node Y is equal to the distance between NUMA nodes X and Y, but we don't do that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One reason is that the current distance stuff lets the user add a distance matrix between NUMA nodes and another one between sockets, even if they are incompatible. When this happens, which one do you use to generate the distance between two cores?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are some tickets in trac they will help clarifying all this mess.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0615.php">Vlad: "[hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Previous message:</strong> <a href="0613.php">Brice Goglin: "Re: [hwloc-users] Using distances"</a>
<li><strong>In reply to:</strong> <a href="0613.php">Brice Goglin: "Re: [hwloc-users] Using distances"</a>
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
