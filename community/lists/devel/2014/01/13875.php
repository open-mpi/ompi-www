<?
$subject_val = "[OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 09:51:14 2014" -->
<!-- isoreceived="20140123145114" -->
<!-- sent="Thu, 23 Jan 2014 15:51:12 +0100" -->
<!-- isosent="20140123145112" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again" -->
<!-- id="20140123145112.GL30959_at_lisas.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 09:51:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13876.php">Adrian Reber: "[OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
<li><strong>Previous message:</strong> <a href="13874.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk: typo in error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13880.php">Ralph Castain: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<li><strong>Reply:</strong> <a href="13880.php">Ralph Castain: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Following patch makes orte-checkpoint communicate with orterun again:
<br>
<p>diff --git a/orte/tools/orte-checkpoint/orte-checkpoint.c b/orte/tools/orte-checkpoint/orte-checkpoint.c
<br>
index 7106342..8539f34 100644
<br>
--- a/orte/tools/orte-checkpoint/orte-checkpoint.c
<br>
+++ b/orte/tools/orte-checkpoint/orte-checkpoint.c
<br>
@@ -834,7 +834,7 @@ static int notify_process_for_checkpoint(opal_crs_base_ckpt_options_t *options)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != (ret = orte_rml.send_buffer_nb(&amp;(orterun_hnp-&gt;name), buffer,
<br>
-                                                       ORTE_RML_TAG_CKPT, hnp_receiver,
<br>
+                                                       ORTE_RML_TAG_CKPT, orte_rml_send_callback,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit_status = ret;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto cleanup;
<br>
@@ -845,11 +845,6 @@ static int notify_process_for_checkpoint(opal_crs_base_ckpt_options_t *options)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_JOBID_PRINT(jobid));
<br>
&nbsp;
<br>
&nbsp;&nbsp;cleanup:
<br>
-    if( NULL != buffer) {
<br>
-        OBJ_RELEASE(buffer);
<br>
-        buffer = NULL;
<br>
-    }
<br>
-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( ORTE_SUCCESS != exit_status ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_show_help(&quot;help-orte-checkpoint.txt&quot;, &quot;unable_to_connect&quot;, true,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_checkpoint_globals.pid);
<br>
<p><p>Before committing the code into the repository I wanted to make
<br>
sure it is the correct way to fix it.
<br>
<p>The first change changes the callback to orte_rml_send_callback().
<br>
When I initially made the code compile again I used hnp_receiver()
<br>
to change the code from blocking to non-blocking and that was
<br>
wrong.
<br>
<p>The second change (removal of OBJ_RELEASE(buffer)) is necessary
<br>
because this seems to delete buffer during communication and then
<br>
everything breaks badly.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13876.php">Adrian Reber: "[OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
<li><strong>Previous message:</strong> <a href="13874.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk: typo in error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13880.php">Ralph Castain: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<li><strong>Reply:</strong> <a href="13880.php">Ralph Castain: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
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
