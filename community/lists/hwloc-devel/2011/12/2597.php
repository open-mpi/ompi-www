<?
$subject_val = "Re: [hwloc-devel] 1.3.1 and 1.4rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 08:09:39 2011" -->
<!-- isoreceived="20111213130939" -->
<!-- sent="Tue, 13 Dec 2011 14:09:29 +0100" -->
<!-- isosent="20111213130929" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.1 and 1.4rc1" -->
<!-- id="4EE74E89.9060602_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20111213111412.GE4359_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.3.1 and 1.4rc1<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 08:09:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2598.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2596.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>In reply to:</strong> <a href="2596.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2599.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Reply:</strong> <a href="2599.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Reply:</strong> <a href="2624.php">Christopher Samuel: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 13/12/2011 12:14, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Do we merge the cuda branch into 1.4? I didn't do the work directly
</span><br>
<span class="quotelev1">&gt; into the trunk because I wasn't sure of what I'd need to add to the
</span><br>
<span class="quotelev1">&gt; interface. Eventually, the additions are
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - the &quot;tight&quot; field, which just means whether children are tightly packed,
</span><br>
<span class="quotelev1">&gt; such as cores in an nvidia MultiProcessor, i.e. it's mostly a decorative
</span><br>
<span class="quotelev1">&gt; attribute for the drawing function.
</span><br>
<span class="quotelev1">&gt; - the &quot;MEM&quot; object type, which represents embedded memory, not a NUMA node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Opinions?
</span><br>
<p>My main problem is that it's hard to know whether this will look good in
<br>
two years when we'll have support for AMD APU, Intel MIC and other
<br>
&quot;strange&quot; architectures. Which types should be common to CPUs and these
<br>
accelerators? Might be easy to answer for MIC, but much harder for GPUs.
<br>
I actually thought you would use PUs for GPU threads. But actually none
<br>
of PU and Core really satisfies me. Core looks too big given the small
<br>
abilities of GPU threads. But using PU for GPUs might cause problem
<br>
because we can't bind tasks to individual GPU threads.
<br>
Also I don't think the GPU caches should be L2 because they are not very
<br>
similar to the CPU ones. I don't know how to handle these. If we add a
<br>
cache type for instruction/data/unified, there's could be a special type
<br>
for embedded caches.
<br>
<p>On the technical side:
<br>
* We need a --disable-cuda. Given the libnuma or libpci mess, there's no
<br>
way I can think that always keeping CUDA enabled will work fine in most
<br>
cases. The good news is that cuda may not often be installed in /usr, so
<br>
I hope configure will not find it automatically in most cases :)
<br>
* I don't like calling some CUDA function without init() first, it could
<br>
break one day or another. Fortunately I can't find any cudaInit()
<br>
function in the API you use (there's a cuInit() in the other one only).
<br>
Do we have any doc saying whether the CUDA functions you use actually
<br>
require an init() or not?
<br>
* About the &quot;tight&quot; attribute, can't you just make a special case when
<br>
you're inside a GPU? It's strange to expose this in the API just for
<br>
decorative purpose.
<br>
* About decoration, the lstopo output is totally unreadable on machine
<br>
with several &quot;big&quot; GPUs. I wonder if we actually need to display all GPU
<br>
threads like this or just say &quot;16 SM with 32 threads each&quot; instead?
<br>
<p>Last feeling: The more I think about PCI support, the more I wonder
<br>
whether it will be used for anything but getting nice lstopo outputs.
<br>
Inline helpers are already great for many cases, people just need
<br>
locality info in most cases, so I wonder if people will actually use PCI
<br>
as hwloc objects except in lstopo. The same question comes for GPUs.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2598.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2596.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>In reply to:</strong> <a href="2596.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2599.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Reply:</strong> <a href="2599.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Reply:</strong> <a href="2624.php">Christopher Samuel: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
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
