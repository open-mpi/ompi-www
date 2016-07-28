<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 13 11:12:01 2007" -->
<!-- isoreceived="20070313151201" -->
<!-- sent="Tue, 13 Mar 2007 16:11:51 +0100" -->
<!-- isosent="20070313151151" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] signal handling" -->
<!-- id="BEAC166D-1945-4C66-91B4-2BA576C7C07A_at_staff.uni-marburg.de" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C21B8C46.1FD8%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-13 11:11:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2796.php">Renato Golin: "Re: [OMPI users] LSF &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2794.php">David Minor: "Re: [OMPI users] Orted freezes on launch of application"</a>
<li><strong>In reply to:</strong> <a href="2785.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 13.03.2007 um 06:01 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; I've been letting this rattle around in my head some more, and  
</span><br>
<span class="quotelev1">&gt; *may* have
</span><br>
<span class="quotelev1">&gt; come up with an idea of what *might* be going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the GE environment, qsub only launches the daemons - the daemons  
</span><br>
<span class="quotelev1">&gt; are the
</span><br>
<span class="quotelev1">&gt; ones that actually &quot;launch&quot; your local application processes. If qsub
</span><br>
<span class="quotelev1">&gt; -notify uses qsub's knowledge of the processes being executed, then it
</span><br>
<span class="quotelev1">&gt; *might* be tempted to send the USR1/2 signals directly to the  
</span><br>
<span class="quotelev1">&gt; daemons as
</span><br>
<span class="quotelev1">&gt; well as mpirun.
</span><br>
<p>Only the processgroup with (jobscript + mpirun + kids) should get it  
<br>
on the headnode of the parallel job. Like with the sigstop. Otherwise  
<br>
a suspend of parallel jobs would already be built into SGE.
<br>
<p><span class="quotelev1">&gt; In that case, it might be that our daemon's call to separate
</span><br>
<span class="quotelev1">&gt; from the process group isn't adequate to break that qsub connection  
</span><br>
<span class="quotelev1">&gt; - we may
</span><br>
<span class="quotelev1">&gt; be separating from the Linux/Solaris process group, but not from  
</span><br>
<span class="quotelev1">&gt; qsub's list
</span><br>
<span class="quotelev1">&gt; of executing processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IF that is true, then this could cause some strange behavior. I  
</span><br>
<span class="quotelev1">&gt; honestly
</span><br>
<span class="quotelev1">&gt; have no idea what a USR1/2 signal hitting the daemon would do - we  
</span><br>
<span class="quotelev1">&gt; don't try
</span><br>
<span class="quotelev1">&gt; to trap that signal in the daemon, so it likely would be ignored.
</span><br>
<p>The default is to terminate for usr1/2 AFAIK.
<br>
<p><span class="quotelev1">&gt; However,
</span><br>
<span class="quotelev1">&gt; it is possible that something unusual could occur (though why it  
</span><br>
<span class="quotelev1">&gt; would try
</span><br>
<span class="quotelev1">&gt; to spawn another daemon is beyond me).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can assure you, though, that the daemon really won't like getting  
</span><br>
<span class="quotelev1">&gt; a STOP
</span><br>
<span class="quotelev1">&gt; or KILL sent directly to it - this definitely would cause shutdown  
</span><br>
<span class="quotelev1">&gt; issues
</span><br>
<p>They get a kill for sure, but no stop.
<br>
<p>Do you have access to a SGE cluster?
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt; with respect to cleanup and possibly cause mpirun and/or your  
</span><br>
<span class="quotelev1">&gt; application to
</span><br>
<span class="quotelev1">&gt; &quot;hang&quot;. Again, we don't trap those signals in the daemon (only in  
</span><br>
<span class="quotelev1">&gt; mpirun
</span><br>
<span class="quotelev1">&gt; itself). When mpirun traps them, it sends an &quot;abort&quot; message to the  
</span><br>
<span class="quotelev1">&gt; daemons
</span><br>
<span class="quotelev1">&gt; so they can cleanly exit (terminating their local procs along the  
</span><br>
<span class="quotelev1">&gt; way), thus
</span><br>
<span class="quotelev1">&gt; bringing the system down in an orderly fashion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, IF this is happening, then it could be that the application  
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev1">&gt; are getting signals from two sources: (a) as part of the daemon's  
</span><br>
<span class="quotelev1">&gt; local
</span><br>
<span class="quotelev1">&gt; process group on the node (since the daemon fork/exec's the local  
</span><br>
<span class="quotelev1">&gt; procs),
</span><br>
<span class="quotelev1">&gt; and (b) propagated via the daemons by comm from mpirun. This could  
</span><br>
<span class="quotelev1">&gt; cause
</span><br>
<span class="quotelev1">&gt; some interesting race conditions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, I think someone more familiar with the peculiarities of  
</span><br>
<span class="quotelev1">&gt; qsub -notify
</span><br>
<span class="quotelev1">&gt; will have to step in here. If my explanation is correct, then we  
</span><br>
<span class="quotelev1">&gt; likely have
</span><br>
<span class="quotelev1">&gt; a problem that needs to be addressed for the GE environment.  
</span><br>
<span class="quotelev1">&gt; Otherwise,
</span><br>
<span class="quotelev1">&gt; there may be something else at work here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/12/07 9:42 AM, &quot;Olesen, Mark&quot; &lt;Mark.Olesen_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm testing openmpi 1.2rc1 with GridEngine 6.0u9 and ran into  
</span><br>
<span class="quotelev2">&gt;&gt; interesting
</span><br>
<span class="quotelev2">&gt;&gt; behaviour when using the qsub -notify option.
</span><br>
<span class="quotelev2">&gt;&gt; With -notify, USR1 and USR2 are sent X seconds before sending STOP  
</span><br>
<span class="quotelev2">&gt;&gt; and KILL
</span><br>
<span class="quotelev2">&gt;&gt; signals, respectively.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When the USR2 signal is sent to the process group with the mpirun  
</span><br>
<span class="quotelev2">&gt;&gt; process, I
</span><br>
<span class="quotelev2">&gt;&gt; receive an error message about not being able to start a daemon:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: Forwarding signal 12 to job[dealc12:18212] ERROR: A daemon  
</span><br>
<span class="quotelev2">&gt;&gt; on node
</span><br>
<span class="quotelev2">&gt;&gt; dealc12 failed to start as expected.
</span><br>
<span class="quotelev2">&gt;&gt; [dealc12:18212] ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt;&gt; [dealc12:18212] ERROR: the 'qstat -t' command on the Grid Engine  
</span><br>
<span class="quotelev2">&gt;&gt; tasks.
</span><br>
<span class="quotelev2">&gt;&gt; [dealc12:18212] ERROR: If the problem persists, please restart the
</span><br>
<span class="quotelev2">&gt;&gt; [dealc12:18212] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev2">&gt;&gt; [dealc12:18212] The daemon received a signal 12.
</span><br>
<span class="quotelev2">&gt;&gt; [dealc12:18212] ERROR: A daemon on node dealc20 failed to start as  
</span><br>
<span class="quotelev2">&gt;&gt; expected.
</span><br>
<span class="quotelev2">&gt;&gt; [dealc12:18212] ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt;&gt; [dealc12:18212] ERROR: the 'qstat -t' command on the Grid Engine  
</span><br>
<span class="quotelev2">&gt;&gt; tasks.
</span><br>
<span class="quotelev2">&gt;&gt; [dealc12:18212] ERROR: If the problem persists, please restart the
</span><br>
<span class="quotelev2">&gt;&gt; [dealc12:18212] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev2">&gt;&gt; [dealc12:18212] The daemon received a signal 12.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The job eventually stops, but the mpirun process itself continues  
</span><br>
<span class="quotelev2">&gt;&gt; to live
</span><br>
<span class="quotelev2">&gt;&gt; (just the ppid changes).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; According to orte(1)/Signal Propagation, USR1 and USR2 should be  
</span><br>
<span class="quotelev2">&gt;&gt; propagated
</span><br>
<span class="quotelev2">&gt;&gt; to all processes in the job (which seems to be happening), but why  
</span><br>
<span class="quotelev2">&gt;&gt; is a
</span><br>
<span class="quotelev2">&gt;&gt; daemon start being attempted and the mpirun not being stopped?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /mark
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This e-mail message and any attachments may contain legally  
</span><br>
<span class="quotelev2">&gt;&gt; privileged,
</span><br>
<span class="quotelev2">&gt;&gt; confidential or proprietary Information, or information otherwise  
</span><br>
<span class="quotelev2">&gt;&gt; protected by
</span><br>
<span class="quotelev2">&gt;&gt; law of ArvinMeritor, Inc., its affiliates, or third parties. This  
</span><br>
<span class="quotelev2">&gt;&gt; notice
</span><br>
<span class="quotelev2">&gt;&gt; serves as marking of its &#132;Confidential&#137; status as defined in any
</span><br>
<span class="quotelev2">&gt;&gt; confidentiality agreements concerning the sender and recipient. If  
</span><br>
<span class="quotelev2">&gt;&gt; you are not
</span><br>
<span class="quotelev2">&gt;&gt; the intended recipient(s), or the employee or agent responsible  
</span><br>
<span class="quotelev2">&gt;&gt; for delivery
</span><br>
<span class="quotelev2">&gt;&gt; of this message to the intended recipient(s), you are hereby  
</span><br>
<span class="quotelev2">&gt;&gt; notified that any
</span><br>
<span class="quotelev2">&gt;&gt; dissemination, distribution or copying of this e-mail message is  
</span><br>
<span class="quotelev2">&gt;&gt; strictly
</span><br>
<span class="quotelev2">&gt;&gt; prohibited. If you have received this message in error, please  
</span><br>
<span class="quotelev2">&gt;&gt; immediately
</span><br>
<span class="quotelev2">&gt;&gt; notify the sender and delete this e-mail message from your computer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="2796.php">Renato Golin: "Re: [OMPI users] LSF &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2794.php">David Minor: "Re: [OMPI users] Orted freezes on launch of application"</a>
<li><strong>In reply to:</strong> <a href="2785.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
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
