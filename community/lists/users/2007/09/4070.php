<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 27 09:09:25 2007" -->
<!-- isoreceived="20070927130925" -->
<!-- sent="Thu, 27 Sep 2007 09:09:26 -0400" -->
<!-- isosent="20070927130926" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] incorrect configure code (1.2.4 and earlier)" -->
<!-- id="46FBAB86.1010003_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1190882097.6646.32.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-27 09:09:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4071.php">흆e Sandgren: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>Previous message:</strong> <a href="4069.php">George Bosilca: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.2.4 released"</a>
<li><strong>In reply to:</strong> <a href="4068.php">&#197;ke Sandgren: "[OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4071.php">흆e Sandgren: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>Reply:</strong> <a href="4071.php">흆e Sandgren: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ake,
<br>
<p>Looking at the svn logs it looks like you reported the problems with 
<br>
these checks quite a while ago and we fixed them (in r13773 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/13773">https://svn.open-mpi.org/trac/ompi/changeset/13773</a>), but we never moved 
<br>
them to the 1.2 branch.
<br>
<p>I will ask for this to be moved to the 1.2 branch.
<br>
<p>However, the changes made for ompi_config_pthreads.m4 are different than 
<br>
you are suggesting now. Is this changeset good enough, or are there 
<br>
other changes you think should be made?
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p><p><p>&#197;ke Sandgren wrote:
<br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are a couple of bugs in the configure scripts regarding threads
</span><br>
<span class="quotelev1">&gt; checking.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In ompi_check_pthread_pids.m4 the actual code for testing is wrong and
</span><br>
<span class="quotelev1">&gt; is also missing a CFLAG save/add-THREAD_CFLAGS/restore resulting in the
</span><br>
<span class="quotelev1">&gt; linking always failing for the -pthread test with gcc.
</span><br>
<span class="quotelev1">&gt; config.log looks like this.
</span><br>
<span class="quotelev1">&gt; =============
</span><br>
<span class="quotelev1">&gt; configure:50353: checking if threads have different pids (pthreads on
</span><br>
<span class="quotelev1">&gt; linux)
</span><br>
<span class="quotelev1">&gt; configure:50409: gcc -o conftest -DNDEBUG -march=k8 -O3 -msse -msse2
</span><br>
<span class="quotelev1">&gt; -maccumulate-outgoing-args -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt; -fexceptions  conftest.c -lnsl -lutil  -lm  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c: In function 'checkpid':
</span><br>
<span class="quotelev1">&gt; conftest.c:327: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; /tmp/ccqUaAns.o: In function `main':conftest.c:(.text+0x1f): undefined
</span><br>
<span class="quotelev1">&gt; reference to `pthread_create'
</span><br>
<span class="quotelev1">&gt; :conftest.c:(.text+0x2e): undefined reference to `pthread_join'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; configure:50412: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: program exited with status 1
</span><br>
<span class="quotelev1">&gt; =============
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adding the CFLAGS save/add/restore make the code return the right answer
</span><br>
<span class="quotelev1">&gt; both on systems with the old pthreads implementation and NPTL based
</span><br>
<span class="quotelev1">&gt; systems. BUT, the code as it stands is technically incorrect.
</span><br>
<span class="quotelev1">&gt; The patch have a corrected version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is also two bugs in ompi_config_pthreads.m4.
</span><br>
<span class="quotelev1">&gt; In OMPI_INTL_POSIX_THREADS_LIBS_CXX it is incorrectly setting
</span><br>
<span class="quotelev1">&gt; PTHREAD_LIBS to $pl, in the then-part of the second if-statement, which
</span><br>
<span class="quotelev1">&gt; at the time isn't set yet and forgetting to reset LIBS on failure in the
</span><br>
<span class="quotelev1">&gt; bottom most if-else case in the for pl loop.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In OMPI_INTL_POSIX_THREADS_LIBS_FC it is resetting LIBS whether
</span><br>
<span class="quotelev1">&gt; succesfull or not resulting in -lpthread missing when checking for
</span><br>
<span class="quotelev1">&gt; PTHREAD_MUTEX_ERRORCHECK_NP at least for some versions of pgi, (6.1 and
</span><br>
<span class="quotelev1">&gt; older fails, 7.0 seems to always add -lpthread with pgf77 as linker)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output from configure in such a case looks like this:
</span><br>
<span class="quotelev1">&gt; checking if C compiler and POSIX threads work with -lpthread... yes
</span><br>
<span class="quotelev1">&gt; checking if C++ compiler and POSIX threads work with -lpthread... yes
</span><br>
<span class="quotelev1">&gt; checking if F77 compiler and POSIX threads work with -lpthread... yes
</span><br>
<span class="quotelev1">&gt; checking for PTHREAD_MUTEX_ERRORCHECK_NP... no
</span><br>
<span class="quotelev1">&gt; checking for PTHREAD_MUTEX_ERRORCHECK... no
</span><br>
<span class="quotelev1">&gt; (OS: Ubuntu Dapper, Compiler: pgi 6.1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is also a problem in the F90 modules include flag search.
</span><br>
<span class="quotelev1">&gt; The test currently does:
</span><br>
<span class="quotelev1">&gt; $FC -c conftest-module.f90
</span><br>
<span class="quotelev1">&gt; $FC conftest.f90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This doesn't work if one has set FCFLAGS=-g in the environment.
</span><br>
<span class="quotelev1">&gt; At least not with pgf90 since it needs the debug symbols from
</span><br>
<span class="quotelev1">&gt; conftest-module.o to be able to link.
</span><br>
<span class="quotelev1">&gt; You have to either add conftest-module.o to the compile line of conftest
</span><br>
<span class="quotelev1">&gt; or make it a three-stager, $FC -c conftest-module.f90; $FC -c
</span><br>
<span class="quotelev1">&gt; conftest.f90; $FC conftest.o conftest-module.o
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="4071.php">흆e Sandgren: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>Previous message:</strong> <a href="4069.php">George Bosilca: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.2.4 released"</a>
<li><strong>In reply to:</strong> <a href="4068.php">&#197;ke Sandgren: "[OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4071.php">흆e Sandgren: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>Reply:</strong> <a href="4071.php">흆e Sandgren: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
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
