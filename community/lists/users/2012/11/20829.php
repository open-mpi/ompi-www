<?
$subject_val = "Re: [OMPI users] MPI_Allreduce with F90 Handles";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 30 14:04:13 2012" -->
<!-- isoreceived="20121130190413" -->
<!-- sent="Fri, 30 Nov 2012 14:04:01 -0500" -->
<!-- isosent="20121130190401" -->
<!-- name="Shane Hart" -->
<!-- email="shart6_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce with F90 Handles" -->
<!-- id="2822100.9Ldb2HxCLJ_at_shane-laptop" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="mailman.2466.1354289757.7481.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce with F90 Handles<br>
<strong>From:</strong> Shane Hart (<em>shart6_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-30 14:04:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20830.php">Konz, Jeffrey (SSA Solution Centers): "[OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<li><strong>Previous message:</strong> <a href="20828.php">Josh Hursey: "Re: [OMPI users] BLCR + Qlogic infiniband"</a>
<li><strong>Maybe in reply to:</strong> <a href="20811.php">Shane Hart: "[OMPI users] MPI_Allreduce with F90 Handles"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20831.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce with F90 Handles"</a>
<li><strong>Reply:</strong> <a href="20831.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce with F90 Handles"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've attached a small sample program that demonstrates the problem.  You can 
<br>
toggle working/non-working behaviour by toggling commenting on line 27.
<br>
<p>I've tried to open a bug report, but the system isn't letting me register for 
<br>
Trac:
<br>
<p>Trac detected an internal error:
<br>
KeyError: 'recaptcha_challenge_field'
<br>
2012 10:35:57 AM users-request_at_[hidden] wrote:
<br>
All,
<br>
&nbsp;
<br>
I have a Fortran code that works quite well with OpenMPI 1.4.3 where I create 
<br>
a handle using:
<br>
&nbsp;
<br>
call MPI_TYPE_CREATE_F90_INTEGER(9, COMM_INT4, ierror)
<br>
&nbsp;
<br>
and then do a reduction with:
<br>
&nbsp;
<br>
call MPI_ALLREDUCE(send_buffer, buffer, count, COMM_INT4, MPI_SUM, communicator,              
<br>
ierror)
<br>
&nbsp;
<br>
However, this fails with OpenMPI 1.6.3 stating:
<br>
&nbsp;
<br>
An error occurred in MPI_Allreduce: the reduction operation MPI_SUM is not 
<br>
defined for non-intrinsic datatypes (attempted with datatype named &quot;Dup 
<br>
MPI_INT&quot;)
<br>
&nbsp;
<br>
The MPI standard states that MPI_SUM works with Fortran integers, and Fortran 
<br>
integers are defined in Section 5.9.2 as:
<br>
&nbsp;
<br>
MPI_INTEGER, MPI_AINT, MPI_OFFSET,
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
&nbsp;
<br>
(emphasis mine)
<br>
&nbsp;
<br>
However the manual page on MPI_Reduce for OpenMPI only states that Fortran 
<br>
integers are:
<br>
&nbsp;
<br>
Fortran integer:      MPI_INTEGER
<br>
Does OpenMPI not support using MPI_SUM with Fortran integer handles?  I'm 
<br>
hoping that it's just an oversight as it used to work...
<br>
&nbsp;
<br>
System: Fedora 17
<br>
Compilers: GCC 4.7.2
<br>
OpenMPI's tested: 1.4.3 (works), 1.5.4 (doesn't work), 1.6.3 (doesn't work)
<br>
&nbsp;
<br>
Thanks for any insight,
<br>
Shane
<br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20829/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20829/mpi_sum.f90">mpi_sum.f90</a>
</ul>
<!-- attachment="mpi_sum.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20830.php">Konz, Jeffrey (SSA Solution Centers): "[OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<li><strong>Previous message:</strong> <a href="20828.php">Josh Hursey: "Re: [OMPI users] BLCR + Qlogic infiniband"</a>
<li><strong>Maybe in reply to:</strong> <a href="20811.php">Shane Hart: "[OMPI users] MPI_Allreduce with F90 Handles"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20831.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce with F90 Handles"</a>
<li><strong>Reply:</strong> <a href="20831.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce with F90 Handles"</a>
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
