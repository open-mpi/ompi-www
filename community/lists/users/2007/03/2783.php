<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 12 16:29:07 2007" -->
<!-- isoreceived="20070312202907" -->
<!-- sent="Mon, 12 Mar 2007 14:29:01 -0600" -->
<!-- isosent="20070312202901" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] signal handling" -->
<!-- id="C21B142D.1FB1%rhc_at_lanl.gov" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AB3AB70E-EE3B-4B7F-8168-122340F45063_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2007-03-12 16:29:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2784.php">Brian Powell: "[OMPI users] Any Known Incompatibilities with ifort+gcc on MacOSX/Intel?"</a>
<li><strong>Previous message:</strong> <a href="2782.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>In reply to:</strong> <a href="2782.php">Reuti: "Re: [OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2789.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>Reply:</strong> <a href="2789.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>Reply:</strong> <a href="2790.php">Reuti: "Re: [OMPI users] signal handling (part 2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/12/07 2:18 PM, &quot;Reuti&quot; &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 12.03.2007 um 20:36 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ORTE propagates the signal to the application processes, but the ORTE
</span><br>
<span class="quotelev2">&gt;&gt; daemons never actually look at the signal themselves (looks just
</span><br>
<span class="quotelev2">&gt;&gt; like a
</span><br>
<span class="quotelev2">&gt;&gt; message to them). So I'm a little puzzled by that error message
</span><br>
<span class="quotelev2">&gt;&gt; about the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;daemon received signal 12&quot; - I suspect that's just a misleading
</span><br>
<span class="quotelev2">&gt;&gt; message
</span><br>
<span class="quotelev2">&gt;&gt; that was supposed to indicate that a daemon was given a signal to
</span><br>
<span class="quotelev2">&gt;&gt; pass on.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just to clarify: the daemons are moved out of your initial process
</span><br>
<span class="quotelev2">&gt;&gt; group to
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this still the case also in SGE mode? It was the reason why I
</span><br>
<span class="quotelev1">&gt; never wrote a Howto for a Tight Integration under SGE. Instead I
</span><br>
<span class="quotelev1">&gt; looked forward for the final 1.2 with full SGE support.
</span><br>
<p>Well, that's a good question - the daemons explicitly do re-set their
<br>
process group, so unless SGE prevents that somehow (or does something so
<br>
that it doesn't separate the daemon from the console signals), then it
<br>
should still be true.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And: this might be odd under SGE. I must admit, that I didn't have
</span><br>
<span class="quotelev1">&gt; had the time up to play with OpenMPI 1.2-beta for the Tight
</span><br>
<span class="quotelev1">&gt; Integration, but it sounds to me like (under Linux) the orte-daemons
</span><br>
<span class="quotelev1">&gt; could survive although the job was already killed (by processgroup),
</span><br>
<span class="quotelev1">&gt; as the final stop/kill can't be caught and forwarded.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll check this ASAP with 1.2-beta. I have only access to Linux
</span><br>
<span class="quotelev1">&gt; clusters.
</span><br>
<p>We haven't seen a problem, though that doesn't mean it can't exist. Mpirun
<br>
traps stop/kill specifically for that reason, so I'm not sure why it
<br>
wouldn't work. Let me know what you find out.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But now we are going beyond Mark's initial problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; avoid seeing any signals from your terminal. When you issue a
</span><br>
<span class="quotelev2">&gt;&gt; signal, mpirun
</span><br>
<span class="quotelev2">&gt;&gt; picks it up and forwards it to your application processes via the ORTE
</span><br>
<span class="quotelev2">&gt;&gt; daemons - the ORTE daemons, however, do *not* look at that signal
</span><br>
<span class="quotelev2">&gt;&gt; but just
</span><br>
<span class="quotelev2">&gt;&gt; pass it along.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As for timing, all we do is pass STOP to the OpenMPI application
</span><br>
<span class="quotelev2">&gt;&gt; process -
</span><br>
<span class="quotelev2">&gt;&gt; it's up to the local system as to what happens when a &quot;kill -STOP&quot; is
</span><br>
<span class="quotelev2">&gt;&gt; issued. It was always my impression that the system stopped process
</span><br>
<span class="quotelev2">&gt;&gt; execution immediately under that signal, but with some allowance
</span><br>
<span class="quotelev2">&gt;&gt; for the old
</span><br>
<span class="quotelev2">&gt;&gt; kernel vs user space issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Once all the processes have terminated, mpirun tells the daemons to
</span><br>
<span class="quotelev2">&gt;&gt; go ahead
</span><br>
<span class="quotelev2">&gt;&gt; and exit. That's the only way the daemons get terminated in this
</span><br>
<span class="quotelev2">&gt;&gt; procedure.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you tell us something about your system? Is this running under
</span><br>
<span class="quotelev2">&gt;&gt; Linux,
</span><br>
<span class="quotelev2">&gt;&gt; what kind of OS, how was OpenMPI configured, etc?
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3/12/07 1:26 PM, &quot;Reuti&quot; &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 12.03.2007 um 19:55 schrieb Ralph Castain:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'll have to look into it - I suspect this is simply an erroneous
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and that no daemon is actually being started.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not entirely sure I understand what's happening, though, in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are you saying that mpirun starts some number of application
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run merrily along, and then qsub sends out USR1/2 signals followed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; by STOP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and then KILL in an effort to abort the job? So the application
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; don't normally terminate, but instead are killed via these signals?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you specify -notify in SGE with the qsub, then jobs are warned by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the sge_shepered (parent if the job) during execution, so that they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could perfom some proper shutdown action, before they are really
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stopped/killed:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for suspend: USR1 -wait-defined-time- STOP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for kill: USR2 -wait-defined-time- KILL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Worth to be noted: the signals are sent to the complete processgroup
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the job created by the jobscript and mpirun, but not to each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon which is created by the internal qrsh on any of the slave
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes! This should be orte's duty.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Question is also: are OpenMPI jobs surviving a STOP for some time at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all, or will there be timing issues due to communication timeouts?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTH - Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just want to ensure I understand the scenario here as that is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; obviously unique to GE.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 3/12/07 9:42 AM, &quot;Olesen, Mark&quot; &lt;Mark.Olesen_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm testing openmpi 1.2rc1 with GridEngine 6.0u9 and ran into
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; interesting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; behaviour when using the qsub -notify option.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; With -notify, USR1 and USR2 are sent X seconds before sending STOP
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and KILL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; signals, respectively.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When the USR2 signal is sent to the process group with the mpirun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process, I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; receive an error message about not being able to start a daemon:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun: Forwarding signal 12 to job[dealc12:18212] ERROR: A daemon
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on node
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dealc12 failed to start as expected.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [dealc12:18212] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [dealc12:18212] ERROR: the 'qstat -t' command on the Grid Engine
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tasks.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [dealc12:18212] ERROR: If the problem persists, please restart the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [dealc12:18212] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [dealc12:18212] The daemon received a signal 12.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [dealc12:18212] ERROR: A daemon on node dealc20 failed to start as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; expected.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [dealc12:18212] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [dealc12:18212] ERROR: the 'qstat -t' command on the Grid Engine
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tasks.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [dealc12:18212] ERROR: If the problem persists, please restart the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [dealc12:18212] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [dealc12:18212] The daemon received a signal 12.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The job eventually stops, but the mpirun process itself continues
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to live
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (just the ppid changes).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; According to orte(1)/Signal Propagation, USR1 and USR2 should be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; propagated
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to all processes in the job (which seems to be happening), but why
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; daemon start being attempted and the mpirun not being stopped?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /mark
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This e-mail message and any attachments may contain legally
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; privileged,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; confidential or proprietary Information, or information otherwise
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; protected by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; law of ArvinMeritor, Inc., its affiliates, or third parties. This
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; notice
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; serves as marking of its &#226;&#128;&#158;Confidential&#226;&#128;&#176; status as defined in any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; confidentiality agreements concerning the sender and recipient. If
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you are not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the intended recipient(s), or the employee or agent responsible
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for delivery
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of this message to the intended recipient(s), you are hereby
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; notified that any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dissemination, distribution or copying of this e-mail message is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; strictly
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; prohibited. If you have received this message in error, please
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; immediately
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; notify the sender and delete this e-mail message from your
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; computer.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="2784.php">Brian Powell: "[OMPI users] Any Known Incompatibilities with ifort+gcc on MacOSX/Intel?"</a>
<li><strong>Previous message:</strong> <a href="2782.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>In reply to:</strong> <a href="2782.php">Reuti: "Re: [OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2789.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>Reply:</strong> <a href="2789.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>Reply:</strong> <a href="2790.php">Reuti: "Re: [OMPI users] signal handling (part 2)"</a>
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
