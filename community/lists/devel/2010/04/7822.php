<?
$subject_val = "Re: [OMPI devel] r23023 change to trunk causes problems with exit value";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 27 12:02:43 2010" -->
<!-- isoreceived="20100427160243" -->
<!-- sent="Tue, 27 Apr 2010 10:02:33 -0600" -->
<!-- isosent="20100427160233" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r23023 change to trunk causes problems with exit value" -->
<!-- id="16BF2D7D-D51B-4D3C-89A4-44339733D8A7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BD6FFA2.1080409_at_oracle.com" -->
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
<strong>Date:</strong> 2010-04-27 12:02:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7823.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.2rc1 warnings"</a>
<li><strong>Previous message:</strong> <a href="7821.php">George Bosilca: "Re: [OMPI devel] RDMA with ob1 and openib"</a>
<li><strong>In reply to:</strong> <a href="7820.php">Rolf vandeVaart: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I didn't runt that specific test, but I did run a test that calls MPI_Abort. I found a bug this morning, though (reported by Sam) that was causing the state of remote procs to be incorrectly reported.
<br>
<p>Try with r23048 or higher.
<br>
<p>On Apr 27, 2010, at 9:15 AM, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; Ralph, did you get a chance to run the ibm/final test to see if these changes fixed the problem?  I just rebuilt the trunk and tried it and I still get an exit status of 0 back.  I will run it again to make sure I have not made a mistake.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/26/10 23:43, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Okay, this should finally be fixed. See the commit message for r23045 for an explanation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It really wasn't anything in the cited changeset that caused the problem. The root cause is that $#@$ abort file we dropped in the session dir to indicate you called MPI_Abort vs trying to thoroughly cleanup. Been biting us in the butt for years - finally removed it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 26, 2010, at 12:58 PM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The ibm/final test does not call MPI_Abort directly.  It is calling MPI_Barrier after MPI_Finalize is called, which is a no-no.  This is detected and eventually the library calls ompi_mpi_abort().  This is very similar to MPI_Abort() which ultimately calls ompi_mpi_abort as well.  So, I guess I am saying for all intents and purposes, it calls MPI_Abort.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 04/26/10 14:41, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'll try to keep it in mind as I continue the errmgr work. I gather these tests all call MPI_Abort?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 26, 2010, at 12:31 PM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; With our MTT testing we have noticed a problem that has cropped up in the trunk.  There are some tests that are supposed to return a non-zero status because they are getting errors, but are instead returning 0.  This problem does not exist in r23022 but does exist in r23023.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; One can use the ibm/final test to reproduce the problem.  An example of a passing case followed by a failing case is shown below.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph, you want me to open a ticket on this?  Or do you just want to take a look.  I am asking you since you did the r23023 commit.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TRUNK VERSION r23022:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [rolfv_at_burl-ct-x2200-6 environment]$ mpirun -np 1 -mca btl sm,self final
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; **************************************************************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This test should generate a message about MPI is either not initialized or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; has already been finialized.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ERRORS ARE EXPECTED AND NORMAL IN THIS PROGRAM!!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; **************************************************************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** The MPI_Barrier() function was called after MPI_FINALIZE was invoked.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [burl-ct-x2200-6:6072] Abort after MPI_FINALIZE completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [rolfv_at_burl-ct-x2200-6 environment]$ echo $status
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [rolfv_at_burl-ct-x2200-6 environment]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TRUNK VERSION r23023:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [rolfv_at_burl-ct-x2200-6 environment]$ mpirun -np 1 -mca btl sm,self final
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; **************************************************************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This test should generate a message about MPI is either not initialized or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; has already been finialized.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ERRORS ARE EXPECTED AND NORMAL IN THIS PROGRAM!!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; **************************************************************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** The MPI_Barrier() function was called after MPI_FINALIZE was invoked.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [burl-ct-x2200-6:4089] Abort after MPI_FINALIZE completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [rolfv_at_burl-ct-x2200-6 environment]$ echo $status
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [rolfv_at_burl-ct-x2200-6 environment]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7822/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7823.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.2rc1 warnings"</a>
<li><strong>Previous message:</strong> <a href="7821.php">George Bosilca: "Re: [OMPI devel] RDMA with ob1 and openib"</a>
<li><strong>In reply to:</strong> <a href="7820.php">Rolf vandeVaart: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<!-- nextthread="start" -->
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
