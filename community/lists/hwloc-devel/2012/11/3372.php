<?
$subject_val = "[hwloc-devel] hwloc testing review";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  6 15:48:48 2012" -->
<!-- isoreceived="20121106204848" -->
<!-- sent="Tue, 06 Nov 2012 15:48:42 -0500" -->
<!-- isosent="20121106204842" -->
<!-- name="John Brier" -->
<!-- email="jbrier_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc testing review" -->
<!-- id="509977AA.3080808_at_redhat.com" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc testing review<br>
<strong>From:</strong> John Brier (<em>jbrier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-06 15:48:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3373.php">Brice Goglin: "Re: [hwloc-devel] hwloc testing review"</a>
<li><strong>Previous message:</strong> <a href="3371.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3373.php">Brice Goglin: "Re: [hwloc-devel] hwloc testing review"</a>
<li><strong>Reply:</strong> <a href="3373.php">Brice Goglin: "Re: [hwloc-devel] hwloc testing review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks. I've been using Linux since 2000 and supporting it with Red
<br>
Hat since 2007 and now I'm a Red Hat Quality Assurance Engineer.
<br>
<p>At Red Hat we use the 'make check' build target to test hwloc. I did a
<br>
review of what that target tests and what it doesn't and this is what I
<br>
found.
<br>
<p>Did I miss anything?
<br>
Are there are additional things that should be tested?
<br>
<p>For the binaries it would be useful for Red Hat (and maybe others) if we
<br>
could use the existing 'make check' build target to test *system
<br>
installed* binaries (aka the ones from our RPM) and not the source
<br>
distributed built ones. Does that seem like a feature that would be
<br>
useful for others and is it possible to add that support to the
<br>
associated autotools files?
<br>
<p><p>note the comments about untested binaries below
<br>
<p>= Binaries =
<br>
<p>[x] hwloc-assembler
<br>
&nbsp;&nbsp;&nbsp;- tested by utils/test-hwloc-assembler.sh
<br>
&nbsp;&nbsp;&nbsp;- test combines three XML files into one and compares it to a known
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;good XML output
<br>
[ ] hwloc-assembler-remote
<br>
&nbsp;&nbsp;&nbsp;- not tested but I can see why (requires more than one system)
<br>
[ ] hwloc-bind
<br>
&nbsp;&nbsp;&nbsp;- not tested. This seems important enough to test.
<br>
[x] hwloc-calc
<br>
&nbsp;&nbsp;&nbsp;- tested by utils/test-hwloc-calc.sh
<br>
&nbsp;&nbsp;&nbsp;- runs various hwloc-calc commands and compares them to a known good
<br>
output
<br>
[x] hwloc-distances
<br>
&nbsp;&nbsp;&nbsp;- tested by utils/test-hwloc-distances.sh
<br>
[x] hwloc-distrib
<br>
&nbsp;&nbsp;&nbsp;- runs various hwloc-distrib commands and compares them to known good
<br>
output
<br>
[x] hwloc-gather-topology
<br>
&nbsp;&nbsp;&nbsp;- tested by test-gather-topology.sh
<br>
&nbsp;&nbsp;&nbsp;- uses lstopo to save the topology to an xml file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uses hwlog-gather-topology to save system topology to a tarball
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extracts said tarball
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;runs lstopo with HWLOC_FSROOT= set to the path of the tarball
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_FSROOT= switches to reading the topology from the specified
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Linux filesystem root instead of the main file-system root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compares the first xml file to the last xml file
<br>
[x] hwloc-info
<br>
&nbsp;&nbsp;&nbsp;- tested by utils/hwloc-ls.sh
<br>
[x] hwloc-ls
<br>
&nbsp;&nbsp;&nbsp;- tested by utils/hwloc-ls.sh
<br>
[ ] hwloc-ps
<br>
&nbsp;&nbsp;&nbsp;- isn't tested and that seems like it would be easy to test. I would
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;be willing to take a stab at adding that support if that is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;acceptable.
<br>
[x] lstopo
<br>
&nbsp;&nbsp;&nbsp;- tested by utils/hwloc-ls.sh
<br>
[x] lstopo-no-graphics
<br>
&nbsp;&nbsp;&nbsp;- tested by utils/hwloc-ls.sh
<br>
<p>= tests/linux/test-topology.sh =
<br>
<p>&quot;This directory contains tarballs of Linux sysfs hierarchies collected on
<br>
various systems.  Each tarball `xyz.tar.bz2' comes with the corresponding
<br>
`xyz.output', which gives the expected output of &quot;lstopo -v -&quot; for that
<br>
system.
<br>
<p>Together with the `HWLOC_FSROOT' environment variable, these are
<br>
used by `test-topology.sh' to check for any regression introduced in
<br>
hwloc detection logic.&quot;
<br>
<p>= tests/xml/test-topology.sh =
<br>
&nbsp;&nbsp;&nbsp;- uses lstopo to read in known XML files and output them in XML
<br>
&nbsp;&nbsp;&nbsp;- compares them to ensure output matches input
<br>
<p>= doc/hwloc-hello =
<br>
&nbsp;&nbsp;&nbsp;- hwloc-hello is the binary of hwloc-hello.c
<br>
&nbsp;&nbsp;&nbsp;- hwloc-hello-cpp is the binary of the hwloc-hello-cpp.cpp source
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program
<br>
&nbsp;&nbsp;&nbsp;- hwloc-hello.c and hwloc-hello-cpp.cpp contain the same C source
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;code and are a demonstration of the hwloc C API which is described
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in the docs
<br>
&nbsp;&nbsp;&nbsp;- for testing, the code is compiled and executed
<br>
<p>= tests/Makefile check_PROGRAMS =
<br>
&nbsp;&nbsp;&nbsp;- the following C programs test various functions of the C API
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_bitmap_string.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check hwloc_bitmap_asprintf(), hwloc_obj_cpuset_snprintf() and
<br>
hwloc_bitmap_sscanf()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_get_closest_objs.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check hwloc_get_closest_objs()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;get the last object of the last level
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;get all closest objects
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;get the common ancestor of last level and its less close object.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check that the ancestor is the system level
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_get_obj_covering_cpuset.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check hwloc_get_obj_covering_cpuset()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_get_cache_covering_cpuset.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* check hwloc_get_cache_covering_cpuset() */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_get_largest_objs_inside_cpuset.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check hwloc_get_largest_objs_inside_cpuset()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and hwloc_get_first_largest_obj_inside_cpuset()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_get_next_obj_covering_cpuset.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check hwloc_get_next_obj_covering_cpuset*()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_get_obj_inside_cpuset.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check hwloc_get_obj_inside_cpuset*()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_get_shared_cache_covering_obj.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check hwloc_get_shared_cache_covering_obj()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_get_obj_below_array_by_type.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check hwloc_get_obj_below_array_by_type()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_bitmap_first_last_weight.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check hwloc_bitmap_first(), _last(), _next() and _weight()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_bitmap_singlify.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check hwloc_bitmap_singlify()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_type_depth.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check topo_get_type{,_or_above,_or_below}_depth()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and hwloc_get_depth_type()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_bind.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check the binding functions
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_get_last_cpu_location.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check that a bound process execs on a non-empty cpuset included
<br>
in the binding
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_object_userdata.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check that object userdata is properly initialized
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_synthetic.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check a synthetic topology
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_custom.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test inserting custom topology into global topology
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_backends.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mostly useful with valgrind, to check if backend cleanup properly
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_is_thissystem.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Check the is_thissystem flag behavior
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_distances.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test setting/retrieving distances
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_groups.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intensive testing of two grouping cases (2+1 and 2+2+1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_groups2.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;testing of adding/replacing/removing distance matrices
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;with set_distance_matrix or the environment,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;grouping with/without accuracy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_insert_misc.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tests hwloc_topology_insert_misc_object_by_cpuset()
<br>
hwloc_topology_insert_misc_object_by_parent() among other things
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_restrict.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test restricting topology
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_obj_infos.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check obj infos
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_iodevs.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check misc i/O device related stuff
<br>
&nbsp;&nbsp;&nbsp;&nbsp;xmlbuffer.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test hwloc_topology_export_xmlbuffer() and ??
<br>
<p><pre>
-- 
John Brier, RHCA, RHCVA, RHCX
Quality Assurance Engineer - NA
gpg: 1024D/251D9FF9 6F7B 242A 9375 F4CC BC6D  F453 60D8 35FF 251D 9FF9
<a href="http://opensource.com">http://opensource.com</a> - Where Open Source Multiplies

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3372/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3373.php">Brice Goglin: "Re: [hwloc-devel] hwloc testing review"</a>
<li><strong>Previous message:</strong> <a href="3371.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3373.php">Brice Goglin: "Re: [hwloc-devel] hwloc testing review"</a>
<li><strong>Reply:</strong> <a href="3373.php">Brice Goglin: "Re: [hwloc-devel] hwloc testing review"</a>
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
