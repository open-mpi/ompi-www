<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.2rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 13:17:23 2011" -->
<!-- isoreceived="20110406171723" -->
<!-- sent="Wed, 06 Apr 2011 19:17:17 +0200" -->
<!-- isosent="20110406171717" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.2rc1 released" -->
<!-- id="4D9CA01D.20707_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.2rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 13:17:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0016.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.2 released"</a>
<li><strong>Previous message:</strong> <a href="0014.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.1.2 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the first release
<br>
candidate of v1.2:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a> 
<br>
<p>v1.2 is a major new release series for hwloc.  It includes many new features
<br>
and changes over the v1.1.x series.
<br>
The just-released v1.1.2 is expected to be the last release of its series
<br>
(see <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2011/04/0014.php">http://www.open-mpi.org/community/lists/hwloc-announce/2011/04/0014.php</a>).
<br>
<p>The following is a summary of the changes since the v1.1 series:
<br>
<p>* Major features
<br>
&nbsp;&nbsp;+ Expose latency matrices in the API as an array of distance structures
<br>
&nbsp;&nbsp;&nbsp;&nbsp;within objects. Add several helpers to find distances.
<br>
&nbsp;&nbsp;+ Add hwloc_topology_set_distance_matrix() and environment variables
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to provide a matrix of distances between a given set of objects.
<br>
&nbsp;&nbsp;+ Add hwloc_get_last_cpu_location() and hwloc_get_proc_last_cpu_location()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to retrieve the processors where a process or thread recently ran.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Add the corresponding --get-last-cpu-location option to hwloc-bind.
<br>
&nbsp;&nbsp;+ Add hwloc_topology_restrict() to restrict an existing topology to a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;given cpuset.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Add the corresponding --restrict option to lstopo.
<br>
* Minor API updates
<br>
&nbsp;&nbsp;+ Add hwloc_bitmap_list_sscanf/snprintf/asprintf to convert between bitmaps
<br>
&nbsp;&nbsp;&nbsp;&nbsp;and strings such as 4-5,7-9,12,15-
<br>
&nbsp;&nbsp;+ hwloc_bitmap_set/clr_range() now support infinite ranges.
<br>
&nbsp;&nbsp;+ Clarify the difference between inserting Misc objects by cpuset or by
<br>
&nbsp;&nbsp;&nbsp;&nbsp;parent.
<br>
&nbsp;&nbsp;+ hwloc_insert_misc_object_by_cpuset() now returns NULL in case of error.
<br>
* Discovery improvements
<br>
&nbsp;&nbsp;+ x86 backend (for freebsd): add x2APIC support
<br>
&nbsp;&nbsp;+ Support standard device-tree phandle, to get better support on e.g. ARM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;systems providing it.
<br>
&nbsp;&nbsp;+ Detect cache size on AIX. Thanks Christopher and IBM.
<br>
&nbsp;&nbsp;+ Improve grouping to support asymmetric topologies.
<br>
* Tools
<br>
&nbsp;&nbsp;+ Command-line tools now support &quot;all&quot; and &quot;root&quot; special locations
<br>
&nbsp;&nbsp;&nbsp;&nbsp;consisting in the entire topology, as well as type names with depth
<br>
&nbsp;&nbsp;&nbsp;&nbsp;attributes such as L2 or Group4.
<br>
&nbsp;&nbsp;+ hwloc-calc improvements:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Add --number-of/-N option to report the number of objects of a given
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type or depth.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- -I is now equivalent to --intersect for listing the indexes of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;objects of a given type or depth that intersects the input.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Add -H to report the output as a hierarchical combination of types
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and depths.
<br>
&nbsp;&nbsp;+ Add --thissystem to lstopo.
<br>
&nbsp;&nbsp;+ Add lstopo-win, a console-less lstopo variant on Windows.
<br>
* Miscellaneous
<br>
&nbsp;&nbsp;+ Remove C99 usage from code base.
<br>
&nbsp;&nbsp;+ Rename hwloc-gather-topology.sh into hwloc-gather-topology
<br>
<p><pre>
--
Brice Goglin
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0016.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.2 released"</a>
<li><strong>Previous message:</strong> <a href="0014.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.1.2 released"</a>
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
