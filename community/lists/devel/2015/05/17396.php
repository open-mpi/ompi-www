<?
$subject_val = "[OMPI devel] Hang in IMB-RMA?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 12:38:17 2015" -->
<!-- isoreceived="20150512163817" -->
<!-- sent="Tue, 12 May 2015 16:38:01 +0000" -->
<!-- isosent="20150512163801" -->
<!-- name="Friedley, Andrew" -->
<!-- email="andrew.friedley_at_[hidden]" -->
<!-- subject="[OMPI devel] Hang in IMB-RMA?" -->
<!-- id="0429C22EBDB44040B478F8F77EF14518D12AB8_at_ORSMSX114.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Hang in IMB-RMA?<br>
<strong>From:</strong> Friedley, Andrew (<em>andrew.friedley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-12 12:38:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17397.php">Nathan Hjelm: "Re: [OMPI devel] Hang in IMB-RMA?"</a>
<li><strong>Previous message:</strong> <a href="17395.php">Ralph Castain: "Re: [OMPI devel] MCA params"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17397.php">Nathan Hjelm: "Re: [OMPI devel] Hang in IMB-RMA?"</a>
<li><strong>Reply:</strong> <a href="17397.php">Nathan Hjelm: "Re: [OMPI devel] Hang in IMB-RMA?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've run into a problem with the IMB-RMA exchange_get test.  At this point I suspect it's an issue in Open MPI or the test itself.  Could someone take a look?
<br>
<p>I'm running Open MPI 1.8.5 and IMB 4.0.2.  MVAPICH2 is able to run all of IMB-RMA successfully.
<br>
<p>&nbsp;mpirun -np 4 -mca pml ob1 -mca btl tcp,sm,self ./IMB-RMA
<br>
<p>Eventually hangs at the end of exchange_get (after 4mb is reported) running the np=2 pass.  IMB runs every np power of 2 up to and including the np given on the command line.  So, with mpirun -np 4 above, IMB runs each of its tests with np=2 and then with np=4.
<br>
<p>If I run just the exchange_get test, the same thing happens:
<br>
<p>&nbsp;mpirun -np 4 -mca pml ob1 -mca btl tcp,sm,self ./IMB-RMA exchange_get
<br>
<p>If I run either of the above commands with -np 2, IMB-RMA successfully runs to completion.
<br>
<p>I have reproduced with tcp, verbs, and PSM -- does not appear to be transport specific.  MVAPICH2 2.0 works.
<br>
<p>Below are bracktraces from two of the four ranks.  The other two ranks each have a backtrace similar to these two.
<br>
<p>Thanks!
<br>
<p>Andrew
<br>
<p>#0  0x00007fca39a4c0c7 in sched_yield () from /lib64/libc.so.6
<br>
#1  0x00007fca393ef2fb in opal_progress () at runtime/opal_progress.c:197
<br>
#2  0x00007fca33cd21f5 in opal_condition_wait (m=0x247fc70, c=0x247fcd8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../opal/threads/condition.h:78
<br>
#3  ompi_osc_rdma_flush_lock (module=module_at_entry=0x247fb50, lock=0x2481a20,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;target=target_at_entry=3) at osc_rdma_passive_target.c:530
<br>
#4  0x00007fca33cd43bd in ompi_osc_rdma_flush (target=3, win=0x2482150)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at osc_rdma_passive_target.c:578
<br>
#5  0x00007fca39fe5654 in PMPI_Win_flush (rank=3, win=0x2482150)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at pwin_flush.c:58
<br>
#6  0x000000000040aec5 in IMB_rma_exchange_get ()
<br>
#7  0x0000000000406a35 in IMB_warm_up ()
<br>
#8  0x00000000004023bd in main ()
<br>
<p>#0  0x00007f1c81890bdd in poll () from /lib64/libc.so.6
<br>
#1  0x00007f1c81271c86 in poll_dispatch (base=0x1be8350, tv=0x7fff4c323480)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at poll.c:165
<br>
#2  0x00007f1c81269aa4 in opal_libevent2021_event_base_loop (base=0x1be8350,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flags=2) at event.c:1633
<br>
#3  0x00007f1c812232e8 in opal_progress () at runtime/opal_progress.c:169
<br>
#4  0x00007f1c7b9641f5 in opal_condition_wait (m=0x1ccf4a0, c=0x1ccf508)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../opal/threads/condition.h:78
<br>
#5  ompi_osc_rdma_flush_lock (module=module_at_entry=0x1ccf380, lock=0x23287f0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;target=target_at_entry=0) at osc_rdma_passive_target.c:530
<br>
#6  0x00007f1c7b9663bd in ompi_osc_rdma_flush (target=0, win=0x2317d00)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at osc_rdma_passive_target.c:578
<br>
#7  0x00007f1c81e19654 in PMPI_Win_flush (rank=0, win=0x2317d00)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at pwin_flush.c:58
<br>
#8  0x000000000040aec5 in IMB_rma_exchange_get ()
<br>
#9  0x0000000000406a35 in IMB_warm_up ()
<br>
#10 0x00000000004023bd in main ()
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17397.php">Nathan Hjelm: "Re: [OMPI devel] Hang in IMB-RMA?"</a>
<li><strong>Previous message:</strong> <a href="17395.php">Ralph Castain: "Re: [OMPI devel] MCA params"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17397.php">Nathan Hjelm: "Re: [OMPI devel] Hang in IMB-RMA?"</a>
<li><strong>Reply:</strong> <a href="17397.php">Nathan Hjelm: "Re: [OMPI devel] Hang in IMB-RMA?"</a>
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
