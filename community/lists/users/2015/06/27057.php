<?
$subject_val = "[OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 06:45:11 2015" -->
<!-- isoreceived="20150609104511" -->
<!-- sent="Tue, 9 Jun 2015 12:44:02 +0200 (CEST)" -->
<!-- isosent="20150609104402" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks" -->
<!-- id="201506091044.t59Ai2dZ010176_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-09 06:44:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27058.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="27056.php">Siegmar Gross: "[OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27067.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Reply:</strong> <a href="27067.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Maybe reply:</strong> <a href="27069.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Maybe reply:</strong> <a href="27070.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Maybe reply:</strong> <a href="27072.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I tried to build openmpi-v1.8.5-46-g9f5f498 on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
<br>
x86_64) with gcc-4.9.2 and Sun C 5.13 and I got the same error
<br>
on all three platforms with both compilers. I have already
<br>
reported the problem a few days ago. I used the following command
<br>
to configure the package.
<br>
<p>../openmpi-v1.8.5-46-g9f5f498/configure \
<br>
&nbsp;&nbsp;--prefix=/usr/local/openmpi-1.8.6_64_gcc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.8.6_64_gcc/lib64 \
<br>
&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0/bin \
<br>
&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0/include \
<br>
&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0 \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
<br>
&nbsp;&nbsp;CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;--enable-mpi-cxx \
<br>
&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;--enable-mpi-java \
<br>
&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;--with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
<br>
&nbsp;&nbsp;--with-wrapper-cxxflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;--with-wrapper-fcflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
<p><p>...
<br>
make[3]: Entering directory `/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi/include'
<br>
../../../openmpi-v1.8.5-46-g9f5f498/ompi/mpi/fortran/base/gen-mpi-sizeof.pl \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--header=mpif-sizeof.h --ierror=mandatory \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--maxrank=7 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--generate=1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--real16=1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--complex32=1
<br>
ln -s ../../../openmpi-v1.8.5-46-g9f5f498/opal/include/opal/opal_portable_platform.h mpi_portable_platform.h
<br>
ln: failed to create symbolic link `mpi_portable_platform.h': File exists
<br>
make[3]: *** [mpi_portable_platform.h] Error 1
<br>
make[3]: Leaving directory `/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi/include'
<br>
make[2]: *** [all] Error 2
<br>
make[2]: Leaving directory `/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi/include'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
linpc1 openmpi-1.8.6-Linux.x86_64.64_gcc 261 
<br>
<p><p>I would be grateful, if somebody could fix the problem. Thank
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
<li><strong>Next message:</strong> <a href="27058.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="27056.php">Siegmar Gross: "[OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27067.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Reply:</strong> <a href="27067.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Maybe reply:</strong> <a href="27069.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Maybe reply:</strong> <a href="27070.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Maybe reply:</strong> <a href="27072.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
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
