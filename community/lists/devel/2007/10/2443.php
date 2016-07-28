<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 15 10:28:24 2007" -->
<!-- isoreceived="20071015142824" -->
<!-- sent="Mon, 15 Oct 2007 16:27:47 +0200" -->
<!-- isosent="20071015142747" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[OMPI devel] putting common request completion waiting code into separate	inline function" -->
<!-- id="20071015142747.GI3354_at_minantech.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-15 10:27:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2444.php">Jeff Squyres: "[OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>Previous message:</strong> <a href="2442.php">Jeff Squyres: "[OMPI devel] RM approval for #1153"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2459.php">Jeff Squyres: "Re: [OMPI devel] putting common request completion waiting code into separate	inline function"</a>
<li><strong>Reply:</strong> <a href="2459.php">Jeff Squyres: "Re: [OMPI devel] putting common request completion waiting code into separate	inline function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;&nbsp;Each time a someone needs to wait for request completion he 
<br>
implements the same piece of code. Why not put this code into
<br>
inline function and use it instead. Look at the included patch, it
<br>
moves the common code into ompi_request_wait_completion() function.
<br>
Does somebody have any objection against committing it to the trunk?
<br>
<p>diff --git a/ompi/mca/crcp/coord/crcp_coord_pml.c b/ompi/mca/crcp/coord/crcp_coord_pml.c
<br>
index b2392e4..eb9b9c1 100644
<br>
--- a/ompi/mca/crcp/coord/crcp_coord_pml.c
<br>
+++ b/ompi/mca/crcp/coord/crcp_coord_pml.c
<br>
@@ -3857,13 +3857,7 @@ static int coord_request_wait_all( size_t count,
<br>
&nbsp;static int coord_request_wait( ompi_request_t * req,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_status_public_t * status)
<br>
&nbsp;{
<br>
-    OPAL_THREAD_LOCK(&amp;ompi_request_lock);
<br>
-    ompi_request_waiting++;
<br>
-    while (req-&gt;req_complete == false) {
<br>
-        opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
<br>
-    }
<br>
-    ompi_request_waiting--;
<br>
-    OPAL_THREAD_UNLOCK(&amp;ompi_request_lock);
<br>
+    ompi_request_wait_completion(req);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( MPI_STATUS_IGNORE != status ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status-&gt;MPI_TAG    = req-&gt;req_status.MPI_TAG;
<br>
diff --git a/ompi/mca/pml/cm/pml_cm_recv.c b/ompi/mca/pml/cm/pml_cm_recv.c
<br>
index 0e23c9a..00efffc 100644
<br>
--- a/ompi/mca/pml/cm/pml_cm_recv.c
<br>
+++ b/ompi/mca/pml/cm/pml_cm_recv.c
<br>
@@ -112,22 +112,7 @@ mca_pml_cm_recv(void *addr,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ret;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
-    if (recvreq-&gt;req_base.req_ompi.req_complete == false) {
<br>
-        /* give up and sleep until completion */
<br>
-        if (opal_using_threads()) {
<br>
-            opal_mutex_lock(&amp;ompi_request_lock);
<br>
-            ompi_request_waiting++;
<br>
-            while (recvreq-&gt;req_base.req_ompi.req_complete == false)
<br>
-                opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
<br>
-            ompi_request_waiting--;
<br>
-            opal_mutex_unlock(&amp;ompi_request_lock);
<br>
-        } else {
<br>
-            ompi_request_waiting++;
<br>
-            while (recvreq-&gt;req_base.req_ompi.req_complete == false)
<br>
-                opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
<br>
-            ompi_request_waiting--;
<br>
-        }
<br>
-    }
<br>
+    ompi_request_wait_completion(&amp;recvreq-&gt;req_base.req_ompi);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != status) {  /* return status */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*status = recvreq-&gt;req_base.req_ompi.req_status;
<br>
diff --git a/ompi/mca/pml/cm/pml_cm_send.c b/ompi/mca/pml/cm/pml_cm_send.c
<br>
index ed9b189..f7d2e8c 100644
<br>
--- a/ompi/mca/pml/cm/pml_cm_send.c
<br>
+++ b/ompi/mca/pml/cm/pml_cm_send.c
<br>
@@ -175,23 +175,8 @@ mca_pml_cm_send(void *buf,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_CM_THIN_SEND_REQUEST_RETURN(sendreq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ret;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-            
<br>
-            if (sendreq-&gt;req_send.req_base.req_ompi.req_complete == false) {
<br>
-                /* give up and sleep until completion */
<br>
-                if (opal_using_threads()) {
<br>
-                    opal_mutex_lock(&amp;ompi_request_lock);
<br>
-                    ompi_request_waiting++;
<br>
-                    while (sendreq-&gt;req_send.req_base.req_ompi.req_complete == false)
<br>
-                        opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
<br>
-                    ompi_request_waiting--;
<br>
-                    opal_mutex_unlock(&amp;ompi_request_lock);
<br>
-                } else {
<br>
-                    ompi_request_waiting++;
<br>
-                    while (sendreq-&gt;req_send.req_base.req_ompi.req_complete == false)
<br>
-                        opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
<br>
-                    ompi_request_waiting--;
<br>
-                }
<br>
-            }
<br>
+           
<br>
+            ompi_request_wait_completion(&amp;sendreq-&gt;req_send.req_base.req_ompi);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_free( (ompi_request_t**)&amp;sendreq );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
diff --git a/ompi/mca/pml/dr/pml_dr_iprobe.c b/ompi/mca/pml/dr/pml_dr_iprobe.c
<br>
index 9149174..2063c54 100644
<br>
--- a/ompi/mca/pml/dr/pml_dr_iprobe.c
<br>
+++ b/ompi/mca/pml/dr/pml_dr_iprobe.c
<br>
@@ -64,22 +64,7 @@ int mca_pml_dr_probe(int src,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_DR_RECV_REQUEST_INIT(&amp;recvreq, NULL, 0, &amp;ompi_mpi_char, src, tag, comm, true);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_DR_RECV_REQUEST_START(&amp;recvreq);
<br>
&nbsp;
<br>
-    if (recvreq.req_recv.req_base.req_ompi.req_complete == false) {
<br>
-        /* give up and sleep until completion */
<br>
-        if (opal_using_threads()) {
<br>
-            opal_mutex_lock(&amp;ompi_request_lock);
<br>
-            ompi_request_waiting++;
<br>
-            while (recvreq.req_recv.req_base.req_ompi.req_complete == false)
<br>
-                opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
<br>
-            ompi_request_waiting--;
<br>
-            opal_mutex_unlock(&amp;ompi_request_lock);
<br>
-        } else {
<br>
-            ompi_request_waiting++;
<br>
-            while (recvreq.req_recv.req_base.req_ompi.req_complete == false)
<br>
-                opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
<br>
-            ompi_request_waiting--;
<br>
-        }
<br>
-    }
<br>
+    ompi_request_wait_completion(&amp;recvreq.req_recv.req_base.req_ompi);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != status) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*status = recvreq.req_recv.req_base.req_ompi.req_status;
<br>
@@ -87,4 +72,3 @@ int mca_pml_dr_probe(int src,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_BASE_RECV_REQUEST_FINI( &amp;recvreq.req_recv );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;}
<br>
-
<br>
diff --git a/ompi/mca/pml/dr/pml_dr_irecv.c b/ompi/mca/pml/dr/pml_dr_irecv.c
<br>
index 4627341..8dd8c57 100644
<br>
--- a/ompi/mca/pml/dr/pml_dr_irecv.c
<br>
+++ b/ompi/mca/pml/dr/pml_dr_irecv.c
<br>
@@ -87,33 +87,8 @@ int mca_pml_dr_recv(void *addr,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;count, datatype, src, tag, comm, false);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_DR_RECV_REQUEST_START(recvreq);
<br>
-    if (recvreq-&gt;req_recv.req_base.req_ompi.req_complete == false) {
<br>
-#if OMPI_ENABLE_PROGRESS_THREADS
<br>
-        if(opal_progress_spin(&amp;recvreq-&gt;req_recv.req_base.req_ompi.req_complete)) {
<br>
-            goto finished;
<br>
-        }
<br>
-#endif
<br>
+    ompi_request_wait_completion(&amp;recvreq-&gt;req_recv.req_base.req_ompi);
<br>
&nbsp;
<br>
-        /* give up and sleep until completion */
<br>
-        if (opal_using_threads()) {
<br>
-            opal_mutex_lock(&amp;ompi_request_lock);
<br>
-            ompi_request_waiting++;
<br>
-            while (recvreq-&gt;req_recv.req_base.req_ompi.req_complete == false)
<br>
-                opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
<br>
-            ompi_request_waiting--;
<br>
-            opal_mutex_unlock(&amp;ompi_request_lock);
<br>
-        } else {
<br>
-            ompi_request_waiting++;
<br>
-            while (recvreq-&gt;req_recv.req_base.req_ompi.req_complete == false)
<br>
-                opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
<br>
-            ompi_request_waiting--;
<br>
-        }
<br>
-    }
<br>
-
<br>
-#if OMPI_ENABLE_PROGRESS_THREADS
<br>
-finished:
<br>
-#endif
<br>
-                                                                                                    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != status) {  /* return status */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*status = recvreq-&gt;req_recv.req_base.req_ompi.req_status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
diff --git a/ompi/mca/pml/dr/pml_dr_isend.c b/ompi/mca/pml/dr/pml_dr_isend.c
<br>
index 206599a..b4d9192 100644
<br>
--- a/ompi/mca/pml/dr/pml_dr_isend.c
<br>
+++ b/ompi/mca/pml/dr/pml_dr_isend.c
<br>
@@ -105,33 +105,10 @@ int mca_pml_dr_send(void *buf,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
-    if (sendreq-&gt;req_send.req_base.req_ompi.req_complete == false) {
<br>
-#if OMPI_ENABLE_PROGRESS_THREADS
<br>
-        if(opal_progress_spin(&amp;sendreq-&gt;req_send.req_base.req_ompi.req_complete)) {
<br>
-            ompi_request_free( (ompi_request_t**)&amp;sendreq );
<br>
-            return OMPI_SUCCESS;
<br>
-        }
<br>
-#endif
<br>
-
<br>
-        /* give up and sleep until completion */
<br>
-        if (opal_using_threads()) {
<br>
-            opal_mutex_lock(&amp;ompi_request_lock);
<br>
-            ompi_request_waiting++;
<br>
-            while (sendreq-&gt;req_send.req_base.req_ompi.req_complete == false)
<br>
-                opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
<br>
-            ompi_request_waiting--;
<br>
-            opal_mutex_unlock(&amp;ompi_request_lock);
<br>
-        } else {
<br>
-            ompi_request_waiting++;
<br>
-            while (sendreq-&gt;req_send.req_base.req_ompi.req_complete == false)
<br>
-                opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
<br>
-            ompi_request_waiting--;
<br>
-        }
<br>
-    }
<br>
+    ompi_request_wait_completion(&amp;sendreq-&gt;req_send.req_base.req_ompi);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* return request to pool */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = sendreq-&gt;req_send.req_base.req_ompi.req_status.MPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_free((ompi_request_t **) &amp; sendreq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;}
<br>
-
<br>
diff --git a/ompi/mca/pml/ob1/pml_ob1_iprobe.c b/ompi/mca/pml/ob1/pml_ob1_iprobe.c
<br>
index ac0c54d..c86f1c7 100644
<br>
--- a/ompi/mca/pml/ob1/pml_ob1_iprobe.c
<br>
+++ b/ompi/mca/pml/ob1/pml_ob1_iprobe.c
<br>
@@ -64,22 +64,7 @@ int mca_pml_ob1_probe(int src,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_OB1_RECV_REQUEST_INIT(&amp;recvreq, NULL, 0, &amp;ompi_mpi_char, src, tag, comm, true);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_OB1_RECV_REQUEST_START(&amp;recvreq);
<br>
&nbsp;
<br>
-    if (recvreq.req_recv.req_base.req_ompi.req_complete == false) {
<br>
-        /* give up and sleep until completion */
<br>
-        if (opal_using_threads()) {
<br>
-            opal_mutex_lock(&amp;ompi_request_lock);
<br>
-            ompi_request_waiting++;
<br>
-            while (recvreq.req_recv.req_base.req_ompi.req_complete == false)
<br>
-                opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
<br>
-            ompi_request_waiting--;
<br>
-            opal_mutex_unlock(&amp;ompi_request_lock);
<br>
-        } else {
<br>
-            ompi_request_waiting++;
<br>
-            while (recvreq.req_recv.req_base.req_ompi.req_complete == false)
<br>
-                opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
<br>
-            ompi_request_waiting--;
<br>
-        }
<br>
-    }
<br>
+    ompi_request_wait_completion(&amp;recvreq.req_recv.req_base.req_ompi);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != status) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*status = recvreq.req_recv.req_base.req_ompi.req_status;
<br>
@@ -87,4 +72,3 @@ int mca_pml_ob1_probe(int src,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_BASE_RECV_REQUEST_FINI( &amp;recvreq.req_recv );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;}
<br>
-
<br>
diff --git a/ompi/mca/pml/ob1/pml_ob1_irecv.c b/ompi/mca/pml/ob1/pml_ob1_irecv.c
<br>
index d2d89ce..a8d95bd 100644
<br>
--- a/ompi/mca/pml/ob1/pml_ob1_irecv.c
<br>
+++ b/ompi/mca/pml/ob1/pml_ob1_irecv.c
<br>
@@ -101,37 +101,7 @@ int mca_pml_ob1_recv(void *addr,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PERUSE_RECV);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_OB1_RECV_REQUEST_START(recvreq);
<br>
-    if (recvreq-&gt;req_recv.req_base.req_ompi.req_complete == false) {
<br>
-#if OMPI_ENABLE_PROGRESS_THREADS
<br>
-        if(opal_progress_spin(&amp;recvreq-&gt;req_recv.req_base.req_ompi.req_complete)) {
<br>
-            goto finished;
<br>
-        }
<br>
-#endif
<br>
-        /* give up and sleep until completion */
<br>
-        if (opal_using_threads()) {
<br>
-            opal_mutex_lock(&amp;ompi_request_lock);
<br>
-            ompi_request_waiting++;
<br>
-            while (recvreq-&gt;req_recv.req_base.req_ompi.req_complete == false)
<br>
-                opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
<br>
-            ompi_request_waiting--;
<br>
-            opal_mutex_unlock(&amp;ompi_request_lock);
<br>
-        } else {
<br>
-#if OMPI_ENABLE_DEBUG &amp;&amp; !OMPI_HAVE_THREAD_SUPPORT
<br>
-            OPAL_THREAD_LOCK(&amp;ompi_request_lock);
<br>
-#endif 
<br>
-            ompi_request_waiting++;
<br>
-            while (recvreq-&gt;req_recv.req_base.req_ompi.req_complete == false)
<br>
-                opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
<br>
-            ompi_request_waiting--;
<br>
-#if OMPI_ENABLE_DEBUG &amp;&amp; !OMPI_HAVE_THREAD_SUPPORT
<br>
-            OPAL_THREAD_UNLOCK(&amp;ompi_request_lock);
<br>
-#endif 
<br>
-        }
<br>
-    }
<br>
-
<br>
-#if OMPI_ENABLE_PROGRESS_THREADS
<br>
-finished:
<br>
-#endif
<br>
+    ompi_request_wait_completion(&amp;recvreq-&gt;req_recv.req_base.req_ompi);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != status) {  /* return status */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*status = recvreq-&gt;req_recv.req_base.req_ompi.req_status;
<br>
diff --git a/ompi/mca/pml/ob1/pml_ob1_isend.c b/ompi/mca/pml/ob1/pml_ob1_isend.c
<br>
index a647fac..0fbf7f6 100644
<br>
--- a/ompi/mca/pml/ob1/pml_ob1_isend.c
<br>
+++ b/ompi/mca/pml/ob1/pml_ob1_isend.c
<br>
@@ -120,38 +120,9 @@ int mca_pml_ob1_send(void *buf,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
-    if (sendreq-&gt;req_send.req_base.req_ompi.req_complete == false) {
<br>
-#if OMPI_ENABLE_PROGRESS_THREADS
<br>
-        if(opal_progress_spin(&amp;sendreq-&gt;req_send.req_base.req_ompi.req_complete)) {
<br>
-            ompi_request_free( (ompi_request_t**)&amp;sendreq );
<br>
-            return OMPI_SUCCESS;
<br>
-        }
<br>
-#endif
<br>
-
<br>
-        /* give up and sleep until completion */
<br>
-        if (opal_using_threads()) {
<br>
-            opal_mutex_lock(&amp;ompi_request_lock);
<br>
-            ompi_request_waiting++;
<br>
-            while (sendreq-&gt;req_send.req_base.req_ompi.req_complete == false)
<br>
-                opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
<br>
-            ompi_request_waiting--;
<br>
-            opal_mutex_unlock(&amp;ompi_request_lock);
<br>
-        } else {
<br>
-#if OMPI_ENABLE_DEBUG &amp;&amp; !OMPI_HAVE_THREAD_SUPPORT
<br>
-            OPAL_THREAD_LOCK(&amp;ompi_request_lock);
<br>
-#endif 
<br>
-            ompi_request_waiting++;
<br>
-            while (sendreq-&gt;req_send.req_base.req_ompi.req_complete == false)
<br>
-                opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
<br>
-            ompi_request_waiting--;
<br>
-#if OMPI_ENABLE_DEBUG &amp;&amp; !OMPI_HAVE_THREAD_SUPPORT
<br>
-            OPAL_THREAD_UNLOCK(&amp;ompi_request_lock);
<br>
-#endif 
<br>
-        }
<br>
-    }
<br>
+    ompi_request_wait_completion(&amp;sendreq-&gt;req_send.req_base.req_ompi);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = sendreq-&gt;req_send.req_base.req_ompi.req_status.MPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_free( (ompi_request_t**)&amp;sendreq );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;}
<br>
-
<br>
diff --git a/ompi/request/req_wait.c b/ompi/request/req_wait.c
<br>
index 0bb4fb3..4751804 100644
<br>
--- a/ompi/request/req_wait.c
<br>
+++ b/ompi/request/req_wait.c
<br>
@@ -31,27 +31,7 @@ int ompi_request_wait(
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_t *req = *req_ptr;
<br>
&nbsp;
<br>
-    if(req-&gt;req_complete == false) {
<br>
-
<br>
-#if OMPI_ENABLE_PROGRESS_THREADS
<br>
-        /* poll for completion */
<br>
-        if(opal_progress_spin(&amp;req-&gt;req_complete))
<br>
-            goto finished;
<br>
-#endif
<br>
-
<br>
-        /* give up and sleep until completion */
<br>
-        OPAL_THREAD_LOCK(&amp;ompi_request_lock);
<br>
-        ompi_request_waiting++;
<br>
-        while (req-&gt;req_complete == false) {
<br>
-            opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
<br>
-        }
<br>
-        ompi_request_waiting--;
<br>
-        OPAL_THREAD_UNLOCK(&amp;ompi_request_lock);
<br>
-    }
<br>
-
<br>
-#if OMPI_ENABLE_PROGRESS_THREADS
<br>
-finished:
<br>
-#endif
<br>
+    ompi_request_wait_completion(req);
<br>
&nbsp;
<br>
&nbsp;#if OPAL_ENABLE_FT == 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_CRCP_REQUEST_COMPLETE(req);
<br>
diff --git a/ompi/request/request.h b/ompi/request/request.h
<br>
index 70f38e1..8dc0920 100644
<br>
--- a/ompi/request/request.h
<br>
+++ b/ompi/request/request.h
<br>
@@ -374,7 +374,22 @@ OMPI_DECLSPEC int ompi_request_wait_some(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int * indices,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_status_public_t * statuses);
<br>
&nbsp;
<br>
+static inline void ompi_request_wait_completion(ompi_request_t *req)
<br>
+{
<br>
+    if(req-&gt;req_complete == false) {
<br>
+#if OMPI_ENABLE_PROGRESS_THREADS
<br>
+        if(opal_progress_spin(&amp;req-&gt;req_complete))
<br>
+            return;
<br>
+#endif
<br>
+        OPAL_THREAD_LOCK(&amp;ompi_request_lock);
<br>
+        ompi_request_waiting++;
<br>
+        while(req-&gt;req_complete == false)
<br>
+            opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
<br>
+        ompi_request_waiting--;
<br>
+        OPAL_THREAD_UNLOCK(&amp;ompi_request_lock);
<br>
+    }
<br>
+}
<br>
+
<br>
&nbsp;END_C_DECLS
<br>
&nbsp;
<br>
&nbsp;#endif
<br>
-
<br>
<pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2444.php">Jeff Squyres: "[OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>Previous message:</strong> <a href="2442.php">Jeff Squyres: "[OMPI devel] RM approval for #1153"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2459.php">Jeff Squyres: "Re: [OMPI devel] putting common request completion waiting code into separate	inline function"</a>
<li><strong>Reply:</strong> <a href="2459.php">Jeff Squyres: "Re: [OMPI devel] putting common request completion waiting code into separate	inline function"</a>
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
