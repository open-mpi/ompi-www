<?
$subject_val = "Re: [OMPI users] libevent hangs on app finalize stage";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 13:31:25 2015" -->
<!-- isoreceived="20150115183125" -->
<!-- sent="Thu, 15 Jan 2015 10:31:21 -0800" -->
<!-- isosent="20150115183121" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libevent hangs on app finalize stage" -->
<!-- id="131BE3E7-863E-4026-8FDA-AF1BCDFB313F_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="54B80669.4050705_at_pathscale.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] libevent hangs on app finalize stage<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-15 13:31:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26190.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>Previous message:</strong> <a href="26188.php">Leonid: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>In reply to:</strong> <a href="26188.php">Leonid: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26190.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>Reply:</strong> <a href="26190.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm&#226;&#128;&#166;I&#226;&#128;&#153;m not seeing a failure. Let me try on another system.
<br>
<p><p>Modifying libevent is not a viable solution :-(
<br>
<p><p><span class="quotelev1">&gt; On Jan 15, 2015, at 10:26 AM, Leonid &lt;lchistov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course that may indicate an issue with custom compiler, but given that it fails with gcc and inserted delay I still think it is a OMPI bug, since such a delay could be caused by operating system at that exact point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For me simply commenting out &quot;base-&gt;event_gotterm = base-&gt;event_break = 0;&quot; seems to do the trick, but I am not completely sure if that won't cause any other troubles.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've tried to update my master branch to the latest version (including your fix) but now it just crashes for me on *all* benchmarks that I am trying (both with gcc and our compiler).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 15.01.2015 18:57, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thought about this some more and realized that the orte progress engine wasn&#226;&#128;&#153;t using the opal_progress_thread support functions, which include a &#226;&#128;&#156;break&#226;&#128;&#157; event to kick us out of just such problems. So I changed it on the master. From your citing of libevent 2.0.22, I believe that must be where you are working, yes?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If so, give the changed version a try and see if your problem is resolved.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 15, 2015, at 12:55 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Given that you could only reproduce it with either your custom compiler or by forcibly introducing a delay, is this indicating an issue with the custom compiler? It does seem strange that we don't see this anywhere else, given the number of times that code gets run.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Only alternative solution I can think of would be to push the finalize request into the event loop, and thus execute the loopbreak from within an event. You might try and see if that solves the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 14, 2015, at 11:54 PM, Leonid &lt;lchistov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I believe there is a bug in event_base_loop() function from file event.c (opal/mca/event/libevent2022/libevent/).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Consider the case when application is going to be finalized and both event_base_loop() and event_base_loopbreak() are called in the same time in parallel threads.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Then if event_base_loopbreak() happens to acquire lock first, it will set &quot;event_base-&gt;event_break = 1&quot;, but won't send any signal to event loop, because it did not started yet.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; After that, event_base_loop() will acquire the lock and will clear event_break flag with the following statement: &quot;base-&gt;event_gotterm = base-&gt;event_break = 0;&quot;. Then it will go into polling with timeout = -1 and thus block forever.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This issue was reproduced on a custom compiler (using Lulesh benchmark and x86 4-core PC), but it can be also reproduced for me with GCC compiler (on almost any benchmark and in same HW settings) by putting some delay to orte_progress_thread_engine() function:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; static void* orte_progress_thread_engine(opal_object_t *obj)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   while (orte_event_base_active) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     usleep(1000); // add sleep to allow orte_ess_base_app_finalize() set orte_event_base_active flag to false
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   return OPAL_THREAD_CANCELLED;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am not completely sure what should be the best fix for described problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26181.php">http://www.open-mpi.org/community/lists/users/2015/01/26181.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26185.php">http://www.open-mpi.org/community/lists/users/2015/01/26185.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26188.php">http://www.open-mpi.org/community/lists/users/2015/01/26188.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26190.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>Previous message:</strong> <a href="26188.php">Leonid: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>In reply to:</strong> <a href="26188.php">Leonid: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26190.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>Reply:</strong> <a href="26190.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
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
