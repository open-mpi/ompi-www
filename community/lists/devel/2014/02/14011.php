<?
$subject_val = "Re: [OMPI devel] C/R and orte_oob";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  6 17:46:21 2014" -->
<!-- isoreceived="20140206224621" -->
<!-- sent="Thu, 6 Feb 2014 14:45:07 -0800" -->
<!-- isosent="20140206224507" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] C/R and orte_oob" -->
<!-- id="2308DE3F-C5BF-4537-ABDB-974A51ECCE4B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140206221605.GX4981_at_lisas.de" -->
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
<strong>Date:</strong> 2014-02-06 17:45:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14012.php">George Bosilca: "[OMPI devel] singleton appears to be broken"</a>
<li><strong>Previous message:</strong> <a href="14010.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>In reply to:</strong> <a href="14010.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14022.php">Josh Hursey: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14022.php">Josh Hursey: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14141.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 6, 2014, at 2:16 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Josh explained it to me a few days ago, that after a checkpoint has been
</span><br>
<span class="quotelev1">&gt; received TCP should no longer be used to not lose any messages. The
</span><br>
<span class="quotelev1">&gt; communication happens over named pipes and therefore (I think) OOB
</span><br>
<span class="quotelev1">&gt; ft_event() is used to quite anything besides the pipes. This all seems
</span><br>
<span class="quotelev1">&gt; to work but I was just confused as the functions for ft_event()
</span><br>
<span class="quotelev1">&gt; in oob/tcp and oob/ud do not seem to contain any functionality.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So do I try to fix the ft_event() function in oob/base/ to call the
</span><br>
<span class="quotelev1">&gt; registered ft_event() function which does nothing or do I just remove
</span><br>
<span class="quotelev1">&gt; the call to orte oob ft_event().
</span><br>
<p>Sounds like you'll need to tell the OOB components to stop processing messages, so that will require that you insert an event into the system. You have to account for two things:
<br>
<p>(a) the OOB base and OOB components are operating on the orte_event_base, but
<br>
<p>(b) each OOB component can have multiple active modules (one per NIC) that are operating on their own event base/thread.
<br>
<p>So you have to start by pushing an event that calls the OOB base, which then loops across the components calling their ft_event interface. Each component would then have to create an event for each active module, inserting that event into the module's event base/thread. When activated, each module would have to shutdown its message engine, and activate another event to notify its component that all is quiet.
<br>
<p>Once a component finds out that all its modules are quiet, it would then have to activate an event to the OOB base. Once the OOB base sees all components report quiet, then it would have to activate an event to take you to the next step in your process.
<br>
<p>In other words, you need to turn the quieting process into its own set of states and run it through the state machine. This is the only way to guarantee that you'll keep things orderly, and is the major change needed in the C/R procedure as it flows thru ORTE. You can't just progress thru a set of function calls as you'll inevitably run into a roadblock requiring that you wait for an event-driven process to complete.
<br>
<p>HTH
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 06, 2014 at 10:49:25AM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The only reason I can think of for an OOB ft-event would be to tell the OOB to stop sending any messages. You would need to push that into the event library and use a callback event to let you know when it was done.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Of course, once you did that, the OOB would no longer be available to, for example, tell the local daemon that the app is ready for checkpoint :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Afraid I'll have to defer to Josh H for any further guidance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 6, 2014, at 8:15 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I initially made the C/R code compile again I made following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; change:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/orte/mca/rml/oob/rml_oob_component.c b/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index f0b22fc..90ed086 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -185,8 +185,7 @@ orte_rml_oob_ft_event(int state) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    if( ORTE_SUCCESS != 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        (ret = orte_oob.ft_event(state)) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if( ORTE_SUCCESS != (ret = orte_rml_oob_ft_event(state)) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        exit_status = ret;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        goto cleanup;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is, of course, wrong. Now the function calls itself in a loop until
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it crashes. Looking at orte/mca/oob there is still a ft_event()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function, but it is disabled using &quot;#if 0&quot;. Looking at other functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it seems I would need to create something like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define ORTE_OOB_FT_EVENT(m)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looking at the modules in orte/mca/oob/ it seems ft_event is implemented
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in some places but it never seems to have any real functionality. Is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ft_event() actually needed there?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 		Adrian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="14012.php">George Bosilca: "[OMPI devel] singleton appears to be broken"</a>
<li><strong>Previous message:</strong> <a href="14010.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>In reply to:</strong> <a href="14010.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14022.php">Josh Hursey: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14022.php">Josh Hursey: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14141.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
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
