<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 18 19:33:13 2006" -->
<!-- isoreceived="20060718233313" -->
<!-- sent="Tue, 18 Jul 2006 16:33:02 -0700" -->
<!-- isosent="20060718233302" -->
<!-- name="Warner Yuen" -->
<!-- email="wyuen_at_[hidden]" -->
<!-- subject="[OMPI users] Summary of OMPI on OS X with Intel" -->
<!-- id="F6480ED0-DD0E-4358-9733-5A6566EE0312_at_apple.com" -->
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
<strong>From:</strong> Warner Yuen (<em>wyuen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-18 19:33:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1650.php">Paul Heinzlreiter: "[OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<li><strong>Previous message:</strong> <a href="1648.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1657.php">Jeff Squyres: "Re: [OMPI users] Summary of OMPI on OS X with Intel"</a>
<li><strong>Reply:</strong> <a href="1657.php">Jeff Squyres: "Re: [OMPI users] Summary of OMPI on OS X with Intel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay...this isn't a performance summary or anything like that. Its  
<br>
just some information on what I was able to get to work. With a  
<br>
couple of suggestions from Brian Barrett about building OMPI with  
<br>
static libraries (possible problem with GNU libtool support for the  
<br>
Intel compiler on OS X?). I tried a total of six different  
<br>
configurations. So here's my summary FWIW:
<br>
<p>USING GCC 4.0.1 (build 5341) with and without Intel Fortran (build  
<br>
9.1.027):
<br>
<p>Config #1: ./configure --with-rsh=/usr/bin/ssh
<br>
Successful Build = YES
<br>
<p>Config #2: ./configure --disable-shared --enable-static --with-rsh=/ 
<br>
usr/bin/ssh
<br>
Successful Build = NO
<br>
Error:
<br>
g++ -O3 -DNDEBUG -finline-functions -Wl,-u -Wl,_munmap -Wl,- 
<br>
multiply_defined -Wl,suppress -o ompi_info components.o ompi_info.o  
<br>
output.o param.o version.o -Wl,-bind_at_load  ../../../ompi/.libs/ 
<br>
libmpi.a /Users/wyuen/mpi_src/openmpi-1.1/orte/.libs/liborte.a /Users/ 
<br>
wyuen/mpi_src/openmpi-1.1/opal/.libs/libopal.a -ldl
<br>
/usr/bin/ld: Undefined symbols:
<br>
_mpi_fortran_status_ignore_
<br>
_mpi_fortran_statuses_ignore_
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [ompi_info] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>Config #3: ./configure --disable-shared --enable-static --disable-mpi- 
<br>
f77 --disable-mpi-f90 --with-rsh=/usr/bin/ssh
<br>
Successful Build =YES
<br>
<p><p><p>USING Intel C (build 9.1.027) and with and without Intel Fortran  
<br>
(build 9.1.027)
<br>
<p>Config #4: ./configure --disable-mpi-f77 --disable-mpi-f90 --with- 
<br>
rsh=/usr/bin/ssh
<br>
Successful Build = NO
<br>
Error:
<br>
IPO link: can not find &quot;1&quot;
<br>
icc: error: problem during multi-file optimization compilation (code 1)
<br>
make[2]: *** [libopal.la] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>Config #5: ./configure --disable-shared --enable-static --disable-mpi- 
<br>
f77 --disable-mpi-f90 --with-rsh=/usr/bin/ssh
<br>
Successful Build = YES
<br>
<p>Config #6: ./configure --disable-shared --enable-static --with-rsh=/ 
<br>
usr/bin/ssh
<br>
Successful Build = NO
<br>
Error:
<br>
/opt/intel/cc/9.1.027/bin/icpc -O3 -DNDEBUG -finline-functions -Wl,-u  
<br>
-Wl,_munmap -Wl,-multiply_defined -Wl,suppress -o ompi_info  
<br>
components.o ompi_info.o output.o param.o version.o -Wl,- 
<br>
bind_at_load  ../../../ompi/.libs/libmpi.a /Users/wyuen/mpi_src/ 
<br>
openmpi-1.1/orte/.libs/liborte.a /Users/wyuen/mpi_src/openmpi-1.1/ 
<br>
opal/.libs/libopal.a -ldl
<br>
ld: Undefined symbols:
<br>
_mpi_fortran_status_ignore_
<br>
_mpi_fortran_statuses_ignore_
<br>
make[2]: *** [ompi_info] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1650.php">Paul Heinzlreiter: "[OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<li><strong>Previous message:</strong> <a href="1648.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1657.php">Jeff Squyres: "Re: [OMPI users] Summary of OMPI on OS X with Intel"</a>
<li><strong>Reply:</strong> <a href="1657.php">Jeff Squyres: "Re: [OMPI users] Summary of OMPI on OS X with Intel"</a>
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
