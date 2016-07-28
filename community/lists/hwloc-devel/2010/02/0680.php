<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 18 21:02:53 2010" -->
<!-- isoreceived="20100219020253" -->
<!-- sent="Thu, 18 Feb 2010 21:02:52 -0500" -->
<!-- isosent="20100219020252" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="201002190202.o1J22q6Y001364_at_eddie.osl.iu.edu" -->
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
<strong>Date:</strong> 2010-02-18 21:02:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0681.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1740)"</a>
<li><strong>Previous message:</strong> <a href="0679.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1733)"</a>
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
<p>Start time: Thu Feb 18 21:01:04 EST 2010
<br>
End time:   Thu Feb 18 21:02:52 EST 2010
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1739/hwloc/hwloc-1.0a1r1739/_build/tests'
<br>
Making check in linux
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1739/hwloc/hwloc-1.0a1r1739/_build/tests/linux'
<br>
make  check-TESTS
<br>
make[4]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1739/hwloc/hwloc-1.0a1r1739/_build/tests/linux'
<br>
==================
<br>
All 0 tests passed
<br>
==================
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1739/hwloc/hwloc-1.0a1r1739/_build/tests/linux'
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1739/hwloc/hwloc-1.0a1r1739/_build/tests/linux'
<br>
Making check in ports
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1739/hwloc/hwloc-1.0a1r1739/_build/tests/ports'
<br>
make  libhwloc-ports.la
<br>
make[4]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1739/hwloc/hwloc-1.0a1r1739/_build/tests/ports'
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
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-hpux.lo
<br>
&nbsp;&nbsp;CCLD   libhwloc-ports.la
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1739/hwloc/hwloc-1.0a1r1739/_build/tests/ports'
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1739/hwloc/hwloc-1.0a1r1739/_build/tests/ports'
<br>
Making check in xml
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1739/hwloc/hwloc-1.0a1r1739/_build/tests/xml'
<br>
make  check-TESTS
<br>
make[4]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1739/hwloc/hwloc-1.0a1r1739/_build/tests/xml'
<br>
./test-topology.sh: line 36:  1234 Segmentation fault      $lstopo --xml &quot;$srcdir&quot;/&quot;$1&quot; &quot;$file&quot;
<br>
FAIL: 16amd64-8nd2c-cpusets.xml
<br>
PASS: 16em64t-4s2c2t.xml
<br>
PASS: 16em64t-4s2c2t-offlines.xml
<br>
./test-topology.sh: line 36:  1312 Segmentation fault      $lstopo --xml &quot;$srcdir&quot;/&quot;$1&quot; &quot;$file&quot;
<br>
FAIL: 8em64t-2mi2ma2c.xml
<br>
========================================================
<br>
2 of 4 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
make[4]: *** [check-TESTS] Error 1
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1739/hwloc/hwloc-1.0a1r1739/_build/tests/xml'
<br>
make[3]: *** [check-am] Error 2
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1739/hwloc/hwloc-1.0a1r1739/_build/tests/xml'
<br>
make[2]: *** [check-recursive] Error 1
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1739/hwloc/hwloc-1.0a1r1739/_build/tests'
<br>
make[1]: *** [check-recursive] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1739/hwloc/hwloc-1.0a1r1739/_build'
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
<li><strong>Next message:</strong> <a href="0681.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1740)"</a>
<li><strong>Previous message:</strong> <a href="0679.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1733)"</a>
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
