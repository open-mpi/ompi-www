<?
$subject_val = "Re: [hwloc-devel] Bug in v1.1 bitmap API";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 20 09:34:59 2010" -->
<!-- isoreceived="20101220143459" -->
<!-- sent="Mon, 20 Dec 2010 15:34:50 +0100" -->
<!-- isosent="20101220143450" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug in v1.1 bitmap API" -->
<!-- id="4D0F698A.4060706_at_inria.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1292854831.2272.209.camel_at_kallies" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Bug in v1.1 bitmap API<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-20 09:34:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1740.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<li><strong>Previous message:</strong> <a href="1738.php">Bernd Kallies: "[hwloc-devel] Bug in v1.1 bitmap API"</a>
<li><strong>In reply to:</strong> <a href="1738.php">Bernd Kallies: "[hwloc-devel] Bug in v1.1 bitmap API"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 20/12/2010 15:20, Bernd Kallies a &#233;crit :
<br>
<span class="quotelev1">&gt; Hallo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; while browsing through the implementation of the bitmap API in hwloc 1.1
</span><br>
<span class="quotelev1">&gt; and comparing it with the cpuset API of hwloc 1.0, it turns out that
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_alloc uses malloc and leaves struct member ulongs
</span><br>
<span class="quotelev1">&gt; uninitialized, wheres 1.0 used calloc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This leads to random bitmap content after creation with
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_alloc, depending on how system's malloc works. In addition,
</span><br>
<span class="quotelev1">&gt; these bitmaps cannot be zeroed with hwloc_bitmap_zero right after alloc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One may check this with the call sequence
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_alloc
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_to_ulong
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>The actual problem is that the internal code assumes that there's always
<br>
at least one initialized ulong. In the past, we allocated multiple
<br>
ulongs by default, initialized only the first one, and initialized the
<br>
other ones later only when needed.
<br>
In the final 1.1, we don't even initialize the first ulong (IIRC, it
<br>
made some empty/full bitmaps nicer in printf). I need to fix the code
<br>
that wasn't updated accordingly. The attached patch should work.
<br>
<p>thanks,
<br>
Brice
<br>
<p><p><p>Index: src/cpuset.c
<br>
===================================================================
<br>
--- src/cpuset.c	(r&#233;vision 2956)
<br>
+++ src/cpuset.c	(copie de travail)
<br>
@@ -535,7 +535,7 @@
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC__BITMAP_CHECK(set);
<br>
&nbsp;
<br>
-	return set-&gt;ulongs[0]; /* there's always at least one ulong allocated */
<br>
+	return HWLOC_SUBBITMAP_READULONG(set, 0);
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;unsigned long hwloc_bitmap_to_ith_ulong(const struct hwloc_bitmap_s *set, unsigned i)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1740.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<li><strong>Previous message:</strong> <a href="1738.php">Bernd Kallies: "[hwloc-devel] Bug in v1.1 bitmap API"</a>
<li><strong>In reply to:</strong> <a href="1738.php">Bernd Kallies: "[hwloc-devel] Bug in v1.1 bitmap API"</a>
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
