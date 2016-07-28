<?
$subject_val = "Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 15:38:06 2016" -->
<!-- isoreceived="20160122203806" -->
<!-- sent="Fri, 22 Jan 2016 15:37:35 -0500" -->
<!-- isosent="20160122203735" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16" -->
<!-- id="CAFb48S9xydeXmdWh8cFwUkGyu2a34F+D7rUbFRtCYCb3U7CGQg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAF1Cqj4TjZFotzz634oVAvmpZ8kT9zDDVzFy6zP2S74LNh=-+Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16<br>
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-22 15:37:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28347.php">Gilles Gouaillardet: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Previous message:</strong> <a href="28345.php">Howard Pritchard: "Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
<li><strong>In reply to:</strong> <a href="28345.php">Howard Pritchard: "Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howard,
<br>
<p>Welp. That worked! I'm assuming oshmem = OpenSHMEM, right? If so, yeah, for
<br>
now, not important on my wee workstation. (If it isn't, is it something I
<br>
should work on getting to work?)
<br>
<p>Matt
<br>
<p>On Fri, Jan 22, 2016 at 2:47 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; HI Matt,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you don't need oshmem, you could try again with --disable-oshmem added
</span><br>
<span class="quotelev1">&gt; to the config line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-01-22 12:15 GMT-07:00 Matt Thompson &lt;fortran_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to duplicate an issue I had with ESMF long ago (not sure if I
</span><br>
<span class="quotelev2">&gt;&gt; reported it here or at ESMF, but...). It had been a while, so I started
</span><br>
<span class="quotelev2">&gt;&gt; from scratch. I first built Open MPI 1.10.2 with Intel Fortran 16.0.0.109
</span><br>
<span class="quotelev2">&gt;&gt; and my system GCC (4.8.5 from RHEL7) with mostly defaults:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # ./configure --disable-wrapper-rpath CC=gcc CXX=g++ FC=ifort \
</span><br>
<span class="quotelev2">&gt;&gt; #    CFLAGS='-fPIC -m64' CXXFLAGS='-fPIC -m64' FCFLAGS='-fPIC -m64' \
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/ford1/share/gmao_SIteam/MPI/openmpi-1.10.2-ifort-16.0.0.109-shared
</span><br>
<span class="quotelev2">&gt;&gt; | &amp; tee configure.intel16.0.0.109-shared.log
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This built and checked just fine. Huzzah! And, indeed, it died in ESMF
</span><br>
<span class="quotelev2">&gt;&gt; during a link in an odd way (ESMF is looking at it).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As a thought, I decided to see if building Open MPI statically might help
</span><br>
<span class="quotelev2">&gt;&gt; or not. So, I tried to build Open MPI with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # ./configure --disable-shared --enable-static --disable-wrapper-rpath
</span><br>
<span class="quotelev2">&gt;&gt; CC=gcc CXX=g++ FC=ifort \
</span><br>
<span class="quotelev2">&gt;&gt; #    CFLAGS='-fPIC -m64' CXXFLAGS='-fPIC -m64' FCFLAGS='-fPIC -m64' \
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/ford1/share/gmao_SIteam/MPI/openmpi-1.10.2-ifort-16.0.0.109-static
</span><br>
<span class="quotelev2">&gt;&gt; | &amp; tee configure.intel16.0.0.109-static.log
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just added --disable-shared --enable-static being lazy. But, when I do
</span><br>
<span class="quotelev2">&gt;&gt; this, I get this (when built with make V=1):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in tools/oshmem_info
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/ford1/share/gmao_SIteam/MPI/src/openmpi-1.10.2/oshmem/tools/oshmem_info'
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../libtool  --tag=CC   --mode=link gcc -std=gnu99  -O3
</span><br>
<span class="quotelev2">&gt;&gt; -DNDEBUG -fPIC -m64 -finline-functions -fno-strict-aliasing -pthread   -o
</span><br>
<span class="quotelev2">&gt;&gt; oshmem_info oshmem_info.o param.o ../../../ompi/libmpi.la
</span><br>
<span class="quotelev2">&gt;&gt; ../../../oshmem/liboshmem.la ../../../orte/libopen-rte.la ../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; libopen-pal.la -lrt -lm -lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -std=gnu99 -O3 -DNDEBUG -fPIC -m64 -finline-functions
</span><br>
<span class="quotelev2">&gt;&gt; -fno-strict-aliasing -pthread -o oshmem_info oshmem_info.o param.o
</span><br>
<span class="quotelev2">&gt;&gt;  ../../../ompi/.libs/libmpi.a ../../../oshmem/.libs/liboshmem.a
</span><br>
<span class="quotelev2">&gt;&gt; /ford1/share/gmao_SIteam/MPI/src/openmpi-1.10.2/ompi/.libs/libmpi.a
</span><br>
<span class="quotelev2">&gt;&gt; -libverbs
</span><br>
<span class="quotelev2">&gt;&gt; /ford1/share/gmao_SIteam/MPI/src/openmpi-1.10.2/orte/.libs/libopen-rte.a
</span><br>
<span class="quotelev2">&gt;&gt; ../../../orte/.libs/libopen-rte.a
</span><br>
<span class="quotelev2">&gt;&gt; /ford1/share/gmao_SIteam/MPI/src/openmpi-1.10.2/opal/.libs/libopen-pal.a
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.a -lnuma -ldl -lrt -lm -lutil -pthread
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: ../../../oshmem/.libs/liboshmem.a(memheap_base_static.o):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to symbol '_end'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: note: '_end' is defined in DSO /lib64/libnl-route-3.so.200
</span><br>
<span class="quotelev2">&gt;&gt; so try adding it to the linker command line
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libnl-route-3.so.200: could not read symbols: Invalid operation
</span><br>
<span class="quotelev2">&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [oshmem_info] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/ford1/share/gmao_SIteam/MPI/src/openmpi-1.10.2/oshmem/tools/oshmem_info'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/ford1/share/gmao_SIteam/MPI/src/openmpi-1.10.2/oshmem'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, what did I do wrong? Or is there something I need to add to the
</span><br>
<span class="quotelev2">&gt;&gt; configure line? I have built static versions of Open MPI in the past (say
</span><br>
<span class="quotelev2">&gt;&gt; 1.8.7 era with Intel Fortran 15), but this is a new OS (RHEL 7 instead of
</span><br>
<span class="quotelev2">&gt;&gt; 6) so I can see issues possible.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyone seen this before? As I said, the &quot;usual&quot; build way is just fine.
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps I need an extra RPM that isn't installed? I do have libnl-devel
</span><br>
<span class="quotelev2">&gt;&gt; installed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Matt Thompson
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Man Among Men
</span><br>
<span class="quotelev2">&gt;&gt; Fulcrum of History
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28344.php">http://www.open-mpi.org/community/lists/users/2016/01/28344.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28345.php">http://www.open-mpi.org/community/lists/users/2016/01/28345.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Matt Thompson
Man Among Men
Fulcrum of History
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28346/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28347.php">Gilles Gouaillardet: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Previous message:</strong> <a href="28345.php">Howard Pritchard: "Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
<li><strong>In reply to:</strong> <a href="28345.php">Howard Pritchard: "Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
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
