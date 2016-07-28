<?
$subject_val = "Re: [OMPI devel] C/R and orte_oob";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  6 13:50:37 2014" -->
<!-- isoreceived="20140206185037" -->
<!-- sent="Thu, 6 Feb 2014 10:49:25 -0800" -->
<!-- isosent="20140206184925" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] C/R and orte_oob" -->
<!-- id="2BA0AE40-2BA7-437E-A81A-53FE4E02B519_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140206161500.GV4981_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] C/R and orte_oob<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-06 13:49:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14010.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Previous message:</strong> <a href="14008.php">Ralph Castain: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<li><strong>In reply to:</strong> <a href="14001.php">Adrian Reber: "[OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14010.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14010.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The only reason I can think of for an OOB ft-event would be to tell the OOB to stop sending any messages. You would need to push that into the event library and use a callback event to let you know when it was done.
<br>
<p>Of course, once you did that, the OOB would no longer be available to, for example, tell the local daemon that the app is ready for checkpoint :-)
<br>
<p>Afraid I'll have to defer to Josh H for any further guidance.
<br>
<p><p>On Feb 6, 2014, at 8:15 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; When I initially made the C/R code compile again I made following
</span><br>
<span class="quotelev1">&gt; change:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/rml/oob/rml_oob_component.c b/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev1">&gt; index f0b22fc..90ed086 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev1">&gt; @@ -185,8 +185,7 @@ orte_rml_oob_ft_event(int state) {
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
<span class="quotelev1">&gt; +    if( ORTE_SUCCESS != (ret = orte_rml_oob_ft_event(state)) ) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;         exit_status = ret;
</span><br>
<span class="quotelev1">&gt;         goto cleanup;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is, of course, wrong. Now the function calls itself in a loop until
</span><br>
<span class="quotelev1">&gt; it crashes. Looking at orte/mca/oob there is still a ft_event()
</span><br>
<span class="quotelev1">&gt; function, but it is disabled using &quot;#if 0&quot;. Looking at other functions
</span><br>
<span class="quotelev1">&gt; it seems I would need to create something like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define ORTE_OOB_FT_EVENT(m)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at the modules in orte/mca/oob/ it seems ft_event is implemented
</span><br>
<span class="quotelev1">&gt; in some places but it never seems to have any real functionality. Is
</span><br>
<span class="quotelev1">&gt; ft_event() actually needed there?
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
<li><strong>Next message:</strong> <a href="14010.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Previous message:</strong> <a href="14008.php">Ralph Castain: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<li><strong>In reply to:</strong> <a href="14001.php">Adrian Reber: "[OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14010.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14010.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
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
