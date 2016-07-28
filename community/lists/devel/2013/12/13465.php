<?
$subject_val = "[OMPI devel] [PATCH v2 2/2] Trying to get the C/R code to compile again. (send_*_nb)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 09:42:40 2013" -->
<!-- isoreceived="20131218144240" -->
<!-- sent="Wed, 18 Dec 2013 15:42:39 +0100" -->
<!-- isosent="20131218144239" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH v2 2/2] Trying to get the C/R code to compile again. (send_*_nb)" -->
<!-- id="1387377759-21188-3-git-send-email-adrian_at_lisas.de" -->
<!-- inreplyto="1387377759-21188-1-git-send-email-adrian_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH v2 2/2] Trying to get the C/R code to compile again. (send_*_nb)<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-18 09:42:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13466.php">Adrian Reber: "[OMPI devel] [PATCH v2 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13464.php">Adrian Reber: "[OMPI devel] [PATCH v2 0/2] Trying to get the C/R code to compile again"</a>
<li><strong>In reply to:</strong> <a href="13464.php">Adrian Reber: "[OMPI devel] [PATCH v2 0/2] Trying to get the C/R code to compile again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13468.php">Ralph Castain: "Re: [OMPI devel] [PATCH v2 2/2] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13468.php">Ralph Castain: "Re: [OMPI devel] [PATCH v2 2/2] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
From: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
<br>
<p>This patch changes all send/send_buffer occurrences in the C/R code
<br>
to send_nb/send_buffer_nb.
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
<p>Signed-off-by: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
<br>
<pre>
---
 ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c            | 18 +++++++
 orte/mca/errmgr/base/errmgr_base_tool.c         |  4 ++
 orte/mca/rml/ftrm/rml_ftrm.h                    | 19 --------
 orte/mca/rml/ftrm/rml_ftrm_component.c          |  2 -
 orte/mca/rml/ftrm/rml_ftrm_module.c             | 63 +++++--------------------
 orte/mca/snapc/full/snapc_full_app.c            | 20 ++++++++
 orte/mca/snapc/full/snapc_full_global.c         | 12 +++++
 orte/mca/snapc/full/snapc_full_local.c          |  4 ++
 orte/mca/sstore/central/sstore_central_app.c    |  8 ++++
 orte/mca/sstore/central/sstore_central_global.c |  4 ++
 orte/mca/sstore/central/sstore_central_local.c  | 12 +++++
 orte/mca/sstore/stage/sstore_stage_app.c        |  8 ++++
 orte/mca/sstore/stage/sstore_stage_global.c     |  4 ++
 orte/mca/sstore/stage/sstore_stage_local.c      | 16 +++++++
 orte/tools/orte-checkpoint/orte-checkpoint.c    |  4 ++
 orte/tools/orte-migrate/orte-migrate.c          |  4 ++
 16 files changed, 130 insertions(+), 72 deletions(-)
diff --git a/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c b/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
index cba7586..4f7bd7f 100644
--- a/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
+++ b/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
@@ -5102,7 +5102,11 @@ static int wait_quiesce_drained(void)
             PACK_BUFFER(buffer, response, 1, OPAL_SIZE, &quot;&quot;);
 
             /* JJH - Performance Optimization? - Why not post all isends, then wait? */
+#ifdef ENABLE_FT_FIXED
+            /* This is the old, now broken code */
             if ( 0 &gt; ( ret = ompi_rte_send_buffer(&amp;(cur_peer_ref-&gt;proc_name), buffer, OMPI_CRCP_COORD_BOOKMARK_TAG, 0)) ) {
+#endif /* ENABLE_FT_FIXED */
+            if ( 0 &gt; ( ret = ompi_rte_send_buffer_nb(&amp;(cur_peer_ref-&gt;proc_name), buffer, OMPI_CRCP_COORD_BOOKMARK_TAG, orte_rml_send_callback, NULL)) ) {
                 exit_status = ret;
                 goto cleanup;
             }
@@ -5303,7 +5307,11 @@ static int send_bookmarks(int peer_idx)
     PACK_BUFFER(buffer, (peer_ref-&gt;total_msgs_recvd),     1, OPAL_UINT32,
                 &quot;crcp:bkmrk: send_bookmarks: Unable to pack total_msgs_recvd&quot;);
 
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if ( 0 &gt; ( ret = ompi_rte_send_buffer(&amp;peer_name, buffer, OMPI_CRCP_COORD_BOOKMARK_TAG, 0)) ) {
+#endif /* ENABLE_FT_FIXED */
+    if ( 0 &gt; ( ret = ompi_rte_send_buffer_nb(&amp;peer_name, buffer, OMPI_CRCP_COORD_BOOKMARK_TAG, orte_rml_send_callback, NULL)) ) {
         opal_output(mca_crcp_bkmrk_component.super.output_handle,
                     &quot;crcp:bkmrk: send_bookmarks: Failed to send bookmark to peer %s: Return %d\n&quot;,
                     OMPI_NAME_PRINT(&amp;peer_name),
@@ -5599,8 +5607,13 @@ static int do_send_msg_detail(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
     /*
      * Do the send...
      */
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if ( 0 &gt; ( ret = ompi_rte_send_buffer(&amp;peer_ref-&gt;proc_name, buffer,
                                           OMPI_CRCP_COORD_BOOKMARK_TAG, 0)) ) {
+#endif /* ENABLE_FT_FIXED */
+    if ( 0 &gt; ( ret = ompi_rte_send_buffer_nb(&amp;peer_ref-&gt;proc_name, buffer,
+                                          OMPI_CRCP_COORD_BOOKMARK_TAG, orte_rml_send_callback, NULL)) ) {
         opal_output(mca_crcp_bkmrk_component.super.output_handle,
                     &quot;crcp:bkmrk: do_send_msg_detail: Unable to send message details to peer %s: Return %d\n&quot;,
                     OMPI_NAME_PRINT(&amp;peer_ref-&gt;proc_name),
@@ -6217,8 +6230,13 @@ static int do_recv_msg_detail_resp(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
                 &quot;crcp:bkmrk: recv_msg_details: Unable to ask peer for more messages&quot;);
     PACK_BUFFER(buffer, total_found, 1, OPAL_UINT32,
                 &quot;crcp:bkmrk: recv_msg_details: Unable to ask peer for more messages&quot;);
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
         
     if ( 0 &gt; ( ret = ompi_rte_send_buffer(&amp;peer_ref-&gt;proc_name, buffer, OMPI_CRCP_COORD_BOOKMARK_TAG, 0)) ) {
+#endif /* ENABLE_FT_FIXED */
+
+    if ( 0 &gt; ( ret = ompi_rte_send_buffer_nb(&amp;peer_ref-&gt;proc_name, buffer, OMPI_CRCP_COORD_BOOKMARK_TAG, orte_rml_send_callback, NULL)) ) {
         opal_output(mca_crcp_bkmrk_component.super.output_handle,
                     &quot;crcp:bkmrk: recv_msg_detail_resp: Unable to send message detail response to peer %s: Return %d\n&quot;,
                     OMPI_NAME_PRINT(&amp;peer_ref-&gt;proc_name),
diff --git a/orte/mca/errmgr/base/errmgr_base_tool.c b/orte/mca/errmgr/base/errmgr_base_tool.c
index b982e46..e274bae 100644
--- a/orte/mca/errmgr/base/errmgr_base_tool.c
+++ b/orte/mca/errmgr/base/errmgr_base_tool.c
@@ -221,7 +221,11 @@ int orte_errmgr_base_migrate_update(int status)
         goto cleanup;
     }
 
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if (0 &gt; (ret = orte_rml.send_buffer(&amp;errmgr_cmdline_sender, loc_buffer, ORTE_RML_TAG_MIGRATE, 0))) {
+#endif /* ENABLE_FT_FIXED */
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(&amp;errmgr_cmdline_sender, loc_buffer, ORTE_RML_TAG_MIGRATE, orte_rml_send_callback, NULL))) {
         opal_output(orte_errmgr_base_framework.framework_output,
                     &quot;errmgr:base:tool:update() Error: Send (status) Failure (ret = %d)\n&quot;,
                     ret);
diff --git a/orte/mca/rml/ftrm/rml_ftrm.h b/orte/mca/rml/ftrm/rml_ftrm.h
index 055c891..98c9968 100644
--- a/orte/mca/rml/ftrm/rml_ftrm.h
+++ b/orte/mca/rml/ftrm/rml_ftrm.h
@@ -71,40 +71,21 @@ BEGIN_C_DECLS
     int orte_rml_ftrm_ping(const char* uri, const struct timeval* tv);
 
     /*
-     * Send
-     */
-    int orte_rml_ftrm_send(orte_process_name_t* peer,
-                           struct iovec *msg,
-                           int count,
-                           int tag,
-                           int flags);
-
-    /*
      * Send Non-blocking
      */
     int orte_rml_ftrm_send_nb(orte_process_name_t* peer,
                               struct iovec* msg,
                               int count,
                               orte_rml_tag_t tag,
-                              int flags,
                               orte_rml_callback_fn_t cbfunc,
                               void* cbdata);
 
     /*
-     * Send Buffer
-     */
-    int orte_rml_ftrm_send_buffer(orte_process_name_t* peer,
-                                  opal_buffer_t* buffer,
-                                  orte_rml_tag_t tag,
-                                  int flags);
-
-    /*
      * Send Buffer Non-blocking
      */
     int orte_rml_ftrm_send_buffer_nb(orte_process_name_t* peer,
                                      opal_buffer_t* buffer,
                                      orte_rml_tag_t tag,
-                                     int flags,
                                      orte_rml_buffer_callback_fn_t cbfunc,
                                      void* cbdata);
 
diff --git a/orte/mca/rml/ftrm/rml_ftrm_component.c b/orte/mca/rml/ftrm/rml_ftrm_component.c
index 0ffa79c..7cd5a69 100644
--- a/orte/mca/rml/ftrm/rml_ftrm_component.c
+++ b/orte/mca/rml/ftrm/rml_ftrm_component.c
@@ -68,9 +68,7 @@ orte_rml_module_t orte_rml_ftrm_module = {
 
     orte_rml_ftrm_ping,
 
-    orte_rml_ftrm_send,
     orte_rml_ftrm_send_nb,
-    orte_rml_ftrm_send_buffer,
     orte_rml_ftrm_send_buffer_nb,
 
     orte_rml_ftrm_recv_nb,
diff --git a/orte/mca/rml/ftrm/rml_ftrm_module.c b/orte/mca/rml/ftrm/rml_ftrm_module.c
index 4ba6f2d..ffcff8b 100644
--- a/orte/mca/rml/ftrm/rml_ftrm_module.c
+++ b/orte/mca/rml/ftrm/rml_ftrm_module.c
@@ -126,71 +126,29 @@ int orte_rml_ftrm_ping(const char* uri, const struct timeval* tv)
 
 
 /*
- * Send
- */
-int orte_rml_ftrm_send(orte_process_name_t* peer,
-                       struct iovec *msg,
-                       int count,
-                       int tag,
-                       int flags)
-{
-    int ret;
-
-    opal_output_verbose(20, rml_ftrm_output_handle,
-                        &quot;orte_rml_ftrm: send(%s, %d, %d, %d )&quot;,
-                        ORTE_NAME_PRINT(peer), count, tag, flags);
-
-    if( NULL != orte_rml_ftrm_wrapped_module.send ) {
-        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send(peer, msg, count, tag, flags) ) ) {
-            return ret;
-        }
-    }
-
-    return ORTE_SUCCESS;
-}
-
-/*
  * Send Non-blocking
  */
 int orte_rml_ftrm_send_nb(orte_process_name_t* peer,
                           struct iovec* msg,
                           int count,
                           orte_rml_tag_t tag,
-                          int flags,
                           orte_rml_callback_fn_t cbfunc,
                           void* cbdata)
 {
     int ret;
 
     opal_output_verbose(20, rml_ftrm_output_handle,
-                        &quot;orte_rml_ftrm: send_nb(%s, %d, %d, %d )&quot;,
-                        ORTE_NAME_PRINT(peer), count, tag, flags);
+                        &quot;orte_rml_ftrm: send_nb(%s, %d, %d )&quot;,
+                        ORTE_NAME_PRINT(peer), count, tag);
 
     if( NULL != orte_rml_ftrm_wrapped_module.send_nb ) {
+#ifdef ENABLE_FT_FIXED
+        /* This is the old, now broken code */
         if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send_nb(peer, msg, count, tag, flags, cbfunc, cbdata) ) ) {
             return ret;
         }
-    }
-
-    return ORTE_SUCCESS;
-}
-
-/*
- * Send Buffer
- */
-int orte_rml_ftrm_send_buffer(orte_process_name_t* peer,
-                              opal_buffer_t* buffer,
-                              orte_rml_tag_t tag,
-                              int flags)
-{
-    int ret;
-
-    opal_output_verbose(20, rml_ftrm_output_handle,
-                        &quot;orte_rml_ftrm: send_buffer(%s, %d, %d )&quot;,
-                        ORTE_NAME_PRINT(peer), tag, flags);
-
-    if( NULL != orte_rml_ftrm_wrapped_module.send_buffer ) {
-        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send_buffer(peer, buffer, tag, flags) ) ) {
+#endif /* ENABLE_FT_FIXED */
+        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send_nb(peer, msg, count, tag, cbfunc, cbdata) ) ) {
             return ret;
         }
     }
@@ -204,18 +162,21 @@ int orte_rml_ftrm_send_buffer(orte_process_name_t* peer,
 int orte_rml_ftrm_send_buffer_nb(orte_process_name_t* peer,
                                  opal_buffer_t* buffer,
                                  orte_rml_tag_t tag,
-                                 int flags,
                                  orte_rml_buffer_callback_fn_t cbfunc,
                                  void* cbdata)
 {
     int ret;
 
     opal_output_verbose(20, rml_ftrm_output_handle,
-                        &quot;orte_rml_ftrm: send_buffer_nb(%s, %d, %d )&quot;,
-                        ORTE_NAME_PRINT(peer), tag, flags);
+                        &quot;orte_rml_ftrm: send_buffer_nb(%s, %d )&quot;,
+                        ORTE_NAME_PRINT(peer), tag);
 
     if( NULL != orte_rml_ftrm_wrapped_module.send_buffer_nb ) {
+#ifdef ENABLE_FT_FIXED
+        /* This is the old, now broken code */
         if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send_buffer_nb(peer, buffer, tag, flags, cbfunc, cbdata) ) ) {
+#endif /* ENABLE_FT_FIXED */
+        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send_buffer_nb(peer, buffer, tag, cbfunc, cbdata) ) ) {
             return ret;
         }
     }
diff --git a/orte/mca/snapc/full/snapc_full_app.c b/orte/mca/snapc/full/snapc_full_app.c
index 862c9be..26b95c6 100644
--- a/orte/mca/snapc/full/snapc_full_app.c
+++ b/orte/mca/snapc/full/snapc_full_app.c
@@ -197,7 +197,11 @@ int app_coord_init()
             goto cleanup;
         }
 
+#ifdef ENABLE_FT_FIXED
+        /* This is the old, now broken code */
         if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
+#endif /* ENABLE_FT_FIXED */
+        if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, 0))) {
             ORTE_ERROR_LOG(ret);
             exit_status = ret;
             OBJ_DESTRUCT(&amp;buffer);
@@ -272,7 +276,11 @@ int app_coord_finalize()
             goto cleanup;
         }
 
+#ifdef ENABLE_FT_FIXED
+        /* This is the old, now broken code */
         if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
+#endif /* ENABLE_FT_FIXED */
+        if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, 0))) {
             ORTE_ERROR_LOG(ret);
             exit_status = ret;
             OBJ_DESTRUCT(&amp;buffer);
@@ -838,7 +846,11 @@ static int snapc_full_app_finished_msg(int cr_state) {
         goto cleanup;
     }
 
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SNAPC, 0))) {
+#endif /* ENABLE_FT_FIXED */
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SNAPC, orte_rml_send_callback, 0))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
@@ -1271,7 +1283,11 @@ static int snapc_full_app_ft_event_update_process_info(orte_process_name_t proc,
     }
 #endif
 
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SNAPC, 0))) {
+#endif /* ENABLE_FT_FIXED */
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SNAPC, orte_rml_send_callback, 0))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
@@ -1484,7 +1500,11 @@ int app_coord_request_op(orte_snapc_base_request_op_t *datum)
             }
         }
 
+#ifdef ENABLE_FT_FIXED
+        /* This is the old, now broken code */
         if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
+#endif /* ENABLE_FT_FIXED */
+        if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, 0))) {
             ORTE_ERROR_LOG(ret);
             exit_status = ret;
             OBJ_DESTRUCT(&amp;buffer);
diff --git a/orte/mca/snapc/full/snapc_full_global.c b/orte/mca/snapc/full/snapc_full_global.c
index efd202d..6047ad5 100644
--- a/orte/mca/snapc/full/snapc_full_global.c
+++ b/orte/mca/snapc/full/snapc_full_global.c
@@ -1267,7 +1267,11 @@ static void snapc_full_process_request_op_cmd(orte_process_name_t* sender,
             goto cleanup;
         }
 
+#ifdef ENABLE_FT_FIXED
+        /* This is the old, now broken code */
         if (0 &gt; (ret = orte_rml.send_buffer(sender, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
+#endif /* ENABLE_FT_FIXED */
+        if (0 &gt; (ret = orte_rml.send_buffer_nb(sender, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, NULL))) {
             ORTE_ERROR_LOG(ret);
             goto cleanup;
         }
@@ -1320,7 +1324,11 @@ static void snapc_full_process_request_op_cmd(orte_process_name_t* sender,
             goto cleanup;
         }
 
+#ifdef ENABLE_FT_FIXED
+        /* This is the old, now broken code */
         if (0 &gt; (ret = orte_rml.send_buffer(sender, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
+#endif /* ENABLE_FT_FIXED */
+        if (0 &gt; (ret = orte_rml.send_buffer_nb(sender, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, NULL))) {
             ORTE_ERROR_LOG(ret);
             goto cleanup;
         }
@@ -1461,7 +1469,11 @@ static void snapc_full_process_request_op_cmd(orte_process_name_t* sender,
             goto cleanup;
         }
 
+#ifdef ENABLE_FT_FIXED
+        /* This is the old, now broken code */
         if (0 &gt; (ret = orte_rml.send_buffer(sender, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
+#endif /* ENABLE_FT_FIXED */
+        if (0 &gt; (ret = orte_rml.send_buffer_nb(sender, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, NULL))) {
             ORTE_ERROR_LOG(ret);
             goto cleanup;
         }
diff --git a/orte/mca/snapc/full/snapc_full_local.c b/orte/mca/snapc/full/snapc_full_local.c
index 6413413..45dc17c 100644
--- a/orte/mca/snapc/full/snapc_full_local.c
+++ b/orte/mca/snapc/full/snapc_full_local.c
@@ -1369,7 +1369,11 @@ static int snapc_full_local_update_coord(int state, bool quick)
     }
 
  send_data:
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
+#endif /* ENABLE_FT_FIXED */
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, 0))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
diff --git a/orte/mca/sstore/central/sstore_central_app.c b/orte/mca/sstore/central/sstore_central_app.c
index a7d6689..965c6ef 100644
--- a/orte/mca/sstore/central/sstore_central_app.c
+++ b/orte/mca/sstore/central/sstore_central_app.c
@@ -462,7 +462,11 @@ static int pull_handle_info(orte_sstore_central_app_snapshot_info_t *handle_info
         goto cleanup;
     }
 
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+#endif /* ENABLE_FT_FIXED */
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
@@ -586,7 +590,11 @@ static int push_handle_info(orte_sstore_central_app_snapshot_info_t *handle_info
         }
     }
 
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+#endif /* ENABLE_FT_FIXED */
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
diff --git a/orte/mca/sstore/central/sstore_central_global.c b/orte/mca/sstore/central/sstore_central_global.c
index 2685a55..d410c30 100644
--- a/orte/mca/sstore/central/sstore_central_global.c
+++ b/orte/mca/sstore/central/sstore_central_global.c
@@ -938,7 +938,11 @@ static int process_local_pull(orte_process_name_t* peer, opal_buffer_t* buffer,
         goto cleanup;
     }
 
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if (0 &gt; (ret = orte_rml.send_buffer(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+#endif /* ENABLE_FT_FIXED */
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
diff --git a/orte/mca/sstore/central/sstore_central_local.c b/orte/mca/sstore/central/sstore_central_local.c
index 0393107..5eefc4b 100644
--- a/orte/mca/sstore/central/sstore_central_local.c
+++ b/orte/mca/sstore/central/sstore_central_local.c
@@ -772,7 +772,11 @@ static int process_app_pull(orte_process_name_t* peer, opal_buffer_t* buffer, or
         goto cleanup;
     }
 
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if (0 &gt; (ret = orte_rml.send_buffer(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+#endif /* ENABLE_FT_FIXED */
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
@@ -889,7 +893,11 @@ static int pull_handle_info(orte_sstore_central_local_snapshot_info_t *handle_in
         goto cleanup;
     }
 
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+#endif /* ENABLE_FT_FIXED */
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
@@ -961,7 +969,11 @@ static int push_handle_info(orte_sstore_central_local_snapshot_info_t *handle_in
         }
     }
 
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+#endif /* ENABLE_FT_FIXED */
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
diff --git a/orte/mca/sstore/stage/sstore_stage_app.c b/orte/mca/sstore/stage/sstore_stage_app.c
index 88b6484..52bb91e 100644
--- a/orte/mca/sstore/stage/sstore_stage_app.c
+++ b/orte/mca/sstore/stage/sstore_stage_app.c
@@ -451,7 +451,11 @@ static int pull_handle_info(orte_sstore_stage_app_snapshot_info_t *handle_info )
         goto cleanup;
     }
 
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+#endif /* ENABLE_FT_FIXED */
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
@@ -566,7 +570,11 @@ static int push_handle_info(orte_sstore_stage_app_snapshot_info_t *handle_info )
         }
     }
 
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+#endif /* ENABLE_FT_FIXED */
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
diff --git a/orte/mca/sstore/stage/sstore_stage_global.c b/orte/mca/sstore/stage/sstore_stage_global.c
index 1c94845..bd82ff9 100644
--- a/orte/mca/sstore/stage/sstore_stage_global.c
+++ b/orte/mca/sstore/stage/sstore_stage_global.c
@@ -1163,7 +1163,11 @@ static int process_local_pull(orte_process_name_t* peer, opal_buffer_t* buffer,
         goto cleanup;
     }
 
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if (0 &gt; (ret = orte_rml.send_buffer(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+#endif /* ENABLE_FT_FIXED */
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
diff --git a/orte/mca/sstore/stage/sstore_stage_local.c b/orte/mca/sstore/stage/sstore_stage_local.c
index 88ded55..c997158 100644
--- a/orte/mca/sstore/stage/sstore_stage_local.c
+++ b/orte/mca/sstore/stage/sstore_stage_local.c
@@ -1322,7 +1322,11 @@ static int process_global_remove(orte_process_name_t* peer, opal_buffer_t* buffe
         goto cleanup;
     }
 
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if (0 &gt; (ret = orte_rml.send_buffer(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+#endif /* ENABLE_FT_FIXED */
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
@@ -1400,7 +1404,11 @@ static int process_app_pull(orte_process_name_t* peer, opal_buffer_t* buffer, or
         goto cleanup;
     }
 
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if (0 &gt; (ret = orte_rml.send_buffer(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+#endif /* ENABLE_FT_FIXED */
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
@@ -1666,7 +1674,11 @@ static int pull_handle_info(orte_sstore_stage_local_snapshot_info_t *handle_info
         goto cleanup;
     }
 
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+#endif /* ENABLE_FT_FIXED */
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
@@ -1751,7 +1763,11 @@ static int push_handle_info(orte_sstore_stage_local_snapshot_info_t *handle_info
         }
     }
 
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+#endif /* ENABLE_FT_FIXED */
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
diff --git a/orte/tools/orte-checkpoint/orte-checkpoint.c b/orte/tools/orte-checkpoint/orte-checkpoint.c
index 62cb651..4e3ad5d 100644
--- a/orte/tools/orte-checkpoint/orte-checkpoint.c
+++ b/orte/tools/orte-checkpoint/orte-checkpoint.c
@@ -846,7 +846,11 @@ static int notify_process_for_checkpoint(opal_crs_base_ckpt_options_t *options)
         goto cleanup;
     }
 
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if ( 0 &gt; (ret = orte_rml.send_buffer(&amp;(orterun_hnp-&gt;name), buffer, ORTE_RML_TAG_CKPT, 0)) ) {
+#endif /* ENABLE_FT_FIXED */
+    if ( 0 &gt; (ret = orte_rml.send_buffer_nb(&amp;(orterun_hnp-&gt;name), buffer, ORTE_RML_TAG_CKPT, hnp_receiver, NULL)) ) {
         exit_status = ret;
         goto cleanup;
     }
diff --git a/orte/tools/orte-migrate/orte-migrate.c b/orte/tools/orte-migrate/orte-migrate.c
index fe6f32e..1cc9a32 100644
--- a/orte/tools/orte-migrate/orte-migrate.c
+++ b/orte/tools/orte-migrate/orte-migrate.c
@@ -694,7 +694,11 @@ static int notify_hnp(void)
         goto cleanup;
     }
 
+#ifdef ENABLE_FT_FIXED
+    /* This is the old, now broken code */
     if ( 0 &gt; (ret = orte_rml.send_buffer(&amp;(orterun_hnp-&gt;name), buffer, ORTE_RML_TAG_MIGRATE, 0)) ) {
+#endif /* ENABLE_FT_FIXED */
+    if ( 0 &gt; (ret = orte_rml.send_buffer_nb(&amp;(orterun_hnp-&gt;name), buffer, ORTE_RML_TAG_MIGRATE, orte_rml_send_callback, NULL)) ) {
         exit_status = ret;
         goto cleanup;
     }
-- 
1.8.4.2
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13466.php">Adrian Reber: "[OMPI devel] [PATCH v2 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13464.php">Adrian Reber: "[OMPI devel] [PATCH v2 0/2] Trying to get the C/R code to compile again"</a>
<li><strong>In reply to:</strong> <a href="13464.php">Adrian Reber: "[OMPI devel] [PATCH v2 0/2] Trying to get the C/R code to compile again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13468.php">Ralph Castain: "Re: [OMPI devel] [PATCH v2 2/2] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13468.php">Ralph Castain: "Re: [OMPI devel] [PATCH v2 2/2] Trying to get the C/R code to compile again. (send_*_nb)"</a>
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
