<?
$subject_val = "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 15:35:21 2011" -->
<!-- isoreceived="20110303203521" -->
<!-- sent="Thu, 03 Mar 2011 21:35:30 +0100" -->
<!-- isosent="20110303203530" -->
<!-- name="Harald Anlauf" -->
<!-- email="anlauf_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441" -->
<!-- id="4D6FFB92.5030008_at_gmx.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D6D622E.601_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441<br>
<strong>From:</strong> Harald Anlauf (<em>anlauf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-03 15:35:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15793.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Previous message:</strong> <a href="15791.php">David Robertson: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>In reply to:</strong> <a href="15778.php">Harald Anlauf: "[OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15816.php">Jeff Squyres: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>Reply:</strong> <a href="15816.php">Jeff Squyres: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please find attached the output of:
<br>
<p>configure
<br>
make all
<br>
make install
<br>
ompi_info -all
<br>
mpif90 -v mpiallreducetest.f90
<br>
ldd a.out
<br>
./a.out
<br>
<p>System: OpenSuse Linux 11.1 on Core2Duo, i686
<br>
<p>Compiler is:
<br>
Intel(R) Fortran Compiler XE for applications running on IA-32, Version
<br>
12.0.1.107 Build 20101116
<br>
<p>(The problem is the same with gfortran 4.6 (prerelease).)
<br>
<p>Harald
<br>
<p>
<br><hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15792/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15793.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Previous message:</strong> <a href="15791.php">David Robertson: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>In reply to:</strong> <a href="15778.php">Harald Anlauf: "[OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15816.php">Jeff Squyres: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>Reply:</strong> <a href="15816.php">Jeff Squyres: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
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
