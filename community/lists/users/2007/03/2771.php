<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 12 11:43:04 2007" -->
<!-- isoreceived="20070312154304" -->
<!-- sent="Mon, 12 Mar 2007 16:42:50 +0100" -->
<!-- isosent="20070312154250" -->
<!-- name="Olesen, Mark" -->
<!-- email="Mark.Olesen_at_[hidden]" -->
<!-- subject="[OMPI users] signal handling" -->
<!-- id="0DDE7F776936B04AA670C77F1F59A4D9018101BD_at_deaex001.arvinmeritor.com" -->
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
<strong>From:</strong> Olesen, Mark (<em>Mark.Olesen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-12 11:42:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2772.php">Michael Epitropakis: "[OMPI users] Error in MPI_Unpack --- MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>Previous message:</strong> <a href="2770.php">Jean-Christophe Mignot: "[OMPI users] running jobs on heteregenous clusters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2773.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<li><strong>Reply:</strong> <a href="2773.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<li><strong>Reply:</strong> <a href="2774.php">Pak Lui: "Re: [OMPI users] signal handling"</a>
<li><strong>Reply:</strong> <a href="2785.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm testing openmpi 1.2rc1 with GridEngine 6.0u9 and ran into interesting
<br>
behaviour when using the qsub -notify option.
<br>
With -notify, USR1 and USR2 are sent X seconds before sending STOP and KILL
<br>
signals, respectively.
<br>
<p>When the USR2 signal is sent to the process group with the mpirun process, I
<br>
receive an error message about not being able to start a daemon:
<br>
<p>mpirun: Forwarding signal 12 to job[dealc12:18212] ERROR: A daemon on node
<br>
dealc12 failed to start as expected.
<br>
[dealc12:18212] ERROR: There may be more information available from
<br>
[dealc12:18212] ERROR: the 'qstat -t' command on the Grid Engine tasks.
<br>
[dealc12:18212] ERROR: If the problem persists, please restart the
<br>
[dealc12:18212] ERROR: Grid Engine PE job
<br>
[dealc12:18212] The daemon received a signal 12.
<br>
[dealc12:18212] ERROR: A daemon on node dealc20 failed to start as expected.
<br>
[dealc12:18212] ERROR: There may be more information available from
<br>
[dealc12:18212] ERROR: the 'qstat -t' command on the Grid Engine tasks.
<br>
[dealc12:18212] ERROR: If the problem persists, please restart the
<br>
[dealc12:18212] ERROR: Grid Engine PE job
<br>
[dealc12:18212] The daemon received a signal 12.
<br>
<p>The job eventually stops, but the mpirun process itself continues to live
<br>
(just the ppid changes).
<br>
<p>According to orte(1)/Signal Propagation, USR1 and USR2 should be propagated
<br>
to all processes in the job (which seems to be happening), but why is a
<br>
daemon start being attempted and the mpirun not being stopped? 
<br>
<p>/mark
<br>
<p>This e-mail message and any attachments may contain legally privileged, confidential or proprietary Information, or information otherwise protected by law of ArvinMeritor, Inc., its affiliates, or third parties. This notice serves as marking of its &#147;Confidential&#148; status as defined in any confidentiality agreements concerning the sender and recipient. If you are not the intended recipient(s), or the employee or agent responsible for delivery of this message to the intended recipient(s), you are hereby notified that any dissemination, distribution or copying of this e-mail message is strictly prohibited. If you have received this message in error, please immediately notify the sender and delete this e-mail message from your computer.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2772.php">Michael Epitropakis: "[OMPI users] Error in MPI_Unpack --- MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>Previous message:</strong> <a href="2770.php">Jean-Christophe Mignot: "[OMPI users] running jobs on heteregenous clusters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2773.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<li><strong>Reply:</strong> <a href="2773.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<li><strong>Reply:</strong> <a href="2774.php">Pak Lui: "Re: [OMPI users] signal handling"</a>
<li><strong>Reply:</strong> <a href="2785.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
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
