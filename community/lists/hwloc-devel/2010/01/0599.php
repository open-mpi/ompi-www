<?
$subject_val = "[hwloc-devel] memory size attributes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 08:40:54 2010" -->
<!-- isoreceived="20100113134054" -->
<!-- sent="Wed, 13 Jan 2010 14:40:49 +0100" -->
<!-- isosent="20100113134049" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] memory size attributes" -->
<!-- id="4B4DCD61.8080309_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] memory size attributes<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-13 08:40:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0600.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0598.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1601)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0600.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0600.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0608.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Maybe reply:</strong> <a href="0610.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Maybe reply:</strong> <a href="0611.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] memory size attributes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>While cleaning the System/Machine root types, I wondered what we
<br>
actually want to store in memory_kB attributes. It looks obvious for
<br>
Caches and NUMA nodes. But I am not sure about Machines and Systems.
<br>
<p>If we have a machine with 2 NUMA nodes, should the machine memory size
<br>
be the sum the sizes of both NUMA node sizes? Or should it be 0 since
<br>
the machine has no memory except in NUMA nodes? Same question for a
<br>
Kerrighed system assembling 2 machines.
<br>
<p>Then, if we have 1 Misc object grouping some NUMA nodes that are close
<br>
to each other: Should we store the total memory size of these nodes in
<br>
the Misc object attribute as well? We have the total memory size in the
<br>
NUMA node object (below misc) and in the machine object (above misc),
<br>
why not in Misc too? I am not saying that I want it, I am saying that
<br>
it's not very consistent.
<br>
<p>So I wonder if we should just not sum anymore and let the application do
<br>
the math when it actually needs the sum. A quick helper with
<br>
get_next_obj_by_type( ... NODE) would work.
<br>
<p>Or we need to document memory size attributes better:
<br>
* NUMA node: set of memory that can be accessed with the same access
<br>
time from other objects
<br>
* machine: set of cache-coherent memory, can be made of multiple NUMA nodes
<br>
* system: set of memory that is virtually accessible, but may not be
<br>
cache-coherent
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0600.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0598.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1601)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0600.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0600.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0608.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Maybe reply:</strong> <a href="0610.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Maybe reply:</strong> <a href="0611.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] memory size attributes"</a>
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
