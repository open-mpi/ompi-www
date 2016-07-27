<?
$subject_val = "[hwloc-devel] Bug in v1.1 bitmap API";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 20 09:20:57 2010" -->
<!-- isoreceived="20101220142057" -->
<!-- sent="Mon, 20 Dec 2010 15:20:31 +0100" -->
<!-- isosent="20101220142031" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="[hwloc-devel] Bug in v1.1 bitmap API" -->
<!-- id="1292854831.2272.209.camel_at_kallies" -->
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
<strong>Subject:</strong> [hwloc-devel] Bug in v1.1 bitmap API<br>
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-20 09:20:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1739.php">Brice Goglin: "Re: [hwloc-devel] Bug in v1.1 bitmap API"</a>
<li><strong>Previous message:</strong> <a href="1737.php">Brice Goglin: "[hwloc-devel] gather-topology fix and manpage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1739.php">Brice Goglin: "Re: [hwloc-devel] Bug in v1.1 bitmap API"</a>
<li><strong>Reply:</strong> <a href="1739.php">Brice Goglin: "Re: [hwloc-devel] Bug in v1.1 bitmap API"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hallo,
<br>
<p>while browsing through the implementation of the bitmap API in hwloc 1.1
<br>
and comparing it with the cpuset API of hwloc 1.0, it turns out that
<br>
hwloc_bitmap_alloc uses malloc and leaves struct member ulongs
<br>
uninitialized, wheres 1.0 used calloc.
<br>
<p>This leads to random bitmap content after creation with
<br>
hwloc_bitmap_alloc, depending on how system's malloc works. In addition,
<br>
these bitmaps cannot be zeroed with hwloc_bitmap_zero right after alloc.
<br>
<p>One may check this with the call sequence
<br>
<p>hwloc_bitmap_alloc
<br>
hwloc_bitmap_to_ulong
<br>
hwloc_bitmap_zero
<br>
hwloc_bitmap_to_ulong
<br>
<p>I would expect that hwloc_bitmap_alloc returns a new empty bitmap, which
<br>
appears to be empty with all methods showing bitmap content, and which
<br>
can be used for logical bit manipulations without further
<br>
initialization.
<br>
<p>I suggest to reintroduce calloc or memset in hwloc_bitmap_alloc.
<br>
<p>Sincerely BK
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
<li><strong>Next message:</strong> <a href="1739.php">Brice Goglin: "Re: [hwloc-devel] Bug in v1.1 bitmap API"</a>
<li><strong>Previous message:</strong> <a href="1737.php">Brice Goglin: "[hwloc-devel] gather-topology fix and manpage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1739.php">Brice Goglin: "Re: [hwloc-devel] Bug in v1.1 bitmap API"</a>
<li><strong>Reply:</strong> <a href="1739.php">Brice Goglin: "Re: [hwloc-devel] Bug in v1.1 bitmap API"</a>
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
