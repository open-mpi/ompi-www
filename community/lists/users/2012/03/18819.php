<?
$subject_val = "[OMPI users] oMPI hang with IB question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 15:34:51 2012" -->
<!-- isoreceived="20120320193451" -->
<!-- sent="Tue, 20 Mar 2012 15:35:12 -0400" -->
<!-- isosent="20120320193512" -->
<!-- name="Dylan Nelson" -->
<!-- email="dnelson_at_[hidden]" -->
<!-- subject="[OMPI users] oMPI hang with IB question" -->
<!-- id="000601cd06d0$91397b00$b3ac7100$_at_harvard.edu" -->
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
<strong>Subject:</strong> [OMPI users] oMPI hang with IB question<br>
<strong>From:</strong> Dylan Nelson (<em>dnelson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 15:35:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18820.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Previous message:</strong> <a href="18818.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18854.php">Jeffrey Squyres: "Re: [OMPI users] oMPI hang with IB question"</a>
<li><strong>Reply:</strong> <a href="18854.php">Jeffrey Squyres: "Re: [OMPI users] oMPI hang with IB question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I've been having trouble for awhile now running some OpenMPI+IB jobs on
<br>
multiple tasks. The problems are all &quot;hangs&quot; and are not reproducible - the
<br>
same execution started again will in general proceed just fine where
<br>
previously it got stuck, but then later get stuck. These stuck processes are
<br>
pegged at 100% CPU usage and remain there for days if not killed.
<br>
<p>The same nature of problem exists in oMPI 1.2.5, 1.4.2, and 1.5.3 (for the
<br>
code I am running). This is quite possible some problem in the
<br>
configuration/cluster, I am not claiming that it is a bug in oMPI, but was
<br>
just hopeful that someone might have a guess as to what is going on.
<br>
<p>In ancient 1.2.5 the problem manifests as (I attach gdb to the stalled
<br>
process on one of the child nodes):
<br>
<p>--------------------------------------------------------------------
<br>
<p>(gdb) bt
<br>
#0  0x00002b8135b3f699 in ibv_cmd_create_qp () from
<br>
/usr/lib64/libmlx4-rdmav2.so
<br>
#1  0x00002b8135b3faa6 in ibv_cmd_create_qp () from
<br>
/usr/lib64/libmlx4-rdmav2.so
<br>
#2  0x00002b813407bff1 in btl_openib_component_progress ()
<br>
&nbsp;&nbsp;&nbsp;from /n/sw/openmpi-1.2.5-gcc-4.1.2/lib/openmpi/mca_btl_openib.so
<br>
#3  0x00002b8133e6f04a in mca_bml_r2_progress () from
<br>
/n/sw/openmpi-1.2.5-gcc-4.1.2/lib/openmpi/mca_bml_r2.so
<br>
#4  0x00002b812f52c9ba in opal_progress () from
<br>
/n/sw/openmpi-1.2.5-gcc-4.1.2/lib64/libopen-pal.so.0
<br>
#5  0x00002b812f067b05 in ompi_request_wait_all () from
<br>
/n/sw/openmpi-1.2.5-gcc-4.1.2/lib64/libmpi.so.0
<br>
#6  0x0000000000000000 in ?? ()
<br>
(gdb) next
<br>
Single stepping until exit from function ibv_cmd_create_qp, which has no
<br>
line number information.
<br>
0x00002b8135b3f358 in pthread_spin_unlock_at_plt () from
<br>
/usr/lib64/libmlx4-rdmav2.so
<br>
(gdb) next
<br>
Single stepping until exit from function pthread_spin_unlock_at_plt, which has
<br>
no line number information.
<br>
0x00000038c860b760 in pthread_spin_unlock () from /lib64/libpthread.so.0
<br>
(gdb) next
<br>
Single stepping until exit from function pthread_spin_unlock, which has no
<br>
line number information.
<br>
0x00002b8135b3fc21 in ibv_cmd_create_qp () from /usr/lib64/libmlx4-rdmav2.so
<br>
(gdb) next
<br>
Single stepping until exit from function ibv_cmd_create_qp, which has no
<br>
line number information.
<br>
0x00002b813407bff1 in btl_openib_component_progress ()
<br>
&nbsp;&nbsp;&nbsp;from /n/sw/openmpi-1.2.5-gcc-4.1.2/lib/openmpi/mca_btl_openib.so
<br>
(gdb) next
<br>
Single stepping until exit from function btl_openib_component_progress,
<br>
which has no line number information.
<br>
0x00002b8133e6f04a in mca_bml_r2_progress () from
<br>
/n/sw/openmpi-1.2.5-gcc-4.1.2/lib/openmpi/mca_bml_r2.so
<br>
(gdb) next
<br>
Single stepping until exit from function mca_bml_r2_progress, which has no
<br>
line number information.
<br>
0x00002b812f52c9ba in opal_progress () from
<br>
/n/sw/openmpi-1.2.5-gcc-4.1.2/lib64/libopen-pal.so.0
<br>
(gdb) next
<br>
Single stepping until exit from function opal_progress, which has no line
<br>
number information.
<br>
0x00002b812f067b05 in ompi_request_wait_all () from
<br>
/n/sw/openmpi-1.2.5-gcc-4.1.2/lib64/libmpi.so.0
<br>
(gdb) next
<br>
Single stepping until exit from function ompi_request_wait_all, which has no
<br>
line number information.
<br>
<p>---hang--- (infinite loop?)
<br>
<p>On a different task:
<br>
<p>0x00002ba2383b4982 in opal_progress () from
<br>
/n/sw/openmpi-1.2.5-gcc-4.1.2/lib64/libopen-pal.so.0
<br>
(gdb) bt
<br>
#0  0x00002ba2383b4982 in opal_progress () from
<br>
/n/sw/openmpi-1.2.5-gcc-4.1.2/lib64/libopen-pal.so.0
<br>
#1  0x00002ba237eefb05 in ompi_request_wait_all () from
<br>
/n/sw/openmpi-1.2.5-gcc-4.1.2/lib64/libmpi.so.0
<br>
#2  0x0000000000000000 in ?? ()
<br>
(gdb) next
<br>
Single stepping until exit from function opal_progress, which has no line
<br>
number information.
<br>
0x00002ba237eefb05 in ompi_request_wait_all () from
<br>
/n/sw/openmpi-1.2.5-gcc-4.1.2/lib64/libmpi.so.0
<br>
(gdb) next
<br>
Single stepping until exit from function ompi_request_wait_all, which has no
<br>
line number information.
<br>
<p>---hang---
<br>
<p>--------------------------------------------------------------------
<br>
<p>On 1.5.3 a similar &quot;hang&quot; problem happens but the backtrace goes back to the
<br>
original code call which is a MPI_Sendrecv():
<br>
<p>--------------------------------------------------------------------
<br>
<p>3510                OPAL_THREAD_UNLOCK(&amp;endpoint-&gt;eager_rdma_local.lock);
<br>
(gdb) bt
<br>
#0  progress_one_device () at btl_openib_component.c:3510
<br>
#1  btl_openib_component_progress () at btl_openib_component.c:3541
<br>
#2  0x00002b722f348b35 in opal_progress () at runtime/opal_progress.c:207
<br>
#3  0x00002b722f287025 in opal_condition_wait (buf=0x2aaaab636298,
<br>
count=251328, datatype=0x6ef240, dst=12, tag=35,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x6ee430) at
<br>
../../../../opal/threads/condition.h:99
<br>
#4  ompi_request_wait_completion (buf=0x2aaaab636298, count=251328,
<br>
datatype=0x6ef240, dst=12, tag=35,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x6ee430) at
<br>
../../../../ompi/request/request.h:377
<br>
#5  mca_pml_ob1_send (buf=0x2aaaab636298, count=251328, datatype=0x6ef240,
<br>
dst=12, tag=35,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x6ee430) at
<br>
pml_ob1_isend.c:125
<br>
#6  0x00002b722f1cb568 in PMPI_Sendrecv (sendbuf=0x2aaba9587398,
<br>
sendcount=251328, sendtype=0x6ef240, dest=12,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sendtag=35, recvbuf=0x2aaba7a555f8, recvcount=259008, recvtype=0x6ef240,
<br>
source=12, recvtag=35, comm=0x6ee430,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;status=0x6f2160) at psendrecv.c:84
<br>
#7  0x0000000000472fd5 in voronoi_ghost_search (T=0xf70b40) at
<br>
voronoi_ghost_search.c:190
<br>
#8  0x00000000004485c6 in create_mesh () at voronoi.c:107
<br>
#9  0x0000000000411b1c in run () at run.c:215 #10 0x0000000000410d8a in main
<br>
(argc=3, argv=0x7fff3fc25948) at main.c:190
<br>
(gdb) next
<br>
3466        for(i = 0; i &lt; c; i++) {
<br>
(gdb) next
<br>
3467            endpoint = device-&gt;eager_rdma_buffers[i];
<br>
(gdb) next
<br>
3469            if(!endpoint)
<br>
(gdb) next
<br>
3472            OPAL_THREAD_LOCK(&amp;endpoint-&gt;eager_rdma_local.lock);
<br>
(gdb) next
<br>
3473            frag = MCA_BTL_OPENIB_GET_LOCAL_RDMA_FRAG(endpoint,
<br>
(gdb) next
<br>
3476            if(MCA_BTL_OPENIB_RDMA_FRAG_LOCAL(frag)) {
<br>
(gdb) next
<br>
3510                OPAL_THREAD_UNLOCK(&amp;endpoint-&gt;eager_rdma_local.lock);
<br>
<p>--------------------------------------------------------------------
<br>
<p>The OS is: Linux version 2.6.18-194.32.1.el5
<br>
(mockbuild_at_[hidden]) (gcc version 4.1.2 20080704 (Red Hat
<br>
4.1.2-48))
<br>
<p>The output from ibv_devinfo:
<br>
<p>--------------------------------------------------------------------
<br>
<p>hca_id: mlx4_0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transport:                      InfiniBand (0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                         2.5.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:                      0018:8b90:97fe:2149
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:                 0018:8b90:97fe:214c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:                      0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:                 25418
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                         0xA0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:                       DEL08C0000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:                  2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               166
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_DOWN (1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
<p>--------------------------------------------------------------------
<br>
<p>I am no MPI expert but just hopeful of any suggestions. Thanks!
<br>
<p>Dylan Nelson
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18820.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Previous message:</strong> <a href="18818.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18854.php">Jeffrey Squyres: "Re: [OMPI users] oMPI hang with IB question"</a>
<li><strong>Reply:</strong> <a href="18854.php">Jeffrey Squyres: "Re: [OMPI users] oMPI hang with IB question"</a>
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
