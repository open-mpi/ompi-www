<?
$subject_val = "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 26 22:04:35 2012" -->
<!-- isoreceived="20120727020435" -->
<!-- sent="Fri, 27 Jul 2012 02:04:27 +0000" -->
<!-- isosent="20120727020427" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag" -->
<!-- id="DF152F4B8E08AE4AAF80927EA5DC03AC0E83BE91_at_G01JPEXMBYT02" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="46C2E2FA-5868-423A-AAD2-410B09DC0AB6_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-26 22:04:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11327.php">Ralph Castain: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>Previous message:</strong> <a href="11325.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh"</a>
<li><strong>In reply to:</strong> <a href="11317.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>Thanks for review and commit!
<br>
I've confirmed your modification.
<br>
<p>Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p><span class="quotelev1">&gt; Takahiro,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed we were way to lax on canceling the requests. I modified your patch to correctly deal with the MEMCHECK macro (remove the call from the branch that will requires a completion function). The modified patch is attached below. I will commit asap.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/pml/ob1/pml_ob1_recvreq.c	(revision 26870)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/pml/ob1/pml_ob1_recvreq.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -3,7 +3,7 @@
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev1">&gt;   *                         University Research and Technology
</span><br>
<span class="quotelev1">&gt;   *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2004-2009 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2012 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt;   *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev1">&gt;   *                         reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2008 High Performance Computing Center Stuttgart, 
</span><br>
<span class="quotelev1">&gt; @@ -15,6 +15,7 @@
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2012      NVIDIA Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2011-2012 Los Alamos National Security, LLC. All rights
</span><br>
<span class="quotelev1">&gt;   *                         reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2012      FUJITSU LIMITED.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   * 
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -97,36 +98,26 @@
</span><br>
<span class="quotelev1">&gt;      mca_pml_ob1_recv_request_t* request = (mca_pml_ob1_recv_request_t*)ompi_request;
</span><br>
<span class="quotelev1">&gt;      mca_pml_ob1_comm_t* comm = request-&gt;req_recv.req_base.req_comm-&gt;c_pml_comm;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    if( true == ompi_request-&gt;req_complete ) { /* way to late to cancel this one */
</span><br>
<span class="quotelev1">&gt; -        /*
</span><br>
<span class="quotelev1">&gt; -         * Receive request completed, make user buffer accessable.
</span><br>
<span class="quotelev1">&gt; -         */
</span><br>
<span class="quotelev1">&gt; -        MEMCHECKER(
</span><br>
<span class="quotelev1">&gt; -            memchecker_call(&amp;opal_memchecker_base_mem_defined,
</span><br>
<span class="quotelev1">&gt; -                            request-&gt;req_recv.req_base.req_addr,
</span><br>
<span class="quotelev1">&gt; -                            request-&gt;req_recv.req_base.req_count,
</span><br>
<span class="quotelev1">&gt; -                            request-&gt;req_recv.req_base.req_datatype);
</span><br>
<span class="quotelev1">&gt; -        );
</span><br>
<span class="quotelev1">&gt; +    if( true == request-&gt;req_match_received ) { /* way to late to cancel this one */
</span><br>
<span class="quotelev1">&gt; +        assert( OMPI_ANY_TAG != ompi_request-&gt;req_status.MPI_TAG ); /* not matched isn't it */
</span><br>
<span class="quotelev1">&gt;          return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      /* The rest should be protected behind the match logic lock */
</span><br>
<span class="quotelev1">&gt;      OPAL_THREAD_LOCK(&amp;comm-&gt;matching_lock);
</span><br>
<span class="quotelev1">&gt; -    if( OMPI_ANY_TAG == ompi_request-&gt;req_status.MPI_TAG ) { /* the match has not been already done */
</span><br>
<span class="quotelev1">&gt; -       if( request-&gt;req_recv.req_base.req_peer == OMPI_ANY_SOURCE ) {
</span><br>
<span class="quotelev1">&gt; -          opal_list_remove_item( &amp;comm-&gt;wild_receives, (opal_list_item_t*)request );
</span><br>
<span class="quotelev1">&gt; -       } else {
</span><br>
<span class="quotelev1">&gt; -          mca_pml_ob1_comm_proc_t* proc = comm-&gt;procs + request-&gt;req_recv.req_base.req_peer;
</span><br>
<span class="quotelev1">&gt; -          opal_list_remove_item(&amp;proc-&gt;specific_receives, (opal_list_item_t*)request);
</span><br>
<span class="quotelev1">&gt; -       }
</span><br>
<span class="quotelev1">&gt; -       PERUSE_TRACE_COMM_EVENT( PERUSE_COMM_REQ_REMOVE_FROM_POSTED_Q,
</span><br>
<span class="quotelev1">&gt; -                                &amp;(request-&gt;req_recv.req_base), PERUSE_RECV );
</span><br>
<span class="quotelev1">&gt; -       /**
</span><br>
<span class="quotelev1">&gt; -        * As now the PML is done with this request we have to force the pml_complete
</span><br>
<span class="quotelev1">&gt; -        * to true. Otherwise, the request will never be freed.
</span><br>
<span class="quotelev1">&gt; -        */
</span><br>
<span class="quotelev1">&gt; -       request-&gt;req_recv.req_base.req_pml_complete = true;
</span><br>
<span class="quotelev1">&gt; +    if( request-&gt;req_recv.req_base.req_peer == OMPI_ANY_SOURCE ) {
</span><br>
<span class="quotelev1">&gt; +        opal_list_remove_item( &amp;comm-&gt;wild_receives, (opal_list_item_t*)request );
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +        mca_pml_ob1_comm_proc_t* proc = comm-&gt;procs + request-&gt;req_recv.req_base.req_peer;
</span><br>
<span class="quotelev1">&gt; +        opal_list_remove_item(&amp;proc-&gt;specific_receives, (opal_list_item_t*)request);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +    PERUSE_TRACE_COMM_EVENT( PERUSE_COMM_REQ_REMOVE_FROM_POSTED_Q,
</span><br>
<span class="quotelev1">&gt; +                             &amp;(request-&gt;req_recv.req_base), PERUSE_RECV );
</span><br>
<span class="quotelev1">&gt; +    /**
</span><br>
<span class="quotelev1">&gt; +     * As now the PML is done with this request we have to force the pml_complete
</span><br>
<span class="quotelev1">&gt; +     * to true. Otherwise, the request will never be freed.
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    request-&gt;req_recv.req_base.req_pml_complete = true;
</span><br>
<span class="quotelev1">&gt;      OPAL_THREAD_UNLOCK(&amp;comm-&gt;matching_lock);
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      OPAL_THREAD_LOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev1">&gt; @@ -138,7 +129,7 @@
</span><br>
<span class="quotelev1">&gt;      MCA_PML_OB1_RECV_REQUEST_MPI_COMPLETE(request);
</span><br>
<span class="quotelev1">&gt;      OPAL_THREAD_UNLOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev1">&gt;      /*
</span><br>
<span class="quotelev1">&gt; -     * Receive request cancelled, make user buffer accessable.
</span><br>
<span class="quotelev1">&gt; +     * Receive request cancelled, make user buffer accessible.
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;      MEMCHECKER(
</span><br>
<span class="quotelev1">&gt;          memchecker_call(&amp;opal_memchecker_base_mem_defined,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 26, 2012, at 13:41 , Kawashima, Takahiro wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Open MPI developers,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I found a small bug in Open MPI.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; See attached program cancelled.c.
</span><br>
<span class="quotelev2">&gt; &gt; In this program, rank 1 tries to cancel a MPI_Irecv and calls a MPI_Recv
</span><br>
<span class="quotelev2">&gt; &gt; instead if the cancellation succeeds. This program should terminate whether
</span><br>
<span class="quotelev2">&gt; &gt; the cancellation succeeds or not. But it leads a deadlock in MPI_Recv after
</span><br>
<span class="quotelev2">&gt; &gt; printing &quot;MPI_Test_cancelled: 1&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; I confirmed it works fine with MPICH2.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The problem is in mca_pml_ob1_recv_request_cancel function in
</span><br>
<span class="quotelev2">&gt; &gt; ompi/mca/pml/ob1/pml_ob1_recvreq.c. It accepts the cancellation unless
</span><br>
<span class="quotelev2">&gt; &gt; the request has been completed. I think it should not accept the
</span><br>
<span class="quotelev2">&gt; &gt; cancellation if the request has been matched. If it want to accept the
</span><br>
<span class="quotelev2">&gt; &gt; cancellation, it must push the recv frag to the unexpected message queue
</span><br>
<span class="quotelev2">&gt; &gt; back and redo matching. Furthermore, the receive buffer must be reverted
</span><br>
<span class="quotelev2">&gt; &gt; if the received message has been written to the receive buffer partially
</span><br>
<span class="quotelev2">&gt; &gt; in a pipeline protocol.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Attached patch cancel-recv.patch is a sample fix for this bug for Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; trunk. Though this patch has 65 lines, main modifications are adding one
</span><br>
<span class="quotelev2">&gt; &gt; if-statement and deleting one if-statement. Other lines are just for
</span><br>
<span class="quotelev2">&gt; &gt; indent alignment.
</span><br>
<span class="quotelev2">&gt; &gt; I cannot confirm the MEMCHECKER part is correct. Could anyone review it
</span><br>
<span class="quotelev2">&gt; &gt; before committing?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Takahiro Kawashima,
</span><br>
<span class="quotelev2">&gt; &gt; MPI development team,
</span><br>
<span class="quotelev2">&gt; &gt; Fujitsu
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11327.php">Ralph Castain: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>Previous message:</strong> <a href="11325.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh"</a>
<li><strong>In reply to:</strong> <a href="11317.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag"</a>
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
