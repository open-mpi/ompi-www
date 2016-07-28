<?
$subject_val = "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 18:13:38 2011" -->
<!-- isoreceived="20110609221338" -->
<!-- sent="Thu, 9 Jun 2011 18:13:32 -0400" -->
<!-- isosent="20110609221332" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality" -->
<!-- id="F3E744B3-BA4B-4FD5-80E9-3B6C2A457052_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTimAmZWNQpLvMiUYCyZFY4khr7pKPw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-09 18:13:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9339.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9337.php">Josh Hursey: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>In reply to:</strong> <a href="9337.php">Josh Hursey: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9340.php">Joshua Hursey: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Reply:</strong> <a href="9340.php">Joshua Hursey: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What I'm saying is that there is no reason to have any other type of MPI_Abort if we are not able to compute the set of connected processes. 
<br>
<p>With this RFC the processes on the communicator on MPI_Abort will abort. Then the other processes in the same MPI_COMM_WORLD (in fact jobid) will be notified (if we suppose that the ORTE will not make a difference between aborted and faulty). As a result the entire MPI_COMM_WORLD will be aborted, if we consider a sane application where everyone use the same type of error handler. However, this is not enough. We have to distribute the abort signal to every other process &quot;connected&quot;, and I don't see how we can compute this list of connected processes in Open MPI today.It is not that I don't see it in your patch, it is that the definition of the connectivity in the MPI standard is transitive and relies heavily on a correct implementation for the MPI_Comm_disconnect.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jun 9, 2011, at 16:59 , Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Jun 9, 2011 at 4:47 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; If this change the behavior of MPI_Abort to only abort processes on the specified communicator how this doesn't affects the default user experience (when today it aborts everything)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI does abort everything by default - decided by the runtime at
</span><br>
<span class="quotelev1">&gt; the moment (but addressed in your RFC). So it does not matter if one
</span><br>
<span class="quotelev1">&gt; process aborts or if many do. So the behavior of MPI_Abort experienced
</span><br>
<span class="quotelev1">&gt; by the user will not change. Effectively the only change is an extra
</span><br>
<span class="quotelev1">&gt; message in the runtime before the process actually calls
</span><br>
<span class="quotelev1">&gt; errmgr.abort().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This branch just makes the implementation complete by first telling
</span><br>
<span class="quotelev1">&gt; ORTE that a group of processes, defined by the communicator, should be
</span><br>
<span class="quotelev1">&gt; terminated along with the calling process. Currently ORTE notices that
</span><br>
<span class="quotelev1">&gt; there was an abort, and terminates the job. Once your RFC goes through
</span><br>
<span class="quotelev1">&gt; then this may no longer be the case, and OMPI can determine what to do
</span><br>
<span class="quotelev1">&gt; when it receives a process failure notification.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If we accept the fact that MPI_Abort will only abort the processes in the current communicator what happens with the other processes in the same MPI_COMM_WORLD (but not on the communicator that has been used by MPI_Abort)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently, ORTE will abort them as well. When your RFC goes through
</span><br>
<span class="quotelev1">&gt; then the OMPI layer will be notified of the error and can take the
</span><br>
<span class="quotelev1">&gt; appropriate action, as determined by the MPI standard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What about all the other connected processes (based on the connectivity as defined in the MPI standard in Section 10.5.4) ? Do they see this as a fault?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They are informed of the fault via the ORTE errmgr callback routine
</span><br>
<span class="quotelev1">&gt; (that we have an RFC for), and then can take the appropriate action
</span><br>
<span class="quotelev1">&gt; based on MPI semantics. So we are pushing the decision of the
</span><br>
<span class="quotelev1">&gt; implication of the fault to the OMPI layer - where it should be.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The remainder of the OMPI layer logic for MPI_ERRORS_RETURN and other
</span><br>
<span class="quotelev1">&gt; connected error management scenarios is not included in this patch
</span><br>
<span class="quotelev1">&gt; since that depends on there being a callback to the OMPI layer - which
</span><br>
<span class="quotelev1">&gt; does not exist just yet. So a small patch to wire in the ORTE piece to
</span><br>
<span class="quotelev1">&gt; allow the OMPI layer to request a set of processes to be terminated -
</span><br>
<span class="quotelev1">&gt; to more accurately support MPI_Abort semantics.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that answer your questions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 9, 2011, at 16:32 , Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: Fix missing code in MPI_Abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY: MPI_Abort is missing logic to ask for termination of the process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; group defined by the communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE: Mostly orte/mca/errmgr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHEN: Open MPI trunk
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: Tuesday, June 14, 2011 (after teleconf)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Details:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A bitbucket branch is available here (last sync to r24757 of trunk)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://bitbucket.org/jjhursey/ompi-abort/">https://bitbucket.org/jjhursey/ompi-abort/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the MPI Standard (v2.2) Section 8.7 after the introduction of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Abort, it states:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;This routine makes a best attempt to abort all tasks in the group of comm.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI currently only calls orte_errmgr.abort() to abort the calling
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process itself. The code to ask for the abort of the other processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the group defined by the communicator is commented out. Since one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process calling abort currently causes all processes in the job to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort, it has not been a big deal. However as the group starts
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exploring better resilience in the OMPI layer (with further support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the ORTE layer) this aspect of MPI_Abort will become more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; necessary to get right.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This branch adds back the logic necessary for a single process calling
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Abort to request, from ORTE errmgr, that a defined subgroup of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes be aborted. Once the request is sent to the HNP, the local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process then calls abort on itself. The HNP requests that the defined
</span><br>
<span class="quotelev3">&gt;&gt;&gt; subgroup of processes be terminated using the existing plm mechanisms
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for doing so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This change has no effect on the current default user experienced
</span><br>
<span class="quotelev3">&gt;&gt;&gt; behavior of MPI_Abort.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9339.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9337.php">Josh Hursey: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>In reply to:</strong> <a href="9337.php">Josh Hursey: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9340.php">Joshua Hursey: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Reply:</strong> <a href="9340.php">Joshua Hursey: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
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
