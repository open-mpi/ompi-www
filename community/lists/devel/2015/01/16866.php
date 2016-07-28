<?
$subject_val = "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp	!= 255' failed";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 31 08:38:56 2015" -->
<!-- isoreceived="20150131133856" -->
<!-- sent="Sat, 31 Jan 2015 13:38:54 +0000" -->
<!-- isosent="20150131133854" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp	!= 255' failed" -->
<!-- id="AA3F3E2E-5A65-478E-9CCB-5BB836FCA44F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150117175828.GM16124_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp	!= 255' failed<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-31 08:38:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16867.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] segmentation fault on an accumulate-fence test"</a>
<li><strong>Previous message:</strong> <a href="16865.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16797.php">Adrian Reber: "[OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16874.php">Adrian Reber: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp	!= 255' failed"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16874.php">Adrian Reber: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp	!= 255' failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adrian --
<br>
<p>Can you file this as a Github issue?  Thanks.
<br>
<p><p><span class="quotelev1">&gt; On Jan 17, 2015, at 12:58 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This time my bug report is not PSM related:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was able to reproduce the MTT error from <a href="http://mtt.open-mpi.org/index.php?do_redir=2228">http://mtt.open-mpi.org/index.php?do_redir=2228</a>
</span><br>
<span class="quotelev1">&gt; on my system with openmpi-dev-720-gf4693c9:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite: btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed.
</span><br>
<span class="quotelev1">&gt; [n050409:06796] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [n050409:06796] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [n050409:06796] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [n050409:06796] [ 0] /lib64/libpthread.so.0(+0xf710)[0x2b036d501710]
</span><br>
<span class="quotelev1">&gt; [n050409:06796] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x2b036d741635]
</span><br>
<span class="quotelev1">&gt; [n050409:06796] [ 2] /lib64/libc.so.6(abort+0x175)[0x2b036d742e15]
</span><br>
<span class="quotelev1">&gt; [n050409:06796] [ 3] /lib64/libc.so.6(+0x2b75e)[0x2b036d73a75e]
</span><br>
<span class="quotelev1">&gt; [n050409:06796] [ 4] /lib64/libc.so.6(__assert_perror_fail+0x0)[0x2b036d73a820]
</span><br>
<span class="quotelev1">&gt; [n050409:06796] [ 5] /lustre/ws1/ws/adrian-mtt-0/ompi-install/lib/openmpi/mca_btl_openib.so(mca_btl_openib_alloc+0x77)[0x2b03730cf6d0]
</span><br>
<span class="quotelev1">&gt; [n050409:06796] [ 6] /lustre/ws1/ws/adrian-mtt-0/ompi-install/lib/openmpi/mca_btl_openib.so(mca_btl_openib_sendi+0x5e5)[0x2b03730d1ae9]
</span><br>
<span class="quotelev1">&gt; [n050409:06796] [ 7] /lustre/ws1/ws/adrian-mtt-0/ompi-install/lib/openmpi/mca_pml_ob1.so(+0xd407)[0x2b0373961407]
</span><br>
<span class="quotelev1">&gt; [n050409:06796] [ 8] /lustre/ws1/ws/adrian-mtt-0/ompi-install/lib/openmpi/mca_pml_ob1.so(+0xde45)[0x2b0373961e45]
</span><br>
<span class="quotelev1">&gt; [n050409:06796] [ 9] /lustre/ws1/ws/adrian-mtt-0/ompi-install/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send+0x1ce)[0x2b0373962501]
</span><br>
<span class="quotelev1">&gt; [n050409:06796] [10] /lustre/ws1/ws/adrian-mtt-0/ompi-install/lib/libmpi.so.0(PMPI_Send+0x2b4)[0x2b036d20d1bb]
</span><br>
<span class="quotelev1">&gt; [n050409:06796] [11] mpi_test_suite[0x464424]
</span><br>
<span class="quotelev1">&gt; [n050409:06796] [12] mpi_test_suite[0x470304]
</span><br>
<span class="quotelev1">&gt; [n050409:06796] [13] mpi_test_suite[0x444a72]
</span><br>
<span class="quotelev1">&gt; [n050409:06796] [14] /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b036d72dd5d]
</span><br>
<span class="quotelev1">&gt; [n050409:06796] [15] mpi_test_suite[0x4051a9]
</span><br>
<span class="quotelev1">&gt; [n050409:06796] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 0 on node n050409 exited on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Core was generated by `mpi_test_suite -t p2p'.
</span><br>
<span class="quotelev1">&gt; Program terminated with signal 6, Aborted.
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00002b036d741635 in raise () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00002b036d742d9d in abort () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #2  0x00002b036d73a75e in __assert_fail_base () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x00002b036d73a820 in __assert_fail () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x00002b03730cf6d0 in mca_btl_openib_alloc (btl=0x224e740, ep=0x22b66a0, order=255 '\377', size=73014, flags=3) at btl_openib.c:1200
</span><br>
<span class="quotelev1">&gt; #5  0x00002b03730d1ae9 in mca_btl_openib_sendi (btl=0x224e740, ep=0x22b66a0, convertor=0x7fff2c527bb0, header=0x7fff2c527cd0, header_size=14, payload_size=73000, order=255 '\377', flags=3, 
</span><br>
<span class="quotelev1">&gt;    tag=65 'A', descriptor=0x7fff2c527ce8) at btl_openib.c:1829
</span><br>
<span class="quotelev1">&gt; #6  0x00002b0373961407 in mca_bml_base_sendi (bml_btl=0x2198850, convertor=0x7fff2c527bb0, header=0x7fff2c527cd0, header_size=14, payload_size=73000, order=255 '\377', flags=3, tag=65 'A', 
</span><br>
<span class="quotelev1">&gt;    descriptor=0x7fff2c527ce8) at ../../../../ompi/mca/bml/bml.h:305
</span><br>
<span class="quotelev1">&gt; #7  0x00002b0373961e45 in mca_pml_ob1_send_inline (buf=0x2b7b760, count=1, datatype=0x2b97440, dst=1, tag=37, seqn=3639, dst_proc=0x21c2940, endpoint=0x22dff00, comm=0x6939e0) at pml_ob1_isend.c:107
</span><br>
<span class="quotelev1">&gt; #8  0x00002b0373962501 in mca_pml_ob1_send (buf=0x2b7b760, count=1, datatype=0x2b97440, dst=1, tag=37, sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x6939e0) at pml_ob1_isend.c:214
</span><br>
<span class="quotelev1">&gt; #9  0x00002b036d20d1bb in PMPI_Send (buf=0x2b7b760, count=1, type=0x2b97440, dest=1, tag=37, comm=0x6939e0) at psend.c:78
</span><br>
<span class="quotelev1">&gt; #10 0x0000000000464424 in tst_p2p_simple_ring_xsend_run (env=0x7fff2c528530) at p2p/tst_p2p_simple_ring_xsend.c:97
</span><br>
<span class="quotelev1">&gt; #11 0x0000000000470304 in tst_test_run_func (env=0x7fff2c528530) at tst_tests.c:1463
</span><br>
<span class="quotelev1">&gt; #12 0x0000000000444a72 in main (argc=3, argv=0x7fff2c5287f8) at mpi_test_suite.c:639
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is with --enable-debug. Without --enable-debug I get a
</span><br>
<span class="quotelev1">&gt; segmentation fault, but not always. Using fewer cores it works most
</span><br>
<span class="quotelev1">&gt; of the time. With 32 cores on 4 nodes it happens almost
</span><br>
<span class="quotelev1">&gt; all the time. If it does not crash using fewer cores I get messages like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [n050409][[36216,1],1][btl_openib_xrc.c:58:mca_btl_openib_xrc_check_api] XRC error: bad XRC API (require XRC from OFED pre 3.12).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16797.php">http://www.open-mpi.org/community/lists/devel/2015/01/16797.php</a>
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
<li><strong>Next message:</strong> <a href="16867.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] segmentation fault on an accumulate-fence test"</a>
<li><strong>Previous message:</strong> <a href="16865.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16797.php">Adrian Reber: "[OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16874.php">Adrian Reber: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp	!= 255' failed"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16874.php">Adrian Reber: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp	!= 255' failed"</a>
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
