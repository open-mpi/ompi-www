<?
$subject_val = "[OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 09:59:25 2013" -->
<!-- isoreceived="20131125145925" -->
<!-- sent="Mon, 25 Nov 2013 15:59:22 +0100" -->
<!-- isosent="20131125145922" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)" -->
<!-- id="1385391563-29584-4-git-send-email-adrian_at_lisas.de" -->
<!-- inreplyto="1385391563-29584-1-git-send-email-adrian_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-25 09:59:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13332.php">Adrian Reber: "[OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Previous message:</strong> <a href="13330.php">Adrian Reber: "[OMPI devel] [PATCH 0/4] Trying to get the C/R code to compile again"</a>
<li><strong>In reply to:</strong> <a href="13330.php">Adrian Reber: "[OMPI devel] [PATCH 0/4] Trying to get the C/R code to compile again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13369.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile	again. (recv_*_nb)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13369.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile	again. (recv_*_nb)"</a>
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
<p>Signed-off-by: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
<br>
<pre>
---
 ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c            | 49 +++-------------
 orte/mca/errmgr/base/errmgr_base_tool.c         | 12 +---
 orte/mca/rml/ftrm/rml_ftrm.h                    | 27 ++-------
 orte/mca/rml/ftrm/rml_ftrm_component.c          |  2 -
 orte/mca/rml/ftrm/rml_ftrm_module.c             | 78 +++----------------------
 orte/mca/snapc/full/snapc_full_app.c            | 21 +------
 orte/mca/snapc/full/snapc_full_global.c         | 37 +++---------
 orte/mca/snapc/full/snapc_full_local.c          | 36 +++---------
 orte/mca/sstore/central/sstore_central_app.c    | 11 +---
 orte/mca/sstore/central/sstore_central_global.c | 17 +-----
 orte/mca/sstore/central/sstore_central_local.c  | 17 +-----
 orte/mca/sstore/stage/sstore_stage_app.c        | 10 +---
 orte/mca/sstore/stage/sstore_stage_global.c     | 17 +-----
 orte/mca/sstore/stage/sstore_stage_local.c      | 17 +-----
 orte/tools/orte-checkpoint/orte-checkpoint.c    | 16 +----
 orte/tools/orte-migrate/orte-migrate.c          | 16 +----
 16 files changed, 64 insertions(+), 319 deletions(-)
diff --git a/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c b/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
index 62f1084..9bac506 100644
--- a/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
+++ b/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
@@ -4739,17 +4739,8 @@ static int ft_event_post_drain_acks(void)
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
@@ -5330,18 +5321,8 @@ static int recv_bookmarks(int peer_idx)
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
+   ompi_rte_recv_buffer_nb(&amp;peer_name, OMPI_CRCP_COORD_BOOKMARK_TAG,
+                           0, recv_bookmarks_cbfunc, NULL);
 
     ++total_recv_bookmarks;
 
@@ -5616,16 +5597,8 @@ static int do_send_msg_detail(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
     /*
      * Recv the ACK msg
      */
-    if ( 0 &gt; (ret = ompi_rte_recv_buffer(&amp;peer_ref-&gt;proc_name, buffer,
-                                         OMPI_CRCP_COORD_BOOKMARK_TAG, 0) ) ) {
-        opal_output(mca_crcp_bkmrk_component.super.output_handle,
-                    &quot;crcp:bkmrk: do_send_msg_detail: %s --&gt; %s Failed to receive ACK buffer from peer. Return %d\n&quot;,
-                    OMPI_NAME_PRINT(OMPI_PROC_MY_NAME),
-                    OMPI_NAME_PRINT(&amp;(peer_ref-&gt;proc_name)),
-                    ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+    ompi_rte_recv_buffer_nb(&amp;peer_ref-&gt;proc_name, OMPI_CRCP_COORD_BOOKMARK_TAG, 0,
+                            orte_rml_recv_callback, NULL);
 
     UNPACK_BUFFER(buffer, recv_response, 1, OPAL_UINT32,
                   &quot;crcp:bkmrk: send_msg_details: Failed to unpack the ACK from peer buffer.&quot;);
@@ -5790,15 +5763,7 @@ static int do_recv_msg_detail(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
     /*
      * Recv the msg
      */
-    if ( 0 &gt; (ret = ompi_rte_recv_buffer(&amp;peer_ref-&gt;proc_name, buffer, OMPI_CRCP_COORD_BOOKMARK_TAG, 0) ) ) {
-        opal_output(mca_crcp_bkmrk_component.super.output_handle,
-                    &quot;crcp:bkmrk: do_recv_msg_detail: %s &lt;-- %s Failed to receive buffer from peer. Return %d\n&quot;,
-                    OMPI_NAME_PRINT(OMPI_PROC_MY_NAME),
-                    OMPI_NAME_PRINT(&amp;(peer_ref-&gt;proc_name)),
-                    ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+    ompi_rte_recv_buffer_nb(&amp;peer_ref-&gt;proc_name, OMPI_CRCP_COORD_BOOKMARK_TAG, 0, orte_rml_recv_callback, NULL);
 
     /* Pull out the communicator ID */
     UNPACK_BUFFER(buffer, (*comm_id), 1, OPAL_UINT32,
diff --git a/orte/mca/errmgr/base/errmgr_base_tool.c b/orte/mca/errmgr/base/errmgr_base_tool.c
index dc8e558..8ef69ff 100644
--- a/orte/mca/errmgr/base/errmgr_base_tool.c
+++ b/orte/mca/errmgr/base/errmgr_base_tool.c
@@ -262,19 +262,11 @@ static int errmgr_base_tool_start_cmdline_listener(void)
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
     return exit_status;
 }
 
diff --git a/orte/mca/rml/ftrm/rml_ftrm.h b/orte/mca/rml/ftrm/rml_ftrm.h
index 1fd9b12..98c9968 100644
--- a/orte/mca/rml/ftrm/rml_ftrm.h
+++ b/orte/mca/rml/ftrm/rml_ftrm.h
@@ -90,39 +90,20 @@ BEGIN_C_DECLS
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
index 5ee1790..7cd5a69 100644
--- a/orte/mca/rml/ftrm/rml_ftrm_component.c
+++ b/orte/mca/rml/ftrm/rml_ftrm_component.c
@@ -71,9 +71,7 @@ orte_rml_module_t orte_rml_ftrm_module = {
     orte_rml_ftrm_send_nb,
     orte_rml_ftrm_send_buffer_nb,
 
-    orte_rml_ftrm_recv,
     orte_rml_ftrm_recv_nb,
-    orte_rml_ftrm_recv_buffer,
     orte_rml_ftrm_recv_buffer_nb,
     orte_rml_ftrm_recv_cancel,
 
diff --git a/orte/mca/rml/ftrm/rml_ftrm_module.c b/orte/mca/rml/ftrm/rml_ftrm_module.c
index 84c365e..bf06efa 100644
--- a/orte/mca/rml/ftrm/rml_ftrm_module.c
+++ b/orte/mca/rml/ftrm/rml_ftrm_module.c
@@ -175,101 +175,41 @@ int orte_rml_ftrm_send_buffer_nb(orte_process_name_t* peer,
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
-    }
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
+        orte_rml_ftrm_wrapped_module.recv_nb(peer, tag, persistent, cbfunc, cbdata);
     }
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
index 66b90f6..e2cd4f3 100644
--- a/orte/mca/snapc/full/snapc_full_app.c
+++ b/orte/mca/snapc/full/snapc_full_app.c
@@ -283,12 +283,7 @@ int app_coord_finalize()
          * need to wait until the checkpoint is finished before finishing.
          */
         OBJ_CONSTRUCT(&amp;buffer, opal_buffer_t);
-        if (0 &gt; (ret = orte_rml.recv_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
-            ORTE_ERROR_LOG(ret);
-            exit_status = ret;
-            OBJ_DESTRUCT(&amp;buffer);
-            goto cleanup;
-        }
+        orte_rml.recv_buffer_nb(ORTE_PROC_MY_HNP, ORTE_RML_TAG_SNAPC_FULL, 0, snapc_full_app_callback_recv, NULL);
 
         count = 1;
         if (ORTE_SUCCESS != (ret = opal_dss.unpack(&amp;buffer, &amp;command, &amp;count, ORTE_SNAPC_FULL_CMD))) {
@@ -1528,12 +1523,7 @@ int app_coord_request_op(orte_snapc_base_request_op_t *datum)
             /*
              * Wait for a response regarding completion
              */
-            if (0 &gt; (ret = orte_rml.recv_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
-                ORTE_ERROR_LOG(ret);
-                exit_status = ret;
-                OBJ_DESTRUCT(&amp;buffer);
-                goto cleanup;
-            }
+            orte_rml.recv_buffer_nb(ORTE_PROC_MY_HNP, ORTE_RML_TAG_SNAPC_FULL, 0, snapc_full_app_callback_recv, NULL);
 
             count = 1;
             if (ORTE_SUCCESS != (ret = opal_dss.unpack(&amp;buffer, &amp;command, &amp;count, ORTE_SNAPC_FULL_CMD))) {
@@ -1598,12 +1588,7 @@ int app_coord_request_op(orte_snapc_base_request_op_t *datum)
             /*
              * Wait for a response regarding completion
              */
-            if (0 &gt; (ret = orte_rml.recv_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
-                ORTE_ERROR_LOG(ret);
-                exit_status = ret;
-                OBJ_DESTRUCT(&amp;buffer);
-                goto cleanup;
-            }
+            orte_rml.recv_buffer_nb(ORTE_PROC_MY_HNP, ORTE_RML_TAG_SNAPC_FULL, 0, snapc_full_app_callback_recv, NULL);
 
             count = 1;
             if (ORTE_SUCCESS != (ret = opal_dss.unpack(&amp;buffer, &amp;command, &amp;count, ORTE_SNAPC_FULL_CMD))) {
diff --git a/orte/mca/snapc/full/snapc_full_global.c b/orte/mca/snapc/full/snapc_full_global.c
index 18c1cbe..87c687b 100644
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
index 9f0cd26..5df216d 100644
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
index 2cd7d7f..949020b 100644
--- a/orte/mca/sstore/central/sstore_central_app.c
+++ b/orte/mca/sstore/central/sstore_central_app.c
@@ -477,14 +477,9 @@ static int pull_handle_info(orte_sstore_central_app_snapshot_info_t *handle_info
                          &quot;sstore:central:(app): pull() from %s -&gt; %s&quot;,
                          ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
                          ORTE_NAME_PRINT(ORTE_PROC_MY_DAEMON)));
-    if( ORTE_SUCCESS != (ret = orte_rml.recv_buffer(ORTE_PROC_MY_DAEMON,
-                                                    &amp;buffer,
-                                                    ORTE_RML_TAG_SSTORE_INTERNAL,
-                                                    0)) ) {
-        ORTE_ERROR_LOG(ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+
+    orte_rml.recv_buffer_nb(ORTE_PROC_MY_DAEMON, ORTE_RML_TAG_SSTORE_INTERNAL,
+                            0, orte_rml_recv_callback, NULL);
 
     count = 1;
     if (ORTE_SUCCESS != (ret = opal_dss.unpack(&amp;buffer, &amp;command, &amp;count, ORTE_SSTORE_CENTRAL_CMD))) {
diff --git a/orte/mca/sstore/central/sstore_central_global.c b/orte/mca/sstore/central/sstore_central_global.c
index 3b372c7..ce183af 100644
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
index 1a5f19c..6741ecd 100644
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
index 42ee530..c2f8ccd 100644
--- a/orte/mca/sstore/stage/sstore_stage_app.c
+++ b/orte/mca/sstore/stage/sstore_stage_app.c
@@ -466,15 +466,9 @@ static int pull_handle_info(orte_sstore_stage_app_snapshot_info_t *handle_info )
                          &quot;sstore:stage:(app): pull() from %s -&gt; %s&quot;,
                          ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
                          ORTE_NAME_PRINT(ORTE_PROC_MY_DAEMON)));
-    if( ORTE_SUCCESS != (ret = orte_rml.recv_buffer(ORTE_PROC_MY_DAEMON,
-                                                    &amp;buffer,
-                                                    ORTE_RML_TAG_SSTORE_INTERNAL,
-                                                    0)) ) {
-        ORTE_ERROR_LOG(ret);
-        exit_status = ret;
-        goto cleanup;
-    }
 
+    orte_rml.recv_buffer_nb(ORTE_PROC_MY_DAEMON, ORTE_RML_TAG_SSTORE_INTERNAL,
+                            0, orte_rml_recv_callback, NULL);
     count = 1;
     if (ORTE_SUCCESS != (ret = opal_dss.unpack(&amp;buffer, &amp;command, &amp;count, ORTE_SSTORE_STAGE_CMD))) {
         ORTE_ERROR_LOG(ret);
diff --git a/orte/mca/sstore/stage/sstore_stage_global.c b/orte/mca/sstore/stage/sstore_stage_global.c
index 0b70637..2d85531 100644
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
index bc9c96e..6a48cd3 100644
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
index 4801ca2..ec76c52 100644
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
index 33acf79..973edfa 100644
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
1.8.3.1
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13332.php">Adrian Reber: "[OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Previous message:</strong> <a href="13330.php">Adrian Reber: "[OMPI devel] [PATCH 0/4] Trying to get the C/R code to compile again"</a>
<li><strong>In reply to:</strong> <a href="13330.php">Adrian Reber: "[OMPI devel] [PATCH 0/4] Trying to get the C/R code to compile again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13369.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile	again. (recv_*_nb)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13369.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile	again. (recv_*_nb)"</a>
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
