<?
$subject_val = "Re: [hwloc-devel] Cacheline sizes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 25 15:46:28 2010" -->
<!-- isoreceived="20100525194628" -->
<!-- sent="Tue, 25 May 2010 13:46:09 -0600" -->
<!-- isosent="20100525194609" -->
<!-- name="Wheeler, Kyle Bruce" -->
<!-- email="kbwheel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Cacheline sizes" -->
<!-- id="1867BD67-8FC9-4947-8092-AA2D2B989F71_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BFC1E4F.60309_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Cacheline sizes<br>
<strong>From:</strong> Wheeler, Kyle Bruce (<em>kbwheel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-25 15:46:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1017.php">Samuel Thibault: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>Previous message:</strong> <a href="1015.php">Brice Goglin: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>In reply to:</strong> <a href="1015.php">Brice Goglin: "Re: [hwloc-devel] Cacheline sizes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1017.php">Samuel Thibault: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>Reply:</strong> <a href="1017.php">Samuel Thibault: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>Reply:</strong> <a href="1018.php">Brice Goglin: "Re: [hwloc-devel] Cacheline sizes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 25, 2010, at 1:00 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Numerous ideas like this were proposed and we're not sure where to stop.
</span><br>
<span class="quotelev1">&gt; If we start doing this, people will ask for the processor frequency, the
</span><br>
<span class="quotelev1">&gt; number of floating point units per core, the associativity of the cache,
</span><br>
<span class="quotelev1">&gt; the type of memory, ... lots of things that are not really related to
</span><br>
<span class="quotelev1">&gt; topology but may be useful to some applications. Cache line size isn't
</span><br>
<span class="quotelev1">&gt; that bad, but it's borderline, so I don't know if we want it. There are
</span><br>
<span class="quotelev1">&gt; many other specific tools to gather such random hardware information,
</span><br>
<span class="quotelev1">&gt; merging all of them inside hwloc wouldn't be good.
</span><br>
<p>I can certainly understand that; perhaps a good way of knowing where to draw the line is to clearly define the goals of hwloc and the expected environment. For example, you could say that the purpose of hwloc is *exclusively* to present topology information and allow programs to locate themselves within that topology. With that kind of a limit, though, hwloc already presents too much information---what does cache size have to do with topology? Perhaps it is that detail that appears to open the door to other information. Unless hwloc is targeting heterogenous environments where you might want to bind your process to a different CPU based on the cache size, that information *seems* superfluous. And that starts down the slippery slope: what hierarchy/object-specific data is sufficiently important to add based on the idea that someone might use that information to inform affinity decisions?
<br>
<p>I agree that, inherently, cache line size has nothing to do with topology. But on the other hand, it's particularly useful for parallel shared-memory applications (to avoid false-sharing), which are precisely the sort of applications that would be most interested in using hwloc (especially if we're considering a heterogeneous environment where each cache might have a different cache-line size). Obviously, it's easy to just keep going and mine all kinds of random information about hardware, but I would argue that things like floating point unit count or cache associativity has even less to do with topology and are not generally interesting for parallel shared-memory applications.
<br>
<p>Really, it would seem that hwloc *really* needs a good definition of its scope and/or audience.
<br>
<p><span class="quotelev1">&gt; Talking about caches, one thing we need to think about is Instruction
</span><br>
<span class="quotelev1">&gt; caches (we only gather Data and Unified caches on Linux so far).
</span><br>
<p>Why is runtime icache information important? :)
<br>
<pre>
-- 
Kyle Wheeler, PhD
kbwheel_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1017.php">Samuel Thibault: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>Previous message:</strong> <a href="1015.php">Brice Goglin: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>In reply to:</strong> <a href="1015.php">Brice Goglin: "Re: [hwloc-devel] Cacheline sizes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1017.php">Samuel Thibault: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>Reply:</strong> <a href="1017.php">Samuel Thibault: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>Reply:</strong> <a href="1018.php">Brice Goglin: "Re: [hwloc-devel] Cacheline sizes"</a>
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
