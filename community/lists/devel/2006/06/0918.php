<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 11:37:27 2006" -->
<!-- isoreceived="20060602153727" -->
<!-- sent="Fri, 02 Jun 2006 11:37:24 -0400" -->
<!-- isosent="20060602153724" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SIGSTOP and SIGCONT on orted" -->
<!-- id="44805B34.5000704_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44803920.9030002_at_lanl.gov" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-02 11:37:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0919.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Previous message:</strong> <a href="0917.php">Ralph Castain: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>In reply to:</strong> <a href="0917.php">Ralph Castain: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0919.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just curious -- what's difficult about this?  SIGTSTP and SIGCONT can 
</span><br>
<span class="quotelev2">&gt;&gt; be caught; is there something preventing us from sending &quot;stop&quot; and 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;continue&quot; messages (just like we send &quot;die&quot; messages)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nothing preventing it at all. The problem lies in what you do when you 
</span><br>
<span class="quotelev1">&gt; receive it. Take the example of a launch that used orted daemons. We 
</span><br>
<span class="quotelev1">&gt; could pass the &quot;stop&quot; or &quot;continue&quot; message to the orted, which could 
</span><br>
<span class="quotelev1">&gt; signal its child processes (i.e., the application processes on that 
</span><br>
<span class="quotelev1">&gt; node) with the appropriate signal. That would stop/continue the child 
</span><br>
<span class="quotelev1">&gt; process just fine - but what about communications that are still 
</span><br>
<span class="quotelev1">&gt; in-progress?? Bad news.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So instead you could pass the application process a &quot;stop&quot; message. The 
</span><br>
<span class="quotelev1">&gt; process could then &quot;quiet&quot; the MPI-based messaging system, reply back to 
</span><br>
<span class="quotelev1">&gt; the orted that all is now quiet, and then the orted could send the 
</span><br>
<span class="quotelev1">&gt; appropriate OS-level signal so the process would truly &quot;stop&quot;. 
</span><br>
<span class="quotelev1">&gt; &quot;Continue&quot; is much easier, of course - there is no &quot;quieting&quot; to be 
</span><br>
<span class="quotelev1">&gt; done, so the orted could just issue a &quot;continue&quot; signal to its children.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I agree that stopping orted may not be the behavior that we are looking 
<br>
for. Instead, we can send the signals to the application processes, 
<br>
since stopping them is what we are interested in.
<br>
<p>The idea is to stop the resource consumption by the user processes once 
<br>
the stop signal is sent from N1GE, since orted is being an 
<br>
administrative daemon rather than a running process that's doing work, 
<br>
it probably does not need to be accounted for the resource usage.
<br>
<p>And since 'qrsh' does not issue a 'stop' orted but only give a stop 
<br>
signal to mpirun, it's really up to mpirun to tell where to give the 
<br>
stop signal to.
<br>
<p><span class="quotelev1">&gt; Great - except we still haven't &quot;stopped&quot; the run-time! What happens if 
</span><br>
<span class="quotelev1">&gt; the registry is in the middle of a notification process (e.g., we hit a 
</span><br>
<span class="quotelev1">&gt; stage gate and all the notification messages are being sent, or someone 
</span><br>
<span class="quotelev1">&gt; is in the middle of a put that causes a set of subscriptions to fire and 
</span><br>
<span class="quotelev1">&gt; send out messages - that may in turn cause additional action on the 
</span><br>
<span class="quotelev1">&gt; remote host)? What about messages being routed through the orteds (once 
</span><br>
<span class="quotelev1">&gt; we get the routing system in-place)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, we now could go through a similar process to first &quot;quiet&quot; the 
</span><br>
<span class="quotelev1">&gt; run-time itself. We would have to ensure that every subsystem completed 
</span><br>
<span class="quotelev1">&gt; its on-going operation and then &quot;stopped&quot;. We would of course have to 
</span><br>
<span class="quotelev1">&gt; tell all the remote processes to &quot;stop&quot; first so that new requests would 
</span><br>
<span class="quotelev1">&gt; quit coming in, or else this process would never complete. Note that 
</span><br>
<span class="quotelev1">&gt; this means the remote processes would have to receive and &quot;log&quot; any 
</span><br>
<span class="quotelev1">&gt; notifications that come in from the registry after we tell the process 
</span><br>
<span class="quotelev1">&gt; to &quot;stop&quot;, but could not take action on those notices until we 
</span><br>
<span class="quotelev1">&gt; &quot;continue&quot; the process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So now we have the MPI and run-time layers &quot;quiet&quot;. We send a message to 
</span><br>
<span class="quotelev1">&gt; the remote orteds indicating they should go ahead and send their local 
</span><br>
<span class="quotelev1">&gt; application processes an OS-level signal to &quot;stop&quot; so that the OS knows 
</span><br>
<span class="quotelev1">&gt; not to spend cycles on them. Unfortunately, we cannot do the same for 
</span><br>
<span class="quotelev1">&gt; the orteds themselves, so that means that the orteds remain &quot;awake&quot; and 
</span><br>
<span class="quotelev1">&gt; operating, but they can just &quot;spin&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All sounds fine. Now all we have to deal with are: all the race 
</span><br>
<span class="quotelev1">&gt; conditions inherent in what I just described; how to deal with receipt 
</span><br>
<span class="quotelev1">&gt; of asynchronous notifications when we've already been told to stop; the 
</span><br>
<span class="quotelev1">&gt; scenarios where we don't have orted daemons on every node; how to 
</span><br>
<span class="quotelev1">&gt; stop/restart major MPI collectives in mid operation; etc. etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not saying it cannot be done - just indicating that there were reasons 
</span><br>
<span class="quotelev1">&gt; why it wasn't initially done other than &quot;we just didn't get around to 
</span><br>
<span class="quotelev1">&gt; it&quot;. :-)
</span><br>
<p>Excellent explanations. These issues seem to be non-trivial and I don't 
<br>
see that we can resolve them at this point, not even when we make sure 
<br>
the run-time communications are in the state of quiescence. It maybe 
<br>
wise to keep this feature out for now.
<br>
<p><span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; (If I had to guess, I think the user is asking because some other MPI 
</span><br>
<span class="quotelev2">&gt;&gt; implementations implement this kind of behavior)
</span><br>
<p>I am not sure if we hear high demand from users for this feature or not, 
<br>
but while reading some of the posts on sunsource.net on job suspension, 
<br>
I actually don't other MPI implementations have done this, except for 
<br>
ClusterTools, our previous MPI implementation. There are some issues 
<br>
involve communications timeouts that you already mentioned, file IO, 
<br>
plus others. So it could be messy to implement this feature for parallel 
<br>
jobs in general.
<br>
<a href="http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=1418">http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=1418</a>
<br>
<p>There are also some workaround mentioned, one is for user is to put the 
<br>
parallel job in a subordinate queue, or modify the existing queue with 
<br>
lower priority, insteading of putting the stop to freeze the application 
<br>
processes.
<br>
<p><span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;     *From:* devel-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     [mailto:devel-bounces_at_[hidden]] *On Behalf Of *Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt;     *Sent:* Thursday, June 01, 2006 10:50 PM
</span><br>
<span class="quotelev2">&gt;&gt;     *To:* Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt;     *Subject:* Re: [OMPI devel] SIGSTOP and SIGCONT on orted
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Actually, there were some implementation issues that might prevent
</span><br>
<span class="quotelev2">&gt;&gt;     this from working and were the reason we didn't implement it right
</span><br>
<span class="quotelev2">&gt;&gt;     away. We don't actually transmit the SIGTERM - we capture it in
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun and then propagate our own &quot;die&quot; command to the remote
</span><br>
<span class="quotelev2">&gt;&gt;     processes and daemons. Fortunately, &quot;die&quot; is very easy to implement.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Unfortunately, &quot;stop&quot; and &quot;continue&quot; are much harder to implement
</span><br>
<span class="quotelev2">&gt;&gt;     from inside of a process. We'll have to look at it, but this may
</span><br>
<span class="quotelev2">&gt;&gt;     not really be feasible.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;The main reason that it doesn't work is because we didn't do any thing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;to make it work.  :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Specifically, mpirun is not intercepting SIGSTOP and passing it on to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;the remote nodes.  There is nothing in the design or architecture that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;would prevent this, but we just don't do it [yet].
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[mailto:devel-bounces_at_[hidden]] On Behalf Of Pak Lui
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Sent: Thursday, June 01, 2006 5:02 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;To: devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Subject: [OMPI devel] SIGSTOP and SIGCONT on orted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I have a question on signals. Normally when I do a SIGTERM 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;(control-C) 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;on mpirun, the signal seems to get handled in a way that it 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;broadcasts 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;to the orted and processes on the execution hosts. However, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;when I send 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;a SIGSTOP to mpirun, mpirun seems to have stopped, but the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;processes of 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;the user executable continue to run. I guess I could hook up the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;debugger to mpirun and orted to see why they are handled differently, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;but I guess I anxious to hear about it here.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I am trying to see the behavior of SIGSTOP and SIGCONT for the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;suspension/resumption feature in N1GE. It'll try to use these 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;signals to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;stop and continue both mpirun and orted (and its processes), but the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;signals (SIGSTOP and SIGCONT) don't seem to get propagated to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;the remote 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;orted.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I can see there are some issues for implementing this feature on N1GE 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;because the 'qrsh' interface does not send the signal to orted on the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;remote node, but only to 'mpirun'. I am trying to see how to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;work around 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;- Pak Lui
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;pak.lui_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><pre>
-- 
Thanks,
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0919.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Previous message:</strong> <a href="0917.php">Ralph Castain: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>In reply to:</strong> <a href="0917.php">Ralph Castain: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0919.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
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
