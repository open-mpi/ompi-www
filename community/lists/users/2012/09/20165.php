<?
$subject_val = "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  9 12:19:01 2012" -->
<!-- isoreceived="20120909161901" -->
<!-- sent="Sun, 9 Sep 2012 18:05:39 +0200 (CEST)" -->
<!-- isosent="20120909160539" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc" -->
<!-- id="201209091605.q89G5drR017099_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc" -->
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
<strong>Subject:</strong> Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-09 12:05:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20166.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20164.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20016.php">Siegmar Gross: "[OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20182.php">Jeff Squyres: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>Reply:</strong> <a href="20182.php">Jeff Squyres: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; Can you test the 1.6.2rc tarball and see if the problem is resolved?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<p><p>I get no unexpected warnings from &quot;configure&quot; but still errors from &quot;make&quot;.
<br>
<p>...
<br>
Creating mpi/man/man3/OpenMPI.3 man page...
<br>
make[2]: Leaving directory `/.../openmpi-1.6.2-SunOS.sparc.64_gcc/ompi'
<br>
Making all in mpi/cxx
<br>
make[2]: Entering directory `/.../openmpi-1.6.2-SunOS.sparc.64_gcc/ompi/mpi/cxx'
<br>
&nbsp;&nbsp;CXX    mpicxx.lo
<br>
In file included from /usr/include/stdio.h:66:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../openmpi-1.6.2rc1/ompi/mpi/cxx/mpicxx.h:50,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../openmpi-1.6.2rc1/ompi/mpi/cxx/mpicxx.cc:22:
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
&nbsp;&nbsp;conflicting declaration 'std::FILE* restrict'
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
&nbsp;&nbsp;'restrict' has a previous declaration as 'std::FILE* restrict'
<br>
...
<br>
/usr/include/iso/stdio_c99.h:70:64: error:
<br>
&nbsp;&nbsp;conflicting declaration 'const char* restrict'
<br>
/usr/include/iso/stdio_c99.h:70:28: error:
<br>
&nbsp;&nbsp;'restrict' has a previous declaration as 'char* restrict'
<br>
In file included from /usr/include/iso/wchar_iso.h:26:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/include/wchar.h:13,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/gcc-4.7.1/include/c++/4.7.1/cwchar:46,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/gcc-4.7.1/include/c++/4.7.1/bits/postypes.h:42,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/gcc-4.7.1/include/c++/4.7.1/iosfwd:42,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/gcc-4.7.1/include/c++/4.7.1/ios:39,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/gcc-4.7.1/include/c++/4.7.1/ostream:40,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/gcc-4.7.1/include/c++/4.7.1/iostream:40,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../openmpi-1.6.2rc1/ompi/mpi/cxx/mpicxx.h:53,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../openmpi-1.6.2rc1/ompi/mpi/cxx/mpicxx.cc:22:
<br>
/usr/include/iso/time_iso.h:92:66: error:
<br>
&nbsp;&nbsp;conflicting declaration 'const char* restrict'
<br>
/usr/include/iso/time_iso.h:92:30: error:
<br>
&nbsp;&nbsp;'restrict' has a previous declaration as 'char* restrict'
<br>
...
<br>
In file included from ../../../../openmpi-1.6.2rc1/ompi/mpi/cxx/functions_inln.h:22:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../openmpi-1.6.2rc1/ompi/mpi/cxx/mpicxx.h:272,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../openmpi-1.6.2rc1/ompi/mpi/cxx/mpicxx.cc:22:
<br>
/usr/include/string.h:65:57: error: conflicting declaration 'const char* restrict'
<br>
/usr/include/string.h:65:29: error:
<br>
&nbsp;&nbsp;'restrict' has a previous declaration as 'char* restrict'
<br>
...
<br>
In file included from /usr/include/stdlib.h:18:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../openmpi-1.6.2rc1/opal/class/opal_object.h:122,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../openmpi-1.6.2rc1/ompi/errhandler/errhandler.h:30,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../openmpi-1.6.2rc1/ompi/mpi/cxx/mpicxx.cc:37:
<br>
/usr/include/iso/stdlib_iso.h:113:14: error:
<br>
&nbsp;&nbsp;previous declaration of 'void* std::bsearch(const void*, const void*, ulong_t,
<br>
&nbsp;&nbsp;ulong_t, int (*)(const void*, const void*))' with 'C' linkage
<br>
/usr/include/iso/stdlib_iso.h:118:38: error:
<br>
&nbsp;&nbsp;conflicts with new declaration with 'C++' linkage
<br>
/usr/include/iso/stdlib_iso.h:134:13: error: previous declaration of
<br>
&nbsp;&nbsp;'void std::qsort(void*, ulong_t, ulong_t, int (*)(const void*, const void*))'
<br>
&nbsp;&nbsp;&nbsp;with 'C' linkage
<br>
/usr/include/iso/stdlib_iso.h:137:72: error: conflicts with new declaration
<br>
&nbsp;&nbsp;with 'C++' linkage
<br>
make[2]: *** [mpicxx.lo] Error 1
<br>
make[2]: Leaving directory `/.../openmpi-1.6.2-SunOS.sparc.64_gcc/ompi/mpi/cxx'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/.../openmpi-1.6.2-SunOS.sparc.64_gcc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>tyr openmpi-1.6.2-SunOS.sparc.64_gcc 166 gcc --version
<br>
gcc (GCC) 4.7.1
<br>
<p><p><p>I also still get the error with the C/C++ compiler from Oracle Solaris Studio.
<br>
<p>...
<br>
&nbsp;&nbsp;CC     libotfaux_la-OTFAUX_State.lo
<br>
&nbsp;&nbsp;CCLD   libotfaux.la
<br>
make[8]: Leaving directory `/.../openmpi-1.6.2-SunOS.sparc.64_cc/ompi/contrib/vt/vt/extlib/otf/otfauxlib'
<br>
Making all in tools
<br>
make[8]: Entering directory `/.../openmpi-1.6.2-SunOS.sparc.64_cc/ompi/contrib/vt/vt/extlib/otf/tools'
<br>
Making all in otfaux
<br>
make[9]: Entering directory `/.../openmpi-1.6.2-SunOS.sparc.64_cc/ompi/contrib/vt/vt/extlib/otf/tools/otfaux'
<br>
&nbsp;&nbsp;CXX    otfaux.o
<br>
&quot;../../../../../../../../../openmpi-1.6.2rc1/ompi/contrib/vt/vt/extlib/otf/tools/otfaux/otfaux.cpp&quot;,
<br>
&nbsp;&nbsp;line 834: Error: The function &quot;rint&quot; must have a prototype.
<br>
1 Error(s) detected.
<br>
<p><p>You include &quot;cmath.h&quot; which I don't have.
<br>
<p>tyr openmpi-1.6.2-SunOS.sparc.64_cc 171 find /usr/include -name cmath.h
<br>
tyr openmpi-1.6.2-SunOS.sparc.64_cc 172 find /usr/local/gcc-4.7.1/ -name cmath.h
<br>
tyr openmpi-1.6.2-SunOS.sparc.64_cc 173 
<br>
<p>The prototype is in math.h. When I add &quot;#include &lt;math.h&gt;&quot; the error disappears,
<br>
although I'm not sure if it is allowed to add this file in a C++ file.
<br>
<p>I get the following warning from &quot;configure&quot;.
<br>
<p>checking stdbool.h presence... yes
<br>
configure: WARNING: stdbool.h: present but cannot be compiled
<br>
configure: WARNING: stdbool.h:     check for missing prerequisite headers?
<br>
configure: WARNING: stdbool.h: see the Autoconf documentation
<br>
configure: WARNING: stdbool.h:     section &quot;Present But Cannot Be Compiled&quot;
<br>
configure: WARNING: stdbool.h: proceeding with the compiler's result
<br>
configure: WARNING:     ## ------------------------------------------------------ ##
<br>
configure: WARNING:     ## Report this to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ##
<br>
configure: WARNING:     ## ------------------------------------------------------ ##
<br>
checking for stdbool.h... no
<br>
checking if &lt;stdbool.h&gt; works... no (don't have &lt;stdbool.h&gt;)
<br>
<p>I try to build openmpi-1.6.2 with &quot;cc&quot; on my other architectures on Monday or
<br>
Tuesday.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><p><span class="quotelev1">&gt; On Aug 27, 2012, at 7:04 AM, Siegmar Gross wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; we have installed the latest patches on our Solaris machines and I have
</span><br>
<span class="quotelev2">&gt; &gt; a problem compiling openmpi-1.6.1 with gcc-4.6.2. I used the following
</span><br>
<span class="quotelev2">&gt; &gt; commands.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mkdir openmpi-1.6.1-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev2">&gt; &gt; cd openmpi-1.6.1-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ../openmpi-1.6.1/configure --prefix=/usr/local/openmpi-1.6.1_64_gcc \
</span><br>
<span class="quotelev2">&gt; &gt;  --libdir=/usr/local/openmpi-1.6.1_64_gcc/lib64 \
</span><br>
<span class="quotelev2">&gt; &gt;  LDFLAGS=&quot;-m64 -L/usr/local/gcc-4.6.2/lib/sparcv9&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  CC=&quot;gcc&quot; CXX=&quot;g++&quot; F77=&quot;gfortran&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  OBJC_INCLUDE_PATH=&quot;&quot; MPIHOME=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  --without-udapl --without-openib \
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-mpi-f90 --with-mpi-f90-size=small \
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-heterogeneous --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev2">&gt; &gt;  --with-threads=posix --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-opal-multi-threads \
</span><br>
<span class="quotelev2">&gt; &gt;  --with-hwloc=internal --with-ft=LAM --enable-sparse-groups \
</span><br>
<span class="quotelev2">&gt; &gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;log.configure.SunOS.sparc.64_gcc&quot; shows no errors.
</span><br>
<span class="quotelev2">&gt; &gt; &quot;log.make.SunOS.sparc.64_gcc&quot; breaks with the following error.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; Creating mpi/man/man3/OpenMPI.3 man page...
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt; &gt;  `/.../openmpi-1.6.1-SunOS.sparc.64_gcc/ompi'
</span><br>
<span class="quotelev2">&gt; &gt; Making all in mpi/cxx
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt; &gt;  `/.../openmpi-1.6.1-SunOS.sparc.64_gcc/ompi/mpi/cxx'
</span><br>
<span class="quotelev2">&gt; &gt;  CXX    mpicxx.lo
</span><br>
<span class="quotelev2">&gt; &gt; In file included from /usr/include/stdio.h:66:0,
</span><br>
<span class="quotelev2">&gt; &gt;  from ../../../../openmpi-1.6.1/ompi/mpi/cxx/mpicxx.h:50,
</span><br>
<span class="quotelev2">&gt; &gt;  from ../../../../openmpi-1.6.1/ompi/mpi/cxx/mpicxx.cc:22:
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/iso/stdio_iso.h:195:60: error:
</span><br>
<span class="quotelev2">&gt; &gt;  redefinition of 'const char* restrict'
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/iso/stdio_iso.h:195:32: error:
</span><br>
<span class="quotelev2">&gt; &gt;  'const char* restrict' previously declared here
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/iso/stdio_iso.h:197:16: error:
</span><br>
<span class="quotelev2">&gt; &gt;  redefinition of 'const char* restrict'
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/iso/stdio_iso.h:196:34: error:
</span><br>
<span class="quotelev2">&gt; &gt;  'const char* restrict' previously declared here
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/iso/stdio_iso.h:197:38: error:
</span><br>
<span class="quotelev2">&gt; &gt;  conflicting declaration 'FILE* restrict'
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/iso/stdio_iso.h:196:34: error:
</span><br>
<span class="quotelev2">&gt; &gt;  'restrict' has a previous declaration as 'const char* restrict'
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/iso/stdio_iso.h:198:48: error:
</span><br>
<span class="quotelev2">&gt; &gt;  conflicting declaration 'char* restrict'
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/iso/stdio_iso.h:198:26: error:
</span><br>
<span class="quotelev2">&gt; &gt;  'restrict' has a previous declaration as 'FILE* restrict'
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Many lines of similar errors.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; In file included from
</span><br>
<span class="quotelev2">&gt; &gt;  ../../../../openmpi-1.6.1/ompi/mpi/cxx/functions_inln.h:22:0,
</span><br>
<span class="quotelev2">&gt; &gt;  from ../../../../openmpi-1.6.1/ompi/mpi/cxx/mpicxx.h:272,
</span><br>
<span class="quotelev2">&gt; &gt;  from ../../../../openmpi-1.6.1/ompi/mpi/cxx/mpicxx.cc:22:
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/string.h:65:57: error:
</span><br>
<span class="quotelev2">&gt; &gt;  conflicting declaration 'const char* restrict'
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/string.h:65:29: error:
</span><br>
<span class="quotelev2">&gt; &gt;  'restrict' has a previous declaration as 'char* restrict'
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/string.h:66:9: error:
</span><br>
<span class="quotelev2">&gt; &gt;  conflicting declaration 'char** restrict'
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/string.h:65:29: error:
</span><br>
<span class="quotelev2">&gt; &gt;  'restrict' has a previous declaration as 'char* restrict'
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/string.h:71:56: error:
</span><br>
<span class="quotelev2">&gt; &gt;  conflicting declaration 'const void* restrict'
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/string.h:71:28: error:
</span><br>
<span class="quotelev2">&gt; &gt;  'restrict' has a previous declaration as 'void* restrict'
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/string.h:77:53: error:
</span><br>
<span class="quotelev2">&gt; &gt;  conflicting declaration 'void* restrict'
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/string.h:77:31: error:
</span><br>
<span class="quotelev2">&gt; &gt;  'restrict' has a previous declaration as 'const void* restrict'
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/string.h:78:56: error:
</span><br>
<span class="quotelev2">&gt; &gt;  conflicting declaration 'void* restrict'
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/string.h:78:34: error:
</span><br>
<span class="quotelev2">&gt; &gt;  'restrict' has a previous declaration as 'const void* restrict'
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [mpicxx.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory `.../openmpi-1.6.1-SunOS.sparc.64_gcc/ompi/mpi/cxx'
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory `.../openmpi-1.6.1-SunOS.sparc.64_gcc/ompi'
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi-1.6.1-SunOS.sparc.64_gcc 127 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Has anyone else a similar problem? Is our system responsible for the
</span><br>
<span class="quotelev2">&gt; &gt; problem so that I must open a service request or is something wrong
</span><br>
<span class="quotelev2">&gt; &gt; with openmpi? Thank you very much for any help in advance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20166.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20164.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20016.php">Siegmar Gross: "[OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20182.php">Jeff Squyres: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>Reply:</strong> <a href="20182.php">Jeff Squyres: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
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
