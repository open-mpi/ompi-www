<?
$subject_val = "Re: [OMPI users] cannot build Open MPI 1.5 on Linux x86_64 with Oracle/Sun C 5.11";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 10:09:33 2010" -->
<!-- isoreceived="20101129150933" -->
<!-- sent="Mon, 29 Nov 2010 10:09:39 -0500" -->
<!-- isosent="20101129150939" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot build Open MPI 1.5 on Linux x86_64 with Oracle/Sun C 5.11" -->
<!-- id="4CF3C233.2040405_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201011291446.oATEkmke018568_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] cannot build Open MPI 1.5 on Linux x86_64 with Oracle/Sun C 5.11<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 10:09:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14894.php">Mark Dixon: "[OMPI users] MPI-IO Lustre driver update?"</a>
<li><strong>Previous message:</strong> <a href="14892.php">Siegmar Gross: "[OMPI users] cannot build Open MPI 1.5 on Linux x86_64 with Oracle/Sun C 5.11"</a>
<li><strong>In reply to:</strong> <a href="14892.php">Siegmar Gross: "[OMPI users] cannot build Open MPI 1.5 on Linux x86_64 with Oracle/Sun C 5.11"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is ticket 2632 <a href="https://svn.open-mpi.org/trac/ompi/ticket/2632">https://svn.open-mpi.org/trac/ompi/ticket/2632</a>.  A 
<br>
fix has been put into the trunk last week.  We should be able to CMR 
<br>
this fix to the 1.5 and 1.4 branches later this week.    The ticket 
<br>
actually has a workaround for 1.5 branch.
<br>
<p>--td
<br>
On 11/29/2010 09:46 AM, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in the meantime we have installed gcc-4.5.1 and now I get a different error,
</span><br>
<span class="quotelev1">&gt; when I try to build OpenMPI-1.5 with Oracle Studio 12 Update 2 on Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1 121 head -18 config.log
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;    $ ../openmpi-1.5/configure --prefix=/usr/local/openmpi-1.5_32_cc
</span><br>
<span class="quotelev1">&gt;     LDFLAGS=-m32 CC=cc CXX=CC F77=f77 FC=f95 CFLAGS=-m32 CXXFLAGS=-m32
</span><br>
<span class="quotelev1">&gt;     FFLAGS=-m32 FCFLAGS=-m32 CXXLDFLAGS=-m32 CPPFLAGS= C_INCL_PATH=
</span><br>
<span class="quotelev1">&gt;     C_INCLUDE_PATH= CPLUS_INCLUDE_PATH= OBJC_INCLUDE_PATH= MPICHHOME=
</span><br>
<span class="quotelev1">&gt;     --without-udapl --without-openib --enable-mpi-f90
</span><br>
<span class="quotelev1">&gt;     --with-mpi-f90-size=small --enable-heterogeneous
</span><br>
<span class="quotelev1">&gt;     --enable-cxx-exceptions --enable-shared
</span><br>
<span class="quotelev1">&gt;     --enable-orterun-prefix-by-default --with-threads=posix
</span><br>
<span class="quotelev1">&gt;     --enable-mpi-threads --disable-progress-threads
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ## --------- ##
</span><br>
<span class="quotelev1">&gt; ## Platform. ##
</span><br>
<span class="quotelev1">&gt; ## --------- ##
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hostname = linpc4
</span><br>
<span class="quotelev1">&gt; uname -m = x86_64
</span><br>
<span class="quotelev1">&gt; uname -r = 2.6.31.14-0.4-desktop
</span><br>
<span class="quotelev1">&gt; uname -s = Linux
</span><br>
<span class="quotelev1">&gt; uname -v = #1 SMP PREEMPT 2010-10-25 08:45:30 +0200
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1 122 tail -20
</span><br>
<span class="quotelev1">&gt;    log.make.Linux.x86_64.32_cc
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.5/ompi/mpi/f90/scripts/mpi_wtick_f90.f90.sh
</span><br>
<span class="quotelev1">&gt; /export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1/ompi/mpi/f90&gt;
</span><br>
<span class="quotelev1">&gt; mpi_wtick_f90.f90
</span><br>
<span class="quotelev1">&gt;    FC     mpi_wtick_f90.lo
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.5/ompi/mpi/f90/scripts/mpi_wtime_f90.f90.sh
</span><br>
<span class="quotelev1">&gt; /export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1/ompi/mpi/f90&gt;
</span><br>
<span class="quotelev1">&gt; mpi_wtime_f90.f90
</span><br>
<span class="quotelev1">&gt;    FC     mpi_wtime_f90.lo
</span><br>
<span class="quotelev1">&gt;    FCLD   libmpi_f90.la
</span><br>
<span class="quotelev1">&gt; f90: Warning: Option -path passed to ld, if ld is invoked, ignored otherwise
</span><br>
<span class="quotelev1">&gt; f90: Warning: Option -path passed to ld, if ld is invoked, ignored otherwise
</span><br>
<span class="quotelev1">&gt; f90: Warning: Option -path passed to ld, if ld is invoked, ignored otherwise
</span><br>
<span class="quotelev1">&gt; f90: Warning: Option -soname passed to ld, if ld is invoked, ignored otherwise
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: unrecognized option '-path'
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: use the --help option for usage information
</span><br>
<span class="quotelev1">&gt; make[4]: *** [libmpi_f90.la] Error 2
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1 123
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my opinion it is still a strange behaviour that building OpenMPI with
</span><br>
<span class="quotelev1">&gt; &quot;cc&quot; depends on the installed version of &quot;gcc&quot;. Has anybody successfully
</span><br>
<span class="quotelev1">&gt; build OpenMPI-1.5 with Oracle Studio C on Linux? Which command line
</span><br>
<span class="quotelev1">&gt; options did you use? I get the same error if I try to build a 64-bit
</span><br>
<span class="quotelev1">&gt; version. I can build and install OpenMPI-1.5 in a 32- and 64-bit version
</span><br>
<span class="quotelev1">&gt; without Fortran support, if I replace
</span><br>
<span class="quotelev1">&gt; &quot;--enable-mpi-f90 --with-mpi-f90-size=small&quot; with
</span><br>
<span class="quotelev1">&gt; &quot;--disable-mpi-f77 --disable-mpi-f90&quot; in the above &quot;configure&quot;-command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;make check&quot; delivers &quot;PASSED&quot; for all tests in the 64-bit and one
</span><br>
<span class="quotelev1">&gt; &quot;FAILED&quot; in the 32-bit version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; make  check-TESTS
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1_without_f90/te
</span><br>
<span class="quotelev1">&gt; st/util'
</span><br>
<span class="quotelev1">&gt;   Failure : Mismatch: input &quot;/home/fd1026&quot;, expected:1 got:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test failed: opal_path_nfs() (1 of 13 failed)
</span><br>
<span class="quotelev1">&gt; FAIL: opal_path_nfs
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 1 of 1 test failed
</span><br>
<span class="quotelev1">&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; make[3]: *** [check-TESTS] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc_gc
</span><br>
<span class="quotelev1">&gt; c-4.5.1_without_f90/test/util'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [check-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc_gc
</span><br>
<span class="quotelev1">&gt; c-4.5.1_without_f90/test/util'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc_gc
</span><br>
<span class="quotelev1">&gt; c-4.5.1_without_f90/test'
</span><br>
<span class="quotelev1">&gt; make: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc_gcc-4.5.1_without_f90 131
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can also successfully build and run my small C test programs which I
</span><br>
<span class="quotelev1">&gt; mentioned in my earlier email with this OpenMPI package. Any ideas how
</span><br>
<span class="quotelev1">&gt; I can build Fortran support? Thank you very much for any suggestions in
</span><br>
<span class="quotelev1">&gt; advance.
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
<span class="quotelev3">&gt;&gt;&gt;    Sorry, but can you give us the config line, the config.log and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; full output of make preferrably with make V=1?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 10/29/2010 04:30 AM, Siegmar Gross wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried to build Open MPI 1.5 on Solaris X86 and x86_64 with Oracle
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Studio 12.2. I can compile Open MPI with thread support, but I can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; only partly install it because &quot;libtool&quot; will not find &quot;f95&quot; although
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it is available. &quot;make check&quot; shows no failures.
</span><br>
<span class="quotelev2">&gt;&gt; I made a mistake the first time. I'm sorry for that. This weekend I
</span><br>
<span class="quotelev2">&gt;&gt; rebuild everything and now the following installations work. &quot;ok&quot;
</span><br>
<span class="quotelev2">&gt;&gt; means I could install the package and successfully run two small
</span><br>
<span class="quotelev2">&gt;&gt; programs (one is a simple matrix multiplication with MPI and OpenMP,
</span><br>
<span class="quotelev2">&gt;&gt; 2 processes and 8 threads on a dual processor eight core SPARC64 VII
</span><br>
<span class="quotelev2">&gt;&gt; system). I used gcc-4.2.0 and Oracle/Sun C 5.11.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SunOS sparc,  32-bit, cc: ok
</span><br>
<span class="quotelev2">&gt;&gt; SunOS sparc,  64-bit, cc: ok
</span><br>
<span class="quotelev2">&gt;&gt; SunOS x86,    32-bit, cc: ok
</span><br>
<span class="quotelev2">&gt;&gt; SunOS x86_64, 32-bit, cc: ok
</span><br>
<span class="quotelev2">&gt;&gt; SunOS x86_64, 64-bit, cc: ok
</span><br>
<span class="quotelev2">&gt;&gt; Linux x86,    32-bit, cc: &quot;make&quot; still breaks
</span><br>
<span class="quotelev2">&gt;&gt; Linux x86_64, 32-bit, cc: &quot;make&quot; still breaks
</span><br>
<span class="quotelev2">&gt;&gt; Linux x86_64, 64-bit, cc: &quot;make&quot; still breaks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SunOS sparc,  32-bit, gcc: ok
</span><br>
<span class="quotelev2">&gt;&gt; SunOS sparc,  64-bit, gcc: ok
</span><br>
<span class="quotelev2">&gt;&gt; SunOS x86,    32-bit, gcc: ok
</span><br>
<span class="quotelev2">&gt;&gt; SunOS x86_64, 32-bit, gcc: ok
</span><br>
<span class="quotelev2">&gt;&gt; SunOS x86_64, 64-bit, gcc: ok
</span><br>
<span class="quotelev2">&gt;&gt; Linux x86,    32-bit, gcc: ok
</span><br>
<span class="quotelev2">&gt;&gt; Linux x86_64, 32-bit, gcc: ok
</span><br>
<span class="quotelev2">&gt;&gt; Linux x86_64, 64-bit, gcc: ok
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problems on Solaris x86 and Solaris x86_64 could be solved using
</span><br>
<span class="quotelev2">&gt;&gt; Sun C 5.11 instead of Sun C 5.9. Unfortuantely I have still the same
</span><br>
<span class="quotelev2">&gt;&gt; problem on Linux x86 and Linux x86_64 with Sun C 5.11.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tyr openmpi-1.5-Linux.x86_64.32_cc 417 tail -15
</span><br>
<span class="quotelev2">&gt;&gt;    log.make.Linux.x86_64.32_cc
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `.../opal/libltdl'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `.../opal/libltdl'
</span><br>
<span class="quotelev2">&gt;&gt; Making all in asm
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `.../opal/asm'
</span><br>
<span class="quotelev2">&gt;&gt;    CC     asm.lo
</span><br>
<span class="quotelev2">&gt;&gt; rm -f atomic-asm.S
</span><br>
<span class="quotelev2">&gt;&gt; ln -s &quot;../../../openmpi-1.5/opal/asm/generated/atomic-ia32-linux-nongas.s&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    atomic-asm.S
</span><br>
<span class="quotelev2">&gt;&gt;    CPPAS  atomic-asm.lo
</span><br>
<span class="quotelev2">&gt;&gt; cc1: error: unrecognized command line option &quot;-fno-directives-only&quot;
</span><br>
<span class="quotelev2">&gt;&gt; cc: cpp failed for atomic-asm.S
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `.../opal/asm'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `.../opal'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; tyr openmpi-1.5-Linux.x86_64.32_cc 418
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can switch back to Sun C 5.9 on Solaris x86(_64) systems if somebody
</span><br>
<span class="quotelev2">&gt;&gt; is interested to solve the problem for the older compiler. I used the
</span><br>
<span class="quotelev2">&gt;&gt; following options:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../openmpi-1.5/configure --prefix=/usr/local/openmpi-1.5_64_gcc \
</span><br>
<span class="quotelev2">&gt;&gt;    --libdir=/usr/local/openmpi-1.5_64_gcc/lib64 \
</span><br>
<span class="quotelev2">&gt;&gt;    LDFLAGS=&quot;-m64 -L/usr/local/gcc-4.2.0/lib/sparcv9&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;    CC=&quot;gcc&quot; CPP=&quot;cpp&quot; CXX=&quot;g++&quot; CXXCPP=&quot;cpp&quot; F77=&quot;gfortran&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;    CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;    CXXLDFLAGS=&quot;-m64&quot; CPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;    C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;    OBJC_INCLUDE_PATH=&quot;&quot; MPIHOME=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;    --without-udapl --without-openib \
</span><br>
<span class="quotelev2">&gt;&gt;    --enable-mpi-f90 --with-mpi-f90-size=small \
</span><br>
<span class="quotelev2">&gt;&gt;    --enable-heterogeneous --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt;&gt;    --enable-shared --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev2">&gt;&gt;    --with-threads=posix --enable-mpi-threads --disable-progress-threads \
</span><br>
<span class="quotelev2">&gt;&gt;    |&amp;  tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For x86_64 I changed one line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    LDFLAGS=&quot;-m64 -L/usr/local/gcc-4.2.0/lib/amd64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../openmpi-1.5/configure --prefix=/usr/local/openmpi-1.5_64_cc \
</span><br>
<span class="quotelev2">&gt;&gt;    --libdir=/usr/local/openmpi-1.5_64_cc/lib64 \
</span><br>
<span class="quotelev2">&gt;&gt;    LDFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;    CC=&quot;cc&quot; CXX=&quot;CC&quot; F77=&quot;f77&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;    CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;    CXXLDFLAGS=&quot;-m64&quot; CPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;    C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;    OBJC_INCLUDE_PATH=&quot;&quot; MPICHHOME=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;    --without-udapl --without-openib \
</span><br>
<span class="quotelev2">&gt;&gt;    --enable-mpi-f90 --with-mpi-f90-size=small \
</span><br>
<span class="quotelev2">&gt;&gt;    --enable-heterogeneous --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt;&gt;    --enable-shared --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev2">&gt;&gt;    --with-threads=posix --enable-mpi-threads --disable-progress-threads \
</span><br>
<span class="quotelev2">&gt;&gt;    |&amp;  tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For 32-bit systems I changed &quot;-m64&quot; to &quot;-m32&quot;, didn't specify &quot;-L...&quot;
</span><br>
<span class="quotelev2">&gt;&gt; in LDFLAGS, and didn't use &quot;--libdir=...&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14893/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14893/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14894.php">Mark Dixon: "[OMPI users] MPI-IO Lustre driver update?"</a>
<li><strong>Previous message:</strong> <a href="14892.php">Siegmar Gross: "[OMPI users] cannot build Open MPI 1.5 on Linux x86_64 with Oracle/Sun C 5.11"</a>
<li><strong>In reply to:</strong> <a href="14892.php">Siegmar Gross: "[OMPI users] cannot build Open MPI 1.5 on Linux x86_64 with Oracle/Sun C 5.11"</a>
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
