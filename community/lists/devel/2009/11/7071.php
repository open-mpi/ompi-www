<?
$subject_val = "Re: [OMPI devel] mpool rdma deadlock";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 21:20:24 2009" -->
<!-- isoreceived="20091103022024" -->
<!-- sent="Mon, 2 Nov 2009 21:20:17 -0500" -->
<!-- isosent="20091103022017" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpool rdma deadlock" -->
<!-- id="1E448ACC-C0C7-4645-8586-85B60C36130C_at_cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20091028224828.53bb4567_at_lilo" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpool rdma deadlock<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-02 21:20:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7072.php">Jeff Squyres: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>Previous message:</strong> <a href="7070.php">Jeff Squyres: "Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/7042.php">Christopher Yeoh: "[OMPI devel] mpool rdma deadlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7121.php">Christopher Yeoh: "Re: [OMPI devel] mpool rdma deadlock - malloc implementation issue"</a>
<li><strong>Reply:</strong> <a href="7121.php">Christopher Yeoh: "Re: [OMPI devel] mpool rdma deadlock - malloc implementation issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ewww.... yikes.  This could definitely be an issue if we weren't  
<br>
(multi-thread) careful when writing these portions of the code.  :-(
<br>
<p><p>On Oct 28, 2009, at 8:18 AM, Christopher Yeoh wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been investigating some OpenMPI deadlocks triggered by a test  
</span><br>
<span class="quotelev1">&gt; suite
</span><br>
<span class="quotelev1">&gt; written to test the thread safety of MPI libraries. I'm using  
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.3.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One of the deadlocks I'm seeing looks like this (the sleep for frame  
</span><br>
<span class="quotelev1">&gt; 1 is something I
</span><br>
<span class="quotelev1">&gt; inserted when a deadlock is detected so I can attach a debugger to  
</span><br>
<span class="quotelev1">&gt; all the nodes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0xf7d9e680 in nanosleep () from /lib/power6x/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0xf7d9e408 in sleep () from /lib/power6x/libc.so.6
</span><br>
<span class="quotelev1">&gt; #2  0x0ee22ae4 in opal_mutex_lock (m=0x10101d00) at ../../../../opal/ 
</span><br>
<span class="quotelev1">&gt; threads/mutex_unix.h:114
</span><br>
<span class="quotelev1">&gt; #3  0x0ee247f8 in mca_mpool_rdma_release_memory (mpool=0x10101a80,  
</span><br>
<span class="quotelev1">&gt; base=0xf2af0000, size=65536)
</span><br>
<span class="quotelev1">&gt;     at mpool_rdma_module.c:405
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Trying to take mpool-&gt;rcache-&gt;lock
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #4  0x0ff4fcac in mca_mpool_base_mem_cb (base=0xf2af0000,  
</span><br>
<span class="quotelev1">&gt; size=65536, cbdata=0x0, from_alloc=true)
</span><br>
<span class="quotelev1">&gt;     at base/mpool_base_mem_cb.c:52
</span><br>
<span class="quotelev1">&gt; #5  0x0fccade0 in opal_mem_hooks_release_hook (buf=0xf2af0000,  
</span><br>
<span class="quotelev1">&gt; length=65536, from_alloc=true)
</span><br>
<span class="quotelev1">&gt;     at memoryhooks/memory.c:132
</span><br>
<span class="quotelev1">&gt; #6  0x0fd176d8 in opal_mem_free_ptmalloc2_munmap (start=0xf2af0000,  
</span><br>
<span class="quotelev1">&gt; length=65536, from_alloc=1)
</span><br>
<span class="quotelev1">&gt;     at opal_ptmalloc2_munmap.c:74
</span><br>
<span class="quotelev1">&gt; #7  0x0fd18268 in new_heap (size=196608, top_pad=131072) at arena.c: 
</span><br>
<span class="quotelev1">&gt; 552
</span><br>
<span class="quotelev1">&gt; #8  0x0fd1b1cc in sYSMALLOc (nb=152, av=0xefb00010) at malloc.c:2944
</span><br>
<span class="quotelev1">&gt; #9  0x0fd1dc2c in opal_memory_ptmalloc2_int_malloc (av=0xefb00010,  
</span><br>
<span class="quotelev1">&gt; bytes=144) at malloc.c:4319
</span><br>
<span class="quotelev1">&gt; #10 0x0fd1bd80 in opal_memory_ptmalloc2_malloc (bytes=144) at  
</span><br>
<span class="quotelev1">&gt; malloc.c:3432
</span><br>
<span class="quotelev1">&gt; #11 0x0fd1a968 in opal_memory_ptmalloc2_malloc_hook (sz=144,  
</span><br>
<span class="quotelev1">&gt; caller=0xee83678) at hooks.c:667
</span><br>
<span class="quotelev1">&gt; #12 0xf7d73a94 in malloc () from /lib/power6x/libc.so.6
</span><br>
<span class="quotelev1">&gt; #13 0x0ee83678 in opal_obj_new (cls=0xee956b8) at ../../../../opal/ 
</span><br>
<span class="quotelev1">&gt; class/opal_object.h:473
</span><br>
<span class="quotelev1">&gt; #14 0x0ee835bc in opal_obj_new_debug (type=0xee956b8, file=0xee84ef0  
</span><br>
<span class="quotelev1">&gt; &quot;rcache_vma_tree.c&quot;, line=109)
</span><br>
<span class="quotelev1">&gt;     at ../../../../opal/class/opal_object.h:247
</span><br>
<span class="quotelev1">&gt; #15 0x0ee8380c in mca_rcache_vma_new (vma_rcache=0x10101ce8,  
</span><br>
<span class="quotelev1">&gt; start=3940155392, end=3940220927)
</span><br>
<span class="quotelev1">&gt;     at rcache_vma_tree.c:109
</span><br>
<span class="quotelev1">&gt; #16 0x0ee82f78 in mca_rcache_vma_tree_insert (vma_rcache=0x10101ce8,  
</span><br>
<span class="quotelev1">&gt; reg=0xefbfdc80, limit=0)
</span><br>
<span class="quotelev1">&gt;     at rcache_vma_tree.c:403
</span><br>
<span class="quotelev1">&gt; #17 0x0ee8205c in mca_rcache_vma_insert (rcache=0x10101ce8,  
</span><br>
<span class="quotelev1">&gt; reg=0xefbfdc80, limit=0) at rcache_vma.c:94
</span><br>
<span class="quotelev1">&gt; #18 0x0ee237e4 in mca_mpool_rdma_register (mpool=0x10101a80,  
</span><br>
<span class="quotelev1">&gt; addr=0xead90008, size=65536, flags=0,
</span><br>
<span class="quotelev1">&gt;     reg=0xf1f2e760) at mpool_rdma_module.c:250
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; already took mpool-&gt;rcache-&gt;lock earlier a bit before (~line 197)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #19 0x0ec2a680 in mca_btl_openib_prepare_dst (btl=0x101061c8,  
</span><br>
<span class="quotelev1">&gt; endpoint=0x10153178, registration=0x0,
</span><br>
<span class="quotelev1">&gt;     convertor=0xef909b88, order=255 '&#239;&#191;&#189;', reserve=0,  
</span><br>
<span class="quotelev1">&gt; size=0x1014f70c, flags=6) at btl_openib.c:921
</span><br>
<span class="quotelev1">&gt; #20 0x0ed07724 in mca_bml_base_prepare_dst (bml_btl=0x10154378,  
</span><br>
<span class="quotelev1">&gt; reg=0x0, conv=0xef909b88, order=255 '&#239;&#191;&#189;',
</span><br>
<span class="quotelev1">&gt;     reserve=0, size=0x1014f70c, flags=6, des=0xf1f2e7e8)  
</span><br>
<span class="quotelev1">&gt; at ../../../../ompi/mca/bml/bml.h:355
</span><br>
<span class="quotelev1">&gt; #21 0x0ed0747c in mca_pml_ob1_recv_request_get_frag  
</span><br>
<span class="quotelev1">&gt; (frag=0x1014f680) at pml_ob1_recvreq.c:359
</span><br>
<span class="quotelev1">&gt; #22 0x0ed07e38 in mca_pml_ob1_recv_request_progress_rget  
</span><br>
<span class="quotelev1">&gt; (recvreq=0xef909b00, btl=0x101061c8,
</span><br>
<span class="quotelev1">&gt;     segments=0x1023da10, num_segments=1) at pml_ob1_recvreq.c:527
</span><br>
<span class="quotelev1">&gt; #23 0x0ed039b8 in mca_pml_ob1_recv_frag_match (btl=0x101061c8,  
</span><br>
<span class="quotelev1">&gt; hdr=0xf514b230, segments=0x1023da10,
</span><br>
<span class="quotelev1">&gt;     num_segments=1, type=67) at pml_ob1_recvfrag.c:644
</span><br>
<span class="quotelev1">&gt; #24 0x0ed020b4 in mca_pml_ob1_recv_frag_callback_rget  
</span><br>
<span class="quotelev1">&gt; (btl=0x101061c8, tag=67 'C', des=0x1023d9b0,
</span><br>
<span class="quotelev1">&gt;     cbdata=0x0) at pml_ob1_recvfrag.c:275
</span><br>
<span class="quotelev1">&gt; #25 0x0ec3703c in btl_openib_handle_incoming (openib_btl=0x101061c8,  
</span><br>
<span class="quotelev1">&gt; ep=0x10153178, frag=0x1023d9b0,
</span><br>
<span class="quotelev1">&gt; ---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
</span><br>
<span class="quotelev1">&gt;     byte_len=76) at btl_openib_component.c:2616
</span><br>
<span class="quotelev1">&gt; #26 0x0ec3a66c in progress_one_device (device=0x10100e60) at  
</span><br>
<span class="quotelev1">&gt; btl_openib_component.c:3146
</span><br>
<span class="quotelev1">&gt; #27 0x0ec3a870 in btl_openib_component_progress () at  
</span><br>
<span class="quotelev1">&gt; btl_openib_component.c:3186
</span><br>
<span class="quotelev1">&gt; #28 0x0fccbf10 in opal_progress () at runtime/opal_progress.c:207
</span><br>
<span class="quotelev1">&gt; #29 0x0fe9d15c in opal_condition_wait (c=0xffa98e0, m=0xffa9930)  
</span><br>
<span class="quotelev1">&gt; at ../opal/threads/condition.h:85
</span><br>
<span class="quotelev1">&gt; #30 0x0fe9d7cc in ompi_request_default_wait_all (count=1,  
</span><br>
<span class="quotelev1">&gt; requests=0xf1f2eb00, statuses=0x0)
</span><br>
<span class="quotelev1">&gt;     at request/req_wait.c:270
</span><br>
<span class="quotelev1">&gt; #31 0x0ea97af8 in ompi_coll_tuned_reduce_generic  
</span><br>
<span class="quotelev1">&gt; (sendbuf=0xeeaf0008, recvbuf=0xecca0008,
</span><br>
<span class="quotelev1">&gt;     original_count=1048576, datatype=0x10015f50, op=0x10016360,  
</span><br>
<span class="quotelev1">&gt; root=0, comm=0x102394d8,
</span><br>
<span class="quotelev1">&gt;     module=0x10239aa8, tree=0x10239ff0, count_by_segment=16384,  
</span><br>
<span class="quotelev1">&gt; max_outstanding_reqs=0)
</span><br>
<span class="quotelev1">&gt;     at coll_tuned_reduce.c:168
</span><br>
<span class="quotelev1">&gt; #32 0x0ea98958 in ompi_coll_tuned_reduce_intra_pipeline  
</span><br>
<span class="quotelev1">&gt; (sendbuf=0xeeaf0008, recvbuf=0xecca0008,
</span><br>
<span class="quotelev1">&gt;     count=1048576, datatype=0x10015f50, op=0x10016360, root=0,  
</span><br>
<span class="quotelev1">&gt; comm=0x102394d8, module=0x10239aa8,
</span><br>
<span class="quotelev1">&gt;     segsize=65536, max_outstanding_reqs=0) at coll_tuned_reduce.c:400
</span><br>
<span class="quotelev1">&gt; #33 0x0ea85f2c in ompi_coll_tuned_reduce_intra_dec_fixed  
</span><br>
<span class="quotelev1">&gt; (sendbuf=0xeeaf0008, recvbuf=0xecca0008,
</span><br>
<span class="quotelev1">&gt;     count=1048576, datatype=0x10015f50, op=0x10016360, root=0,  
</span><br>
<span class="quotelev1">&gt; comm=0x102394d8, module=0x10239aa8)
</span><br>
<span class="quotelev1">&gt;     at coll_tuned_decision_fixed.c:414
</span><br>
<span class="quotelev1">&gt; #34 0x0ead4c4c in mca_coll_sync_reduce (sbuf=0xeeaf0008,  
</span><br>
<span class="quotelev1">&gt; rbuf=0xecca0008, count=1048576,
</span><br>
<span class="quotelev1">&gt;     dtype=0x10015f50, op=0x10016360, root=0, comm=0x102394d8,  
</span><br>
<span class="quotelev1">&gt; module=0x102399b0) at coll_sync_reduce.c:43
</span><br>
<span class="quotelev1">&gt; #35 0x0fefc7dc in PMPI_Reduce (sendbuf=0xeeaf0008,  
</span><br>
<span class="quotelev1">&gt; recvbuf=0xecca0008, count=1048576,
</span><br>
<span class="quotelev1">&gt;     datatype=0x10015f50, op=0x10016360, root=0, comm=0x102394d8) at  
</span><br>
<span class="quotelev1">&gt; preduce.c:129
</span><br>
<span class="quotelev1">&gt; #36 0x10004564 in reduce (thr_num=0x10233418) at mt_coll.c:804
</span><br>
<span class="quotelev1">&gt; #37 0xf7e869b4 in start_thread () from /lib/power6x/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #38 0xf7de13a4 in clone () from /lib/power6x/libc.so.6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ie. a thread is deadlocking itself. However this problem only  
</span><br>
<span class="quotelev1">&gt; appears to happen
</span><br>
<span class="quotelev1">&gt; when there are multiple threads running (maybe because of some  
</span><br>
<span class="quotelev1">&gt; memory pressure).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From looking at the code it appears to be unsafe to ever hold the  
</span><br>
<span class="quotelev1">&gt; mpool-&gt;rcache-&gt;lock
</span><br>
<span class="quotelev1">&gt; when doing an operation that may cause a memory allocation as that  
</span><br>
<span class="quotelev1">&gt; may cause malloc to
</span><br>
<span class="quotelev1">&gt; call back into mpool rdma module and attempt to acquire the rcache  
</span><br>
<span class="quotelev1">&gt; lock again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However the code seems to do that quite a bit (the above backtrace  
</span><br>
<span class="quotelev1">&gt; is just one example of
</span><br>
<span class="quotelev1">&gt; deadlocks I have seen).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm hoping someone else can verify that this is indeed a problem or  
</span><br>
<span class="quotelev1">&gt; if I'm just doing
</span><br>
<span class="quotelev1">&gt; something wrong (say some config option I'm missing). It doesn't  
</span><br>
<span class="quotelev1">&gt; appear to be that easy to fix
</span><br>
<span class="quotelev1">&gt; (eg would need to add some preallocation for paths that could  
</span><br>
<span class="quotelev1">&gt; currently call malloc
</span><br>
<span class="quotelev1">&gt; and in other areas would need quite a bit of rearrangement to be  
</span><br>
<span class="quotelev1">&gt; able to drop the rcache lock before
</span><br>
<span class="quotelev1">&gt; doing something that could call malloc).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; cyeoh_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7072.php">Jeff Squyres: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>Previous message:</strong> <a href="7070.php">Jeff Squyres: "Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/7042.php">Christopher Yeoh: "[OMPI devel] mpool rdma deadlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7121.php">Christopher Yeoh: "Re: [OMPI devel] mpool rdma deadlock - malloc implementation issue"</a>
<li><strong>Reply:</strong> <a href="7121.php">Christopher Yeoh: "Re: [OMPI devel] mpool rdma deadlock - malloc implementation issue"</a>
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
