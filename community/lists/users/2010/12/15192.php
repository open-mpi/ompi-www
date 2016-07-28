<?
$subject_val = "Re: [OMPI users] MPI-IO problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 16:47:55 2010" -->
<!-- isoreceived="20101217214755" -->
<!-- sent="Fri, 17 Dec 2010 15:47:49 -0600" -->
<!-- isosent="20101217214749" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-IO problem" -->
<!-- id="20101217214749.GG466_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1292448095.4708.26.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-IO problem<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-17 16:47:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15193.php">David Whitaker: "[OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
<li><strong>Previous message:</strong> <a href="15191.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="15148.php">Tom Rosmond: "[OMPI users] MPI-IO problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15203.php">Tom Rosmond: "Re: [OMPI users] MPI-IO problem"</a>
<li><strong>Reply:</strong> <a href="15203.php">Tom Rosmond: "Re: [OMPI users] MPI-IO problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Dec 15, 2010 at 01:21:35PM -0800, Tom Rosmond wrote:
<br>
<span class="quotelev1">&gt; I want to implement an MPI-IO solution for some of the IO in a large
</span><br>
<span class="quotelev1">&gt; atmospheric data assimilation system.  Years ago I got some small
</span><br>
<span class="quotelev1">&gt; demonstration Fortran programs ( I think from Bill Gropp) that seem to
</span><br>
<span class="quotelev1">&gt; be good candidate prototypes for what I need.  Two of them are attached
</span><br>
<span class="quotelev1">&gt; as part of simple shell script wrappers (writea, writeb).  Both programs
</span><br>
<span class="quotelev1">&gt; are doing equivalent things to write a small test file, but using
</span><br>
<span class="quotelev1">&gt; different MPI functions.  Specifically, 'writea' does multiple writes
</span><br>
<span class="quotelev1">&gt; into the file using the 'MPI_FILE_SEEK', while 'writeb' does one write
</span><br>
<span class="quotelev1">&gt; call using 'MPI_TYPE_CREATE_SUBARRAY', and 'MPI_FILE_SET_VIEW'.  My
</span><br>
<span class="quotelev1">&gt; problem is that while 'writea' works correctly, ' writeb' fails with an
</span><br>
<span class="quotelev1">&gt; IO_ERROR error code returned from the final 'MPI_FILE_WRITE' call.  I
</span><br>
<span class="quotelev1">&gt; have look at the code carefully and studied the MPI standard for the
</span><br>
<span class="quotelev1">&gt; functions used, and can't see what is wrong with the failing call, but I
</span><br>
<span class="quotelev1">&gt; must be missing something.  I seem to remember the program running
</span><br>
<span class="quotelev1">&gt; correctly years ago, but that was on another platform and MPI
</span><br>
<span class="quotelev1">&gt; environment.
</span><br>
<p>My test environment isn't that different from yours, though I am
<br>
running on a single node (laptop).  Both MPICH2-1.3.1 and
<br>
OpenMPI-1.4 pass the test.
<br>
<p>Some observations:
<br>
<p>- writeb leaks a datatype (you do not free the subarray type)
<br>
<p>- in writea you don't really need to seek and then write. You could
<br>
&nbsp;&nbsp;call MPI_FILE_WRITE_AT_ALL.  
<br>
<p>- You use collective I/O in writea (good for you!) but use independent
<br>
&nbsp;&nbsp;I/O in writeb.  Especially for a 2d subarray, you'll likely see
<br>
&nbsp;&nbsp;better performance with MPI_FILE_WRITE_ALL. 
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15193.php">David Whitaker: "[OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
<li><strong>Previous message:</strong> <a href="15191.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="15148.php">Tom Rosmond: "[OMPI users] MPI-IO problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15203.php">Tom Rosmond: "Re: [OMPI users] MPI-IO problem"</a>
<li><strong>Reply:</strong> <a href="15203.php">Tom Rosmond: "Re: [OMPI users] MPI-IO problem"</a>
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
