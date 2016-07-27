<?
$subject_val = "Re: [hwloc-devel] hwloc_distances as utility?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 16:28:42 2011" -->
<!-- isoreceived="20110705202842" -->
<!-- sent="Tue, 05 Jul 2011 22:28:36 +0200" -->
<!-- isosent="20110705202836" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc_distances as utility?" -->
<!-- id="4E1373F4.109_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CALT_uBTbYFNUOTxksm37LHWdpEwEF6uF2zJQ_dT=MySTwFsV8w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc_distances as utility?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-05 16:28:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2240.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3543)"</a>
<li><strong>Previous message:</strong> <a href="2238.php">Jiri Hladky: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>In reply to:</strong> <a href="2238.php">Jiri Hladky: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2246.php">Jiri Hladky: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>Reply:</strong> <a href="2246.php">Jiri Hladky: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 05/07/2011 22:04, Jiri Hladky a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Well, this is interesting. numactl --hardware shows the number of
</span><br>
<span class="quotelev1">&gt; hops, regarding to the information from that private BZ.
</span><br>
<p>I think this is wrong. numactl takes everything from sysfs as far as I
<br>
can tell. On x86, sysfs distances are ACPI SLIT latencies (memory
<br>
latencies that are normalized to 10 for latencies from one cpu to its
<br>
local memory). A couple months ago, I checked all Linux ports that show
<br>
distances in sysfs. All of them report memory latencies, except the SGI
<br>
IP27 as mentioned previously (this one indeed shows number of hops (0
<br>
when local) and it makes a lot of sense for this architecture).
<br>
<p>That said, the latency that is reported in sysfs is definitely related
<br>
to the number of hops, and I assume that BIOS vendors look at the number
<br>
of hops when deciding what to put in the ACPI SLIT distances. It's not
<br>
something measured at boot. It's kind of hardcoded by/in the BIOS and
<br>
decided as the same time the routing is computed. But still the ACPI
<br>
spec says that distances are normalized latencies.
<br>
<p>One problem I see with the number of hops is that it doesn't make sense
<br>
on some machines. On some 8-socket AMD machines (such as
<br>
8amd64-4n2c.tar.bz2 below) , the hypertransport route between some
<br>
sockets varies with the type of packet (response or request) and the
<br>
direction. So the number of hops ends up being asymmetric, depends on
<br>
read/write, and can be half of an integer.
<br>
<p><span class="quotelev1">&gt; could me send me the output of hwloc-gather-topology for some NUMA
</span><br>
<span class="quotelev1">&gt; box? I don't have access to any NUMA running a recent version of kernel.
</span><br>
<p>Look at tests/linux/ in the hwloc SVN. The following tarballs contain
<br>
NUMA architectures. Some of these were gathered while running old
<br>
kernels, but I don't think it matters because Linux/sysfs reports what
<br>
the BIOS without changing much of it.
<br>
<p>8amd64-4n2c.tar.bz2 (2 hops, but distance is reported as local(10) or
<br>
remote (20))
<br>
16amd64-8n2c.tar.bz2 (up to 3 hops, but local or remote too)
<br>
48amd64-4d2n6c-sparse.tar.bz2 (2 hops IIRC, local(10), remote(16) or
<br>
&quot;very remote&quot;(22))
<br>
96em64t-4n4d3ca2co.tar.bz2 (1 hop, local(10) or remote(22))
<br>
16ia64-8n2s.tar.bz2 (2 hops, 10/25/29)
<br>
256ia64-64n2s2c.tar.bz2 (big SGI Altix machine with several hops,
<br>
10/22/26/30/34)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2240.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3543)"</a>
<li><strong>Previous message:</strong> <a href="2238.php">Jiri Hladky: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>In reply to:</strong> <a href="2238.php">Jiri Hladky: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2246.php">Jiri Hladky: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>Reply:</strong> <a href="2246.php">Jiri Hladky: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
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
