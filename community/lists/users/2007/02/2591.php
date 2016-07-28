<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb  2 15:00:59 2007" -->
<!-- isoreceived="20070202200059" -->
<!-- sent="Fri, 2 Feb 2007 14:00:53 -0600" -->
<!-- isosent="20070202200053" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Type_create_subarray fails!" -->
<!-- id="20070202200052.GC11312_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="77a596ab0701301355q597e9b16x40235dc509a6d9d3_at_mail.gmail.com" -->
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
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-02 15:00:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2592.php">Ivan de Jesus Deras Tabora: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>Previous message:</strong> <a href="2590.php">Steven A. DuChene: "[OMPI users] Application porting guide or hints?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/01/2574.php">Ivan de Jesus Deras Tabora: "[OMPI users] MPI_Type_create_subarray fails!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2592.php">Ivan de Jesus Deras Tabora: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>Reply:</strong> <a href="2592.php">Ivan de Jesus Deras Tabora: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jan 30, 2007 at 04:55:09PM -0500, Ivan de Jesus Deras Tabora wrote:
<br>
<span class="quotelev1">&gt; Then I find all the references to the MPI_Type_create_subarray and
</span><br>
<span class="quotelev1">&gt; create a little program just to test that part of the code, the code I
</span><br>
<span class="quotelev1">&gt; created is:
</span><br>
...
<br>
<span class="quotelev1">&gt; After running this little program using mpirun, it raises the same error.
</span><br>
<p>This small program runs fine under MPICH2.  Either you have found a
<br>
bug in OpenMPI (passing it a datatype it should be able to handle), or
<br>
a bug in MPICH2 (passing it a datatype it handled, but should have
<br>
complained about).  
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2592.php">Ivan de Jesus Deras Tabora: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>Previous message:</strong> <a href="2590.php">Steven A. DuChene: "[OMPI users] Application porting guide or hints?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/01/2574.php">Ivan de Jesus Deras Tabora: "[OMPI users] MPI_Type_create_subarray fails!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2592.php">Ivan de Jesus Deras Tabora: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>Reply:</strong> <a href="2592.php">Ivan de Jesus Deras Tabora: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
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
