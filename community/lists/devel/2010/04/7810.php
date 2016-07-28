<?
$subject_val = "Re: [OMPI devel] r23023 change to trunk causes problems with exit value";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 15:00:29 2010" -->
<!-- isoreceived="20100426190029" -->
<!-- sent="Mon, 26 Apr 2010 14:58:54 -0400" -->
<!-- isosent="20100426185854" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rolf.vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r23023 change to trunk causes problems with exit value" -->
<!-- id="4BD5E26E.1060505_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8687249D-6E39-4AF9-8EF9-4A025D19CAFD_at_open-mpi.org" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rolf.vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 14:58:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7811.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Previous message:</strong> <a href="7809.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>In reply to:</strong> <a href="7809.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7814.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>Reply:</strong> <a href="7814.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The ibm/final test does not call MPI_Abort directly.  It is calling 
<br>
MPI_Barrier after MPI_Finalize is called, which is a no-no.  This is 
<br>
detected and eventually the library calls ompi_mpi_abort().  This is 
<br>
very similar to MPI_Abort() which ultimately calls ompi_mpi_abort as 
<br>
well.  So, I guess I am saying for all intents and purposes, it calls 
<br>
MPI_Abort.
<br>
<p>Rolf
<br>
<p>On 04/26/10 14:41, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I'll try to keep it in mind as I continue the errmgr work. I gather these tests all call MPI_Abort?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 26, 2010, at 12:31 PM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; With our MTT testing we have noticed a problem that has cropped up in the trunk.  There are some tests that are supposed to return a non-zero status because they are getting errors, but are instead returning 0.  This problem does not exist in r23022 but does exist in r23023.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One can use the ibm/final test to reproduce the problem.  An example of a passing case followed by a failing case is shown below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph, you want me to open a ticket on this?  Or do you just want to take a look.  I am asking you since you did the r23023 commit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TRUNK VERSION r23022:
</span><br>
<span class="quotelev2">&gt;&gt; [rolfv_at_burl-ct-x2200-6 environment]$ mpirun -np 1 -mca btl sm,self final
</span><br>
<span class="quotelev2">&gt;&gt; **************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; This test should generate a message about MPI is either not initialized or
</span><br>
<span class="quotelev2">&gt;&gt; has already been finialized.
</span><br>
<span class="quotelev2">&gt;&gt; ERRORS ARE EXPECTED AND NORMAL IN THIS PROGRAM!!
</span><br>
<span class="quotelev2">&gt;&gt; **************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; *** The MPI_Barrier() function was called after MPI_FINALIZE was invoked.
</span><br>
<span class="quotelev2">&gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev2">&gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev2">&gt;&gt; [burl-ct-x2200-6:6072] Abort after MPI_FINALIZE completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [rolfv_at_burl-ct-x2200-6 environment]$ echo $status
</span><br>
<span class="quotelev2">&gt;&gt; 1
</span><br>
<span class="quotelev2">&gt;&gt; [rolfv_at_burl-ct-x2200-6 environment]$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TRUNK VERSION r23023:
</span><br>
<span class="quotelev2">&gt;&gt; [rolfv_at_burl-ct-x2200-6 environment]$ mpirun -np 1 -mca btl sm,self final
</span><br>
<span class="quotelev2">&gt;&gt; **************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; This test should generate a message about MPI is either not initialized or
</span><br>
<span class="quotelev2">&gt;&gt; has already been finialized.
</span><br>
<span class="quotelev2">&gt;&gt; ERRORS ARE EXPECTED AND NORMAL IN THIS PROGRAM!!
</span><br>
<span class="quotelev2">&gt;&gt; **************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; *** The MPI_Barrier() function was called after MPI_FINALIZE was invoked.
</span><br>
<span class="quotelev2">&gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev2">&gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev2">&gt;&gt; [burl-ct-x2200-6:4089] Abort after MPI_FINALIZE completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; [rolfv_at_burl-ct-x2200-6 environment]$ echo $status
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt; [rolfv_at_burl-ct-x2200-6 environment]$
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7810/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7811.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Previous message:</strong> <a href="7809.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>In reply to:</strong> <a href="7809.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7814.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>Reply:</strong> <a href="7814.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
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
