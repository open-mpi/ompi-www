<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 21:02:44 2009" -->
<!-- isoreceived="20091218020244" -->
<!-- sent="Thu, 17 Dec 2009 21:02:43 -0500" -->
<!-- isosent="20091218020243" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="200912180202.nBI22hiw012942_at_eddie.osl.iu.edu" -->
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
<strong>Date:</strong> 2009-12-17 21:02:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0546.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1508)"</a>
<li><strong>Previous message:</strong> <a href="0544.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
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
<p>Start time: Thu Dec 17 21:01:02 EST 2009
<br>
End time:   Thu Dec 17 21:02:43 EST 2009
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
make[2]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1507/hwloc/hwloc-1.0a1r1507/_build/utils'
<br>
make  check-TESTS
<br>
make[3]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1507/hwloc/hwloc-1.0a1r1507/_build/utils'
<br>
PASS: test-hwloc-distrib.sh
<br>
=============
<br>
1 test passed
<br>
=============
<br>
make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1507/hwloc/hwloc-1.0a1r1507/_build/utils'
<br>
make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1507/hwloc/hwloc-1.0a1r1507/_build/utils'
<br>
Making check in tests
<br>
make[2]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1507/hwloc/hwloc-1.0a1r1507/_build/tests'
<br>
Making check in linux
<br>
make[3]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1507/hwloc/hwloc-1.0a1r1507/_build/tests/linux'
<br>
make  check-TESTS
<br>
make[4]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1507/hwloc/hwloc-1.0a1r1507/_build/tests/linux'
<br>
==================
<br>
All 0 tests passed
<br>
==================
<br>
make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1507/hwloc/hwloc-1.0a1r1507/_build/tests/linux'
<br>
make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1507/hwloc/hwloc-1.0a1r1507/_build/tests/linux'
<br>
Making check in ports
<br>
make[3]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1507/hwloc/hwloc-1.0a1r1507/_build/tests/ports'
<br>
make  libhwloc-ports.la
<br>
make[4]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1507/hwloc/hwloc-1.0a1r1507/_build/tests/ports'
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-traversal.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-synthetic.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-solaris.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-aix.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-osf.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-windows.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-darwin.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-freebsd.lo
<br>
../../../src/topology-freebsd.c: In function `hwloc_freebsd_set_thread_cpubind':
<br>
../../../src/topology-freebsd.c:118: error: `pthread_setaffinity_np' undeclared (first use in this function)
<br>
../../../src/topology-freebsd.c:118: error: (Each undeclared identifier is reported only once
<br>
../../../src/topology-freebsd.c:118: error: for each function it appears in.)
<br>
../../../src/topology-freebsd.c:125: warning: implicit declaration of function `pthread_setaffinity_np'
<br>
../../../src/topology-freebsd.c: In function `hwloc_freebsd_get_thread_cpubind':
<br>
../../../src/topology-freebsd.c:144: error: `pthread_getaffinity_np' undeclared (first use in this function)
<br>
../../../src/topology-freebsd.c:149: warning: implicit declaration of function `pthread_getaffinity_np'
<br>
make[4]: *** [libhwloc_ports_la-topology-freebsd.lo] Error 1
<br>
make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1507/hwloc/hwloc-1.0a1r1507/_build/tests/ports'
<br>
make[3]: *** [check-am] Error 2
<br>
make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1507/hwloc/hwloc-1.0a1r1507/_build/tests/ports'
<br>
make[2]: *** [check-recursive] Error 1
<br>
make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1507/hwloc/hwloc-1.0a1r1507/_build/tests'
<br>
make[1]: *** [check-recursive] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1507/hwloc/hwloc-1.0a1r1507/_build'
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
<li><strong>Next message:</strong> <a href="0546.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1508)"</a>
<li><strong>Previous message:</strong> <a href="0544.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
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
