<?
$subject_val = "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 15 06:02:46 2016" -->
<!-- isoreceived="20160715100246" -->
<!-- sent="Fri, 15 Jul 2016 03:02:42 -0700" -->
<!-- isosent="20160715100242" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7" -->
<!-- id="854E58AF-AD90-466D-861E-51145B49F241_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="7591b9bd-5ba7-d6a0-4e43-3ff10acb19b0_at_rist.or.jp" -->
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
<strong>Date:</strong> 2016-07-15 06:02:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19216.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>Previous message:</strong> <a href="19214.php">Gilles Gouaillardet: "[OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>In reply to:</strong> <a href="19214.php">Gilles Gouaillardet: "[OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19216.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>Reply:</strong> <a href="19216.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That would break debugger attach. Sounds to me like it&#226;&#128;&#153;s just an uninitialized variable for in_event_hdlr?
<br>
<p><span class="quotelev1">&gt; On Jul 15, 2016, at 1:20 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i noticed MPI_Comm_spawn is broken on master and on RHEL7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for some reason i cannot yet explain, it works just fine on RHEL6 (!)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 ./dynamic/intercomm_create
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from the ibm test suite can be used to reproduce the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i digged a bit and i found OPAL_ERR_DEBUGGER_RELEASE is fired in mpirun, then the tasks received
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a PMIX_ERR_DEBUGGER_RELEASE notification. it seems no event handler is registered, so the default handler
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; kills the task.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for the time being, a trivial workaround is not to fire OPAL_ERR_DEBUGGER_RELEASE in the first place
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (see patch below)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; could you please have a look ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i am not sure whether client should not be notified at all, or whether they should register a dummy handler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; fwiw, in _event_hdlr, cd-&gt;nondefault is true on RHEL6, but false on RHEL7, and that might indicate a race condition
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/orted/orted_submit.c b/orte/orted/orted_submit.c
</span><br>
<span class="quotelev1">&gt; index b9d571c..0de0e79 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/orted/orted_submit.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/orted/orted_submit.c
</span><br>
<span class="quotelev1">&gt; @@ -2155,6 +2155,7 @@ static bool mpir_breakpoint_fired = false;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static void _send_notification(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; +#if 0
</span><br>
<span class="quotelev1">&gt;     opal_buffer_t buf;
</span><br>
<span class="quotelev1">&gt;     int status = OPAL_ERR_DEBUGGER_RELEASE;
</span><br>
<span class="quotelev1">&gt;     orte_grpcomm_signature_t sig;
</span><br>
<span class="quotelev1">&gt; @@ -2209,6 +2210,7 @@ static void _send_notification(void)
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     OBJ_DESTRUCT(&amp;sig);
</span><br>
<span class="quotelev1">&gt;     OBJ_DESTRUCT(&amp;buf);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static void orte_debugger_dump(void)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19214.php">http://www.open-mpi.org/community/lists/devel/2016/07/19214.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19216.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>Previous message:</strong> <a href="19214.php">Gilles Gouaillardet: "[OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>In reply to:</strong> <a href="19214.php">Gilles Gouaillardet: "[OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19216.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>Reply:</strong> <a href="19216.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
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
