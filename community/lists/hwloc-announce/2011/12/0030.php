<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.3.1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 20 07:45:43 2011" -->
<!-- isoreceived="20111220124543" -->
<!-- sent="Tue, 20 Dec 2011 13:45:38 +0100" -->
<!-- isosent="20111220124538" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.3.1 released" -->
<!-- id="4EF08372.4090402_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.3.1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-20 07:45:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/01/0031.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4rc1 released"</a>
<li><strong>Previous message:</strong> <a href="0029.php">Brice Goglin: "[hwloc-announce] hwloc 1.3.1rc2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the release of v1.3.1
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
* Fix support for old Linux sched.h headers such as those found
<br>
&nbsp;&nbsp;on Red Hat 8. Thanks to Paul H. Hargrove for reporting the problems.
<br>
* Fix inline and attribute support for Solaris compilers. Thanks to
<br>
&nbsp;&nbsp;Dave Love for reporting the problems.
<br>
* Print a short summary at the end of the configure output. Thanks to
<br>
&nbsp;&nbsp;Stefan Eile1.mann for the suggestion.
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
* Silence some harmless pciutils warnings, thanks to Paul H. Hargrove
<br>
&nbsp;&nbsp;for reporting the problem.
<br>
* Fix the documentation with respect to hwloc_pid_t and hwloc_thread_t
<br>
&nbsp;&nbsp;being either pid_t and pthread_t on Unix, or HANDLE on Windows.
<br>
<p>Changes since v1.3.1rc2 are mainly cosmetic.
<br>
<p><pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/01/0031.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4rc1 released"</a>
<li><strong>Previous message:</strong> <a href="0029.php">Brice Goglin: "[hwloc-announce] hwloc 1.3.1rc2"</a>
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
