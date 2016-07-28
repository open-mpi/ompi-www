<?
$subject_val = "[OMPI users] seg fault and undefined symbol in openmpi-1.9r28203";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 22 08:42:07 2013" -->
<!-- isoreceived="20130322124207" -->
<!-- sent="Fri, 22 Mar 2013 13:34:46 +0100 (CET)" -->
<!-- isosent="20130322123446" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] seg fault and undefined symbol in openmpi-1.9r28203" -->
<!-- id="201303221234.r2MCYkoe000551_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] seg fault and undefined symbol in openmpi-1.9r28203<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-22 08:34:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21602.php">Ralph Castain: "Re: [OMPI users] Running openmpi jobs on two system"</a>
<li><strong>Previous message:</strong> <a href="21600.php">Siegmar Gross: "[OMPI users] seg fault and 32-/64-bit mismatch in openmpi-1.7rc8r28201"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21607.php">Siegmar Gross: "Re: [OMPI users] seg fault and undefined symbol in openmpi-1.9r28203"</a>
<li><strong>Maybe reply:</strong> <a href="21607.php">Siegmar Gross: "Re: [OMPI users] seg fault and undefined symbol in openmpi-1.9r28203"</a>
<li><strong>Reply:</strong> <a href="21622.php">Jeff Squyres (jsquyres): "Re: [OMPI users] seg fault and undefined symbol in openmpi-1.9r28203"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>today I tried to install openmpi-1.9r28203 and got the following
<br>
errors. I always used the following command (adapted to different
<br>
architectures).
<br>
<p>../openmpi-1.9r28203/configure --prefix=/usr/local/openmpi-1.9_64_cc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.9_64_cc/lib64 \
<br>
&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.7.0_07/bin/sparcv9 \
<br>
&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.7.0_07/include \
<br>
&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.7.0_07 \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
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
&nbsp;&nbsp;--without-sctp \
<br>
&nbsp;&nbsp;--with-wrapper-cflags=-m64 \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
<br>
<p><p>openSuSE Linux 12.1, x86_64, SunC 5.12, 32-bit
<br>
----------------------------------------------
<br>
<p>linpc1 openmpi-1.9-Linux.x86_64.32_cc 113 tail log.make.Linux.x86_64.32_cc 
<br>
Making all in mpi/fortran/use-mpi-f08
<br>
make[2]: Entering directory `.../ompi/mpi/fortran/use-mpi-f08'
<br>
&nbsp;&nbsp;PPFC     mpi-f08-sizeof.lo
<br>
&nbsp;&nbsp;PPFC     mpi-f08.lo
<br>
&quot;../../../../../openmpi-1.9r28203/ompi/mpi/fortran/use-mpi-f08/mpi-f08.F90&quot;,
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
<p><p><p>Solaris 10, x86_64 and sparc, SunC 5.12, 32-bit and 64-bit
<br>
----------------------------------------------------------
<br>
<p>sunpc1 openmpi-1.9-SunOS.x86_64.32_cc 16 tail -15 log.make.SunOS.x86_64.32_cc
<br>
make[2]: Entering directory `.../opal/tools/wrappers'
<br>
&nbsp;&nbsp;CC       opal_wrapper.o
<br>
&quot;../../../../openmpi-1.9r28203/opal/include/opal/sys/ia32/atomic.h&quot;,
<br>
&nbsp;&nbsp;line 173: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../openmpi-1.9r28203/opal/include/opal/sys/ia32/atomic.h&quot;,
<br>
&nbsp;&nbsp;line 193: warning: parameter in inline asm statement unused: %2
<br>
&nbsp;&nbsp;CCLD     opal_wrapper
<br>
Undefined                       first referenced
<br>
&nbsp;symbol                             in file
<br>
opal_hwloc152_hwloc_solaris_get_chip_model ../../../opal/.libs/libopen-pal.so
<br>
opal_hwloc152_hwloc_solaris_get_chip_type ../../../opal/.libs/libopen-pal.so
<br>
ld: fatal: symbol referencing errors. No output written to .libs/opal_wrapper
<br>
make[2]: *** [opal_wrapper] Error 2
<br>
make[2]: Leaving directory `.../opal/tools/wrappers'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `.../opal'
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
<li><strong>Next message:</strong> <a href="21602.php">Ralph Castain: "Re: [OMPI users] Running openmpi jobs on two system"</a>
<li><strong>Previous message:</strong> <a href="21600.php">Siegmar Gross: "[OMPI users] seg fault and 32-/64-bit mismatch in openmpi-1.7rc8r28201"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21607.php">Siegmar Gross: "Re: [OMPI users] seg fault and undefined symbol in openmpi-1.9r28203"</a>
<li><strong>Maybe reply:</strong> <a href="21607.php">Siegmar Gross: "Re: [OMPI users] seg fault and undefined symbol in openmpi-1.9r28203"</a>
<li><strong>Reply:</strong> <a href="21622.php">Jeff Squyres (jsquyres): "Re: [OMPI users] seg fault and undefined symbol in openmpi-1.9r28203"</a>
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
