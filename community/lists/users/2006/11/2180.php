<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 16 16:54:33 2006" -->
<!-- isoreceived="20061116215433" -->
<!-- sent="Thu, 16 Nov 2006 22:53:40 +0100" -->
<!-- isosent="20061116215340" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] Problems running Intel Mpi Benchmark (formerly PMB) with ompi	1.1.2 and 1.2b1" -->
<!-- id="1163714022.25912.30.camel_at_y-boda.ydc.se" -->
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
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-16 16:53:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2181.php">Victor Prosolin: "[OMPI users] OpenMPI runtime problem"</a>
<li><strong>Previous message:</strong> <a href="2179.php">Yu Chen: "[OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>I'm having problems running the Allgather test of the IMB 3.0.
<br>
<p>System: Ubuntu Dapper, dual Amd Opteron, Myricom MX 1.1.5
<br>
OMPI version: 1.1.2 and 1.2b1
<br>
buildflags -O0 -g
<br>
<p>started with mpirun -mca  mpi_yield_when_idle 1 -mca
<br>
mpi_keep_peer_hostnames 0
<br>
<p>(The problem also exists when mpi_yield_when_idle is 0)
<br>
<p>When running with 88 nodes (one task per node) the test runs ok, but
<br>
when run with 89 nodes or more it never returns any data. It prints the
<br>
header, up to
<br>
<p># List of Benchmarks to run
<br>
<p># Allgather
<br>
<p>and then nothing.
<br>
<p>If i trap into one the task 0 process with gdb it shows
<br>
#0  0x00002aaaab7185f9 in sched_yield () from /lib/libc.so.6
<br>
#1  0x00002aaaaaf48d06 in opal_progress () at runtime/opal_progress.c:301
<br>
#2  0x00002aaaae5948f4 in opal_condition_wait (c=0x2aaaae69a890,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;m=0x2aaaae69a840) at condition.h:81
<br>
#3  0x00002aaaae59471d in __ompi_free_list_wait (fl=0x2aaaae69a790,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;item=0x7fffffae7948) at ompi_free_list.h:180
<br>
#4  0x00002aaaae594c86 in mca_btl_mx_prepare_src (btl=0x557200,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;endpoint=0x7bd690, registration=0x0, convertor=0x5712e0, reserve=32,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;size=0x7fffffae79e8) at btl_mx.c:263
<br>
#5  0x00002aaaae157507 in mca_bml_base_prepare_src (bml_btl=0x7bded0, reg=0x0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;conv=0x5712e0, reserve=32, size=0x7fffffae79e8, des=0x7fffffae7a00)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at bml.h:315
<br>
#6  0x00002aaaae157b57 in mca_pml_ob1_send_request_start_rndv (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sendreq=0x571200, bml_btl=0x7bded0, size=16292, flags=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at pml_ob1_sendreq.c:803
<br>
#7  0x00002aaaae14ba66 in mca_pml_ob1_send_request_start_btl (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sendreq=0x571200, bml_btl=0x7bded0) at pml_ob1_sendreq.h:332
<br>
#8  0x00002aaaae14b6f4 in mca_pml_ob1_send_request_start (sendreq=0x571200)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at pml_ob1_sendreq.h:374
<br>
#9  0x00002aaaae14bf6d in mca_pml_ob1_send (buf=0x2aaab0832010, count=65536,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;datatype=0x50c180, dst=1, tag=-17, sendmode=MCA_PML_BASE_SEND_STANDARD,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm=0x7ed4b0) at pml_ob1_isend.c:103
<br>
#10 0x00002aaaaecd7a0d in ompi_coll_tuned_bcast_intra_chain (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buff=0x2aaab0832010, count=373293056, datatype=0x50c180, root=0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm=0x7ed4b0, segsize=65536, chains=1) at coll_tuned_bcast.c:109
<br>
#11 0x00002aaaaecd7e90 in ompi_coll_tuned_bcast_intra_pipeline (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buffer=0x2aaab0832010, count=373293056, datatype=0x50c180, root=0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm=0x7ed4b0, segsize=65536) at coll_tuned_bcast.c:208
<br>
#12 0x00002aaaaecd2d79 in ompi_coll_tuned_bcast_intra_dec_fixed (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buff=0x2aaab0832010, count=373293056, datatype=0x50c180, root=0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm=0x7ed4b0) at coll_tuned_decision_fixed.c:205
<br>
#13 0x00002aaaae9bce6f in mca_coll_basic_allgather_intra (sbuf=0x2aaab0431010,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;scount=4194304, sdtype=0x50c180, rbuf=0x2aaab0832010, rcount=4194304,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rdtype=0x50c180, comm=0x7ed4b0) at coll_basic_allgather.c:77
<br>
#14 0x00002aaaaac2efb2 in PMPI_Allgather (sendbuf=0x2aaab0431010,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sendcount=4194304, sendtype=0x50c180, recvbuf=0x2aaab0832010,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;recvcount=4194304, recvtype=0x50c180, comm=0x7ed4b0) at pallgather.c:75
<br>
#15 0x00000000004088e8 in IMB_allgather ()
<br>
#16 0x00000000004065a2 in IMB_warm_up ()
<br>
#17 0x000000000040347a in main ()
<br>
<p>The last task shows
<br>
#0  0x00002aaaab7185f9 in sched_yield () from /lib/libc.so.6
<br>
#1  0x00002aaaaaf48d06 in opal_progress () at runtime/opal_progress.c:301
<br>
#2  0x00002aaaae14aace in opal_condition_wait (c=0x2aaaaadb2880,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;m=0x2aaaaadb2900) at condition.h:81
<br>
#3  0x00002aaaae14a9ad in mca_pml_ob1_recv (addr=0x2aaab002f010, count=65536,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;datatype=0x50c180, src=87, tag=-17, comm=0x7fc170, status=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at pml_ob1_irecv.c:107
<br>
#4  0x00002aaaaecd7d07 in ompi_coll_tuned_bcast_intra_chain (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buff=0x2aaab002f010, count=373293056, datatype=0x50c180, root=0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm=0x7fc170, segsize=65536, chains=1) at coll_tuned_bcast.c:179
<br>
#5  0x00002aaaaecd7e90 in ompi_coll_tuned_bcast_intra_pipeline (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buffer=0x2aaab002f010, count=373293056, datatype=0x50c180, root=0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm=0x7fc170, segsize=65536) at coll_tuned_bcast.c:208
<br>
#6  0x00002aaaaecd2d79 in ompi_coll_tuned_bcast_intra_dec_fixed (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buff=0x2aaab002f010, count=373293056, datatype=0x50c180, root=0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm=0x7fc170) at coll_tuned_decision_fixed.c:205
<br>
#7  0x00002aaaae9bce6f in mca_coll_basic_allgather_intra (sbuf=0x2aaaafc2e010,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;scount=4194304, sdtype=0x50c180, rbuf=0x2aaab002f010, rcount=4194304,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rdtype=0x50c180, comm=0x7fc170) at coll_basic_allgather.c:77
<br>
#8  0x00002aaaaac2efb2 in PMPI_Allgather (sendbuf=0x2aaaafc2e010,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sendcount=4194304, sendtype=0x50c180, recvbuf=0x2aaab002f010,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;recvcount=4194304, recvtype=0x50c180, comm=0x7fc170) at pallgather.c:75
<br>
#9  0x00000000004088e8 in IMB_allgather ()
<br>
#10 0x00000000004065a2 in IMB_warm_up ()
<br>
#11 0x000000000040347a in main ()
<br>
<p><p>Any ideas??
<br>
<p>I have no problem running the the Reduce_scatter or Allreduce test of IMB.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2181.php">Victor Prosolin: "[OMPI users] OpenMPI runtime problem"</a>
<li><strong>Previous message:</strong> <a href="2179.php">Yu Chen: "[OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h"</a>
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
