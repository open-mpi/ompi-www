<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 18:38:25 2006" -->
<!-- isoreceived="20060602223825" -->
<!-- sent="Fri, 2 Jun 2006 18:38:15 -0400" -->
<!-- isosent="20060602223815" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.0.2 and np &amp;gt;=64" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF94C7DB_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Open MPI 1.0.2 and np &amp;gt;=64" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-02 18:38:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1374.php">Frank: "[OMPI users] Mac OS X: sess_dir_finalize leave"</a>
<li><strong>Previous message:</strong> <a href="1372.php">Brock Palen: "Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1325.php">Troy Telford: "[OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1375.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Troy and I talked about this off-list and resolved that the issue was
<br>
with the TCP setup on the nodes.
<br>
<p>But it is worth noting that we had previously fixed a bug in the TCP
<br>
setup in 1.0.2 with respect to the SEGVs that Troy was seeing -- hence,
<br>
when he tested the 1.0.3 prerelease tarballs, there were no SEGVs.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Troy Telford
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 01, 2006 4:35 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, 31 May 2006 20:17:33 -0600, Brian Barrett 
</span><br>
<span class="quotelev1">&gt; &lt;brbarret_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Did you happen to have a chance to try to run the 1.0.3 or 1.1
</span><br>
<span class="quotelev2">&gt; &gt; nightly tarballs?  I'm 50/50 on whether we've fixed these issues
</span><br>
<span class="quotelev2">&gt; &gt; already.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For Ticket #41:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using Open MPI 1.0.3 and 1.1:
</span><br>
<span class="quotelev1">&gt; For some reason, I can't seem to get TCP to work with any 
</span><br>
<span class="quotelev1">&gt; number of nodes  
</span><br>
<span class="quotelev2">&gt; &gt;1 (which is odd, because I've had it working on *this* 
</span><br>
<span class="quotelev1">&gt; system before;  
</span><br>
<span class="quotelev1">&gt; MPICH works fine, so there's at least *something* right about 
</span><br>
<span class="quotelev1">&gt; the ethernet  
</span><br>
<span class="quotelev1">&gt; config/hardware)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I do get a different error with the snapshots vs. 1.0.2:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *****Open MPI 1.0.2*****
</span><br>
<span class="quotelev1">&gt; [root_at_zartan1 1.0.2]# mpirun -v -np 6 -prefix $MPIHOME -machinefile  
</span><br>
<span class="quotelev1">&gt; machines -mca btl tcp,sm,self laten -o 10
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x6
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib/libopal.so.0  
</span><br>
<span class="quotelev1">&gt; [0x2ab8333408ca]
</span><br>
<span class="quotelev1">&gt; [1] func:/lib64/libpthread.so.0 [0x2ab83394a380]
</span><br>
<span class="quotelev1">&gt; [2]  
</span><br>
<span class="quotelev1">&gt; func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib64/openmpi/mca_btl
</span><br>
_tcp.so(mca_btl_tcp_proc_remove+0xbb)  
<br>
<span class="quotelev1">&gt; [0x2ab8364299ab]
</span><br>
<span class="quotelev1">&gt; [3] 
</span><br>
<span class="quotelev1">&gt; func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib64/openmpi/mca_btl
</span><br>
<span class="quotelev1">&gt; _tcp.so  
</span><br>
<span class="quotelev1">&gt; [0x2ab836427bec]
</span><br>
<span class="quotelev1">&gt; [4]  
</span><br>
<span class="quotelev1">&gt; func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib64/openmpi/mca_btl
</span><br>
_tcp.so(mca_btl_tcp_add_procs+0x155)  
<br>
<span class="quotelev1">&gt; [0x2ab836425445]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [5]  
</span><br>
<span class="quotelev1">&gt; func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib64/openmpi/mca_bml
</span><br>
_r2.so(mca_bml_r2_add_procs+0x26b)  
<br>
<span class="quotelev1">&gt; [0x2ab835da72db]
</span><br>
<span class="quotelev1">&gt; [6]  
</span><br>
<span class="quotelev1">&gt; func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib64/openmpi/mca_pml
</span><br>
_ob1.so(mca_pml_ob1_add_procs+0xcc)  
<br>
<span class="quotelev1">&gt; [0x2ab835b8bd5c]
</span><br>
<span class="quotelev1">&gt; [7]  
</span><br>
<span class="quotelev1">&gt; func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib/libmpi.so.0(ompi_
</span><br>
<span class="quotelev1">&gt; mpi_init+0x590)  
</span><br>
<span class="quotelev1">&gt; [0x2ab8330b1c90]
</span><br>
<span class="quotelev1">&gt; [8]  
</span><br>
<span class="quotelev1">&gt; func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib/libmpi.so.0(MPI_I
</span><br>
<span class="quotelev1">&gt; nit+0x83)  
</span><br>
<span class="quotelev1">&gt; [0x2ab83309d2d3]
</span><br>
<span class="quotelev1">&gt; [9] func:laten(main+0x6a) [0x4015f2]
</span><br>
<span class="quotelev1">&gt; [10] func:/lib64/libc.so.6(__libc_start_main+0xdc) [0x2ab833a6f4cc]
</span><br>
<span class="quotelev1">&gt; [11] func:laten [0x4014f9]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *****Open MPI 1.0.3*****
</span><br>
<span class="quotelev1">&gt; [root_at_zartan1 tmp]# mpirun -v -np 4 -prefix $MPIHOME -mca btl 
</span><br>
<span class="quotelev1">&gt; tcp,sm,self  
</span><br>
<span class="quotelev1">&gt; -machinefile machines laten -o 10
</span><br>
<span class="quotelev1">&gt; MPI Bidirectional latency test (Send/Recv)
</span><br>
<span class="quotelev1">&gt;               Processes    Max Latency (us)
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,3][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_complete_c
</span><br>
<span class="quotelev1">&gt; onnect]  
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113
</span><br>
<span class="quotelev1">&gt; [0,1,2][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_complete_c
</span><br>
<span class="quotelev1">&gt; onnect]  
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *****Open MPI 1.1*****
</span><br>
<span class="quotelev1">&gt; [root_at_zartan1 1.1]# mpirun -v -np 4 -prefix $MPIHOME -mca btl tcp  
</span><br>
<span class="quotelev1">&gt; -machinefile machines laten -o 10
</span><br>
<span class="quotelev1">&gt; MPI Bidirectional latency test (Send/Recv)
</span><br>
<span class="quotelev1">&gt;               Processes    Max Latency (us)
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,2][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_c
</span><br>
<span class="quotelev1">&gt; onnect]  
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113
</span><br>
<span class="quotelev1">&gt; [0,1,3][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_c
</span><br>
<span class="quotelev1">&gt; onnect]  
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I use -np 2 (ie. the job doesn't leave the node, it being 
</span><br>
<span class="quotelev1">&gt; a dual-cpu  
</span><br>
<span class="quotelev1">&gt; machine), it works fine.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Troy Telford
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1374.php">Frank: "[OMPI users] Mac OS X: sess_dir_finalize leave"</a>
<li><strong>Previous message:</strong> <a href="1372.php">Brock Palen: "Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1325.php">Troy Telford: "[OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1375.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
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
