<?
$subject_val = "[OMPI users] Configure MPI_ADDRESS_KIND and MPI_OFFSET_KIND (OSX 10.6; gcc, g95, openmpi-1.4.5.)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar  3 16:56:53 2012" -->
<!-- isoreceived="20120303215653" -->
<!-- sent="Sat, 3 Mar 2012 22:56:49 +0100" -->
<!-- isosent="20120303215649" -->
<!-- name="Anthony Rollett" -->
<!-- email="rollett_at_[hidden]" -->
<!-- subject="[OMPI users] Configure MPI_ADDRESS_KIND and MPI_OFFSET_KIND (OSX 10.6; gcc, g95, openmpi-1.4.5.)" -->
<!-- id="989908FE-C79E-40B5-BAE5-5C2799748B53_at_andrew.cmu.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Configure MPI_ADDRESS_KIND and MPI_OFFSET_KIND (OSX 10.6; gcc, g95, openmpi-1.4.5.)<br>
<strong>From:</strong> Anthony Rollett (<em>rollett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-03 16:56:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18682.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18680.php">Barnet Wagman: "Re: [OMPI users] &quot;Connection to lifeline&quot; with openmpi-1.4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18684.php">Jeffrey Squyres: "Re: [OMPI users] Configure MPI_ADDRESS_KIND and MPI_OFFSET_KIND (OSX 10.6; gcc, g95, openmpi-1.4.5.)"</a>
<li><strong>Reply:</strong> <a href="18684.php">Jeffrey Squyres: "Re: [OMPI users] Configure MPI_ADDRESS_KIND and MPI_OFFSET_KIND (OSX 10.6; gcc, g95, openmpi-1.4.5.)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings - I am able to configure and install 1.4.5 with fortran support.  However, when I try to use MPI_ADDRESS_KIND and MPI_OFFSET_KIND, I find that mpif-config.h has these parameters set to 0 (and I get compiler errors).  Is there a way to configure and have these be non-zero?  Is it safe to manually edit mpif-config.h?!  Obviously I can supply more details, but even a hint a two will probably allow me to solve this one.
<br>
Thanks, Tony Rollett.
<br>
<p>PS: I used  ./configure --prefix=/Users/Shared/openmpi-1.4.5 CC=gcc F77=g95
<br>
F90=g95 CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64
<br>
LDFLAGS=-L/usr/local/lib CPPFLAGS=-I/usr/local/include
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18682.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18680.php">Barnet Wagman: "Re: [OMPI users] &quot;Connection to lifeline&quot; with openmpi-1.4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18684.php">Jeffrey Squyres: "Re: [OMPI users] Configure MPI_ADDRESS_KIND and MPI_OFFSET_KIND (OSX 10.6; gcc, g95, openmpi-1.4.5.)"</a>
<li><strong>Reply:</strong> <a href="18684.php">Jeffrey Squyres: "Re: [OMPI users] Configure MPI_ADDRESS_KIND and MPI_OFFSET_KIND (OSX 10.6; gcc, g95, openmpi-1.4.5.)"</a>
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
