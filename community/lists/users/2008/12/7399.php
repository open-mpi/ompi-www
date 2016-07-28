<?
$subject_val = "[OMPI users] Issue with Profiling Fortran code";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 19:38:49 2008" -->
<!-- isoreceived="20081205003849" -->
<!-- sent="Thu, 04 Dec 2008 16:38:32 -0800" -->
<!-- isosent="20081205003832" -->
<!-- name="Nick Wright" -->
<!-- email="nwright_at_[hidden]" -->
<!-- subject="[OMPI users] Issue with Profiling Fortran code" -->
<!-- id="49387808.80306_at_sdsc.edu" -->
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
<strong>Subject:</strong> [OMPI users] Issue with Profiling Fortran code<br>
<strong>From:</strong> Nick Wright (<em>nwright_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-04 19:38:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7400.php">Terry Frankcombe: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<li><strong>Previous message:</strong> <a href="7398.php">Jeff Squyres: "Re: [OMPI users] Name Mangling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7401.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Maybe reply:</strong> <a href="7401.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Maybe reply:</strong> <a href="7412.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Maybe reply:</strong> <a href="7432.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Maybe reply:</strong> <a href="7433.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I am trying to use the PMPI interface with OPENMPI to profile a fortran 
<br>
program.
<br>
<p>I have tried with 1.28 and 1.3rc1 with --enable-mpi-profile switched on.
<br>
<p>The problem seems to be that if one eg. intercepts to call to 
<br>
mpi_comm_rank_ (the fortran hook) then calls pmpi_comm_rank_ this then 
<br>
calls MPI_Comm_rank (the C hook) not PMPI_Comm_rank as it should.
<br>
<p>So if one wants to create a library that can profile C and Fortran codes 
<br>
at the same time one ends up intercepting the mpi call twice. Which is 
<br>
not desirable and not what should happen (and indeed doesn't happen in 
<br>
other MPI implementations).
<br>
<p>A simple example to illustrate is below. If somebody knows of a fix to 
<br>
avoid this issue that would be great !
<br>
<p>Thanks
<br>
<p>Nick.
<br>
<p>pmpi_test.c: mpicc pmpi_test.c -c
<br>
<p>#include&lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
void mpi_comm_rank_(MPI_Comm *comm, int *rank, int *info) {
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;mpi_comm_rank call successfully intercepted\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;pmpi_comm_rank_(comm,rank,info);
<br>
}
<br>
int MPI_Comm_rank(MPI_Comm comm, int *rank) {
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;MPI_comm_rank call successfully intercepted\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;PMPI_Comm_rank(comm,rank);
<br>
}
<br>
<p>hello_mpi.f: mpif77 hello_mpi.f pmpi_test.o
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program hello
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer ierr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer myid,nprocs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;character*24 fdate,host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Init( ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;myid=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_rank(MPI_COMM_WORLD, myid, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_size(MPI_COMM_WORLD , nprocs, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call getenv('HOST',host)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (*,*) 'Hello World from proc',myid,' out of',nprocs,host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_finalize(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7400.php">Terry Frankcombe: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<li><strong>Previous message:</strong> <a href="7398.php">Jeff Squyres: "Re: [OMPI users] Name Mangling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7401.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Maybe reply:</strong> <a href="7401.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Maybe reply:</strong> <a href="7412.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Maybe reply:</strong> <a href="7432.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Maybe reply:</strong> <a href="7433.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
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
