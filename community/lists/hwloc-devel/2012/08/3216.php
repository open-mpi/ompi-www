<?
$subject_val = "Re: [hwloc-devel] backends and plugins";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 22 01:51:42 2012" -->
<!-- isoreceived="20120822055142" -->
<!-- sent="Wed, 22 Aug 2012 07:51:36 +0200" -->
<!-- isosent="20120822055136" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] backends and plugins" -->
<!-- id="50347368.9030400_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120821191822.GC5992_at_type" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] backends and plugins<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-22 01:51:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3217.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Previous message:</strong> <a href="3215.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>In reply to:</strong> <a href="3215.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3217.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Reply:</strong> <a href="3217.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 21/08/2012 21:18, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice Goglin, le Tue 21 Aug 2012 18:49:48 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; 1) We load plugins and list existing components once per topology. We
</span><br>
<span class="quotelev2">&gt;&gt; should do it only once per process. But that requires some locking in
</span><br>
<span class="quotelev2">&gt;&gt; case multiple topologies are loaded simultaneously, which means we need
</span><br>
<span class="quotelev2">&gt;&gt; thread-safety. Do we want pthread_mutex() for this?
</span><br>
<span class="quotelev1">&gt; I'd say so.  We can test in configure.ac whether -lpthread is really
</span><br>
<span class="quotelev1">&gt; needed for that (it is not on most systems, which optimizes things away
</span><br>
<span class="quotelev1">&gt; in non-libpthread cases).
</span><br>
<p>So pthread_mutex() is always available, at least with -lpthread, on all
<br>
platforms we support?
<br>
I am asking this because &quot;shared&quot; component registration (right after
<br>
shared loading of plugins) needs mutex too.
<br>
If there's no mutex, I can disable plugin support. But nothing would
<br>
works if I disable component registration too.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3217.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Previous message:</strong> <a href="3215.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>In reply to:</strong> <a href="3215.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3217.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Reply:</strong> <a href="3217.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
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
