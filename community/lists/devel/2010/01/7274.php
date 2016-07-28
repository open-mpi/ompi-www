<?
$subject_val = "Re: [OMPI devel] RFC: Suspend/resume enhancements";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  5 06:27:46 2010" -->
<!-- isoreceived="20100105112746" -->
<!-- sent="Tue, 05 Jan 2010 06:27:01 -0500" -->
<!-- isosent="20100105112701" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Suspend/resume enhancements" -->
<!-- id="4B432205.1070201_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E4D50538-EDAB-4B83-AF7A-EC1BDC89983F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Suspend/resume enhancements<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-05 06:27:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7275.php">Sylvain Jeaugey: "[OMPI devel] Thread safety levels"</a>
<li><strong>Previous message:</strong> <a href="7273.php">Ralph Castain: "Re: [OMPI devel] RFC: Suspend/resume enhancements"</a>
<li><strong>In reply to:</strong> <a href="7273.php">Ralph Castain: "Re: [OMPI devel] RFC: Suspend/resume enhancements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7363.php">Iain Bason: "Re: [OMPI devel] RFC: Suspend/resume enhancements"</a>
<li><strong>Reply:</strong> <a href="7363.php">Iain Bason: "Re: [OMPI devel] RFC: Suspend/resume enhancements"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This only happens when the orte_forward_job_control MCA flag is set to 1 
<br>
and the default is that it is set to 0.  Which I believe meets Ralph's 
<br>
criteria below.
<br>
<p>--td
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I don't have any issue with this so long as (a) it is -only- active when someone sets a specific MCA param requesting it, and (b) that flag is -not- set by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 4, 2010, at 11:50 AM, Iain Bason wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Enhance the orte_forward_job_control MCA flag by:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  1. Forwarding signals to descendants of launched processes; and
</span><br>
<span class="quotelev2">&gt;&gt;  2. Forwarding signals received before process launch time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (The orte_forward_job_control flag arranges for SIGTSTP and SIGCONT to
</span><br>
<span class="quotelev2">&gt;&gt; be forwarded.  This allows a resource manager like Sun Grid Engine to
</span><br>
<span class="quotelev2">&gt;&gt; suspend a job by sending a SIGTSTP signal to mpirun.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY: Some programs do &quot;mpirun prog.sh&quot;, and prog.sh starts multiple
</span><br>
<span class="quotelev2">&gt;&gt;     processes.  Among these programs is weather prediction code from
</span><br>
<span class="quotelev2">&gt;&gt;     the UK Met Office.  This code is used at multiple sites around
</span><br>
<span class="quotelev2">&gt;&gt;     the world.  Since other MPI implementations* forward job control
</span><br>
<span class="quotelev2">&gt;&gt;     signals this way, we risk having OMPI excluded unless we
</span><br>
<span class="quotelev2">&gt;&gt;     implement this feature.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     [*I have personally verified that Intel MPI does it.  I have
</span><br>
<span class="quotelev2">&gt;&gt;     heard that Scali does it.  I don't know about the others.]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HOW: To allow signals to be sent to descendants of launched processes,
</span><br>
<span class="quotelev2">&gt;&gt;     use the setpgrp() system call to create a new process group for
</span><br>
<span class="quotelev2">&gt;&gt;     each launched process.  Then send the signal to the process group
</span><br>
<span class="quotelev2">&gt;&gt;     rather than to the process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     To allow signals received before process launch time to be
</span><br>
<span class="quotelev2">&gt;&gt;     delivered when the processes are launched, add a job state flag
</span><br>
<span class="quotelev2">&gt;&gt;     to indicate whether the job is suspended.  Check this flag at
</span><br>
<span class="quotelev2">&gt;&gt;     launch time, and send a signal immediately after launching.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: <a href="http://bitbucket.org/igb/ompi-job-control/">http://bitbucket.org/igb/ompi-job-control/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: We would like to integrate this into the 1.5 branch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: COB Tuesday, January 19, 2010.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Q&amp;A:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  1. Will this work for Windows?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I don't know what would be required to make this work for
</span><br>
<span class="quotelev2">&gt;&gt;     Windows.  The current implementation is for Unix only.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  2. Will this work for interactive ssh/rsh PLM?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     It will not work any better or worse than the current
</span><br>
<span class="quotelev2">&gt;&gt;     implementation.  One can suspend a job by typing Ctl-Z at a
</span><br>
<span class="quotelev2">&gt;&gt;     terminal, but the mpirun process itself never gets suspended.
</span><br>
<span class="quotelev2">&gt;&gt;     That means that in order to wake the job up one has to open a
</span><br>
<span class="quotelev2">&gt;&gt;     different terminal to send a SIGCONT to the mpirun process.  It
</span><br>
<span class="quotelev2">&gt;&gt;     would be desirable to fix this problem, but as this feature is
</span><br>
<span class="quotelev2">&gt;&gt;     intended for use with resource managers like SGE it isn't
</span><br>
<span class="quotelev2">&gt;&gt;     essential to make it work smoothly in an interactive shell.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  3. Will the creation of new process groups prohibit SGE from killing
</span><br>
<span class="quotelev2">&gt;&gt;     a job properly?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     No.  SGE has a mechanism to ensure that all a job's processes are
</span><br>
<span class="quotelev2">&gt;&gt;     killed, regardless of whether they create new process groups.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  4. What about other resource managers?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Using this flag with another resource manager might cause
</span><br>
<span class="quotelev2">&gt;&gt;     problems.  However, the flag may not be necessary with other
</span><br>
<span class="quotelev2">&gt;&gt;     resource managers.  (If the RM can send SIGSTOP to all the
</span><br>
<span class="quotelev2">&gt;&gt;     processes on all the nodes running a job, then mpirun doesn't
</span><br>
<span class="quotelev2">&gt;&gt;     need to forward job control signals.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     According to the SLURM documentation, plugins are available
</span><br>
<span class="quotelev2">&gt;&gt;     (e.g., linuxproc) that would allow reliable termination of all a
</span><br>
<span class="quotelev2">&gt;&gt;     job's processes, regardless of whether they create new process
</span><br>
<span class="quotelev2">&gt;&gt;     groups.
</span><br>
<span class="quotelev2">&gt;&gt;     [<a href="https://computing.llnl.gov/linux/slurm/proctrack_plugins.html">https://computing.llnl.gov/linux/slurm/proctrack_plugins.html</a>]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  5. Will the creation of new process groups prevent mpirun from
</span><br>
<span class="quotelev2">&gt;&gt;     shutting down the job successfully (e.g., when it receives a
</span><br>
<span class="quotelev2">&gt;&gt;     SIGTERM)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     No.  I have tested jobs both with and without calls to
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_Spawn, and all are properly terminated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  6. Can we avoid creating new process groups by just signaling the
</span><br>
<span class="quotelev2">&gt;&gt;     launched process plus any process that calls MPI_Init?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     No.  The shell script might launch other background processes
</span><br>
<span class="quotelev2">&gt;&gt;     that the user wants to suspend.  (The Met Office code does this.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  7. Can we avoid creating new process groups by having mpirun and
</span><br>
<span class="quotelev2">&gt;&gt;     orted send SIGTSTP to their own process groups, and ignore the
</span><br>
<span class="quotelev2">&gt;&gt;     signal that they send to themselves?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     No.  First, mpirun might be in the same process group as other
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun processes.  Those mpiruns could get into an infinite loop
</span><br>
<span class="quotelev2">&gt;&gt;     forwarding SIGTSTPs to one another.  Second, although the default
</span><br>
<span class="quotelev2">&gt;&gt;     action on receipt of SIGTSTP is to suspend the process, that only
</span><br>
<span class="quotelev2">&gt;&gt;     happens if the process is not in an orphaned process group.  SGE
</span><br>
<span class="quotelev2">&gt;&gt;     starts processes in orphaned process groups.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7275.php">Sylvain Jeaugey: "[OMPI devel] Thread safety levels"</a>
<li><strong>Previous message:</strong> <a href="7273.php">Ralph Castain: "Re: [OMPI devel] RFC: Suspend/resume enhancements"</a>
<li><strong>In reply to:</strong> <a href="7273.php">Ralph Castain: "Re: [OMPI devel] RFC: Suspend/resume enhancements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7363.php">Iain Bason: "Re: [OMPI devel] RFC: Suspend/resume enhancements"</a>
<li><strong>Reply:</strong> <a href="7363.php">Iain Bason: "Re: [OMPI devel] RFC: Suspend/resume enhancements"</a>
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
