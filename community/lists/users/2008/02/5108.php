<?
$subject_val = "[OMPI users] OpenMpi and Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 29 16:27:19 2008" -->
<!-- isoreceived="20080229212719" -->
<!-- sent="Fri, 29 Feb 2008 16:26:59 -0500" -->
<!-- isosent="20080229212659" -->
<!-- name="Frank Tabakin" -->
<!-- email="tabakin_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMpi and Leopard" -->
<!-- id="2CDB68DC-3079-499A-9D5C-9332E46F3697_at_pitt.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] OpenMpi and Leopard<br>
<strong>From:</strong> Frank Tabakin (<em>tabakin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-29 16:26:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5109.php">Jeff Squyres: "Re: [OMPI users] OpenMpi and Leopard"</a>
<li><strong>Previous message:</strong> <a href="5107.php">Jeff Squyres: "Re: [OMPI users] Error compiling open-mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5109.php">Jeff Squyres: "Re: [OMPI users] OpenMpi and Leopard"</a>
<li><strong>Reply:</strong> <a href="5109.php">Jeff Squyres: "Re: [OMPI users] OpenMpi and Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just upgraded to OSX 10.5.2 on my imac
<br>
and am trying to install openmpi  for use with absoft fortran 90
<br>
based on their instruction page:
<br>
<a href="http://www.absoft.com/Products/Compilers/Fortran/Linux/fortran95/BuildingOpenMPI_MacIntel_v101.pdf">http://www.absoft.com/Products/Compilers/Fortran/Linux/fortran95/BuildingOpenMPI_MacIntel_v101.pdf</a>
<br>
<p>I got into trouble as per info below.
<br>
Seems to be a gcc problem.
<br>
<p>any suggestions?
<br>
Thanks for helping.
<br>
Frank
<br>
<p>==============
<br>
<p>sudo ./configure CC=/usr/bin/gcc F77=$ABSOFT/bin/f77 FFLAGS=&#148;-lU77&#148; FC= 
<br>
$ABSOFT/bin/f90 FCFLAGS=&#148;-lU77&#148;
<br>
= 
<br>
= 
<br>
= 
<br>
= 
<br>
========================================================================
<br>
== Compiler and preprocessor tests
<br>
= 
<br>
= 
<br>
= 
<br>
= 
<br>
========================================================================
<br>
<p>*** C compiler and preprocessor
<br>
checking for style of include used by make... GNU
<br>
checking for gcc... /usr/bin/gcc
<br>
checking for C compiler default output file name...
<br>
configure: error: C compiler cannot create executables
<br>
See `config.log' for more details.
<br>
<p><p>*****************************************************************************
<br>
**                                                                         **
<br>
** WARNING:  This email contains an attachment of a very suspicious type.  **
<br>
** You are urged NOT to open this attachment unless you are absolutely     **
<br>
** sure it is legitimate.  Opening this attachment may cause irreparable   **
<br>
** damage to your computer and your files.  If you have any questions      **
<br>
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
<br>
**                                                                         **
<br>
** This warning was added by the IU Computer Science Dept. mail scanner.   **
<br>
*****************************************************************************
<br>
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5108/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/zip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5108/config.zip">config.zip</a>
</ul>
<!-- attachment="config.zip" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5108/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5109.php">Jeff Squyres: "Re: [OMPI users] OpenMpi and Leopard"</a>
<li><strong>Previous message:</strong> <a href="5107.php">Jeff Squyres: "Re: [OMPI users] Error compiling open-mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5109.php">Jeff Squyres: "Re: [OMPI users] OpenMpi and Leopard"</a>
<li><strong>Reply:</strong> <a href="5109.php">Jeff Squyres: "Re: [OMPI users] OpenMpi and Leopard"</a>
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
