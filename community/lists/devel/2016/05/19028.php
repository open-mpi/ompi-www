<?
$subject_val = "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 25 02:56:04 2016" -->
<!-- isoreceived="20160525065604" -->
<!-- sent="Wed, 25 May 2016 15:56:00 +0900" -->
<!-- isosent="20160525065600" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples" -->
<!-- id="331aa9c5-8d12-815f-94a8-bd3bdc55422b_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA14g8wDfFyxCGz5dp4O6wtqX12PmTZE3Zbnoz_Pfn_MD_Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-25 02:56:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19029.php">Paul Hargrove: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<li><strong>Previous message:</strong> <a href="19027.php">Paul Hargrove: "[OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<li><strong>In reply to:</strong> <a href="19027.php">Paul Hargrove: "[OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19029.php">Paul Hargrove: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<li><strong>Reply:</strong> <a href="19029.php">Paul Hargrove: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p><p>this works fine on RHEL7 but not on RHEL6
<br>
<p>here is the relevant configure output
<br>
<p>&lt; checking for library containing clock_gettime... -lrt
<br>
<pre>
---
 &gt; checking for library containing clock_gettime... none required
the reason is clock_gettime was moved from librt into libc between RHEL6 
and RHEL7
i made a proof of concept at 
<a href="https://github.com/open-mpi/ompi-release/pull/1191">https://github.com/open-mpi/ompi-release/pull/1191</a> i am still testing
(it also fixes a typo in pthread_join invokation)
Cheers,
Gilles
On 5/25/2016 2:15 PM, Paul Hargrove wrote:
&gt; The following error did *not* occur on the same system with the 
&gt; previous RC.
&gt;
&gt; I have configured 1.10.3rc3 on a normal x86-64/Linux system with:
&gt;    --prefix=[...] --enable-debug --enable-static --disable-shared
&gt;
&gt; When I try to use the resulting build to compile the examples:
&gt;
&gt; $ make -k
&gt; mpicc -g    hello_c.c -o hello_c
&gt; mpicc -g    ring_c.c -o ring_c
&gt; mpicc -g  connectivity_c.c   -o connectivity_c
&gt; make[1]: Entering directory 
&gt; `/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/BLD/examples'
&gt; make[2]: Entering directory 
&gt; `/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/BLD/examples'
&gt; mpic++ -g  hello_cxx.cc   -o hello_cxx
&gt; mpic++ -g  ring_cxx.cc   -o ring_cxx
&gt; make[2]: Leaving directory 
&gt; `/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/BLD/examples'
&gt; make[2]: Entering directory 
&gt; `/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/BLD/examples'
&gt; mpifort -g hello_mpifh.f -o hello_mpifh
&gt; /scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/INST/lib/libmpi.a(ompi_mpi_init.o): 
&gt; In function `ompi_warn_fork':
&gt; ompi_mpi_init.c:(.text+0x282): undefined reference to `pthread_atfork'
&gt; /scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/INST/lib/libopen-pal.a(lt1-malloc.o): 
&gt; In function `ptmalloc_init':
&gt; malloc.c:(.text+0x5f3): undefined reference to `pthread_atfork'
&gt; collect2: error: ld returned 1 exit status
&gt; make[2]: *** [hello_mpifh] Error 1
&gt; mpifort -g ring_mpifh.f -o ring_mpifh
&gt; /scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/INST/lib/libmpi.a(ompi_mpi_init.o): 
&gt; In function `ompi_warn_fork':
&gt; ompi_mpi_init.c:(.text+0x282): undefined reference to `pthread_atfork'
&gt; /scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/INST/lib/libopen-pal.a(lt1-malloc.o): 
&gt; In function `ptmalloc_init':
&gt; malloc.c:(.text+0x5f3): undefined reference to `pthread_atfork'
&gt; collect2: error: ld returned 1 exit status
&gt; make[2]: *** [ring_mpifh] Error 1
&gt; make[2]: Leaving directory 
&gt; `/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/BLD/examples'
&gt; make[1]: *** [mpi] Error 2
&gt; make[1]: Leaving directory 
&gt; `/scratch/phargrov/OMPI/openmpi-1.10.3rc3-linux-x86_64-static/BLD/examples'
&gt; make: *** [all] Error 2
&gt;
&gt; Comparing the configure output from RC2 and RC3 is informative:
&gt;
&gt;      checking if word-sized integers must be word-size aligned... no
&gt;      checking if C compiler and POSIX threads work as is... no
&gt;      checking if C++ compiler and POSIX threads work as is... no
&gt;     -checking if Fortran compiler and POSIX threads work as is... no
&gt;     +checking if Fortran compiler and POSIX threads work as is... yes
&gt;      checking if C compiler and POSIX threads work with -Kthread... no
&gt;      checking if C compiler and POSIX threads work with -kthread... no
&gt;      checking if C compiler and POSIX threads work with -pthread... yes
&gt;      checking if C++ compiler and POSIX threads work with -Kthread... no
&gt;      checking if C++ compiler and POSIX threads work with -kthread... no
&gt;      checking if C++ compiler and POSIX threads work with -pthread... yes
&gt;     -checking if Fortran compiler and POSIX threads work with
&gt;     -Kthread... no
&gt;     -checking if Fortran compiler and POSIX threads work with
&gt;     -kthread... no
&gt;     -checking if Fortran compiler and POSIX threads work with
&gt;     -pthread... yes
&gt;      checking for pthread_mutexattr_setpshared... yes
&gt;      checking for pthread_condattr_setpshared... yes
&gt;      checking for PTHREAD_MUTEX_ERRORCHECK_NP... yes
&gt;
&gt;
&gt; So, while RC2's configure determined that Fortran+pthreads needed 
&gt; -pthread, it appears that RC3 has instead determined that 
&gt; Fortran+pthreads &quot;work as is&quot;.
&gt;
&gt; Here is the related portion of config.log from RC2:
&gt;
&gt;     configure:63400: checking if Fortran compiler and POSIX threads
&gt;     work as is
&gt;     configure:63481: gcc -std=gnu99 -g -finline-functions
&gt;     -fno-strict-aliasing -I. -c conftest.c
&gt;     conftest.c: In function 'pthreadtest_f':
&gt;     conftest.c:27:5: warning: passing argument 1 of 'pthread_join'
&gt;     makes integer from pointer without a cast
&gt;      pthread_join(&amp;newthread, 0);
&gt;          ^
&gt;     In file included from conftest.c:3:0:
&gt;     /usr/include/pthread.h:242:12: note: expected 'pthread_t' but
&gt;     argument is of type 'pthread_t *'
&gt;      extern int pthread_join (pthread_t __th, void **__thread_return);
&gt;                 ^
&gt;     configure:63488: $? = 0
&gt;     configure:63498: gfortran -g conftestf.f conftest.o -o conftest
&gt;      -lm -lutil
&gt;     conftest.o: In function `pthreadtest_f':
&gt;     conftest.c:(.text+0xa8): undefined reference to
&gt;     `__pthread_register_cancel'
&gt;     conftest.c:(.text+0xc3): undefined reference to `pthread_create'
&gt;     conftest.c:(.text+0xd5): undefined reference to `pthread_join'
&gt;     conftest.c:(.text+0xe4): undefined reference to
&gt;     `__pthread_unregister_cancel'
&gt;     collect2: error: ld returned 1 exit status
&gt;     configure:63505: $? = 1
&gt;
&gt;
&gt; And here it is for RC3:
&gt;
&gt;     configure:63623: checking if Fortran compiler and POSIX threads
&gt;     work as is
&gt;     configure:63704: gcc -std=gnu99 -g -finline-functions
&gt;     -fno-strict-aliasing -I. -c conftest.c
&gt;     conftest.c: In function 'pthreadtest_f':
&gt;     conftest.c:27:5: warning: passing argument 1 of 'pthread_join'
&gt;     makes integer from pointer without a cast
&gt;      pthread_join(&amp;newthread, 0);
&gt;          ^
&gt;     In file included from conftest.c:3:0:
&gt;     /usr/include/pthread.h:242:12: note: expected 'pthread_t' but
&gt;     argument is of type 'pthread_t *'
&gt;      extern int pthread_join (pthread_t __th, void **__thread_return);
&gt;                 ^
&gt;     configure:63711: $? = 0
&gt;     configure:63721: gfortran -g conftestf.f conftest.o -o conftest
&gt;      -lrt -lm -lutil
&gt;     configure:63728: $? = 0
&gt;     configure:63802: result: yes
&gt;
&gt;
&gt; It appears that the only important difference here is that &quot;-lrt&quot; has 
&gt; now appeared on the gfortran link line (which I assume pulls in 
&gt; libpthread).
&gt; This &quot;-lrt&quot; appears to be the result of the new probe for clock_gettime().
&gt;
&gt; I am not sure exactly what breaks down after that.
&gt;
&gt; -Paul
&gt;
&gt; -- 
&gt; Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
&gt; Computer Languages &amp; Systems Software (CLaSS) Group
&gt; Computer Science Department               Tel: +1-510-495-2352
&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19027.php">http://www.open-mpi.org/community/lists/devel/2016/05/19027.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19028/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19029.php">Paul Hargrove: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<li><strong>Previous message:</strong> <a href="19027.php">Paul Hargrove: "[OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<li><strong>In reply to:</strong> <a href="19027.php">Paul Hargrove: "[OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19029.php">Paul Hargrove: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
<li><strong>Reply:</strong> <a href="19029.php">Paul Hargrove: "Re: [OMPI devel] [1.10.3rc3] Linux static link failure of fortran examples"</a>
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
