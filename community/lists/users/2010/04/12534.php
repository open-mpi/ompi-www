<?
$subject_val = "Re: [OMPI users] Best way to reduce 3D array";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  5 15:09:15 2010" -->
<!-- isoreceived="20100405190915" -->
<!-- sent="Mon, 5 Apr 2010 14:09:09 -0500" -->
<!-- isosent="20100405190909" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Best way to reduce 3D array" -->
<!-- id="20100405190909.GZ17191_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1003302349250.4568_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] Best way to reduce 3D array<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-05 15:09:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12535.php">Ricardo Reis: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Previous message:</strong> <a href="12533.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12485.php">Ricardo Reis: "Re: [OMPI users] Best way to reduce 3D array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12535.php">Ricardo Reis: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Reply:</strong> <a href="12535.php">Ricardo Reis: "Re: [OMPI users] Best way to reduce 3D array"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Mar 30, 2010 at 11:51:39PM +0100, Ricardo Reis wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  If using the master/slace IO model, would it be better to cicle
</span><br>
<span class="quotelev1">&gt; through all the process and each one would write it's part of the
</span><br>
<span class="quotelev1">&gt; array into the file. This file would be open in &quot;stream&quot; mode...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  do p=0,nprocs-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if(my_rank.eq.i)then
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      openfile (append mode)
</span><br>
<span class="quotelev1">&gt;      write_to_file
</span><br>
<span class="quotelev1">&gt;      closefile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    call MPI_Barrier(world,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  enddo
</span><br>
<p>Note that there's no guarantee of the order here, though. Nothing
<br>
prevents rank 30 from hitting that loop before rank 2 does.  To ensure
<br>
order, you could MPI_SEND a token around a ring of MPI processes.
<br>
Yuck.
<br>
<p>One approach might be to use MPI_SCAN to collect offsets (the amount
<br>
of data each process will write) and then do an MPI_FILE_WRITE_AT_ALL. 
<br>
<p>If you are stuck with NFS, then yes, send to master. 
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
<li><strong>Next message:</strong> <a href="12535.php">Ricardo Reis: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Previous message:</strong> <a href="12533.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12485.php">Ricardo Reis: "Re: [OMPI users] Best way to reduce 3D array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12535.php">Ricardo Reis: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Reply:</strong> <a href="12535.php">Ricardo Reis: "Re: [OMPI users] Best way to reduce 3D array"</a>
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
