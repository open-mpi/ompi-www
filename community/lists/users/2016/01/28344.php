<?
$subject_val = "[OMPI users] Issues Building Open MPI static with Intel Fortran 16";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 14:16:17 2016" -->
<!-- isoreceived="20160122191617" -->
<!-- sent="Fri, 22 Jan 2016 14:15:46 -0500" -->
<!-- isosent="20160122191546" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="[OMPI users] Issues Building Open MPI static with Intel Fortran 16" -->
<!-- id="CAFb48S_6xC=RLdLeYoot0YRC8vBAxdU3K+W3fx3w2A-iNbxkAA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Issues Building Open MPI static with Intel Fortran 16<br>
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-22 14:15:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28345.php">Howard Pritchard: "Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
<li><strong>Previous message:</strong> <a href="28343.php">Kuhl, Spencer J: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28345.php">Howard Pritchard: "Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
<li><strong>Reply:</strong> <a href="28345.php">Howard Pritchard: "Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>I'm trying to duplicate an issue I had with ESMF long ago (not sure if I
<br>
reported it here or at ESMF, but...). It had been a while, so I started
<br>
from scratch. I first built Open MPI 1.10.2 with Intel Fortran 16.0.0.109
<br>
and my system GCC (4.8.5 from RHEL7) with mostly defaults:
<br>
<p># ./configure --disable-wrapper-rpath CC=gcc CXX=g++ FC=ifort \
<br>
#    CFLAGS='-fPIC -m64' CXXFLAGS='-fPIC -m64' FCFLAGS='-fPIC -m64' \
<br>
#
<br>
--prefix=/ford1/share/gmao_SIteam/MPI/openmpi-1.10.2-ifort-16.0.0.109-shared
<br>
| &amp; tee configure.intel16.0.0.109-shared.log
<br>
<p>This built and checked just fine. Huzzah! And, indeed, it died in ESMF
<br>
during a link in an odd way (ESMF is looking at it).
<br>
<p>As a thought, I decided to see if building Open MPI statically might help
<br>
or not. So, I tried to build Open MPI with:
<br>
<p># ./configure --disable-shared --enable-static --disable-wrapper-rpath
<br>
CC=gcc CXX=g++ FC=ifort \
<br>
#    CFLAGS='-fPIC -m64' CXXFLAGS='-fPIC -m64' FCFLAGS='-fPIC -m64' \
<br>
#
<br>
--prefix=/ford1/share/gmao_SIteam/MPI/openmpi-1.10.2-ifort-16.0.0.109-static
<br>
| &amp; tee configure.intel16.0.0.109-static.log
<br>
<p>I just added --disable-shared --enable-static being lazy. But, when I do
<br>
this, I get this (when built with make V=1):
<br>
<p>Making all in tools/oshmem_info
<br>
make[2]: Entering directory
<br>
`/ford1/share/gmao_SIteam/MPI/src/openmpi-1.10.2/oshmem/tools/oshmem_info'
<br>
/bin/sh ../../../libtool  --tag=CC   --mode=link gcc -std=gnu99  -O3
<br>
-DNDEBUG -fPIC -m64 -finline-functions -fno-strict-aliasing -pthread   -o
<br>
oshmem_info oshmem_info.o param.o ../../../ompi/libmpi.la ../../../oshmem/
<br>
liboshmem.la ../../../orte/libopen-rte.la ../../../opal/libopen-pal.la -lrt
<br>
-lm -lutil
<br>
libtool: link: gcc -std=gnu99 -O3 -DNDEBUG -fPIC -m64 -finline-functions
<br>
-fno-strict-aliasing -pthread -o oshmem_info oshmem_info.o param.o
<br>
&nbsp;../../../ompi/.libs/libmpi.a ../../../oshmem/.libs/liboshmem.a
<br>
/ford1/share/gmao_SIteam/MPI/src/openmpi-1.10.2/ompi/.libs/libmpi.a
<br>
-libverbs
<br>
/ford1/share/gmao_SIteam/MPI/src/openmpi-1.10.2/orte/.libs/libopen-rte.a
<br>
../../../orte/.libs/libopen-rte.a
<br>
/ford1/share/gmao_SIteam/MPI/src/openmpi-1.10.2/opal/.libs/libopen-pal.a
<br>
../../../opal/.libs/libopen-pal.a -lnuma -ldl -lrt -lm -lutil -pthread
<br>
/usr/bin/ld: ../../../oshmem/.libs/liboshmem.a(memheap_base_static.o):
<br>
undefined reference to symbol '_end'
<br>
/usr/bin/ld: note: '_end' is defined in DSO /lib64/libnl-route-3.so.200 so
<br>
try adding it to the linker command line
<br>
/lib64/libnl-route-3.so.200: could not read symbols: Invalid operation
<br>
collect2: error: ld returned 1 exit status
<br>
make[2]: *** [oshmem_info] Error 1
<br>
make[2]: Leaving directory
<br>
`/ford1/share/gmao_SIteam/MPI/src/openmpi-1.10.2/oshmem/tools/oshmem_info'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/ford1/share/gmao_SIteam/MPI/src/openmpi-1.10.2/oshmem'
<br>
make: *** [all-recursive] Error 1
<br>
<p>So, what did I do wrong? Or is there something I need to add to the
<br>
configure line? I have built static versions of Open MPI in the past (say
<br>
1.8.7 era with Intel Fortran 15), but this is a new OS (RHEL 7 instead of
<br>
6) so I can see issues possible.
<br>
<p>Anyone seen this before? As I said, the &quot;usual&quot; build way is just fine.
<br>
Perhaps I need an extra RPM that isn't installed? I do have libnl-devel
<br>
installed.
<br>
<p><pre>
-- 
Matt Thompson
Man Among Men
Fulcrum of History
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28344/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28345.php">Howard Pritchard: "Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
<li><strong>Previous message:</strong> <a href="28343.php">Kuhl, Spencer J: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28345.php">Howard Pritchard: "Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
<li><strong>Reply:</strong> <a href="28345.php">Howard Pritchard: "Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
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
