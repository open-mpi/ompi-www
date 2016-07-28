<?
$subject_val = "[OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 09:59:26 2013" -->
<!-- isoreceived="20131125145926" -->
<!-- sent="Mon, 25 Nov 2013 15:59:23 +0100" -->
<!-- isosent="20131125145923" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)" -->
<!-- id="1385391563-29584-5-git-send-email-adrian_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-25 09:59:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13333.php">Adrian Reber: "[OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile again. (void value not ignored)"</a>
<li><strong>Previous message:</strong> <a href="13331.php">Adrian Reber: "[OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>In reply to:</strong> <a href="13330.php">Adrian Reber: "[OMPI devel] [PATCH 0/4] Trying to get the C/R code to compile again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
From: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
<br>
<p>This are the remaining changes to get C/R to compile again. This patch
<br>
includes various fixes all over the C/R code and are hard to group
<br>
like the previous patches.
<br>
<p>Signed-off-by: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
<br>
<pre>
---
 ompi/mca/bml/r2/bml_r2_ft.c                    | 10 +++++-----
 opal/mca/base/mca_base_components_open.c       |  4 +---
 opal/mca/crs/self/crs_self_component.c         | 16 ++++++++--------
 opal/tools/opal-restart/opal-restart.c         |  2 +-
 orte/mca/errmgr/base/errmgr_base_fns.c         |  6 +++---
 orte/mca/ess/env/ess_env_module.c              |  2 +-
 orte/mca/plm/base/plm_base_launch_support.c    |  1 +
 orte/mca/rml/oob/rml_oob_component.c           |  9 ++-------
 orte/mca/snapc/base/snapc_base_frame.c         |  4 ++--
 orte/mca/snapc/full/snapc_full_app.c           | 15 +++++++++++++++
 orte/mca/snapc/full/snapc_full_component.c     |  7 ++++---
 orte/mca/snapc/full/snapc_full_global.c        |  8 ++++----
 orte/mca/snapc/full/snapc_full_local.c         |  2 +-
 orte/mca/sstore/stage/sstore_stage_component.c |  5 +++++
 14 files changed, 53 insertions(+), 38 deletions(-)
diff --git a/ompi/mca/bml/r2/bml_r2_ft.c b/ompi/mca/bml/r2/bml_r2_ft.c
index 1448c04..fc16452 100644
--- a/ompi/mca/bml/r2/bml_r2_ft.c
+++ b/ompi/mca/bml/r2/bml_r2_ft.c
@@ -191,7 +191,7 @@ int mca_bml_r2_ft_event(int state)
 
             for(p = 0; p &lt; (int)num_procs; ++p) {
                 if( NULL != procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]) {
-                    OBJ_RELEASE((mca_bml_base_endpoint_t*) procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]);
+                    OBJ_RELEASE(procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]);
                     procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML] = NULL;
                 }
 
@@ -263,9 +263,9 @@ int mca_bml_r2_ft_event(int state)
         mca_base_var_get_value(param_type, &amp;btl_list, NULL, NULL);
         opal_output_verbose(11, ompi_cr_output,
                             &quot;Restart (New BTL MCA): &lt;%s&gt;\n&quot;, btl_list ? btl_list[0] : &quot;&quot;);
-        if( NULL != param_list ) {
-            free(param_list);
-            param_list = NULL;
+        if( NULL != btl_list ) {
+            free(btl_list);
+            btl_list = NULL;
         }
 
         /*
@@ -286,7 +286,7 @@ int mca_bml_r2_ft_event(int state)
 
         for(p = 0; p &lt; (int)num_procs; ++p) {
             if( NULL != procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]) {
-                OBJ_RELEASE((mca_bml_base_endpoint_t*) procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]);
+                OBJ_RELEASE(procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]);
                 procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML] = NULL;
             }
 
diff --git a/opal/mca/base/mca_base_components_open.c b/opal/mca/base/mca_base_components_open.c
index e46e0f3..8d5e9da 100644
--- a/opal/mca/base/mca_base_components_open.c
+++ b/opal/mca/base/mca_base_components_open.c
@@ -141,9 +141,7 @@ static int open_components(mca_base_framework_t *framework)
      * NTH: Logic moved to mca_base_components_filter.
      */
 #if (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1)
-    if (mca_base_component_distill_checkpoint_ready) {
-        open_only_flags |= MCA_BASE_METADATA_PARAM_CHECKPOINT;
-    }
+    open_only_flags |= MCA_BASE_METADATA_PARAM_CHECKPOINT;
 #endif  /* (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1) */
 
     /* If mca_base_framework_register_components was called with the MCA_BASE_COMPONENTS_ALL flag 
diff --git a/opal/mca/crs/self/crs_self_component.c b/opal/mca/crs/self/crs_self_component.c
index e0ca1ab..eb45d59 100644
--- a/opal/mca/crs/self/crs_self_component.c
+++ b/opal/mca/crs/self/crs_self_component.c
@@ -90,9 +90,9 @@ static int crs_self_register (void)
     mca_crs_self_component.super.priority = 20;
     ret = mca_base_component_var_register (&amp;mca_crs_self_component.super.base_version,
                                            &quot;priority&quot;, &quot;Priority of the CRS self component &quot;
-                                           &quot;(default: 20)&quot;, MCA_BASE_VAR_TYPE_INT, NULL,
+                                           &quot;(default: 20)&quot;, MCA_BASE_VAR_TYPE_INT, NULL, 0,
                                            MCA_BASE_VAR_FLAG_SETTABLE,
-                                           OPAL_INFO_LVL_9, MPI_BASE_VAR_SCOPE_ALL_EQ,
+                                           OPAL_INFO_LVL_9, MCA_BASE_VAR_SCOPE_ALL_EQ,
                                            &amp;mca_crs_self_component.super.priority);
     if (0 &gt; ret) {
         return ret;
@@ -102,8 +102,8 @@ static int crs_self_register (void)
     ret = mca_base_component_var_register (&amp;mca_crs_self_component.super.base_version,
                                            &quot;verbose&quot;,
                                            &quot;Verbose level for the CRS self component&quot;,
-                                           MCA_BASE_VAR_TYPE_INT, NULL,MCA_BASE_VAR_FLAG_SETTABLE,
-                                           OPAL_INFO_LVL_9, MPI_BASE_VAR_SCOPE_LOCAL,
+                                           MCA_BASE_VAR_TYPE_INT, NULL, 0, MCA_BASE_VAR_FLAG_SETTABLE,
+                                           OPAL_INFO_LVL_9, MCA_BASE_VAR_SCOPE_LOCAL,
                                            &amp;mca_crs_self_component.super.verbose);
     if (0 &gt; ret) {
         return ret;
@@ -116,8 +116,8 @@ static int crs_self_register (void)
     ret = mca_base_component_var_register (&amp;mca_crs_self_component.super.base_version,
                                            &quot;prefix&quot;,
                                            &quot;Prefix for user defined callback functions&quot;,
-                                           MCA_BASE_VAR_TYPE_STRING, NULL, MCA_BASE_VAR_FLAG_SETTABLE,
-                                           OPAL_INFO_LVL_9, MPI_BASE_VAR_SCOPE_LOCAL,
+                                           MCA_BASE_VAR_TYPE_STRING, NULL, 0, MCA_BASE_VAR_FLAG_SETTABLE,
+                                           OPAL_INFO_LVL_9, MCA_BASE_VAR_SCOPE_LOCAL,
                                            &amp;mca_crs_self_component.prefix);
     if (0 &gt; ret) {
         return ret;
@@ -126,8 +126,8 @@ static int crs_self_register (void)
     ret = mca_base_component_var_register (&amp;mca_crs_self_component.super.base_version,
                                            &quot;do_restart&quot;,
                                            &quot;Start execution by calling restart callback&quot;,
-                                           MCA_BASE_VAR_TYPE_BOOL, NULL, MCA_BASE_VAR_FLAG_SETTABLE,
-                                           OPAL_INFO_LVL_9, MPI_BASE_VAR_SCOPE_LOCAL,
+                                           MCA_BASE_VAR_TYPE_BOOL, NULL, 0, MCA_BASE_VAR_FLAG_SETTABLE,
+                                           OPAL_INFO_LVL_9, MCA_BASE_VAR_SCOPE_LOCAL,
                                            &amp;mca_crs_self_component.do_restart);
     return (0 &gt; ret) ? ret : OPAL_SUCCESS;
 }
diff --git a/opal/tools/opal-restart/opal-restart.c b/opal/tools/opal-restart/opal-restart.c
index 35b7843..53da7f3 100644
--- a/opal/tools/opal-restart/opal-restart.c
+++ b/opal/tools/opal-restart/opal-restart.c
@@ -247,7 +247,7 @@ main(int argc, char *argv[])
      * restart on this node because it doesn't have the proper checkpointer
      * available. 
      */
-    if( OPAL_SUCCESS != (ret = opal_crs_base_open()) ) {
+    if( OPAL_SUCCESS != (ret = opal_crs_base_open(MCA_BASE_OPEN_DEFAULT)) ) {
         opal_show_help(&quot;help-opal-restart.txt&quot;, &quot;comp_select_failure&quot;, true,
                        &quot;crs&quot;, ret);
         exit_status = ret;
diff --git a/orte/mca/errmgr/base/errmgr_base_fns.c b/orte/mca/errmgr/base/errmgr_base_fns.c
index 399c237..e466cbf 100644
--- a/orte/mca/errmgr/base/errmgr_base_fns.c
+++ b/orte/mca/errmgr/base/errmgr_base_fns.c
@@ -342,7 +342,7 @@ void orte_errmgr_base_execute_error_callbacks(opal_pointer_array_t *errors)
  ********************/
 #if OPAL_ENABLE_FT_CR
 
-void orte_errmgr_base_migrate_state_notify(int state)
+ORTE_DECLSPEC void orte_errmgr_base_migrate_state_notify(int state)
 {
     switch(state) {
     case ORTE_ERRMGR_MIGRATE_STATE_ERROR:
@@ -366,7 +366,7 @@ void orte_errmgr_base_migrate_state_notify(int state)
     }
 }
 
-void orte_errmgr_base_proc_state_notify(orte_proc_state_t state, orte_process_name_t *proc)
+ORTE_DECLSPEC int orte_errmgr_base_proc_state_notify(orte_proc_state_t state, orte_process_name_t *proc)
 {
     if (NULL != proc) {
         switch(state) {
@@ -401,7 +401,7 @@ void orte_errmgr_base_proc_state_notify(orte_proc_state_t state, orte_process_na
     }
 }
 
-int orte_errmgr_base_migrate_state_str(char ** state_str, int state)
+ORTE_DECLSPEC int orte_errmgr_base_migrate_state_str(char ** state_str, int state)
 {
     switch(state) {
     case ORTE_ERRMGR_MIGRATE_STATE_NONE:
diff --git a/orte/mca/ess/env/ess_env_module.c b/orte/mca/ess/env/ess_env_module.c
index 6a71230..52092b5 100644
--- a/orte/mca/ess/env/ess_env_module.c
+++ b/orte/mca/ess/env/ess_env_module.c
@@ -422,7 +422,7 @@ static int rte_ft_event(int state)
             exit_status = ret;
             goto cleanup;
         }
-        if (ORTE_SUCCESS != (ret = orte_db.remove(NULL, NULL))) {
+        if (ORTE_SUCCESS != (ret = opal_db.remove(NULL, NULL))) {
             ORTE_ERROR_LOG(ret);
             exit_status = ret;
             goto cleanup;
diff --git a/orte/mca/plm/base/plm_base_launch_support.c b/orte/mca/plm/base/plm_base_launch_support.c
index 3deee11..6aba2c2 100644
--- a/orte/mca/plm/base/plm_base_launch_support.c
+++ b/orte/mca/plm/base/plm_base_launch_support.c
@@ -333,6 +333,7 @@ void orte_plm_base_complete_setup(int fd, short args, void *cbdata)
 {
     orte_job_t *jdata, *jdatorted;
     orte_state_caddy_t *caddy = (orte_state_caddy_t*)cbdata;
+    int rc;
 
     /* if we don't want to launch the apps, now is the time to leave */
     if (orte_do_not_launch) {
diff --git a/orte/mca/rml/oob/rml_oob_component.c b/orte/mca/rml/oob/rml_oob_component.c
index dd539cd..b91f4a3 100644
--- a/orte/mca/rml/oob/rml_oob_component.c
+++ b/orte/mca/rml/oob/rml_oob_component.c
@@ -11,11 +11,7 @@
  * Copyright (c) 2004-2005 The Regents of the University of California.
  *                         All rights reserved.
  * Copyright (c) 2007      Cisco Systems, Inc.  All rights reserved.
-&lt;&lt;&lt;&lt;&lt;&lt;&lt; .mine
- * Copyright (c) 2011-2012 Los Alamos National Security, LLC.
-=======
  * Copyright (c) 2011-2013 Los Alamos National Security, LLC.
-&gt;&gt;&gt;&gt;&gt;&gt;&gt; .r28253
  *                         All rights reserved.
  * $COPYRIGHT$
  * 
@@ -189,8 +185,7 @@ orte_rml_oob_ft_event(int state) {
         ;
     }
 
-    if( ORTE_SUCCESS != 
-        (ret = orte_oob.ft_event(state)) ) {
+    if( ORTE_SUCCESS != (ret = orte_rml_oob_module.super.ft_event(state)) ) {
         ORTE_ERROR_LOG(ret);
         exit_status = ret;
         goto cleanup;
@@ -212,7 +207,7 @@ orte_rml_oob_ft_event(int state) {
             goto cleanup;
         }
 
-        if( ORTE_SUCCESS != (ret = mca_oob_base_select())) {
+        if( ORTE_SUCCESS != (ret = orte_oob_base_select())) {
             ORTE_ERROR_LOG(ret);
             exit_status = ret;
             goto cleanup;
diff --git a/orte/mca/snapc/base/snapc_base_frame.c b/orte/mca/snapc/base/snapc_base_frame.c
index edb8e6e..a46c77a 100644
--- a/orte/mca/snapc/base/snapc_base_frame.c
+++ b/orte/mca/snapc/base/snapc_base_frame.c
@@ -79,7 +79,7 @@ static int orte_snapc_base_register(mca_base_register_flag_t flags)
     return ORTE_SUCCESS;
 }
 
-static int orte_snapc_base_close(void)
+int orte_snapc_base_close(void)
 {
     /* Close the selected component */
     if( NULL != orte_snapc.snapc_finalize ) {
@@ -93,7 +93,7 @@ static int orte_snapc_base_close(void)
  * Function for finding and opening either all MCA components,
  * or the one that was specifically requested via a MCA parameter.
  */
-static int orte_snapc_base_open(mca_base_open_flag_t flags)
+int orte_snapc_base_open(mca_base_open_flag_t flags)
 {
     /* Init the sequence (interval) number */
     orte_snapc_base_snapshot_seq_number = 0;
diff --git a/orte/mca/snapc/full/snapc_full_app.c b/orte/mca/snapc/full/snapc_full_app.c
index e2cd4f3..6a53a0d 100644
--- a/orte/mca/snapc/full/snapc_full_app.c
+++ b/orte/mca/snapc/full/snapc_full_app.c
@@ -99,6 +99,12 @@ static int current_cr_state = OPAL_CRS_NONE;
 static orte_sstore_base_handle_t current_ss_handle = ORTE_SSTORE_HANDLE_INVALID, last_ss_handle = ORTE_SSTORE_HANDLE_INVALID;
 static opal_crs_base_ckpt_options_t *current_options = NULL;
 
+static void snapc_full_app_callback_recv(int status,
+                                         orte_process_name_t* sender,
+                                         opal_buffer_t* buffer,
+                                         orte_rml_tag_t tag,
+                                         void* cbdata);
+
 /************************
  * Function Definitions
  ************************/
@@ -1658,3 +1664,12 @@ int app_coord_request_op(orte_snapc_base_request_op_t *datum)
 
     return exit_status;
 }
+
+/* dummy implementation of a callback function to get it to compile again */
+static void snapc_full_app_callback_recv(int status,
+                                         orte_process_name_t* sender,
+                                         opal_buffer_t* buffer,
+                                         orte_rml_tag_t tag,
+                                         void* cbdata)
+{
+}
diff --git a/orte/mca/snapc/full/snapc_full_component.c b/orte/mca/snapc/full/snapc_full_component.c
index 7815363..b953e17 100644
--- a/orte/mca/snapc/full/snapc_full_component.c
+++ b/orte/mca/snapc/full/snapc_full_component.c
@@ -32,6 +32,7 @@ const char *orte_snapc_full_component_version_string =
  */
 static int snapc_full_open(void);
 static int snapc_full_close(void);
+static int snapc_full_register(void);
 
 bool orte_snapc_full_skip_app   = false;
 bool orte_snapc_full_timing_enabled = false;
@@ -74,7 +75,7 @@ orte_snapc_full_component_t mca_snapc_full_component = {
     }
 };
 
-static int snaps_full_register (void)
+static int snapc_full_register (void)
 {
     mca_base_component_t *component = &amp;mca_snapc_full_component.super.base_version;
     /*
@@ -129,7 +130,7 @@ static int snaps_full_register (void)
                                             OPAL_INFO_LVL_9,
                                             MCA_BASE_VAR_SCOPE_LOCAL,
                                             &amp;orte_snapc_full_progress_meter);
-    orte_snapc_full_progress_meter = (value % 101);
+    orte_snapc_full_progress_meter %= 101;
 
     return ORTE_SUCCESS;
 }
@@ -148,7 +149,7 @@ static int snapc_full_open(void)
     }
 
     /* recheck the progress meter (it may have changed between register and open) */
-    orte_snapc_full_progress_meter = (value % 101);
+    orte_snapc_full_progress_meter %= 101;
 
     /*
      * Debug Output
diff --git a/orte/mca/snapc/full/snapc_full_global.c b/orte/mca/snapc/full/snapc_full_global.c
index 87c687b..d812d1f 100644
--- a/orte/mca/snapc/full/snapc_full_global.c
+++ b/orte/mca/snapc/full/snapc_full_global.c
@@ -513,7 +513,7 @@ int global_coord_end_ckpt(orte_snapc_base_quiesce_t *datum)
     if( currently_migrating ) {
         OPAL_OUTPUT_VERBOSE((10, mca_snapc_full_component.super.output_handle,
                              &quot;Global) End Ckpt: Flush the modex cached data\n&quot;));
-        if (ORTE_SUCCESS != (ret = orte_db.remove(NULL, NULL))) {
+        if (ORTE_SUCCESS != (ret = opal_db.remove(NULL, NULL))) {
             ORTE_ERROR_LOG(ret);
             exit_status = ret;
             goto cleanup;
@@ -1117,7 +1117,7 @@ void snapc_full_global_orted_recv(int status,
             OPAL_OUTPUT_VERBOSE((10, mca_snapc_full_component.super.output_handle,
                                  &quot;Global) Command: Job State Update (quick)&quot;));
 
-            snapc_full_process_job_update_cmd(&amp;sender, buffer, true);
+            snapc_full_process_job_update_cmd(sender, buffer, true);
             break;
 
         case ORTE_SNAPC_FULL_UPDATE_JOB_STATE_CMD:
@@ -1953,7 +1953,7 @@ static void snapc_full_process_job_update_cmd(orte_process_name_t* sender,
 
 static int snapc_full_establish_snapshot_dir(bool empty_metadata)
 {
-    const char **value = NULL;
+    char **value = NULL;
     int idx = 0;
 
     /*********************
@@ -1977,7 +1977,7 @@ static int snapc_full_establish_snapshot_dir(bool empty_metadata)
         opal_show_help(&quot;help-orte-restart.txt&quot;, &quot;amca_param_not_found&quot;, true);
     }
     if( 0 &lt; idx ) {
-        mca_base_var_get_value (idx, &amp;value, sizeof (value), NULL, NULL);
+        mca_base_var_get_value (idx, &amp;value, NULL, NULL);
 
         if (*value) {
             orte_sstore.set_attr(global_snapshot.ss_handle,
diff --git a/orte/mca/snapc/full/snapc_full_local.c b/orte/mca/snapc/full/snapc_full_local.c
index 5df216d..98c6977 100644
--- a/orte/mca/snapc/full/snapc_full_local.c
+++ b/orte/mca/snapc/full/snapc_full_local.c
@@ -1756,7 +1756,7 @@ static void snapc_full_local_comm_read_event(int fd, short flags, void *arg)
     if( currently_migrating &amp;&amp; !flushed_modex ) {
         OPAL_OUTPUT_VERBOSE((10, mca_snapc_full_component.super.output_handle,
                              &quot;Local) Read Event: Flush the modex cached data\n&quot;));
-        if (ORTE_SUCCESS != (ret = orte_db.remove(NULL, NULL))) {
+        if (ORTE_SUCCESS != (ret = opal_db.remove(NULL, NULL))) {
             ORTE_ERROR_LOG(ret);
             exit_status = ret;
             goto cleanup;
diff --git a/orte/mca/sstore/stage/sstore_stage_component.c b/orte/mca/sstore/stage/sstore_stage_component.c
index 19d7c75..aca2b46 100644
--- a/orte/mca/sstore/stage/sstore_stage_component.c
+++ b/orte/mca/sstore/stage/sstore_stage_component.c
@@ -235,3 +235,8 @@ static int sstore_stage_close(void)
 
     return ORTE_SUCCESS;
 }
+
+static int sstore_stage_register(void)
+{
+    return ORTE_SUCCESS;
+}
-- 
1.8.3.1
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13333.php">Adrian Reber: "[OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile again. (void value not ignored)"</a>
<li><strong>Previous message:</strong> <a href="13331.php">Adrian Reber: "[OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>In reply to:</strong> <a href="13330.php">Adrian Reber: "[OMPI devel] [PATCH 0/4] Trying to get the C/R code to compile again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
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
