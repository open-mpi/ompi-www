<?
$subject_val = "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 11:30:01 2013" -->
<!-- isoreceived="20131204163001" -->
<!-- sent="Wed, 4 Dec 2013 08:29:55 -0800" -->
<!-- isosent="20131204162955" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)" -->
<!-- id="D92DDA63-A446-4453-9766-09EDA3311164_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="530AA8DA-2CEF-467B-BD0B-6A790D46CDA4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 11:29:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13376.php">Orion Poplawski: "[OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used"</a>
<li><strong>Previous message:</strong> <a href="13374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
<li><strong>In reply to:</strong> <a href="13374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13380.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
<li><strong>Reply:</strong> <a href="13380.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff - you are jumping way ahead. I already said this needs further work to resolve blocking. These patches (per Adrian's email) just makes things compile
<br>
<p>Lower your bar, dude :-)
<br>
<p>Sent from my iPhone
<br>
<p><span class="quotelev1">&gt; On Dec 4, 2013, at 8:07 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 25, 2013, at 9:59 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/ompi/mca/bml/r2/bml_r2_ft.c b/ompi/mca/bml/r2/bml_r2_ft.c
</span><br>
<span class="quotelev2">&gt;&gt; index 1448c04..fc16452 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/mca/bml/r2/bml_r2_ft.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/mca/bml/r2/bml_r2_ft.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -191,7 +191,7 @@ int mca_bml_r2_ft_event(int state)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            for(p = 0; p &lt; (int)num_procs; ++p) {
</span><br>
<span class="quotelev2">&gt;&gt;                if( NULL != procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]) {
</span><br>
<span class="quotelev2">&gt;&gt; -                    OBJ_RELEASE((mca_bml_base_endpoint_t*) procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]);
</span><br>
<span class="quotelev2">&gt;&gt; +                    OBJ_RELEASE(procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]);
</span><br>
<span class="quotelev2">&gt;&gt;                    procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML] = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;                }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -263,9 +263,9 @@ int mca_bml_r2_ft_event(int state)
</span><br>
<span class="quotelev2">&gt;&gt;        mca_base_var_get_value(param_type, &amp;btl_list, NULL, NULL);
</span><br>
<span class="quotelev2">&gt;&gt;        opal_output_verbose(11, ompi_cr_output,
</span><br>
<span class="quotelev2">&gt;&gt;                            &quot;Restart (New BTL MCA): &lt;%s&gt;\n&quot;, btl_list ? btl_list[0] : &quot;&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -        if( NULL != param_list ) {
</span><br>
<span class="quotelev2">&gt;&gt; -            free(param_list);
</span><br>
<span class="quotelev2">&gt;&gt; -            param_list = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +        if( NULL != btl_list ) {
</span><br>
<span class="quotelev2">&gt;&gt; +            free(btl_list);
</span><br>
<span class="quotelev2">&gt;&gt; +            btl_list = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        /*
</span><br>
<span class="quotelev2">&gt;&gt; @@ -286,7 +286,7 @@ int mca_bml_r2_ft_event(int state)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        for(p = 0; p &lt; (int)num_procs; ++p) {
</span><br>
<span class="quotelev2">&gt;&gt;            if( NULL != procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]) {
</span><br>
<span class="quotelev2">&gt;&gt; -                OBJ_RELEASE((mca_bml_base_endpoint_t*) procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]);
</span><br>
<span class="quotelev2">&gt;&gt; +                OBJ_RELEASE(procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]);
</span><br>
<span class="quotelev2">&gt;&gt;                procs[p]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML] = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh -- can you double check the above r2 changes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/mca/base/mca_base_components_open.c b/opal/mca/base/mca_base_components_open.c
</span><br>
<span class="quotelev2">&gt;&gt; index e46e0f3..8d5e9da 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/mca/base/mca_base_components_open.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/mca/base/mca_base_components_open.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -141,9 +141,7 @@ static int open_components(mca_base_framework_t *framework)
</span><br>
<span class="quotelev2">&gt;&gt;     * NTH: Logic moved to mca_base_components_filter.
</span><br>
<span class="quotelev2">&gt;&gt;     */
</span><br>
<span class="quotelev2">&gt;&gt; #if (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1)
</span><br>
<span class="quotelev2">&gt;&gt; -    if (mca_base_component_distill_checkpoint_ready) {
</span><br>
<span class="quotelev2">&gt;&gt; -        open_only_flags |= MCA_BASE_METADATA_PARAM_CHECKPOINT;
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; +    open_only_flags |= MCA_BASE_METADATA_PARAM_CHECKPOINT;
</span><br>
<span class="quotelev2">&gt;&gt; #endif  /* (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1) */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* If mca_base_framework_register_components was called with the MCA_BASE_COMPONENTS_ALL flag
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did the mca_base_component_distill_checkpoint_ready variable disappear?  (I'm not sure what it was for -- I'm just curious as to why the if block disappeared.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/mca/crs/self/crs_self_component.c b/opal/mca/crs/self/crs_self_component.c
</span><br>
<span class="quotelev2">&gt;&gt; index e0ca1ab..eb45d59 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/mca/crs/self/crs_self_component.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/mca/crs/self/crs_self_component.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -90,9 +90,9 @@ static int crs_self_register (void)
</span><br>
<span class="quotelev2">&gt;&gt;    mca_crs_self_component.super.priority = 20;
</span><br>
<span class="quotelev2">&gt;&gt;    ret = mca_base_component_var_register (&amp;mca_crs_self_component.super.base_version,
</span><br>
<span class="quotelev2">&gt;&gt;                                           &quot;priority&quot;, &quot;Priority of the CRS self component &quot;
</span><br>
<span class="quotelev2">&gt;&gt; -                                           &quot;(default: 20)&quot;, MCA_BASE_VAR_TYPE_INT, NULL,
</span><br>
<span class="quotelev2">&gt;&gt; +                                           &quot;(default: 20)&quot;, MCA_BASE_VAR_TYPE_INT, NULL, 0,
</span><br>
<span class="quotelev2">&gt;&gt;                                           MCA_BASE_VAR_FLAG_SETTABLE,
</span><br>
<span class="quotelev2">&gt;&gt; -                                           OPAL_INFO_LVL_9, MPI_BASE_VAR_SCOPE_ALL_EQ,
</span><br>
<span class="quotelev2">&gt;&gt; +                                           OPAL_INFO_LVL_9, MCA_BASE_VAR_SCOPE_ALL_EQ,
</span><br>
<span class="quotelev2">&gt;&gt;                                           &amp;mca_crs_self_component.super.priority);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; General note: it is probably worth auditing all of these MCA params: should they really be level 9?  Or would level 6 or 7 be more appropriate?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/MCAParamLevels">https://svn.open-mpi.org/trac/ompi/wiki/MCAParamLevels</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [snip parts that I have no comments for]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --- a/orte/mca/errmgr/base/errmgr_base_fns.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/orte/mca/errmgr/base/errmgr_base_fns.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -342,7 +342,7 @@ void orte_errmgr_base_execute_error_callbacks(opal_pointer_array_t *errors)
</span><br>
<span class="quotelev2">&gt;&gt; ********************/
</span><br>
<span class="quotelev2">&gt;&gt; #if OPAL_ENABLE_FT_CR
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -void orte_errmgr_base_migrate_state_notify(int state)
</span><br>
<span class="quotelev2">&gt;&gt; +ORTE_DECLSPEC void orte_errmgr_base_migrate_state_notify(int state)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now that Windows support is gone, are we still doing DECLSPEC these days?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    switch(state) {
</span><br>
<span class="quotelev2">&gt;&gt;    case ORTE_ERRMGR_MIGRATE_STATE_ERROR:
</span><br>
<span class="quotelev2">&gt;&gt; @@ -366,7 +366,7 @@ void orte_errmgr_base_migrate_state_notify(int state)
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -void orte_errmgr_base_proc_state_notify(orte_proc_state_t state, orte_process_name_t *proc)
</span><br>
<span class="quotelev2">&gt;&gt; +ORTE_DECLSPEC int orte_errmgr_base_proc_state_notify(orte_proc_state_t state, orte_process_name_t *proc)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    if (NULL != proc) {
</span><br>
<span class="quotelev2">&gt;&gt;        switch(state) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -401,7 +401,7 @@ void orte_errmgr_base_proc_state_notify(orte_proc_state_t state, orte_process_na
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -int orte_errmgr_base_migrate_state_str(char ** state_str, int state)
</span><br>
<span class="quotelev2">&gt;&gt; +ORTE_DECLSPEC int orte_errmgr_base_migrate_state_str(char ** state_str, int state)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    switch(state) {
</span><br>
<span class="quotelev2">&gt;&gt;    case ORTE_ERRMGR_MIGRATE_STATE_NONE:
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/orte/mca/ess/env/ess_env_module.c b/orte/mca/ess/env/ess_env_module.c
</span><br>
<span class="quotelev2">&gt;&gt; index 6a71230..52092b5 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/orte/mca/ess/env/ess_env_module.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/orte/mca/ess/env/ess_env_module.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -422,7 +422,7 @@ static int rte_ft_event(int state)
</span><br>
<span class="quotelev2">&gt;&gt;            exit_status = ret;
</span><br>
<span class="quotelev2">&gt;&gt;            goto cleanup;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; -        if (ORTE_SUCCESS != (ret = orte_db.remove(NULL, NULL))) {
</span><br>
<span class="quotelev2">&gt;&gt; +        if (ORTE_SUCCESS != (ret = opal_db.remove(NULL, NULL))) {
</span><br>
<span class="quotelev2">&gt;&gt;            ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt;&gt;            exit_status = ret;
</span><br>
<span class="quotelev2">&gt;&gt;            goto cleanup;
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/orte/mca/plm/base/plm_base_launch_support.c b/orte/mca/plm/base/plm_base_launch_support.c
</span><br>
<span class="quotelev2">&gt;&gt; index 3deee11..6aba2c2 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/orte/mca/plm/base/plm_base_launch_support.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/orte/mca/plm/base/plm_base_launch_support.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -333,6 +333,7 @@ void orte_plm_base_complete_setup(int fd, short args, void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    orte_job_t *jdata, *jdatorted;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_state_caddy_t *caddy = (orte_state_caddy_t*)cbdata;
</span><br>
<span class="quotelev2">&gt;&gt; +    int rc;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nice.  :-)  (just a general comment about my amusement/sadness to see how far this code has bit-rotted)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* if we don't want to launch the apps, now is the time to leave */
</span><br>
<span class="quotelev2">&gt;&gt;    if (orte_do_not_launch) {
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/orte/mca/rml/oob/rml_oob_component.c b/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev2">&gt;&gt; index dd539cd..b91f4a3 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -11,11 +11,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt;&gt; *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; * Copyright (c) 2007      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; -&lt;&lt;&lt;&lt;&lt;&lt;&lt; .mine
</span><br>
<span class="quotelev2">&gt;&gt; - * Copyright (c) 2011-2012 Los Alamos National Security, LLC.
</span><br>
<span class="quotelev2">&gt;&gt; -=======
</span><br>
<span class="quotelev2">&gt;&gt; * Copyright (c) 2011-2013 Los Alamos National Security, LLC.
</span><br>
<span class="quotelev2">&gt;&gt; -&gt;&gt;&gt;&gt;&gt;&gt;&gt; .r28253
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ditto with above.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/orte/mca/snapc/full/snapc_full_component.c b/orte/mca/snapc/full/snapc_full_component.c
</span><br>
<span class="quotelev2">&gt;&gt; index 7815363..b953e17 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/orte/mca/snapc/full/snapc_full_component.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/orte/mca/snapc/full/snapc_full_component.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -32,6 +32,7 @@ const char *orte_snapc_full_component_version_string =
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt; static int snapc_full_open(void);
</span><br>
<span class="quotelev2">&gt;&gt; static int snapc_full_close(void);
</span><br>
<span class="quotelev2">&gt;&gt; +static int snapc_full_register(void);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; bool orte_snapc_full_skip_app   = false;
</span><br>
<span class="quotelev2">&gt;&gt; bool orte_snapc_full_timing_enabled = false;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -74,7 +75,7 @@ orte_snapc_full_component_t mca_snapc_full_component = {
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -static int snaps_full_register (void)
</span><br>
<span class="quotelev2">&gt;&gt; +static int snapc_full_register (void)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    mca_base_component_t *component = &amp;mca_snapc_full_component.super.base_version;
</span><br>
<span class="quotelev2">&gt;&gt;    /*
</span><br>
<span class="quotelev2">&gt;&gt; @@ -129,7 +130,7 @@ static int snaps_full_register (void)
</span><br>
<span class="quotelev2">&gt;&gt;                                            OPAL_INFO_LVL_9,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Similar comment to above: it's probably worth auditing the CR-related MCA params -- I'm guessing they should not all be level 9.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/orte/mca/snapc/full/snapc_full_local.c b/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev2">&gt;&gt; index 5df216d..98c6977 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1756,7 +1756,7 @@ static void snapc_full_local_comm_read_event(int fd, short flags, void *arg)
</span><br>
<span class="quotelev2">&gt;&gt;    if( currently_migrating &amp;&amp; !flushed_modex ) {
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL_OUTPUT_VERBOSE((10, mca_snapc_full_component.super.output_handle,
</span><br>
<span class="quotelev2">&gt;&gt;                             &quot;Local) Read Event: Flush the modex cached data\n&quot;));
</span><br>
<span class="quotelev2">&gt;&gt; -        if (ORTE_SUCCESS != (ret = orte_db.remove(NULL, NULL))) {
</span><br>
<span class="quotelev2">&gt;&gt; +        if (ORTE_SUCCESS != (ret = opal_db.remove(NULL, NULL))) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Opal functions should be compared with OPAL_* values, not ORTE_* values.  In this case, it's easy: s/ORTE_SUCCESS/OPAL_SUCCESS/.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't notice this particular issue in the rest of the patch, but it's worth double checking for this issue in the places where you s/orte_db/opal_db/ -- I might have missed them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="13376.php">Orion Poplawski: "[OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used"</a>
<li><strong>Previous message:</strong> <a href="13374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
<li><strong>In reply to:</strong> <a href="13374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13380.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
<li><strong>Reply:</strong> <a href="13380.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
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
