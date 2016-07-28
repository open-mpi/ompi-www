<?
$subject_val = "[OMPI users] mpi_in_place not working in mpi_allreduce";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 27 19:51:59 2010" -->
<!-- isoreceived="20100927235159" -->
<!-- sent="Mon, 27 Sep 2010 17:51:35 -0600" -->
<!-- isosent="20100927235135" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_in_place not working in mpi_allreduce" -->
<!-- id="AANLkTi=fOiTaOX5Qx9XVy1ELxYgrx5XCdj98hWzpV3m3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpi_in_place not working in mpi_allreduce<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-27 19:51:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14349.php">Tim Prince: "Re: [OMPI users] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="14347.php">David Singleton: "Re: [OMPI users] Memory affinity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all:
<br>
<p>I ran this simple fortran code and got unexpected result:
<br>
<p>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
<br>
program reduce
<br>
implicit none
<br>
<p>include 'mpif.h'
<br>
<p>integer :: ierr, rank
<br>
real*8 :: send(5)
<br>
<p>call mpi_init(ierr)
<br>
call mpi_comm_rank(mpi_comm_world,rank,ierr)
<br>
<p>send = real(rank)
<br>
<p>print *, rank,':',send
<br>
call
<br>
mpi_allreduce(MPI_IN_PLACE,send,size(send),mpi_real8,mpi_sum,mpi_comm_world,ierr)
<br>
print *, rank,'#',send
<br>
<p>call mpi_finalize(ierr)
<br>
<p>end program reduce
<br>
<p>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
<br>
<p>When running with 3 processes
<br>
<p>mpirun -np 3 reduce
<br>
<p>The results I'm expecting is the sum of all 3 vectors, but I got the
<br>
unexpected result:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 :   0.0000000000000000        0.0000000000000000
<br>
0.0000000000000000        0.0000000000000000        0.0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 :   2.0000000000000000        2.0000000000000000
<br>
2.0000000000000000        2.0000000000000000        2.0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 :   1.0000000000000000        1.0000000000000000
<br>
1.0000000000000000        1.0000000000000000        1.0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 #   0.0000000000000000        0.0000000000000000
<br>
0.0000000000000000        0.0000000000000000        0.0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 #   0.0000000000000000        0.0000000000000000
<br>
0.0000000000000000        0.0000000000000000        0.0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 #   0.0000000000000000        0.0000000000000000
<br>
0.0000000000000000        0.0000000000000000        0.0000000000000000
<br>
<p><p>During compilation and running there were no errors or warnings.  I install
<br>
openMPI via fink.  I believe somehow fink messed up during installation.
<br>
Instead of installing MPI from source (which takes hours on my machine), I
<br>
would like to know if there is a better than to find out what the problem
<br>
is, so that I could fix my current installation rather than reinstall MPI
<br>
from scratch.
<br>
<p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14348/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14349.php">Tim Prince: "Re: [OMPI users] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="14347.php">David Singleton: "Re: [OMPI users] Memory affinity"</a>
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
