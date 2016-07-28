<?
$subject_val = "Re: [OMPI users] Issue with Profiling Fortran code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 14:11:30 2008" -->
<!-- isoreceived="20081205191130" -->
<!-- sent="Fri, 5 Dec 2008 14:11:18 -0500" -->
<!-- isosent="20081205191118" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with Profiling Fortran code" -->
<!-- id="84F416C8-A3BD-488F-BED1-91A1F83F552C_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="27405700.2114031228464996031.JavaMail.root_at_zimbra" -->
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
<strong>Subject:</strong> Re: [OMPI users] Issue with Profiling Fortran code<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 14:11:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7428.php">Brock Palen: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Previous message:</strong> <a href="7426.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7401.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7412.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 5, 2008, at 03:16 , Anthony Chan wrote:
<br>
<p><span class="quotelev1">&gt; void mpi_comm_rank_(MPI_Comm *comm, int *rank, int *info) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;mpi_comm_rank call successfully intercepted\n&quot;);
</span><br>
<span class="quotelev1">&gt;    *info = PMPI_Comm_rank(comm,rank);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p>Unfortunately this example is not correct. The real Fortran prototype  
<br>
for the MPI_Comm_rank function is
<br>
void mpi_comm_rank_(MPI_Fint *comm, MPI_Fint *rank, MPI_Fint *ierr).
<br>
<p>As you might notice there is no MPI_Comm (and believe me for Open MPI  
<br>
MPI_Comm is different than MPI_Fint), and there is no guarantee that  
<br>
the C int is the same as the Fortran int (looks weird but true).  
<br>
Therefore, several conversions are required in order to be able to go  
<br>
from the Fortran layer into the C one.
<br>
<p>As a result, a tool should never cross the language boundary by  
<br>
itself. Instead it should call the pmpi function as provided by the  
<br>
MPI library. This doesn't really fix the issue that started this email  
<br>
thread, but at least clarify it a little bit.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A.Chan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- &quot;Nick Wright&quot; &lt;nwright_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to use the PMPI interface with OPENMPI to profile a
</span><br>
<span class="quotelev2">&gt;&gt; fortran
</span><br>
<span class="quotelev2">&gt;&gt; program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tried with 1.28 and 1.3rc1 with --enable-mpi-profile switched
</span><br>
<span class="quotelev2">&gt;&gt; on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem seems to be that if one eg. intercepts to call to
</span><br>
<span class="quotelev2">&gt;&gt; mpi_comm_rank_ (the fortran hook) then calls pmpi_comm_rank_ this  
</span><br>
<span class="quotelev2">&gt;&gt; then
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; calls MPI_Comm_rank (the C hook) not PMPI_Comm_rank as it should.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So if one wants to create a library that can profile C and Fortran
</span><br>
<span class="quotelev2">&gt;&gt; codes
</span><br>
<span class="quotelev2">&gt;&gt; at the same time one ends up intercepting the mpi call twice. Which  
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; not desirable and not what should happen (and indeed doesn't happen  
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; other MPI implementations).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A simple example to illustrate is below. If somebody knows of a fix  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; avoid this issue that would be great !
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nick.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pmpi_test.c: mpicc pmpi_test.c -c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; void mpi_comm_rank_(MPI_Comm *comm, int *rank, int *info) {
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;mpi_comm_rank call successfully intercepted\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;   pmpi_comm_rank_(comm,rank,info);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; int MPI_Comm_rank(MPI_Comm comm, int *rank) {
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;MPI_comm_rank call successfully intercepted\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;   PMPI_Comm_rank(comm,rank);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hello_mpi.f: mpif77 hello_mpi.f pmpi_test.o
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       program hello
</span><br>
<span class="quotelev2">&gt;&gt;        implicit none
</span><br>
<span class="quotelev2">&gt;&gt;        include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt;        integer ierr
</span><br>
<span class="quotelev2">&gt;&gt;        integer myid,nprocs
</span><br>
<span class="quotelev2">&gt;&gt;        character*24 fdate,host
</span><br>
<span class="quotelev2">&gt;&gt;        call MPI_Init( ierr )
</span><br>
<span class="quotelev2">&gt;&gt;       myid=0
</span><br>
<span class="quotelev2">&gt;&gt;       call mpi_comm_rank(MPI_COMM_WORLD, myid, ierr )
</span><br>
<span class="quotelev2">&gt;&gt;       call mpi_comm_size(MPI_COMM_WORLD , nprocs, ierr )
</span><br>
<span class="quotelev2">&gt;&gt;       call getenv('HOST',host)
</span><br>
<span class="quotelev2">&gt;&gt;       write (*,*) 'Hello World from proc',myid,' out of',nprocs,host
</span><br>
<span class="quotelev2">&gt;&gt;       call mpi_finalize(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;       end
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7428.php">Brock Palen: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Previous message:</strong> <a href="7426.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7401.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7412.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
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
