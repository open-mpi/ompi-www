<?
$subject_val = "[OMPI devel] r23023 change to trunk causes problems with exit value";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 14:31:53 2010" -->
<!-- isoreceived="20100426183153" -->
<!-- sent="Mon, 26 Apr 2010 14:31:33 -0400" -->
<!-- isosent="20100426183133" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rolf.vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] r23023 change to trunk causes problems with exit value" -->
<!-- id="4BD5DC05.8070501_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] r23023 change to trunk causes problems with exit value<br>
<strong>From:</strong> Rolf vandeVaart (<em>rolf.vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 14:31:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7809.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>Previous message:</strong> <a href="7807.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7809.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>Reply:</strong> <a href="7809.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With our MTT testing we have noticed a problem that has cropped up in 
<br>
the trunk.  There are some tests that are supposed to return a non-zero 
<br>
status because they are getting errors, but are instead returning 0.  
<br>
This problem does not exist in r23022 but does exist in r23023.
<br>
<p>One can use the ibm/final test to reproduce the problem.  An example of 
<br>
a passing case followed by a failing case is shown below.
<br>
<p>Ralph, you want me to open a ticket on this?  Or do you just want to 
<br>
take a look.  I am asking you since you did the r23023 commit.
<br>
<p>Rolf
<br>
<p><p>TRUNK VERSION r23022:
<br>
[rolfv_at_burl-ct-x2200-6 environment]$ mpirun -np 1 -mca btl sm,self final
<br>
**************************************************************************
<br>
This test should generate a message about MPI is either not initialized or
<br>
has already been finialized.
<br>
ERRORS ARE EXPECTED AND NORMAL IN THIS PROGRAM!!
<br>
**************************************************************************
<br>
*** The MPI_Barrier() function was called after MPI_FINALIZE was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
[burl-ct-x2200-6:6072] Abort after MPI_FINALIZE completed successfully; 
<br>
not able to guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
[rolfv_at_burl-ct-x2200-6 environment]$ echo $status
<br>
1
<br>
[rolfv_at_burl-ct-x2200-6 environment]$
<br>
<p><p>TRUNK VERSION r23023:
<br>
[rolfv_at_burl-ct-x2200-6 environment]$ mpirun -np 1 -mca btl sm,self final
<br>
**************************************************************************
<br>
This test should generate a message about MPI is either not initialized or
<br>
has already been finialized.
<br>
ERRORS ARE EXPECTED AND NORMAL IN THIS PROGRAM!!
<br>
**************************************************************************
<br>
*** The MPI_Barrier() function was called after MPI_FINALIZE was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
[burl-ct-x2200-6:4089] Abort after MPI_FINALIZE completed successfully; 
<br>
not able to guarantee that all other processes were killed!
<br>
[rolfv_at_burl-ct-x2200-6 environment]$ echo $status
<br>
0
<br>
[rolfv_at_burl-ct-x2200-6 environment]$
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7809.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>Previous message:</strong> <a href="7807.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7809.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>Reply:</strong> <a href="7809.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
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
