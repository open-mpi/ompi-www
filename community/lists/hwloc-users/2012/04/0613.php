<?
$subject_val = "Re: [hwloc-users] Using distances";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 21 08:06:03 2012" -->
<!-- isoreceived="20120421120603" -->
<!-- sent="Sat, 21 Apr 2012 14:05:56 +0200" -->
<!-- isosent="20120421120556" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Using distances" -->
<!-- id="4F92A2A4.1050700_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A255CB22-CD7E-42DB-A2C3-9C920A57C7B2_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-21 08:05:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0614.php">Jeffrey Squyres: "Re: [hwloc-users] Using distances"</a>
<li><strong>Previous message:</strong> <a href="0612.php">Jeffrey Squyres: "Re: [hwloc-users] Using distances"</a>
<li><strong>In reply to:</strong> <a href="0612.php">Jeffrey Squyres: "Re: [hwloc-users] Using distances"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0614.php">Jeffrey Squyres: "Re: [hwloc-users] Using distances"</a>
<li><strong>Reply:</strong> <a href="0614.php">Jeffrey Squyres: "Re: [hwloc-users] Using distances"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 21/04/2012 13:15, Jeffrey Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 21, 2012, at 7:09 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I assume you have the entire distance (latency) matrix between all NUMA nodes as usually reported by the BIOS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; const struct hwloc_distance_s *distances = hwloc_get_whole_distance_matrix_by_type(topology, HWLOC_OBJ_NODE);
</span><br>
<span class="quotelev2">&gt;&gt; assert(distances);
</span><br>
<span class="quotelev2">&gt;&gt; assert(distances-&gt;latency);
</span><br>
<span class="quotelev1">&gt; Is this stored on the topology object?
</span><br>
<p>No it's stored in the object that covers all objects connected by the 
<br>
distance matrix. So usually in the root object.
<br>
<p><span class="quotelev1">&gt; Hence, if this distance data is already covered by the XML export/import, then I should have this data.
</span><br>
<p>Yes it should be there.
<br>
<p><span class="quotelev2">&gt;&gt; Now distances-&gt;latency[a+b*distances-&gt;nbobjs] contains the latency between NUMA nodes whose *logical* indexes are a and b (it may be asymmetrical).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now get the NUMA node object close to your PUs and the NUMA objects close to each OFED device, take their -&gt;logical_index and you'll get the latencies.
</span><br>
<span class="quotelev1">&gt; Ah, ok.  This is what I didn't understand from the docs -- is there no distance to actual PCI devices?  I.e., distance is only measured between NUMA nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ask because the functions allow measuring distance by depth and type -- are those effectively ignored, and really all you can check is the distance between NUMA nodes?
</span><br>
<p>You can have distance matrices between any object sets of any 
<br>
type/depth. Depends what the BIOS reports or what the user adds. The 
<br>
BIOS usually only reports NUMA node distances.
<br>
<p>We could extend them by saying that the distance between any child of 
<br>
NUMA node X and any child of NUMA node Y is equal to the distance 
<br>
between NUMA nodes X and Y, but we don't do that.
<br>
<p>One reason is that the current distance stuff lets the user add a 
<br>
distance matrix between NUMA nodes and another one between sockets, even 
<br>
if they are incompatible. When this happens, which one do you use to 
<br>
generate the distance between two cores?
<br>
<p>There are some tickets in trac they will help clarifying all this mess.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0614.php">Jeffrey Squyres: "Re: [hwloc-users] Using distances"</a>
<li><strong>Previous message:</strong> <a href="0612.php">Jeffrey Squyres: "Re: [hwloc-users] Using distances"</a>
<li><strong>In reply to:</strong> <a href="0612.php">Jeffrey Squyres: "Re: [hwloc-users] Using distances"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0614.php">Jeffrey Squyres: "Re: [hwloc-users] Using distances"</a>
<li><strong>Reply:</strong> <a href="0614.php">Jeffrey Squyres: "Re: [hwloc-users] Using distances"</a>
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
