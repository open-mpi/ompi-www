<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 21:02:52 2009" -->
<!-- isoreceived="20091204020252" -->
<!-- sent="Thu, 3 Dec 2009 21:02:51 -0500" -->
<!-- isosent="20091204020251" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="200912040202.nB422p3d019988_at_eddie.osl.iu.edu" -->
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
<strong>Date:</strong> 2009-12-03 21:02:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0462.php">Jeff Squyres: "[hwloc-devel] hwloc-bind again"</a>
<li><strong>Previous message:</strong> <a href="0460.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
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
<p>Start time: Thu Dec  3 21:01:02 EST 2009
<br>
End time:   Thu Dec  3 21:02:51 EST 2009
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
Making install in xml
<br>
make[3]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_build/tests/xml'
<br>
make[4]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_build/tests/xml'
<br>
make[4]: Nothing to be done for `install-exec-am'.
<br>
make[4]: Nothing to be done for `install-data-am'.
<br>
make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_build/tests/xml'
<br>
make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_build/tests/xml'
<br>
make[3]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_build/tests'
<br>
make[4]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_build/tests'
<br>
make[4]: Nothing to be done for `install-exec-am'.
<br>
make[4]: Nothing to be done for `install-data-am'.
<br>
make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_build/tests'
<br>
make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_build/tests'
<br>
make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_build/tests'
<br>
Making install in include
<br>
make[2]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_build/include'
<br>
make[3]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_build/include'
<br>
make[3]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_inst/include&quot; || /bin/mkdir -p &quot;/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_inst/include&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 ../../include/hwloc.h '/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_inst/include'
<br>
test -z &quot;/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_inst/include/hwloc&quot; || /bin/mkdir -p &quot;/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_inst/include/hwloc&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 ../../include/hwloc/cpuset.h ../../include/hwloc/helper.h ../../include/hwloc/openfabrics-verbs.h ../../include/hwloc/plpa.h ../../include/hwloc/linux.h ../../include/hwloc/linux-libnuma.h ../../include/hwloc/glibc-sched.h '/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_inst/include/hwloc'
<br>
test -z &quot;/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_inst/include/hwloc&quot; || /bin/mkdir -p &quot;/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_inst/include/hwloc&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 hwloc/config.h '/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_inst/include/hwloc'
<br>
make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_build/include'
<br>
make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_build/include'
<br>
Making install in doc
<br>
make[2]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_build/doc'
<br>
make  install-am
<br>
make[3]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_build/doc'
<br>
if test -d ../doc/doxygen-doc/html -a -f ../doc/doxygen-doc/html/doxygen.css; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cp -f ../../doc/doxygen.css ../doc/doxygen-doc/html; \
<br>
fi
<br>
make[4]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_build/doc'
<br>
make[4]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_inst/share/doc/hwloc&quot; || /bin/mkdir -p &quot;/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_inst/share/doc/hwloc&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 ../../doc/../doc/doxygen-doc/hwloc-a4.pdf ../../doc/../doc/doxygen-doc/hwloc-letter.pdf '/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_inst/share/doc/hwloc'
<br>
test -z &quot;/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_inst/share/man/man3&quot; || /bin/mkdir -p &quot;/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_inst/share/man/man3&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 ../../doc/../doc/doxygen-doc/man/man3/HWLOC_CPUBIND_PROCESS.3 ../../doc/../doc/doxygen-doc/man/man3/HWLOC_CPUBIND_STRICT.3 ../../doc/../doc/doxygen-doc/man/man3/HWLOC_CPUBIND_THREAD.3 ../../doc/../doc/doxygen-doc/man/man3/HWLOC_OBJ_CACHE.3 ../../doc/../doc/doxygen-doc/man/man3/HWLOC_OBJ_CORE.3 ../../doc/../doc/doxygen-doc/man/man3/HWLOC_OBJ_MACHINE.3 ../../doc/../doc/doxygen-doc/man/man3/HWLOC_OBJ_MISC.3 ../../doc/../doc/doxygen-doc/man/man3/HWLOC_OBJ_NODE.3 ../../doc/../doc/doxygen-doc/man/man3/HWLOC_OBJ_PROC.3 ../../doc/../doc/doxygen-doc/man/man3/HWLOC_OBJ_SOCKET.3 ../../doc/../doc/doxygen-doc/man/man3/HWLOC_OBJ_SYSTEM.3 ../../doc/../doc/doxygen-doc/man/man3/HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM.3 ../../doc/../doc/doxygen-doc/man/man3/HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM.3 ../../doc/../doc/doxygen-doc/man/man3/HWLOC_TYPE_DEPTH_MULTIPLE.3 ../../doc/../doc/doxygen-doc/man/man3/HWLOC_TYPE_DEPTH_UNKNOWN.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_compare_types.3 ../../doc/../doc/doxygen-<br>
doc/man/man3/hwloc_cpubind_policy_t.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_alloc.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_free.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_dup.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_copy.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_all_but_cpu.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_andset.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_clearset.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_clr.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_compar.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_compar_first.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_fill.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_first.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_foreach_begin.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_foreach_end.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_from_glibc_sched_affinity.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpus!
<br>
&nbsp;et_from_
<br>
ith_ulong.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_from_linux_libnuma_bitmask.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_from_linux_libnuma_nodemask.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_from_linux_libnuma_ulongs.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_from_string.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_from_ulong.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_intersects.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_isequal.3 '/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_inst/share/man/man3'
<br>
&nbsp;/usr/bin/install -c -m 644 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_isfull.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_isincluded.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_isset.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_iszero.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_last.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_orset.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_set.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_set_range.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_singlify.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_snprintf.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_asprintf.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_t.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_to_glibc_sched_affinity.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_to_ith_ulong.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_to_linux_libnuma_bitmask.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_to<br>
_linux_libnuma_nodemask.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_to_linux_libnuma_ulongs.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_to_ulong.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_weight.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_cpuset_xorset.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_distribute.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_get_closest_objs.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_get_common_ancestor_obj.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_get_cache_covering_cpuset.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_get_child_covering_cpuset.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_get_obj_covering_cpuset.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_get_depth_type.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_topology_get_offline_cpuset.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_get_largest_objs_inside_cpuset.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_get_nbobjs_inside_cpuset_by_type.3 ../../doc/../doc/doxygen-doc/man/man!
<br>
&nbsp;3/hwloc_
<br>
get_nbobjs_inside_cpuset_by_depth.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_get_next_child.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_get_next_obj_covering_cpuset_by_type.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_get_next_obj_covering_cpuset_by_depth.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_get_next_obj_inside_cpuset_by_type.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_get_next_obj_inside_cpuset_by_depth.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_get_next_obj_by_type.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_get_next_obj_by_depth.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_get_proc_obj_by_os_index.3 ../../doc/../doc/doxygen-doc/man/man3/hwloc_get_obj_inside_cpuset_by_type.3 '/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_inst/share/man/man3'
<br>
/usr/bin/install: cannot stat `../../doc/../doc/doxygen-doc/man/man3/hwloc_topology_get_offline_cpuset.3': No such file or directory
<br>
make[4]: *** [install-man3] Error 1
<br>
make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_build/doc'
<br>
make[3]: *** [install-am] Error 2
<br>
make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_build/doc'
<br>
make[2]: *** [install] Error 2
<br>
make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_build/doc'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1422/hwloc/hwloc-1.0a1r1422/_build'
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
<li><strong>Next message:</strong> <a href="0462.php">Jeff Squyres: "[hwloc-devel] hwloc-bind again"</a>
<li><strong>Previous message:</strong> <a href="0460.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
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
