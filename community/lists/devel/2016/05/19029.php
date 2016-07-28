<?
$subject_val = "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 25 03:26:05 2016" -->
<!-- isoreceived="20160525072605" -->
<!-- sent="Wed, 25 May 2016 00:25:58 -0700" -->
<!-- isosent="20160525072558" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples" -->
<!-- id="CAAvDA17aYcgrO8bHKtiVP2J26wKux95MUSnAQWHv3SS-fYutTw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="331aa9c5-8d12-815f-94a8-bd3bdc55422b_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-25 03:25:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19030.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<li><strong>Previous message:</strong> <a href="19028.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<li><strong>In reply to:</strong> <a href="19028.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19030.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<li><strong>Reply:</strong> <a href="19030.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Gilles.
<br>
<p>I will retest and follow up in the PR.
<br>
<p>-Paul
<br>
<p>On Tue, May 24, 2016 at 11:56 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this works fine on RHEL7 but not on RHEL6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is the relevant configure output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt; checking for library containing clock_gettime... -lrt
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; checking for library containing clock_gettime... none required
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the reason is clock_gettime was moved from librt into libc between RHEL6
</span><br>
<span class="quotelev1">&gt; and RHEL7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i made a proof of concept at
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi-release/pull/1191">https://github.com/open-mpi/ompi-release/pull/1191</a> i am still testing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (it also fixes a typo in pthread_join invokation)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/25/2016 2:15 PM, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following error did *not* occur on the same system with the previous
</span><br>
<span class="quotelev1">&gt; RC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have configured 1.10.3rc3 on a normal x86-64/Linux system with:
</span><br>
<span class="quotelev1">&gt;    --prefix=[...] --enable-debug --enable-static --disable-shared
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I try to use the resulting build to compile the examples:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ make -k
</span><br>
<span class="quotelev1">&gt; mpicc -g    hello_c.c   -o hello_c
</span><br>
<span class="quotelev1">&gt; mpicc -g    ring_c.c   -o ring_c
</span><br>
<span class="quotelev1">&gt; mpicc -g    connectivity_c.c   -o connectivity_c
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/BLD/examples'
</span><br>
<span class="quotelev1">&gt; mpic++ -g    hello_cxx.cc   -o hello_cxx
</span><br>
<span class="quotelev1">&gt; mpic++ -g    ring_cxx.cc   -o ring_cxx
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/BLD/examples'
</span><br>
<span class="quotelev1">&gt; mpifort -g hello_mpifh.f -o hello_mpifh
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/INST/lib/libmpi.a(ompi_mpi_init.o):
</span><br>
<span class="quotelev1">&gt; In function `ompi_warn_fork':
</span><br>
<span class="quotelev1">&gt; ompi_mpi_init.c:(.text+0x282): undefined reference to `pthread_atfork'
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/INST/lib/libopen-pal.a(lt1-malloc.o):
</span><br>
<span class="quotelev1">&gt; In function `ptmalloc_init':
</span><br>
<span class="quotelev1">&gt; malloc.c:(.text+0x5f3): undefined reference to `pthread_atfork'
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [hello_mpifh] Error 1
</span><br>
<span class="quotelev1">&gt; mpifort -g ring_mpifh.f -o ring_mpifh
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/INST/lib/libmpi.a(ompi_mpi_init.o):
</span><br>
<span class="quotelev1">&gt; In function `ompi_warn_fork':
</span><br>
<span class="quotelev1">&gt; ompi_mpi_init.c:(.text+0x282): undefined reference to `pthread_atfork'
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/INST/lib/libopen-pal.a(lt1-malloc.o):
</span><br>
<span class="quotelev1">&gt; In function `ptmalloc_init':
</span><br>
<span class="quotelev1">&gt; malloc.c:(.text+0x5f3): undefined reference to `pthread_atfork'
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [ring_mpifh] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [mpi] Error 2
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comparing the configure output from RC2 and RC3 is informative:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  checking if word-sized integers must be word-size aligned... no
</span><br>
<span class="quotelev1">&gt;  checking if C compiler and POSIX threads work as is... no
</span><br>
<span class="quotelev1">&gt;  checking if C++ compiler and POSIX threads work as is... no
</span><br>
<span class="quotelev1">&gt; -checking if Fortran compiler and POSIX threads work as is... no
</span><br>
<span class="quotelev1">&gt; +checking if Fortran compiler and POSIX threads work as is... yes
</span><br>
<span class="quotelev1">&gt;  checking if C compiler and POSIX threads work with -Kthread... no
</span><br>
<span class="quotelev1">&gt;  checking if C compiler and POSIX threads work with -kthread... no
</span><br>
<span class="quotelev1">&gt;  checking if C compiler and POSIX threads work with -pthread... yes
</span><br>
<span class="quotelev1">&gt;  checking if C++ compiler and POSIX threads work with -Kthread... no
</span><br>
<span class="quotelev1">&gt;  checking if C++ compiler and POSIX threads work with -kthread... no
</span><br>
<span class="quotelev1">&gt;  checking if C++ compiler and POSIX threads work with -pthread... yes
</span><br>
<span class="quotelev1">&gt; -checking if Fortran compiler and POSIX threads work with -Kthread... no
</span><br>
<span class="quotelev1">&gt; -checking if Fortran compiler and POSIX threads work with -kthread... no
</span><br>
<span class="quotelev1">&gt; -checking if Fortran compiler and POSIX threads work with -pthread... yes
</span><br>
<span class="quotelev1">&gt;  checking for pthread_mutexattr_setpshared... yes
</span><br>
<span class="quotelev1">&gt;  checking for pthread_condattr_setpshared... yes
</span><br>
<span class="quotelev1">&gt;  checking for PTHREAD_MUTEX_ERRORCHECK_NP... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, while RC2's configure determined that Fortran+pthreads needed
</span><br>
<span class="quotelev1">&gt; -pthread, it appears that RC3 has instead determined that Fortran+pthreads
</span><br>
<span class="quotelev1">&gt; &quot;work as is&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the related portion of config.log from RC2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:63400: checking if Fortran compiler and POSIX threads work as is
</span><br>
<span class="quotelev1">&gt; configure:63481: gcc -std=gnu99 -g -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt; -I. -c conftest.c
</span><br>
<span class="quotelev1">&gt; conftest.c: In function 'pthreadtest_f':
</span><br>
<span class="quotelev1">&gt; conftest.c:27:5: warning: passing argument 1 of 'pthread_join' makes
</span><br>
<span class="quotelev1">&gt; integer from pointer without a cast
</span><br>
<span class="quotelev1">&gt;      pthread_join(&amp;newthread, 0);
</span><br>
<span class="quotelev1">&gt;      ^
</span><br>
<span class="quotelev1">&gt; In file included from conftest.c:3:0:
</span><br>
<span class="quotelev1">&gt; /usr/include/pthread.h:242:12: note: expected 'pthread_t' but argument is
</span><br>
<span class="quotelev1">&gt; of type 'pthread_t *'
</span><br>
<span class="quotelev1">&gt;  extern int pthread_join (pthread_t __th, void **__thread_return);
</span><br>
<span class="quotelev1">&gt;             ^
</span><br>
<span class="quotelev1">&gt; configure:63488: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:63498: gfortran -g conftestf.f conftest.o -o conftest  -lm -lutil
</span><br>
<span class="quotelev1">&gt; conftest.o: In function `pthreadtest_f':
</span><br>
<span class="quotelev1">&gt; conftest.c:(.text+0xa8): undefined reference to `__pthread_register_cancel'
</span><br>
<span class="quotelev1">&gt; conftest.c:(.text+0xc3): undefined reference to `pthread_create'
</span><br>
<span class="quotelev1">&gt; conftest.c:(.text+0xd5): undefined reference to `pthread_join'
</span><br>
<span class="quotelev1">&gt; conftest.c:(.text+0xe4): undefined reference to
</span><br>
<span class="quotelev1">&gt; `__pthread_unregister_cancel'
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; configure:63505: $? = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And here it is for RC3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:63623: checking if Fortran compiler and POSIX threads work as is
</span><br>
<span class="quotelev1">&gt; configure:63704: gcc -std=gnu99 -g -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt; -I. -c conftest.c
</span><br>
<span class="quotelev1">&gt; conftest.c: In function 'pthreadtest_f':
</span><br>
<span class="quotelev1">&gt; conftest.c:27:5: warning: passing argument 1 of 'pthread_join' makes
</span><br>
<span class="quotelev1">&gt; integer from pointer without a cast
</span><br>
<span class="quotelev1">&gt;      pthread_join(&amp;newthread, 0);
</span><br>
<span class="quotelev1">&gt;      ^
</span><br>
<span class="quotelev1">&gt; In file included from conftest.c:3:0:
</span><br>
<span class="quotelev1">&gt; /usr/include/pthread.h:242:12: note: expected 'pthread_t' but argument is
</span><br>
<span class="quotelev1">&gt; of type 'pthread_t *'
</span><br>
<span class="quotelev1">&gt;  extern int pthread_join (pthread_t __th, void **__thread_return);
</span><br>
<span class="quotelev1">&gt;             ^
</span><br>
<span class="quotelev1">&gt; configure:63711: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:63721: gfortran -g conftestf.f conftest.o -o conftest  -lrt -lm
</span><br>
<span class="quotelev1">&gt; -lutil
</span><br>
<span class="quotelev1">&gt; configure:63728: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:63802: result: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears that the only important difference here is that &quot;-lrt&quot; has now
</span><br>
<span class="quotelev1">&gt; appeared on the gfortran link line (which I assume pulls in libpthread).
</span><br>
<span class="quotelev1">&gt; This &quot;-lrt&quot; appears to be the result of the new probe for clock_gettime().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure exactly what breaks down after that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                           &lt;PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19027.php">http://www.open-mpi.org/community/lists/devel/2016/05/19027.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19028.php">http://www.open-mpi.org/community/lists/devel/2016/05/19028.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19029/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19030.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<li><strong>Previous message:</strong> <a href="19028.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<li><strong>In reply to:</strong> <a href="19028.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19030.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<li><strong>Reply:</strong> <a href="19030.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
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
