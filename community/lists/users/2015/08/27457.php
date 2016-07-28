<?
$subject_val = "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 13 11:23:12 2015" -->
<!-- isoreceived="20150813152312" -->
<!-- sent="Thu, 13 Aug 2015 09:23:09 -0600" -->
<!-- isosent="20150813152309" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space" -->
<!-- id="55CCB65D.2050206_at_lanl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="DBE73523-B0EA-42E7-A496-18306779CAA7_at_cisco.com" -->
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
<strong>Date:</strong> 2015-08-13 11:23:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27458.php">Nathan Hjelm: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27456.php">David Shrader: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>In reply to:</strong> <a href="27454.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27458.php">Nathan Hjelm: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Reply:</strong> <a href="27458.php">Nathan Hjelm: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Reply:</strong> <a href="27460.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Jeff,
<br>
<p>I'm actually not able to find coll_ml related files at that location. 
<br>
All I see are the following files:
<br>
<p>[dshrader_at_zo-fe1 openmpi]$ ls 
<br>
/usr/projects/hpcsoft/toss2/zorrillo/openmpi/1.8.8-gcc-4.4/lib/openmpi/
<br>
libompi_dbg_msgq.a  libompi_dbg_msgq.la  libompi_dbg_msgq.so
<br>
<p>In this particular build, I am using platform files instead of the 
<br>
stripped down debug builds I was doing before. Could something in the 
<br>
platform files move or combine with something else the coll_ml related 
<br>
files?
<br>
<p>Thanks,
<br>
David
<br>
<p>On 08/13/2015 04:02 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Note that this will require you to have fairly recent GNU Autotools installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another workaround for avoiding the coll ml module would be to install Open MPI as normal, and then rm the following files after installation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     rm $prefix/lib/openmpi/mca_coll_ml*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will physically remove the coll ml plugin from the Open MPI installation, and therefore it won't/can't be used (or interfere with the hcoll plugin).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 13, 2015, at 2:03 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; David,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i guess you do not want to use the ml coll module at all  in openmpi 1.8.8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you can simply do
</span><br>
<span class="quotelev2">&gt;&gt; touch ompi/mca/coll/ml/.ompi_ignore
</span><br>
<span class="quotelev2">&gt;&gt; ./autogen.pl
</span><br>
<span class="quotelev2">&gt;&gt; ./configure ...
</span><br>
<span class="quotelev2">&gt;&gt; make &amp;&amp; make install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so the ml component is not even built
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 8/13/2015 7:30 AM, David Shrader wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I remember seeing those, but forgot about them. I am curious, though, why using '-mca coll ^ml' wouldn't work for me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We'll watch for the next HPCX release. Is there an ETA on when that release may happen? Thank you for the help!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 08/12/2015 04:04 PM, Deva wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; David,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is because of hcoll symbols conflict with ml coll module inside OMPI. HCOLL is derived from ml module. This issue is fixed in hcoll library and will be available in next HPCX release.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Some earlier discussion on this issue:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27154.php">http://www.open-mpi.org/community/lists/users/2015/06/27154.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17562.php">http://www.open-mpi.org/community/lists/devel/2015/06/17562.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Devendar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Aug 12, 2015 at 2:52 PM, David Shrader &lt;dshrader_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Interesting... the seg faults went away:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [dshrader_at_zo-fe1 tests]$ export LD_PRELOAD=/usr/lib64/libhcoll.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [dshrader_at_zo-fe1 tests]$ mpirun -n 2 -mca coll ^ml ./a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; App launch reported: 1 (out of 1) daemons - 2 (out of 2) procs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [1439416182.732720] [zo-fe1:14690:0]         shm.c:65   MXM  WARN  Could not open the KNEM device file at /dev/knem : No such file or direc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tory. Won't use knem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [1439416182.733640] [zo-fe1:14689:0]         shm.c:65   MXM  WARN  Could not open the KNEM device file at /dev/knem : No such file or direc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tory. Won't use knem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0: Running on host zo-fe1.lanl.gov
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0: We have 2 processors
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0: Hello 1! Processor 1 on host zo-fe1.lanl.gov reporting for duty
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This implies to me that some other library is being used instead of /usr/lib64/libhcoll.so, but I am not sure how that could be...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; David
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 08/12/2015 03:30 PM, Deva wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi David,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I tried same tarball on OFED-1.5.4.1 and I could not reproduce the issue.  Can you do one more quick test with seeing LD_PRELOAD to hcoll lib?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $LD_PRELOAD=&lt;path/to/hcoll/lib/libhcoll.so&gt;  mpirun -n 2  -mca coll ^ml ./a.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Devendar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Wed, Aug 12, 2015 at 12:52 PM, David Shrader &lt;dshrader_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The admin that rolled the hcoll rpm that we're using (and got it in system space) said that she got it from hpcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64.tar.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; David
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 08/12/2015 10:51 AM, Deva wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  From where did you grab this HCOLL lib?  MOFED or HPCX? what version?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Wed, Aug 12, 2015 at 9:47 AM, David Shrader &lt;dshrader_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hey Devendar,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It looks like I still get the error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [dshrader_at_zo-fe1 tests]$ mpirun -n 2 -mca coll ^ml ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; App launch reported: 1 (out of 1) daemons - 2 (out of 2) procs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [1439397957.351764] [zo-fe1:14678:0]         shm.c:65   MXM  WARN  Could not open the KNEM device file at /dev/knem : No such file or direc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tory. Won't use knem.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [1439397957.352704] [zo-fe1:14677:0]         shm.c:65   MXM  WARN  Could not open the KNEM device file at /dev/knem : No such file or direc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tory. Won't use knem.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [zo-fe1:14677:0] Caught signal 11 (Segmentation fault)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [zo-fe1:14678:0] Caught signal 11 (Segmentation fault)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ==== backtrace ====
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2 0x0000000000056cdc mxm_handle_error()  /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u6-x86-64-MOFED-CHECKER/hpcx_root/src/h
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64/mxm-v3.3/src/mxm/util/debug/debug.c:641
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 3 0x0000000000056e4c mxm_error_signal_handler()  /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u6-x86-64-MOFED-CHECKER/hpcx_ro
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ot/src/hpcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64/mxm-v3.3/src/mxm/util/debug/debug.c:616
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 4 0x00000000000326a0 killpg()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 5 0x00000000000b82cb base_bcol_basesmuma_setup_library_buffers()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 6 0x00000000000969e3 hmca_bcol_basesmuma_comm_query()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 7 0x0000000000032ee3 hmca_coll_ml_tree_hierarchy_discovery()  coll_ml_module.c:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 8 0x000000000002fda2 hmca_coll_ml_comm_query()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 9 0x000000000006ace9 hcoll_create_context()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 10 0x00000000000f9706 mca_coll_hcoll_comm_query()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 11 0x00000000000f684e mca_coll_base_comm_select()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 12 0x0000000000073fc4 ompi_mpi_init()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 13 0x0000000000092ea0 PMPI_Init()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 14 0x00000000004009b6 main()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 15 0x000000000001ed5d __libc_start_main()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 16 0x00000000004008c9 _start()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ===================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ==== backtrace ====
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2 0x0000000000056cdc mxm_handle_error()  /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u6-x86-64-MOFED-CHECKER/hpcx_root/src/h
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64/mxm-v3.3/src/mxm/util/debug/debug.c:641
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 3 0x0000000000056e4c mxm_error_signal_handler()  /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u6-x86-64-MOFED-CHECKER/hpcx_ro
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ot/src/hpcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64/mxm-v3.3/src/mxm/util/debug/debug.c:616
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 4 0x00000000000326a0 killpg()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 5 0x00000000000b82cb base_bcol_basesmuma_setup_library_buffers()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 6 0x00000000000969e3 hmca_bcol_basesmuma_comm_query()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 7 0x0000000000032ee3 hmca_coll_ml_tree_hierarchy_discovery()  coll_ml_module.c:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 8 0x000000000002fda2 hmca_coll_ml_comm_query()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 9 0x000000000006ace9 hcoll_create_context()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 10 0x00000000000f9706 mca_coll_hcoll_comm_query()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 11 0x00000000000f684e mca_coll_base_comm_select()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 12 0x0000000000073fc4 ompi_mpi_init()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 13 0x0000000000092ea0 PMPI_Init()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 14 0x00000000004009b6 main()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 15 0x000000000001ed5d __libc_start_main()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 16 0x00000000004008c9 _start()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ===================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun noticed that process rank 1 with PID 14678 on node zo-fe1 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 08/12/2015 10:42 AM, Deva wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi David,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This issue is from hcoll library. This could be because of symbol conflict with ml module.  This is fixed recently in HCOLL.  Can you try with &quot;-mca coll ^ml&quot; and see if this workaround works in your setup?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Devendar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Wed, Aug 12, 2015 at 9:30 AM, David Shrader &lt;dshrader_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you very much for the patch! It is much more complete than mine. Using that patch and re-running autogen.pl, I am able to build 1.8.8 with './configure --with-hcoll' without errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I do have issues when it comes to running 1.8.8 with hcoll built in, however. In my quick sanity test of running a basic parallel hello world C program, I get the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [dshrader_at_zo-fe1 tests]$ mpirun -n 2 ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; App launch reported: 1 (out of 1) daemons - 2 (out of 2) procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [1439390789.039197] [zo-fe1:31354:0]         shm.c:65   MXM  WARN  Could not open the KNEM device file at /dev/knem : No such file or direc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tory. Won't use knem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [1439390789.040265] [zo-fe1:31353:0]         shm.c:65   MXM  WARN  Could not open the KNEM device file at /dev/knem : No such file or direc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tory. Won't use knem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [zo-fe1:31353:0] Caught signal 11 (Segmentation fault)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [zo-fe1:31354:0] Caught signal 11 (Segmentation fault)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==== backtrace ====
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2 0x0000000000056cdc mxm_handle_error()  /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u6-x86-64-MOFED-CHECKER/hpcx_root/src/h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; pcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64/mxm-v3.3/src/mxm/util/debug/debug.c:641
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 3 0x0000000000056e4c mxm_error_signal_handler()  /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u6-x86-64-MOFED-CHECKER/hpcx_ro
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ot/src/hpcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64/mxm-v3.3/src/mxm/util/debug/debug.c:616
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 4 0x00000000000326a0 killpg()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 5 0x00000000000b91eb base_bcol_basesmuma_setup_library_buffers()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 6 0x00000000000969e3 hmca_bcol_basesmuma_comm_query()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 7 0x0000000000032ee3 hmca_coll_ml_tree_hierarchy_discovery()  coll_ml_module.c:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 8 0x000000000002fda2 hmca_coll_ml_comm_query()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 9 0x000000000006ace9 hcoll_create_context()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10 0x00000000000fa626 mca_coll_hcoll_comm_query()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 11 0x00000000000f776e mca_coll_base_comm_select()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12 0x0000000000074ee4 ompi_mpi_init()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 13 0x0000000000093dc0 PMPI_Init()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 14 0x00000000004009b6 main()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 15 0x000000000001ed5d __libc_start_main()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 16 0x00000000004008c9 _start()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ===================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==== backtrace ====
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2 0x0000000000056cdc mxm_handle_error()  /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u6-x86-64-MOFED-CHECKER/hpcx_root/src/h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; pcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64/mxm-v3.3/src/mxm/util/debug/debug.c:641
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 3 0x0000000000056e4c mxm_error_signal_handler()  /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u6-x86-64-MOFED-CHECKER/hpcx_ro
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ot/src/hpcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.6-x86_64/mxm-v3.3/src/mxm/util/debug/debug.c:616
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 4 0x00000000000326a0 killpg()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 5 0x00000000000b91eb base_bcol_basesmuma_setup_library_buffers()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 6 0x00000000000969e3 hmca_bcol_basesmuma_comm_query()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 7 0x0000000000032ee3 hmca_coll_ml_tree_hierarchy_discovery()  coll_ml_module.c:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 8 0x000000000002fda2 hmca_coll_ml_comm_query()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 9 0x000000000006ace9 hcoll_create_context()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10 0x00000000000fa626 mca_coll_hcoll_comm_query()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 11 0x00000000000f776e mca_coll_base_comm_select()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12 0x0000000000074ee4 ompi_mpi_init()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 13 0x0000000000093dc0 PMPI_Init()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 14 0x00000000004009b6 main()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 15 0x000000000001ed5d __libc_start_main()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 16 0x00000000004008c9 _start()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ===================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 31353 on node zo-fe1 exited on signal 11 (Segmentation                                                           fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I do not get this message with only 1 process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am using hcoll 3.2.748. Could this be an issue with hcoll itself or something with my ompi build?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; David
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 08/12/2015 12:26 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks David,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; i made a PR for the v1.8 branch at <a href="https://github.com/open-mpi/ompi-release/pull/492">https://github.com/open-mpi/ompi-release/pull/492</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the patch is attached (it required some back-porting)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 8/12/2015 4:01 AM, David Shrader wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have cloned Gilles' topic/hcoll_config branch and, after running autogen.pl, have found that './configure --with-hcoll' does indeed work now. I used Gilles' branch as I wasn't sure how best to get the pull request changes in to my own clone of master. It looks like the proper checks are happening, too:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --- MCA component coll:hcoll (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for MCA component coll:hcoll compile mode... dso
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking --with-hcoll value... simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking hcoll/api/hcoll_api.h usability... yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking hcoll/api/hcoll_api.h presence... yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for hcoll/api/hcoll_api.h... yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; looking for library without search path
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking for library containing hcoll_get_version... -lhcoll
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking if MCA component coll:hcoll can compile... yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I haven't checked whether or not Open MPI builds successfully as I don't have much experience running off of the latest source. For now, I think I will try to generate a patch to the 1.8.8 configure script and see if that works as expected.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; David
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 08/11/2015 06:34 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Aug 11, 2015, at 1:39 AM, &#197;ke Sandgren &lt;ake.sandgren_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please fix the hcoll test (and code) to be correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any configure test that adds /usr/lib and/or /usr/include to any compile flags is broken.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; +1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gilles filed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://github.com/open-mpi/ompi/pull/796">https://github.com/open-mpi/ompi/pull/796</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ; I just added some comments to it.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; David Shrader
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Los Alamos National Lab
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Email: dshrader &lt;at&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lanl.gov
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27432.php">http://www.open-mpi.org/community/lists/users/2015/08/27432.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27434.php">http://www.open-mpi.org/community/lists/users/2015/08/27434.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; David Shrader
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Los Alamos National Lab
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Email: dshrader &lt;at&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; lanl.gov
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27438.php">http://www.open-mpi.org/community/lists/users/2015/08/27438.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Devendar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27439.php">http://www.open-mpi.org/community/lists/users/2015/08/27439.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; David Shrader
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Los Alamos National Lab
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Email: dshrader &lt;at&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lanl.gov
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27440.php">http://www.open-mpi.org/community/lists/users/2015/08/27440.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -Devendar
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27441.php">http://www.open-mpi.org/community/lists/users/2015/08/27441.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; David Shrader
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Los Alamos National Lab
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Email: dshrader &lt;at&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lanl.gov
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27445.php">http://www.open-mpi.org/community/lists/users/2015/08/27445.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Devendar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; David Shrader
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Los Alamos National Lab
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Email: dshrader &lt;at&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lanl.gov
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Devendar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David Shrader
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Los Alamos National Lab
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email: dshrader &lt;at&gt; lanl.gov
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27448.php">http://www.open-mpi.org/community/lists/users/2015/08/27448.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27453.php">http://www.open-mpi.org/community/lists/users/2015/08/27453.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
David Shrader
HPC-3 High Performance Computer Systems
Los Alamos National Lab
Email: dshrader &lt;at&gt; lanl.gov
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27458.php">Nathan Hjelm: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27456.php">David Shrader: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>In reply to:</strong> <a href="27454.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27458.php">Nathan Hjelm: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Reply:</strong> <a href="27458.php">Nathan Hjelm: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Reply:</strong> <a href="27460.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
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
