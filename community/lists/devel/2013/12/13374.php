<?
$subject_val = "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 11:07:54 2013" -->
<!-- isoreceived="20131204160754" -->
<!-- sent="Wed, 4 Dec 2013 16:07:52 +0000" -->
<!-- isosent="20131204160752" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)" -->
<!-- id="530AA8DA-2CEF-467B-BD0B-6A790D46CDA4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1385391563-29584-5-git-send-email-adrian_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 11:07:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13375.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Previous message:</strong> <a href="13373.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile	again. (void value not ignored)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13332.php">Adrian Reber: "[OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13375.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Reply:</strong> <a href="13375.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 25, 2013, at 9:59 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; diff --git a/ompi/mca/bml/r2/bml_r2_ft.c b/ompi/mca/bml/r2/bml_r2_ft.c
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
<p>Josh -- can you double check the above r2 changes?
<br>
<p><span class="quotelev1">&gt; diff --git a/opal/mca/base/mca_base_components_open.c b/opal/mca/base/mca_base_components_open.c
</span><br>
<span class="quotelev1">&gt; index e46e0f3..8d5e9da 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/base/mca_base_components_open.c
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/base/mca_base_components_open.c
</span><br>
<span class="quotelev1">&gt; @@ -141,9 +141,7 @@ static int open_components(mca_base_framework_t *framework)
</span><br>
<span class="quotelev1">&gt;      * NTH: Logic moved to mca_base_components_filter.
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt; #if (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1)
</span><br>
<span class="quotelev1">&gt; -    if (mca_base_component_distill_checkpoint_ready) {
</span><br>
<span class="quotelev1">&gt; -        open_only_flags |= MCA_BASE_METADATA_PARAM_CHECKPOINT;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +    open_only_flags |= MCA_BASE_METADATA_PARAM_CHECKPOINT;
</span><br>
<span class="quotelev1">&gt; #endif  /* (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1) */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* If mca_base_framework_register_components was called with the MCA_BASE_COMPONENTS_ALL flag 
</span><br>
<p>Did the mca_base_component_distill_checkpoint_ready variable disappear?  (I'm not sure what it was for -- I'm just curious as to why the if block disappeared.
<br>
<p><span class="quotelev1">&gt; diff --git a/opal/mca/crs/self/crs_self_component.c b/opal/mca/crs/self/crs_self_component.c
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
<p>General note: it is probably worth auditing all of these MCA params: should they really be level 9?  Or would level 6 or 7 be more appropriate?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/MCAParamLevels">https://svn.open-mpi.org/trac/ompi/wiki/MCAParamLevels</a>
<br>
<p>[snip parts that I have no comments for]
<br>
<p><span class="quotelev1">&gt; --- a/orte/mca/errmgr/base/errmgr_base_fns.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/errmgr/base/errmgr_base_fns.c
</span><br>
<span class="quotelev1">&gt; @@ -342,7 +342,7 @@ void orte_errmgr_base_execute_error_callbacks(opal_pointer_array_t *errors)
</span><br>
<span class="quotelev1">&gt;  ********************/
</span><br>
<span class="quotelev1">&gt; #if OPAL_ENABLE_FT_CR
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -void orte_errmgr_base_migrate_state_notify(int state)
</span><br>
<span class="quotelev1">&gt; +ORTE_DECLSPEC void orte_errmgr_base_migrate_state_notify(int state)
</span><br>
<p>Now that Windows support is gone, are we still doing DECLSPEC these days?
<br>
<p><p><span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     switch(state) {
</span><br>
<span class="quotelev1">&gt;     case ORTE_ERRMGR_MIGRATE_STATE_ERROR:
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
<span class="quotelev1">&gt; +ORTE_DECLSPEC int orte_errmgr_base_proc_state_notify(orte_proc_state_t state, orte_process_name_t *proc)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     if (NULL != proc) {
</span><br>
<span class="quotelev1">&gt;         switch(state) {
</span><br>
<span class="quotelev1">&gt; @@ -401,7 +401,7 @@ void orte_errmgr_base_proc_state_notify(orte_proc_state_t state, orte_process_na
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -int orte_errmgr_base_migrate_state_str(char ** state_str, int state)
</span><br>
<span class="quotelev1">&gt; +ORTE_DECLSPEC int orte_errmgr_base_migrate_state_str(char ** state_str, int state)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     switch(state) {
</span><br>
<span class="quotelev1">&gt;     case ORTE_ERRMGR_MIGRATE_STATE_NONE:
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/ess/env/ess_env_module.c b/orte/mca/ess/env/ess_env_module.c
</span><br>
<span class="quotelev1">&gt; index 6a71230..52092b5 100644
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
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (ret = opal_db.remove(NULL, NULL))) {
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
<p>Nice.  :-)  (just a general comment about my amusement/sadness to see how far this code has bit-rotted)
<br>
<p><span class="quotelev1">&gt;     /* if we don't want to launch the apps, now is the time to leave */
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
<p>Ditto with above.  :-)
<br>
<p>[snip]
<br>
<p><span class="quotelev1">&gt; diff --git a/orte/mca/snapc/full/snapc_full_component.c b/orte/mca/snapc/full/snapc_full_component.c
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
<p>Similar comment to above: it's probably worth auditing the CR-related MCA params -- I'm guessing they should not all be level 9.
<br>
<p>[snip]
<br>
<p><span class="quotelev1">&gt; diff --git a/orte/mca/snapc/full/snapc_full_local.c b/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev1">&gt; index 5df216d..98c6977 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev1">&gt; @@ -1756,7 +1756,7 @@ static void snapc_full_local_comm_read_event(int fd, short flags, void *arg)
</span><br>
<span class="quotelev1">&gt;     if( currently_migrating &amp;&amp; !flushed_modex ) {
</span><br>
<span class="quotelev1">&gt;         OPAL_OUTPUT_VERBOSE((10, mca_snapc_full_component.super.output_handle,
</span><br>
<span class="quotelev1">&gt;                              &quot;Local) Read Event: Flush the modex cached data\n&quot;));
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (ret = orte_db.remove(NULL, NULL))) {
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (ret = opal_db.remove(NULL, NULL))) {
</span><br>
<p>Opal functions should be compared with OPAL_* values, not ORTE_* values.  In this case, it's easy: s/ORTE_SUCCESS/OPAL_SUCCESS/.
<br>
<p>I didn't notice this particular issue in the rest of the patch, but it's worth double checking for this issue in the places where you s/orte_db/opal_db/ -- I might have missed them.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13375.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Previous message:</strong> <a href="13373.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile	again. (void value not ignored)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13332.php">Adrian Reber: "[OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13375.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Reply:</strong> <a href="13375.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
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
