<?
$subject_val = "Re: [OMPI devel] mpool rdma deadlock - malloc implementation issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 16 23:59:54 2009" -->
<!-- isoreceived="20091117045954" -->
<!-- sent="Tue, 17 Nov 2009 15:24:09 +1030" -->
<!-- isosent="20091117045409" -->
<!-- name="Christopher Yeoh" -->
<!-- email="cyeoh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpool rdma deadlock - malloc implementation issue" -->
<!-- id="20091117152409.4ae18a72_at_lilo" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1E448ACC-C0C7-4645-8586-85B60C36130C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpool rdma deadlock - malloc implementation issue<br>
<strong>From:</strong> Christopher Yeoh (<em>cyeoh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-16 23:54:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7122.php">Sylvain Jeaugey: "[OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7120.php">Vasily Philipov: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusters support."</a>
<li><strong>In reply to:</strong> <a href="7071.php">Jeff Squyres: "Re: [OMPI devel] mpool rdma deadlock"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Just following up on this. I had a closer look at this part
<br>
which is common to most of the deadlocks
<br>
<p>#6  0x0fd176d8 in opal_mem_free_ptmalloc2_munmap
<br>
&nbsp;&nbsp;&nbsp;(start=0xf2af0000, length=65536, from_alloc=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at opal_ptmalloc2_munmap.c:74
<br>
#7  0x0fd18268 in new_heap (size=196608, top_pad=131072) at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;arena.c: 552
<br>
#8  0x0fd1b1cc in sYSMALLOc (nb=152, av=0xefb00010) at malloc.c:2944
<br>
<p>I see from previous discussion on the mailing list that the thread
<br>
safety of areas of the malloc library have come up before. In this case
<br>
a memory allocation for a thread requires a the creation of a new arena
<br>
(I think the arena code is only enabled for threads which explains why
<br>
this problem doesn't come up otherwise).
<br>
<p>In the new_heap (arena.c) call there is:
<br>
<p><p>&nbsp;&nbsp;/* A memory region aligned to a multiple of HEAP_MAX_SIZE is needed.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No swap space needs to be reserved for the following large
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mapping (on Linux, this is the case for all non-writable mappings
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;anyway). */
<br>
&nbsp;&nbsp;p1 = (char *)MMAP(0, HEAP_MAX_SIZE&lt;&lt;1, PROT_NONE,
<br>
&nbsp;&nbsp;MAP_PRIVATE|MAP_NORESERVE); if(p1 != MAP_FAILED) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;p2 = (char *)(((unsigned long)p1 + (HEAP_MAX_SIZE-1)) &amp;
<br>
&nbsp;&nbsp;~(HEAP_MAX_SIZE-1)); ul = p2 - p1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;munmap(p1, ul);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;munmap(p2 + HEAP_MAX_SIZE, HEAP_MAX_SIZE - ul);
<br>
&nbsp;&nbsp;} else {
<br>
<p>Eg. Allocating an area for the heap which is larger than required to
<br>
ensure appropriate alignment and then munmap'ing the part which isn't
<br>
needed.
<br>
<p>The problem is that munmap is intercepted which calls back into the
<br>
mpool code which then deadlocks. Since none of this memory has been
<br>
registered I believe it would in these specific munmap cases to call the
<br>
real munmap directly rather than go through the intercept which causes
<br>
the deadlock. 
<br>
<p>I've done some testing (on trunk) and so far it seems ok - can anyone
<br>
see any problems with this change?
<br>
<p>Regards,
<br>
<p>Chris
<br>
<p><p>On Mon, 2 Nov 2009 21:20:17 -0500
<br>
Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ewww.... yikes.  This could definitely be an issue if we weren't  
</span><br>
<span class="quotelev1">&gt; (multi-thread) careful when writing these portions of the code.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 28, 2009, at 8:18 AM, Christopher Yeoh wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've been investigating some OpenMPI deadlocks triggered by a test  
</span><br>
<span class="quotelev2">&gt; &gt; suite
</span><br>
<span class="quotelev2">&gt; &gt; written to test the thread safety of MPI libraries. I'm using  
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI 1.3.3.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; One of the deadlocks I'm seeing looks like this (the sleep for
</span><br>
<span class="quotelev2">&gt; &gt; frame 1 is something I
</span><br>
<span class="quotelev2">&gt; &gt; inserted when a deadlock is detected so I can attach a debugger to  
</span><br>
<span class="quotelev2">&gt; &gt; all the nodes).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #0  0xf7d9e680 in nanosleep () from /lib/power6x/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #1  0xf7d9e408 in sleep () from /lib/power6x/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x0ee22ae4 in opal_mutex_lock (m=0x10101d00)
</span><br>
<span class="quotelev2">&gt; &gt; at ../../../../opal/ threads/mutex_unix.h:114
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x0ee247f8 in mca_mpool_rdma_release_memory (mpool=0x10101a80,  
</span><br>
<span class="quotelev2">&gt; &gt; base=0xf2af0000, size=65536)
</span><br>
<span class="quotelev2">&gt; &gt;     at mpool_rdma_module.c:405
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Trying to take mpool-&gt;rcache-&gt;lock
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x0ff4fcac in mca_mpool_base_mem_cb (base=0xf2af0000,  
</span><br>
<span class="quotelev2">&gt; &gt; size=65536, cbdata=0x0, from_alloc=true)
</span><br>
<span class="quotelev2">&gt; &gt;     at base/mpool_base_mem_cb.c:52
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x0fccade0 in opal_mem_hooks_release_hook (buf=0xf2af0000,  
</span><br>
<span class="quotelev2">&gt; &gt; length=65536, from_alloc=true)
</span><br>
<span class="quotelev2">&gt; &gt;     at memoryhooks/memory.c:132
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x0fd176d8 in opal_mem_free_ptmalloc2_munmap
</span><br>
<span class="quotelev2">&gt; &gt; (start=0xf2af0000, length=65536, from_alloc=1)
</span><br>
<span class="quotelev2">&gt; &gt;     at opal_ptmalloc2_munmap.c:74
</span><br>
<span class="quotelev2">&gt; &gt; #7  0x0fd18268 in new_heap (size=196608, top_pad=131072) at
</span><br>
<span class="quotelev2">&gt; &gt; arena.c: 552
</span><br>
<span class="quotelev2">&gt; &gt; #8  0x0fd1b1cc in sYSMALLOc (nb=152, av=0xefb00010) at malloc.c:2944
</span><br>
<span class="quotelev2">&gt; &gt; #9  0x0fd1dc2c in opal_memory_ptmalloc2_int_malloc (av=0xefb00010,  
</span><br>
<span class="quotelev2">&gt; &gt; bytes=144) at malloc.c:4319
</span><br>
<span class="quotelev2">&gt; &gt; #10 0x0fd1bd80 in opal_memory_ptmalloc2_malloc (bytes=144) at  
</span><br>
<span class="quotelev2">&gt; &gt; malloc.c:3432
</span><br>
<span class="quotelev2">&gt; &gt; #11 0x0fd1a968 in opal_memory_ptmalloc2_malloc_hook (sz=144,  
</span><br>
<span class="quotelev2">&gt; &gt; caller=0xee83678) at hooks.c:667
</span><br>
<span class="quotelev2">&gt; &gt; #12 0xf7d73a94 in malloc () from /lib/power6x/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #13 0x0ee83678 in opal_obj_new (cls=0xee956b8) at ../../../../opal/ 
</span><br>
<span class="quotelev2">&gt; &gt; class/opal_object.h:473
</span><br>
<span class="quotelev2">&gt; &gt; #14 0x0ee835bc in opal_obj_new_debug (type=0xee956b8,
</span><br>
<span class="quotelev2">&gt; &gt; file=0xee84ef0 &quot;rcache_vma_tree.c&quot;, line=109)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../opal/class/opal_object.h:247
</span><br>
<span class="quotelev2">&gt; &gt; #15 0x0ee8380c in mca_rcache_vma_new (vma_rcache=0x10101ce8,  
</span><br>
<span class="quotelev2">&gt; &gt; start=3940155392, end=3940220927)
</span><br>
<span class="quotelev2">&gt; &gt;     at rcache_vma_tree.c:109
</span><br>
<span class="quotelev2">&gt; &gt; #16 0x0ee82f78 in mca_rcache_vma_tree_insert
</span><br>
<span class="quotelev2">&gt; &gt; (vma_rcache=0x10101ce8, reg=0xefbfdc80, limit=0)
</span><br>
<span class="quotelev2">&gt; &gt;     at rcache_vma_tree.c:403
</span><br>
<span class="quotelev2">&gt; &gt; #17 0x0ee8205c in mca_rcache_vma_insert (rcache=0x10101ce8,  
</span><br>
<span class="quotelev2">&gt; &gt; reg=0xefbfdc80, limit=0) at rcache_vma.c:94
</span><br>
<span class="quotelev2">&gt; &gt; #18 0x0ee237e4 in mca_mpool_rdma_register (mpool=0x10101a80,  
</span><br>
<span class="quotelev2">&gt; &gt; addr=0xead90008, size=65536, flags=0,
</span><br>
<span class="quotelev2">&gt; &gt;     reg=0xf1f2e760) at mpool_rdma_module.c:250
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; already took mpool-&gt;rcache-&gt;lock earlier a bit before (~line 197)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #19 0x0ec2a680 in mca_btl_openib_prepare_dst (btl=0x101061c8,  
</span><br>
<span class="quotelev2">&gt; &gt; endpoint=0x10153178, registration=0x0,
</span><br>
<span class="quotelev2">&gt; &gt;     convertor=0xef909b88, order=255 '&#239;&#191;&#189;', reserve=0,  
</span><br>
<span class="quotelev2">&gt; &gt; size=0x1014f70c, flags=6) at btl_openib.c:921
</span><br>
<span class="quotelev2">&gt; &gt; #20 0x0ed07724 in mca_bml_base_prepare_dst (bml_btl=0x10154378,  
</span><br>
<span class="quotelev2">&gt; &gt; reg=0x0, conv=0xef909b88, order=255 '&#239;&#191;&#189;',
</span><br>
<span class="quotelev2">&gt; &gt;     reserve=0, size=0x1014f70c, flags=6, des=0xf1f2e7e8)  
</span><br>
<span class="quotelev2">&gt; &gt; at ../../../../ompi/mca/bml/bml.h:355
</span><br>
<span class="quotelev2">&gt; &gt; #21 0x0ed0747c in mca_pml_ob1_recv_request_get_frag  
</span><br>
<span class="quotelev2">&gt; &gt; (frag=0x1014f680) at pml_ob1_recvreq.c:359
</span><br>
<span class="quotelev2">&gt; &gt; #22 0x0ed07e38 in mca_pml_ob1_recv_request_progress_rget  
</span><br>
<span class="quotelev2">&gt; &gt; (recvreq=0xef909b00, btl=0x101061c8,
</span><br>
<span class="quotelev2">&gt; &gt;     segments=0x1023da10, num_segments=1) at pml_ob1_recvreq.c:527
</span><br>
<span class="quotelev2">&gt; &gt; #23 0x0ed039b8 in mca_pml_ob1_recv_frag_match (btl=0x101061c8,  
</span><br>
<span class="quotelev2">&gt; &gt; hdr=0xf514b230, segments=0x1023da10,
</span><br>
<span class="quotelev2">&gt; &gt;     num_segments=1, type=67) at pml_ob1_recvfrag.c:644
</span><br>
<span class="quotelev2">&gt; &gt; #24 0x0ed020b4 in mca_pml_ob1_recv_frag_callback_rget  
</span><br>
<span class="quotelev2">&gt; &gt; (btl=0x101061c8, tag=67 'C', des=0x1023d9b0,
</span><br>
<span class="quotelev2">&gt; &gt;     cbdata=0x0) at pml_ob1_recvfrag.c:275
</span><br>
<span class="quotelev2">&gt; &gt; #25 0x0ec3703c in btl_openib_handle_incoming
</span><br>
<span class="quotelev2">&gt; &gt; (openib_btl=0x101061c8, ep=0x10153178, frag=0x1023d9b0,
</span><br>
<span class="quotelev2">&gt; &gt; ---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
</span><br>
<span class="quotelev2">&gt; &gt;     byte_len=76) at btl_openib_component.c:2616
</span><br>
<span class="quotelev2">&gt; &gt; #26 0x0ec3a66c in progress_one_device (device=0x10100e60) at  
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_component.c:3146
</span><br>
<span class="quotelev2">&gt; &gt; #27 0x0ec3a870 in btl_openib_component_progress () at  
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_component.c:3186
</span><br>
<span class="quotelev2">&gt; &gt; #28 0x0fccbf10 in opal_progress () at runtime/opal_progress.c:207
</span><br>
<span class="quotelev2">&gt; &gt; #29 0x0fe9d15c in opal_condition_wait (c=0xffa98e0, m=0xffa9930)  
</span><br>
<span class="quotelev2">&gt; &gt; at ../opal/threads/condition.h:85
</span><br>
<span class="quotelev2">&gt; &gt; #30 0x0fe9d7cc in ompi_request_default_wait_all (count=1,  
</span><br>
<span class="quotelev2">&gt; &gt; requests=0xf1f2eb00, statuses=0x0)
</span><br>
<span class="quotelev2">&gt; &gt;     at request/req_wait.c:270
</span><br>
<span class="quotelev2">&gt; &gt; #31 0x0ea97af8 in ompi_coll_tuned_reduce_generic  
</span><br>
<span class="quotelev2">&gt; &gt; (sendbuf=0xeeaf0008, recvbuf=0xecca0008,
</span><br>
<span class="quotelev2">&gt; &gt;     original_count=1048576, datatype=0x10015f50, op=0x10016360,  
</span><br>
<span class="quotelev2">&gt; &gt; root=0, comm=0x102394d8,
</span><br>
<span class="quotelev2">&gt; &gt;     module=0x10239aa8, tree=0x10239ff0, count_by_segment=16384,  
</span><br>
<span class="quotelev2">&gt; &gt; max_outstanding_reqs=0)
</span><br>
<span class="quotelev2">&gt; &gt;     at coll_tuned_reduce.c:168
</span><br>
<span class="quotelev2">&gt; &gt; #32 0x0ea98958 in ompi_coll_tuned_reduce_intra_pipeline  
</span><br>
<span class="quotelev2">&gt; &gt; (sendbuf=0xeeaf0008, recvbuf=0xecca0008,
</span><br>
<span class="quotelev2">&gt; &gt;     count=1048576, datatype=0x10015f50, op=0x10016360, root=0,  
</span><br>
<span class="quotelev2">&gt; &gt; comm=0x102394d8, module=0x10239aa8,
</span><br>
<span class="quotelev2">&gt; &gt;     segsize=65536, max_outstanding_reqs=0) at
</span><br>
<span class="quotelev2">&gt; &gt; coll_tuned_reduce.c:400 #33 0x0ea85f2c in
</span><br>
<span class="quotelev2">&gt; &gt; ompi_coll_tuned_reduce_intra_dec_fixed (sendbuf=0xeeaf0008,
</span><br>
<span class="quotelev2">&gt; &gt; recvbuf=0xecca0008, count=1048576, datatype=0x10015f50,
</span><br>
<span class="quotelev2">&gt; &gt; op=0x10016360, root=0, comm=0x102394d8, module=0x10239aa8)
</span><br>
<span class="quotelev2">&gt; &gt;     at coll_tuned_decision_fixed.c:414
</span><br>
<span class="quotelev2">&gt; &gt; #34 0x0ead4c4c in mca_coll_sync_reduce (sbuf=0xeeaf0008,  
</span><br>
<span class="quotelev2">&gt; &gt; rbuf=0xecca0008, count=1048576,
</span><br>
<span class="quotelev2">&gt; &gt;     dtype=0x10015f50, op=0x10016360, root=0, comm=0x102394d8,  
</span><br>
<span class="quotelev2">&gt; &gt; module=0x102399b0) at coll_sync_reduce.c:43
</span><br>
<span class="quotelev2">&gt; &gt; #35 0x0fefc7dc in PMPI_Reduce (sendbuf=0xeeaf0008,  
</span><br>
<span class="quotelev2">&gt; &gt; recvbuf=0xecca0008, count=1048576,
</span><br>
<span class="quotelev2">&gt; &gt;     datatype=0x10015f50, op=0x10016360, root=0, comm=0x102394d8)
</span><br>
<span class="quotelev2">&gt; &gt; at preduce.c:129
</span><br>
<span class="quotelev2">&gt; &gt; #36 0x10004564 in reduce (thr_num=0x10233418) at mt_coll.c:804
</span><br>
<span class="quotelev2">&gt; &gt; #37 0xf7e869b4 in start_thread () from /lib/power6x/libpthread.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #38 0xf7de13a4 in clone () from /lib/power6x/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ie. a thread is deadlocking itself. However this problem only  
</span><br>
<span class="quotelev2">&gt; &gt; appears to happen
</span><br>
<span class="quotelev2">&gt; &gt; when there are multiple threads running (maybe because of some  
</span><br>
<span class="quotelev2">&gt; &gt; memory pressure).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; From looking at the code it appears to be unsafe to ever hold the  
</span><br>
<span class="quotelev2">&gt; &gt; mpool-&gt;rcache-&gt;lock
</span><br>
<span class="quotelev2">&gt; &gt; when doing an operation that may cause a memory allocation as that  
</span><br>
<span class="quotelev2">&gt; &gt; may cause malloc to
</span><br>
<span class="quotelev2">&gt; &gt; call back into mpool rdma module and attempt to acquire the rcache  
</span><br>
<span class="quotelev2">&gt; &gt; lock again.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However the code seems to do that quite a bit (the above backtrace  
</span><br>
<span class="quotelev2">&gt; &gt; is just one example of
</span><br>
<span class="quotelev2">&gt; &gt; deadlocks I have seen).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm hoping someone else can verify that this is indeed a problem
</span><br>
<span class="quotelev2">&gt; &gt; or if I'm just doing
</span><br>
<span class="quotelev2">&gt; &gt; something wrong (say some config option I'm missing). It doesn't  
</span><br>
<span class="quotelev2">&gt; &gt; appear to be that easy to fix
</span><br>
<span class="quotelev2">&gt; &gt; (eg would need to add some preallocation for paths that could  
</span><br>
<span class="quotelev2">&gt; &gt; currently call malloc
</span><br>
<span class="quotelev2">&gt; &gt; and in other areas would need quite a bit of rearrangement to be  
</span><br>
<span class="quotelev2">&gt; &gt; able to drop the rcache lock before
</span><br>
<span class="quotelev2">&gt; &gt; doing something that could call malloc).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Chris
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; cyeoh_at_[hidden]
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><pre>
-- 
cyeoh_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7122.php">Sylvain Jeaugey: "[OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7120.php">Vasily Philipov: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusters support."</a>
<li><strong>In reply to:</strong> <a href="7071.php">Jeff Squyres: "Re: [OMPI devel] mpool rdma deadlock"</a>
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
