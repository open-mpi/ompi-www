<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 12 14:55:11 2007" -->
<!-- isoreceived="20070312185511" -->
<!-- sent="Mon, 12 Mar 2007 12:55:04 -0600" -->
<!-- isosent="20070312185504" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] signal handling" -->
<!-- id="C21AFE28.1F8F%rhc_at_lanl.gov" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0DDE7F776936B04AA670C77F1F59A4D9018101BD_at_deaex001.arvinmeritor.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-12 14:55:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2774.php">Pak Lui: "Re: [OMPI users] signal handling"</a>
<li><strong>Previous message:</strong> <a href="2772.php">Michael Epitropakis: "[OMPI users] Error in MPI_Unpack --- MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>In reply to:</strong> <a href="2771.php">Olesen, Mark: "[OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2775.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>Reply:</strong> <a href="2775.php">Reuti: "Re: [OMPI users] signal handling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll have to look into it - I suspect this is simply an erroneous message
<br>
and that no daemon is actually being started.
<br>
<p>I'm not entirely sure I understand what's happening, though, in your code.
<br>
Are you saying that mpirun starts some number of application processes which
<br>
run merrily along, and then qsub sends out USR1/2 signals followed by STOP
<br>
and then KILL in an effort to abort the job? So the application processes
<br>
don't normally terminate, but instead are killed via these signals?
<br>
<p>Just want to ensure I understand the scenario here as that is something
<br>
obviously unique to GE.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On 3/12/07 9:42 AM, &quot;Olesen, Mark&quot; &lt;Mark.Olesen_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm testing openmpi 1.2rc1 with GridEngine 6.0u9 and ran into interesting
</span><br>
<span class="quotelev1">&gt; behaviour when using the qsub -notify option.
</span><br>
<span class="quotelev1">&gt; With -notify, USR1 and USR2 are sent X seconds before sending STOP and KILL
</span><br>
<span class="quotelev1">&gt; signals, respectively.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When the USR2 signal is sent to the process group with the mpirun process, I
</span><br>
<span class="quotelev1">&gt; receive an error message about not being able to start a daemon:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun: Forwarding signal 12 to job[dealc12:18212] ERROR: A daemon on node
</span><br>
<span class="quotelev1">&gt; dealc12 failed to start as expected.
</span><br>
<span class="quotelev1">&gt; [dealc12:18212] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [dealc12:18212] ERROR: the 'qstat -t' command on the Grid Engine tasks.
</span><br>
<span class="quotelev1">&gt; [dealc12:18212] ERROR: If the problem persists, please restart the
</span><br>
<span class="quotelev1">&gt; [dealc12:18212] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev1">&gt; [dealc12:18212] The daemon received a signal 12.
</span><br>
<span class="quotelev1">&gt; [dealc12:18212] ERROR: A daemon on node dealc20 failed to start as expected.
</span><br>
<span class="quotelev1">&gt; [dealc12:18212] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [dealc12:18212] ERROR: the 'qstat -t' command on the Grid Engine tasks.
</span><br>
<span class="quotelev1">&gt; [dealc12:18212] ERROR: If the problem persists, please restart the
</span><br>
<span class="quotelev1">&gt; [dealc12:18212] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev1">&gt; [dealc12:18212] The daemon received a signal 12.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The job eventually stops, but the mpirun process itself continues to live
</span><br>
<span class="quotelev1">&gt; (just the ppid changes).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; According to orte(1)/Signal Propagation, USR1 and USR2 should be propagated
</span><br>
<span class="quotelev1">&gt; to all processes in the job (which seems to be happening), but why is a
</span><br>
<span class="quotelev1">&gt; daemon start being attempted and the mpirun not being stopped?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /mark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This e-mail message and any attachments may contain legally privileged,
</span><br>
<span class="quotelev1">&gt; confidential or proprietary Information, or information otherwise protected by
</span><br>
<span class="quotelev1">&gt; law of ArvinMeritor, Inc., its affiliates, or third parties. This notice
</span><br>
<span class="quotelev1">&gt; serves as marking of its &#226;&#128;&#158;Confidential&#226;&#128;&#176; status as defined in any
</span><br>
<span class="quotelev1">&gt; confidentiality agreements concerning the sender and recipient. If you are not
</span><br>
<span class="quotelev1">&gt; the intended recipient(s), or the employee or agent responsible for delivery
</span><br>
<span class="quotelev1">&gt; of this message to the intended recipient(s), you are hereby notified that any
</span><br>
<span class="quotelev1">&gt; dissemination, distribution or copying of this e-mail message is strictly
</span><br>
<span class="quotelev1">&gt; prohibited. If you have received this message in error, please immediately
</span><br>
<span class="quotelev1">&gt; notify the sender and delete this e-mail message from your computer.
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="2774.php">Pak Lui: "Re: [OMPI users] signal handling"</a>
<li><strong>Previous message:</strong> <a href="2772.php">Michael Epitropakis: "[OMPI users] Error in MPI_Unpack --- MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>In reply to:</strong> <a href="2771.php">Olesen, Mark: "[OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2775.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>Reply:</strong> <a href="2775.php">Reuti: "Re: [OMPI users] signal handling"</a>
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
