<?
$subject_val = "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 15:52:03 2015" -->
<!-- isoreceived="20150812195203" -->
<!-- sent="Wed, 12 Aug 2015 13:52:00 -0600" -->
<!-- isosent="20150812195200" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space" -->
<!-- id="55CBA3E0.5070109_at_lanl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CABB+w0QzuJ9Um1sGFvkcY8jtjQi_RxfTfQTTar_PyEZf8oA+vw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space<br>
<strong>From:</strong> David Shrader (<em>dshrader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-12 15:52:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27446.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27444.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem in using openmpi-1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27441.php">Deva: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27447.php">Deva: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The admin that rolled the hcoll rpm that we're using (and got it in 
<br>
system space) said that she got it from 
<br>
hpcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64.tar.
<br>
<p>Thanks,
<br>
David
<br>
<p>On 08/12/2015 10:51 AM, Deva wrote:
<br>
<span class="quotelev1">&gt; From where did you grab this HCOLL lib?  MOFED or HPCX? what version?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 12, 2015 at 9:47 AM, David Shrader &lt;dshrader_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:dshrader_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hey Devendar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It looks like I still get the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [dshrader_at_zo-fe1 tests]$ mpirun -n 2 -mca coll ^ml ./a.out
</span><br>
<span class="quotelev1">&gt;     App launch reported: 1 (out of 1) daemons - 2 (out of 2) procs
</span><br>
<span class="quotelev1">&gt;     [1439397957.351764] [zo-fe1:14678:0]         shm.c:65   MXM  WARN
</span><br>
<span class="quotelev1">&gt;      Could not open the KNEM device file at /dev/knem : No such file
</span><br>
<span class="quotelev1">&gt;     or direc
</span><br>
<span class="quotelev1">&gt;     tory. Won't use knem.
</span><br>
<span class="quotelev1">&gt;     [1439397957.352704] [zo-fe1:14677:0]         shm.c:65   MXM  WARN
</span><br>
<span class="quotelev1">&gt;      Could not open the KNEM device file at /dev/knem : No such file
</span><br>
<span class="quotelev1">&gt;     or direc
</span><br>
<span class="quotelev1">&gt;     tory. Won't use knem.
</span><br>
<span class="quotelev1">&gt;     [zo-fe1:14677:0] Caught signal 11 (Segmentation fault)
</span><br>
<span class="quotelev1">&gt;     [zo-fe1:14678:0] Caught signal 11 (Segmentation fault)
</span><br>
<span class="quotelev1">&gt;     ==== backtrace ====
</span><br>
<span class="quotelev1">&gt;     2 0x0000000000056cdc mxm_handle_error()
</span><br>
<span class="quotelev1">&gt;      /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u6-x86-64-MOFED-CHECKER/hpcx_root/src/h
</span><br>
<span class="quotelev1">&gt;     pcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64/mxm-v3.3/src/mxm/util/debug/debug.c:641
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     3 0x0000000000056e4c mxm_error_signal_handler()
</span><br>
<span class="quotelev1">&gt;      /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u6-x86-64-MOFED-CHECKER/hpcx_ro
</span><br>
<span class="quotelev1">&gt;     ot/src/hpcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64/mxm-v3.3/src/mxm/util/debug/debug.c:616
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     4 0x00000000000326a0 killpg()  ??:0
</span><br>
<span class="quotelev1">&gt;     5 0x00000000000b82cb base_bcol_basesmuma_setup_library_buffers()
</span><br>
<span class="quotelev1">&gt;      ??:0
</span><br>
<span class="quotelev1">&gt;     6 0x00000000000969e3 hmca_bcol_basesmuma_comm_query()  ??:0
</span><br>
<span class="quotelev1">&gt;     7 0x0000000000032ee3 hmca_coll_ml_tree_hierarchy_discovery()
</span><br>
<span class="quotelev1">&gt;      coll_ml_module.c:0
</span><br>
<span class="quotelev1">&gt;     8 0x000000000002fda2 hmca_coll_ml_comm_query()  ??:0
</span><br>
<span class="quotelev1">&gt;     9 0x000000000006ace9 hcoll_create_context()  ??:0
</span><br>
<span class="quotelev1">&gt;     10 0x00000000000f9706 mca_coll_hcoll_comm_query()  ??:0
</span><br>
<span class="quotelev1">&gt;     11 0x00000000000f684e mca_coll_base_comm_select()  ??:0
</span><br>
<span class="quotelev1">&gt;     12 0x0000000000073fc4 ompi_mpi_init()  ??:0
</span><br>
<span class="quotelev1">&gt;     13 0x0000000000092ea0 PMPI_Init()  ??:0
</span><br>
<span class="quotelev1">&gt;     14 0x00000000004009b6 main()  ??:0
</span><br>
<span class="quotelev1">&gt;     15 0x000000000001ed5d __libc_start_main()  ??:0
</span><br>
<span class="quotelev1">&gt;     16 0x00000000004008c9 _start()  ??:0
</span><br>
<span class="quotelev1">&gt;     ===================
</span><br>
<span class="quotelev1">&gt;     ==== backtrace ====
</span><br>
<span class="quotelev1">&gt;     2 0x0000000000056cdc mxm_handle_error()
</span><br>
<span class="quotelev1">&gt;      /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u6-x86-64-MOFED-CHECKER/hpcx_root/src/h
</span><br>
<span class="quotelev1">&gt;     pcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64/mxm-v3.3/src/mxm/util/debug/debug.c:641
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     3 0x0000000000056e4c mxm_error_signal_handler()
</span><br>
<span class="quotelev1">&gt;      /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u6-x86-64-MOFED-CHECKER/hpcx_ro
</span><br>
<span class="quotelev1">&gt;     ot/src/hpcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64/mxm-v3.3/src/mxm/util/debug/debug.c:616
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     4 0x00000000000326a0 killpg()  ??:0
</span><br>
<span class="quotelev1">&gt;     5 0x00000000000b82cb base_bcol_basesmuma_setup_library_buffers()
</span><br>
<span class="quotelev1">&gt;      ??:0
</span><br>
<span class="quotelev1">&gt;     6 0x00000000000969e3 hmca_bcol_basesmuma_comm_query()  ??:0
</span><br>
<span class="quotelev1">&gt;     7 0x0000000000032ee3 hmca_coll_ml_tree_hierarchy_discovery()
</span><br>
<span class="quotelev1">&gt;      coll_ml_module.c:0
</span><br>
<span class="quotelev1">&gt;     8 0x000000000002fda2 hmca_coll_ml_comm_query()  ??:0
</span><br>
<span class="quotelev1">&gt;     9 0x000000000006ace9 hcoll_create_context()  ??:0
</span><br>
<span class="quotelev1">&gt;     10 0x00000000000f9706 mca_coll_hcoll_comm_query()  ??:0
</span><br>
<span class="quotelev1">&gt;     11 0x00000000000f684e mca_coll_base_comm_select()  ??:0
</span><br>
<span class="quotelev1">&gt;     12 0x0000000000073fc4 ompi_mpi_init()  ??:0
</span><br>
<span class="quotelev1">&gt;     13 0x0000000000092ea0 PMPI_Init()  ??:0
</span><br>
<span class="quotelev1">&gt;     14 0x00000000004009b6 main()  ??:0
</span><br>
<span class="quotelev1">&gt;     15 0x000000000001ed5d __libc_start_main()  ??:0
</span><br>
<span class="quotelev1">&gt;     16 0x00000000004008c9 _start()  ??:0
</span><br>
<span class="quotelev1">&gt;     ===================
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mpirun noticed that process rank 1 with PID 14678 on node zo-fe1
</span><br>
<span class="quotelev1">&gt;     exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks,
</span><br>
<span class="quotelev1">&gt;     David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 08/12/2015 10:42 AM, Deva wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Hi David,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     This issue is from hcoll library. This could be because of symbol
</span><br>
<span class="quotelev2">&gt;&gt;     conflict with ml module.  This is fixed recently in HCOLL.  Can
</span><br>
<span class="quotelev2">&gt;&gt;     you try with &quot;-mca coll ^ml&quot; and see if this workaround works in
</span><br>
<span class="quotelev2">&gt;&gt;     your setup?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -Devendar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Wed, Aug 12, 2015 at 9:30 AM, David Shrader &lt;dshrader_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:dshrader_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Hello Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Thank you very much for the patch! It is much more complete
</span><br>
<span class="quotelev2">&gt;&gt;         than mine. Using that patch and re-running autogen.pl
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://autogen.pl">http://autogen.pl</a>&gt;, I am able to build 1.8.8 with
</span><br>
<span class="quotelev2">&gt;&gt;         './configure --with-hcoll' without errors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I do have issues when it comes to running 1.8.8 with hcoll
</span><br>
<span class="quotelev2">&gt;&gt;         built in, however. In my quick sanity test of running a basic
</span><br>
<span class="quotelev2">&gt;&gt;         parallel hello world C program, I get the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         [dshrader_at_zo-fe1 tests]$ mpirun -n 2 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;         App launch reported: 1 (out of 1) daemons - 2 (out of 2) procs
</span><br>
<span class="quotelev2">&gt;&gt;         [1439390789.039197] [zo-fe1:31354:0]         shm.c:65   MXM
</span><br>
<span class="quotelev2">&gt;&gt;          WARN  Could not open the KNEM device file at /dev/knem : No
</span><br>
<span class="quotelev2">&gt;&gt;         such file or direc
</span><br>
<span class="quotelev2">&gt;&gt;         tory. Won't use knem.
</span><br>
<span class="quotelev2">&gt;&gt;         [1439390789.040265] [zo-fe1:31353:0]         shm.c:65   MXM
</span><br>
<span class="quotelev2">&gt;&gt;          WARN  Could not open the KNEM device file at /dev/knem : No
</span><br>
<span class="quotelev2">&gt;&gt;         such file or direc
</span><br>
<span class="quotelev2">&gt;&gt;         tory. Won't use knem.
</span><br>
<span class="quotelev2">&gt;&gt;         [zo-fe1:31353:0] Caught signal 11 (Segmentation fault)
</span><br>
<span class="quotelev2">&gt;&gt;         [zo-fe1:31354:0] Caught signal 11 (Segmentation fault)
</span><br>
<span class="quotelev2">&gt;&gt;         ==== backtrace ====
</span><br>
<span class="quotelev2">&gt;&gt;         2 0x0000000000056cdc mxm_handle_error()
</span><br>
<span class="quotelev2">&gt;&gt;          /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u6-x86-64-MOFED-CHECKER/hpcx_root/src/h
</span><br>
<span class="quotelev2">&gt;&gt;         pcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64/mxm-v3.3/src/mxm/util/debug/debug.c:641
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         3 0x0000000000056e4c mxm_error_signal_handler()
</span><br>
<span class="quotelev2">&gt;&gt;          /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u6-x86-64-MOFED-CHECKER/hpcx_ro
</span><br>
<span class="quotelev2">&gt;&gt;         ot/src/hpcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64/mxm-v3.3/src/mxm/util/debug/debug.c:616
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         4 0x00000000000326a0 killpg()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         5 0x00000000000b91eb
</span><br>
<span class="quotelev2">&gt;&gt;         base_bcol_basesmuma_setup_library_buffers()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         6 0x00000000000969e3 hmca_bcol_basesmuma_comm_query()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         7 0x0000000000032ee3 hmca_coll_ml_tree_hierarchy_discovery()
</span><br>
<span class="quotelev2">&gt;&gt;          coll_ml_module.c:0
</span><br>
<span class="quotelev2">&gt;&gt;         8 0x000000000002fda2 hmca_coll_ml_comm_query()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         9 0x000000000006ace9 hcoll_create_context()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         10 0x00000000000fa626 mca_coll_hcoll_comm_query()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         11 0x00000000000f776e mca_coll_base_comm_select()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         12 0x0000000000074ee4 ompi_mpi_init()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         13 0x0000000000093dc0 PMPI_Init()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         14 0x00000000004009b6 main()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         15 0x000000000001ed5d __libc_start_main()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         16 0x00000000004008c9 _start()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         ===================
</span><br>
<span class="quotelev2">&gt;&gt;         ==== backtrace ====
</span><br>
<span class="quotelev2">&gt;&gt;         2 0x0000000000056cdc mxm_handle_error()
</span><br>
<span class="quotelev2">&gt;&gt;          /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u6-x86-64-MOFED-CHECKER/hpcx_root/src/h
</span><br>
<span class="quotelev2">&gt;&gt;         pcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64/mxm-v3.3/src/mxm/util/debug/debug.c:641
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         3 0x0000000000056e4c mxm_error_signal_handler()
</span><br>
<span class="quotelev2">&gt;&gt;          /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u6-x86-64-MOFED-CHECKER/hpcx_ro
</span><br>
<span class="quotelev2">&gt;&gt;         ot/src/hpcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64/mxm-v3.3/src/mxm/util/debug/debug.c:616
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         4 0x00000000000326a0 killpg()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         5 0x00000000000b91eb
</span><br>
<span class="quotelev2">&gt;&gt;         base_bcol_basesmuma_setup_library_buffers()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         6 0x00000000000969e3 hmca_bcol_basesmuma_comm_query()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         7 0x0000000000032ee3 hmca_coll_ml_tree_hierarchy_discovery()
</span><br>
<span class="quotelev2">&gt;&gt;          coll_ml_module.c:0
</span><br>
<span class="quotelev2">&gt;&gt;         8 0x000000000002fda2 hmca_coll_ml_comm_query()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         9 0x000000000006ace9 hcoll_create_context()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         10 0x00000000000fa626 mca_coll_hcoll_comm_query()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         11 0x00000000000f776e mca_coll_base_comm_select()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         12 0x0000000000074ee4 ompi_mpi_init()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         13 0x0000000000093dc0 PMPI_Init()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         14 0x00000000004009b6 main()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         15 0x000000000001ed5d __libc_start_main()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         16 0x00000000004008c9 _start()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;         ===================
</span><br>
<span class="quotelev2">&gt;&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         mpirun noticed that process rank 0 with PID 31353 on node
</span><br>
<span class="quotelev2">&gt;&gt;         zo-fe1 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I do not get this message with only 1 process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I am using hcoll 3.2.748. Could this be an issue with hcoll
</span><br>
<span class="quotelev2">&gt;&gt;         itself or something with my ompi build?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;         David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On 08/12/2015 12:26 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Thanks David,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         i made a PR for the v1.8 branch at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="https://github.com/open-mpi/ompi-release/pull/492">https://github.com/open-mpi/ompi-release/pull/492</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         the patch is attached (it required some back-porting)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         On 8/12/2015 4:01 AM, David Shrader wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         I have cloned Gilles' topic/hcoll_config branch and, after
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         running autogen.pl &lt;<a href="http://autogen.pl">http://autogen.pl</a>&gt;, have found that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         './configure --with-hcoll' does indeed work now. I used
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Gilles' branch as I wasn't sure how best to get the pull
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         request changes in to my own clone of master. It looks like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         the proper checks are happening, too:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         --- MCA component coll:hcoll(m4 configuration macro)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         checking for MCA component coll:hcollcompile mode... dso
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         checking --with-hcollvalue... simple ok (unspecified)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         checking hcoll/api/hcoll_api.h usability... yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         checking hcoll/api/hcoll_api.h presence... yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         checking for hcoll/api/hcoll_api.h... yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         looking for library without search path
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         checking for library containing hcoll_get_version... -lhcoll
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         checking if MCA component coll:hcollcan compile... yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         I haven't checked whether or not Open MPI builds
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         successfully as I don't have much experience running off of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         the latest source. For now, I think I will try to generate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         a patch to the 1.8.8 configure script and see if that works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         as expected.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         David
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         On 08/11/2015 06:34 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         On Aug 11, 2015, at 1:39 AM, &#197;ke Sandgren&lt;ake.sandgren_at_[hidden]&gt; &lt;mailto:ake.sandgren_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         Please fix the hcoll test (and code) to be correct.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         Any configure test that adds /usr/lib and/or /usr/include to any compile flags is broken.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         +1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Gilles filed<a href="https://github.com/open-mpi/ompi/pull/796">https://github.com/open-mpi/ompi/pull/796</a>; I just added some comments to it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         David Shrader
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Los Alamos National Lab
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Email: dshrader &lt;at&gt;lanl.gov &lt;<a href="http://lanl.gov">http://lanl.gov</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/08/27432.php">http://www.open-mpi.org/community/lists/users/2015/08/27432.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         _______________________________________________ users
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         mailing list users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/08/27434.php">http://www.open-mpi.org/community/lists/users/2015/08/27434.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         -- 
</span><br>
<span class="quotelev2">&gt;&gt;         David Shrader
</span><br>
<span class="quotelev2">&gt;&gt;         HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev2">&gt;&gt;         Los Alamos National Lab
</span><br>
<span class="quotelev2">&gt;&gt;         Email: dshrader &lt;at&gt;lanl.gov &lt;<a href="http://lanl.gov">http://lanl.gov</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2015/08/27438.php">http://www.open-mpi.org/community/lists/users/2015/08/27438.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -Devendar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________ users mailing
</span><br>
<span class="quotelev2">&gt;&gt;     list users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/08/27439.php">http://www.open-mpi.org/community/lists/users/2015/08/27439.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     David Shrader
</span><br>
<span class="quotelev1">&gt;     HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev1">&gt;     Los Alamos National Lab
</span><br>
<span class="quotelev1">&gt;     Email: dshrader &lt;at&gt;lanl.gov &lt;<a href="http://lanl.gov">http://lanl.gov</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/08/27440.php">http://www.open-mpi.org/community/lists/users/2015/08/27440.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Devendar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27441.php">http://www.open-mpi.org/community/lists/users/2015/08/27441.php</a>
</span><br>
<p><pre>
-- 
David Shrader
HPC-3 High Performance Computer Systems
Los Alamos National Lab
Email: dshrader &lt;at&gt; lanl.gov
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27445/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27446.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27444.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem in using openmpi-1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27441.php">Deva: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27447.php">Deva: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
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
