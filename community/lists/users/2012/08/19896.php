<?
$subject_val = "[OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  6 16:09:12 2012" -->
<!-- isoreceived="20120806200912" -->
<!-- sent="Mon, 6 Aug 2012 16:09:07 -0400" -->
<!-- isosent="20120806200907" -->
<!-- name="Paul Romano" -->
<!-- email="paul.k.romano_at_[hidden]" -->
<!-- subject="[OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface" -->
<!-- id="CAFwt5fDn1MzZ0vavbx6Nf3Ut1FkLucs8ua-GQSLwu9r+86t2Qg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface<br>
<strong>From:</strong> Paul Romano (<em>paul.k.romano_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-06 16:09:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19897.php">Pawe³ Jaromin: "[OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<li><strong>Previous message:</strong> <a href="19895.php">Jeff Squyres: "Re: [OMPI users] mpi.h incorrect format error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19902.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<li><strong>Reply:</strong> <a href="19902.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When I try to use parallel I/O routines like MPI_File_write_at or
<br>
MPI_File_read_at with the buffer argument being a derived datatype, I am
<br>
unable to compile and just get an error of the nature:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_FILE_READ_AT(fh, offset, buffer, count, datatype, status, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Error: There is no specific subroutine for the generic
<br>
'mpi_file_read_at' at (1)
<br>
<p>I'm using Open MPI 1.6 compiled with --with-mpi-f90-size=medium. I've also
<br>
tried both gfortran and ifort, and both give the same compilation error.
<br>
Has anyone else seen this behavior?
<br>
<p>Best regards,
<br>
Paul
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19896/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19897.php">Pawe³ Jaromin: "[OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<li><strong>Previous message:</strong> <a href="19895.php">Jeff Squyres: "Re: [OMPI users] mpi.h incorrect format error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19902.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<li><strong>Reply:</strong> <a href="19902.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
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
