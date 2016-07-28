<?
$subject_val = "[OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile again. (void value not ignored)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 09:59:26 2013" -->
<!-- isoreceived="20131125145926" -->
<!-- sent="Mon, 25 Nov 2013 15:59:20 +0100" -->
<!-- isosent="20131125145920" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile again. (void value not ignored)" -->
<!-- id="1385391563-29584-2-git-send-email-adrian_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile again. (void value not ignored)<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-25 09:59:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13334.php">Adrian Reber: "[OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13332.php">Adrian Reber: "[OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>In reply to:</strong> <a href="13330.php">Adrian Reber: "[OMPI devel] [PATCH 0/4] Trying to get the C/R code to compile again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13373.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile	again. (void value not ignored)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13373.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile	again. (void value not ignored)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
From: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
<br>
<p>This patch fixes
<br>
<p>&nbsp;&nbsp;error: void value not ignored as it ought to be
<br>
<p>in the C/R code by ignoring the return value of functions which
<br>
no longer return a value (only void).
<br>
<p>Signed-off-by: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
<br>
<pre>
---
 orte/mca/errmgr/base/errmgr_base_tool.c         |  8 +-----
 orte/mca/rml/ftrm/rml_ftrm.h                    |  6 ++---
 orte/mca/rml/ftrm/rml_ftrm_module.c             | 32 +++++------------------
 orte/mca/snapc/full/snapc_full_global.c         | 34 ++++++-------------------
 orte/mca/snapc/full/snapc_full_local.c          | 32 +++++------------------
 orte/mca/sstore/central/sstore_central_global.c | 13 ++--------
 orte/mca/sstore/central/sstore_central_local.c  | 13 ++--------
 orte/mca/sstore/stage/sstore_stage_global.c     | 13 ++--------
 orte/mca/sstore/stage/sstore_stage_local.c      | 14 ++--------
 orte/tools/orte-checkpoint/orte-checkpoint.c    | 14 +++-------
 orte/tools/orte-migrate/orte-migrate.c          | 14 +++-------
 11 files changed, 40 insertions(+), 153 deletions(-)
diff --git a/orte/mca/errmgr/base/errmgr_base_tool.c b/orte/mca/errmgr/base/errmgr_base_tool.c
index a030faf..20d76e5 100644
--- a/orte/mca/errmgr/base/errmgr_base_tool.c
+++ b/orte/mca/errmgr/base/errmgr_base_tool.c
@@ -290,16 +290,10 @@ static int errmgr_base_tool_stop_cmdline_listener(void)
     OPAL_OUTPUT_VERBOSE((5, orte_errmgr_base_framework.framework_output,
                          &quot;errmgr:base:tool: Shutdown Command Line Channel&quot;));
     
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
-                                                    ORTE_RML_TAG_MIGRATE))) {
-        ORTE_ERROR_LOG(ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_MIGRATE);
 
     errmgr_cmdline_recv_issued = false;
     
- cleanup:
     return exit_status;
 }
 
diff --git a/orte/mca/rml/ftrm/rml_ftrm.h b/orte/mca/rml/ftrm/rml_ftrm.h
index 82a80e8..a1bd48a 100644
--- a/orte/mca/rml/ftrm/rml_ftrm.h
+++ b/orte/mca/rml/ftrm/rml_ftrm.h
@@ -63,7 +63,7 @@ BEGIN_C_DECLS
     /*
      * Set URI
      */
-    int orte_rml_ftrm_set_contact_info(const char* uri);
+    void orte_rml_ftrm_set_contact_info(const char* uri);
 
     /*
      * Ping
@@ -148,7 +148,7 @@ BEGIN_C_DECLS
     /*
      * Recv Cancel
      */
-    int orte_rml_ftrm_recv_cancel(orte_process_name_t* peer, orte_rml_tag_t tag);
+    void orte_rml_ftrm_recv_cancel(orte_process_name_t* peer, orte_rml_tag_t tag);
 
     /*
      * Register a callback on loss of connection
@@ -161,7 +161,7 @@ BEGIN_C_DECLS
      */
     int orte_rml_ftrm_ft_event(int state);
 
-    int orte_rml_ftrm_purge(orte_process_name_t *peer);
+    void orte_rml_ftrm_purge(orte_process_name_t *peer);
 
 END_C_DECLS
 
diff --git a/orte/mca/rml/ftrm/rml_ftrm_module.c b/orte/mca/rml/ftrm/rml_ftrm_module.c
index 76f9064..85b288e 100644
--- a/orte/mca/rml/ftrm/rml_ftrm_module.c
+++ b/orte/mca/rml/ftrm/rml_ftrm_module.c
@@ -94,20 +94,14 @@ char * orte_rml_ftrm_get_contact_info(void)
 /*
  * Set CONTACT_INFO
  */
-int orte_rml_ftrm_set_contact_info(const char* contact_info)
+void orte_rml_ftrm_set_contact_info(const char* contact_info)
 {
-    int ret;
-
     opal_output_verbose(20, rml_ftrm_output_handle,
                         &quot;orte_rml_ftrm: set_contact_info()&quot;);
 
     if( NULL != orte_rml_ftrm_wrapped_module.set_contact_info ) {
-        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.set_contact_info(contact_info) ) ) {
-            return ret;
-        }
+        orte_rml_ftrm_wrapped_module.set_contact_info(contact_info);
     }
-
-    return ORTE_SUCCESS;
 }
 
 
@@ -330,20 +324,14 @@ int orte_rml_ftrm_recv_buffer_nb(orte_process_name_t* peer,
 /*
  * Recv Cancel
  */
-int orte_rml_ftrm_recv_cancel(orte_process_name_t* peer, orte_rml_tag_t tag)
+void orte_rml_ftrm_recv_cancel(orte_process_name_t* peer, orte_rml_tag_t tag)
 {
-    int ret;
-
     opal_output_verbose(20, rml_ftrm_output_handle,
                         &quot;orte_rml_ftrm: recv_cancel()&quot;);
 
     if( NULL != orte_rml_ftrm_wrapped_module.recv_cancel ) {
-        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.recv_cancel(peer, tag) ) ) {
-            return ret;
-        }
+        orte_rml_ftrm_wrapped_module.recv_cancel(peer, tag);
     }
-
-    return ORTE_SUCCESS;
 }
 
 
@@ -436,18 +424,12 @@ int orte_rml_ftrm_ft_event(int state)
     return ORTE_SUCCESS;
 }
 
-int orte_rml_ftrm_purge(orte_process_name_t *peer)
+void orte_rml_ftrm_purge(orte_process_name_t *peer)
 {
-    int ret;
-    
     opal_output_verbose(20, rml_ftrm_output_handle,
                         &quot;orte_rml_ftrm: purge()&quot;);
-    
+
     if( NULL != orte_rml_ftrm_wrapped_module.purge ) {
-        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.purge(peer) ) ) {
-            return ret;
-        }
+        orte_rml_ftrm_wrapped_module.purge(peer);
     }
-    
-    return ORTE_SUCCESS;
 }
diff --git a/orte/mca/snapc/full/snapc_full_global.c b/orte/mca/snapc/full/snapc_full_global.c
index 8f1317b..c88c6db 100644
--- a/orte/mca/snapc/full/snapc_full_global.c
+++ b/orte/mca/snapc/full/snapc_full_global.c
@@ -905,26 +905,17 @@ static int snapc_full_global_start_listener(void)
 
 static int snapc_full_global_stop_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-    
     if (!snapc_orted_recv_issued &amp;&amp; ORTE_PROC_IS_HNP) {
         return ORTE_SUCCESS;
     }
-    
+
     OPAL_OUTPUT_VERBOSE((5, mca_snapc_full_component.super.output_handle,
                          &quot;Global) Shutdown Coordinator Channel&quot;));
-    
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
-                                                    ORTE_RML_TAG_SNAPC_FULL))) {
-        ORTE_ERROR_LOG(ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+
+    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SNAPC_FULL);
 
     snapc_orted_recv_issued = false;
-    
- cleanup:
-    return exit_status;
+    return ORTE_SUCCESS;
 }
 
 static int snapc_full_global_start_cmdline_listener(void)
@@ -959,26 +950,17 @@ static int snapc_full_global_start_cmdline_listener(void)
 
 static int snapc_full_global_stop_cmdline_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-    
     if (!snapc_cmdline_recv_issued &amp;&amp; ORTE_PROC_IS_HNP) {
         return ORTE_SUCCESS;
     }
-    
+
     OPAL_OUTPUT_VERBOSE((5, mca_snapc_full_component.super.output_handle,
                          &quot;Global) Shutdown Command Line Channel&quot;));
-    
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
-                                                    ORTE_RML_TAG_CKPT))) {
-        ORTE_ERROR_LOG(ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+
+    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_CKPT);
 
     snapc_cmdline_recv_issued = false;
-    
- cleanup:
-    return exit_status;
+    return ORTE_SUCCESS;
 }
 
 /*****************
diff --git a/orte/mca/snapc/full/snapc_full_local.c b/orte/mca/snapc/full/snapc_full_local.c
index 0975d77..c0b168a 100644
--- a/orte/mca/snapc/full/snapc_full_local.c
+++ b/orte/mca/snapc/full/snapc_full_local.c
@@ -378,8 +378,6 @@ static int snapc_full_local_start_hnp_listener(void)
 
 static int snapc_full_local_stop_hnp_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-
     /*
      * Global Coordinator: Does not register a Local listener
      */
@@ -393,18 +391,11 @@ static int snapc_full_local_stop_hnp_listener(void)
 
     OPAL_OUTPUT_VERBOSE((5, mca_snapc_full_component.super.output_handle,
                          &quot;Local) Shutdown Coordinator Channel&quot;));
-    
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
-                                                    ORTE_RML_TAG_SNAPC_FULL))) {
-        ORTE_ERROR_LOG(ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+
+    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SNAPC_FULL);
 
     snapc_local_hnp_recv_issued = false;
-    
- cleanup:
-    return exit_status;
+    return ORTE_SUCCESS;
 }
 
 static int snapc_full_local_start_app_listener(void)
@@ -439,26 +430,17 @@ static int snapc_full_local_start_app_listener(void)
 
 static int snapc_full_local_stop_app_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-    
     if (!snapc_local_app_recv_issued ) {
         return ORTE_SUCCESS;
     }
-    
+
     OPAL_OUTPUT_VERBOSE((5, mca_snapc_full_component.super.output_handle,
                          &quot;Local) Shutdown Application State Channel&quot;));
-    
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
-                                                    ORTE_RML_TAG_SNAPC))) {
-        ORTE_ERROR_LOG(ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+
+    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SNAPC);
 
     snapc_local_app_recv_issued = false;
-    
- cleanup:
-    return exit_status;
+    return ORTE_SUCCESS;
 }
 
 /******************
diff --git a/orte/mca/sstore/central/sstore_central_global.c b/orte/mca/sstore/central/sstore_central_global.c
index cd41aef..935b6fe 100644
--- a/orte/mca/sstore/central/sstore_central_global.c
+++ b/orte/mca/sstore/central/sstore_central_global.c
@@ -824,19 +824,10 @@ static int sstore_central_global_start_listener(void)
 
 static int sstore_central_global_stop_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
-                                                    ORTE_RML_TAG_SSTORE_INTERNAL))) {
-        ORTE_ERROR_LOG(ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SSTORE_INTERNAL);
 
     is_global_listener_active = false;
-    
- cleanup:
-    return exit_status;
+    return ORTE_SUCCESS;
 }
 
 static void sstore_central_global_recv(int status,
diff --git a/orte/mca/sstore/central/sstore_central_local.c b/orte/mca/sstore/central/sstore_central_local.c
index 0442dd0..35ef518 100644
--- a/orte/mca/sstore/central/sstore_central_local.c
+++ b/orte/mca/sstore/central/sstore_central_local.c
@@ -643,19 +643,10 @@ static int sstore_central_local_start_listener(void)
 
 static int sstore_central_local_stop_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
-                                                    ORTE_RML_TAG_SSTORE_INTERNAL))) {
-        ORTE_ERROR_LOG(ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SSTORE_INTERNAL);
 
     is_global_listener_active = false;
-    
- cleanup:
-    return exit_status;
+    return ORTE_SUCCESS;
 }
 
 static int process_global_pull(orte_process_name_t* peer, opal_buffer_t* buffer, orte_sstore_central_local_snapshot_info_t *handle_info)
diff --git a/orte/mca/sstore/stage/sstore_stage_global.c b/orte/mca/sstore/stage/sstore_stage_global.c
index c79bfb9..1c8847a 100644
--- a/orte/mca/sstore/stage/sstore_stage_global.c
+++ b/orte/mca/sstore/stage/sstore_stage_global.c
@@ -1016,19 +1016,10 @@ static int sstore_stage_global_start_listener(void)
 
 static int sstore_stage_global_stop_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
-                                                    ORTE_RML_TAG_SSTORE_INTERNAL))) {
-        ORTE_ERROR_LOG(ret);
-        exit_status = ret;
-        goto cleanup;
-    }
+    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SSTORE_INTERNAL);
 
     is_global_listener_active = false;
-    
- cleanup:
-    return exit_status;
+    return ORTE_SUCCESS;
 }
 
 static void sstore_stage_global_recv(int status,
diff --git a/orte/mca/sstore/stage/sstore_stage_local.c b/orte/mca/sstore/stage/sstore_stage_local.c
index e3667ba..792c1a2 100644
--- a/orte/mca/sstore/stage/sstore_stage_local.c
+++ b/orte/mca/sstore/stage/sstore_stage_local.c
@@ -1067,19 +1067,9 @@ static int sstore_stage_local_start_listener(void)
 
 static int sstore_stage_local_stop_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
-                                                    ORTE_RML_TAG_SSTORE_INTERNAL))) {
-        ORTE_ERROR_LOG(ret);
-        exit_status = ret;
-        goto cleanup;
-    }
-
+    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SSTORE_INTERNAL);
     is_global_listener_active = false;
-    
- cleanup:
-    return exit_status;
+    return ORTE_SUCCESS;
 }
 
 static void sstore_stage_local_recv(int status,
diff --git a/orte/tools/orte-checkpoint/orte-checkpoint.c b/orte/tools/orte-checkpoint/orte-checkpoint.c
index 9f2e716..caa5949 100644
--- a/orte/tools/orte-checkpoint/orte-checkpoint.c
+++ b/orte/tools/orte-checkpoint/orte-checkpoint.c
@@ -671,22 +671,14 @@ static int start_listener(void)
 
 static int stop_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-
     if( !listener_started ) {
-        exit_status = ORTE_ERROR;
-        goto cleanup;
+        return ORTE_ERROR;
     }
 
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
-                                                    ORTE_RML_TAG_CKPT))) {
-        exit_status = ret;
-        goto cleanup;
-    }
+    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_CKPT);
 
     listener_started = false;
- cleanup:
-    return exit_status;
+    return ORTE_SUCCESS;
 }
 
 static void hnp_receiver(int status,
diff --git a/orte/tools/orte-migrate/orte-migrate.c b/orte/tools/orte-migrate/orte-migrate.c
index b1de924..7ba2074 100644
--- a/orte/tools/orte-migrate/orte-migrate.c
+++ b/orte/tools/orte-migrate/orte-migrate.c
@@ -532,22 +532,14 @@ static int start_listener(void)
 
 static int stop_listener(void)
 {
-    int ret, exit_status = ORTE_SUCCESS;
-
     if( !listener_started ) {
-        exit_status = ORTE_ERROR;
-        goto cleanup;
+        return ORTE_ERROR;
     }
 
-    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
-                                                    ORTE_RML_TAG_MIGRATE))) {
-        exit_status = ret;
-        goto cleanup;
-    }
+    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_MIGRATE);
 
     listener_started = false;
- cleanup:
-    return exit_status;
+    return ORTE_SUCCESS;
 }
 
 static void hnp_receiver(int status,
-- 
1.8.3.1
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13334.php">Adrian Reber: "[OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13332.php">Adrian Reber: "[OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>In reply to:</strong> <a href="13330.php">Adrian Reber: "[OMPI devel] [PATCH 0/4] Trying to get the C/R code to compile again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13373.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile	again. (void value not ignored)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13373.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile	again. (void value not ignored)"</a>
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
