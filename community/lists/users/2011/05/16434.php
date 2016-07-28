<?
$subject_val = "[OMPI users] Open MPI 1.4.3 - Mac OS X 10.6.7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 17:30:00 2011" -->
<!-- isoreceived="20110503213000" -->
<!-- sent="Tue, 3 May 2011 16:29:54 -0500" -->
<!-- isosent="20110503212954" -->
<!-- name="Paul Cizmas" -->
<!-- email="cizmas_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI 1.4.3 - Mac OS X 10.6.7" -->
<!-- id="3C4A5033-2A0C-4F35-B0FF-8A2E3236A107_at_tamu.edu" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI 1.4.3 - Mac OS X 10.6.7<br>
<strong>From:</strong> Paul Cizmas (<em>cizmas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-03 17:29:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16435.php">Jim Kusznir: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>Previous message:</strong> <a href="16433.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16437.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.4.3 - Mac OS X 10.6.7"</a>
<li><strong>Reply:</strong> <a href="16437.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.4.3 - Mac OS X 10.6.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello:
<br>
<p>I am trying to install OpenMPI 1.4.3 on a Mac OS 10.6.7.  
<br>
<p>I have installed Gfortran GCC 4.4.4 and Absoft11.0.
<br>
<p>It appears that I have i686-apple-darwin10-gcc-4.2.1.
<br>
<p>When I run 
<br>
<p>./configure --prefix=/opt/openmpi1.4.3 F77=/Applications/Absoft11.0/bin/f77
<br>
<p>and 
<br>
<p>./configure --prefix=/opt/openmpi1.4.3GF F77=/sw/bin/gfortran
<br>
<p>in both cases I get the message:
<br>
<p>======================================================================
<br>
It appears that your Fortran 77 compiler is unable to link against
<br>
object files created by your C compiler.  This typically indicates
<br>
one of a few possibilities:
<br>
<p>&nbsp;&nbsp;- A conflict between CFLAGS and FFLAGS
<br>
&nbsp;&nbsp;- A problem with your compiler installation(s)
<br>
&nbsp;&nbsp;- Different default build options between compilers (e.g., C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;building for 32 bit and Fortran building for 64 bit)
<br>
&nbsp;&nbsp;- Incompatible compilers
<br>
<p>Such problems can usually be solved by picking compatible compilers
<br>
and/or CFLAGS and FFLAGS.  More information (including exactly what
<br>
command was given to the compilers and what error resulted when the
<br>
commands were executed) is available in the config.log file in this
<br>
directory.
<br>
**********************************************************************
<br>
configure: error: C and Fortran 77 compilers are not link compatible.  Can not continue.
<br>
======================================================================
<br>
<p>I read the FAQ but did not find suggestions about this problem.
<br>
<p>What should be my next step?
<br>
<p>Thank you,
<br>
<p>Paul
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16435.php">Jim Kusznir: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>Previous message:</strong> <a href="16433.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16437.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.4.3 - Mac OS X 10.6.7"</a>
<li><strong>Reply:</strong> <a href="16437.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.4.3 - Mac OS X 10.6.7"</a>
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
