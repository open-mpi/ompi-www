<?
$subject_val = "[OMPI users] Cross-compiling openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 10:26:40 2012" -->
<!-- isoreceived="20120208152640" -->
<!-- sent="Wed, 8 Feb 2012 16:26:15 +0100" -->
<!-- isosent="20120208152615" -->
<!-- name="Hossein Talebi" -->
<!-- email="talebi.hossein_at_[hidden]" -->
<!-- subject="[OMPI users] Cross-compiling openmpi" -->
<!-- id="CAEjaKwDRn9oEaj=tGYsHD75-raR-j=_oLJFiHagg3wOnaNeipw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Cross-compiling openmpi<br>
<strong>From:</strong> Hossein Talebi (<em>talebi.hossein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-08 10:26:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18423.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18421.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,
<br>
<p>I try to cross-compile openmpi under linux for Windows. I have Ubuntu
<br>
linux 11.1 and x86_64-w64-mingw32. When I run the configure commands I
<br>
get the error message below:
<br>
<p>*** Fortran 77 compiler
<br>
checking for x86_64-w64-mingw32-gfortran... x86_64-w64-mingw32-gfortran
<br>
checking whether we are using the GNU Fortran 77 compiler... yes
<br>
checking whether x86_64-w64-mingw32-gfortran accepts -g... yes
<br>
checking if Fortran 77 compiler works... links (cross compiling)
<br>
checking x86_64-w64-mingw32-gfortran external symbol convention...
<br>
single underscore
<br>
checking if C and Fortran 77 are link compatible... yes
<br>
checking to see if F77 compiler likes the C++ exception flags...
<br>
skipped (no C++ exceptions flags)
<br>
checking if Fortran 77 compiler supports LOGICAL... yes
<br>
checking size of Fortran 77 LOGICAL... configure: error: Can not
<br>
determine size of LOGICAL when cross-compiling
<br>
<p><p>my configure options are:
<br>
&nbsp;./configure --prefix=/opt/mpich2.1.5_mingw64/
<br>
--host=x86_64-w64-mingw32  CXX=x86_64-w64-mingw32-g++
<br>
CC=x86_64-w64-mingw32-gcc  FC=x86_64-w64-mingw32-gfortran
<br>
<p>Please help me to know if what I want to do is possible, if yes, how
<br>
can I fix this issue.
<br>
<p>Thank you.
<br>
<p><p>Cheers
<br>
Hossein
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18423.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18421.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
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
