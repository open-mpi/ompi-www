<?
$subject_val = "[OMPI users] cannot build Open MPI 1.5 on Linux x86_64 with Oracle/Sun C 5.11";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 09:54:51 2010" -->
<!-- isoreceived="20101129145451" -->
<!-- sent="Mon, 29 Nov 2010 15:46:48 +0100 (CET)" -->
<!-- isosent="20101129144648" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] cannot build Open MPI 1.5 on Linux x86_64 with Oracle/Sun C 5.11" -->
<!-- id="201011291446.oATEkmke018568_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] cannot build Open MPI 1.5 on Linux x86_64 with Oracle/Sun C 5.11<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 09:46:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14893.php">Terry Dontje: "Re: [OMPI users] cannot build Open MPI 1.5 on Linux x86_64 with Oracle/Sun C 5.11"</a>
<li><strong>Previous message:</strong> <a href="14891.php">Tushar Andriyas: "Re: [OMPI users] PROBLEM WITH MPIRUN"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14893.php">Terry Dontje: "Re: [OMPI users] cannot build Open MPI 1.5 on Linux x86_64 with Oracle/Sun C 5.11"</a>
<li><strong>Reply:</strong> <a href="14893.php">Terry Dontje: "Re: [OMPI users] cannot build Open MPI 1.5 on Linux x86_64 with Oracle/Sun C 5.11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>in the meantime we have installed gcc-4.5.1 and now I get a different error,
<br>
when I try to build OpenMPI-1.5 with Oracle Studio 12 Update 2 on Linux.
<br>
<p>linpc4 openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1 121 head -18 config.log
<br>
...
<br>
&nbsp;&nbsp;$ ../openmpi-1.5/configure --prefix=/usr/local/openmpi-1.5_32_cc
<br>
&nbsp;&nbsp;&nbsp;LDFLAGS=-m32 CC=cc CXX=CC F77=f77 FC=f95 CFLAGS=-m32 CXXFLAGS=-m32
<br>
&nbsp;&nbsp;&nbsp;FFLAGS=-m32 FCFLAGS=-m32 CXXLDFLAGS=-m32 CPPFLAGS= C_INCL_PATH=
<br>
&nbsp;&nbsp;&nbsp;C_INCLUDE_PATH= CPLUS_INCLUDE_PATH= OBJC_INCLUDE_PATH= MPICHHOME=
<br>
&nbsp;&nbsp;&nbsp;--without-udapl --without-openib --enable-mpi-f90
<br>
&nbsp;&nbsp;&nbsp;--with-mpi-f90-size=small --enable-heterogeneous
<br>
&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions --enable-shared
<br>
&nbsp;&nbsp;&nbsp;--enable-orterun-prefix-by-default --with-threads=posix
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-threads --disable-progress-threads
<br>
<p>## --------- ##
<br>
## Platform. ##
<br>
## --------- ##
<br>
<p>hostname = linpc4
<br>
uname -m = x86_64
<br>
uname -r = 2.6.31.14-0.4-desktop
<br>
uname -s = Linux
<br>
uname -v = #1 SMP PREEMPT 2010-10-25 08:45:30 +0200
<br>
<p><p><p>linpc4 openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1 122 tail -20
<br>
&nbsp;&nbsp;log.make.Linux.x86_64.32_cc
<br>
../../../../openmpi-1.5/ompi/mpi/f90/scripts/mpi_wtick_f90.f90.sh 
<br>
/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1/ompi/mpi/f90 &gt; 
<br>
mpi_wtick_f90.f90
<br>
&nbsp;&nbsp;FC     mpi_wtick_f90.lo
<br>
../../../../openmpi-1.5/ompi/mpi/f90/scripts/mpi_wtime_f90.f90.sh 
<br>
/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1/ompi/mpi/f90 &gt; 
<br>
mpi_wtime_f90.f90
<br>
&nbsp;&nbsp;FC     mpi_wtime_f90.lo
<br>
&nbsp;&nbsp;FCLD   libmpi_f90.la
<br>
f90: Warning: Option -path passed to ld, if ld is invoked, ignored otherwise
<br>
f90: Warning: Option -path passed to ld, if ld is invoked, ignored otherwise
<br>
f90: Warning: Option -path passed to ld, if ld is invoked, ignored otherwise
<br>
f90: Warning: Option -soname passed to ld, if ld is invoked, ignored otherwise
<br>
/usr/bin/ld: unrecognized option '-path'
<br>
/usr/bin/ld: use the --help option for usage information
<br>
make[4]: *** [libmpi_f90.la] Error 2
<br>
make[4]: Leaving directory 
<br>
`/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1/ompi/mpi/f90'
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[3]: Leaving directory 
<br>
`/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1/ompi/mpi/f90'
<br>
make[2]: *** [all] Error 2
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1/ompi/mpi/f90'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
linpc4 openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1 123 
<br>
<p><p>In my opinion it is still a strange behaviour that building OpenMPI with
<br>
&quot;cc&quot; depends on the installed version of &quot;gcc&quot;. Has anybody successfully
<br>
build OpenMPI-1.5 with Oracle Studio C on Linux? Which command line
<br>
options did you use? I get the same error if I try to build a 64-bit
<br>
version. I can build and install OpenMPI-1.5 in a 32- and 64-bit version
<br>
without Fortran support, if I replace
<br>
&quot;--enable-mpi-f90 --with-mpi-f90-size=small&quot; with
<br>
&quot;--disable-mpi-f77 --disable-mpi-f90&quot; in the above &quot;configure&quot;-command.
<br>
<p>&quot;make check&quot; delivers &quot;PASSED&quot; for all tests in the 64-bit and one
<br>
&quot;FAILED&quot; in the 32-bit version.
<br>
<p>...
<br>
make  check-TESTS
<br>
make[3]: Entering directory 
<br>
`/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1_without_f90/te
<br>
st/util'
<br>
&nbsp;Failure : Mismatch: input &quot;/home/fd1026&quot;, expected:1 got:0
<br>
<p>SUPPORT: OMPI Test failed: opal_path_nfs() (1 of 13 failed)
<br>
FAIL: opal_path_nfs
<br>
========================================================
<br>
1 of 1 test failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
make[3]: *** [check-TESTS] Error 1
<br>
make[3]: Leaving directory 
<br>
`/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc_gc
<br>
c-4.5.1_without_f90/test/util'
<br>
make[2]: *** [check-am] Error 2
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc_gc
<br>
c-4.5.1_without_f90/test/util'
<br>
make[1]: *** [check-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc_gc
<br>
c-4.5.1_without_f90/test'
<br>
make: *** [check-recursive] Error 1
<br>
linpc4 openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1_without_f90 131 
<br>
<p><p><p>I can also successfully build and run my small C test programs which I
<br>
mentioned in my earlier email with this OpenMPI package. Any ideas how
<br>
I can build Fortran support? Thank you very much for any suggestions in
<br>
advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><span class="quotelev2">&gt; &gt;   Sorry, but can you give us the config line, the config.log and the 
</span><br>
<span class="quotelev2">&gt; &gt; full output of make preferrably with make V=1?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --td
</span><br>
<span class="quotelev2">&gt; &gt; On 10/29/2010 04:30 AM, Siegmar Gross wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I tried to build Open MPI 1.5 on Solaris X86 and x86_64 with Oracle
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Studio 12.2. I can compile Open MPI with thread support, but I can
</span><br>
<span class="quotelev3">&gt; &gt; &gt; only partly install it because &quot;libtool&quot; will not find &quot;f95&quot; although
</span><br>
<span class="quotelev3">&gt; &gt; &gt; it is available. &quot;make check&quot; shows no failures.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I made a mistake the first time. I'm sorry for that. This weekend I
</span><br>
<span class="quotelev1">&gt; rebuild everything and now the following installations work. &quot;ok&quot;
</span><br>
<span class="quotelev1">&gt; means I could install the package and successfully run two small
</span><br>
<span class="quotelev1">&gt; programs (one is a simple matrix multiplication with MPI and OpenMP,
</span><br>
<span class="quotelev1">&gt; 2 processes and 8 threads on a dual processor eight core SPARC64 VII
</span><br>
<span class="quotelev1">&gt; system). I used gcc-4.2.0 and Oracle/Sun C 5.11.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SunOS sparc,  32-bit, cc: ok
</span><br>
<span class="quotelev1">&gt; SunOS sparc,  64-bit, cc: ok
</span><br>
<span class="quotelev1">&gt; SunOS x86,    32-bit, cc: ok
</span><br>
<span class="quotelev1">&gt; SunOS x86_64, 32-bit, cc: ok
</span><br>
<span class="quotelev1">&gt; SunOS x86_64, 64-bit, cc: ok
</span><br>
<span class="quotelev1">&gt; Linux x86,    32-bit, cc: &quot;make&quot; still breaks
</span><br>
<span class="quotelev1">&gt; Linux x86_64, 32-bit, cc: &quot;make&quot; still breaks
</span><br>
<span class="quotelev1">&gt; Linux x86_64, 64-bit, cc: &quot;make&quot; still breaks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SunOS sparc,  32-bit, gcc: ok
</span><br>
<span class="quotelev1">&gt; SunOS sparc,  64-bit, gcc: ok
</span><br>
<span class="quotelev1">&gt; SunOS x86,    32-bit, gcc: ok
</span><br>
<span class="quotelev1">&gt; SunOS x86_64, 32-bit, gcc: ok
</span><br>
<span class="quotelev1">&gt; SunOS x86_64, 64-bit, gcc: ok
</span><br>
<span class="quotelev1">&gt; Linux x86,    32-bit, gcc: ok
</span><br>
<span class="quotelev1">&gt; Linux x86_64, 32-bit, gcc: ok
</span><br>
<span class="quotelev1">&gt; Linux x86_64, 64-bit, gcc: ok
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problems on Solaris x86 and Solaris x86_64 could be solved using
</span><br>
<span class="quotelev1">&gt; Sun C 5.11 instead of Sun C 5.9. Unfortuantely I have still the same
</span><br>
<span class="quotelev1">&gt; problem on Linux x86 and Linux x86_64 with Sun C 5.11.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.5-Linux.x86_64.32_cc 417 tail -15
</span><br>
<span class="quotelev1">&gt;   log.make.Linux.x86_64.32_cc
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `.../opal/libltdl'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `.../opal/libltdl'
</span><br>
<span class="quotelev1">&gt; Making all in asm
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `.../opal/asm'
</span><br>
<span class="quotelev1">&gt;   CC     asm.lo
</span><br>
<span class="quotelev1">&gt; rm -f atomic-asm.S
</span><br>
<span class="quotelev1">&gt; ln -s &quot;../../../openmpi-1.5/opal/asm/generated/atomic-ia32-linux-nongas.s&quot;
</span><br>
<span class="quotelev1">&gt;   atomic-asm.S
</span><br>
<span class="quotelev1">&gt;   CPPAS  atomic-asm.lo
</span><br>
<span class="quotelev1">&gt; cc1: error: unrecognized command line option &quot;-fno-directives-only&quot;
</span><br>
<span class="quotelev1">&gt; cc: cpp failed for atomic-asm.S
</span><br>
<span class="quotelev1">&gt; make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `.../opal/asm'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `.../opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.5-Linux.x86_64.32_cc 418 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can switch back to Sun C 5.9 on Solaris x86(_64) systems if somebody
</span><br>
<span class="quotelev1">&gt; is interested to solve the problem for the older compiler. I used the
</span><br>
<span class="quotelev1">&gt; following options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.5/configure --prefix=/usr/local/openmpi-1.5_64_gcc \
</span><br>
<span class="quotelev1">&gt;   --libdir=/usr/local/openmpi-1.5_64_gcc/lib64 \
</span><br>
<span class="quotelev1">&gt;   LDFLAGS=&quot;-m64 -L/usr/local/gcc-4.2.0/lib/sparcv9&quot; \
</span><br>
<span class="quotelev1">&gt;   CC=&quot;gcc&quot; CPP=&quot;cpp&quot; CXX=&quot;g++&quot; CXXCPP=&quot;cpp&quot; F77=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt;   CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   CXXLDFLAGS=&quot;-m64&quot; CPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;   C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;   OBJC_INCLUDE_PATH=&quot;&quot; MPIHOME=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;   --without-udapl --without-openib \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-f90 --with-mpi-f90-size=small \
</span><br>
<span class="quotelev1">&gt;   --enable-heterogeneous --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;   --enable-shared --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;   --with-threads=posix --enable-mpi-threads --disable-progress-threads \
</span><br>
<span class="quotelev1">&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For x86_64 I changed one line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   LDFLAGS=&quot;-m64 -L/usr/local/gcc-4.2.0/lib/amd64&quot; \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.5/configure --prefix=/usr/local/openmpi-1.5_64_cc \
</span><br>
<span class="quotelev1">&gt;   --libdir=/usr/local/openmpi-1.5_64_cc/lib64 \
</span><br>
<span class="quotelev1">&gt;   LDFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   CC=&quot;cc&quot; CXX=&quot;CC&quot; F77=&quot;f77&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev1">&gt;   CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   CXXLDFLAGS=&quot;-m64&quot; CPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;   C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;   OBJC_INCLUDE_PATH=&quot;&quot; MPICHHOME=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;   --without-udapl --without-openib \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-f90 --with-mpi-f90-size=small \
</span><br>
<span class="quotelev1">&gt;   --enable-heterogeneous --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;   --enable-shared --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;   --with-threads=posix --enable-mpi-threads --disable-progress-threads \
</span><br>
<span class="quotelev1">&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For 32-bit systems I changed &quot;-m64&quot; to &quot;-m32&quot;, didn't specify &quot;-L...&quot;
</span><br>
<span class="quotelev1">&gt; in LDFLAGS, and didn't use &quot;--libdir=...&quot;.
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
<li><strong>Next message:</strong> <a href="14893.php">Terry Dontje: "Re: [OMPI users] cannot build Open MPI 1.5 on Linux x86_64 with Oracle/Sun C 5.11"</a>
<li><strong>Previous message:</strong> <a href="14891.php">Tushar Andriyas: "Re: [OMPI users] PROBLEM WITH MPIRUN"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14893.php">Terry Dontje: "Re: [OMPI users] cannot build Open MPI 1.5 on Linux x86_64 with Oracle/Sun C 5.11"</a>
<li><strong>Reply:</strong> <a href="14893.php">Terry Dontje: "Re: [OMPI users] cannot build Open MPI 1.5 on Linux x86_64 with Oracle/Sun C 5.11"</a>
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
