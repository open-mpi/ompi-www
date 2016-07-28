<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Dec 30 21:50:38 2006" -->
<!-- isoreceived="20061231025038" -->
<!-- sent="Sat, 30 Dec 2006 19:50:34 -0700 (MST)" -->
<!-- isosent="20061231025034" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] incorrect definition of MPI_ERRCODES_IGNORE?" -->
<!-- id="27849.128.165.0.81.1167533434.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="Pine.OSX.4.64.0612301539180.674_at_barry-smiths-computer.local" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-30 21:50:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/01/1241.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r12945"</a>
<li><strong>Previous message:</strong> <a href="1239.php">Barry Smith: "[OMPI devel] incorrect definition of MPI_ERRCODES_IGNORE?"</a>
<li><strong>In reply to:</strong> <a href="1239.php">Barry Smith: "[OMPI devel] incorrect definition of MPI_ERRCODES_IGNORE?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the bug report.  You are absolutely correct - the #define is
<br>
incorrect in Open MPI.  I've committed a fix to our development trunk and
<br>
it should be included in the future releases.  In the mean time, it is
<br>
safe to change the line in the installed mpi.h for Open MPI from:
<br>
<p>&nbsp;&nbsp;#define MPI_ERRCODES_IGNORE      ((void *) 0)    /* don't return error
<br>
codes */
<br>
<p>to
<br>
<p>&nbsp;&nbsp;#define MPI_ERRCODES_IGNORE      ((int *) 0)    /* don't return error
<br>
codes */
<br>
<p>Since it's a simple cast, there is no need to recompile Open MPI's libmpi
<br>
-- modifying the installed mpi.h is safe.
<br>
<p>Thanks again,
<br>
<p>Brian
<br>
<p><p><span class="quotelev1">&gt;   OPEN MPI folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Please see the possible error in your code, if this is indeed an error
</span><br>
<span class="quotelev1">&gt; on your part we would appreciate a fix as soon as possible so that we do
</span><br>
<span class="quotelev1">&gt; not have to direct our users to other MPI implementations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Barry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, 29 Dec 2006, Satish Balay wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks like there is some issues with MPI_Spawn() and OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libfast in:
</span><br>
<span class="quotelev2">&gt;&gt; /Volumes/MaxtorUFS1/geoframesvn/tools/petsc-dev/src/sys/objects
</span><br>
<span class="quotelev2">&gt;&gt; mpinit.c: In function 'PetscErrorCode PetscOpenMPSpawn(PetscMPIInt)':
</span><br>
<span class="quotelev2">&gt;&gt; mpinit.c:73: error: invalid conversion from 'void*' to 'int*'
</span><br>
<span class="quotelev2">&gt;&gt; mpinit.c:73: error:   initializing argument 8 of 'int
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_spawn(char*, char**, int, ompi_info_t*, int, omp
</span><br>
<span class="quotelev2">&gt;&gt; i_communicator_t*, ompi_communicator_t**, int*)'
</span><br>
<span class="quotelev2">&gt;&gt; ar: mpinit.o: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; &lt;&lt;&lt;&lt;&lt;&lt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ierr =
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_spawn(programname,argv,nodesize-1,MPI_INFO_NULL,0,PETSC_COMM_SELF,&amp;children,MPI_ERRCODES_IGNORE);CHKERRQ(ierr);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks like using MPI_ERRCODES_IGNORE in that function call is
</span><br>
<span class="quotelev2">&gt;&gt; correct. However OpenMPI declares it to '((void *) 0)' giving compile
</span><br>
<span class="quotelev2">&gt;&gt; error with c++. [MPICH declares it to '(int *)0' - which doesn't give
</span><br>
<span class="quotelev2">&gt;&gt; any compile erorrs].
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guss the following change should work - but I suspect this is an
</span><br>
<span class="quotelev2">&gt;&gt; openmpi bug.. I don't think its appropriate to make this change in
</span><br>
<span class="quotelev2">&gt;&gt; PETSc code..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ierr =
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_spawn(programname,argv,nodesize-1,MPI_INFO_NULL,0,PETSC_COMM_SELF,&amp;children,(int*)
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ERRCODES_IGNORE);CHKERRQ(ierr);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Satish
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, 29 Dec 2006, Charles Williams wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm not sure if this is a problem with PETSc or OpenMPI.  Things were
</span><br>
<span class="quotelev2">&gt;&gt; building
</span><br>
<span class="quotelev3">&gt;&gt; &gt; OK on December 19, and this problem has crept in since then.  Thanks
</span><br>
<span class="quotelev2">&gt;&gt; for any
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ideas.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Charles
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Charles A. Williams
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dept. of Earth &amp; Environmental Sciences
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Science Center, 2C01B
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Rensselaer Polytechnic Institute
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Troy, NY  12180
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Phone:    (518) 276-3369
</span><br>
<span class="quotelev3">&gt;&gt; &gt; FAX:        (518) 276-2012
</span><br>
<span class="quotelev3">&gt;&gt; &gt; e-mail:    willic3_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --===============0719315771==--
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/01/1241.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r12945"</a>
<li><strong>Previous message:</strong> <a href="1239.php">Barry Smith: "[OMPI devel] incorrect definition of MPI_ERRCODES_IGNORE?"</a>
<li><strong>In reply to:</strong> <a href="1239.php">Barry Smith: "[OMPI devel] incorrect definition of MPI_ERRCODES_IGNORE?"</a>
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
