<?
$subject_val = "Re: [OMPI devel] RFC: Diagnostoc framework for MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 07:35:09 2009" -->
<!-- isoreceived="20090526113509" -->
<!-- sent="Tue, 26 May 2009 05:35:02 -0600" -->
<!-- isosent="20090526113502" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Diagnostoc framework for MPI" -->
<!-- id="71d2d8cc0905260435te174800id04320bf49574eb1_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1243316029.2634.7.camel_at_frecb000730.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Diagnostoc framework for MPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-26 07:35:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6085.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Previous message:</strong> <a href="6083.php">Nadia Derbey: "[OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>In reply to:</strong> <a href="6083.php">Nadia Derbey: "[OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6086.php">Nadia Derbey: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>Reply:</strong> <a href="6086.php">Nadia Derbey: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nadia
<br>
<p>We actually have a framework in the system for this purpose, though it might
<br>
require some minor modifications to do precisely what you describe. It is
<br>
the ORTE &quot;notifier&quot; framework - you will find it at orte/mca/notifier. There
<br>
are several components, each of which supports a different notification
<br>
mechanism (e.g., message into the sys log, smtp, and even &quot;twitter&quot;).
<br>
<p>The system works by adding orte_notifier calls to the OMPI code wherever we
<br>
deem it advisable to alert someone. For example, if we think a sys admin
<br>
might want to be alerted when the number of IB send retries exceeds some
<br>
limit, we add a call to orte_notifier to the IB code with:
<br>
<p>if (#retries &gt; threshold) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_notifier.xxx(....);
<br>
}
<br>
<p>I believe we could easily extend this to support your proposed
<br>
functionality. A couple of possibilities that immediately spring to mind
<br>
would be:
<br>
<p>1. you could create a new component (or we could modify the existing ones)
<br>
that tracks how many times it is called for a given error, and only actually
<br>
issues a notification for that specific error when the count exceeds a
<br>
threshold. The negative to this approach is that the threshold would be
<br>
uniform across all errors.
<br>
<p>2. we could extend the current notifier APIs to add a threshold count upon
<br>
which the notification is to be sent, perhaps creating a new macro
<br>
ORTE_NOTIFIER_VERBOSE that takes the threshold as one of its arguments. We
<br>
could then let each OMPI framework have a new &quot;threshold&quot; MCA param, thus
<br>
allowing the sys admins to &quot;tune&quot; the frequency of error reporting by
<br>
framework. Of course, we could let them get as detailed here as you want -
<br>
they could even have &quot;threshold&quot; params for each component, function, or
<br>
whatever. This would be combined with #1 above to alert only when the count
<br>
exceeded the threshold for that specific error message.
<br>
<p>I'm sure you and others will come up with additional (probably better) ways
<br>
of implementing this extension. My point here was simply to ensure you knew
<br>
that the basic mechanism already exists, and to stimulate some thought as to
<br>
how to use it for your proposed purpose.
<br>
<p>I would be happy to help you do so as this is something we (LANL) have put
<br>
at a high priority - our sys admins on the large clusters really need the
<br>
help.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Mon, May 25, 2009 at 11:33 PM, Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; What: Warn the administrator when unusual events are occurring too
</span><br>
<span class="quotelev1">&gt; frequently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why: Such unusual events might be the symptom of some problem that can
</span><br>
<span class="quotelev1">&gt; easily be fixed (by a better tuning, for example)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where: Adds a new ompi framework
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Description:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The objective of the Open MPI library is to make applications run to
</span><br>
<span class="quotelev1">&gt; completion, given that no fatal error is encountered.
</span><br>
<span class="quotelev1">&gt; In some situations, unusual events may occur. Since these events are not
</span><br>
<span class="quotelev1">&gt; considered to be fatal enough, the library arbitrarily chooses to bypass
</span><br>
<span class="quotelev1">&gt; them using a software mechanism, instead of actually stopping the
</span><br>
<span class="quotelev1">&gt; application. But even though this choice helps in completing the
</span><br>
<span class="quotelev1">&gt; application, it may frequently result in significant performance
</span><br>
<span class="quotelev1">&gt; degradation. This is not an issue if such &#147;unusual events&#148; don't occur
</span><br>
<span class="quotelev1">&gt; too frequently. But if they actually do, that might be representative of
</span><br>
<span class="quotelev1">&gt; a real problem that could sometimes be easily avoided.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, when mca_pml_ob1_send_request_start() starts a send request
</span><br>
<span class="quotelev1">&gt; and faces a resource shortage, it silently calls
</span><br>
<span class="quotelev1">&gt; add_request_to_send_pending() to queue that send request into the list
</span><br>
<span class="quotelev1">&gt; of pending send requests in order to process it later on. If an adapting
</span><br>
<span class="quotelev1">&gt; mechanism is not provided at runtime to increase the receive queue
</span><br>
<span class="quotelev1">&gt; length, at least a message can be sent to the administrator to let him
</span><br>
<span class="quotelev1">&gt; do the tuning by hand before the next run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We had a look at other tracing utilities (like PMPI, PERUSE, VT), but
</span><br>
<span class="quotelev1">&gt; found them either too high level or too intrusive at the application
</span><br>
<span class="quotelev1">&gt; level.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &#147;diagnostic framework&#148; we'd like to propose would help capturing
</span><br>
<span class="quotelev1">&gt; such &#147;unusual events&#148; and tracing them, while having a very low impact
</span><br>
<span class="quotelev1">&gt; on the performances. This is obtained by defining tracing routines that
</span><br>
<span class="quotelev1">&gt; can be called from the ompi code. The collected events are aggregated
</span><br>
<span class="quotelev1">&gt; per MPI process and only traced if a threshold has been reached. Another
</span><br>
<span class="quotelev1">&gt; threshold (time threshold) can be used to condition subsequent traces
</span><br>
<span class="quotelev1">&gt; generation for an already traced event.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is obtained by defining 2 mca parameters and a rule:
</span><br>
<span class="quotelev1">&gt; . the count threshold C
</span><br>
<span class="quotelev1">&gt; . the time delay T
</span><br>
<span class="quotelev1">&gt; The rule is: an event will only be traced if it happened N times, and it
</span><br>
<span class="quotelev1">&gt; won't be traced more than once every T seconds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thus, events happening at a very low rate will never generate a trace
</span><br>
<span class="quotelev1">&gt; except one at MPI_Finalize summarizing:
</span><br>
<span class="quotelev1">&gt; [time] At finalize : 23 times : pre-allocated buffers all full, calling
</span><br>
<span class="quotelev1">&gt; malloc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Those happening &quot;a little too much&quot; will sometimes generate a trace
</span><br>
<span class="quotelev1">&gt; saying something like:
</span><br>
<span class="quotelev1">&gt; [time] 1000 warnings : could not send in openib now, delaying
</span><br>
<span class="quotelev1">&gt; [time+12345 sec] 1000 warnings : could not send in openib now, delaying
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And events occurring at a high frequency will only generate a message
</span><br>
<span class="quotelev1">&gt; every T seconds saying:
</span><br>
<span class="quotelev1">&gt; [time]     1000 warnings : adding buffers in the SRQ
</span><br>
<span class="quotelev1">&gt; [time+T]   1,234,567 warnings (in T seconds) : adding buffers in the SRQ
</span><br>
<span class="quotelev1">&gt; [time+2*T] 2,345,678 warnings (in T seconds) : adding buffers in the SRQ
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The count threshold and time delay are defined per event.
</span><br>
<span class="quotelev1">&gt; They can also be defined as MCA parameters. In that case, the mca
</span><br>
<span class="quotelev1">&gt; parameter value overrides the per event values.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following information are traced too:
</span><br>
<span class="quotelev1">&gt;  . job family
</span><br>
<span class="quotelev1">&gt;  . the local job id
</span><br>
<span class="quotelev1">&gt;  . the job vpid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another aspect of performance savings is that a mechanism ala
</span><br>
<span class="quotelev1">&gt; show_help() can be used in order to let the HNP actually do the job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We started the implementation of this feature, so patches are available if
</span><br>
<span class="quotelev1">&gt; needed. We are currently trying to setup hgweb on an external server.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since I'm an Open MPI newbie, I'm submitting this RFC to have your
</span><br>
<span class="quotelev1">&gt; opinion about its usefulness, or even to know if there's an already
</span><br>
<span class="quotelev1">&gt; existing mechanism to do this job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6084/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6085.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Previous message:</strong> <a href="6083.php">Nadia Derbey: "[OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>In reply to:</strong> <a href="6083.php">Nadia Derbey: "[OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6086.php">Nadia Derbey: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>Reply:</strong> <a href="6086.php">Nadia Derbey: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
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
