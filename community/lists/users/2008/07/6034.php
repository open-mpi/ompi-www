<?
$subject_val = "Re: [OMPI users] ORTE_ERROR_LOG timeout";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  8 11:49:27 2008" -->
<!-- isoreceived="20080708154927" -->
<!-- sent="Tue, 08 Jul 2008 09:49:20 -0600" -->
<!-- isosent="20080708154920" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE_ERROR_LOG timeout" -->
<!-- id="C498E8A0.E283%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0807081552440.3290_at_aipc52.phyaig.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] ORTE_ERROR_LOG timeout<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-08 11:49:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6035.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Previous message:</strong> <a href="6033.php">Alastair Basden: "[OMPI users] ORTE_ERROR_LOG timeout"</a>
<li><strong>In reply to:</strong> <a href="6033.php">Alastair Basden: "[OMPI users] ORTE_ERROR_LOG timeout"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Several thins are going on here. First, this error message:
<br>
<p><span class="quotelev1">&gt; mpirun noticed that job rank 1 with PID 9658 on node mac1 exited on signal
</span><br>
<span class="quotelev1">&gt; 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; 2 additional processes aborted (not shown)
</span><br>
<p>indicates that your application procs are aborting for some reason. The
<br>
system is then attempting to shutdown and somehow got itself &quot;hung&quot;, hence
<br>
the timeout error message.
<br>
<p>I'm not sure that increasing the timeout value will help in this situation.
<br>
Unfortunately, 1.2.x has problems with this scenario (1.3 is -much- better!
<br>
;-)). If you want to try adjusting the timeout anyway, you can do so with:
<br>
<p>mpirun -mca orte_abort_timeout x ...
<br>
<p>where x is the specified timeout in seconds.
<br>
<p>Hope that helps.
<br>
Ralph
<br>
<p><p><p>On 7/8/08 8:55 AM, &quot;Alastair Basden&quot; &lt;a.g.basden_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I've got some code that uses openmpi, and sometimes, it crashes, after
</span><br>
<span class="quotelev1">&gt; printing somthing like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mac1:09654] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; [mac1:09654] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
</span><br>
<span class="quotelev1">&gt; line 1166
</span><br>
<span class="quotelev1">&gt; [mac1:09654] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line
</span><br>
<span class="quotelev1">&gt; 90
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 1 with PID 9658 on node mac1 exited on signal
</span><br>
<span class="quotelev1">&gt; 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; 2 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt; [mac1:09654] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt; [mac1:09654] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
</span><br>
<span class="quotelev1">&gt; line 1198
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons for this job. Returned
</span><br>
<span class="quotelev1">&gt; value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this case, all processes were running on the same machine, so its not a
</span><br>
<span class="quotelev1">&gt; connection problem.  Is this a bug, or something else wrong?  Is there a
</span><br>
<span class="quotelev1">&gt; way to increase the timeout time?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6035.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Previous message:</strong> <a href="6033.php">Alastair Basden: "[OMPI users] ORTE_ERROR_LOG timeout"</a>
<li><strong>In reply to:</strong> <a href="6033.php">Alastair Basden: "[OMPI users] ORTE_ERROR_LOG timeout"</a>
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
