<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 21:02:57 2011" -->
<!-- isoreceived="20110219020257" -->
<!-- sent="Fri, 18 Feb 2011 21:02:56 -0500" -->
<!-- isosent="20110219020256" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="201102190202.p1J22uLr007698_at_eddie.osl.iu.edu" -->
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
<strong>Date:</strong> 2011-02-18 21:02:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1976.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3182)"</a>
<li><strong>Previous message:</strong> <a href="1974.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
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
<p>Start time: Fri Feb 18 21:01:05 EST 2011
<br>
End time:   Fri Feb 18 21:02:56 EST 2011
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
make[2]: Nothing to be done for `dvi'.
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3188/hwloc/hwloc-1.2a1r3188/_build/doc'
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3188/hwloc/hwloc-1.2a1r3188/_build'
<br>
make[2]: Nothing to be done for `dvi-am'.
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3188/hwloc/hwloc-1.2a1r3188/_build'
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3188/hwloc/hwloc-1.2a1r3188/_build'
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3188/hwloc/hwloc-1.2a1r3188/_build'
<br>
Making check in src
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3188/hwloc/hwloc-1.2a1r3188/_build/src'
<br>
make[2]: Nothing to be done for `check'.
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3188/hwloc/hwloc-1.2a1r3188/_build/src'
<br>
Making check in include
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3188/hwloc/hwloc-1.2a1r3188/_build/include'
<br>
make[2]: Nothing to be done for `check'.
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3188/hwloc/hwloc-1.2a1r3188/_build/include'
<br>
Making check in utils
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3188/hwloc/hwloc-1.2a1r3188/_build/utils'
<br>
make  check-TESTS
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3188/hwloc/hwloc-1.2a1r3188/_build/utils'
<br>
PASS: test-hwloc-distrib.sh
<br>
=============
<br>
1 test passed
<br>
=============
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3188/hwloc/hwloc-1.2a1r3188/_build/utils'
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3188/hwloc/hwloc-1.2a1r3188/_build/utils'
<br>
Making check in tests
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3188/hwloc/hwloc-1.2a1r3188/_build/tests'
<br>
Making check in ports
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3188/hwloc/hwloc-1.2a1r3188/_build/tests/ports'
<br>
make  libhwloc-ports.la
<br>
make[4]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3188/hwloc/hwloc-1.2a1r3188/_build/tests/ports'
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
topology-aix.c:30:27: sys/systemcfg.h: No such file or directory
<br>
topology-aix.c: In function `look_rset':
<br>
topology-aix.c:457: error: `_system_configuration' undeclared (first use in this function)
<br>
topology-aix.c:457: error: (Each undeclared identifier is reported only once
<br>
topology-aix.c:457: error: for each function it appears in.)
<br>
make[4]: *** [libhwloc_ports_la-topology-aix.lo] Error 1
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3188/hwloc/hwloc-1.2a1r3188/_build/tests/ports'
<br>
make[3]: *** [check-am] Error 2
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3188/hwloc/hwloc-1.2a1r3188/_build/tests/ports'
<br>
make[2]: *** [check-recursive] Error 1
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3188/hwloc/hwloc-1.2a1r3188/_build/tests'
<br>
make[1]: *** [check-recursive] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3188/hwloc/hwloc-1.2a1r3188/_build'
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
<li><strong>Next message:</strong> <a href="1976.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3182)"</a>
<li><strong>Previous message:</strong> <a href="1974.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
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
