<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.1.2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 12:13:17 2011" -->
<!-- isoreceived="20110406161317" -->
<!-- sent="Wed, 06 Apr 2011 18:13:12 +0200" -->
<!-- isosent="20110406161312" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.1.2 released" -->
<!-- id="4D9C9118.2080303_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.1.2 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 12:13:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0015.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.2rc1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2011/03/0013.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.1.2rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the release of
<br>
v1.1.2:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.1.2 is a minor bug fix release.  All hwloc users are encouraged to
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
**Fix and document the behavior of hwloc_topology_set_synthetic() in case
<br>
&nbsp;&nbsp;of invalid argument. Thanks to Guy Streeter for reporting the problem.
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
<p>Several minor changes were applied since the first release candidate,
<br>
including the ** line above.
<br>
<p><pre>
--
Brice Goglin
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0015.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.2rc1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2011/03/0013.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.1.2rc1 released"</a>
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
