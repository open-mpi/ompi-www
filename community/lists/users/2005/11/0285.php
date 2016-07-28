<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov  7 14:05:12 2005" -->
<!-- isoreceived="20051107190512" -->
<!-- sent="Mon, 7 Nov 2005 14:05:02 -0500" -->
<!-- isosent="20051107190502" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime" -->
<!-- id="3AE5C826-7EB8-4CA2-A69D-5A29087B63C1_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0CDC7384-C0FC-4447-B834-CF757F632439_at_rpi.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-07 14:05:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0286.php">Borenstein, Bernard S: "[O-MPI users] help with openmpi rc5r8005"</a>
<li><strong>Previous message:</strong> <a href="0284.php">Brian Barrett: "Re: [O-MPI users] TCP"</a>
<li><strong>In reply to:</strong> <a href="0280.php">Charles Williams: "[O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0290.php">Charles Williams: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 4, 2005, at 11:41 AM, Charles Williams wrote:
<br>
<p><span class="quotelev1">&gt; I have been using Open MPI in conjunction with PETSc on OSX 10.4,  
</span><br>
<span class="quotelev1">&gt; and had been having trouble with undefined symbols when trying  
</span><br>
<span class="quotelev1">&gt; tests with PETSc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Undefined symbols:
</span><br>
<span class="quotelev1">&gt; _pmpi_wtick__
</span><br>
<span class="quotelev1">&gt; _pmpi_wtime__
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After playing around with things for a while, I realized that these  
</span><br>
<span class="quotelev1">&gt; undefined symbols only appeared in libmpi_f90.a, and were somehow  
</span><br>
<span class="quotelev1">&gt; being pulled into the PETSc libraries when they were built.  The  
</span><br>
<span class="quotelev1">&gt; problem occurred when trying to build an executable that included  
</span><br>
<span class="quotelev1">&gt; libraries with these undefined symbols.  The simplest solution I  
</span><br>
<span class="quotelev1">&gt; could think of was to edit include/mpif.h.in.  In the last two  
</span><br>
<span class="quotelev1">&gt; lines of this file I simply changed:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;       double precision MPI_WTIME, MPI_WTICK, PMPI_WTIME, PMPI_WTICK
</span><br>
<span class="quotelev2">&gt; &gt;       external MPI_WTIME, MPI_WTICK, PMPI_WTIME, PMPI_WTICK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;       double precision MPI_WTIME, MPI_WTICK
</span><br>
<span class="quotelev1">&gt; &lt;       external MPI_WTIME, MPI_WTICK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This fixed the problem for me, and I am wondering whether this is a  
</span><br>
<span class="quotelev1">&gt; reasonable fix.  My understanding is that the functions are not  
</span><br>
<span class="quotelev1">&gt; actually part of open-mpi.  Would this approach break anything  
</span><br>
<span class="quotelev1">&gt; else?  If not, it would be nice to include it, since the only other  
</span><br>
<span class="quotelev1">&gt; option I can think of for fixing things on OSX 10.4 with the  
</span><br>
<span class="quotelev1">&gt; current build procedures is to strip libraries of undefined symbols  
</span><br>
<span class="quotelev1">&gt; before they are used.
</span><br>
<p>Sorry about that.  Some time ago, we decided to make MPI_WTIME and  
<br>
MPI_WTICK inline functions in C and not provide a profiling interface  
<br>
for them.  Unfortunately, it appears we didn't properly update the  
<br>
Fortran or C++ interfaces.  I committed a change so PMPI_WTICK /  
<br>
PMPI_WTIME exist and work properly.  That should fix your problem.
<br>
<p>The change will be in the next 1.0 release candidate, and the nightly  
<br>
tarballs that will be available tomorrow morning.  Release candidates  
<br>
and betas will be available at the URL below:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/">http://www.open-mpi.org/software/</a>
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0286.php">Borenstein, Bernard S: "[O-MPI users] help with openmpi rc5r8005"</a>
<li><strong>Previous message:</strong> <a href="0284.php">Brian Barrett: "Re: [O-MPI users] TCP"</a>
<li><strong>In reply to:</strong> <a href="0280.php">Charles Williams: "[O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0290.php">Charles Williams: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
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
