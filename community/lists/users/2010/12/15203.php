<?
$subject_val = "Re: [OMPI users] MPI-IO problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 20 15:20:30 2010" -->
<!-- isoreceived="20101220202030" -->
<!-- sent="Mon, 20 Dec 2010 00:20:34 -0800" -->
<!-- isosent="20101220082034" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-IO problem" -->
<!-- id="1292833234.4222.29.camel_at_cedar.reachone.com" -->
<!-- inreplyto="20101217214749.GG466_at_mcs.anl.gov" -->
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
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-20 03:20:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15204.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15202.php">George Bosilca: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15192.php">Rob Latham: "Re: [OMPI users] MPI-IO problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rob,
<br>
<p>Thanks for the analysis.  I have used your suggestions, but am still
<br>
frustrated by what I am seeing.  I too have run my tests on single node
<br>
systems, and here is what I have done:
<br>
<p>1.  I modified the 'writeb' script to essentially mimic the example in
<br>
section 7.9.3 of Vol 2 of MPI: The Complete Reference.  It writes a
<br>
100x100 matrix to a file with 4 processes.  The script is attached.
<br>
<p>2. When running this problem on my desktop systems, I continue to get IO
<br>
errors from 'MPI_FILE_WRITE_ALL' no matter how I distribute the
<br>
subarrays.
<br>
<p>3.  I ported the script to a cluster running PBS.  The nodes on this
<br>
system have 4 processors, so the problem is still on one node.  The
<br>
environment is very similar to my desktop, except it is Openmpi 1.4.2
<br>
instead of 1.4.3.  These are the results:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;subsizes(1)=25, subsizes(2)=100  -- file written correctly
<br>
<p>&nbsp;&nbsp;subsizes(1)=50, subsizes(2)=50   -- file written correctly
<br>
<p>&nbsp;&nbsp;subsizes(1)=100, subsizes(2)=25  -- file written incorrectly
<br>
<p>On this last case, it appears that only one of the processes does a
<br>
write.  Ironically, this case uses the same process distribution
<br>
described in the example above.
<br>
<p>Am I still missing something in the setup of the problem, or is there
<br>
something about the OpenMpi configuration on all of these systems that
<br>
is incorrect for MPI-IO.  Although they haven't been doing any MPI-IO to
<br>
my knowledge, all of these systems have been successfully running large
<br>
MPI applications for 2-3 years.
<br>
<p><p>T. Rosmond
<br>
<p><p><p><p>&nbsp;
<br>
On Fri, 2010-12-17 at 15:47 -0600, Rob Latham wrote:
<br>
<span class="quotelev1">&gt; On Wed, Dec 15, 2010 at 01:21:35PM -0800, Tom Rosmond wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I want to implement an MPI-IO solution for some of the IO in a large
</span><br>
<span class="quotelev2">&gt; &gt; atmospheric data assimilation system.  Years ago I got some small
</span><br>
<span class="quotelev2">&gt; &gt; demonstration Fortran programs ( I think from Bill Gropp) that seem to
</span><br>
<span class="quotelev2">&gt; &gt; be good candidate prototypes for what I need.  Two of them are attached
</span><br>
<span class="quotelev2">&gt; &gt; as part of simple shell script wrappers (writea, writeb).  Both programs
</span><br>
<span class="quotelev2">&gt; &gt; are doing equivalent things to write a small test file, but using
</span><br>
<span class="quotelev2">&gt; &gt; different MPI functions.  Specifically, 'writea' does multiple writes
</span><br>
<span class="quotelev2">&gt; &gt; into the file using the 'MPI_FILE_SEEK', while 'writeb' does one write
</span><br>
<span class="quotelev2">&gt; &gt; call using 'MPI_TYPE_CREATE_SUBARRAY', and 'MPI_FILE_SET_VIEW'.  My
</span><br>
<span class="quotelev2">&gt; &gt; problem is that while 'writea' works correctly, ' writeb' fails with an
</span><br>
<span class="quotelev2">&gt; &gt; IO_ERROR error code returned from the final 'MPI_FILE_WRITE' call.  I
</span><br>
<span class="quotelev2">&gt; &gt; have look at the code carefully and studied the MPI standard for the
</span><br>
<span class="quotelev2">&gt; &gt; functions used, and can't see what is wrong with the failing call, but I
</span><br>
<span class="quotelev2">&gt; &gt; must be missing something.  I seem to remember the program running
</span><br>
<span class="quotelev2">&gt; &gt; correctly years ago, but that was on another platform and MPI
</span><br>
<span class="quotelev2">&gt; &gt; environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My test environment isn't that different from yours, though I am
</span><br>
<span class="quotelev1">&gt; running on a single node (laptop).  Both MPICH2-1.3.1 and
</span><br>
<span class="quotelev1">&gt; OpenMPI-1.4 pass the test.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some observations:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - writeb leaks a datatype (you do not free the subarray type)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - in writea you don't really need to seek and then write. You could
</span><br>
<span class="quotelev1">&gt;   call MPI_FILE_WRITE_AT_ALL.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - You use collective I/O in writea (good for you!) but use independent
</span><br>
<span class="quotelev1">&gt;   I/O in writeb.  Especially for a 2d subarray, you'll likely see
</span><br>
<span class="quotelev1">&gt;   better performance with MPI_FILE_WRITE_ALL. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>
<br><p>
<p><hr>
<ul>
<li>application/x-csh attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15203/writeb_pbs">writeb_pbs</a>
</ul>
<!-- attachment="writeb_pbs" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15204.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15202.php">George Bosilca: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15192.php">Rob Latham: "Re: [OMPI users] MPI-IO problem"</a>
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
