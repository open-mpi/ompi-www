<?
$subject_val = "[OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 27 07:17:08 2012" -->
<!-- isoreceived="20120827111708" -->
<!-- sent="Mon, 27 Aug 2012 13:04:07 +0200 (CEST)" -->
<!-- isosent="20120827110407" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc" -->
<!-- id="201208271104.q7RB46sE011105_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-27 07:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20017.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20015.php">Siegmar Gross: "[OMPI users] Sun cc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20159.php">Jeff Squyres: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20159.php">Jeff Squyres: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20165.php">Siegmar Gross: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>we have installed the latest patches on our Solaris machines and I have
<br>
a problem compiling openmpi-1.6.1 with gcc-4.6.2. I used the following
<br>
commands.
<br>
<p>mkdir openmpi-1.6.1-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
<br>
cd openmpi-1.6.1-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
<br>
<p>../openmpi-1.6.1/configure --prefix=/usr/local/openmpi-1.6.1_64_gcc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.6.1_64_gcc/lib64 \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m64 -L/usr/local/gcc-4.6.2/lib/sparcv9&quot; \
<br>
&nbsp;&nbsp;CC=&quot;gcc&quot; CXX=&quot;g++&quot; F77=&quot;gfortran&quot; FC=&quot;gfortran&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
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
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
<p>make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
<p>&quot;log.configure.SunOS.sparc.64_gcc&quot; shows no errors.
<br>
&quot;log.make.SunOS.sparc.64_gcc&quot; breaks with the following error.
<br>
<p>...
<br>
Creating mpi/man/man3/OpenMPI.3 man page...
<br>
make[2]: Leaving directory
<br>
&nbsp;&nbsp;`/.../openmpi-1.6.1-SunOS.sparc.64_gcc/ompi'
<br>
Making all in mpi/cxx
<br>
make[2]: Entering directory
<br>
&nbsp;&nbsp;`/.../openmpi-1.6.1-SunOS.sparc.64_gcc/ompi/mpi/cxx'
<br>
&nbsp;&nbsp;CXX    mpicxx.lo
<br>
In file included from /usr/include/stdio.h:66:0,
<br>
&nbsp;&nbsp;from ../../../../openmpi-1.6.1/ompi/mpi/cxx/mpicxx.h:50,
<br>
&nbsp;&nbsp;from ../../../../openmpi-1.6.1/ompi/mpi/cxx/mpicxx.cc:22:
<br>
/usr/include/iso/stdio_iso.h:195:60: error:
<br>
&nbsp;&nbsp;redefinition of 'const char* restrict'
<br>
/usr/include/iso/stdio_iso.h:195:32: error:
<br>
&nbsp;&nbsp;'const char* restrict' previously declared here
<br>
/usr/include/iso/stdio_iso.h:197:16: error:
<br>
&nbsp;&nbsp;redefinition of 'const char* restrict'
<br>
/usr/include/iso/stdio_iso.h:196:34: error:
<br>
&nbsp;&nbsp;'const char* restrict' previously declared here
<br>
/usr/include/iso/stdio_iso.h:197:38: error:
<br>
&nbsp;&nbsp;conflicting declaration 'FILE* restrict'
<br>
/usr/include/iso/stdio_iso.h:196:34: error:
<br>
&nbsp;&nbsp;'restrict' has a previous declaration as 'const char* restrict'
<br>
/usr/include/iso/stdio_iso.h:198:48: error:
<br>
&nbsp;&nbsp;conflicting declaration 'char* restrict'
<br>
/usr/include/iso/stdio_iso.h:198:26: error:
<br>
&nbsp;&nbsp;'restrict' has a previous declaration as 'FILE* restrict'
<br>
...
<br>
<p>Many lines of similar errors.
<br>
<p>...
<br>
In file included from
<br>
&nbsp;&nbsp;../../../../openmpi-1.6.1/ompi/mpi/cxx/functions_inln.h:22:0,
<br>
&nbsp;&nbsp;from ../../../../openmpi-1.6.1/ompi/mpi/cxx/mpicxx.h:272,
<br>
&nbsp;&nbsp;from ../../../../openmpi-1.6.1/ompi/mpi/cxx/mpicxx.cc:22:
<br>
/usr/include/string.h:65:57: error:
<br>
&nbsp;&nbsp;conflicting declaration 'const char* restrict'
<br>
/usr/include/string.h:65:29: error:
<br>
&nbsp;&nbsp;'restrict' has a previous declaration as 'char* restrict'
<br>
/usr/include/string.h:66:9: error:
<br>
&nbsp;&nbsp;conflicting declaration 'char** restrict'
<br>
/usr/include/string.h:65:29: error:
<br>
&nbsp;&nbsp;'restrict' has a previous declaration as 'char* restrict'
<br>
/usr/include/string.h:71:56: error:
<br>
&nbsp;&nbsp;conflicting declaration 'const void* restrict'
<br>
/usr/include/string.h:71:28: error:
<br>
&nbsp;&nbsp;'restrict' has a previous declaration as 'void* restrict'
<br>
/usr/include/string.h:77:53: error:
<br>
&nbsp;&nbsp;conflicting declaration 'void* restrict'
<br>
/usr/include/string.h:77:31: error:
<br>
&nbsp;&nbsp;'restrict' has a previous declaration as 'const void* restrict'
<br>
/usr/include/string.h:78:56: error:
<br>
&nbsp;&nbsp;conflicting declaration 'void* restrict'
<br>
/usr/include/string.h:78:34: error:
<br>
&nbsp;&nbsp;'restrict' has a previous declaration as 'const void* restrict'
<br>
make[2]: *** [mpicxx.lo] Error 1
<br>
make[2]: Leaving directory `.../openmpi-1.6.1-SunOS.sparc.64_gcc/ompi/mpi/cxx'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `.../openmpi-1.6.1-SunOS.sparc.64_gcc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-1.6.1-SunOS.sparc.64_gcc 127 
<br>
<p><p>Has anyone else a similar problem? Is our system responsible for the
<br>
problem so that I must open a service request or is something wrong
<br>
with openmpi? Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20017.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20015.php">Siegmar Gross: "[OMPI users] Sun cc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20159.php">Jeff Squyres: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20159.php">Jeff Squyres: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20165.php">Siegmar Gross: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
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
