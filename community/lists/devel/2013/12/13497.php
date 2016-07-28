<?
$subject_val = "[OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 15:54:22 2013" -->
<!-- isoreceived="20131219205422" -->
<!-- sent="Thu, 19 Dec 2013 21:54:20 +0100" -->
<!-- isosent="20131219205420" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)" -->
<!-- id="1387486461-8239-2-git-send-email-adrian_at_lisas.de" -->
<!-- inreplyto="1387486461-8239-1-git-send-email-adrian_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 15:54:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13498.php">Adrian Reber: "[OMPI devel] [PATCH v3 2/2] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13496.php">Adrian Reber: "[OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again"</a>
<li><strong>In reply to:</strong> <a href="13496.php">Adrian Reber: "[OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13500.php">Ralph Castain: "Re: [OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13500.php">Ralph Castain: "Re: [OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
From: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
<br>
<p>This patch changes all recv/recv_buffer occurrences in the C/R code
<br>
to recv_nb/recv_buffer_nb.
<br>
The old code is still there but disabled using ifdefs (ENABLE_FT_FIXED).
<br>
The new code compiles but does not work.
<br>
<p>Changes from V1:
<br>
* #ifdef out the code (so it is preserved for later re-design)
<br>
* marked the broken C/R code with ENABLE_FT_FIXED
<br>
<p>Changes from V2:
<br>
* only #ifdef out the code where the behaviour is changed
<br>
&nbsp;&nbsp;(used to be blocking; now non-blocking)
<br>
<p>Signed-off-by: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
<br>
<pre>
---
 ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c            | 41 +++++--------
 orte/mca/errmgr/base/errmgr_base_tool.c         | 16 +----
 orte/mca/rml/ftrm/rml_ftrm.h                    | 27 ++-------
 orte/mca/rml/ftrm/rml_ftrm_component.c          |  2 -
 orte/mca/rml/ftrm/rml_ftrm_module.c             | 78 +++----------------------
 orte/mca/snapc/full/snapc_full_app.c            | 12 ++++
 orte/mca/snapc/full/snapc_full_global.c         | 37 +++---------
 orte/mca/snapc/full/snapc_full_local.c          | 36 +++---------
 orte/mca/sstore/central/sstore_central_app.c    |  6 ++
 orte/mca/sstore/central/sstore_central_global.c | 17 +-----
 orte/mca/sstore/central/sstore_central_local.c  | 17 +-----
 orte/mca/sstore/stage/sstore_stage_app.c        |  5 ++
 orte/mca/sstore/stage/sstore_stage_global.c     | 17 +-----
 orte/mca/sstore/stage/sstore_stage_local.c      | 17 +-----
 orte/tools/orte-checkpoint/orte-checkpoint.c    | 16 +----
 orte/tools/orte-migrate/orte-migrate.c          | 16 +----
 16 files changed, 87 insertions(+), 273 deletions(-)
diff --git a/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c b/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
index 5d4005f..05cd598 100644
--- a/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
+++ b/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
@@ -4717,7 +4717,6 @@ static int ft_event_post_drain_acks(void)
     ompi_crcp_bkmrk_pml_drain_message_ack_ref_t * drain_msg_ack = NULL;
     opal_list_item_t* item = NULL;
     size_t req_size;
-    int ret;
 
     req_size  = opal_list_get_size(&amp;drained_msg_ack_list);
     if(req_size &lt;= 0) {
@@ -4739,17 +4738,8 @@ static int ft_event_post_drain_acks(void)
         drain_msg_ack = (ompi_crcp_bkmrk_pml_drain_message_ack_ref_t*)item;
 
         /* Post the receive */
-        if( OMPI_SUCCESS != (ret = ompi_rte_recv_buffer_nb( &amp;drain_msg_ack-&gt;peer,
-                                                            OMPI_CRCP_COORD_BOOKMARK_TAG,
-                                                            0,
-                                                            drain_message_ack_cbfunc,
-                                                            NULL) ) ) {
-            opal_output(mca_crcp_bkmrk_component.super.output_handle,
-                        &quot;crcp:bkmrk: %s &lt;-- %s: Failed to post a RML receive to the peer\n&quot;,
-                        OMPI_NAME_PRINT(OMPI_PROC_MY_NAME),
-                        OMPI_NAME_PRINT(&amp;(drain_msg_ack-&gt;peer)));
-            return ret;
-        }
+        ompi_rte_recv_buffer_nb(&amp;drain_msg_ack-&gt;peer, OMPI_CRCP_COORD_BOOKMARK_TAG,
+                                0, drain_message_ack_cbfunc, NULL);
     }
 
     return OMPI_SUCCESS;
@@ -5322,26 +5312,14 @@ static int send_bookmarks(int peer_idx)
 static int recv_bookmarks(int peer_idx)
 {
     ompi_process_name_t peer_name;
-    int exit_status = OMPI_SUCCESS;
-    int ret;
 
     START_TIMER(CRCP_TIMER_CKPT_EX_PEER_R);
 
     peer_name.jobid  = OMPI_PROC_MY_NAME-&gt;jobid;
     peer_name.vpid   = peer_idx;
 
-    if ( 0 &gt; (ret = ompi_rte_recv_buffer_nb(&amp;peer_name,
-                                            OMPI_CRCP_COORD_BOOKMARK_TAG,
-                                            0,
-                                            recv_bookmarks_cbfunc,
-                                            NULL) ) ) {
-        opal_output(mca_crcp_bkmrk_component.super.output_handle,
-                    &quot;crcp:bkmrk: recv_bookmarks: Failed to post receive bookmark from peer %s: Return %d\n&quot;,
-                    OMPI_NAME_PRINT(&amp;peer_name),
-                    ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+    ompi_rte_recv_buffer_nb(&amp;peer_name, OMPI_CRCP_COORD_BOOKMARK_TAG,
+                            0, recv_bookmarks_cbfunc, NULL);
 
     ++total_recv_bookmarks;
 
@@ -5350,7 +5328,7 @@ static int recv_bookmarks(int peer_idx)
     /* JJH Doesn't make much sense to print this. The real bottleneck is always the send_bookmarks() */
     /*DISPLAY_INDV_TIMER(CRCP_TIMER_CKPT_EX_PEER_R, peer_idx, 1);*/
 
-    return exit_status;
+    return OMPI_SUCCESS;
 }
 
 static void recv_bookmarks_cbfunc(int status,
@@ -5616,6 +5594,8 @@ static int do_send_msg_detail(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
     /*
      * Recv the ACK msg
      */
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if ( 0 &gt; (ret = ompi_rte_recv_buffer(&amp;peer_ref-&gt;proc_name, buffer,
                                          OMPI_CRCP_COORD_BOOKMARK_TAG, 0) ) ) {
         opal_output(mca_crcp_bkmrk_component.super.output_handle,
@@ -5626,6 +5606,9 @@ static int do_send_msg_detail(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
         exit_status = ret;
         goto cleanup;
     }
+#endif /* ENABLE_FT_FIXED */
+    ompi_rte_recv_buffer_nb(&amp;peer_ref-&gt;proc_name, OMPI_CRCP_COORD_BOOKMARK_TAG, 0,
+                            orte_rml_recv_callback, NULL);
 
     UNPACK_BUFFER(buffer, recv_response, 1, OPAL_UINT32,
                   &quot;crcp:bkmrk: send_msg_details: Failed to unpack the ACK from peer buffer.&quot;);
@@ -5790,6 +5773,8 @@ static int do_recv_msg_detail(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
     /*
      * Recv the msg
      */
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if ( 0 &gt; (ret = ompi_rte_recv_buffer(&amp;peer_ref-&gt;proc_name, buffer, OMPI_CRCP_COORD_BOOKMARK_TAG, 0) ) ) {
         opal_output(mca_crcp_bkmrk_component.super.output_handle,
                     &quot;crcp:bkmrk: do_recv_msg_detail: %s &lt;-- %s Failed to receive buffer from peer. Return %d\n&quot;,
@@ -5799,6 +5784,8 @@ static int do_recv_msg_detail(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
         exit_status = ret;
         goto cleanup;
     }
+#endif /* ENABLE_FT_FIXED */
+    ompi_rte_recv_buffer_nb(&amp;peer_ref-&gt;proc_name, OMPI_CRCP_COORD_BOOKMARK_TAG, 0, orte_rml_recv_callback, NULL);
 
     /* Pull out the communicator ID */
     UNPACK_BUFFER(buffer, (*comm_id), 1, OPAL_UINT32,
diff --git a/orte/mca/errmgr/base/errmgr_base_tool.c b/orte/mca/errmgr/base/errmgr_base_tool.c
index 20d76e5..0b7890a 100644
--- a/orte/mca/errmgr/base/errmgr_base_tool.c
+++ b/orte/mca/errmgr/base/errmgr_base_tool.c
@@ -248,8 +248,6 @@ int orte_errmgr_base_migrate_update(int status)
  ********************/
 static int errmgr_base_tool_start_cmdline_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-
     if (errmgr_cmdline_recv_issued &amp;&amp; ORTE_PROC_IS_HNP) {
         return ORTE_SUCCESS;
     }
@@ -262,20 +260,12 @@ static int errmgr_base_tool_start_cmdline_listener(void)
      */
     errmgr_cmdline_sender.jobid = ORTE_JOBID_INVALID;
     errmgr_cmdline_sender.vpid  = ORTE_VPID_INVALID;
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
-                                                       ORTE_RML_TAG_MIGRATE,
-                                                       0,
-                                                       errmgr_base_tool_cmdline_recv,
-                                                       NULL))) {
-        ORTE_ERROR_LOG(ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_MIGRATE,
+                            0, errmgr_base_tool_cmdline_recv, NULL);
 
     errmgr_cmdline_recv_issued = true;
 
- cleanup:
-    return exit_status;
+    return ORTE_SUCCESS;
 }
 
 
diff --git a/orte/mca/rml/ftrm/rml_ftrm.h b/orte/mca/rml/ftrm/rml_ftrm.h
index a1bd48a..055c891 100644
--- a/orte/mca/rml/ftrm/rml_ftrm.h
+++ b/orte/mca/rml/ftrm/rml_ftrm.h
@@ -109,39 +109,20 @@ BEGIN_C_DECLS
                                      void* cbdata);
 
     /*
-     * Recv
-     */
-    int orte_rml_ftrm_recv(orte_process_name_t* peer,
-                           struct iovec *msg,
-                           int count,
-                           orte_rml_tag_t tag,
-                           int flags);
-
-    /*
      * Recv Non-blocking
      */
-    int orte_rml_ftrm_recv_nb(orte_process_name_t* peer,
-                              struct iovec* msg,
-                              int count,
+    void orte_rml_ftrm_recv_nb(orte_process_name_t* peer,
                               orte_rml_tag_t tag,
-                              int flags,
+                              bool persistent,
                               orte_rml_callback_fn_t cbfunc,
                               void* cbdata);
 
     /*
-     * Recv Buffer
-     */
-    int orte_rml_ftrm_recv_buffer(orte_process_name_t* peer,
-                                  opal_buffer_t *buf,
-                                  orte_rml_tag_t tag,
-                                  int flags);
-
-    /*
      * Recv Buffer Non-blocking
      */
-    int orte_rml_ftrm_recv_buffer_nb(orte_process_name_t* peer,
+    void orte_rml_ftrm_recv_buffer_nb(orte_process_name_t* peer,
                                      orte_rml_tag_t tag,
-                                     int flags,
+                                     bool persistent,
                                      orte_rml_buffer_callback_fn_t cbfunc,
                                      void* cbdata);
     
diff --git a/orte/mca/rml/ftrm/rml_ftrm_component.c b/orte/mca/rml/ftrm/rml_ftrm_component.c
index 6923c44..0ffa79c 100644
--- a/orte/mca/rml/ftrm/rml_ftrm_component.c
+++ b/orte/mca/rml/ftrm/rml_ftrm_component.c
@@ -73,9 +73,7 @@ orte_rml_module_t orte_rml_ftrm_module = {
     orte_rml_ftrm_send_buffer,
     orte_rml_ftrm_send_buffer_nb,
 
-    orte_rml_ftrm_recv,
     orte_rml_ftrm_recv_nb,
-    orte_rml_ftrm_recv_buffer,
     orte_rml_ftrm_recv_buffer_nb,
     orte_rml_ftrm_recv_cancel,
 
diff --git a/orte/mca/rml/ftrm/rml_ftrm_module.c b/orte/mca/rml/ftrm/rml_ftrm_module.c
index 85b288e..4ba6f2d 100644
--- a/orte/mca/rml/ftrm/rml_ftrm_module.c
+++ b/orte/mca/rml/ftrm/rml_ftrm_module.c
@@ -224,101 +224,41 @@ int orte_rml_ftrm_send_buffer_nb(orte_process_name_t* peer,
 }
 
 
-/*
- * Recv
- */
-int orte_rml_ftrm_recv(orte_process_name_t* peer,
-                       struct iovec *msg,
-                       int count,
-                       orte_rml_tag_t tag,
-                       int flags)
-{
-    int ret;
-
-    opal_output_verbose(20, rml_ftrm_output_handle,
-                        &quot;orte_rml_ftrm: recv(%s, %d, %d, %d )&quot;,
-                        ORTE_NAME_PRINT(peer), count, tag, flags);
-
-    if( NULL != orte_rml_ftrm_wrapped_module.recv ) {
-        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.recv(peer, msg, count, tag, flags) ) ) {
-            return ret;
-        }
-    }
-
-    return ORTE_SUCCESS;
-}
 
 /*
  * Recv Non-blocking
  */
-int orte_rml_ftrm_recv_nb(orte_process_name_t* peer,
-                          struct iovec* msg,
-                          int count,
+void orte_rml_ftrm_recv_nb(orte_process_name_t* peer,
                           orte_rml_tag_t tag,
-                          int flags,
+			  bool persistent,
                           orte_rml_callback_fn_t cbfunc,
                           void* cbdata)
 {
-    int ret;
-
     opal_output_verbose(20, rml_ftrm_output_handle,
-                        &quot;orte_rml_ftrm: recv_nb(%s, %d, %d, %d )&quot;,
-                        ORTE_NAME_PRINT(peer), count, tag, flags);
+                        &quot;orte_rml_ftrm: recv_nb(%s, %d, %d )&quot;,
+                        ORTE_NAME_PRINT(peer), tag, persistent);
 
     if( NULL != orte_rml_ftrm_wrapped_module.recv_nb ) {
-        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.recv_nb(peer, msg, count, tag, flags, cbfunc, cbdata) ) ) {
-            return ret;
-        }
+        orte_rml_ftrm_wrapped_module.recv_nb(peer, tag, persistent, cbfunc, cbdata);
     }
-
-    return ORTE_SUCCESS;
-}
-
-/*
- * Recv Buffer
- */
-int orte_rml_ftrm_recv_buffer(orte_process_name_t* peer,
-                              opal_buffer_t *buf,
-                              orte_rml_tag_t tag,
-                              int flags)
-{
-    int ret;
-
-    opal_output_verbose(20, rml_ftrm_output_handle,
-                        &quot;orte_rml_ftrm: recv_buffer(%s, %d )&quot;,
-                        ORTE_NAME_PRINT(peer), tag);
-
-    if( NULL != orte_rml_ftrm_wrapped_module.recv_buffer ) {
-        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.recv_buffer(peer, buf, tag, flags) ) ) {
-            return ret;
-        }
-    }
-
-    return ORTE_SUCCESS;
 }
 
 /*
  * Recv Buffer Non-blocking
  */
-int orte_rml_ftrm_recv_buffer_nb(orte_process_name_t* peer,
+void orte_rml_ftrm_recv_buffer_nb(orte_process_name_t* peer,
                                  orte_rml_tag_t tag,
-                                 int flags,
+                                 bool persistent,
                                  orte_rml_buffer_callback_fn_t cbfunc,
                                  void* cbdata)
 {
-    int ret;
-
     opal_output_verbose(20, rml_ftrm_output_handle,
                         &quot;orte_rml_ftrm: recv_buffer_nb(%s, %d, %d)&quot;,
-                        ORTE_NAME_PRINT(peer), tag, flags);
+                        ORTE_NAME_PRINT(peer), tag, persistent);
 
     if( NULL != orte_rml_ftrm_wrapped_module.recv_buffer_nb ) {
-        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.recv_buffer_nb(peer, tag, flags, cbfunc, cbdata) ) ) {
-            return ret;
-        }
+        orte_rml_ftrm_wrapped_module.recv_buffer_nb(peer, tag, persistent, cbfunc, cbdata);
     }
-
-    return ORTE_SUCCESS;
 }
 
 /*
diff --git a/orte/mca/snapc/full/snapc_full_app.c b/orte/mca/snapc/full/snapc_full_app.c
index c7438f1..862c9be 100644
--- a/orte/mca/snapc/full/snapc_full_app.c
+++ b/orte/mca/snapc/full/snapc_full_app.c
@@ -289,12 +289,16 @@ int app_coord_finalize()
          * need to wait until the checkpoint is finished before finishing.
          */
         OBJ_CONSTRUCT(&amp;buffer, opal_buffer_t);
+#ifdef ENABLE_FT_FIXED
+        /* This is the old, now broken code */
         if (0 &gt; (ret = orte_rml.recv_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
             ORTE_ERROR_LOG(ret);
             exit_status = ret;
             OBJ_DESTRUCT(&amp;buffer);
             goto cleanup;
         }
+#endif /* ENABLE_FT_FIXED */
+        orte_rml.recv_buffer_nb(ORTE_PROC_MY_HNP, ORTE_RML_TAG_SNAPC_FULL, 0, snapc_full_app_callback_recv, NULL);
 
         count = 1;
         if (ORTE_SUCCESS != (ret = opal_dss.unpack(&amp;buffer, &amp;command, &amp;count, ORTE_SNAPC_FULL_CMD))) {
@@ -1534,12 +1538,16 @@ int app_coord_request_op(orte_snapc_base_request_op_t *datum)
             /*
              * Wait for a response regarding completion
              */
+#ifdef ENABLE_FT_FIXED
+            /* This is the old, now broken code */
             if (0 &gt; (ret = orte_rml.recv_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
                 ORTE_ERROR_LOG(ret);
                 exit_status = ret;
                 OBJ_DESTRUCT(&amp;buffer);
                 goto cleanup;
             }
+#endif /* ENABLE_FT_FIXED */
+            orte_rml.recv_buffer_nb(ORTE_PROC_MY_HNP, ORTE_RML_TAG_SNAPC_FULL, 0, snapc_full_app_callback_recv, NULL);
 
             count = 1;
             if (ORTE_SUCCESS != (ret = opal_dss.unpack(&amp;buffer, &amp;command, &amp;count, ORTE_SNAPC_FULL_CMD))) {
@@ -1604,12 +1612,16 @@ int app_coord_request_op(orte_snapc_base_request_op_t *datum)
             /*
              * Wait for a response regarding completion
              */
+#ifdef ENABLE_FT_FIXED
+            /* This is the old, now broken code */
             if (0 &gt; (ret = orte_rml.recv_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
                 ORTE_ERROR_LOG(ret);
                 exit_status = ret;
                 OBJ_DESTRUCT(&amp;buffer);
                 goto cleanup;
             }
+#endif /* ENABLE_FT_FIXED */
+            orte_rml.recv_buffer_nb(ORTE_PROC_MY_HNP, ORTE_RML_TAG_SNAPC_FULL, 0, snapc_full_app_callback_recv, NULL);
 
             count = 1;
             if (ORTE_SUCCESS != (ret = opal_dss.unpack(&amp;buffer, &amp;command, &amp;count, ORTE_SNAPC_FULL_CMD))) {
diff --git a/orte/mca/snapc/full/snapc_full_global.c b/orte/mca/snapc/full/snapc_full_global.c
index 9f6da34..9787591 100644
--- a/orte/mca/snapc/full/snapc_full_global.c
+++ b/orte/mca/snapc/full/snapc_full_global.c
@@ -875,32 +875,22 @@ static int global_refresh_job_structs(void)
  *****************/
 static int snapc_full_global_start_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-
     if (snapc_orted_recv_issued &amp;&amp; ORTE_PROC_IS_HNP) {
         return ORTE_SUCCESS;
     }
-    
+
     OPAL_OUTPUT_VERBOSE((5, mca_snapc_full_component.super.output_handle,
                          &quot;Global) Startup Coordinator Channel&quot;));
 
     /*
      * Coordinator command listener
      */
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
-                                                       ORTE_RML_TAG_SNAPC_FULL,
-                                                       ORTE_RML_PERSISTENT,
-                                                       snapc_full_global_orted_recv,
-                                                       NULL))) {
-        ORTE_ERROR_LOG(ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SNAPC_FULL,
+                            ORTE_RML_PERSISTENT, snapc_full_global_orted_recv, NULL);
 
     snapc_orted_recv_issued = true;
-    
- cleanup:
-    return exit_status;
+
+    return ORTE_SUCCESS;
 }
 
 static int snapc_full_global_stop_listener(void)
@@ -920,8 +910,6 @@ static int snapc_full_global_stop_listener(void)
 
 static int snapc_full_global_start_cmdline_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-
     if (snapc_cmdline_recv_issued &amp;&amp; ORTE_PROC_IS_HNP) {
         return ORTE_SUCCESS;
     }
@@ -932,20 +920,11 @@ static int snapc_full_global_start_cmdline_listener(void)
     /*
      * Coordinator command listener
      */
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
-                                                       ORTE_RML_TAG_CKPT,
-                                                       0,
-                                                       snapc_full_global_cmdline_recv,
-                                                       NULL))) {
-        ORTE_ERROR_LOG(ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_CKPT, 0,
+                            snapc_full_global_cmdline_recv, NULL);
 
     snapc_cmdline_recv_issued = true;
-
- cleanup:
-    return exit_status;
+    return ORTE_SUCCESS;
 }
 
 static int snapc_full_global_stop_cmdline_listener(void)
diff --git a/orte/mca/snapc/full/snapc_full_local.c b/orte/mca/snapc/full/snapc_full_local.c
index b13fce9..33215ac 100644
--- a/orte/mca/snapc/full/snapc_full_local.c
+++ b/orte/mca/snapc/full/snapc_full_local.c
@@ -341,8 +341,6 @@ int local_coord_release_job(orte_jobid_t jobid)
  ******************/
 static int snapc_full_local_start_hnp_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-
     /*
      * Global Coordinator: Do not register a Local listener
      */
@@ -360,20 +358,12 @@ static int snapc_full_local_start_hnp_listener(void)
     /*
      * Coordinator command listener
      */
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
-                                                       ORTE_RML_TAG_SNAPC_FULL,
-                                                       ORTE_RML_PERSISTENT,
-                                                       snapc_full_local_hnp_cmd_recv,
-                                                       NULL))) {
-        ORTE_ERROR_LOG(ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SNAPC_FULL,
+                            ORTE_RML_PERSISTENT, snapc_full_local_hnp_cmd_recv, NULL);
 
     snapc_local_hnp_recv_issued = true;
-    
- cleanup:
-    return exit_status;
+
+    return ORTE_SUCCESS;
 }
 
 static int snapc_full_local_stop_hnp_listener(void)
@@ -400,8 +390,6 @@ static int snapc_full_local_stop_hnp_listener(void)
 
 static int snapc_full_local_start_app_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-
     if (snapc_local_app_recv_issued) {
         return ORTE_SUCCESS;
     }
@@ -412,20 +400,12 @@ static int snapc_full_local_start_app_listener(void)
     /*
      * Coordinator command listener
      */
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
-                                                       ORTE_RML_TAG_SNAPC,
-                                                       ORTE_RML_PERSISTENT,
-                                                       snapc_full_local_app_cmd_recv,
-                                                       NULL))) {
-        ORTE_ERROR_LOG(ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SNAPC,
+                            ORTE_RML_PERSISTENT, snapc_full_local_app_cmd_recv,
+                            NULL);
 
     snapc_local_app_recv_issued = true;
-
- cleanup:
-    return exit_status;
+    return ORTE_SUCCESS;
 }
 
 static int snapc_full_local_stop_app_listener(void)
diff --git a/orte/mca/sstore/central/sstore_central_app.c b/orte/mca/sstore/central/sstore_central_app.c
index e717065..a7d6689 100644
--- a/orte/mca/sstore/central/sstore_central_app.c
+++ b/orte/mca/sstore/central/sstore_central_app.c
@@ -477,6 +477,8 @@ static int pull_handle_info(orte_sstore_central_app_snapshot_info_t *handle_info
                          &quot;sstore:central:(app): pull() from %s -&gt; %s&quot;,
                          ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
                          ORTE_NAME_PRINT(ORTE_PROC_MY_DAEMON)));
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if( ORTE_SUCCESS != (ret = orte_rml.recv_buffer(ORTE_PROC_MY_DAEMON,
                                                     &amp;buffer,
                                                     ORTE_RML_TAG_SSTORE_INTERNAL,
@@ -485,6 +487,10 @@ static int pull_handle_info(orte_sstore_central_app_snapshot_info_t *handle_info
         exit_status = ret;
         goto cleanup;
     }
+#endif /* ENABLE_FT_FIXED */
+
+    orte_rml.recv_buffer_nb(ORTE_PROC_MY_DAEMON, ORTE_RML_TAG_SSTORE_INTERNAL,
+                            0, orte_rml_recv_callback, NULL);
 
     count = 1;
     if (ORTE_SUCCESS != (ret = opal_dss.unpack(&amp;buffer, &amp;command, &amp;count, ORTE_SSTORE_CENTRAL_CMD))) {
diff --git a/orte/mca/sstore/central/sstore_central_global.c b/orte/mca/sstore/central/sstore_central_global.c
index 935b6fe..698910b 100644
--- a/orte/mca/sstore/central/sstore_central_global.c
+++ b/orte/mca/sstore/central/sstore_central_global.c
@@ -800,26 +800,15 @@ static orte_sstore_central_global_snapshot_info_t *find_handle_info_from_ref(cha
 
 static int sstore_central_global_start_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-
     if( is_global_listener_active ) {
         return ORTE_SUCCESS;
     }
 
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
-                                                       ORTE_RML_TAG_SSTORE_INTERNAL,
-                                                       ORTE_RML_PERSISTENT,
-                                                       sstore_central_global_recv,
-                                                       NULL))) {
-        ORTE_ERROR_LOG(ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SSTORE_INTERNAL,
+                            ORTE_RML_PERSISTENT, sstore_central_global_recv, NULL);
 
     is_global_listener_active = true;
-    
- cleanup:
-    return exit_status;
+    return ORTE_SUCCESS;
 }
 
 static int sstore_central_global_stop_listener(void)
diff --git a/orte/mca/sstore/central/sstore_central_local.c b/orte/mca/sstore/central/sstore_central_local.c
index 35ef518..6df04ef 100644
--- a/orte/mca/sstore/central/sstore_central_local.c
+++ b/orte/mca/sstore/central/sstore_central_local.c
@@ -619,26 +619,15 @@ static orte_sstore_central_local_app_snapshot_info_t *find_app_handle_info(orte_
 
 static int sstore_central_local_start_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-
     if( is_global_listener_active ) {
         return ORTE_SUCCESS;
     }
 
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
-                                                       ORTE_RML_TAG_SSTORE_INTERNAL,
-                                                       ORTE_RML_PERSISTENT,
-                                                       orte_sstore_central_local_recv,
-                                                       NULL))) {
-        ORTE_ERROR_LOG(ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SSTORE_INTERNAL,
+                            ORTE_RML_PERSISTENT, orte_sstore_central_local_recv, NULL);
 
     is_global_listener_active = true;
-    
- cleanup:
-    return exit_status;
+    return ORTE_SUCCESS;
 }
 
 static int sstore_central_local_stop_listener(void)
diff --git a/orte/mca/sstore/stage/sstore_stage_app.c b/orte/mca/sstore/stage/sstore_stage_app.c
index 10d38ad..88b6484 100644
--- a/orte/mca/sstore/stage/sstore_stage_app.c
+++ b/orte/mca/sstore/stage/sstore_stage_app.c
@@ -466,6 +466,8 @@ static int pull_handle_info(orte_sstore_stage_app_snapshot_info_t *handle_info )
                          &quot;sstore:stage:(app): pull() from %s -&gt; %s&quot;,
                          ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
                          ORTE_NAME_PRINT(ORTE_PROC_MY_DAEMON)));
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if( ORTE_SUCCESS != (ret = orte_rml.recv_buffer(ORTE_PROC_MY_DAEMON,
                                                     &amp;buffer,
                                                     ORTE_RML_TAG_SSTORE_INTERNAL,
@@ -475,6 +477,9 @@ static int pull_handle_info(orte_sstore_stage_app_snapshot_info_t *handle_info )
         goto cleanup;
     }
 
+#endif /* ENABLE_FT_FIXED */
+    orte_rml.recv_buffer_nb(ORTE_PROC_MY_DAEMON, ORTE_RML_TAG_SSTORE_INTERNAL,
+                            0, orte_rml_recv_callback, NULL);
     count = 1;
     if (ORTE_SUCCESS != (ret = opal_dss.unpack(&amp;buffer, &amp;command, &amp;count, ORTE_SSTORE_STAGE_CMD))) {
         ORTE_ERROR_LOG(ret);
diff --git a/orte/mca/sstore/stage/sstore_stage_global.c b/orte/mca/sstore/stage/sstore_stage_global.c
index 1c8847a..5af66d0 100644
--- a/orte/mca/sstore/stage/sstore_stage_global.c
+++ b/orte/mca/sstore/stage/sstore_stage_global.c
@@ -992,26 +992,15 @@ static orte_sstore_stage_global_snapshot_info_t *find_handle_info(orte_sstore_ba
 
 static int sstore_stage_global_start_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-
     if( is_global_listener_active ) {
         return ORTE_SUCCESS;
     }
 
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
-                                                       ORTE_RML_TAG_SSTORE_INTERNAL,
-                                                       ORTE_RML_PERSISTENT,
-                                                       sstore_stage_global_recv,
-                                                       NULL))) {
-        ORTE_ERROR_LOG(ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SSTORE_INTERNAL,
+                            ORTE_RML_PERSISTENT, sstore_stage_global_recv, NULL);
 
     is_global_listener_active = true;
-    
- cleanup:
-    return exit_status;
+    return ORTE_SUCCESS;
 }
 
 static int sstore_stage_global_stop_listener(void)
diff --git a/orte/mca/sstore/stage/sstore_stage_local.c b/orte/mca/sstore/stage/sstore_stage_local.c
index 792c1a2..95d89a8 100644
--- a/orte/mca/sstore/stage/sstore_stage_local.c
+++ b/orte/mca/sstore/stage/sstore_stage_local.c
@@ -1043,26 +1043,15 @@ static orte_sstore_stage_local_app_snapshot_info_t *find_app_handle_info(orte_ss
 
 static int sstore_stage_local_start_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-
     if( is_global_listener_active ) {
         return ORTE_SUCCESS;
     }
 
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
-                                                       ORTE_RML_TAG_SSTORE_INTERNAL,
-                                                       ORTE_RML_PERSISTENT,
-                                                       sstore_stage_local_recv,
-                                                       NULL))) {
-        ORTE_ERROR_LOG(ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SSTORE_INTERNAL,
+                            ORTE_RML_PERSISTENT, sstore_stage_local_recv, NULL);
 
     is_global_listener_active = true;
-    
- cleanup:
-    return exit_status;
+    return ORTE_SUCCESS;
 }
 
 static int sstore_stage_local_stop_listener(void)
diff --git a/orte/tools/orte-checkpoint/orte-checkpoint.c b/orte/tools/orte-checkpoint/orte-checkpoint.c
index caa5949..e0f7b01 100644
--- a/orte/tools/orte-checkpoint/orte-checkpoint.c
+++ b/orte/tools/orte-checkpoint/orte-checkpoint.c
@@ -652,21 +652,11 @@ static int ckpt_finalize(void) {
 
 static int start_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
-                                                       ORTE_RML_TAG_CKPT,
-                                                       ORTE_RML_PERSISTENT,
-                                                       hnp_receiver,
-                                                       NULL))) {
-        exit_status = ret;
-        goto cleanup;
-    }
+    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_CKPT,
+                            ORTE_RML_PERSISTENT, hnp_receiver, NULL);
 
     listener_started = true;
-
- cleanup:
-    return exit_status;
+    return ORTE_SUCCESS;
 }
 
 static int stop_listener(void)
diff --git a/orte/tools/orte-migrate/orte-migrate.c b/orte/tools/orte-migrate/orte-migrate.c
index 7ba2074..b606e41 100644
--- a/orte/tools/orte-migrate/orte-migrate.c
+++ b/orte/tools/orte-migrate/orte-migrate.c
@@ -513,21 +513,11 @@ static int tool_finalize(void) {
 
 static int start_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
-                                                       ORTE_RML_TAG_MIGRATE,
-                                                       ORTE_RML_PERSISTENT,
-                                                       hnp_receiver,
-                                                       NULL))) {
-        exit_status = ret;
-        goto cleanup;
-    }
+    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_MIGRATE,
+                            ORTE_RML_PERSISTENT, hnp_receiver, NULL);
 
     listener_started = true;
-
- cleanup:
-    return exit_status;
+    return ORTE_SUCCESS;
 }
 
 static int stop_listener(void)
-- 
1.8.4.2
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13498.php">Adrian Reber: "[OMPI devel] [PATCH v3 2/2] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13496.php">Adrian Reber: "[OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again"</a>
<li><strong>In reply to:</strong> <a href="13496.php">Adrian Reber: "[OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13500.php">Ralph Castain: "Re: [OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13500.php">Ralph Castain: "Re: [OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
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
