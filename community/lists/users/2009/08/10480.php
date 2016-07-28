<?
$subject_val = "[OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 08:46:38 2009" -->
<!-- isoreceived="20090825124638" -->
<!-- sent="Tue, 25 Aug 2009 05:46:16 -0700" -->
<!-- isosent="20090825124616" -->
<!-- name="Jason Palmer" -->
<!-- email="jason_at_[hidden]" -->
<!-- subject="[OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors" -->
<!-- id="00b801ca2582$0f3cf5f0$2db6e1d0$_at_ucsd.edu" -->
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
<strong>Subject:</strong> [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors<br>
<strong>From:</strong> Jason Palmer (<em>jason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-25 08:46:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10481.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10479.php">Ake Sandgren: "[OMPI users] Need help with tuning of IB for OpenMPI 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10482.php">Jayanta Roy: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile 	errors"</a>
<li><strong>Reply:</strong> <a href="10482.php">Jayanta Roy: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile 	errors"</a>
<li><strong>Reply:</strong> <a href="10484.php">Jason Palmer: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;
<br>
<p>I'm trying to build openmpi with gcc4.2. I built gcc with thread support in
<br>
order to use OpenMP. I have been able to compile and run a threaded OpenMP
<br>
program with gfortran from gcc4.2, so the gfortran program itself seems to
<br>
be working.
<br>
<p>&nbsp;
<br>
<p>However, when I try to configure OpenMPI 1.3.3, setting the FC, F77, and F90
<br>
environment variables to the gfortran I built, and thd CC to the gcc, it
<br>
fails to &quot;run a simple Fortran 77 program&quot; and exits the configure script
<br>
saying Fortran doesn't work. But I know the gfortran I'm specifying does
<br>
work.
<br>
<p>&nbsp;
<br>
<p>I have tried specifying -m64 in the flags, and specifying the gcc4.2 library
<br>
directory (for libgfortran etc.) but it still fails on the simple Fortran
<br>
test.
<br>
<p>&nbsp;
<br>
<p>I'm using Fedora Redhat Linux, gcc 4.2, and openmpi 1.3.3. Has anyone gotten
<br>
OpenMPI to configure and build with a gcc with OpenMP (thread) support?
<br>
<p>&nbsp;
<br>
<p>The configure output and config.log are attached.
<br>
<p>&nbsp;
<br>
<p>Thanks!
<br>
<p>&nbsp;
<br>
<p>Jason
<br>
<p><p><p>
<p>

<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10480/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10480/confout.tar.gz">confout.tar.gz</a>
</ul>
<!-- attachment="confout.tar.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10480/config.log.tar.gz">config.log.tar.gz</a>
</ul>
<!-- attachment="config.log.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10481.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10479.php">Ake Sandgren: "[OMPI users] Need help with tuning of IB for OpenMPI 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10482.php">Jayanta Roy: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile 	errors"</a>
<li><strong>Reply:</strong> <a href="10482.php">Jayanta Roy: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile 	errors"</a>
<li><strong>Reply:</strong> <a href="10484.php">Jason Palmer: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
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
