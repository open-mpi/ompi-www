<?
$subject_val = "[hwloc-devel] more embedded";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 21:14:01 2009" -->
<!-- isoreceived="20091216021401" -->
<!-- sent="Tue, 15 Dec 2009 21:13:55 -0500" -->
<!-- isosent="20091216021355" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] more embedded" -->
<!-- id="D4D0A202-8B32-4549-A638-FDC8DC2E902B_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] more embedded<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-15 21:13:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0520.php">Brice Goglin: "Re: [hwloc-devel] &quot;compar&quot;"</a>
<li><strong>Previous message:</strong> <a href="0518.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1464)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0521.php">Brice Goglin: "Re: [hwloc-devel] more embedded"</a>
<li><strong>Reply:</strong> <a href="0521.php">Brice Goglin: "Re: [hwloc-devel] more embedded"</a>
<li><strong>Reply:</strong> <a href="0523.php">Samuel Thibault: "Re: [hwloc-devel] more embedded"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I added a truckload more symbol renaming -- please review:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bitbucket.org/jsquyres/hwloc-embedded/changeset/aa94ec7a1182/">http://bitbucket.org/jsquyres/hwloc-embedded/changeset/aa94ec7a1182/</a>
<br>
<p>However, after adding this stuff, I still see a boatload of public symbols named &quot;hwloc_*&quot;.  I assume that these are actually internal symbols, and are only named &quot;hwloc_&quot; so that they're nicely namespace segregated from the top-level application.  
<br>
<p>But just to show you how many there are, here's a name-shifted libhwloc (with a &quot;mytest_&quot; prefix):
<br>
<p><pre>
----
shell$ nm src/.libs/libhwloc.a | grep -v mytest | grep hwloc_ | cut -c20- | sort | uniq
hwloc_admin_disable_set_from_cpuset
hwloc_alloc_setup_object
hwloc_backend_exit
hwloc_backend_synthetic_exit
hwloc_backend_synthetic_init
hwloc_backend_sysfs_exit
hwloc_backend_sysfs_init
hwloc_backend_xml_exit
hwloc_backend_xml_init
hwloc__check_children
hwloc_connect
hwloc_cpuset_printf_value
hwloc_discover
hwloc_get_closest_objs
hwloc__get_dmi_info
hwloc__get_largest_objs_inside_cpuset
hwloc_get_largest_objs_inside_cpuset
hwloc_get_nbobjs_by_depth
hwloc_get_order_type
hwloc_get_procfs_meminfo_info
hwloc_get_sysctl
hwloc_get_type_depth
hwloc_get_type_order
hwloc__insert_object_by_cpuset
hwloc_insert_object_by_cpuset
hwloc_insert_object_by_parent
hwloc_linux_get_cpubind
hwloc_linux_get_proc_cpubind
hwloc_linux_get_thisthread_cpubind
hwloc_linux_set_cpubind
hwloc_linux_set_proc_cpubind
hwloc_linux_set_thisthread_cpubind
hwloc_look_linux
hwloc__look_synthetic
hwloc_look_synthetic
hwloc_look_xml
hwloc__look_xml_attr
hwloc__look_xml_node
hwloc_obj_cmp
hwloc_parse_cpumap
hwloc_parse_node_distance
hwloc_parse_sysfs_unsigned
hwloc__process_object_attr
hwloc__process_root_attr
hwloc_read_linux_cpuset_mask
hwloc_read_linux_cpuset_name
hwloc_set_linux_hooks
hwloc_setup_group_from_min_distance_clique
hwloc_setup_group_from_min_distance_transitivity
hwloc_setup_level
hwloc__setup_misc_level_from_distances
hwloc_setup_misc_level_from_distances
hwloc_setup_proc_level
hwloc_snprintf
hwloc_sysfs_node_meminfo_info
hwloc_topology_clear
hwloc__topology_export_info
hwloc__topology_export_xml_object
hwloc_topology_setup_defaults
hwloc_type_cmp
hwloc_weight_long
-----
Would it be desirable to have compiler visibility enabled in hwloc?  This allows private hwloc symbols to be truly private -- they would only be visible within libhwloc.  I think all modern compilers have this kind of feature these days.
It would take some configure mojo and some code changes (i.e., put a DECLSPEC in front of public symbol declarations).  Such things can be copied over from the OMPI code base.
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0520.php">Brice Goglin: "Re: [hwloc-devel] &quot;compar&quot;"</a>
<li><strong>Previous message:</strong> <a href="0518.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1464)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0521.php">Brice Goglin: "Re: [hwloc-devel] more embedded"</a>
<li><strong>Reply:</strong> <a href="0521.php">Brice Goglin: "Re: [hwloc-devel] more embedded"</a>
<li><strong>Reply:</strong> <a href="0523.php">Samuel Thibault: "Re: [hwloc-devel] more embedded"</a>
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
