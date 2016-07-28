<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Dec 30 16:39:59 2006" -->
<!-- isoreceived="20061230213959" -->
<!-- sent="Sat, 30 Dec 2006 15:40:55 -0600 (CST)" -->
<!-- isosent="20061230214055" -->
<!-- name="Barry Smith" -->
<!-- email="bsmith_at_[hidden]" -->
<!-- subject="[OMPI devel] incorrect definition of MPI_ERRCODES_IGNORE?" -->
<!-- id="Pine.OSX.4.64.0612301539180.674_at_barry-smiths-computer.local" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Barry Smith (<em>bsmith_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-30 16:40:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1240.php">Brian W. Barrett: "Re: [OMPI devel] incorrect definition of MPI_ERRCODES_IGNORE?"</a>
<li><strong>Previous message:</strong> <a href="1238.php">Jeff Squyres: "Re: [OMPI devel] building a simple MPI cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1240.php">Brian W. Barrett: "Re: [OMPI devel] incorrect definition of MPI_ERRCODES_IGNORE?"</a>
<li><strong>Reply:</strong> <a href="1240.php">Brian W. Barrett: "Re: [OMPI devel] incorrect definition of MPI_ERRCODES_IGNORE?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;OPEN MPI folks,
<br>
<p>&nbsp;&nbsp;&nbsp;Please see the possible error in your code, if this is indeed an error
<br>
on your part we would appreciate a fix as soon as possible so that we do
<br>
not have to direct our users to other MPI implementations.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Barry
<br>
<p><p>On Fri, 29 Dec 2006, Satish Balay wrote:
<br>
<p><span class="quotelev1">&gt; Looks like there is some issues with MPI_Spawn() and OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; libfast in: /Volumes/MaxtorUFS1/geoframesvn/tools/petsc-dev/src/sys/objects
</span><br>
<span class="quotelev1">&gt; mpinit.c: In function 'PetscErrorCode PetscOpenMPSpawn(PetscMPIInt)':
</span><br>
<span class="quotelev1">&gt; mpinit.c:73: error: invalid conversion from 'void*' to 'int*'
</span><br>
<span class="quotelev1">&gt; mpinit.c:73: error:   initializing argument 8 of 'int MPI_Comm_spawn(char*, char**, int, ompi_info_t*, int, omp
</span><br>
<span class="quotelev1">&gt; i_communicator_t*, ompi_communicator_t**, int*)'
</span><br>
<span class="quotelev1">&gt; ar: mpinit.o: No such file or directory
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;&lt;&lt;&lt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ierr = MPI_Comm_spawn(programname,argv,nodesize-1,MPI_INFO_NULL,0,PETSC_COMM_SELF,&amp;children,MPI_ERRCODES_IGNORE);CHKERRQ(ierr);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like using MPI_ERRCODES_IGNORE in that function call is
</span><br>
<span class="quotelev1">&gt; correct. However OpenMPI declares it to '((void *) 0)' giving compile
</span><br>
<span class="quotelev1">&gt; error with c++. [MPICH declares it to '(int *)0' - which doesn't give
</span><br>
<span class="quotelev1">&gt; any compile erorrs].
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guss the following change should work - but I suspect this is an
</span><br>
<span class="quotelev1">&gt; openmpi bug.. I don't think its appropriate to make this change in
</span><br>
<span class="quotelev1">&gt; PETSc code..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ierr = MPI_Comm_spawn(programname,argv,nodesize-1,MPI_INFO_NULL,0,PETSC_COMM_SELF,&amp;children,(int*) MPI_ERRCODES_IGNORE);CHKERRQ(ierr);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Satish
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, 29 Dec 2006, Charles Williams wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure if this is a problem with PETSc or OpenMPI.  Things were building
</span><br>
<span class="quotelev2">&gt; &gt; OK on December 19, and this problem has crept in since then.  Thanks for any
</span><br>
<span class="quotelev2">&gt; &gt; ideas.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Charles
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Charles A. Williams
</span><br>
<span class="quotelev2">&gt; &gt; Dept. of Earth &amp; Environmental Sciences
</span><br>
<span class="quotelev2">&gt; &gt; Science Center, 2C01B
</span><br>
<span class="quotelev2">&gt; &gt; Rensselaer Polytechnic Institute
</span><br>
<span class="quotelev2">&gt; &gt; Troy, NY  12180
</span><br>
<span class="quotelev2">&gt; &gt; Phone:    (518) 276-3369
</span><br>
<span class="quotelev2">&gt; &gt; FAX:        (518) 276-2012
</span><br>
<span class="quotelev2">&gt; &gt; e-mail:    willic3_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>--===============0719315771==--
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1240.php">Brian W. Barrett: "Re: [OMPI devel] incorrect definition of MPI_ERRCODES_IGNORE?"</a>
<li><strong>Previous message:</strong> <a href="1238.php">Jeff Squyres: "Re: [OMPI devel] building a simple MPI cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1240.php">Brian W. Barrett: "Re: [OMPI devel] incorrect definition of MPI_ERRCODES_IGNORE?"</a>
<li><strong>Reply:</strong> <a href="1240.php">Brian W. Barrett: "Re: [OMPI devel] incorrect definition of MPI_ERRCODES_IGNORE?"</a>
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
