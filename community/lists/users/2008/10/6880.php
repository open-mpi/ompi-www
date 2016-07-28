<?
$subject_val = "[OMPI users] build failed using intel compilers on mac os x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 11:09:19 2008" -->
<!-- isoreceived="20081007150919" -->
<!-- sent="Tue, 7 Oct 2008 17:08:01 +0200" -->
<!-- isosent="20081007150801" -->
<!-- name="Massimo Cafaro" -->
<!-- email="massimo.cafaro_at_[hidden]" -->
<!-- subject="[OMPI users] build failed using intel compilers on mac os x" -->
<!-- id="8F22AA1A-2A8A-408C-BB27-8757C7A08CAC_at_unile.it" -->
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
<strong>Subject:</strong> [OMPI users] build failed using intel compilers on mac os x<br>
<strong>From:</strong> Massimo Cafaro (<em>massimo.cafaro_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-07 11:08:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6881.php">Rolf Vandevaart: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>Previous message:</strong> <a href="6879.php">Doug Reeder: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6929.php">Jeff Squyres: "Re: [OMPI users] build failed using intel compilers on mac os x"</a>
<li><strong>Reply:</strong> <a href="6929.php">Jeff Squyres: "Re: [OMPI users] build failed using intel compilers on mac os x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I tried to build the latest v1.2.7 open-mpi version on Mac OS X 10.5.5  
<br>
using the intel c, c++ and fortran compilers v10.1.017 (the latest  
<br>
ones released by intel). Before starting the build I have properly  
<br>
configured the CC, CXX, F77 and FC environment variables (to icc and  
<br>
ifort). The build failed due to undefined symbols.
<br>
<p>I am attaching a log of the failed build process.
<br>
Any clue? Am I doing something wrong?
<br>
<p>Also, to build a 64 bit version it is enough to supply in the  
<br>
corresponding environment variables the -m64 option ?
<br>
Thank you in advance and best regards,
<br>
<p>Massimo
<br>
<p><p><pre>
-- 
*******************************************************************************************************
  Massimo Cafaro, Ph.D.                              Additional  
affiliations:
  Assistant Professor                                     National  
Nanotechnology Laboratory (NNL/CNR-INFM)
  Dept. of Engineering for Innovation         Euro-Mediterranean  
Centre for Climate Change
  University of Salento, Lecce, Italy            SPACI Consortium
  Via per Monteroni
  73100 Lecce, Italy
  Voice  +39 0832 297371
  Fax +39 0832 298173
  Web     <a href="http://sara.unile.it/~cafaro">http://sara.unile.it/~cafaro</a>
  E-mail massimo.cafaro_at_[hidden]
               cafaro_at_[hidden]
*******************************************************************************************************
</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6880/openmpi_build">openmpi_build</a>
</ul>
<!-- attachment="openmpi_build" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6881.php">Rolf Vandevaart: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>Previous message:</strong> <a href="6879.php">Doug Reeder: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6929.php">Jeff Squyres: "Re: [OMPI users] build failed using intel compilers on mac os x"</a>
<li><strong>Reply:</strong> <a href="6929.php">Jeff Squyres: "Re: [OMPI users] build failed using intel compilers on mac os x"</a>
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
