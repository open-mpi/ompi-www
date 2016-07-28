<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.1.2rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 31 16:35:28 2011" -->
<!-- isoreceived="20110331203528" -->
<!-- sent="Thu, 31 Mar 2011 22:35:23 +0200" -->
<!-- isosent="20110331203523" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.1.2rc1 released" -->
<!-- id="4D94E58B.1050402_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.1.2rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-31 16:35:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2011/04/0014.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.1.2 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2011/01/0012.php">Jeff Squyres: "[hwloc-announce] Hardware Locality (hwloc) v1.1.1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the release of
<br>
v1.1.2rc1:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>This is the first release candidate for v1.1.2 which should be the last
<br>
bug fix release in the v1.1 serie. All hwloc users are encouraged to
<br>
upgrade when possible.
<br>
<p>hwloc provides command line tools and a C API to obtain the hierarchical
<br>
map of key computing elements, such as: NUMA memory nodes, shared
<br>
caches, processor sockets, processor cores, and processor &quot;threads&quot;.
<br>
hwloc also gathers various attributes such as cache and memory
<br>
information, and is portable across a variety of different operating
<br>
systems and platforms.
<br>
<p>The following is a summary of the changes since v1.1.1:
<br>
<p>* Fix a segfault in the distance-based grouping code when some objects
<br>
&nbsp;&nbsp;are not placed in any group. Thanks to Bernd Kallies for reporting
<br>
&nbsp;&nbsp;the problem and providing a patch.
<br>
* Fix the command-line parsing of hwloc-bind --mempolicy interleave.
<br>
&nbsp;&nbsp;Thanks to Guy Streeter for reporting the problem.
<br>
* Stop truncating the output in hwloc_obj_attr_snprintf() and in the
<br>
&nbsp;&nbsp;corresponding lstopo output. Thanks to Guy Streeter for reporting the
<br>
&nbsp;&nbsp;problem.
<br>
* Fix object levels ordering in synthetic topologies.
<br>
* Fix potential incoherency between device tree and kernel information,
<br>
&nbsp;&nbsp;when SMT is disabled on Power machines.
<br>
* Add some verbose error message reporting when it looks like the OS
<br>
&nbsp;&nbsp;gives erroneous information.
<br>
* Do not include unistd.h and stdint.h in public headers on Windows.
<br>
* Move config.h files into their own subdirectories to avoid name
<br>
&nbsp;&nbsp;conflicts when AC_CONFIG_HEADERS adds -I's for them.
<br>
* Remove the use of declaring variables inside &quot;for&quot; loops.
<br>
* Some other minor fixes.
<br>
* Many minor documentation fixes.
<br>
<p><pre>
--
Brice Goglin
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2011/04/0014.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.1.2 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2011/01/0012.php">Jeff Squyres: "[hwloc-announce] Hardware Locality (hwloc) v1.1.1 released"</a>
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
