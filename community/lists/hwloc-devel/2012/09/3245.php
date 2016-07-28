<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 10:23:41 2012" -->
<!-- isoreceived="20120905142341" -->
<!-- sent="Wed, 5 Sep 2012 16:23:36 +0200" -->
<!-- isosent="20120905142336" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src" -->
<!-- id="20120905142336.GM2384_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="50475DF0.4010207_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-05 10:23:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3246.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3244.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>In reply to:</strong> <a href="3243.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3248.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3248.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Wed 05 Sep 2012 16:13:31 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; The problem I was trying to fix below is that linking hwloc plugins on
</span><br>
<span class="quotelev1">&gt; Darwin failed because plugins referred to hwloc-core symbols. Nothing on
</span><br>
<span class="quotelev1">&gt; the libtool command-line said where to find those symbols (I don't
</span><br>
<span class="quotelev1">&gt; understand why it worked on other platforms).
</span><br>
<p>Because on other platforms, undefined symbols are allowed.
<br>
<p><span class="quotelev1">&gt; I added -lhwloc as a way to tell the linker &quot;those symbols are there&quot;.
</span><br>
<span class="quotelev1">&gt; I didn't think it would statically link libhwloc inside the plugins,
</span><br>
<span class="quotelev1">&gt; and it doesn't seem to do so (from what I see in objdump). Is this
</span><br>
<span class="quotelev1">&gt; what you mean?
</span><br>
<p>No, he means that it'll also make the loader load libhwloc.so. Even if
<br>
the application linked libhwloc.a statically.
<br>
<p><span class="quotelev1">&gt; It's really a problem when linking, not about loading
</span><br>
<p>But it has effects on loading.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3246.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3244.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>In reply to:</strong> <a href="3243.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3248.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3248.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
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
