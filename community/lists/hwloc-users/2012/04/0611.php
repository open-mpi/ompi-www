<?
$subject_val = "Re: [hwloc-users] Using distances";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 21 07:09:48 2012" -->
<!-- isoreceived="20120421110948" -->
<!-- sent="Sat, 21 Apr 2012 13:09:41 +0200" -->
<!-- isosent="20120421110941" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Using distances" -->
<!-- id="4F929575.50701_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="449D9C11-040F-4C10-809C-6335B832D6F0_at_cisco.com" -->
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
<strong>Date:</strong> 2012-04-21 07:09:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0612.php">Jeffrey Squyres: "Re: [hwloc-users] Using distances"</a>
<li><strong>Previous message:</strong> <a href="0610.php">Jeffrey Squyres: "[hwloc-users] Using distances"</a>
<li><strong>In reply to:</strong> <a href="0610.php">Jeffrey Squyres: "[hwloc-users] Using distances"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0612.php">Jeffrey Squyres: "Re: [hwloc-users] Using distances"</a>
<li><strong>Reply:</strong> <a href="0612.php">Jeffrey Squyres: "Re: [hwloc-users] Using distances"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 21/04/2012 12:23, Jeffrey Squyres wrote:
<br>
<span class="quotelev1">&gt; I'm trying to use hwloc distances in Open MPI (e.g., find the distance from each OpenFabrics device to the PU(s) where this process is bound), and I'm a bit confused by the distances documentation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I have a WHOLE_SYSTEM topology, and I know that this process is bound to one or more PUs (e.g., both PUs in a core), can you summarize how I use the hwloc distances functionality to determine the distance from my process to each of the OF devices?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I assume you have the entire distance (latency) matrix between all NUMA 
<br>
nodes as usually reported by the BIOS.
<br>
<p>const struct hwloc_distance_s *distances = 
<br>
hwloc_get_whole_distance_matrix_by_type(topology, HWLOC_OBJ_NODE);
<br>
assert(distances);
<br>
assert(distances-&gt;latency);
<br>
<p>Now distances-&gt;latency[a+b*distances-&gt;nbobjs] contains the latency 
<br>
between NUMA nodes whose *logical* indexes are a and b (it may be 
<br>
asymmetrical).
<br>
<p><p>Now get the NUMA node object close to your PUs and the NUMA objects 
<br>
close to each OFED device, take their -&gt;logical_index and you'll get the 
<br>
latencies.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0612.php">Jeffrey Squyres: "Re: [hwloc-users] Using distances"</a>
<li><strong>Previous message:</strong> <a href="0610.php">Jeffrey Squyres: "[hwloc-users] Using distances"</a>
<li><strong>In reply to:</strong> <a href="0610.php">Jeffrey Squyres: "[hwloc-users] Using distances"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0612.php">Jeffrey Squyres: "Re: [hwloc-users] Using distances"</a>
<li><strong>Reply:</strong> <a href="0612.php">Jeffrey Squyres: "Re: [hwloc-users] Using distances"</a>
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
