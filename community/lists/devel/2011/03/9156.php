<?
$subject_val = "[OMPI devel] Setting Checkpoint path and executables";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 31 04:21:47 2011" -->
<!-- isoreceived="20110331082147" -->
<!-- sent="Thu, 31 Mar 2011 10:21:42 +0200" -->
<!-- isosent="20110331082142" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="[OMPI devel] Setting Checkpoint path and executables" -->
<!-- id="AANLkTiks0gNXjnxOHwHcm62BxX+V8=5AC6DwygedLNtc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Setting Checkpoint path and executables<br>
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-31 04:21:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/04/9157.php">Joshua Hursey: "Re: [OMPI devel] Fwd: [devel-core] Open MPI Developers Meeting"</a>
<li><strong>Previous message:</strong> <a href="9155.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello again.
<br>
<p>I'm working in the launch code to handle my checkpoints, but i'm a little
<br>
stuck in how to set the path to my checkpoint and the executable
<br>
(ompi_blcr_context.PID). I take a look at the code in
<br>
odls_base_default_fns.c and this piece of code took my attention:
<br>
<p>#if OPAL_ENABLE_FT_CR == 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OPAL CRS components need the opportunity to take action
<br>
before a process
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* is forked.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Needs access to:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*   - Environment
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*   - Rank/ORTE Name
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*   - Binary to exec
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( NULL != opal_crs.crs_prelaunch ) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( OPAL_SUCCESS != (rc =
<br>
opal_crs.crs_prelaunch(child-&gt;name-&gt;vpid,
<br>
<p><p>orte_sstore_base_prelaunch_location,
<br>
<p><p>&amp;(app-&gt;app),
<br>
<p><p>&amp;(app-&gt;cwd),
<br>
<p><p>&amp;(app-&gt;argv),
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;(app-&gt;env)
<br>
) ) ) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(rc);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto CLEANUP;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
#endif
<br>
<p>I've seen that i can set the *location* with a MCA parameter, but as i'm
<br>
working in a no-coordinated checkpoint and also passing checkpoints from one
<br>
node to another so for example, node 2 can restore a process that was
<br>
residing on node 1. So every node has his own process's checkpoints files in
<br>
a folder, and also checkpoints from another processes residing somewhere
<br>
else in another folder.
<br>
<p>Is there any way to set the values of where the checkpoint are stored and
<br>
his exec names taking into account my situation?
<br>
<p>Best Regards.
<br>
<p>Hugo Meyer
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9156/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/04/9157.php">Joshua Hursey: "Re: [OMPI devel] Fwd: [devel-core] Open MPI Developers Meeting"</a>
<li><strong>Previous message:</strong> <a href="9155.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
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
