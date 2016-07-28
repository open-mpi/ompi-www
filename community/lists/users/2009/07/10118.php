<?
$subject_val = "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 10:15:29 2009" -->
<!-- isoreceived="20090728141529" -->
<!-- sent="Tue, 28 Jul 2009 15:15:14 +0100" -->
<!-- isosent="20090728141514" -->
<!-- name="Ricardo Fonseca" -->
<!-- email="ricardo.fonseca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE" -->
<!-- id="BF3B0AC6-2BF5-4CCF-A86C-F6DC094EB0AE_at_ist.utl.pt" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.12289.1248751497.6040.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE<br>
<strong>From:</strong> Ricardo Fonseca (<em>ricardo.fonseca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-28 10:15:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10119.php">George Bosilca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>Previous message:</strong> <a href="10117.php">Dominic Walsh: "[OMPI users] Vampir Trace &amp; -fPIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10119.php">George Bosilca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>Reply:</strong> <a href="10119.php">George Bosilca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>Maybe reply:</strong> <a href="10120.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>Maybe reply:</strong> <a href="10122.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George
<br>
<p>Thanks for the input. This might be an OS specific problem: I'm  
<br>
running Mac OS X 10.5.7, and this problem appears in openmpi versions  
<br>
1.3.2, 1.3.3 and 1.4a1r21734, using Intel Ifort Compiler 11.0 and 11.1  
<br>
(and also g95 + 1.3.2). I haven't tried older versions. Also, I'm  
<br>
running on a single machine:
<br>
<p>zamb$ mpif90 inplace_test.f90
<br>
zamb$ mpirun -np 2 ./a.out
<br>
&nbsp;&nbsp;Result:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2.000000       2.000000       2.000000       2.000000
<br>
<p>I've tryed the same code under Linux (openmpi-1.3.3 + gfortran) and it  
<br>
works (and also other platforms / MPIs ).
<br>
<p>Can you think of some --mca options I should try? (or any other  
<br>
ideas...)
<br>
<p>Cheers,
<br>
Ricardo
<br>
<pre>
---
Prof. Ricardo Fonseca
GoLP - Grupo de Lasers e Plasmas
Instituto de Plasmas e Fus&#227;o Nuclear
Instituto Superior T&#233;cnico
Av. Rovisco Pais
1049-001 Lisboa
Portugal
tel: +351 21 8419202
fax: +351 21 8464455
web: <a href="http://cfp.ist.utl.pt/golp/">http://cfp.ist.utl.pt/golp/</a>
On Jul 28, 2009, at 4:24 , users-request_at_[hidden] wrote:
&gt; Message: 4
&gt; Date: Mon, 27 Jul 2009 17:13:23 -0400
&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
&gt; Subject: Re: [OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE /
&gt; 	MPI_ALLREDUCE
&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt; Message-ID: &lt;966A51C3-A15F-425B-A6B0-81221033CCF1_at_[hidden]&gt;
&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
&gt;
&gt; Ricardo,
&gt;
&gt; I can't reproduce your problem with the latest version (trunk r21734).
&gt; If I run the provided program on two nodes I get the following answer.
&gt; [***]$ mpif77 inplace.f -o inplace -g
&gt; [***]$ mpirun -bynode -np 2 ./inplace
&gt;  Result:
&gt;    3.0000000       3.0000000       3.0000000       3.0000000
&gt;
&gt; This seems correct and in sync with the C answer.
&gt;
&gt;   george.
&gt;
&gt;
&gt; On Jul 27, 2009, at 09:42 , Ricardo Fonseca wrote:
&gt;
&gt;&gt; program inplace
&gt;&gt;
&gt;&gt;  use mpi
&gt;&gt;
&gt;&gt;  implicit none
&gt;&gt;
&gt;&gt;  integer :: ierr, rank, rsize, bsize
&gt;&gt;  real, dimension( 2, 2 ) :: buffer, out
&gt;&gt;  integer :: rc
&gt;&gt;
&gt;&gt;  call MPI_INIT(ierr)
&gt;&gt;  call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
&gt;&gt;  call MPI_COMM_SIZE(MPI_COMM_WORLD, rsize, ierr)
&gt;&gt;
&gt;&gt;  buffer = rank + 1
&gt;&gt;  bsize = size(buffer,1) * size(buffer,2)
&gt;&gt;
&gt;&gt;  if ( rank == 0 ) then
&gt;&gt;    call mpi_reduce( MPI_IN_PLACE, buffer, bsize, MPI_REAL, MPI_SUM,
&gt;&gt; 0, MPI_COMM_WORLD, ierr )
&gt;&gt;  else
&gt;&gt;    call mpi_reduce( buffer,       0,      bsize, MPI_REAL, MPI_SUM,
&gt;&gt; 0, MPI_COMM_WORLD, ierr )
&gt;&gt;  endif
&gt;&gt;
&gt;&gt;  ! use allreduce instead
&gt;&gt;  ! call mpi_allreduce( MPI_IN_PLACE, buffer, bsize, MPI_REAL,
&gt;&gt; MPI_SUM, MPI_COMM_WORLD, ierr )
&gt;&gt;
&gt;&gt;  if ( rank == 0 ) then
&gt;&gt;    print *, 'Result:'
&gt;&gt;    print *, buffer
&gt;&gt;  endif
&gt;&gt;
&gt;&gt;  rc = 0
&gt;&gt;  call mpi_finalize( rc )
&gt;&gt;
&gt;&gt; end program
&gt;&gt;
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10118/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10119.php">George Bosilca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>Previous message:</strong> <a href="10117.php">Dominic Walsh: "[OMPI users] Vampir Trace &amp; -fPIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10119.php">George Bosilca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>Reply:</strong> <a href="10119.php">George Bosilca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>Maybe reply:</strong> <a href="10120.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>Maybe reply:</strong> <a href="10122.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
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
