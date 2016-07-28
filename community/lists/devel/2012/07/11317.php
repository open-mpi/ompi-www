<?
$subject_val = "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 26 10:05:58 2012" -->
<!-- isoreceived="20120726140558" -->
<!-- sent="Thu, 26 Jul 2012 16:05:50 +0200" -->
<!-- isosent="20120726140550" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag" -->
<!-- id="46C2E2FA-5868-423A-AAD2-410B09DC0AB6_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DF152F4B8E08AE4AAF80927EA5DC03AC0E83B91A_at_G01JPEXMBYT02" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-26 10:05:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11318.php">Richard Graham: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if	it has a matched recv frag"</a>
<li><strong>Previous message:</strong> <a href="11316.php">Kawashima, Takahiro: "[OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag"</a>
<li><strong>In reply to:</strong> <a href="11316.php">Kawashima, Takahiro: "[OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11318.php">Richard Graham: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if	it has a matched recv frag"</a>
<li><strong>Reply:</strong> <a href="11318.php">Richard Graham: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if	it has a matched recv frag"</a>
<li><strong>Reply:</strong> <a href="11326.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Takahiro,
<br>
<p>Indeed we were way to lax on canceling the requests. I modified your patch to correctly deal with the MEMCHECK macro (remove the call from the branch that will requires a completion function). The modified patch is attached below. I will commit asap.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>Index: ompi/mca/pml/ob1/pml_ob1_recvreq.c
<br>
===================================================================
<br>
--- ompi/mca/pml/ob1/pml_ob1_recvreq.c	(revision 26870)
<br>
+++ ompi/mca/pml/ob1/pml_ob1_recvreq.c	(working copy)
<br>
@@ -3,7 +3,7 @@
<br>
&nbsp;&nbsp;* Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
<br>
&nbsp;&nbsp;*                         University Research and Technology
<br>
&nbsp;&nbsp;*                         Corporation.  All rights reserved.
<br>
- * Copyright (c) 2004-2009 The University of Tennessee and The University
<br>
+ * Copyright (c) 2004-2012 The University of Tennessee and The University
<br>
&nbsp;&nbsp;*                         of Tennessee Research Foundation.  All rights
<br>
&nbsp;&nbsp;*                         reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2004-2008 High Performance Computing Center Stuttgart, 
<br>
@@ -15,6 +15,7 @@
<br>
&nbsp;&nbsp;* Copyright (c) 2012      NVIDIA Corporation.  All rights reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2011-2012 Los Alamos National Security, LLC. All rights
<br>
&nbsp;&nbsp;*                         reserved.
<br>
+ * Copyright (c) 2012      FUJITSU LIMITED.  All rights reserved.
<br>
&nbsp;&nbsp;* $COPYRIGHT$
<br>
&nbsp;&nbsp;* 
<br>
&nbsp;&nbsp;* Additional copyrights may follow
<br>
@@ -97,36 +98,26 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_recv_request_t* request = (mca_pml_ob1_recv_request_t*)ompi_request;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_comm_t* comm = request-&gt;req_recv.req_base.req_comm-&gt;c_pml_comm;
<br>
&nbsp;
<br>
-    if( true == ompi_request-&gt;req_complete ) { /* way to late to cancel this one */
<br>
-        /*
<br>
-         * Receive request completed, make user buffer accessable.
<br>
-         */
<br>
-        MEMCHECKER(
<br>
-            memchecker_call(&amp;opal_memchecker_base_mem_defined,
<br>
-                            request-&gt;req_recv.req_base.req_addr,
<br>
-                            request-&gt;req_recv.req_base.req_count,
<br>
-                            request-&gt;req_recv.req_base.req_datatype);
<br>
-        );
<br>
+    if( true == request-&gt;req_match_received ) { /* way to late to cancel this one */
<br>
+        assert( OMPI_ANY_TAG != ompi_request-&gt;req_status.MPI_TAG ); /* not matched isn't it */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* The rest should be protected behind the match logic lock */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;comm-&gt;matching_lock);
<br>
-    if( OMPI_ANY_TAG == ompi_request-&gt;req_status.MPI_TAG ) { /* the match has not been already done */
<br>
-       if( request-&gt;req_recv.req_base.req_peer == OMPI_ANY_SOURCE ) {
<br>
-          opal_list_remove_item( &amp;comm-&gt;wild_receives, (opal_list_item_t*)request );
<br>
-       } else {
<br>
-          mca_pml_ob1_comm_proc_t* proc = comm-&gt;procs + request-&gt;req_recv.req_base.req_peer;
<br>
-          opal_list_remove_item(&amp;proc-&gt;specific_receives, (opal_list_item_t*)request);
<br>
-       }
<br>
-       PERUSE_TRACE_COMM_EVENT( PERUSE_COMM_REQ_REMOVE_FROM_POSTED_Q,
<br>
-                                &amp;(request-&gt;req_recv.req_base), PERUSE_RECV );
<br>
-       /**
<br>
-        * As now the PML is done with this request we have to force the pml_complete
<br>
-        * to true. Otherwise, the request will never be freed.
<br>
-        */
<br>
-       request-&gt;req_recv.req_base.req_pml_complete = true;
<br>
+    if( request-&gt;req_recv.req_base.req_peer == OMPI_ANY_SOURCE ) {
<br>
+        opal_list_remove_item( &amp;comm-&gt;wild_receives, (opal_list_item_t*)request );
<br>
+    } else {
<br>
+        mca_pml_ob1_comm_proc_t* proc = comm-&gt;procs + request-&gt;req_recv.req_base.req_peer;
<br>
+        opal_list_remove_item(&amp;proc-&gt;specific_receives, (opal_list_item_t*)request);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+    PERUSE_TRACE_COMM_EVENT( PERUSE_COMM_REQ_REMOVE_FROM_POSTED_Q,
<br>
+                             &amp;(request-&gt;req_recv.req_base), PERUSE_RECV );
<br>
+    /**
<br>
+     * As now the PML is done with this request we have to force the pml_complete
<br>
+     * to true. Otherwise, the request will never be freed.
<br>
+     */
<br>
+    request-&gt;req_recv.req_base.req_pml_complete = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;comm-&gt;matching_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;ompi_request_lock);
<br>
@@ -138,7 +129,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_OB1_RECV_REQUEST_MPI_COMPLETE(request);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;ompi_request_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*
<br>
-     * Receive request cancelled, make user buffer accessable.
<br>
+     * Receive request cancelled, make user buffer accessible.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MEMCHECKER(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memchecker_call(&amp;opal_memchecker_base_mem_defined,
<br>
<p>On Jul 26, 2012, at 13:41 , Kawashima, Takahiro wrote:
<br>
<p><span class="quotelev1">&gt; Hi Open MPI developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found a small bug in Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See attached program cancelled.c.
</span><br>
<span class="quotelev1">&gt; In this program, rank 1 tries to cancel a MPI_Irecv and calls a MPI_Recv
</span><br>
<span class="quotelev1">&gt; instead if the cancellation succeeds. This program should terminate whether
</span><br>
<span class="quotelev1">&gt; the cancellation succeeds or not. But it leads a deadlock in MPI_Recv after
</span><br>
<span class="quotelev1">&gt; printing &quot;MPI_Test_cancelled: 1&quot;.
</span><br>
<span class="quotelev1">&gt; I confirmed it works fine with MPICH2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is in mca_pml_ob1_recv_request_cancel function in
</span><br>
<span class="quotelev1">&gt; ompi/mca/pml/ob1/pml_ob1_recvreq.c. It accepts the cancellation unless
</span><br>
<span class="quotelev1">&gt; the request has been completed. I think it should not accept the
</span><br>
<span class="quotelev1">&gt; cancellation if the request has been matched. If it want to accept the
</span><br>
<span class="quotelev1">&gt; cancellation, it must push the recv frag to the unexpected message queue
</span><br>
<span class="quotelev1">&gt; back and redo matching. Furthermore, the receive buffer must be reverted
</span><br>
<span class="quotelev1">&gt; if the received message has been written to the receive buffer partially
</span><br>
<span class="quotelev1">&gt; in a pipeline protocol.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached patch cancel-recv.patch is a sample fix for this bug for Open MPI
</span><br>
<span class="quotelev1">&gt; trunk. Though this patch has 65 lines, main modifications are adding one
</span><br>
<span class="quotelev1">&gt; if-statement and deleting one if-statement. Other lines are just for
</span><br>
<span class="quotelev1">&gt; indent alignment.
</span><br>
<span class="quotelev1">&gt; I cannot confirm the MEMCHECKER part is correct. Could anyone review it
</span><br>
<span class="quotelev1">&gt; before committing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; &lt;cancelled.c&gt;&lt;cancel-recv.patch&gt;&lt;License.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11318.php">Richard Graham: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if	it has a matched recv frag"</a>
<li><strong>Previous message:</strong> <a href="11316.php">Kawashima, Takahiro: "[OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag"</a>
<li><strong>In reply to:</strong> <a href="11316.php">Kawashima, Takahiro: "[OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11318.php">Richard Graham: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if	it has a matched recv frag"</a>
<li><strong>Reply:</strong> <a href="11318.php">Richard Graham: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if	it has a matched recv frag"</a>
<li><strong>Reply:</strong> <a href="11326.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag"</a>
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
