<?
$subject_val = "Re: [hwloc-devel] memory size attributes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 16 07:09:06 2010" -->
<!-- isoreceived="20100116120906" -->
<!-- sent="Sat, 16 Jan 2010 13:08:46 +0100" -->
<!-- isosent="20100116120846" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] memory size attributes" -->
<!-- id="4B51AC4E.7060901_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B4DCD61.8080309_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] memory size attributes<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-16 07:08:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0609.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] parent vs father"</a>
<li><strong>Previous message:</strong> <a href="0607.php">Brice Goglin: "[hwloc-devel] parent vs father"</a>
<li><strong>In reply to:</strong> <a href="0599.php">Brice Goglin: "[hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0610.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] memory size attributes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While cleaning the System/Machine root types, I wondered what we
</span><br>
<span class="quotelev1">&gt; actually want to store in memory_kB attributes. It looks obvious for
</span><br>
<span class="quotelev1">&gt; Caches and NUMA nodes. But I am not sure about Machines and Systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we have a machine with 2 NUMA nodes, should the machine memory size
</span><br>
<span class="quotelev1">&gt; be the sum the sizes of both NUMA node sizes? Or should it be 0 since
</span><br>
<span class="quotelev1">&gt; the machine has no memory except in NUMA nodes? Same question for a
</span><br>
<span class="quotelev1">&gt; Kerrighed system assembling 2 machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then, if we have 1 Misc object grouping some NUMA nodes that are close
</span><br>
<span class="quotelev1">&gt; to each other: Should we store the total memory size of these nodes in
</span><br>
<span class="quotelev1">&gt; the Misc object attribute as well? We have the total memory size in the
</span><br>
<span class="quotelev1">&gt; NUMA node object (below misc) and in the machine object (above misc),
</span><br>
<span class="quotelev1">&gt; why not in Misc too? I am not saying that I want it, I am saying that
</span><br>
<span class="quotelev1">&gt; it's not very consistent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I wonder if we should just not sum anymore and let the application do
</span><br>
<span class="quotelev1">&gt; the math when it actually needs the sum. A quick helper with
</span><br>
<span class="quotelev1">&gt; get_next_obj_by_type( ... NODE) would work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or we need to document memory size attributes better:
</span><br>
<span class="quotelev1">&gt; * NUMA node: set of memory that can be accessed with the same access
</span><br>
<span class="quotelev1">&gt; time from other objects
</span><br>
<span class="quotelev1">&gt; * machine: set of cache-coherent memory, can be made of multiple NUMA nodes
</span><br>
<span class="quotelev1">&gt; * system: set of memory that is virtually accessible, but may not be
</span><br>
<span class="quotelev1">&gt; cache-coherent
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Aside from the memory_kB attribute, I wonder what should be done with
<br>
hugepages. I don't think we need to accumulate these at the system level
<br>
since multiple machines could well have different hugepage sizes.
<br>
<p>And even inside a single machine, it's been pointed out that
<br>
architectures support multiple hugepage sizes. So we might have to
<br>
support several of them at the same time in the future. It could stored
<br>
in the attributes as an array of (hugepage size, hugepage number) in
<br>
numa node attributes but I don't really like that.
<br>
<p>One way to support future random attributes could be to have an array of
<br>
stringified attributes, like foo=bar, dmiboardinfo=bar, ... and
<br>
hugepage(2M)=1024. Applications would have to parse them, but it's much
<br>
easier for us in the end.
<br>
<p>And if we go this way, aside from stringified hugepage stuff, memory
<br>
attributes of node/machine/system would only be the unsigned long
<br>
memory_kB field. So we could even put memory_kB back into the main
<br>
hwloc_obj structure. Only cache would still have specific attributes
<br>
(its depth and maybe data/instruction/unified flag).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0609.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] parent vs father"</a>
<li><strong>Previous message:</strong> <a href="0607.php">Brice Goglin: "[hwloc-devel] parent vs father"</a>
<li><strong>In reply to:</strong> <a href="0599.php">Brice Goglin: "[hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0610.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] memory size attributes"</a>
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
