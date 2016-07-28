<?
$subject_val = "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 16 17:28:51 2016" -->
<!-- isoreceived="20160716212851" -->
<!-- sent="Sat, 16 Jul 2016 14:28:46 -0700" -->
<!-- isosent="20160716212846" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7" -->
<!-- id="43F0EE8C-BCBF-4AB0-9C6B-F8D4E005C353_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="B0237AF1-6FDC-4953-8543-98550BAB60FB_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-16 17:28:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19227.php">Ralph Castain: "[OMPI devel] OSHMEM out-of-date?"</a>
<li><strong>Previous message:</strong> <a href="19225.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>In reply to:</strong> <a href="19225.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found the reason for the notification and fixed that as well - should all be done now
<br>
<p><span class="quotelev1">&gt; On Jul 16, 2016, at 10:37 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kewl - thanks! I will take care of this, but to me the most pressing issue is why this event notification is being generated at all. It shouldn&#226;&#128;&#153;t be.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 16, 2016, at 9:11 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I finally got it :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; in send_notification() from orted_submit.c, info is OPAL_PMIX_EVENT_NON_DEFAULT, but in pmix2x.c and pmix_ext20.c, PMIX_EVENT_NON_DEFAULT is tested.
</span><br>
<span class="quotelev2">&gt;&gt; If I use OPAL_PMIX_EVENT_NON_DEFAULT in pmix*, that fixes the issue
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sunday, July 17, 2016, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Okay, I&#226;&#128;&#153;ll investigate why that is happening - thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 16, 2016, at 7:45 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The parent job (e.g.  the task that calls MPI_Comm_spawn) receives it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I cannot tell whether the child (e.g. the spawned task) receives it too or not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Saturday, July 16, 2016, Ralph Castain &lt;rhc_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can fix the initialization. What puzzles me is that no debugger_release message should be sent unless a debugger is attached - in which case, the event should be registered.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So why is it being sent? Is it the child job that is receiving it? Or is it the parent?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 16, 2016, at 7:19 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I found some time to investigate this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tscon should initialize nondefault to false in both pmix2x.c and pmix_ext20.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A better workaround is to update ompi_errhandler_callback, so it does not invoke ompi_mpi_abort if status is OPAL_ERR_DEBUGGER_RELEASE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That still seems counter intuitive to me ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does ERR stands for error ? I did not find any error here ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Should it be EVT for event instead ? Should ERR not be fired in the first place ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Should Open MPI register a handler for this event (so nondefault is true and ompi_errhandler_callback is not invoked here) ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Friday, July 15, 2016, Ralph Castain &lt;rhc_at_[hidden] &lt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Okay, I&#226;&#128;&#153;ll take a look - thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 15, 2016, at 7:08 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Yep,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The constructor of pmix2x_threadshift_t (tscon) does not initialize nondefault to false.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I won't be able to investigate this until Monday, but so far, my guess is that if the constructor is fixed, then RHEL6 will fail like RHEL7 ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fwiw, the intercomm_create used to fail in Cisco mtt because of too many tasks and no over subscription, now it fails because of this bug.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Friday, July 15, 2016, Ralph Castain &lt;rhc_at_[hidden] &lt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That would break debugger attach. Sounds to me like it&#226;&#128;&#153;s just an uninitialized variable for in_event_hdlr?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; On Jul 15, 2016, at 1:20 AM, Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; i noticed MPI_Comm_spawn is broken on master and on RHEL7
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; for some reason i cannot yet explain, it works just fine on RHEL6 (!)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; mpirun -np 1 ./dynamic/intercomm_create
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; from the ibm test suite can be used to reproduce the issue.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; i digged a bit and i found OPAL_ERR_DEBUGGER_RELEASE is fired in mpirun, then the tasks received
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; a PMIX_ERR_DEBUGGER_RELEASE notification. it seems no event handler is registered, so the default handler
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; kills the task.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; for the time being, a trivial workaround is not to fire OPAL_ERR_DEBUGGER_RELEASE in the first place
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; (see patch below)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; could you please have a look ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; i am not sure whether client should not be notified at all, or whether they should register a dummy handler.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; fwiw, in _event_hdlr, cd-&gt;nondefault is true on RHEL6, but false on RHEL7, and that might indicate a race condition
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; diff --git a/orte/orted/orted_submit.c b/orte/orted/orted_submit.c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; index b9d571c..0de0e79 100644
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; --- a/orte/orted/orted_submit.c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; +++ b/orte/orted/orted_submit.c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; @@ -2155,6 +2155,7 @@ static bool mpir_breakpoint_fired = false;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; static void _send_notification(void)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; +#if 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;     opal_buffer_t buf;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;     int status = OPAL_ERR_DEBUGGER_RELEASE;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;     orte_grpcomm_signature_t sig;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; @@ -2209,6 +2210,7 @@ static void _send_notification(void)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;     OBJ_DESTRUCT(&amp;sig);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;     OBJ_DESTRUCT(&amp;buf);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; static void orte_debugger_dump(void)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; devel_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19214.php">http://www.open-mpi.org/community/lists/devel/2016/07/19214.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/07/19214.php">http://www.open-mpi.org/community/lists/devel/2016/07/19214.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19215.php">http://www.open-mpi.org/community/lists/devel/2016/07/19215.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/07/19215.php">http://www.open-mpi.org/community/lists/devel/2016/07/19215.php</a>&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19216.php">http://www.open-mpi.org/community/lists/devel/2016/07/19216.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/07/19216.php">http://www.open-mpi.org/community/lists/devel/2016/07/19216.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19220.php">http://www.open-mpi.org/community/lists/devel/2016/07/19220.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/07/19220.php">http://www.open-mpi.org/community/lists/devel/2016/07/19220.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19222.php">http://www.open-mpi.org/community/lists/devel/2016/07/19222.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/07/19222.php">http://www.open-mpi.org/community/lists/devel/2016/07/19222.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19224.php">http://www.open-mpi.org/community/lists/devel/2016/07/19224.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19226/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19227.php">Ralph Castain: "[OMPI devel] OSHMEM out-of-date?"</a>
<li><strong>Previous message:</strong> <a href="19225.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>In reply to:</strong> <a href="19225.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
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
