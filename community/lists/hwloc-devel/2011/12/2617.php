<?
$subject_val = "Re: [hwloc-devel] 1.3.1 and 1.4rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 12:57:54 2011" -->
<!-- isoreceived="20111213175754" -->
<!-- sent="Tue, 13 Dec 2011 18:57:49 +0100" -->
<!-- isosent="20111213175749" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.1 and 1.4rc1" -->
<!-- id="4EE7921D.9090008_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20111213171737.GV4359_at_type.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2011-12-13 12:57:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2618.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2616.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>In reply to:</strong> <a href="2610.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2614.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 13/12/2011 18:17, Samuel Thibault a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Brice Goglin, le Tue 13 Dec 2011 14:10:17 +0100, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; My main problem is that it's hard to know whether this will look good in
</span><br>
<span class="quotelev2">&gt;&gt; two years when we'll have support for AMD APU, Intel MIC and other
</span><br>
<span class="quotelev2">&gt;&gt; &quot;strange&quot; architectures. Which types should be common to CPUs and these
</span><br>
<span class="quotelev2">&gt;&gt; accelerators? Might be easy to answer for MIC,
</span><br>
<span class="quotelev1">&gt; And still. MIC cores are not something you can just bind to.
</span><br>
<p>Yeah it's more like another host. But once on the other host, you can
<br>
bind there.
<br>
<p><span class="quotelev2">&gt;&gt; Also I don't think the GPU caches should be L2 because they are not very
</span><br>
<span class="quotelev2">&gt;&gt; similar to the CPU ones.
</span><br>
<span class="quotelev1">&gt; How so?
</span><br>
<p>In the same way the GPU memory is different from the NUMA node memory?
<br>
Why would caches and cores be similar for CPU and GPU while memory and
<br>
pu would not?
<br>
<p><span class="quotelev2">&gt;&gt; Given the libnuma or libpci mess, there's no way I can think that
</span><br>
<span class="quotelev2">&gt;&gt; always keeping CUDA enabled will work fine in most cases.
</span><br>
<span class="quotelev1">&gt; What do you think can go wrong?
</span><br>
<p>Ugly API changes (like adding PCI info between 4.0rc2 and 4.0), broken
<br>
configure detection because the install path isn't very &quot;standard&quot; and
<br>
there's no pkg-config, ... Things that looked OK first but ended up
<br>
breaking with libnuma (broken backward compat) and libpci (pkg-config
<br>
added late, unclear dependencies on libz and libresolv, ...). With
<br>
--disable-cuda, there's an easy workaround so that's OK now.
<br>
<p><span class="quotelev1">&gt; Quoting the documentation: &#226;&#128;&#156;There is no explicit initialization
</span><br>
<span class="quotelev1">&gt; function for the runtime; it initializes the first time a runtime
</span><br>
<span class="quotelev1">&gt; function is called&#226;&#128;&#157;.
</span><br>
<p>Good!
<br>
<p><span class="quotelev2">&gt;&gt; * About the &quot;tight&quot; attribute, can't you just make a special case when
</span><br>
<span class="quotelev2">&gt;&gt; you're inside a GPU?
</span><br>
<span class="quotelev1">&gt; I don't like such kind of special-casing: in the future we could very
</span><br>
<span class="quotelev1">&gt; well also have a full-fledged core alongside an MP on the GPU.
</span><br>
<p>Wait, I just saw in the code that it's only a *group* attribute! I
<br>
thought it was in the generic hwloc_obj structure... Ok then...
<br>
<p><span class="quotelev2">&gt;&gt; * About decoration, the lstopo output is totally unreadable on machine
</span><br>
<span class="quotelev2">&gt;&gt; with several &quot;big&quot; GPUs. I wonder if we actually need to display all GPU
</span><br>
<span class="quotelev2">&gt;&gt; threads like this or just say &quot;16 SM with 32 threads each&quot; instead?
</span><br>
<span class="quotelev1">&gt; Well, we don't do such summary for very big machines like our 96core
</span><br>
<span class="quotelev1">&gt; machine either...
</span><br>
<p>PU/Core numbers are meaningful there, because we bind things. GPU
<br>
threads look anonymous to me, at least in the current lstopo output.
<br>
<p>I am just saying that the current lstopo output on hosts with GPUs is
<br>
unreadable just because we show many &quot;empty&quot; boxes. If people want/can
<br>
manipulate independent GPU threads, I would understand.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2618.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2616.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>In reply to:</strong> <a href="2610.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2614.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
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
