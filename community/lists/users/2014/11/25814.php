<?
$subject_val = "[OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 12:04:43 2014" -->
<!-- isoreceived="20141114170443" -->
<!-- sent="Fri, 14 Nov 2014 18:04:14 +0100 (CET)" -->
<!-- isosent="20141114170414" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12" -->
<!-- id="201411141704.sAEH4EAD029830_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-14 12:04:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25815.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-274-g2177f9e with gcc-4.9.2"</a>
<li><strong>Previous message:</strong> <a href="25813.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25816.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12"</a>
<li><strong>Reply:</strong> <a href="25816.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12"</a>
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
x86_64) with Sun C 5.12 and got the following error on all three
<br>
platforms.
<br>
<p>tyr openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc 127 tail -13 log.make.Linux.x86_64.64_cc
<br>
&nbsp;&nbsp;SED      mpi/man/man3/MPI_Wtime.3
<br>
&nbsp;&nbsp;SED      mpi/man/man3/OpenMPI.3
<br>
make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc/ompi'
<br>
Making all in mpi/cxx
<br>
make[2]: Entering directory `/export2/src/openmpi-1.9/openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc/ompi/mpi/cxx'
<br>
&nbsp;&nbsp;CXX      mpicxx.lo
<br>
&quot;../../../../openmpi-dev-274-g2177f9e/orte/mca/routed/routed.h&quot;, line 52: Error: A typedef name cannot be used in an elaborated type 
<br>
specifier..
<br>
1 Error(s) detected.
<br>
make[2]: *** [mpicxx.lo] Error 1
<br>
make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc/ompi/mpi/cxx'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc 128 
<br>
<p><p>I used the following configure command.
<br>
<p>tyr openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc 128 head config.log | grep openmpi
<br>
&nbsp;&nbsp;$ ../openmpi-dev-274-g2177f9e/configure --prefix=/usr/local/openmpi-1.9.0_64_cc --libdir=/usr/local/openmpi-1.9.0_64_cc/lib64 
<br>
--with-jdk-bindir=/usr/local/jdk1.8.0/bin --with-jdk-headers=/usr/local/jdk1.8.0/include JAVA_HOME=/usr/local/jdk1.8.0 LDFLAGS=-m64 
<br>
CC=cc CXX=CC FC=f95 CFLAGS=-m64 -D_REENTRANT CXXFLAGS=-m64 -library=stlport4 FCFLAGS=-m64 CPP=cpp CXXCPP=cpp CPPFLAGS= -D_REENTRANT 
<br>
CXXCPPFLAGS= --enable-mpi-cxx --enable-cxx-exceptions --enable-mpi-java --enable-mpi-thread-multiple --with-threads=posix 
<br>
--with-hwloc=internal --without-verbs --with-wrapper-cflags=-m64 --with-wrapper-cxxflags=-m64 --enable-debug
<br>
tyr openmpi-dev-274-g2177f9e-Linux.x86_64.64_cc 129 
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
<li><strong>Next message:</strong> <a href="25815.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-274-g2177f9e with gcc-4.9.2"</a>
<li><strong>Previous message:</strong> <a href="25813.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25816.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12"</a>
<li><strong>Reply:</strong> <a href="25816.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-274-g2177f9e with Sun C 5.12"</a>
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
