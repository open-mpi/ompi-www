<?
$subject_val = "[OMPI users] error building openmpi-dev-373-gdee243c with Solaris Studio 12.4";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 29 08:29:21 2014" -->
<!-- isoreceived="20141129132921" -->
<!-- sent="Sat, 29 Nov 2014 14:28:53 +0100 (CET)" -->
<!-- isosent="20141129132853" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] error building openmpi-dev-373-gdee243c with Solaris Studio 12.4" -->
<!-- id="201411291328.sATDSrdh015733_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] error building openmpi-dev-373-gdee243c with Solaris Studio 12.4<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-29 08:28:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25891.php">Emmanuel Thomé: "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>Previous message:</strong> <a href="25889.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I tried to install openmpi-dev-373-gdee243c on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
<br>
x86_64) with the new Solaris Studio 12.4 compilers and got the
<br>
following error on all three platforms.
<br>
<p>tyr openmpi-dev-373-gdee243c-Linux.x86_64.64_cc_sun_c_5.13 135 tail -15 log.make.*                    
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
&quot;../../../../../openmpi-dev-373-gdee243c/ompi/mpi/fortran/use-mpi-f08/comm_create_errhandler_f08.F90&quot;, Line = 22, Column = 
<br>
18: ERROR: C_FUNLOC function argument must be a procedure that is interoperable or a procedure pointer associated with an 
<br>
interoperable procedure.
<br>
<p>f90comp: 186 SOURCE LINES
<br>
f90comp: 1 ERRORS, 0 WARNINGS, 0 OTHER MESSAGES, 0 ANSI
<br>
make[2]: *** [comm_create_errhandler_f08.lo] Error 1
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-dev-373-gdee243c-Linux.x86_64.64_cc/ompi/mpi/fortran/use-mpi-f08'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-373-gdee243c-Linux.x86_64.64_cc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-dev-373-gdee243c-Linux.x86_64.64_cc_sun_c_5.13 136 
<br>
<p><p>I used the following configure command:
<br>
<p>../openmpi-dev-373-gdee243c/configure --prefix=/usr/local/openmpi-1.9.0_64_cc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.9.0_64_cc/lib64 \
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
&nbsp;&nbsp;--with-wrapper-cflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;--with-wrapper-cxxflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
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
<li><strong>Next message:</strong> <a href="25891.php">Emmanuel Thomé: "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>Previous message:</strong> <a href="25889.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
<!-- nextthread="start" -->
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
