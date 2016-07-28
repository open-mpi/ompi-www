<?
$subject_val = "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 15 10:08:14 2016" -->
<!-- isoreceived="20160715140814" -->
<!-- sent="Fri, 15 Jul 2016 23:08:12 +0900" -->
<!-- isosent="20160715140812" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7" -->
<!-- id="CAAkFZ5sWSpaUo8Fw8hv5jk2VXzd4p=vdM6xq1c8J49eTu+f49Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="854E58AF-AD90-466D-861E-51145B49F241_at_open-mpi.org" -->
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
<strong>Date:</strong> 2016-07-15 10:08:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19217.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>Previous message:</strong> <a href="19215.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>In reply to:</strong> <a href="19215.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19217.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>Reply:</strong> <a href="19217.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep,
<br>
<p>The constructor of pmix2x_threadshift_t (tscon) does not initialize
<br>
nondefault to false.
<br>
I won't be able to investigate this until Monday, but so far, my guess is
<br>
that if the constructor is fixed, then RHEL6 will fail like RHEL7 ...
<br>
<p>fwiw, the intercomm_create used to fail in Cisco mtt because of too many
<br>
tasks and no over subscription, now it fails because of this bug.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, July 15, 2016, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That would break debugger attach. Sounds to me like it&#226;&#128;&#153;s just an
</span><br>
<span class="quotelev1">&gt; uninitialized variable for in_event_hdlr?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 15, 2016, at 1:20 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i noticed MPI_Comm_spawn is broken on master and on RHEL7
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; for some reason i cannot yet explain, it works just fine on RHEL6 (!)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 1 ./dynamic/intercomm_create
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; from the ibm test suite can be used to reproduce the issue.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i digged a bit and i found OPAL_ERR_DEBUGGER_RELEASE is fired in mpirun,
</span><br>
<span class="quotelev1">&gt; then the tasks received
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; a PMIX_ERR_DEBUGGER_RELEASE notification. it seems no event handler is
</span><br>
<span class="quotelev1">&gt; registered, so the default handler
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; kills the task.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; for the time being, a trivial workaround is not to fire
</span><br>
<span class="quotelev1">&gt; OPAL_ERR_DEBUGGER_RELEASE in the first place
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (see patch below)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; could you please have a look ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i am not sure whether client should not be notified at all, or whether
</span><br>
<span class="quotelev1">&gt; they should register a dummy handler.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; fwiw, in _event_hdlr, cd-&gt;nondefault is true on RHEL6, but false on
</span><br>
<span class="quotelev1">&gt; RHEL7, and that might indicate a race condition
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/orted/orted_submit.c b/orte/orted/orted_submit.c
</span><br>
<span class="quotelev2">&gt; &gt; index b9d571c..0de0e79 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/orted/orted_submit.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/orted/orted_submit.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -2155,6 +2155,7 @@ static bool mpir_breakpoint_fired = false;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static void _send_notification(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; +#if 0
</span><br>
<span class="quotelev2">&gt; &gt;     opal_buffer_t buf;
</span><br>
<span class="quotelev2">&gt; &gt;     int status = OPAL_ERR_DEBUGGER_RELEASE;
</span><br>
<span class="quotelev2">&gt; &gt;     orte_grpcomm_signature_t sig;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -2209,6 +2210,7 @@ static void _send_notification(void)
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;     OBJ_DESTRUCT(&amp;sig);
</span><br>
<span class="quotelev2">&gt; &gt;     OBJ_DESTRUCT(&amp;buf);
</span><br>
<span class="quotelev2">&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static void orte_debugger_dump(void)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19214.php">http://www.open-mpi.org/community/lists/devel/2016/07/19214.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19215.php">http://www.open-mpi.org/community/lists/devel/2016/07/19215.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19216/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19217.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>Previous message:</strong> <a href="19215.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>In reply to:</strong> <a href="19215.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19217.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>Reply:</strong> <a href="19217.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
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
