<?
$subject_val = "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 11:17:39 2014" -->
<!-- isoreceived="20140123161739" -->
<!-- sent="Thu, 23 Jan 2014 08:16:52 -0800" -->
<!-- isosent="20140123161652" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again" -->
<!-- id="5DE38136-0953-4EF8-B858-602FB73C611D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140123145112.GL30959_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 11:16:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13881.php">Ralph Castain: "Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
<li><strong>Previous message:</strong> <a href="13879.php">Ralph Castain: "Re: [OMPI devel] trunk and v1.7: xlc and lost atomics patch"</a>
<li><strong>In reply to:</strong> <a href="13875.php">Adrian Reber: "[OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13883.php">Josh Hursey: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<li><strong>Reply:</strong> <a href="13883.php">Josh Hursey: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks correct to me - you are right in that you cannot release the buffer until after the send completes. We don't copy the data underneath to save memory and time.
<br>
<p><p>On Jan 23, 2014, at 6:51 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Following patch makes orte-checkpoint communicate with orterun again:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/tools/orte-checkpoint/orte-checkpoint.c b/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev1">&gt; index 7106342..8539f34 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev1">&gt; @@ -834,7 +834,7 @@ static int notify_process_for_checkpoint(opal_crs_base_ckpt_options_t *options)
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (ORTE_SUCCESS != (ret = orte_rml.send_buffer_nb(&amp;(orterun_hnp-&gt;name), buffer,
</span><br>
<span class="quotelev1">&gt; -                                                       ORTE_RML_TAG_CKPT, hnp_receiver,
</span><br>
<span class="quotelev1">&gt; +                                                       ORTE_RML_TAG_CKPT, orte_rml_send_callback,
</span><br>
<span class="quotelev1">&gt;                                                        NULL))) {
</span><br>
<span class="quotelev1">&gt;         exit_status = ret;
</span><br>
<span class="quotelev1">&gt;         goto cleanup;
</span><br>
<span class="quotelev1">&gt; @@ -845,11 +845,6 @@ static int notify_process_for_checkpoint(opal_crs_base_ckpt_options_t *options)
</span><br>
<span class="quotelev1">&gt;                         ORTE_JOBID_PRINT(jobid));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  cleanup:
</span><br>
<span class="quotelev1">&gt; -    if( NULL != buffer) {
</span><br>
<span class="quotelev1">&gt; -        OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt; -        buffer = NULL;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;     if( ORTE_SUCCESS != exit_status ) {
</span><br>
<span class="quotelev1">&gt;         opal_show_help(&quot;help-orte-checkpoint.txt&quot;, &quot;unable_to_connect&quot;, true,
</span><br>
<span class="quotelev1">&gt;                        orte_checkpoint_globals.pid);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Before committing the code into the repository I wanted to make
</span><br>
<span class="quotelev1">&gt; sure it is the correct way to fix it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The first change changes the callback to orte_rml_send_callback().
</span><br>
<span class="quotelev1">&gt; When I initially made the code compile again I used hnp_receiver()
</span><br>
<span class="quotelev1">&gt; to change the code from blocking to non-blocking and that was
</span><br>
<span class="quotelev1">&gt; wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The second change (removal of OBJ_RELEASE(buffer)) is necessary
</span><br>
<span class="quotelev1">&gt; because this seems to delete buffer during communication and then
</span><br>
<span class="quotelev1">&gt; everything breaks badly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
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
<li><strong>Next message:</strong> <a href="13881.php">Ralph Castain: "Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
<li><strong>Previous message:</strong> <a href="13879.php">Ralph Castain: "Re: [OMPI devel] trunk and v1.7: xlc and lost atomics patch"</a>
<li><strong>In reply to:</strong> <a href="13875.php">Adrian Reber: "[OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13883.php">Josh Hursey: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<li><strong>Reply:</strong> <a href="13883.php">Josh Hursey: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
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
