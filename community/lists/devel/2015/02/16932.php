<?
$subject_val = "Re: [OMPI devel] segmentation fault on an accumulate-fence test";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 07:37:50 2015" -->
<!-- isoreceived="20150205123750" -->
<!-- sent="Thu, 5 Feb 2015 12:37:49 +0000" -->
<!-- isosent="20150205123749" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] segmentation fault on an accumulate-fence test" -->
<!-- id="3A8B08CE-BD92-418C-8C73-30595F507B40_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADGp0BRdAcJYmVb=_8Sa7OoHTAFv-ntv4BVQPKwutZOKLW3uJA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] segmentation fault on an accumulate-fence test<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-05 07:37:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16933.php">Ralph Castain: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Previous message:</strong> <a href="16931.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>In reply to:</strong> <a href="16930.php">Alina Sklarevich: "Re: [OMPI devel] segmentation fault on an accumulate-fence test"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you!
<br>
<p>I think Nathan may actually be back at work; hopefully he can look at this shortly.
<br>
<p><p><span class="quotelev1">&gt; On Feb 5, 2015, at 7:36 AM, Alina Sklarevich &lt;alinas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure: 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi-release/issues/178">https://github.com/open-mpi/ompi-release/issues/178</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alina.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Jan 31, 2015 at 3:39 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Alina --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry; I think this bug report got lost in the run-up to the Open MPI dev meeting last week, and that fact that Nathan (the primary one-sided maintainer) is taking a little time off.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you file a Github issue about this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 19, 2015, at 4:50 AM, Alina Sklarevich &lt;alinas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Attaching the test for reproduction.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Jan 19, 2015 at 11:48 AM, Alina Sklarevich &lt;alinas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear OMPI community,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We observe a segmentation fault in our regression testing. Our initial investigation shows that It happens for any 1.8.x release and with any PML/BTL/MTL combo on two processes, when running the MPICH one-sided test, accumulate-fence test, attached to this report with the following command line:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $mpirun -np 2 --bind-to core --display-map --map-by node -mca pml ob1 -mca btl self,openib ../test/mpi/rma/accfence1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The initial trace is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Data for JOB [16088,1] offset 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: vegas15 Num slots: 16     Max slots: 0        Num procs: 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                Process OMPI jobid: [16088,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: vegas16 Num slots: 16     Max slots: 0        Num procs: 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                Process OMPI jobid: [16088,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; =============================================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [vegas16:22098] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [vegas16:22098] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [vegas16:22098] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [vegas16:22098] Failing at address: 0x34
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [vegas16:22098] [ 0] /lib64/libpthread.so.0[0x3f6e80f710]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [vegas16:22098] [ 1] /labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libopen-pal.so.6(opal_memory_ptmalloc2_int_free+0x188)[0x7ffff772baa2]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [vegas16:22098] [ 2] /labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libopen-pal.so.6(opal_memory_ptmalloc2_free+0x98)[0x7ffff772a1f5]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [vegas16:22098] [ 3] /labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libopen-pal.so.6(+0xd6f59)[0x7ffff7728f59]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [vegas16:22098] [ 4] /labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libmpi.so.1(+0x2f884)[0x7ffff7c92884]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [vegas16:22098] [ 5] /labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libmpi.so.1(ompi_attr_delete_all+0x2eb)[0x7ffff7c92dbe]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [vegas16:22098] [ 6] /labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libmpi.so.1(ompi_comm_free+0x6a)[0x7ffff7c99336]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [vegas16:22098] [ 7] /labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/openmpi/mca_osc_rdma.so(ompi_osc_rdma_free+0x921)[0x7ffff32ab3bc]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [vegas16:22098] [ 8] /labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libmpi.so.1(ompi_win_free+0x24)[0x7ffff7cc0c87]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [vegas16:22098] [ 9] /labhome/alinas/workspace/ompi/openmpi-1.8.4/install/lib/libmpi.so.1(MPI_Win_free+0xb8)[0x7ffff7d2b702]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [vegas16:22098] [10] /labhome/alinas/workspace/mpich/mpich-mellanox/test/mpi/rma/accfence1[0x402447]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [vegas16:22098] [11] /lib64/libc.so.6(__libc_start_main+0xfd)[0x3f6e41ed1d]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [vegas16:22098] [12] /labhome/alinas/workspace/mpich/mpich-mellanox/test/mpi/rma/accfence1[0x402119]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [vegas16:22098] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And subsequent investigation of the core file generates the following hints:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00007ffff7722a96 in opal_memory_ptmalloc2_int_free (av=0x7ffff796b320, mem=0x7125a0) at malloc.c:4402
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00007ffff77211f5 in opal_memory_ptmalloc2_free (mem=0x7125a0) at malloc.c:3511
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00007ffff771ff59 in opal_memory_linux_free_hook (__ptr=0x7125a0, caller=0x7ffff769a8f6) at hooks.c:709
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00007ffff769a8f6 in opal_datatype_destruct (datatype=0x7123b0) at opal_datatype_create.c:59
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x00007ffff3346ad0 in opal_obj_run_destructors (object=0x7123b0) at ../../../../opal/class/opal_object.h:448
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x00007ffff334af68 in process_acc (module=0x70e370, source=0, acc_header=0x70fef0) at osc_rdma_data_move.c:1184
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x00007ffff334c752 in process_frag (module=0x70e370, frag=0x70fee0) at osc_rdma_data_move.c:1576
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #7  0x00007ffff334cafb in ompi_osc_rdma_callback (request=0x700b80) at osc_rdma_data_move.c:1656
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #8  0x00007ffff3db3770 in ompi_request_complete (request=0x700b80, with_signal=true) at ../../../../ompi/request/request.h:402
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #9  0x00007ffff3db3f11 in recv_request_pml_complete (recvreq=0x700b80) at pml_ob1_recvreq.h:181
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #10 0x00007ffff3db5019 in mca_pml_ob1_recv_frag_callback_match (btl=0x7ffff41d9c20, tag=65 'A', des=0x7fffffffd210, cbdata=0x0) at pml_ob1_recvfrag.c:243
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #11 0x00007ffff3fd6c4b in mca_btl_sm_component_progress () at btl_sm_component.c:1087
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #12 0x00007ffff7678d66 in opal_progress () at runtime/opal_progress.c:187
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #13 0x00007ffff3dabb44 in opal_condition_wait (c=0x7ffff7ffa120, m=0x7ffff7ffa160) at ../../../../opal/threads/condition.h:78
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #14 0x00007ffff3dabcc6 in ompi_request_wait_completion (req=0x7fffffffd410) at ../../../../ompi/request/request.h:381
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #15 0x00007ffff3dac9da in mca_pml_ob1_recv (addr=0x7fffffffd9ec, count=1, datatype=0x7ffff7fe25c0, src=0, tag=-24, comm=0x70dac0, status=0x0) at pml_ob1_irecv.c:109
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #16 0x00007ffff2cd2868 in ompi_coll_tuned_scatter_intra_basic_linear (sbuf=0x0, scount=1, sdtype=0x7ffff7fe25c0, rbuf=0x7fffffffd9ec, rcount=1, rdtype=0x7ffff7fe25c0, root=0, comm=0x70dac0, module=0x70fa20)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     at coll_tuned_scatter.c:231
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #17 0x00007ffff2cbbd75 in ompi_coll_tuned_scatter_intra_dec_fixed (sbuf=0x0, scount=1, sdtype=0x7ffff7fe25c0, rbuf=0x7fffffffd9ec, rcount=1, rdtype=0x7ffff7fe25c0, root=0, comm=0x70dac0, module=0x70fa20)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     at coll_tuned_decision_fixed.c:769
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #18 0x00007ffff3b9c16e in mca_coll_basic_reduce_scatter_block_intra (sbuf=0x70e220, rbuf=0x7fffffffd9ec, rcount=1, dtype=0x7ffff7fe25c0, op=0x60d180, comm=0x70dac0, module=0x70f230)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     at coll_basic_reduce_scatter_block.c:102
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #19 0x00007ffff334eecc in ompi_osc_rdma_fence (assert=0, win=0x70e260) at osc_rdma_active_target.c:140
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #20 0x00007ffff7d2a1b5 in PMPI_Win_fence (assert=0, win=0x70e260) at pwin_fence.c:59
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #21 0x0000000000402405 in main ()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It looks to be a clear case of memory corruption hidden somewhere in the OSC code. Nathan, can you please have a look?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Alina.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;accfence1.c&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16803.php">http://www.open-mpi.org/community/lists/devel/2015/01/16803.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16867.php">http://www.open-mpi.org/community/lists/devel/2015/01/16867.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16930.php">http://www.open-mpi.org/community/lists/devel/2015/02/16930.php</a>
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
<li><strong>Next message:</strong> <a href="16933.php">Ralph Castain: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Previous message:</strong> <a href="16931.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>In reply to:</strong> <a href="16930.php">Alina Sklarevich: "Re: [OMPI devel] segmentation fault on an accumulate-fence test"</a>
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
