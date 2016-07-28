<?
$subject_val = "Re: [OMPI devel] r23023 change to trunk causes problems with exit value";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 14:41:38 2010" -->
<!-- isoreceived="20100426184138" -->
<!-- sent="Mon, 26 Apr 2010 12:41:13 -0600" -->
<!-- isosent="20100426184113" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r23023 change to trunk causes problems with exit value" -->
<!-- id="8687249D-6E39-4AF9-8EF9-4A025D19CAFD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BD5DC05.8070501_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] r23023 change to trunk causes problems with exit value<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 14:41:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7810.php">Rolf vandeVaart: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>Previous message:</strong> <a href="7808.php">Rolf vandeVaart: "[OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>In reply to:</strong> <a href="7808.php">Rolf vandeVaart: "[OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7810.php">Rolf vandeVaart: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>Reply:</strong> <a href="7810.php">Rolf vandeVaart: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll try to keep it in mind as I continue the errmgr work. I gather these tests all call MPI_Abort?
<br>
<p><p>On Apr 26, 2010, at 12:31 PM, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With our MTT testing we have noticed a problem that has cropped up in the trunk.  There are some tests that are supposed to return a non-zero status because they are getting errors, but are instead returning 0.  This problem does not exist in r23022 but does exist in r23023.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One can use the ibm/final test to reproduce the problem.  An example of a passing case followed by a failing case is shown below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph, you want me to open a ticket on this?  Or do you just want to take a look.  I am asking you since you did the r23023 commit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TRUNK VERSION r23022:
</span><br>
<span class="quotelev1">&gt; [rolfv_at_burl-ct-x2200-6 environment]$ mpirun -np 1 -mca btl sm,self final
</span><br>
<span class="quotelev1">&gt; **************************************************************************
</span><br>
<span class="quotelev1">&gt; This test should generate a message about MPI is either not initialized or
</span><br>
<span class="quotelev1">&gt; has already been finialized.
</span><br>
<span class="quotelev1">&gt; ERRORS ARE EXPECTED AND NORMAL IN THIS PROGRAM!!
</span><br>
<span class="quotelev1">&gt; **************************************************************************
</span><br>
<span class="quotelev1">&gt; *** The MPI_Barrier() function was called after MPI_FINALIZE was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [burl-ct-x2200-6:6072] Abort after MPI_FINALIZE completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [rolfv_at_burl-ct-x2200-6 environment]$ echo $status
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; [rolfv_at_burl-ct-x2200-6 environment]$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TRUNK VERSION r23023:
</span><br>
<span class="quotelev1">&gt; [rolfv_at_burl-ct-x2200-6 environment]$ mpirun -np 1 -mca btl sm,self final
</span><br>
<span class="quotelev1">&gt; **************************************************************************
</span><br>
<span class="quotelev1">&gt; This test should generate a message about MPI is either not initialized or
</span><br>
<span class="quotelev1">&gt; has already been finialized.
</span><br>
<span class="quotelev1">&gt; ERRORS ARE EXPECTED AND NORMAL IN THIS PROGRAM!!
</span><br>
<span class="quotelev1">&gt; **************************************************************************
</span><br>
<span class="quotelev1">&gt; *** The MPI_Barrier() function was called after MPI_FINALIZE was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [burl-ct-x2200-6:4089] Abort after MPI_FINALIZE completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; [rolfv_at_burl-ct-x2200-6 environment]$ echo $status
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; [rolfv_at_burl-ct-x2200-6 environment]$
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
<li><strong>Next message:</strong> <a href="7810.php">Rolf vandeVaart: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>Previous message:</strong> <a href="7808.php">Rolf vandeVaart: "[OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>In reply to:</strong> <a href="7808.php">Rolf vandeVaart: "[OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7810.php">Rolf vandeVaart: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>Reply:</strong> <a href="7810.php">Rolf vandeVaart: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
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
