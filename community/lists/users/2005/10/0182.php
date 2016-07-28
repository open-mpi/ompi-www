<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 12 05:20:51 2005" -->
<!-- isoreceived="20051012102051" -->
<!-- sent="Wed, 12 Oct 2005 12:20:28 +0200" -->
<!-- isosent="20051012102028" -->
<!-- name="Toon Knapen" -->
<!-- email="toon.knapen_at_[hidden]" -->
<!-- subject="[O-MPI users] MorphMPI based on fortran itf (was: MPI ABI)" -->
<!-- id="434CE36C.90705_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6.2.1.2.2.20051011124303.05206e00_at_pop.mcs.anl.gov" -->
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
<strong>Date:</strong> 2005-10-12 05:20:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0183.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Previous message:</strong> <a href="0181.php">Neil Storer: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
William Gropp wrote:
<br>
<span class="quotelev1">&gt; At 08:44 AM 10/11/2005, Toon Knapen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; William Gropp wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; in the Fortran source mapped to
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_INIT
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpi_init
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpi_init_
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpi_init__
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Init_
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Each of these has been chosen by some Fortran 77 compiler.  Confusion
</span><br>
<span class="quotelev3">&gt;&gt; &gt; over this is one of the most common problems that users face,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; particularly when they use command line options to *change* the way the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Fortran compiler maps the names in their code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but that's an easy one to solve. We already do it for BLAS and LAPACK.
</span><br>
<span class="quotelev2">&gt;&gt; Based on some preprocessor directives we generate macro's that convert
</span><br>
<span class="quotelev2">&gt;&gt; every 'dgemm' in our C/C++ app into DGEMM, dgemm_, dgemm__ etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's not the point; all MPI implementations do something like this
</span><br>
<span class="quotelev1">&gt; anyway (as far as I know, all MPI implementations implement the Fortran
</span><br>
<span class="quotelev1">&gt; interface using C code and something to handle these issues).  The
</span><br>
<span class="quotelev1">&gt; problem is: which of these names do you put into the MPI object
</span><br>
<span class="quotelev1">&gt; library?  
</span><br>
<p>Correct, the fortran interface is not exactly an ABI. However the
<br>
fortran interface makes developing a MorphMPI easy.
<br>
<p>What I mean with a MorphMPI library is a small lightweight library that
<br>
is inbetween the application and the MPI library. By recompiling the
<br>
MorphMPI library, the application can be relinked with whatever MPI
<br>
library (without thus having access to the sources of the application).
<br>
<p>The MorphMPI just needs to provide a function to return the value of the
<br>
different named constants and the logical value's. Additionally it needs
<br>
to map the symbols (corresponding to the function-names) as used by the
<br>
app to the symbols as defined by the mpi library. That's all there is to
<br>
it AFAICT
<br>
<p>toon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0183.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Previous message:</strong> <a href="0181.php">Neil Storer: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
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
