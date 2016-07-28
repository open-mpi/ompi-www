<?
$subject_val = "[OMPI users] problems compiling openmpi-1.6 on some platforms";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 07:30:10 2012" -->
<!-- isoreceived="20120530113010" -->
<!-- sent="Wed, 30 May 2012 13:29:31 +0200 (CEST)" -->
<!-- isosent="20120530112931" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problems compiling openmpi-1.6 on some platforms" -->
<!-- id="201205301129.q4UBTUoL014917_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problems compiling openmpi-1.6 on some platforms<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-30 07:29:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19397.php">livelfs: "[OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Previous message:</strong> <a href="19395.php">Jeff Squyres: "Re: [OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19403.php">Jeff Squyres: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Reply:</strong> <a href="19403.php">Jeff Squyres: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19446.php">Matthias Jurenz: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19447.php">Siegmar Gross: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19479.php">Siegmar Gross: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19483.php">Siegmar Gross: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to compile &quot;openmpi-1.6&quot; on &quot;Solaris 10&quot; and Linux
<br>
(openSUSE 12.1) with &quot;gcc-4.6.2&quot; and &quot;Sun C 5.12&quot; (Oracle Solaris
<br>
Studio 12.3) with mainly the following configuration for a 64- and
<br>
32-bit installation. &quot;-L/usr/local/...&quot; was necessary because &quot;gcc&quot;
<br>
didn't find its 64-bit libraries without this option.
<br>
<p>../openmpi-1.6/configure --prefix=/usr/local/openmpi-1.6_64_gcc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.6_64_gcc/lib64 \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m64 -L/usr/local/gcc-4.6.2/lib/sparcv9&quot; \
<br>
&nbsp;&nbsp;CC=&quot;gcc&quot; CPP=&quot;cpp&quot; CXX=&quot;g++&quot; CXXCPP=&quot;cpp&quot; F77=&quot;gfortran&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CXXLDFLAGS=&quot;-m64&quot; CPPFLAGS=&quot;&quot; \
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
&nbsp;&nbsp;--enable-shared --enable-orterun-prefix-by-default \
<br>
&nbsp;&nbsp;--with-threads=posix --enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;--with-hwloc=internal --with-ft=LAM --enable-sparse-groups \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
<p><p>For &quot;cc&quot; I used 'CC=&quot;cc&quot; CXX=&quot;CC&quot; F77=&quot;f77&quot; FC=&quot;f95&quot;'. With &quot;gcc&quot;
<br>
I got for example the following error so that I had to add the option
<br>
&quot;--disable-vt&quot; to the gcc-configuration.
<br>
<p><p>tail -n 20 log.make.SunOS.sparc.64_gcc
<br>
<p>make[5]: Leaving directory `.../ompi/contrib/vt/vt/rfg'
<br>
Making all in vtlib
<br>
make[5]: Entering directory `.../ompi/contrib/vt/vt/vtlib'
<br>
&nbsp;&nbsp;CC     vt_comp_gnu.lo
<br>
&nbsp;&nbsp;CC     vt_iowrap.lo
<br>
&nbsp;&nbsp;CC     vt_iowrap_helper.lo
<br>
&nbsp;&nbsp;CC     vt_libwrap.lo
<br>
../../../../../../openmpi-1.6/ompi/contrib/vt/vt/vtlib/vt_libwrap.c:
<br>
&nbsp;&nbsp;In function 'get_libc_errno_ptr':
<br>
../../../../../../openmpi-1.6/ompi/contrib/vt/vt/vtlib/vt_libwrap.c:
<br>
&nbsp;&nbsp;106:20: error: called object 'libc_errno' is not a function
<br>
make[5]: *** [vt_libwrap.lo] Error 1
<br>
...
<br>
<p><p>With these options I was able to install OpenMPI on some of my
<br>
platforms.
<br>
<p>ls -d /export2/prog/*/openmpi-1.6*
<br>
<p>/export2/prog/Linux_x86/openmpi-1.6_32_gcc
<br>
/export2/prog/Linux_x86_64/openmpi-1.6_32_gcc
<br>
/export2/prog/Linux_x86_64/openmpi-1.6_64_gcc
<br>
/export2/prog/SunOS_sparc/openmpi-1.6_32_cc
<br>
/export2/prog/SunOS_sparc/openmpi-1.6_32_gcc
<br>
/export2/prog/SunOS_sparc/openmpi-1.6_64_cc
<br>
/export2/prog/SunOS_sparc/openmpi-1.6_64_gcc
<br>
/export2/prog/SunOS_x86_64/openmpi-1.6_32_cc
<br>
/export2/prog/SunOS_x86_64/openmpi-1.6_32_gcc
<br>
/export2/prog/SunOS_x86_64/openmpi-1.6_64_cc
<br>
/export2/prog/SunOS_x86_64/openmpi-1.6_64_gcc
<br>
<p><p>Unfortunately &quot;cc&quot; on Linux creates the following error.
<br>
<p>ln -s &quot;../../../openmpi-1.6/opal/asm/generated/
<br>
&nbsp;&nbsp;atomic-ia32-linux-nongas.s&quot; atomic-asm.S
<br>
&nbsp;&nbsp;CPPAS  atomic-asm.lo
<br>
&lt;command-line&gt;:19:0: warning: &quot;__FLT_EVAL_METHOD__&quot; redefined
<br>
&nbsp;&nbsp;[enabled by default]
<br>
&lt;built-in&gt;:110:0: note: this is the location of the previous definition
<br>
cpp: fatal error: -fuse-linker-plugin, but liblto_plugin.so not found
<br>
compilation terminated.
<br>
cc: cpp failed for atomic-asm.S
<br>
make[2]: *** [atomic-asm.lo] Error 1
<br>
make[2]: Leaving directory `/.../opal/asm'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/.../opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Adding the option &quot;--with-libltdl=internal&quot; (should be the default
<br>
anyway) didn't solve the problem so that I tried to add the options
<br>
&quot;--without-libltdl --disable-dlopen&quot; to the cc-configuration on
<br>
Linux. Unfortunately I still get the above error although I started
<br>
everything in a new directory.
<br>
<p>ln -s &quot;../../../openmpi-1.6/opal/asm/generated/
<br>
&nbsp;&nbsp;atomic-ia32-linux-nongas.s&quot; atomic-asm.S
<br>
&nbsp;&nbsp;CPPAS  atomic-asm.lo
<br>
&lt;command-line&gt;:19:0: warning: &quot;__FLT_EVAL_METHOD__&quot; redefined
<br>
&nbsp;&nbsp;[enabled by default]
<br>
&lt;built-in&gt;:110:0: note: this is the location of the previous definition
<br>
cpp: fatal error: -fuse-linker-plugin, but liblto_plugin.so not found
<br>
compilation terminated.
<br>
cc: cpp failed for atomic-asm.S
<br>
make[2]: *** [atomic-asm.lo] Error 1
<br>
make[2]: Leaving directory `/.../opal/asm'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/.../opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p>linpc1 openmpi-1.6-Linux.x86.32_cc 94 more config.log 
<br>
This file contains any messages produced by compilers while
<br>
running configure, to aid debugging if configure makes a mistake.
<br>
<p>It was created by Open MPI configure 1.6, which was
<br>
generated by GNU Autoconf 2.68.  Invocation command line was
<br>
<p>&nbsp;&nbsp;$ ../openmpi-1.6/configure --prefix=/usr/local/openmpi-1.6_32_cc LDFLAGS=-m32 
<br>
CC=cc CXX=CC F77=f77 FC=f95 CFLAGS=-m32 CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32 C
<br>
XXLDFLAGS=-m32 CPPFLAGS= C_INCL_PATH= C_INCLUDE_PATH= CPLUS_INCLUDE_PATH= OBJC_I
<br>
NCLUDE_PATH= MPICHHOME= --without-udapl --without-openib --enable-mpi-f90 --with
<br>
-mpi-f90-size=small --enable-heterogeneous --enable-cxx-exceptions --enable-shar
<br>
ed --enable-orterun-prefix-by-default --with-threads=posix --enable-mpi-thread-m
<br>
ultiple --with-hwloc=internal --with-ft=LAM --enable-sparse-groups --without-lib
<br>
ltdl --disable-dlopen
<br>
<p><p><p>I have another problem on SunOS_x86 with both &quot;cc&quot; and &quot;gcc&quot; where
<br>
&quot;configure&quot; breaks with the following error.
<br>
<p>configure: creating ./config.status
<br>
config.status: creating Makefile
<br>
./config.status: line 1197:  4396 Done(141)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;eval sed \&quot;\$ac_sed_extra\&quot; &quot;$ac_file_inputs&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4397 Segmentation Fault      | $AWK -f &quot;$ac_tmp/subs.awk&quot; &gt; $ac_tmp/out
<br>
config.status: error: could not create Makefile
<br>
configure: /bin/bash '../../../openmpi-1.6/opal/libltdl/configure'
<br>
&nbsp;&nbsp;*failed* for opal/libltdl
<br>
configure: WARNING: Failed to build GNU libltdl.  This usually means
<br>
&nbsp;&nbsp;that something
<br>
configure: WARNING: is incorrectly setup with your environment.
<br>
&nbsp;&nbsp;There may be useful information in
<br>
configure: WARNING: opal/libltdl/config.log.  You can also disable GNU
<br>
&nbsp;&nbsp;libltdl, which will disable
<br>
configure: WARNING: dynamic shared object loading, by configuring with
<br>
&nbsp;&nbsp;--disable-dlopen.
<br>
configure: error: Cannot continue
<br>
<p><p>I tried once more adding the option &quot;--disable-dlopen&quot; without success.
<br>
<p>configure: creating ./config.status
<br>
config.status: creating ompi/include/ompi/version.h
<br>
./config.status: line 3410: 26746 Done
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;eval sed \&quot;\$ac_sed_extra\&quot; &quot;$ac_file_inputs&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;26747 Segmentation Fault      | $AWK -f &quot;$ac_tmp/subs.awk&quot; &gt; $ac_tmp/out
<br>
config.status: error: could not create ompi/include/ompi/version.h
<br>
<p>sunpc1 openmpi-1.6-SunOS.x86.32_gcc 83 more config.log
<br>
This file contains any messages produced by compilers while
<br>
running configure, to aid debugging if configure makes a mistake.
<br>
<p>It was created by Open MPI configure 1.6, which was
<br>
generated by GNU Autoconf 2.68.  Invocation command line was
<br>
<p>&nbsp;&nbsp;$ ../openmpi-1.6/configure --prefix=/usr/local/openmpi-1.6_32_cc LDFLAGS=-m32 
<br>
CC=cc CXX=CC F77=f77 FC=f95 CFLAGS=-m32 CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32 C
<br>
XXLDFLAGS=-m32 CPPFLAGS= C_INCL_PATH= C_INCLUDE_PATH= CPLUS_INCLUDE_PATH= OBJC_I
<br>
NCLUDE_PATH= MPICHHOME= --without-udapl --without-openib --enable-mpi-f90 --with
<br>
-mpi-f90-size=small --enable-heterogeneous --enable-cxx-exceptions --enable-shar
<br>
ed --enable-orterun-prefix-by-default --with-threads=posix --enable-mpi-thread-m
<br>
ultiple --with-hwloc=internal --with-ft=LAM --enable-sparse-groups --disable-dlo
<br>
pen
<br>
<p><p>I can create files and there is enough space available.
<br>
<p>sunpc1 fd1026 104 cd /export2/src/openmpi-1.6/
<br>
sunpc1 openmpi-1.6 105 touch x
<br>
sunpc1 openmpi-1.6 106 rm x
<br>
sunpc1 openmpi-1.6 107 df -kh /export2
<br>
Filesystem            Size  Used Avail Use% Mounted on
<br>
xxx:/export2          229G  121G  107G  54% /export2
<br>
<p><p>Do you have any suggestions how I can solve the problems on the
<br>
following platforms?
<br>
<p>Linux_x86, 32-bit, cc
<br>
Linux_x86_64, 32-bit, cc
<br>
Linux_x86_64, 64-bit, cc
<br>
SunOS_x86, 32-bit, cc
<br>
SunOS_x86, 32-bit, gcc
<br>
<p>Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19397.php">livelfs: "[OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Previous message:</strong> <a href="19395.php">Jeff Squyres: "Re: [OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19403.php">Jeff Squyres: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Reply:</strong> <a href="19403.php">Jeff Squyres: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19446.php">Matthias Jurenz: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19447.php">Siegmar Gross: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19479.php">Siegmar Gross: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19483.php">Siegmar Gross: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
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
