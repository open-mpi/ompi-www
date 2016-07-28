<?
$subject_val = "[OMPI users] configure error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 08:02:06 2010" -->
<!-- isoreceived="20100224130206" -->
<!-- sent="Wed, 24 Feb 2010 15:01:53 +0200" -->
<!-- isosent="20100224130153" -->
<!-- name="Admin" -->
<!-- email="rockhee.sung_at_[hidden]" -->
<!-- subject="[OMPI users] configure error" -->
<!-- id="213237F0-0543-4891-990D-86768B463748_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] configure error<br>
<strong>From:</strong> Admin (<em>rockhee.sung_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-24 08:01:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12130.php">Gabriele Fatigati: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>Previous message:</strong> <a href="12128.php">jody: "Re: [OMPI users] MPi Abort verbosity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12133.php">Rainer Keller: "Re: [OMPI users] configure error"</a>
<li><strong>Reply:</strong> <a href="12133.php">Rainer Keller: "Re: [OMPI users] configure error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I tried 3 different ways. 
<br>
(1)./configure 
<br>
(2)../configure CFLAGS='-arch x86_64' CXXFLAGS='-arch x86_64'
<br>
(3)../configure FFLAGS='-arch x86_64' CFLAGS='-arch x86_64' CXXFLAGS='-arch x86_64'  
<br>
<p>(1) and (2) gave same error but for (3), error shows such as below..
<br>
Does it mean different default build options between compilers? If so, how can I solve it out then?
<br>
<p>*** Fortran 77 compiler
<br>
checking for gfortran... gfortran
<br>
checking whether we are using the GNU Fortran 77 compiler... no
<br>
checking whether gfortran accepts -g... yes
<br>
checking if Fortran 77 compiler works... no
<br>
**********************************************************************
<br>
* It appears that your Fortran 77 compiler is unable to produce working
<br>
* executables.  A simple test application failed to properly
<br>
* execute.  Note that this is likely not a problem with Open MPI,
<br>
* but a problem with the local compiler installation.  More
<br>
* information (including exactly what command was given to the
<br>
* compiler and what error resulted when the command was executed) is
<br>
* available in the config.log file in this directory.
<br>
**********************************************************************
<br>
configure: error: Could not run a simple Fortran 77 program.  Aborting.
<br>
-------------------------------------
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12129/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12130.php">Gabriele Fatigati: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>Previous message:</strong> <a href="12128.php">jody: "Re: [OMPI users] MPi Abort verbosity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12133.php">Rainer Keller: "Re: [OMPI users] configure error"</a>
<li><strong>Reply:</strong> <a href="12133.php">Rainer Keller: "Re: [OMPI users] configure error"</a>
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
