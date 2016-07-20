<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.3rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 23 07:03:26 2011" -->
<!-- isoreceived="20110823110326" -->
<!-- sent="Tue, 23 Aug 2011 13:03:20 +0200" -->
<!-- isosent="20110823110320" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.3rc1 released" -->
<!-- id="4E5388F8.4020809_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.3rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-23 07:03:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2011/09/0023.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.2.2rc1 released"</a>
<li><strong>Previous message:</strong> <a href="0021.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.2.1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the first
<br>
release candidate for v1.3:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.3rc1 is the first milestone of a major feature release. The most
<br>
noticeable improvement is the addition of PCI objects to the topology.
<br>
Note that it requires pciutils development headers (libpci-dev or
<br>
pciutils-devel package depending on your platform).
<br>
<p>Although v1.3rc1 is only a prerelease, we felt it important to announce
<br>
the first in the series in order to gain feedback and widespread testing
<br>
before v1.3 goes final. Please try hwloc out on your system, read its
<br>
improved documentation, and send us your feedback. 
<br>
<p>Version 1.3.0
<br>
-------------
<br>
* Major features
<br>
&nbsp;&nbsp;+ Add I/O devices and bridges to the topology using the pciutils
<br>
&nbsp;&nbsp;&nbsp;&nbsp;library. Only enabled after setting the relevant flag with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_set_flags() before hwloc_topology_load(). See the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I/O Devices section in the documentation for details.
<br>
* Discovery improvements
<br>
&nbsp;&nbsp;+ Add associativity to the cache attributes.
<br>
&nbsp;&nbsp;+ Add support for s390/z11 &quot;books&quot; on Linux.
<br>
&nbsp;&nbsp;+ Add the HWLOC_GROUPING_ACCURACY environment variable to relax
<br>
&nbsp;&nbsp;&nbsp;&nbsp;distance-based grouping constraints. See the Environment Variables
<br>
&nbsp;&nbsp;&nbsp;&nbsp;section in the documentation for details about grouping behavior
<br>
&nbsp;&nbsp;&nbsp;&nbsp;and configuration.
<br>
&nbsp;&nbsp;+ Allow user-given distance matrices to remove or replace those
<br>
&nbsp;&nbsp;&nbsp;&nbsp;discovered by the OS backend.
<br>
* Minor API updates
<br>
&nbsp;&nbsp;+ Add hwloc_obj_add_info to customize object info attributes.
<br>
* Tools
<br>
&nbsp;&nbsp;+ lstopo now displays I/O devices by default. Several options are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;added to configure the I/O discovery.
<br>
&nbsp;&nbsp;+ hwloc-calc and hwloc-bind now accept I/O devices as input.
<br>
&nbsp;&nbsp;+ Add --restrict option to hwloc-calc and hwloc-distribute.
<br>
&nbsp;&nbsp;+ Add --sep option to change the output field separator in hwloc-calc.
<br>
&nbsp;&nbsp;+ Add --whole-system option to hwloc-ps.
<br>
<p><pre>
--
Brice Goglin
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2011/09/0023.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.2.2rc1 released"</a>
<li><strong>Previous message:</strong> <a href="0021.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.2.1 released"</a>
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
