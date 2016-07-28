<?
$subject_val = "[OMPI users] Error in openmpi-1.9a1r29179";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 17 02:56:14 2013" -->
<!-- isoreceived="20130917065614" -->
<!-- sent="Tue, 17 Sep 2013 08:49:14 +0200 (CEST)" -->
<!-- isosent="20130917064914" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] Error in openmpi-1.9a1r29179" -->
<!-- id="201309170649.r8H6nEM3024098_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] Error in openmpi-1.9a1r29179<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-17 02:49:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22667.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>Previous message:</strong> <a href="22665.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22667.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>Reply:</strong> <a href="22667.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error in openmpi-1.9a1r29179"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to install openmpi-1.9a1r29179 on &quot;openSuSE Linux 12.1&quot;,
<br>
&quot;Solaris 10 x86_64&quot;, and &quot;Solaris 10 sparc&quot; with &quot;Sun C 5.12&quot; in
<br>
64-bit mode. Unfortunately &quot;make&quot; breaks with the same error on
<br>
all platforms.
<br>
<p>tail -15 log.make.Linux.x86_64.64_cc
<br>
<p>&nbsp;&nbsp;CCLD     libshmem_c.la
<br>
make[3]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem/shmem/c'
<br>
make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem/shmem/c'
<br>
Making all in shmem/fortran
<br>
make[2]: Entering directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem/shmem/fortran'
<br>
&nbsp;&nbsp;CC       start_pes_f.lo
<br>
&quot;../../../../openmpi-1.9a1r29179/oshmem/shmem/fortran/start_pes_f.c&quot;, line 16: void function cannot return value
<br>
&quot;../../../../openmpi-1.9a1r29179/oshmem/shmem/fortran/start_pes_f.c&quot;, line 16: void function cannot return value
<br>
&quot;../../../../openmpi-1.9a1r29179/oshmem/shmem/fortran/start_pes_f.c&quot;, line 16: void function cannot return value
<br>
cc: acomp failed for ../../../../openmpi-1.9a1r29179/oshmem/shmem/fortran/start_pes_f.c
<br>
make[2]: *** [start_pes_f.lo] Error 1
<br>
make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem/shmem/fortran'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>I configured with the following command.
<br>
<p>../openmpi-1.9a1r29179/configure --prefix=/usr/local/openmpi-1.9_64_cc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.9_64_cc/lib64 \
<br>
&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.7.0_07-64/bin \
<br>
&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.7.0_07-64/include \
<br>
&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.7.0_07-64 \
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
<p><p><p>I would be grateful if somebody can fix the bug. Thank you very
<br>
much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22667.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>Previous message:</strong> <a href="22665.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22667.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>Reply:</strong> <a href="22667.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error in openmpi-1.9a1r29179"</a>
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
