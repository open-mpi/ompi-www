<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 31 13:12:47 2006" -->
<!-- isoreceived="20060731171247" -->
<!-- sent="Mon, 31 Jul 2006 13:12:27 -0400" -->
<!-- isosent="20060731171227" -->
<!-- name="James McManus" -->
<!-- email="jmpmcmanus_at_[hidden]" -->
<!-- subject="[OMPI users] Compiling MPI with pgf90" -->
<!-- id="44CE39FB.90805_at_yahoo.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> James McManus (<em>jmpmcmanus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-31 13:12:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1700.php">Brian Barrett: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<li><strong>Previous message:</strong> <a href="1698.php">Jeff Squyres: "Re: [OMPI users] minor program build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1700.php">Brian Barrett: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<li><strong>Reply:</strong> <a href="1700.php">Brian Barrett: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<li><strong>Reply:</strong> <a href="1701.php">Michael Kluskens: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to compile MPI with pgf90. I use the following configure 
<br>
settings:
<br>
<p>./configure --prefix=/usr/local/mpi F90=pgf90 F77=pgf77
<br>
<p>However, the compiler is set to gfortran:
<br>
<p>*** Fortran 90/95 compiler
<br>
checking for gfortran... gfortran
<br>
checking whether we are using the GNU Fortran compiler... yes
<br>
checking whether gfortran accepts -g... yes
<br>
checking if Fortran compiler works... yes
<br>
checking whether pgf90 and gfortran compilers are compatible... no
<br>
configure: WARNING: *** Fortran 77 and Fortran 90 compilers are not link 
<br>
compatible
<br>
<p>I do have gfortran, with its binary in /usr/bin/gfortran, However, I 
<br>
have removed all path information to it, in .bash_profile and .bashrc, 
<br>
and have replaced it with path information to pgf90. MPI is still 
<br>
configured with gfortran and the FC compiler.
<br>
<p>I am using a evaluation version of the pgi compilers.
<br>
<p>Jim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1700.php">Brian Barrett: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<li><strong>Previous message:</strong> <a href="1698.php">Jeff Squyres: "Re: [OMPI users] minor program build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1700.php">Brian Barrett: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<li><strong>Reply:</strong> <a href="1700.php">Brian Barrett: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<li><strong>Reply:</strong> <a href="1701.php">Michael Kluskens: "Re: [OMPI users] Compiling MPI with pgf90"</a>
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
