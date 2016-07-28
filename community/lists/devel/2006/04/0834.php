<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 20 13:25:21 2006" -->
<!-- isoreceived="20060420172521" -->
<!-- sent="Thu, 20 Apr 2006 11:25:19 -0600" -->
<!-- isosent="20060420172519" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_event_loop exiting" -->
<!-- id="1CBADB41-7795-4305-B097-DA9A0C80C769_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4447B525.4010309_at_lanl.gov" -->
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
<strong>From:</strong> Greg Watson (<em>gwatson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-20 13:25:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0835.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Previous message:</strong> <a href="0833.php">Greg Watson: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>In reply to:</strong> <a href="0832.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0835.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Reply:</strong> <a href="0835.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, thanks.
<br>
<p>For clarification, the model we're using at the moment looks roughly  
<br>
like this:
<br>
<p>orte_init();
<br>
<p>forever () {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (do_our_stuff() == GAME_OVER)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_event_loop(OPAL_EVLOOP_ONCE);
<br>
}
<br>
<p>orte_finalize();
<br>
<p>The simplest change for us would be something like:
<br>
<p>orte_init();
<br>
<p>forever () {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (do_our_stuff() == GAME_OVER)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (opal_event_loop(OPAL_EVLOOP_ONCE) != ORTE_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;clean_up_our_stuff();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>orte_finalize();
<br>
<p>Greg
<br>
<p><p>On Apr 20, 2006, at 10:21 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; You make a good point about the library not calling exit(). I'll  
</span><br>
<span class="quotelev1">&gt; have to recruit some help to look at the notion of opal_even_loop  
</span><br>
<span class="quotelev1">&gt; returning an error value - it isn't entirely clear who it would  
</span><br>
<span class="quotelev1">&gt; return it to in our system,. Even though I understand how someone  
</span><br>
<span class="quotelev1">&gt; in your situation would handle it, I have to ensure that it doesn't  
</span><br>
<span class="quotelev1">&gt; cause the base system problems, or force a major code revision that  
</span><br>
<span class="quotelev1">&gt; would need to be scheduled into the project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We'll have to get back to you on this - most of the folks are at a  
</span><br>
<span class="quotelev1">&gt; workshop this week, so it will probably be next week before we can  
</span><br>
<span class="quotelev1">&gt; discuss it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The simplest thing for us would be for opal_event_loop() to return  
</span><br>
<span class="quotelev2">&gt;&gt; an error value. That way we can detect the situation and clean up  
</span><br>
<span class="quotelev2">&gt;&gt; our system. At the moment we're not trying to restart orted, so  
</span><br>
<span class="quotelev2">&gt;&gt; clean recovery of orte is not that important, though ultimately I  
</span><br>
<span class="quotelev2">&gt;&gt; would think it is desirable. Other alternatives are to pass you an  
</span><br>
<span class="quotelev2">&gt;&gt; error handler that you call, or you could send a signal that we  
</span><br>
<span class="quotelev2">&gt;&gt; can trap.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;From our perspective, we're simply calling a library that does  
</span><br>
<span class="quotelev2">&gt;&gt; stuff. Having the library call exit() at any point is a major  
</span><br>
<span class="quotelev2">&gt;&gt; problem for applications trying to do more than run a single job.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 20, 2006, at 9:40 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well, I actually don't know much about opal_event_loop and/or how  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is intended to work. My guess is that:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (a) your remote orted is acting as the seed and your local  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process (the one in Eclipse) is running as a client to that seed  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - at least, that was the case last I talked to Nathan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (b) when the seed orted dies, it is the oob in your local client  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that actually detects socket closure and decides that - since it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is the seed that has lost contact - the local application must  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (c) the errmgr.abort function does exactly what it was supposed  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to do - it provides an immediate way of killing the local process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd be a little hesitant to recommend overloading the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errmgr.abort function as you really do want the local processes  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to die when losing connection to the seed (at least, until we  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; develop a recovery capability for the seed orted - which is some  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ways off), and (given the way you are running) I'm not sure you  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can have a different errmgr for your process while leaving the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other one for everyone else.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Probably the best solution for now would be for us to insert a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (yet another) MCA parameter into the errmgr that would (if set)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have errmgr.abort do something other than exit. The question then  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is: what would you want it to do?? We need to have it tell the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rest of the system to stop trying to send messages etc - right  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now, I don't think the infrastructure exists to do that short of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; killing orte.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We could try to have errmgr.abort do an orte_finalize - that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would kill the orte system without impacting your host program, I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suspect. You would then have to re-initialize, so we'd have to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; find some way to let you know that we had finalized. I can't  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; swear this will work, though - we might well generate a segfault  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; since this is happening deep down inside the system. We could try  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it, though.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would any of that be of help? Do you have any suggestions on how  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we might let you know that we had finalized?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 19, 2006, at 4:15 PM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We've just run across a rather tricky issue. We're calling  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_event_loop() to dispatch orte events to an orted that has  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; been launched separately. However if the orted dies for some  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; reason (gets a signal or whatever) then opal_event_loop() is  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; calling exit(). Needless to say, this is not good behavior us.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any suggestions on how to get around this problem?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is the orted you are connecting to the &quot;seed&quot; daemon? I think  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the only time we should be exiting like that is if the orted was  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the seed daemon. I'm not sure what we want to do if that's the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; case -- it looks like we're calling errmgr.abort() when badness  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; happens. I wonder if your application can provide its own errmgr  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component that provides an abort that doesn't actually abort?  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just some off the cuff ideas -- Ralph could probably give a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; better idea of exactly what is happening... Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="0835.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Previous message:</strong> <a href="0833.php">Greg Watson: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>In reply to:</strong> <a href="0832.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0835.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Reply:</strong> <a href="0835.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
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
