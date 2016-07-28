<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 11 08:44:25 2005" -->
<!-- isoreceived="20051011134425" -->
<!-- sent="Tue, 11 Oct 2005 15:44:07 +0200" -->
<!-- isosent="20051011134407" -->
<!-- name="Toon Knapen" -->
<!-- email="toon.knapen_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] [Beowulf] MPI ABI" -->
<!-- id="434BC1A7.8030300_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6.2.1.2.2.20051011074924.051f6eb0_at_pop.mcs.anl.gov" -->
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
<strong>From:</strong> Toon Knapen (<em>toon.knapen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-11 08:44:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0177.php">sdamjad: "[O-MPI users] RE-make problems"</a>
<li><strong>Previous message:</strong> <a href="0175.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Maybe in reply to:</strong> <a href="0167.php">Joachim Worringen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0180.php">Greg Lindahl: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
William Gropp wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fortran name mangling here means how are Fortran routine names in the
</span><br>
<span class="quotelev1">&gt; source code mapped to names in the object library.  For example, is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Init
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in the Fortran source mapped to
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_INIT
</span><br>
<span class="quotelev1">&gt; mpi_init
</span><br>
<span class="quotelev1">&gt; mpi_init_
</span><br>
<span class="quotelev1">&gt; mpi_init__
</span><br>
<span class="quotelev1">&gt; MPI_Init_
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Each of these has been chosen by some Fortran 77 compiler.  Confusion
</span><br>
<span class="quotelev1">&gt; over this is one of the most common problems that users face,
</span><br>
<span class="quotelev1">&gt; particularly when they use command line options to *change* the way the
</span><br>
<span class="quotelev1">&gt; Fortran compiler maps the names in their code.
</span><br>
<p><p>but that's an easy one to solve. We already do it for BLAS and LAPACK.
<br>
Based on some preprocessor directives we generate macro's that convert
<br>
every 'dgemm' in our C/C++ app into DGEMM, dgemm_, dgemm__ etc.
<br>
<p>It get's more complicated once the arguments are taken into account to
<br>
mangle the function-name (like in C++ and also f90 AFAICT). The x86 ABI
<br>
defines how the C++ compiler should mangle the arguments along with the
<br>
function-name but for fortran90 there is no such ABI, certainly not on
<br>
all platforms.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Calling conventions introduce another issue.  How are Fortran CHARACTER
</span><br>
<span class="quotelev1">&gt; data passed to and from a routine?  A common but not universal choice in
</span><br>
<span class="quotelev1">&gt; the Unix world is to pass the address of the character data in the
</span><br>
<span class="quotelev1">&gt; position that the argument occurs in the calling sequence and append as
</span><br>
<span class="quotelev1">&gt; an integer value (not pointer to integer) the length of the CHARACTER
</span><br>
<span class="quotelev1">&gt; data to the end of the argument list.  Other compilers insert the length
</span><br>
<span class="quotelev1">&gt; immediately after the address of the character data and still others
</span><br>
<span class="quotelev1">&gt; pass the address of a dope vector describing the character data.
</span><br>
<p><p>There again we have routines that do 'the right thing' dependent on the
<br>
compiler that is being detected. Not very complicated (once you found
<br>
out what the convention is ;-).
<br>
<p><p><span class="quotelev3">&gt;&gt; &gt; Fortran LOGICAL
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; could you elaborate?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the value of .TRUE.?  Is it 1? 0? -1? Any negative value?  All
</span><br>
<span class="quotelev1">&gt; of those have been used by some Fortran 77 compiler.  The Fortran
</span><br>
<span class="quotelev1">&gt; standard leaves this up to the implementer.
</span><br>
<p>Hm, I never encountered this problem yet.
<br>
<p><p>The one thing about linking f77 and C that I do not know how to solve
<br>
yet is e.g. fortran functions that return a complex. I understand
<br>
functions that return e.g. a double just use the same calling convention
<br>
as C functions that return a double. Fortran functions that return a
<br>
complex however use a calling convention that is similar to C functions
<br>
that have the same argument list but with an additional complex argument
<br>
and a void return type. And I'm not sure this is the case on all
<br>
platforms BTW.
<br>
<p><p>toon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0177.php">sdamjad: "[O-MPI users] RE-make problems"</a>
<li><strong>Previous message:</strong> <a href="0175.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Maybe in reply to:</strong> <a href="0167.php">Joachim Worringen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0180.php">Greg Lindahl: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
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
