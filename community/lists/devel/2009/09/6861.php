<?
$subject_val = "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 10:00:09 2009" -->
<!-- isoreceived="20090921140009" -->
<!-- sent="Mon, 21 Sep 2009 15:59:23 +0200" -->
<!-- isosent="20090921135923" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX" -->
<!-- id="4AB786BB.9050407_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F94A5770-63B8-41BB-A3F2-D2591404E10F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 09:59:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6862.php">Samuel K. Gutierrez: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Previous message:</strong> <a href="6860.php">Jeff Squyres: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>In reply to:</strong> <a href="6860.php">Jeff Squyres: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Do you just want to wait for the ummunotify stuff in OMPI?  I'm half
</span><br>
<span class="quotelev1">&gt; done making a merged &quot;linux&quot; memory component (i.e., it merges the
</span><br>
<span class="quotelev1">&gt; ptmalloc2 component with the new ummunotify stuff).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It won't help for kernels &lt;2.6.32, of course.  :-)
</span><br>
<p>Yeah that's another solution for bleeding-edge distribs :) But it's not
<br>
even merged in 2.6.32 yet, and I hope the perfcounter guys won't
<br>
successfully convince Roland of reimplementing ummunotify as a
<br>
perfcounter feature. The 2.6.32 merge window is closing soon...
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6862.php">Samuel K. Gutierrez: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Previous message:</strong> <a href="6860.php">Jeff Squyres: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>In reply to:</strong> <a href="6860.php">Jeff Squyres: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
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
