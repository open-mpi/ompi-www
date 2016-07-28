<?
$subject_val = "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  8 15:16:45 2012" -->
<!-- isoreceived="20120908191645" -->
<!-- sent="Sat, 8 Sep 2012 15:16:40 -0400" -->
<!-- isosent="20120908191640" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc" -->
<!-- id="58AFC7D0-EE80-4EA2-887D-A2360C9AEE18_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201208271104.q7RB46sE011105_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2012-09-08 15:16:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20160.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<li><strong>Previous message:</strong> <a href="20158.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20016.php">Siegmar Gross: "[OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20165.php">Siegmar Gross: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar --
<br>
<p>Can you test the 1.6.2rc tarball and see if the problem is resolved?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
<br>
<p><p><p>On Aug 27, 2012, at 7:04 AM, Siegmar Gross wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we have installed the latest patches on our Solaris machines and I have
</span><br>
<span class="quotelev1">&gt; a problem compiling openmpi-1.6.1 with gcc-4.6.2. I used the following
</span><br>
<span class="quotelev1">&gt; commands.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mkdir openmpi-1.6.1-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev1">&gt; cd openmpi-1.6.1-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.6.1/configure --prefix=/usr/local/openmpi-1.6.1_64_gcc \
</span><br>
<span class="quotelev1">&gt;  --libdir=/usr/local/openmpi-1.6.1_64_gcc/lib64 \
</span><br>
<span class="quotelev1">&gt;  LDFLAGS=&quot;-m64 -L/usr/local/gcc-4.6.2/lib/sparcv9&quot; \
</span><br>
<span class="quotelev1">&gt;  CC=&quot;gcc&quot; CXX=&quot;g++&quot; F77=&quot;gfortran&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt;  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;  C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;  OBJC_INCLUDE_PATH=&quot;&quot; MPIHOME=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;  --without-udapl --without-openib \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-f90 --with-mpi-f90-size=small \
</span><br>
<span class="quotelev1">&gt;  --enable-heterogeneous --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;  --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;  --with-threads=posix --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;  --enable-opal-multi-threads \
</span><br>
<span class="quotelev1">&gt;  --with-hwloc=internal --with-ft=LAM --enable-sparse-groups \
</span><br>
<span class="quotelev1">&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;log.configure.SunOS.sparc.64_gcc&quot; shows no errors.
</span><br>
<span class="quotelev1">&gt; &quot;log.make.SunOS.sparc.64_gcc&quot; breaks with the following error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Creating mpi/man/man3/OpenMPI.3 man page...
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;  `/.../openmpi-1.6.1-SunOS.sparc.64_gcc/ompi'
</span><br>
<span class="quotelev1">&gt; Making all in mpi/cxx
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt;  `/.../openmpi-1.6.1-SunOS.sparc.64_gcc/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt;  CXX    mpicxx.lo
</span><br>
<span class="quotelev1">&gt; In file included from /usr/include/stdio.h:66:0,
</span><br>
<span class="quotelev1">&gt;  from ../../../../openmpi-1.6.1/ompi/mpi/cxx/mpicxx.h:50,
</span><br>
<span class="quotelev1">&gt;  from ../../../../openmpi-1.6.1/ompi/mpi/cxx/mpicxx.cc:22:
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
<span class="quotelev1">&gt;  conflicting declaration 'FILE* restrict'
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
<span class="quotelev1">&gt;  'restrict' has a previous declaration as 'FILE* restrict'
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many lines of similar errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt;  ../../../../openmpi-1.6.1/ompi/mpi/cxx/functions_inln.h:22:0,
</span><br>
<span class="quotelev1">&gt;  from ../../../../openmpi-1.6.1/ompi/mpi/cxx/mpicxx.h:272,
</span><br>
<span class="quotelev1">&gt;  from ../../../../openmpi-1.6.1/ompi/mpi/cxx/mpicxx.cc:22:
</span><br>
<span class="quotelev1">&gt; /usr/include/string.h:65:57: error:
</span><br>
<span class="quotelev1">&gt;  conflicting declaration 'const char* restrict'
</span><br>
<span class="quotelev1">&gt; /usr/include/string.h:65:29: error:
</span><br>
<span class="quotelev1">&gt;  'restrict' has a previous declaration as 'char* restrict'
</span><br>
<span class="quotelev1">&gt; /usr/include/string.h:66:9: error:
</span><br>
<span class="quotelev1">&gt;  conflicting declaration 'char** restrict'
</span><br>
<span class="quotelev1">&gt; /usr/include/string.h:65:29: error:
</span><br>
<span class="quotelev1">&gt;  'restrict' has a previous declaration as 'char* restrict'
</span><br>
<span class="quotelev1">&gt; /usr/include/string.h:71:56: error:
</span><br>
<span class="quotelev1">&gt;  conflicting declaration 'const void* restrict'
</span><br>
<span class="quotelev1">&gt; /usr/include/string.h:71:28: error:
</span><br>
<span class="quotelev1">&gt;  'restrict' has a previous declaration as 'void* restrict'
</span><br>
<span class="quotelev1">&gt; /usr/include/string.h:77:53: error:
</span><br>
<span class="quotelev1">&gt;  conflicting declaration 'void* restrict'
</span><br>
<span class="quotelev1">&gt; /usr/include/string.h:77:31: error:
</span><br>
<span class="quotelev1">&gt;  'restrict' has a previous declaration as 'const void* restrict'
</span><br>
<span class="quotelev1">&gt; /usr/include/string.h:78:56: error:
</span><br>
<span class="quotelev1">&gt;  conflicting declaration 'void* restrict'
</span><br>
<span class="quotelev1">&gt; /usr/include/string.h:78:34: error:
</span><br>
<span class="quotelev1">&gt;  'restrict' has a previous declaration as 'const void* restrict'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mpicxx.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `.../openmpi-1.6.1-SunOS.sparc.64_gcc/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `.../openmpi-1.6.1-SunOS.sparc.64_gcc/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.6.1-SunOS.sparc.64_gcc 127 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anyone else a similar problem? Is our system responsible for the
</span><br>
<span class="quotelev1">&gt; problem so that I must open a service request or is something wrong
</span><br>
<span class="quotelev1">&gt; with openmpi? Thank you very much for any help in advance.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="20160.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<li><strong>Previous message:</strong> <a href="20158.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20016.php">Siegmar Gross: "[OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20165.php">Siegmar Gross: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
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
