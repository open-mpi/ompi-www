<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul  8 12:42:03 2007" -->
<!-- isoreceived="20070708164203" -->
<!-- sent="Sun, 8 Jul 2007 12:41:58 -0400" -->
<!-- isosent="20070708164158" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Ob1 segfault" -->
<!-- id="200707081241.58906.tprins_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20070708123227.GA29143_at_minantech.com" -->
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
<strong>Date:</strong> 2007-07-08 12:41:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1807.php">Jeff Squyres: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<li><strong>Previous message:</strong> <a href="1805.php">Gleb Natapov: "Re: [OMPI devel] Ob1 segfault"</a>
<li><strong>In reply to:</strong> <a href="1805.php">Gleb Natapov: "Re: [OMPI devel] Ob1 segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1812.php">Gleb Natapov: "Re: [OMPI devel] Ob1 segfault"</a>
<li><strong>Reply:</strong> <a href="1812.php">Gleb Natapov: "Re: [OMPI devel] Ob1 segfault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sunday 08 July 2007 08:32:27 am Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Fri, Jul 06, 2007 at 06:36:13PM -0400, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt; &gt; While looking into another problem I ran into an issue which made ob1
</span><br>
<span class="quotelev2">&gt; &gt; segfault on me. Using gm, and running the test test_dan1 in the onesided
</span><br>
<span class="quotelev2">&gt; &gt; test suite, if I limit the gm freelist by too much, I get a segfault.
</span><br>
<span class="quotelev2">&gt; &gt; That is,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 -mca btl gm,self -mca btl_gm_free_list_max 1024 test_dan1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; works fine, but
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 -mca btl gm,self -mca btl_gm_free_list_max 512 test_dan1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot, unfortunately, reproduce this with openib BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; segfaults. Here is the relevant output from gdb:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt; &gt; [Switching to Thread 1077541088 (LWP 15600)]
</span><br>
<span class="quotelev2">&gt; &gt; 0x404d81c1 in mca_pml_ob1_send_fin (proc=0x9bd9490, bml_btl=0xd323580,
</span><br>
<span class="quotelev2">&gt; &gt;     hdr_des=0x9e54e78, order=255 '&#239;&#191;&#189;', status=1) at pml_ob1.c:267
</span><br>
<span class="quotelev2">&gt; &gt; 267         MCA_PML_OB1_DES_ALLOC(bml_btl, fin, order,
</span><br>
<span class="quotelev2">&gt; &gt; sizeof(mca_pml_ob1_fin_hdr_t));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you send me what's inside bml_btl?
</span><br>
<p>It turns out that the order of arguments to mca_pml_ob1_send_fin was wrong. I 
<br>
fixed this in r15304. But now we hang instead of segfault, and have both 
<br>
processes just looping through opal_progress. I really don't what to look 
<br>
for. Any hints?
<br>
<p>Thanks,
<br>
<p>Tim
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x404d81c1 in mca_pml_ob1_send_fin (proc=0x9bd9490,
</span><br>
<span class="quotelev2">&gt; &gt; bml_btl=0xd323580, hdr_des=0x9e54e78, order=255 '&#239;&#191;&#189;', status=1) at
</span><br>
<span class="quotelev2">&gt; &gt; pml_ob1.c:267 #1  0x404eef7a in mca_pml_ob1_send_request_put_frag
</span><br>
<span class="quotelev2">&gt; &gt; (frag=0xa711f00) at pml_ob1_sendreq.c:1141
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x404d986e in mca_pml_ob1_process_pending_rdma () at pml_ob1.c:387
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x404eed57 in mca_pml_ob1_put_completion (btl=0x9c37e38,
</span><br>
<span class="quotelev2">&gt; &gt; ep=0x9c42c78, des=0xb62ad00, status=0) at pml_ob1_sendreq.c:1108
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x404ff520 in mca_btl_gm_put_callback (port=0x9bec5e0,
</span><br>
<span class="quotelev2">&gt; &gt; context=0xb62ad00, status=GM_SUCCESS) at btl_gm.c:682
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x40512c4f in gm_handle_sent_tokens (p=0x9bec5e0, e=0x406189c0)
</span><br>
<span class="quotelev2">&gt; &gt;     at ./libgm/gm_handle_sent_tokens.c:82
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x40517c73 in _gm_unknown (p=0x9bec5e0, e=0x406189c0)
</span><br>
<span class="quotelev2">&gt; &gt;     at ./libgm/gm_unknown.c:222
</span><br>
<span class="quotelev2">&gt; &gt; #7  0x405180fc in gm_unknown (p=0x9bec5e0, e=0x406189c0)
</span><br>
<span class="quotelev2">&gt; &gt;     at ./libgm/gm_unknown.c:300
</span><br>
<span class="quotelev2">&gt; &gt; #8  0x40502708 in mca_btl_gm_component_progress () at
</span><br>
<span class="quotelev2">&gt; &gt; btl_gm_component.c:649 #9  0x404f6fd6 in mca_bml_r2_progress () at
</span><br>
<span class="quotelev2">&gt; &gt; bml_r2.c:110
</span><br>
<span class="quotelev2">&gt; &gt; #10 0x401a51d3 in opal_progress () at runtime/opal_progress.c:201
</span><br>
<span class="quotelev2">&gt; &gt; #11 0x405cf864 in opal_condition_wait (c=0x9e564b8, m=0x9e56478)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../opal/threads/condition.h:98
</span><br>
<span class="quotelev2">&gt; &gt; #12 0x405cf68e in ompi_osc_pt2pt_module_fence (assert=0, win=0x9e55ec8)
</span><br>
<span class="quotelev2">&gt; &gt;     at osc_pt2pt_sync.c:142
</span><br>
<span class="quotelev2">&gt; &gt; #13 0x400b6ebb in PMPI_Win_fence (assert=0, win=0x9e55ec8) at
</span><br>
<span class="quotelev2">&gt; &gt; pwin_fence.c:57 #14 0x0804a2f3 in test_bandwidth1 (nbufsize=1050000,
</span><br>
<span class="quotelev2">&gt; &gt; min_iterations=10, max_iterations=1000, verbose=0) at test_dan1.c:282
</span><br>
<span class="quotelev2">&gt; &gt; #15 0x0804b06f in get_bandwidth (argc=0, argv=0x0) at test_dan1.c:686
</span><br>
<span class="quotelev2">&gt; &gt; #16 0x080512f5 in test_dan1 () at test_dan1.c:3555
</span><br>
<span class="quotelev2">&gt; &gt; #17 0x08051573 in main (argc=1, argv=0xbfeba9f4) at test_dan1.c:3639
</span><br>
<span class="quotelev2">&gt; &gt; (gdb)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is using the trunk. Any ideas?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1807.php">Jeff Squyres: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<li><strong>Previous message:</strong> <a href="1805.php">Gleb Natapov: "Re: [OMPI devel] Ob1 segfault"</a>
<li><strong>In reply to:</strong> <a href="1805.php">Gleb Natapov: "Re: [OMPI devel] Ob1 segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1812.php">Gleb Natapov: "Re: [OMPI devel] Ob1 segfault"</a>
<li><strong>Reply:</strong> <a href="1812.php">Gleb Natapov: "Re: [OMPI devel] Ob1 segfault"</a>
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
