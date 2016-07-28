<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 12 15:38:39 2007" -->
<!-- isoreceived="20070312193839" -->
<!-- sent="Mon, 12 Mar 2007 20:38:28 +0100" -->
<!-- isosent="20070312193828" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] signal handling" -->
<!-- id="30615485-4689-44E6-9808-AE808343B527_at_staff.uni-marburg.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="45F5A88B.9090505_at_Sun.COM" -->
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
<strong>Date:</strong> 2007-03-12 15:38:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2778.php">Michael: "[OMPI users] LSF &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2776.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<li><strong>In reply to:</strong> <a href="2774.php">Pak Lui: "Re: [OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2785.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 12.03.2007 um 20:22 schrieb Pak Lui:
<br>
<p><span class="quotelev1">&gt; Hi Mark,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Olesen, Mark wrote:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm, this is interesting. I just tried using the -notify on my sample
</span><br>
<span class="quotelev1">&gt; batch job but I wasn't able to reproduce on Solaris. I tried sending a
</span><br>
<span class="quotelev1">&gt; USR2 signal and that kills all of the child and mpirun exits.
</span><br>
<p>Isn't on Solaris the additonal group ID used to determine the  
<br>
processes to signal, but default on Linux is the processgroup (unless  
<br>
otherwise configured in the SGE config)?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Usually when the child processes aren't started up properly, there  
</span><br>
<span class="quotelev1">&gt; is a
</span><br>
<span class="quotelev1">&gt; high chance that the qrsh or orte daemon is not started.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % qsub -notify start-qsub.tcsh
</span><br>
<span class="quotelev1">&gt; Your job 1277 (&quot;job&quot;) has been submitted
</span><br>
<span class="quotelev1">&gt; % kill -USR2 `pgrep orterun`
</span><br>
<span class="quotelev1">&gt; % more job.*1278
</span><br>
<span class="quotelev1">&gt; ::::::::::::::
</span><br>
<span class="quotelev1">&gt; job.e1278
</span><br>
<span class="quotelev1">&gt; ::::::::::::::
</span><br>
<span class="quotelev1">&gt; mpirun: Forwarding signal 17 to jobmpirun noticed that job rank 0 with
</span><br>
<span class="quotelev1">&gt; PID 12562 on node burl-ct-v440-5 exited on signal 17 (User Signal 2).
</span><br>
<span class="quotelev1">&gt; ::::::::::::::
</span><br>
<span class="quotelev1">&gt; job.o1278
</span><br>
<span class="quotelev1">&gt; ::::::::::::::
</span><br>
<span class="quotelev1">&gt; Warning: no access to tty (Bad file number).
</span><br>
<span class="quotelev1">&gt; Thus no job control in this shell.
</span><br>
<span class="quotelev1">&gt; Sun Microsystems Inc.   SunOS 5.10      Generic January 2005
</span><br>
<span class="quotelev1">&gt; 2 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way you can print the stack on the mpirun, to see if it's
</span><br>
<span class="quotelev1">&gt; waiting for something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /mark
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This e-mail message and any attachments may contain legally  
</span><br>
<span class="quotelev2">&gt;&gt; privileged, confidential or proprietary Information, or  
</span><br>
<span class="quotelev2">&gt;&gt; information otherwise protected by law of ArvinMeritor, Inc., its  
</span><br>
<span class="quotelev2">&gt;&gt; affiliates, or third parties. This notice serves as marking of  
</span><br>
<span class="quotelev2">&gt;&gt; its &#233;&#188;&#142;onfidential&#227;&#131;&#187;status as defined in any confidentiality  
</span><br>
<span class="quotelev2">&gt;&gt; agreements concerning the sender and recipient. If you are not the  
</span><br>
<span class="quotelev2">&gt;&gt; intended recipient(s), or the employee or agent responsible for  
</span><br>
<span class="quotelev2">&gt;&gt; delivery of this message to the intended recipient(s), you are  
</span><br>
<span class="quotelev2">&gt;&gt; hereby notified that any dissemination, distribution or copying of  
</span><br>
<span class="quotelev2">&gt;&gt; this e-mail message is strictly prohibited. If you have received  
</span><br>
<span class="quotelev2">&gt;&gt; this message in error, please immediately notify the sender and  
</span><br>
<span class="quotelev2">&gt;&gt; delete this e-mail message from your computer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ---
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Pak Lui
</span><br>
<span class="quotelev1">&gt; pak.lui_at_[hidden]
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
<li><strong>Next message:</strong> <a href="2778.php">Michael: "[OMPI users] LSF &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2776.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<li><strong>In reply to:</strong> <a href="2774.php">Pak Lui: "Re: [OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2785.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
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
