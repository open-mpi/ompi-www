<?
$subject_val = "[OMPI users] MPI_COMM_WORLD not set in Fortran 90";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 21:55:13 2009" -->
<!-- isoreceived="20090115025513" -->
<!-- sent="Wed, 14 Jan 2009 21:55:06 -0500" -->
<!-- isosent="20090115025506" -->
<!-- name="David Robertson" -->
<!-- email="robertson_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_COMM_WORLD not set in Fortran 90" -->
<!-- id="496EA58A.5070905_at_marine.rutgers.edu" -->
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
<strong>Subject:</strong> [OMPI users] MPI_COMM_WORLD not set in Fortran 90<br>
<strong>From:</strong> David Robertson (<em>robertson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-14 21:55:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7707.php">Hana Milani: "Re: [OMPI users] mpirun (signal 15 Termination) urgent"</a>
<li><strong>Previous message:</strong> <a href="7705.php">kmuriki_at_[hidden]: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm having a problem with MPI_COMM_WORLD in Fortran 90. I have tried 
<br>
with OpenMPI versions 1.2.6 and 1.2.8. Both versions are compiled with 
<br>
the PGI 8.0-2 suite. I've run the program in a debugger and 
<br>
MPI_COMM_WORLD is always 0, MPI_COMM_SELF is giving me a non-zero value 
<br>
though. The MPI functions don't seem to be affected by the fact that 
<br>
MPI_COMM_WORLD is 0. For example, the following works just fine:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_init (MyError)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_comm_rank (MPI_COMM_WORLD, MyRank, MyError)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_comm_size (MPI_COMM_WORLD, Nnodes, MyError)
<br>
<p>even though, in the debugger, MPI_COMM_WORLD is zero every step of the 
<br>
way. However, when I try to us MPI_COMM_WORLD in a non MPI standard 
<br>
function (Netcdf-4 in this case):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status=nf90_create_par(TRIM(ncname),                           &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                         OR(nf90_clobber, nf90_netcdf4),         &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                         MPI_COMM_WORLD, info, ncid)
<br>
<p><p>&nbsp;&nbsp;I get the following error:
<br>
<p>[daggoo:07640] *** An error occurred in MPI_Comm_dup
<br>
[daggoo:07640] *** on communicator MPI_COMM_WORLD
<br>
[daggoo:07640] *** MPI_ERR_COMM: invalid communicator
<br>
[daggoo:07640] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p><p>I have tried the exact same code compiled and run with MPICH2 (also PGI 
<br>
8.0-2) and the problem does not occur. Also, with MPICH2 in the debugger 
<br>
MPI_COMM_WORLD is non-zero immediately after the mpi_init call and 
<br>
remains the same throughout execution. Is MPI_COMM_WORLD &quot;private&quot; in 
<br>
OpenMPI? If it is, is there a reason MPI_COMM_SELF does not behave the 
<br>
same way? Is there a way to access MPI_COMM_WORLD's value?
<br>
<p>If I have forgotten any details needed to debug this issue, please let 
<br>
me know.
<br>
<p>Thanks,
<br>
David Robertson
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7707.php">Hana Milani: "Re: [OMPI users] mpirun (signal 15 Termination) urgent"</a>
<li><strong>Previous message:</strong> <a href="7705.php">kmuriki_at_[hidden]: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)"</a>
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
