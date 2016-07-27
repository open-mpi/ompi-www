<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 21:02:54 2010" -->
<!-- isoreceived="20100716010254" -->
<!-- sent="Thu, 15 Jul 2010 21:02:49 -0400" -->
<!-- isosent="20100716010249" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="201007160102.o6G12nTt001199_at_eddie.osl.iu.edu" -->
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
<strong>Date:</strong> 2010-07-15 21:02:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1175.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.2rc1r2329)"</a>
<li><strong>Previous message:</strong> <a href="1173.php">Jeff Squyres: "[hwloc-devel] v1.0.2rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1176.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="1176.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ERROR: Command returned a non-zero exist status (trunk):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make distcheck
<br>
<p>Start time: Thu Jul 15 21:01:02 EDT 2010
<br>
End time:   Thu Jul 15 21:02:49 EDT 2010
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
truncating system cpuset to 23 chars (two 32bit subsets with ending comma)
<br>
got 0x0000ffff,0xffffffff,
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
PASS: hwloc_cpuset_string
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
PASS: hwloc_cpuset_first_last_weight
<br>
PASS: hwloc_cpuset_singlify
<br>
PASS: hwloc_type_depth
<br>
/bin/sh: line 1:  1024 Segmentation fault      ${dir}$tst
<br>
FAIL: hwloc_bind
<br>
/bin/sh: line 1:  1048 Segmentation fault      ${dir}$tst
<br>
FAIL: hwloc_object_userdata
<br>
PASS: hwloc_synthetic
<br>
/bin/sh: line 1:  1094 Segmentation fault      ${dir}$tst
<br>
FAIL: hwloc_is_thissystem
<br>
/bin/sh: line 1:  1118 Segmentation fault      ${dir}$tst
<br>
FAIL: hwloc_insert_misc
<br>
/bin/sh: line 1:  1142 Segmentation fault      ${dir}$tst
<br>
FAIL: glibc-sched
<br>
========================================================
<br>
5 of 18 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
make[4]: *** [check-TESTS] Error 1
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2328/hwloc/hwloc-1.1a1r2328/_build/tests'
<br>
make[3]: *** [check-am] Error 2
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2328/hwloc/hwloc-1.1a1r2328/_build/tests'
<br>
make[2]: *** [check-recursive] Error 1
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2328/hwloc/hwloc-1.1a1r2328/_build/tests'
<br>
make[1]: *** [check-recursive] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2328/hwloc/hwloc-1.1a1r2328/_build'
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
<li><strong>Next message:</strong> <a href="1175.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.2rc1r2329)"</a>
<li><strong>Previous message:</strong> <a href="1173.php">Jeff Squyres: "[hwloc-devel] v1.0.2rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1176.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="1176.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
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
