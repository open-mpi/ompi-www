<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 28 21:02:46 2010" -->
<!-- isoreceived="20101029010246" -->
<!-- sent="Thu, 28 Oct 2010 21:02:45 -0400" -->
<!-- isosent="20101029010245" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="201010290102.o9T12jBl006271_at_eddie.osl.iu.edu" -->
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
<strong>Date:</strong> 2010-10-28 21:02:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1389.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Previous message:</strong> <a href="1387.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2649"</a>
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
<p>Start time: Thu Oct 28 21:01:04 EDT 2010
<br>
End time:   Thu Oct 28 21:02:45 EDT 2010
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
config.status: creating Makefile
<br>
config.status: creating include/Makefile
<br>
config.status: creating src/Makefile
<br>
config.status: creating doc/Makefile
<br>
config.status: creating doc/doxygen-config.cfg
<br>
config.status: creating utils/Makefile
<br>
config.status: creating hwloc.pc
<br>
config.status: creating tests/Makefile
<br>
config.status: creating tests/linux/Makefile
<br>
config.status: creating tests/xml/Makefile
<br>
config.status: creating tests/ports/Makefile
<br>
config.status: creating tests/linux/gather-topology.sh
<br>
config.status: creating tests/linux/test-topology.sh
<br>
config.status: creating tests/xml/test-topology.sh
<br>
config.status: creating utils/test-hwloc-distrib.sh
<br>
config.status: creating include/private/config.h
<br>
config.status: creating include/hwloc/config.h
<br>
config.status: linking ../src/topology.c to tests/ports/topology.c
<br>
config.status: linking ../src/traversal.c to tests/ports/traversal.c
<br>
config.status: linking ../src/topology-synthetic.c to tests/ports/topology-synthetic.c
<br>
config.status: linking ../src/topology-solaris.c to tests/ports/topology-solaris.c
<br>
config.status: linking ../src/topology-aix.c to tests/ports/topology-aix.c
<br>
config.status: linking ../src/topology-osf.c to tests/ports/topology-osf.c
<br>
config.status: linking ../src/topology-windows.c to tests/ports/topology-windows.c
<br>
config.status: linking ../src/topology-darwin.c to tests/ports/topology-darwin.c
<br>
config.status: linking ../src/topology-freebsd.c to tests/ports/topology-freebsd.c
<br>
config.status: linking ../src/topology-hpux.c to tests/ports/topology-hpux.c
<br>
config.status: executing depfiles commands
<br>
config.status: executing chmoding-scripts commands
<br>
config.status: executing libtool commands
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2651/hwloc/hwloc-1.1a1r2651/_build'
<br>
Making all in src
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2651/hwloc/hwloc-1.1a1r2651/_build/src'
<br>
&nbsp;&nbsp;CC     topology.lo
<br>
&nbsp;&nbsp;CC     traversal.lo
<br>
&nbsp;&nbsp;CC     topology-synthetic.lo
<br>
&nbsp;&nbsp;CC     bind.lo
<br>
&nbsp;&nbsp;CC     cpuset.lo
<br>
&nbsp;&nbsp;CC     misc.lo
<br>
&nbsp;&nbsp;CC     topology-xml.lo
<br>
&nbsp;&nbsp;CC     topology-linux.lo
<br>
../../src/topology-linux.c: In function `hwloc_linux_set_area_membind':
<br>
../../src/topology-linux.c:929: error: `MPOL_MF_MOVE' undeclared (first use in this function)
<br>
../../src/topology-linux.c:929: error: (Each undeclared identifier is reported only once
<br>
../../src/topology-linux.c:929: error: for each function it appears in.)
<br>
make[2]: *** [topology-linux.lo] Error 1
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2651/hwloc/hwloc-1.1a1r2651/_build/src'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2651/hwloc/hwloc-1.1a1r2651/_build'
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
<li><strong>Next message:</strong> <a href="1389.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Previous message:</strong> <a href="1387.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2649"</a>
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
