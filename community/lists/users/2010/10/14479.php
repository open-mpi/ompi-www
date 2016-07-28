<?
$subject_val = "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 15 10:50:58 2010" -->
<!-- isoreceived="20101015145058" -->
<!-- sent="Fri, 15 Oct 2010 10:50:51 -0400" -->
<!-- isosent="20101015145051" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array" -->
<!-- id="9A1F8DCA-A7DE-4F87-A50E-86E5A7B6F654_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CB7D5C6.7070303_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-15 10:50:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14480.php">Matthias Jurenz: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14478.php">Jeff Squyres: "Re: [OMPI users] self-messaging questions"</a>
<li><strong>In reply to:</strong> <a href="14477.php">Gus Correa: "[OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14483.php">Gus Correa: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array"</a>
<li><strong>Reply:</strong> <a href="14483.php">Gus Correa: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 15, 2010, at 12:17 AM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; I am having trouble compiling code with MPI_STARTALL using
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.4.2 mpif90 built with gcc (4.1.2) and Intel ifort (10.1.017),
</span><br>
<span class="quotelev1">&gt; when the array of requests is multi-dimensional.
</span><br>
<p>Right-o -- it's the strict bindings checking in F90 that's biting you.
<br>
<p><span class="quotelev1">&gt; It gives me this error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **************************
</span><br>
<span class="quotelev1">&gt; fortcom: Error: mpiwrap_mod.F90, line 478: There is no matching specific subroutine for this generic subroutine call.   [MPI_STARTALL]
</span><br>
<span class="quotelev1">&gt;    call MPI_STARTALL(nreq,req,ierr)
</span><br>
<span class="quotelev1">&gt; ---------^
</span><br>
<span class="quotelev1">&gt; **************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, if I replace MPI_STARTALL by a loop that calls
</span><br>
<span class="quotelev1">&gt; MPI_START repeated times, the compilation succeeds.
</span><br>
<span class="quotelev1">&gt; I wonder if the serialization imposed by the loop may
</span><br>
<span class="quotelev1">&gt; have some performance impact,
</span><br>
<span class="quotelev1">&gt; or if MPI_STARTALL just implements the same type of loop.
</span><br>
<p>MPI_STARTALL does do the same type of loop -- you do gain a bit of performance (depending on how big your loop is) just because there's one less function call traversal.
<br>
<p><span class="quotelev1">&gt; Another workaround is to declare my array of requests
</span><br>
<span class="quotelev1">&gt; as a one-dimensional assumed-size array inside my subroutine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem seems to be that MPI_STARTALL doesn't handle multi-dimensional arrays of requests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can live with either workaround above,
</span><br>
<span class="quotelev1">&gt; but is this supposed to be so?
</span><br>
<p>Based on my understanding of Fortran, yes.
<br>
<p><span class="quotelev1">&gt; I poked around on the OpenMPI code in ompi/mpi/f90/scripts
</span><br>
<span class="quotelev1">&gt; and I found out that several OpenMPI Fortran90 subroutines
</span><br>
<span class="quotelev1">&gt; have code to handle arrays up to rank 7 (the Fortran90 maximum),
</span><br>
<span class="quotelev1">&gt; mostly for the send and receive buffers.
</span><br>
<p>Right.  Those are different buffers, though -- those are the choice buffers for sending and receiving.  OMPI just gets the starting pointer and iterates through memory according to the associated count and MPI datatype.
<br>
<p>For requests, it's an array of structures (i.e., the fortran integers are converted to their C struct counterparts).  And there's a defined shape/size/whatever-the-right-fortran-term-is for that.
<br>
<p><span class="quotelev1">&gt; I guess it would be nice if all OpenMPI
</span><br>
<span class="quotelev1">&gt; subroutines in the Fortran90 bindings would accept
</span><br>
<span class="quotelev1">&gt; arrays of rank up to 7 on all of their array dummy arguments.
</span><br>
<span class="quotelev1">&gt; Assuming this doesn't violate the MPI standard, of course.
</span><br>
<span class="quotelev1">&gt; This would allow more flexibility when writing MPI programs
</span><br>
<span class="quotelev1">&gt; in Fortran90.
</span><br>
<p><span class="quotelev1">&gt;From my understanding of Fortran, that would violate the MPI spec.
</span><br>
<p>You could, I think, use an array subsection when you call MPI_STARALL that would give you a 1D array of integers, right?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14480.php">Matthias Jurenz: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14478.php">Jeff Squyres: "Re: [OMPI users] self-messaging questions"</a>
<li><strong>In reply to:</strong> <a href="14477.php">Gus Correa: "[OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14483.php">Gus Correa: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array"</a>
<li><strong>Reply:</strong> <a href="14483.php">Gus Correa: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array"</a>
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
