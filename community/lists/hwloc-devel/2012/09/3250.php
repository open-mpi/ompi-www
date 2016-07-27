<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 11:12:22 2012" -->
<!-- isoreceived="20120905151222" -->
<!-- sent="Wed, 05 Sep 2012 17:12:16 +0200" -->
<!-- isosent="20120905151216" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src" -->
<!-- id="50476BD0.3010101_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="69D1CE0B-3377-44E8-B795-AE40C93AC23E_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-05 11:12:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3251.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>Previous message:</strong> <a href="3249.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>In reply to:</strong> <a href="3248.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3253.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3253.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 05/09/2012 17:08, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Sep 5, 2012, at 10:23 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem I was trying to fix below is that linking hwloc plugins on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Darwin failed because plugins referred to hwloc-core symbols. Nothing on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the libtool command-line said where to find those symbols (I don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; understand why it worked on other platforms).
</span><br>
<span class="quotelev2">&gt;&gt; Because on other platforms, undefined symbols are allowed.
</span><br>
<span class="quotelev1">&gt; Undefined symbols at .so-creation time are allowed on all platforms (even OS X).  But they must be resolved at load time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To be clear: we have exactly the same situation in OMPI, and we do not link any of our DSOs against libmpi.so (we used to, but we don't any more because of the discussion on the <a href="https://svn.open-mpi.org/trac/ompi/wiki/Linkers">https://svn.open-mpi.org/trac/ompi/wiki/Linkers</a> wiki page).  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>So I would need to remove -no-undefined from plugins ldflags and darwin
<br>
(and you?) may be happy again? But iirc, removing this flag broke
<br>
something else, I'll check again.
<br>
<p>By the way, we have almost no internal state in hwloc.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3251.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>Previous message:</strong> <a href="3249.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>In reply to:</strong> <a href="3248.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3253.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3253.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
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
