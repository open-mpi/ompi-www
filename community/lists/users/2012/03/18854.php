<?
$subject_val = "Re: [OMPI users] oMPI hang with IB question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 27 16:28:10 2012" -->
<!-- isoreceived="20120327202810" -->
<!-- sent="Tue, 27 Mar 2012 16:28:02 -0400" -->
<!-- isosent="20120327202802" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] oMPI hang with IB question" -->
<!-- id="A28B95F1-5DA8-4EE7-B0BF-5DB34A83EC6C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="000601cd06d0$91397b00$b3ac7100$_at_harvard.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] oMPI hang with IB question<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-27 16:28:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18855.php">Hameed Alzahrani: "[OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>Previous message:</strong> <a href="18853.php">Jeffrey Squyres: "Re: [OMPI users] Data distribution on different machines"</a>
<li><strong>In reply to:</strong> <a href="18819.php">Dylan Nelson: "[OMPI users] oMPI hang with IB question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dylan --
<br>
<p>Sorry for the delay in replying.
<br>
<p>On an offhand guess, does the problem go away if you run with:
<br>
<p>&nbsp;&nbsp;--mca mpi_leave_pinned 0
<br>
<p>?
<br>
<p><p>On Mar 20, 2012, at 3:35 PM, Dylan Nelson wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been having trouble for awhile now running some OpenMPI+IB jobs on
</span><br>
<span class="quotelev1">&gt; multiple tasks. The problems are all &quot;hangs&quot; and are not reproducible - the
</span><br>
<span class="quotelev1">&gt; same execution started again will in general proceed just fine where
</span><br>
<span class="quotelev1">&gt; previously it got stuck, but then later get stuck. These stuck processes are
</span><br>
<span class="quotelev1">&gt; pegged at 100% CPU usage and remain there for days if not killed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same nature of problem exists in oMPI 1.2.5, 1.4.2, and 1.5.3 (for the
</span><br>
<span class="quotelev1">&gt; code I am running). This is quite possible some problem in the
</span><br>
<span class="quotelev1">&gt; configuration/cluster, I am not claiming that it is a bug in oMPI, but was
</span><br>
<span class="quotelev1">&gt; just hopeful that someone might have a guess as to what is going on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In ancient 1.2.5 the problem manifests as (I attach gdb to the stalled
</span><br>
<span class="quotelev1">&gt; process on one of the child nodes):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00002b8135b3f699 in ibv_cmd_create_qp () from
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libmlx4-rdmav2.so
</span><br>
<span class="quotelev1">&gt; #1  0x00002b8135b3faa6 in ibv_cmd_create_qp () from
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libmlx4-rdmav2.so
</span><br>
<span class="quotelev1">&gt; #2  0x00002b813407bff1 in btl_openib_component_progress ()
</span><br>
<span class="quotelev1">&gt;   from /n/sw/openmpi-1.2.5-gcc-4.1.2/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; #3  0x00002b8133e6f04a in mca_bml_r2_progress () from
</span><br>
<span class="quotelev1">&gt; /n/sw/openmpi-1.2.5-gcc-4.1.2/lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #4  0x00002b812f52c9ba in opal_progress () from
</span><br>
<span class="quotelev1">&gt; /n/sw/openmpi-1.2.5-gcc-4.1.2/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #5  0x00002b812f067b05 in ompi_request_wait_all () from
</span><br>
<span class="quotelev1">&gt; /n/sw/openmpi-1.2.5-gcc-4.1.2/lib64/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) next
</span><br>
<span class="quotelev1">&gt; Single stepping until exit from function ibv_cmd_create_qp, which has no
</span><br>
<span class="quotelev1">&gt; line number information.
</span><br>
<span class="quotelev1">&gt; 0x00002b8135b3f358 in pthread_spin_unlock_at_plt () from
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libmlx4-rdmav2.so
</span><br>
<span class="quotelev1">&gt; (gdb) next
</span><br>
<span class="quotelev1">&gt; Single stepping until exit from function pthread_spin_unlock_at_plt, which has
</span><br>
<span class="quotelev1">&gt; no line number information.
</span><br>
<span class="quotelev1">&gt; 0x00000038c860b760 in pthread_spin_unlock () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; (gdb) next
</span><br>
<span class="quotelev1">&gt; Single stepping until exit from function pthread_spin_unlock, which has no
</span><br>
<span class="quotelev1">&gt; line number information.
</span><br>
<span class="quotelev1">&gt; 0x00002b8135b3fc21 in ibv_cmd_create_qp () from /usr/lib64/libmlx4-rdmav2.so
</span><br>
<span class="quotelev1">&gt; (gdb) next
</span><br>
<span class="quotelev1">&gt; Single stepping until exit from function ibv_cmd_create_qp, which has no
</span><br>
<span class="quotelev1">&gt; line number information.
</span><br>
<span class="quotelev1">&gt; 0x00002b813407bff1 in btl_openib_component_progress ()
</span><br>
<span class="quotelev1">&gt;   from /n/sw/openmpi-1.2.5-gcc-4.1.2/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; (gdb) next
</span><br>
<span class="quotelev1">&gt; Single stepping until exit from function btl_openib_component_progress,
</span><br>
<span class="quotelev1">&gt; which has no line number information.
</span><br>
<span class="quotelev1">&gt; 0x00002b8133e6f04a in mca_bml_r2_progress () from
</span><br>
<span class="quotelev1">&gt; /n/sw/openmpi-1.2.5-gcc-4.1.2/lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; (gdb) next
</span><br>
<span class="quotelev1">&gt; Single stepping until exit from function mca_bml_r2_progress, which has no
</span><br>
<span class="quotelev1">&gt; line number information.
</span><br>
<span class="quotelev1">&gt; 0x00002b812f52c9ba in opal_progress () from
</span><br>
<span class="quotelev1">&gt; /n/sw/openmpi-1.2.5-gcc-4.1.2/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; (gdb) next
</span><br>
<span class="quotelev1">&gt; Single stepping until exit from function opal_progress, which has no line
</span><br>
<span class="quotelev1">&gt; number information.
</span><br>
<span class="quotelev1">&gt; 0x00002b812f067b05 in ompi_request_wait_all () from
</span><br>
<span class="quotelev1">&gt; /n/sw/openmpi-1.2.5-gcc-4.1.2/lib64/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; (gdb) next
</span><br>
<span class="quotelev1">&gt; Single stepping until exit from function ompi_request_wait_all, which has no
</span><br>
<span class="quotelev1">&gt; line number information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---hang--- (infinite loop?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On a different task:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0x00002ba2383b4982 in opal_progress () from
</span><br>
<span class="quotelev1">&gt; /n/sw/openmpi-1.2.5-gcc-4.1.2/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00002ba2383b4982 in opal_progress () from
</span><br>
<span class="quotelev1">&gt; /n/sw/openmpi-1.2.5-gcc-4.1.2/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x00002ba237eefb05 in ompi_request_wait_all () from
</span><br>
<span class="quotelev1">&gt; /n/sw/openmpi-1.2.5-gcc-4.1.2/lib64/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) next
</span><br>
<span class="quotelev1">&gt; Single stepping until exit from function opal_progress, which has no line
</span><br>
<span class="quotelev1">&gt; number information.
</span><br>
<span class="quotelev1">&gt; 0x00002ba237eefb05 in ompi_request_wait_all () from
</span><br>
<span class="quotelev1">&gt; /n/sw/openmpi-1.2.5-gcc-4.1.2/lib64/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; (gdb) next
</span><br>
<span class="quotelev1">&gt; Single stepping until exit from function ompi_request_wait_all, which has no
</span><br>
<span class="quotelev1">&gt; line number information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---hang---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1.5.3 a similar &quot;hang&quot; problem happens but the backtrace goes back to the
</span><br>
<span class="quotelev1">&gt; original code call which is a MPI_Sendrecv():
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3510                OPAL_THREAD_UNLOCK(&amp;endpoint-&gt;eager_rdma_local.lock);
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  progress_one_device () at btl_openib_component.c:3510
</span><br>
<span class="quotelev1">&gt; #1  btl_openib_component_progress () at btl_openib_component.c:3541
</span><br>
<span class="quotelev1">&gt; #2  0x00002b722f348b35 in opal_progress () at runtime/opal_progress.c:207
</span><br>
<span class="quotelev1">&gt; #3  0x00002b722f287025 in opal_condition_wait (buf=0x2aaaab636298,
</span><br>
<span class="quotelev1">&gt; count=251328, datatype=0x6ef240, dst=12, tag=35,
</span><br>
<span class="quotelev1">&gt;    sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x6ee430) at
</span><br>
<span class="quotelev1">&gt; ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev1">&gt; #4  ompi_request_wait_completion (buf=0x2aaaab636298, count=251328,
</span><br>
<span class="quotelev1">&gt; datatype=0x6ef240, dst=12, tag=35,
</span><br>
<span class="quotelev1">&gt;    sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x6ee430) at
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/request/request.h:377
</span><br>
<span class="quotelev1">&gt; #5  mca_pml_ob1_send (buf=0x2aaaab636298, count=251328, datatype=0x6ef240,
</span><br>
<span class="quotelev1">&gt; dst=12, tag=35,
</span><br>
<span class="quotelev1">&gt;    sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x6ee430) at
</span><br>
<span class="quotelev1">&gt; pml_ob1_isend.c:125
</span><br>
<span class="quotelev1">&gt; #6  0x00002b722f1cb568 in PMPI_Sendrecv (sendbuf=0x2aaba9587398,
</span><br>
<span class="quotelev1">&gt; sendcount=251328, sendtype=0x6ef240, dest=12,
</span><br>
<span class="quotelev1">&gt;    sendtag=35, recvbuf=0x2aaba7a555f8, recvcount=259008, recvtype=0x6ef240,
</span><br>
<span class="quotelev1">&gt; source=12, recvtag=35, comm=0x6ee430,
</span><br>
<span class="quotelev1">&gt;    status=0x6f2160) at psendrecv.c:84
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000472fd5 in voronoi_ghost_search (T=0xf70b40) at
</span><br>
<span class="quotelev1">&gt; voronoi_ghost_search.c:190
</span><br>
<span class="quotelev1">&gt; #8  0x00000000004485c6 in create_mesh () at voronoi.c:107
</span><br>
<span class="quotelev1">&gt; #9  0x0000000000411b1c in run () at run.c:215 #10 0x0000000000410d8a in main
</span><br>
<span class="quotelev1">&gt; (argc=3, argv=0x7fff3fc25948) at main.c:190
</span><br>
<span class="quotelev1">&gt; (gdb) next
</span><br>
<span class="quotelev1">&gt; 3466        for(i = 0; i &lt; c; i++) {
</span><br>
<span class="quotelev1">&gt; (gdb) next
</span><br>
<span class="quotelev1">&gt; 3467            endpoint = device-&gt;eager_rdma_buffers[i];
</span><br>
<span class="quotelev1">&gt; (gdb) next
</span><br>
<span class="quotelev1">&gt; 3469            if(!endpoint)
</span><br>
<span class="quotelev1">&gt; (gdb) next
</span><br>
<span class="quotelev1">&gt; 3472            OPAL_THREAD_LOCK(&amp;endpoint-&gt;eager_rdma_local.lock);
</span><br>
<span class="quotelev1">&gt; (gdb) next
</span><br>
<span class="quotelev1">&gt; 3473            frag = MCA_BTL_OPENIB_GET_LOCAL_RDMA_FRAG(endpoint,
</span><br>
<span class="quotelev1">&gt; (gdb) next
</span><br>
<span class="quotelev1">&gt; 3476            if(MCA_BTL_OPENIB_RDMA_FRAG_LOCAL(frag)) {
</span><br>
<span class="quotelev1">&gt; (gdb) next
</span><br>
<span class="quotelev1">&gt; 3510                OPAL_THREAD_UNLOCK(&amp;endpoint-&gt;eager_rdma_local.lock);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The OS is: Linux version 2.6.18-194.32.1.el5
</span><br>
<span class="quotelev1">&gt; (mockbuild_at_[hidden]) (gcc version 4.1.2 20080704 (Red Hat
</span><br>
<span class="quotelev1">&gt; 4.1.2-48))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output from ibv_devinfo:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hca_id: mlx4_0
</span><br>
<span class="quotelev1">&gt;        transport:                      InfiniBand (0)
</span><br>
<span class="quotelev1">&gt;        fw_ver:                         2.5.000
</span><br>
<span class="quotelev1">&gt;        node_guid:                      0018:8b90:97fe:2149
</span><br>
<span class="quotelev1">&gt;        sys_image_guid:                 0018:8b90:97fe:214c
</span><br>
<span class="quotelev1">&gt;        vendor_id:                      0x02c9
</span><br>
<span class="quotelev1">&gt;        vendor_part_id:                 25418
</span><br>
<span class="quotelev1">&gt;        hw_ver:                         0xA0
</span><br>
<span class="quotelev1">&gt;        board_id:                       DEL08C0000001
</span><br>
<span class="quotelev1">&gt;        phys_port_cnt:                  2
</span><br>
<span class="quotelev1">&gt;                port:   1
</span><br>
<span class="quotelev1">&gt;                        state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                        max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                        active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                        sm_lid:                 2
</span><br>
<span class="quotelev1">&gt;                        port_lid:               166
</span><br>
<span class="quotelev1">&gt;                        port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                port:   2
</span><br>
<span class="quotelev1">&gt;                        state:                  PORT_DOWN (1)
</span><br>
<span class="quotelev1">&gt;                        max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                        active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                        sm_lid:                 0
</span><br>
<span class="quotelev1">&gt;                        port_lid:               0
</span><br>
<span class="quotelev1">&gt;                        port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am no MPI expert but just hopeful of any suggestions. Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dylan Nelson
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18855.php">Hameed Alzahrani: "[OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>Previous message:</strong> <a href="18853.php">Jeffrey Squyres: "Re: [OMPI users] Data distribution on different machines"</a>
<li><strong>In reply to:</strong> <a href="18819.php">Dylan Nelson: "[OMPI users] oMPI hang with IB question"</a>
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
