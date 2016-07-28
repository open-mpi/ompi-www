<?
$subject_val = "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 22 21:00:22 2015" -->
<!-- isoreceived="20150823010022" -->
<!-- sent="Sun, 23 Aug 2015 10:00:18 +0900" -->
<!-- isosent="20150823010018" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically" -->
<!-- id="CAAkFZ5tKbzMbmx3dU-hBV4D6OYnUc+GS166f2P-yXSs8fKSB3Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA14Qn7JB-5pufCu2RKnGhaU15W=Vsv+Q=LyuBV+U4OqaHQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-22 21:00:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17796.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<li><strong>Previous message:</strong> <a href="17794.php">Paul Hargrove: "[OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<li><strong>In reply to:</strong> <a href="17794.php">Paul Hargrove: "[OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17796.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<li><strong>Reply:</strong> <a href="17796.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>isn t this an issue that was already discussed ?
<br>
mellanox proprietary hcoll library includes its own coll ml module that
<br>
conflicts with the ompi one.
<br>
mellanox folks fixed this internally but I am not sure this has been
<br>
released.
<br>
you can run
<br>
nm libhcoll.so
<br>
if there are some symbols starting with coll_ml, then the issue is still
<br>
there.
<br>
if you have time and recent autotools, you can
<br>
touch ompi/mca/coll/ml/.ompi_ignore
<br>
./autogen.pl
<br>
make ...
<br>
and that should be fine
<br>
<p>if you configure'd with dynamic libraries and no --disable_dlopen, then
<br>
mpirun --mca coll ^ml ...
<br>
is enough to work around the issue.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Sunday, August 23, 2015, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Having seen problems with mtl:ofi with &quot;--enable-static --disable-shared&quot;,
</span><br>
<span class="quotelev1">&gt; I tried mtl:psm and mtl:mxm with those options as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The good news is that mtl:psm was fine, but the bad news is when testing
</span><br>
<span class="quotelev1">&gt; mtl:mxm I encountered a new problem involving coll:hcol.
</span><br>
<span class="quotelev1">&gt; Ralph probably wants to strangle me right now...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am configuring the 1.10.0rc4 tarball with
</span><br>
<span class="quotelev1">&gt;    --prefix=[...] --enable-debug --with-verbs --enable-openib-connectx-xrc
</span><br>
<span class="quotelev1">&gt; \
</span><br>
<span class="quotelev1">&gt;    --with-mxm=/opt/mellanox/mxm --with-hcoll=/opt/mellanox/hcoll \
</span><br>
<span class="quotelev1">&gt;    --enable-static --disable-shared
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything was fine without those last two arguments.
</span><br>
<span class="quotelev1">&gt; When I add them the build is fine, and I can compile the examples.
</span><br>
<span class="quotelev1">&gt; However, I get a SEGV when running an example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $mpirun -np 2 examples/ring_c
</span><br>
<span class="quotelev1">&gt; [mir13:12444:0] Caught signal 11 (Segmentation fault)
</span><br>
<span class="quotelev1">&gt; [mir13:12445:0] Caught signal 11 (Segmentation fault)
</span><br>
<span class="quotelev1">&gt; ==== backtrace ====
</span><br>
<span class="quotelev1">&gt; ==== backtrace ====
</span><br>
<span class="quotelev1">&gt;  2 0x0000000000059d9c mxm_handle_error()
</span><br>
<span class="quotelev1">&gt;  /hpc/local/benchmarks/hpc-stack-gcc-Saturday/src/install/mxm-master/
</span><br>
<span class="quotelev1">&gt; src/mxm/util/debug/debug.c:641
</span><br>
<span class="quotelev1">&gt;  3 0x0000000000059f0c mxm_error_signal_handler()
</span><br>
<span class="quotelev1">&gt;  /hpc/local/benchmarks/hpc-stack-gcc-Saturday/src/install/mxm
</span><br>
<span class="quotelev1">&gt; -master/src/mxm/util/debug/debug.c:616
</span><br>
<span class="quotelev1">&gt;  4 0x0000003c2e0329a0 killpg()  ??:0
</span><br>
<span class="quotelev1">&gt;  5 0x0000000000528b51 opal_list_remove_last()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux
</span><br>
<span class="quotelev1">&gt; -x86_64-mxm-static/openmpi-1.10.0rc4/opal/class/opal_list.h:721
</span><br>
<span class="quotelev1">&gt;  6 0x0000000000529872 base_bcol_basesmuma_setup_library_buffers()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/ope
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/bcol/basesmuma/bcol_basesmuma_setup.c:537
</span><br>
<span class="quotelev1">&gt;  7 0x000000000009e983 hmca_bcol_basesmuma_comm_query()  ??:0
</span><br>
<span class="quotelev1">&gt;  8 0x00000000000348e3 hmca_coll_ml_tree_hierarchy_discovery()
</span><br>
<span class="quotelev1">&gt;  coll_ml_module.c:0
</span><br>
<span class="quotelev1">&gt;  9 0x00000000000317a2 hmca_coll_ml_comm_query()  ??:0
</span><br>
<span class="quotelev1">&gt; 10 0x000000000006c929 hcoll_create_context()  ??:0
</span><br>
<span class="quotelev1">&gt; 11 0x00000000004a248f mca_coll_hcoll_comm_query()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-l
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; inux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/hcoll/coll_hcoll_module.c:290
</span><br>
<span class="quotelev1">&gt; 12 0x000000000047c82f query_2_0_0()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mx
</span><br>
<span class="quotelev1">&gt; m-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:392
</span><br>
<span class="quotelev1">&gt; 13 0x000000000047c7ee query()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-stat
</span><br>
<span class="quotelev1">&gt; ic/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:375
</span><br>
<span class="quotelev1">&gt; 14 0x000000000047c704 check_one_component()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:337
</span><br>
<span class="quotelev1">&gt; 15 0x000000000047c567 check_components()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:301
</span><br>
<span class="quotelev1">&gt; 16 0x000000000047552a mca_coll_base_comm_select()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-l
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; inux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:131
</span><br>
<span class="quotelev1">&gt; 17 0x0000000000428476 ompi_mpi_init()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-
</span><br>
<span class="quotelev1">&gt; mxm-static/openmpi-1.10.0rc4/ompi/runtime/ompi_mpi_init.c:894
</span><br>
<span class="quotelev1">&gt; 18 0x0000000000431ba5 PMPI_Init()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-
</span><br>
<span class="quotelev1">&gt; static/BLD/ompi/mpi/c/profile/pinit.c:84
</span><br>
<span class="quotelev1">&gt; 19 0x000000000040abce main()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-stati
</span><br>
<span class="quotelev1">&gt; c/BLD/examples/ring_c.c:19
</span><br>
<span class="quotelev1">&gt; 20 0x0000003c2e01ed1d __libc_start_main()  ??:0
</span><br>
<span class="quotelev1">&gt; 21 0x000000000040aae9 _start()  ??:0
</span><br>
<span class="quotelev1">&gt; ===================
</span><br>
<span class="quotelev1">&gt;  2 0x0000000000059d9c mxm_handle_error()
</span><br>
<span class="quotelev1">&gt;  /hpc/local/benchmarks/hpc-stack-gcc-Saturday/src/install/mxm-master/src/mxm/util/debug/debug.c:641
</span><br>
<span class="quotelev1">&gt;  3 0x0000000000059f0c mxm_error_signal_handler()
</span><br>
<span class="quotelev1">&gt;  /hpc/local/benchmarks/hpc-stack-gcc-Saturday/src/install/mxm-master/src/mxm/util/debug/debug.c:616
</span><br>
<span class="quotelev1">&gt;  4 0x0000003c2e0329a0 killpg()  ??:0
</span><br>
<span class="quotelev1">&gt;  5 0x0000000000528b51 opal_list_remove_last()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/opal/class/opal_list.h:721
</span><br>
<span class="quotelev1">&gt;  6 0x0000000000529872 base_bcol_basesmuma_setup_library_buffers()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/bcol/basesmuma/bcol_basesmuma_setup.c:537
</span><br>
<span class="quotelev1">&gt;  7 0x000000000009e983 hmca_bcol_basesmuma_comm_query()  ??:0
</span><br>
<span class="quotelev1">&gt;  8 0x00000000000348e3 hmca_coll_ml_tree_hierarchy_discovery()
</span><br>
<span class="quotelev1">&gt;  coll_ml_module.c:0
</span><br>
<span class="quotelev1">&gt;  9 0x00000000000317a2 hmca_coll_ml_comm_query()  ??:0
</span><br>
<span class="quotelev1">&gt; 10 0x000000000006c929 hcoll_create_context()  ??:0
</span><br>
<span class="quotelev1">&gt; 11 0x00000000004a248f mca_coll_hcoll_comm_query()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/hcoll/coll_hcoll_module.c:290
</span><br>
<span class="quotelev1">&gt; 12 0x000000000047c82f query_2_0_0()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:392
</span><br>
<span class="quotelev1">&gt; 13 0x000000000047c7ee query()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:375
</span><br>
<span class="quotelev1">&gt; 14 0x000000000047c704 check_one_component()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:337
</span><br>
<span class="quotelev1">&gt; 15 0x000000000047c567 check_components()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:301
</span><br>
<span class="quotelev1">&gt; 16 0x000000000047552a mca_coll_base_comm_select()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:131
</span><br>
<span class="quotelev1">&gt; 17 0x0000000000428476 ompi_mpi_init()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/runtime/ompi_mpi_init.c:894
</span><br>
<span class="quotelev1">&gt; 18 0x0000000000431ba5 PMPI_Init()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/BLD/ompi/mpi/c/profile/pinit.c:84
</span><br>
<span class="quotelev1">&gt; 19 0x000000000040abce main()
</span><br>
<span class="quotelev1">&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/BLD/examples/ring_c.c:19
</span><br>
<span class="quotelev1">&gt; 20 0x0000003c2e01ed1d __libc_start_main()  ??:0
</span><br>
<span class="quotelev1">&gt; 21 0x000000000040aae9 _start()  ??:0
</span><br>
<span class="quotelev1">&gt; ===================
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 12445 on node mir13 exited on
</span><br>
<span class="quotelev1">&gt; signal 13 (Broken pipe).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is reproducible.
</span><br>
<span class="quotelev1">&gt; A run with &quot;-np 1&quot; is fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','PHHargrove_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17795/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17796.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<li><strong>Previous message:</strong> <a href="17794.php">Paul Hargrove: "[OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<li><strong>In reply to:</strong> <a href="17794.php">Paul Hargrove: "[OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17796.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<li><strong>Reply:</strong> <a href="17796.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
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
