<?
$subject_val = "Re: [hwloc-devel] memory size attributes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 16 08:15:48 2010" -->
<!-- isoreceived="20100116131548" -->
<!-- sent="Sat, 16 Jan 2010 07:15:05 -0600" -->
<!-- isosent="20100116131505" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] memory size attributes" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA1705669E_at_XMB-RCD-205.cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[hwloc-devel] memory size attributes" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-16 08:15:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0612.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1649)"</a>
<li><strong>Previous message:</strong> <a href="0610.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Maybe in reply to:</strong> <a href="0599.php">Brice Goglin: "[hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0613.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0613.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0615.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just so I understand - are you saying hwloc should track both the total amount of memory *and* the makeup of that amount, broken up by page size?  So obj A may have x total memory, split across y 4k pages and z bigk hugepages (for example)?  And then the question becomes how to store this variable-page-sze information, right?
<br>

<br>
I'd say it can be valuable to support key=value pairs on any object so that future object types can be extensible (e.g., vendor pci devices). But common stuff should be accessible as struct members so that there's no string parsing needed (I'm no doubt just voicing what we all already think). I.e., esoteric stuff can start as a key=value strings but as they get mature / popular, they can &quot;graduate&quot; to become a struct member. 
<br>

<br>
As for how to store page counts as a function of page size, since we may not want to hard-code page sizes into fields, and I would prefer that they are not strings, how about an array of int[2]'s (page size and count)?  Or an array of structs (with fields of page size and count)?
<br>

<br>
-jms
<br>
Sent from my PDA.  No type good.
<br>

<br>
----- Original Message -----
<br>
From: hwloc-devel-bounces_at_[hidden] &lt;hwloc-devel-bounces_at_[hidden]&gt;
<br>
To: Hardware locality development list &lt;hwloc-devel_at_[hidden]&gt;
<br>
Sent: Sat Jan 16 07:08:46 2010
<br>
Subject: Re: [hwloc-devel] memory size attributes
<br>

<br>
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

<br>
Aside from the memory_kB attribute, I wonder what should be done with
<br>
hugepages. I don't think we need to accumulate these at the system level
<br>
since multiple machines could well have different hugepage sizes.
<br>

<br>
And even inside a single machine, it's been pointed out that
<br>
architectures support multiple hugepage sizes. So we might have to
<br>
support several of them at the same time in the future. It could stored
<br>
in the attributes as an array of (hugepage size, hugepage number) in
<br>
numa node attributes but I don't really like that.
<br>

<br>
One way to support future random attributes could be to have an array of
<br>
stringified attributes, like foo=bar, dmiboardinfo=bar, ... and
<br>
hugepage(2M)=1024. Applications would have to parse them, but it's much
<br>
easier for us in the end.
<br>

<br>
And if we go this way, aside from stringified hugepage stuff, memory
<br>
attributes of node/machine/system would only be the unsigned long
<br>
memory_kB field. So we could even put memory_kB back into the main
<br>
hwloc_obj structure. Only cache would still have specific attributes
<br>
(its depth and maybe data/instruction/unified flag).
<br>

<br>
Brice
<br>

<br>
_______________________________________________
<br>
hwloc-devel mailing list
<br>
hwloc-devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0611/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0612.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1649)"</a>
<li><strong>Previous message:</strong> <a href="0610.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Maybe in reply to:</strong> <a href="0599.php">Brice Goglin: "[hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0613.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0613.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0615.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
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
