<?
$subject_val = "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 23 16:16:35 2015" -->
<!-- isoreceived="20150823201635" -->
<!-- sent="Sun, 23 Aug 2015 13:16:28 -0700" -->
<!-- isosent="20150823201628" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically" -->
<!-- id="CAAvDA14Ji4tmd211pUQD0-aNQBLdBZb3M_8xT-dz-xG1=A+KmA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7B1C3F7B-6124-4EC9-867F-BDBB6336228F_at_open-mpi.org" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-23 16:16:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17801.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<li><strong>Previous message:</strong> <a href="17799.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<li><strong>In reply to:</strong> <a href="17799.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Indeed, configuration with --enable-mca-no-build=coll-ml resolved my
<br>
problem.
<br>
So, this *is* the same problem at was already known.
<br>
Sorry for the false alarm.
<br>
<p>-Paul
<br>
<p>On Sun, Aug 23, 2015 at 9:43 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I think that&#226;&#128;&#153;s true - this looks like the hcoll symbol issue. I&#226;&#128;&#153;d suggest
</span><br>
<span class="quotelev1">&gt; configuring with &#226;&#128;&#148;enable-mca-no-build=coll-ml to resolve the problem in
</span><br>
<span class="quotelev1">&gt; static builds, or follow Gilles suggestion about .ompi_ignore
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 22, 2015, at 10:14 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if ompi is built statically or with --disable-dlopen, I do not think --mca
</span><br>
<span class="quotelev1">&gt; coll ^ml can prevent the crash (assuming this is the same issue we
</span><br>
<span class="quotelev1">&gt; discussed before).
</span><br>
<span class="quotelev1">&gt; note if you build dynamically and without --disable-dlopen, it might or
</span><br>
<span class="quotelev1">&gt; might not crash, depending on how modules are enumerated, and this is
</span><br>
<span class="quotelev1">&gt; specific to each system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so at this stage, I cannot suspect this is a different issue or not.
</span><br>
<span class="quotelev1">&gt; if the crash still occurs with .ompi_ignore in coll ml, then I could
</span><br>
<span class="quotelev1">&gt; conclude this is a different issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sunday, August 23, 2015, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is on Mellanox's own system where /opt/mellanox/hcoll was updates
</span><br>
<span class="quotelev2">&gt;&gt; Aug 2.
</span><br>
<span class="quotelev2">&gt;&gt; This problem also did not occur unless I build libmpi statically.
</span><br>
<span class="quotelev2">&gt;&gt; A run of &quot;mpirun -mca coll ^ml -np 2 examples/ring_c&quot; still crashes.
</span><br>
<span class="quotelev2">&gt;&gt; So, I really don't know if this is the same issue, but suspect that it is
</span><br>
<span class="quotelev2">&gt;&gt; not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Aug 22, 2015 at 6:00 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; isn t this an issue that was already discussed ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mellanox proprietary hcoll library includes its own coll ml module that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conflicts with the ompi one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mellanox folks fixed this internally but I am not sure this has been
</span><br>
<span class="quotelev3">&gt;&gt;&gt; released.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you can run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nm libhcoll.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if there are some symbols starting with coll_ml, then the issue is still
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if you have time and recent autotools, you can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; touch ompi/mca/coll/ml/.ompi_ignore
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./autogen.pl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and that should be fine
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if you configure'd with dynamic libraries and no --disable_dlopen, then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --mca coll ^ml ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is enough to work around the issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sunday, August 23, 2015, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Having seen problems with mtl:ofi with &quot;--enable-static
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --disable-shared&quot;, I tried mtl:psm and mtl:mxm with those options as well.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The good news is that mtl:psm was fine, but the bad news is when
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; testing mtl:mxm I encountered a new problem involving coll:hcol.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph probably wants to strangle me right now...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am configuring the 1.10.0rc4 tarball with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --prefix=[...] --enable-debug --with-verbs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable-openib-connectx-xrc \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --with-mxm=/opt/mellanox/mxm --with-hcoll=/opt/mellanox/hcoll \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --enable-static --disable-shared
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Everything was fine without those last two arguments.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I add them the build is fine, and I can compile the examples.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, I get a SEGV when running an example:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $mpirun -np 2 examples/ring_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mir13:12444:0] Caught signal 11 (Segmentation fault)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mir13:12445:0] Caught signal 11 (Segmentation fault)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==== backtrace ====
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==== backtrace ====
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  2 0x0000000000059d9c mxm_handle_error()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/local/benchmarks/hpc-stack-gcc-Saturday/src/install/mxm-master/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; src/mxm/util/debug/debug.c:641
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  3 0x0000000000059f0c mxm_error_signal_handler()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/local/benchmarks/hpc-stack-gcc-Saturday/src/install/mxm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -master/src/mxm/util/debug/debug.c:616
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  4 0x0000003c2e0329a0 killpg()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  5 0x0000000000528b51 opal_list_remove_last()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -x86_64-mxm-static/openmpi-1.10.0rc4/opal/class/opal_list.h:721
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  6 0x0000000000529872 base_bcol_basesmuma_setup_library_buffers()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/ope
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/bcol/basesmuma/bcol_basesmuma_setup.c:537
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  7 0x000000000009e983 hmca_bcol_basesmuma_comm_query()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  8 0x00000000000348e3 hmca_coll_ml_tree_hierarchy_discovery()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  coll_ml_module.c:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  9 0x00000000000317a2 hmca_coll_ml_comm_query()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 10 0x000000000006c929 hcoll_create_context()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 11 0x00000000004a248f mca_coll_hcoll_comm_query()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-l
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; inux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/hcoll/coll_hcoll_module.c:290
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 12 0x000000000047c82f query_2_0_0()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; m-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:392
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 13 0x000000000047c7ee query()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-stat
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ic/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:375
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 14 0x000000000047c704 check_one_component()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:337
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 15 0x000000000047c567 check_components()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:301
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 16 0x000000000047552a mca_coll_base_comm_select()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-l
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; inux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:131
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 17 0x0000000000428476 ompi_mpi_init()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mxm-static/openmpi-1.10.0rc4/ompi/runtime/ompi_mpi_init.c:894
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 18 0x0000000000431ba5 PMPI_Init()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; static/BLD/ompi/mpi/c/profile/pinit.c:84
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 19 0x000000000040abce main()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-stati
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; c/BLD/examples/ring_c.c:19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 20 0x0000003c2e01ed1d __libc_start_main()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 21 0x000000000040aae9 _start()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  2 0x0000000000059d9c mxm_handle_error()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/local/benchmarks/hpc-stack-gcc-Saturday/src/install/mxm-master/src/mxm/util/debug/debug.c:641
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  3 0x0000000000059f0c mxm_error_signal_handler()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/local/benchmarks/hpc-stack-gcc-Saturday/src/install/mxm-master/src/mxm/util/debug/debug.c:616
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  4 0x0000003c2e0329a0 killpg()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  5 0x0000000000528b51 opal_list_remove_last()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/opal/class/opal_list.h:721
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  6 0x0000000000529872 base_bcol_basesmuma_setup_library_buffers()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/bcol/basesmuma/bcol_basesmuma_setup.c:537
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  7 0x000000000009e983 hmca_bcol_basesmuma_comm_query()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  8 0x00000000000348e3 hmca_coll_ml_tree_hierarchy_discovery()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  coll_ml_module.c:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  9 0x00000000000317a2 hmca_coll_ml_comm_query()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 10 0x000000000006c929 hcoll_create_context()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 11 0x00000000004a248f mca_coll_hcoll_comm_query()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/hcoll/coll_hcoll_module.c:290
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 12 0x000000000047c82f query_2_0_0()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:392
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 13 0x000000000047c7ee query()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:375
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 14 0x000000000047c704 check_one_component()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:337
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 15 0x000000000047c567 check_components()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:301
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 16 0x000000000047552a mca_coll_base_comm_select()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/mca/coll/base/coll_base_comm_select.c:131
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 17 0x0000000000428476 ompi_mpi_init()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/openmpi-1.10.0rc4/ompi/runtime/ompi_mpi_init.c:894
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 18 0x0000000000431ba5 PMPI_Init()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/BLD/ompi/mpi/c/profile/pinit.c:84
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 19 0x000000000040abce main()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-mxm-static/BLD/examples/ring_c.c:19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 20 0x0000003c2e01ed1d __libc_start_main()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 21 0x000000000040aae9 _start()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that process rank 1 with PID 12445 on node mir13 exited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on signal 13 (Broken pipe).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is reproducible.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A run with &quot;-np 1&quot; is fine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17795.php">http://www.open-mpi.org/community/lists/devel/2015/08/17795.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17797.php">http://www.open-mpi.org/community/lists/devel/2015/08/17797.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17799.php">http://www.open-mpi.org/community/lists/devel/2015/08/17799.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17800/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17801.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<li><strong>Previous message:</strong> <a href="17799.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<li><strong>In reply to:</strong> <a href="17799.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
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
