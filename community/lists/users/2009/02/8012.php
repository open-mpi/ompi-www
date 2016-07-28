<?
$subject_val = "[OMPI users] again on &quot;...mpif90, mpif77 compiler is non-functional&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 10 18:00:01 2009" -->
<!-- isoreceived="20090210230001" -->
<!-- sent="Tue, 10 Feb 2009 23:59:57 +0100" -->
<!-- isosent="20090210225957" -->
<!-- name="simone marras" -->
<!-- email="smarras.bsc_at_[hidden]" -->
<!-- subject="[OMPI users] again on &amp;quot;...mpif90, mpif77 compiler is non-functional&amp;quot;" -->
<!-- id="2716c4ae0902101459pfbb6988i9a7196558236e848_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] again on &quot;...mpif90, mpif77 compiler is non-functional&quot;<br>
<strong>From:</strong> simone marras (<em>smarras.bsc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-10 17:59:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8013.php">George Bosilca: "Re: [OMPI users] again on &quot;...mpif90, mpif77 compiler is non-functional&quot;"</a>
<li><strong>Previous message:</strong> <a href="8011.php">Douglas Guptill: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8013.php">George Bosilca: "Re: [OMPI users] again on &quot;...mpif90, mpif77 compiler is non-functional&quot;"</a>
<li><strong>Reply:</strong> <a href="8013.php">George Bosilca: "Re: [OMPI users] again on &quot;...mpif90, mpif77 compiler is non-functional&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear everyone,
<br>
<p>I apologize in advance for coming back with a common issue again.
<br>
<p>Differently from other threads though, I was able to configure, make
<br>
and make install openMPI on my macbook 10.5.
<br>
<p>What I used was the fowlling configure call:
<br>
<p>./configure --prefix=/usr/local --enable-mpi-f77 --enable-mpi-f90
<br>
F77=ifort FC=ifort FFLAGS=&quot;-m32 -std=legacy&quot;
<br>
--with-wrapper-fflags=&quot;-m32 -std=legacy&quot; --with-mpi-f90-size=medium
<br>
--enable-mpirun-prefix-by-default FCFLAGS=&quot;-m32&quot;
<br>
--with-wrapper-fcflags=&quot;-m32&quot;
<br>
<p>make
<br>
<p>sudo make install
<br>
<p>When I verify if the compilation occurred correctly as in being
<br>
supporting Fortran, by running
<br>
<p>/usr/local/bin/ompi_info
<br>
<p>I correctly obtain:
<br>
&nbsp;Fortran77 bindings: yes (single underscore)
<br>
&nbsp;Fortran90 bindings: yes
<br>
<p>The PROBLEM comes now: when I try to run mpif90 or mpif77 I still get the error:
<br>
<p>&quot;Unfortunately, this installation of Open MPI was not compiled with
<br>
Fortran 90 support.  As such, the mpif90 compiler is non-functional.&quot;
<br>
<p>Woudl anyone be able to help me understand this ? I would really
<br>
appreciate your support
<br>
<p>Thank you in advance
<br>
S.M.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8013.php">George Bosilca: "Re: [OMPI users] again on &quot;...mpif90, mpif77 compiler is non-functional&quot;"</a>
<li><strong>Previous message:</strong> <a href="8011.php">Douglas Guptill: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8013.php">George Bosilca: "Re: [OMPI users] again on &quot;...mpif90, mpif77 compiler is non-functional&quot;"</a>
<li><strong>Reply:</strong> <a href="8013.php">George Bosilca: "Re: [OMPI users] again on &quot;...mpif90, mpif77 compiler is non-functional&quot;"</a>
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
