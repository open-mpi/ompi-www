<?
$subject_val = "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 12:27:43 2014" -->
<!-- isoreceived="20140123172743" -->
<!-- sent="Thu, 23 Jan 2014 11:27:42 -0600" -->
<!-- isosent="20140123172742" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again" -->
<!-- id="CAANzjEkfBMZesJ-CN3kQxfJc0wrokE=WpkZv6EX957EAsdZ6Cg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5DE38136-0953-4EF8-B858-602FB73C611D_at_open-mpi.org" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 12:27:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13884.php">Josh Hursey: "Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
<li><strong>Previous message:</strong> <a href="13882.php">Ralph Castain: "Re: [OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?"</a>
<li><strong>In reply to:</strong> <a href="13880.php">Ralph Castain: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13905.php">Adrian Reber: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<li><strong>Reply:</strong> <a href="13905.php">Adrian Reber: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p><p>On Thu, Jan 23, 2014 at 10:16 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Looks correct to me - you are right in that you cannot release the buffer
</span><br>
<span class="quotelev1">&gt; until after the send completes. We don't copy the data underneath to save
</span><br>
<span class="quotelev1">&gt; memory and time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 23, 2014, at 6:51 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Following patch makes orte-checkpoint communicate with orterun again:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev1">&gt; b/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev2">&gt; &gt; index 7106342..8539f34 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -834,7 +834,7 @@ static int
</span><br>
<span class="quotelev1">&gt; notify_process_for_checkpoint(opal_crs_base_ckpt_options_t *options)
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml.send_buffer_nb(&amp;(orterun_hnp-&gt;name), buffer,
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_CKPT, hnp_receiver,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_CKPT, orte_rml_send_callback,
</span><br>
<span class="quotelev2">&gt; &gt;                                                        NULL))) {
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -845,11 +845,6 @@ static int
</span><br>
<span class="quotelev1">&gt; notify_process_for_checkpoint(opal_crs_base_ckpt_options_t *options)
</span><br>
<span class="quotelev2">&gt; &gt;                         ORTE_JOBID_PRINT(jobid));
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  cleanup:
</span><br>
<span class="quotelev2">&gt; &gt; -    if( NULL != buffer) {
</span><br>
<span class="quotelev2">&gt; &gt; -        OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev2">&gt; &gt; -        buffer = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     if( ORTE_SUCCESS != exit_status ) {
</span><br>
<span class="quotelev2">&gt; &gt;         opal_show_help(&quot;help-orte-checkpoint.txt&quot;, &quot;unable_to_connect&quot;,
</span><br>
<span class="quotelev1">&gt; true,
</span><br>
<span class="quotelev2">&gt; &gt;                        orte_checkpoint_globals.pid);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Before committing the code into the repository I wanted to make
</span><br>
<span class="quotelev2">&gt; &gt; sure it is the correct way to fix it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The first change changes the callback to orte_rml_send_callback().
</span><br>
<span class="quotelev2">&gt; &gt; When I initially made the code compile again I used hnp_receiver()
</span><br>
<span class="quotelev2">&gt; &gt; to change the code from blocking to non-blocking and that was
</span><br>
<span class="quotelev2">&gt; &gt; wrong.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The second change (removal of OBJ_RELEASE(buffer)) is necessary
</span><br>
<span class="quotelev2">&gt; &gt; because this seems to delete buffer during communication and then
</span><br>
<span class="quotelev2">&gt; &gt; everything breaks badly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               Adrian
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13883/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13884.php">Josh Hursey: "Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
<li><strong>Previous message:</strong> <a href="13882.php">Ralph Castain: "Re: [OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?"</a>
<li><strong>In reply to:</strong> <a href="13880.php">Ralph Castain: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13905.php">Adrian Reber: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<li><strong>Reply:</strong> <a href="13905.php">Adrian Reber: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
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
