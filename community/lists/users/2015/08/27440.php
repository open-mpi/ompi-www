<?
$subject_val = "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 12:47:21 2015" -->
<!-- isoreceived="20150812164721" -->
<!-- sent="Wed, 12 Aug 2015 10:47:19 -0600" -->
<!-- isosent="20150812164719" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space" -->
<!-- id="55CB7897.5040306_at_lanl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CABB+w0QMoN9U+rB-vOrZVgC1v4LLg3F66xtLagPFFX507z+pVA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-08-12 12:47:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27441.php">Deva: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27439.php">Deva: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>In reply to:</strong> <a href="27439.php">Deva: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27441.php">Deva: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Reply:</strong> <a href="27441.php">Deva: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Devendar,
<br>
<p>It looks like I still get the error:
<br>
<p>Konsole output
<br>
[dshrader_at_zo-fe1 tests]$ mpirun -n 2 -mca coll ^ml ./a.out
<br>
App launch reported: 1 (out of 1) daemons - 2 (out of 2) procs
<br>
[1439397957.351764] [zo-fe1:14678:0]         shm.c:65   MXM  WARN  Could 
<br>
not open the KNEM device file at /dev/knem : No such file or direc
<br>
tory. Won't use knem.
<br>
[1439397957.352704] [zo-fe1:14677:0]         shm.c:65   MXM  WARN  Could 
<br>
not open the KNEM device file at /dev/knem : No such file or direc
<br>
tory. Won't use knem.
<br>
[zo-fe1:14677:0] Caught signal 11 (Segmentation fault)
<br>
[zo-fe1:14678:0] Caught signal 11 (Segmentation fault)
<br>
==== backtrace ====
<br>
2 0x0000000000056cdc mxm_handle_error() 
<br>
&nbsp;&nbsp;/scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u6-x86-64-MOFED-CHECKER/hpcx_root/src/h
<br>
pcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64/mxm-v3.3/src/mxm/util/debug/debug.c:641 
<br>
<p>3 0x0000000000056e4c mxm_error_signal_handler() 
<br>
&nbsp;&nbsp;/scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u6-x86-64-MOFED-CHECKER/hpcx_ro
<br>
ot/src/hpcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64/mxm-v3.3/src/mxm/util/debug/debug.c:616 
<br>
<p>4 0x00000000000326a0 killpg()  ??:0
<br>
5 0x00000000000b82cb base_bcol_basesmuma_setup_library_buffers()  ??:0
<br>
6 0x00000000000969e3 hmca_bcol_basesmuma_comm_query()  ??:0
<br>
7 0x0000000000032ee3 hmca_coll_ml_tree_hierarchy_discovery() 
<br>
&nbsp;&nbsp;coll_ml_module.c:0
<br>
8 0x000000000002fda2 hmca_coll_ml_comm_query()  ??:0
<br>
9 0x000000000006ace9 hcoll_create_context()  ??:0
<br>
10 0x00000000000f9706 mca_coll_hcoll_comm_query()  ??:0
<br>
11 0x00000000000f684e mca_coll_base_comm_select()  ??:0
<br>
12 0x0000000000073fc4 ompi_mpi_init()  ??:0
<br>
13 0x0000000000092ea0 PMPI_Init()  ??:0
<br>
14 0x00000000004009b6 main()  ??:0
<br>
15 0x000000000001ed5d __libc_start_main()  ??:0
<br>
16 0x00000000004008c9 _start()  ??:0
<br>
===================
<br>
==== backtrace ====
<br>
2 0x0000000000056cdc mxm_handle_error() 
<br>
&nbsp;&nbsp;/scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u6-x86-64-MOFED-CHECKER/hpcx_root/src/h
<br>
pcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64/mxm-v3.3/src/mxm/util/debug/debug.c:641 
<br>
<p>3 0x0000000000056e4c mxm_error_signal_handler() 
<br>
&nbsp;&nbsp;/scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u6-x86-64-MOFED-CHECKER/hpcx_ro
<br>
ot/src/hpcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64/mxm-v3.3/src/mxm/util/debug/debug.c:616 
<br>
<p>4 0x00000000000326a0 killpg()  ??:0
<br>
5 0x00000000000b82cb base_bcol_basesmuma_setup_library_buffers()  ??:0
<br>
6 0x00000000000969e3 hmca_bcol_basesmuma_comm_query()  ??:0
<br>
7 0x0000000000032ee3 hmca_coll_ml_tree_hierarchy_discovery() 
<br>
&nbsp;&nbsp;coll_ml_module.c:0
<br>
8 0x000000000002fda2 hmca_coll_ml_comm_query()  ??:0
<br>
9 0x000000000006ace9 hcoll_create_context()  ??:0
<br>
10 0x00000000000f9706 mca_coll_hcoll_comm_query()  ??:0
<br>
11 0x00000000000f684e mca_coll_base_comm_select()  ??:0
<br>
12 0x0000000000073fc4 ompi_mpi_init()  ??:0
<br>
13 0x0000000000092ea0 PMPI_Init()  ??:0
<br>
14 0x00000000004009b6 main()  ??:0
<br>
15 0x000000000001ed5d __libc_start_main()  ??:0
<br>
16 0x00000000004008c9 _start()  ??:0
<br>
===================
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 14678 on node zo-fe1 exited 
<br>
on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>Thanks,
<br>
David
<br>
<p>On 08/12/2015 10:42 AM, Deva wrote:
<br>
<span class="quotelev1">&gt; Hi David,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This issue is from hcoll library. This could be because of symbol 
</span><br>
<span class="quotelev1">&gt; conflict with ml module.  This is fixed recently in HCOLL.  Can you 
</span><br>
<span class="quotelev1">&gt; try with &quot;-mca coll ^ml&quot; and see if this workaround works in your setup?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Devendar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 12, 2015 at 9:30 AM, David Shrader &lt;dshrader_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:dshrader_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thank you very much for the patch! It is much more complete than
</span><br>
<span class="quotelev1">&gt;     mine. Using that patch and re-running autogen.pl
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://autogen.pl">http://autogen.pl</a>&gt;, I am able to build 1.8.8 with './configure
</span><br>
<span class="quotelev1">&gt;     --with-hcoll' without errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I do have issues when it comes to running 1.8.8 with hcoll built
</span><br>
<span class="quotelev1">&gt;     in, however. In my quick sanity test of running a basic parallel
</span><br>
<span class="quotelev1">&gt;     hello world C program, I get the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [dshrader_at_zo-fe1 tests]$ mpirun -n 2 ./a.out
</span><br>
<span class="quotelev1">&gt;     App launch reported: 1 (out of 1) daemons - 2 (out of 2) procs
</span><br>
<span class="quotelev1">&gt;     [1439390789.039197] [zo-fe1:31354:0]         shm.c:65   MXM  WARN
</span><br>
<span class="quotelev1">&gt;      Could not open the KNEM device file at /dev/knem : No such file
</span><br>
<span class="quotelev1">&gt;     or direc
</span><br>
<span class="quotelev1">&gt;     tory. Won't use knem.
</span><br>
<span class="quotelev1">&gt;     [1439390789.040265] [zo-fe1:31353:0]         shm.c:65   MXM  WARN
</span><br>
<span class="quotelev1">&gt;      Could not open the KNEM device file at /dev/knem : No such file
</span><br>
<span class="quotelev1">&gt;     or direc
</span><br>
<span class="quotelev1">&gt;     tory. Won't use knem.
</span><br>
<span class="quotelev1">&gt;     [zo-fe1:31353:0] Caught signal 11 (Segmentation fault)
</span><br>
<span class="quotelev1">&gt;     [zo-fe1:31354:0] Caught signal 11 (Segmentation fault)
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
<span class="quotelev1">&gt;     5 0x00000000000b91eb base_bcol_basesmuma_setup_library_buffers()
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
<span class="quotelev1">&gt;     10 0x00000000000fa626 mca_coll_hcoll_comm_query()  ??:0
</span><br>
<span class="quotelev1">&gt;     11 0x00000000000f776e mca_coll_base_comm_select()  ??:0
</span><br>
<span class="quotelev1">&gt;     12 0x0000000000074ee4 ompi_mpi_init()  ??:0
</span><br>
<span class="quotelev1">&gt;     13 0x0000000000093dc0 PMPI_Init()  ??:0
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
<span class="quotelev1">&gt;     5 0x00000000000b91eb base_bcol_basesmuma_setup_library_buffers()
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
<span class="quotelev1">&gt;     10 0x00000000000fa626 mca_coll_hcoll_comm_query()  ??:0
</span><br>
<span class="quotelev1">&gt;     11 0x00000000000f776e mca_coll_base_comm_select()  ??:0
</span><br>
<span class="quotelev1">&gt;     12 0x0000000000074ee4 ompi_mpi_init()  ??:0
</span><br>
<span class="quotelev1">&gt;     13 0x0000000000093dc0 PMPI_Init()  ??:0
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
<span class="quotelev1">&gt;     mpirun noticed that process rank 0 with PID 31353 on node zo-fe1
</span><br>
<span class="quotelev1">&gt;     exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I do not get this message with only 1 process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I am using hcoll 3.2.748. Could this be an issue with hcoll itself
</span><br>
<span class="quotelev1">&gt;     or something with my ompi build?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks,
</span><br>
<span class="quotelev1">&gt;     David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 08/12/2015 12:26 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks David,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     i made a PR for the v1.8 branch at
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="https://github.com/open-mpi/ompi-release/pull/492">https://github.com/open-mpi/ompi-release/pull/492</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     the patch is attached (it required some back-porting)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On 8/12/2015 4:01 AM, David Shrader wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I have cloned Gilles' topic/hcoll_config branch and, after
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     running autogen.pl &lt;<a href="http://autogen.pl">http://autogen.pl</a>&gt;, have found that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     './configure --with-hcoll' does indeed work now. I used Gilles'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     branch as I wasn't sure how best to get the pull request changes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     in to my own clone of master. It looks like the proper checks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     are happening, too:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --- MCA component coll:hcoll(m4 configuration macro)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     checking for MCA component coll:hcollcompile mode... dso
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     checking --with-hcollvalue... simple ok (unspecified)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     checking hcoll/api/hcoll_api.h usability... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     checking hcoll/api/hcoll_api.h presence... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     checking for hcoll/api/hcoll_api.h... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     looking for library without search path
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     checking for library containing hcoll_get_version... -lhcoll
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     checking if MCA component coll:hcollcan compile... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I haven't checked whether or not Open MPI builds successfully as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I don't have much experience running off of the latest source.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     For now, I think I will try to generate a patch to the 1.8.8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     configure script and see if that works as expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     David
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On 08/11/2015 06:34 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     On Aug 11, 2015, at 1:39 AM, &#197;ke Sandgren&lt;ake.sandgren_at_[hidden]&gt; &lt;mailto:ake.sandgren_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Please fix the hcoll test (and code) to be correct.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Any configure test that adds /usr/lib and/or /usr/include to any compile flags is broken.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     +1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Gilles filed<a href="https://github.com/open-mpi/ompi/pull/796">https://github.com/open-mpi/ompi/pull/796</a>; I just added some comments to it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     David Shrader
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Los Alamos National Lab
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Email: dshrader &lt;at&gt;lanl.gov &lt;<a href="http://lanl.gov">http://lanl.gov</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/08/27432.php">http://www.open-mpi.org/community/lists/users/2015/08/27432.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/08/27434.php">http://www.open-mpi.org/community/lists/users/2015/08/27434.php</a>
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
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/08/27438.php">http://www.open-mpi.org/community/lists/users/2015/08/27438.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27439.php">http://www.open-mpi.org/community/lists/users/2015/08/27439.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27440/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27441.php">Deva: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27439.php">Deva: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>In reply to:</strong> <a href="27439.php">Deva: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27441.php">Deva: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Reply:</strong> <a href="27441.php">Deva: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
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
