<?
$subject_val = "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  9 13:08:05 2013" -->
<!-- isoreceived="20131209180805" -->
<!-- sent="Mon, 9 Dec 2013 10:07:36 -0800" -->
<!-- isosent="20131209180736" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)" -->
<!-- id="5EF16AE5-CADC-4ED2-ACCE-24B22083F95C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1386596282-2570-1-git-send-email-adrian_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-09 13:07:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13403.php">Ralph Castain: "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Previous message:</strong> <a href="13401.php">Adrian Reber: "[OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>In reply to:</strong> <a href="13401.php">Adrian Reber: "[OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13406.php">Ralph Castain: "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Reply:</strong> <a href="13406.php">Ralph Castain: "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see some things in here that concern me. First, there are variables being added to functions that would appear to generate &quot;not used&quot; warnings if ft is not enabled - they need to be properly protected. Second, I see references like this one:
<br>
<p>-        (ret = orte_oob.ft_event(state)) ) {
<br>
+    if( ORTE_SUCCESS != (ret = orte_rml_oob_module.super.ft_event(state)) ) {
<br>
<p>This doesn't seem right - if we are referencing the OOB, then we need to go directly to it. I'll have to check/correct the code, but the RML shouldn't even be storing a pointer to the OOB in it as there no longer is a direct linkage.
<br>
<p><p>On Dec 9, 2013, at 5:38 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This are the remaining changes to get C/R to compile again. This patch
</span><br>
<span class="quotelev1">&gt; includes various fixes all over the C/R code and are hard to group
</span><br>
<span class="quotelev1">&gt; like the previous patches.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Changes from V1:
</span><br>
<span class="quotelev1">&gt; * explain why mca_base_component_distill_checkpoint_ready no longer works
</span><br>
<span class="quotelev1">&gt; * compare return result of opal functions with OPAL_* values
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Signed-off-by: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; ompi/mca/bml/r2/bml_r2_ft.c                    | 10 +++++-----
</span><br>
<span class="quotelev1">&gt; opal/mca/base/mca_base_components_open.c       |  9 +++++++++
</span><br>
<span class="quotelev1">&gt; opal/mca/crs/self/crs_self_component.c         | 16 ++++++++--------
</span><br>
<span class="quotelev1">&gt; opal/tools/opal-restart/opal-restart.c         |  2 +-
</span><br>
<span class="quotelev1">&gt; orte/mca/errmgr/base/errmgr_base_fns.c         |  2 +-
</span><br>
<span class="quotelev1">&gt; orte/mca/ess/env/ess_env_module.c              |  2 +-
</span><br>
<span class="quotelev1">&gt; orte/mca/plm/base/plm_base_launch_support.c    |  1 +
</span><br>
<span class="quotelev1">&gt; orte/mca/rml/oob/rml_oob_component.c           |  9 ++-------
</span><br>
<span class="quotelev1">&gt; orte/mca/snapc/base/snapc_base_frame.c         |  4 ++--
</span><br>
<span class="quotelev1">&gt; orte/mca/snapc/full/snapc_full_app.c           | 15 +++++++++++++++
</span><br>
<span class="quotelev1">&gt; orte/mca/snapc/full/snapc_full_component.c     |  7 ++++---
</span><br>
<span class="quotelev1">&gt; orte/mca/snapc/full/snapc_full_global.c        |  8 ++++----
</span><br>
<span class="quotelev1">&gt; orte/mca/snapc/full/snapc_full_local.c         |  2 +-
</span><br>
<span class="quotelev1">&gt; orte/mca/sstore/stage/sstore_stage_component.c |  5 +++++
</span><br>
<span class="quotelev1">&gt; 14 files changed, 59 insertions(+), 33 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/bml/r2/bml_r2_ft.c b/ompi/mca/bml/r2/bml_r2_ft.c
</span><br>
<span class="quotelev1">&gt; index 1448c04..fc16452 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/bml/r2/bml_r2_ft.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/bml/r2/bml_r2_ft.c
</span><br>
<span class="quotelev1">&gt; @@ -191,7 +191,7 @@ int mca_bml_r2_ft_event(int state)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             for(p = 0; p &lt; (int)num_procs; ++p) {
</span><br>
<span class="quotelev1">&gt;                 if( NULL != procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]) {
</span><br>
<span class="quotelev1">&gt; -                    OBJ_RELEASE((mca_bml_base_endpoint_t*) procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]);
</span><br>
<span class="quotelev1">&gt; +                    OBJ_RELEASE(procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]);
</span><br>
<span class="quotelev1">&gt;                     procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML] = NULL;
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -263,9 +263,9 @@ int mca_bml_r2_ft_event(int state)
</span><br>
<span class="quotelev1">&gt;         mca_base_var_get_value(param_type, &amp;btl_list, NULL, NULL);
</span><br>
<span class="quotelev1">&gt;         opal_output_verbose(11, ompi_cr_output,
</span><br>
<span class="quotelev1">&gt;                             &quot;Restart (New BTL MCA): &lt;%s&gt;\n&quot;, btl_list ? btl_list[0] : &quot;&quot;);
</span><br>
<span class="quotelev1">&gt; -        if( NULL != param_list ) {
</span><br>
<span class="quotelev1">&gt; -            free(param_list);
</span><br>
<span class="quotelev1">&gt; -            param_list = NULL;
</span><br>
<span class="quotelev1">&gt; +        if( NULL != btl_list ) {
</span><br>
<span class="quotelev1">&gt; +            free(btl_list);
</span><br>
<span class="quotelev1">&gt; +            btl_list = NULL;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /*
</span><br>
<span class="quotelev1">&gt; @@ -286,7 +286,7 @@ int mca_bml_r2_ft_event(int state)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         for(p = 0; p &lt; (int)num_procs; ++p) {
</span><br>
<span class="quotelev1">&gt;             if( NULL != procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]) {
</span><br>
<span class="quotelev1">&gt; -                OBJ_RELEASE((mca_bml_base_endpoint_t*) procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]);
</span><br>
<span class="quotelev1">&gt; +                OBJ_RELEASE(procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]);
</span><br>
<span class="quotelev1">&gt;                 procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML] = NULL;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/mca/base/mca_base_components_open.c b/opal/mca/base/mca_base_components_open.c
</span><br>
<span class="quotelev1">&gt; index e46e0f3..4568a51 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/base/mca_base_components_open.c
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/base/mca_base_components_open.c
</span><br>
<span class="quotelev1">&gt; @@ -141,9 +141,18 @@ static int open_components(mca_base_framework_t *framework)
</span><br>
<span class="quotelev1">&gt;      * NTH: Logic moved to mca_base_components_filter.
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt; #if (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1)
</span><br>
<span class="quotelev1">&gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev1">&gt; +    /* FIXME_FT
</span><br>
<span class="quotelev1">&gt; +     *
</span><br>
<span class="quotelev1">&gt; +     * the variable mca_base_component_distill_checkpoint_ready
</span><br>
<span class="quotelev1">&gt; +     * was removed by commit 8181c8273c486bba59b3dead324939eac1a58b8c (r28237)
</span><br>
<span class="quotelev1">&gt; +     * &quot;Introduce the MCA framework system. This formalizes the interface frameworks must provide.&quot;
</span><br>
<span class="quotelev1">&gt; +     *
</span><br>
<span class="quotelev1">&gt; +     * */
</span><br>
<span class="quotelev1">&gt;     if (mca_base_component_distill_checkpoint_ready) {
</span><br>
<span class="quotelev1">&gt;         open_only_flags |= MCA_BASE_METADATA_PARAM_CHECKPOINT;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev1">&gt; #endif  /* (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1) */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* If mca_base_framework_register_components was called with the MCA_BASE_COMPONENTS_ALL flag 
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/mca/crs/self/crs_self_component.c b/opal/mca/crs/self/crs_self_component.c
</span><br>
<span class="quotelev1">&gt; index e0ca1ab..eb45d59 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/crs/self/crs_self_component.c
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/crs/self/crs_self_component.c
</span><br>
<span class="quotelev1">&gt; @@ -90,9 +90,9 @@ static int crs_self_register (void)
</span><br>
<span class="quotelev1">&gt;     mca_crs_self_component.super.priority = 20;
</span><br>
<span class="quotelev1">&gt;     ret = mca_base_component_var_register (&amp;mca_crs_self_component.super.base_version,
</span><br>
<span class="quotelev1">&gt;                                            &quot;priority&quot;, &quot;Priority of the CRS self component &quot;
</span><br>
<span class="quotelev1">&gt; -                                           &quot;(default: 20)&quot;, MCA_BASE_VAR_TYPE_INT, NULL,
</span><br>
<span class="quotelev1">&gt; +                                           &quot;(default: 20)&quot;, MCA_BASE_VAR_TYPE_INT, NULL, 0,
</span><br>
<span class="quotelev1">&gt;                                            MCA_BASE_VAR_FLAG_SETTABLE,
</span><br>
<span class="quotelev1">&gt; -                                           OPAL_INFO_LVL_9, MPI_BASE_VAR_SCOPE_ALL_EQ,
</span><br>
<span class="quotelev1">&gt; +                                           OPAL_INFO_LVL_9, MCA_BASE_VAR_SCOPE_ALL_EQ,
</span><br>
<span class="quotelev1">&gt;                                            &amp;mca_crs_self_component.super.priority);
</span><br>
<span class="quotelev1">&gt;     if (0 &gt; ret) {
</span><br>
<span class="quotelev1">&gt;         return ret;
</span><br>
<span class="quotelev1">&gt; @@ -102,8 +102,8 @@ static int crs_self_register (void)
</span><br>
<span class="quotelev1">&gt;     ret = mca_base_component_var_register (&amp;mca_crs_self_component.super.base_version,
</span><br>
<span class="quotelev1">&gt;                                            &quot;verbose&quot;,
</span><br>
<span class="quotelev1">&gt;                                            &quot;Verbose level for the CRS self component&quot;,
</span><br>
<span class="quotelev1">&gt; -                                           MCA_BASE_VAR_TYPE_INT, NULL,MCA_BASE_VAR_FLAG_SETTABLE,
</span><br>
<span class="quotelev1">&gt; -                                           OPAL_INFO_LVL_9, MPI_BASE_VAR_SCOPE_LOCAL,
</span><br>
<span class="quotelev1">&gt; +                                           MCA_BASE_VAR_TYPE_INT, NULL, 0, MCA_BASE_VAR_FLAG_SETTABLE,
</span><br>
<span class="quotelev1">&gt; +                                           OPAL_INFO_LVL_9, MCA_BASE_VAR_SCOPE_LOCAL,
</span><br>
<span class="quotelev1">&gt;                                            &amp;mca_crs_self_component.super.verbose);
</span><br>
<span class="quotelev1">&gt;     if (0 &gt; ret) {
</span><br>
<span class="quotelev1">&gt;         return ret;
</span><br>
<span class="quotelev1">&gt; @@ -116,8 +116,8 @@ static int crs_self_register (void)
</span><br>
<span class="quotelev1">&gt;     ret = mca_base_component_var_register (&amp;mca_crs_self_component.super.base_version,
</span><br>
<span class="quotelev1">&gt;                                            &quot;prefix&quot;,
</span><br>
<span class="quotelev1">&gt;                                            &quot;Prefix for user defined callback functions&quot;,
</span><br>
<span class="quotelev1">&gt; -                                           MCA_BASE_VAR_TYPE_STRING, NULL, MCA_BASE_VAR_FLAG_SETTABLE,
</span><br>
<span class="quotelev1">&gt; -                                           OPAL_INFO_LVL_9, MPI_BASE_VAR_SCOPE_LOCAL,
</span><br>
<span class="quotelev1">&gt; +                                           MCA_BASE_VAR_TYPE_STRING, NULL, 0, MCA_BASE_VAR_FLAG_SETTABLE,
</span><br>
<span class="quotelev1">&gt; +                                           OPAL_INFO_LVL_9, MCA_BASE_VAR_SCOPE_LOCAL,
</span><br>
<span class="quotelev1">&gt;                                            &amp;mca_crs_self_component.prefix);
</span><br>
<span class="quotelev1">&gt;     if (0 &gt; ret) {
</span><br>
<span class="quotelev1">&gt;         return ret;
</span><br>
<span class="quotelev1">&gt; @@ -126,8 +126,8 @@ static int crs_self_register (void)
</span><br>
<span class="quotelev1">&gt;     ret = mca_base_component_var_register (&amp;mca_crs_self_component.super.base_version,
</span><br>
<span class="quotelev1">&gt;                                            &quot;do_restart&quot;,
</span><br>
<span class="quotelev1">&gt;                                            &quot;Start execution by calling restart callback&quot;,
</span><br>
<span class="quotelev1">&gt; -                                           MCA_BASE_VAR_TYPE_BOOL, NULL, MCA_BASE_VAR_FLAG_SETTABLE,
</span><br>
<span class="quotelev1">&gt; -                                           OPAL_INFO_LVL_9, MPI_BASE_VAR_SCOPE_LOCAL,
</span><br>
<span class="quotelev1">&gt; +                                           MCA_BASE_VAR_TYPE_BOOL, NULL, 0, MCA_BASE_VAR_FLAG_SETTABLE,
</span><br>
<span class="quotelev1">&gt; +                                           OPAL_INFO_LVL_9, MCA_BASE_VAR_SCOPE_LOCAL,
</span><br>
<span class="quotelev1">&gt;                                            &amp;mca_crs_self_component.do_restart);
</span><br>
<span class="quotelev1">&gt;     return (0 &gt; ret) ? ret : OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/tools/opal-restart/opal-restart.c b/opal/tools/opal-restart/opal-restart.c
</span><br>
<span class="quotelev1">&gt; index 35b7843..53da7f3 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/tools/opal-restart/opal-restart.c
</span><br>
<span class="quotelev1">&gt; +++ b/opal/tools/opal-restart/opal-restart.c
</span><br>
<span class="quotelev1">&gt; @@ -247,7 +247,7 @@ main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt;      * restart on this node because it doesn't have the proper checkpointer
</span><br>
<span class="quotelev1">&gt;      * available. 
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt; -    if( OPAL_SUCCESS != (ret = opal_crs_base_open()) ) {
</span><br>
<span class="quotelev1">&gt; +    if( OPAL_SUCCESS != (ret = opal_crs_base_open(MCA_BASE_OPEN_DEFAULT)) ) {
</span><br>
<span class="quotelev1">&gt;         opal_show_help(&quot;help-opal-restart.txt&quot;, &quot;comp_select_failure&quot;, true,
</span><br>
<span class="quotelev1">&gt;                        &quot;crs&quot;, ret);
</span><br>
<span class="quotelev1">&gt;         exit_status = ret;
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/errmgr/base/errmgr_base_fns.c b/orte/mca/errmgr/base/errmgr_base_fns.c
</span><br>
<span class="quotelev1">&gt; index 399c237..e8f41a2 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/errmgr/base/errmgr_base_fns.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/errmgr/base/errmgr_base_fns.c
</span><br>
<span class="quotelev1">&gt; @@ -366,7 +366,7 @@ void orte_errmgr_base_migrate_state_notify(int state)
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -void orte_errmgr_base_proc_state_notify(orte_proc_state_t state, orte_process_name_t *proc)
</span><br>
<span class="quotelev1">&gt; +int orte_errmgr_base_proc_state_notify(orte_proc_state_t state, orte_process_name_t *proc)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     if (NULL != proc) {
</span><br>
<span class="quotelev1">&gt;         switch(state) {
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/ess/env/ess_env_module.c b/orte/mca/ess/env/ess_env_module.c
</span><br>
<span class="quotelev1">&gt; index 6a71230..9b80099 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/ess/env/ess_env_module.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/ess/env/ess_env_module.c
</span><br>
<span class="quotelev1">&gt; @@ -422,7 +422,7 @@ static int rte_ft_event(int state)
</span><br>
<span class="quotelev1">&gt;             exit_status = ret;
</span><br>
<span class="quotelev1">&gt;             goto cleanup;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (ret = orte_db.remove(NULL, NULL))) {
</span><br>
<span class="quotelev1">&gt; +        if (OPAL_SUCCESS != (ret = opal_db.remove(NULL, NULL))) {
</span><br>
<span class="quotelev1">&gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;             exit_status = ret;
</span><br>
<span class="quotelev1">&gt;             goto cleanup;
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/plm/base/plm_base_launch_support.c b/orte/mca/plm/base/plm_base_launch_support.c
</span><br>
<span class="quotelev1">&gt; index 3deee11..6aba2c2 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/plm/base/plm_base_launch_support.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/plm/base/plm_base_launch_support.c
</span><br>
<span class="quotelev1">&gt; @@ -333,6 +333,7 @@ void orte_plm_base_complete_setup(int fd, short args, void *cbdata)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     orte_job_t *jdata, *jdatorted;
</span><br>
<span class="quotelev1">&gt;     orte_state_caddy_t *caddy = (orte_state_caddy_t*)cbdata;
</span><br>
<span class="quotelev1">&gt; +    int rc;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* if we don't want to launch the apps, now is the time to leave */
</span><br>
<span class="quotelev1">&gt;     if (orte_do_not_launch) {
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/rml/oob/rml_oob_component.c b/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev1">&gt; index dd539cd..b91f4a3 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev1">&gt; @@ -11,11 +11,7 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2007      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; -&lt;&lt;&lt;&lt;&lt;&lt;&lt; .mine
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2011-2012 Los Alamos National Security, LLC.
</span><br>
<span class="quotelev1">&gt; -=======
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2011-2013 Los Alamos National Security, LLC.
</span><br>
<span class="quotelev1">&gt; -&gt;&gt;&gt;&gt;&gt;&gt;&gt; .r28253
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  * 
</span><br>
<span class="quotelev1">&gt; @@ -189,8 +185,7 @@ orte_rml_oob_ft_event(int state) {
</span><br>
<span class="quotelev1">&gt;         ;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    if( ORTE_SUCCESS != 
</span><br>
<span class="quotelev1">&gt; -        (ret = orte_oob.ft_event(state)) ) {
</span><br>
<span class="quotelev1">&gt; +    if( ORTE_SUCCESS != (ret = orte_rml_oob_module.super.ft_event(state)) ) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;         exit_status = ret;
</span><br>
<span class="quotelev1">&gt;         goto cleanup;
</span><br>
<span class="quotelev1">&gt; @@ -212,7 +207,7 @@ orte_rml_oob_ft_event(int state) {
</span><br>
<span class="quotelev1">&gt;             goto cleanup;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -        if( ORTE_SUCCESS != (ret = mca_oob_base_select())) {
</span><br>
<span class="quotelev1">&gt; +        if( ORTE_SUCCESS != (ret = orte_oob_base_select())) {
</span><br>
<span class="quotelev1">&gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;             exit_status = ret;
</span><br>
<span class="quotelev1">&gt;             goto cleanup;
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/snapc/base/snapc_base_frame.c b/orte/mca/snapc/base/snapc_base_frame.c
</span><br>
<span class="quotelev1">&gt; index edb8e6e..a46c77a 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/snapc/base/snapc_base_frame.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/snapc/base/snapc_base_frame.c
</span><br>
<span class="quotelev1">&gt; @@ -79,7 +79,7 @@ static int orte_snapc_base_register(mca_base_register_flag_t flags)
</span><br>
<span class="quotelev1">&gt;     return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -static int orte_snapc_base_close(void)
</span><br>
<span class="quotelev1">&gt; +int orte_snapc_base_close(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     /* Close the selected component */
</span><br>
<span class="quotelev1">&gt;     if( NULL != orte_snapc.snapc_finalize ) {
</span><br>
<span class="quotelev1">&gt; @@ -93,7 +93,7 @@ static int orte_snapc_base_close(void)
</span><br>
<span class="quotelev1">&gt;  * Function for finding and opening either all MCA components,
</span><br>
<span class="quotelev1">&gt;  * or the one that was specifically requested via a MCA parameter.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; -static int orte_snapc_base_open(mca_base_open_flag_t flags)
</span><br>
<span class="quotelev1">&gt; +int orte_snapc_base_open(mca_base_open_flag_t flags)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     /* Init the sequence (interval) number */
</span><br>
<span class="quotelev1">&gt;     orte_snapc_base_snapshot_seq_number = 0;
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/snapc/full/snapc_full_app.c b/orte/mca/snapc/full/snapc_full_app.c
</span><br>
<span class="quotelev1">&gt; index 1ff036e..c7438f1 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/snapc/full/snapc_full_app.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/snapc/full/snapc_full_app.c
</span><br>
<span class="quotelev1">&gt; @@ -99,6 +99,12 @@ static int current_cr_state = OPAL_CRS_NONE;
</span><br>
<span class="quotelev1">&gt; static orte_sstore_base_handle_t current_ss_handle = ORTE_SSTORE_HANDLE_INVALID, last_ss_handle = ORTE_SSTORE_HANDLE_INVALID;
</span><br>
<span class="quotelev1">&gt; static opal_crs_base_ckpt_options_t *current_options = NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +static void snapc_full_app_callback_recv(int status,
</span><br>
<span class="quotelev1">&gt; +                                         orte_process_name_t* sender,
</span><br>
<span class="quotelev1">&gt; +                                         opal_buffer_t* buffer,
</span><br>
<span class="quotelev1">&gt; +                                         orte_rml_tag_t tag,
</span><br>
<span class="quotelev1">&gt; +                                         void* cbdata);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; /************************
</span><br>
<span class="quotelev1">&gt;  * Function Definitions
</span><br>
<span class="quotelev1">&gt;  ************************/
</span><br>
<span class="quotelev1">&gt; @@ -1673,3 +1679,12 @@ int app_coord_request_op(orte_snapc_base_request_op_t *datum)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return exit_status;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* dummy implementation of a callback function to get it to compile again */
</span><br>
<span class="quotelev1">&gt; +static void snapc_full_app_callback_recv(int status,
</span><br>
<span class="quotelev1">&gt; +                                         orte_process_name_t* sender,
</span><br>
<span class="quotelev1">&gt; +                                         opal_buffer_t* buffer,
</span><br>
<span class="quotelev1">&gt; +                                         orte_rml_tag_t tag,
</span><br>
<span class="quotelev1">&gt; +                                         void* cbdata)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/snapc/full/snapc_full_component.c b/orte/mca/snapc/full/snapc_full_component.c
</span><br>
<span class="quotelev1">&gt; index 7815363..b953e17 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/snapc/full/snapc_full_component.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/snapc/full/snapc_full_component.c
</span><br>
<span class="quotelev1">&gt; @@ -32,6 +32,7 @@ const char *orte_snapc_full_component_version_string =
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; static int snapc_full_open(void);
</span><br>
<span class="quotelev1">&gt; static int snapc_full_close(void);
</span><br>
<span class="quotelev1">&gt; +static int snapc_full_register(void);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bool orte_snapc_full_skip_app   = false;
</span><br>
<span class="quotelev1">&gt; bool orte_snapc_full_timing_enabled = false;
</span><br>
<span class="quotelev1">&gt; @@ -74,7 +75,7 @@ orte_snapc_full_component_t mca_snapc_full_component = {
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -static int snaps_full_register (void)
</span><br>
<span class="quotelev1">&gt; +static int snapc_full_register (void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     mca_base_component_t *component = &amp;mca_snapc_full_component.super.base_version;
</span><br>
<span class="quotelev1">&gt;     /*
</span><br>
<span class="quotelev1">&gt; @@ -129,7 +130,7 @@ static int snaps_full_register (void)
</span><br>
<span class="quotelev1">&gt;                                             OPAL_INFO_LVL_9,
</span><br>
<span class="quotelev1">&gt;                                             MCA_BASE_VAR_SCOPE_LOCAL,
</span><br>
<span class="quotelev1">&gt;                                             &amp;orte_snapc_full_progress_meter);
</span><br>
<span class="quotelev1">&gt; -    orte_snapc_full_progress_meter = (value % 101);
</span><br>
<span class="quotelev1">&gt; +    orte_snapc_full_progress_meter %= 101;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; @@ -148,7 +149,7 @@ static int snapc_full_open(void)
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* recheck the progress meter (it may have changed between register and open) */
</span><br>
<span class="quotelev1">&gt; -    orte_snapc_full_progress_meter = (value % 101);
</span><br>
<span class="quotelev1">&gt; +    orte_snapc_full_progress_meter %= 101;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /*
</span><br>
<span class="quotelev1">&gt;      * Debug Output
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/snapc/full/snapc_full_global.c b/orte/mca/snapc/full/snapc_full_global.c
</span><br>
<span class="quotelev1">&gt; index c88c6db..9f6da34 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/snapc/full/snapc_full_global.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/snapc/full/snapc_full_global.c
</span><br>
<span class="quotelev1">&gt; @@ -513,7 +513,7 @@ int global_coord_end_ckpt(orte_snapc_base_quiesce_t *datum)
</span><br>
<span class="quotelev1">&gt;     if( currently_migrating ) {
</span><br>
<span class="quotelev1">&gt;         OPAL_OUTPUT_VERBOSE((10, mca_snapc_full_component.super.output_handle,
</span><br>
<span class="quotelev1">&gt;                              &quot;Global) End Ckpt: Flush the modex cached data\n&quot;));
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (ret = orte_db.remove(NULL, NULL))) {
</span><br>
<span class="quotelev1">&gt; +        if (OPAL_SUCCESS != (ret = opal_db.remove(NULL, NULL))) {
</span><br>
<span class="quotelev1">&gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;             exit_status = ret;
</span><br>
<span class="quotelev1">&gt;             goto cleanup;
</span><br>
<span class="quotelev1">&gt; @@ -1138,7 +1138,7 @@ void snapc_full_global_orted_recv(int status,
</span><br>
<span class="quotelev1">&gt;             OPAL_OUTPUT_VERBOSE((10, mca_snapc_full_component.super.output_handle,
</span><br>
<span class="quotelev1">&gt;                                  &quot;Global) Command: Job State Update (quick)&quot;));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -            snapc_full_process_job_update_cmd(&amp;sender, buffer, true);
</span><br>
<span class="quotelev1">&gt; +            snapc_full_process_job_update_cmd(sender, buffer, true);
</span><br>
<span class="quotelev1">&gt;             break;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         case ORTE_SNAPC_FULL_UPDATE_JOB_STATE_CMD:
</span><br>
<span class="quotelev1">&gt; @@ -1974,7 +1974,7 @@ static void snapc_full_process_job_update_cmd(orte_process_name_t* sender,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int snapc_full_establish_snapshot_dir(bool empty_metadata)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    const char **value = NULL;
</span><br>
<span class="quotelev1">&gt; +    char **value = NULL;
</span><br>
<span class="quotelev1">&gt;     int idx = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /*********************
</span><br>
<span class="quotelev1">&gt; @@ -1998,7 +1998,7 @@ static int snapc_full_establish_snapshot_dir(bool empty_metadata)
</span><br>
<span class="quotelev1">&gt;         opal_show_help(&quot;help-orte-restart.txt&quot;, &quot;amca_param_not_found&quot;, true);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     if( 0 &lt; idx ) {
</span><br>
<span class="quotelev1">&gt; -        mca_base_var_get_value (idx, &amp;value, sizeof (value), NULL, NULL);
</span><br>
<span class="quotelev1">&gt; +        mca_base_var_get_value (idx, &amp;value, NULL, NULL);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         if (*value) {
</span><br>
<span class="quotelev1">&gt;             orte_sstore.set_attr(global_snapshot.ss_handle,
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/snapc/full/snapc_full_local.c b/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev1">&gt; index c0b168a..b13fce9 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev1">&gt; @@ -1776,7 +1776,7 @@ static void snapc_full_local_comm_read_event(int fd, short flags, void *arg)
</span><br>
<span class="quotelev1">&gt;     if( currently_migrating &amp;&amp; !flushed_modex ) {
</span><br>
<span class="quotelev1">&gt;         OPAL_OUTPUT_VERBOSE((10, mca_snapc_full_component.super.output_handle,
</span><br>
<span class="quotelev1">&gt;                              &quot;Local) Read Event: Flush the modex cached data\n&quot;));
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (ret = orte_db.remove(NULL, NULL))) {
</span><br>
<span class="quotelev1">&gt; +        if (OPAL_SUCCESS != (ret = opal_db.remove(NULL, NULL))) {
</span><br>
<span class="quotelev1">&gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;             exit_status = ret;
</span><br>
<span class="quotelev1">&gt;             goto cleanup;
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/sstore/stage/sstore_stage_component.c b/orte/mca/sstore/stage/sstore_stage_component.c
</span><br>
<span class="quotelev1">&gt; index 19d7c75..aca2b46 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/sstore/stage/sstore_stage_component.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/sstore/stage/sstore_stage_component.c
</span><br>
<span class="quotelev1">&gt; @@ -235,3 +235,8 @@ static int sstore_stage_close(void)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static int sstore_stage_register(void)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 1.8.4.2
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13403.php">Ralph Castain: "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Previous message:</strong> <a href="13401.php">Adrian Reber: "[OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>In reply to:</strong> <a href="13401.php">Adrian Reber: "[OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13406.php">Ralph Castain: "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Reply:</strong> <a href="13406.php">Ralph Castain: "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
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
