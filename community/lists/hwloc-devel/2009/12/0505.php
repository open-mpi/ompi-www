<?
$subject_val = "Re: [hwloc-devel] towards PLPA-like API in 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 17:28:40 2009" -->
<!-- isoreceived="20091210222840" -->
<!-- sent="Thu, 10 Dec 2009 17:28:35 -0500" -->
<!-- isosent="20091210222835" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] towards PLPA-like API in 1.0" -->
<!-- id="8D55E68A-AA9C-480A-8FE7-A661CA2382BD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20091210222254.GS4795_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] towards PLPA-like API in 1.0<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-10 17:28:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0506.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0504.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0504.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0506.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 10, 2009, at 5:22 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Are you saying that the API will be all OS/physical, with conversion functions from #3 to convert to/from logical?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, it should stay logical, conversion would be just to translate into OS/physical.
</span><br>
<p>Ok -- good.  Consistent (CLI and C) == good.  We'll need translation functions for both directions, right?  (to and from OS/physical)
<br>
<p><span class="quotelev2">&gt; &gt; Additionally, what exactly is the logical ordering defined to be?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See topology.c, it's always topologically ordered, and then ordered
</span><br>
<span class="quotelev1">&gt; by OS cpu numbers. So for instance if the topology is flat, the OS
</span><br>
<span class="quotelev1">&gt; CPU numbers would get used. Then the topology distorts the OS CPU
</span><br>
<span class="quotelev1">&gt; numbering. So logical ordering is as close as OS CPU numbering as
</span><br>
<span class="quotelev1">&gt; possible, constrained by topology.
</span><br>
<p>Awesome.  As you noted, I only looked in the linux file; not the top-level topology.c.  Cool.
<br>
<p><span class="quotelev2">&gt; &gt; We need to guarantee that it is the same across every run,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is, unless the BIOS changes the CPU numbers.
</span><br>
<p>Agreed: nothing we can do about that.
<br>
<p><span class="quotelev2">&gt; &gt; My point: if we're going to have a logical ordering, we should be able to provide at least some level of guarantee of stability about that logical ordering.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For sure since that was precisely what I had in my when I put the
</span><br>
<span class="quotelev1">&gt; sorting code in the generic part.
</span><br>
<p>2 steps ahead of me.  Perfect.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0506.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0504.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0504.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0506.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
