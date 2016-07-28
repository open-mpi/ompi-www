<?
$subject_val = "Re: [OMPI devel] C/R and orte_oob";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 08:14:06 2014" -->
<!-- isoreceived="20140207131406" -->
<!-- sent="Fri, 7 Feb 2014 07:14:05 -0600" -->
<!-- isosent="20140207131405" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] C/R and orte_oob" -->
<!-- id="CAANzjE=v++V3CcMPqh9KsA41_8DN+Mt6a+yrbqTVx2CTJwOisQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2308DE3F-C5BF-4537-ABDB-974A51ECCE4B_at_open-mpi.org" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-07 08:14:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14023.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>Previous message:</strong> <a href="14021.php">George Bosilca: "Re: [OMPI devel] singleton appears to be broken"</a>
<li><strong>In reply to:</strong> <a href="14011.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14141.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the original implementation, the OOB ft_event did not do much of
<br>
anything on checkpoint preparation and continue. We did not even close the
<br>
sockets. However, during restart the OOB will need to renegotiate the
<br>
socket connections - usually by calling the finalization function (close
<br>
stale sockets) and then the initialization function (create new sockets) of
<br>
that component.
<br>
<p>I'm not sure if that is still an acceptable approach or not. We will want
<br>
the OOB to be quieted across the checkpoint preparation and continue so
<br>
that we don't lose any message or have messages cross the checkpoint line.
<br>
So something maybe to return to in the next pass.
<br>
<p><p><p><p>On Thu, Feb 6, 2014 at 4:45 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 6, 2014, at 2:16 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Josh explained it to me a few days ago, that after a checkpoint has been
</span><br>
<span class="quotelev2">&gt; &gt; received TCP should no longer be used to not lose any messages. The
</span><br>
<span class="quotelev2">&gt; &gt; communication happens over named pipes and therefore (I think) OOB
</span><br>
<span class="quotelev2">&gt; &gt; ft_event() is used to quite anything besides the pipes. This all seems
</span><br>
<span class="quotelev2">&gt; &gt; to work but I was just confused as the functions for ft_event()
</span><br>
<span class="quotelev2">&gt; &gt; in oob/tcp and oob/ud do not seem to contain any functionality.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So do I try to fix the ft_event() function in oob/base/ to call the
</span><br>
<span class="quotelev2">&gt; &gt; registered ft_event() function which does nothing or do I just remove
</span><br>
<span class="quotelev2">&gt; &gt; the call to orte oob ft_event().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds like you'll need to tell the OOB components to stop processing
</span><br>
<span class="quotelev1">&gt; messages, so that will require that you insert an event into the system.
</span><br>
<span class="quotelev1">&gt; You have to account for two things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (a) the OOB base and OOB components are operating on the orte_event_base,
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (b) each OOB component can have multiple active modules (one per NIC) that
</span><br>
<span class="quotelev1">&gt; are operating on their own event base/thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So you have to start by pushing an event that calls the OOB base, which
</span><br>
<span class="quotelev1">&gt; then loops across the components calling their ft_event interface. Each
</span><br>
<span class="quotelev1">&gt; component would then have to create an event for each active module,
</span><br>
<span class="quotelev1">&gt; inserting that event into the module's event base/thread. When activated,
</span><br>
<span class="quotelev1">&gt; each module would have to shutdown its message engine, and activate another
</span><br>
<span class="quotelev1">&gt; event to notify its component that all is quiet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once a component finds out that all its modules are quiet, it would then
</span><br>
<span class="quotelev1">&gt; have to activate an event to the OOB base. Once the OOB base sees all
</span><br>
<span class="quotelev1">&gt; components report quiet, then it would have to activate an event to take
</span><br>
<span class="quotelev1">&gt; you to the next step in your process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In other words, you need to turn the quieting process into its own set of
</span><br>
<span class="quotelev1">&gt; states and run it through the state machine. This is the only way to
</span><br>
<span class="quotelev1">&gt; guarantee that you'll keep things orderly, and is the major change needed
</span><br>
<span class="quotelev1">&gt; in the C/R procedure as it flows thru ORTE. You can't just progress thru a
</span><br>
<span class="quotelev1">&gt; set of function calls as you'll inevitably run into a roadblock requiring
</span><br>
<span class="quotelev1">&gt; that you wait for an event-driven process to complete.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Feb 06, 2014 at 10:49:25AM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The only reason I can think of for an OOB ft-event would be to tell the
</span><br>
<span class="quotelev1">&gt; OOB to stop sending any messages. You would need to push that into the
</span><br>
<span class="quotelev1">&gt; event library and use a callback event to let you know when it was done.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Of course, once you did that, the OOB would no longer be available to,
</span><br>
<span class="quotelev1">&gt; for example, tell the local daemon that the app is ready for checkpoint :-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Afraid I'll have to defer to Josh H for any further guidance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Feb 6, 2014, at 8:15 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; When I initially made the C/R code compile again I made following
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; change:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; diff --git a/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; index f0b22fc..90ed086 100644
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --- a/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +++ b/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; @@ -185,8 +185,7 @@ orte_rml_oob_ft_event(int state) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        ;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -    if( ORTE_SUCCESS !=
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -        (ret = orte_oob.ft_event(state)) ) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +    if( ORTE_SUCCESS != (ret = orte_rml_oob_ft_event(state)) ) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        exit_status = ret;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        goto cleanup;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This is, of course, wrong. Now the function calls itself in a loop
</span><br>
<span class="quotelev1">&gt; until
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; it crashes. Looking at orte/mca/oob there is still a ft_event()
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; function, but it is disabled using &quot;#if 0&quot;. Looking at other functions
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; it seems I would need to create something like
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #define ORTE_OOB_FT_EVENT(m)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Looking at the modules in orte/mca/oob/ it seems ft_event is
</span><br>
<span class="quotelev1">&gt; implemented
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in some places but it never seems to have any real functionality. Is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ft_event() actually needed there?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;             Adrian
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14022/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14023.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>Previous message:</strong> <a href="14021.php">George Bosilca: "Re: [OMPI devel] singleton appears to be broken"</a>
<li><strong>In reply to:</strong> <a href="14011.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14141.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
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
