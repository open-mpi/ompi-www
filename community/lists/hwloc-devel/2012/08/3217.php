<?
$subject_val = "Re: [hwloc-devel] backends and plugins";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 22 03:25:12 2012" -->
<!-- isoreceived="20120822072512" -->
<!-- sent="Wed, 22 Aug 2012 09:24:56 +0200" -->
<!-- isosent="20120822072456" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] backends and plugins" -->
<!-- id="20120822072456.GA4526_at_type" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="50347368.9030400_at_inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-22 03:24:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3218.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4760)"</a>
<li><strong>Previous message:</strong> <a href="3216.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>In reply to:</strong> <a href="3216.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Wed 22 Aug 2012 07:52:07 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 21/08/2012 21:18, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Brice Goglin, le Tue 21 Aug 2012 18:49:48 +0200, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1) We load plugins and list existing components once per topology. We
</span><br>
<span class="quotelev3">&gt; &gt;&gt; should do it only once per process. But that requires some locking in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; case multiple topologies are loaded simultaneously, which means we need
</span><br>
<span class="quotelev3">&gt; &gt;&gt; thread-safety. Do we want pthread_mutex() for this?
</span><br>
<span class="quotelev2">&gt; &gt; I'd say so.  We can test in configure.ac whether -lpthread is really
</span><br>
<span class="quotelev2">&gt; &gt; needed for that (it is not on most systems, which optimizes things away
</span><br>
<span class="quotelev2">&gt; &gt; in non-libpthread cases).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So pthread_mutex() is always available, at least with -lpthread, on all
</span><br>
<span class="quotelev1">&gt; platforms we support?
</span><br>
<p>IIRC yes.  For windows that needs a recent enough version of mingw, but
<br>
that should be fine.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3218.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4760)"</a>
<li><strong>Previous message:</strong> <a href="3216.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>In reply to:</strong> <a href="3216.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<!-- nextthread="start" -->
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
