<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 21:02:37 2010" -->
<!-- isoreceived="20100227020237" -->
<!-- sent="Fri, 26 Feb 2010 21:02:36 -0500" -->
<!-- isosent="20100227020236" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="201002270202.o1R22aYn008283_at_eddie.osl.iu.edu" -->
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
<strong>Date:</strong> 2010-02-26 21:02:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0698.php">Jeff Squyres: "[hwloc-devel] Fwd: Create success (hwloc r1.0a1r1789)"</a>
<li><strong>Previous message:</strong> <a href="0696.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_API_VERSION [hwloc-svn] svn:hwloc r1741"</a>
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
<p>Start time: Fri Feb 26 21:01:05 EST 2010
<br>
End time:   Fri Feb 26 21:02:36 EST 2010
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
topology.c: In function `hwloc_topology_set_flags':
<br>
topology.c:1707: error: dereferencing pointer to incomplete type
<br>
topology.c: In function `hwloc_topology_ignore_type':
<br>
topology.c:1726: error: dereferencing pointer to incomplete type
<br>
topology.c: In function `hwloc_topology_ignore_type_keep_structure':
<br>
topology.c:1744: error: dereferencing pointer to incomplete type
<br>
topology.c: In function `hwloc_topology_ignore_all_keep_structure':
<br>
topology.c:1754: error: dereferencing pointer to incomplete type
<br>
topology.c: In function `hwloc_topology_clear':
<br>
topology.c:1771: error: dereferencing pointer to incomplete type
<br>
topology.c:1772: error: dereferencing pointer to incomplete type
<br>
topology.c:1773: error: dereferencing pointer to incomplete type
<br>
topology.c: In function `hwloc_topology_load':
<br>
topology.c:1789: error: dereferencing pointer to incomplete type
<br>
topology.c:1792: error: dereferencing pointer to incomplete type
<br>
topology.c:1830: error: dereferencing pointer to incomplete type
<br>
topology.c:1833: error: dereferencing pointer to incomplete type
<br>
topology.c:1837: error: dereferencing pointer to incomplete type
<br>
topology.c:1850: error: dereferencing pointer to incomplete type
<br>
topology.c:1857: error: dereferencing pointer to incomplete type
<br>
topology.c: At top level:
<br>
topology.c:1863: warning: no previous prototype for 'hwloc_topology_is_thissystem'
<br>
topology.c: In function `hwloc_topology_is_thissystem':
<br>
topology.c:1864: error: dereferencing pointer to incomplete type
<br>
topology.c: At top level:
<br>
topology.c:1869: warning: no previous prototype for 'hwloc_topology_get_depth'
<br>
topology.c: In function `hwloc_topology_get_depth':
<br>
topology.c:1870: error: dereferencing pointer to incomplete type
<br>
topology.c: In function `hwloc__check_children':
<br>
topology.c:1903: warning: assignment makes pointer from integer without a cast
<br>
topology.c:1911: warning: implicit declaration of function `hwloc_cpuset_first'
<br>
topology.c: In function `hwloc_topology_check':
<br>
topology.c:1969: warning: assignment makes pointer from integer without a cast
<br>
topology.c:1994: warning: assignment makes pointer from integer without a cast
<br>
topology.c:2004: warning: assignment makes pointer from integer without a cast
<br>
topology.c:2009: warning: assignment makes pointer from integer without a cast
<br>
topology.c:2016: warning: assignment makes pointer from integer without a cast
<br>
topology.c: At top level:
<br>
topology.c:2027: warning: no previous prototype for 'hwloc_topology_get_support'
<br>
topology.c: In function `hwloc_topology_get_support':
<br>
topology.c:2028: error: dereferencing pointer to incomplete type
<br>
make[4]: *** [libhwloc_ports_la-topology.lo] Error 1
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1783/hwloc/hwloc-1.0a1r1783/_build/tests/ports'
<br>
make[3]: *** [check-am] Error 2
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1783/hwloc/hwloc-1.0a1r1783/_build/tests/ports'
<br>
make[2]: *** [check-recursive] Error 1
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1783/hwloc/hwloc-1.0a1r1783/_build/tests'
<br>
make[1]: *** [check-recursive] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1783/hwloc/hwloc-1.0a1r1783/_build'
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
<li><strong>Next message:</strong> <a href="0698.php">Jeff Squyres: "[hwloc-devel] Fwd: Create success (hwloc r1.0a1r1789)"</a>
<li><strong>Previous message:</strong> <a href="0696.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_API_VERSION [hwloc-svn] svn:hwloc r1741"</a>
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
