<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.7.2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  3 05:45:52 2013" -->
<!-- isoreceived="20130903094552" -->
<!-- sent="Tue, 03 Sep 2013 11:45:50 +0200" -->
<!-- isosent="20130903094550" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.7.2 released" -->
<!-- id="5225AFCE.9090104_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.7.2 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-03 05:45:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/11/0062.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.8rc1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/08/0060.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.7.2rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the release
<br>
of v1.7.2:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.7.2 is a bug fix release which addresses all known bugs in the
<br>
v1.7 series.
<br>
<p>The following is a summary of the changes since v1.7.1:
<br>
<p>* Do not create invalid block OS devices on very old Linux kernel such
<br>
&nbsp;&nbsp;as RHEL4 2.6.9.
<br>
* Fix PCI subvendor/device IDs.
<br>
* Fix the management of Misc objects inserted by parent.
<br>
&nbsp;&nbsp;Thanks to Jirka Hladky for reporting the problem.
<br>
* Add a Port&lt;n&gt;State into attribute to OpenFabrics OS devices.
<br>
* Add a MICSerialNumber info attribute to Xeon PHI/MIC OS devices.
<br>
* Improve verbose error messages when failing to load from XML.
<br>
<p>The only difference with rc1 is a fix for a memory leak introduced in rc1.
<br>
<pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/11/0062.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.8rc1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/08/0060.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.7.2rc1 released"</a>
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
