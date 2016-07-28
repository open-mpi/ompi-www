<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 27 04:35:09 2007" -->
<!-- isoreceived="20070927083509" -->
<!-- sent="Thu, 27 Sep 2007 10:34:57 +0200" -->
<!-- isosent="20070927083457" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] incorrect configure code (1.2.4 and earlier)" -->
<!-- id="1190882097.6646.32.camel_at_skalman.hpc2n.umu.se" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-27 04:34:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4069.php">George Bosilca: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.2.4 released"</a>
<li><strong>Previous message:</strong> <a href="4067.php">Richard Graham: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4070.php">Tim Prins: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>Reply:</strong> <a href="4070.php">Tim Prins: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>There are a couple of bugs in the configure scripts regarding threads
<br>
checking.
<br>
<p>In ompi_check_pthread_pids.m4 the actual code for testing is wrong and
<br>
is also missing a CFLAG save/add-THREAD_CFLAGS/restore resulting in the
<br>
linking always failing for the -pthread test with gcc.
<br>
config.log looks like this.
<br>
=============
<br>
configure:50353: checking if threads have different pids (pthreads on
<br>
linux)
<br>
configure:50409: gcc -o conftest -DNDEBUG -march=k8 -O3 -msse -msse2
<br>
-maccumulate-outgoing-args -finline-functions -fno-strict-aliasing
<br>
-fexceptions  conftest.c -lnsl -lutil  -lm  &gt;&amp;5
<br>
conftest.c: In function 'checkpid':
<br>
conftest.c:327: warning: cast to pointer from integer of different size
<br>
/tmp/ccqUaAns.o: In function `main':conftest.c:(.text+0x1f): undefined
<br>
reference to `pthread_create'
<br>
:conftest.c:(.text+0x2e): undefined reference to `pthread_join'
<br>
collect2: ld returned 1 exit status
<br>
configure:50412: $? = 1
<br>
configure: program exited with status 1
<br>
=============
<br>
<p>Adding the CFLAGS save/add/restore make the code return the right answer
<br>
both on systems with the old pthreads implementation and NPTL based
<br>
systems. BUT, the code as it stands is technically incorrect.
<br>
The patch have a corrected version.
<br>
<p>There is also two bugs in ompi_config_pthreads.m4.
<br>
In OMPI_INTL_POSIX_THREADS_LIBS_CXX it is incorrectly setting
<br>
PTHREAD_LIBS to $pl, in the then-part of the second if-statement, which
<br>
at the time isn't set yet and forgetting to reset LIBS on failure in the
<br>
bottom most if-else case in the for pl loop.
<br>
<p>In OMPI_INTL_POSIX_THREADS_LIBS_FC it is resetting LIBS whether
<br>
succesfull or not resulting in -lpthread missing when checking for
<br>
PTHREAD_MUTEX_ERRORCHECK_NP at least for some versions of pgi, (6.1 and
<br>
older fails, 7.0 seems to always add -lpthread with pgf77 as linker)
<br>
<p>The output from configure in such a case looks like this:
<br>
checking if C compiler and POSIX threads work with -lpthread... yes
<br>
checking if C++ compiler and POSIX threads work with -lpthread... yes
<br>
checking if F77 compiler and POSIX threads work with -lpthread... yes
<br>
checking for PTHREAD_MUTEX_ERRORCHECK_NP... no
<br>
checking for PTHREAD_MUTEX_ERRORCHECK... no
<br>
(OS: Ubuntu Dapper, Compiler: pgi 6.1)
<br>
<p>There is also a problem in the F90 modules include flag search.
<br>
The test currently does:
<br>
$FC -c conftest-module.f90
<br>
$FC conftest.f90
<br>
<p>This doesn't work if one has set FCFLAGS=-g in the environment.
<br>
At least not with pgf90 since it needs the debug symbols from
<br>
conftest-module.o to be able to link.
<br>
You have to either add conftest-module.o to the compile line of conftest
<br>
or make it a three-stager, $FC -c conftest-module.f90; $FC -c
<br>
conftest.f90; $FC conftest.o conftest-module.o
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>


</pre>
<p>
<p><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4068/ompi_config_pthreads.patch__charset_us-ascii">ompi_config_pthreads.patch__charset_us-ascii</a>
</ul>
<!-- attachment="ompi_config_pthreads.patch__charset_us-ascii" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4068/ompi_check_pthread_pids.patch__charset_us-ascii">ompi_check_pthread_pids.patch__charset_us-ascii</a>
</ul>
<!-- attachment="ompi_check_pthread_pids.patch__charset_us-ascii" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4069.php">George Bosilca: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.2.4 released"</a>
<li><strong>Previous message:</strong> <a href="4067.php">Richard Graham: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4070.php">Tim Prins: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>Reply:</strong> <a href="4070.php">Tim Prins: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
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
