<?
$subject_val = "[OMPI devel] Solaris/x86-64 SEGV with 1.8-latest";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 15:43:46 2014" -->
<!-- isoreceived="20141217204346" -->
<!-- sent="Wed, 17 Dec 2014 12:43:40 -0800" -->
<!-- isosent="20141217204340" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Solaris/x86-64 SEGV with 1.8-latest" -->
<!-- id="CAAvDA17D-Zm6Rsy3VgRaVAKNmvFwQ4mQDYX5hMiM+_3k5u+x3g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 15:43:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16651.php">Brice Goglin: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>Previous message:</strong> <a href="16649.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16651.php">Brice Goglin: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>Reply:</strong> <a href="16651.php">Brice Goglin: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried last nights v1.8 tarball (openmpi-v1.8.3-272-g4e4f997.tar.bz2) with
<br>
the Studio Compilers (v12.3) on a Solaris/x86-64 system.
<br>
Configure args (other than prefix) were:
<br>
<p>--enable-debug --with-verbs \
<br>
CC=cc CXX=CC FC=f90 \
<br>
CFLAGS=-m64 --with-wrapper-cflags=-m64 \
<br>
FCFLAGS=-m64 --with-wrapper-fcflags=-m64 \
<br>
CXXFLAGS='-m64 -library=stlport4' --with-wrapper-cxxflags='-m64
<br>
-library=stlport4'
<br>
<p><p>When running ring_c I see the following
<br>
<p>$ mpirun -mca btl sm,self,openib -np 2 -host pcp-j-19,pcp-j-20
<br>
examples/ring_c'
<br>
[pcp-j-20:24250] mca_oob_tcp_accept: accept() failed: Error 0 (0).
<br>
[pcp-j-20:24250] *** Process received signal ***
<br>
[pcp-j-20:24250] Signal: Segmentation Fault (11)
<br>
[pcp-j-20:24250] Signal code: Address not mapped (1)
<br>
[pcp-j-20:24250] Failing at address: fffffd7fe45bf227
<br>
/shared/OMPI/openmpi-1.8-latest-solaris11-x64-ib-ss12u3-nightly/INST/lib/libopen-pal.so.6.2.1'opal_backtrace_print+0x2d
<br>
[0xfffffd7fe450a91d]
<br>
/shared/OMPI/openmpi-1.8-latest-solaris11-x64-ib-ss12u3-nightly/INST/lib/libopen-pal.so.6.2.1'show_stackframe+0xafd
<br>
[0xfffffd7fe450066d]
<br>
/lib/amd64/libc.so.1'__sighndlr+0x6 [0xfffffd7fff202cc6]
<br>
/lib/amd64/libc.so.1'call_user_handler+0x2aa [0xfffffd7fff1f648e]
<br>
/shared/OMPI/openmpi-1.8-latest-solaris11-x64-ib-ss12u3-nightly/INST/lib/libopen-pal.so.6.2.1'opal_hwloc172_hwloc_get_obj_by_depth+0x1d7
<br>
[0xfffffd7fe45bf227] [Signal 11 (SEGV)]
<br>
/shared/OMPI/openmpi-1.8-latest-solaris11-x64-ib-ss12u3-nightly/INST/lib/libopen-pal.so.6.2.1'opal_hwloc172_hwloc_get_root_obj+0x24
<br>
[0xfffffd7fe4560504]
<br>
/shared/OMPI/openmpi-1.8-latest-solaris11-x64-ib-ss12u3-nightly/INST/lib/libopen-pal.so.6.2.1'opal_hwloc_base_get_nbobjs_by_type+0xec
<br>
[0xfffffd7fe45653ec]
<br>
/shared/OMPI/openmpi-1.8-latest-solaris11-x64-ib-ss12u3-nightly/INST/lib/openmpi/mca_rmaps_round_robin.so'orte_rmaps_rr_byobj+0x252
<br>
[0xfffffd7fe1c9ddd2]
<br>
/shared/OMPI/openmpi-1.8-latest-solaris11-x64-ib-ss12u3-nightly/INST/lib/openmpi/mca_rmaps_round_robin.so'orte_rmaps_rr_map+0x65e
<br>
[0xfffffd7fe1c912be]
<br>
/shared/OMPI/openmpi-1.8-latest-solaris11-x64-ib-ss12u3-nightly/INST/lib/libopen-rte.so.7.0.5'orte_rmaps_base_map_job+0xdce
<br>
[0xfffffd7fe276aace]
<br>
/shared/OMPI/openmpi-1.8-latest-solaris11-x64-ib-ss12u3-nightly/INST/lib/libopen-pal.so.6.2.1'event_process_ac
<br>
tive_single_queue+0x1dc [0xfffffd7fe453afbc]
<br>
/shared/OMPI/openmpi-1.8-latest-solaris11-x64-ib-ss12u3-nightly/INST/lib/libopen-pal.so.6.2.1'event_process_active+0xb1
<br>
[0xfffffd7fe453b361]
<br>
/shared/OMPI/openmpi-1.8-latest-solaris11-x64-ib-ss12u3-nightly/INST/lib/libopen-pal.so.6.2.1'opal_libevent2021_event_base_loop+0x339
<br>
[0xfffffd7fe453bc79]
<br>
/shared/OMPI/openmpi-1.8-latest-solaris11-x64-ib-ss12u3-nightly/INST/bin/orterun'orterun+0x1d0e
<br>
[0x4101fe]
<br>
/shared/OMPI/openmpi-1.8-latest-solaris11-x64-ib-ss12u3-nightly/INST/bin/orterun'main+0x20
<br>
[0x408ca0]
<br>
/shared/OMPI/openmpi-1.8-latest-solaris11-x64-ib-ss12u3-nightly/INST/bin/orterun'0x8b0b
<br>
[0x408b0b]
<br>
[pcp-j-20:24250] *** End of error message ***
<br>
<p><p>Dbx gives me
<br>
<p>t_at_1 (l_at_1) terminated by signal SEGV (no mapping at the fault address)
<br>
Current function is opal_hwloc172_hwloc_get_obj_by_depth
<br>
&nbsp;&nbsp;&nbsp;74     return topology-&gt;levels[depth][idx];
<br>
(dbx) where
<br>
current thread: t_at_1
<br>
=&gt;[1] opal_hwloc172_hwloc_get_obj_by_depth(topology = 0x4d49e0, depth = 0,
<br>
idx = 0), line 74 in &quot;traversal.c&quot;
<br>
&nbsp;&nbsp;[2] opal_hwloc172_hwloc_get_root_obj(topology = 0x4d49e0), line 118 in
<br>
&quot;helper.h&quot;
<br>
&nbsp;&nbsp;[3] opal_hwloc_base_get_nbobjs_by_type(topo = 0x4d49e0, target =
<br>
OPAL_HWLOC172_hwloc_OBJ_CORE, cache_level = 0, rtype = '\003'), line 833 in
<br>
&quot;hwloc_base_util.c&quot;
<br>
&nbsp;&nbsp;[4] orte_rmaps_rr_byobj(jdata = 0x43c940, app = 0x483fe0, node_list =
<br>
0xfffffd7fffdff4b0, num_slots = 2, num_procs = 2U, target =
<br>
OPAL_HWLOC172_hwloc_OBJ_CORE, cache_level = 0), line 495 in
<br>
&quot;rmaps_rr_mappers.c&quot;
<br>
&nbsp;&nbsp;[5] orte_rmaps_rr_map(jdata = 0x43c940), line 165 in &quot;rmaps_rr.c&quot;
<br>
&nbsp;&nbsp;[6] orte_rmaps_base_map_job(fd = -1, args = 4, cbdata = 0x4a3300), line
<br>
277 in &quot;rmaps_base_map_job.c&quot;
<br>
&nbsp;&nbsp;[7] event_process_active_single_queue(0x0, 0x0, 0x0, 0x0, 0x0, 0x0), at
<br>
0xfffffd7fe453afbc
<br>
&nbsp;&nbsp;[8] event_process_active(0x0, 0x0, 0x0, 0x0, 0x0, 0x0), at
<br>
0xfffffd7fe453b361
<br>
&nbsp;&nbsp;[9] opal_libevent2021_event_base_loop(0x0, 0x0, 0x0, 0x0, 0x0, 0x0), at
<br>
0xfffffd7fe453bc79
<br>
&nbsp;&nbsp;[10] orterun(argc = 9, argv = 0xfffffd7fffdffa58), line 1081 in
<br>
&quot;orterun.c&quot;
<br>
&nbsp;&nbsp;[11] main(argc = 9, argv = 0xfffffd7fffdffa58), line 13 in &quot;main.c&quot;
<br>
(dbx) print depth
<br>
depth = 0
<br>
(dbx) print index
<br>
index = 0xfffffd7fff19c174
<br>
<p><p>Pretty sure that index value is bogus.
<br>
<p>-Paul
<br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16650/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16651.php">Brice Goglin: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>Previous message:</strong> <a href="16649.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16651.php">Brice Goglin: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>Reply:</strong> <a href="16651.php">Brice Goglin: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
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
