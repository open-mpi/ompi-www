<?
$subject_val = "Re: [OMPI users] OpenMPI deadlocks and race conditions ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 20:06:46 2009" -->
<!-- isoreceived="20090515000646" -->
<!-- sent="Thu, 14 May 2009 17:06:07 -0700" -->
<!-- isosent="20090515000607" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI deadlocks and race conditions ?" -->
<!-- id="4A0CB1EF.5050403_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A0A829C.2030809_at_labri.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI deadlocks and race conditions ?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 20:06:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9351.php">Silviu Groza: "Re: [OMPI users] Problem installing Dalton with OpenMPI over PelicanHPC"</a>
<li><strong>Previous message:</strong> <a href="9349.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>In reply to:</strong> <a href="9321.php">Fran&#231;ois PELLEGRINI: "[OMPI users] OpenMPI deadlocks and race conditions ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9352.php">François PELLEGRINI: "Re: [OMPI users] OpenMPI deadlocks and race conditions ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fran&#231;ois PELLEGRINI wrote:
<br>
<p><span class="quotelev1">&gt;I sometimes run into deadlocks in OpenMPI (1.3.3a1r21206), when
</span><br>
<span class="quotelev1">&gt;running my MPI+threaded PT-Scotch software.
</span><br>
<span class="quotelev1">&gt;
</span><br>
So, are there multiple threads per process that perform message-passing 
<br>
operations?
<br>
<p>Other comments below.
<br>
<p><span class="quotelev1">&gt;Luckily, the case
</span><br>
<span class="quotelev1">&gt;is very small, with 4 procs only, so I have been able to investigate
</span><br>
<span class="quotelev1">&gt;it a bit. It seems that matches between commnications are not done
</span><br>
<span class="quotelev1">&gt;properly on cloned communicators. In the end, I run into a case where
</span><br>
<span class="quotelev1">&gt;a MPI_Waitall completes a MPI_Barrier on another proc. The bug is
</span><br>
<span class="quotelev1">&gt;erratic but quite easy to reproduce, luckily too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;To be sure, I ran my code into valgrind using helgrind, its
</span><br>
<span class="quotelev1">&gt;race condition detection tool. It produced much output, most
</span><br>
<span class="quotelev1">&gt;of which seems to be innocuous, yet I have some concerns about
</span><br>
<span class="quotelev1">&gt;such messages as the following ones. The ==12**== were generated
</span><br>
<span class="quotelev1">&gt;when running on 4 procs, while the ==83**== were generated
</span><br>
<span class="quotelev1">&gt;when running on 2 procs :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;==8329== Possible data race during write of size 4 at 0x8882200
</span><br>
<span class="quotelev1">&gt;==8329==    at 0x508B315: sm_fifo_write (btl_sm.h:254)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x508B401: mca_btl_sm_send (btl_sm.c:811)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x5070A0C: mca_bml_base_send_status (bml.h:288)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x50708E6: mca_pml_ob1_send_request_start_copy (pml_ob1_sendreq.c:567)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x5064C30: mca_pml_ob1_send_request_start_btl (pml_ob1_sendreq.h:363)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x5064A19: mca_pml_ob1_send_request_start (pml_ob1_sendreq.h:429)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x5064856: mca_pml_ob1_isend (pml_ob1_isend.c:87)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x5142C46: ompi_coll_tuned_sendrecv_actual (coll_tuned_util.c:51)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x514F379: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:258)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x5143252: ompi_coll_tuned_barrier_intra_dec_fixed (coll_tuned_decision_fixed.c:192)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x40E410C: PMPI_Barrier (pbarrier.c:59)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x806C5FB: _SCOTCHdgraphInducePart (dgraph_induce.c:334)
</span><br>
<span class="quotelev1">&gt;==8329==   Old state: shared-readonly by threads #1, #7
</span><br>
<span class="quotelev1">&gt;==8329==   New state: shared-modified by threads #1, #7
</span><br>
<span class="quotelev1">&gt;==8329==   Reason:    this thread, #1, holds no consistent locks
</span><br>
<span class="quotelev1">&gt;==8329==   Location 0x8882200 has never been protected by any lock
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
This seems to be where the &quot;head&quot; index is incremented in 
<br>
sm_fifo_write().  I believe that function is only ever called via the 
<br>
macro MCA_BTL_SM_FIFO_WRITE, which requires the writer to be holding the 
<br>
FIFO's head lock.  So, this would seem to be sufficiently protected.  In 
<br>
1.3.1 and earlier, a lock was required only for multithreaded programs.  
<br>
Now, the writer *always* has to acquire the lock since the FIFOs are 
<br>
shared among senders.
<br>
<p><span class="quotelev1">&gt;==1220== Possible data race during write of size 4 at 0x88CEF88
</span><br>
<span class="quotelev1">&gt;==1220==    at 0x508CD84: sm_fifo_read (btl_sm.h:272)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x508C864: mca_btl_sm_component_progress (btl_sm_component.c:391)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x41F72DF: opal_progress (opal_progress.c:207)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x40BD67D: opal_condition_wait (condition.h:85)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x40BDA96: ompi_request_default_wait_all (req_wait.c:262)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x5142C78: ompi_coll_tuned_sendrecv_actual (coll_tuned_util.c:55)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x514F07A: ompi_coll_tuned_barrier_intra_recursivedoubling (coll_tuned_barrier.c:174)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x51432A3: ompi_coll_tuned_barrier_intra_dec_fixed (coll_tuned_decision_fixed.c:208)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x40E410C: PMPI_Barrier (pbarrier.c:59)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x806C5FB: _SCOTCHdgraphInducePart (dgraph_induce.c:334)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x805E2B2: kdgraphMapRbPartFold2 (kdgraph_map_rb_part.c:199)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x805EA43: kdgraphMapRbPart2 (kdgraph_map_rb_part.c:331)
</span><br>
<span class="quotelev1">&gt;==1220==   Old state: shared-readonly by threads #1, #7
</span><br>
<span class="quotelev1">&gt;==1220==   New state: shared-modified by threads #1, #7
</span><br>
<span class="quotelev1">&gt;==1220==   Reason:    this thread, #1, holds no consistent locks
</span><br>
<span class="quotelev1">&gt;==1220==   Location 0x88CEF88 has never been protected by any lock
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Here, the FIFO tail index is being incremented in sm_fifo_read().  I 
<br>
believe this function is only called from 
<br>
mca_btl_sm_component_progress().  That function requires that the reader 
<br>
holds the tail lock to read the tail when the process is multithreaded.  
<br>
I believe this requirement suffices since only the reader/owner of the 
<br>
FIFO can read the tail.  So, the only contention would be if that 
<br>
reader/owner is multithreaded.
<br>
<p><span class="quotelev1">&gt;==1219== Possible data race during write of size 4 at 0x891BC8C
</span><br>
<span class="quotelev1">&gt;==1219==    at 0x508CD99: sm_fifo_read (btl_sm.h:273)
</span><br>
<span class="quotelev1">&gt;==1219==    by 0x508C864: mca_btl_sm_component_progress (btl_sm_component.c:391)
</span><br>
<span class="quotelev1">&gt;==1219==    by 0x41F72DF: opal_progress (opal_progress.c:207)
</span><br>
<span class="quotelev1">&gt;==1219==    by 0x40BD67D: opal_condition_wait (condition.h:85)
</span><br>
<span class="quotelev1">&gt;==1219==    by 0x40BDA96: ompi_request_default_wait_all (req_wait.c:262)
</span><br>
<span class="quotelev1">&gt;==1219==    by 0x5142C78: ompi_coll_tuned_sendrecv_actual (coll_tuned_util.c:55)
</span><br>
<span class="quotelev1">&gt;==1219==    by 0x514F07A: ompi_coll_tuned_barrier_intra_recursivedoubling (coll_tuned_barrier.c:174)
</span><br>
<span class="quotelev1">&gt;==1219==    by 0x51432A3: ompi_coll_tuned_barrier_intra_dec_fixed (coll_tuned_decision_fixed.c:208)
</span><br>
<span class="quotelev1">&gt;==1219==    by 0x40E410C: PMPI_Barrier (pbarrier.c:59)
</span><br>
<span class="quotelev1">&gt;==1219==    by 0x806C5FB: _SCOTCHdgraphInducePart (dgraph_induce.c:334)
</span><br>
<span class="quotelev1">&gt;==1219==    by 0x805E2B2: kdgraphMapRbPartFold2 (kdgraph_map_rb_part.c:199)
</span><br>
<span class="quotelev1">&gt;==1219==    by 0x805EA43: kdgraphMapRbPart2 (kdgraph_map_rb_part.c:331)
</span><br>
<span class="quotelev1">&gt;==1219==   Old state: shared-readonly by threads #1, #7
</span><br>
<span class="quotelev1">&gt;==1219==   New state: shared-modified by threads #1, #7
</span><br>
<span class="quotelev1">&gt;==1219==   Reason:    this thread, #1, holds no consistent locks
</span><br>
<span class="quotelev1">&gt;==1219==   Location 0x891BC8C has never been protected by any lock
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
This immediately follows the incrementing of the tail index and is 
<br>
governed by the same tail lock when the process is multi-threaded.
<br>
<p><span class="quotelev1">&gt;==1220== Possible data race during write of size 4 at 0x4243A68
</span><br>
<span class="quotelev1">&gt;==1220==    at 0x41F72A7: opal_progress (opal_progress.c:186)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x40BD67D: opal_condition_wait (condition.h:85)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x40BDA96: ompi_request_default_wait_all (req_wait.c:262)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x5142C78: ompi_coll_tuned_sendrecv_actual (coll_tuned_util.c:55)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x514F07A: ompi_coll_tuned_barrier_intra_recursivedoubling (coll_tuned_barrier.c:174)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x51432A3: ompi_coll_tuned_barrier_intra_dec_fixed (coll_tuned_decision_fixed.c:208)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x40E410C: PMPI_Barrier (pbarrier.c:59)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x806C5FB: _SCOTCHdgraphInducePart (dgraph_induce.c:334)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x805E2B2: kdgraphMapRbPartFold2 (kdgraph_map_rb_part.c:199)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x805EA43: kdgraphMapRbPart2 (kdgraph_map_rb_part.c:331)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x805EB86: _SCOTCHkdgraphMapRbPart (kdgraph_map_rb_part.c:421)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x8057713: _SCOTCHkdgraphMapSt (kdgraph_map_st.c:182)
</span><br>
<span class="quotelev1">&gt;==1220==   Old state: shared-readonly by threads #1, #7
</span><br>
<span class="quotelev1">&gt;==1220==   New state: shared-modified by threads #1, #7
</span><br>
<span class="quotelev1">&gt;==1220==   Reason:    this thread, #1, holds no consistent locks
</span><br>
<span class="quotelev1">&gt;==1220==   Location 0x4243A68 has never been protected by any lock
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I guess I won't venture any comments on the opal progress engine.
<br>
<p><span class="quotelev1">&gt;==8328== Possible data race during write of size 4 at 0x4532318
</span><br>
<span class="quotelev1">&gt;==8328==    at 0x508A9B8: opal_atomic_lifo_pop (opal_atomic_lifo.h:111)
</span><br>
<span class="quotelev1">&gt;==8328==    by 0x508A69F: mca_btl_sm_alloc (btl_sm.c:612)
</span><br>
<span class="quotelev1">&gt;==8328==    by 0x5070571: mca_bml_base_alloc (bml.h:241)
</span><br>
<span class="quotelev1">&gt;==8328==    by 0x5070778: mca_pml_ob1_send_request_start_copy (pml_ob1_sendreq.c:506)
</span><br>
<span class="quotelev1">&gt;==8328==    by 0x5064C30: mca_pml_ob1_send_request_start_btl (pml_ob1_sendreq.h:363)
</span><br>
<span class="quotelev1">&gt;==8328==    by 0x5064A19: mca_pml_ob1_send_request_start (pml_ob1_sendreq.h:429)
</span><br>
<span class="quotelev1">&gt;==8328==    by 0x5064856: mca_pml_ob1_isend (pml_ob1_isend.c:87)
</span><br>
<span class="quotelev1">&gt;==8328==    by 0x5142C46: ompi_coll_tuned_sendrecv_actual (coll_tuned_util.c:51)
</span><br>
<span class="quotelev1">&gt;==8328==    by 0x514F379: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:258)
</span><br>
<span class="quotelev1">&gt;==8328==    by 0x5143252: ompi_coll_tuned_barrier_intra_dec_fixed (coll_tuned_decision_fixed.c:192)
</span><br>
<span class="quotelev1">&gt;==8328==    by 0x40E410C: PMPI_Barrier (pbarrier.c:59)
</span><br>
<span class="quotelev1">&gt;==8328==    by 0x806C5FB: _SCOTCHdgraphInducePart (dgraph_induce.c:334)
</span><br>
<span class="quotelev1">&gt;==8328==   Old state: shared-readonly by threads #1, #8
</span><br>
<span class="quotelev1">&gt;==8328==   New state: shared-modified by threads #1, #8
</span><br>
<span class="quotelev1">&gt;==8328==   Reason:    this thread, #1, holds no consistent locks
</span><br>
<span class="quotelev1">&gt;==8328==   Location 0x4532318 has never been protected by any lock
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Here, opal_atomic_lifo_pop is used to get an item off the sm eager free 
<br>
list.  The opal atomic LIFO operation seems to use atomic memory 
<br>
operations for thread safety, but I'll let someone else vouch for that code.
<br>
<p><span class="quotelev1">&gt;==8329== Possible data race during write of size 4 at 0x452F238
</span><br>
<span class="quotelev1">&gt;==8329==    at 0x5067FD3: recv_req_matched (pml_ob1_recvreq.h:219)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x5067D95: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:191)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x508C9BB: mca_btl_sm_component_progress (btl_sm_component.c:426)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x41F72DF: opal_progress (opal_progress.c:207)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x40BD67D: opal_condition_wait (condition.h:85)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x40BDA96: ompi_request_default_wait_all (req_wait.c:262)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x5142C78: ompi_coll_tuned_sendrecv_actual (coll_tuned_util.c:55)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x514F379: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:258)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x5143252: ompi_coll_tuned_barrier_intra_dec_fixed (coll_tuned_decision_fixed.c:192)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x40E410C: PMPI_Barrier (pbarrier.c:59)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x806C5FB: _SCOTCHdgraphInducePart (dgraph_induce.c:334)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x805E2B2: kdgraphMapRbPartFold2 (kdgraph_map_rb_part.c:199)
</span><br>
<span class="quotelev1">&gt;==8329==   Old state: owned exclusively by thread #7
</span><br>
<span class="quotelev1">&gt;==8329==   New state: shared-modified by threads #1, #7
</span><br>
<span class="quotelev1">&gt;==8329==   Reason:    this thread, #1, holds no locks at all
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Dunno.  Here, the PML is copying source and tag information out of a 
<br>
match header into a status structure.  I would think this code is okay 
<br>
since the thread presumably owns both the receive request and the match 
<br>
header.  But I'll let someone who knows the PML speak up on this point.
<br>
<p><span class="quotelev1">&gt;==8329== Possible data race during write of size 4 at 0x452F2DC
</span><br>
<span class="quotelev1">&gt;==8329==    at 0x40D5946: ompi_convertor_unpack (convertor.c:280)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x5067E78: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:215)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x508C9BB: mca_btl_sm_component_progress (btl_sm_component.c:426)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x41F72DF: opal_progress (opal_progress.c:207)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x40BD67D: opal_condition_wait (condition.h:85)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x40BDA96: ompi_request_default_wait_all (req_wait.c:262)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x5142C78: ompi_coll_tuned_sendrecv_actual (coll_tuned_util.c:55)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x514F379: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:258)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x5143252: ompi_coll_tuned_barrier_intra_dec_fixed (coll_tuned_decision_fixed.c:192)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x40E410C: PMPI_Barrier (pbarrier.c:59)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x806C5FB: _SCOTCHdgraphInducePart (dgraph_induce.c:334)
</span><br>
<span class="quotelev1">&gt;==8329==    by 0x805E2B2: kdgraphMapRbPartFold2 (kdgraph_map_rb_part.c:199)
</span><br>
<span class="quotelev1">&gt;==8329==   Old state: owned exclusively by thread #7
</span><br>
<span class="quotelev1">&gt;==8329==   New state: shared-modified by threads #1, #7
</span><br>
<span class="quotelev1">&gt;==8329==   Reason:    this thread, #1, holds no locks at all
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
It's unpacking message data.  I would think this is okay, but someone 
<br>
who understands the PML should say for sure.
<br>
<p><span class="quotelev1">&gt;I guess the following are ok, but I provide them as a
</span><br>
<span class="quotelev1">&gt;reference :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;==1220== Possible data race during write of size 4 at 0x8968780
</span><br>
<span class="quotelev1">&gt;==1220==    at 0x508A619: opal_atomic_unlock (atomic_impl.h:367)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x508B468: mca_btl_sm_send (btl_sm.c:811)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x5070A0C: mca_bml_base_send_status (bml.h:288)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x50708E6: mca_pml_ob1_send_request_start_copy (pml_ob1_sendreq.c:567)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x5064C30: mca_pml_ob1_send_request_start_btl (pml_ob1_sendreq.h:363)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x5064A19: mca_pml_ob1_send_request_start (pml_ob1_sendreq.h:429)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x5064856: mca_pml_ob1_isend (pml_ob1_isend.c:87)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x5142C46: ompi_coll_tuned_sendrecv_actual (coll_tuned_util.c:51)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x514F07A: ompi_coll_tuned_barrier_intra_recursivedoubling (coll_tuned_barrier.c:174)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x51432A3: ompi_coll_tuned_barrier_intra_dec_fixed (coll_tuned_decision_fixed.c:208)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x40E410C: PMPI_Barrier (pbarrier.c:59)
</span><br>
<span class="quotelev1">&gt;==1220==    by 0x806C5FB: _SCOTCHdgraphInducePart (dgraph_induce.c:334)
</span><br>
<span class="quotelev1">&gt;==1220==   Old state: shared-modified by threads #1, #7
</span><br>
<span class="quotelev1">&gt;==1220==   New state: shared-modified by threads #1, #7
</span><br>
<span class="quotelev1">&gt;==1220==   Reason:    this thread, #1, holds no consistent locks
</span><br>
<span class="quotelev1">&gt;==1220==   Location 0x8968780 has never been protected by any lock
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Unlock during sm FIFO write?  Yes, I would think this is okay.
<br>
<p>My comments aren't intended to give the code base my unqualified okay.  
<br>
I'm only saying that I read through these stacks and the sm BTL code 
<br>
that's called out looks okay to me.
<br>
<p><span class="quotelev1">&gt;ompi_info says :
</span><br>
<span class="quotelev1">&gt;                 Package: Open MPI pelegrin_at_brol Distribution
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.3.3a1r21206
</span><br>
<span class="quotelev1">&gt;   Open MPI SVN revision: r21206
</span><br>
<span class="quotelev1">&gt;   Open MPI release date: Unreleased developer copy
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.3.3a1r21206
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: r21206
</span><br>
<span class="quotelev1">&gt;   Open RTE release date: Unreleased developer copy
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.3.3a1r21206
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: r21206
</span><br>
<span class="quotelev1">&gt;       OPAL release date: Unreleased developer copy
</span><br>
<span class="quotelev1">&gt;            Ident string: 1.3.3a1r21206
</span><br>
<span class="quotelev1">&gt;                  Prefix: /usr/local
</span><br>
<span class="quotelev1">&gt; Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt;          Configure host: brol
</span><br>
<span class="quotelev1">&gt;           Configured by: pelegrin
</span><br>
<span class="quotelev1">&gt;           Configured on: Tue May 12 15:50:08 CEST 2009
</span><br>
<span class="quotelev1">&gt;          Configure host: brol
</span><br>
<span class="quotelev1">&gt;                Built by: pelegrin
</span><br>
<span class="quotelev1">&gt;                Built on: Tue May 12 16:17:34 CEST 2009
</span><br>
<span class="quotelev1">&gt;              Built host: brol
</span><br>
<span class="quotelev1">&gt;              C bindings: yes
</span><br>
<span class="quotelev1">&gt;            C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;      Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;              C compiler: gcc
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;            C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;   C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;      Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;      Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;             C profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;          C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;          Thread support: posix (mpi: yes, progress: no)
</span><br>
<span class="quotelev1">&gt;           Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;  Internal debug support: yes
</span><br>
<span class="quotelev1">&gt;     MPI parameter check: always
</span><br>
<span class="quotelev1">&gt;Memory profiling support: no
</span><br>
<span class="quotelev1">&gt;Memory debugging support: yes
</span><br>
<span class="quotelev1">&gt;         libltdl support: yes
</span><br>
<span class="quotelev1">&gt;   Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;         MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;       MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt;Symbol visibility support: yes
</span><br>
<span class="quotelev1">&gt;   FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;           MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;          MCA memchecker: valgrind (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;           MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA carto: file (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA timer: linux (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: env (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: config (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA dpm: orte (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: basic (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: basic (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: inter (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: self (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sync (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: tuned (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                  MCA io: romio (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: fake (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: sm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: cm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: csum (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: v (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA bml: r2 (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA rcache: vma (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: self (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: sm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: tcp (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA topo: unity (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: rdma (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: hnp (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: orted (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: tool (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: tcp (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA odls: default (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: slurm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: oob (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA routed: binomial (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA routed: direct (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA routed: linear (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: rsh (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: slurm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA filem: rsh (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: env (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: hnp (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: singleton (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: slurm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: tool (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks in advance for any help / explanation,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;					f.p.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9351.php">Silviu Groza: "Re: [OMPI users] Problem installing Dalton with OpenMPI over PelicanHPC"</a>
<li><strong>Previous message:</strong> <a href="9349.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>In reply to:</strong> <a href="9321.php">Fran&#231;ois PELLEGRINI: "[OMPI users] OpenMPI deadlocks and race conditions ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9352.php">François PELLEGRINI: "Re: [OMPI users] OpenMPI deadlocks and race conditions ?"</a>
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
