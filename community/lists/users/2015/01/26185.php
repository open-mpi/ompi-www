<?
$subject_val = "Re: [OMPI users] libevent hangs on app finalize stage";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 10:57:13 2015" -->
<!-- isoreceived="20150115155713" -->
<!-- sent="Thu, 15 Jan 2015 07:57:09 -0800" -->
<!-- isosent="20150115155709" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libevent hangs on app finalize stage" -->
<!-- id="BDCA9293-363E-4F11-81D6-0D843B4F7E4D_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="039CD539-900F-4A2A-AACE-AFCA7E844956_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-01-15 10:57:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26186.php">Klara Hornisova: "[OMPI users] mpirun hangs without internet connection"</a>
<li><strong>Previous message:</strong> <a href="26184.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>In reply to:</strong> <a href="26182.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26188.php">Leonid: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>Reply:</strong> <a href="26188.php">Leonid: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thought about this some more and realized that the orte progress engine wasn&#226;&#128;&#153;t using the opal_progress_thread support functions, which include a &#226;&#128;&#156;break&#226;&#128;&#157; event to kick us out of just such problems. So I changed it on the master. From your citing of libevent 2.0.22, I believe that must be where you are working, yes?
<br>
<p>If so, give the changed version a try and see if your problem is resolved.
<br>
<p><p><span class="quotelev1">&gt; On Jan 15, 2015, at 12:55 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given that you could only reproduce it with either your custom compiler or by forcibly introducing a delay, is this indicating an issue with the custom compiler? It does seem strange that we don't see this anywhere else, given the number of times that code gets run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Only alternative solution I can think of would be to push the finalize request into the event loop, and thus execute the loopbreak from within an event. You might try and see if that solves the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 14, 2015, at 11:54 PM, Leonid &lt;lchistov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe there is a bug in event_base_loop() function from file event.c (opal/mca/event/libevent2022/libevent/).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Consider the case when application is going to be finalized and both event_base_loop() and event_base_loopbreak() are called in the same time in parallel threads.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Then if event_base_loopbreak() happens to acquire lock first, it will set &quot;event_base-&gt;event_break = 1&quot;, but won't send any signal to event loop, because it did not started yet.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After that, event_base_loop() will acquire the lock and will clear event_break flag with the following statement: &quot;base-&gt;event_gotterm = base-&gt;event_break = 0;&quot;. Then it will go into polling with timeout = -1 and thus block forever.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This issue was reproduced on a custom compiler (using Lulesh benchmark and x86 4-core PC), but it can be also reproduced for me with GCC compiler (on almost any benchmark and in same HW settings) by putting some delay to orte_progress_thread_engine() function:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; static void* orte_progress_thread_engine(opal_object_t *obj)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   while (orte_event_base_active) {
</span><br>
<span class="quotelev2">&gt;&gt;     usleep(1000); // add sleep to allow orte_ess_base_app_finalize() set orte_event_base_active flag to false
</span><br>
<span class="quotelev2">&gt;&gt;     opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;   return OPAL_THREAD_CANCELLED;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am not completely sure what should be the best fix for described problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26181.php">http://www.open-mpi.org/community/lists/users/2015/01/26181.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26186.php">Klara Hornisova: "[OMPI users] mpirun hangs without internet connection"</a>
<li><strong>Previous message:</strong> <a href="26184.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>In reply to:</strong> <a href="26182.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26188.php">Leonid: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>Reply:</strong> <a href="26188.php">Leonid: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
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
