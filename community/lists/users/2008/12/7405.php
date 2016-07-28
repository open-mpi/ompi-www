<?
$subject_val = "Re: [OMPI users] Issue with Profiling Fortran code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 10:14:16 2008" -->
<!-- isoreceived="20081205151416" -->
<!-- sent="Fri, 05 Dec 2008 07:14:02 -0800" -->
<!-- isosent="20081205151402" -->
<!-- name="Nick Wright" -->
<!-- email="nwright_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with Profiling Fortran code" -->
<!-- id="4939453A.2090400_at_sdsc.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Nick Wright (<em>nwright_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 10:14:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7406.php">Jens: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<li><strong>Previous message:</strong> <a href="7404.php">Jeff Squyres: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<li><strong>In reply to:</strong> <a href="7401.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7409.php">George Bosilca: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Reply:</strong> <a href="7409.php">George Bosilca: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Reply:</strong> <a href="7421.php">Brian W. Barrett: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Reply:</strong> <a href="7431.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Antony
<br>
<p>That will work yes, but its not portable to other MPI's that do 
<br>
implement the profiling layer correctly unfortunately.
<br>
<p>I guess we will just need to detect that we are using openmpi when our 
<br>
tool is configured and add some macros to deal with that accordingly. Is 
<br>
there an easy way to do this built into openmpi?
<br>
<p>Thanks
<br>
<p>Nick.
<br>
<p>Anthony Chan wrote:
<br>
<span class="quotelev1">&gt; Hope I didn't misunderstand your question.  If you implement
</span><br>
<span class="quotelev1">&gt; your profiling library in C where you do your real instrumentation,
</span><br>
<span class="quotelev1">&gt; you don't need to implement the fortran layer, you can simply link
</span><br>
<span class="quotelev1">&gt; with Fortran to C MPI wrapper library -lmpi_f77. i.e.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;OMPI&gt;/bin/mpif77 -o foo foo.f -L&lt;OMPI&gt;/lib -lmpi_f77 -lYourProfClib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where libYourProfClib.a is your profiling tool written in C. 
</span><br>
<span class="quotelev1">&gt; If you don't want to intercept the MPI call twice for fortran program,
</span><br>
<span class="quotelev1">&gt; you need to implment fortran layer.  In that case, I would think you
</span><br>
<span class="quotelev1">&gt; can just call C version of PMPI_xxx directly from your fortran layer, e.g.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void mpi_comm_rank_(MPI_Comm *comm, int *rank, int *info) {
</span><br>
<span class="quotelev1">&gt;     printf(&quot;mpi_comm_rank call successfully intercepted\n&quot;);
</span><br>
<span class="quotelev1">&gt;     *info = PMPI_Comm_rank(comm,rank);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev2">&gt;&gt; mpi_comm_rank_ (the fortran hook) then calls pmpi_comm_rank_ this then
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
<span class="quotelev2">&gt;&gt; at the same time one ends up intercepting the mpi call twice. Which is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; not desirable and not what should happen (and indeed doesn't happen in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; other MPI implementations).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A simple example to illustrate is below. If somebody knows of a fix to
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
<span class="quotelev2">&gt;&gt;    printf(&quot;mpi_comm_rank call successfully intercepted\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;    pmpi_comm_rank_(comm,rank,info);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; int MPI_Comm_rank(MPI_Comm comm, int *rank) {
</span><br>
<span class="quotelev2">&gt;&gt;    printf(&quot;MPI_comm_rank call successfully intercepted\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;    PMPI_Comm_rank(comm,rank);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hello_mpi.f: mpif77 hello_mpi.f pmpi_test.o
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        program hello
</span><br>
<span class="quotelev2">&gt;&gt;         implicit none
</span><br>
<span class="quotelev2">&gt;&gt;         include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt;         integer ierr
</span><br>
<span class="quotelev2">&gt;&gt;         integer myid,nprocs
</span><br>
<span class="quotelev2">&gt;&gt;         character*24 fdate,host
</span><br>
<span class="quotelev2">&gt;&gt;         call MPI_Init( ierr )
</span><br>
<span class="quotelev2">&gt;&gt;        myid=0
</span><br>
<span class="quotelev2">&gt;&gt;        call mpi_comm_rank(MPI_COMM_WORLD, myid, ierr )
</span><br>
<span class="quotelev2">&gt;&gt;        call mpi_comm_size(MPI_COMM_WORLD , nprocs, ierr )
</span><br>
<span class="quotelev2">&gt;&gt;        call getenv('HOST',host)
</span><br>
<span class="quotelev2">&gt;&gt;        write (*,*) 'Hello World from proc',myid,' out of',nprocs,host
</span><br>
<span class="quotelev2">&gt;&gt;        call mpi_finalize(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;        end
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
<li><strong>Next message:</strong> <a href="7406.php">Jens: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<li><strong>Previous message:</strong> <a href="7404.php">Jeff Squyres: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<li><strong>In reply to:</strong> <a href="7401.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7409.php">George Bosilca: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Reply:</strong> <a href="7409.php">George Bosilca: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Reply:</strong> <a href="7421.php">Brian W. Barrett: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Reply:</strong> <a href="7431.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
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
