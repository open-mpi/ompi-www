<?
$subject_val = "Re: [hwloc-devel] comments on API changes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  2 09:03:11 2010" -->
<!-- isoreceived="20100402130311" -->
<!-- sent="Fri, 2 Apr 2010 15:03:05 +0200" -->
<!-- isosent="20100402130305" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] comments on API changes" -->
<!-- id="F2EFE9FA-59B0-40A7-B70D-FC07B4AD89C5_at_gmx.ch" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4BB5E7E1.80906_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] comments on API changes<br>
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-02 09:03:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0870.php">Samuel Thibault: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Previous message:</strong> <a href="0868.php">Brice Goglin: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>In reply to:</strong> <a href="0868.php">Brice Goglin: "Re: [hwloc-devel] comments on API changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0871.php">Samuel Thibault: "Re: [hwloc-devel] comments on API changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2-apr-10, at 14:49, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Fawzi Mohamed wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I would take advantage more info about the possible numa node
</span><br>
<span class="quotelev2">&gt;&gt; connectivity (to know where to steal tasks), but I don't have access
</span><br>
<span class="quotelev2">&gt;&gt; to machines that would really take advantage of that, and probably
</span><br>
<span class="quotelev2">&gt;&gt; even then using the HW structure as topology would not bad.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NUMA connectivity is a big problem. Most x86 machines show nothing
</span><br>
<span class="quotelev1">&gt; interesting in cat /sys/devices/system/node/node*/distance. On AMD
</span><br>
<span class="quotelev1">&gt; hypertransport, there are some routing information in lspci, but I  
</span><br>
<span class="quotelev1">&gt; think
</span><br>
<span class="quotelev1">&gt; you have to be root to see it, and I am not even sure it's enough to
</span><br>
<span class="quotelev1">&gt; discover the actual HT graph.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have a &quot;measurement-based backend&quot; in the TODO-list. It could be  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; only way to find out the NUMA connectivity.
</span><br>
<p>nice
<br>
<p><span class="quotelev1">&gt; That said, it's not clear that this will be a big problem. AMD
</span><br>
<span class="quotelev1">&gt; Magny-Cours machines and Nehalem-EX machines with 2-4 sockets have a
</span><br>
<span class="quotelev1">&gt; fully-interconnected NUMA graph. No problem if we don't have NUMA
</span><br>
<span class="quotelev1">&gt; topology information there.. For larger machines, SGI is already  
</span><br>
<span class="quotelev1">&gt; doing a
</span><br>
<span class="quotelev1">&gt; good job at reporting NUMA distances in sysfs. What remains is other
</span><br>
<span class="quotelev1">&gt; large machines (several vendors announced 8-socket Nehalem EX  
</span><br>
<span class="quotelev1">&gt; machines).
</span><br>
<span class="quotelev1">&gt; We'll see.
</span><br>
<p>indeed as I said the max I have access are 2 socket AMD or Nehalem-EX,  
<br>
so it doesn't matter.
<br>
For now I just have:
<br>
PU core soket/numa_node machine system
<br>
and for the for the foreseeable future that is probably good enough  
<br>
(all nodes in the same machine are at the same distance).
<br>
I don't aim at using this system between different machines...
<br>
<p>Fawzi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0870.php">Samuel Thibault: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Previous message:</strong> <a href="0868.php">Brice Goglin: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>In reply to:</strong> <a href="0868.php">Brice Goglin: "Re: [hwloc-devel] comments on API changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0871.php">Samuel Thibault: "Re: [hwloc-devel] comments on API changes"</a>
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
