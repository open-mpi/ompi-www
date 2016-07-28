<?
$subject_val = "[OMPI users] seg fault and 32-/64-bit mismatch in openmpi-1.7rc8r28201";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 22 08:13:56 2013" -->
<!-- isoreceived="20130322121356" -->
<!-- sent="Fri, 22 Mar 2013 13:06:37 +0100 (CET)" -->
<!-- isosent="20130322120637" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] seg fault and 32-/64-bit mismatch in openmpi-1.7rc8r28201" -->
<!-- id="201303221206.r2MC6bmK000475_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] seg fault and 32-/64-bit mismatch in openmpi-1.7rc8r28201<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-22 08:06:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21601.php">Siegmar Gross: "[OMPI users] seg fault and undefined symbol in openmpi-1.9r28203"</a>
<li><strong>Previous message:</strong> <a href="21599.php">David A. Boger: "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21604.php">Ralph Castain: "Re: [OMPI users] seg fault and 32-/64-bit mismatch in openmpi-1.7rc8r28201"</a>
<li><strong>Reply:</strong> <a href="21604.php">Ralph Castain: "Re: [OMPI users] seg fault and 32-/64-bit mismatch in openmpi-1.7rc8r28201"</a>
<li><strong>Reply:</strong> <a href="21621.php">Jeff Squyres (jsquyres): "Re: [OMPI users] seg fault and 32-/64-bit mismatch in	openmpi-1.7rc8r28201"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>today I tried to install openmpi-1.7rc8r28201 and got the following
<br>
errors. I always used the following command (adapted to different
<br>
architectures).
<br>
<p>../openmpi-1.7rc8r28201/configure --prefix=/usr/local/openmpi-1.7_32_cc \
<br>
&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.7.0_07-32/bin \
<br>
&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.7.0_07-32/include \
<br>
&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.7.0_07-32 \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m32&quot; \
<br>
&nbsp;&nbsp;CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m32&quot; CXXFLAGS=&quot;-m32 -library=stlport4&quot; FCFLAGS=&quot;-m32&quot; \
<br>
&nbsp;&nbsp;CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
<br>
&nbsp;&nbsp;CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;--enable-mpi-java \
<br>
&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;--enable-opal-multi-threads \
<br>
&nbsp;&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;--without-udapl \
<br>
&nbsp;&nbsp;--with-wrapper-cflags=-m32 \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.32_cc
<br>
<p><p>openSuSE Linux 12.1, x86_64, SunC 5.12, 32-bit
<br>
----------------------------------------------
<br>
<p>tyr openmpi-1.7-Linux.x86_64.32_cc 547 tail log.make.Linux.x86_64.32_cc
<br>
Making all in mpi/fortran/use-mpi-f08
<br>
make[2]: Entering directory `.../ompi/mpi/fortran/use-mpi-f08'
<br>
&nbsp;&nbsp;PPFC     mpi-f08-sizeof.lo
<br>
&nbsp;&nbsp;PPFC     mpi-f08.lo
<br>
&quot;../../../../../openmpi-1.7rc8r28201/ompi/mpi/fortran/use-mpi-f08/mpi-f08.F90&quot;,
<br>
&nbsp;&nbsp;Line = 1, Column = 1: INTERNAL: Interrupt: Segmentation fault
<br>
make[2]: *** [mpi-f08.lo] Error 1
<br>
make[2]: Leaving directory `.../ompi/mpi/fortran/use-mpi-f08'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `.../ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>openSuSE Linux 12.1, x86_64, SunC 5.12, 64-bit
<br>
----------------------------------------------
<br>
<p>I could build and install the package.
<br>
<p><p><p>Solaris 10, x86_64 and sparc, SunC 5.12, 32-bit
<br>
-----------------------------------------------
<br>
<p>I could build and install the package.
<br>
<p><p>Solaris 10, x86_64 and sparc, SunC 5.12, 64-bit
<br>
-----------------------------------------------
<br>
<p>tyr openmpi-1.7-SunOS.x86_64.64_cc 565 tail -15 log.make.SunOS.x86_64.64_cc
<br>
&nbsp;&nbsp;F77      libvt_fmpi_la-vt_fmpiconst_2.lo
<br>
&nbsp;&nbsp;F77LD    libvt-fmpi.la
<br>
ld: fatal: file .libs/libvt_fmpi_la-vt_fmpiconst_1.o: wrong ELF class: 
<br>
ELFCLASS32
<br>
ld: fatal: file processing errors. No output written to 
<br>
.libs/libvt-fmpi.so.0.0.0
<br>
make[5]: *** [libvt-fmpi.la] Error 2
<br>
make[5]: Leaving directory `.../ompi/contrib/vt/vt/vtlib'
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[4]: Leaving directory `.../ompi/contrib/vt/vt'
<br>
make[3]: *** [all] Error 2
<br>
make[3]: Leaving directory `.../ompi/contrib/vt/vt'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `.../ompi/contrib/vt'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `.../ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>I would be grateful, if somebody can fix the problems. Thank you very much
<br>
in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21601.php">Siegmar Gross: "[OMPI users] seg fault and undefined symbol in openmpi-1.9r28203"</a>
<li><strong>Previous message:</strong> <a href="21599.php">David A. Boger: "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21604.php">Ralph Castain: "Re: [OMPI users] seg fault and 32-/64-bit mismatch in openmpi-1.7rc8r28201"</a>
<li><strong>Reply:</strong> <a href="21604.php">Ralph Castain: "Re: [OMPI users] seg fault and 32-/64-bit mismatch in openmpi-1.7rc8r28201"</a>
<li><strong>Reply:</strong> <a href="21621.php">Jeff Squyres (jsquyres): "Re: [OMPI users] seg fault and 32-/64-bit mismatch in	openmpi-1.7rc8r28201"</a>
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
