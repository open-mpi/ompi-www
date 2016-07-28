<?
$subject_val = "Re: [hwloc-devel] Feature request: bitmap ASCII list representation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  4 07:00:48 2011" -->
<!-- isoreceived="20110104120048" -->
<!-- sent="Tue, 04 Jan 2011 13:00:40 +0100" -->
<!-- isosent="20110104120040" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Feature request: bitmap ASCII list representation" -->
<!-- id="4D230BE8.5030305_at_inria.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1294141844.2226.19.camel_at_kallies" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Feature request: bitmap ASCII list representation<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-04 07:00:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1772.php">Jeff Squyres: "[hwloc-devel] questions about memory binding flags"</a>
<li><strong>Previous message:</strong> <a href="1770.php">Bernd Kallies: "[hwloc-devel] Feature request: bitmap ASCII list representation"</a>
<li><strong>In reply to:</strong> <a href="1770.php">Bernd Kallies: "[hwloc-devel] Feature request: bitmap ASCII list representation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/01/2011 12:50, Bernd Kallies a &#233;crit :
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the current bitmap API of hwloc 1.1 supports input/output for bitmaps
</span><br>
<span class="quotelev1">&gt; using strings that represent a map as hex words. The functions are
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_snprintf, hwloc_bitmap_sscanf and the like.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux cpusets in addition support an &quot;ASCII list representation&quot; of
</span><br>
<span class="quotelev1">&gt; bitmaps, like 0-15,32-47. This is much easier to read and to write.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suggest to add corresponding functions to the hwloc bitmap C API.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Hello Bernd,
<br>
<p>Right, this has been in the TODO list for a while, I haven't had time to
<br>
work on it yet.
<br>
<p><span class="quotelev1">&gt; Note that there also exists libcpuset and libbitmask in some Linux
</span><br>
<span class="quotelev1">&gt; distributions. These are originally from SGI. There exist the functions
</span><br>
<span class="quotelev1">&gt; bitmask_displayhex, bitmask_displaylist, bitmask_parsehex,
</span><br>
<span class="quotelev1">&gt; bitmask_parselist.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Both are LGPL unfortunately, we can't use this in hwloc (BSD).
<br>
<p><span class="quotelev1">&gt; I added something like that to the most recent Sys::Hwloc Perl wrapper,
</span><br>
<span class="quotelev1">&gt; which is currently found at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cpan.org/modules/by-authors/id/B/BK/BKA/Sys-Hwloc-0.07.tar.gz">http://www.cpan.org/modules/by-authors/id/B/BK/BKA/Sys-Hwloc-0.07.tar.gz</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code for list input/output of hwloc bitmaps was adapted from recent
</span><br>
<span class="quotelev1">&gt; linux kernel code, see e.g.
</span><br>
<span class="quotelev1">&gt; <a href="http://lxr.free-electrons.com/source/lib/bitmap.c">http://lxr.free-electrons.com/source/lib/bitmap.c</a>
</span><br>
<span class="quotelev1">&gt; (functions bitmap_scnlistprintf, bitmap_parselist).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>This is GPL as well.
<br>
<p>The code isn't hard to write anyway, I'll try to do it for 1.2. I guess
<br>
it would be hwloc_bitmap_list_snprintf/sscanf (we already have
<br>
hwloc_bitmap_taskset_snprintf/sccanf for taskset format printing/parsing).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1772.php">Jeff Squyres: "[hwloc-devel] questions about memory binding flags"</a>
<li><strong>Previous message:</strong> <a href="1770.php">Bernd Kallies: "[hwloc-devel] Feature request: bitmap ASCII list representation"</a>
<li><strong>In reply to:</strong> <a href="1770.php">Bernd Kallies: "[hwloc-devel] Feature request: bitmap ASCII list representation"</a>
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
