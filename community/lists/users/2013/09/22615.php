<?
$subject_val = "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  6 23:14:31 2013" -->
<!-- isoreceived="20130907031431" -->
<!-- sent="Fri, 06 Sep 2013 23:14:30 -0400" -->
<!-- isosent="20130907031430" -->
<!-- name="Hugo Gagnon" -->
<!-- email="opensource.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran" -->
<!-- id="1378523670.1888.18963041.02171C01_at_webmail.messagingengine.com" -->
<!-- inreplyto="1378521425.3458.16.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran<br>
<strong>From:</strong> Hugo Gagnon (<em>opensource.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-06 23:14:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22616.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22614.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>In reply to:</strong> <a href="22614.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22616.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22616.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22617.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22632.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the input but it still doesn't work for me...  Here's the
<br>
version without MPI_IN_PLACE that does work:
<br>
<p>program test
<br>
use mpi
<br>
integer :: ierr, myrank, a(2), a_loc(2) = 0
<br>
call MPI_Init(ierr)
<br>
call MPI_Comm_rank(MPI_COMM_WORLD,myrank,ierr)
<br>
if (myrank == 0) then
<br>
&nbsp;&nbsp;a_loc(1) = 1
<br>
&nbsp;&nbsp;a_loc(2) = 2
<br>
else
<br>
&nbsp;&nbsp;a_loc(1) = 3
<br>
&nbsp;&nbsp;a_loc(2) = 4
<br>
endif
<br>
call MPI_Allreduce(a_loc,a,2,MPI_INTEGER,MPI_SUM,MPI_COMM_WORLD,ierr)
<br>
write(*,*) myrank, a(:)
<br>
call MPI_Finalize(ierr)
<br>
end program test
<br>
<p>$ openmpif90 test.f90
<br>
$ openmpirun -np 2 a.out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0           4           6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1           4           6
<br>
<p>Now I'd be curious to know why your OpenMPI implementation handles
<br>
MPI_IN_PLACE correctly and not mine!
<br>
<p><pre>
-- 
  Hugo Gagnon
On Fri, Sep 6, 2013, at 22:37, Tom Rosmond wrote:
&gt; Hello,
&gt; 
&gt; Your syntax defining 'a' is not correct.  This code works correctly.
&gt; 
&gt; program test
&gt; use mpi
&gt; integer :: ierr, myrank, a(2) = 0
&gt; call MPI_Init(ierr)
&gt; call MPI_Comm_rank(MPI_COMM_WORLD,myrank,ierr)
&gt; if (myrank == 0) then
&gt;  a(1) = 1
&gt;  a(2) = 2
&gt; else
&gt;  a(1) = 3
&gt;  a(2) = 4
&gt; endif
&gt; call
&gt; MPI_Allreduce(MPI_IN_PLACE,a,2,MPI_INTEGER,MPI_SUM,MPI_COMM_WORLD,ierr)
&gt; write(*,*) myrank, a(:)
&gt; call MPI_Finalize(ierr)
&gt; end program test
&gt; 
&gt; mpif90 test.f90
&gt; mpirun -np 2 a.out      
&gt;      0           4           6
&gt;      1           4           6
&gt; 
&gt; T. Rosmond
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; On Fri, 2013-09-06 at 21:27 -0400, Hugo Gagnon wrote:
&gt; &gt; Hello,
&gt; &gt; 
&gt; &gt; I'm trying to run this bit of code:
&gt; &gt; 
&gt; &gt; program test
&gt; &gt; use mpi
&gt; &gt; integer :: ierr, myrank, a(2) = 0
&gt; &gt; call MPI_Init(ierr)
&gt; &gt; call MPI_Comm_rank(MPI_COMM_WORLD,myrank,ierr)
&gt; &gt; if (myrank == 0) a(1) = 1; a(2) = 2
&gt; &gt; if (myrank == 1) a(1) = 3; a(2) = 4
&gt; &gt; call
&gt; &gt; MPI_Allreduce(MPI_IN_PLACE,a,2,MPI_INTEGER,MPI_SUM,MPI_COMM_WORLD,ierr)
&gt; &gt; write(*,*) myrank, a(:)
&gt; &gt; call MPI_Finalize(ierr)
&gt; &gt; end program test
&gt; &gt; 
&gt; &gt; but the output is not what I'd expect:
&gt; &gt; 
&gt; &gt; $ openmpif90 test.f90
&gt; &gt; $ openmpirun -np 2 a.out
&gt; &gt;            0           0           0
&gt; &gt;            1           0           0
&gt; &gt; 
&gt; &gt; I tried a version without MPI_IN_PLACE and the call to MPI_Allreduce
&gt; &gt; works fine in that case.  Am I doing something wrong with MPI_IN_PLACE? 
&gt; &gt; I'm using OpenMPI 1.6.5 compiled with gcc 4.8.1 on Mac OS 10.8.
&gt; &gt; 
&gt; &gt; Thanks,
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22616.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22614.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>In reply to:</strong> <a href="22614.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22616.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22616.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22617.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22632.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
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
