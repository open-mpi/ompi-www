<?
$subject_val = "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 16:47:26 2011" -->
<!-- isoreceived="20110609204726" -->
<!-- sent="Thu, 9 Jun 2011 16:47:21 -0400" -->
<!-- isosent="20110609204721" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality" -->
<!-- id="977CE0EA-EC0B-4B08-9B61-2F23208F3C64_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTi=uyY4W0nVVSTOTn51i5E5kH-2mUw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-06-09 16:47:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9337.php">Josh Hursey: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Previous message:</strong> <a href="9335.php">Josh Hursey: "[OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>In reply to:</strong> <a href="9335.php">Josh Hursey: "[OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9337.php">Josh Hursey: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Reply:</strong> <a href="9337.php">Josh Hursey: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If this change the behavior of MPI_Abort to only abort processes on the specified communicator how this doesn't affects the default user experience (when today it aborts everything)?
<br>
<p>If we accept the fact that MPI_Abort will only abort the processes in the current communicator what happens with the other processes in the same MPI_COMM_WORLD (but not on the communicator that has been used by MPI_Abort)? What about all the other connected processes (based on the connectivity as defined in the MPI standard in Section 10.5.4) ? Do they see this as a fault? 
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jun 9, 2011, at 16:32 , Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Fix missing code in MPI_Abort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: MPI_Abort is missing logic to ask for termination of the process
</span><br>
<span class="quotelev1">&gt; group defined by the communicator
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: Mostly orte/mca/errmgr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: Open MPI trunk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Tuesday, June 14, 2011 (after teleconf)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Details:
</span><br>
<span class="quotelev1">&gt; -------------------------------------------
</span><br>
<span class="quotelev1">&gt; A bitbucket branch is available here (last sync to r24757 of trunk)
</span><br>
<span class="quotelev1">&gt; <a href="https://bitbucket.org/jjhursey/ompi-abort/">https://bitbucket.org/jjhursey/ompi-abort/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the MPI Standard (v2.2) Section 8.7 after the introduction of
</span><br>
<span class="quotelev1">&gt; MPI_Abort, it states:
</span><br>
<span class="quotelev1">&gt; &quot;This routine makes a best attempt to abort all tasks in the group of comm.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI currently only calls orte_errmgr.abort() to abort the calling
</span><br>
<span class="quotelev1">&gt; process itself. The code to ask for the abort of the other processes
</span><br>
<span class="quotelev1">&gt; in the group defined by the communicator is commented out. Since one
</span><br>
<span class="quotelev1">&gt; process calling abort currently causes all processes in the job to
</span><br>
<span class="quotelev1">&gt; abort, it has not been a big deal. However as the group starts
</span><br>
<span class="quotelev1">&gt; exploring better resilience in the OMPI layer (with further support
</span><br>
<span class="quotelev1">&gt; from the ORTE layer) this aspect of MPI_Abort will become more
</span><br>
<span class="quotelev1">&gt; necessary to get right.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This branch adds back the logic necessary for a single process calling
</span><br>
<span class="quotelev1">&gt; MPI_Abort to request, from ORTE errmgr, that a defined subgroup of
</span><br>
<span class="quotelev1">&gt; processes be aborted. Once the request is sent to the HNP, the local
</span><br>
<span class="quotelev1">&gt; process then calls abort on itself. The HNP requests that the defined
</span><br>
<span class="quotelev1">&gt; subgroup of processes be terminated using the existing plm mechanisms
</span><br>
<span class="quotelev1">&gt; for doing so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This change has no effect on the current default user experienced
</span><br>
<span class="quotelev1">&gt; behavior of MPI_Abort.
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
<li><strong>Next message:</strong> <a href="9337.php">Josh Hursey: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Previous message:</strong> <a href="9335.php">Josh Hursey: "[OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>In reply to:</strong> <a href="9335.php">Josh Hursey: "[OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9337.php">Josh Hursey: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Reply:</strong> <a href="9337.php">Josh Hursey: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
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
