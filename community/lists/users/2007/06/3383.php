<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun  6 12:17:21 2007" -->
<!-- isoreceived="20070606161721" -->
<!-- sent="Wed, 6 Jun 2007 10:17:17 -0600" -->
<!-- isosent="20070606161717" -->
<!-- name="Srinath Vadlamani" -->
<!-- email="madindian22_at_[hidden]" -->
<!-- subject="[OMPI users] open-mpi with ifort in debug..trouble" -->
<!-- id="18b769180706060917v3689376atf6de68b93cbc84fe_at_mail.gmail.com" -->
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
<strong>From:</strong> Srinath Vadlamani (<em>madindian22_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-06 12:17:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3384.php">Maestas, Christopher Daniel: "[OMPI users] MX MPI latency measurements"</a>
<li><strong>Previous message:</strong> <a href="3382.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3394.php">Jeff Squyres: "Re: [OMPI users] open-mpi with ifort in debug..trouble"</a>
<li><strong>Reply:</strong> <a href="3394.php">Jeff Squyres: "Re: [OMPI users] open-mpi with ifort in debug..trouble"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I have been trying to build multiple applications with an ifort+gcc
<br>
implementation of Open-MPI.  I wanted to build them in debug mode.  This is
<br>
on a Macbook Pro
<br>
System Version:    Mac OS X 10.4.9 (8P2137)
<br>
&nbsp;&nbsp;Kernel Version:    Darwin 8.9.1
<br>
&nbsp;&nbsp;gcc :gcc version 4.0.1
<br>
&nbsp;&nbsp;ifort: 10.0.16
<br>
<p>I have tried building PETSc from
<br>
<a href="ftp://ftp.mcs.anl.gov/pub/petsc/release-snapshots/petsc-lite-2.3.3-p1.tar.gz">ftp://ftp.mcs.anl.gov/pub/petsc/release-snapshots/petsc-lite-2.3.3-p1.tar.gz</a>
<br>
in debug mode and the error on gets in building fortran examples is:
<br>
*ld*: *internal error*: *output_local_symbols*() inconsistent local symbol
<br>
count
<br>
This does not happen when *not* in debug mode.
<br>
This is the same error we get with the same build parameters of one of our
<br>
Fortran scientific codes.
<br>
<p>This error does *not* occur when using mpich2-1.0.5p4.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3383/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3384.php">Maestas, Christopher Daniel: "[OMPI users] MX MPI latency measurements"</a>
<li><strong>Previous message:</strong> <a href="3382.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3394.php">Jeff Squyres: "Re: [OMPI users] open-mpi with ifort in debug..trouble"</a>
<li><strong>Reply:</strong> <a href="3394.php">Jeff Squyres: "Re: [OMPI users] open-mpi with ifort in debug..trouble"</a>
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
