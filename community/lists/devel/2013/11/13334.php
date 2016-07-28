<?
$subject_val = "[OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 09:59:26 2013" -->
<!-- isoreceived="20131125145926" -->
<!-- sent="Mon, 25 Nov 2013 15:59:21 +0100" -->
<!-- isosent="20131125145921" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)" -->
<!-- id="1385391563-29584-3-git-send-email-adrian_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-25 09:59:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13335.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>Previous message:</strong> <a href="13333.php">Adrian Reber: "[OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile again. (void value not ignored)"</a>
<li><strong>In reply to:</strong> <a href="13330.php">Adrian Reber: "[OMPI devel] [PATCH 0/4] Trying to get the C/R code to compile again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13370.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile	again. (send_*_nb)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13370.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile	again. (send_*_nb)"</a>
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
<p>Signed-off-by: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
<br>
<pre>
---
 ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c            | 12 ++---
 orte/mca/errmgr/base/errmgr_base_tool.c         |  2 +-
 orte/mca/rml/ftrm/rml_ftrm.h                    | 19 --------
 orte/mca/rml/ftrm/rml_ftrm_component.c          |  2 -
 orte/mca/rml/ftrm/rml_ftrm_module.c             | 61 +++----------------------
 orte/mca/snapc/full/snapc_full_app.c            | 10 ++--
 orte/mca/snapc/full/snapc_full_global.c         |  6 +--
 orte/mca/snapc/full/snapc_full_local.c          |  2 +-
 orte/mca/sstore/central/sstore_central_app.c    |  4 +-
 orte/mca/sstore/central/sstore_central_global.c |  2 +-
 orte/mca/sstore/central/sstore_central_local.c  |  6 +--
 orte/mca/sstore/stage/sstore_stage_app.c        |  4 +-
 orte/mca/sstore/stage/sstore_stage_global.c     |  2 +-
 orte/mca/sstore/stage/sstore_stage_local.c      |  8 ++--
 orte/tools/orte-checkpoint/orte-checkpoint.c    |  2 +-
 orte/tools/orte-migrate/orte-migrate.c          |  2 +-
 16 files changed, 37 insertions(+), 107 deletions(-)
diff --git a/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c b/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
index 5d4005f..62f1084 100644
--- a/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
+++ b/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
@@ -5097,7 +5097,7 @@ static int wait_quiesce_drained(void)
             PACK_BUFFER(buffer, response, 1, OPAL_SIZE, &quot;&quot;);
 
             /* JJH - Performance Optimization? - Why not post all isends, then wait? */
-            if ( 0 &gt; ( ret = ompi_rte_send_buffer(&amp;(cur_peer_ref-&gt;proc_name), buffer, OMPI_CRCP_COORD_BOOKMARK_TAG, 0)) ) {
+            if ( 0 &gt; ( ret = ompi_rte_send_buffer_nb(&amp;(cur_peer_ref-&gt;proc_name), buffer, OMPI_CRCP_COORD_BOOKMARK_TAG, orte_rml_send_callback, NULL)) ) {
                 exit_status = ret;
                 goto cleanup;
             }
@@ -5298,7 +5298,7 @@ static int send_bookmarks(int peer_idx)
     PACK_BUFFER(buffer, (peer_ref-&gt;total_msgs_recvd),     1, OPAL_UINT32,
                 &quot;crcp:bkmrk: send_bookmarks: Unable to pack total_msgs_recvd&quot;);
 
-    if ( 0 &gt; ( ret = ompi_rte_send_buffer(&amp;peer_name, buffer, OMPI_CRCP_COORD_BOOKMARK_TAG, 0)) ) {
+    if ( 0 &gt; ( ret = ompi_rte_send_buffer_nb(&amp;peer_name, buffer, OMPI_CRCP_COORD_BOOKMARK_TAG, orte_rml_send_callback, NULL)) ) {
         opal_output(mca_crcp_bkmrk_component.super.output_handle,
                     &quot;crcp:bkmrk: send_bookmarks: Failed to send bookmark to peer %s: Return %d\n&quot;,
                     OMPI_NAME_PRINT(&amp;peer_name),
@@ -5589,8 +5589,8 @@ static int do_send_msg_detail(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
     /*
      * Do the send...
      */
-    if ( 0 &gt; ( ret = ompi_rte_send_buffer(&amp;peer_ref-&gt;proc_name, buffer,
-                                          OMPI_CRCP_COORD_BOOKMARK_TAG, 0)) ) {
+    if ( 0 &gt; ( ret = ompi_rte_send_buffer_nb(&amp;peer_ref-&gt;proc_name, buffer,
+                                          OMPI_CRCP_COORD_BOOKMARK_TAG, orte_rml_send_callback, NULL)) ) {
         opal_output(mca_crcp_bkmrk_component.super.output_handle,
                     &quot;crcp:bkmrk: do_send_msg_detail: Unable to send message details to peer %s: Return %d\n&quot;,
                     OMPI_NAME_PRINT(&amp;peer_ref-&gt;proc_name),
@@ -6198,8 +6198,8 @@ static int do_recv_msg_detail_resp(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
                 &quot;crcp:bkmrk: recv_msg_details: Unable to ask peer for more messages&quot;);
     PACK_BUFFER(buffer, total_found, 1, OPAL_UINT32,
                 &quot;crcp:bkmrk: recv_msg_details: Unable to ask peer for more messages&quot;);
-        
-    if ( 0 &gt; ( ret = ompi_rte_send_buffer(&amp;peer_ref-&gt;proc_name, buffer, OMPI_CRCP_COORD_BOOKMARK_TAG, 0)) ) {
+
+    if ( 0 &gt; ( ret = ompi_rte_send_buffer_nb(&amp;peer_ref-&gt;proc_name, buffer, OMPI_CRCP_COORD_BOOKMARK_TAG, orte_rml_send_callback, NULL)) ) {
         opal_output(mca_crcp_bkmrk_component.super.output_handle,
                     &quot;crcp:bkmrk: recv_msg_detail_resp: Unable to send message detail response to peer %s: Return %d\n&quot;,
                     OMPI_NAME_PRINT(&amp;peer_ref-&gt;proc_name),
diff --git a/orte/mca/errmgr/base/errmgr_base_tool.c b/orte/mca/errmgr/base/errmgr_base_tool.c
index 20d76e5..dc8e558 100644
--- a/orte/mca/errmgr/base/errmgr_base_tool.c
+++ b/orte/mca/errmgr/base/errmgr_base_tool.c
@@ -221,7 +221,7 @@ int orte_errmgr_base_migrate_update(int status)
         goto cleanup;
     }
 
-    if (0 &gt; (ret = orte_rml.send_buffer(&amp;errmgr_cmdline_sender, loc_buffer, ORTE_RML_TAG_MIGRATE, 0))) {
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(&amp;errmgr_cmdline_sender, loc_buffer, ORTE_RML_TAG_MIGRATE, orte_rml_send_callback, NULL))) {
         opal_output(orte_errmgr_base_framework.framework_output,
                     &quot;errmgr:base:tool:update() Error: Send (status) Failure (ret = %d)\n&quot;,
                     ret);
diff --git a/orte/mca/rml/ftrm/rml_ftrm.h b/orte/mca/rml/ftrm/rml_ftrm.h
index a1bd48a..1fd9b12 100644
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
index 6923c44..5ee1790 100644
--- a/orte/mca/rml/ftrm/rml_ftrm_component.c
+++ b/orte/mca/rml/ftrm/rml_ftrm_component.c
@@ -68,9 +68,7 @@ orte_rml_module_t orte_rml_ftrm_module = {
 
     orte_rml_ftrm_ping,
 
-    orte_rml_ftrm_send,
     orte_rml_ftrm_send_nb,
-    orte_rml_ftrm_send_buffer,
     orte_rml_ftrm_send_buffer_nb,
 
     orte_rml_ftrm_recv,
diff --git a/orte/mca/rml/ftrm/rml_ftrm_module.c b/orte/mca/rml/ftrm/rml_ftrm_module.c
index 85b288e..84c365e 100644
--- a/orte/mca/rml/ftrm/rml_ftrm_module.c
+++ b/orte/mca/rml/ftrm/rml_ftrm_module.c
@@ -126,71 +126,23 @@ int orte_rml_ftrm_ping(const char* uri, const struct timeval* tv)
 
 
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
-        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send_nb(peer, msg, count, tag, flags, cbfunc, cbdata) ) ) {
-            return ret;
-        }
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
+        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send_nb(peer, msg, count, tag, cbfunc, cbdata) ) ) {
             return ret;
         }
     }
@@ -204,18 +156,17 @@ int orte_rml_ftrm_send_buffer(orte_process_name_t* peer,
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
-        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send_buffer_nb(peer, buffer, tag, flags, cbfunc, cbdata) ) ) {
+        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send_buffer_nb(peer, buffer, tag, cbfunc, cbdata) ) ) {
             return ret;
         }
     }
diff --git a/orte/mca/snapc/full/snapc_full_app.c b/orte/mca/snapc/full/snapc_full_app.c
index 1ff036e..66b90f6 100644
--- a/orte/mca/snapc/full/snapc_full_app.c
+++ b/orte/mca/snapc/full/snapc_full_app.c
@@ -191,7 +191,7 @@ int app_coord_init()
             goto cleanup;
         }
 
-        if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
+        if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, 0))) {
             ORTE_ERROR_LOG(ret);
             exit_status = ret;
             OBJ_DESTRUCT(&amp;buffer);
@@ -266,7 +266,7 @@ int app_coord_finalize()
             goto cleanup;
         }
 
-        if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
+        if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, 0))) {
             ORTE_ERROR_LOG(ret);
             exit_status = ret;
             OBJ_DESTRUCT(&amp;buffer);
@@ -828,7 +828,7 @@ static int snapc_full_app_finished_msg(int cr_state) {
         goto cleanup;
     }
 
-    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SNAPC, 0))) {
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SNAPC, orte_rml_send_callback, 0))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
@@ -1261,7 +1261,7 @@ static int snapc_full_app_ft_event_update_process_info(orte_process_name_t proc,
     }
 #endif
 
-    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SNAPC, 0))) {
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SNAPC, orte_rml_send_callback, 0))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
@@ -1474,7 +1474,7 @@ int app_coord_request_op(orte_snapc_base_request_op_t *datum)
             }
         }
 
-        if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
+        if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, 0))) {
             ORTE_ERROR_LOG(ret);
             exit_status = ret;
             OBJ_DESTRUCT(&amp;buffer);
diff --git a/orte/mca/snapc/full/snapc_full_global.c b/orte/mca/snapc/full/snapc_full_global.c
index c88c6db..18c1cbe 100644
--- a/orte/mca/snapc/full/snapc_full_global.c
+++ b/orte/mca/snapc/full/snapc_full_global.c
@@ -1264,7 +1264,7 @@ static void snapc_full_process_request_op_cmd(orte_process_name_t* sender,
             goto cleanup;
         }
 
-        if (0 &gt; (ret = orte_rml.send_buffer(sender, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
+        if (0 &gt; (ret = orte_rml.send_buffer_nb(sender, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, NULL))) {
             ORTE_ERROR_LOG(ret);
             goto cleanup;
         }
@@ -1317,7 +1317,7 @@ static void snapc_full_process_request_op_cmd(orte_process_name_t* sender,
             goto cleanup;
         }
 
-        if (0 &gt; (ret = orte_rml.send_buffer(sender, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
+        if (0 &gt; (ret = orte_rml.send_buffer_nb(sender, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, NULL))) {
             ORTE_ERROR_LOG(ret);
             goto cleanup;
         }
@@ -1458,7 +1458,7 @@ static void snapc_full_process_request_op_cmd(orte_process_name_t* sender,
             goto cleanup;
         }
 
-        if (0 &gt; (ret = orte_rml.send_buffer(sender, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
+        if (0 &gt; (ret = orte_rml.send_buffer_nb(sender, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, NULL))) {
             ORTE_ERROR_LOG(ret);
             goto cleanup;
         }
diff --git a/orte/mca/snapc/full/snapc_full_local.c b/orte/mca/snapc/full/snapc_full_local.c
index c0b168a..9f0cd26 100644
--- a/orte/mca/snapc/full/snapc_full_local.c
+++ b/orte/mca/snapc/full/snapc_full_local.c
@@ -1365,7 +1365,7 @@ static int snapc_full_local_update_coord(int state, bool quick)
     }
 
  send_data:
-    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, 0))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
diff --git a/orte/mca/sstore/central/sstore_central_app.c b/orte/mca/sstore/central/sstore_central_app.c
index e717065..2cd7d7f 100644
--- a/orte/mca/sstore/central/sstore_central_app.c
+++ b/orte/mca/sstore/central/sstore_central_app.c
@@ -462,7 +462,7 @@ static int pull_handle_info(orte_sstore_central_app_snapshot_info_t *handle_info
         goto cleanup;
     }
 
-    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
@@ -580,7 +580,7 @@ static int push_handle_info(orte_sstore_central_app_snapshot_info_t *handle_info
         }
     }
 
-    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
diff --git a/orte/mca/sstore/central/sstore_central_global.c b/orte/mca/sstore/central/sstore_central_global.c
index 935b6fe..3b372c7 100644
--- a/orte/mca/sstore/central/sstore_central_global.c
+++ b/orte/mca/sstore/central/sstore_central_global.c
@@ -937,7 +937,7 @@ static int process_local_pull(orte_process_name_t* peer, opal_buffer_t* buffer,
         goto cleanup;
     }
 
-    if (0 &gt; (ret = orte_rml.send_buffer(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
diff --git a/orte/mca/sstore/central/sstore_central_local.c b/orte/mca/sstore/central/sstore_central_local.c
index 35ef518..1a5f19c 100644
--- a/orte/mca/sstore/central/sstore_central_local.c
+++ b/orte/mca/sstore/central/sstore_central_local.c
@@ -771,7 +771,7 @@ static int process_app_pull(orte_process_name_t* peer, opal_buffer_t* buffer, or
         goto cleanup;
     }
 
-    if (0 &gt; (ret = orte_rml.send_buffer(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
@@ -888,7 +888,7 @@ static int pull_handle_info(orte_sstore_central_local_snapshot_info_t *handle_in
         goto cleanup;
     }
 
-    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
@@ -960,7 +960,7 @@ static int push_handle_info(orte_sstore_central_local_snapshot_info_t *handle_in
         }
     }
 
-    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
diff --git a/orte/mca/sstore/stage/sstore_stage_app.c b/orte/mca/sstore/stage/sstore_stage_app.c
index 10d38ad..42ee530 100644
--- a/orte/mca/sstore/stage/sstore_stage_app.c
+++ b/orte/mca/sstore/stage/sstore_stage_app.c
@@ -451,7 +451,7 @@ static int pull_handle_info(orte_sstore_stage_app_snapshot_info_t *handle_info )
         goto cleanup;
     }
 
-    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
@@ -561,7 +561,7 @@ static int push_handle_info(orte_sstore_stage_app_snapshot_info_t *handle_info )
         }
     }
 
-    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
diff --git a/orte/mca/sstore/stage/sstore_stage_global.c b/orte/mca/sstore/stage/sstore_stage_global.c
index 1c8847a..0b70637 100644
--- a/orte/mca/sstore/stage/sstore_stage_global.c
+++ b/orte/mca/sstore/stage/sstore_stage_global.c
@@ -1162,7 +1162,7 @@ static int process_local_pull(orte_process_name_t* peer, opal_buffer_t* buffer,
         goto cleanup;
     }
 
-    if (0 &gt; (ret = orte_rml.send_buffer(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
diff --git a/orte/mca/sstore/stage/sstore_stage_local.c b/orte/mca/sstore/stage/sstore_stage_local.c
index 792c1a2..bc9c96e 100644
--- a/orte/mca/sstore/stage/sstore_stage_local.c
+++ b/orte/mca/sstore/stage/sstore_stage_local.c
@@ -1321,7 +1321,7 @@ static int process_global_remove(orte_process_name_t* peer, opal_buffer_t* buffe
         goto cleanup;
     }
 
-    if (0 &gt; (ret = orte_rml.send_buffer(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
@@ -1399,7 +1399,7 @@ static int process_app_pull(orte_process_name_t* peer, opal_buffer_t* buffer, or
         goto cleanup;
     }
 
-    if (0 &gt; (ret = orte_rml.send_buffer(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
@@ -1665,7 +1665,7 @@ static int pull_handle_info(orte_sstore_stage_local_snapshot_info_t *handle_info
         goto cleanup;
     }
 
-    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
@@ -1750,7 +1750,7 @@ static int push_handle_info(orte_sstore_stage_local_snapshot_info_t *handle_info
         }
     }
 
-    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
+    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
diff --git a/orte/tools/orte-checkpoint/orte-checkpoint.c b/orte/tools/orte-checkpoint/orte-checkpoint.c
index caa5949..4801ca2 100644
--- a/orte/tools/orte-checkpoint/orte-checkpoint.c
+++ b/orte/tools/orte-checkpoint/orte-checkpoint.c
@@ -843,7 +843,7 @@ static int notify_process_for_checkpoint(opal_crs_base_ckpt_options_t *options)
         goto cleanup;
     }
 
-    if ( 0 &gt; (ret = orte_rml.send_buffer(&amp;(orterun_hnp-&gt;name), buffer, ORTE_RML_TAG_CKPT, 0)) ) {
+    if ( 0 &gt; (ret = orte_rml.send_buffer_nb(&amp;(orterun_hnp-&gt;name), buffer, ORTE_RML_TAG_CKPT, hnp_receiver, NULL)) ) {
         exit_status = ret;
         goto cleanup;
     }
diff --git a/orte/tools/orte-migrate/orte-migrate.c b/orte/tools/orte-migrate/orte-migrate.c
index 7ba2074..33acf79 100644
--- a/orte/tools/orte-migrate/orte-migrate.c
+++ b/orte/tools/orte-migrate/orte-migrate.c
@@ -691,7 +691,7 @@ static int notify_hnp(void)
         goto cleanup;
     }
 
-    if ( 0 &gt; (ret = orte_rml.send_buffer(&amp;(orterun_hnp-&gt;name), buffer, ORTE_RML_TAG_MIGRATE, 0)) ) {
+    if ( 0 &gt; (ret = orte_rml.send_buffer_nb(&amp;(orterun_hnp-&gt;name), buffer, ORTE_RML_TAG_MIGRATE, orte_rml_send_callback, NULL)) ) {
         exit_status = ret;
         goto cleanup;
     }
-- 
1.8.3.1
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13335.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>Previous message:</strong> <a href="13333.php">Adrian Reber: "[OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile again. (void value not ignored)"</a>
<li><strong>In reply to:</strong> <a href="13330.php">Adrian Reber: "[OMPI devel] [PATCH 0/4] Trying to get the C/R code to compile again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13370.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile	again. (send_*_nb)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13370.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile	again. (send_*_nb)"</a>
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
