<?
$subject_val = "Re: [OMPI users] Issue with Profiling Fortran code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 18:59:01 2008" -->
<!-- isoreceived="20081205235901" -->
<!-- sent="Fri, 5 Dec 2008 17:58:57 -0600 (CST)" -->
<!-- isosent="20081205235857" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with Profiling Fortran code" -->
<!-- id="4355178.2146661228521537834.JavaMail.root_at_zimbra" -->
<!-- charset="utf-8" -->
<!-- inreplyto="31935488.2146501228520811647.JavaMail.root_at_zimbra" -->
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
<strong>Date:</strong> 2008-12-05 18:58:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7433.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7431.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Maybe in reply to:</strong> <a href="7399.php">Nick Wright: "[OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7434.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Reply:</strong> <a href="7434.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Reply:</strong> <a href="7435.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nick,
<br>
<p>----- &quot;Nick Wright&quot; &lt;nwright_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; For the first case you describe, as OPENMPI is now, the call sequence
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from fortran is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_comm_rank -&gt; MPI_Comm_rank -&gt; PMPI_Comm_rank
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the second case, as MPICH is now, its
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_comm_rank -&gt; PMPI_Comm_rank
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>AFAIK, all known/popular MPI implemention's fortran binding 
<br>
layer is implemented with C MPI functions, including
<br>
MPICH2 and OpenMPI.   If MPICH2's fortran layer was implemented 
<br>
the way you said, typical profiling tools including MPE will
<br>
fail to work with fortran applications.
<br>
<p>e.g. check mpich2-xxx/src/binding/f77/sendf.c.
<br>
<p>A.Chan
<br>
<p><span class="quotelev1">&gt; So for the first case if I have a pure fortran/C++ code I have to 
</span><br>
<span class="quotelev1">&gt; profile at the C interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So is the patch now retracted ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nick.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I think you have an incorrect deffinition of &quot;correctly&quot; :). 
</span><br>
<span class="quotelev1">&gt; According 
</span><br>
<span class="quotelev2">&gt; &gt; to the MPI standard, an MPI implementation is free to either layer 
</span><br>
<span class="quotelev2">&gt; &gt; language bindings (and only allow profiling at the lowest layer)  or
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev2">&gt; &gt; layer the language bindings (and require profiling libraries
</span><br>
<span class="quotelev1">&gt; intercept 
</span><br>
<span class="quotelev2">&gt; &gt; each language).  The only requirement is that the implementation 
</span><br>
<span class="quotelev2">&gt; &gt; document what it has done.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Since everyone is pretty clear on what Open MPI has done, I don't
</span><br>
<span class="quotelev1">&gt; think 
</span><br>
<span class="quotelev2">&gt; &gt; you can claim Open MPI is doing it &quot;incorrectly&quot;.  Different from
</span><br>
<span class="quotelev1">&gt; MPICH 
</span><br>
<span class="quotelev2">&gt; &gt; is not necessarily incorrect.  (BTW, LAM/MPI handles profiling the
</span><br>
<span class="quotelev1">&gt; same 
</span><br>
<span class="quotelev2">&gt; &gt; way as Open MPI).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, 5 Dec 2008, Nick Wright wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Antony
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That will work yes, but its not portable to other MPI's that do 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; implement the profiling layer correctly unfortunately.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I guess we will just need to detect that we are using openmpi when
</span><br>
<span class="quotelev1">&gt; our 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tool is configured and add some macros to deal with that
</span><br>
<span class="quotelev1">&gt; accordingly. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is there an easy way to do this built into openmpi?
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
<span class="quotelev3">&gt; &gt;&gt; Anthony Chan wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hope I didn't misunderstand your question.  If you implement
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; your profiling library in C where you do your real
</span><br>
<span class="quotelev1">&gt; instrumentation,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; you don't need to implement the fortran layer, you can simply
</span><br>
<span class="quotelev1">&gt; link
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with Fortran to C MPI wrapper library -lmpi_f77. i.e.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &lt;OMPI&gt;/bin/mpif77 -o foo foo.f -L&lt;OMPI&gt;/lib -lmpi_f77
</span><br>
<span class="quotelev1">&gt; -lYourProfClib
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; where libYourProfClib.a is your profiling tool written in C. If
</span><br>
<span class="quotelev1">&gt; you 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; don't want to intercept the MPI call twice for fortran program,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; you need to implment fortran layer.  In that case, I would think
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; can just call C version of PMPI_xxx directly from your fortran
</span><br>
<span class="quotelev1">&gt; layer, 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; e.g.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; void mpi_comm_rank_(MPI_Comm *comm, int *rank, int *info) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     printf(&quot;mpi_comm_rank call successfully intercepted\n&quot;);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     *info = PMPI_Comm_rank(comm,rank);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; A.Chan
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ----- &quot;Nick Wright&quot; &lt;nwright_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I am trying to use the PMPI interface with OPENMPI to profile a
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; fortran program.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I have tried with 1.28 and 1.3rc1 with --enable-mpi-profile
</span><br>
<span class="quotelev1">&gt; switched
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; on.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The problem seems to be that if one eg. intercepts to call to 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mpi_comm_rank_ (the fortran hook) then calls pmpi_comm_rank_ this
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; calls MPI_Comm_rank (the C hook) not PMPI_Comm_rank as it
</span><br>
<span class="quotelev1">&gt; should.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; So if one wants to create a library that can profile C and
</span><br>
<span class="quotelev1">&gt; Fortran
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; codes at the same time one ends up intercepting the mpi call
</span><br>
<span class="quotelev1">&gt; twice. 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Which is
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; not desirable and not what should happen (and indeed doesn't
</span><br>
<span class="quotelev1">&gt; happen in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; other MPI implementations).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; A simple example to illustrate is below. If somebody knows of a
</span><br>
<span class="quotelev1">&gt; fix to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; avoid this issue that would be great !
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Nick.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; pmpi_test.c: mpicc pmpi_test.c -c
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; void mpi_comm_rank_(MPI_Comm *comm, int *rank, int *info) {
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    printf(&quot;mpi_comm_rank call successfully intercepted\n&quot;);
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    pmpi_comm_rank_(comm,rank,info);
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; int MPI_Comm_rank(MPI_Comm comm, int *rank) {
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    printf(&quot;MPI_comm_rank call successfully intercepted\n&quot;);
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    PMPI_Comm_rank(comm,rank);
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; hello_mpi.f: mpif77 hello_mpi.f pmpi_test.o
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        program hello
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;         implicit none
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;         include 'mpif.h'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;         integer ierr
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;         integer myid,nprocs
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;         character*24 fdate,host
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;         call MPI_Init( ierr )
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        myid=0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        call mpi_comm_rank(MPI_COMM_WORLD, myid, ierr )
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        call mpi_comm_size(MPI_COMM_WORLD , nprocs, ierr )
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        call getenv('HOST',host)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        write (*,*) 'Hello World from proc',myid,' out
</span><br>
<span class="quotelev1">&gt; of',nprocs,host
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        end
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7433.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7431.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Maybe in reply to:</strong> <a href="7399.php">Nick Wright: "[OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7434.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Reply:</strong> <a href="7434.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Reply:</strong> <a href="7435.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
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
