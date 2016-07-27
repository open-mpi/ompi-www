<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 21:03:04 2011" -->
<!-- isoreceived="20110407010304" -->
<!-- sent="Wed, 6 Apr 2011 21:03:04 -0400" -->
<!-- isosent="20110407010304" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="201104070103.p371348q020703_at_eddie.osl.iu.edu" -->
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
<strong>Date:</strong> 2011-04-06 21:03:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2108.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.3rc1r3395)"</a>
<li><strong>Previous message:</strong> <a href="2106.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.2rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2110.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="2110.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ERROR: Command returned a non-zero exist status (trunk):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make distcheck
<br>
<p>Start time: Wed Apr  6 21:01:04 EDT 2011
<br>
End time:   Wed Apr  6 21:03:03 EDT 2011
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;4 8.000 8.000 8.000 8.000 1.000 2.000 4.000 4.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;5 8.000 8.000 8.000 8.000 2.000 1.000 4.000 4.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;6 8.000 8.000 8.000 8.000 4.000 4.000 1.000 2.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;7 8.000 8.000 8.000 8.000 4.000 4.000 2.000 1.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;8 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 1.000 2.000 4.000 4.000 8.000 8.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;9 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 2.000 1.000 4.000 4.000 8.000 8.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;10 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 4.000 4.000 1.000 2.000 8.000 8.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;11 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 4.000 4.000 2.000 1.000 8.000 8.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;12 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 1.000 2.000 4.000 4.000
<br>
&nbsp;&nbsp;&nbsp;13 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 2.000 1.000 4.000 4.000
<br>
&nbsp;&nbsp;&nbsp;14 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 4.000 4.000 1.000 2.000
<br>
&nbsp;&nbsp;&nbsp;15 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 4.000 4.000 2.000 1.000
<br>
distance matrix for NUMA nodes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0     1     2     3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0 1.000 4.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1 4.000 1.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2 8.000 8.000 1.000 4.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;3 8.000 8.000 4.000 1.000
<br>
PASS: hwloc_distances
<br>
PASS: hwloc_set_distances
<br>
PASS: hwloc_groups
<br>
PASS: hwloc_insert_misc
<br>
starting from full topology
<br>
restricting to nothing, must fail
<br>
restricting to nothing, does nothing
<br>
removing one PU
<br>
removing one core
<br>
removing one node
<br>
restricting to only some already removed node, must fail
<br>
restricting to 3 PUs
<br>
restricting to a single PU
<br>
PASS: hwloc_topology_restrict
<br>
/bin/sh: line 1: 20599 Segmentation fault      ${dir}$tst
<br>
FAIL: hwloc_iodevs
<br>
PASS: glibc-sched
<br>
/bin/sh: line 1: 20646 Segmentation fault      ${dir}$tst
<br>
FAIL: xmlbuffer
<br>
========================================================
<br>
2 of 26 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
make[4]: *** [check-TESTS] Error 1
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3397/hwloc/hwloc-1.3a1r3397/_build/tests'
<br>
make[3]: *** [check-am] Error 2
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3397/hwloc/hwloc-1.3a1r3397/_build/tests'
<br>
make[2]: *** [check-recursive] Error 1
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3397/hwloc/hwloc-1.3a1r3397/_build/tests'
<br>
make[1]: *** [check-recursive] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3397/hwloc/hwloc-1.3a1r3397/_build'
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
<li><strong>Next message:</strong> <a href="2108.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.3rc1r3395)"</a>
<li><strong>Previous message:</strong> <a href="2106.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.2rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2110.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="2110.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
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
