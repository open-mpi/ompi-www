<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 12 15:23:01 2007" -->
<!-- isoreceived="20070312192301" -->
<!-- sent="Mon, 12 Mar 2007 15:22:51 -0400" -->
<!-- isosent="20070312192251" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] signal handling" -->
<!-- id="45F5A88B.9090505_at_Sun.COM" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-12 15:22:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2775.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>Previous message:</strong> <a href="2773.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<li><strong>In reply to:</strong> <a href="2771.php">Olesen, Mark: "[OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2777.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>Reply:</strong> <a href="2777.php">Reuti: "Re: [OMPI users] signal handling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mark,
<br>
<p>Olesen, Mark wrote:
<br>
<span class="quotelev1">&gt; I'm testing openmpi 1.2rc1 with GridEngine 6.0u9 and ran into interesting
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
<p>Hmm, this is interesting. I just tried using the -notify on my sample 
<br>
batch job but I wasn't able to reproduce on Solaris. I tried sending a 
<br>
USR2 signal and that kills all of the child and mpirun exits.
<br>
<p>Usually when the child processes aren't started up properly, there is a 
<br>
high chance that the qrsh or orte daemon is not started.
<br>
<p>% qsub -notify start-qsub.tcsh
<br>
Your job 1277 (&quot;job&quot;) has been submitted
<br>
% kill -USR2 `pgrep orterun`
<br>
% more job.*1278
<br>
::::::::::::::
<br>
job.e1278
<br>
::::::::::::::
<br>
mpirun: Forwarding signal 17 to jobmpirun noticed that job rank 0 with 
<br>
PID 12562 on node burl-ct-v440-5 exited on signal 17 (User Signal 2).
<br>
::::::::::::::
<br>
job.o1278
<br>
::::::::::::::
<br>
Warning: no access to tty (Bad file number).
<br>
Thus no job control in this shell.
<br>
Sun Microsystems Inc.   SunOS 5.10      Generic January 2005
<br>
2 additional processes aborted (not shown)
<br>
<p><p><span class="quotelev1">&gt; 
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
<p>Is there a way you can print the stack on the mpirun, to see if it's 
<br>
waiting for something?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /mark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This e-mail message and any attachments may contain legally privileged, confidential or proprietary Information, or information otherwise protected by law of ArvinMeritor, Inc., its affiliates, or third parties. This notice serves as marking of its &#233;&#188;&#142;onfidential&#227;&#131;&#187;status as defined in any confidentiality agreements concerning the sender and recipient. If you are not the intended recipient(s), or the employee or agent responsible for delivery of this message to the intended recipient(s), you are hereby notified that any dissemination, distribution or copying of this e-mail message is strictly prohibited. If you have received this message in error, please immediately notify the sender and delete this e-mail message from your computer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2775.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>Previous message:</strong> <a href="2773.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<li><strong>In reply to:</strong> <a href="2771.php">Olesen, Mark: "[OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2777.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>Reply:</strong> <a href="2777.php">Reuti: "Re: [OMPI users] signal handling"</a>
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
