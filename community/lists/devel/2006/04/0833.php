<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 20 13:06:42 2006" -->
<!-- isoreceived="20060420170642" -->
<!-- sent="Thu, 20 Apr 2006 10:17:33 -0600" -->
<!-- isosent="20060420161733" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_event_loop exiting" -->
<!-- id="E585E710-B3BE-491D-8F7E-A1024FBDFA15_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4447AB6B.1030705_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-04-20 12:17:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0834.php">Greg Watson: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Previous message:</strong> <a href="0832.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>In reply to:</strong> <a href="0831.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0832.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Reply:</strong> <a href="0832.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The simplest thing for us would be for opal_event_loop() to return an  
<br>
error value. That way we can detect the situation and clean up our  
<br>
system. At the moment we're not trying to restart orted, so clean  
<br>
recovery of orte is not that important, though ultimately I would  
<br>
think it is desirable. Other alternatives are to pass you an error  
<br>
handler that you call, or you could send a signal that we can trap.
<br>
<p>&nbsp;From our perspective, we're simply calling a library that does  
<br>
stuff. Having the library call exit() at any point is a major problem  
<br>
for applications trying to do more than run a single job.
<br>
<p>Greg
<br>
<p>On Apr 20, 2006, at 9:40 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Well, I actually don't know much about opal_event_loop and/or how  
</span><br>
<span class="quotelev1">&gt; it is intended to work. My guess is that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (a) your remote orted is acting as the seed and your local process  
</span><br>
<span class="quotelev1">&gt; (the one in Eclipse) is running as a client to that seed - at  
</span><br>
<span class="quotelev1">&gt; least, that was the case last I talked to Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (b) when the seed orted dies, it is the oob in your local client  
</span><br>
<span class="quotelev1">&gt; that actually detects socket closure and decides that - since it is  
</span><br>
<span class="quotelev1">&gt; the seed that has lost contact - the local application must abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (c) the errmgr.abort function does exactly what it was supposed to  
</span><br>
<span class="quotelev1">&gt; do - it provides an immediate way of killing the local process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd be a little hesitant to recommend overloading the errmgr.abort  
</span><br>
<span class="quotelev1">&gt; function as you really do want the local processes to die when  
</span><br>
<span class="quotelev1">&gt; losing connection to the seed (at least, until we develop a  
</span><br>
<span class="quotelev1">&gt; recovery capability for the seed orted - which is some ways off),  
</span><br>
<span class="quotelev1">&gt; and (given the way you are running) I'm not sure you can have a  
</span><br>
<span class="quotelev1">&gt; different errmgr for your process while leaving the other one for  
</span><br>
<span class="quotelev1">&gt; everyone else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Probably the best solution for now would be for us to insert a (yet  
</span><br>
<span class="quotelev1">&gt; another) MCA parameter into the errmgr that would (if set) have  
</span><br>
<span class="quotelev1">&gt; errmgr.abort do something other than exit. The question then is:  
</span><br>
<span class="quotelev1">&gt; what would you want it to do?? We need to have it tell the rest of  
</span><br>
<span class="quotelev1">&gt; the system to stop trying to send messages etc - right now, I don't  
</span><br>
<span class="quotelev1">&gt; think the infrastructure exists to do that short of killing orte.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We could try to have errmgr.abort do an orte_finalize - that would  
</span><br>
<span class="quotelev1">&gt; kill the orte system without impacting your host program, I  
</span><br>
<span class="quotelev1">&gt; suspect. You would then have to re-initialize, so we'd have to find  
</span><br>
<span class="quotelev1">&gt; some way to let you know that we had finalized. I can't swear this  
</span><br>
<span class="quotelev1">&gt; will work, though - we might well generate a segfault since this is  
</span><br>
<span class="quotelev1">&gt; happening deep down inside the system. We could try it, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would any of that be of help? Do you have any suggestions on how we  
</span><br>
<span class="quotelev1">&gt; might let you know that we had finalized?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 19, 2006, at 4:15 PM, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We've just run across a rather tricky issue. We're calling  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_event_loop() to dispatch orte events to an orted that has  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; been launched separately. However if the orted dies for some  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reason (gets a signal or whatever) then opal_event_loop() is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; calling exit(). Needless to say, this is not good behavior us.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any suggestions on how to get around this problem?
</span><br>
<span class="quotelev2">&gt;&gt; Is the orted you are connecting to the &quot;seed&quot; daemon? I think the  
</span><br>
<span class="quotelev2">&gt;&gt; only time we should be exiting like that is if the orted was the  
</span><br>
<span class="quotelev2">&gt;&gt; seed daemon. I'm not sure what we want to do if that's the case --  
</span><br>
<span class="quotelev2">&gt;&gt; it looks like we're calling errmgr.abort() when badness happens. I  
</span><br>
<span class="quotelev2">&gt;&gt; wonder if your application can provide its own errmgr component  
</span><br>
<span class="quotelev2">&gt;&gt; that provides an abort that doesn't actually abort? Just some off  
</span><br>
<span class="quotelev2">&gt;&gt; the cuff ideas -- Ralph could probably give a better idea of  
</span><br>
<span class="quotelev2">&gt;&gt; exactly what is happening... Brian
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
<li><strong>Next message:</strong> <a href="0834.php">Greg Watson: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Previous message:</strong> <a href="0832.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>In reply to:</strong> <a href="0831.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0832.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Reply:</strong> <a href="0832.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
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
