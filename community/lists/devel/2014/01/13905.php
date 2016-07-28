<?
$subject_val = "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 12:35:54 2014" -->
<!-- isoreceived="20140124173554" -->
<!-- sent="Fri, 24 Jan 2014 18:35:53 +0100" -->
<!-- isosent="20140124173553" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again" -->
<!-- id="20140124173553.GP30959_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAANzjEkfBMZesJ-CN3kQxfJc0wrokE=WpkZv6EX957EAsdZ6Cg_at_mail.gmail.com" -->
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
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 12:35:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13906.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<li><strong>Previous message:</strong> <a href="13904.php">Ralph Castain: "Re: [OMPI devel] out-of-date or missing manpages"</a>
<li><strong>In reply to:</strong> <a href="13883.php">Josh Hursey: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13906.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<li><strong>Reply:</strong> <a href="13906.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Status update of C/R with Open MPI:
<br>
<p>With the last two patches applied I am now seeing communication
<br>
between orte-checkpoint and orterun:
<br>
<p>orte-checkpoint 23975:
<br>
<p>[dcbz:23986] orte_checkpoint: Checkpointing...
<br>
[dcbz:23986] 	 PID 23975
<br>
[dcbz:23986] 	 Connected to Mpirun [[45520,0],0]
<br>
[dcbz:23986] orte_checkpoint: notify_hnp: Contact Head Node Process PID 23975
<br>
[dcbz:23986] [[45509,0],0] rml_send_buffer to peer [[45520,0],0] at tag 13
<br>
[dcbz:23986] orte_checkpoint: notify_hnp: Requested a checkpoint of jobid [INVALID]
<br>
[dcbz:23986] [[45509,0],0] posting recv
<br>
[dcbz:23986] [[45509,0],0] posting persistent recv on tag 9 for peer [[WILDCARD],WILDCARD]
<br>
[dcbz:23986] [[45509,0],0] posting recv
<br>
[dcbz:23986] [[45509,0],0] posting persistent recv on tag 13 for peer [[WILDCARD],WILDCARD]
<br>
[dcbz:23986] [[45509,0],0] rml_send_msg to peer [[45520,0],0] at tag 13
<br>
[dcbz:23986] [[45509,0],0]-[[45520,0],0] Send message complete at ../../../../../orte/mca/oob/tcp/oob_tcp_sendrecv.c:220
<br>
[dcbz:23986] [[45509,0],0] Message posted at ../../../../../orte/mca/oob/tcp/oob_tcp_sendrecv.c:519
<br>
[dcbz:23986] [[45509,0],0] message received 39 bytes from [[45520,0],0] for tag 13
<br>
[dcbz:23986] orte_checkpoint: hnp_receiver: Receive a command message.
<br>
[dcbz:23986] orte_checkpoint: hnp_receiver: Status Update.
<br>
--------------------------------------------------------------------------
<br>
Error: The application (PID = 23975) failed to checkpoint properly.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Returned -1.
<br>
--------------------------------------------------------------------------
<br>
<p>orterun:
<br>
<p>[dcbz:23975] [[45520,0],0] Message posted at ../../../../../orte/mca/oob/tcp/oob_tcp_sendrecv.c:519
<br>
[dcbz:23975] [[45520,0],0] message received 50 bytes from [[45509,0],0] for tag 13
<br>
[dcbz:23975] Global) Command Line: Start a checkpoint operation [Sender = [[45509,0],0]]
<br>
[dcbz:23975] Global) Command line requested a checkpoint [command 1]
<br>
[dcbz:23975] Global-Local) base:ckpt_init_cmd: Receiving commands
<br>
[dcbz:23975] Global-Local) base:ckpt_init_cmd: Received [0, 0, [INVALID]]
<br>
[dcbz:23975] Global) request_cmd(): Checkpointing currently disabled, rejecting request
<br>
[dcbz:23975] 23975: Failed to checkpoint process [45520,0].
<br>
[dcbz:23975] Global-Local) base:ckpt_update_cmd: Sending update command &lt;status 0&gt;
<br>
[dcbz:23975] Global-Local) base:ckpt_update_cmd: Sending update command &lt;status 0&gt; + &lt;ref (null)&gt; &lt;seq -1&gt;
<br>
[dcbz:23975] [[45520,0],0] rml_send_buffer to peer [[45509,0],0] at tag 13
<br>
[dcbz:23975] Global) Startup Command Line Channel
<br>
[dcbz:23975] [[45520,0],0] rml_recv_buffer_nb for peer [[WILDCARD],WILDCARD] tag 13
<br>
[dcbz:23975] [[45520,0],0] rml_send_msg to peer [[45509,0],0] at tag 13
<br>
[dcbz:23975] [[45520,0],0] posting recv
<br>
[dcbz:23975] [[45520,0],0] posting non-persistent recv on tag 13 for peer [[WILDCARD],WILDCARD]
<br>
[dcbz:23975] [[45520,0],0]-[[45509,0],0] Send message complete at ../../../../../orte/mca/oob/tcp/oob_tcp_sendrecv.c:220
<br>
<p>It's still not working but at least both processes are
<br>
talking to each other which is good.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p><p>On Thu, Jan 23, 2014 at 11:27:42AM -0600, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 23, 2014 at 10:16 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Looks correct to me - you are right in that you cannot release the buffer
</span><br>
<span class="quotelev2">&gt; &gt; until after the send completes. We don't copy the data underneath to save
</span><br>
<span class="quotelev2">&gt; &gt; memory and time.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 23, 2014, at 6:51 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Following patch makes orte-checkpoint communicate with orterun again:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; diff --git a/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev2">&gt; &gt; b/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; index 7106342..8539f34 100644
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --- a/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +++ b/orte/tools/orte-checkpoint/orte-checkpoint.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @@ -834,7 +834,7 @@ static int
</span><br>
<span class="quotelev2">&gt; &gt; notify_process_for_checkpoint(opal_crs_base_ckpt_options_t *options)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev2">&gt; &gt; orte_rml.send_buffer_nb(&amp;(orterun_hnp-&gt;name), buffer,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_RML_TAG_CKPT, hnp_receiver,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_RML_TAG_CKPT, orte_rml_send_callback,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                                                        NULL))) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         exit_status = ret;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         goto cleanup;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @@ -845,11 +845,6 @@ static int
</span><br>
<span class="quotelev2">&gt; &gt; notify_process_for_checkpoint(opal_crs_base_ckpt_options_t *options)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                         ORTE_JOBID_PRINT(jobid));
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  cleanup:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -    if( NULL != buffer) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -        OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -        buffer = NULL;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -    }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     if( ORTE_SUCCESS != exit_status ) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         opal_show_help(&quot;help-orte-checkpoint.txt&quot;, &quot;unable_to_connect&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; true,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        orte_checkpoint_globals.pid);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Before committing the code into the repository I wanted to make
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sure it is the correct way to fix it.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The first change changes the callback to orte_rml_send_callback().
</span><br>
<span class="quotelev3">&gt; &gt; &gt; When I initially made the code compile again I used hnp_receiver()
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to change the code from blocking to non-blocking and that was
</span><br>
<span class="quotelev3">&gt; &gt; &gt; wrong.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The second change (removal of OBJ_RELEASE(buffer)) is necessary
</span><br>
<span class="quotelev3">&gt; &gt; &gt; because this seems to delete buffer during communication and then
</span><br>
<span class="quotelev3">&gt; &gt; &gt; everything breaks badly.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;               Adrian
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Assistant Professor of Computer Science
</span><br>
<span class="quotelev1">&gt; University of Wisconsin-La Crosse
</span><br>
<span class="quotelev1">&gt; <a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p><pre>
-- 
Adrian Reber &lt;adrian_at_[hidden]&gt;            <a href="http://lisas.de/~adrian/">http://lisas.de/~adrian/</a>
Bing's Rule:
	Don't try to stem the tide -- move the beach.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13906.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<li><strong>Previous message:</strong> <a href="13904.php">Ralph Castain: "Re: [OMPI devel] out-of-date or missing manpages"</a>
<li><strong>In reply to:</strong> <a href="13883.php">Josh Hursey: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13906.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<li><strong>Reply:</strong> <a href="13906.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
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
