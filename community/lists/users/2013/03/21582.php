<?
$subject_val = "[OMPI users] 32-/64-bit library problem in openmpi-1.7rc8r28176 and openmpi-1.9r28175";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 21 09:36:23 2013" -->
<!-- isoreceived="20130321133623" -->
<!-- sent="Thu, 21 Mar 2013 14:29:08 +0100 (CET)" -->
<!-- isosent="20130321132908" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] 32-/64-bit library problem in openmpi-1.7rc8r28176 and openmpi-1.9r28175" -->
<!-- id="201303211329.r2LDT8Ak019866_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] 32-/64-bit library problem in openmpi-1.7rc8r28176 and openmpi-1.9r28175<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-21 09:29:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21583.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21581.php">Iliev, Hristo: "Re: [OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6 network addresses on the same adaptor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21624.php">Matthias Jurenz: "Re: [OMPI users] 32-/64-bit library problem in openmpi-1.7rc8r28176 and openmpi-1.9r28175"</a>
<li><strong>Maybe reply:</strong> <a href="21624.php">Matthias Jurenz: "Re: [OMPI users] 32-/64-bit library problem in openmpi-1.7rc8r28176 and openmpi-1.9r28175"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>today I tried to build openmpi-1.7rc8r28176 and openmpi-1.9r28175
<br>
on &quot;Solaris 10, x86_64&quot; and &quot;Solaris 10, sparc&quot; with &quot;Sun C 5.12&quot;.
<br>
I used the following commands for openmpi-1.7.x and similar commands
<br>
for the other package:
<br>
<p>../openmpi-1.7rc8r28176/configure --prefix=/usr/local/openmpi-1.7_64_cc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.7_64_cc/lib64 \
<br>
&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.7.0_07/bin/amd64 \
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
&nbsp;&nbsp;--with-wrapper-cflags=-m64 \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
<br>
make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_cc
<br>
<p><p>&quot;make&quot; breaks with the following error for both packages on both
<br>
platforms:
<br>
<p>tyr openmpi-1.9-SunOS.sparc.64_cc 30 tail -15 log.make.SunOS.sparc.64_cc
<br>
&nbsp;&nbsp;F77      libvt_fmpi_la-vt_fmpiconst_2.lo
<br>
&nbsp;&nbsp;F77LD    libvt-fmpi.la
<br>
ld: fatal: file .libs/libvt_fmpi_la-vt_fmpiconst_1.o:
<br>
&nbsp;&nbsp;wrong ELF class: ELFCLASS32
<br>
ld: fatal: file processing errors. No output written to
<br>
&nbsp;&nbsp;.libs/libvt-fmpi.so.0.0.0
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
make[1]: Leaving directory `/.../ompi'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-1.9-SunOS.sparc.64_cc 31 
<br>
<p><p>tyr vtlib 39 pwd
<br>
.../ompi/contrib/vt/vt/vtlib
<br>
tyr vtlib 40 file * | grep -v 64-bit | grep -v ascii
<br>
libvt_fmpi_la-vt_fmpiconst_1.o: ELF 32-bit MSB relocatable
<br>
&nbsp;&nbsp;SPARC32PLUS Version 1, V8+ Required
<br>
libvt_fmpi_la-vt_fmpiconst_2.o: ELF 32-bit MSB relocatable
<br>
&nbsp;&nbsp;SPARC32PLUS Version 1, V8+ Required
<br>
tyr vtlib 41 
<br>
<p><p>Why are these two files 32-bit while all others are 64-bit as
<br>
requested in &quot;configure&quot;? I would be grateful, if somebody
<br>
can fix this problem. Thank you very much for your efforts
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
<li><strong>Next message:</strong> <a href="21583.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21581.php">Iliev, Hristo: "Re: [OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6 network addresses on the same adaptor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21624.php">Matthias Jurenz: "Re: [OMPI users] 32-/64-bit library problem in openmpi-1.7rc8r28176 and openmpi-1.9r28175"</a>
<li><strong>Maybe reply:</strong> <a href="21624.php">Matthias Jurenz: "Re: [OMPI users] 32-/64-bit library problem in openmpi-1.7rc8r28176 and openmpi-1.9r28175"</a>
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
