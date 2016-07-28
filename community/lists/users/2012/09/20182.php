<?
$subject_val = "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 10 15:13:02 2012" -->
<!-- isoreceived="20120910191302" -->
<!-- sent="Mon, 10 Sep 2012 15:13:00 -0400" -->
<!-- isosent="20120910191300" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc" -->
<!-- id="8CB56DE7-7BF2-434A-82FF-9088B8D1782D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201209091605.q89G5drR017099_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-10 15:13:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20183.php">Jeff Squyres: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20181.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>In reply to:</strong> <a href="20165.php">Siegmar Gross: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, so this is 2 errors.
<br>
<p>1. Something in the C++ bindings (which is weird because it's new; I don't think this code has changed in a long, long time).  This actually looks like a problem in your C++ compiler, however -- can you compile other C++ applications at all?
<br>
<p>2. Same issue in VT.  I'll ping the VT guys again...
<br>
<p><p><p>On Sep 9, 2012, at 12:05 PM, Siegmar Gross wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you test the 1.6.2rc tarball and see if the problem is resolved?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get no unexpected warnings from &quot;configure&quot; but still errors from &quot;make&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Creating mpi/man/man3/OpenMPI.3 man page...
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/.../openmpi-1.6.2-SunOS.sparc.64_gcc/ompi'
</span><br>
<span class="quotelev1">&gt; Making all in mpi/cxx
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/.../openmpi-1.6.2-SunOS.sparc.64_gcc/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt;  CXX    mpicxx.lo
</span><br>
<span class="quotelev1">&gt; In file included from /usr/include/stdio.h:66:0,
</span><br>
<span class="quotelev1">&gt;                 from ../../../../openmpi-1.6.2rc1/ompi/mpi/cxx/mpicxx.h:50,
</span><br>
<span class="quotelev1">&gt;                 from ../../../../openmpi-1.6.2rc1/ompi/mpi/cxx/mpicxx.cc:22:
</span><br>
<span class="quotelev1">&gt; /usr/include/iso/stdio_iso.h:195:60: error:
</span><br>
<span class="quotelev1">&gt;  redefinition of 'const char* restrict'
</span><br>
<span class="quotelev1">&gt; /usr/include/iso/stdio_iso.h:195:32: error:
</span><br>
<span class="quotelev1">&gt;  'const char* restrict' previously declared here
</span><br>
<span class="quotelev1">&gt; /usr/include/iso/stdio_iso.h:197:16: error:
</span><br>
<span class="quotelev1">&gt;  redefinition of 'const char* restrict'
</span><br>
<span class="quotelev1">&gt; /usr/include/iso/stdio_iso.h:196:34: error:
</span><br>
<span class="quotelev1">&gt;  'const char* restrict' previously declared here
</span><br>
<span class="quotelev1">&gt; /usr/include/iso/stdio_iso.h:197:38: error:
</span><br>
<span class="quotelev1">&gt;  conflicting declaration 'std::FILE* restrict'
</span><br>
<span class="quotelev1">&gt; /usr/include/iso/stdio_iso.h:196:34: error:
</span><br>
<span class="quotelev1">&gt;  'restrict' has a previous declaration as 'const char* restrict'
</span><br>
<span class="quotelev1">&gt; /usr/include/iso/stdio_iso.h:198:48: error:
</span><br>
<span class="quotelev1">&gt;  conflicting declaration 'char* restrict'
</span><br>
<span class="quotelev1">&gt; /usr/include/iso/stdio_iso.h:198:26: error:
</span><br>
<span class="quotelev1">&gt;  'restrict' has a previous declaration as 'std::FILE* restrict'
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; /usr/include/iso/stdio_c99.h:70:64: error:
</span><br>
<span class="quotelev1">&gt;  conflicting declaration 'const char* restrict'
</span><br>
<span class="quotelev1">&gt; /usr/include/iso/stdio_c99.h:70:28: error:
</span><br>
<span class="quotelev1">&gt;  'restrict' has a previous declaration as 'char* restrict'
</span><br>
<span class="quotelev1">&gt; In file included from /usr/include/iso/wchar_iso.h:26:0,
</span><br>
<span class="quotelev1">&gt;                 from /usr/include/wchar.h:13,
</span><br>
<span class="quotelev1">&gt;                 from /usr/local/gcc-4.7.1/include/c++/4.7.1/cwchar:46,
</span><br>
<span class="quotelev1">&gt;                 from /usr/local/gcc-4.7.1/include/c++/4.7.1/bits/postypes.h:42,
</span><br>
<span class="quotelev1">&gt;                 from /usr/local/gcc-4.7.1/include/c++/4.7.1/iosfwd:42,
</span><br>
<span class="quotelev1">&gt;                 from /usr/local/gcc-4.7.1/include/c++/4.7.1/ios:39,
</span><br>
<span class="quotelev1">&gt;                 from /usr/local/gcc-4.7.1/include/c++/4.7.1/ostream:40,
</span><br>
<span class="quotelev1">&gt;                 from /usr/local/gcc-4.7.1/include/c++/4.7.1/iostream:40,
</span><br>
<span class="quotelev1">&gt;                 from ../../../../openmpi-1.6.2rc1/ompi/mpi/cxx/mpicxx.h:53,
</span><br>
<span class="quotelev1">&gt;                 from ../../../../openmpi-1.6.2rc1/ompi/mpi/cxx/mpicxx.cc:22:
</span><br>
<span class="quotelev1">&gt; /usr/include/iso/time_iso.h:92:66: error:
</span><br>
<span class="quotelev1">&gt;  conflicting declaration 'const char* restrict'
</span><br>
<span class="quotelev1">&gt; /usr/include/iso/time_iso.h:92:30: error:
</span><br>
<span class="quotelev1">&gt;  'restrict' has a previous declaration as 'char* restrict'
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; In file included from ../../../../openmpi-1.6.2rc1/ompi/mpi/cxx/functions_inln.h:22:0,
</span><br>
<span class="quotelev1">&gt;                 from ../../../../openmpi-1.6.2rc1/ompi/mpi/cxx/mpicxx.h:272,
</span><br>
<span class="quotelev1">&gt;                 from ../../../../openmpi-1.6.2rc1/ompi/mpi/cxx/mpicxx.cc:22:
</span><br>
<span class="quotelev1">&gt; /usr/include/string.h:65:57: error: conflicting declaration 'const char* restrict'
</span><br>
<span class="quotelev1">&gt; /usr/include/string.h:65:29: error:
</span><br>
<span class="quotelev1">&gt;  'restrict' has a previous declaration as 'char* restrict'
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; In file included from /usr/include/stdlib.h:18:0,
</span><br>
<span class="quotelev1">&gt;                 from ../../../../openmpi-1.6.2rc1/opal/class/opal_object.h:122,
</span><br>
<span class="quotelev1">&gt;                 from ../../../../openmpi-1.6.2rc1/ompi/errhandler/errhandler.h:30,
</span><br>
<span class="quotelev1">&gt;                 from ../../../../openmpi-1.6.2rc1/ompi/mpi/cxx/mpicxx.cc:37:
</span><br>
<span class="quotelev1">&gt; /usr/include/iso/stdlib_iso.h:113:14: error:
</span><br>
<span class="quotelev1">&gt;  previous declaration of 'void* std::bsearch(const void*, const void*, ulong_t,
</span><br>
<span class="quotelev1">&gt;  ulong_t, int (*)(const void*, const void*))' with 'C' linkage
</span><br>
<span class="quotelev1">&gt; /usr/include/iso/stdlib_iso.h:118:38: error:
</span><br>
<span class="quotelev1">&gt;  conflicts with new declaration with 'C++' linkage
</span><br>
<span class="quotelev1">&gt; /usr/include/iso/stdlib_iso.h:134:13: error: previous declaration of
</span><br>
<span class="quotelev1">&gt;  'void std::qsort(void*, ulong_t, ulong_t, int (*)(const void*, const void*))'
</span><br>
<span class="quotelev1">&gt;   with 'C' linkage
</span><br>
<span class="quotelev1">&gt; /usr/include/iso/stdlib_iso.h:137:72: error: conflicts with new declaration
</span><br>
<span class="quotelev1">&gt;  with 'C++' linkage
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mpicxx.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/.../openmpi-1.6.2-SunOS.sparc.64_gcc/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/.../openmpi-1.6.2-SunOS.sparc.64_gcc/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.6.2-SunOS.sparc.64_gcc 166 gcc --version
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.7.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also still get the error with the C/C++ compiler from Oracle Solaris Studio.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  CC     libotfaux_la-OTFAUX_State.lo
</span><br>
<span class="quotelev1">&gt;  CCLD   libotfaux.la
</span><br>
<span class="quotelev1">&gt; make[8]: Leaving directory `/.../openmpi-1.6.2-SunOS.sparc.64_cc/ompi/contrib/vt/vt/extlib/otf/otfauxlib'
</span><br>
<span class="quotelev1">&gt; Making all in tools
</span><br>
<span class="quotelev1">&gt; make[8]: Entering directory `/.../openmpi-1.6.2-SunOS.sparc.64_cc/ompi/contrib/vt/vt/extlib/otf/tools'
</span><br>
<span class="quotelev1">&gt; Making all in otfaux
</span><br>
<span class="quotelev1">&gt; make[9]: Entering directory `/.../openmpi-1.6.2-SunOS.sparc.64_cc/ompi/contrib/vt/vt/extlib/otf/tools/otfaux'
</span><br>
<span class="quotelev1">&gt;  CXX    otfaux.o
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../../../../../openmpi-1.6.2rc1/ompi/contrib/vt/vt/extlib/otf/tools/otfaux/otfaux.cpp&quot;,
</span><br>
<span class="quotelev1">&gt;  line 834: Error: The function &quot;rint&quot; must have a prototype.
</span><br>
<span class="quotelev1">&gt; 1 Error(s) detected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You include &quot;cmath.h&quot; which I don't have.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.6.2-SunOS.sparc.64_cc 171 find /usr/include -name cmath.h
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.6.2-SunOS.sparc.64_cc 172 find /usr/local/gcc-4.7.1/ -name cmath.h
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.6.2-SunOS.sparc.64_cc 173 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The prototype is in math.h. When I add &quot;#include &lt;math.h&gt;&quot; the error disappears,
</span><br>
<span class="quotelev1">&gt; although I'm not sure if it is allowed to add this file in a C++ file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following warning from &quot;configure&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking stdbool.h presence... yes
</span><br>
<span class="quotelev1">&gt; configure: WARNING: stdbool.h: present but cannot be compiled
</span><br>
<span class="quotelev1">&gt; configure: WARNING: stdbool.h:     check for missing prerequisite headers?
</span><br>
<span class="quotelev1">&gt; configure: WARNING: stdbool.h: see the Autoconf documentation
</span><br>
<span class="quotelev1">&gt; configure: WARNING: stdbool.h:     section &quot;Present But Cannot Be Compiled&quot;
</span><br>
<span class="quotelev1">&gt; configure: WARNING: stdbool.h: proceeding with the compiler's result
</span><br>
<span class="quotelev1">&gt; configure: WARNING:     ## ------------------------------------------------------ ##
</span><br>
<span class="quotelev1">&gt; configure: WARNING:     ## Report this to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ##
</span><br>
<span class="quotelev1">&gt; configure: WARNING:     ## ------------------------------------------------------ ##
</span><br>
<span class="quotelev1">&gt; checking for stdbool.h... no
</span><br>
<span class="quotelev1">&gt; checking if &lt;stdbool.h&gt; works... no (don't have &lt;stdbool.h&gt;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I try to build openmpi-1.6.2 with &quot;cc&quot; on my other architectures on Monday or
</span><br>
<span class="quotelev1">&gt; Tuesday.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 27, 2012, at 7:04 AM, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we have installed the latest patches on our Solaris machines and I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a problem compiling openmpi-1.6.1 with gcc-4.6.2. I used the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commands.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mkdir openmpi-1.6.1-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd openmpi-1.6.1-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../openmpi-1.6.1/configure --prefix=/usr/local/openmpi-1.6.1_64_gcc \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --libdir=/usr/local/openmpi-1.6.1_64_gcc/lib64 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LDFLAGS=&quot;-m64 -L/usr/local/gcc-4.6.2/lib/sparcv9&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC=&quot;gcc&quot; CXX=&quot;g++&quot; F77=&quot;gfortran&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OBJC_INCLUDE_PATH=&quot;&quot; MPIHOME=&quot;&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --without-udapl --without-openib \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mpi-f90 --with-mpi-f90-size=small \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-heterogeneous --enable-cxx-exceptions \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-threads=posix --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-opal-multi-threads \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-hwloc=internal --with-ft=LAM --enable-sparse-groups \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;log.configure.SunOS.sparc.64_gcc&quot; shows no errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;log.make.SunOS.sparc.64_gcc&quot; breaks with the following error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Creating mpi/man/man3/OpenMPI.3 man page...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/.../openmpi-1.6.1-SunOS.sparc.64_gcc/ompi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in mpi/cxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/.../openmpi-1.6.1-SunOS.sparc.64_gcc/ompi/mpi/cxx'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CXX    mpicxx.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In file included from /usr/include/stdio.h:66:0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from ../../../../openmpi-1.6.1/ompi/mpi/cxx/mpicxx.h:50,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from ../../../../openmpi-1.6.1/ompi/mpi/cxx/mpicxx.cc:22:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/iso/stdio_iso.h:195:60: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; redefinition of 'const char* restrict'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/iso/stdio_iso.h:195:32: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'const char* restrict' previously declared here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/iso/stdio_iso.h:197:16: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; redefinition of 'const char* restrict'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/iso/stdio_iso.h:196:34: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'const char* restrict' previously declared here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/iso/stdio_iso.h:197:38: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conflicting declaration 'FILE* restrict'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/iso/stdio_iso.h:196:34: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'restrict' has a previous declaration as 'const char* restrict'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/iso/stdio_iso.h:198:48: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conflicting declaration 'char* restrict'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/iso/stdio_iso.h:198:26: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'restrict' has a previous declaration as 'FILE* restrict'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Many lines of similar errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In file included from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../openmpi-1.6.1/ompi/mpi/cxx/functions_inln.h:22:0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from ../../../../openmpi-1.6.1/ompi/mpi/cxx/mpicxx.h:272,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from ../../../../openmpi-1.6.1/ompi/mpi/cxx/mpicxx.cc:22:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/string.h:65:57: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conflicting declaration 'const char* restrict'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/string.h:65:29: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'restrict' has a previous declaration as 'char* restrict'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/string.h:66:9: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conflicting declaration 'char** restrict'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/string.h:65:29: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'restrict' has a previous declaration as 'char* restrict'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/string.h:71:56: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conflicting declaration 'const void* restrict'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/string.h:71:28: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'restrict' has a previous declaration as 'void* restrict'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/string.h:77:53: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conflicting declaration 'void* restrict'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/string.h:77:31: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'restrict' has a previous declaration as 'const void* restrict'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/string.h:78:56: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conflicting declaration 'void* restrict'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/string.h:78:34: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'restrict' has a previous declaration as 'const void* restrict'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [mpicxx.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `.../openmpi-1.6.1-SunOS.sparc.64_gcc/ompi/mpi/cxx'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `.../openmpi-1.6.1-SunOS.sparc.64_gcc/ompi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr openmpi-1.6.1-SunOS.sparc.64_gcc 127 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anyone else a similar problem? Is our system responsible for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem so that I must open a service request or is something wrong
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with openmpi? Thank you very much for any help in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20183.php">Jeff Squyres: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20181.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>In reply to:</strong> <a href="20165.php">Siegmar Gross: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
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
