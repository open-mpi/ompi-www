<?
$subject_val = "Re: [OMPI devel] C/R and orte_oob";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  6 17:16:05 2014" -->
<!-- isoreceived="20140206221605" -->
<!-- sent="Thu, 6 Feb 2014 23:16:05 +0100" -->
<!-- isosent="20140206221605" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] C/R and orte_oob" -->
<!-- id="20140206221605.GX4981_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2BA0AE40-2BA7-437E-A81A-53FE4E02B519_at_open-mpi.org" -->
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
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-06 17:16:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14011.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Previous message:</strong> <a href="14009.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>In reply to:</strong> <a href="14009.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14011.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14011.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh explained it to me a few days ago, that after a checkpoint has been
<br>
received TCP should no longer be used to not lose any messages. The
<br>
communication happens over named pipes and therefore (I think) OOB
<br>
ft_event() is used to quite anything besides the pipes. This all seems
<br>
to work but I was just confused as the functions for ft_event()
<br>
in oob/tcp and oob/ud do not seem to contain any functionality.
<br>
<p>So do I try to fix the ft_event() function in oob/base/ to call the
<br>
registered ft_event() function which does nothing or do I just remove
<br>
the call to orte oob ft_event().
<br>
<p>On Thu, Feb 06, 2014 at 10:49:25AM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; The only reason I can think of for an OOB ft-event would be to tell the OOB to stop sending any messages. You would need to push that into the event library and use a callback event to let you know when it was done.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, once you did that, the OOB would no longer be available to, for example, tell the local daemon that the app is ready for checkpoint :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Afraid I'll have to defer to Josh H for any further guidance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 6, 2014, at 8:15 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When I initially made the C/R code compile again I made following
</span><br>
<span class="quotelev2">&gt; &gt; change:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/rml/oob/rml_oob_component.c b/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev2">&gt; &gt; index f0b22fc..90ed086 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -185,8 +185,7 @@ orte_rml_oob_ft_event(int state) {
</span><br>
<span class="quotelev2">&gt; &gt;         ;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -    if( ORTE_SUCCESS != 
</span><br>
<span class="quotelev2">&gt; &gt; -        (ret = orte_oob.ft_event(state)) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if( ORTE_SUCCESS != (ret = orte_rml_oob_ft_event(state)) ) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This is, of course, wrong. Now the function calls itself in a loop until
</span><br>
<span class="quotelev2">&gt; &gt; it crashes. Looking at orte/mca/oob there is still a ft_event()
</span><br>
<span class="quotelev2">&gt; &gt; function, but it is disabled using &quot;#if 0&quot;. Looking at other functions
</span><br>
<span class="quotelev2">&gt; &gt; it seems I would need to create something like
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #define ORTE_OOB_FT_EVENT(m)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Looking at the modules in orte/mca/oob/ it seems ft_event is implemented
</span><br>
<span class="quotelev2">&gt; &gt; in some places but it never seems to have any real functionality. Is
</span><br>
<span class="quotelev2">&gt; &gt; ft_event() actually needed there?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 		Adrian
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14011.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Previous message:</strong> <a href="14009.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>In reply to:</strong> <a href="14009.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14011.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14011.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
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
