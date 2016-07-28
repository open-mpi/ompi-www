<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  1 16:35:26 2006" -->
<!-- isoreceived="20060601203526" -->
<!-- sent="Thu, 01 Jun 2006 14:35:09 -0600" -->
<!-- isosent="20060601203509" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.0.2 and np &amp;gt;=64" -->
<!-- id="op.tahh4voeies9li_at_rygel.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6A04F65C-A9EC-40B0-A49F-B8BFB0845563_at_open-mpi.org" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-01 16:35:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1348.php">Brock Palen: "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>Previous message:</strong> <a href="1346.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1342.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1373.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 31 May 2006 20:17:33 -0600, Brian Barrett &lt;brbarret_at_[hidden]&gt;  
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Did you happen to have a chance to try to run the 1.0.3 or 1.1
</span><br>
<span class="quotelev1">&gt; nightly tarballs?  I'm 50/50 on whether we've fixed these issues
</span><br>
<span class="quotelev1">&gt; already.
</span><br>
<p>For Ticket #41:
<br>
<p>Using Open MPI 1.0.3 and 1.1:
<br>
For some reason, I can't seem to get TCP to work with any number of nodes  
<br>
<span class="quotelev1">&gt;1 (which is odd, because I've had it working on *this* system before;  
</span><br>
MPICH works fine, so there's at least *something* right about the ethernet  
<br>
config/hardware)
<br>
<p>But I do get a different error with the snapshots vs. 1.0.2:
<br>
<p>*****Open MPI 1.0.2*****
<br>
[root_at_zartan1 1.0.2]# mpirun -v -np 6 -prefix $MPIHOME -machinefile  
<br>
machines -mca btl tcp,sm,self laten -o 10
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x6
<br>
[0] func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib/libopal.so.0  
<br>
[0x2ab8333408ca]
<br>
[1] func:/lib64/libpthread.so.0 [0x2ab83394a380]
<br>
[2]  
<br>
func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib64/openmpi/mca_btl_tcp.so(mca_btl_tcp_proc_remove+0xbb)  
<br>
[0x2ab8364299ab]
<br>
[3] func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib64/openmpi/mca_btl_tcp.so  
<br>
[0x2ab836427bec]
<br>
[4]  
<br>
func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib64/openmpi/mca_btl_tcp.so(mca_btl_tcp_add_procs+0x155)  
<br>
[0x2ab836425445]
<br>
*** End of error message ***
<br>
[5]  
<br>
func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib64/openmpi/mca_bml_r2.so(mca_bml_r2_add_procs+0x26b)  
<br>
[0x2ab835da72db]
<br>
[6]  
<br>
func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib64/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xcc)  
<br>
[0x2ab835b8bd5c]
<br>
[7]  
<br>
func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib/libmpi.so.0(ompi_mpi_init+0x590)  
<br>
[0x2ab8330b1c90]
<br>
[8]  
<br>
func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib/libmpi.so.0(MPI_Init+0x83)  
<br>
[0x2ab83309d2d3]
<br>
[9] func:laten(main+0x6a) [0x4015f2]
<br>
[10] func:/lib64/libc.so.6(__libc_start_main+0xdc) [0x2ab833a6f4cc]
<br>
[11] func:laten [0x4014f9]
<br>
<p>*****Open MPI 1.0.3*****
<br>
[root_at_zartan1 tmp]# mpirun -v -np 4 -prefix $MPIHOME -mca btl tcp,sm,self  
<br>
-machinefile machines laten -o 10
<br>
MPI Bidirectional latency test (Send/Recv)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processes    Max Latency (us)
<br>
------------------------------------------
<br>
[0,1,3][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_complete_connect]  
<br>
connect() failed with errno=113
<br>
[0,1,2][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_complete_connect]  
<br>
connect() failed with errno=113
<br>
<p>*****Open MPI 1.1*****
<br>
[root_at_zartan1 1.1]# mpirun -v -np 4 -prefix $MPIHOME -mca btl tcp  
<br>
-machinefile machines laten -o 10
<br>
MPI Bidirectional latency test (Send/Recv)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processes    Max Latency (us)
<br>
------------------------------------------
<br>
[0,1,2][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]  
<br>
connect() failed with errno=113
<br>
[0,1,3][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]  
<br>
connect() failed with errno=113
<br>
<p>If I use -np 2 (ie. the job doesn't leave the node, it being a dual-cpu  
<br>
machine), it works fine.
<br>
<pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1348.php">Brock Palen: "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>Previous message:</strong> <a href="1346.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1342.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1373.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
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
