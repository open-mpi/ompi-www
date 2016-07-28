<?
$subject_val = "[hwloc-devel] distances branch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 11 11:37:43 2011" -->
<!-- isoreceived="20110111163743" -->
<!-- sent="Tue, 11 Jan 2011 17:37:36 +0100" -->
<!-- isosent="20110111163736" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] distances branch" -->
<!-- id="4D2C8750.7030608_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] distances branch<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-11 11:37:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1809.php">Jeff Squyres: "Re: [hwloc-devel] Docs updates"</a>
<li><strong>Previous message:</strong> <a href="1807.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc6r3052)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1815.php">Samuel Thibault: "Re: [hwloc-devel] distances branch"</a>
<li><strong>Maybe reply:</strong> <a href="1815.php">Samuel Thibault: "Re: [hwloc-devel] distances branch"</a>
<li><strong>Maybe reply:</strong> <a href="1825.php">Samuel Thibault: "Re: [hwloc-devel] distances branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>The &quot;distances&quot; branch will be candidate for merging into trunk in the
<br>
near future.
<br>
<p>As of hwloc 1.1, we read NUMA distances from the OS/BIOS on Linux,
<br>
Solaris and OSF. It gives us a distance matrix that we use to group
<br>
objects that are physically closer (see tests/linux/16ia64-8n2s.output
<br>
or tests/linux/256ia64-64n2s2c.output).
<br>
<p>Here's what's new in the distances branch:
<br>
<p>1) We still get the same info from the OS/BIOS. But we expose it to the
<br>
application. So in the interface, any object may contain a distance
<br>
matrix between its children (or grand-children or ...). Usually, the
<br>
root object contains the distances between all NUMA nodes. But it could
<br>
also be a socket containing the distances between all its cores. The
<br>
distance are normalized floats. Distance to myself is 1. Distance to
<br>
others is &gt;=1.
<br>
<p>The structure looks like this:
<br>
<p>struct hwloc_distances_s {
<br>
&nbsp;&nbsp;unsigned relative_depth;      /**&lt; \brief Relative depth of the considered objects
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* below the object containing this distance information. */
<br>
&nbsp;&nbsp;unsigned nbobjs;              /**&lt; \brief Number of objects considered in the matrix.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* It is the number of descendant objects at \p relative_depth
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* below the containing object.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* It corresponds to the result of hwloc_get_nbobjs_inside_cpuset_by_depth. */
<br>
<p>&nbsp;&nbsp;float *latency;               /**&lt; \brief Matrix of latencies between objects, stored as a one-dimension array.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Values are normalized to get 1.0 as the minimal value in the matrix.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Latency from i-th to j-th object is stored in slot i*nbobjs+j. */
<br>
&nbsp;&nbsp;float latency_max;            /**&lt; \brief The maximal value in the matrix. */
<br>
&nbsp;&nbsp;float latency_base;           /**&lt; \brief The multiplier that should be applied to matrix values
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* to retrieve the original OS-provided latencies.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Usually 10 on Linux since ACPI SLIT uses 10 for local latency.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
};
<br>
<p><p><p>2) On some machines, the OS/BIOS doesn't provide any distances. It's
<br>
still possible to feed hwloc with user-given distances between topology
<br>
init and load with the following function (or with an environment variable):
<br>
<p>int hwloc_topology_set_distance_matrix(hwloc_topology_t topology,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_obj_type_t type, unsigned nbobjs,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned *os_index, float *distances);
<br>
<p><p><p><p>Here's what's *not* in the branch:
<br>
<p>1) Right now, the grouping code needs very &quot;clean&quot; distances when
<br>
grouping objects (it doesn't know that 2.0 and 2.05 are likely equal)
<br>
but we could certainly make this less strict. You could even imagine
<br>
benchmarking the machine to measure latencies between all cores and
<br>
having hwloc generate the complete hierarchy using distances (instead of
<br>
discover sockets and cores from the OS). Can be added later.
<br>
<p>2) All the above is actually about latencies between objects. It does
<br>
not cover the interconnection graph (or the number of hops) between
<br>
objects. This could also be represented as a distance matrix like above
<br>
(with integer values starting at 0 instead of float normalized to 1.0),
<br>
but it would be meaningless on current HyperTransport generations
<br>
(there's a single route between HT localities, it may or may not be the
<br>
shortest physical path between them, and it may vary with the type of
<br>
packet, ...). More thinking needed here, and it may make us revise the
<br>
&quot;latency&quot; names in the above &quot;struct hwloc_distances_s&quot;.
<br>
<p>Hope all this makes sense, any comments appreciated.
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1809.php">Jeff Squyres: "Re: [hwloc-devel] Docs updates"</a>
<li><strong>Previous message:</strong> <a href="1807.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc6r3052)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1815.php">Samuel Thibault: "Re: [hwloc-devel] distances branch"</a>
<li><strong>Maybe reply:</strong> <a href="1815.php">Samuel Thibault: "Re: [hwloc-devel] distances branch"</a>
<li><strong>Maybe reply:</strong> <a href="1825.php">Samuel Thibault: "Re: [hwloc-devel] distances branch"</a>
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
