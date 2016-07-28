<?
$subject_val = "Re: [OMPI devel] [PATCH v3 2/2] Trying to get the C/R code to compile again. (send_*_nb)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  2 12:26:48 2014" -->
<!-- isoreceived="20140102172648" -->
<!-- sent="Thu, 2 Jan 2014 12:26:47 -0500" -->
<!-- isosent="20140102172647" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH v3 2/2] Trying to get the C/R code to compile again. (send_*_nb)" -->
<!-- id="CAANzjEn_Sfsi3LOtkYYtcRqC-j5c29K4PDZrHEMbi6-DLx9Uig_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="184EAD56-F5BC-4741-8902-DB96B39F9B89_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH v3 2/2] Trying to get the C/R code to compile again. (send_*_nb)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-02 12:26:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13566.php">Josh Hursey: "Re: [OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13564.php">Josh Hursey: "Re: [OMPI devel] [PATCH v2 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13499.php">Ralph Castain: "Re: [OMPI devel] [PATCH v3 2/2] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13531.php">Adrian Reber: "Re: [OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Sorry for the delay, just catching up on email after the holidays)
<br>
<p>I think that looks good too.
<br>
<p><p>On Thu, Dec 19, 2013 at 4:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; +1 from me
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 19, 2013, at 12:54 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
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
<span class="quotelev2">&gt; &gt; Changes from V2:
</span><br>
<span class="quotelev2">&gt; &gt; * just replace the blocking calls with the non-blocking calls
</span><br>
<span class="quotelev2">&gt; &gt; * all #ifdef's introduced in V1 are gone
</span><br>
<span class="quotelev2">&gt; &gt; * send_* returns error code or ORTE_SUCCESS (not the number of bytes)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Signed-off-by: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c            | 23 ++++++----
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/errmgr/base/errmgr_base_tool.c         |  4 +-
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/rml/ftrm/rml_ftrm.h                    | 19 --------
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/rml/ftrm/rml_ftrm_component.c          |  2 -
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/rml/ftrm/rml_ftrm_module.c             | 61
</span><br>
<span class="quotelev1">&gt; +++----------------------
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/snapc/full/snapc_full_app.c            | 20 ++++++--
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/snapc/full/snapc_full_global.c         | 15 ++++--
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/snapc/full/snapc_full_local.c          |  4 +-
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/sstore/central/sstore_central_app.c    |  8 +++-
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/sstore/central/sstore_central_global.c |  4 +-
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/sstore/central/sstore_central_local.c  | 12 +++--
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/sstore/stage/sstore_stage_app.c        |  8 +++-
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/sstore/stage/sstore_stage_global.c     |  4 +-
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/sstore/stage/sstore_stage_local.c      | 16 +++++--
</span><br>
<span class="quotelev2">&gt; &gt; orte/tools/orte-checkpoint/orte-checkpoint.c    |  4 +-
</span><br>
<span class="quotelev2">&gt; &gt; orte/tools/orte-migrate/orte-migrate.c          |  4 +-
</span><br>
<span class="quotelev2">&gt; &gt; 16 files changed, 99 insertions(+), 109 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
</span><br>
<span class="quotelev1">&gt; b/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
</span><br>
<span class="quotelev2">&gt; &gt; index 05cd598..5ad9a3e 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -5077,7 +5077,7 @@ static int wait_quiesce_drained(void)
</span><br>
<span class="quotelev2">&gt; &gt;                                  &quot;crcp:bkmrk: %s --&gt; %s Send ACKs to
</span><br>
<span class="quotelev1">&gt; Peer\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                                  OMPI_NAME_PRINT(OMPI_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  OMPI_NAME_PRINT(&amp;(cur_peer_ref-&gt;proc_name)) ));
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;             /* Send All Clear to Peer */
</span><br>
<span class="quotelev2">&gt; &gt;             if (NULL == (buffer = OBJ_NEW(opal_buffer_t))) {
</span><br>
<span class="quotelev2">&gt; &gt;                 exit_status = OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -5087,7 +5087,9 @@ static int wait_quiesce_drained(void)
</span><br>
<span class="quotelev2">&gt; &gt;             PACK_BUFFER(buffer, response, 1, OPAL_SIZE, &quot;&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             /* JJH - Performance Optimization? - Why not post all
</span><br>
<span class="quotelev1">&gt; isends, then wait? */
</span><br>
<span class="quotelev2">&gt; &gt; -            if ( 0 &gt; ( ret =
</span><br>
<span class="quotelev1">&gt; ompi_rte_send_buffer(&amp;(cur_peer_ref-&gt;proc_name), buffer,
</span><br>
<span class="quotelev1">&gt; OMPI_CRCP_COORD_BOOKMARK_TAG, 0)) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +            if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; ompi_rte_send_buffer_nb(&amp;(cur_peer_ref-&gt;proc_name),
</span><br>
<span class="quotelev2">&gt; &gt; +                                                               buffer,
</span><br>
<span class="quotelev1">&gt; OMPI_CRCP_COORD_BOOKMARK_TAG,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;                 exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;                 goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt; @@ -5288,7 +5290,9 @@ static int send_bookmarks(int peer_idx)
</span><br>
<span class="quotelev2">&gt; &gt;     PACK_BUFFER(buffer, (peer_ref-&gt;total_msgs_recvd),     1, OPAL_UINT32,
</span><br>
<span class="quotelev2">&gt; &gt;                 &quot;crcp:bkmrk: send_bookmarks: Unable to pack
</span><br>
<span class="quotelev1">&gt; total_msgs_recvd&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if ( 0 &gt; ( ret = ompi_rte_send_buffer(&amp;peer_name, buffer,
</span><br>
<span class="quotelev1">&gt; OMPI_CRCP_COORD_BOOKMARK_TAG, 0)) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCSS != (ret = ompi_rte_send_buffer_nb(&amp;peer_name,
</span><br>
<span class="quotelev1">&gt; buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt;  OMPI_CRCP_COORD_BOOKMARK_TAG,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt;  orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         opal_output(mca_crcp_bkmrk_component.super.output_handle,
</span><br>
<span class="quotelev2">&gt; &gt;                     &quot;crcp:bkmrk: send_bookmarks: Failed to send bookmark
</span><br>
<span class="quotelev1">&gt; to peer %s: Return %d\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                     OMPI_NAME_PRINT(&amp;peer_name),
</span><br>
<span class="quotelev2">&gt; &gt; @@ -5567,13 +5571,14 @@ static int
</span><br>
<span class="quotelev1">&gt; do_send_msg_detail(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
</span><br>
<span class="quotelev2">&gt; &gt;     /*
</span><br>
<span class="quotelev2">&gt; &gt;      * Do the send...
</span><br>
<span class="quotelev2">&gt; &gt;      */
</span><br>
<span class="quotelev2">&gt; &gt; -    if ( 0 &gt; ( ret = ompi_rte_send_buffer(&amp;peer_ref-&gt;proc_name, buffer,
</span><br>
<span class="quotelev2">&gt; &gt; -                                          OMPI_CRCP_COORD_BOOKMARK_TAG,
</span><br>
<span class="quotelev1">&gt; 0)) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; ompi_rte_send_buffer_nb(&amp;peer_ref-&gt;proc_name, buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; OMPI_CRCP_COORD_BOOKMARK_TAG,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         opal_output(mca_crcp_bkmrk_component.super.output_handle,
</span><br>
<span class="quotelev2">&gt; &gt;                     &quot;crcp:bkmrk: do_send_msg_detail: Unable to send
</span><br>
<span class="quotelev1">&gt; message details to peer %s: Return %d\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                     OMPI_NAME_PRINT(&amp;peer_ref-&gt;proc_name),
</span><br>
<span class="quotelev2">&gt; &gt;                     ret);
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; @@ -6185,8 +6190,10 @@ static int
</span><br>
<span class="quotelev1">&gt; do_recv_msg_detail_resp(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
</span><br>
<span class="quotelev2">&gt; &gt;                 &quot;crcp:bkmrk: recv_msg_details: Unable to ask peer for
</span><br>
<span class="quotelev1">&gt; more messages&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;     PACK_BUFFER(buffer, total_found, 1, OPAL_UINT32,
</span><br>
<span class="quotelev2">&gt; &gt;                 &quot;crcp:bkmrk: recv_msg_details: Unable to ask peer for
</span><br>
<span class="quotelev1">&gt; more messages&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    if ( 0 &gt; ( ret = ompi_rte_send_buffer(&amp;peer_ref-&gt;proc_name, buffer,
</span><br>
<span class="quotelev1">&gt; OMPI_CRCP_COORD_BOOKMARK_TAG, 0)) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; ompi_rte_send_buffer_nb(&amp;peer_ref-&gt;proc_name, buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; OMPI_CRCP_COORD_BOOKMARK_TAG,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         opal_output(mca_crcp_bkmrk_component.super.output_handle,
</span><br>
<span class="quotelev2">&gt; &gt;                     &quot;crcp:bkmrk: recv_msg_detail_resp: Unable to send
</span><br>
<span class="quotelev1">&gt; message detail response to peer %s: Return %d\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                     OMPI_NAME_PRINT(&amp;peer_ref-&gt;proc_name),
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/errmgr/base/errmgr_base_tool.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/errmgr/base/errmgr_base_tool.c
</span><br>
<span class="quotelev2">&gt; &gt; index 0b7890a..227c2d0 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/errmgr/base/errmgr_base_tool.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/errmgr/base/errmgr_base_tool.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -221,7 +221,9 @@ int orte_errmgr_base_migrate_update(int status)
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (0 &gt; (ret = orte_rml.send_buffer(&amp;errmgr_cmdline_sender,
</span><br>
<span class="quotelev1">&gt; loc_buffer, ORTE_RML_TAG_MIGRATE, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.send_buffer_nb(&amp;errmgr_cmdline_sender,
</span><br>
<span class="quotelev2">&gt; &gt; +                                                       loc_buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_MIGRATE,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         opal_output(orte_errmgr_base_framework.framework_output,
</span><br>
<span class="quotelev2">&gt; &gt;                     &quot;errmgr:base:tool:update() Error: Send (status)
</span><br>
<span class="quotelev1">&gt; Failure (ret = %d)\n&quot;,
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
<span class="quotelev2">&gt; &gt;                                      orte_rml_buffer_callback_fn_t
</span><br>
<span class="quotelev1">&gt; cbfunc,
</span><br>
<span class="quotelev2">&gt; &gt;                                      void* cbdata);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/rml/ftrm/rml_ftrm_component.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/rml/ftrm/rml_ftrm_component.c
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
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/rml/ftrm/rml_ftrm_module.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/rml/ftrm/rml_ftrm_module.c
</span><br>
<span class="quotelev2">&gt; &gt; index 4ba6f2d..589ef65 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/rml/ftrm/rml_ftrm_module.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/rml/ftrm/rml_ftrm_module.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -126,71 +126,23 @@ int orte_rml_ftrm_ping(const char* uri, const
</span><br>
<span class="quotelev1">&gt; struct timeval* tv)
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
<span class="quotelev2">&gt; &gt; -        if( ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml_ftrm_wrapped_module.send(peer, msg, count, tag, flags) ) ) {
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
<span class="quotelev2">&gt; &gt; -        if( ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml_ftrm_wrapped_module.send_nb(peer, msg, count, tag, flags, cbfunc,
</span><br>
<span class="quotelev1">&gt; cbdata) ) ) {
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
<span class="quotelev2">&gt; &gt; -        if( ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml_ftrm_wrapped_module.send_buffer(peer, buffer, tag, flags) ) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +        if(ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml_ftrm_wrapped_module.send_nb(peer, msg, count, tag, cbfunc,
</span><br>
<span class="quotelev1">&gt; cbdata))) {
</span><br>
<span class="quotelev2">&gt; &gt;             return ret;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; @@ -204,18 +156,17 @@ int orte_rml_ftrm_send_buffer(orte_process_name_t*
</span><br>
<span class="quotelev1">&gt; peer,
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
<span class="quotelev2">&gt; &gt; -        if( ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml_ftrm_wrapped_module.send_buffer_nb(peer, buffer, tag, flags,
</span><br>
<span class="quotelev1">&gt; cbfunc, cbdata) ) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +        if(ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml_ftrm_wrapped_module.send_buffer_nb(peer, buffer, tag, cbfunc,
</span><br>
<span class="quotelev1">&gt; cbdata))) {
</span><br>
<span class="quotelev2">&gt; &gt;             return ret;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/snapc/full/snapc_full_app.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/snapc/full/snapc_full_app.c
</span><br>
<span class="quotelev2">&gt; &gt; index 862c9be..d79442e 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/snapc/full/snapc_full_app.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/snapc/full/snapc_full_app.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -197,7 +197,9 @@ int app_coord_init()
</span><br>
<span class="quotelev2">&gt; &gt;             goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -        if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC_FULL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +        if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC_FULL,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;             exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;             OBJ_DESTRUCT(&amp;buffer);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -272,7 +274,9 @@ int app_coord_finalize()
</span><br>
<span class="quotelev2">&gt; &gt;             goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -        if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC_FULL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +        if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC_FULL,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;             exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;             OBJ_DESTRUCT(&amp;buffer);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -838,7 +842,9 @@ static int snapc_full_app_finished_msg(int cr_state)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1271,7 +1277,9 @@ static int
</span><br>
<span class="quotelev1">&gt; snapc_full_app_ft_event_update_process_info(orte_process_name_t proc,
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1484,7 +1492,9 @@ int
</span><br>
<span class="quotelev1">&gt; app_coord_request_op(orte_snapc_base_request_op_t *datum)
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -        if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC_FULL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +        if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC_FULL,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;             exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;             OBJ_DESTRUCT(&amp;buffer);
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/snapc/full/snapc_full_global.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/snapc/full/snapc_full_global.c
</span><br>
<span class="quotelev2">&gt; &gt; index 9787591..0422aac 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/snapc/full/snapc_full_global.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/snapc/full/snapc_full_global.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1243,8 +1243,11 @@ static void
</span><br>
<span class="quotelev1">&gt; snapc_full_process_request_op_cmd(orte_process_name_t* sender,
</span><br>
<span class="quotelev2">&gt; &gt;             goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -        if (0 &gt; (ret = orte_rml.send_buffer(sender, &amp;buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC_FULL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +        if (ORTE_SUCCESS != (ret = orte_rml.send_buffer_nb(sender,
</span><br>
<span class="quotelev1">&gt; &amp;buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC_FULL,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt; +            /* FIXME: buffer not cleaned up */
</span><br>
<span class="quotelev2">&gt; &gt;             goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;         OBJ_DESTRUCT(&amp;buffer);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1296,8 +1299,11 @@ static void
</span><br>
<span class="quotelev1">&gt; snapc_full_process_request_op_cmd(orte_process_name_t* sender,
</span><br>
<span class="quotelev2">&gt; &gt;             goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -        if (0 &gt; (ret = orte_rml.send_buffer(sender, &amp;buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC_FULL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +        if (ORTE_SUCCESS != (ret = orte_rml.send_buffer_nb(sender,
</span><br>
<span class="quotelev1">&gt; &amp;buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC_FULL,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt; +            /* FIXME: buffer not cleaned up */
</span><br>
<span class="quotelev2">&gt; &gt;             goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;         OBJ_DESTRUCT(&amp;buffer);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1437,8 +1443,11 @@ static void
</span><br>
<span class="quotelev1">&gt; snapc_full_process_request_op_cmd(orte_process_name_t* sender,
</span><br>
<span class="quotelev2">&gt; &gt;             goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -        if (0 &gt; (ret = orte_rml.send_buffer(sender, &amp;buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC_FULL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +        if (ORTE_SUCCESS != (ret = orte_rml.send_buffer_nb(sender,
</span><br>
<span class="quotelev1">&gt; &amp;buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC_FULL,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt; +            /* FIXME: buffer not cleaned up */
</span><br>
<span class="quotelev2">&gt; &gt;             goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;         OBJ_DESTRUCT(&amp;buffer);
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev2">&gt; &gt; index 33215ac..0965571 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1345,7 +1345,9 @@ static int snapc_full_local_update_coord(int
</span><br>
<span class="quotelev1">&gt; state, bool quick)
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  send_data:
</span><br>
<span class="quotelev2">&gt; &gt; -    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC_FULL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC_FULL,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/sstore/central/sstore_central_app.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/sstore/central/sstore_central_app.c
</span><br>
<span class="quotelev2">&gt; &gt; index a7d6689..e32fb97 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/sstore/central/sstore_central_app.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/sstore/central/sstore_central_app.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -462,7 +462,9 @@ static int
</span><br>
<span class="quotelev1">&gt; pull_handle_info(orte_sstore_central_app_snapshot_info_t *handle_info
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -586,7 +588,9 @@ static int
</span><br>
<span class="quotelev1">&gt; push_handle_info(orte_sstore_central_app_snapshot_info_t *handle_info
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/sstore/central/sstore_central_global.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/sstore/central/sstore_central_global.c
</span><br>
<span class="quotelev2">&gt; &gt; index 698910b..b18944d 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/sstore/central/sstore_central_global.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/sstore/central/sstore_central_global.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -926,7 +926,9 @@ static int process_local_pull(orte_process_name_t*
</span><br>
<span class="quotelev1">&gt; peer, opal_buffer_t* buffer,
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (0 &gt; (ret = orte_rml.send_buffer(peer, &amp;loc_buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret = orte_rml.send_buffer_nb(peer,
</span><br>
<span class="quotelev1">&gt; &amp;loc_buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/sstore/central/sstore_central_local.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/sstore/central/sstore_central_local.c
</span><br>
<span class="quotelev2">&gt; &gt; index 6df04ef..b3d498e 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/sstore/central/sstore_central_local.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/sstore/central/sstore_central_local.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -760,7 +760,9 @@ static int process_app_pull(orte_process_name_t*
</span><br>
<span class="quotelev1">&gt; peer, opal_buffer_t* buffer, or
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (0 &gt; (ret = orte_rml.send_buffer(peer, &amp;loc_buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret = orte_rml.send_buffer_nb(peer,
</span><br>
<span class="quotelev1">&gt; &amp;loc_buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -877,7 +879,9 @@ static int
</span><br>
<span class="quotelev1">&gt; pull_handle_info(orte_sstore_central_local_snapshot_info_t *handle_in
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -949,7 +953,9 @@ static int
</span><br>
<span class="quotelev1">&gt; push_handle_info(orte_sstore_central_local_snapshot_info_t *handle_in
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/sstore/stage/sstore_stage_app.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/sstore/stage/sstore_stage_app.c
</span><br>
<span class="quotelev2">&gt; &gt; index 88b6484..0a115e1 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/sstore/stage/sstore_stage_app.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/sstore/stage/sstore_stage_app.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -451,7 +451,9 @@ static int
</span><br>
<span class="quotelev1">&gt; pull_handle_info(orte_sstore_stage_app_snapshot_info_t *handle_info )
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -566,7 +568,9 @@ static int
</span><br>
<span class="quotelev1">&gt; push_handle_info(orte_sstore_stage_app_snapshot_info_t *handle_info )
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, &amp;buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.send_buffer_nb(ORTE_PROC_MY_DAEMON, &amp;buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/sstore/stage/sstore_stage_global.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/sstore/stage/sstore_stage_global.c
</span><br>
<span class="quotelev2">&gt; &gt; index 5af66d0..8f6a30e 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/sstore/stage/sstore_stage_global.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/sstore/stage/sstore_stage_global.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1151,7 +1151,9 @@ static int process_local_pull(orte_process_name_t*
</span><br>
<span class="quotelev1">&gt; peer, opal_buffer_t* buffer,
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (0 &gt; (ret = orte_rml.send_buffer(peer, &amp;loc_buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret = orte_rml.send_buffer_nb(peer,
</span><br>
<span class="quotelev1">&gt; &amp;loc_buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/sstore/stage/sstore_stage_local.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/sstore/stage/sstore_stage_local.c
</span><br>
<span class="quotelev2">&gt; &gt; index 95d89a8..292c173 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/sstore/stage/sstore_stage_local.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/sstore/stage/sstore_stage_local.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1310,7 +1310,9 @@ static int
</span><br>
<span class="quotelev1">&gt; process_global_remove(orte_process_name_t* peer, opal_buffer_t* buffe
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (0 &gt; (ret = orte_rml.send_buffer(peer, &amp;loc_buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret = orte_rml.send_buffer_nb(peer,
</span><br>
<span class="quotelev1">&gt; &amp;loc_buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1388,7 +1390,9 @@ static int process_app_pull(orte_process_name_t*
</span><br>
<span class="quotelev1">&gt; peer, opal_buffer_t* buffer, or
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (0 &gt; (ret = orte_rml.send_buffer(peer, &amp;loc_buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret = orte_rml.send_buffer_nb(peer,
</span><br>
<span class="quotelev1">&gt; &amp;loc_buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1654,7 +1658,9 @@ static int
</span><br>
<span class="quotelev1">&gt; pull_handle_info(orte_sstore_stage_local_snapshot_info_t *handle_info
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1739,7 +1745,9 @@ static int
</span><br>
<span class="quotelev1">&gt; push_handle_info(orte_sstore_stage_local_snapshot_info_t *handle_info
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (0 &gt; (ret = orte_rml.send_buffer(ORTE_PROC_MY_HNP, &amp;buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, &amp;buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev1">&gt; b/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev2">&gt; &gt; index e0f7b01..7106342 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -833,7 +833,9 @@ static int
</span><br>
<span class="quotelev1">&gt; notify_process_for_checkpoint(opal_crs_base_ckpt_options_t *options)
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if ( 0 &gt; (ret = orte_rml.send_buffer(&amp;(orterun_hnp-&gt;name), buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_CKPT, 0)) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.send_buffer_nb(&amp;(orterun_hnp-&gt;name), buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_CKPT, hnp_receiver,
</span><br>
<span class="quotelev2">&gt; &gt; +                                                       NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/tools/orte-migrate/orte-migrate.c
</span><br>
<span class="quotelev1">&gt; b/orte/tools/orte-migrate/orte-migrate.c
</span><br>
<span class="quotelev2">&gt; &gt; index b606e41..56f0d1f 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/tools/orte-migrate/orte-migrate.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/tools/orte-migrate/orte-migrate.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -681,7 +681,9 @@ static int notify_hnp(void)
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if ( 0 &gt; (ret = orte_rml.send_buffer(&amp;(orterun_hnp-&gt;name), buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_MIGRATE, 0)) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.send_buffer_nb(&amp;(orterun_hnp-&gt;name), buffer,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_MIGRATE, orte_rml_send_callback,
</span><br>
<span class="quotelev2">&gt; &gt; +                                                       NULL))) {
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13565/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13566.php">Josh Hursey: "Re: [OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13564.php">Josh Hursey: "Re: [OMPI devel] [PATCH v2 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13499.php">Ralph Castain: "Re: [OMPI devel] [PATCH v3 2/2] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13531.php">Adrian Reber: "Re: [OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again"</a>
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
