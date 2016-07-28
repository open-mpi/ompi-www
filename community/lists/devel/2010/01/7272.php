<?
$subject_val = "[OMPI devel] RFC: Suspend/resume enhancements";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  4 13:50:09 2010" -->
<!-- isoreceived="20100104185009" -->
<!-- sent="Mon, 04 Jan 2010 13:50:03 -0500" -->
<!-- isosent="20100104185003" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Suspend/resume enhancements" -->
<!-- id="6D6B71CA-DE94-4E4C-ACA3-7172087DCCB5_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Suspend/resume enhancements<br>
<strong>From:</strong> Iain Bason (<em>Iain.Bason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-04 13:50:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7273.php">Ralph Castain: "Re: [OMPI devel] RFC: Suspend/resume enhancements"</a>
<li><strong>Previous message:</strong> <a href="7271.php">Eugene Loh: "Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7273.php">Ralph Castain: "Re: [OMPI devel] RFC: Suspend/resume enhancements"</a>
<li><strong>Reply:</strong> <a href="7273.php">Ralph Castain: "Re: [OMPI devel] RFC: Suspend/resume enhancements"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Enhance the orte_forward_job_control MCA flag by:
<br>
<p>&nbsp;&nbsp;&nbsp;1. Forwarding signals to descendants of launched processes; and
<br>
&nbsp;&nbsp;&nbsp;2. Forwarding signals received before process launch time.
<br>
<p>(The orte_forward_job_control flag arranges for SIGTSTP and SIGCONT to
<br>
be forwarded.  This allows a resource manager like Sun Grid Engine to
<br>
suspend a job by sending a SIGTSTP signal to mpirun.)
<br>
<p>WHY: Some programs do &quot;mpirun prog.sh&quot;, and prog.sh starts multiple
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;processes.  Among these programs is weather prediction code from
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the UK Met Office.  This code is used at multiple sites around
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the world.  Since other MPI implementations* forward job control
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;signals this way, we risk having OMPI excluded unless we
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implement this feature.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[*I have personally verified that Intel MPI does it.  I have
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;heard that Scali does it.  I don't know about the others.]
<br>
<p>HOW: To allow signals to be sent to descendants of launched processes,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use the setpgrp() system call to create a new process group for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;each launched process.  Then send the signal to the process group
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rather than to the process.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To allow signals received before process launch time to be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;delivered when the processes are launched, add a job state flag
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to indicate whether the job is suspended.  Check this flag at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;launch time, and send a signal immediately after launching.
<br>
<p>WHERE: <a href="http://bitbucket.org/igb/ompi-job-control/">http://bitbucket.org/igb/ompi-job-control/</a>
<br>
<p>WHEN: We would like to integrate this into the 1.5 branch.
<br>
<p>TIMEOUT: COB Tuesday, January 19, 2010.
<br>
<p>Q&amp;A:
<br>
<p>&nbsp;&nbsp;&nbsp;1. Will this work for Windows?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I don't know what would be required to make this work for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Windows.  The current implementation is for Unix only.
<br>
<p>&nbsp;&nbsp;&nbsp;2. Will this work for interactive ssh/rsh PLM?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It will not work any better or worse than the current
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implementation.  One can suspend a job by typing Ctl-Z at a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;terminal, but the mpirun process itself never gets suspended.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;That means that in order to wake the job up one has to open a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;different terminal to send a SIGCONT to the mpirun process.  It
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;would be desirable to fix this problem, but as this feature is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intended for use with resource managers like SGE it isn't
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;essential to make it work smoothly in an interactive shell.
<br>
<p>&nbsp;&nbsp;&nbsp;3. Will the creation of new process groups prohibit SGE from killing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a job properly?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.  SGE has a mechanism to ensure that all a job's processes are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;killed, regardless of whether they create new process groups.
<br>
<p>&nbsp;&nbsp;&nbsp;4. What about other resource managers?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Using this flag with another resource manager might cause
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;problems.  However, the flag may not be necessary with other
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;resource managers.  (If the RM can send SIGSTOP to all the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;processes on all the nodes running a job, then mpirun doesn't
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;need to forward job control signals.)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;According to the SLURM documentation, plugins are available
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(e.g., linuxproc) that would allow reliable termination of all a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;job's processes, regardless of whether they create new process
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;groups.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<a href="https://computing.llnl.gov/linux/slurm/proctrack_plugins.html">https://computing.llnl.gov/linux/slurm/proctrack_plugins.html</a>]
<br>
<p>&nbsp;&nbsp;&nbsp;5. Will the creation of new process groups prevent mpirun from
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shutting down the job successfully (e.g., when it receives a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIGTERM)?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.  I have tested jobs both with and without calls to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_Spawn, and all are properly terminated.
<br>
<p>&nbsp;&nbsp;&nbsp;6. Can we avoid creating new process groups by just signaling the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;launched process plus any process that calls MPI_Init?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.  The shell script might launch other background processes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;that the user wants to suspend.  (The Met Office code does this.)
<br>
<p>&nbsp;&nbsp;&nbsp;7. Can we avoid creating new process groups by having mpirun and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orted send SIGTSTP to their own process groups, and ignore the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;signal that they send to themselves?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.  First, mpirun might be in the same process group as other
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun processes.  Those mpiruns could get into an infinite loop
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;forwarding SIGTSTPs to one another.  Second, although the default
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;action on receipt of SIGTSTP is to suspend the process, that only
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;happens if the process is not in an orphaned process group.  SGE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;starts processes in orphaned process groups.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7273.php">Ralph Castain: "Re: [OMPI devel] RFC: Suspend/resume enhancements"</a>
<li><strong>Previous message:</strong> <a href="7271.php">Eugene Loh: "Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7273.php">Ralph Castain: "Re: [OMPI devel] RFC: Suspend/resume enhancements"</a>
<li><strong>Reply:</strong> <a href="7273.php">Ralph Castain: "Re: [OMPI devel] RFC: Suspend/resume enhancements"</a>
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
