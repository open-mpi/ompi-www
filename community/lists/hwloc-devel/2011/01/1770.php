<?
$subject_val = "[hwloc-devel] Feature request: bitmap ASCII list representation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  4 06:51:04 2011" -->
<!-- isoreceived="20110104115104" -->
<!-- sent="Tue, 04 Jan 2011 12:50:44 +0100" -->
<!-- isosent="20110104115044" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="[hwloc-devel] Feature request: bitmap ASCII list representation" -->
<!-- id="1294141844.2226.19.camel_at_kallies" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [hwloc-devel] Feature request: bitmap ASCII list representation<br>
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-04 06:50:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1771.php">Brice Goglin: "Re: [hwloc-devel] Feature request: bitmap ASCII list representation"</a>
<li><strong>Previous message:</strong> <a href="1769.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc6r3006)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1771.php">Brice Goglin: "Re: [hwloc-devel] Feature request: bitmap ASCII list representation"</a>
<li><strong>Reply:</strong> <a href="1771.php">Brice Goglin: "Re: [hwloc-devel] Feature request: bitmap ASCII list representation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>the current bitmap API of hwloc 1.1 supports input/output for bitmaps
<br>
using strings that represent a map as hex words. The functions are
<br>
hwloc_bitmap_snprintf, hwloc_bitmap_sscanf and the like.
<br>
<p>Linux cpusets in addition support an &quot;ASCII list representation&quot; of
<br>
bitmaps, like 0-15,32-47. This is much easier to read and to write.
<br>
<p>I suggest to add corresponding functions to the hwloc bitmap C API.
<br>
<p>Note that there also exists libcpuset and libbitmask in some Linux
<br>
distributions. These are originally from SGI. There exist the functions
<br>
bitmask_displayhex, bitmask_displaylist, bitmask_parsehex,
<br>
bitmask_parselist.
<br>
<p>I added something like that to the most recent Sys::Hwloc Perl wrapper,
<br>
which is currently found at
<br>
<p><a href="http://www.cpan.org/modules/by-authors/id/B/BK/BKA/Sys-Hwloc-0.07.tar.gz">http://www.cpan.org/modules/by-authors/id/B/BK/BKA/Sys-Hwloc-0.07.tar.gz</a>
<br>
<p>The code for list input/output of hwloc bitmaps was adapted from recent
<br>
linux kernel code, see e.g.
<br>
<a href="http://lxr.free-electrons.com/source/lib/bitmap.c">http://lxr.free-electrons.com/source/lib/bitmap.c</a>
<br>
(functions bitmap_scnlistprintf, bitmap_parselist).
<br>
<p>Regards BK
<br>
<p><pre>
-- 
Dr. Bernd Kallies
Konrad-Zuse-Zentrum f&#252;r Informationstechnik Berlin
Takustr. 7
14195 Berlin
Tel: +49-30-84185-270
Fax: +49-30-84185-311
e-mail: kallies_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1771.php">Brice Goglin: "Re: [hwloc-devel] Feature request: bitmap ASCII list representation"</a>
<li><strong>Previous message:</strong> <a href="1769.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc6r3006)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1771.php">Brice Goglin: "Re: [hwloc-devel] Feature request: bitmap ASCII list representation"</a>
<li><strong>Reply:</strong> <a href="1771.php">Brice Goglin: "Re: [hwloc-devel] Feature request: bitmap ASCII list representation"</a>
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
