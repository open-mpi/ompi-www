<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan  2 21:02:33 2010" -->
<!-- isoreceived="20100103020233" -->
<!-- sent="Sat, 2 Jan 2010 21:02:33 -0500" -->
<!-- isosent="20100103020233" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="201001030202.o0322Xaa020497_at_eddie.osl.iu.edu" -->
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
<strong>Date:</strong> 2010-01-02 21:02:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0556.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1557)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/12/0554.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1548)"</a>
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
<p>Start time: Sat Jan  2 21:01:04 EST 2010
<br>
End time:   Sat Jan  2 21:02:33 EST 2010
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
checking whether function ffs is declared... yes
<br>
checking for ffsl... yes
<br>
checking whether function ffsl is declared... yes
<br>
checking for fls... no
<br>
checking for flsl... no
<br>
checking for clz... no
<br>
checking for clzl... no
<br>
checking for openat... no
<br>
checking whether numa_bitmask_alloc is declared... no
<br>
checking pthread_np.h usability... no
<br>
checking pthread_np.h presence... no
<br>
checking for pthread_np.h... no
<br>
checking whether pthread_setaffinity_np is declared... no
<br>
checking whether pthread_getaffinity_np is declared... no
<br>
checking for sched_setaffinity... yes
<br>
checking for sys/cpuset.h... no
<br>
checking for xmllint... xmllint
<br>
configure: creating ./config.status
<br>
config.status: creating hwloc.pc
<br>
config.status: creating doc/doxygen-config.cfg
<br>
config.status: creating Makefile
<br>
config.status: creating doc/Makefile
<br>
config.status: creating include/Makefile
<br>
config.status: creating src/Makefile
<br>
config.status: creating tests/Makefile
<br>
config.status: creating tests/linux/Makefile
<br>
config.status: creating tests/linux/gather-topology.sh
<br>
config.status: creating tests/linux/test-topology.sh
<br>
config.status: creating tests/xml/Makefile
<br>
config.status: creating tests/xml/test-topology.sh
<br>
config.status: creating tests/ports/Makefile
<br>
config.status: creating utils/Makefile
<br>
config.status: creating utils/test-hwloc-distrib.sh
<br>
config.status: creating include/private/config.h
<br>
config.status: creating include/hwloc/config.h
<br>
config.status: executing depfiles commands
<br>
config.status: executing libtool commands
<br>
config.status: executing chmoding-scripts commands
<br>
make[1]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1550/hwloc/hwloc-1.0a1r1550/_build'
<br>
Making all in src
<br>
make[2]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1550/hwloc/hwloc-1.0a1r1550/_build/src'
<br>
&nbsp;&nbsp;CC     topology.lo
<br>
In file included from ../../src/topology.c:22:
<br>
../../include/private/private.h:256: error: syntax error before numeric constant
<br>
../../include/private/private.h:256: error: `hwloc_snprintf' declared as function returning a function
<br>
make[2]: *** [topology.lo] Error 1
<br>
make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1550/hwloc/hwloc-1.0a1r1550/_build/src'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1550/hwloc/hwloc-1.0a1r1550/_build'
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
<li><strong>Next message:</strong> <a href="0556.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1557)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/12/0554.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1548)"</a>
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
