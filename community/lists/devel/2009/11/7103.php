<?
$subject_val = "[OMPI devel] Mpi_wait()";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  7 21:47:42 2009" -->
<!-- isoreceived="20091108024742" -->
<!-- sent="Sat, 07 Nov 2009 21:47:33 -0500" -->
<!-- isosent="20091108024733" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="[OMPI devel] Mpi_wait()" -->
<!-- id="C71B9B75.5504%rlgraham_at_ornl.gov" -->
<!-- charset="Windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] Mpi_wait()<br>
<strong>From:</strong> Graham, Richard L. (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-07 21:47:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7104.php">Jeff Squyres: "Re: [OMPI devel] RFC: Revamped topo framework"</a>
<li><strong>Previous message:</strong> <a href="7102.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running into a situation that I don&#146;t understand, so thought I would toss it out and see if someone can give me a hint how to deal with what I am seeing.  I am making a call to MPI_Wait(), which ends up with the following call sequence:
<br>
&nbsp;&nbsp;- ompi_request_default_wait()
<br>
&nbsp;&nbsp;- ompi_request_wait_completion()  which goes to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while(false == req-&gt;req_complete) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;The value of ompi_request_cond-&gt;c_signaled is 0, so when opal_condition_wait() is called the code goes to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (c-&gt;c_signaled == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_progress();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_CR_TEST_CHECKPOINT_READY_STALL();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
Which spins for ever, since c-&gt;c_signaled  remains 0 (even though the condition for which wait is testing has long since been satisfied).
<br>
<p>It looks like opal_condition_signal(), opal_condition_broadcast(), opal_condition_timedwait(), or later on in opal_condition_wait() the value of c_signaled  is changed, but not in the loop the code is stuck in.
<br>
<p>Does anyone on the list know how this code is supposed to work, and if so, are there any hints ?
<br>
<p>Looking a bit more it seems like ompi_request_complete() needs to be called.  Can someone explain the assumptions this routine uses ?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if( NULL != request-&gt;req_complete_cb ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;request-&gt;req_complete_cb( request );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;ompi_request_completed++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;request-&gt;req_complete = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(with_signal &amp;&amp; ompi_request_waiting) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Broadcast the condition, otherwise if there is already a thread
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* waiting on another request it can use all signals.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_condition_broadcast(&amp; ompi_request_cond);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
<p>What is the significance of  ompi_request_completed &#150; is this counter used to manage something ?
<br>
What is ompi_request_cond used for ?
<br>
What is ompi_request_waiting used for ?
<br>
<p>Thanks,
<br>
Rich
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7104.php">Jeff Squyres: "Re: [OMPI devel] RFC: Revamped topo framework"</a>
<li><strong>Previous message:</strong> <a href="7102.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<!-- nextthread="start" -->
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
