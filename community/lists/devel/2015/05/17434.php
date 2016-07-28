<?
$subject_val = "Re: [OMPI devel] Hang in IMB-RMA?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 14:10:42 2015" -->
<!-- isoreceived="20150520181042" -->
<!-- sent="Wed, 20 May 2015 18:10:20 +0000" -->
<!-- isosent="20150520181020" -->
<!-- name="Burette, Yohann" -->
<!-- email="yohann.burette_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hang in IMB-RMA?" -->
<!-- id="6777BD114B546D458A2696C0DEB863DF5F6D4884_at_ORSMSX107.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150512185924.GB54955_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Burette, Yohann (<em>yohann.burette_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-20 14:10:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17435.php">Aurélien Bouteiller: "[OMPI devel] smcuda higher exclusivity than anything else?"</a>
<li><strong>Previous message:</strong> <a href="17433.php">George Bosilca: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="17399.php">Nathan Hjelm: "Re: [OMPI devel] Hang in IMB-RMA?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nathan,
<br>
<p>Not entirely sure it is related but I'm also seeing a hang at the end of Put_all_local with -mca pml ob1 -mca btl tcp,sm,self.
<br>
It seems to have finished the test but doesn't proceed to the next one. When run alone, Put_all_local finishes fine.
<br>
<p>Also, I verified with master and I see no hang.
<br>
<p>Yohann
<br>
<p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Nathan Hjelm
<br>
Sent: Tuesday, May 12, 2015 11:59 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Hang in IMB-RMA?
<br>
<p><p>Thanks! I will look at osc/rdma in 1.8 and see about patching the bug. The RMA code in master and 1.8 has diverged significantly but it shouldn't be too dificult to fix.
<br>
<p>-Nathan
<br>
<p>On Tue, May 12, 2015 at 06:50:41PM +0000, Friedley, Andrew wrote:
<br>
<span class="quotelev1">&gt; Hi Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I should have thought to do that.  Yes, the issue seems to be fixed on master -- no hangs on PSM, openib, or tcp.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Nathan 
</span><br>
<span class="quotelev2">&gt; &gt; Hjelm
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Tuesday, May 12, 2015 9:44 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI devel] Hang in IMB-RMA?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the report. Can you try with master and see if the issue 
</span><br>
<span class="quotelev2">&gt; &gt; is fixed there?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, May 12, 2015 at 04:38:01PM +0000, Friedley, Andrew wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I've run into a problem with the IMB-RMA exchange_get test.  At 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; this point
</span><br>
<span class="quotelev2">&gt; &gt; I suspect it's an issue in Open MPI or the test itself.  Could 
</span><br>
<span class="quotelev2">&gt; &gt; someone take a look?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm running Open MPI 1.8.5 and IMB 4.0.2.  MVAPICH2 is able to run 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; all of
</span><br>
<span class="quotelev2">&gt; &gt; IMB-RMA successfully.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  mpirun -np 4 -mca pml ob1 -mca btl tcp,sm,self ./IMB-RMA
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Eventually hangs at the end of exchange_get (after 4mb is 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; reported)
</span><br>
<span class="quotelev2">&gt; &gt; running the np=2 pass.  IMB runs every np power of 2 up to and 
</span><br>
<span class="quotelev2">&gt; &gt; including the np given on the command line.  So, with mpirun -np 4 
</span><br>
<span class="quotelev2">&gt; &gt; above, IMB runs each of its tests with np=2 and then with np=4.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If I run just the exchange_get test, the same thing happens:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  mpirun -np 4 -mca pml ob1 -mca btl tcp,sm,self ./IMB-RMA 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; exchange_get
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If I run either of the above commands with -np 2, IMB-RMA 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; successfully
</span><br>
<span class="quotelev2">&gt; &gt; runs to completion.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have reproduced with tcp, verbs, and PSM -- does not appear to 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; be
</span><br>
<span class="quotelev2">&gt; &gt; transport specific.  MVAPICH2 2.0 works.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Below are bracktraces from two of the four ranks.  The other two 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ranks
</span><br>
<span class="quotelev2">&gt; &gt; each have a backtrace similar to these two.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks!
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Andrew
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #0  0x00007fca39a4c0c7 in sched_yield () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #1  0x00007fca393ef2fb in opal_progress () at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; runtime/opal_progress.c:197
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #2  0x00007fca33cd21f5 in opal_condition_wait (m=0x247fc70, c=0x247fcd8)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../../../opal/threads/condition.h:78
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #3  ompi_osc_rdma_flush_lock (module=module_at_entry=0x247fb50,
</span><br>
<span class="quotelev2">&gt; &gt; lock=0x2481a20,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                     target=target_at_entry=3) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; osc_rdma_passive_target.c:530
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #4  0x00007fca33cd43bd in ompi_osc_rdma_flush (target=3,
</span><br>
<span class="quotelev2">&gt; &gt; win=0x2482150)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at osc_rdma_passive_target.c:578
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #5  0x00007fca39fe5654 in PMPI_Win_flush (rank=3, win=0x2482150)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         at pwin_flush.c:58
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #6  0x000000000040aec5 in IMB_rma_exchange_get ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #7  0x0000000000406a35 in IMB_warm_up ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #8  0x00000000004023bd in main ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #0  0x00007f1c81890bdd in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #1  0x00007f1c81271c86 in poll_dispatch (base=0x1be8350,
</span><br>
<span class="quotelev2">&gt; &gt; tv=0x7fff4c323480)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;             at poll.c:165
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #2  0x00007f1c81269aa4 in opal_libevent2021_event_base_loop
</span><br>
<span class="quotelev2">&gt; &gt; (base=0x1be8350,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                     flags=2) at event.c:1633
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #3  0x00007f1c812232e8 in opal_progress () at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; runtime/opal_progress.c:169
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #4  0x00007f1c7b9641f5 in opal_condition_wait (m=0x1ccf4a0, c=0x1ccf508)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../../../opal/threads/condition.h:78
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #5  ompi_osc_rdma_flush_lock (module=module_at_entry=0x1ccf380,
</span><br>
<span class="quotelev2">&gt; &gt; lock=0x23287f0,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                     target=target_at_entry=0) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; osc_rdma_passive_target.c:530
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #6  0x00007f1c7b9663bd in ompi_osc_rdma_flush (target=0,
</span><br>
<span class="quotelev2">&gt; &gt; win=0x2317d00)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at osc_rdma_passive_target.c:578
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #7  0x00007f1c81e19654 in PMPI_Win_flush (rank=0, win=0x2317d00)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         at pwin_flush.c:58
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #8  0x000000000040aec5 in IMB_rma_exchange_get ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #9  0x0000000000406a35 in IMB_warm_up ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #10 0x00000000004023bd in main ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17396.php">http://www.open-mpi.org/community/lists/devel/2015/05/17396.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17398.php">http://www.open-mpi.org/community/lists/devel/2015/05/17398.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17435.php">Aurélien Bouteiller: "[OMPI devel] smcuda higher exclusivity than anything else?"</a>
<li><strong>Previous message:</strong> <a href="17433.php">George Bosilca: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="17399.php">Nathan Hjelm: "Re: [OMPI devel] Hang in IMB-RMA?"</a>
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
