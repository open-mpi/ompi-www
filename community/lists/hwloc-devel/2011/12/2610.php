<?
$subject_val = "Re: [hwloc-devel] 1.3.1 and 1.4rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 12:17:42 2011" -->
<!-- isoreceived="20111213171742" -->
<!-- sent="Tue, 13 Dec 2011 18:17:37 +0100" -->
<!-- isosent="20111213171737" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.1 and 1.4rc1" -->
<!-- id="20111213171737.GV4359_at_type.bordeaux.inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="81079778.639408.1323781817120.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 12:17:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2611.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4041"</a>
<li><strong>Previous message:</strong> <a href="2609.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Maybe in reply to:</strong> <a href="2587.php">Brice Goglin: "[hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2617.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Reply:</strong> <a href="2617.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 13 Dec 2011 14:10:17 +0100, a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; My main problem is that it's hard to know whether this will look good in
</span><br>
<span class="quotelev1">&gt; two years when we'll have support for AMD APU, Intel MIC and other
</span><br>
<span class="quotelev1">&gt; &quot;strange&quot; architectures. Which types should be common to CPUs and these
</span><br>
<span class="quotelev1">&gt; accelerators? Might be easy to answer for MIC,
</span><br>
<p>And still. MIC cores are not something you can just bind to.
<br>
<p><span class="quotelev1">&gt; but much harder for GPUs.
</span><br>
<p><span class="quotelev1">&gt;From the programming point of view it's not so different actually.
</span><br>
<p><span class="quotelev1">&gt; I actually thought you would use PUs for GPU threads. But actually none
</span><br>
<span class="quotelev1">&gt; of PU and Core really satisfies me. Core looks too big given the small
</span><br>
<span class="quotelev1">&gt; abilities of GPU threads. But using PU for GPUs might cause problem
</span><br>
<span class="quotelev1">&gt; because we can't bind tasks to individual GPU threads.
</span><br>
<p>Just like we can't directly bind tasks to MIC cores, or to PUs of
<br>
another machine, with a topology that includes a whole cluster.
<br>
<p><span class="quotelev1">&gt; Also I don't think the GPU caches should be L2 because they are not very
</span><br>
<span class="quotelev1">&gt; similar to the CPU ones.
</span><br>
<p>How so?
<br>
<p><span class="quotelev1">&gt; * We need a --disable-cuda.
</span><br>
<p>Oops, support was already there, I just forgot to add the actual option,
<br>
now done.
<br>
<p><span class="quotelev1">&gt; Given the libnuma or libpci mess, there's no way I can think that
</span><br>
<span class="quotelev1">&gt; always keeping CUDA enabled will work fine in most cases.
</span><br>
<p>What do you think can go wrong?
<br>
<p><span class="quotelev1">&gt; * I don't like calling some CUDA function without init() first, it could
</span><br>
<span class="quotelev1">&gt; break one day or another. Fortunately I can't find any cudaInit()
</span><br>
<span class="quotelev1">&gt; function in the API you use (there's a cuInit() in the other one only).
</span><br>
<span class="quotelev1">&gt; Do we have any doc saying whether the CUDA functions you use actually
</span><br>
<span class="quotelev1">&gt; require an init() or not?
</span><br>
<p>Quoting the documentation: &#226;&#128;&#156;There is no explicit initialization
<br>
function for the runtime; it initializes the first time a runtime
<br>
function is called&#226;&#128;&#157;.
<br>
<p><span class="quotelev1">&gt; * About the &quot;tight&quot; attribute, can't you just make a special case when
</span><br>
<span class="quotelev1">&gt; you're inside a GPU?
</span><br>
<p>I don't like such kind of special-casing: in the future we could very
<br>
well also have a full-fledged core alongside an MP on the GPU.
<br>
<p><span class="quotelev1">&gt; * About decoration, the lstopo output is totally unreadable on machine
</span><br>
<span class="quotelev1">&gt; with several &quot;big&quot; GPUs. I wonder if we actually need to display all GPU
</span><br>
<span class="quotelev1">&gt; threads like this or just say &quot;16 SM with 32 threads each&quot; instead?
</span><br>
<p>Well, we don't do such summary for very big machines like our 96core
<br>
machine either...
<br>
<p><span class="quotelev1">&gt; Last feeling: The more I think about PCI support, the more I wonder
</span><br>
<span class="quotelev1">&gt; whether it will be used for anything but getting nice lstopo outputs.
</span><br>
<span class="quotelev1">&gt; Inline helpers are already great for many cases, people just need
</span><br>
<span class="quotelev1">&gt; locality info in most cases,
</span><br>
<p>Which they can need to reconnect with actual hwloc object to
<br>
redistribute e.g. threads amongs cores inside the socket etc. Or
<br>
reconnect with the NUMA distance to check for PCI-memory transfers, be
<br>
it for NICs, GPUs, etc.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2611.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4041"</a>
<li><strong>Previous message:</strong> <a href="2609.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Maybe in reply to:</strong> <a href="2587.php">Brice Goglin: "[hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2617.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Reply:</strong> <a href="2617.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
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
