<?
$subject_val = "[OMPI users] openmpi-1.10.2rc1: wrong ELF class on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 10:42:16 2015" -->
<!-- isoreceived="20151221154216" -->
<!-- sent="Mon, 21 Dec 2015 12:46:20 +0100" -->
<!-- isosent="20151221114620" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.10.2rc1: wrong ELF class on Solaris" -->
<!-- id="5677E68C.4080507_at_informatik.hs-fulda.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.10.2rc1: wrong ELF class on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-21 06:46:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28193.php">Siegmar Gross: "[OMPI users] openmpi-2.0.0rc1: wrong ELF class on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28191.php">Gilles Gouaillardet: "Re: [OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28198.php">Thomas Jahns: "Re: [OMPI users] openmpi-1.10.2rc1: wrong ELF class on Solaris"</a>
<li><strong>Reply:</strong> <a href="28198.php">Thomas Jahns: "Re: [OMPI users] openmpi-1.10.2rc1: wrong ELF class on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I tried to build openmpi-1.10.2rc1 on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
<br>
x86_64) with gcc-5.1.0 and Sun C 5.13. I was successful on my
<br>
Linux machine, but I got the following error on both Solaris
<br>
platforms for both compilers for different files. I used the
<br>
following commands to configure and build the package for gcc.
<br>
<p>mkdir openmpi-1.10.2rc1-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
<br>
cd openmpi-1.10.2rc1-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
<br>
<p>../openmpi-1.10.2rc1/configure \
<br>
&nbsp;&nbsp;&nbsp;--prefix=/usr/local/openmpi-1.10.2_64_gcc \
<br>
&nbsp;&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.10.2_64_gcc/lib64 \
<br>
&nbsp;&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0/bin \
<br>
&nbsp;&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0/include \
<br>
&nbsp;&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0 \
<br>
&nbsp;&nbsp;&nbsp;LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
<br>
&nbsp;&nbsp;&nbsp;CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-cxx \
<br>
&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-java \
<br>
&nbsp;&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-cxxflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-fcflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
<p>make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
<p><p>sunpc1 openmpi-1.10.2rc1-SunOS.x86_64.64_gcc 53 tail -16 
<br>
log.make.SunOS.x86_64.64_gcc
<br>
make[3]: Entering directory 
<br>
`/export2/src/openmpi-1.10.2/openmpi-1.10.2rc1-SunOS.x86_64.64_gcc/ompi/mpi/fortran/mpif-h'
<br>
&nbsp;&nbsp;&nbsp;GENERATE sizeof_f.f90
<br>
&nbsp;&nbsp;&nbsp;FC       sizeof_f.lo
<br>
&nbsp;&nbsp;&nbsp;FCLD     libmpi_mpifh_sizeof.la
<br>
&nbsp;&nbsp;&nbsp;CCLD     libmpi_mpifh.la
<br>
ld: warning: file ./.libs/libmpi_mpifh_sizeof.a(sizeof_f.o): wrong ELF class: 
<br>
ELFCLASS32
<br>
ld: fatal: file /usr/local/gcc-5.1.0/lib/libgfortran.so: wrong ELF class: 
<br>
ELFCLASS32
<br>
ld: fatal: file processing errors. No output written to 
<br>
.libs/libmpi_mpifh.so.12.0.0
<br>
collect2: error: ld returned 1 exit status
<br>
make[3]: *** [libmpi_mpifh.la] Error 1
<br>
make[3]: Leaving directory 
<br>
`/export2/src/openmpi-1.10.2/openmpi-1.10.2rc1-SunOS.x86_64.64_gcc/ompi/mpi/fortran/mpif-h'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.10.2/openmpi-1.10.2rc1-SunOS.x86_64.64_gcc/ompi/mpi/fortran/mpif-h'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/export2/src/openmpi-1.10.2/openmpi-1.10.2rc1-SunOS.x86_64.64_gcc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
sunpc1 openmpi-1.10.2rc1-SunOS.x86_64.64_gcc 54
<br>
<p><p><p><p>sunpc1 openmpi-1.10.2rc1-SunOS.x86_64.64_cc 54 tail -12 
<br>
log.make.SunOS.x86_64.64_cc
<br>
make[2]: Entering directory 
<br>
`/export2/src/openmpi-1.10.2/openmpi-1.10.2rc1-SunOS.x86_64.64_cc/ompi/mpi/fortran/use-mpi-ignore-tkr'
<br>
&nbsp;&nbsp;&nbsp;GENERATE mpi-ignore-tkr-sizeof.h
<br>
&nbsp;&nbsp;&nbsp;GENERATE mpi-ignore-tkr-sizeof.f90
<br>
&nbsp;&nbsp;&nbsp;PPFC     mpi-ignore-tkr.lo
<br>
&nbsp;&nbsp;&nbsp;FCLD     libmpi_usempi_ignore_tkr.la
<br>
ld: fatal: file .libs/mpi-ignore-tkr.o: wrong ELF class: ELFCLASS32
<br>
ld: fatal: file processing errors. No output written to 
<br>
.libs/libmpi_usempi_ignore_tkr.so.6.0.0
<br>
make[2]: *** [libmpi_usempi_ignore_tkr.la] Error 2
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.10.2/openmpi-1.10.2rc1-SunOS.x86_64.64_cc/ompi/mpi/fortran/use-mpi-ignore-tkr'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/export2/src/openmpi-1.10.2/openmpi-1.10.2rc1-SunOS.x86_64.64_cc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
sunpc1 openmpi-1.10.2rc1-SunOS.x86_64.64_cc 55
<br>
<p><p>I would be grateful if somebody can fix the problem. Thank you
<br>
very much for any help in advance.
<br>
<p><p>Kind regards and happy holidays
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28193.php">Siegmar Gross: "[OMPI users] openmpi-2.0.0rc1: wrong ELF class on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28191.php">Gilles Gouaillardet: "Re: [OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28198.php">Thomas Jahns: "Re: [OMPI users] openmpi-1.10.2rc1: wrong ELF class on Solaris"</a>
<li><strong>Reply:</strong> <a href="28198.php">Thomas Jahns: "Re: [OMPI users] openmpi-1.10.2rc1: wrong ELF class on Solaris"</a>
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
