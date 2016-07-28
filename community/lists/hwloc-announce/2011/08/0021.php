<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.2.1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 19 10:50:49 2011" -->
<!-- isoreceived="20110819145049" -->
<!-- sent="Fri, 19 Aug 2011 16:50:43 +0200" -->
<!-- isosent="20110819145043" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.2.1 released" -->
<!-- id="4E4E7843.3030405_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.2.1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-19 10:50:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0022.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.3rc1 released"</a>
<li><strong>Previous message:</strong> <a href="0020.php">Samuel Thibault: "Re: [hwloc-announce] Hardware Locality (hwloc) v1.2.1rc3 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the release of v1.2.1:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.2.1 is a bug fix release which addresses all known bugs in the
<br>
v1.2 serie. All hwloc users are encouraged to upgrade when possible.
<br>
<p>The following is a summary of the changes since v1.2:
<br>
<p>* Improve support of AMD Bulldozer &quot;Compute-Unit&quot; modules by detecting
<br>
&nbsp;&nbsp;logical processors with different core IDs on Linux.
<br>
* Fix hwloc-ps crash when listing processes from another Linux cpuset.
<br>
&nbsp;&nbsp;Thanks to Carl Smith for reporting the problem.
<br>
* Fix build on AIX and Solaris. Thanks to Carl Smith and Andreas Kupries
<br>
&nbsp;&nbsp;for reporting the problems.
<br>
* Fix cache size detection on Darwin. Thanks to Erkcan &#214;zcan for reporting
<br>
&nbsp;&nbsp;the problem.
<br>
* Make configure fail if --enable-xml or --enable-cairo is given and
<br>
&nbsp;&nbsp;proper support cannot be found. Thanks to Andreas Kupries for reporting
<br>
&nbsp;&nbsp;the XML problem.
<br>
* Fix spurious L1 cache detection on AIX. Thanks to Hendryk Bockelmann
<br>
&nbsp;&nbsp;for reporting the problem.
<br>
* Fix hwloc_get_last_cpu_location(THREAD) on Linux. Thanks to Gabriele
<br>
&nbsp;&nbsp;Fatigati for reporting the problem.
<br>
* Fix object distance detection on Solaris.
<br>
* Add pthread_self weak symbol to ease static linking.
<br>
* Minor documentation fixes.
<br>
<p>We are now preparing the release of v1.3 which will bring new features.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0022.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.3rc1 released"</a>
<li><strong>Previous message:</strong> <a href="0020.php">Samuel Thibault: "Re: [hwloc-announce] Hardware Locality (hwloc) v1.2.1rc3 released"</a>
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
