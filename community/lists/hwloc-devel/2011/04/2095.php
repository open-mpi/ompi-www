<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 21:02:38 2011" -->
<!-- isoreceived="20110405010238" -->
<!-- sent="Mon, 4 Apr 2011 21:02:37 -0400" -->
<!-- isosent="20110405010237" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="201104050102.p3512bHI029490_at_eddie.osl.iu.edu" -->
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
<strong>Date:</strong> 2011-04-04 21:02:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2096.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2rc2r3386)"</a>
<li><strong>Previous message:</strong> <a href="2094.php">Jeff Squyres: "[hwloc-devel] Nightly tarballs: now with extra v1.2 goodness!"</a>
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
<p>Start time: Mon Apr  4 21:01:01 EDT 2011
<br>
End time:   Mon Apr  4 21:02:37 EDT 2011
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
config.status: creating hwloc.pc
<br>
config.status: creating tests/Makefile
<br>
config.status: creating tests/linux/Makefile
<br>
config.status: creating tests/linux/gather/Makefile
<br>
config.status: creating tests/xml/Makefile
<br>
config.status: creating tests/ports/Makefile
<br>
config.status: creating tests/linux/hwloc-gather-topology
<br>
config.status: creating tests/linux/gather/test-gather-topology.sh
<br>
config.status: creating tests/linux/test-topology.sh
<br>
config.status: creating tests/xml/test-topology.sh
<br>
config.status: creating utils/test-hwloc-distrib.sh
<br>
config.status: creating include/private/autogen/config.h
<br>
config.status: creating include/hwloc/autogen/config.h
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
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3387/hwloc/hwloc-1.3a1r3387/_build'
<br>
Making all in src
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3387/hwloc/hwloc-1.3a1r3387/_build/src'
<br>
&nbsp;&nbsp;CC     topology.lo
<br>
&nbsp;&nbsp;CC     traversal.lo
<br>
&nbsp;&nbsp;CC     distances.lo
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
&nbsp;&nbsp;CC     topology-libpci.lo
<br>
../../src/topology-libpci.c: In function `hwloc_look_libpci':
<br>
../../src/topology-libpci.c:594: error: `PCI_LOOKUP_NO_NUMBERS' undeclared (first use in this function)
<br>
../../src/topology-libpci.c:594: error: (Each undeclared identifier is reported only once
<br>
../../src/topology-libpci.c:594: error: for each function it appears in.)
<br>
../../src/topology-libpci.c:595: error: too few arguments to function `pci_lookup_name'
<br>
../../src/topology-libpci.c:601: error: too few arguments to function `pci_lookup_name'
<br>
../../src/topology-libpci.c:607: error: too few arguments to function `pci_lookup_name'
<br>
make[2]: *** [topology-libpci.lo] Error 1
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3387/hwloc/hwloc-1.3a1r3387/_build/src'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3387/hwloc/hwloc-1.3a1r3387/_build'
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
<li><strong>Next message:</strong> <a href="2096.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2rc2r3386)"</a>
<li><strong>Previous message:</strong> <a href="2094.php">Jeff Squyres: "[hwloc-devel] Nightly tarballs: now with extra v1.2 goodness!"</a>
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
