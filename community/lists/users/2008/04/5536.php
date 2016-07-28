<?
$subject_val = "Re: [OMPI users] Fwd: mpicc does not link against Fortran libraries?	Withdrawn";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 22:27:16 2008" -->
<!-- isoreceived="20080426022716" -->
<!-- sent="Fri, 25 Apr 2008 21:27:06 -0500" -->
<!-- isosent="20080426022706" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: mpicc does not link against Fortran libraries?	Withdrawn" -->
<!-- id="18450.37626.89791.988623_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E2050E86-DFF9-4F2B-8BA1-6186DB446596_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: mpicc does not link against Fortran libraries?	Withdrawn<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 22:27:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5537.php">Alberto Giannetti: "[OMPI users] Client/Server test"</a>
<li><strong>Previous message:</strong> <a href="5535.php">Barry Smith: "[OMPI users] Fwd: mpicc does not link against Fortran libraries? Withdrawn"</a>
<li><strong>In reply to:</strong> <a href="5535.php">Barry Smith: "[OMPI users] Fwd: mpicc does not link against Fortran libraries? Withdrawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5538.php">Jeff Squyres: "Re: [OMPI users] Fwd: mpicc does not link against Fortran libraries? Withdrawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 25 April 2008 at 20:10, Barry Smith wrote:
<br>
| 
<br>
| 
<br>
|     A smarter colleague then I, has reminded me that is very difficult  
<br>
| to obtain all the
<br>
| Fortran libraries and linker options that would be needed to allow the  
<br>
| mpicc compiler to
<br>
| also link against the MPI fortran libraries successfully. I therefor  
<br>
| withdraw my
<br>
| original question?
<br>
<p>Well yes, which is why Open MPI gives you the _Fortran_ wrappers
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpif77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpif90
<br>
<p>in addition to mpicc and mpic++ --- did you try those?  And strictly
<br>
speaking, there is no 'mpicc compiler' but a bunch of libraries etc that are
<br>
used along with the standard GNU Compiler Collection (aka gcc, g++, gfortran
<br>
et al).
<br>
<p>Hope this helps, and greetings to Argonne from 15+ miles northeast, 
<br>
<p>Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5537.php">Alberto Giannetti: "[OMPI users] Client/Server test"</a>
<li><strong>Previous message:</strong> <a href="5535.php">Barry Smith: "[OMPI users] Fwd: mpicc does not link against Fortran libraries? Withdrawn"</a>
<li><strong>In reply to:</strong> <a href="5535.php">Barry Smith: "[OMPI users] Fwd: mpicc does not link against Fortran libraries? Withdrawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5538.php">Jeff Squyres: "Re: [OMPI users] Fwd: mpicc does not link against Fortran libraries? Withdrawn"</a>
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
