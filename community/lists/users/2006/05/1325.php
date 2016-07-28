<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 30 12:46:44 2006" -->
<!-- isoreceived="20060530164644" -->
<!-- sent="Tue, 30 May 2006 10:45:52 -0600" -->
<!-- isosent="20060530164552" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI 1.0.2 and np &amp;gt;=64" -->
<!-- id="op.tadh6q2lies9li_at_rygel.local" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2006-05-30 12:45:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1326.php">Michael Kluskens: "[OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>Previous message:</strong> <a href="1324.php">Ralph Castain: "Re: [OMPI users] spawn failed with errno=-7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1330.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>Reply:</strong> <a href="1330.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1373.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1375.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been having trouble using Open MPI with a medium-sized cluster:
<br>
<p>This cluster has three fabrics:  Gigabit Ethernet, 10G Myrinet MX, and  
<br>
InfiniBand.  Myrinet works great.  IB and GigE have issues:
<br>
<p><p>Using the 'openib' BTL (kernel 2.6.16.1 for drivers, openib.org RC4  
<br>
userspace libraries &amp; tools).This example uses the IMB benchmark, but the  
<br>
problem is not limited to IMB
<br>
<p>*********************************************************************
<br>
[root_at_zartan ~]# mpirun -np 90 -mca btl openib
<br>
-machinefile /etc/pdsh/machines /tmp/IMB-MPI1
<br>
<p>#----------------------------------------------------------------
<br>
# Benchmarking Reduce
<br>
# #processes = 64
<br>
# ( 26 additional processes waiting in MPI_Barrier)
<br>
#----------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.04         0.04         0.04
<br>
[0,1,63][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 12 for wr_id 47003518529948 opcode 0
<br>
<p>[0,1,63][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 47003518767232 opcode 0
<br>
<p>[0,1,63][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 47003518965544 opcode 0
<br>
<p>[0,1,63][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 47003547253820 opcode 0
<br>
<p>[0,1,63][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 47003547286872 opcode 0
<br>
<p>[0,1,63][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 47003547319924 opcode 0
<br>
<p>[0,1,63][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 47003547352976 opcode 0
<br>
<p>[0,1,63][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 47003547386028 opcode 0
<br>
<p>[0,1,63][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 47003547419080 opcode 0
<br>
<p>[0,1,63][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 47003547452132 opcode 0
<br>
<p>[0,1,63][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 47003549606016 opcode 0
<br>
<p>[0,1,63][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 47003549639068 opcode 0
<br>
<p>**********************************************************************
<br>
<p>With TCP, I get the following error(s)
<br>
<p>[root_at_zartan ~]# mpirun -np 90 -mca btl tcp
<br>
-machinefile /etc/pdsh/machines /tmp/IMB-MPI1
<br>
<p>Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x6
<br>
[0] func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib64/libopal.so.0
<br>
[0x2adefe5248ca]
<br>
[1] func:/lib64/libpthread.so.0 [0x2adefeb2e380]
<br>
[2]
<br>
func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib64/openmpi/mca_btl_tcp.so(mca_btl_tcp_proc_remove+0xbb)  
<br>
[0x2adf018139ab]
<br>
[3]
<br>
func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib64/openmpi/mca_btl_tcp.so
<br>
[0x2adf01811bec]
<br>
[4]
<br>
func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib64/openmpi/mca_btl_tcp.so(mca_btl_tcp_add_procs+0x155)  
<br>
[0x2adf0180f445]
<br>
[5]
<br>
func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib64/openmpi/mca_bml_r2.so(mca_bml_r2_add_procs+0x26b)  
<br>
[0x2adf011912db]
<br>
[6]
<br>
func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib64/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xcc)  
<br>
[0x2adf00f75d5c]
<br>
[7]
<br>
func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib64/libmpi.so.0(ompi_mpi_init
<br>
+0x590) [0x2adefe295c90]
<br>
[8] func:/usr/x86_64-gcc-4.0.0/openmpi-1.0.2/lib64/libmpi.so.0(MPI_Init
<br>
+0x83) [0x2adefe2812d3]
<br>
[9] func:/tmp/IMB-MPI1(main+0x29) [0x402eb9]
<br>
[10] func:/lib64/libc.so.6(__libc_start_main+0xdc) [0x2adefec534cc]
<br>
[11] func:/tmp/IMB-MPI1 [0x402df9]
<br>
*** End of error message ***
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x6
<br>
*** End of error message ***
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x6
<br>
*** End of error message ***
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x6
<br>
*** End of error message ***
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x6
<br>
*** End of error message ***
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x6
<br>
*** End of error message ***
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x6
<br>
*** End of error message ***
<br>
4 additional processes aborted (not shown)
<br>
<p>Any Thoughts/Ideas on how to fix it?
<br>
<pre>
--
  Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1326.php">Michael Kluskens: "[OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>Previous message:</strong> <a href="1324.php">Ralph Castain: "Re: [OMPI users] spawn failed with errno=-7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1330.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>Reply:</strong> <a href="1330.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1373.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1375.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
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
