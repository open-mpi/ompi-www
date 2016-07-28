<?
$subject_val = "Re: [OMPI users] Issue with Profiling Fortran code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 19:07:17 2008" -->
<!-- isoreceived="20081206000717" -->
<!-- sent="Fri, 5 Dec 2008 18:07:12 -0600 (CST)" -->
<!-- isosent="20081206000712" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with Profiling Fortran code" -->
<!-- id="13146584.2146901228522032872.JavaMail.root_at_zimbra" -->
<!-- charset="utf-8" -->
<!-- inreplyto="15221872.2146861228521952570.JavaMail.root_at_zimbra" -->
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
<strong>From:</strong> Anthony Chan (<em>chan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 19:07:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7434.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7432.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Maybe in reply to:</strong> <a href="7399.php">Nick Wright: "[OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>----- &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 5, 2008, at 03:16 , Anthony Chan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; void mpi_comm_rank_(MPI_Comm *comm, int *rank, int *info) {
</span><br>
<span class="quotelev2">&gt; &gt;    printf(&quot;mpi_comm_rank call successfully intercepted\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;    *info = PMPI_Comm_rank(comm,rank);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately this example is not correct. The real Fortran prototype 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for the MPI_Comm_rank function is
</span><br>
<span class="quotelev1">&gt; void mpi_comm_rank_(MPI_Fint *comm, MPI_Fint *rank, MPI_Fint *ierr).
</span><br>
<p>Yes, you are right.  I was being sloppy (it was late, so just cut/paste
<br>
from Nick's code), the correct code should be
<br>
<p>void mpi_comm_rank_(MPI_Fint *comm, MPI_Fint *rank, MPI_Fint *info) {
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;mpi_comm_rank call successfully intercepted\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*info = PMPI_Comm_rank(MPI_Comm_f2c(*comm),*rank);
<br>
}
<br>
<p><p>A.Chan
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you might notice there is no MPI_Comm (and believe me for Open MPI 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Comm is different than MPI_Fint), and there is no guarantee that 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the C int is the same as the Fortran int (looks weird but true).  
</span><br>
<span class="quotelev1">&gt; Therefore, several conversions are required in order to be able to go 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from the Fortran layer into the C one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a result, a tool should never cross the language boundary by  
</span><br>
<span class="quotelev1">&gt; itself. Instead it should call the pmpi function as provided by the  
</span><br>
<span class="quotelev1">&gt; MPI library. This doesn't really fix the issue that started this email
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; thread, but at least clarify it a little bit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A.Chan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----- &quot;Nick Wright&quot; &lt;nwright_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am trying to use the PMPI interface with OPENMPI to profile a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fortran
</span><br>
<span class="quotelev3">&gt; &gt;&gt; program.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have tried with 1.28 and 1.3rc1 with --enable-mpi-profile
</span><br>
<span class="quotelev1">&gt; switched
</span><br>
<span class="quotelev3">&gt; &gt;&gt; on.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The problem seems to be that if one eg. intercepts to call to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpi_comm_rank_ (the fortran hook) then calls pmpi_comm_rank_ this 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; then
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; calls MPI_Comm_rank (the C hook) not PMPI_Comm_rank as it should.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So if one wants to create a library that can profile C and Fortran
</span><br>
<span class="quotelev3">&gt; &gt;&gt; codes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; at the same time one ends up intercepting the mpi call twice. Which
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; not desirable and not what should happen (and indeed doesn't happen
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; other MPI implementations).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; A simple example to illustrate is below. If somebody knows of a fix
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; avoid this issue that would be great !
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nick.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; pmpi_test.c: mpicc pmpi_test.c -c
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; void mpi_comm_rank_(MPI_Comm *comm, int *rank, int *info) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   printf(&quot;mpi_comm_rank call successfully intercepted\n&quot;);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   pmpi_comm_rank_(comm,rank,info);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; int MPI_Comm_rank(MPI_Comm comm, int *rank) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   printf(&quot;MPI_comm_rank call successfully intercepted\n&quot;);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   PMPI_Comm_rank(comm,rank);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hello_mpi.f: mpif77 hello_mpi.f pmpi_test.o
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       program hello
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        implicit none
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        include 'mpif.h'
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        integer ierr
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        integer myid,nprocs
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        character*24 fdate,host
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        call MPI_Init( ierr )
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       myid=0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       call mpi_comm_rank(MPI_COMM_WORLD, myid, ierr )
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       call mpi_comm_size(MPI_COMM_WORLD , nprocs, ierr )
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       call getenv('HOST',host)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       write (*,*) 'Hello World from proc',myid,' out
</span><br>
<span class="quotelev1">&gt; of',nprocs,host
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       call mpi_finalize(ierr)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       end
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7434.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7432.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Maybe in reply to:</strong> <a href="7399.php">Nick Wright: "[OMPI users] Issue with Profiling Fortran code"</a>
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
