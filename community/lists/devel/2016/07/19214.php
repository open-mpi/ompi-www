<?
$subject_val = "[OMPI devel] MPI_Comm_spawn broken on master on RHEL7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 15 04:20:40 2016" -->
<!-- isoreceived="20160715082040" -->
<!-- sent="Fri, 15 Jul 2016 17:20:35 +0900" -->
<!-- isosent="20160715082035" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Comm_spawn broken on master on RHEL7" -->
<!-- id="7591b9bd-5ba7-d6a0-4e43-3ff10acb19b0_at_rist.or.jp" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Comm_spawn broken on master on RHEL7<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-15 04:20:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19215.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>Previous message:</strong> <a href="19213.php">Jeff Squyres (jsquyres): "[OMPI devel] Git / Github branching and repo plans"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19215.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>Reply:</strong> <a href="19215.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>i noticed MPI_Comm_spawn is broken on master and on RHEL7
<br>
<p>for some reason i cannot yet explain, it works just fine on RHEL6 (!)
<br>
<p><p>mpirun -np 1 ./dynamic/intercomm_create
<br>
<p>from the ibm test suite can be used to reproduce the issue.
<br>
<p><p><p>i digged a bit and i found OPAL_ERR_DEBUGGER_RELEASE is fired in mpirun, 
<br>
then the tasks received
<br>
<p>a PMIX_ERR_DEBUGGER_RELEASE notification. it seems no event handler is 
<br>
registered, so the default handler
<br>
<p>kills the task.
<br>
<p><p>for the time being, a trivial workaround is not to fire 
<br>
OPAL_ERR_DEBUGGER_RELEASE in the first place
<br>
<p>(see patch below)
<br>
<p><p>could you please have a look ?
<br>
<p>i am not sure whether client should not be notified at all, or whether 
<br>
they should register a dummy handler.
<br>
<p>fwiw, in _event_hdlr, cd-&gt;nondefault is true on RHEL6, but false on 
<br>
RHEL7, and that might indicate a race condition
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p>diff --git a/orte/orted/orted_submit.c b/orte/orted/orted_submit.c
<br>
index b9d571c..0de0e79 100644
<br>
--- a/orte/orted/orted_submit.c
<br>
+++ b/orte/orted/orted_submit.c
<br>
@@ -2155,6 +2155,7 @@ static bool mpir_breakpoint_fired = false;
<br>
<p>&nbsp;&nbsp;static void _send_notification(void)
<br>
&nbsp;&nbsp;{
<br>
+#if 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_buffer_t buf;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int status = OPAL_ERR_DEBUGGER_RELEASE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_grpcomm_signature_t sig;
<br>
@@ -2209,6 +2210,7 @@ static void _send_notification(void)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_DESTRUCT(&amp;sig);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_DESTRUCT(&amp;buf);
<br>
+#endif
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;static void orte_debugger_dump(void)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19215.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>Previous message:</strong> <a href="19213.php">Jeff Squyres (jsquyres): "[OMPI devel] Git / Github branching and repo plans"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19215.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>Reply:</strong> <a href="19215.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
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
