<?
$subject_val = "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request	if	it has a matched recv frag";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 26 10:59:35 2012" -->
<!-- isoreceived="20120726145935" -->
<!-- sent="Thu, 26 Jul 2012 14:59:27 +0000" -->
<!-- isosent="20120726145927" -->
<!-- name="Richard Graham" -->
<!-- email="richardg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request	if	it has a matched recv frag" -->
<!-- id="3D8F945A4E59E644AE9205E5CD3708E517FB7846_at_MTIDAG02.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D4EF510B-751D-4592-99B0-E8EA745627B7_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request	if	it has a matched recv frag<br>
<strong>From:</strong> Richard Graham (<em>richardg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-26 10:59:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11321.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh"</a>
<li><strong>Previous message:</strong> <a href="11319.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if	it has a matched recv frag"</a>
<li><strong>In reply to:</strong> <a href="11319.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if	it has a matched recv frag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11326.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, so this is only for receive, and not for send, I take it.  Should have looked closer.
<br>
<p>Rich
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of George Bosilca
<br>
Sent: Thursday, July 26, 2012 10:47 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag
<br>
<p>Rich,
<br>
<p>There is no matching in this case. Canceling a receive operation is possible only up to the moment the request has been matched. Up to this point the sequence numbers of the peers are not used, so removing a non-matched request has no impact on the sequence number.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jul 26, 2012, at 16:31 , Richard Graham wrote:
<br>
<p><span class="quotelev1">&gt; I do not see any resetting of sequence numbers.  It has been a long time since I have looked at the matching code, so don't know if the out-of-order handling has been taken out.  If not, the sequence number has to be dealt with in some manner, or else there will be a gap in the arriving sequence numbers, and the matching logic will prevent any further progress.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; On Behalf Of George Bosilca
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, July 26, 2012 10:06 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] [patch] MPI_Cancel should not cancel a 
</span><br>
<span class="quotelev1">&gt; request if it has a matched recv frag
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Takahiro,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed we were way to lax on canceling the requests. I modified your patch to correctly deal with the MEMCHECK macro (remove the call from the branch that will requires a completion function). The modified patch is attached below. I will commit asap.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
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
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev1">&gt;  *                         University Research and Technology
</span><br>
<span class="quotelev1">&gt;  *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2004-2009 The University of Tennessee and The 
</span><br>
<span class="quotelev1">&gt; University
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2012 The University of Tennessee and The 
</span><br>
<span class="quotelev1">&gt; + University
</span><br>
<span class="quotelev1">&gt;  *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev1">&gt;  *                         reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2008 High Performance Computing Center Stuttgart, @@ -15,6 +15,7 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2012      NVIDIA Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2011-2012 Los Alamos National Security, LLC. All rights
</span><br>
<span class="quotelev1">&gt;  *                         reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2012      FUJITSU LIMITED.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -97,36 +98,26 @@
</span><br>
<span class="quotelev1">&gt;     mca_pml_ob1_recv_request_t* request = (mca_pml_ob1_recv_request_t*)ompi_request;
</span><br>
<span class="quotelev1">&gt;     mca_pml_ob1_comm_t* comm = 
</span><br>
<span class="quotelev1">&gt; request-&gt;req_recv.req_base.req_comm-&gt;c_pml_comm;
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
<span class="quotelev1">&gt; +        assert( OMPI_ANY_TAG != ompi_request-&gt;req_status.MPI_TAG ); 
</span><br>
<span class="quotelev1">&gt; + /* not matched isn't it */
</span><br>
<span class="quotelev1">&gt;         return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* The rest should be protected behind the match logic lock */
</span><br>
<span class="quotelev1">&gt;     OPAL_THREAD_LOCK(&amp;comm-&gt;matching_lock);
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
<span class="quotelev1">&gt; +        opal_list_remove_item(&amp;proc-&gt;specific_receives,
</span><br>
<span class="quotelev1">&gt; + (opal_list_item_t*)request);
</span><br>
<span class="quotelev1">&gt;     }
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
<span class="quotelev1">&gt;     OPAL_THREAD_UNLOCK(&amp;comm-&gt;matching_lock);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     OPAL_THREAD_LOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev1">&gt; @@ -138,7 +129,7 @@
</span><br>
<span class="quotelev1">&gt;     MCA_PML_OB1_RECV_REQUEST_MPI_COMPLETE(request);
</span><br>
<span class="quotelev1">&gt;     OPAL_THREAD_UNLOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev1">&gt;     /*
</span><br>
<span class="quotelev1">&gt; -     * Receive request cancelled, make user buffer accessable.
</span><br>
<span class="quotelev1">&gt; +     * Receive request cancelled, make user buffer accessible.
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     MEMCHECKER(
</span><br>
<span class="quotelev1">&gt;         memchecker_call(&amp;opal_memchecker_base_mem_defined,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 26, 2012, at 13:41 , Kawashima, Takahiro wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Open MPI developers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I found a small bug in Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; See attached program cancelled.c.
</span><br>
<span class="quotelev2">&gt;&gt; In this program, rank 1 tries to cancel a MPI_Irecv and calls a 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Recv instead if the cancellation succeeds. This program should 
</span><br>
<span class="quotelev2">&gt;&gt; terminate whether the cancellation succeeds or not. But it leads a 
</span><br>
<span class="quotelev2">&gt;&gt; deadlock in MPI_Recv after printing &quot;MPI_Test_cancelled: 1&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; I confirmed it works fine with MPICH2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem is in mca_pml_ob1_recv_request_cancel function in 
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/pml/ob1/pml_ob1_recvreq.c. It accepts the cancellation 
</span><br>
<span class="quotelev2">&gt;&gt; unless the request has been completed. I think it should not accept 
</span><br>
<span class="quotelev2">&gt;&gt; the cancellation if the request has been matched. If it want to 
</span><br>
<span class="quotelev2">&gt;&gt; accept the cancellation, it must push the recv frag to the unexpected 
</span><br>
<span class="quotelev2">&gt;&gt; message queue back and redo matching. Furthermore, the receive buffer 
</span><br>
<span class="quotelev2">&gt;&gt; must be reverted if the received message has been written to the 
</span><br>
<span class="quotelev2">&gt;&gt; receive buffer partially in a pipeline protocol.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Attached patch cancel-recv.patch is a sample fix for this bug for 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI trunk. Though this patch has 65 lines, main modifications 
</span><br>
<span class="quotelev2">&gt;&gt; are adding one if-statement and deleting one if-statement. Other 
</span><br>
<span class="quotelev2">&gt;&gt; lines are just for indent alignment.
</span><br>
<span class="quotelev2">&gt;&gt; I cannot confirm the MEMCHECKER part is correct. Could anyone review 
</span><br>
<span class="quotelev2">&gt;&gt; it before committing?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev2">&gt;&gt; MPI development team,
</span><br>
<span class="quotelev2">&gt;&gt; Fujitsu
</span><br>
<span class="quotelev2">&gt;&gt; &lt;cancelled.c&gt;&lt;cancel-recv.patch&gt;&lt;License.txt&gt;________________________
</span><br>
<span class="quotelev2">&gt;&gt; _
</span><br>
<span class="quotelev2">&gt;&gt; ______________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11321.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh"</a>
<li><strong>Previous message:</strong> <a href="11319.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if	it has a matched recv frag"</a>
<li><strong>In reply to:</strong> <a href="11319.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if	it has a matched recv frag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11326.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag"</a>
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
