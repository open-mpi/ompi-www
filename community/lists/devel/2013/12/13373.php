<?
$subject_val = "Re: [OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile	again. (void value not ignored)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 10:58:51 2013" -->
<!-- isoreceived="20131204155851" -->
<!-- sent="Wed, 4 Dec 2013 15:58:49 +0000" -->
<!-- isosent="20131204155849" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile	again. (void value not ignored)" -->
<!-- id="FACC9D80-D3E4-47C5-A033-90073A099E23_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1385391563-29584-2-git-send-email-adrian_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile	again. (void value not ignored)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 10:58:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
<li><strong>Previous message:</strong> <a href="13372.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13333.php">Adrian Reber: "[OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile again. (void value not ignored)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13386.php">Adrian Reber: "Re: [OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile	again. (void value not ignored)"</a>
<li><strong>Reply:</strong> <a href="13386.php">Adrian Reber: "Re: [OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile	again. (void value not ignored)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1 on this patch.
<br>
<p><p>On Nov 25, 2013, at 9:59 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This patch fixes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  error: void value not ignored as it ought to be
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in the C/R code by ignoring the return value of functions which
</span><br>
<span class="quotelev1">&gt; no longer return a value (only void).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Signed-off-by: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; orte/mca/errmgr/base/errmgr_base_tool.c         |  8 +-----
</span><br>
<span class="quotelev1">&gt; orte/mca/rml/ftrm/rml_ftrm.h                    |  6 ++---
</span><br>
<span class="quotelev1">&gt; orte/mca/rml/ftrm/rml_ftrm_module.c             | 32 +++++------------------
</span><br>
<span class="quotelev1">&gt; orte/mca/snapc/full/snapc_full_global.c         | 34 ++++++-------------------
</span><br>
<span class="quotelev1">&gt; orte/mca/snapc/full/snapc_full_local.c          | 32 +++++------------------
</span><br>
<span class="quotelev1">&gt; orte/mca/sstore/central/sstore_central_global.c | 13 ++--------
</span><br>
<span class="quotelev1">&gt; orte/mca/sstore/central/sstore_central_local.c  | 13 ++--------
</span><br>
<span class="quotelev1">&gt; orte/mca/sstore/stage/sstore_stage_global.c     | 13 ++--------
</span><br>
<span class="quotelev1">&gt; orte/mca/sstore/stage/sstore_stage_local.c      | 14 ++--------
</span><br>
<span class="quotelev1">&gt; orte/tools/orte-checkpoint/orte-checkpoint.c    | 14 +++-------
</span><br>
<span class="quotelev1">&gt; orte/tools/orte-migrate/orte-migrate.c          | 14 +++-------
</span><br>
<span class="quotelev1">&gt; 11 files changed, 40 insertions(+), 153 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/errmgr/base/errmgr_base_tool.c b/orte/mca/errmgr/base/errmgr_base_tool.c
</span><br>
<span class="quotelev1">&gt; index a030faf..20d76e5 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/errmgr/base/errmgr_base_tool.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/errmgr/base/errmgr_base_tool.c
</span><br>
<span class="quotelev1">&gt; @@ -290,16 +290,10 @@ static int errmgr_base_tool_stop_cmdline_listener(void)
</span><br>
<span class="quotelev1">&gt;     OPAL_OUTPUT_VERBOSE((5, orte_errmgr_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt;                          &quot;errmgr:base:tool: Shutdown Command Line Channel&quot;));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; -                                                    ORTE_RML_TAG_MIGRATE))) {
</span><br>
<span class="quotelev1">&gt; -        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; -        exit_status = ret;
</span><br>
<span class="quotelev1">&gt; -        goto cleanup;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_MIGRATE);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     errmgr_cmdline_recv_issued = false;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - cleanup:
</span><br>
<span class="quotelev1">&gt;     return exit_status;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/rml/ftrm/rml_ftrm.h b/orte/mca/rml/ftrm/rml_ftrm.h
</span><br>
<span class="quotelev1">&gt; index 82a80e8..a1bd48a 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/rml/ftrm/rml_ftrm.h
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/rml/ftrm/rml_ftrm.h
</span><br>
<span class="quotelev1">&gt; @@ -63,7 +63,7 @@ BEGIN_C_DECLS
</span><br>
<span class="quotelev1">&gt;     /*
</span><br>
<span class="quotelev1">&gt;      * Set URI
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt; -    int orte_rml_ftrm_set_contact_info(const char* uri);
</span><br>
<span class="quotelev1">&gt; +    void orte_rml_ftrm_set_contact_info(const char* uri);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /*
</span><br>
<span class="quotelev1">&gt;      * Ping
</span><br>
<span class="quotelev1">&gt; @@ -148,7 +148,7 @@ BEGIN_C_DECLS
</span><br>
<span class="quotelev1">&gt;     /*
</span><br>
<span class="quotelev1">&gt;      * Recv Cancel
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt; -    int orte_rml_ftrm_recv_cancel(orte_process_name_t* peer, orte_rml_tag_t tag);
</span><br>
<span class="quotelev1">&gt; +    void orte_rml_ftrm_recv_cancel(orte_process_name_t* peer, orte_rml_tag_t tag);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /*
</span><br>
<span class="quotelev1">&gt;      * Register a callback on loss of connection
</span><br>
<span class="quotelev1">&gt; @@ -161,7 +161,7 @@ BEGIN_C_DECLS
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     int orte_rml_ftrm_ft_event(int state);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    int orte_rml_ftrm_purge(orte_process_name_t *peer);
</span><br>
<span class="quotelev1">&gt; +    void orte_rml_ftrm_purge(orte_process_name_t *peer);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; END_C_DECLS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/rml/ftrm/rml_ftrm_module.c b/orte/mca/rml/ftrm/rml_ftrm_module.c
</span><br>
<span class="quotelev1">&gt; index 76f9064..85b288e 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/rml/ftrm/rml_ftrm_module.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/rml/ftrm/rml_ftrm_module.c
</span><br>
<span class="quotelev1">&gt; @@ -94,20 +94,14 @@ char * orte_rml_ftrm_get_contact_info(void)
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Set CONTACT_INFO
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; -int orte_rml_ftrm_set_contact_info(const char* contact_info)
</span><br>
<span class="quotelev1">&gt; +void orte_rml_ftrm_set_contact_info(const char* contact_info)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    int ret;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;     opal_output_verbose(20, rml_ftrm_output_handle,
</span><br>
<span class="quotelev1">&gt;                         &quot;orte_rml_ftrm: set_contact_info()&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if( NULL != orte_rml_ftrm_wrapped_module.set_contact_info ) {
</span><br>
<span class="quotelev1">&gt; -        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.set_contact_info(contact_info) ) ) {
</span><br>
<span class="quotelev1">&gt; -            return ret;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; +        orte_rml_ftrm_wrapped_module.set_contact_info(contact_info);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -330,20 +324,14 @@ int orte_rml_ftrm_recv_buffer_nb(orte_process_name_t* peer,
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Recv Cancel
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; -int orte_rml_ftrm_recv_cancel(orte_process_name_t* peer, orte_rml_tag_t tag)
</span><br>
<span class="quotelev1">&gt; +void orte_rml_ftrm_recv_cancel(orte_process_name_t* peer, orte_rml_tag_t tag)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    int ret;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;     opal_output_verbose(20, rml_ftrm_output_handle,
</span><br>
<span class="quotelev1">&gt;                         &quot;orte_rml_ftrm: recv_cancel()&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if( NULL != orte_rml_ftrm_wrapped_module.recv_cancel ) {
</span><br>
<span class="quotelev1">&gt; -        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.recv_cancel(peer, tag) ) ) {
</span><br>
<span class="quotelev1">&gt; -            return ret;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; +        orte_rml_ftrm_wrapped_module.recv_cancel(peer, tag);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -436,18 +424,12 @@ int orte_rml_ftrm_ft_event(int state)
</span><br>
<span class="quotelev1">&gt;     return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -int orte_rml_ftrm_purge(orte_process_name_t *peer)
</span><br>
<span class="quotelev1">&gt; +void orte_rml_ftrm_purge(orte_process_name_t *peer)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    int ret;
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt;     opal_output_verbose(20, rml_ftrm_output_handle,
</span><br>
<span class="quotelev1">&gt;                         &quot;orte_rml_ftrm: purge()&quot;);
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     if( NULL != orte_rml_ftrm_wrapped_module.purge ) {
</span><br>
<span class="quotelev1">&gt; -        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.purge(peer) ) ) {
</span><br>
<span class="quotelev1">&gt; -            return ret;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; +        orte_rml_ftrm_wrapped_module.purge(peer);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; -    return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/snapc/full/snapc_full_global.c b/orte/mca/snapc/full/snapc_full_global.c
</span><br>
<span class="quotelev1">&gt; index 8f1317b..c88c6db 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/snapc/full/snapc_full_global.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/snapc/full/snapc_full_global.c
</span><br>
<span class="quotelev1">&gt; @@ -905,26 +905,17 @@ static int snapc_full_global_start_listener(void)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int snapc_full_global_stop_listener(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt;     if (!snapc_orted_recv_issued &amp;&amp; ORTE_PROC_IS_HNP) {
</span><br>
<span class="quotelev1">&gt;         return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     OPAL_OUTPUT_VERBOSE((5, mca_snapc_full_component.super.output_handle,
</span><br>
<span class="quotelev1">&gt;                          &quot;Global) Shutdown Coordinator Channel&quot;));
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; -                                                    ORTE_RML_TAG_SNAPC_FULL))) {
</span><br>
<span class="quotelev1">&gt; -        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; -        exit_status = ret;
</span><br>
<span class="quotelev1">&gt; -        goto cleanup;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SNAPC_FULL);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     snapc_orted_recv_issued = false;
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; - cleanup:
</span><br>
<span class="quotelev1">&gt; -    return exit_status;
</span><br>
<span class="quotelev1">&gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int snapc_full_global_start_cmdline_listener(void)
</span><br>
<span class="quotelev1">&gt; @@ -959,26 +950,17 @@ static int snapc_full_global_start_cmdline_listener(void)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int snapc_full_global_stop_cmdline_listener(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt;     if (!snapc_cmdline_recv_issued &amp;&amp; ORTE_PROC_IS_HNP) {
</span><br>
<span class="quotelev1">&gt;         return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     OPAL_OUTPUT_VERBOSE((5, mca_snapc_full_component.super.output_handle,
</span><br>
<span class="quotelev1">&gt;                          &quot;Global) Shutdown Command Line Channel&quot;));
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; -                                                    ORTE_RML_TAG_CKPT))) {
</span><br>
<span class="quotelev1">&gt; -        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; -        exit_status = ret;
</span><br>
<span class="quotelev1">&gt; -        goto cleanup;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_CKPT);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     snapc_cmdline_recv_issued = false;
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; - cleanup:
</span><br>
<span class="quotelev1">&gt; -    return exit_status;
</span><br>
<span class="quotelev1">&gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /*****************
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/snapc/full/snapc_full_local.c b/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev1">&gt; index 0975d77..c0b168a 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev1">&gt; @@ -378,8 +378,6 @@ static int snapc_full_local_start_hnp_listener(void)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int snapc_full_local_stop_hnp_listener(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;     /*
</span><br>
<span class="quotelev1">&gt;      * Global Coordinator: Does not register a Local listener
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt; @@ -393,18 +391,11 @@ static int snapc_full_local_stop_hnp_listener(void)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     OPAL_OUTPUT_VERBOSE((5, mca_snapc_full_component.super.output_handle,
</span><br>
<span class="quotelev1">&gt;                          &quot;Local) Shutdown Coordinator Channel&quot;));
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; -                                                    ORTE_RML_TAG_SNAPC_FULL))) {
</span><br>
<span class="quotelev1">&gt; -        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; -        exit_status = ret;
</span><br>
<span class="quotelev1">&gt; -        goto cleanup;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SNAPC_FULL);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     snapc_local_hnp_recv_issued = false;
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; - cleanup:
</span><br>
<span class="quotelev1">&gt; -    return exit_status;
</span><br>
<span class="quotelev1">&gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int snapc_full_local_start_app_listener(void)
</span><br>
<span class="quotelev1">&gt; @@ -439,26 +430,17 @@ static int snapc_full_local_start_app_listener(void)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int snapc_full_local_stop_app_listener(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt;     if (!snapc_local_app_recv_issued ) {
</span><br>
<span class="quotelev1">&gt;         return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     OPAL_OUTPUT_VERBOSE((5, mca_snapc_full_component.super.output_handle,
</span><br>
<span class="quotelev1">&gt;                          &quot;Local) Shutdown Application State Channel&quot;));
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; -                                                    ORTE_RML_TAG_SNAPC))) {
</span><br>
<span class="quotelev1">&gt; -        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; -        exit_status = ret;
</span><br>
<span class="quotelev1">&gt; -        goto cleanup;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SNAPC);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     snapc_local_app_recv_issued = false;
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; - cleanup:
</span><br>
<span class="quotelev1">&gt; -    return exit_status;
</span><br>
<span class="quotelev1">&gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /******************
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/sstore/central/sstore_central_global.c b/orte/mca/sstore/central/sstore_central_global.c
</span><br>
<span class="quotelev1">&gt; index cd41aef..935b6fe 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/sstore/central/sstore_central_global.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/sstore/central/sstore_central_global.c
</span><br>
<span class="quotelev1">&gt; @@ -824,19 +824,10 @@ static int sstore_central_global_start_listener(void)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int sstore_central_global_stop_listener(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; -                                                    ORTE_RML_TAG_SSTORE_INTERNAL))) {
</span><br>
<span class="quotelev1">&gt; -        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; -        exit_status = ret;
</span><br>
<span class="quotelev1">&gt; -        goto cleanup;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SSTORE_INTERNAL);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     is_global_listener_active = false;
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; - cleanup:
</span><br>
<span class="quotelev1">&gt; -    return exit_status;
</span><br>
<span class="quotelev1">&gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static void sstore_central_global_recv(int status,
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/sstore/central/sstore_central_local.c b/orte/mca/sstore/central/sstore_central_local.c
</span><br>
<span class="quotelev1">&gt; index 0442dd0..35ef518 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/sstore/central/sstore_central_local.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/sstore/central/sstore_central_local.c
</span><br>
<span class="quotelev1">&gt; @@ -643,19 +643,10 @@ static int sstore_central_local_start_listener(void)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int sstore_central_local_stop_listener(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; -                                                    ORTE_RML_TAG_SSTORE_INTERNAL))) {
</span><br>
<span class="quotelev1">&gt; -        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; -        exit_status = ret;
</span><br>
<span class="quotelev1">&gt; -        goto cleanup;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SSTORE_INTERNAL);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     is_global_listener_active = false;
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; - cleanup:
</span><br>
<span class="quotelev1">&gt; -    return exit_status;
</span><br>
<span class="quotelev1">&gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int process_global_pull(orte_process_name_t* peer, opal_buffer_t* buffer, orte_sstore_central_local_snapshot_info_t *handle_info)
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/sstore/stage/sstore_stage_global.c b/orte/mca/sstore/stage/sstore_stage_global.c
</span><br>
<span class="quotelev1">&gt; index c79bfb9..1c8847a 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/sstore/stage/sstore_stage_global.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/sstore/stage/sstore_stage_global.c
</span><br>
<span class="quotelev1">&gt; @@ -1016,19 +1016,10 @@ static int sstore_stage_global_start_listener(void)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int sstore_stage_global_stop_listener(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; -                                                    ORTE_RML_TAG_SSTORE_INTERNAL))) {
</span><br>
<span class="quotelev1">&gt; -        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; -        exit_status = ret;
</span><br>
<span class="quotelev1">&gt; -        goto cleanup;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SSTORE_INTERNAL);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     is_global_listener_active = false;
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; - cleanup:
</span><br>
<span class="quotelev1">&gt; -    return exit_status;
</span><br>
<span class="quotelev1">&gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static void sstore_stage_global_recv(int status,
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/sstore/stage/sstore_stage_local.c b/orte/mca/sstore/stage/sstore_stage_local.c
</span><br>
<span class="quotelev1">&gt; index e3667ba..792c1a2 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/sstore/stage/sstore_stage_local.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/sstore/stage/sstore_stage_local.c
</span><br>
<span class="quotelev1">&gt; @@ -1067,19 +1067,9 @@ static int sstore_stage_local_start_listener(void)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int sstore_stage_local_stop_listener(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; -                                                    ORTE_RML_TAG_SSTORE_INTERNAL))) {
</span><br>
<span class="quotelev1">&gt; -        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; -        exit_status = ret;
</span><br>
<span class="quotelev1">&gt; -        goto cleanup;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SSTORE_INTERNAL);
</span><br>
<span class="quotelev1">&gt;     is_global_listener_active = false;
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; - cleanup:
</span><br>
<span class="quotelev1">&gt; -    return exit_status;
</span><br>
<span class="quotelev1">&gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static void sstore_stage_local_recv(int status,
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/tools/orte-checkpoint/orte-checkpoint.c b/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev1">&gt; index 9f2e716..caa5949 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev1">&gt; @@ -671,22 +671,14 @@ static int start_listener(void)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int stop_listener(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;     if( !listener_started ) {
</span><br>
<span class="quotelev1">&gt; -        exit_status = ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt; -        goto cleanup;
</span><br>
<span class="quotelev1">&gt; +        return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; -                                                    ORTE_RML_TAG_CKPT))) {
</span><br>
<span class="quotelev1">&gt; -        exit_status = ret;
</span><br>
<span class="quotelev1">&gt; -        goto cleanup;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_CKPT);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     listener_started = false;
</span><br>
<span class="quotelev1">&gt; - cleanup:
</span><br>
<span class="quotelev1">&gt; -    return exit_status;
</span><br>
<span class="quotelev1">&gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static void hnp_receiver(int status,
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/tools/orte-migrate/orte-migrate.c b/orte/tools/orte-migrate/orte-migrate.c
</span><br>
<span class="quotelev1">&gt; index b1de924..7ba2074 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/tools/orte-migrate/orte-migrate.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/tools/orte-migrate/orte-migrate.c
</span><br>
<span class="quotelev1">&gt; @@ -532,22 +532,14 @@ static int start_listener(void)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int stop_listener(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;     if( !listener_started ) {
</span><br>
<span class="quotelev1">&gt; -        exit_status = ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt; -        goto cleanup;
</span><br>
<span class="quotelev1">&gt; +        return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret = orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; -                                                    ORTE_RML_TAG_MIGRATE))) {
</span><br>
<span class="quotelev1">&gt; -        exit_status = ret;
</span><br>
<span class="quotelev1">&gt; -        goto cleanup;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_MIGRATE);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     listener_started = false;
</span><br>
<span class="quotelev1">&gt; - cleanup:
</span><br>
<span class="quotelev1">&gt; -    return exit_status;
</span><br>
<span class="quotelev1">&gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static void hnp_receiver(int status,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 1.8.3.1
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
<li><strong>Previous message:</strong> <a href="13372.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13333.php">Adrian Reber: "[OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile again. (void value not ignored)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13386.php">Adrian Reber: "Re: [OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile	again. (void value not ignored)"</a>
<li><strong>Reply:</strong> <a href="13386.php">Adrian Reber: "Re: [OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile	again. (void value not ignored)"</a>
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
