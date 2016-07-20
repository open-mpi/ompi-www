<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.3.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 08:33:57 2011" -->
<!-- isoreceived="20111213133357" -->
<!-- sent="Tue, 13 Dec 2011 14:33:51 +0100" -->
<!-- isosent="20111213133351" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.3.1rc1 released" -->
<!-- id="4EE7543F.2050908_at_inria.fr" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.3.1rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 08:33:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0029.php">Brice Goglin: "[hwloc-announce] hwloc 1.3.1rc2"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2011/11/0027.php">Brice Goglin: "[hwloc-announce] hwloc@SC11"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the first
<br>
release candidate of version 1.3.1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.3.1 is a bug fix release which addresses all known bugs in the
<br>
v1.3 serie. In the meantime, we are preparing hwloc v1.4 which will
<br>
bring new features.
<br>
<p>The following is a summary of the changes since v1.3:
<br>
* Fix pciutils detection with pkg-config when not installed in standard
<br>
&nbsp;&nbsp;directories.
<br>
* Fix visibility options detection with the Solaris Studio compiler.
<br>
&nbsp;&nbsp;Thanks to Igor Gali&#196;&#135; and Terry Dontje for reporting the problems.
<br>
* Print a short summary at the end of the configure output. Thanks to
<br>
&nbsp;&nbsp;Stefan Eilemann for the suggestion.
<br>
* Add --disable-libnuma configure option to disable libnuma-based
<br>
&nbsp;&nbsp;memory binding support on Linux.  Thanks to Rayson Ho for the
<br>
&nbsp;&nbsp;suggestion.
<br>
* Make hwloc's configure script properly obey $PKG_CONFIG.  Thanks to
<br>
&nbsp;&nbsp;Nathan Phillip Brink for raising the issue.
<br>
<p><pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0029.php">Brice Goglin: "[hwloc-announce] hwloc 1.3.1rc2"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2011/11/0027.php">Brice Goglin: "[hwloc-announce] hwloc@SC11"</a>
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
