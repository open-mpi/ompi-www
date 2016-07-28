<?
$subject_val = "Re: [OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  2 12:28:42 2014" -->
<!-- isoreceived="20140102172842" -->
<!-- sent="Thu, 2 Jan 2014 12:28:41 -0500" -->
<!-- isosent="20140102172841" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)" -->
<!-- id="CAANzjEk3vXAdrWPSANcMKZgFH7PwiFkDyRG5ZUF5ySioYty=5g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A576EADA-A092-47C1-926D-11C8BB04AF3D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-02 12:28:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13567.php">Josh Hursey: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<li><strong>Previous message:</strong> <a href="13565.php">Josh Hursey: "Re: [OMPI devel] [PATCH v3 2/2] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13500.php">Ralph Castain: "Re: [OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13498.php">Adrian Reber: "[OMPI devel] [PATCH v3 2/2] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p><p><p>On Thu, Dec 19, 2013 at 4:04 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Looks okay to me. On the places where you need to block while waiting for
</span><br>
<span class="quotelev1">&gt; an answer, you can use OMPI_WAIT_FOR_COMPLETION - this will spin on
</span><br>
<span class="quotelev1">&gt; opal_progress until the condition is met. We use it elsewhere for similar
</span><br>
<span class="quotelev1">&gt; purposes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See ompi/mca/rte/rte.h for the definition
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
<span class="quotelev2">&gt; &gt; This patch changes all recv/recv_buffer occurrences in the C/R code
</span><br>
<span class="quotelev2">&gt; &gt; to recv_nb/recv_buffer_nb.
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
<span class="quotelev2">&gt; &gt; Changes from V2:
</span><br>
<span class="quotelev2">&gt; &gt; * only #ifdef out the code where the behaviour is changed
</span><br>
<span class="quotelev2">&gt; &gt;  (used to be blocking; now non-blocking)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Signed-off-by: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c            | 41 +++++--------
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/errmgr/base/errmgr_base_tool.c         | 16 +----
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/rml/ftrm/rml_ftrm.h                    | 27 ++-------
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/rml/ftrm/rml_ftrm_component.c          |  2 -
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/rml/ftrm/rml_ftrm_module.c             | 78
</span><br>
<span class="quotelev1">&gt; +++----------------------
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/snapc/full/snapc_full_app.c            | 12 ++++
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/snapc/full/snapc_full_global.c         | 37 +++---------
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/snapc/full/snapc_full_local.c          | 36 +++---------
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/sstore/central/sstore_central_app.c    |  6 ++
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/sstore/central/sstore_central_global.c | 17 +-----
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/sstore/central/sstore_central_local.c  | 17 +-----
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/sstore/stage/sstore_stage_app.c        |  5 ++
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/sstore/stage/sstore_stage_global.c     | 17 +-----
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/sstore/stage/sstore_stage_local.c      | 17 +-----
</span><br>
<span class="quotelev2">&gt; &gt; orte/tools/orte-checkpoint/orte-checkpoint.c    | 16 +----
</span><br>
<span class="quotelev2">&gt; &gt; orte/tools/orte-migrate/orte-migrate.c          | 16 +----
</span><br>
<span class="quotelev2">&gt; &gt; 16 files changed, 87 insertions(+), 273 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
</span><br>
<span class="quotelev1">&gt; b/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
</span><br>
<span class="quotelev2">&gt; &gt; index 5d4005f..05cd598 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -4717,7 +4717,6 @@ static int ft_event_post_drain_acks(void)
</span><br>
<span class="quotelev2">&gt; &gt;     ompi_crcp_bkmrk_pml_drain_message_ack_ref_t * drain_msg_ack = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;     opal_list_item_t* item = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;     size_t req_size;
</span><br>
<span class="quotelev2">&gt; &gt; -    int ret;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     req_size  = opal_list_get_size(&amp;drained_msg_ack_list);
</span><br>
<span class="quotelev2">&gt; &gt;     if(req_size &lt;= 0) {
</span><br>
<span class="quotelev2">&gt; &gt; @@ -4739,17 +4738,8 @@ static int ft_event_post_drain_acks(void)
</span><br>
<span class="quotelev2">&gt; &gt;         drain_msg_ack =
</span><br>
<span class="quotelev1">&gt; (ompi_crcp_bkmrk_pml_drain_message_ack_ref_t*)item;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         /* Post the receive */
</span><br>
<span class="quotelev2">&gt; &gt; -        if( OMPI_SUCCESS != (ret = ompi_rte_recv_buffer_nb(
</span><br>
<span class="quotelev1">&gt; &amp;drain_msg_ack-&gt;peer,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt;  OMPI_CRCP_COORD_BOOKMARK_TAG,
</span><br>
<span class="quotelev2">&gt; &gt; -                                                            0,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt;  drain_message_ack_cbfunc,
</span><br>
<span class="quotelev2">&gt; &gt; -                                                            NULL) ) ) {
</span><br>
<span class="quotelev2">&gt; &gt; -            opal_output(mca_crcp_bkmrk_component.super.output_handle,
</span><br>
<span class="quotelev2">&gt; &gt; -                        &quot;crcp:bkmrk: %s &lt;-- %s: Failed to post a RML
</span><br>
<span class="quotelev1">&gt; receive to the peer\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; -                        OMPI_NAME_PRINT(OMPI_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt; &gt; -                        OMPI_NAME_PRINT(&amp;(drain_msg_ack-&gt;peer)));
</span><br>
<span class="quotelev2">&gt; &gt; -            return ret;
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; +        ompi_rte_recv_buffer_nb(&amp;drain_msg_ack-&gt;peer,
</span><br>
<span class="quotelev1">&gt; OMPI_CRCP_COORD_BOOKMARK_TAG,
</span><br>
<span class="quotelev2">&gt; &gt; +                                0, drain_message_ack_cbfunc, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -5322,26 +5312,14 @@ static int send_bookmarks(int peer_idx)
</span><br>
<span class="quotelev2">&gt; &gt; static int recv_bookmarks(int peer_idx)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     ompi_process_name_t peer_name;
</span><br>
<span class="quotelev2">&gt; &gt; -    int exit_status = OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; -    int ret;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     START_TIMER(CRCP_TIMER_CKPT_EX_PEER_R);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     peer_name.jobid  = OMPI_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt; &gt;     peer_name.vpid   = peer_idx;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if ( 0 &gt; (ret = ompi_rte_recv_buffer_nb(&amp;peer_name,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt;  OMPI_CRCP_COORD_BOOKMARK_TAG,
</span><br>
<span class="quotelev2">&gt; &gt; -                                            0,
</span><br>
<span class="quotelev2">&gt; &gt; -                                            recv_bookmarks_cbfunc,
</span><br>
<span class="quotelev2">&gt; &gt; -                                            NULL) ) ) {
</span><br>
<span class="quotelev2">&gt; &gt; -        opal_output(mca_crcp_bkmrk_component.super.output_handle,
</span><br>
<span class="quotelev2">&gt; &gt; -                    &quot;crcp:bkmrk: recv_bookmarks: Failed to post receive
</span><br>
<span class="quotelev1">&gt; bookmark from peer %s: Return %d\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; -                    OMPI_NAME_PRINT(&amp;peer_name),
</span><br>
<span class="quotelev2">&gt; &gt; -                    ret);
</span><br>
<span class="quotelev2">&gt; &gt; -        exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt; -        goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_rte_recv_buffer_nb(&amp;peer_name, OMPI_CRCP_COORD_BOOKMARK_TAG,
</span><br>
<span class="quotelev2">&gt; &gt; +                            0, recv_bookmarks_cbfunc, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     ++total_recv_bookmarks;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -5350,7 +5328,7 @@ static int recv_bookmarks(int peer_idx)
</span><br>
<span class="quotelev2">&gt; &gt;     /* JJH Doesn't make much sense to print this. The real bottleneck is
</span><br>
<span class="quotelev1">&gt; always the send_bookmarks() */
</span><br>
<span class="quotelev2">&gt; &gt;     /*DISPLAY_INDV_TIMER(CRCP_TIMER_CKPT_EX_PEER_R, peer_idx, 1);*/
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    return exit_status;
</span><br>
<span class="quotelev2">&gt; &gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static void recv_bookmarks_cbfunc(int status,
</span><br>
<span class="quotelev2">&gt; &gt; @@ -5616,6 +5594,8 @@ static int
</span><br>
<span class="quotelev1">&gt; do_send_msg_detail(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
</span><br>
<span class="quotelev2">&gt; &gt;     /*
</span><br>
<span class="quotelev2">&gt; &gt;      * Recv the ACK msg
</span><br>
<span class="quotelev2">&gt; &gt;      */
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if ( 0 &gt; (ret = ompi_rte_recv_buffer(&amp;peer_ref-&gt;proc_name, buffer,
</span><br>
<span class="quotelev2">&gt; &gt;                                          OMPI_CRCP_COORD_BOOKMARK_TAG,
</span><br>
<span class="quotelev1">&gt; 0) ) ) {
</span><br>
<span class="quotelev2">&gt; &gt;         opal_output(mca_crcp_bkmrk_component.super.output_handle,
</span><br>
<span class="quotelev2">&gt; &gt; @@ -5626,6 +5606,9 @@ static int
</span><br>
<span class="quotelev1">&gt; do_send_msg_detail(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_rte_recv_buffer_nb(&amp;peer_ref-&gt;proc_name,
</span><br>
<span class="quotelev1">&gt; OMPI_CRCP_COORD_BOOKMARK_TAG, 0,
</span><br>
<span class="quotelev2">&gt; &gt; +                            orte_rml_recv_callback, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     UNPACK_BUFFER(buffer, recv_response, 1, OPAL_UINT32,
</span><br>
<span class="quotelev2">&gt; &gt;                   &quot;crcp:bkmrk: send_msg_details: Failed to unpack the
</span><br>
<span class="quotelev1">&gt; ACK from peer buffer.&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -5790,6 +5773,8 @@ static int
</span><br>
<span class="quotelev1">&gt; do_recv_msg_detail(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
</span><br>
<span class="quotelev2">&gt; &gt;     /*
</span><br>
<span class="quotelev2">&gt; &gt;      * Recv the msg
</span><br>
<span class="quotelev2">&gt; &gt;      */
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if ( 0 &gt; (ret = ompi_rte_recv_buffer(&amp;peer_ref-&gt;proc_name, buffer,
</span><br>
<span class="quotelev1">&gt; OMPI_CRCP_COORD_BOOKMARK_TAG, 0) ) ) {
</span><br>
<span class="quotelev2">&gt; &gt;         opal_output(mca_crcp_bkmrk_component.super.output_handle,
</span><br>
<span class="quotelev2">&gt; &gt;                     &quot;crcp:bkmrk: do_recv_msg_detail: %s &lt;-- %s Failed to
</span><br>
<span class="quotelev1">&gt; receive buffer from peer. Return %d\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; @@ -5799,6 +5784,8 @@ static int
</span><br>
<span class="quotelev1">&gt; do_recv_msg_detail(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_rte_recv_buffer_nb(&amp;peer_ref-&gt;proc_name,
</span><br>
<span class="quotelev1">&gt; OMPI_CRCP_COORD_BOOKMARK_TAG, 0, orte_rml_recv_callback, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* Pull out the communicator ID */
</span><br>
<span class="quotelev2">&gt; &gt;     UNPACK_BUFFER(buffer, (*comm_id), 1, OPAL_UINT32,
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/errmgr/base/errmgr_base_tool.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/errmgr/base/errmgr_base_tool.c
</span><br>
<span class="quotelev2">&gt; &gt; index 20d76e5..0b7890a 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/errmgr/base/errmgr_base_tool.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/errmgr/base/errmgr_base_tool.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -248,8 +248,6 @@ int orte_errmgr_base_migrate_update(int status)
</span><br>
<span class="quotelev2">&gt; &gt;  ********************/
</span><br>
<span class="quotelev2">&gt; &gt; static int errmgr_base_tool_start_cmdline_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     if (errmgr_cmdline_recv_issued &amp;&amp; ORTE_PROC_IS_HNP) {
</span><br>
<span class="quotelev2">&gt; &gt;         return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; @@ -262,20 +260,12 @@ static int
</span><br>
<span class="quotelev1">&gt; errmgr_base_tool_start_cmdline_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt;      */
</span><br>
<span class="quotelev2">&gt; &gt;     errmgr_cmdline_sender.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;     errmgr_cmdline_sender.vpid  = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_MIGRATE,
</span><br>
<span class="quotelev2">&gt; &gt; -                                                       0,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; errmgr_base_tool_cmdline_recv,
</span><br>
<span class="quotelev2">&gt; &gt; -                                                       NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt; -        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt; -        exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt; -        goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_MIGRATE,
</span><br>
<span class="quotelev2">&gt; &gt; +                            0, errmgr_base_tool_cmdline_recv, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     errmgr_cmdline_recv_issued = true;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - cleanup:
</span><br>
<span class="quotelev2">&gt; &gt; -    return exit_status;
</span><br>
<span class="quotelev2">&gt; &gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/rml/ftrm/rml_ftrm.h b/orte/mca/rml/ftrm/rml_ftrm.h
</span><br>
<span class="quotelev2">&gt; &gt; index a1bd48a..055c891 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/rml/ftrm/rml_ftrm.h
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/rml/ftrm/rml_ftrm.h
</span><br>
<span class="quotelev2">&gt; &gt; @@ -109,39 +109,20 @@ BEGIN_C_DECLS
</span><br>
<span class="quotelev2">&gt; &gt;                                      void* cbdata);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /*
</span><br>
<span class="quotelev2">&gt; &gt; -     * Recv
</span><br>
<span class="quotelev2">&gt; &gt; -     */
</span><br>
<span class="quotelev2">&gt; &gt; -    int orte_rml_ftrm_recv(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt; -                           struct iovec *msg,
</span><br>
<span class="quotelev2">&gt; &gt; -                           int count,
</span><br>
<span class="quotelev2">&gt; &gt; -                           orte_rml_tag_t tag,
</span><br>
<span class="quotelev2">&gt; &gt; -                           int flags);
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    /*
</span><br>
<span class="quotelev2">&gt; &gt;      * Recv Non-blocking
</span><br>
<span class="quotelev2">&gt; &gt;      */
</span><br>
<span class="quotelev2">&gt; &gt; -    int orte_rml_ftrm_recv_nb(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt; -                              struct iovec* msg,
</span><br>
<span class="quotelev2">&gt; &gt; -                              int count,
</span><br>
<span class="quotelev2">&gt; &gt; +    void orte_rml_ftrm_recv_nb(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt;                               orte_rml_tag_t tag,
</span><br>
<span class="quotelev2">&gt; &gt; -                              int flags,
</span><br>
<span class="quotelev2">&gt; &gt; +                              bool persistent,
</span><br>
<span class="quotelev2">&gt; &gt;                               orte_rml_callback_fn_t cbfunc,
</span><br>
<span class="quotelev2">&gt; &gt;                               void* cbdata);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /*
</span><br>
<span class="quotelev2">&gt; &gt; -     * Recv Buffer
</span><br>
<span class="quotelev2">&gt; &gt; -     */
</span><br>
<span class="quotelev2">&gt; &gt; -    int orte_rml_ftrm_recv_buffer(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt; -                                  opal_buffer_t *buf,
</span><br>
<span class="quotelev2">&gt; &gt; -                                  orte_rml_tag_t tag,
</span><br>
<span class="quotelev2">&gt; &gt; -                                  int flags);
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    /*
</span><br>
<span class="quotelev2">&gt; &gt;      * Recv Buffer Non-blocking
</span><br>
<span class="quotelev2">&gt; &gt;      */
</span><br>
<span class="quotelev2">&gt; &gt; -    int orte_rml_ftrm_recv_buffer_nb(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt; +    void orte_rml_ftrm_recv_buffer_nb(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt;                                      orte_rml_tag_t tag,
</span><br>
<span class="quotelev2">&gt; &gt; -                                     int flags,
</span><br>
<span class="quotelev2">&gt; &gt; +                                     bool persistent,
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
<span class="quotelev2">&gt; &gt; index 6923c44..0ffa79c 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/rml/ftrm/rml_ftrm_component.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/rml/ftrm/rml_ftrm_component.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -73,9 +73,7 @@ orte_rml_module_t orte_rml_ftrm_module = {
</span><br>
<span class="quotelev2">&gt; &gt;     orte_rml_ftrm_send_buffer,
</span><br>
<span class="quotelev2">&gt; &gt;     orte_rml_ftrm_send_buffer_nb,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    orte_rml_ftrm_recv,
</span><br>
<span class="quotelev2">&gt; &gt;     orte_rml_ftrm_recv_nb,
</span><br>
<span class="quotelev2">&gt; &gt; -    orte_rml_ftrm_recv_buffer,
</span><br>
<span class="quotelev2">&gt; &gt;     orte_rml_ftrm_recv_buffer_nb,
</span><br>
<span class="quotelev2">&gt; &gt;     orte_rml_ftrm_recv_cancel,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/rml/ftrm/rml_ftrm_module.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/rml/ftrm/rml_ftrm_module.c
</span><br>
<span class="quotelev2">&gt; &gt; index 85b288e..4ba6f2d 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/rml/ftrm/rml_ftrm_module.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/rml/ftrm/rml_ftrm_module.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -224,101 +224,41 @@ int
</span><br>
<span class="quotelev1">&gt; orte_rml_ftrm_send_buffer_nb(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -/*
</span><br>
<span class="quotelev2">&gt; &gt; - * Recv
</span><br>
<span class="quotelev2">&gt; &gt; - */
</span><br>
<span class="quotelev2">&gt; &gt; -int orte_rml_ftrm_recv(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt; -                       struct iovec *msg,
</span><br>
<span class="quotelev2">&gt; &gt; -                       int count,
</span><br>
<span class="quotelev2">&gt; &gt; -                       orte_rml_tag_t tag,
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
<span class="quotelev2">&gt; &gt; -                        &quot;orte_rml_ftrm: recv(%s, %d, %d, %d )&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; -                        ORTE_NAME_PRINT(peer), count, tag, flags);
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    if( NULL != orte_rml_ftrm_wrapped_module.recv ) {
</span><br>
<span class="quotelev2">&gt; &gt; -        if( ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml_ftrm_wrapped_module.recv(peer, msg, count, tag, flags) ) ) {
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /*
</span><br>
<span class="quotelev2">&gt; &gt;  * Recv Non-blocking
</span><br>
<span class="quotelev2">&gt; &gt;  */
</span><br>
<span class="quotelev2">&gt; &gt; -int orte_rml_ftrm_recv_nb(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt; -                          struct iovec* msg,
</span><br>
<span class="quotelev2">&gt; &gt; -                          int count,
</span><br>
<span class="quotelev2">&gt; &gt; +void orte_rml_ftrm_recv_nb(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt;                           orte_rml_tag_t tag,
</span><br>
<span class="quotelev2">&gt; &gt; -                          int flags,
</span><br>
<span class="quotelev2">&gt; &gt; +                       bool persistent,
</span><br>
<span class="quotelev2">&gt; &gt;                           orte_rml_callback_fn_t cbfunc,
</span><br>
<span class="quotelev2">&gt; &gt;                           void* cbdata)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    int ret;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     opal_output_verbose(20, rml_ftrm_output_handle,
</span><br>
<span class="quotelev2">&gt; &gt; -                        &quot;orte_rml_ftrm: recv_nb(%s, %d, %d, %d )&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; -                        ORTE_NAME_PRINT(peer), count, tag, flags);
</span><br>
<span class="quotelev2">&gt; &gt; +                        &quot;orte_rml_ftrm: recv_nb(%s, %d, %d )&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                        ORTE_NAME_PRINT(peer), tag, persistent);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     if( NULL != orte_rml_ftrm_wrapped_module.recv_nb ) {
</span><br>
<span class="quotelev2">&gt; &gt; -        if( ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml_ftrm_wrapped_module.recv_nb(peer, msg, count, tag, flags, cbfunc,
</span><br>
<span class="quotelev1">&gt; cbdata) ) ) {
</span><br>
<span class="quotelev2">&gt; &gt; -            return ret;
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; +        orte_rml_ftrm_wrapped_module.recv_nb(peer, tag, persistent,
</span><br>
<span class="quotelev1">&gt; cbfunc, cbdata);
</span><br>
<span class="quotelev2">&gt; &gt;     }
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
<span class="quotelev2">&gt; &gt; - * Recv Buffer
</span><br>
<span class="quotelev2">&gt; &gt; - */
</span><br>
<span class="quotelev2">&gt; &gt; -int orte_rml_ftrm_recv_buffer(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt; -                              opal_buffer_t *buf,
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
<span class="quotelev2">&gt; &gt; -                        &quot;orte_rml_ftrm: recv_buffer(%s, %d )&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; -                        ORTE_NAME_PRINT(peer), tag);
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    if( NULL != orte_rml_ftrm_wrapped_module.recv_buffer ) {
</span><br>
<span class="quotelev2">&gt; &gt; -        if( ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml_ftrm_wrapped_module.recv_buffer(peer, buf, tag, flags) ) ) {
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
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /*
</span><br>
<span class="quotelev2">&gt; &gt;  * Recv Buffer Non-blocking
</span><br>
<span class="quotelev2">&gt; &gt;  */
</span><br>
<span class="quotelev2">&gt; &gt; -int orte_rml_ftrm_recv_buffer_nb(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt; +void orte_rml_ftrm_recv_buffer_nb(orte_process_name_t* peer,
</span><br>
<span class="quotelev2">&gt; &gt;                                  orte_rml_tag_t tag,
</span><br>
<span class="quotelev2">&gt; &gt; -                                 int flags,
</span><br>
<span class="quotelev2">&gt; &gt; +                                 bool persistent,
</span><br>
<span class="quotelev2">&gt; &gt;                                  orte_rml_buffer_callback_fn_t cbfunc,
</span><br>
<span class="quotelev2">&gt; &gt;                                  void* cbdata)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    int ret;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     opal_output_verbose(20, rml_ftrm_output_handle,
</span><br>
<span class="quotelev2">&gt; &gt;                         &quot;orte_rml_ftrm: recv_buffer_nb(%s, %d, %d)&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; -                        ORTE_NAME_PRINT(peer), tag, flags);
</span><br>
<span class="quotelev2">&gt; &gt; +                        ORTE_NAME_PRINT(peer), tag, persistent);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     if( NULL != orte_rml_ftrm_wrapped_module.recv_buffer_nb ) {
</span><br>
<span class="quotelev2">&gt; &gt; -        if( ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml_ftrm_wrapped_module.recv_buffer_nb(peer, tag, flags, cbfunc,
</span><br>
<span class="quotelev1">&gt; cbdata) ) ) {
</span><br>
<span class="quotelev2">&gt; &gt; -            return ret;
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; +        orte_rml_ftrm_wrapped_module.recv_buffer_nb(peer, tag,
</span><br>
<span class="quotelev1">&gt; persistent, cbfunc, cbdata);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /*
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/snapc/full/snapc_full_app.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/snapc/full/snapc_full_app.c
</span><br>
<span class="quotelev2">&gt; &gt; index c7438f1..862c9be 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/snapc/full/snapc_full_app.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/snapc/full/snapc_full_app.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -289,12 +289,16 @@ int app_coord_finalize()
</span><br>
<span class="quotelev2">&gt; &gt;          * need to wait until the checkpoint is finished before
</span><br>
<span class="quotelev1">&gt; finishing.
</span><br>
<span class="quotelev2">&gt; &gt;          */
</span><br>
<span class="quotelev2">&gt; &gt;         OBJ_CONSTRUCT(&amp;buffer, opal_buffer_t);
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +        /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;         if (0 &gt; (ret = orte_rml.recv_buffer(ORTE_PROC_MY_HNP, &amp;buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC_FULL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;             exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;             OBJ_DESTRUCT(&amp;buffer);
</span><br>
<span class="quotelev2">&gt; &gt;             goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +        orte_rml.recv_buffer_nb(ORTE_PROC_MY_HNP,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC_FULL, 0, snapc_full_app_callback_recv, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         count = 1;
</span><br>
<span class="quotelev2">&gt; &gt;         if (ORTE_SUCCESS != (ret = opal_dss.unpack(&amp;buffer, &amp;command,
</span><br>
<span class="quotelev1">&gt; &amp;count, ORTE_SNAPC_FULL_CMD))) {
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1534,12 +1538,16 @@ int
</span><br>
<span class="quotelev1">&gt; app_coord_request_op(orte_snapc_base_request_op_t *datum)
</span><br>
<span class="quotelev2">&gt; &gt;             /*
</span><br>
<span class="quotelev2">&gt; &gt;              * Wait for a response regarding completion
</span><br>
<span class="quotelev2">&gt; &gt;              */
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +            /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;             if (0 &gt; (ret = orte_rml.recv_buffer(ORTE_PROC_MY_HNP,
</span><br>
<span class="quotelev1">&gt; &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt;                 ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;                 exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;                 OBJ_DESTRUCT(&amp;buffer);
</span><br>
<span class="quotelev2">&gt; &gt;                 goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +            orte_rml.recv_buffer_nb(ORTE_PROC_MY_HNP,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC_FULL, 0, snapc_full_app_callback_recv, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             count = 1;
</span><br>
<span class="quotelev2">&gt; &gt;             if (ORTE_SUCCESS != (ret = opal_dss.unpack(&amp;buffer,
</span><br>
<span class="quotelev1">&gt; &amp;command, &amp;count, ORTE_SNAPC_FULL_CMD))) {
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1604,12 +1612,16 @@ int
</span><br>
<span class="quotelev1">&gt; app_coord_request_op(orte_snapc_base_request_op_t *datum)
</span><br>
<span class="quotelev2">&gt; &gt;             /*
</span><br>
<span class="quotelev2">&gt; &gt;              * Wait for a response regarding completion
</span><br>
<span class="quotelev2">&gt; &gt;              */
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +            /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;             if (0 &gt; (ret = orte_rml.recv_buffer(ORTE_PROC_MY_HNP,
</span><br>
<span class="quotelev1">&gt; &amp;buffer, ORTE_RML_TAG_SNAPC_FULL, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt;                 ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;                 exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;                 OBJ_DESTRUCT(&amp;buffer);
</span><br>
<span class="quotelev2">&gt; &gt;                 goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +            orte_rml.recv_buffer_nb(ORTE_PROC_MY_HNP,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC_FULL, 0, snapc_full_app_callback_recv, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             count = 1;
</span><br>
<span class="quotelev2">&gt; &gt;             if (ORTE_SUCCESS != (ret = opal_dss.unpack(&amp;buffer,
</span><br>
<span class="quotelev1">&gt; &amp;command, &amp;count, ORTE_SNAPC_FULL_CMD))) {
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/snapc/full/snapc_full_global.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/snapc/full/snapc_full_global.c
</span><br>
<span class="quotelev2">&gt; &gt; index 9f6da34..9787591 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/snapc/full/snapc_full_global.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/snapc/full/snapc_full_global.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -875,32 +875,22 @@ static int global_refresh_job_structs(void)
</span><br>
<span class="quotelev2">&gt; &gt;  *****************/
</span><br>
<span class="quotelev2">&gt; &gt; static int snapc_full_global_start_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     if (snapc_orted_recv_issued &amp;&amp; ORTE_PROC_IS_HNP) {
</span><br>
<span class="quotelev2">&gt; &gt;         return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;     OPAL_OUTPUT_VERBOSE((5, mca_snapc_full_component.super.output_handle,
</span><br>
<span class="quotelev2">&gt; &gt;                          &quot;Global) Startup Coordinator Channel&quot;));
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /*
</span><br>
<span class="quotelev2">&gt; &gt;      * Coordinator command listener
</span><br>
<span class="quotelev2">&gt; &gt;      */
</span><br>
<span class="quotelev2">&gt; &gt; -    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC_FULL,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; snapc_full_global_orted_recv,
</span><br>
<span class="quotelev2">&gt; &gt; -                                                       NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt; -        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt; -        exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt; -        goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SNAPC_FULL,
</span><br>
<span class="quotelev2">&gt; &gt; +                            ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev1">&gt; snapc_full_global_orted_recv, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     snapc_orted_recv_issued = true;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; - cleanup:
</span><br>
<span class="quotelev2">&gt; &gt; -    return exit_status;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int snapc_full_global_stop_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -920,8 +910,6 @@ static int snapc_full_global_stop_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int snapc_full_global_start_cmdline_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     if (snapc_cmdline_recv_issued &amp;&amp; ORTE_PROC_IS_HNP) {
</span><br>
<span class="quotelev2">&gt; &gt;         return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; @@ -932,20 +920,11 @@ static int
</span><br>
<span class="quotelev1">&gt; snapc_full_global_start_cmdline_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt;     /*
</span><br>
<span class="quotelev2">&gt; &gt;      * Coordinator command listener
</span><br>
<span class="quotelev2">&gt; &gt;      */
</span><br>
<span class="quotelev2">&gt; &gt; -    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_CKPT,
</span><br>
<span class="quotelev2">&gt; &gt; -                                                       0,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; snapc_full_global_cmdline_recv,
</span><br>
<span class="quotelev2">&gt; &gt; -                                                       NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt; -        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt; -        exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt; -        goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_CKPT, 0,
</span><br>
<span class="quotelev2">&gt; &gt; +                            snapc_full_global_cmdline_recv, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     snapc_cmdline_recv_issued = true;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; - cleanup:
</span><br>
<span class="quotelev2">&gt; &gt; -    return exit_status;
</span><br>
<span class="quotelev2">&gt; &gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int snapc_full_global_stop_cmdline_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev2">&gt; &gt; index b13fce9..33215ac 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -341,8 +341,6 @@ int local_coord_release_job(orte_jobid_t jobid)
</span><br>
<span class="quotelev2">&gt; &gt;  ******************/
</span><br>
<span class="quotelev2">&gt; &gt; static int snapc_full_local_start_hnp_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     /*
</span><br>
<span class="quotelev2">&gt; &gt;      * Global Coordinator: Do not register a Local listener
</span><br>
<span class="quotelev2">&gt; &gt;      */
</span><br>
<span class="quotelev2">&gt; &gt; @@ -360,20 +358,12 @@ static int
</span><br>
<span class="quotelev1">&gt; snapc_full_local_start_hnp_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt;     /*
</span><br>
<span class="quotelev2">&gt; &gt;      * Coordinator command listener
</span><br>
<span class="quotelev2">&gt; &gt;      */
</span><br>
<span class="quotelev2">&gt; &gt; -    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC_FULL,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; snapc_full_local_hnp_cmd_recv,
</span><br>
<span class="quotelev2">&gt; &gt; -                                                       NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt; -        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt; -        exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt; -        goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SNAPC_FULL,
</span><br>
<span class="quotelev2">&gt; &gt; +                            ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev1">&gt; snapc_full_local_hnp_cmd_recv, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     snapc_local_hnp_recv_issued = true;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; - cleanup:
</span><br>
<span class="quotelev2">&gt; &gt; -    return exit_status;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int snapc_full_local_stop_hnp_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -400,8 +390,6 @@ static int snapc_full_local_stop_hnp_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int snapc_full_local_start_app_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     if (snapc_local_app_recv_issued) {
</span><br>
<span class="quotelev2">&gt; &gt;         return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; @@ -412,20 +400,12 @@ static int
</span><br>
<span class="quotelev1">&gt; snapc_full_local_start_app_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt;     /*
</span><br>
<span class="quotelev2">&gt; &gt;      * Coordinator command listener
</span><br>
<span class="quotelev2">&gt; &gt;      */
</span><br>
<span class="quotelev2">&gt; &gt; -    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SNAPC,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; snapc_full_local_app_cmd_recv,
</span><br>
<span class="quotelev2">&gt; &gt; -                                                       NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt; -        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt; -        exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt; -        goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_SNAPC,
</span><br>
<span class="quotelev2">&gt; &gt; +                            ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev1">&gt; snapc_full_local_app_cmd_recv,
</span><br>
<span class="quotelev2">&gt; &gt; +                            NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     snapc_local_app_recv_issued = true;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; - cleanup:
</span><br>
<span class="quotelev2">&gt; &gt; -    return exit_status;
</span><br>
<span class="quotelev2">&gt; &gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int snapc_full_local_stop_app_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/sstore/central/sstore_central_app.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/sstore/central/sstore_central_app.c
</span><br>
<span class="quotelev2">&gt; &gt; index e717065..a7d6689 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/sstore/central/sstore_central_app.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/sstore/central/sstore_central_app.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -477,6 +477,8 @@ static int
</span><br>
<span class="quotelev1">&gt; pull_handle_info(orte_sstore_central_app_snapshot_info_t *handle_info
</span><br>
<span class="quotelev2">&gt; &gt;                          &quot;sstore:central:(app): pull() from %s -&gt; %s&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                          ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt; &gt;                          ORTE_NAME_PRINT(ORTE_PROC_MY_DAEMON)));
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if( ORTE_SUCCESS != (ret = orte_rml.recv_buffer(ORTE_PROC_MY_DAEMON,
</span><br>
<span class="quotelev2">&gt; &gt;                                                     &amp;buffer,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; @@ -485,6 +487,10 @@ static int
</span><br>
<span class="quotelev1">&gt; pull_handle_info(orte_sstore_central_app_snapshot_info_t *handle_info
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    orte_rml.recv_buffer_nb(ORTE_PROC_MY_DAEMON,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; +                            0, orte_rml_recv_callback, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     count = 1;
</span><br>
<span class="quotelev2">&gt; &gt;     if (ORTE_SUCCESS != (ret = opal_dss.unpack(&amp;buffer, &amp;command,
</span><br>
<span class="quotelev1">&gt; &amp;count, ORTE_SSTORE_CENTRAL_CMD))) {
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/sstore/central/sstore_central_global.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/sstore/central/sstore_central_global.c
</span><br>
<span class="quotelev2">&gt; &gt; index 935b6fe..698910b 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/sstore/central/sstore_central_global.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/sstore/central/sstore_central_global.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -800,26 +800,15 @@ static orte_sstore_central_global_snapshot_info_t
</span><br>
<span class="quotelev1">&gt; *find_handle_info_from_ref(cha
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int sstore_central_global_start_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     if( is_global_listener_active ) {
</span><br>
<span class="quotelev2">&gt; &gt;         return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; sstore_central_global_recv,
</span><br>
<span class="quotelev2">&gt; &gt; -                                                       NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt; -        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt; -        exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt; -        goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; +                            ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev1">&gt; sstore_central_global_recv, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     is_global_listener_active = true;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; - cleanup:
</span><br>
<span class="quotelev2">&gt; &gt; -    return exit_status;
</span><br>
<span class="quotelev2">&gt; &gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int sstore_central_global_stop_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/sstore/central/sstore_central_local.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/sstore/central/sstore_central_local.c
</span><br>
<span class="quotelev2">&gt; &gt; index 35ef518..6df04ef 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/sstore/central/sstore_central_local.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/sstore/central/sstore_central_local.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -619,26 +619,15 @@ static
</span><br>
<span class="quotelev1">&gt; orte_sstore_central_local_app_snapshot_info_t *find_app_handle_info(orte_
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int sstore_central_local_start_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     if( is_global_listener_active ) {
</span><br>
<span class="quotelev2">&gt; &gt;         return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; orte_sstore_central_local_recv,
</span><br>
<span class="quotelev2">&gt; &gt; -                                                       NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt; -        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt; -        exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt; -        goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; +                            ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev1">&gt; orte_sstore_central_local_recv, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     is_global_listener_active = true;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; - cleanup:
</span><br>
<span class="quotelev2">&gt; &gt; -    return exit_status;
</span><br>
<span class="quotelev2">&gt; &gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int sstore_central_local_stop_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/sstore/stage/sstore_stage_app.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/sstore/stage/sstore_stage_app.c
</span><br>
<span class="quotelev2">&gt; &gt; index 10d38ad..88b6484 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/sstore/stage/sstore_stage_app.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/sstore/stage/sstore_stage_app.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -466,6 +466,8 @@ static int
</span><br>
<span class="quotelev1">&gt; pull_handle_info(orte_sstore_stage_app_snapshot_info_t *handle_info )
</span><br>
<span class="quotelev2">&gt; &gt;                          &quot;sstore:stage:(app): pull() from %s -&gt; %s&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                          ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt; &gt;                          ORTE_NAME_PRINT(ORTE_PROC_MY_DAEMON)));
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt; +    /* This is the old, now broken code */
</span><br>
<span class="quotelev2">&gt; &gt;     if( ORTE_SUCCESS != (ret = orte_rml.recv_buffer(ORTE_PROC_MY_DAEMON,
</span><br>
<span class="quotelev2">&gt; &gt;                                                     &amp;buffer,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; @@ -475,6 +477,9 @@ static int
</span><br>
<span class="quotelev1">&gt; pull_handle_info(orte_sstore_stage_app_snapshot_info_t *handle_info )
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +#endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; +    orte_rml.recv_buffer_nb(ORTE_PROC_MY_DAEMON,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; +                            0, orte_rml_recv_callback, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;     count = 1;
</span><br>
<span class="quotelev2">&gt; &gt;     if (ORTE_SUCCESS != (ret = opal_dss.unpack(&amp;buffer, &amp;command,
</span><br>
<span class="quotelev1">&gt; &amp;count, ORTE_SSTORE_STAGE_CMD))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/sstore/stage/sstore_stage_global.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/sstore/stage/sstore_stage_global.c
</span><br>
<span class="quotelev2">&gt; &gt; index 1c8847a..5af66d0 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/sstore/stage/sstore_stage_global.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/sstore/stage/sstore_stage_global.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -992,26 +992,15 @@ static orte_sstore_stage_global_snapshot_info_t
</span><br>
<span class="quotelev1">&gt; *find_handle_info(orte_sstore_ba
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int sstore_stage_global_start_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     if( is_global_listener_active ) {
</span><br>
<span class="quotelev2">&gt; &gt;         return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; sstore_stage_global_recv,
</span><br>
<span class="quotelev2">&gt; &gt; -                                                       NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt; -        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt; -        exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt; -        goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; +                            ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev1">&gt; sstore_stage_global_recv, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     is_global_listener_active = true;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; - cleanup:
</span><br>
<span class="quotelev2">&gt; &gt; -    return exit_status;
</span><br>
<span class="quotelev2">&gt; &gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int sstore_stage_global_stop_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/sstore/stage/sstore_stage_local.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/sstore/stage/sstore_stage_local.c
</span><br>
<span class="quotelev2">&gt; &gt; index 792c1a2..95d89a8 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/sstore/stage/sstore_stage_local.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/sstore/stage/sstore_stage_local.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1043,26 +1043,15 @@ static
</span><br>
<span class="quotelev1">&gt; orte_sstore_stage_local_app_snapshot_info_t *find_app_handle_info(orte_ss
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int sstore_stage_local_start_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     if( is_global_listener_active ) {
</span><br>
<span class="quotelev2">&gt; &gt;         return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; sstore_stage_local_recv,
</span><br>
<span class="quotelev2">&gt; &gt; -                                                       NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt; -        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt; -        exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt; -        goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_SSTORE_INTERNAL,
</span><br>
<span class="quotelev2">&gt; &gt; +                            ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev1">&gt; sstore_stage_local_recv, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     is_global_listener_active = true;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; - cleanup:
</span><br>
<span class="quotelev2">&gt; &gt; -    return exit_status;
</span><br>
<span class="quotelev2">&gt; &gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int sstore_stage_local_stop_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev1">&gt; b/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev2">&gt; &gt; index caa5949..e0f7b01 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -652,21 +652,11 @@ static int ckpt_finalize(void) {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int start_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_CKPT,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev2">&gt; &gt; -                                                       hnp_receiver,
</span><br>
<span class="quotelev2">&gt; &gt; -                                                       NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt; -        exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt; -        goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_CKPT,
</span><br>
<span class="quotelev2">&gt; &gt; +                            ORTE_RML_PERSISTENT, hnp_receiver, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     listener_started = true;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; - cleanup:
</span><br>
<span class="quotelev2">&gt; &gt; -    return exit_status;
</span><br>
<span class="quotelev2">&gt; &gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int stop_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/tools/orte-migrate/orte-migrate.c
</span><br>
<span class="quotelev1">&gt; b/orte/tools/orte-migrate/orte-migrate.c
</span><br>
<span class="quotelev2">&gt; &gt; index 7ba2074..b606e41 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/tools/orte-migrate/orte-migrate.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/tools/orte-migrate/orte-migrate.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -513,21 +513,11 @@ static int tool_finalize(void) {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int start_listener(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    int ret, exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_MIGRATE,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev2">&gt; &gt; -                                                       hnp_receiver,
</span><br>
<span class="quotelev2">&gt; &gt; -                                                       NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt; -        exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt; -        goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_MIGRATE,
</span><br>
<span class="quotelev2">&gt; &gt; +                            ORTE_RML_PERSISTENT, hnp_receiver, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     listener_started = true;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; - cleanup:
</span><br>
<span class="quotelev2">&gt; &gt; -    return exit_status;
</span><br>
<span class="quotelev2">&gt; &gt; +    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int stop_listener(void)
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13566/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13567.php">Josh Hursey: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<li><strong>Previous message:</strong> <a href="13565.php">Josh Hursey: "Re: [OMPI devel] [PATCH v3 2/2] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13500.php">Ralph Castain: "Re: [OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13498.php">Adrian Reber: "[OMPI devel] [PATCH v3 2/2] Trying to get the C/R code to compile again. (send_*_nb)"</a>
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
