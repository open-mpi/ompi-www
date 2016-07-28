<?
$subject_val = "[OMPI users] Problems building openmpi 1.2.6 with Lahey Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 14:54:06 2008" -->
<!-- isoreceived="20080801185406" -->
<!-- sent="Fri, 01 Aug 2008 12:54:01 -0600" -->
<!-- isosent="20080801185401" -->
<!-- name="Craig Tierney" -->
<!-- email="Craig.Tierney_at_[hidden]" -->
<!-- subject="[OMPI users] Problems building openmpi 1.2.6 with Lahey Fortran" -->
<!-- id="48935BC9.9070705_at_noaa.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="487E00FD.5000804_at_terra.com.br" -->
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
<strong>Subject:</strong> [OMPI users] Problems building openmpi 1.2.6 with Lahey Fortran<br>
<strong>From:</strong> Craig Tierney (<em>Craig.Tierney_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-01 14:54:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6249.php">James Philbin: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="6247.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/07/6086.php">Daniel Felix Ferber: "[OMPI users] Getting default hostfile on Open MPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6251.php">Jeff Squyres: "Re: [OMPI users] Problems building openmpi 1.2.6 with Lahey Fortran"</a>
<li><strong>Reply:</strong> <a href="6251.php">Jeff Squyres: "Re: [OMPI users] Problems building openmpi 1.2.6 with Lahey Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to build OpenMPI-1.2.6 with Lahey Fortran,
<br>
and I am running into problems.  The issue is buliding
<br>
shared libraries with Lahey.  Lahey can do it, but they
<br>
don't use the construct -fPIC to specify it.  They
<br>
use --shared.
<br>
<p>If I don't include anything, then the build fails near
<br>
the end when linking with a Fortran object with an
<br>
error message like:
<br>
<p><p>/usr/bin/ld: testcode.o: relocation R_X86_64_32S against `a local
<br>
symbol' can not be used when making a shared object; recompile with
<br>
-fPIC
<br>
<p>If I add --shared to FCFLAGS, the configure process will not finish
<br>
(configure line below).  It crashes because when it tries to build
<br>
a small test program, it will seg fault.
<br>
<p># ./configure FCFLAGS=--shared CC=gcc CXX=g++ F77=lf95 FC=lf95 F90=lf95 --prefix=/opt/openmpi/1.2.6-lahey-8.00a --without-gridengine 
<br>
--enable-io-romio --with-io-romio-flags=--with-file-sys=nfs+ufs --with-openib=/opt/hjet/ofed/1.3.1
<br>
<p>Relevant config.log output:
<br>
<p>configure:36725: checking if Fortran compiler works
<br>
configure:36781: lf95 -o conftest --shared   conftest.f  &gt;&amp;5
<br>
Encountered 0 errors, 0 warnings in file conftest.f.
<br>
configure:36784: $? = 0
<br>
configure:36790: ./conftest
<br>
./configure: line 36791: 29048 Segmentation fault      ./conftest$ac_exeext
<br>
configure:36793: $? = 139
<br>
configure: program exited with status 139
<br>
configure: failed program was:
<br>
|       program main
<br>
|
<br>
|       end
<br>
<p><p>So my hack to fix this was to add --shared to the
<br>
FCFLAGS in ompi/mpi/f90/Makefile and build the
<br>
code.
<br>
<p>What is the correct way for the configure process
<br>
to know that if the compiler is lf95, to use
<br>
--shared when compiling objects?
<br>
<p>Thanks,
<br>
Craig
<br>
<p><p><p><pre>
-- 
Craig Tierney (craig.tierney_at_[hidden])
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6249.php">James Philbin: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="6247.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/07/6086.php">Daniel Felix Ferber: "[OMPI users] Getting default hostfile on Open MPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6251.php">Jeff Squyres: "Re: [OMPI users] Problems building openmpi 1.2.6 with Lahey Fortran"</a>
<li><strong>Reply:</strong> <a href="6251.php">Jeff Squyres: "Re: [OMPI users] Problems building openmpi 1.2.6 with Lahey Fortran"</a>
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
