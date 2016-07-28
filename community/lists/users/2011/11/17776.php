<?
$subject_val = "[OMPI users] MPI_MAX_PORT_NAME different in C and Fortran headers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 14 17:09:41 2011" -->
<!-- isoreceived="20111114220941" -->
<!-- sent="Mon, 14 Nov 2011 20:09:37 -0200" -->
<!-- isosent="20111114220937" -->
<!-- name="Enzo Dari" -->
<!-- email="enzodari_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_MAX_PORT_NAME different in C and Fortran headers" -->
<!-- id="CAFkuvCgcRBgmiLE7cxzrRY5Uy981taVXGtQOvNpKRY46AbjUag_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_MAX_PORT_NAME different in C and Fortran headers<br>
<strong>From:</strong> Enzo Dari (<em>enzodari_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-14 17:09:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17777.php">Ralph Castain: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Previous message:</strong> <a href="17775.php">Tom Rosmond: "[OMPI users] Program hangs in mpi_bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17809.php">Jeff Squyres: "Re: [OMPI users] MPI_MAX_PORT_NAME different in C and Fortran headers"</a>
<li><strong>Reply:</strong> <a href="17809.php">Jeff Squyres: "Re: [OMPI users] MPI_MAX_PORT_NAME different in C and Fortran headers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to establish communications between two mpi processes using
<br>
MPI_Open_port / MPI_Publish_name / MPI_Comm_accept
<br>
in a server and
<br>
MPI_Lookup_name / MPI_Comm_connect
<br>
in a client.
<br>
The source code is in fortran, and the client fails with some sort of
<br>
&quot;malloc error&quot;.
<br>
It seems that the different values for the MPI_MAX_PORT_NAME constants
<br>
between C (1024) and Fortran (255) is the reason for the problem.
<br>
Declaring the Port_name variable in Fortran with size 1023 solves this
<br>
problem, buy I'm not sure if this is the proper way to handle this issue,
<br>
and I'm not aware of the possible side-effects of changing
<br>
MPI_MAX_PORT_NAME in .../include/mpi/mpif-common.h
<br>
I'm using openmpi 1.4.2 (included in debian stable: 6.0.3) with gfortran
<br>
4.4.5 (also the version included in debian stable). Also tried with openmpi
<br>
1.4.4 and ifort 11.1
<br>
<pre>
-- 
Enzo A. Dari
Instituto Balseiro / Centro Atomico Bariloche
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17776/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17777.php">Ralph Castain: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Previous message:</strong> <a href="17775.php">Tom Rosmond: "[OMPI users] Program hangs in mpi_bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17809.php">Jeff Squyres: "Re: [OMPI users] MPI_MAX_PORT_NAME different in C and Fortran headers"</a>
<li><strong>Reply:</strong> <a href="17809.php">Jeff Squyres: "Re: [OMPI users] MPI_MAX_PORT_NAME different in C and Fortran headers"</a>
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
