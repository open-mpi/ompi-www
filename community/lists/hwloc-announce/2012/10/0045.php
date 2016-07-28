<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.5.1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 17 12:57:25 2012" -->
<!-- isoreceived="20121017165725" -->
<!-- sent="Wed, 17 Oct 2012 18:57:15 +0200" -->
<!-- isosent="20121017165715" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.5.1 released" -->
<!-- id="507EE36B.0_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.5.1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-17 12:57:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/11/0046.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6rc1 released"</a>
<li><strong>Previous message:</strong> <a href="0044.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.5.1rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the release
<br>
of v1.5.1:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.5.1 is a bug fix release which addresses all known bugs in the
<br>
v1.5 serie.
<br>
<p>* Fix block OS device detection on Linux kernel 3.3 and later.
<br>
&nbsp;&nbsp;Thanks to Guy Streeter for reporting the problem and testing the fix.
<br>
* Fix the cpuid code in the x86 backend (for FreeBSD). Thanks to
<br>
&nbsp;&nbsp;Sebastian Kuzminsky for reporting problems and testing patches.
<br>
* Fix 64bit detection on FreeBSD.
<br>
* Fix some corner cases in the management of the thissystem flag with
<br>
&nbsp;&nbsp;respect to topology flags and environment variables.
<br>
* Fix some corner cases in command-line parsing checks in hwloc-distrib
<br>
&nbsp;&nbsp;and hwloc-distances.
<br>
* Make sure we do not miss some block OS devices on old Linux kernels
<br>
&nbsp;&nbsp;when a single PCI device has multiple IDE hosts/devices behind it.
<br>
* Do not disable I/O devices or instruction caches in hwloc-assembler output.
<br>
<p><pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/11/0046.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6rc1 released"</a>
<li><strong>Previous message:</strong> <a href="0044.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.5.1rc1 released"</a>
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
