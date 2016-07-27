<?
$subject_val = "Re: [hwloc-devel] multinode/network topology status";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  5 02:49:51 2011" -->
<!-- isoreceived="20111005064951" -->
<!-- sent="Wed, 05 Oct 2011 08:49:46 +0200" -->
<!-- isosent="20111005064946" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] multinode/network topology status" -->
<!-- id="4E8BFE0A.2010300_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20111004145134.GN4463_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] multinode/network topology status<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-05 02:49:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2495.php">Samuel Thibault: "Re: [hwloc-devel] multinode/network topology status"</a>
<li><strong>Previous message:</strong> <a href="2493.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3908)"</a>
<li><strong>In reply to:</strong> <a href="2490.php">Samuel Thibault: "Re: [hwloc-devel] multinode/network topology status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2495.php">Samuel Thibault: "Re: [hwloc-devel] multinode/network topology status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/10/2011 16:51, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; This looks good. hwloc-assembler-remote should probably have a
</span><br>
<span class="quotelev1">&gt; --lstopo-path option to specify where to find lstopo, since the host
</span><br>
<span class="quotelev1">&gt; from which we run it may not have the same hwloc installation as the
</span><br>
<span class="quotelev1">&gt; target nodes. I'm actually unsure whether it really should default to
</span><br>
<span class="quotelev1">&gt; $bindir/lstopo and not simply to lstopo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is an issue with the distance code that appears when there are
</span><br>
<span class="quotelev1">&gt; several machines with NUMA distances: the distance code assumes that the
</span><br>
<span class="quotelev1">&gt; root of the topology has cpusets to be compared with, and quickly
</span><br>
<span class="quotelev1">&gt; crashes on insert_by_cpuset or get_obj_covering_cpuset calls.
</span><br>
<p>Thanks for the feedback. I think I fixed all this.
<br>
<p>The second point might need more work in the future. We'll rethink about
<br>
it if people really care about distances in multinode topologies.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2495.php">Samuel Thibault: "Re: [hwloc-devel] multinode/network topology status"</a>
<li><strong>Previous message:</strong> <a href="2493.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3908)"</a>
<li><strong>In reply to:</strong> <a href="2490.php">Samuel Thibault: "Re: [hwloc-devel] multinode/network topology status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2495.php">Samuel Thibault: "Re: [hwloc-devel] multinode/network topology status"</a>
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
