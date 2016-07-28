<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 31 13:16:00 2006" -->
<!-- isoreceived="20060731171600" -->
<!-- sent="Mon, 31 Jul 2006 11:15:58 -0600" -->
<!-- isosent="20060731171558" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling MPI with pgf90" -->
<!-- id="1154366158.28998.24.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="44CE39FB.90805_at_yahoo.com" -->
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
<strong>Date:</strong> 2006-07-31 13:15:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1701.php">Michael Kluskens: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<li><strong>Previous message:</strong> <a href="1699.php">James McManus: "[OMPI users] Compiling MPI with pgf90"</a>
<li><strong>In reply to:</strong> <a href="1699.php">James McManus: "[OMPI users] Compiling MPI with pgf90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1701.php">Michael Kluskens: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2006-07-31 at 13:12 -0400, James McManus wrote:
<br>
<span class="quotelev1">&gt; I'm trying to compile MPI with pgf90. I use the following configure 
</span><br>
<span class="quotelev1">&gt; settings:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/mpi F90=pgf90 F77=pgf77
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, the compiler is set to gfortran:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Fortran 90/95 compiler
</span><br>
<span class="quotelev1">&gt; checking for gfortran... gfortran
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether gfortran accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler works... yes
</span><br>
<span class="quotelev1">&gt; checking whether pgf90 and gfortran compilers are compatible... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Fortran 77 and Fortran 90 compilers are not link 
</span><br>
<span class="quotelev1">&gt; compatible
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do have gfortran, with its binary in /usr/bin/gfortran, However, I 
</span><br>
<span class="quotelev1">&gt; have removed all path information to it, in .bash_profile and .bashrc, 
</span><br>
<span class="quotelev1">&gt; and have replaced it with path information to pgf90. MPI is still 
</span><br>
<span class="quotelev1">&gt; configured with gfortran and the FC compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using a evaluation version of the pgi compilers.
</span><br>
<p><p>Try:
<br>
<p>&nbsp;./configure --prefix=/usr/local/mpi FC=pgf90 F77=pgf77
<br>
<p>Autoconf looks at the FC variable to choose the modern Fortran compiler,
<br>
not the F90 variable.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1701.php">Michael Kluskens: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<li><strong>Previous message:</strong> <a href="1699.php">James McManus: "[OMPI users] Compiling MPI with pgf90"</a>
<li><strong>In reply to:</strong> <a href="1699.php">James McManus: "[OMPI users] Compiling MPI with pgf90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1701.php">Michael Kluskens: "Re: [OMPI users] Compiling MPI with pgf90"</a>
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
