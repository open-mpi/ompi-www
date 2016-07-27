<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  8 21:03:00 2010" -->
<!-- isoreceived="20100109020300" -->
<!-- sent="Fri, 8 Jan 2010 21:03:00 -0500" -->
<!-- isosent="20100109020300" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="201001090203.o092305a006853_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> [hwloc-devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> MPI Team (<em>mpiteam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-08 21:03:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0573.php">Jeff Squyres: "[hwloc-devel] Colors in lstopo output"</a>
<li><strong>Previous message:</strong> <a href="0571.php">Samuel Thibault: "Re: [hwloc-devel] sometimes unused params"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ERROR: Command returned a non-zero exist status (trunk):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make distcheck
<br>
<p>Start time: Fri Jan  8 21:01:04 EST 2010
<br>
End time:   Fri Jan  8 21:02:59 EST 2010
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
make[2]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build/doc'
<br>
&nbsp;( cd '/tmp/am-dc-31545//home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_inst/share/doc/hwloc' &amp;&amp; rm -f hwloc-a4.pdf hwloc-letter.pdf )
<br>
&nbsp;( cd '/tmp/am-dc-31545//home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_inst/share/man/man3' &amp;&amp; rm -f HWLOC_CPUBIND_PROCESS.3 HWLOC_CPUBIND_STRICT.3 HWLOC_CPUBIND_THREAD.3 HWLOC_OBJ_CACHE.3 HWLOC_OBJ_CORE.3 HWLOC_OBJ_MACHINE.3 HWLOC_OBJ_MISC.3 HWLOC_OBJ_NODE.3 HWLOC_OBJ_PROC.3 HWLOC_OBJ_SOCKET.3 HWLOC_OBJ_SYSTEM.3 HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM.3 HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM.3 HWLOC_TYPE_DEPTH_MULTIPLE.3 HWLOC_TYPE_DEPTH_UNKNOWN.3 hwloc_compare_types.3 hwloc_cpubind_policy_t.3 hwloc_cpuset_alloc.3 hwloc_cpuset_free.3 hwloc_cpuset_dup.3 hwloc_cpuset_copy.3 hwloc_cpuset_all_but_cpu.3 hwloc_cpuset_andset.3 hwloc_cpuset_clearset.3 hwloc_cpuset_clr.3 hwloc_cpuset_clr_range.3 hwloc_cpuset_compare.3 hwloc_cpuset_compare_first.3 hwloc_cpuset_fill.3 hwloc_cpuset_first.3 hwloc_cpuset_foreach_begin.3 hwloc_cpuset_foreach_end.3 hwloc_cpuset_from_glibc_sched_affinity.3 hwloc_cpuset_from_ith_ulong.3 hwloc_cpuset_from_linux_libnuma_bitmask.3 hwloc_cpuset_from_linux_l<br>
ibnuma_nodemask.3 hwloc_cpuset_from_linux_libnuma_ulongs.3 hwloc_cpuset_from_string.3 hwloc_cpuset_from_ulong.3 hwloc_cpuset_intersects.3 hwloc_cpuset_isequal.3 hwloc_cpuset_isfull.3 hwloc_cpuset_isincluded.3 hwloc_cpuset_isset.3 hwloc_cpuset_iszero.3 hwloc_cpuset_last.3 hwloc_cpuset_notset.3 hwloc_cpuset_orset.3 hwloc_cpuset_set.3 hwloc_cpuset_set_range.3 hwloc_cpuset_singlify.3 hwloc_cpuset_snprintf.3 hwloc_cpuset_asprintf.3 hwloc_cpuset_t.3 hwloc_cpuset_to_glibc_sched_affinity.3 hwloc_cpuset_to_ith_ulong.3 hwloc_cpuset_to_linux_libnuma_bitmask.3 hwloc_cpuset_to_linux_libnuma_nodemask.3 hwloc_cpuset_to_linux_libnuma_ulongs.3 hwloc_cpuset_to_ulong.3 hwloc_cpuset_weight.3 hwloc_cpuset_xorset.3 hwloc_distribute.3 hwloc_get_closest_objs.3 hwloc_get_common_ancestor_obj.3 hwloc_get_cache_covering_cpuset.3 hwloc_get_child_covering_cpuset.3 hwloc_get_obj_covering_cpuset.3 hwloc_get_depth_type.3 hwloc_topology_get_allowed_cpuset.3 hwloc_topology_get_complete_cpuset.3 hwloc_topology_get_online_cpuset.3 hwloc_!
<br>
&nbsp;topology
<br>
_get_topology_cpuset.3 hwloc_get_largest_objs_inside_cpuset.3 hwloc_get_nbobjs_inside_cpuset_by_type.3 hwloc_get_nbobjs_inside_cpuset_by_depth.3 hwloc_get_next_child.3 hwloc_get_next_obj_covering_cpuset_by_type.3 hwloc_get_next_obj_covering_cpuset_by_depth.3 hwloc_get_next_obj_inside_cpuset_by_type.3 hwloc_get_next_obj_inside_cpuset_by_depth.3 hwloc_get_next_obj_by_type.3 hwloc_get_next_obj_by_depth.3 hwloc_get_proc_obj_by_os_index.3 hwloc_get_obj_below_by_type.3 hwloc_get_obj_below_array_by_type.3 hwloc_get_obj_inside_cpuset_by_type.3 hwloc_get_obj_inside_cpuset_by_depth.3 hwloc_get_obj_by_type.3 hwloc_get_obj_by_depth.3 hwloc_get_parent_obj_by_type.3 hwloc_get_parent_obj_by_depth.3 hwloc_get_shared_cache_covering_obj.3 hwloc_get_system_obj.3 hwloc_get_type_depth.3 hwloc_get_nbobjs_by_type.3 hwloc_get_nbobjs_by_depth.3 hwloc_get_type_or_above_depth.3 hwloc_get_type_or_below_depth.3 hwloc_ibv_get_device_cpuset.3 hwloc_linux_parse_cpumap_file.3 hwloc_obj.3 hwloc_obj_attr_u.3 hwloc_obj_attr_u_hwloc_cache_attr_<br>
s.3 hwloc_obj_attr_u_hwloc_machine_attr_s.3 hwloc_obj_attr_u_hwloc_memory_attr_s.3 hwloc_obj_attr_u_hwloc_misc_attr_s.3 hwloc_obj_cpuset_snprintf.3 hwloc_obj_is_in_subtree.3 hwloc_obj_type_snprintf.3 hwloc_obj_attr_snprintf.3 hwloc_obj_snprintf.3 hwloc_obj_t.3 hwloc_obj_type_of_string.3 hwloc_obj_type_string.3 hwloc_obj_type_t.3 hwloc_get_cpubind.3 hwloc_get_proc_cpubind.3 hwloc_get_thread_cpubind.3 hwloc_set_cpubind.3 hwloc_set_proc_cpubind.3 hwloc_set_thread_cpubind.3 hwloc_topology_check.3 hwloc_topology_destroy.3 hwloc_topology_export_xml.3 hwloc_topology_flags_e.3 hwloc_topology_get_depth.3 hwloc_topology_get_support.3 hwloc_topology_ignore_all_keep_structure.3 hwloc_topology_ignore_type.3 hwloc_topology_ignore_type_keep_structure.3 hwloc_topology_init.3 hwloc_topology_is_thissystem.3 hwloc_topology_load.3 hwloc_topology_set_flags.3 hwloc_topology_set_fsroot.3 hwloc_topology_set_synthetic.3 hwloc_topology_set_xml.3 hwloc_topology_support.3 hwloc_topology_t.3 hwlocality_binding.3 hwlocality_config!
<br>
&nbsp;uration.
<br>
3 hwlocality_conversion.3 hwlocality_cpuset.3 hwlocality_creation.3 hwlocality_glibc_sched.3 hwlocality_helper_binding.3 hwlocality_helper_find_cache.3 hwlocality_helper_find_covering.3 hwlocality_helper_find_coverings.3 hwlocality_helper_find_inside.3 hwlocality_helper_traversal.3 hwlocality_helper_traversal_basic.3 hwlocality_helper_types.3 hwlocality_information.3 hwlocality_linux_libnuma_bitmask.3 hwlocality_linux_libnuma_nodemask.3 hwlocality_linux_libnuma_ulongs.3 hwlocality_objects.3 hwlocality_traversal.3 hwlocality_types.3 )
<br>
make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build/doc'
<br>
make[2]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build'
<br>
&nbsp;( cd '/tmp/am-dc-31545//home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_inst/lib/pkgconfig' &amp;&amp; rm -f hwloc.pc )
<br>
make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build'
<br>
make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build'
<br>
make[1]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build'
<br>
make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build'
<br>
make[1]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build'
<br>
{ test ! -d &quot;hwloc-1.0a1r1584&quot; || { find &quot;hwloc-1.0a1r1584&quot; -type d ! -perm -200 -exec chmod u+w {} ';' &amp;&amp; rm -fr &quot;hwloc-1.0a1r1584&quot;; }; }
<br>
test -d &quot;hwloc-1.0a1r1584&quot; || mkdir &quot;hwloc-1.0a1r1584&quot;
<br>
&nbsp;(cd src &amp;&amp; make  top_distdir=../hwloc-1.0a1r1584 distdir=../hwloc-1.0a1r1584/src \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[2]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build/src'
<br>
make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build/src'
<br>
&nbsp;(cd utils &amp;&amp; make  top_distdir=../hwloc-1.0a1r1584 distdir=../hwloc-1.0a1r1584/utils \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[2]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build/utils'
<br>
make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build/utils'
<br>
&nbsp;(cd tests &amp;&amp; make  top_distdir=../hwloc-1.0a1r1584 distdir=../hwloc-1.0a1r1584/tests \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[2]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build/tests'
<br>
&nbsp;(cd linux &amp;&amp; make  top_distdir=../../hwloc-1.0a1r1584 distdir=../../hwloc-1.0a1r1584/tests/linux \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[3]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build/tests/linux'
<br>
make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build/tests/linux'
<br>
&nbsp;(cd ports &amp;&amp; make  top_distdir=../../hwloc-1.0a1r1584 distdir=../../hwloc-1.0a1r1584/tests/ports \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[3]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build/tests/ports'
<br>
make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build/tests/ports'
<br>
&nbsp;(cd xml &amp;&amp; make  top_distdir=../../hwloc-1.0a1r1584 distdir=../../hwloc-1.0a1r1584/tests/xml \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[3]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build/tests/xml'
<br>
make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build/tests/xml'
<br>
make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build/tests'
<br>
&nbsp;(cd include &amp;&amp; make  top_distdir=../hwloc-1.0a1r1584 distdir=../hwloc-1.0a1r1584/include \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[2]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build/include'
<br>
make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build/include'
<br>
&nbsp;(cd doc &amp;&amp; make  top_distdir=../hwloc-1.0a1r1584 distdir=../hwloc-1.0a1r1584/doc \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[2]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build/doc'
<br>
cp: cannot stat `../../doc/doxygen-doc/latex': No such file or directory
<br>
make[2]: *** [distdir] Error 1
<br>
make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build/doc'
<br>
make[1]: *** [distdir] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1584/hwloc/hwloc-1.0a1r1584/_build'
<br>
make: *** [distcheck] Error 1
<br>
=======================================================================
<br>
<p>Your friendly daemon,
<br>
Cyrador
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0573.php">Jeff Squyres: "[hwloc-devel] Colors in lstopo output"</a>
<li><strong>Previous message:</strong> <a href="0571.php">Samuel Thibault: "Re: [hwloc-devel] sometimes unused params"</a>
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
