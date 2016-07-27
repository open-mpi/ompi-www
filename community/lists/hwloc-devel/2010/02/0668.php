<?
$subject_val = "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 15 16:19:40 2010" -->
<!-- isoreceived="20100215211940" -->
<!-- sent="Mon, 15 Feb 2010 22:19:33 +0100" -->
<!-- isosent="20100215211933" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction" -->
<!-- id="4B79BA65.6090109_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="068.311e6e88c413bbb22517ce6758b35a27_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-15 16:19:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0669.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>Previous message:</strong> <a href="0667.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1726)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0669.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>Reply:</strong> <a href="0669.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hwloc wrote:
<br>
<span class="quotelev1">&gt;  The get_cpubind function is already in.
</span><br>
<span class="quotelev1">&gt;  There are several ways I can see
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - Add a configuration flag to limit the discovery to the current binding
</span><br>
<span class="quotelev1">&gt;  of the process
</span><br>
<span class="quotelev1">&gt;  - Add a configuration function to limit the discovery to a given cpuset.
</span><br>
<span class="quotelev1">&gt;  To get the current binding of the process, one has to run a first
</span><br>
<span class="quotelev1">&gt;  discovery, then use get_cpubind, then run a second one with the
</span><br>
<span class="quotelev1">&gt;  configuration. This is tedious, the API works this way.
</span><br>
<span class="quotelev1">&gt;  - Add a function to restrict a discovered topology to a given cpuset. This
</span><br>
<span class="quotelev1">&gt;  looks like within the scope of the functions we are thinking about for
</span><br>
<span class="quotelev1">&gt;  network use (extract part of a topology, merge topologies).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Do we still want this for 1.0?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>I think Ashley wanted the first item when he requested lstopo --pid
<br>
&lt;pid&gt; but I may be wrong.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0669.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>Previous message:</strong> <a href="0667.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1726)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0669.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>Reply:</strong> <a href="0669.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
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
