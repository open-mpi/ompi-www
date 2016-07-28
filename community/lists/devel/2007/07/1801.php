<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul  6 18:36:21 2007" -->
<!-- isoreceived="20070706223621" -->
<!-- sent="Fri, 6 Jul 2007 18:36:13 -0400" -->
<!-- isosent="20070706223613" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[OMPI devel] Ob1 segfault" -->
<!-- id="200707061836.13615.tprins_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-06 18:36:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1802.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15302"</a>
<li><strong>Previous message:</strong> <a href="1800.php">Don Kerr: "[OMPI devel] opal_output_verbose usage guidelines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1805.php">Gleb Natapov: "Re: [OMPI devel] Ob1 segfault"</a>
<li><strong>Reply:</strong> <a href="1805.php">Gleb Natapov: "Re: [OMPI devel] Ob1 segfault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While looking into another problem I ran into an issue which made ob1 segfault 
<br>
on me. Using gm, and running the test test_dan1 in the onesided test suite, 
<br>
if I limit the gm freelist by too much, I get a segfault. That is,
<br>
<p>mpirun -np 2 -mca btl gm,self -mca btl_gm_free_list_max 1024 test_dan1
<br>
<p>works fine, but
<br>
<p>mpirun -np 2 -mca btl gm,self -mca btl_gm_free_list_max 512 test_dan1
<br>
<p>segfaults. Here is the relevant output from gdb:
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
[Switching to Thread 1077541088 (LWP 15600)]
<br>
0x404d81c1 in mca_pml_ob1_send_fin (proc=0x9bd9490, bml_btl=0xd323580, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hdr_des=0x9e54e78, order=255 '&#239;&#191;&#189;', status=1) at pml_ob1.c:267
<br>
267         MCA_PML_OB1_DES_ALLOC(bml_btl, fin, order, 
<br>
sizeof(mca_pml_ob1_fin_hdr_t));
<br>
(gdb) bt
<br>
#0  0x404d81c1 in mca_pml_ob1_send_fin (proc=0x9bd9490, bml_btl=0xd323580, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hdr_des=0x9e54e78, order=255 '&#239;&#191;&#189;', status=1) at pml_ob1.c:267
<br>
#1  0x404eef7a in mca_pml_ob1_send_request_put_frag (frag=0xa711f00)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at pml_ob1_sendreq.c:1141
<br>
#2  0x404d986e in mca_pml_ob1_process_pending_rdma () at pml_ob1.c:387
<br>
#3  0x404eed57 in mca_pml_ob1_put_completion (btl=0x9c37e38, ep=0x9c42c78, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;des=0xb62ad00, status=0) at pml_ob1_sendreq.c:1108
<br>
#4  0x404ff520 in mca_btl_gm_put_callback (port=0x9bec5e0, context=0xb62ad00, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;status=GM_SUCCESS) at btl_gm.c:682
<br>
#5  0x40512c4f in gm_handle_sent_tokens (p=0x9bec5e0, e=0x406189c0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ./libgm/gm_handle_sent_tokens.c:82
<br>
#6  0x40517c73 in _gm_unknown (p=0x9bec5e0, e=0x406189c0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ./libgm/gm_unknown.c:222
<br>
#7  0x405180fc in gm_unknown (p=0x9bec5e0, e=0x406189c0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ./libgm/gm_unknown.c:300
<br>
#8  0x40502708 in mca_btl_gm_component_progress () at btl_gm_component.c:649
<br>
#9  0x404f6fd6 in mca_bml_r2_progress () at bml_r2.c:110
<br>
#10 0x401a51d3 in opal_progress () at runtime/opal_progress.c:201
<br>
#11 0x405cf864 in opal_condition_wait (c=0x9e564b8, m=0x9e56478)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../opal/threads/condition.h:98
<br>
#12 0x405cf68e in ompi_osc_pt2pt_module_fence (assert=0, win=0x9e55ec8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at osc_pt2pt_sync.c:142
<br>
#13 0x400b6ebb in PMPI_Win_fence (assert=0, win=0x9e55ec8) at pwin_fence.c:57
<br>
#14 0x0804a2f3 in test_bandwidth1 (nbufsize=1050000, min_iterations=10, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_iterations=1000, verbose=0) at test_dan1.c:282
<br>
#15 0x0804b06f in get_bandwidth (argc=0, argv=0x0) at test_dan1.c:686
<br>
#16 0x080512f5 in test_dan1 () at test_dan1.c:3555
<br>
#17 0x08051573 in main (argc=1, argv=0xbfeba9f4) at test_dan1.c:3639
<br>
(gdb) 
<br>
<p>This is using the trunk. Any ideas?
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1802.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15302"</a>
<li><strong>Previous message:</strong> <a href="1800.php">Don Kerr: "[OMPI devel] opal_output_verbose usage guidelines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1805.php">Gleb Natapov: "Re: [OMPI devel] Ob1 segfault"</a>
<li><strong>Reply:</strong> <a href="1805.php">Gleb Natapov: "Re: [OMPI devel] Ob1 segfault"</a>
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
