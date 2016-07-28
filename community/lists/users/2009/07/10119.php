<?
$subject_val = "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 11:16:42 2009" -->
<!-- isoreceived="20090728151642" -->
<!-- sent="Tue, 28 Jul 2009 11:16:34 -0400" -->
<!-- isosent="20090728151634" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE" -->
<!-- id="C0F59401-0A63-4EB8-804B-51D29071295E_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BF3B0AC6-2BF5-4CCF-A86C-F6DC094EB0AE_at_ist.utl.pt" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-28 11:16:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10120.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>Previous message:</strong> <a href="10118.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>In reply to:</strong> <a href="10118.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10120.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ricardo,
<br>
<p>I checked on Linux and on Mac OS X 10.5.7 with the fortran compilers  
<br>
from (hpc.sourceforge.net) and I get the correct answer. As you only  
<br>
report problems on Mac OS X I wonder if the real source of the problem  
<br>
is not coming from a library mismatch. As you know, Open MPI is  
<br>
bundled in Leopard. We had problems in the past if the user install  
<br>
their own version, if the paths are not correctly set.
<br>
<p>Let's try to understand what the problem is on your system. First  
<br>
please compile your version of Open MPI by adding --enable-mpirun- 
<br>
prefix-by-default to the configure line. Then once everything is  
<br>
installed, compile a simple application (inplace.F is a good example),  
<br>
do a &quot;otool -L a.out&quot; and send out the output.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 28, 2009, at 10:15 , Ricardo Fonseca wrote:
<br>
<span class="quotelev1">&gt; Hi George
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the input. This might be an OS specific problem: I'm  
</span><br>
<span class="quotelev1">&gt; running Mac OS X 10.5.7, and this problem appears in openmpi  
</span><br>
<span class="quotelev1">&gt; versions 1.3.2, 1.3.3 and 1.4a1r21734, using Intel Ifort Compiler  
</span><br>
<span class="quotelev1">&gt; 11.0 and 11.1 (and also g95 + 1.3.2). I haven't tried older  
</span><br>
<span class="quotelev1">&gt; versions. Also, I'm running on a single machine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; zamb$ mpif90 inplace_test.f90
</span><br>
<span class="quotelev1">&gt; zamb$ mpirun -np 2 ./a.out
</span><br>
<span class="quotelev1">&gt;  Result:
</span><br>
<span class="quotelev1">&gt;    2.000000       2.000000       2.000000       2.000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tryed the same code under Linux (openmpi-1.3.3 + gfortran) and  
</span><br>
<span class="quotelev1">&gt; it works (and also other platforms / MPIs ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you think of some --mca options I should try? (or any other  
</span><br>
<span class="quotelev1">&gt; ideas...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ricardo
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Prof. Ricardo Fonseca
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GoLP - Grupo de Lasers e Plasmas
</span><br>
<span class="quotelev1">&gt; Instituto de Plasmas e Fus&#227;o Nuclear
</span><br>
<span class="quotelev1">&gt; Instituto Superior T&#233;cnico
</span><br>
<span class="quotelev1">&gt; Av. Rovisco Pais
</span><br>
<span class="quotelev1">&gt; 1049-001 Lisboa
</span><br>
<span class="quotelev1">&gt; Portugal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tel: +351 21 8419202
</span><br>
<span class="quotelev1">&gt; fax: +351 21 8464455
</span><br>
<span class="quotelev1">&gt; web: <a href="http://cfp.ist.utl.pt/golp/">http://cfp.ist.utl.pt/golp/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2009, at 4:24 , users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 4
</span><br>
<span class="quotelev2">&gt;&gt; Date: Mon, 27 Jul 2009 17:13:23 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE /
</span><br>
<span class="quotelev2">&gt;&gt; 	MPI_ALLREDUCE
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;966A51C3-A15F-425B-A6B0-81221033CCF1_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ricardo,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can't reproduce your problem with the latest version (trunk  
</span><br>
<span class="quotelev2">&gt;&gt; r21734).
</span><br>
<span class="quotelev2">&gt;&gt; If I run the provided program on two nodes I get the following  
</span><br>
<span class="quotelev2">&gt;&gt; answer.
</span><br>
<span class="quotelev2">&gt;&gt; [***]$ mpif77 inplace.f -o inplace -g
</span><br>
<span class="quotelev2">&gt;&gt; [***]$ mpirun -bynode -np 2 ./inplace
</span><br>
<span class="quotelev2">&gt;&gt;  Result:
</span><br>
<span class="quotelev2">&gt;&gt;    3.0000000       3.0000000       3.0000000       3.0000000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This seems correct and in sync with the C answer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 27, 2009, at 09:42 , Ricardo Fonseca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program inplace
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  use mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  implicit none
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  integer :: ierr, rank, rsize, bsize
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  real, dimension( 2, 2 ) :: buffer, out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  integer :: rc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  call MPI_INIT(ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  call MPI_COMM_SIZE(MPI_COMM_WORLD, rsize, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  buffer = rank + 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  bsize = size(buffer,1) * size(buffer,2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  if ( rank == 0 ) then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    call mpi_reduce( MPI_IN_PLACE, buffer, bsize, MPI_REAL, MPI_SUM,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0, MPI_COMM_WORLD, ierr )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    call mpi_reduce( buffer,       0,      bsize, MPI_REAL, MPI_SUM,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0, MPI_COMM_WORLD, ierr )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ! use allreduce instead
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ! call mpi_allreduce( MPI_IN_PLACE, buffer, bsize, MPI_REAL,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_SUM, MPI_COMM_WORLD, ierr )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  if ( rank == 0 ) then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    print *, 'Result:'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    print *, buffer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  rc = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  call mpi_finalize( rc )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; end program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10120.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>Previous message:</strong> <a href="10118.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>In reply to:</strong> <a href="10118.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10120.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
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
