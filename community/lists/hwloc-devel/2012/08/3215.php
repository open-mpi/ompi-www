<?
$subject_val = "Re: [hwloc-devel] backends and plugins";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 21 15:18:39 2012" -->
<!-- isoreceived="20120821191839" -->
<!-- sent="Tue, 21 Aug 2012 21:18:22 +0200" -->
<!-- isosent="20120821191822" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] backends and plugins" -->
<!-- id="20120821191822.GC5992_at_type" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5033BC03.6020903_at_inria.fr" -->
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
<strong>Date:</strong> 2012-08-21 15:18:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3216.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Previous message:</strong> <a href="3214.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>In reply to:</strong> <a href="3214.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3216.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Reply:</strong> <a href="3216.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 21 Aug 2012 18:49:48 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; 1) We load plugins and list existing components once per topology. We
</span><br>
<span class="quotelev1">&gt; should do it only once per process. But that requires some locking in
</span><br>
<span class="quotelev1">&gt; case multiple topologies are loaded simultaneously, which means we need
</span><br>
<span class="quotelev1">&gt; thread-safety. Do we want pthread_mutex() for this?
</span><br>
<p>I'd say so.  We can test in configure.ac whether -lpthread is really
<br>
needed for that (it is not on most systems, which optimizes things away
<br>
in non-libpthread cases).
<br>
<p><span class="quotelev1">&gt; 2) Some internal functions are now exported to plugins. Do we want a
</span><br>
<span class="quotelev1">&gt; special namespace? &quot;hwloc__&quot; instead of &quot;hwloc_&quot;? Is there anyway to
</span><br>
<span class="quotelev1">&gt; make them visibile to plugins but not to applications?
</span><br>
<p>Not that I know of.
<br>
<p><span class="quotelev1">&gt; 3) I currently use the system libltdl. People usually ask libtool to
</span><br>
<span class="quotelev1">&gt; copy it's libtldl implementation inside the project source at autogen to
</span><br>
<span class="quotelev1">&gt; make sure it's compatible/working. So we won't have libltdl in SVN,
</span><br>
<span class="quotelev1">&gt; we'll have it in tarballs, and we'll build it (with a sub-configure) if
</span><br>
<span class="quotelev1">&gt; plugins are enabled. Is anybody against this?
</span><br>
<p>It looks fine to me.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3216.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Previous message:</strong> <a href="3214.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>In reply to:</strong> <a href="3214.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3216.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Reply:</strong> <a href="3216.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
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
