<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.9.1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 09:34:15 2014" -->
<!-- isoreceived="20140828133415" -->
<!-- sent="Thu, 28 Aug 2014 15:34:05 +0200" -->
<!-- isosent="20140828133405" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.9.1 released" -->
<!-- id="53FF2FCD.5090203_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.9.1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-28 09:34:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2014/09/0071.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.10rc1 released"</a>
<li><strong>Previous message:</strong> <a href="0069.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.9.1rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the release
<br>
of v1.9.1:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.9.1 is a bug fix release which addresses all known bugs in the
<br>
v1.9 series.
<br>
<p>The following is a summary of the changes since v1.9:
<br>
<p>* Fix a crash when the PCI locality is invalid. Attach to the root object
<br>
&nbsp;&nbsp;instead. Thanks to Nicolas Denoyelle for reporting the issue.
<br>
* Fix -f in lstopo manpage. Thanks to Jirka Hladky for reporting the issue.
<br>
* Fix hwloc_obj_type_sscanf() and others when strncasecmp() is not properly
<br>
&nbsp;&nbsp;available. Thanks to Nick Papior Andersen for reporting the problem.
<br>
* Mark Linux file descriptors as close-on-exec to avoid leaks on exec.
<br>
* Fix some minor memory leaks.
<br>
<p>There are no changes since v1.9.1rc1.
<br>
<p><pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2014/09/0071.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.10rc1 released"</a>
<li><strong>Previous message:</strong> <a href="0069.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.9.1rc1 released"</a>
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
