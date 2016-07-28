<?
$subject_val = "Re: [OMPI users] Issue with Profiling Fortran code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 10:53:06 2008" -->
<!-- isoreceived="20081205155306" -->
<!-- sent="Fri, 5 Dec 2008 10:52:57 -0500" -->
<!-- isosent="20081205155257" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with Profiling Fortran code" -->
<!-- id="083C4870-07C9-4690-AC10-91D32E9AD982_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D3DEA848-E215-4BEE-A480-E0D9040022C4_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 10:52:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7412.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7410.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<li><strong>In reply to:</strong> <a href="7409.php">George Bosilca: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7414.php">Edgar Gabriel: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, if that one-liner fix works (George and I just chatted about  
<br>
this on the phone), we can probably also push it into v1.2.9.
<br>
<p><p>On Dec 5, 2008, at 10:49 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Nick,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for noticing this. It's unbelievable that nobody noticed that  
</span><br>
<span class="quotelev1">&gt; over the last 5 years. Anyway, I think we have a one line fix for  
</span><br>
<span class="quotelev1">&gt; this problem. I'll test it asap, and then push it in the 1.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 5, 2008, at 10:14 , Nick Wright wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Antony
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That will work yes, but its not portable to other MPI's that do  
</span><br>
<span class="quotelev2">&gt;&gt; implement the profiling layer correctly unfortunately.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess we will just need to detect that we are using openmpi when  
</span><br>
<span class="quotelev2">&gt;&gt; our tool is configured and add some macros to deal with that  
</span><br>
<span class="quotelev2">&gt;&gt; accordingly. Is there an easy way to do this built into openmpi?
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
<span class="quotelev2">&gt;&gt; Anthony Chan wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hope I didn't misunderstand your question.  If you implement
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your profiling library in C where you do your real instrumentation,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you don't need to implement the fortran layer, you can simply link
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with Fortran to C MPI wrapper library -lmpi_f77. i.e.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;OMPI&gt;/bin/mpif77 -o foo foo.f -L&lt;OMPI&gt;/lib -lmpi_f77 -lYourProfClib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where libYourProfClib.a is your profiling tool written in C. If  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you don't want to intercept the MPI call twice for fortran program,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you need to implment fortran layer.  In that case, I would think you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can just call C version of PMPI_xxx directly from your fortran  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; layer, e.g.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void mpi_comm_rank_(MPI_Comm *comm, int *rank, int *info) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   printf(&quot;mpi_comm_rank call successfully intercepted\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   *info = PMPI_Comm_rank(comm,rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A.Chan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----- &quot;Nick Wright&quot; &lt;nwright_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am trying to use the PMPI interface with OPENMPI to profile a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fortran program.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have tried with 1.28 and 1.3rc1 with --enable-mpi-profile  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; switched
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The problem seems to be that if one eg. intercepts to call to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_comm_rank_ (the fortran hook) then calls pmpi_comm_rank_ this  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; calls MPI_Comm_rank (the C hook) not PMPI_Comm_rank as it should.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So if one wants to create a library that can profile C and Fortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; codes at the same time one ends up intercepting the mpi call  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; twice. Which is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not desirable and not what should happen (and indeed doesn't  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; happen in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; other MPI implementations).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A simple example to illustrate is below. If somebody knows of a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fix to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; avoid this issue that would be great !
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nick.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pmpi_test.c: mpicc pmpi_test.c -c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; void mpi_comm_rank_(MPI_Comm *comm, int *rank, int *info) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  printf(&quot;mpi_comm_rank call successfully intercepted\n&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  pmpi_comm_rank_(comm,rank,info);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int MPI_Comm_rank(MPI_Comm comm, int *rank) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  printf(&quot;MPI_comm_rank call successfully intercepted\n&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  PMPI_Comm_rank(comm,rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hello_mpi.f: mpif77 hello_mpi.f pmpi_test.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      program hello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       implicit none
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       include 'mpif.h'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       integer ierr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       integer myid,nprocs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       character*24 fdate,host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       call MPI_Init( ierr )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      myid=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      call mpi_comm_rank(MPI_COMM_WORLD, myid, ierr )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      call mpi_comm_size(MPI_COMM_WORLD , nprocs, ierr )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      call getenv('HOST',host)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      write (*,*) 'Hello World from proc',myid,' out of',nprocs,host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      call mpi_finalize(ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      end
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7412.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7410.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<li><strong>In reply to:</strong> <a href="7409.php">George Bosilca: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7414.php">Edgar Gabriel: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
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
