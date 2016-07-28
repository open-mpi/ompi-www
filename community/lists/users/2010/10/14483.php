<?
$subject_val = "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 15 17:28:52 2010" -->
<!-- isoreceived="20101015212852" -->
<!-- sent="Fri, 15 Oct 2010 17:28:42 -0400" -->
<!-- isosent="20101015212842" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array" -->
<!-- id="4CB8C78A.2070109_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9A1F8DCA-A7DE-4F87-A50E-86E5A7B6F654_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-15 17:28:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14484.php">Jeff Squyres: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array"</a>
<li><strong>Previous message:</strong> <a href="14482.php">Gus Correa: "Re: [OMPI users] self-messaging questions"</a>
<li><strong>In reply to:</strong> <a href="14479.php">Jeff Squyres: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14484.php">Jeff Squyres: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array"</a>
<li><strong>Reply:</strong> <a href="14484.php">Jeff Squyres: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>Thank you so much for taking the time to read and answer all my blurb.
<br>
<p>Yes, the Matlabish multidimensional arrays of Fortran90 provide
<br>
convenient ways to refer to array sections,
<br>
to avoid explicit calculation of address arithmetic,
<br>
etc, but they can be quite annoying when all you want is to pass the
<br>
array address to a subprogram and forget about dimensionality checks.
<br>
<p>As for MPI_STARTALL, MPI_WAITALL, and any function with
<br>
an array of requests argument (and perhaps array of statuses also)
<br>
I am certainly happy with the
<br>
&quot;pass a assumed-size array&quot; ( req(*) ) solution,
<br>
although the purists may frown at my code.
<br>
This solution also avoids any possible overhead
<br>
that looping over MPI_START may incur.
<br>
<p>Just a note about the MPI documentation and the Fortran90 bindings.
<br>
It would be helpful if the MPI function man pages, and
<br>
perhaps any new edition or third volume of the &quot;MPI Complete Reference&quot;,
<br>
maybe the MPI-3 standard, were more clear about the subroutine
<br>
arguments in the Fortran90 bindings.
<br>
Currently they seem to deal only with Fortran77,
<br>
only mention that a certain argument is an array of some
<br>
basic/MPI type, and even use the &quot;assumed-size array notation&quot;,
<br>
e.g.  &quot;ARRAY_OF_REQUESTS(*)&quot; .
<br>
Nothing is said about array rank/dimensionality
<br>
restrictions or capabilities,
<br>
which would be helpful information for those like me
<br>
who are enchained to Fortran90 like Prometheus to the cliff.
<br>
<p>Many thanks again for your help.
<br>
<p>Cheers,
<br>
Gus Correa
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 15, 2010, at 12:17 AM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am having trouble compiling code with MPI_STARTALL using
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.4.2 mpif90 built with gcc (4.1.2) and Intel ifort (10.1.017),
</span><br>
<span class="quotelev2">&gt;&gt; when the array of requests is multi-dimensional.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right-o -- it's the strict bindings checking in F90 that's biting you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It gives me this error message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; **************************
</span><br>
<span class="quotelev2">&gt;&gt; fortcom: Error: mpiwrap_mod.F90, line 478: There is no matching specific subroutine for this generic subroutine call.   [MPI_STARTALL]
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_STARTALL(nreq,req,ierr)
</span><br>
<span class="quotelev2">&gt;&gt; ---------^
</span><br>
<span class="quotelev2">&gt;&gt; **************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, if I replace MPI_STARTALL by a loop that calls
</span><br>
<span class="quotelev2">&gt;&gt; MPI_START repeated times, the compilation succeeds.
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if the serialization imposed by the loop may
</span><br>
<span class="quotelev2">&gt;&gt; have some performance impact,
</span><br>
<span class="quotelev2">&gt;&gt; or if MPI_STARTALL just implements the same type of loop.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_STARTALL does do the same type of loop -- you do gain a bit of performance (depending on how big your loop is) just because there's one less function call traversal.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Another workaround is to declare my array of requests
</span><br>
<span class="quotelev2">&gt;&gt; as a one-dimensional assumed-size array inside my subroutine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem seems to be that MPI_STARTALL doesn't handle multi-dimensional arrays of requests.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can live with either workaround above,
</span><br>
<span class="quotelev2">&gt;&gt; but is this supposed to be so?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Based on my understanding of Fortran, yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I poked around on the OpenMPI code in ompi/mpi/f90/scripts
</span><br>
<span class="quotelev2">&gt;&gt; and I found out that several OpenMPI Fortran90 subroutines
</span><br>
<span class="quotelev2">&gt;&gt; have code to handle arrays up to rank 7 (the Fortran90 maximum),
</span><br>
<span class="quotelev2">&gt;&gt; mostly for the send and receive buffers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right.  Those are different buffers, though -- 
</span><br>
<span class="quotelev1">&gt; those are the choice buffers for sending and receiving.  
</span><br>
<span class="quotelev1">&gt; OMPI just gets the starting pointer and iterates through memory 
</span><br>
<span class="quotelev1">&gt; according to the associated count and MPI datatype.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For requests, it's an array of structures 
</span><br>
<span class="quotelev1">&gt; (i.e., the fortran integers are converted to their C struct counterparts).  
</span><br>
<span class="quotelev1">&gt; And there's a defined shape/size/whatever-the-right-fortran-term-is for that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I guess it would be nice if all OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; subroutines in the Fortran90 bindings would accept
</span><br>
<span class="quotelev2">&gt;&gt; arrays of rank up to 7 on all of their array dummy arguments.
</span><br>
<span class="quotelev2">&gt;&gt; Assuming this doesn't violate the MPI standard, of course.
</span><br>
<span class="quotelev2">&gt;&gt; This would allow more flexibility when writing MPI programs
</span><br>
<span class="quotelev2">&gt;&gt; in Fortran90.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;From my understanding of Fortran, that would violate the MPI spec.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You could, I think, use an array subsection when you call 
</span><br>
<span class="quotelev1">&gt; MPI_STARALL that would give you a 1D array of integers, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14484.php">Jeff Squyres: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array"</a>
<li><strong>Previous message:</strong> <a href="14482.php">Gus Correa: "Re: [OMPI users] self-messaging questions"</a>
<li><strong>In reply to:</strong> <a href="14479.php">Jeff Squyres: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14484.php">Jeff Squyres: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array"</a>
<li><strong>Reply:</strong> <a href="14484.php">Jeff Squyres: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array"</a>
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
