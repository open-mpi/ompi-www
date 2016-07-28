<?
$subject_val = "[OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 25 01:16:03 2016" -->
<!-- isoreceived="20160525051603" -->
<!-- sent="Tue, 24 May 2016 22:15:55 -0700" -->
<!-- isosent="20160525051555" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples" -->
<!-- id="CAAvDA14g8wDfFyxCGz5dp4O6wtqX12PmTZE3Zbnoz_Pfn_MD_Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-25 01:15:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19028.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<li><strong>Previous message:</strong> <a href="19026.php">Ralph Castain: "[OMPI devel] v1.10.3rc3 out for test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19028.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<li><strong>Reply:</strong> <a href="19028.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following error did *not* occur on the same system with the previous RC.
<br>
<p>I have configured 1.10.3rc3 on a normal x86-64/Linux system with:
<br>
&nbsp;&nbsp;&nbsp;--prefix=[...] --enable-debug --enable-static --disable-shared
<br>
<p>When I try to use the resulting build to compile the examples:
<br>
<p>$ make -k
<br>
mpicc -g    hello_c.c   -o hello_c
<br>
mpicc -g    ring_c.c   -o ring_c
<br>
mpicc -g    connectivity_c.c   -o connectivity_c
<br>
make[1]: Entering directory
<br>
`/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/BLD/examples'
<br>
make[2]: Entering directory
<br>
`/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/BLD/examples'
<br>
mpic++ -g    hello_cxx.cc   -o hello_cxx
<br>
mpic++ -g    ring_cxx.cc   -o ring_cxx
<br>
make[2]: Leaving directory
<br>
`/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/BLD/examples'
<br>
make[2]: Entering directory
<br>
`/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/BLD/examples'
<br>
mpifort -g hello_mpifh.f -o hello_mpifh
<br>
/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/INST/lib/libmpi.a(ompi_mpi_init.o):
<br>
In function `ompi_warn_fork':
<br>
ompi_mpi_init.c:(.text+0x282): undefined reference to `pthread_atfork'
<br>
/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/INST/lib/libopen-pal.a(lt1-malloc.o):
<br>
In function `ptmalloc_init':
<br>
malloc.c:(.text+0x5f3): undefined reference to `pthread_atfork'
<br>
collect2: error: ld returned 1 exit status
<br>
make[2]: *** [hello_mpifh] Error 1
<br>
mpifort -g ring_mpifh.f -o ring_mpifh
<br>
/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/INST/lib/libmpi.a(ompi_mpi_init.o):
<br>
In function `ompi_warn_fork':
<br>
ompi_mpi_init.c:(.text+0x282): undefined reference to `pthread_atfork'
<br>
/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/INST/lib/libopen-pal.a(lt1-malloc.o):
<br>
In function `ptmalloc_init':
<br>
malloc.c:(.text+0x5f3): undefined reference to `pthread_atfork'
<br>
collect2: error: ld returned 1 exit status
<br>
make[2]: *** [ring_mpifh] Error 1
<br>
make[2]: Leaving directory
<br>
`/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/BLD/examples'
<br>
make[1]: *** [mpi] Error 2
<br>
make[1]: Leaving directory
<br>
`/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/BLD/examples'
<br>
make: *** [all] Error 2
<br>
<p>Comparing the configure output from RC2 and RC3 is informative:
<br>
<p>&nbsp;checking if word-sized integers must be word-size aligned... no
<br>
&nbsp;checking if C compiler and POSIX threads work as is... no
<br>
&nbsp;checking if C++ compiler and POSIX threads work as is... no
<br>
-checking if Fortran compiler and POSIX threads work as is... no
<br>
+checking if Fortran compiler and POSIX threads work as is... yes
<br>
&nbsp;checking if C compiler and POSIX threads work with -Kthread... no
<br>
&nbsp;checking if C compiler and POSIX threads work with -kthread... no
<br>
&nbsp;checking if C compiler and POSIX threads work with -pthread... yes
<br>
&nbsp;checking if C++ compiler and POSIX threads work with -Kthread... no
<br>
&nbsp;checking if C++ compiler and POSIX threads work with -kthread... no
<br>
&nbsp;checking if C++ compiler and POSIX threads work with -pthread... yes
<br>
-checking if Fortran compiler and POSIX threads work with -Kthread... no
<br>
-checking if Fortran compiler and POSIX threads work with -kthread... no
<br>
-checking if Fortran compiler and POSIX threads work with -pthread... yes
<br>
&nbsp;checking for pthread_mutexattr_setpshared... yes
<br>
&nbsp;checking for pthread_condattr_setpshared... yes
<br>
&nbsp;checking for PTHREAD_MUTEX_ERRORCHECK_NP... yes
<br>
<p><p>So, while RC2's configure determined that Fortran+pthreads needed -pthread,
<br>
it appears that RC3 has instead determined that Fortran+pthreads &quot;work as
<br>
is&quot;.
<br>
<p>Here is the related portion of config.log from RC2:
<br>
<p>configure:63400: checking if Fortran compiler and POSIX threads work as is
<br>
configure:63481: gcc -std=gnu99 -g -finline-functions -fno-strict-aliasing
<br>
-I. -c conftest.c
<br>
conftest.c: In function 'pthreadtest_f':
<br>
conftest.c:27:5: warning: passing argument 1 of 'pthread_join' makes
<br>
integer from pointer without a cast
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pthread_join(&amp;newthread, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from conftest.c:3:0:
<br>
/usr/include/pthread.h:242:12: note: expected 'pthread_t' but argument is
<br>
of type 'pthread_t *'
<br>
&nbsp;extern int pthread_join (pthread_t __th, void **__thread_return);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
configure:63488: $? = 0
<br>
configure:63498: gfortran -g conftestf.f conftest.o -o conftest  -lm -lutil
<br>
conftest.o: In function `pthreadtest_f':
<br>
conftest.c:(.text+0xa8): undefined reference to `__pthread_register_cancel'
<br>
conftest.c:(.text+0xc3): undefined reference to `pthread_create'
<br>
conftest.c:(.text+0xd5): undefined reference to `pthread_join'
<br>
conftest.c:(.text+0xe4): undefined reference to
<br>
`__pthread_unregister_cancel'
<br>
collect2: error: ld returned 1 exit status
<br>
configure:63505: $? = 1
<br>
<p><p>And here it is for RC3:
<br>
<p>configure:63623: checking if Fortran compiler and POSIX threads work as is
<br>
configure:63704: gcc -std=gnu99 -g -finline-functions -fno-strict-aliasing
<br>
-I. -c conftest.c
<br>
conftest.c: In function 'pthreadtest_f':
<br>
conftest.c:27:5: warning: passing argument 1 of 'pthread_join' makes
<br>
integer from pointer without a cast
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pthread_join(&amp;newthread, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from conftest.c:3:0:
<br>
/usr/include/pthread.h:242:12: note: expected 'pthread_t' but argument is
<br>
of type 'pthread_t *'
<br>
&nbsp;extern int pthread_join (pthread_t __th, void **__thread_return);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
configure:63711: $? = 0
<br>
configure:63721: gfortran -g conftestf.f conftest.o -o conftest  -lrt -lm
<br>
-lutil
<br>
configure:63728: $? = 0
<br>
configure:63802: result: yes
<br>
<p><p>It appears that the only important difference here is that &quot;-lrt&quot; has now
<br>
appeared on the gfortran link line (which I assume pulls in libpthread).
<br>
This &quot;-lrt&quot; appears to be the result of the new probe for clock_gettime().
<br>
<p>I am not sure exactly what breaks down after that.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19027/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19028.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<li><strong>Previous message:</strong> <a href="19026.php">Ralph Castain: "[OMPI devel] v1.10.3rc3 out for test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19028.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<li><strong>Reply:</strong> <a href="19028.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
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
