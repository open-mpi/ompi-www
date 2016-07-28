<?
$subject_val = "[OMPI users] question about passing MPI communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  1 09:26:53 2006" -->
<!-- isoreceived="20060901132653" -->
<!-- sent="Fri,  1 Sep 2006 09:26:52 -0400" -->
<!-- isosent="20060901132652" -->
<!-- name="Wang,  Peng" -->
<!-- email="pewang_at_[hidden]" -->
<!-- subject="[OMPI users] question about passing MPI communicator" -->
<!-- id="20060901092652.3sk0whwxgco88w48_at_webmail.iu.edu" -->
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
<strong>From:</strong> Wang,  Peng (<em>pewang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-01 09:26:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1809.php">Brian Barrett: "Re: [OMPI users] question about passing MPI communicator"</a>
<li><strong>Previous message:</strong> <a href="1807.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1809.php">Brian Barrett: "Re: [OMPI users] question about passing MPI communicator"</a>
<li><strong>Reply:</strong> <a href="1809.php">Brian Barrett: "Re: [OMPI users] question about passing MPI communicator"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, I am wondering in openmpi how is the passing of MPI communcator 
<br>
from Fortran to C is handled? Assuming I have a Fortran 90 subroutine 
<br>
calling a C function passing MPI_COMM_WORLD in, in the C function, do I 
<br>
need to first do MPI_Comm_f2c
<br>
to convert to MPI handle, then use that handle afterward? Or is there 
<br>
any better way to do this? Here is some test code:
<br>
<p>Fortran 90:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program test1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer myrank,ierr
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Init(ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call parallel_info(myrank,MPI_COMM_WORLD)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'hello, I am process #',myrank
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Finalize(ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end program test1
<br>
<p><p>C:
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>void parallel_info_(int * rank, int* comm)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm ccomm;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;ccomm=MPI_Comm_f2c(*comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(ccomm, rank);
<br>
}
<br>
<p>void parallel_info(int * rank, int * comm)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm ccomm;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;ccomm=MPI_Comm_f2c(*comm);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(ccomm, rank);
<br>
}
<br>
<p><p>Thanks,
<br>
Peng
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1809.php">Brian Barrett: "Re: [OMPI users] question about passing MPI communicator"</a>
<li><strong>Previous message:</strong> <a href="1807.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1809.php">Brian Barrett: "Re: [OMPI users] question about passing MPI communicator"</a>
<li><strong>Reply:</strong> <a href="1809.php">Brian Barrett: "Re: [OMPI users] question about passing MPI communicator"</a>
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
