<?
$subject_val = "Re: [OMPI users] One-sided bugs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 11 15:23:53 2012" -->
<!-- isoreceived="20120911192353" -->
<!-- sent="Tue, 11 Sep 2012 15:23:48 -0400" -->
<!-- isosent="20120911192348" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] One-sided bugs" -->
<!-- id="CAM9tzSkBiokU1mvNS2LVScogVhSsU=A18SjffxU=5ue=C0NSfg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAM9tzSnR6Ag6LEvcfZ6F+QpWU31Ex-r29jtk2s6aeDaSnbWA5g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] One-sided bugs<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-11 15:23:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20192.php">John R. Cary: "[OMPI users] Ensuring use of real cores"</a>
<li><strong>Previous message:</strong> <a href="20190.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/18045.php">Jed Brown: "Re: [OMPI users] One-sided bugs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/21052.php">Jed Brown: "Re: [OMPI users] One-sided bugs"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/21052.php">Jed Brown: "Re: [OMPI users] One-sided bugs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*Bump*
<br>
<p>There doesn't seem to have been any progress on this. Can you at least have
<br>
an error message saying that Open MPI one-sided does not work with
<br>
datatypes instead of silently causing wanton corruption and deadlock?
<br>
<p>On Thu, Dec 22, 2011 at 4:17 PM, Jed Brown &lt;jed_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; [Forgot the attachment.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Dec 22, 2011 at 15:16, Jed Brown &lt;jed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wrote a new communication layer that we are evaluating for use in mesh
</span><br>
<span class="quotelev2">&gt;&gt; management and PDE solvers, but it is based on MPI-2 one-sided operations
</span><br>
<span class="quotelev2">&gt;&gt; (and will eventually benefit from some of the MPI-3 one-sided proposals,
</span><br>
<span class="quotelev2">&gt;&gt; especially MPI_Fetch_and_op() and dynamic windows). All the basic
</span><br>
<span class="quotelev2">&gt;&gt; functionality works well with MPICH2, but I have run into some Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; bugs regarding one-sided operations with composite data types. This email
</span><br>
<span class="quotelev2">&gt;&gt; provides a reduced test case for two such bugs. I see that there are also
</span><br>
<span class="quotelev2">&gt;&gt; some existing serious-looking bug reports regarding one-sided operations,
</span><br>
<span class="quotelev2">&gt;&gt; but they are getting pretty old now and haven't seen action in a while.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2656">https://svn.open-mpi.org/trac/ompi/ticket/2656</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1905">https://svn.open-mpi.org/trac/ompi/ticket/1905</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a plan for resolving these in the near future?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is anyone using Open MPI for serious work with one-sided operations?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bugs I am reporting:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *1.* If an MPI_Win is used with an MPI_Datatype, even if the MPI_Win
</span><br>
<span class="quotelev2">&gt;&gt; operation has completed, I get an invalid free when MPI_Type_free() is
</span><br>
<span class="quotelev2">&gt;&gt; called before MPI_Win_free(). Since MPI_Type_free() is only supposed to
</span><br>
<span class="quotelev2">&gt;&gt; mark the datatype for deletion, the implementation should properly manage
</span><br>
<span class="quotelev2">&gt;&gt; reference counting. If you run the attached code with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec -n 2 ./a.out 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (which only does part of the comm described for the second bug, below),
</span><br>
<span class="quotelev2">&gt;&gt; you can see the invalid free on rank 1 with stack still in MPI_Win_fence()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007ffff7288905 in raise () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007ffff7289d7b in abort () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007ffff72c147e in __libc_message () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007ffff72c7396 in malloc_printerr () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007ffff72cb26c in free () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007ffff7a5aaa8 in ompi_datatype_release_args (pData=0x845010) at
</span><br>
<span class="quotelev2">&gt;&gt; ompi_datatype_args.c:414
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00007ffff7a5b0ea in __ompi_datatype_release (datatype=0x845010) at
</span><br>
<span class="quotelev2">&gt;&gt; ompi_datatype_create.c:47
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00007ffff218e772 in opal_obj_run_destructors (object=0x845010) at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../opal/class/opal_object.h:448
</span><br>
<span class="quotelev2">&gt;&gt; #8  ompi_osc_rdma_replyreq_free (replyreq=0x680a80) at
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_replyreq.h:136
</span><br>
<span class="quotelev2">&gt;&gt; #9  ompi_osc_rdma_replyreq_send_cb (btl=0x7ffff3680ce0,
</span><br>
<span class="quotelev2">&gt;&gt; endpoint=&lt;optimized out&gt;, descriptor=0x837b00, status=&lt;optimized out&gt;) at
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_data_move.c:691
</span><br>
<span class="quotelev2">&gt;&gt; #10 0x00007ffff347f38f in mca_btl_sm_component_progress () at
</span><br>
<span class="quotelev2">&gt;&gt; btl_sm_component.c:645
</span><br>
<span class="quotelev2">&gt;&gt; #11 0x00007ffff7b1f80a in opal_progress () at runtime/opal_progress.c:207
</span><br>
<span class="quotelev2">&gt;&gt; #12 0x00007ffff21977c5 in opal_condition_wait (m=&lt;optimized out&gt;,
</span><br>
<span class="quotelev2">&gt;&gt; c=0x842ee0) at ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev2">&gt;&gt; #13 ompi_osc_rdma_module_fence (assert=0, win=0x842270) at
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_sync.c:207
</span><br>
<span class="quotelev2">&gt;&gt; #14 0x00007ffff7a89db5 in PMPI_Win_fence (assert=0, win=0x842270) at
</span><br>
<span class="quotelev2">&gt;&gt; pwin_fence.c:60
</span><br>
<span class="quotelev2">&gt;&gt; #15 0x00000000004010d8 in main (argc=2, argv=0x7fffffffd508) at win.c:60
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; meanwhile, rank 0 has already freed the datatype and is waiting in
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Win_free().
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007ffff7312107 in sched_yield () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007ffff7b1f82b in opal_progress () at runtime/opal_progress.c:220
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007ffff7a53fe4 in opal_condition_wait (m=&lt;optimized out&gt;,
</span><br>
<span class="quotelev2">&gt;&gt; c=&lt;optimized out&gt;) at ../opal/threads/condition.h:99
</span><br>
<span class="quotelev2">&gt;&gt; #3  ompi_request_default_wait_all (count=2, requests=0x7fffffffd210,
</span><br>
<span class="quotelev2">&gt;&gt; statuses=0x7fffffffd1e0) at request/req_wait.c:263
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007ffff25b8d71 in ompi_coll_tuned_sendrecv_actual (sendbuf=0x0,
</span><br>
<span class="quotelev2">&gt;&gt; scount=0, sdatatype=0x7ffff7dba840, dest=1, stag=-16, recvbuf=&lt;optimized
</span><br>
<span class="quotelev2">&gt;&gt; out&gt;, rcount=0, rdatatype=0x7ffff7dba840, source=1, rtag=-16,
</span><br>
<span class="quotelev2">&gt;&gt; comm=0x8431a0, status=0x0) at coll_tuned_util.c:54
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007ffff25c2de2 in ompi_coll_tuned_barrier_intra_two_procs
</span><br>
<span class="quotelev2">&gt;&gt; (comm=&lt;optimized out&gt;, module=&lt;optimized out&gt;) at coll_tuned_barrier.c:256
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00007ffff25b92ab in ompi_coll_tuned_barrier_intra_dec_fixed
</span><br>
<span class="quotelev2">&gt;&gt; (comm=0x8431a0, module=0x844980) at coll_tuned_decision_fixed.c:190
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00007ffff2186248 in ompi_osc_rdma_module_free (win=0x842170) at
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma.c:46
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00007ffff7a58a44 in ompi_win_free (win=0x842170) at win/win.c:150
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x00007ffff7a8a0dd in PMPI_Win_free (win=0x7fffffffd408) at
</span><br>
<span class="quotelev2">&gt;&gt; pwin_free.c:56
</span><br>
<span class="quotelev2">&gt;&gt; #10 0x0000000000401195 in main (argc=2, argv=0x7fffffffd508) at win.c:69
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *2.* This appears to be more fundamental and perhaps much harder to fix.
</span><br>
<span class="quotelev2">&gt;&gt; The attached code sets up the following graph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rank 0:
</span><br>
<span class="quotelev2">&gt;&gt; 0 -&gt; (1,0)
</span><br>
<span class="quotelev2">&gt;&gt; 1 -&gt; nothing
</span><br>
<span class="quotelev2">&gt;&gt; 2 -&gt; (1,1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rank 1:
</span><br>
<span class="quotelev2">&gt;&gt; 0 -&gt; (0,0)
</span><br>
<span class="quotelev2">&gt;&gt; 1 -&gt; (0,2)
</span><br>
<span class="quotelev2">&gt;&gt; 2 -&gt; (0,1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We pull over this graph using two calls to MPI_Get(), each with composite
</span><br>
<span class="quotelev2">&gt;&gt; data types defining what to pull into the first two slots, and what to put
</span><br>
<span class="quotelev2">&gt;&gt; into the third slot. It is Valgrind-clean with MPICH2, and produces the
</span><br>
<span class="quotelev2">&gt;&gt; following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec.hydra -n 2 ./a.out 2
</span><br>
<span class="quotelev2">&gt;&gt; [0] provided [100,101,102]  got [200, -2,201]
</span><br>
<span class="quotelev2">&gt;&gt; [1] provided [200,201,202]  got [100,102,101]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With Open MPI, I see
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; a.out: malloc.c:3096: sYSMALLOc: Assertion `(old_top == (((mbinptr)
</span><br>
<span class="quotelev2">&gt;&gt; (((char *) &amp;((av)-&gt;bins[((1) - 1) * 2])) - __builtin_offsetof (struct
</span><br>
<span class="quotelev2">&gt;&gt; malloc_chunk, fd)))) &amp;&amp; old_size == 0) || ((unsigned long) (old_size) &gt;=
</span><br>
<span class="quotelev2">&gt;&gt; (unsigned long)((((__builtin_offsetof (struct malloc_chunk,
</span><br>
<span class="quotelev2">&gt;&gt; fd_nextsize))+((2 * (sizeof(size_t))) - 1)) &amp; ~((2 * (sizeof(size_t))) -
</span><br>
<span class="quotelev2">&gt;&gt; 1))) &amp;&amp; ((old_top)-&gt;size &amp; 0x1) &amp;&amp; ((unsigned long)old_end &amp; pagemask) ==
</span><br>
<span class="quotelev2">&gt;&gt; 0)' failed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; on both ranks, with rank 0 at
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007ffff7288905 in raise () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007ffff7289d7b in abort () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007ffff72c675d in __malloc_assert () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007ffff72c96d3 in _int_malloc () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007ffff72cad5d in malloc () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007ffff7b46c46 in opal_free_list_grow (flist=0x7ffff239f150,
</span><br>
<span class="quotelev2">&gt;&gt; num_elements=1) at class/opal_free_list.c:93
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00007ffff2196152 in ompi_osc_rdma_replyreq_alloc
</span><br>
<span class="quotelev2">&gt;&gt; (replyreq=0x7fffffffd0f8, origin_rank=1, module=0x842d10) at
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_replyreq.h:82
</span><br>
<span class="quotelev2">&gt;&gt; #7  ompi_osc_rdma_replyreq_alloc_init (module=0x842d10, origin=1,
</span><br>
<span class="quotelev2">&gt;&gt; origin_request=..., target_displacement=0, target_count=1,
</span><br>
<span class="quotelev2">&gt;&gt; datatype=0x8455b0, replyreq=0x7fffffffd0f8) at osc_rdma_replyreq.c:40
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00007ffff218c051 in component_fragment_cb (btl=0x7ffff3680ce0,
</span><br>
<span class="quotelev2">&gt;&gt; tag=&lt;optimized out&gt;, descriptor=&lt;optimized out&gt;, cbdata=&lt;optimized out&gt;) at
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_component.c:633
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x00007ffff347f25f in mca_btl_sm_component_progress () at
</span><br>
<span class="quotelev2">&gt;&gt; btl_sm_component.c:623
</span><br>
<span class="quotelev2">&gt;&gt; #10 0x00007ffff7b1f80a in opal_progress () at runtime/opal_progress.c:207
</span><br>
<span class="quotelev2">&gt;&gt; #11 0x00007ffff21977c5 in opal_condition_wait (m=&lt;optimized out&gt;,
</span><br>
<span class="quotelev2">&gt;&gt; c=0x842de0) at ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev2">&gt;&gt; #12 ompi_osc_rdma_module_fence (assert=0, win=0x842170) at
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_sync.c:207
</span><br>
<span class="quotelev2">&gt;&gt; #13 0x00007ffff7a89db5 in PMPI_Win_fence (assert=0, win=0x842170) at
</span><br>
<span class="quotelev2">&gt;&gt; pwin_fence.c:60
</span><br>
<span class="quotelev2">&gt;&gt; #14 0x00000000004010d8 in main (argc=2, argv=0x7fffffffd508) at win.c:60
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and rank 1 at
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007ffff7288905 in raise () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007ffff7289d7b in abort () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt;  #2  0x00007ffff72c675d in __malloc_assert () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007ffff72c96d3 in _int_malloc () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007ffff72cad5d in malloc () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007ffff7a5b3ce in opal_obj_new (cls=0x7ffff7db2060) at
</span><br>
<span class="quotelev2">&gt;&gt; ../../opal/class/opal_object.h:469
</span><br>
<span class="quotelev2">&gt;&gt; #6  opal_obj_new_debug (line=71, file=0x7ffff7b60323
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ompi_datatype_create.c&quot;, type=0x7ffff7db2060) at
</span><br>
<span class="quotelev2">&gt;&gt; ../../opal/class/opal_object.h:251
</span><br>
<span class="quotelev2">&gt;&gt; #7  ompi_datatype_create (expectedSize=3) at ompi_datatype_create.c:71
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00007ffff7a5b7e9 in ompi_datatype_create_indexed_block (count=1,
</span><br>
<span class="quotelev2">&gt;&gt; bLength=1, pDisp=0x7fffee18a834, oldType=0x7ffff7db3640,
</span><br>
<span class="quotelev2">&gt;&gt; newType=0x7fffffffd070) at ompi_datatype_create_indexed.c:124
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x00007ffff7a5a349 in __ompi_datatype_create_from_args (type=9,
</span><br>
<span class="quotelev2">&gt;&gt; d=0x844f40, a=0x7fffee18a828, i=0x7fffee18a82c) at ompi_datatype_args.c:691
</span><br>
<span class="quotelev2">&gt;&gt; #10 __ompi_datatype_create_from_packed_description
</span><br>
<span class="quotelev2">&gt;&gt; (packed_buffer=0x7fffffffd108, remote_processor=0x652b90) at
</span><br>
<span class="quotelev2">&gt;&gt; ompi_datatype_args.c:626
</span><br>
<span class="quotelev2">&gt;&gt; #11 0x00007ffff7a5b045 in ompi_datatype_create_from_packed_description
</span><br>
<span class="quotelev2">&gt;&gt; (packed_buffer=&lt;optimized out&gt;, remote_processor=&lt;optimized out&gt;) at
</span><br>
<span class="quotelev2">&gt;&gt; ompi_datatype_args.c:779
</span><br>
<span class="quotelev2">&gt;&gt; #12 0x00007ffff218bf60 in ompi_osc_base_datatype_create
</span><br>
<span class="quotelev2">&gt;&gt; (payload=0x7fffffffd108, remote_proc=&lt;optimized out&gt;) at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/mca/osc/base/osc_base_obj_convert.h:52
</span><br>
<span class="quotelev2">&gt;&gt; #13 component_fragment_cb (btl=0x7ffff3680ce0, tag=&lt;optimized out&gt;,
</span><br>
<span class="quotelev2">&gt;&gt; descriptor=&lt;optimized out&gt;, cbdata=&lt;optimized out&gt;) at
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_component.c:624
</span><br>
<span class="quotelev2">&gt;&gt; #14 0x00007ffff347f25f in mca_btl_sm_component_progress () at
</span><br>
<span class="quotelev2">&gt;&gt; btl_sm_component.c:623
</span><br>
<span class="quotelev2">&gt;&gt; #15 0x00007ffff7b1f80a in opal_progress () at runtime/opal_progress.c:207
</span><br>
<span class="quotelev2">&gt;&gt; #16 0x00007ffff21977c5 in opal_condition_wait (m=&lt;optimized out&gt;,
</span><br>
<span class="quotelev2">&gt;&gt; c=0x842ee0) at ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev2">&gt;&gt; #17 ompi_osc_rdma_module_fence (assert=0, win=0x842270) at
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_sync.c:207
</span><br>
<span class="quotelev2">&gt;&gt; #18 0x00007ffff7a89db5 in PMPI_Win_fence (assert=0, win=0x842270) at
</span><br>
<span class="quotelev2">&gt;&gt; pwin_fence.c:60
</span><br>
<span class="quotelev2">&gt;&gt; #19 0x00000000004010d8 in main (argc=2, argv=0x7fffffffd508) at win.c:60
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This looks like memory corruption, but Open MPI internals are too noisy
</span><br>
<span class="quotelev2">&gt;&gt; under valgrind for it to be obvious where to look. This is with Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.5.4, but I observed the same thing with trunk. If I run with three
</span><br>
<span class="quotelev2">&gt;&gt; processes, the graph is slightly different and only ranks 1 and 2 error
</span><br>
<span class="quotelev2">&gt;&gt; (rank 0 hangs).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20191/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20192.php">John R. Cary: "[OMPI users] Ensuring use of real cores"</a>
<li><strong>Previous message:</strong> <a href="20190.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/18045.php">Jed Brown: "Re: [OMPI users] One-sided bugs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/21052.php">Jed Brown: "Re: [OMPI users] One-sided bugs"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/21052.php">Jed Brown: "Re: [OMPI users] One-sided bugs"</a>
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
