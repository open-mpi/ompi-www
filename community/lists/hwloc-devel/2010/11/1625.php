<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 08:51:34 2010" -->
<!-- isoreceived="20101129135134" -->
<!-- sent="Mon, 29 Nov 2010 08:51:34 -0500" -->
<!-- isosent="20101129135134" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="201011291351.oATDpYVx032519_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> [hwloc-devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> MPI Team (<em>mpiteam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 08:51:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1626.php">Brice Goglin: "[hwloc-devel] multiline legend"</a>
<li><strong>Previous message:</strong> <a href="1624.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.3rc3r2858)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1627.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="1627.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ERROR: Command returned a non-zero exist status (trunk):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make distcheck
<br>
<p>Start time: Thu Nov 11 21:01:02 EST 2010
<br>
End time:   Mon Nov 29 08:51:33 EST 2010
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
truncating system cpuset to 51 chars (truncate to four and a half 32bit subsets)
<br>
got 0x0000ffff,0xffffffff,0xffffffff,0xffffffff,0xffff
<br>
first cpu cpuset is 0x00000001
<br>
first cpu cpuset converted back and forth, ok
<br>
last cpu cpuset is 0x00008000,,,,,,,,,,,,,,,,,,,,,,0x0
<br>
last cpu cpuset converted back and forth, ok
<br>
PASS: hwloc_bitmap_string
<br>
looked for 120 closest entries, found 119
<br>
ancestor type 1 depth 0 number 0 is system level
<br>
PASS: hwloc_get_closest_objs
<br>
found covering object type Socket covering cpuset 0x0,0x0fff,0xf0000000
<br>
covering object of 0x0,0x0fff,0xf0000000 is 0x0000ffff,0xff000000, expected 0x0000ffff,0xff000000
<br>
found system as covering object of first+last cpus cpuset 0x8000,,,,,,,,,,,,,,,,,,,,,,0x1
<br>
found no covering object for too-large cpuset 0x10000,,,,,,,,,,,,,,,,,,,,,,0x0
<br>
PASS: hwloc_get_obj_covering_cpuset
<br>
PASS: hwloc_get_cache_covering_cpuset
<br>
PASS: hwloc_get_largest_objs_inside_cpuset
<br>
PASS: hwloc_get_next_obj_covering_cpuset
<br>
PASS: hwloc_get_obj_inside_cpuset
<br>
PASS: hwloc_get_shared_cache_covering_obj
<br>
PASS: hwloc_get_obj_below_array_by_type
<br>
PASS: hwloc_bitmap_first_last_weight
<br>
PASS: hwloc_bitmap_singlify
<br>
PASS: hwloc_type_depth
<br>
/bin/sh: line 1: 26503 Terminated              ${dir}$tst
<br>
FAIL: hwloc_bind
<br>
PASS: hwloc_object_userdata
<br>
PASS: hwloc_synthetic
<br>
Binding with OS backend       : OK
<br>
Binding with synthetic backend: OK
<br>
Binding with synthetic backend faking is_thissystem: OK
<br>
PASS: hwloc_is_thissystem
<br>
PASS: hwloc_insert_misc
<br>
PASS: glibc-sched
<br>
exported to buffer 0x9f55750 length 2023
<br>
re-exported to buffer 0x9f5a440 length 2023
<br>
PASS: xmlbuffer
<br>
========================================================
<br>
1 of 19 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
make[4]: *** [check-TESTS] Error 1
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2781/hwloc/hwloc-1.2a1r2781/_build/tests'
<br>
make[3]: *** [check-am] Error 2
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2781/hwloc/hwloc-1.2a1r2781/_build/tests'
<br>
make[2]: *** [check-recursive] Error 1
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2781/hwloc/hwloc-1.2a1r2781/_build/tests'
<br>
make[1]: *** [check-recursive] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2781/hwloc/hwloc-1.2a1r2781/_build'
<br>
make: *** [distcheck] Error 1
<br>
=======================================================================
<br>
<p>Your friendly daemon,
<br>
Cyrador
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1626.php">Brice Goglin: "[hwloc-devel] multiline legend"</a>
<li><strong>Previous message:</strong> <a href="1624.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.3rc3r2858)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1627.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="1627.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
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
