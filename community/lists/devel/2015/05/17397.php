<?
$subject_val = "Re: [OMPI devel] Hang in IMB-RMA?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 12:44:29 2015" -->
<!-- isoreceived="20150512164429" -->
<!-- sent="Tue, 12 May 2015 10:44:27 -0600" -->
<!-- isosent="20150512164427" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hang in IMB-RMA?" -->
<!-- id="20150512164427.GA54955_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0429C22EBDB44040B478F8F77EF14518D12AB8_at_ORSMSX114.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Hang in IMB-RMA?<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-12 12:44:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17398.php">Friedley, Andrew: "Re: [OMPI devel] Hang in IMB-RMA?"</a>
<li><strong>Previous message:</strong> <a href="17396.php">Friedley, Andrew: "[OMPI devel] Hang in IMB-RMA?"</a>
<li><strong>In reply to:</strong> <a href="17396.php">Friedley, Andrew: "[OMPI devel] Hang in IMB-RMA?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17398.php">Friedley, Andrew: "Re: [OMPI devel] Hang in IMB-RMA?"</a>
<li><strong>Reply:</strong> <a href="17398.php">Friedley, Andrew: "Re: [OMPI devel] Hang in IMB-RMA?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the report. Can you try with master and see if the issue is
<br>
fixed there?
<br>
<p>-Nathan
<br>
<p>On Tue, May 12, 2015 at 04:38:01PM +0000, Friedley, Andrew wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've run into a problem with the IMB-RMA exchange_get test.  At this point I suspect it's an issue in Open MPI or the test itself.  Could someone take a look?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running Open MPI 1.8.5 and IMB 4.0.2.  MVAPICH2 is able to run all of IMB-RMA successfully.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpirun -np 4 -mca pml ob1 -mca btl tcp,sm,self ./IMB-RMA
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eventually hangs at the end of exchange_get (after 4mb is reported) running the np=2 pass.  IMB runs every np power of 2 up to and including the np given on the command line.  So, with mpirun -np 4 above, IMB runs each of its tests with np=2 and then with np=4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I run just the exchange_get test, the same thing happens:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpirun -np 4 -mca pml ob1 -mca btl tcp,sm,self ./IMB-RMA exchange_get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I run either of the above commands with -np 2, IMB-RMA successfully runs to completion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have reproduced with tcp, verbs, and PSM -- does not appear to be transport specific.  MVAPICH2 2.0 works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Below are bracktraces from two of the four ranks.  The other two ranks each have a backtrace similar to these two.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #0  0x00007fca39a4c0c7 in sched_yield () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007fca393ef2fb in opal_progress () at runtime/opal_progress.c:197
</span><br>
<span class="quotelev1">&gt; #2  0x00007fca33cd21f5 in opal_condition_wait (m=0x247fc70, c=0x247fcd8)
</span><br>
<span class="quotelev1">&gt;     at ../../../../opal/threads/condition.h:78
</span><br>
<span class="quotelev1">&gt; #3  ompi_osc_rdma_flush_lock (module=module_at_entry=0x247fb50, lock=0x2481a20,
</span><br>
<span class="quotelev1">&gt;                     target=target_at_entry=3) at osc_rdma_passive_target.c:530
</span><br>
<span class="quotelev1">&gt; #4  0x00007fca33cd43bd in ompi_osc_rdma_flush (target=3, win=0x2482150)
</span><br>
<span class="quotelev1">&gt;     at osc_rdma_passive_target.c:578
</span><br>
<span class="quotelev1">&gt; #5  0x00007fca39fe5654 in PMPI_Win_flush (rank=3, win=0x2482150)
</span><br>
<span class="quotelev1">&gt;         at pwin_flush.c:58
</span><br>
<span class="quotelev1">&gt; #6  0x000000000040aec5 in IMB_rma_exchange_get ()
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000406a35 in IMB_warm_up ()
</span><br>
<span class="quotelev1">&gt; #8  0x00000000004023bd in main ()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #0  0x00007f1c81890bdd in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f1c81271c86 in poll_dispatch (base=0x1be8350, tv=0x7fff4c323480)
</span><br>
<span class="quotelev1">&gt;             at poll.c:165
</span><br>
<span class="quotelev1">&gt; #2  0x00007f1c81269aa4 in opal_libevent2021_event_base_loop (base=0x1be8350,
</span><br>
<span class="quotelev1">&gt;                     flags=2) at event.c:1633
</span><br>
<span class="quotelev1">&gt; #3  0x00007f1c812232e8 in opal_progress () at runtime/opal_progress.c:169
</span><br>
<span class="quotelev1">&gt; #4  0x00007f1c7b9641f5 in opal_condition_wait (m=0x1ccf4a0, c=0x1ccf508)
</span><br>
<span class="quotelev1">&gt;     at ../../../../opal/threads/condition.h:78
</span><br>
<span class="quotelev1">&gt; #5  ompi_osc_rdma_flush_lock (module=module_at_entry=0x1ccf380, lock=0x23287f0,
</span><br>
<span class="quotelev1">&gt;                     target=target_at_entry=0) at osc_rdma_passive_target.c:530
</span><br>
<span class="quotelev1">&gt; #6  0x00007f1c7b9663bd in ompi_osc_rdma_flush (target=0, win=0x2317d00)
</span><br>
<span class="quotelev1">&gt;     at osc_rdma_passive_target.c:578
</span><br>
<span class="quotelev1">&gt; #7  0x00007f1c81e19654 in PMPI_Win_flush (rank=0, win=0x2317d00)
</span><br>
<span class="quotelev1">&gt;         at pwin_flush.c:58
</span><br>
<span class="quotelev1">&gt; #8  0x000000000040aec5 in IMB_rma_exchange_get ()
</span><br>
<span class="quotelev1">&gt; #9  0x0000000000406a35 in IMB_warm_up ()
</span><br>
<span class="quotelev1">&gt; #10 0x00000000004023bd in main ()
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17396.php">http://www.open-mpi.org/community/lists/devel/2015/05/17396.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17397/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17398.php">Friedley, Andrew: "Re: [OMPI devel] Hang in IMB-RMA?"</a>
<li><strong>Previous message:</strong> <a href="17396.php">Friedley, Andrew: "[OMPI devel] Hang in IMB-RMA?"</a>
<li><strong>In reply to:</strong> <a href="17396.php">Friedley, Andrew: "[OMPI devel] Hang in IMB-RMA?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17398.php">Friedley, Andrew: "Re: [OMPI devel] Hang in IMB-RMA?"</a>
<li><strong>Reply:</strong> <a href="17398.php">Friedley, Andrew: "Re: [OMPI devel] Hang in IMB-RMA?"</a>
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
