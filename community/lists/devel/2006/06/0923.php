<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jun  4 15:05:38 2006" -->
<!-- isoreceived="20060604190538" -->
<!-- sent="Sun, 4 Jun 2006 11:28:39 -0600" -->
<!-- isosent="20060604172839" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SIGSTOP and SIGCONT on orted" -->
<!-- id="1A4E225E-2636-4AE9-A9A6-9A6BA88CE60E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44806D93.70606_at_lanl.gov" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-04 13:28:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0924.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Previous message:</strong> <a href="0922.php">Jonathan Day: "[OMPI devel] Query on zero-copy sends"</a>
<li><strong>In reply to:</strong> <a href="0921.php">Ralph Castain: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0920.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for coming late to the conversation. Let me throw in my two cents.
<br>
<p>Ask Jeff mentioned, I'm working on the checkpoint/restart (C/R)  
<br>
infrastructure in Open MPI at the moment. I'm currently working  
<br>
inside the Open Run Time Environment (ORTE) layer highlighting and  
<br>
attempting to handle issues surrounding C/R.
<br>
<p>Jeff is correct in saying that suspend/resume (via SIGSTOP SIGCONT)  
<br>
can be viewed as a (maybe special) case of C/R. One caveat is that we  
<br>
will want to support suspend/resume and a low level checkpointer at  
<br>
the same time, so this will be an interesting design point when we  
<br>
get to it. In the back of my mind I have been considering this  
<br>
situation as I design the frameworks, as so far we are not doing  
<br>
anything to limit the ability to integrate this.
<br>
<p>Ralph has highlighted some key issues that need to be solved in order  
<br>
to properly suspend/resume an application process. Most of which  
<br>
should be handled as part of the C/R infrastructure. There are some  
<br>
other difficult items that are special for suspend/resume that don't  
<br>
crop up with traditional C/R such as an active runtime environment  
<br>
while the application is suspended.
<br>
<p>The suspend/resume scenario that I believe you are wanting (correct  
<br>
me if I am wrong) is that all of the application processes suspend/ 
<br>
resume operation at the same time. This is, in some ways, the easier  
<br>
case of suspend/resume. Versus the case where only a select subset of  
<br>
application processes are suspended/resumed while the others continue  
<br>
execution.
<br>
<p>So in this scenario (where everyone is going through suspend/resume  
<br>
at roughly the same time) we can adjust the runtime system to  
<br>
accommodate this situation, say by queueing up subscription  
<br>
notifications and messages on the wire to the applications upon  
<br>
suspend then running the queues upon resume.
<br>
<p>So this takes into account just the runtime system, the MPI layer has  
<br>
some additional complexities [e.g, what if we are in the middle of a  
<br>
collective operation]. The C/R infrastructure will account for  
<br>
coordinating these complexities. So I believe that SIGSTOP/SIGCONT to  
<br>
support a suspend/resume type operation will be possible once the C/R  
<br>
infrastructure is in place. It should be noted that the suspend/ 
<br>
resume actions won't be 'quick' as there will be considerable  
<br>
overhead in quieting things before we can suspend, and, conversely,  
<br>
waking things up upon resume.
<br>
<p>Moral of the story is yea we should be able to support suspend/resume  
<br>
(via SIGSTOP/SIGCONT) of an application (not the runtime) once the C/ 
<br>
R infrastructure is in place. However, it may not be supported in the  
<br>
very first release of the infrastructure due to time constraints.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Jun 2, 2006, at 10:55 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I guess I had in my head that Josh already working on most of  
</span><br>
<span class="quotelev2">&gt;&gt; these issues anyway for the checkpoint / restart work (i.e., all  
</span><br>
<span class="quotelev2">&gt;&gt; the quiescing stuff).  Indeed, if you think about it -- pause/ 
</span><br>
<span class="quotelev2">&gt;&gt; resume is one form of a checkpoint/restart.  Hence, if the  
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint/restart frameworks are laid out right -- and I think  
</span><br>
<span class="quotelev2">&gt;&gt; they are -- pause/resume may just be a component in the checkpoint/ 
</span><br>
<span class="quotelev2">&gt;&gt; restart frameworks (there's a little hand-waving going on here, of  
</span><br>
<span class="quotelev2">&gt;&gt; course :-), but I'm trusting that Josh will jump in if I have any  
</span><br>
<span class="quotelev2">&gt;&gt; heinously incorrect assumptions).
</span><br>
<span class="quotelev1">&gt; Good point - but Josh is only beginning to scratch the surface on  
</span><br>
<span class="quotelev1">&gt; the issues I mentioned. Quite a ways from having something for  
</span><br>
<span class="quotelev1">&gt; general use.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This also brings up another [minor] point -- we don't currently  
</span><br>
<span class="quotelev2">&gt;&gt; propagate signals out from mpirun to remote processes (e.g.,  
</span><br>
<span class="quotelev2">&gt;&gt; SIGUSR1).  There hasn't really been a need for this yet, so it's  
</span><br>
<span class="quotelev2">&gt;&gt; been a pretty low priority.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for all the confusion, though -- I keyed off the phrase  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;there were some implementation issues that might prevent this  
</span><br>
<span class="quotelev2">&gt;&gt; from working&quot; in your original e-mail, which I interpreted as &quot;our  
</span><br>
<span class="quotelev2">&gt;&gt; implementation prohibits this.&quot;  :-)
</span><br>
<span class="quotelev1">&gt; My fault - should have been clearer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_open- 
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, June 02, 2006 9:12 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] SIGSTOP and SIGCONT on orted
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just curious -- what's difficult about this?  SIGTSTP and SIGCONT  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can be caught; is there something preventing us from sending  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;stop&quot; and &quot;continue&quot; messages (just like we send &quot;die&quot; messages)?
</span><br>
<span class="quotelev2">&gt;&gt; Nothing preventing it at all. The problem lies in what you do when  
</span><br>
<span class="quotelev2">&gt;&gt; you receive it. Take the example of a launch that used orted  
</span><br>
<span class="quotelev2">&gt;&gt; daemons. We could pass the &quot;stop&quot; or &quot;continue&quot; message to the  
</span><br>
<span class="quotelev2">&gt;&gt; orted, which could signal its child processes (i.e., the  
</span><br>
<span class="quotelev2">&gt;&gt; application processes on that node) with the appropriate signal.  
</span><br>
<span class="quotelev2">&gt;&gt; That would stop/continue the child process just fine - but what  
</span><br>
<span class="quotelev2">&gt;&gt; about communications that are still in-progress?? Bad news.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So instead you could pass the application process a &quot;stop&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; message. The process could then &quot;quiet&quot; the MPI-based messaging  
</span><br>
<span class="quotelev2">&gt;&gt; system, reply back to the orted that all is now quiet, and then  
</span><br>
<span class="quotelev2">&gt;&gt; the orted could send the appropriate OS-level signal so the  
</span><br>
<span class="quotelev2">&gt;&gt; process would truly &quot;stop&quot;. &quot;Continue&quot; is much easier, of course -  
</span><br>
<span class="quotelev2">&gt;&gt; there is no &quot;quieting&quot; to be done, so the orted could just issue a  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;continue&quot; signal to its children.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Great - except we still haven't &quot;stopped&quot; the run-time! What  
</span><br>
<span class="quotelev2">&gt;&gt; happens if the registry is in the middle of a notification process  
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., we hit a stage gate and all the notification messages are  
</span><br>
<span class="quotelev2">&gt;&gt; being sent, or someone is in the middle of a put that causes a set  
</span><br>
<span class="quotelev2">&gt;&gt; of subscriptions to fire and send out messages - that may in turn  
</span><br>
<span class="quotelev2">&gt;&gt; cause additional action on the remote host)? What about messages  
</span><br>
<span class="quotelev2">&gt;&gt; being routed through the orteds (once we get the routing system in- 
</span><br>
<span class="quotelev2">&gt;&gt; place)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, we now could go through a similar process to first &quot;quiet&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; the run-time itself. We would have to ensure that every subsystem  
</span><br>
<span class="quotelev2">&gt;&gt; completed its on-going operation and then &quot;stopped&quot;. We would of  
</span><br>
<span class="quotelev2">&gt;&gt; course have to tell all the remote processes to &quot;stop&quot; first so  
</span><br>
<span class="quotelev2">&gt;&gt; that new requests would quit coming in, or else this process would  
</span><br>
<span class="quotelev2">&gt;&gt; never complete. Note that this means the remote processes would  
</span><br>
<span class="quotelev2">&gt;&gt; have to receive and &quot;log&quot; any notifications that come in from the  
</span><br>
<span class="quotelev2">&gt;&gt; registry after we tell the process to &quot;stop&quot;, but could not take  
</span><br>
<span class="quotelev2">&gt;&gt; action on those notices until we &quot;continue&quot; the process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So now we have the MPI and run-time layers &quot;quiet&quot;. We send a  
</span><br>
<span class="quotelev2">&gt;&gt; message to the remote orteds indicating they should go ahead and  
</span><br>
<span class="quotelev2">&gt;&gt; send their local application processes an OS-level signal to  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;stop&quot; so that the OS knows not to spend cycles on them.  
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, we cannot do the same for the orteds themselves, so  
</span><br>
<span class="quotelev2">&gt;&gt; that means that the orteds remain &quot;awake&quot; and operating, but they  
</span><br>
<span class="quotelev2">&gt;&gt; can just &quot;spin&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All sounds fine. Now all we have to deal with are: all the race  
</span><br>
<span class="quotelev2">&gt;&gt; conditions inherent in what I just described; how to deal with  
</span><br>
<span class="quotelev2">&gt;&gt; receipt of asynchronous notifications when we've already been told  
</span><br>
<span class="quotelev2">&gt;&gt; to stop; the scenarios where we don't have orted daemons on every  
</span><br>
<span class="quotelev2">&gt;&gt; node; how to stop/restart major MPI collectives in mid operation;  
</span><br>
<span class="quotelev2">&gt;&gt; etc. etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not saying it cannot be done - just indicating that there were  
</span><br>
<span class="quotelev2">&gt;&gt; reasons why it wasn't initially done other than &quot;we just didn't  
</span><br>
<span class="quotelev2">&gt;&gt; get around to it&quot;. :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (If I had to guess, I think the user is asking because some other  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI implementations implement this kind of behavior)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_open- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi.org] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Thursday, June 01, 2006 10:50 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] SIGSTOP and SIGCONT on orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Actually, there were some implementation issues that might  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prevent this from working and were the reason we didn't implement  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it right away. We don't actually transmit the SIGTERM - we  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; capture it in mpirun and then propagate our own &quot;die&quot; command to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the remote processes and daemons. Fortunately, &quot;die&quot; is very easy  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to implement.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, &quot;stop&quot; and &quot;continue&quot; are much harder to implement  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from inside of a process. We'll have to look at it, but this may  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not really be feasible.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The main reason that it doesn't work is because we didn't do any  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thing to make it work. :-) Specifically, mpirun is not  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; intercepting SIGSTOP and passing it on to the remote nodes.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is nothing in the design or architecture that would  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; prevent this, but we just don't do it [yet].
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----Original Message----- From: devel-bounces_at_[hidden]  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Pak Lui Sent:  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thursday, June 01, 2006 5:02 PM To: devel_at_[hidden] Subject:  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [OMPI devel] SIGSTOP and SIGCONT on orted Hi, I have a question  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on signals. Normally when I do a SIGTERM (control-C) on mpirun,  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the signal seems to get handled in a way that it broadcasts to  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the orted and processes on the execution hosts. However, when I  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; send a SIGSTOP to mpirun, mpirun seems to have stopped, but the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes of the user executable continue to run. I guess I  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; could hook up the debugger to mpirun and orted to see why they  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are handled differently, but I guess I anxious to hear about it  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; here. I am trying to see the behavior of SIGSTOP and SIGCONT  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for the suspension/resumption feature in N1GE. It'll try to use  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; these signals to stop and continue both mpirun and orted (and  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; its processes), but the signals (SIGSTOP and SIGCONT) don't  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; seem to get propagated to the remote orted.  I can see there  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are some issues for implementing this feature on N1GE because  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the 'qrsh' interface does not send the signal to orted on the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; remote node, but only to 'mpirun'. I am trying to see how to  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; work around this. -- Thanks, - Pak Lui pak.lui_at_[hidden]  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________ devel mailing  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; list devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/">http://www.open-mpi.org/mailman/</a> 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; listinfo.cgi/devel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________ devel mailing  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; list devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/">http://www.open-mpi.org/mailman/</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; listinfo.cgi/devel
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________ devel mailing list  
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0924.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Previous message:</strong> <a href="0922.php">Jonathan Day: "[OMPI devel] Query on zero-copy sends"</a>
<li><strong>In reply to:</strong> <a href="0921.php">Ralph Castain: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0920.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
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
