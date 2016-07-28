<?
$subject_val = "Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 14:47:45 2016" -->
<!-- isoreceived="20160122194745" -->
<!-- sent="Fri, 22 Jan 2016 12:47:44 -0700" -->
<!-- isosent="20160122194744" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16" -->
<!-- id="CAF1Cqj4TjZFotzz634oVAvmpZ8kT9zDDVzFy6zP2S74LNh=-+Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAFb48S_6xC=RLdLeYoot0YRC8vBAxdU3K+W3fx3w2A-iNbxkAA_at_mail.gmail.com" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-22 14:47:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28346.php">Matt Thompson: "Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
<li><strong>Previous message:</strong> <a href="28344.php">Matt Thompson: "[OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
<li><strong>In reply to:</strong> <a href="28344.php">Matt Thompson: "[OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28346.php">Matt Thompson: "Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
<li><strong>Reply:</strong> <a href="28346.php">Matt Thompson: "Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Matt,
<br>
<p>If you don't need oshmem, you could try again with --disable-oshmem added
<br>
to the config line
<br>
<p>Howard
<br>
<p><p>2016-01-22 12:15 GMT-07:00 Matt Thompson &lt;fortran_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to duplicate an issue I had with ESMF long ago (not sure if I
</span><br>
<span class="quotelev1">&gt; reported it here or at ESMF, but...). It had been a while, so I started
</span><br>
<span class="quotelev1">&gt; from scratch. I first built Open MPI 1.10.2 with Intel Fortran 16.0.0.109
</span><br>
<span class="quotelev1">&gt; and my system GCC (4.8.5 from RHEL7) with mostly defaults:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # ./configure --disable-wrapper-rpath CC=gcc CXX=g++ FC=ifort \
</span><br>
<span class="quotelev1">&gt; #    CFLAGS='-fPIC -m64' CXXFLAGS='-fPIC -m64' FCFLAGS='-fPIC -m64' \
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; --prefix=/ford1/share/gmao_SIteam/MPI/openmpi-1.10.2-ifort-16.0.0.109-shared
</span><br>
<span class="quotelev1">&gt; | &amp; tee configure.intel16.0.0.109-shared.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This built and checked just fine. Huzzah! And, indeed, it died in ESMF
</span><br>
<span class="quotelev1">&gt; during a link in an odd way (ESMF is looking at it).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a thought, I decided to see if building Open MPI statically might help
</span><br>
<span class="quotelev1">&gt; or not. So, I tried to build Open MPI with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # ./configure --disable-shared --enable-static --disable-wrapper-rpath
</span><br>
<span class="quotelev1">&gt; CC=gcc CXX=g++ FC=ifort \
</span><br>
<span class="quotelev1">&gt; #    CFLAGS='-fPIC -m64' CXXFLAGS='-fPIC -m64' FCFLAGS='-fPIC -m64' \
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; --prefix=/ford1/share/gmao_SIteam/MPI/openmpi-1.10.2-ifort-16.0.0.109-static
</span><br>
<span class="quotelev1">&gt; | &amp; tee configure.intel16.0.0.109-static.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just added --disable-shared --enable-static being lazy. But, when I do
</span><br>
<span class="quotelev1">&gt; this, I get this (when built with make V=1):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in tools/oshmem_info
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/ford1/share/gmao_SIteam/MPI/src/openmpi-1.10.2/oshmem/tools/oshmem_info'
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool  --tag=CC   --mode=link gcc -std=gnu99  -O3
</span><br>
<span class="quotelev1">&gt; -DNDEBUG -fPIC -m64 -finline-functions -fno-strict-aliasing -pthread   -o
</span><br>
<span class="quotelev1">&gt; oshmem_info oshmem_info.o param.o ../../../ompi/libmpi.la ../../../oshmem/
</span><br>
<span class="quotelev1">&gt; liboshmem.la ../../../orte/libopen-rte.la ../../../opal/libopen-pal.la
</span><br>
<span class="quotelev1">&gt; -lrt -lm -lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -std=gnu99 -O3 -DNDEBUG -fPIC -m64 -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread -o oshmem_info oshmem_info.o param.o
</span><br>
<span class="quotelev1">&gt;  ../../../ompi/.libs/libmpi.a ../../../oshmem/.libs/liboshmem.a
</span><br>
<span class="quotelev1">&gt; /ford1/share/gmao_SIteam/MPI/src/openmpi-1.10.2/ompi/.libs/libmpi.a
</span><br>
<span class="quotelev1">&gt; -libverbs
</span><br>
<span class="quotelev1">&gt; /ford1/share/gmao_SIteam/MPI/src/openmpi-1.10.2/orte/.libs/libopen-rte.a
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/libopen-rte.a
</span><br>
<span class="quotelev1">&gt; /ford1/share/gmao_SIteam/MPI/src/openmpi-1.10.2/opal/.libs/libopen-pal.a
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a -lnuma -ldl -lrt -lm -lutil -pthread
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: ../../../oshmem/.libs/liboshmem.a(memheap_base_static.o):
</span><br>
<span class="quotelev1">&gt; undefined reference to symbol '_end'
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: note: '_end' is defined in DSO /lib64/libnl-route-3.so.200 so
</span><br>
<span class="quotelev1">&gt; try adding it to the linker command line
</span><br>
<span class="quotelev1">&gt; /lib64/libnl-route-3.so.200: could not read symbols: Invalid operation
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [oshmem_info] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/ford1/share/gmao_SIteam/MPI/src/openmpi-1.10.2/oshmem/tools/oshmem_info'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/ford1/share/gmao_SIteam/MPI/src/openmpi-1.10.2/oshmem'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, what did I do wrong? Or is there something I need to add to the
</span><br>
<span class="quotelev1">&gt; configure line? I have built static versions of Open MPI in the past (say
</span><br>
<span class="quotelev1">&gt; 1.8.7 era with Intel Fortran 15), but this is a new OS (RHEL 7 instead of
</span><br>
<span class="quotelev1">&gt; 6) so I can see issues possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone seen this before? As I said, the &quot;usual&quot; build way is just fine.
</span><br>
<span class="quotelev1">&gt; Perhaps I need an extra RPM that isn't installed? I do have libnl-devel
</span><br>
<span class="quotelev1">&gt; installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Matt Thompson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Man Among Men
</span><br>
<span class="quotelev1">&gt; Fulcrum of History
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28344.php">http://www.open-mpi.org/community/lists/users/2016/01/28344.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28345/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28346.php">Matt Thompson: "Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
<li><strong>Previous message:</strong> <a href="28344.php">Matt Thompson: "[OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
<li><strong>In reply to:</strong> <a href="28344.php">Matt Thompson: "[OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28346.php">Matt Thompson: "Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
<li><strong>Reply:</strong> <a href="28346.php">Matt Thompson: "Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
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
