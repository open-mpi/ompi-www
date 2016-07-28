<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan  4 14:18:31 2007" -->
<!-- isoreceived="20070104191831" -->
<!-- sent="Thu, 4 Jan 2007 14:18:23 -0500" -->
<!-- isosent="20070104191823" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi failing on mx only" -->
<!-- id="EB69DF51-8505-4C88-8653-81EF19055874_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="559847D38F12F742B0EE27727596F42901A7EDF3_at_NDJSEVS14.ndc.nasa.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-04 14:18:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2434.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2432.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2432.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2434.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I think we may have broken something in last night's tarball  
<br>
(this just came up on an internal development list, too).  I.e.,  
<br>
someone broke something that was fixed a little while later, but the  
<br>
nightly tarball was created before the problem was fixed.
<br>
<p>Sorry about that.  :-(  Such is the nature of nightly snapshots...
<br>
<p><p><p>On Jan 4, 2007, at 2:00 PM, Grobe, Gary L. ((JSC-EV))[ESCG] wrote:
<br>
<p><span class="quotelev1">&gt; I've grabbed last nights tarball (1.2b3r12981) and tried using the
</span><br>
<span class="quotelev1">&gt; shared mem transport on btl and mx,self on mtl, same results. What I
</span><br>
<span class="quotelev1">&gt; don't get is that, sometimes it works, and sometimes it doesn't (for
</span><br>
<span class="quotelev1">&gt; either). For example, I can run it 10 times successfully then incr the
</span><br>
<span class="quotelev1">&gt; -np from 7 to 10 across 3 nodes, and it'll immediately fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's an example of one run right after another.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --prefix /usr/local/openmpi-1.2b3r12981/ -x
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=${LD_LIBRARY_PATH} --hostfile ./h25-27 -np 10 --mca  
</span><br>
<span class="quotelev1">&gt; mtl
</span><br>
<span class="quotelev1">&gt; mx,self ./cpi
</span><br>
<span class="quotelev1">&gt; Process 0 of 10 is on node-25
</span><br>
<span class="quotelev1">&gt; Process 4 of 10 is on node-26
</span><br>
<span class="quotelev1">&gt; Process 1 of 10 is on node-25
</span><br>
<span class="quotelev1">&gt; Process 5 of 10 is on node-26
</span><br>
<span class="quotelev1">&gt; Process 2 of 10 is on node-25
</span><br>
<span class="quotelev1">&gt; Process 8 of 10 is on node-27
</span><br>
<span class="quotelev1">&gt; Process 6 of 10 is on node-26
</span><br>
<span class="quotelev1">&gt; Process 9 of 10 is on node-27
</span><br>
<span class="quotelev1">&gt; Process 7 of 10 is on node-26
</span><br>
<span class="quotelev1">&gt; Process 3 of 10 is on node-25
</span><br>
<span class="quotelev1">&gt; pi is approximately 3.1415926544231256, Error is 0.0000000008333325
</span><br>
<span class="quotelev1">&gt; wall clock time = 0.017513
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --prefix /usr/local/openmpi-1.2b3r12981/ -x
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=${LD_LIBRARY_PATH} --hostfile ./h25-27 -np 10 --mca  
</span><br>
<span class="quotelev1">&gt; mtl
</span><br>
<span class="quotelev1">&gt; mx,self ./cpi
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:(nil)
</span><br>
<span class="quotelev1">&gt; [0]
</span><br>
<span class="quotelev1">&gt; func:/usr/local/openmpi-1.2b3r12981/lib/libopen-pal.so.0 
</span><br>
<span class="quotelev1">&gt; (opal_backtrace_
</span><br>
<span class="quotelev1">&gt; print+0x1f) [0x2b8ddf3ccd3f]
</span><br>
<span class="quotelev1">&gt; [1] func:/usr/local/openmpi-1.2b3r12981/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; [0x2b8ddf3cb891]
</span><br>
<span class="quotelev1">&gt; [2] func:/lib/libpthread.so.0 [0x2b8ddf98f6c0]
</span><br>
<span class="quotelev1">&gt; [3] func:/opt/mx/lib/libmyriexpress.so(mx_open_endpoint+0x6df)
</span><br>
<span class="quotelev1">&gt; [0x2b8de25bf2af]
</span><br>
<span class="quotelev1">&gt; [4]
</span><br>
<span class="quotelev1">&gt; func:/usr/local/openmpi-1.2b3r12981/lib/openmpi/mca_btl_mx.so 
</span><br>
<span class="quotelev1">&gt; (mca_btl_mx
</span><br>
<span class="quotelev1">&gt; _component_init+0x5d7) [0x2b8de27dcd27]
</span><br>
<span class="quotelev1">&gt; [5]
</span><br>
<span class="quotelev1">&gt; func:/usr/local/openmpi-1.2b3r12981/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (mca_btl_base_select+
</span><br>
<span class="quotelev1">&gt; 0x156) [0x2b8ddf125b46]
</span><br>
<span class="quotelev1">&gt; [6]
</span><br>
<span class="quotelev1">&gt; func:/usr/local/openmpi-1.2b3r12981/lib/openmpi/mca_bml_r2.so 
</span><br>
<span class="quotelev1">&gt; (mca_bml_r2
</span><br>
<span class="quotelev1">&gt; _component_init+0x11) [0x2b8de26d7491]
</span><br>
<span class="quotelev1">&gt; [7]
</span><br>
<span class="quotelev1">&gt; func:/usr/local/openmpi-1.2b3r12981/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (mca_bml_base_init+0x
</span><br>
<span class="quotelev1">&gt; 7d) [0x2b8ddf12543d]
</span><br>
<span class="quotelev1">&gt; [8]
</span><br>
<span class="quotelev1">&gt; func:/usr/local/openmpi-1.2b3r12981/lib/openmpi/mca_pml_ob1.so 
</span><br>
<span class="quotelev1">&gt; (mca_pml_o
</span><br>
<span class="quotelev1">&gt; b1_component_init+0x6b) [0x2b8de23a4f8b]
</span><br>
<span class="quotelev1">&gt; [9]
</span><br>
<span class="quotelev1">&gt; func:/usr/local/openmpi-1.2b3r12981/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (mca_pml_base_select+
</span><br>
<span class="quotelev1">&gt; 0x113) [0x2b8ddf12cea3]
</span><br>
<span class="quotelev1">&gt; [10]
</span><br>
<span class="quotelev1">&gt; func:/usr/local/openmpi-1.2b3r12981/lib/libmpi.so.0(ompi_mpi_init 
</span><br>
<span class="quotelev1">&gt; +0x45a)
</span><br>
<span class="quotelev1">&gt; [0x2b8ddf0f5bda]
</span><br>
<span class="quotelev1">&gt; [11] func:/usr/local/openmpi-1.2b3r12981/lib/libmpi.so.0(MPI_Init 
</span><br>
<span class="quotelev1">&gt; +0x83)
</span><br>
<span class="quotelev1">&gt; [0x2b8ddf116af3]
</span><br>
<span class="quotelev1">&gt; [12] func:./cpi(main+0x42) [0x400cd5]
</span><br>
<span class="quotelev1">&gt; [13] func:/lib/libc.so.6(__libc_start_main+0xe3) [0x2b8ddfab50e3]
</span><br>
<span class="quotelev1">&gt; [14] func:./cpi [0x400bd9]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 0 on node node-25 exited on
</span><br>
<span class="quotelev1">&gt; signal 11.
</span><br>
<span class="quotelev1">&gt; 9 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Brian W. Barrett
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, January 02, 2007 4:11 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Ompi failing on mx only
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry to jump into the discussion late.  The mx btl does not support
</span><br>
<span class="quotelev1">&gt; communication between processes on the same node by itself, so you  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; to include the shared memory transport when using MX.  This will
</span><br>
<span class="quotelev1">&gt; eventually be fixed, but likely not for the 1.2 release.  So if you  
</span><br>
<span class="quotelev1">&gt; do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpirun --prefix /usr/local/openmpi-1.2b2 -x LD_LIBRARY_PATH --
</span><br>
<span class="quotelev1">&gt; hostfile ./h1-3 -np 2 --mca btl mx,sm,self ./cpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should work much better.  As for the MTL, there is a bug in the MX
</span><br>
<span class="quotelev1">&gt; MTL for v1.2 that has been fixed, but after 1.2b2 that could cause the
</span><br>
<span class="quotelev1">&gt; random failures you were seeing.  It will work much better after
</span><br>
<span class="quotelev1">&gt; 1.2b3 is released (or if you are feeling really lucky, you can try out
</span><br>
<span class="quotelev1">&gt; the 1.2 nightly tarballs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MTL is a new feature in v1.2. It is a different communication
</span><br>
<span class="quotelev1">&gt; abstraction designed to support interconnects that have matching
</span><br>
<span class="quotelev1">&gt; implemented in the lower level library or in hardware (Myrinet/MX,
</span><br>
<span class="quotelev1">&gt; Portals, InfiniPath are currently implemented).  The MTL allows us to
</span><br>
<span class="quotelev1">&gt; exploit the low latency and asynchronous progress these libraries can
</span><br>
<span class="quotelev1">&gt; provide, but does mean multi-nic abilities are reduced.  Further, the
</span><br>
<span class="quotelev1">&gt; MTL is not well suited to interconnects like TCP or InfiniBand, so we
</span><br>
<span class="quotelev1">&gt; will continue supporting the BTL interface as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 2, 2007, at 2:44 PM, Grobe, Gary L. ((JSC-EV))[ESCG] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; About the -x, I've been trying it both ways and prefer the latter,  
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; results for either are the same. But it's value is correct.
</span><br>
<span class="quotelev2">&gt;&gt; I've attached the ompi_info from node-1 and node-2. Sorry for not
</span><br>
<span class="quotelev2">&gt;&gt; zipping them, but they were small and I think I'd have firewall
</span><br>
<span class="quotelev2">&gt;&gt; issues.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun --prefix /usr/local/openmpi-1.2b2 -x LD_LIBRARY_PATH --
</span><br>
<span class="quotelev2">&gt;&gt; hostfile ./h13-15 -np 6 --mca pml cm ./cpi [node-14:19260] mx_connect
</span><br>
<span class="quotelev2">&gt;&gt; fail for node-14:0 with key aaaaffff (error Endpoint closed or not
</span><br>
<span class="quotelev2">&gt;&gt; connectable!) [node-14:19261] mx_connect fail for node-14:0 with key
</span><br>
<span class="quotelev2">&gt;&gt; aaaaffff (error Endpoint closed or not connectable!) ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any info anywhere's on MTL? Anyways, I've run w/ mtl, and
</span><br>
<span class="quotelev2">&gt;&gt; sometimes it actually worked once. But now I can't reproduce it and
</span><br>
<span class="quotelev2">&gt;&gt; it's throwing sig 7's, 11's, and 4's depending upon the number of
</span><br>
<span class="quotelev2">&gt;&gt; procs I give it. But now that you mention mapper, I take it that's
</span><br>
<span class="quotelev2">&gt;&gt; what SEGV_MAPERR might be referring to. I'm looking into the
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun --prefix /usr/local/openmpi-1.2b2 -x LD_LIBRARY_PATH=$
</span><br>
<span class="quotelev2">&gt;&gt; {LD_LIBRARY_PATH} --hostfile ./h1-3 -np 5 --mca mtl mx,self ./cpi
</span><br>
<span class="quotelev2">&gt;&gt; Process 4 of 5 is on node-2 Process 0 of 5 is on node-1 Process 1  
</span><br>
<span class="quotelev2">&gt;&gt; of 5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; is on node-1 Process 2 of 5 is on node-1 Process 3 of 5 is on node-1
</span><br>
<span class="quotelev2">&gt;&gt; pi is approximately 3.1415926544231225, Error is 0.0000000008333294
</span><br>
<span class="quotelev2">&gt;&gt; wall clock time = 0.019305
</span><br>
<span class="quotelev2">&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR) Failing at
</span><br>
<span class="quotelev2">&gt;&gt; addr:0x2b88243862be mpirun noticed that job rank 0 with PID 0 on node
</span><br>
<span class="quotelev2">&gt;&gt; node-1 exited on signal 1.
</span><br>
<span class="quotelev2">&gt;&gt; 4 additional processes aborted (not shown) Or sometimes I'll get this
</span><br>
<span class="quotelev2">&gt;&gt; error, just depending upon the number of procs ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun --prefix /usr/local/openmpi-1.2b2 -x LD_LIBRARY_PATH=$
</span><br>
<span class="quotelev2">&gt;&gt; {LD_LIBRARY_PATH} --hostfile ./h1-3 -np 7 --mca mtl mx,self ./cpi
</span><br>
<span class="quotelev2">&gt;&gt; Signal:7 info.si_errno:0(Success) si_code:2() Failing at
</span><br>
<span class="quotelev2">&gt;&gt; addr:0x2aaaaaaab000 [0]
</span><br>
<span class="quotelev2">&gt;&gt; func:/usr/local/openmpi-1.2b2/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; (opal_backtrace_print+0x1f) [0x2b9b7fa52d1f] [1]
</span><br>
<span class="quotelev2">&gt;&gt; func:/usr/local/openmpi-1.2b2/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b9b7fa51871]
</span><br>
<span class="quotelev2">&gt;&gt; [2] func:/lib/libpthread.so.0 [0x2b9b80013d00] [3]
</span><br>
<span class="quotelev2">&gt;&gt; func:/usr/local/openmpi-1.2b2/lib/libmca_common_sm.so.0
</span><br>
<span class="quotelev2">&gt;&gt; (mca_common_sm_mmap_init+0x1e3) [0x2b9b8270ef83] [4]
</span><br>
<span class="quotelev2">&gt;&gt; func:/usr/local/openmpi-1.2b2/lib/openmpi/mca_mpool_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b9b8260d0ff]
</span><br>
<span class="quotelev2">&gt;&gt; [5] func:/usr/local/openmpi-1.2b2/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; (mca_mpool_base_module_create+0x70) [0x2b9b7f7afac0] [6]
</span><br>
<span class="quotelev2">&gt;&gt; func:/usr/local/openmpi-1.2b2/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; (mca_btl_sm_add_procs_same_base_addr+0x907) [0x2b9b83070517] [7]
</span><br>
<span class="quotelev2">&gt;&gt; func:/usr/local/openmpi-1.2b2/lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt;&gt; (mca_bml_r2_add_procs+0x206) [0x2b9b82d5f576] [8]
</span><br>
<span class="quotelev2">&gt;&gt; func:/usr/local/openmpi-1.2b2/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; (mca_pml_ob1_add_procs+0xe3) [0x2b9b82a2d0a3] [9]
</span><br>
<span class="quotelev2">&gt;&gt; func:/usr/local/openmpi-1.2b2/lib/libmpi.so.0(ompi_mpi_init
</span><br>
<span class="quotelev2">&gt;&gt; +0x697) [0x2b9b7f77be07]
</span><br>
<span class="quotelev2">&gt;&gt; [10] func:/usr/local/openmpi-1.2b2/lib/libmpi.so.0(MPI_Init+0x83)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b9b7f79c943]
</span><br>
<span class="quotelev2">&gt;&gt; [11] func:./cpi(main+0x42) [0x400cd5]
</span><br>
<span class="quotelev2">&gt;&gt; [12] func:/lib/libc.so.6(__libc_start_main+0xf4) [0x2b9b8013a134]  
</span><br>
<span class="quotelev2">&gt;&gt; [13]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; func:./cpi [0x400bd9]
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Process 4 of 7 is on node-2
</span><br>
<span class="quotelev2">&gt;&gt; Process 5 of 7 is on node-2
</span><br>
<span class="quotelev2">&gt;&gt; Process 6 of 7 is on node-2
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 of 7 is on node-1
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 of 7 is on node-1
</span><br>
<span class="quotelev2">&gt;&gt; Process 2 of 7 is on node-1
</span><br>
<span class="quotelev2">&gt;&gt; Process 3 of 7 is on node-1
</span><br>
<span class="quotelev2">&gt;&gt; pi is approximately 3.1415926544231239, Error is 0.0000000008333307
</span><br>
<span class="quotelev2">&gt;&gt; wall clock time = 0.009331
</span><br>
<span class="quotelev2">&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR) Failing at
</span><br>
<span class="quotelev2">&gt;&gt; addr:0x2b4ba33652be
</span><br>
<span class="quotelev2">&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR) Failing at
</span><br>
<span class="quotelev2">&gt;&gt; addr:0x2b8685aba2be
</span><br>
<span class="quotelev2">&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR) Failing at
</span><br>
<span class="quotelev2">&gt;&gt; addr:0x2b304ffbe2be mpirun noticed that job rank 0 with PID 0 on node
</span><br>
<span class="quotelev2">&gt;&gt; node-1 exited on signal 1.
</span><br>
<span class="quotelev2">&gt;&gt; 6 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, so I take it one is down. Would this be the cause for all the
</span><br>
<span class="quotelev2">&gt;&gt; different errors I'm seeing?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ fm_status
</span><br>
<span class="quotelev2">&gt;&gt; FMS Fabric status
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 17      hosts known
</span><br>
<span class="quotelev2">&gt;&gt; 16      FMAs found
</span><br>
<span class="quotelev2">&gt;&gt; 3       un-ACKed alerts
</span><br>
<span class="quotelev2">&gt;&gt; Mapping is complete, last map generated by node-20 Database  
</span><br>
<span class="quotelev2">&gt;&gt; generation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; not yet complete.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- mpi.org]
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Reese Faucette
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, January 02, 2007 2:52 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Ompi failing on mx only
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi, Gary-
</span><br>
<span class="quotelev2">&gt;&gt; This looks like a config problem, and not a code problem yet.
</span><br>
<span class="quotelev2">&gt;&gt; Could you send the output of mx_info from node-1 and from node-2?
</span><br>
<span class="quotelev2">&gt;&gt; Also, forgive me counter-asking a possibly dumb OMPI question, but is
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-x LD_LIBRARY_PATH&quot; really what you want, as opposed to &quot;-x
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=${LD_LIBRARY_PATH}&quot; ?  (I would not be surprised if
</span><br>
<span class="quotelev2">&gt;&gt; not specifying a value defaults to this behavior, but have to ask).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, have you tried MX MTL as opposed to BTL?  --mca pml cm --mca  
</span><br>
<span class="quotelev2">&gt;&gt; mtl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mx,self  (it looks like you did)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;[node-2:10464] mx_connect fail for node-2:0 with key aaaaffff &quot;
</span><br>
<span class="quotelev2">&gt;&gt; makes it look like your fabric may not be fully mapped or that you  
</span><br>
<span class="quotelev2">&gt;&gt; may
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; have a down link.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks,
</span><br>
<span class="quotelev2">&gt;&gt; -reese
</span><br>
<span class="quotelev2">&gt;&gt; Myricom, Inc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was initially using 1.1.2 and moved to 1.2b2 because of a hang on
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Bcast() which 1.2b2 reports to fix, and seemed to have done so.
</span><br>
<span class="quotelev2">&gt;&gt; My compute nodes are 2 dual core xeons on myrinet with mx. The  
</span><br>
<span class="quotelev2">&gt;&gt; problem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; is trying to get ompi running on mx only. My machine file is as
</span><br>
<span class="quotelev2">&gt;&gt; follows ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node-1 slots=4 max-slots=4
</span><br>
<span class="quotelev2">&gt;&gt; node-2 slots=4 max-slots=4
</span><br>
<span class="quotelev2">&gt;&gt; node-3 slots=4 max-slots=4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 'mpirun' with the minimum number of processes in order to get the
</span><br>
<span class="quotelev2">&gt;&gt; error ...
</span><br>
<span class="quotelev2">&gt;&gt;         mpirun --prefix /usr/local/openmpi-1.2b2 -x LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; --hostfile ./h1-3 -np 2 --mca btl mx,self ./cpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't believe there'a anything wrong w/ the hardware as I can ping
</span><br>
<span class="quotelev2">&gt;&gt; on mx between this failed node and the master fine. So I tried a
</span><br>
<span class="quotelev2">&gt;&gt; different set of 3 nodes and I got the same error, it always fails on
</span><br>
<span class="quotelev2">&gt;&gt; the 2nd node of any group of nodes I choose.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;node-2.out&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;node-1.out&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI Team, CCS-1
</span><br>
<span class="quotelev1">&gt;    Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2434.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2432.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2432.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2434.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
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
