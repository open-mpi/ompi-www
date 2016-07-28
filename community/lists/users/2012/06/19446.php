<?
$subject_val = "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  5 04:07:54 2012" -->
<!-- isoreceived="20120605080754" -->
<!-- sent="Tue, 5 Jun 2012 10:07:46 +0200" -->
<!-- isosent="20120605080746" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems compiling openmpi-1.6 on some platforms" -->
<!-- id="201206051007.47680.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] problems compiling openmpi-1.6 on some platforms" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems compiling openmpi-1.6 on some platforms<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-05 04:07:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19447.php">Siegmar Gross: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Previous message:</strong> <a href="19445.php">Ifeanyi: "Re: [OMPI users] checkpointing/restart of hpl"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19396.php">Siegmar Gross: "[OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19447.php">Siegmar Gross: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>the patch below fixes the build issue on Solaris 10. Please apply it to Open 
<br>
MPI 1.6 as follows:
<br>
<p>$ cd openmpi-1.6
<br>
$ patch -p1 &lt;openmpi-1.6patch_vt_sol10_build_issue_fix.diff
<br>
$ make ; make install
<br>
<p>Thanks for the report!
<br>
<p>Best regards,
<br>
Matthias Jurenz
<br>
<p>----------------------------------------------
<br>
openmpi-1.6patch_vt_sol10_build_issue_fix.diff:
<br>
<p>diff -u -r -N openmpi-1.6/ompi/contrib/vt/vt/vtlib/vt_libwrap.c 
<br>
openmpi-1.6_vt_sol10_build_issue_fix/ompi/contrib/vt/vt/vtlib/vt_libwrap.c
<br>
--- openmpi-1.6/ompi/contrib/vt/vt/vtlib/vt_libwrap.c   2012-04-24 
<br>
21:18:17.000000000 +0200
<br>
+++ openmpi-1.6_vt_sol10_build_issue_fix/ompi/contrib/vt/vt/vtlib/vt_libwrap.c  
<br>
2012-06-05 10:02:36.022566303 +0200
<br>
@@ -83,7 +83,7 @@
<br>
&nbsp;&nbsp;&nbsp;if( libc_errno == NULL )
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void)dlerror();
<br>
-#ifdef HAVE_DECL___ERRNO_LOCATION
<br>
+#if defined(HAVE_DECL___ERRNO_LOCATION) &amp;&amp; HAVE_DECL___ERRNO_LOCATION
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*(void**)(&amp;libc_errno) = dlsym(libc_handle, libc_errno_sym);
<br>
&nbsp;#else /* HAVE_DECL___ERRNO_LOCATION */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc_errno = (int*)dlsym(libc_handle, libc_errno_sym);
<br>
@@ -102,7 +102,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>-#ifdef HAVE_DECL___ERRNO_LOCATION
<br>
+#if defined(HAVE_DECL___ERRNO_LOCATION) &amp;&amp; HAVE_DECL___ERRNO_LOCATION
<br>
&nbsp;&nbsp;&nbsp;return libc_errno();
<br>
&nbsp;#else /* HAVE_DECL___ERRNO_LOCATION */
<br>
&nbsp;&nbsp;&nbsp;return libc_errno;
<br>
----------------------------------------------
<br>
<p><span class="quotelev1">&gt; From: Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] problems compiling openmpi-1.6 on some platforms
</span><br>
<span class="quotelev1">&gt; Date: May 30, 2012 7:29:31 AM EDT
</span><br>
<span class="quotelev1">&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;, Open MPI 
</span><br>
Users &lt;users_at_[hidden]&gt;
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to compile &quot;openmpi-1.6&quot; on &quot;Solaris 10&quot; and Linux
</span><br>
<span class="quotelev1">&gt; (openSUSE 12.1) with &quot;gcc-4.6.2&quot; and &quot;Sun C 5.12&quot; (Oracle Solaris
</span><br>
<span class="quotelev1">&gt; Studio 12.3) with mainly the following configuration for a 64- and
</span><br>
<span class="quotelev1">&gt; 32-bit installation. &quot;-L/usr/local/...&quot; was necessary because &quot;gcc&quot;
</span><br>
<span class="quotelev1">&gt; didn't find its 64-bit libraries without this option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.6/configure --prefix=/usr/local/openmpi-1.6_64_gcc \
</span><br>
<span class="quotelev1">&gt;  --libdir=/usr/local/openmpi-1.6_64_gcc/lib64 \
</span><br>
<span class="quotelev1">&gt;  LDFLAGS=&quot;-m64 -L/usr/local/gcc-4.6.2/lib/sparcv9&quot; \
</span><br>
<span class="quotelev1">&gt;  CC=&quot;gcc&quot; CPP=&quot;cpp&quot; CXX=&quot;g++&quot; CXXCPP=&quot;cpp&quot; F77=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt;  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  CXXLDFLAGS=&quot;-m64&quot; CPPFLAGS=&quot;&quot; \
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
<span class="quotelev1">&gt;  --enable-shared --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;  --with-threads=posix --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;  --with-hwloc=internal --with-ft=LAM --enable-sparse-groups \
</span><br>
<span class="quotelev1">&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For &quot;cc&quot; I used 'CC=&quot;cc&quot; CXX=&quot;CC&quot; F77=&quot;f77&quot; FC=&quot;f95&quot;'. With &quot;gcc&quot;
</span><br>
<span class="quotelev1">&gt; I got for example the following error so that I had to add the option
</span><br>
<span class="quotelev1">&gt; &quot;--disable-vt&quot; to the gcc-configuration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tail -n 20 log.make.SunOS.sparc.64_gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory `.../ompi/contrib/vt/vt/rfg'
</span><br>
<span class="quotelev1">&gt; Making all in vtlib
</span><br>
<span class="quotelev1">&gt; make[5]: Entering directory `.../ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt;  CC     vt_comp_gnu.lo
</span><br>
<span class="quotelev1">&gt;  CC     vt_iowrap.lo
</span><br>
<span class="quotelev1">&gt;  CC     vt_iowrap_helper.lo
</span><br>
<span class="quotelev1">&gt;  CC     vt_libwrap.lo
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-1.6/ompi/contrib/vt/vt/vtlib/vt_libwrap.c:
</span><br>
<span class="quotelev1">&gt;  In function 'get_libc_errno_ptr':
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-1.6/ompi/contrib/vt/vt/vtlib/vt_libwrap.c:
</span><br>
<span class="quotelev1">&gt;  106:20: error: called object 'libc_errno' is not a function
</span><br>
<span class="quotelev1">&gt; make[5]: *** [vt_libwrap.lo] Error 1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With these options I was able to install OpenMPI on some of my
</span><br>
<span class="quotelev1">&gt; platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ls -d /export2/prog/*/openmpi-1.6*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/Linux_x86/openmpi-1.6_32_gcc
</span><br>
<span class="quotelev1">&gt; /export2/prog/Linux_x86_64/openmpi-1.6_32_gcc
</span><br>
<span class="quotelev1">&gt; /export2/prog/Linux_x86_64/openmpi-1.6_64_gcc
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_gcc
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_64_cc
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_64_gcc
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-1.6_32_cc
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-1.6_32_gcc
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-1.6_64_cc
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_x86_64/openmpi-1.6_64_gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately &quot;cc&quot; on Linux creates the following error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ln -s &quot;../../../openmpi-1.6/opal/asm/generated/
</span><br>
<span class="quotelev1">&gt;  atomic-ia32-linux-nongas.s&quot; atomic-asm.S
</span><br>
<span class="quotelev1">&gt;  CPPAS  atomic-asm.lo
</span><br>
<span class="quotelev1">&gt; &lt;command-line&gt;:19:0: warning: &quot;__FLT_EVAL_METHOD__&quot; redefined
</span><br>
<span class="quotelev1">&gt;  [enabled by default]
</span><br>
<span class="quotelev1">&gt; &lt;built-in&gt;:110:0: note: this is the location of the previous definition
</span><br>
<span class="quotelev1">&gt; cpp: fatal error: -fuse-linker-plugin, but liblto_plugin.so not found
</span><br>
<span class="quotelev1">&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt; cc: cpp failed for atomic-asm.S
</span><br>
<span class="quotelev1">&gt; make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/.../opal/asm'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/.../opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adding the option &quot;--with-libltdl=internal&quot; (should be the default
</span><br>
<span class="quotelev1">&gt; anyway) didn't solve the problem so that I tried to add the options
</span><br>
<span class="quotelev1">&gt; &quot;--without-libltdl --disable-dlopen&quot; to the cc-configuration on
</span><br>
<span class="quotelev1">&gt; Linux. Unfortunately I still get the above error although I started
</span><br>
<span class="quotelev1">&gt; everything in a new directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ln -s &quot;../../../openmpi-1.6/opal/asm/generated/
</span><br>
<span class="quotelev1">&gt;  atomic-ia32-linux-nongas.s&quot; atomic-asm.S
</span><br>
<span class="quotelev1">&gt;  CPPAS  atomic-asm.lo
</span><br>
<span class="quotelev1">&gt; &lt;command-line&gt;:19:0: warning: &quot;__FLT_EVAL_METHOD__&quot; redefined
</span><br>
<span class="quotelev1">&gt;  [enabled by default]
</span><br>
<span class="quotelev1">&gt; &lt;built-in&gt;:110:0: note: this is the location of the previous definition
</span><br>
<span class="quotelev1">&gt; cpp: fatal error: -fuse-linker-plugin, but liblto_plugin.so not found
</span><br>
<span class="quotelev1">&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt; cc: cpp failed for atomic-asm.S
</span><br>
<span class="quotelev1">&gt; make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/.../opal/asm'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/.../opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi-1.6-Linux.x86.32_cc 94 more config.log 
</span><br>
<span class="quotelev1">&gt; This file contains any messages produced by compilers while
</span><br>
<span class="quotelev1">&gt; running configure, to aid debugging if configure makes a mistake.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It was created by Open MPI configure 1.6, which was
</span><br>
<span class="quotelev1">&gt; generated by GNU Autoconf 2.68.  Invocation command line was
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  $ ../openmpi-1.6/configure --prefix=/usr/local/openmpi-1.6_32_cc LDFLAGS=-
</span><br>
m32 
<br>
<span class="quotelev1">&gt; CC=cc CXX=CC F77=f77 FC=f95 CFLAGS=-m32 CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-
</span><br>
m32 C
<br>
<span class="quotelev1">&gt; XXLDFLAGS=-m32 CPPFLAGS= C_INCL_PATH= C_INCLUDE_PATH= CPLUS_INCLUDE_PATH= 
</span><br>
OBJC_I
<br>
<span class="quotelev1">&gt; NCLUDE_PATH= MPICHHOME= --without-udapl --without-openib --enable-mpi-f90 --
</span><br>
with
<br>
<span class="quotelev1">&gt; -mpi-f90-size=small --enable-heterogeneous --enable-cxx-exceptions --enable-
</span><br>
shar
<br>
<span class="quotelev1">&gt; ed --enable-orterun-prefix-by-default --with-threads=posix --enable-mpi-
</span><br>
thread-m
<br>
<span class="quotelev1">&gt; ultiple --with-hwloc=internal --with-ft=LAM --enable-sparse-groups --
</span><br>
without-lib
<br>
<span class="quotelev1">&gt; ltdl --disable-dlopen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have another problem on SunOS_x86 with both &quot;cc&quot; and &quot;gcc&quot; where
</span><br>
<span class="quotelev1">&gt; &quot;configure&quot; breaks with the following error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure: creating ./config.status
</span><br>
<span class="quotelev1">&gt; config.status: creating Makefile
</span><br>
<span class="quotelev1">&gt; ./config.status: line 1197:  4396 Done(141)
</span><br>
<span class="quotelev1">&gt;               eval sed \&quot;\$ac_sed_extra\&quot; &quot;$ac_file_inputs&quot;
</span><br>
<span class="quotelev1">&gt;      4397 Segmentation Fault      | $AWK -f &quot;$ac_tmp/subs.awk&quot; &gt; $ac_tmp/out
</span><br>
<span class="quotelev1">&gt; config.status: error: could not create Makefile
</span><br>
<span class="quotelev1">&gt; configure: /bin/bash '../../../openmpi-1.6/opal/libltdl/configure'
</span><br>
<span class="quotelev1">&gt;  failed for opal/libltdl
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Failed to build GNU libltdl.  This usually means
</span><br>
<span class="quotelev1">&gt;  that something
</span><br>
<span class="quotelev1">&gt; configure: WARNING: is incorrectly setup with your environment.
</span><br>
<span class="quotelev1">&gt;  There may be useful information in
</span><br>
<span class="quotelev1">&gt; configure: WARNING: opal/libltdl/config.log.  You can also disable GNU
</span><br>
<span class="quotelev1">&gt;  libltdl, which will disable
</span><br>
<span class="quotelev1">&gt; configure: WARNING: dynamic shared object loading, by configuring with
</span><br>
<span class="quotelev1">&gt;  --disable-dlopen.
</span><br>
<span class="quotelev1">&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried once more adding the option &quot;--disable-dlopen&quot; without success.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure: creating ./config.status
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/include/ompi/version.h
</span><br>
<span class="quotelev1">&gt; ./config.status: line 3410: 26746 Done
</span><br>
<span class="quotelev1">&gt;                    eval sed \&quot;\$ac_sed_extra\&quot; &quot;$ac_file_inputs&quot;
</span><br>
<span class="quotelev1">&gt;     26747 Segmentation Fault      | $AWK -f &quot;$ac_tmp/subs.awk&quot; &gt; $ac_tmp/out
</span><br>
<span class="quotelev1">&gt; config.status: error: could not create ompi/include/ompi/version.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 openmpi-1.6-SunOS.x86.32_gcc 83 more config.log
</span><br>
<span class="quotelev1">&gt; This file contains any messages produced by compilers while
</span><br>
<span class="quotelev1">&gt; running configure, to aid debugging if configure makes a mistake.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It was created by Open MPI configure 1.6, which was
</span><br>
<span class="quotelev1">&gt; generated by GNU Autoconf 2.68.  Invocation command line was
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  $ ../openmpi-1.6/configure --prefix=/usr/local/openmpi-1.6_32_cc LDFLAGS=-
</span><br>
m32 
<br>
<span class="quotelev1">&gt; CC=cc CXX=CC F77=f77 FC=f95 CFLAGS=-m32 CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-
</span><br>
m32 C
<br>
<span class="quotelev1">&gt; XXLDFLAGS=-m32 CPPFLAGS= C_INCL_PATH= C_INCLUDE_PATH= CPLUS_INCLUDE_PATH= 
</span><br>
OBJC_I
<br>
<span class="quotelev1">&gt; NCLUDE_PATH= MPICHHOME= --without-udapl --without-openib --enable-mpi-f90 --
</span><br>
with
<br>
<span class="quotelev1">&gt; -mpi-f90-size=small --enable-heterogeneous --enable-cxx-exceptions --enable-
</span><br>
shar
<br>
<span class="quotelev1">&gt; ed --enable-orterun-prefix-by-default --with-threads=posix --enable-mpi-
</span><br>
thread-m
<br>
<span class="quotelev1">&gt; ultiple --with-hwloc=internal --with-ft=LAM --enable-sparse-groups --
</span><br>
disable-dlo
<br>
<span class="quotelev1">&gt; pen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can create files and there is enough space available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 fd1026 104 cd /export2/src/openmpi-1.6/
</span><br>
<span class="quotelev1">&gt; sunpc1 openmpi-1.6 105 touch x
</span><br>
<span class="quotelev1">&gt; sunpc1 openmpi-1.6 106 rm x
</span><br>
<span class="quotelev1">&gt; sunpc1 openmpi-1.6 107 df -kh /export2
</span><br>
<span class="quotelev1">&gt; Filesystem            Size  Used Avail Use% Mounted on
</span><br>
<span class="quotelev1">&gt; xxx:/export2          229G  121G  107G  54% /export2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have any suggestions how I can solve the problems on the
</span><br>
<span class="quotelev1">&gt; following platforms?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Linux_x86, 32-bit, cc
</span><br>
<span class="quotelev1">&gt; Linux_x86_64, 32-bit, cc
</span><br>
<span class="quotelev1">&gt; Linux_x86_64, 64-bit, cc
</span><br>
<span class="quotelev1">&gt; SunOS_x86, 32-bit, cc
</span><br>
<span class="quotelev1">&gt; SunOS_x86, 32-bit, gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for any help in advance.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19447.php">Siegmar Gross: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Previous message:</strong> <a href="19445.php">Ifeanyi: "Re: [OMPI users] checkpointing/restart of hpl"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19396.php">Siegmar Gross: "[OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19447.php">Siegmar Gross: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
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
