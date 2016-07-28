<?
$subject_val = "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 16:59:56 2011" -->
<!-- isoreceived="20110609205956" -->
<!-- sent="Thu, 9 Jun 2011 16:59:52 -0400" -->
<!-- isosent="20110609205952" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality" -->
<!-- id="BANLkTimAmZWNQpLvMiUYCyZFY4khr7pKPw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="977CE0EA-EC0B-4B08-9B61-2F23208F3C64_at_eecs.utk.edu" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-09 16:59:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9338.php">George Bosilca: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Previous message:</strong> <a href="9336.php">George Bosilca: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>In reply to:</strong> <a href="9336.php">George Bosilca: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9338.php">George Bosilca: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Reply:</strong> <a href="9338.php">George Bosilca: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jun 9, 2011 at 4:47 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; If this change the behavior of MPI_Abort to only abort processes on the specified communicator how this doesn't affects the default user experience (when today it aborts everything)?
</span><br>
<p>Open MPI does abort everything by default - decided by the runtime at
<br>
the moment (but addressed in your RFC). So it does not matter if one
<br>
process aborts or if many do. So the behavior of MPI_Abort experienced
<br>
by the user will not change. Effectively the only change is an extra
<br>
message in the runtime before the process actually calls
<br>
errmgr.abort().
<br>
<p>This branch just makes the implementation complete by first telling
<br>
ORTE that a group of processes, defined by the communicator, should be
<br>
terminated along with the calling process. Currently ORTE notices that
<br>
there was an abort, and terminates the job. Once your RFC goes through
<br>
then this may no longer be the case, and OMPI can determine what to do
<br>
when it receives a process failure notification.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we accept the fact that MPI_Abort will only abort the processes in the current communicator what happens with the other processes in the same MPI_COMM_WORLD (but not on the communicator that has been used by MPI_Abort)?
</span><br>
<p>Currently, ORTE will abort them as well. When your RFC goes through
<br>
then the OMPI layer will be notified of the error and can take the
<br>
appropriate action, as determined by the MPI standard.
<br>
<p><span class="quotelev1">&gt; What about all the other connected processes (based on the connectivity as defined in the MPI standard in Section 10.5.4) ? Do they see this as a fault?
</span><br>
<p>They are informed of the fault via the ORTE errmgr callback routine
<br>
(that we have an RFC for), and then can take the appropriate action
<br>
based on MPI semantics. So we are pushing the decision of the
<br>
implication of the fault to the OMPI layer - where it should be.
<br>
<p><p>The remainder of the OMPI layer logic for MPI_ERRORS_RETURN and other
<br>
connected error management scenarios is not included in this patch
<br>
since that depends on there being a callback to the OMPI layer - which
<br>
does not exist just yet. So a small patch to wire in the ORTE piece to
<br>
allow the OMPI layer to request a set of processes to be terminated -
<br>
to more accurately support MPI_Abort semantics.
<br>
<p>Does that answer your questions?
<br>
<p>-- Josh
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 9, 2011, at 16:32 , Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Fix missing code in MPI_Abort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY: MPI_Abort is missing logic to ask for termination of the process
</span><br>
<span class="quotelev2">&gt;&gt; group defined by the communicator
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: Mostly orte/mca/errmgr
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: Open MPI trunk
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: Tuesday, June 14, 2011 (after teleconf)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Details:
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A bitbucket branch is available here (last sync to r24757 of trunk)
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://bitbucket.org/jjhursey/ompi-abort/">https://bitbucket.org/jjhursey/ompi-abort/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the MPI Standard (v2.2) Section 8.7 after the introduction of
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Abort, it states:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;This routine makes a best attempt to abort all tasks in the group of comm.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI currently only calls orte_errmgr.abort() to abort the calling
</span><br>
<span class="quotelev2">&gt;&gt; process itself. The code to ask for the abort of the other processes
</span><br>
<span class="quotelev2">&gt;&gt; in the group defined by the communicator is commented out. Since one
</span><br>
<span class="quotelev2">&gt;&gt; process calling abort currently causes all processes in the job to
</span><br>
<span class="quotelev2">&gt;&gt; abort, it has not been a big deal. However as the group starts
</span><br>
<span class="quotelev2">&gt;&gt; exploring better resilience in the OMPI layer (with further support
</span><br>
<span class="quotelev2">&gt;&gt; from the ORTE layer) this aspect of MPI_Abort will become more
</span><br>
<span class="quotelev2">&gt;&gt; necessary to get right.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This branch adds back the logic necessary for a single process calling
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Abort to request, from ORTE errmgr, that a defined subgroup of
</span><br>
<span class="quotelev2">&gt;&gt; processes be aborted. Once the request is sent to the HNP, the local
</span><br>
<span class="quotelev2">&gt;&gt; process then calls abort on itself. The HNP requests that the defined
</span><br>
<span class="quotelev2">&gt;&gt; subgroup of processes be terminated using the existing plm mechanisms
</span><br>
<span class="quotelev2">&gt;&gt; for doing so.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This change has no effect on the current default user experienced
</span><br>
<span class="quotelev2">&gt;&gt; behavior of MPI_Abort.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9338.php">George Bosilca: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Previous message:</strong> <a href="9336.php">George Bosilca: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>In reply to:</strong> <a href="9336.php">George Bosilca: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9338.php">George Bosilca: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Reply:</strong> <a href="9338.php">George Bosilca: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
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
