<?
$subject_val = "Re: [hwloc-devel] hwloc 1.1rc4r2838 warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 25 01:20:33 2010" -->
<!-- isoreceived="20101125062033" -->
<!-- sent="Thu, 25 Nov 2010 07:20:22 +0100" -->
<!-- isosent="20101125062022" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.1rc4r2838 warnings" -->
<!-- id="4CEE0026.8000209_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CEDE55A.7090805_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc 1.1rc4r2838 warnings<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-25 01:20:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1617.php">Jeff Squyres: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1615.php">Christopher Samuel: "[hwloc-devel] hwloc 1.1rc4r2838 warnings"</a>
<li><strong>In reply to:</strong> <a href="1615.php">Christopher Samuel: "[hwloc-devel] hwloc 1.1rc4r2838 warnings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 25/11/2010 05:26, Christopher Samuel a &#233;crit :
<br>
<span class="quotelev1">&gt; Not sure if these were present beforehand, but Ubuntu 10.04
</span><br>
<span class="quotelev1">&gt; warns about the following issues on x86-64 when doing a &quot;make check&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/samuel/Downloads/HWLOC/v1.1/tests/ports/include/windows.h:23:
</span><br>
<span class="quotelev1">&gt; warning: function declaration isn?t a prototype
</span><br>
<span class="quotelev1">&gt; /home/samuel/Downloads/HWLOC/v1.1/tests/ports/include/windows.h:23:
</span><br>
<span class="quotelev1">&gt; warning: function declaration isn?t a prototype
</span><br>
<span class="quotelev1">&gt; topology-windows.c:209: warning: ISO C forbids assignment between
</span><br>
<span class="quotelev1">&gt; function pointer and ?void *?
</span><br>
<span class="quotelev1">&gt; topology-windows.c:210: warning: ISO C forbids assignment between
</span><br>
<span class="quotelev1">&gt; function pointer and ?void *?
</span><br>
<span class="quotelev1">&gt; topology-windows.c:214: warning: assignment from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; topology-windows.c:219: warning: assignment from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; topology-windows.c:280: warning: ISO C forbids assignment between
</span><br>
<span class="quotelev1">&gt; function pointer and ?void *?
</span><br>
<span class="quotelev1">&gt; topology-windows.c:281: warning: ISO C forbids assignment between
</span><br>
<span class="quotelev1">&gt; function pointer and ?void *?
</span><br>
<span class="quotelev1">&gt; topology-windows.c:282: warning: ISO C forbids assignment between
</span><br>
<span class="quotelev1">&gt; function pointer and ?void *?
</span><br>
<span class="quotelev1">&gt; topology-windows.c:283: warning: ISO C forbids assignment between
</span><br>
<span class="quotelev1">&gt; function pointer and ?void *?
</span><br>
<span class="quotelev1">&gt; topology-freebsd.c:125: warning: passing argument 3 of
</span><br>
<span class="quotelev1">&gt; ?pthread_setaffinity_np? from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; topology-freebsd.c:149: warning: passing argument 3 of
</span><br>
<span class="quotelev1">&gt; ?pthread_getaffinity_np? from incompatible pointer type
</span><br>
<p>Many warning in topology-foo.c with foo != linux are expected. We
<br>
compile the other OS backends from Linux, so we get some unsolvable
<br>
incompatibilities between OS headers.
<br>
<p><span class="quotelev1">&gt; xmlbuffer.c:39: warning: format not a string literal and no format
</span><br>
<span class="quotelev1">&gt; arguments
</span><br>
<span class="quotelev1">&gt; xmlbuffer.c:42: warning: format not a string literal and no format
</span><br>
<span class="quotelev1">&gt; arguments
</span><br>
<p>I am fixing these.
<br>
<p><span class="quotelev1">&gt; SLES10 has these additional warnings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; topology-linux.c:1002: warning: implicit declaration of function
</span><br>
<span class="quotelev1">&gt; ?migrate_pages?
</span><br>
<p>This is a bug in some old version of libnuma headers. They declared
<br>
migratepages instead of migrate_pages in numaif.h. I'll see if I can
<br>
workaround this easily.
<br>
<p><span class="quotelev1">&gt; lstopo.c:186:5: warning: &quot;CAIRO_HAS_SVG_SURFACE&quot; is not defined
</span><br>
<span class="quotelev1">&gt; lstopo.c:517:5: warning: &quot;CAIRO_HAS_SVG_SURFACE&quot; is not defined
</span><br>
<span class="quotelev1">&gt; lstopo-cairo.c:22:5: warning: &quot;CAIRO_HAS_SVG_SURFACE&quot; is not defined
</span><br>
<span class="quotelev1">&gt; lstopo-cairo.c:50:104: warning: &quot;CAIRO_HAS_SVG_SURFACE&quot; is not defined
</span><br>
<span class="quotelev1">&gt; lstopo-cairo.c:87:79: warning: &quot;CAIRO_HAS_SVG_SURFACE&quot; is not defined
</span><br>
<span class="quotelev1">&gt; lstopo-cairo.c:443:5: warning: &quot;CAIRO_HAS_SVG_SURFACE&quot; is not defined
</span><br>
<p>Shouldn't be bad, we'll see.
<br>
<p><span class="quotelev1">&gt; hwloc-distrib.c:199: warning: comparison between signed and unsigned
</span><br>
<p>I am fixing this too.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1617.php">Jeff Squyres: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1615.php">Christopher Samuel: "[hwloc-devel] hwloc 1.1rc4r2838 warnings"</a>
<li><strong>In reply to:</strong> <a href="1615.php">Christopher Samuel: "[hwloc-devel] hwloc 1.1rc4r2838 warnings"</a>
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
