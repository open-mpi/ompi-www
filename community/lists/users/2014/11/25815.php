<?
$subject_val = "[OMPI users] error building openmpi-dev-274-g2177f9e with gcc-4.9.2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 12:04:47 2014" -->
<!-- isoreceived="20141114170447" -->
<!-- sent="Fri, 14 Nov 2014 18:04:33 +0100 (CET)" -->
<!-- isosent="20141114170433" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] error building openmpi-dev-274-g2177f9e with gcc-4.9.2" -->
<!-- id="201411141704.sAEH4XFS029833_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] error building openmpi-dev-274-g2177f9e with gcc-4.9.2<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-14 12:04:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25816.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12"</a>
<li><strong>Previous message:</strong> <a href="25814.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25818.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with gcc-4.9.2"</a>
<li><strong>Reply:</strong> <a href="25818.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with gcc-4.9.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I tried to install openmpi-dev-274-g2177f9e on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
<br>
x86_64) with gcc-4.9.2 and got the following error on all three
<br>
platforms.
<br>
<p>tyr openmpi-dev-274-g2177f9e-Linux.x86_64.64_gcc 117 tail -25 log.make.Linux.x86_64.64_gcc
<br>
&nbsp;&nbsp;SED      mpi/man/man3/MPI_Wtime.3
<br>
&nbsp;&nbsp;SED      mpi/man/man3/OpenMPI.3
<br>
make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-274-g2177f9e-Linux.x86_64.64_gcc/ompi'
<br>
Making all in mpi/cxx
<br>
make[2]: Entering directory `/export2/src/openmpi-1.9/openmpi-dev-274-g2177f9e-Linux.x86_64.64_gcc/ompi/mpi/cxx'
<br>
&nbsp;&nbsp;CXX      mpicxx.lo
<br>
In file included from ../../../../openmpi-dev-274-g2177f9e/ompi/mca/rte/orte/rte_orte.h:33:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../openmpi-dev-274-g2177f9e/ompi/mca/rte/rte.h:195,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../openmpi-dev-274-g2177f9e/ompi/errhandler/errhandler.h:34,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../openmpi-dev-274-g2177f9e/ompi/mpi/cxx/mpicxx.cc:37:
<br>
../../../../openmpi-dev-274-g2177f9e/orte/mca/routed/routed.h:52:8: error: using typedef-name 'orte_process_name_t' after 'struct'
<br>
&nbsp;struct orte_process_name_t;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from ../../../../openmpi-dev-274-g2177f9e/ompi/mca/rte/orte/rte_orte.h:29:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../openmpi-dev-274-g2177f9e/ompi/mca/rte/rte.h:195,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../openmpi-dev-274-g2177f9e/ompi/errhandler/errhandler.h:34,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../openmpi-dev-274-g2177f9e/ompi/mpi/cxx/mpicxx.cc:37:
<br>
../../../../openmpi-dev-274-g2177f9e/orte/include/orte/types.h:102:29: note: 'orte_process_name_t' has a previous declaration here
<br>
&nbsp;typedef opal_process_name_t orte_process_name_t;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
make[2]: *** [mpicxx.lo] Error 1
<br>
make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-274-g2177f9e-Linux.x86_64.64_gcc/ompi/mpi/cxx'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-274-g2177f9e-Linux.x86_64.64_gcc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-dev-274-g2177f9e-Linux.x86_64.64_gcc 118 
<br>
<p><p>I used the following configure command.
<br>
<p>tyr openmpi-dev-274-g2177f9e-Linux.x86_64.64_gcc 118 head config.log | grep openmpi
<br>
&nbsp;&nbsp;$ ../openmpi-dev-274-g2177f9e/configure --prefix=/usr/local/openmpi-1.9.0_64_gcc --libdir=/usr/local/openmpi-1.9.0_64_gcc/lib64 
<br>
--with-jdk-bindir=/usr/local/jdk1.8.0/bin --with-jdk-headers=/usr/local/jdk1.8.0/include JAVA_HOME=/usr/local/jdk1.8.0 LDFLAGS=-m64 
<br>
CC=gcc CXX=g++ FC=gfortran CFLAGS=-m64 -D_REENTRANT CXXFLAGS=-m64 FCFLAGS=-m64 CPP=cpp CXXCPP=cpp CPPFLAGS= -D_REENTRANT 
<br>
CXXCPPFLAGS= --enable-mpi-cxx --enable-cxx-exceptions --enable-mpi-java --enable-mpi-thread-multiple --with-threads=posix 
<br>
--with-hwloc=internal --without-verbs --with-wrapper-cflags=-std=c11 -m64 --with-wrapper-cxxflags=-m64 --enable-debug
<br>
tyr openmpi-dev-274-g2177f9e-Linux.x86_64.64_gcc 119 
<br>
<p><p>I would be grateful. if somebody can fix the problem. Thank
<br>
you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25816.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12"</a>
<li><strong>Previous message:</strong> <a href="25814.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25818.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with gcc-4.9.2"</a>
<li><strong>Reply:</strong> <a href="25818.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with gcc-4.9.2"</a>
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
