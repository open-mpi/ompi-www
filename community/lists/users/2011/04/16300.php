<?
$subject_val = "[OMPI users] Bug in MPI_scatterv Fortran-90 implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 21 10:37:23 2011" -->
<!-- isoreceived="20110421143723" -->
<!-- sent="Thu, 21 Apr 2011 09:37:13 -0500" -->
<!-- isosent="20110421143713" -->
<!-- name="Stanislav Sazykin" -->
<!-- email="sazykin_at_[hidden]" -->
<!-- subject="[OMPI users] Bug in MPI_scatterv Fortran-90 implementation" -->
<!-- id="4DB04119.1020609_at_rice.edu" -->
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
<strong>Subject:</strong> [OMPI users] Bug in MPI_scatterv Fortran-90 implementation<br>
<strong>From:</strong> Stanislav Sazykin (<em>sazykin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-21 10:37:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16301.php">Jeff Squyres: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<li><strong>Previous message:</strong> <a href="16299.php">Dave Love: "[OMPI users] using openib and psm together"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16301.php">Jeff Squyres: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<li><strong>Reply:</strong> <a href="16301.php">Jeff Squyres: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I came across what appears to be an error in implementation of
<br>
MPI_scatterv Fortran-90 version. I am using OpenMPI 1.4.3 on Linux.
<br>
This comes up when OpenMPI was configured with
<br>
--with-mpi-f90-size=medium or --with-mpi-f90-size=large
<br>
<p>The standard specifies that the interface is
<br>
MPI_SCATTERV(SENDBUF, SENDCOUNTS, DISPLS, SENDTYPE, RECVBUF,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RECVCOUNT, RECVTYPE, ROOT, COMM, IERROR)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;type&gt;    SENDBUF(*), RECVBUF(*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER    SENDCOUNTS(*), DISPLS(*), SENDTYPE
<br>
<p>so that SENDCOUNTS and DISPLS are integer arrays. However, if
<br>
I compile a fortran code with calls to MPI_scatterv and compile
<br>
with argument checks, two Fortran compilers (Intel and Lahey)
<br>
produce fatal errors saying there is no matching interface.
<br>
<p>Looking in the source code of OpenMPI, I see that  in
<br>
ompi/mpi/f90/scripts, the script mpi_scatterv_f90.f90.sh that
<br>
is invoked when running &quot;make&quot; produces Fortran interfaces
<br>
that list both SENDCOUNTS and DISPLS as
<br>
<p>integer, intent(in) ::
<br>
<p>This appears to be an error as it would be illegal to pass a scalar
<br>
variable and receive it as an array in the subroutine. I have not
<br>
figured out what happens in the code at this invocation (the code
<br>
is complicated), but seems like a segfault situation.
<br>
<p><pre>
-- 
Stan Sazykin
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16301.php">Jeff Squyres: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<li><strong>Previous message:</strong> <a href="16299.php">Dave Love: "[OMPI users] using openib and psm together"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16301.php">Jeff Squyres: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<li><strong>Reply:</strong> <a href="16301.php">Jeff Squyres: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
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
