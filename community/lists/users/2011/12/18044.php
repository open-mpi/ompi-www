<?
$subject_val = "[OMPI users] One-sided bugs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 22 16:16:24 2011" -->
<!-- isoreceived="20111222211624" -->
<!-- sent="Thu, 22 Dec 2011 15:16:19 -0600" -->
<!-- isosent="20111222211619" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="[OMPI users] One-sided bugs" -->
<!-- id="CAM9tzS=8T-9X9oFNHZ4YH33ZCHJBK3AjrKr93vH4gy2Prsf8xg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] One-sided bugs<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-22 16:16:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18045.php">Jed Brown: "Re: [OMPI users] One-sided bugs"</a>
<li><strong>Previous message:</strong> <a href="18043.php">Paul Kapinos: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18045.php">Jed Brown: "Re: [OMPI users] One-sided bugs"</a>
<li><strong>Reply:</strong> <a href="18045.php">Jed Brown: "Re: [OMPI users] One-sided bugs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wrote a new communication layer that we are evaluating for use in mesh
<br>
management and PDE solvers, but it is based on MPI-2 one-sided operations
<br>
(and will eventually benefit from some of the MPI-3 one-sided proposals,
<br>
especially MPI_Fetch_and_op() and dynamic windows). All the basic
<br>
functionality works well with MPICH2, but I have run into some Open MPI
<br>
bugs regarding one-sided operations with composite data types. This email
<br>
provides a reduced test case for two such bugs. I see that there are also
<br>
some existing serious-looking bug reports regarding one-sided operations,
<br>
but they are getting pretty old now and haven't seen action in a while.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/2656">https://svn.open-mpi.org/trac/ompi/ticket/2656</a>
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1905">https://svn.open-mpi.org/trac/ompi/ticket/1905</a>
<br>
<p>Is there a plan for resolving these in the near future?
<br>
<p>Is anyone using Open MPI for serious work with one-sided operations?
<br>
<p><p>Bugs I am reporting:
<br>
<p>*1.* If an MPI_Win is used with an MPI_Datatype, even if the MPI_Win
<br>
operation has completed, I get an invalid free when MPI_Type_free() is
<br>
called before MPI_Win_free(). Since MPI_Type_free() is only supposed to
<br>
mark the datatype for deletion, the implementation should properly manage
<br>
reference counting. If you run the attached code with
<br>
<p>$ mpiexec -n 2 ./a.out 1
<br>
<p>(which only does part of the comm described for the second bug, below), you
<br>
can see the invalid free on rank 1 with stack still in MPI_Win_fence()
<br>
<p>(gdb) bt
<br>
#0  0x00007ffff7288905 in raise () from /lib/libc.so.6
<br>
#1  0x00007ffff7289d7b in abort () from /lib/libc.so.6
<br>
#2  0x00007ffff72c147e in __libc_message () from /lib/libc.so.6
<br>
#3  0x00007ffff72c7396 in malloc_printerr () from /lib/libc.so.6
<br>
#4  0x00007ffff72cb26c in free () from /lib/libc.so.6
<br>
#5  0x00007ffff7a5aaa8 in ompi_datatype_release_args (pData=0x845010) at
<br>
ompi_datatype_args.c:414
<br>
#6  0x00007ffff7a5b0ea in __ompi_datatype_release (datatype=0x845010) at
<br>
ompi_datatype_create.c:47
<br>
#7  0x00007ffff218e772 in opal_obj_run_destructors (object=0x845010) at
<br>
../../../../opal/class/opal_object.h:448
<br>
#8  ompi_osc_rdma_replyreq_free (replyreq=0x680a80) at
<br>
osc_rdma_replyreq.h:136
<br>
#9  ompi_osc_rdma_replyreq_send_cb (btl=0x7ffff3680ce0, endpoint=&lt;optimized
<br>
out&gt;, descriptor=0x837b00, status=&lt;optimized out&gt;) at
<br>
osc_rdma_data_move.c:691
<br>
#10 0x00007ffff347f38f in mca_btl_sm_component_progress () at
<br>
btl_sm_component.c:645
<br>
#11 0x00007ffff7b1f80a in opal_progress () at runtime/opal_progress.c:207
<br>
#12 0x00007ffff21977c5 in opal_condition_wait (m=&lt;optimized out&gt;,
<br>
c=0x842ee0) at ../../../../opal/threads/condition.h:99
<br>
#13 ompi_osc_rdma_module_fence (assert=0, win=0x842270) at
<br>
osc_rdma_sync.c:207
<br>
#14 0x00007ffff7a89db5 in PMPI_Win_fence (assert=0, win=0x842270) at
<br>
pwin_fence.c:60
<br>
#15 0x00000000004010d8 in main (argc=2, argv=0x7fffffffd508) at win.c:60
<br>
<p>meanwhile, rank 0 has already freed the datatype and is waiting in
<br>
MPI_Win_free().
<br>
(gdb) bt
<br>
#0  0x00007ffff7312107 in sched_yield () from /lib/libc.so.6
<br>
#1  0x00007ffff7b1f82b in opal_progress () at runtime/opal_progress.c:220
<br>
#2  0x00007ffff7a53fe4 in opal_condition_wait (m=&lt;optimized out&gt;,
<br>
c=&lt;optimized out&gt;) at ../opal/threads/condition.h:99
<br>
#3  ompi_request_default_wait_all (count=2, requests=0x7fffffffd210,
<br>
statuses=0x7fffffffd1e0) at request/req_wait.c:263
<br>
#4  0x00007ffff25b8d71 in ompi_coll_tuned_sendrecv_actual (sendbuf=0x0,
<br>
scount=0, sdatatype=0x7ffff7dba840, dest=1, stag=-16, recvbuf=&lt;optimized
<br>
out&gt;, rcount=0, rdatatype=0x7ffff7dba840, source=1, rtag=-16,
<br>
comm=0x8431a0, status=0x0) at coll_tuned_util.c:54
<br>
#5  0x00007ffff25c2de2 in ompi_coll_tuned_barrier_intra_two_procs
<br>
(comm=&lt;optimized out&gt;, module=&lt;optimized out&gt;) at coll_tuned_barrier.c:256
<br>
#6  0x00007ffff25b92ab in ompi_coll_tuned_barrier_intra_dec_fixed
<br>
(comm=0x8431a0, module=0x844980) at coll_tuned_decision_fixed.c:190
<br>
#7  0x00007ffff2186248 in ompi_osc_rdma_module_free (win=0x842170) at
<br>
osc_rdma.c:46
<br>
#8  0x00007ffff7a58a44 in ompi_win_free (win=0x842170) at win/win.c:150
<br>
#9  0x00007ffff7a8a0dd in PMPI_Win_free (win=0x7fffffffd408) at
<br>
pwin_free.c:56
<br>
#10 0x0000000000401195 in main (argc=2, argv=0x7fffffffd508) at win.c:69
<br>
<p><p>*2.* This appears to be more fundamental and perhaps much harder to fix.
<br>
The attached code sets up the following graph
<br>
<p>rank 0:
<br>
0 -&gt; (1,0)
<br>
1 -&gt; nothing
<br>
2 -&gt; (1,1)
<br>
<p>rank 1:
<br>
0 -&gt; (0,0)
<br>
1 -&gt; (0,2)
<br>
2 -&gt; (0,1)
<br>
<p>We pull over this graph using two calls to MPI_Get(), each with composite
<br>
data types defining what to pull into the first two slots, and what to put
<br>
into the third slot. It is Valgrind-clean with MPICH2, and produces the
<br>
following:
<br>
<p>$ mpiexec.hydra -n 2 ./a.out 2
<br>
[0] provided [100,101,102]  got [200, -2,201]
<br>
[1] provided [200,201,202]  got [100,102,101]
<br>
<p>With Open MPI, I see
<br>
<p>a.out: malloc.c:3096: sYSMALLOc: Assertion `(old_top == (((mbinptr) (((char
<br>
*) &amp;((av)-&gt;bins[((1) - 1) * 2])) - __builtin_offsetof (struct malloc_chunk,
<br>
fd)))) &amp;&amp; old_size == 0) || ((unsigned long) (old_size) &gt;= (unsigned
<br>
long)((((__builtin_offsetof (struct malloc_chunk, fd_nextsize))+((2 *
<br>
(sizeof(size_t))) - 1)) &amp; ~((2 * (sizeof(size_t))) - 1))) &amp;&amp;
<br>
((old_top)-&gt;size &amp; 0x1) &amp;&amp; ((unsigned long)old_end &amp; pagemask) == 0)'
<br>
failed.
<br>
<p>on both ranks, with rank 0 at
<br>
<p>(gdb) bt
<br>
#0  0x00007ffff7288905 in raise () from /lib/libc.so.6
<br>
#1  0x00007ffff7289d7b in abort () from /lib/libc.so.6
<br>
#2  0x00007ffff72c675d in __malloc_assert () from /lib/libc.so.6
<br>
#3  0x00007ffff72c96d3 in _int_malloc () from /lib/libc.so.6
<br>
#4  0x00007ffff72cad5d in malloc () from /lib/libc.so.6
<br>
#5  0x00007ffff7b46c46 in opal_free_list_grow (flist=0x7ffff239f150,
<br>
num_elements=1) at class/opal_free_list.c:93
<br>
#6  0x00007ffff2196152 in ompi_osc_rdma_replyreq_alloc
<br>
(replyreq=0x7fffffffd0f8, origin_rank=1, module=0x842d10) at
<br>
osc_rdma_replyreq.h:82
<br>
#7  ompi_osc_rdma_replyreq_alloc_init (module=0x842d10, origin=1,
<br>
origin_request=..., target_displacement=0, target_count=1,
<br>
datatype=0x8455b0, replyreq=0x7fffffffd0f8) at osc_rdma_replyreq.c:40
<br>
#8  0x00007ffff218c051 in component_fragment_cb (btl=0x7ffff3680ce0,
<br>
tag=&lt;optimized out&gt;, descriptor=&lt;optimized out&gt;, cbdata=&lt;optimized out&gt;) at
<br>
osc_rdma_component.c:633
<br>
#9  0x00007ffff347f25f in mca_btl_sm_component_progress () at
<br>
btl_sm_component.c:623
<br>
#10 0x00007ffff7b1f80a in opal_progress () at runtime/opal_progress.c:207
<br>
#11 0x00007ffff21977c5 in opal_condition_wait (m=&lt;optimized out&gt;,
<br>
c=0x842de0) at ../../../../opal/threads/condition.h:99
<br>
#12 ompi_osc_rdma_module_fence (assert=0, win=0x842170) at
<br>
osc_rdma_sync.c:207
<br>
#13 0x00007ffff7a89db5 in PMPI_Win_fence (assert=0, win=0x842170) at
<br>
pwin_fence.c:60
<br>
#14 0x00000000004010d8 in main (argc=2, argv=0x7fffffffd508) at win.c:60
<br>
<p>and rank 1 at
<br>
<p>(gdb) bt
<br>
#0  0x00007ffff7288905 in raise () from /lib/libc.so.6
<br>
#1  0x00007ffff7289d7b in abort () from /lib/libc.so.6
<br>
#2  0x00007ffff72c675d in __malloc_assert () from /lib/libc.so.6
<br>
#3  0x00007ffff72c96d3 in _int_malloc () from /lib/libc.so.6
<br>
#4  0x00007ffff72cad5d in malloc () from /lib/libc.so.6
<br>
#5  0x00007ffff7a5b3ce in opal_obj_new (cls=0x7ffff7db2060) at
<br>
../../opal/class/opal_object.h:469
<br>
#6  opal_obj_new_debug (line=71, file=0x7ffff7b60323
<br>
&quot;ompi_datatype_create.c&quot;, type=0x7ffff7db2060) at
<br>
../../opal/class/opal_object.h:251
<br>
#7  ompi_datatype_create (expectedSize=3) at ompi_datatype_create.c:71
<br>
#8  0x00007ffff7a5b7e9 in ompi_datatype_create_indexed_block (count=1,
<br>
bLength=1, pDisp=0x7fffee18a834, oldType=0x7ffff7db3640,
<br>
newType=0x7fffffffd070) at ompi_datatype_create_indexed.c:124
<br>
#9  0x00007ffff7a5a349 in __ompi_datatype_create_from_args (type=9,
<br>
d=0x844f40, a=0x7fffee18a828, i=0x7fffee18a82c) at ompi_datatype_args.c:691
<br>
#10 __ompi_datatype_create_from_packed_description
<br>
(packed_buffer=0x7fffffffd108, remote_processor=0x652b90) at
<br>
ompi_datatype_args.c:626
<br>
#11 0x00007ffff7a5b045 in ompi_datatype_create_from_packed_description
<br>
(packed_buffer=&lt;optimized out&gt;, remote_processor=&lt;optimized out&gt;) at
<br>
ompi_datatype_args.c:779
<br>
#12 0x00007ffff218bf60 in ompi_osc_base_datatype_create
<br>
(payload=0x7fffffffd108, remote_proc=&lt;optimized out&gt;) at
<br>
../../../../ompi/mca/osc/base/osc_base_obj_convert.h:52
<br>
#13 component_fragment_cb (btl=0x7ffff3680ce0, tag=&lt;optimized out&gt;,
<br>
descriptor=&lt;optimized out&gt;, cbdata=&lt;optimized out&gt;) at
<br>
osc_rdma_component.c:624
<br>
#14 0x00007ffff347f25f in mca_btl_sm_component_progress () at
<br>
btl_sm_component.c:623
<br>
#15 0x00007ffff7b1f80a in opal_progress () at runtime/opal_progress.c:207
<br>
#16 0x00007ffff21977c5 in opal_condition_wait (m=&lt;optimized out&gt;,
<br>
c=0x842ee0) at ../../../../opal/threads/condition.h:99
<br>
#17 ompi_osc_rdma_module_fence (assert=0, win=0x842270) at
<br>
osc_rdma_sync.c:207
<br>
#18 0x00007ffff7a89db5 in PMPI_Win_fence (assert=0, win=0x842270) at
<br>
pwin_fence.c:60
<br>
#19 0x00000000004010d8 in main (argc=2, argv=0x7fffffffd508) at win.c:60
<br>
<p>This looks like memory corruption, but Open MPI internals are too noisy
<br>
under valgrind for it to be obvious where to look. This is with Open MPI
<br>
1.5.4, but I observed the same thing with trunk. If I run with three
<br>
processes, the graph is slightly different and only ranks 1 and 2 error
<br>
(rank 0 hangs).
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18044/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18045.php">Jed Brown: "Re: [OMPI users] One-sided bugs"</a>
<li><strong>Previous message:</strong> <a href="18043.php">Paul Kapinos: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18045.php">Jed Brown: "Re: [OMPI users] One-sided bugs"</a>
<li><strong>Reply:</strong> <a href="18045.php">Jed Brown: "Re: [OMPI users] One-sided bugs"</a>
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
