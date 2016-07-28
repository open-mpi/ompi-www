<?
$subject_val = "[OMPI devel] 1.10.0rc4 hcoll problem compiled statically";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 22 20:43:33 2015" -->
<!-- isoreceived="20150823004333" -->
<!-- sent="Sat, 22 Aug 2015 17:43:28 -0700" -->
<!-- isosent="20150823004328" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.10.0rc4 hcoll problem compiled statically" -->
<!-- id="CAAvDA14Qn7JB-5pufCu2RKnGhaU15W=Vsv+Q=LyuBV+U4OqaHQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.10.0rc4 hcoll problem compiled statically<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-22 20:43:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17795.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<li><strong>Previous message:</strong> <a href="17793.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17795.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<li><strong>Reply:</strong> <a href="17795.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Having seen problems with mtl:ofi with &quot;--enable-static --disable-shared&quot;,
<br>
I tried mtl:psm and mtl:mxm with those options as well.
<br>
<p>The good news is that mtl:psm was fine, but the bad news is when testing
<br>
mtl:mxm I encountered a new problem involving coll:hcol.
<br>
Ralph probably wants to strangle me right now...
<br>
<p><p>I am configuring the 1.10.0rc4 tarball with
<br>
&nbsp;&nbsp;&nbsp;--prefix=[...] --enable-debug --with-verbs --enable-openib-connectx-xrc \
<br>
&nbsp;&nbsp;&nbsp;--with-mxm=/opt/mellanox/mxm --with-hcoll=/opt/mellanox/hcoll \
<br>
&nbsp;&nbsp;&nbsp;--enable-static --disable-shared
<br>
<p>Everything was fine without those last two arguments.
<br>
When I add them the build is fine, and I can compile the examples.
<br>
However, I get a SEGV when running an example:
<br>
<p>$mpirun -np 2 examples/ring_c
<br>
[mir13:12444:0] Caught signal 11 (Segmentation fault)
<br>
[mir13:12445:0] Caught signal 11 (Segmentation fault)
<br>
==== backtrace ====
<br>
==== backtrace ====
<br>
&nbsp;2 0x0000000000059d9c mxm_handle_error()
<br>
&nbsp;/hpc/local/benchmarks/hpc-stack-gcc-Saturday/src/install/mxm-master/
<br>
src/mxm/util/debug/debug.c:641
<br>
&nbsp;3 0x0000000000059f0c mxm_error_signal_handler()
<br>
&nbsp;/hpc/local/benchmarks/hpc-stack-gcc-Saturday/src/install/mxm
<br>
-master/src/mxm/util/debug/debug.c:616
<br>
&nbsp;4 0x0000003c2e0329a0 killpg()  ??:0
<br>
&nbsp;5 0x0000000000528b51 opal_list_remove_last()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux
<br>
-x86_64-mxm-static/openmpi-1.10.0rc4/opal/class/opal_list.h:721
<br>
&nbsp;6 0x0000000000529872 base_bcol_basesmuma_setup_library_buffers()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/ope
<br>
nmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/bcol/basesmuma/bcol_basesmuma_setup.c:537
<br>
&nbsp;7 0x000000000009e983 hmca_bcol_basesmuma_comm_query()  ??:0
<br>
&nbsp;8 0x00000000000348e3 hmca_coll_ml_tree_hierarchy_discovery()
<br>
&nbsp;coll_ml_module.c:0
<br>
&nbsp;9 0x00000000000317a2 hmca_coll_ml_comm_query()  ??:0
<br>
10 0x000000000006c929 hcoll_create_context()  ??:0
<br>
11 0x00000000004a248f mca_coll_hcoll_comm_query()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-l
<br>
inux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/hcoll/coll_hcoll_module.c:290
<br>
12 0x000000000047c82f query_2_0_0()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mx
<br>
m-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:392
<br>
13 0x000000000047c7ee query()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-stat
<br>
ic/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:375
<br>
14 0x000000000047c704 check_one_component()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x
<br>
86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:337
<br>
15 0x000000000047c567 check_components()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_
<br>
64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:301
<br>
16 0x000000000047552a mca_coll_base_comm_select()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-l
<br>
inux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:131
<br>
17 0x0000000000428476 ompi_mpi_init()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-
<br>
mxm-static/openmpi-1.10.0rc4/ompi/runtime/ompi_mpi_init.c:894
<br>
18 0x0000000000431ba5 PMPI_Init()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-
<br>
static/BLD/ompi/mpi/c/profile/pinit.c:84
<br>
19 0x000000000040abce main()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-stati
<br>
c/BLD/examples/ring_c.c:19
<br>
20 0x0000003c2e01ed1d __libc_start_main()  ??:0
<br>
21 0x000000000040aae9 _start()  ??:0
<br>
===================
<br>
&nbsp;2 0x0000000000059d9c mxm_handle_error()
<br>
&nbsp;/hpc/local/benchmarks/hpc-stack-gcc-Saturday/src/install/mxm-master/src/mxm/util/debug/debug.c:641
<br>
&nbsp;3 0x0000000000059f0c mxm_error_signal_handler()
<br>
&nbsp;/hpc/local/benchmarks/hpc-stack-gcc-Saturday/src/install/mxm-master/src/mxm/util/debug/debug.c:616
<br>
&nbsp;4 0x0000003c2e0329a0 killpg()  ??:0
<br>
&nbsp;5 0x0000000000528b51 opal_list_remove_last()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/opal/class/opal_list.h:721
<br>
&nbsp;6 0x0000000000529872 base_bcol_basesmuma_setup_library_buffers()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/bcol/basesmuma/bcol_basesmuma_setup.c:537
<br>
&nbsp;7 0x000000000009e983 hmca_bcol_basesmuma_comm_query()  ??:0
<br>
&nbsp;8 0x00000000000348e3 hmca_coll_ml_tree_hierarchy_discovery()
<br>
&nbsp;coll_ml_module.c:0
<br>
&nbsp;9 0x00000000000317a2 hmca_coll_ml_comm_query()  ??:0
<br>
10 0x000000000006c929 hcoll_create_context()  ??:0
<br>
11 0x00000000004a248f mca_coll_hcoll_comm_query()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/hcoll/coll_hcoll_module.c:290
<br>
12 0x000000000047c82f query_2_0_0()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:392
<br>
13 0x000000000047c7ee query()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:375
<br>
14 0x000000000047c704 check_one_component()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:337
<br>
15 0x000000000047c567 check_components()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:301
<br>
16 0x000000000047552a mca_coll_base_comm_select()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:131
<br>
17 0x0000000000428476 ompi_mpi_init()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/runtime/ompi_mpi_init.c:894
<br>
18 0x0000000000431ba5 PMPI_Init()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/BLD/ompi/mpi/c/profile/pinit.c:84
<br>
19 0x000000000040abce main()
<br>
&nbsp;/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/BLD/examples/ring_c.c:19
<br>
20 0x0000003c2e01ed1d __libc_start_main()  ??:0
<br>
21 0x000000000040aae9 _start()  ??:0
<br>
===================
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 12445 on node mir13 exited on
<br>
signal 13 (Broken pipe).
<br>
--------------------------------------------------------------------------
<br>
<p>This is reproducible.
<br>
A run with &quot;-np 1&quot; is fine.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17794/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17795.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<li><strong>Previous message:</strong> <a href="17793.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17795.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<li><strong>Reply:</strong> <a href="17795.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
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
