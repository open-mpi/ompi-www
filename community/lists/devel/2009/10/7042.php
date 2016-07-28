<?
$subject_val = "[OMPI devel] mpool rdma deadlock";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 08:19:13 2009" -->
<!-- isoreceived="20091028121913" -->
<!-- sent="Wed, 28 Oct 2009 22:48:28 +1030" -->
<!-- isosent="20091028121828" -->
<!-- name="Christopher Yeoh" -->
<!-- email="cyeoh_at_[hidden]" -->
<!-- subject="[OMPI devel] mpool rdma deadlock" -->
<!-- id="20091028224828.53bb4567_at_lilo" -->
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
<strong>Subject:</strong> [OMPI devel] mpool rdma deadlock<br>
<strong>From:</strong> Christopher Yeoh (<em>cyeoh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-28 08:18:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7043.php">Jeff Squyres: "[OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Previous message:</strong> <a href="7041.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] How can I tell (open-)mpi about the HW topology ofmy system?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7071.php">Jeff Squyres: "Re: [OMPI devel] mpool rdma deadlock"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7071.php">Jeff Squyres: "Re: [OMPI devel] mpool rdma deadlock"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've been investigating some OpenMPI deadlocks triggered by a test suite
<br>
written to test the thread safety of MPI libraries. I'm using OpenMPI 1.3.3.
<br>
<p>One of the deadlocks I'm seeing looks like this (the sleep for frame 1 is something I
<br>
inserted when a deadlock is detected so I can attach a debugger to all the nodes).
<br>
<p>#0  0xf7d9e680 in nanosleep () from /lib/power6x/libc.so.6
<br>
#1  0xf7d9e408 in sleep () from /lib/power6x/libc.so.6
<br>
#2  0x0ee22ae4 in opal_mutex_lock (m=0x10101d00) at ../../../../opal/threads/mutex_unix.h:114
<br>
#3  0x0ee247f8 in mca_mpool_rdma_release_memory (mpool=0x10101a80, base=0xf2af0000, size=65536)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at mpool_rdma_module.c:405
<br>
<p>Trying to take mpool-&gt;rcache-&gt;lock
<br>
<p>#4  0x0ff4fcac in mca_mpool_base_mem_cb (base=0xf2af0000, size=65536, cbdata=0x0, from_alloc=true)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at base/mpool_base_mem_cb.c:52
<br>
#5  0x0fccade0 in opal_mem_hooks_release_hook (buf=0xf2af0000, length=65536, from_alloc=true)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at memoryhooks/memory.c:132
<br>
#6  0x0fd176d8 in opal_mem_free_ptmalloc2_munmap (start=0xf2af0000, length=65536, from_alloc=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at opal_ptmalloc2_munmap.c:74
<br>
#7  0x0fd18268 in new_heap (size=196608, top_pad=131072) at arena.c:552
<br>
#8  0x0fd1b1cc in sYSMALLOc (nb=152, av=0xefb00010) at malloc.c:2944
<br>
#9  0x0fd1dc2c in opal_memory_ptmalloc2_int_malloc (av=0xefb00010, bytes=144) at malloc.c:4319
<br>
#10 0x0fd1bd80 in opal_memory_ptmalloc2_malloc (bytes=144) at malloc.c:3432
<br>
#11 0x0fd1a968 in opal_memory_ptmalloc2_malloc_hook (sz=144, caller=0xee83678) at hooks.c:667
<br>
#12 0xf7d73a94 in malloc () from /lib/power6x/libc.so.6
<br>
#13 0x0ee83678 in opal_obj_new (cls=0xee956b8) at ../../../../opal/class/opal_object.h:473
<br>
#14 0x0ee835bc in opal_obj_new_debug (type=0xee956b8, file=0xee84ef0 &quot;rcache_vma_tree.c&quot;, line=109)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../opal/class/opal_object.h:247
<br>
#15 0x0ee8380c in mca_rcache_vma_new (vma_rcache=0x10101ce8, start=3940155392, end=3940220927)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at rcache_vma_tree.c:109
<br>
#16 0x0ee82f78 in mca_rcache_vma_tree_insert (vma_rcache=0x10101ce8, reg=0xefbfdc80, limit=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at rcache_vma_tree.c:403
<br>
#17 0x0ee8205c in mca_rcache_vma_insert (rcache=0x10101ce8, reg=0xefbfdc80, limit=0) at rcache_vma.c:94
<br>
#18 0x0ee237e4 in mca_mpool_rdma_register (mpool=0x10101a80, addr=0xead90008, size=65536, flags=0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;reg=0xf1f2e760) at mpool_rdma_module.c:250
<br>
<p>already took mpool-&gt;rcache-&gt;lock earlier a bit before (~line 197)
<br>
<p>#19 0x0ec2a680 in mca_btl_openib_prepare_dst (btl=0x101061c8, endpoint=0x10153178, registration=0x0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;convertor=0xef909b88, order=255 '&#239;&#191;&#189;', reserve=0, size=0x1014f70c, flags=6) at btl_openib.c:921
<br>
#20 0x0ed07724 in mca_bml_base_prepare_dst (bml_btl=0x10154378, reg=0x0, conv=0xef909b88, order=255 '&#239;&#191;&#189;', 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;reserve=0, size=0x1014f70c, flags=6, des=0xf1f2e7e8) at ../../../../ompi/mca/bml/bml.h:355
<br>
#21 0x0ed0747c in mca_pml_ob1_recv_request_get_frag (frag=0x1014f680) at pml_ob1_recvreq.c:359
<br>
#22 0x0ed07e38 in mca_pml_ob1_recv_request_progress_rget (recvreq=0xef909b00, btl=0x101061c8, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;segments=0x1023da10, num_segments=1) at pml_ob1_recvreq.c:527
<br>
#23 0x0ed039b8 in mca_pml_ob1_recv_frag_match (btl=0x101061c8, hdr=0xf514b230, segments=0x1023da10, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;num_segments=1, type=67) at pml_ob1_recvfrag.c:644
<br>
#24 0x0ed020b4 in mca_pml_ob1_recv_frag_callback_rget (btl=0x101061c8, tag=67 'C', des=0x1023d9b0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cbdata=0x0) at pml_ob1_recvfrag.c:275
<br>
#25 0x0ec3703c in btl_openib_handle_incoming (openib_btl=0x101061c8, ep=0x10153178, frag=0x1023d9b0, 
<br>
---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
<br>
&nbsp;&nbsp;&nbsp;&nbsp;byte_len=76) at btl_openib_component.c:2616
<br>
#26 0x0ec3a66c in progress_one_device (device=0x10100e60) at btl_openib_component.c:3146
<br>
#27 0x0ec3a870 in btl_openib_component_progress () at btl_openib_component.c:3186
<br>
#28 0x0fccbf10 in opal_progress () at runtime/opal_progress.c:207
<br>
#29 0x0fe9d15c in opal_condition_wait (c=0xffa98e0, m=0xffa9930) at ../opal/threads/condition.h:85
<br>
#30 0x0fe9d7cc in ompi_request_default_wait_all (count=1, requests=0xf1f2eb00, statuses=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at request/req_wait.c:270
<br>
#31 0x0ea97af8 in ompi_coll_tuned_reduce_generic (sendbuf=0xeeaf0008, recvbuf=0xecca0008, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;original_count=1048576, datatype=0x10015f50, op=0x10016360, root=0, comm=0x102394d8, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;module=0x10239aa8, tree=0x10239ff0, count_by_segment=16384, max_outstanding_reqs=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at coll_tuned_reduce.c:168
<br>
#32 0x0ea98958 in ompi_coll_tuned_reduce_intra_pipeline (sendbuf=0xeeaf0008, recvbuf=0xecca0008, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;count=1048576, datatype=0x10015f50, op=0x10016360, root=0, comm=0x102394d8, module=0x10239aa8, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;segsize=65536, max_outstanding_reqs=0) at coll_tuned_reduce.c:400
<br>
#33 0x0ea85f2c in ompi_coll_tuned_reduce_intra_dec_fixed (sendbuf=0xeeaf0008, recvbuf=0xecca0008, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;count=1048576, datatype=0x10015f50, op=0x10016360, root=0, comm=0x102394d8, module=0x10239aa8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at coll_tuned_decision_fixed.c:414
<br>
#34 0x0ead4c4c in mca_coll_sync_reduce (sbuf=0xeeaf0008, rbuf=0xecca0008, count=1048576, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;dtype=0x10015f50, op=0x10016360, root=0, comm=0x102394d8, module=0x102399b0) at coll_sync_reduce.c:43
<br>
#35 0x0fefc7dc in PMPI_Reduce (sendbuf=0xeeaf0008, recvbuf=0xecca0008, count=1048576, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;datatype=0x10015f50, op=0x10016360, root=0, comm=0x102394d8) at preduce.c:129
<br>
#36 0x10004564 in reduce (thr_num=0x10233418) at mt_coll.c:804
<br>
#37 0xf7e869b4 in start_thread () from /lib/power6x/libpthread.so.0
<br>
#38 0xf7de13a4 in clone () from /lib/power6x/libc.so.6
<br>
<p>ie. a thread is deadlocking itself. However this problem only appears to happen
<br>
when there are multiple threads running (maybe because of some memory pressure).
<br>
<p><span class="quotelev1">&gt;From looking at the code it appears to be unsafe to ever hold the mpool-&gt;rcache-&gt;lock
</span><br>
when doing an operation that may cause a memory allocation as that may cause malloc to 
<br>
call back into mpool rdma module and attempt to acquire the rcache lock again.
<br>
<p>However the code seems to do that quite a bit (the above backtrace is just one example of
<br>
deadlocks I have seen). 
<br>
<p>I'm hoping someone else can verify that this is indeed a problem or if I'm just doing
<br>
something wrong (say some config option I'm missing). It doesn't appear to be that easy to fix
<br>
(eg would need to add some preallocation for paths that could currently call malloc
<br>
and in other areas would need quite a bit of rearrangement to be able to drop the rcache lock before
<br>
doing something that could call malloc).
<br>
<p>Regards,
<br>
<p>Chris
<br>
<pre>
-- 
cyeoh_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7043.php">Jeff Squyres: "[OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Previous message:</strong> <a href="7041.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] How can I tell (open-)mpi about the HW topology ofmy system?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7071.php">Jeff Squyres: "Re: [OMPI devel] mpool rdma deadlock"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7071.php">Jeff Squyres: "Re: [OMPI devel] mpool rdma deadlock"</a>
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
