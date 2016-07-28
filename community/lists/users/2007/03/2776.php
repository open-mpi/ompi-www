<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 12 15:36:09 2007" -->
<!-- isoreceived="20070312193609" -->
<!-- sent="Mon, 12 Mar 2007 13:36:02 -0600" -->
<!-- isosent="20070312193602" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] signal handling" -->
<!-- id="C21B07C2.1F9F%rhc_at_lanl.gov" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E21E3E67-3EF7-4DDA-9074-1219C4E20EF5_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2007-03-12 15:36:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2777.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>Previous message:</strong> <a href="2775.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>In reply to:</strong> <a href="2775.php">Reuti: "Re: [OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2780.php">Ben Allan: "Re: [OMPI users] signal handling"</a>
<li><strong>Reply:</strong> <a href="2780.php">Ben Allan: "Re: [OMPI users] signal handling"</a>
<li><strong>Reply:</strong> <a href="2782.php">Reuti: "Re: [OMPI users] signal handling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ORTE propagates the signal to the application processes, but the ORTE
<br>
daemons never actually look at the signal themselves (looks just like a
<br>
message to them). So I'm a little puzzled by that error message about the
<br>
&quot;daemon received signal 12&quot; - I suspect that's just a misleading message
<br>
that was supposed to indicate that a daemon was given a signal to pass on.
<br>
<p>Just to clarify: the daemons are moved out of your initial process group to
<br>
avoid seeing any signals from your terminal. When you issue a signal, mpirun
<br>
picks it up and forwards it to your application processes via the ORTE
<br>
daemons - the ORTE daemons, however, do *not* look at that signal but just
<br>
pass it along.
<br>
<p>As for timing, all we do is pass STOP to the OpenMPI application process -
<br>
it's up to the local system as to what happens when a &quot;kill -STOP&quot; is
<br>
issued. It was always my impression that the system stopped process
<br>
execution immediately under that signal, but with some allowance for the old
<br>
kernel vs user space issue.
<br>
<p>Once all the processes have terminated, mpirun tells the daemons to go ahead
<br>
and exit. That's the only way the daemons get terminated in this procedure.
<br>
<p>Can you tell us something about your system? Is this running under Linux,
<br>
what kind of OS, how was OpenMPI configured, etc?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 3/12/07 1:26 PM, &quot;Reuti&quot; &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 12.03.2007 um 19:55 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll have to look into it - I suspect this is simply an erroneous
</span><br>
<span class="quotelev2">&gt;&gt; message
</span><br>
<span class="quotelev2">&gt;&gt; and that no daemon is actually being started.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not entirely sure I understand what's happening, though, in
</span><br>
<span class="quotelev2">&gt;&gt; your code.
</span><br>
<span class="quotelev2">&gt;&gt; Are you saying that mpirun starts some number of application
</span><br>
<span class="quotelev2">&gt;&gt; processes which
</span><br>
<span class="quotelev2">&gt;&gt; run merrily along, and then qsub sends out USR1/2 signals followed
</span><br>
<span class="quotelev2">&gt;&gt; by STOP
</span><br>
<span class="quotelev2">&gt;&gt; and then KILL in an effort to abort the job? So the application
</span><br>
<span class="quotelev2">&gt;&gt; processes
</span><br>
<span class="quotelev2">&gt;&gt; don't normally terminate, but instead are killed via these signals?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you specify -notify in SGE with the qsub, then jobs are warned by
</span><br>
<span class="quotelev1">&gt; the sge_shepered (parent if the job) during execution, so that they
</span><br>
<span class="quotelev1">&gt; could perfom some proper shutdown action, before they are really
</span><br>
<span class="quotelev1">&gt; stopped/killed:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for suspend: USR1 -wait-defined-time- STOP
</span><br>
<span class="quotelev1">&gt; for kill: USR2 -wait-defined-time- KILL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Worth to be noted: the signals are sent to the complete processgroup
</span><br>
<span class="quotelev1">&gt; of the job created by the jobscript and mpirun, but not to each
</span><br>
<span class="quotelev1">&gt; daemon which is created by the internal qrsh on any of the slave
</span><br>
<span class="quotelev1">&gt; nodes! This should be orte's duty.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Question is also: are OpenMPI jobs surviving a STOP for some time at
</span><br>
<span class="quotelev1">&gt; all, or will there be timing issues due to communication timeouts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH - Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just want to ensure I understand the scenario here as that is
</span><br>
<span class="quotelev2">&gt;&gt; something
</span><br>
<span class="quotelev2">&gt;&gt; obviously unique to GE.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3/12/07 9:42 AM, &quot;Olesen, Mark&quot; &lt;Mark.Olesen_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm testing openmpi 1.2rc1 with GridEngine 6.0u9 and ran into
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interesting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; behaviour when using the qsub -notify option.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With -notify, USR1 and USR2 are sent X seconds before sending STOP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and KILL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signals, respectively.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When the USR2 signal is sent to the process group with the mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; receive an error message about not being able to start a daemon:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun: Forwarding signal 12 to job[dealc12:18212] ERROR: A daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dealc12 failed to start as expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dealc12:18212] ERROR: There may be more information available from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dealc12:18212] ERROR: the 'qstat -t' command on the Grid Engine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tasks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dealc12:18212] ERROR: If the problem persists, please restart the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dealc12:18212] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dealc12:18212] The daemon received a signal 12.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dealc12:18212] ERROR: A daemon on node dealc20 failed to start as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dealc12:18212] ERROR: There may be more information available from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dealc12:18212] ERROR: the 'qstat -t' command on the Grid Engine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tasks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dealc12:18212] ERROR: If the problem persists, please restart the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dealc12:18212] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dealc12:18212] The daemon received a signal 12.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The job eventually stops, but the mpirun process itself continues
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to live
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (just the ppid changes).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; According to orte(1)/Signal Propagation, USR1 and USR2 should be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; propagated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to all processes in the job (which seems to be happening), but why
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon start being attempted and the mpirun not being stopped?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /mark
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This e-mail message and any attachments may contain legally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; privileged,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; confidential or proprietary Information, or information otherwise
</span><br>
<span class="quotelev3">&gt;&gt;&gt; protected by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; law of ArvinMeritor, Inc., its affiliates, or third parties. This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; notice
</span><br>
<span class="quotelev3">&gt;&gt;&gt; serves as marking of its &#226;&#128;&#158;Confidential&#226;&#128;&#176; status as defined in any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; confidentiality agreements concerning the sender and recipient. If
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you are not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the intended recipient(s), or the employee or agent responsible
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for delivery
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of this message to the intended recipient(s), you are hereby
</span><br>
<span class="quotelev3">&gt;&gt;&gt; notified that any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dissemination, distribution or copying of this e-mail message is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; strictly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prohibited. If you have received this message in error, please
</span><br>
<span class="quotelev3">&gt;&gt;&gt; immediately
</span><br>
<span class="quotelev3">&gt;&gt;&gt; notify the sender and delete this e-mail message from your computer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="2777.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>Previous message:</strong> <a href="2775.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>In reply to:</strong> <a href="2775.php">Reuti: "Re: [OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2780.php">Ben Allan: "Re: [OMPI users] signal handling"</a>
<li><strong>Reply:</strong> <a href="2780.php">Ben Allan: "Re: [OMPI users] signal handling"</a>
<li><strong>Reply:</strong> <a href="2782.php">Reuti: "Re: [OMPI users] signal handling"</a>
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
