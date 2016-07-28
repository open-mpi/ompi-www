<?
$subject_val = "[OMPI users] Error in openmpi-1.8.2a1r31556 with Sun C 5.12";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 30 10:41:26 2014" -->
<!-- isoreceived="20140430144126" -->
<!-- sent="Wed, 30 Apr 2014 16:40:26 +0200 (CEST)" -->
<!-- isosent="20140430144026" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] Error in openmpi-1.8.2a1r31556 with Sun C 5.12" -->
<!-- id="201404301440.s3UEeQSj012710_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] Error in openmpi-1.8.2a1r31556 with Sun C 5.12<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-30 10:40:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24278.php">Siegmar Gross: "[OMPI users] Error in openmpi-1.9a1r31561 using gcc or cc"</a>
<li><strong>Previous message:</strong> <a href="24276.php">George Bosilca: "[OMPI users] Heteropar 2014 CFP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24280.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error in openmpi-1.8.2a1r31556 with Sun C 5.12"</a>
<li><strong>Reply:</strong> <a href="24280.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error in openmpi-1.8.2a1r31556 with Sun C 5.12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to install openmpi-1.8.2a1r31556 on my machines (openSUSE
<br>
Linux 12.1 x86_64, Solaris 10 x86_64, and Solaris 10 Sparc) with
<br>
&quot;Sun C 5.12&quot; and got the following error on all platforms.
<br>
<p>tyr openmpi-1.8.2a1r31556-Linux.x86_64.64_cc 131 tail -15 log.make.Linux.x86_64.64_cc
<br>
&nbsp;&nbsp;PPFC     comm_compare_f08.lo
<br>
&nbsp;&nbsp;PPFC     comm_connect_f08.lo
<br>
&nbsp;&nbsp;PPFC     comm_create_errhandler_f08.lo
<br>
<p>&nbsp;&nbsp;&nbsp;fn = c_funloc(comm_errhandler_fn)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^                   
<br>
&quot;../../../../../openmpi-1.8.2a1r31556/ompi/mpi/fortran/use-mpi-f08/comm_create_errhandler_f08.F90&quot;,
<br>
&nbsp;&nbsp;Line = 22, Column = 18: ERROR: C_FUNLOC function argument must
<br>
&nbsp;&nbsp;be a procedure that is interoperable or a procedure pointer
<br>
&nbsp;&nbsp;associated with an interoperable procedure.
<br>
<p>f90comp: 193 SOURCE LINES
<br>
f90comp: 1 ERRORS, 0 WARNINGS, 0 OTHER MESSAGES, 0 ANSI
<br>
make[2]: *** [comm_create_errhandler_f08.lo] Error 1
<br>
make[2]: Leaving directory `.../ompi/mpi/fortran/use-mpi-f08'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `.../ompi'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-1.8.2a1r31556-Linux.x86_64.64_cc 132 
<br>
<p><p>I configured with the following command.
<br>
<p>../openmpi-1.8.2a1r31556/configure --prefix=/usr/local/openmpi-1.8.2_64_cc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.8.2_64_cc/lib64 \
<br>
&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0/bin \
<br>
&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0/include \
<br>
&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0 \
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
&nbsp;&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;--with-wrapper-cflags=-m64 \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
<br>
<p>I would be grateful if somebody could solve the problem. Thank
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
<li><strong>Next message:</strong> <a href="24278.php">Siegmar Gross: "[OMPI users] Error in openmpi-1.9a1r31561 using gcc or cc"</a>
<li><strong>Previous message:</strong> <a href="24276.php">George Bosilca: "[OMPI users] Heteropar 2014 CFP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24280.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error in openmpi-1.8.2a1r31556 with Sun C 5.12"</a>
<li><strong>Reply:</strong> <a href="24280.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error in openmpi-1.8.2a1r31556 with Sun C 5.12"</a>
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
