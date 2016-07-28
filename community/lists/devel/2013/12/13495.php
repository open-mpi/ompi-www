<?
$subject_val = "Re: [OMPI devel] [PATCH v2 2/2] Trying to get the C/R code to compile again. (send_*_nb)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 15:38:03 2013" -->
<!-- isoreceived="20131219203803" -->
<!-- sent="Thu, 19 Dec 2013 21:38:01 +0100" -->
<!-- isosent="20131219203801" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH v2 2/2] Trying to get the C/R code to compile again. (send_*_nb)" -->
<!-- id="20131219203801.GR367_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3FACC36C-985B-4AF4-ADEF-9816B4D29301_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH v2 2/2] Trying to get the C/R code to compile again. (send_*_nb)<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 15:38:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13496.php">Adrian Reber: "[OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again"</a>
<li><strong>Previous message:</strong> <a href="13494.php">Hjelm, Nathan T: "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<li><strong>In reply to:</strong> <a href="13468.php">Ralph Castain: "Re: [OMPI devel] [PATCH v2 2/2] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13466.php">Adrian Reber: "[OMPI devel] [PATCH v2 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the review. I am re-spinning the patches and sending the new
<br>
version in a few moments.
<br>
<p>On Wed, Dec 18, 2013 at 06:56:47AM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; In the case of the send, there really isn't any problem with just replacing things - the non-blocking change won't impact anything, so no need to retain the old code. People were only concerned about the recv's as those places will require further repair, and they wanted to ensure we know where those places are located.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You also need to change those comparisons, however, as the return code isn't the number of bytes sent any more - it is just ORTE_SUCCESS or else an error code, so you should be testing for ORTE_SUCCESS ==
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 18, 2013, at 6:42 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This patch changes all send/send_buffer occurrences in the C/R code
</span><br>
<span class="quotelev2">&gt; &gt; to send_nb/send_buffer_nb.
</span><br>
<span class="quotelev2">&gt; &gt; The old code is still there but disabled using ifdefs (ENABLE_FT_FIXED).
</span><br>
<span class="quotelev2">&gt; &gt; The new code compiles but does not work.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Changes from V1:
</span><br>
<span class="quotelev2">&gt; &gt; * #ifdef out the code (so it is preserved for later re-design)
</span><br>
<span class="quotelev2">&gt; &gt; * marked the broken C/R code with ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Signed-off-by: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c            | 18 +++++++
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/errmgr/base/errmgr_base_tool.c         |  4 ++
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/rml/ftrm/rml_ftrm.h                    | 19 --------
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/rml/ftrm/rml_ftrm_component.c          |  2 -
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/rml/ftrm/rml_ftrm_module.c             | 63 +++++--------------------
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/snapc/full/snapc_full_app.c            | 20 ++++++++
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/snapc/full/snapc_full_global.c         | 12 +++++
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/snapc/full/snapc_full_local.c          |  4 ++
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/sstore/central/sstore_central_app.c    |  8 ++++
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/sstore/central/sstore_central_global.c |  4 ++
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/sstore/central/sstore_central_local.c  | 12 +++++
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/sstore/stage/sstore_stage_app.c        |  8 ++++
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/sstore/stage/sstore_stage_global.c     |  4 ++
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/sstore/stage/sstore_stage_local.c      | 16 +++++++
</span><br>
<span class="quotelev2">&gt; &gt; orte/tools/orte-checkpoint/orte-checkpoint.c    |  4 ++
</span><br>
<span class="quotelev2">&gt; &gt; orte/tools/orte-migrate/orte-migrate.c          |  4 ++
</span><br>
<span class="quotelev2">&gt; &gt; 16 files changed, 130 insertions(+), 72 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c b/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
</span><br>
<span class="quotelev2">&gt; &gt; index cba7586..4f7bd7f 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -5102,7 +5102,11 @@ static int wait_quiesce_drained(void)
</span><br>
<span class="quotelev2">&gt; &gt;             PACK_BUFFER(buffer, response, 1, OPAL_SIZE, &quot;&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;             /* JJH - Performance Optimization? - Why not post all isends, then wait? */
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +            /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;             if ( 0 &gt; ( ret = ompi_rte_send_buffer(&amp;(cur_peer_ref-&gt;proc_name), buffer, OMPI_CRCP_COORD_BOOKMARK_TAG, 0)) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +            if ( 0 &gt; ( ret = ompi_rte_send_buffer_nb(&amp;(cur_peer_ref-&gt;proc_name), buffer, OMPI_CRCP_COORD_BOOKMARK_TAG, orte_rml_send_callback, NULL)) ) {
</span><br>
<span class="quotelev2">&gt; &gt;                 exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;                 goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt; @@ -5303,7 +5307,11 @@ static int send_bookmarks(int peer_idx)
</span><br>
<span class="quotelev2">&gt; &gt;     PACK_BUFFER(buffer, (peer_ref-&gt;total_msgs_recvd),     1, OPAL_UINT32,
</span><br>
<span class="quotelev2">&gt; &gt;                 &quot;crcp:bkmrk: send_bookmarks: Unable to pack total_msgs_recvd&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if ( 0 &gt; ( ret = ompi_rte_send_buffer(&amp;peer_name, buffer, OMPI_CRCP_COORD_BOOKMARK_TAG, 0)) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if ( 0 &gt; ( ret = ompi_rte_send_buffer_nb(&amp;peer_name, buffer, OMPI_CRCP_COORD_BOOKMARK_TAG, orte_rml_send_callback, NULL)) ) {
</span><br>
<span class="quotelev2">&gt; &gt;         opal_output(mca_crcp_bkmrk_component.super.output_handle,
</span><br>
<span class="quotelev2">&gt; &gt;                     &quot;crcp:bkmrk: send_bookmarks: Failed to send bookmark to peer %s: Return %d\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                     OMPI_NAME_PRINT(&amp;peer_name),
</span><br>
<span class="quotelev2">&gt; &gt; @@ -5599,8 +5607,13 @@ static int do_send_msg_detail(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
</span><br>
<span class="quotelev2">&gt; &gt;     /*
</span><br>
<span class="quotelev2">&gt; &gt;      * Do the send...
</span><br>
<span class="quotelev2">&gt; &gt;      */
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if ( 0 &gt; ( ret = ompi_rte_send_buffer(&amp;peer_ref-&gt;proc_name, buffer,
</span><br>
<span class="quotelev2">&gt; &gt;                                           OMPI_CRCP_COORD_BOOKMARK_TAG, 0)) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if ( 0 &gt; ( ret = ompi_rte_send_buffer_nb(&amp;peer_ref-&gt;proc_name, buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +                                          OMPI_CRCP_COORD_BOOKMARK_TAG, orte_rml_send_callback, NULL)) ) {
</span><br>
<span class="quotelev2">&gt; &gt;         opal_output(mca_crcp_bkmrk_component.super.output_handle,
</span><br>
<span class="quotelev2">&gt; &gt;                     &quot;crcp:bkmrk: do_send_msg_detail: Unable to send message details to peer %s: Return %d\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                     OMPI_NAME_PRINT(&amp;peer_ref-&gt;proc_name),
</span><br>
<span class="quotelev2">&gt; &gt; @@ -6217,8 +6230,13 @@ static int do_recv_msg_detail_resp(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
</span><br>
<span class="quotelev2">&gt; &gt;                 &quot;crcp:bkmrk: recv_msg_details: Unable to ask peer for more messages&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;     PACK_BUFFER(buffer, total_found, 1, OPAL_UINT32,
</span><br>
<span class="quotelev2">&gt; &gt;                 &quot;crcp:bkmrk: recv_msg_details: Unable to ask peer for more messages&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     if ( 0 &gt; ( ret = ompi_rte_send_buffer(&amp;peer_ref-&gt;proc_name, buffer, OMPI_CRCP_COORD_BOOKMARK_TAG, 0)) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if ( 0 &gt; ( ret = ompi_rte_send_buffer_nb(&amp;peer_ref-&gt;proc_name, buffer, OMPI_CRCP_COORD_BOOKMARK_TAG, orte_rml_send_callback, NULL)) ) {
</span><br>
<span class="quotelev2">&gt; &gt;         opal_output(mca_crcp_bkmrk_component.super.output_handle,
</span><br>
<span class="quotelev2">&gt; &gt;                     &quot;crcp:bkmrk: recv_msg_detail_resp: Unable to send message detail response to peer %s: Return %d\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                     OMPI_NAME_PRINT(&amp;peer_ref-&gt;proc_name),
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/errmgr/base/errmgr_base_tool.c b/orte/mca/errmgr/base/errmgr_base_tool.c
</span><br>
<span class="quotelev2">&gt; &gt; index b982e46..e274bae 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/errmgr/base/errmgr_base_tool.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/errmgr/base/errmgr_base_tool.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -221,7 +221,11 @@ int orte_errmgr_base_migrate_update(int status)
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if (0 &gt; (ret = orte_rml.send_buffer(&amp;errmgr_cmdline_sender, loc_buffer, ORTE_RML_TAG_MIGRATE, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 &gt; (ret = orte_rml.send_buffer_nb(&amp;errmgr_cmdline_sender, loc_buffer, ORTE_RML_TAG_MIGRATE, orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         opal_output(orte_errmgr_base_framework.framework_output,
</span><br>
<span class="quotelev2">&gt; &gt;                     &quot;errmgr:base:tool:update() Error: Send (status) Failure (ret = %d)\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                     ret);
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/rml/ftrm/rml_ftrm.h b/orte/mca/rml/ftrm/rml_ftrm.h
</span><br>
<span class="quotelev2">&gt; &gt; index 055c891..98c9968 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/rml/ftrm/rml_ftrm.h
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/rml/ftrm/rml_ftrm.h
</span><br>
<span class="quotelev2">&gt; &gt; @@ -71,40 +71,21 @@ BEGIN_C_DECLS
</span><br>
<span class="quotelev2">&gt; &gt;     int orte_rml_ftrm_ping(const char* uri, const struct timeval* tv);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     /*
</span><br>
<span class="quotelev2">&gt; &gt; -     * Send
</span><br>
<span class="quotelev2">&gt; &gt; -     */
</span><br>
<span class="quotelev2">&gt; &gt; -    int orte_rml_ftrm_send(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt; -                           struct iovec *msg,
</span><br>
<span class="quotelev2">&gt; &gt; -                           int count,
</span><br>
<span class="quotelev2">&gt; &gt; -                           int tag,
</span><br>
<span class="quotelev2">&gt; &gt; -                           int flags);
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    /*
</span><br>
<span class="quotelev2">&gt; &gt;      * Send Non-blocking
</span><br>
<span class="quotelev2">&gt; &gt;      */
</span><br>
<span class="quotelev2">&gt; &gt;     int orte_rml_ftrm_send_nb(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt;                               struct iovec* msg,
</span><br>
<span class="quotelev2">&gt; &gt;                               int count,
</span><br>
<span class="quotelev2">&gt; &gt;                               orte_rml_tag_t tag,
</span><br>
<span class="quotelev2">&gt; &gt; -                              int flags,
</span><br>
<span class="quotelev2">&gt; &gt;                               orte_rml_callback_fn_t cbfunc,
</span><br>
<span class="quotelev2">&gt; &gt;                               void* cbdata);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     /*
</span><br>
<span class="quotelev2">&gt; &gt; -     * Send Buffer
</span><br>
<span class="quotelev2">&gt; &gt; -     */
</span><br>
<span class="quotelev2">&gt; &gt; -    int orte_rml_ftrm_send_buffer(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt; -                                  opal_buffer_t* buffer,
</span><br>
<span class="quotelev2">&gt; &gt; -                                  orte_rml_tag_t tag,
</span><br>
<span class="quotelev2">&gt; &gt; -                                  int flags);
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    /*
</span><br>
<span class="quotelev2">&gt; &gt;      * Send Buffer Non-blocking
</span><br>
<span class="quotelev2">&gt; &gt;      */
</span><br>
<span class="quotelev2">&gt; &gt;     int orte_rml_ftrm_send_buffer_nb(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt;                                      opal_buffer_t* buffer,
</span><br>
<span class="quotelev2">&gt; &gt;                                      orte_rml_tag_t tag,
</span><br>
<span class="quotelev2">&gt; &gt; -                                     int flags,
</span><br>
<span class="quotelev2">&gt; &gt;                                      orte_rml_buffer_callback_fn_t cbfunc,
</span><br>
<span class="quotelev2">&gt; &gt;                                      void* cbdata);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/rml/ftrm/rml_ftrm_component.c b/orte/mca/rml/ftrm/rml_ftrm_component.c
</span><br>
<span class="quotelev2">&gt; &gt; index 0ffa79c..7cd5a69 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/rml/ftrm/rml_ftrm_component.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/rml/ftrm/rml_ftrm_component.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -68,9 +68,7 @@ orte_rml_module_t orte_rml_ftrm_module = {
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     orte_rml_ftrm_ping,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -    orte_rml_ftrm_send,
</span><br>
<span class="quotelev2">&gt; &gt;     orte_rml_ftrm_send_nb,
</span><br>
<span class="quotelev2">&gt; &gt; -    orte_rml_ftrm_send_buffer,
</span><br>
<span class="quotelev2">&gt; &gt;     orte_rml_ftrm_send_buffer_nb,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     orte_rml_ftrm_recv_nb,
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/rml/ftrm/rml_ftrm_module.c b/orte/mca/rml/ftrm/rml_ftrm_module.c
</span><br>
<span class="quotelev2">&gt; &gt; index 4ba6f2d..ffcff8b 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/rml/ftrm/rml_ftrm_module.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/rml/ftrm/rml_ftrm_module.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -126,71 +126,29 @@ int orte_rml_ftrm_ping(const char* uri, const struct timeval* tv)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /*
</span><br>
<span class="quotelev2">&gt; &gt; - * Send
</span><br>
<span class="quotelev2">&gt; &gt; - */
</span><br>
<span class="quotelev2">&gt; &gt; -int orte_rml_ftrm_send(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt; -                       struct iovec *msg,
</span><br>
<span class="quotelev2">&gt; &gt; -                       int count,
</span><br>
<span class="quotelev2">&gt; &gt; -                       int tag,
</span><br>
<span class="quotelev2">&gt; &gt; -                       int flags)
</span><br>
<span class="quotelev2">&gt; &gt; -{
</span><br>
<span class="quotelev2">&gt; &gt; -    int ret;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    opal_output_verbose(20, rml_ftrm_output_handle,
</span><br>
<span class="quotelev2">&gt; &gt; -                        &quot;orte_rml_ftrm: send(%s, %d, %d, %d )&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; -                        ORTE_NAME_PRINT(peer), count, tag, flags);
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    if( NULL != orte_rml_ftrm_wrapped_module.send ) {
</span><br>
<span class="quotelev2">&gt; &gt; -        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send(peer, msg, count, tag, flags) ) ) {
</span><br>
<span class="quotelev2">&gt; &gt; -            return ret;
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; -}
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -/*
</span><br>
<span class="quotelev2">&gt; &gt;  * Send Non-blocking
</span><br>
<span class="quotelev2">&gt; &gt;  */
</span><br>
<span class="quotelev2">&gt; &gt; int orte_rml_ftrm_send_nb(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt;                           struct iovec* msg,
</span><br>
<span class="quotelev2">&gt; &gt;                           int count,
</span><br>
<span class="quotelev2">&gt; &gt;                           orte_rml_tag_t tag,
</span><br>
<span class="quotelev2">&gt; &gt; -                          int flags,
</span><br>
<span class="quotelev2">&gt; &gt;                           orte_rml_callback_fn_t cbfunc,
</span><br>
<span class="quotelev2">&gt; &gt;                           void* cbdata)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     int ret;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     opal_output_verbose(20, rml_ftrm_output_handle,
</span><br>
<span class="quotelev2">&gt; &gt; -                        &quot;orte_rml_ftrm: send_nb(%s, %d, %d, %d )&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; -                        ORTE_NAME_PRINT(peer), count, tag, flags);
</span><br>
<span class="quotelev2">&gt; &gt; +                        &quot;orte_rml_ftrm: send_nb(%s, %d, %d )&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                        ORTE_NAME_PRINT(peer), count, tag);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     if( NULL != orte_rml_ftrm_wrapped_module.send_nb ) {
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +        /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;         if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send_nb(peer, msg, count, tag, flags, cbfunc, cbdata) ) ) {
</span><br>
<span class="quotelev2">&gt; &gt;             return ret;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; -}
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -/*
</span><br>
<span class="quotelev2">&gt; &gt; - * Send Buffer
</span><br>
<span class="quotelev2">&gt; &gt; - */
</span><br>
<span class="quotelev2">&gt; &gt; -int orte_rml_ftrm_send_buffer(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt; -                              opal_buffer_t* buffer,
</span><br>
<span class="quotelev2">&gt; &gt; -                              orte_rml_tag_t tag,
</span><br>
<span class="quotelev2">&gt; &gt; -                              int flags)
</span><br>
<span class="quotelev2">&gt; &gt; -{
</span><br>
<span class="quotelev2">&gt; &gt; -    int ret;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    opal_output_verbose(20, rml_ftrm_output_handle,
</span><br>
<span class="quotelev2">&gt; &gt; -                        &quot;orte_rml_ftrm: send_buffer(%s, %d, %d )&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; -                        ORTE_NAME_PRINT(peer), tag, flags);
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    if( NULL != orte_rml_ftrm_wrapped_module.send_buffer ) {
</span><br>
<span class="quotelev2">&gt; &gt; -        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send_buffer(peer, buffer, tag, flags) ) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send_nb(peer, msg, count, tag, cbfunc, cbdata) ) ) {
</span><br>
<span class="quotelev2">&gt; &gt;             return ret;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; @@ -204,18 +162,21 @@ int orte_rml_ftrm_send_buffer(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt; int orte_rml_ftrm_send_buffer_nb(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt;                                  opal_buffer_t* buffer,
</span><br>
<span class="quotelev2">&gt; &gt;                                  orte_rml_tag_t tag,
</span><br>
<span class="quotelev2">&gt; &gt; -                                 int flags,
</span><br>
<span class="quotelev2">&gt; &gt;                                  orte_rml_buffer_callback_fn_t cbfunc,
</span><br>
<span class="quotelev2">&gt; &gt;                                  void* cbdata)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     int ret;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     opal_output_verbose(20, rml_ftrm_output_handle,
</span><br>
<span class="quotelev2">&gt; &gt; -                        &quot;orte_rml_ftrm: send_buffer_nb(%s, %d, %d )&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; -                        ORTE_NAME_PRINT(peer), tag, flags);
</span><br>
<span class="quotelev2">&gt; &gt; +                        &quot;orte_rml_ftrm: send_buffer_nb(%s, %d )&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                        ORTE_NAME_PRINT(peer), tag);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     if( NULL != orte_rml_ftrm_wrapped_module.send_buffer_nb ) {
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +        /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;         if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send_buffer_nb(peer, buffer, tag, flags, cbfunc, cbdata) ) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send_buffer_nb(peer, buffer, tag, cbfunc, cbdata) ) ) {
</span><br>
<span class="quotelev2">&gt; &gt;             return ret;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/snapc/full/snapc_full_app.c b/orte/mca/snapc/full/snapc_full_app.c
</span><br>
<span class="quotelev2">&gt; &gt; index 862c9be..26b95c6 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/snapc/full/snapc_full_app.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/snapc/full/snapc_full_app.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -197,7 +197,11 @@ int app_coord_init()
</span><br>
<span class="quotelev2">&gt; &gt;             goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +        /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;         if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +        if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;             exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;             OBJ_DESTRUCT(&amp;buffer);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -272,7 +276,11 @@ int app_coord_finalize()
</span><br>
<span class="quotelev2">&gt; &gt;             goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +        /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;         if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +        if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;             exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;             OBJ_DESTRUCT(&amp;buffer);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -838,7 +846,11 @@ static int snapc_full_app_finished_msg(int cr_state) {
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SNAPC, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SNAPC, orte_rml_send_callback, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1271,7 +1283,11 @@ static int snapc_full_app_ft_event_update_process_info(orte_process_name_t proc,
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SNAPC, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SNAPC, orte_rml_send_callback, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1484,7 +1500,11 @@ int app_coord_request_op(orte_snapc_base_request_op_t *datum)
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +        /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;         if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +        if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;             exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;             OBJ_DESTRUCT(&amp;buffer);
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/snapc/full/snapc_full_global.c b/orte/mca/snapc/full/snapc_full_global.c
</span><br>
<span class="quotelev2">&gt; &gt; index efd202d..6047ad5 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/snapc/full/snapc_full_global.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/snapc/full/snapc_full_global.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1267,7 +1267,11 @@ static void snapc_full_process_request_op_cmd(orte_process_name_t* sender,
</span><br>
<span class="quotelev2">&gt; &gt;             goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +        /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;         if (0 &gt; (ret = orte_rml.send_buffer(sender, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +        if (0 &gt; (ret = orte_rml.send_buffer_nb(sender, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;             goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1320,7 +1324,11 @@ static void snapc_full_process_request_op_cmd(orte_process_name_t* sender,
</span><br>
<span class="quotelev2">&gt; &gt;             goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +        /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;         if (0 &gt; (ret = orte_rml.send_buffer(sender, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +        if (0 &gt; (ret = orte_rml.send_buffer_nb(sender, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;             goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1461,7 +1469,11 @@ static void snapc_full_process_request_op_cmd(orte_process_name_t* sender,
</span><br>
<span class="quotelev2">&gt; &gt;             goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +        /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;         if (0 &gt; (ret = orte_rml.send_buffer(sender, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +        if (0 &gt; (ret = orte_rml.send_buffer_nb(sender, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;             goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/snapc/full/snapc_full_local.c b/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev2">&gt; &gt; index 6413413..45dc17c 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1369,7 +1369,11 @@ static int snapc_full_local_update_coord(int state, bool quick)
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  send_data:
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, orte_rml_send_callback, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/sstore/central/sstore_central_app.c b/orte/mca/sstore/central/sstore_central_app.c
</span><br>
<span class="quotelev2">&gt; &gt; index a7d6689..965c6ef 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/sstore/central/sstore_central_app.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/sstore/central/sstore_central_app.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -462,7 +462,11 @@ static int pull_handle_info(orte_sstore_central_app_snapshot_info_t *handle_info
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -586,7 +590,11 @@ static int push_handle_info(orte_sstore_central_app_snapshot_info_t *handle_info
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/sstore/central/sstore_central_global.c b/orte/mca/sstore/central/sstore_central_global.c
</span><br>
<span class="quotelev2">&gt; &gt; index 2685a55..d410c30 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/sstore/central/sstore_central_global.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/sstore/central/sstore_central_global.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -938,7 +938,11 @@ static int process_local_pull(orte_process_name_t* peer, opal_buffer_t* buffer,
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if (0 &gt; (ret = orte_rml.send_buffer(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 &gt; (ret = orte_rml.send_buffer_nb(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/sstore/central/sstore_central_local.c b/orte/mca/sstore/central/sstore_central_local.c
</span><br>
<span class="quotelev2">&gt; &gt; index 0393107..5eefc4b 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/sstore/central/sstore_central_local.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/sstore/central/sstore_central_local.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -772,7 +772,11 @@ static int process_app_pull(orte_process_name_t* peer, opal_buffer_t* buffer, or
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if (0 &gt; (ret = orte_rml.send_buffer(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 &gt; (ret = orte_rml.send_buffer_nb(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -889,7 +893,11 @@ static int pull_handle_info(orte_sstore_central_local_snapshot_info_t *handle_in
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -961,7 +969,11 @@ static int push_handle_info(orte_sstore_central_local_snapshot_info_t *handle_in
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/sstore/stage/sstore_stage_app.c b/orte/mca/sstore/stage/sstore_stage_app.c
</span><br>
<span class="quotelev2">&gt; &gt; index 88b6484..52bb91e 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/sstore/stage/sstore_stage_app.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/sstore/stage/sstore_stage_app.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -451,7 +451,11 @@ static int pull_handle_info(orte_sstore_stage_app_snapshot_info_t *handle_info )
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -566,7 +570,11 @@ static int push_handle_info(orte_sstore_stage_app_snapshot_info_t *handle_info )
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/sstore/stage/sstore_stage_global.c b/orte/mca/sstore/stage/sstore_stage_global.c
</span><br>
<span class="quotelev2">&gt; &gt; index 1c94845..bd82ff9 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/sstore/stage/sstore_stage_global.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/sstore/stage/sstore_stage_global.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1163,7 +1163,11 @@ static int process_local_pull(orte_process_name_t* peer, opal_buffer_t* buffer,
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if (0 &gt; (ret = orte_rml.send_buffer(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 &gt; (ret = orte_rml.send_buffer_nb(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/sstore/stage/sstore_stage_local.c b/orte/mca/sstore/stage/sstore_stage_local.c
</span><br>
<span class="quotelev2">&gt; &gt; index 88ded55..c997158 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/sstore/stage/sstore_stage_local.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/sstore/stage/sstore_stage_local.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1322,7 +1322,11 @@ static int process_global_remove(orte_process_name_t* peer, opal_buffer_t* buffe
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if (0 &gt; (ret = orte_rml.send_buffer(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 &gt; (ret = orte_rml.send_buffer_nb(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1400,7 +1404,11 @@ static int process_app_pull(orte_process_name_t* peer, opal_buffer_t* buffer, or
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if (0 &gt; (ret = orte_rml.send_buffer(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 &gt; (ret = orte_rml.send_buffer_nb(peer, &amp;loc_buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1666,7 +1674,11 @@ static int pull_handle_info(orte_sstore_stage_local_snapshot_info_t *handle_info
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1751,7 +1763,11 @@ static int push_handle_info(orte_sstore_stage_local_snapshot_info_t *handle_info
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 &gt; (ret = orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer, ORTE_RML_TAG_SSTORE_INTERNAL, orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/tools/orte-checkpoint/orte-checkpoint.c b/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev2">&gt; &gt; index 62cb651..4e3ad5d 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -846,7 +846,11 @@ static int notify_process_for_checkpoint(opal_crs_base_ckpt_options_t *options)
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if ( 0 &gt; (ret = orte_rml.send_buffer(&amp;(orterun_hnp-&gt;name), buffer, ORTE_RML_TAG_CKPT, 0)) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if ( 0 &gt; (ret = orte_rml.send_buffer_nb(&amp;(orterun_hnp-&gt;name), buffer, ORTE_RML_TAG_CKPT, hnp_receiver, NULL)) ) {
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/tools/orte-migrate/orte-migrate.c b/orte/tools/orte-migrate/orte-migrate.c
</span><br>
<span class="quotelev2">&gt; &gt; index fe6f32e..1cc9a32 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/tools/orte-migrate/orte-migrate.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/tools/orte-migrate/orte-migrate.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -694,7 +694,11 @@ static int notify_hnp(void)
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if ( 0 &gt; (ret = orte_rml.send_buffer(&amp;(orterun_hnp-&gt;name), buffer, ORTE_RML_TAG_MIGRATE, 0)) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    if ( 0 &gt; (ret = orte_rml.send_buffer_nb(&amp;(orterun_hnp-&gt;name), buffer, ORTE_RML_TAG_MIGRATE, orte_rml_send_callback, NULL)) ) {
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; 1.8.4.2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13496.php">Adrian Reber: "[OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again"</a>
<li><strong>Previous message:</strong> <a href="13494.php">Hjelm, Nathan T: "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<li><strong>In reply to:</strong> <a href="13468.php">Ralph Castain: "Re: [OMPI devel] [PATCH v2 2/2] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13466.php">Adrian Reber: "[OMPI devel] [PATCH v2 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
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
