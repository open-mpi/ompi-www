<?
$subject_val = "[OMPI devel] RFC: Diagnostoc framework for MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 01:37:35 2009" -->
<!-- isoreceived="20090526053735" -->
<!-- sent="Tue, 26 May 2009 07:33:49 +0200" -->
<!-- isosent="20090526053349" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Diagnostoc framework for MPI" -->
<!-- id="1243316029.2634.7.camel_at_frecb000730.frec.bull.fr" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Diagnostoc framework for MPI<br>
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-26 01:33:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6084.php">Ralph Castain: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>Previous message:</strong> <a href="6082.php">Greg Watson: "[OMPI devel] XML stdout/stderr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6084.php">Ralph Castain: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>Reply:</strong> <a href="6084.php">Ralph Castain: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>Reply:</strong> <a href="6096.php">Eugene Loh: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Warn the administrator when unusual events are occurring too
<br>
frequently.
<br>
<p>Why: Such unusual events might be the symptom of some problem that can
<br>
easily be fixed (by a better tuning, for example)
<br>
<p>Where: Adds a new ompi framework
<br>
<p>-------------------------------------------------------------------
<br>
<p>Description:
<br>
<p>The objective of the Open MPI library is to make applications run to
<br>
completion, given that no fatal error is encountered.
<br>
In some situations, unusual events may occur. Since these events are not
<br>
considered to be fatal enough, the library arbitrarily chooses to bypass
<br>
them using a software mechanism, instead of actually stopping the
<br>
application. But even though this choice helps in completing the
<br>
application, it may frequently result in significant performance
<br>
degradation. This is not an issue if such &#226;&#128;&#156;unusual events&#226;&#128;&#157; don't occur
<br>
too frequently. But if they actually do, that might be representative of
<br>
a real problem that could sometimes be easily avoided.
<br>
<p>For example, when mca_pml_ob1_send_request_start() starts a send request
<br>
and faces a resource shortage, it silently calls
<br>
add_request_to_send_pending() to queue that send request into the list
<br>
of pending send requests in order to process it later on. If an adapting
<br>
mechanism is not provided at runtime to increase the receive queue
<br>
length, at least a message can be sent to the administrator to let him
<br>
do the tuning by hand before the next run.
<br>
<p>We had a look at other tracing utilities (like PMPI, PERUSE, VT), but
<br>
found them either too high level or too intrusive at the application
<br>
level.
<br>
<p>The &#226;&#128;&#156;diagnostic framework&#226;&#128;&#157; we'd like to propose would help capturing
<br>
such &#226;&#128;&#156;unusual events&#226;&#128;&#157; and tracing them, while having a very low impact
<br>
on the performances. This is obtained by defining tracing routines that
<br>
can be called from the ompi code. The collected events are aggregated
<br>
per MPI process and only traced if a threshold has been reached. Another
<br>
threshold (time threshold) can be used to condition subsequent traces
<br>
generation for an already traced event.
<br>
<p>This is obtained by defining 2 mca parameters and a rule:
<br>
. the count threshold C
<br>
. the time delay T
<br>
The rule is: an event will only be traced if it happened N times, and it
<br>
won't be traced more than once every T seconds.
<br>
<p>Thus, events happening at a very low rate will never generate a trace
<br>
except one at MPI_Finalize summarizing:
<br>
[time] At finalize : 23 times : pre-allocated buffers all full, calling
<br>
malloc
<br>
<p>Those happening &quot;a little too much&quot; will sometimes generate a trace
<br>
saying something like:
<br>
[time] 1000 warnings : could not send in openib now, delaying
<br>
[time+12345 sec] 1000 warnings : could not send in openib now, delaying
<br>
<p>And events occurring at a high frequency will only generate a message
<br>
every T seconds saying:
<br>
[time]     1000 warnings : adding buffers in the SRQ
<br>
[time+T]   1,234,567 warnings (in T seconds) : adding buffers in the SRQ
<br>
[time+2*T] 2,345,678 warnings (in T seconds) : adding buffers in the SRQ
<br>
<p>The count threshold and time delay are defined per event.
<br>
They can also be defined as MCA parameters. In that case, the mca
<br>
parameter value overrides the per event values.
<br>
<p>The following information are traced too:
<br>
&nbsp;&nbsp;. job family
<br>
&nbsp;&nbsp;. the local job id
<br>
&nbsp;&nbsp;. the job vpid
<br>
<p>Another aspect of performance savings is that a mechanism ala
<br>
show_help() can be used in order to let the HNP actually do the job.
<br>
<p>We started the implementation of this feature, so patches are available if 
<br>
needed. We are currently trying to setup hgweb on an external server.
<br>
<p>Since I'm an Open MPI newbie, I'm submitting this RFC to have your
<br>
opinion about its usefulness, or even to know if there's an already
<br>
existing mechanism to do this job.
<br>
<p>Regards,
<br>
Nadia
<br>
<p><pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6084.php">Ralph Castain: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>Previous message:</strong> <a href="6082.php">Greg Watson: "[OMPI devel] XML stdout/stderr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6084.php">Ralph Castain: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>Reply:</strong> <a href="6084.php">Ralph Castain: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>Reply:</strong> <a href="6096.php">Eugene Loh: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
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
