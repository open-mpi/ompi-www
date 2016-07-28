<?
$subject_val = "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 16 12:11:40 2016" -->
<!-- isoreceived="20160716161140" -->
<!-- sent="Sun, 17 Jul 2016 01:11:29 +0900" -->
<!-- isosent="20160716161129" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7" -->
<!-- id="CAAkFZ5s5D60bXNgsQyPCbe33P6ZzzYF4_nWip3ow3UkbbgmkqQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A802AE63-8E6E-4F2E-9205-9D0D445CEA98_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-16 12:11:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19225.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>Previous message:</strong> <a href="19223.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>In reply to:</strong> <a href="19223.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19225.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>Reply:</strong> <a href="19225.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I finally got it :-)
<br>
<p>in send_notification() from orted_submit.c, info is
<br>
OPAL_PMIX_EVENT_NON_DEFAULT, but in pmix2x.c and
<br>
pmix_ext20.c, PMIX_EVENT_NON_DEFAULT is tested.
<br>
If I use OPAL_PMIX_EVENT_NON_DEFAULT in pmix*, that fixes the issue
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Sunday, July 17, 2016, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Okay, I&#226;&#128;&#153;ll investigate why that is happening - thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 16, 2016, at 7:45 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The parent job (e.g.  the task that calls MPI_Comm_spawn) receives it.
</span><br>
<span class="quotelev1">&gt; I cannot tell whether the child (e.g. the spawned task) receives it too or
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Saturday, July 16, 2016, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can fix the initialization. What puzzles me is that no debugger_release
</span><br>
<span class="quotelev2">&gt;&gt; message should be sent unless a debugger is attached - in which case, the
</span><br>
<span class="quotelev2">&gt;&gt; event should be registered.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So why is it being sent? Is it the child job that is receiving it? Or is
</span><br>
<span class="quotelev2">&gt;&gt; it the parent?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 16, 2016, at 7:19 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I found some time to investigate this.
</span><br>
<span class="quotelev2">&gt;&gt; tscon should initialize nondefault to false in both pmix2x.c and
</span><br>
<span class="quotelev2">&gt;&gt; pmix_ext20.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A better workaround is to update ompi_errhandler_callback, so it does not
</span><br>
<span class="quotelev2">&gt;&gt; invoke ompi_mpi_abort if status is OPAL_ERR_DEBUGGER_RELEASE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That still seems counter intuitive to me ...
</span><br>
<span class="quotelev2">&gt;&gt; Does ERR stands for error ? I did not find any error here ...
</span><br>
<span class="quotelev2">&gt;&gt; Should it be EVT for event instead ? Should ERR not be fired in the first
</span><br>
<span class="quotelev2">&gt;&gt; place ?
</span><br>
<span class="quotelev2">&gt;&gt; Should Open MPI register a handler for this event (so nondefault is true
</span><br>
<span class="quotelev2">&gt;&gt; and ompi_errhandler_callback is not invoked here) ?
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
<span class="quotelev2">&gt;&gt; On Friday, July 15, 2016, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Okay, I&#226;&#128;&#153;ll take a look - thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 15, 2016, at 7:08 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yep,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The constructor of pmix2x_threadshift_t (tscon) does not initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nondefault to false.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I won't be able to investigate this until Monday, but so far, my guess
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is that if the constructor is fixed, then RHEL6 will fail like RHEL7 ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fwiw, the intercomm_create used to fail in Cisco mtt because of too many
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tasks and no over subscription, now it fails because of this bug.
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
<span class="quotelev3">&gt;&gt;&gt; On Friday, July 15, 2016, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That would break debugger attach. Sounds to me like it&#226;&#128;&#153;s just an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; uninitialized variable for in_event_hdlr?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; On Jul 15, 2016, at 1:20 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; i noticed MPI_Comm_spawn is broken on master and on RHEL7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; for some reason i cannot yet explain, it works just fine on RHEL6 (!)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; mpirun -np 1 ./dynamic/intercomm_create
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; from the ibm test suite can be used to reproduce the issue.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; i digged a bit and i found OPAL_ERR_DEBUGGER_RELEASE is fired in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun, then the tasks received
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; a PMIX_ERR_DEBUGGER_RELEASE notification. it seems no event handler
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is registered, so the default handler
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; kills the task.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; for the time being, a trivial workaround is not to fire
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPAL_ERR_DEBUGGER_RELEASE in the first place
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; (see patch below)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; could you please have a look ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; i am not sure whether client should not be notified at all, or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; whether they should register a dummy handler.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; fwiw, in _event_hdlr, cd-&gt;nondefault is true on RHEL6, but false on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RHEL7, and that might indicate a race condition
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; diff --git a/orte/orted/orted_submit.c b/orte/orted/orted_submit.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; index b9d571c..0de0e79 100644
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; --- a/orte/orted/orted_submit.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +++ b/orte/orted/orted_submit.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; @@ -2155,6 +2155,7 @@ static bool mpir_breakpoint_fired = false;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; static void _send_notification(void)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +#if 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     opal_buffer_t buf;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     int status = OPAL_ERR_DEBUGGER_RELEASE;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     orte_grpcomm_signature_t sig;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; @@ -2209,6 +2210,7 @@ static void _send_notification(void)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     OBJ_DESTRUCT(&amp;sig);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     OBJ_DESTRUCT(&amp;buf);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +#endif
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; static void orte_debugger_dump(void)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19214.php">http://www.open-mpi.org/community/lists/devel/2016/07/19214.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19215.php">http://www.open-mpi.org/community/lists/devel/2016/07/19215.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19216.php">http://www.open-mpi.org/community/lists/devel/2016/07/19216.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19220.php">http://www.open-mpi.org/community/lists/devel/2016/07/19220.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19222.php">http://www.open-mpi.org/community/lists/devel/2016/07/19222.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19224/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19225.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>Previous message:</strong> <a href="19223.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>In reply to:</strong> <a href="19223.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19225.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>Reply:</strong> <a href="19225.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
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
