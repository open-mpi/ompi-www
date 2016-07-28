<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  2 17:10:47 2007" -->
<!-- isoreceived="20070102221047" -->
<!-- sent="Tue, 2 Jan 2007 15:10:35 -0700" -->
<!-- isosent="20070102221035" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi failing on mx only" -->
<!-- id="B1A7CE03-914A-4F90-9DB4-5700D3FAC5A9_at_lanl.gov" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="559847D38F12F742B0EE27727596F42901A2FA02_at_NDJSEVS14.ndc.nasa.gov" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-02 17:10:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2426.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2424.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2423.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2426.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2426.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2430.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2432.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry to jump into the discussion late.  The mx btl does not support  
<br>
communication between processes on the same node by itself, so you  
<br>
have to include the shared memory transport when using MX.  This will  
<br>
eventually be fixed, but likely not for the 1.2 release.  So if you do:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --prefix /usr/local/openmpi-1.2b2 -x LD_LIBRARY_PATH -- 
<br>
hostfile ./h1-3 -np 2 --mca btl mx,sm,self ./cpi
<br>
<p>It should work much better.  As for the MTL, there is a bug in the MX  
<br>
MTL for v1.2 that has been fixed, but after 1.2b2 that could cause  
<br>
the random failures you were seeing.  It will work much better after  
<br>
1.2b3 is released (or if you are feeling really lucky, you can try  
<br>
out the 1.2 nightly tarballs).
<br>
<p>The MTL is a new feature in v1.2. It is a different communication  
<br>
abstraction designed to support interconnects that have matching  
<br>
implemented in the lower level library or in hardware (Myrinet/MX,  
<br>
Portals, InfiniPath are currently implemented).  The MTL allows us to  
<br>
exploit the low latency and asynchronous progress these libraries can  
<br>
provide, but does mean multi-nic abilities are reduced.  Further, the  
<br>
MTL is not well suited to interconnects like TCP or InfiniBand, so we  
<br>
will continue supporting the BTL interface as well.
<br>
<p>Brian
<br>
<p><p>On Jan 2, 2007, at 2:44 PM, Grobe, Gary L. ((JSC-EV))[ESCG] wrote:
<br>
<p><span class="quotelev1">&gt; About the -x, I've been trying it both ways and prefer the latter,  
</span><br>
<span class="quotelev1">&gt; and results for either are the same. But it's value is correct.  
</span><br>
<span class="quotelev1">&gt; I've attached the ompi_info from node-1 and node-2. Sorry for not  
</span><br>
<span class="quotelev1">&gt; zipping them, but they were small and I think I'd have firewall  
</span><br>
<span class="quotelev1">&gt; issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --prefix /usr/local/openmpi-1.2b2 -x LD_LIBRARY_PATH -- 
</span><br>
<span class="quotelev1">&gt; hostfile ./h13-15 -np 6 --mca pml cm ./cpi
</span><br>
<span class="quotelev1">&gt; [node-14:19260] mx_connect fail for node-14:0 with key aaaaffff  
</span><br>
<span class="quotelev1">&gt; (error Endpoint closed or not connectable!)
</span><br>
<span class="quotelev1">&gt; [node-14:19261] mx_connect fail for node-14:0 with key aaaaffff  
</span><br>
<span class="quotelev1">&gt; (error Endpoint closed or not connectable!)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any info anywhere's on MTL? Anyways, I've run w/ mtl, and  
</span><br>
<span class="quotelev1">&gt; sometimes it actually worked once. But now I can't reproduce it and  
</span><br>
<span class="quotelev1">&gt; it's throwing sig 7's, 11's, and 4's depending upon the number of  
</span><br>
<span class="quotelev1">&gt; procs I give it. But now that you mention mapper, I take it that's  
</span><br>
<span class="quotelev1">&gt; what SEGV_MAPERR might be referring to. I'm looking into the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --prefix /usr/local/openmpi-1.2b2 -x LD_LIBRARY_PATH=$ 
</span><br>
<span class="quotelev1">&gt; {LD_LIBRARY_PATH} --hostfile ./h1-3 -np 5 --mca mtl mx,self ./cpi
</span><br>
<span class="quotelev1">&gt; Process 4 of 5 is on node-2
</span><br>
<span class="quotelev1">&gt; Process 0 of 5 is on node-1
</span><br>
<span class="quotelev1">&gt; Process 1 of 5 is on node-1
</span><br>
<span class="quotelev1">&gt; Process 2 of 5 is on node-1
</span><br>
<span class="quotelev1">&gt; Process 3 of 5 is on node-1
</span><br>
<span class="quotelev1">&gt; pi is approximately 3.1415926544231225, Error is 0.0000000008333294
</span><br>
<span class="quotelev1">&gt; wall clock time = 0.019305
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x2b88243862be
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 0 on node node-1 exited on  
</span><br>
<span class="quotelev1">&gt; signal 1.
</span><br>
<span class="quotelev1">&gt; 4 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt; Or sometimes I'll get this error, just depending upon the number of  
</span><br>
<span class="quotelev1">&gt; procs ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpirun --prefix /usr/local/openmpi-1.2b2 -x LD_LIBRARY_PATH=$ 
</span><br>
<span class="quotelev1">&gt; {LD_LIBRARY_PATH} --hostfile ./h1-3 -np 7 --mca mtl mx,self ./cpi
</span><br>
<span class="quotelev1">&gt; Signal:7 info.si_errno:0(Success) si_code:2()
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x2aaaaaaab000
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/local/openmpi-1.2b2/lib/libopen-pal.so.0 
</span><br>
<span class="quotelev1">&gt; (opal_backtrace_print+0x1f) [0x2b9b7fa52d1f]
</span><br>
<span class="quotelev1">&gt; [1] func:/usr/local/openmpi-1.2b2/lib/libopen-pal.so.0  
</span><br>
<span class="quotelev1">&gt; [0x2b9b7fa51871]
</span><br>
<span class="quotelev1">&gt; [2] func:/lib/libpthread.so.0 [0x2b9b80013d00]
</span><br>
<span class="quotelev1">&gt; [3] func:/usr/local/openmpi-1.2b2/lib/libmca_common_sm.so.0 
</span><br>
<span class="quotelev1">&gt; (mca_common_sm_mmap_init+0x1e3) [0x2b9b8270ef83]
</span><br>
<span class="quotelev1">&gt; [4] func:/usr/local/openmpi-1.2b2/lib/openmpi/mca_mpool_sm.so  
</span><br>
<span class="quotelev1">&gt; [0x2b9b8260d0ff]
</span><br>
<span class="quotelev1">&gt; [5] func:/usr/local/openmpi-1.2b2/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (mca_mpool_base_module_create+0x70) [0x2b9b7f7afac0]
</span><br>
<span class="quotelev1">&gt; [6] func:/usr/local/openmpi-1.2b2/lib/openmpi/mca_btl_sm.so 
</span><br>
<span class="quotelev1">&gt; (mca_btl_sm_add_procs_same_base_addr+0x907) [0x2b9b83070517]
</span><br>
<span class="quotelev1">&gt; [7] func:/usr/local/openmpi-1.2b2/lib/openmpi/mca_bml_r2.so 
</span><br>
<span class="quotelev1">&gt; (mca_bml_r2_add_procs+0x206) [0x2b9b82d5f576]
</span><br>
<span class="quotelev1">&gt; [8] func:/usr/local/openmpi-1.2b2/lib/openmpi/mca_pml_ob1.so 
</span><br>
<span class="quotelev1">&gt; (mca_pml_ob1_add_procs+0xe3) [0x2b9b82a2d0a3]
</span><br>
<span class="quotelev1">&gt; [9] func:/usr/local/openmpi-1.2b2/lib/libmpi.so.0(ompi_mpi_init 
</span><br>
<span class="quotelev1">&gt; +0x697) [0x2b9b7f77be07]
</span><br>
<span class="quotelev1">&gt; [10] func:/usr/local/openmpi-1.2b2/lib/libmpi.so.0(MPI_Init+0x83)  
</span><br>
<span class="quotelev1">&gt; [0x2b9b7f79c943]
</span><br>
<span class="quotelev1">&gt; [11] func:./cpi(main+0x42) [0x400cd5]
</span><br>
<span class="quotelev1">&gt; [12] func:/lib/libc.so.6(__libc_start_main+0xf4) [0x2b9b8013a134]
</span><br>
<span class="quotelev1">&gt; [13] func:./cpi [0x400bd9]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Process 4 of 7 is on node-2
</span><br>
<span class="quotelev1">&gt; Process 5 of 7 is on node-2
</span><br>
<span class="quotelev1">&gt; Process 6 of 7 is on node-2
</span><br>
<span class="quotelev1">&gt; Process 0 of 7 is on node-1
</span><br>
<span class="quotelev1">&gt; Process 1 of 7 is on node-1
</span><br>
<span class="quotelev1">&gt; Process 2 of 7 is on node-1
</span><br>
<span class="quotelev1">&gt; Process 3 of 7 is on node-1
</span><br>
<span class="quotelev1">&gt; pi is approximately 3.1415926544231239, Error is 0.0000000008333307
</span><br>
<span class="quotelev1">&gt; wall clock time = 0.009331
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x2b4ba33652be
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x2b8685aba2be
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x2b304ffbe2be
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 0 on node node-1 exited on  
</span><br>
<span class="quotelev1">&gt; signal 1.
</span><br>
<span class="quotelev1">&gt; 6 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, so I take it one is down. Would this be the cause for all the  
</span><br>
<span class="quotelev1">&gt; different errors I'm seeing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ fm_status
</span><br>
<span class="quotelev1">&gt; FMS Fabric status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 17      hosts known
</span><br>
<span class="quotelev1">&gt; 16      FMAs found
</span><br>
<span class="quotelev1">&gt; 3       un-ACKed alerts
</span><br>
<span class="quotelev1">&gt; Mapping is complete, last map generated by node-20
</span><br>
<span class="quotelev1">&gt; Database generation not yet complete.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org] On Behalf Of Reese Faucette
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, January 02, 2007 2:52 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Ompi failing on mx only
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi, Gary-
</span><br>
<span class="quotelev1">&gt; This looks like a config problem, and not a code problem yet.   
</span><br>
<span class="quotelev1">&gt; Could you send the output of mx_info from node-1 and from node-2?   
</span><br>
<span class="quotelev1">&gt; Also, forgive me counter-asking a possibly dumb OMPI question, but  
</span><br>
<span class="quotelev1">&gt; is &quot;-x LD_LIBRARY_PATH&quot; really what you want, as opposed to &quot;-x  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=${LD_LIBRARY_PATH}&quot; ?  (I would not be surprised if  
</span><br>
<span class="quotelev1">&gt; not specifying a value defaults to this behavior, but have to ask).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, have you tried MX MTL as opposed to BTL?  --mca pml cm --mca  
</span><br>
<span class="quotelev1">&gt; mtl mx,self  (it looks like you did)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;[node-2:10464] mx_connect fail for node-2:0 with key aaaaffff &quot;  
</span><br>
<span class="quotelev1">&gt; makes it look like your fabric may not be fully mapped or that you  
</span><br>
<span class="quotelev1">&gt; may have a down link.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; -reese
</span><br>
<span class="quotelev1">&gt; Myricom, Inc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was initially using 1.1.2 and moved to 1.2b2 because of a hang on  
</span><br>
<span class="quotelev1">&gt; MPI_Bcast() which 1.2b2 reports to fix, and seemed to have done so.  
</span><br>
<span class="quotelev1">&gt; My compute nodes are 2 dual core xeons on myrinet with mx. The  
</span><br>
<span class="quotelev1">&gt; problem is trying to get ompi running on mx only. My machine file  
</span><br>
<span class="quotelev1">&gt; is as follows &#133;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node-1 slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt; node-2 slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt; node-3 slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 'mpirun' with the minimum number of processes in order to get the  
</span><br>
<span class="quotelev1">&gt; error ...
</span><br>
<span class="quotelev1">&gt;         mpirun --prefix /usr/local/openmpi-1.2b2 -x LD_LIBRARY_PATH  
</span><br>
<span class="quotelev1">&gt; --hostfile ./h1-3 -np 2 --mca btl mx,self ./cpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't believe there'a anything wrong w/ the hardware as I can  
</span><br>
<span class="quotelev1">&gt; ping on mx between this failed node and the master fine. So I tried  
</span><br>
<span class="quotelev1">&gt; a different set of 3 nodes and I got the same error, it always  
</span><br>
<span class="quotelev1">&gt; fails on the 2nd node of any group of nodes I choose.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;node-2.out&gt;
</span><br>
<span class="quotelev1">&gt; &lt;node-1.out&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2426.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2424.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2423.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2426.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2426.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2430.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2432.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
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
