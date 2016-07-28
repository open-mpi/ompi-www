<?
$subject_val = "Re: [OMPI users] Issue with Profiling Fortran code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 03:16:40 2008" -->
<!-- isoreceived="20081205081640" -->
<!-- sent="Fri, 5 Dec 2008 02:16:36 -0600 (CST)" -->
<!-- isosent="20081205081636" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with Profiling Fortran code" -->
<!-- id="27405700.2114031228464996031.JavaMail.root_at_zimbra" -->
<!-- charset="utf-8" -->
<!-- inreplyto="12757650.2113991228464671176.JavaMail.root_at_zimbra" -->
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
<strong>Date:</strong> 2008-12-05 03:16:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7402.php">Jens: "[OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<li><strong>Previous message:</strong> <a href="7400.php">Terry Frankcombe: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<li><strong>Maybe in reply to:</strong> <a href="7399.php">Nick Wright: "[OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7405.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Reply:</strong> <a href="7405.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Reply:</strong> <a href="7427.php">George Bosilca: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hope I didn't misunderstand your question.  If you implement
<br>
your profiling library in C where you do your real instrumentation,
<br>
you don't need to implement the fortran layer, you can simply link
<br>
with Fortran to C MPI wrapper library -lmpi_f77. i.e.
<br>
<p>&lt;OMPI&gt;/bin/mpif77 -o foo foo.f -L&lt;OMPI&gt;/lib -lmpi_f77 -lYourProfClib
<br>
<p>where libYourProfClib.a is your profiling tool written in C. 
<br>
If you don't want to intercept the MPI call twice for fortran program,
<br>
you need to implment fortran layer.  In that case, I would think you
<br>
can just call C version of PMPI_xxx directly from your fortran layer, e.g.
<br>
<p>void mpi_comm_rank_(MPI_Comm *comm, int *rank, int *info) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;mpi_comm_rank call successfully intercepted\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*info = PMPI_Comm_rank(comm,rank);
<br>
}
<br>
<p>A.Chan
<br>
<p>----- &quot;Nick Wright&quot; &lt;nwright_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to use the PMPI interface with OPENMPI to profile a
</span><br>
<span class="quotelev1">&gt; fortran 
</span><br>
<span class="quotelev1">&gt; program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tried with 1.28 and 1.3rc1 with --enable-mpi-profile switched
</span><br>
<span class="quotelev1">&gt; on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem seems to be that if one eg. intercepts to call to 
</span><br>
<span class="quotelev1">&gt; mpi_comm_rank_ (the fortran hook) then calls pmpi_comm_rank_ this then
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; calls MPI_Comm_rank (the C hook) not PMPI_Comm_rank as it should.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So if one wants to create a library that can profile C and Fortran
</span><br>
<span class="quotelev1">&gt; codes 
</span><br>
<span class="quotelev1">&gt; at the same time one ends up intercepting the mpi call twice. Which is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; not desirable and not what should happen (and indeed doesn't happen in
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; other MPI implementations).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A simple example to illustrate is below. If somebody knows of a fix to
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; avoid this issue that would be great !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nick.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pmpi_test.c: mpicc pmpi_test.c -c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; void mpi_comm_rank_(MPI_Comm *comm, int *rank, int *info) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;mpi_comm_rank call successfully intercepted\n&quot;);
</span><br>
<span class="quotelev1">&gt;    pmpi_comm_rank_(comm,rank,info);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; int MPI_Comm_rank(MPI_Comm comm, int *rank) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;MPI_comm_rank call successfully intercepted\n&quot;);
</span><br>
<span class="quotelev1">&gt;    PMPI_Comm_rank(comm,rank);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hello_mpi.f: mpif77 hello_mpi.f pmpi_test.o
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        program hello
</span><br>
<span class="quotelev1">&gt;         implicit none
</span><br>
<span class="quotelev1">&gt;         include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;         integer ierr
</span><br>
<span class="quotelev1">&gt;         integer myid,nprocs
</span><br>
<span class="quotelev1">&gt;         character*24 fdate,host
</span><br>
<span class="quotelev1">&gt;         call MPI_Init( ierr )
</span><br>
<span class="quotelev1">&gt;        myid=0
</span><br>
<span class="quotelev1">&gt;        call mpi_comm_rank(MPI_COMM_WORLD, myid, ierr )
</span><br>
<span class="quotelev1">&gt;        call mpi_comm_size(MPI_COMM_WORLD , nprocs, ierr )
</span><br>
<span class="quotelev1">&gt;        call getenv('HOST',host)
</span><br>
<span class="quotelev1">&gt;        write (*,*) 'Hello World from proc',myid,' out of',nprocs,host
</span><br>
<span class="quotelev1">&gt;        call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt;        end
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="7402.php">Jens: "[OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<li><strong>Previous message:</strong> <a href="7400.php">Terry Frankcombe: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<li><strong>Maybe in reply to:</strong> <a href="7399.php">Nick Wright: "[OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7405.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Reply:</strong> <a href="7405.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Reply:</strong> <a href="7427.php">George Bosilca: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
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
