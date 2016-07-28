<?
$subject_val = "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 15 10:09:36 2016" -->
<!-- isoreceived="20160715140936" -->
<!-- sent="Fri, 15 Jul 2016 07:09:32 -0700" -->
<!-- isosent="20160715140932" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7" -->
<!-- id="C034B22B-EF87-4C47-9E02-159343D03DBC_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5sWSpaUo8Fw8hv5jk2VXzd4p=vdM6xq1c8J49eTu+f49Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-07-15 10:09:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19218.php">Jeff Squyres (jsquyres): "[OMPI devel] v2.0.1 PRs: open season"</a>
<li><strong>Previous message:</strong> <a href="19216.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>In reply to:</strong> <a href="19216.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19220.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>Reply:</strong> <a href="19220.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I&#226;&#128;&#153;ll take a look - thanks!
<br>
<p><span class="quotelev1">&gt; On Jul 15, 2016, at 7:08 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yep,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The constructor of pmix2x_threadshift_t (tscon) does not initialize nondefault to false.
</span><br>
<span class="quotelev1">&gt; I won't be able to investigate this until Monday, but so far, my guess is that if the constructor is fixed, then RHEL6 will fail like RHEL7 ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; fwiw, the intercomm_create used to fail in Cisco mtt because of too many tasks and no over subscription, now it fails because of this bug.
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
<span class="quotelev1">&gt; On Friday, July 15, 2016, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; That would break debugger attach. Sounds to me like it&#226;&#128;&#153;s just an uninitialized variable for in_event_hdlr?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 15, 2016, at 1:20 AM, Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
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
<span class="quotelev2">&gt; &gt; i digged a bit and i found OPAL_ERR_DEBUGGER_RELEASE is fired in mpirun, then the tasks received
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; a PMIX_ERR_DEBUGGER_RELEASE notification. it seems no event handler is registered, so the default handler
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; kills the task.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; for the time being, a trivial workaround is not to fire OPAL_ERR_DEBUGGER_RELEASE in the first place
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
<span class="quotelev2">&gt; &gt; i am not sure whether client should not be notified at all, or whether they should register a dummy handler.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; fwiw, in _event_hdlr, cd-&gt;nondefault is true on RHEL6, but false on RHEL7, and that might indicate a race condition
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
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19214.php">http://www.open-mpi.org/community/lists/devel/2016/07/19214.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/07/19214.php">http://www.open-mpi.org/community/lists/devel/2016/07/19214.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19215.php">http://www.open-mpi.org/community/lists/devel/2016/07/19215.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/07/19215.php">http://www.open-mpi.org/community/lists/devel/2016/07/19215.php</a>&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19216.php">http://www.open-mpi.org/community/lists/devel/2016/07/19216.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19217/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19218.php">Jeff Squyres (jsquyres): "[OMPI devel] v2.0.1 PRs: open season"</a>
<li><strong>Previous message:</strong> <a href="19216.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>In reply to:</strong> <a href="19216.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19220.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>Reply:</strong> <a href="19220.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
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
