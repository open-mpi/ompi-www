<?
$subject_val = "Re: [hwloc-devel] comments on API changes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  2 08:49:42 2010" -->
<!-- isoreceived="20100402124942" -->
<!-- sent="Fri, 02 Apr 2010 14:49:37 +0200" -->
<!-- isosent="20100402124937" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] comments on API changes" -->
<!-- id="4BB5E7E1.80906_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BE52FB14-1808-4F97-8014-D26FC8DDBC2C_at_gmx.ch" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-02 08:49:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0869.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Previous message:</strong> <a href="0867.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>In reply to:</strong> <a href="0867.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0869.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Reply:</strong> <a href="0869.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fawzi Mohamed wrote:
<br>
<span class="quotelev1">&gt; I would take advantage more info about the possible numa node
</span><br>
<span class="quotelev1">&gt; connectivity (to know where to steal tasks), but I don't have access
</span><br>
<span class="quotelev1">&gt; to machines that would really take advantage of that, and probably
</span><br>
<span class="quotelev1">&gt; even then using the HW structure as topology would not bad.
</span><br>
<p>NUMA connectivity is a big problem. Most x86 machines show nothing
<br>
interesting in cat /sys/devices/system/node/node*/distance. On AMD
<br>
hypertransport, there are some routing information in lspci, but I think
<br>
you have to be root to see it, and I am not even sure it's enough to
<br>
discover the actual HT graph.
<br>
<p>We have a &quot;measurement-based backend&quot; in the TODO-list. It could be the
<br>
only way to find out the NUMA connectivity.
<br>
<p>That said, it's not clear that this will be a big problem. AMD
<br>
Magny-Cours machines and Nehalem-EX machines with 2-4 sockets have a
<br>
fully-interconnected NUMA graph. No problem if we don't have NUMA
<br>
topology information there.. For larger machines, SGI is already doing a
<br>
good job at reporting NUMA distances in sysfs. What remains is other
<br>
large machines (several vendors announced 8-socket Nehalem EX machines).
<br>
We'll see.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0869.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Previous message:</strong> <a href="0867.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>In reply to:</strong> <a href="0867.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0869.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Reply:</strong> <a href="0869.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
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
