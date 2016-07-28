<?
$subject_val = "[OMPI devel] segmentation fault on an accumulate-fence test";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 19 04:48:43 2015" -->
<!-- isoreceived="20150119094843" -->
<!-- sent="Mon, 19 Jan 2015 11:48:43 +0200" -->
<!-- isosent="20150119094843" -->
<!-- name="Alina Sklarevich" -->
<!-- email="alinas_at_[hidden]" -->
<!-- subject="[OMPI devel] segmentation fault on an accumulate-fence test" -->
<!-- id="CADGp0BT5ED0Z6eRBFaROk4sp4pr5cLRx_u8zyKf7umBOdqMrmQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] segmentation fault on an accumulate-fence test<br>
<strong>From:</strong> Alina Sklarevich (<em>alinas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-19 04:48:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16803.php">Alina Sklarevich: "Re: [OMPI devel] segmentation fault on an accumulate-fence test"</a>
<li><strong>Previous message:</strong> <a href="16801.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16803.php">Alina Sklarevich: "Re: [OMPI devel] segmentation fault on an accumulate-fence test"</a>
<li><strong>Reply:</strong> <a href="16803.php">Alina Sklarevich: "Re: [OMPI devel] segmentation fault on an accumulate-fence test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OMPI community,
<br>
<p><p><p>We observe a segmentation fault in our regression testing. Our initial
<br>
investigation shows that It happens for any 1.8.x release and with any
<br>
PML/BTL/MTL combo on two processes, when running the MPICH one-sided test,
<br>
accumulate-fence test, attached to this report with the following command
<br>
line:
<br>
<p><p><p>$mpirun -np 2 --bind-to core --display-map --map-by node -mca pml ob1 -mca
<br>
btl self,openib ../test/mpi/rma/accfence1
<br>
<p><p><p>The initial trace is:
<br>
<p><p><p>Data for JOB [16088,1] offset 0
<br>
<p><p><p>========================   JOB MAP   ========================
<br>
<p><p><p>Data for node: vegas15 Num slots: 16     Max slots: 0        Num procs: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [16088,1] App: 0 Process rank: 0
<br>
<p><p><p>Data for node: vegas16 Num slots: 16     Max slots: 0        Num procs: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [16088,1] App: 0 Process rank: 1
<br>
<p><p><p>=============================================================
<br>
<p>[vegas16:22098] *** Process received signal ***
<br>
<p>[vegas16:22098] Signal: Segmentation fault (11)
<br>
<p>[vegas16:22098] Signal code: Address not mapped (1)
<br>
<p>[vegas16:22098] Failing at address: 0x34
<br>
<p>[vegas16:22098] [ 0] /lib64/libpthread.so.0[0x3f6e80f710]
<br>
<p>[vegas16:22098] [ 1]
<br>
/labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libopen-pal.so.6(opal_memory_ptmalloc2_int_free+0x188)[0x7ffff772baa2]
<br>
<p>[vegas16:22098] [ 2]
<br>
/labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libopen-pal.so.6(opal_memory_ptmalloc2_free+0x98)[0x7ffff772a1f5]
<br>
<p>[vegas16:22098] [ 3]
<br>
/labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libopen-pal.so.6(+0xd6f59)[0x7ffff7728f59]
<br>
<p>[vegas16:22098] [ 4]
<br>
/labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libmpi.so.1(+0x2f884)[0x7ffff7c92884]
<br>
<p>[vegas16:22098] [ 5]
<br>
/labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libmpi.so.1(ompi_attr_delete_all+0x2eb)[0x7ffff7c92dbe]
<br>
<p>[vegas16:22098] [ 6]
<br>
/labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libmpi.so.1(ompi_comm_free+0x6a)[0x7ffff7c99336]
<br>
<p>[vegas16:22098] [ 7]
<br>
/labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/openmpi/mca_osc_rdma.so(ompi_osc_rdma_free+0x921)[0x7ffff32ab3bc]
<br>
<p>[vegas16:22098] [ 8]
<br>
/labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libmpi.so.1(ompi_win_free+0x24)[0x7ffff7cc0c87]
<br>
<p>[vegas16:22098] [ 9]
<br>
/labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libmpi.so.1(MPI_Win_free+0xb8)[0x7ffff7d2b702]
<br>
<p>[vegas16:22098] [10]
<br>
/labhome/alinas/workspace/mpich/mpich-mellanox/test/mpi/rma/accfence1[0x402447]
<br>
<p>[vegas16:22098] [11] /lib64/libc.so.6(__libc_start_main+0xfd)[0x3f6e41ed1d]
<br>
<p>[vegas16:22098] [12]
<br>
/labhome/alinas/workspace/mpich/mpich-mellanox/test/mpi/rma/accfence1[0x402119]
<br>
<p>[vegas16:22098] *** End of error message ***
<br>
<p><p><p><p><p>And subsequent investigation of the core file generates the following hints:
<br>
<p><p><p>(gdb) bt
<br>
<p>#0  0x00007ffff7722a96 in opal_memory_ptmalloc2_int_free
<br>
(av=0x7ffff796b320, mem=0x7125a0) at malloc.c:4402
<br>
<p>#1  0x00007ffff77211f5 in opal_memory_ptmalloc2_free (mem=0x7125a0) at
<br>
malloc.c:3511
<br>
<p>#2  0x00007ffff771ff59 in opal_memory_linux_free_hook (__ptr=0x7125a0,
<br>
caller=0x7ffff769a8f6) at hooks.c:709
<br>
<p>#3  0x00007ffff769a8f6 in opal_datatype_destruct (datatype=0x7123b0) at
<br>
opal_datatype_create.c:59
<br>
<p>#4  0x00007ffff3346ad0 in opal_obj_run_destructors (object=0x7123b0) at
<br>
../../../../opal/class/opal_object.h:448
<br>
<p>#5  0x00007ffff334af68 in process_acc (module=0x70e370, source=0,
<br>
acc_header=0x70fef0) at osc_rdma_data_move.c:1184
<br>
<p>#6  0x00007ffff334c752 in process_frag (module=0x70e370, frag=0x70fee0) at
<br>
osc_rdma_data_move.c:1576
<br>
<p>#7  0x00007ffff334cafb in ompi_osc_rdma_callback (request=0x700b80) at
<br>
osc_rdma_data_move.c:1656
<br>
<p>#8  0x00007ffff3db3770 in ompi_request_complete (request=0x700b80,
<br>
with_signal=true) at ../../../../ompi/request/request.h:402
<br>
<p>#9  0x00007ffff3db3f11 in recv_request_pml_complete (recvreq=0x700b80) at
<br>
pml_ob1_recvreq.h:181
<br>
<p>#10 0x00007ffff3db5019 in mca_pml_ob1_recv_frag_callback_match
<br>
(btl=0x7ffff41d9c20, tag=65 'A', des=0x7fffffffd210, cbdata=0x0) at
<br>
pml_ob1_recvfrag.c:243
<br>
<p>#11 0x00007ffff3fd6c4b in mca_btl_sm_component_progress () at
<br>
btl_sm_component.c:1087
<br>
<p>#12 0x00007ffff7678d66 in opal_progress () at runtime/opal_progress.c:187
<br>
<p>#13 0x00007ffff3dabb44 in opal_condition_wait (c=0x7ffff7ffa120,
<br>
m=0x7ffff7ffa160) at ../../../../opal/threads/condition.h:78
<br>
<p>#14 0x00007ffff3dabcc6 in ompi_request_wait_completion (req=0x7fffffffd410)
<br>
at ../../../../ompi/request/request.h:381
<br>
<p>#15 0x00007ffff3dac9da in mca_pml_ob1_recv (addr=0x7fffffffd9ec, count=1,
<br>
datatype=0x7ffff7fe25c0, src=0, tag=-24, comm=0x70dac0, status=0x0) at
<br>
pml_ob1_irecv.c:109
<br>
<p>#16 0x00007ffff2cd2868 in ompi_coll_tuned_scatter_intra_basic_linear
<br>
(sbuf=0x0, scount=1, sdtype=0x7ffff7fe25c0, rbuf=0x7fffffffd9ec, rcount=1,
<br>
rdtype=0x7ffff7fe25c0, root=0, comm=0x70dac0, module=0x70fa20)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;at coll_tuned_scatter.c:231
<br>
<p>#17 0x00007ffff2cbbd75 in ompi_coll_tuned_scatter_intra_dec_fixed
<br>
(sbuf=0x0, scount=1, sdtype=0x7ffff7fe25c0, rbuf=0x7fffffffd9ec, rcount=1,
<br>
rdtype=0x7ffff7fe25c0, root=0, comm=0x70dac0, module=0x70fa20)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;at coll_tuned_decision_fixed.c:769
<br>
<p>#18 0x00007ffff3b9c16e in mca_coll_basic_reduce_scatter_block_intra
<br>
(sbuf=0x70e220, rbuf=0x7fffffffd9ec, rcount=1, dtype=0x7ffff7fe25c0,
<br>
op=0x60d180, comm=0x70dac0, module=0x70f230)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;at coll_basic_reduce_scatter_block.c:102
<br>
<p>#19 0x00007ffff334eecc in ompi_osc_rdma_fence (assert=0, win=0x70e260) at
<br>
osc_rdma_active_target.c:140
<br>
<p>#20 0x00007ffff7d2a1b5 in PMPI_Win_fence (assert=0, win=0x70e260) at
<br>
pwin_fence.c:59
<br>
<p>#21 0x0000000000402405 in main ()
<br>
<p><p><p><p><p>It looks to be a clear case of memory corruption hidden somewhere in the
<br>
OSC code. Nathan, can you please have a look?
<br>
<p><p><p>Thanks,
<br>
<p>Alina.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16802/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16803.php">Alina Sklarevich: "Re: [OMPI devel] segmentation fault on an accumulate-fence test"</a>
<li><strong>Previous message:</strong> <a href="16801.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16803.php">Alina Sklarevich: "Re: [OMPI devel] segmentation fault on an accumulate-fence test"</a>
<li><strong>Reply:</strong> <a href="16803.php">Alina Sklarevich: "Re: [OMPI devel] segmentation fault on an accumulate-fence test"</a>
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
