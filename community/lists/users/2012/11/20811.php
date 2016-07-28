<?
$subject_val = "[OMPI users] MPI_Allreduce with F90 Handles";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 15:38:50 2012" -->
<!-- isoreceived="20121129203850" -->
<!-- sent="Thu, 29 Nov 2012 15:38:09 -0500" -->
<!-- isosent="20121129203809" -->
<!-- name="Shane Hart" -->
<!-- email="shart6_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Allreduce with F90 Handles" -->
<!-- id="2427591.l1FW3qINCH_at_shane-laptop" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Allreduce with F90 Handles<br>
<strong>From:</strong> Shane Hart (<em>shart6_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-29 15:38:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20812.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20810.php">Ralph Castain: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20829.php">Shane Hart: "Re: [OMPI users] MPI_Allreduce with F90 Handles"</a>
<li><strong>Maybe reply:</strong> <a href="20829.php">Shane Hart: "Re: [OMPI users] MPI_Allreduce with F90 Handles"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>I have a Fortran code that works quite well with OpenMPI 1.4.3 where I create 
<br>
a handle using:
<br>
<p>call MPI_TYPE_CREATE_F90_INTEGER(9, COMM_INT4, ierror)
<br>
<p>and then do a reduction with:
<br>
<p>call MPI_ALLREDUCE(send_buffer, buffer, count, COMM_INT4, MPI_SUM, communicator,              
<br>
ierror)
<br>
<p>However, this fails with OpenMPI 1.6.3 stating:
<br>
<p>An error occurred in MPI_Allreduce: the reduction operation MPI_SUM is not 
<br>
defined for non-intrinsic datatypes (attempted with datatype named &quot;Dup 
<br>
MPI_INT&quot;)
<br>
<p>The MPI standard states that MPI_SUM works with Fortran integers, and Fortran 
<br>
integers are defined in Section 5.9.2 as:
<br>
<p>MPI_INTEGER, MPI_AINT, MPI_OFFSET,
<br>
*and handles returned from
<br>
MPI_TYPE_CREATE_F90_INTEGER*,
<br>
and if available: MPI_INTEGER1,
<br>
MPI_INTEGER2, MPI_INTEGER4,
<br>
MPI_INTEGER8, MPI_INTEGER16
<br>
<p>(emphasis mine)
<br>
<p>However the manual page on MPI_Reduce for OpenMPI only states that Fortran 
<br>
integers are:
<br>
<p>Fortran integer:      MPI_INTEGER
<br>
port using MPI_SUM with Fortran integer handles?  I'm 
<br>
hoping that it's just an oversight as it used to work...
<br>
<p>System: Fedora 17
<br>
Compilers: GCC 4.7.2
<br>
OpenMPI's tested: 1.4.3 (works), 1.5.4 (doesn't work), 1.6.3 (doesn't work)
<br>
<p>Thanks for any insight,
<br>
Shane<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20811/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20812.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20810.php">Ralph Castain: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20829.php">Shane Hart: "Re: [OMPI users] MPI_Allreduce with F90 Handles"</a>
<li><strong>Maybe reply:</strong> <a href="20829.php">Shane Hart: "Re: [OMPI users] MPI_Allreduce with F90 Handles"</a>
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
