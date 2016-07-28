<?
$subject_val = "[OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 20 14:45:15 2007" -->
<!-- isoreceived="20071120194515" -->
<!-- sent="Tue, 20 Nov 2007 14:45:07 -0500" -->
<!-- isosent="20071120194507" -->
<!-- name="Mark Dobossy" -->
<!-- email="mdobossy_at_[hidden]" -->
<!-- subject="[OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard" -->
<!-- id="A3855008-1120-42A0-B67E-609C23C6BC86_at_Princeton.EDU" -->
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
<strong>Subject:</strong> [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard<br>
<strong>From:</strong> Mark Dobossy (<em>mdobossy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-20 14:45:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4494.php">pat.o'bryant_at_[hidden]: "[OMPI users] openmpi-sessions-userid directories"</a>
<li><strong>Previous message:</strong> <a href="4492.php">Terry Frankcombe: "[OMPI users] Memory manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4499.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<li><strong>Reply:</strong> <a href="4499.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running into some roadblocks in compiling OpenMPI 1.2.4 using the  
<br>
latest Intel Compilers (icc, icpc, ifort) version 10.1.006 on OS X  
<br>
Leopard (10.5.1).  Using the last revision of the intel compilers  
<br>
(version 10.0.20) works, but I need the 10.1 compilers to fix  
<br>
compilation of the code I am trying to parallelize, so I need to get  
<br>
everything working with 10.1.x.
<br>
<p>If I issue my standard ./configure line:
<br>
./configure --prefix=/usr/local/openmpi --with-fortran --enable-shared  
<br>
--disable-static --with-xgrid
<br>
<p>None of the test c or c++ programs can be compiled, due to a locale  
<br>
error:
<br>
Catastrophic error: could not set locale &quot;&quot; to allow processing of  
<br>
multibyte characters
<br>
<p>This is a problem that intel seems to know about, and they have  
<br>
suggested adding a -no-multibyte-chars flag to fix it.  When I add the  
<br>
-no-multibyte-chars flag (via CFLAGS=-no-multibyte-chars CXXFLAGS=-no- 
<br>
multibyte-chars), the configure script runs successfully.  However,  
<br>
when I then try to compile, I fail with the following when making asm:
<br>
<p>Making all in asm
<br>
source='asm.c' object='asm.lo' libtool=yes \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEPDIR=.deps depmode=none /bin/sh ../../config/depcomp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../../libtool --tag=CC   --mode=compile /Users/mark/Desktop/ 
<br>
openmpi-1.2.4/config/compile icc -DHAVE_CONFIG_H -I. -I../../opal/ 
<br>
include -I../../orte/include -I../../ompi/include   -I../..  - 
<br>
D_REENTRANT  -O3 -DNDEBUG -no-multibyte-chars -finline-functions -fno- 
<br>
strict-aliasing -restrict  -c -o asm.lo asm.c
<br>
libtool: compile:  /Users/mark/Desktop/openmpi-1.2.4/config/compile  
<br>
icc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include - 
<br>
I../../ompi/include -I../.. -D_REENTRANT -O3 -DNDEBUG -no-multibyte- 
<br>
chars -finline-functions -fno-strict-aliasing -restrict -c asm.c  -fno- 
<br>
common -DPIC -o .libs/asm.o
<br>
rm -f atomic-asm.s
<br>
ln -s &quot;../../opal/asm/generated/atomic-local.s&quot; atomic-asm.s
<br>
/bin/sh ../../libtool   --mode=compile /Users/mark/Desktop/ 
<br>
openmpi-1.2.4/config/compile icc  -O3 -DNDEBUG -no-multibyte-chars - 
<br>
finline-functions -fno-strict-aliasing -restrict -c -o atomic-asm.lo  
<br>
atomic-asm.s
<br>
libtool: compile:  /Users/mark/Desktop/openmpi-1.2.4/config/compile  
<br>
icc -O3 -DNDEBUG -no-multibyte-chars -finline-functions -fno-strict- 
<br>
aliasing -restrict -c atomic-asm.s  -fno-common -DPIC -o .libs/atomic- 
<br>
asm.o
<br>
/bin/sh ../../libtool --tag=CC   --mode=link /Users/mark/Desktop/ 
<br>
openmpi-1.2.4/config/compile icc  -O3 -DNDEBUG -no-multibyte-chars - 
<br>
finline-functions -fno-strict-aliasing -restrict   -export-dynamic   - 
<br>
Wl,-u,_munmap -Wl,-multiply_defined,suppress -o libasm.la  asm.lo  
<br>
atomic-asm.lo  -lutil
<br>
libtool: link: ar cru .libs/libasm.a .libs/asm.o .libs/atomic-asm.o
<br>
ar: .libs/atomic-asm.o: No such file or directory
<br>
make[2]: *** [libasm.la] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Attached to this email are two tar/gzipped files.  The first,  
<br>
&quot;openMPI_config_fail.tgz&quot; contains the config.log, and output from ./ 
<br>
configure, if I do not specify the -no-multibyte-chars option.  The  
<br>
second, openMPI_make_fail.tgz, contains the config.log, ./configure  
<br>
output, and make output, if I do specify -no-multibyte-chars.
<br>
<p>Any feedback on how to solve this issue would be greatly appreciated.   
<br>
Thanks!
<br>
<p>-Mark
<br>
<p><p><p>


<br><p>
<p><p><p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4493/openMPI_config_fail.tgz">openMPI_config_fail.tgz</a>
</ul>
<!-- attachment="openMPI_config_fail.tgz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4493/openMPI_make_fail.tgz">openMPI_make_fail.tgz</a>
</ul>
<!-- attachment="openMPI_make_fail.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4494.php">pat.o'bryant_at_[hidden]: "[OMPI users] openmpi-sessions-userid directories"</a>
<li><strong>Previous message:</strong> <a href="4492.php">Terry Frankcombe: "[OMPI users] Memory manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4499.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<li><strong>Reply:</strong> <a href="4499.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
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
