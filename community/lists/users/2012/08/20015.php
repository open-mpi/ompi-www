<?
$subject_val = "[OMPI users] Sun cc problem compiling openmpi-1.6.1 on Solaris 10 sparc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 27 07:16:26 2012" -->
<!-- isoreceived="20120827111626" -->
<!-- sent="Mon, 27 Aug 2012 13:03:07 +0200 (CEST)" -->
<!-- isosent="20120827110307" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] Sun cc problem compiling openmpi-1.6.1 on Solaris 10 sparc" -->
<!-- id="201208271103.q7RB37CM011102_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] Sun cc problem compiling openmpi-1.6.1 on Solaris 10 sparc<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-27 07:03:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20016.php">Siegmar Gross: "[OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>Previous message:</strong> <a href="20014.php">Siegmar Gross: "[OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>we have installed the latest patches on our Solaris machines and I have
<br>
a problem compiling openmpi-1.6.1 with Sun C 5.12. I used the following
<br>
commands.
<br>
<p>mkdir openmpi-1.6.1-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
<br>
cd openmpi-1.6.1-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
<br>
<p>../openmpi-1.6.1/configure --prefix=/usr/local/openmpi-1.6.1_64_cc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.6.1_64_cc/lib64 \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CC=&quot;cc&quot; CXX=&quot;CC&quot; F77=&quot;f77&quot; FC=&quot;f95&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;FCFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
<br>
&nbsp;&nbsp;CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
<br>
&nbsp;&nbsp;OBJC_INCLUDE_PATH=&quot;&quot; MPIHOME=&quot;&quot; \
<br>
&nbsp;&nbsp;--without-udapl --without-openib \
<br>
&nbsp;&nbsp;--enable-mpi-f90 --with-mpi-f90-size=small \
<br>
&nbsp;&nbsp;--enable-heterogeneous --enable-cxx-exceptions \
<br>
&nbsp;&nbsp;--enable-orterun-prefix-by-default \
<br>
&nbsp;&nbsp;--with-threads=posix --enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;--enable-opal-multi-threads \
<br>
&nbsp;&nbsp;--with-hwloc=internal --with-ft=LAM --enable-sparse-groups \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
<br>
<p>make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_cc
<br>
<p><p>&quot;log.configure.SunOS.sparc.64_cc&quot; shows no errors but the following
<br>
unexpected WARNING.
<br>
<p>configure: WARNING: stdbool.h: present but cannot be compiled
<br>
configure: WARNING: stdbool.h:     check for missing prerequisite headers?
<br>
configure: WARNING: stdbool.h: see the Autoconf documentation
<br>
configure: WARNING: stdbool.h:     section &quot;Present But Cannot Be Compiled&quot;
<br>
configure: WARNING: stdbool.h: proceeding with the compiler's result
<br>
configure: WARNING:   ## ------------------------------------------------- ##
<br>
configure: WARNING:   ## Report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ##
<br>
configure: WARNING:   ## ------------------------------------------------- ##
<br>
<p><p>&quot;log.make.SunOS.sparc.64_cc&quot; breaks with the following error.
<br>
<p>...
<br>
<p>make[9]: Entering directory 
<br>
`.../openmpi-1.6.1-SunOS.sparc.64_cc/ompi/contrib/vt/vt/extlib/otf/tools/otfaux'
<br>
&nbsp;&nbsp;CXX    otfaux.o
<br>
&quot;../../../../../../../../../openmpi-1.6.1/ompi/contrib/vt/vt/extlib/otf/tools/ot
<br>
faux/otfaux.cpp&quot;,
<br>
&nbsp;&nbsp;line 834: Error: The function &quot;rint&quot; must have a prototype.
<br>
1 Error(s) detected.
<br>
make[9]: *** [otfaux.o] Error 2
<br>
make[9]: Leaving directory 
<br>
`.../openmpi-1.6.1-SunOS.sparc.64_cc/ompi/contrib/vt/vt/extlib/otf/tools/otfaux'
<br>
make[8]: *** [all-recursive] Error 1
<br>
make[8]: Leaving directory 
<br>
`.../openmpi-1.6.1-SunOS.sparc.64_cc/ompi/contrib/vt/vt/extlib/otf/tools'
<br>
make[7]: *** [all-recursive] Error 1
<br>
make[7]: Leaving directory 
<br>
`.../openmpi-1.6.1-SunOS.sparc.64_cc/ompi/contrib/vt/vt/extlib/otf'
<br>
make[6]: *** [all] Error 2
<br>
make[6]: Leaving directory 
<br>
`.../openmpi-1.6.1-SunOS.sparc.64_cc/ompi/contrib/vt/vt/extlib/otf'
<br>
make[5]: *** [all-recursive] Error 1
<br>
make[5]: Leaving directory 
<br>
`.../openmpi-1.6.1-SunOS.sparc.64_cc/ompi/contrib/vt/vt/extlib'
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[4]: Leaving directory 
<br>
`.../openmpi-1.6.1-SunOS.sparc.64_cc/ompi/contrib/vt/vt'
<br>
make[3]: *** [all] Error 2
<br>
make[3]: Leaving directory 
<br>
`.../openmpi-1.6.1-SunOS.sparc.64_cc/ompi/contrib/vt/vt'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `.../openmpi-1.6.1-SunOS.sparc.64_cc/ompi/contrib/vt'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `.../openmpi-1.6.1-SunOS.sparc.64_cc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-1.6.1-SunOS.sparc.64_cc 134 
<br>
<p><p>In which file must I add which prototype? Thank you very much for
<br>
any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20016.php">Siegmar Gross: "[OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>Previous message:</strong> <a href="20014.php">Siegmar Gross: "[OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
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
