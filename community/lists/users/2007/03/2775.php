<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 12 15:26:59 2007" -->
<!-- isoreceived="20070312192659" -->
<!-- sent="Mon, 12 Mar 2007 20:26:45 +0100" -->
<!-- isosent="20070312192645" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] signal handling" -->
<!-- id="E21E3E67-3EF7-4DDA-9074-1219C4E20EF5_at_staff.uni-marburg.de" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C21AFE28.1F8F%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-03-12 15:26:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2776.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<li><strong>Previous message:</strong> <a href="2774.php">Pak Lui: "Re: [OMPI users] signal handling"</a>
<li><strong>In reply to:</strong> <a href="2773.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2776.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<li><strong>Reply:</strong> <a href="2776.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 12.03.2007 um 19:55 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; I'll have to look into it - I suspect this is simply an erroneous  
</span><br>
<span class="quotelev1">&gt; message
</span><br>
<span class="quotelev1">&gt; and that no daemon is actually being started.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not entirely sure I understand what's happening, though, in  
</span><br>
<span class="quotelev1">&gt; your code.
</span><br>
<span class="quotelev1">&gt; Are you saying that mpirun starts some number of application  
</span><br>
<span class="quotelev1">&gt; processes which
</span><br>
<span class="quotelev1">&gt; run merrily along, and then qsub sends out USR1/2 signals followed  
</span><br>
<span class="quotelev1">&gt; by STOP
</span><br>
<span class="quotelev1">&gt; and then KILL in an effort to abort the job? So the application  
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev1">&gt; don't normally terminate, but instead are killed via these signals?
</span><br>
<p>If you specify -notify in SGE with the qsub, then jobs are warned by  
<br>
the sge_shepered (parent if the job) during execution, so that they  
<br>
could perfom some proper shutdown action, before they are really  
<br>
stopped/killed:
<br>
<p>for suspend: USR1 -wait-defined-time- STOP
<br>
for kill: USR2 -wait-defined-time- KILL
<br>
<p>Worth to be noted: the signals are sent to the complete processgroup  
<br>
of the job created by the jobscript and mpirun, but not to each  
<br>
daemon which is created by the internal qrsh on any of the slave  
<br>
nodes! This should be orte's duty.
<br>
<p>Question is also: are OpenMPI jobs surviving a STOP for some time at  
<br>
all, or will there be timing issues due to communication timeouts?
<br>
<p>HTH - Reuti
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just want to ensure I understand the scenario here as that is  
</span><br>
<span class="quotelev1">&gt; something
</span><br>
<span class="quotelev1">&gt; obviously unique to GE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
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
<li><strong>Next message:</strong> <a href="2776.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<li><strong>Previous message:</strong> <a href="2774.php">Pak Lui: "Re: [OMPI users] signal handling"</a>
<li><strong>In reply to:</strong> <a href="2773.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2776.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<li><strong>Reply:</strong> <a href="2776.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
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
