<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  4 21:02:46 2010" -->
<!-- isoreceived="20100405010246" -->
<!-- sent="Sun, 4 Apr 2010 21:02:46 -0400" -->
<!-- isosent="20100405010246" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="201004050102.o3512kDd015780_at_eddie.osl.iu.edu" -->
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
<strong>Date:</strong> 2010-04-04 21:02:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0885.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1928)"</a>
<li><strong>Previous message:</strong> <a href="0883.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ERROR: Command returned a non-zero exist status (trunk):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make distcheck
<br>
<p>Start time: Sun Apr  4 21:01:04 EDT 2010
<br>
End time:   Sun Apr  4 21:02:46 EDT 2010
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
Get  this singlethreaded process        : OK
<br>
Bind this thread                        : OK
<br>
Get  this thread                        : OK
<br>
Bind this whole process                 : OK
<br>
Get  this whole process                 : OK
<br>
Bind whole process                      : OK
<br>
Get  whole process                      : OK
<br>
Bind process                            : OK
<br>
Get  process                            : OK
<br>
Bind thread                             : FAILED (38, Function not implemented) (expected)
<br>
Get  thread                             : FAILED (38, Function not implemented) (expected)
<br>
<p>now strict
<br>
Bind this singlethreaded process        : OK
<br>
Get  this singlethreaded process        : OK
<br>
Bind this thread                        : OK
<br>
Get  this thread                        : OK
<br>
Bind this whole process                 : OK
<br>
Get  this whole process                 : OK
<br>
Bind whole process                      : OK
<br>
Get  whole process                      : OK
<br>
Bind process                            : OK
<br>
Get  process                            : OK
<br>
Bind thread                             : FAILED (38, Function not implemented) (expected)
<br>
Get  thread                             : FAILED (38, Function not implemented) (expected)
<br>
<p>PASS: hwloc_bind
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
lt-hwloc_insert_misc: ../../src/topology.c:2186: hwloc_topology_check: Assertion `obj-&gt;arity == 0' failed.
<br>
/bin/sh: line 1: 15701 Aborted                 ${dir}$tst
<br>
FAIL: hwloc_insert_misc
<br>
PASS: glibc-sched
<br>
========================================================
<br>
2 of 18 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
make[4]: *** [check-TESTS] Error 1
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1920/hwloc/hwloc-1.0a1r1920/_build/tests'
<br>
make[3]: *** [check-am] Error 2
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1920/hwloc/hwloc-1.0a1r1920/_build/tests'
<br>
make[2]: *** [check-recursive] Error 1
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1920/hwloc/hwloc-1.0a1r1920/_build/tests'
<br>
make[1]: *** [check-recursive] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1920/hwloc/hwloc-1.0a1r1920/_build'
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
<li><strong>Next message:</strong> <a href="0885.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1928)"</a>
<li><strong>Previous message:</strong> <a href="0883.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
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
