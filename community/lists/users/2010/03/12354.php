<?
$subject_val = "Re: [OMPI users] make check failure on Solaris 10 (SPARC)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 14 23:21:23 2010" -->
<!-- isoreceived="20100315032123" -->
<!-- sent="Mon, 15 Mar 2010 03:20:43 +0000" -->
<!-- isosent="20100315032043" -->
<!-- name="Dr. David Kirkby" -->
<!-- email="david.kirkby_at_[hidden]" -->
<!-- subject="Re: [OMPI users] make check failure on Solaris 10 (SPARC)" -->
<!-- id="4B9DA78B.3010002_at_onetel.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B9DA6A8.30804_at_onetel.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] make check failure on Solaris 10 (SPARC)<br>
<strong>From:</strong> Dr. David Kirkby (<em>david.kirkby_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-14 23:20:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12355.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Previous message:</strong> <a href="12353.php">Dr. David Kirkby: "[OMPI users] make check failure on Solaris 10 (SPARC)"</a>
<li><strong>In reply to:</strong> <a href="12353.php">Dr. David Kirkby: "[OMPI users] make check failure on Solaris 10 (SPARC)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops, I forgot to attach config.log.gz
<br>
<p>Dr. David Kirkby wrote:
<br>
<span class="quotelev1">&gt; I'm trying to build Open MPI version 1.4.1 on a Sun Blade 1000 running 
</span><br>
<span class="quotelev1">&gt; Solaris 10 03/2005 using gcc 4.4.3. But the build is not working 
</span><br>
<span class="quotelev1">&gt; properly. Any help appreciated. (BTW, gcc is configured to use the Sun 
</span><br>
<span class="quotelev1">&gt; linker and assembler - not the GNU ones.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ configure
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; both run ok, but
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ make check
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; fails with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export/home/drkirkby/sage-4.3.4.alpha1/spkg/optional/openmpi-1.4.1/src/test/asm' 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make  check-TESTS
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/export/home/drkirkby/sage-4.3.4.alpha1/spkg/optional/openmpi-1.4.1/src/test/asm' 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; Testing atomic_barrier
</span><br>
<span class="quotelev1">&gt;     - 1 threads: Passed
</span><br>
<span class="quotelev1">&gt;     - 2 threads: Passed
</span><br>
<span class="quotelev1">&gt;     - 4 threads: Passed
</span><br>
<span class="quotelev1">&gt;     - 5 threads: Passed
</span><br>
<span class="quotelev1">&gt;     - 8 threads: Passed
</span><br>
<span class="quotelev1">&gt; PASS: atomic_barrier
</span><br>
<span class="quotelev1">&gt; --&gt; Testing atomic_barrier_noinline
</span><br>
<span class="quotelev1">&gt;     - 1 threads: Passed
</span><br>
<span class="quotelev1">&gt;     - 2 threads: Passed
</span><br>
<span class="quotelev1">&gt;     - 4 threads: Passed
</span><br>
<span class="quotelev1">&gt;     - 5 threads: Passed
</span><br>
<span class="quotelev1">&gt;     - 8 threads: Passed
</span><br>
<span class="quotelev1">&gt; PASS: atomic_barrier_noinline
</span><br>
<span class="quotelev1">&gt; --&gt; Testing atomic_spinlock
</span><br>
<span class="quotelev1">&gt;     - 1 threads: Skipped
</span><br>
<span class="quotelev1">&gt;     - 2 threads: Skipped
</span><br>
<span class="quotelev1">&gt;     - 4 threads: Skipped
</span><br>
<span class="quotelev1">&gt;     - 5 threads: Skipped
</span><br>
<span class="quotelev1">&gt;     - 8 threads: Skipped
</span><br>
<span class="quotelev1">&gt; SKIP: atomic_spinlock
</span><br>
<span class="quotelev1">&gt; --&gt; Testing atomic_spinlock_noinline
</span><br>
<span class="quotelev1">&gt;     - 1 threads: Skipped
</span><br>
<span class="quotelev1">&gt;     - 2 threads: Skipped
</span><br>
<span class="quotelev1">&gt;     - 4 threads: Skipped
</span><br>
<span class="quotelev1">&gt;     - 5 threads: Skipped
</span><br>
<span class="quotelev1">&gt;     - 8 threads: Skipped
</span><br>
<span class="quotelev1">&gt; SKIP: atomic_spinlock_noinline
</span><br>
<span class="quotelev1">&gt; --&gt; Testing atomic_math
</span><br>
<span class="quotelev1">&gt; opal_atomic_add32 failed.  Expected 3000, got 0.
</span><br>
<span class="quotelev1">&gt;     - 1 threads: Failed
</span><br>
<span class="quotelev1">&gt;     - 2 threads: Skipped
</span><br>
<span class="quotelev1">&gt;     - 4 threads: Skipped
</span><br>
<span class="quotelev1">&gt;     - 5 threads: Skipped
</span><br>
<span class="quotelev1">&gt;     - 8 threads: Skipped
</span><br>
<span class="quotelev1">&gt; FAIL: atomic_math
</span><br>
<span class="quotelev1">&gt; --&gt; Testing atomic_math_noinline
</span><br>
<span class="quotelev1">&gt;     - 1 threads: Passed
</span><br>
<span class="quotelev1">&gt;     - 2 threads: Skipped
</span><br>
<span class="quotelev1">&gt;     - 4 threads: Skipped
</span><br>
<span class="quotelev1">&gt;     - 5 threads: Skipped
</span><br>
<span class="quotelev1">&gt;     - 8 threads: Skipped
</span><br>
<span class="quotelev1">&gt; PASS: atomic_math_noinline
</span><br>
<span class="quotelev1">&gt; --&gt; Testing atomic_cmpset
</span><br>
<span class="quotelev1">&gt; Assertion failed: new64 == vol64, file atomic_cmpset.c, line 137
</span><br>
<span class="quotelev1">&gt; ./run_tests: line 8: 25516 Abort                   (core dumped) $* 
</span><br>
<span class="quotelev1">&gt; $threads
</span><br>
<span class="quotelev1">&gt;     - 1 threads: Failed
</span><br>
<span class="quotelev1">&gt; Assertion failed: new64 == vol64, file atomic_cmpset.c, line 137
</span><br>
<span class="quotelev1">&gt; ./run_tests: line 8: 25517 Abort                   (core dumped) $* 
</span><br>
<span class="quotelev1">&gt; $threads
</span><br>
<span class="quotelev1">&gt;     - 2 threads: Failed
</span><br>
<span class="quotelev1">&gt; Assertion failed: new64 == vol64, file atomic_cmpset.c, line 137
</span><br>
<span class="quotelev1">&gt; ./run_tests: line 8: 25518 Abort                   (core dumped) $* 
</span><br>
<span class="quotelev1">&gt; $threads
</span><br>
<span class="quotelev1">&gt;     - 4 threads: Failed
</span><br>
<span class="quotelev1">&gt; Assertion failed: new64 == vol64, file atomic_cmpset.c, line 137
</span><br>
<span class="quotelev1">&gt; ./run_tests: line 8: 25519 Abort                   (core dumped) $* 
</span><br>
<span class="quotelev1">&gt; $threads
</span><br>
<span class="quotelev1">&gt;     - 5 threads: Failed
</span><br>
<span class="quotelev1">&gt; Assertion failed: new64 == vol64, file atomic_cmpset.c, line 137
</span><br>
<span class="quotelev1">&gt; ./run_tests: line 8: 25520 Abort                   (core dumped) $* 
</span><br>
<span class="quotelev1">&gt; $threads
</span><br>
<span class="quotelev1">&gt;     - 8 threads: Failed
</span><br>
<span class="quotelev1">&gt; FAIL: atomic_cmpset
</span><br>
<span class="quotelev1">&gt; --&gt; Testing atomic_cmpset_noinline
</span><br>
<span class="quotelev1">&gt;     - 1 threads: Passed
</span><br>
<span class="quotelev1">&gt;     - 2 threads: Passed
</span><br>
<span class="quotelev1">&gt;     - 4 threads: Passed
</span><br>
<span class="quotelev1">&gt;     - 5 threads: Passed
</span><br>
<span class="quotelev1">&gt;     - 8 threads: Passed
</span><br>
<span class="quotelev1">&gt; PASS: atomic_cmpset_noinline
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 2 of 6 tests failed
</span><br>
<span class="quotelev1">&gt; (2 tests were not run)
</span><br>
<span class="quotelev1">&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've attached a compressed version of the top-level config.log.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The value of LD_LIBRARY_PATH is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/gcc-4.4.3/lib:/usr/local/gcc-4.4.3/lib/sparcv9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the output of ompi_info -all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; drkirkby_at_redstart:~/sage-4.3.4.alpha1/spkg/optional/openmpi-1.4.1/src$ 
</span><br>
<span class="quotelev1">&gt; ./ompi/tools/ompi_info/ompi_info -all
</span><br>
<span class="quotelev1">&gt;                  Package: Open MPI @redstart Distribution
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.4.1
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r22421
</span><br>
<span class="quotelev1">&gt;    Open MPI release date: Jan 14, 2010
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.4.1
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r22421
</span><br>
<span class="quotelev1">&gt;    Open RTE release date: Jan 14, 2010
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.4.1
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r22421
</span><br>
<span class="quotelev1">&gt;        OPAL release date: Jan 14, 2010
</span><br>
<span class="quotelev1">&gt;             Ident string: 1.4.1
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: printstack (MCA v2.0, API v2.0, Component v1.4.1)
</span><br>
<span class="quotelev1">&gt;               MCA memory: malloc_solaris (MCA v2.0, API v2.0, Component 
</span><br>
<span class="quotelev1">&gt; v1.4.1)
</span><br>
<span class="quotelev1">&gt;                MCA timer: solaris (MCA v2.0, API v2.0, Component v1.4.1)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.4.1)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.4.1)
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr/local
</span><br>
<span class="quotelev1">&gt;              Exec_prefix: /usr/local
</span><br>
<span class="quotelev1">&gt;                   Bindir: /usr/local/bin
</span><br>
<span class="quotelev1">&gt;                  Sbindir: /usr/local/sbin
</span><br>
<span class="quotelev1">&gt;                   Libdir: /usr/local/lib
</span><br>
<span class="quotelev1">&gt;                   Incdir: /usr/local/include
</span><br>
<span class="quotelev1">&gt;                   Mandir: /usr/local/share/man
</span><br>
<span class="quotelev1">&gt;                Pkglibdir: /usr/local/lib/openmpi
</span><br>
<span class="quotelev1">&gt;               Libexecdir: /usr/local/libexec
</span><br>
<span class="quotelev1">&gt;              Datarootdir: /usr/local/share
</span><br>
<span class="quotelev1">&gt;                  Datadir: /usr/local/share
</span><br>
<span class="quotelev1">&gt;               Sysconfdir: /usr/local/etc
</span><br>
<span class="quotelev1">&gt;           Sharedstatedir: /usr/local/com
</span><br>
<span class="quotelev1">&gt;            Localstatedir: /usr/local/var
</span><br>
<span class="quotelev1">&gt;                  Infodir: /usr/local/share/info
</span><br>
<span class="quotelev1">&gt;               Pkgdatadir: /usr/local/share/openmpi
</span><br>
<span class="quotelev1">&gt;                Pkglibdir: /usr/local/lib/openmpi
</span><br>
<span class="quotelev1">&gt;            Pkgincludedir: /usr/local/include/openmpi
</span><br>
<span class="quotelev1">&gt;  Configured architecture: sparc-sun-solaris2.10
</span><br>
<span class="quotelev1">&gt;           Configure host: redstart
</span><br>
<span class="quotelev1">&gt;            Configured by:
</span><br>
<span class="quotelev1">&gt;            Configured on: Mon Mar 15 01:36:22 GMT 2010
</span><br>
<span class="quotelev1">&gt;           Configure host: redstart
</span><br>
<span class="quotelev1">&gt;                 Built by: drkirkby
</span><br>
<span class="quotelev1">&gt;                 Built on: Monday March 15 02:08:01 GMT 2010
</span><br>
<span class="quotelev1">&gt;               Built host: redstart
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/local/gcc-4.4.3/bin/gcc
</span><br>
<span class="quotelev1">&gt;              C char size: 1
</span><br>
<span class="quotelev1">&gt;              C bool size: 1
</span><br>
<span class="quotelev1">&gt;             C short size: 2
</span><br>
<span class="quotelev1">&gt;               C int size: 4
</span><br>
<span class="quotelev1">&gt;              C long size: 4
</span><br>
<span class="quotelev1">&gt;             C float size: 4
</span><br>
<span class="quotelev1">&gt;            C double size: 8
</span><br>
<span class="quotelev1">&gt;           C pointer size: 4
</span><br>
<span class="quotelev1">&gt;             C char align: 1
</span><br>
<span class="quotelev1">&gt;             C bool align: 1
</span><br>
<span class="quotelev1">&gt;              C int align: 4
</span><br>
<span class="quotelev1">&gt;            C float align: 4
</span><br>
<span class="quotelev1">&gt;           C double align: 8
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/local/gcc-4.4.3/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/local/gcc-4.4.3/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /usr/local/gcc-4.4.3/bin/gfortran
</span><br>
<span class="quotelev1">&gt;        Fort integer size: 4
</span><br>
<span class="quotelev1">&gt;        Fort logical size: 4
</span><br>
<span class="quotelev1">&gt;  Fort logical value true: 1
</span><br>
<span class="quotelev1">&gt;       Fort have integer1: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer2: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer4: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer8: yes
</span><br>
<span class="quotelev1">&gt;      Fort have integer16: no
</span><br>
<span class="quotelev1">&gt;          Fort have real4: yes
</span><br>
<span class="quotelev1">&gt;          Fort have real8: yes
</span><br>
<span class="quotelev1">&gt;         Fort have real16: no
</span><br>
<span class="quotelev1">&gt;       Fort have complex8: yes
</span><br>
<span class="quotelev1">&gt;      Fort have complex16: yes
</span><br>
<span class="quotelev1">&gt;      Fort have complex32: no
</span><br>
<span class="quotelev1">&gt;       Fort integer1 size: 1
</span><br>
<span class="quotelev1">&gt;       Fort integer2 size: 2
</span><br>
<span class="quotelev1">&gt;       Fort integer4 size: 4
</span><br>
<span class="quotelev1">&gt;       Fort integer8 size: 8
</span><br>
<span class="quotelev1">&gt;      Fort integer16 size: -1
</span><br>
<span class="quotelev1">&gt;           Fort real size: 4
</span><br>
<span class="quotelev1">&gt;          Fort real4 size: 4
</span><br>
<span class="quotelev1">&gt;          Fort real8 size: 8
</span><br>
<span class="quotelev1">&gt;         Fort real16 size: 16
</span><br>
<span class="quotelev1">&gt;       Fort dbl prec size: 4
</span><br>
<span class="quotelev1">&gt;           Fort cplx size: 4
</span><br>
<span class="quotelev1">&gt;       Fort dbl cplx size: 4
</span><br>
<span class="quotelev1">&gt;          Fort cplx8 size: 8
</span><br>
<span class="quotelev1">&gt;         Fort cplx16 size: 16
</span><br>
<span class="quotelev1">&gt;         Fort cplx32 size: 32
</span><br>
<span class="quotelev1">&gt;       Fort integer align: 4
</span><br>
<span class="quotelev1">&gt;      Fort integer1 align: 1
</span><br>
<span class="quotelev1">&gt;      Fort integer2 align: 2
</span><br>
<span class="quotelev1">&gt;      Fort integer4 align: 4
</span><br>
<span class="quotelev1">&gt;      Fort integer8 align: 8
</span><br>
<span class="quotelev1">&gt;     Fort integer16 align: -1
</span><br>
<span class="quotelev1">&gt;          Fort real align: 4
</span><br>
<span class="quotelev1">&gt;         Fort real4 align: 4
</span><br>
<span class="quotelev1">&gt;         Fort real8 align: 8
</span><br>
<span class="quotelev1">&gt;        Fort real16 align: 8
</span><br>
<span class="quotelev1">&gt;      Fort dbl prec align: 4
</span><br>
<span class="quotelev1">&gt;          Fort cplx align: 4
</span><br>
<span class="quotelev1">&gt;      Fort dbl cplx align: 4
</span><br>
<span class="quotelev1">&gt;         Fort cplx8 align: 4
</span><br>
<span class="quotelev1">&gt;        Fort cplx16 align: 8
</span><br>
<span class="quotelev1">&gt;        Fort cplx32 align: 8
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: solaris (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;             Build CFLAGS: -O3 -DNDEBUG -finline-functions 
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing  -fvisibility=hidden
</span><br>
<span class="quotelev1">&gt;           Build CXXFLAGS: -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt;             Build FFLAGS:
</span><br>
<span class="quotelev1">&gt;            Build FCFLAGS:
</span><br>
<span class="quotelev1">&gt;            Build LDFLAGS: -export-dynamic
</span><br>
<span class="quotelev1">&gt;               Build LIBS: -lsocket -lnsl  -lrt -lm -lthread
</span><br>
<span class="quotelev1">&gt;     Wrapper extra CFLAGS:
</span><br>
<span class="quotelev1">&gt;   Wrapper extra CXXFLAGS:
</span><br>
<span class="quotelev1">&gt;     Wrapper extra FFLAGS:
</span><br>
<span class="quotelev1">&gt;    Wrapper extra FCFLAGS:
</span><br>
<span class="quotelev1">&gt;    Wrapper extra LDFLAGS:
</span><br>
<span class="quotelev1">&gt;       Wrapper extra LIBS:      -lsocket -lnsl -lrt -lm -lthread
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;        MPI_WTIME support: native
</span><br>
<span class="quotelev1">&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev1">&gt;    FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_param_files&quot; (current value:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;/export/home/drkirkby/.openmpi/mca-params.conf:/usr/local/etc/openmpi-mca-params.conf&quot;, 
</span><br>
<span class="quotelev1">&gt; data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Path for MCA configuration files containing 
</span><br>
<span class="quotelev1">&gt; default parameter values
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_base_param_file_prefix&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Aggregate MCA parameter file sets
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_base_param_file_path&quot; (current 
</span><br>
<span class="quotelev1">&gt; value:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;/usr/local/share/openmpi/amca-param-sets:/export/home/drkirkby/sage-4.3.4.alpha1/spkg/optional/openmpi-1.4.1/src&quot;, 
</span><br>
<span class="quotelev1">&gt; data
</span><br>
<span class="quotelev1">&gt;                           source: default value)
</span><br>
<span class="quotelev1">&gt;                           Aggregate MCA parameter Search path
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_base_param_file_path_force&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Forced Aggregate MCA parameter Search path
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_path&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;/usr/local/lib/openmpi:/export/home/drkirkby/.openmpi/components&quot;, data
</span><br>
<span class="quotelev1">&gt;                           source: default value)
</span><br>
<span class="quotelev1">&gt;                           Path where to look for Open MPI and ORTE 
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Top-level verbosity parameter
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_show_load_errors&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to show errors for components that 
</span><br>
<span class="quotelev1">&gt; failed to load or not
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_disable_dlopen&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to attempt to disable opening dynamic 
</span><br>
<span class="quotelev1">&gt; components or not
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_param_check&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether you want MPI API parameters checked at 
</span><br>
<span class="quotelev1">&gt; run-time or not.  Possible values are 0 (no checking) and 1 (perform
</span><br>
<span class="quotelev1">&gt;                           checking at run-time)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Yield the processor when waiting for MPI 
</span><br>
<span class="quotelev1">&gt; communication (for MPI processes, will default to 1 when oversubscribing 
</span><br>
<span class="quotelev1">&gt; nodes)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           How often to progress TCP communications (0 = 
</span><br>
<span class="quotelev1">&gt; never, otherwise specified in microseconds)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_handle_leaks&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether MPI_FINALIZE shows all MPI handles 
</span><br>
<span class="quotelev1">&gt; that were not freed or not
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to actually free MPI objects when 
</span><br>
<span class="quotelev1">&gt; their handles are freed
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_mpi_alloc_mem_leaks&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If &gt;0, MPI_FINALIZE will show up to this many 
</span><br>
<span class="quotelev1">&gt; instances of memory allocated by MPI_ALLOC_MEM that was not freed by
</span><br>
<span class="quotelev1">&gt;                           MPI_FREE_MEM
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to show all MCA parameter values 
</span><br>
<span class="quotelev1">&gt; during MPI_INIT or not (good for reproducability of MPI jobs for debug 
</span><br>
<span class="quotelev1">&gt; purposes).
</span><br>
<span class="quotelev1">&gt;                           Accepted values are all, default, file, api, 
</span><br>
<span class="quotelev1">&gt; and enviro - or a comma delimited combination of them
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params_file&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If mpi_show_mca_params is true, setting this 
</span><br>
<span class="quotelev1">&gt; string to a valid filename tells Open MPI to dump all the MCA parameter 
</span><br>
<span class="quotelev1">&gt; values
</span><br>
<span class="quotelev1">&gt;                           into a file suitable for reading via the 
</span><br>
<span class="quotelev1">&gt; mca_param_files parameter (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_keep_peer_hostnames&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, save the string hostnames of all 
</span><br>
<span class="quotelev1">&gt; MPI peer processes (mostly for error / debugging output messages).  This 
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt;                           add quite a bit of memory usage to each MPI 
</span><br>
<span class="quotelev1">&gt; process.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_abort_delay&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, print out an identifying message 
</span><br>
<span class="quotelev1">&gt; when MPI_ABORT is invoked (hostname, PID of the process that called 
</span><br>
<span class="quotelev1">&gt; MPI_ABORT)
</span><br>
<span class="quotelev1">&gt;                           and delay for that many seconds before exiting 
</span><br>
<span class="quotelev1">&gt; (a negative delay value means to never abort).  This allows attaching of a
</span><br>
<span class="quotelev1">&gt;                           debugger before quitting the job.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: information &quot;mpi_abort_print_stack&quot; (value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, print out a stack trace when 
</span><br>
<span class="quotelev1">&gt; MPI_ABORT is invoked
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_preconnect_mpi&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value, synonyms: mpi_preconnect_all)
</span><br>
<span class="quotelev1">&gt;                           Whether to force MPI processes to fully 
</span><br>
<span class="quotelev1">&gt; wire-up the MPI connections between MPI processes during MPI_INIT (vs. 
</span><br>
<span class="quotelev1">&gt; making
</span><br>
<span class="quotelev1">&gt;                           connections lazily -- upon the first MPI 
</span><br>
<span class="quotelev1">&gt; traffic between each process peer pair)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value, deprecated, synonym of:
</span><br>
<span class="quotelev1">&gt;                           mpi_preconnect_mpi)
</span><br>
<span class="quotelev1">&gt;                           Whether to force MPI processes to fully 
</span><br>
<span class="quotelev1">&gt; wire-up the MPI connections between MPI processes during MPI_INIT (vs. 
</span><br>
<span class="quotelev1">&gt; making
</span><br>
<span class="quotelev1">&gt;                           connections lazily -- upon the first MPI 
</span><br>
<span class="quotelev1">&gt; traffic between each process peer pair)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to use the &quot;leave pinned&quot; protocol or 
</span><br>
<span class="quotelev1">&gt; not. Enabling this setting can help bandwidth performance when repeatedly
</span><br>
<span class="quotelev1">&gt;                           sending and receiving large messages with the 
</span><br>
<span class="quotelev1">&gt; same buffers over RDMA-based networks (0 = do not use &quot;leave pinned&quot;
</span><br>
<span class="quotelev1">&gt;                           protocol, 1 = use &quot;leave pinned&quot; protocol, -1 
</span><br>
<span class="quotelev1">&gt; = allow network to choose at runtime).
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned_pipeline&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to use the &quot;leave pinned pipeline&quot; 
</span><br>
<span class="quotelev1">&gt; protocol or not.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, assume that this job is the only 
</span><br>
<span class="quotelev1">&gt; (set of) process(es) running on each node and bind processes to processors,
</span><br>
<span class="quotelev1">&gt;                           starting with processor ID 0
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_warn_on_fork&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, issue a warning if program forks 
</span><br>
<span class="quotelev1">&gt; under conditions that could cause system errors
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: information &quot;mpi_have_sparse_group_storage&quot; 
</span><br>
<span class="quotelev1">&gt; (value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether this Open MPI installation supports 
</span><br>
<span class="quotelev1">&gt; storing of data in MPI groups in &quot;sparse&quot; formats (good for extremely large
</span><br>
<span class="quotelev1">&gt;                           process count MPI jobs that create many 
</span><br>
<span class="quotelev1">&gt; communicators/groups)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_use_sparse_group_storage&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to use &quot;sparse&quot; storage formats for 
</span><br>
<span class="quotelev1">&gt; MPI groups (only relevant if mpi_have_sparse_group_storage is 1)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value, synonym of: opal_paffinity_alone)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, assume that this job is the only 
</span><br>
<span class="quotelev1">&gt; (set of) process(es) running on each node and bind processes to processors,
</span><br>
<span class="quotelev1">&gt;                           starting with processor ID 0
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_base_help_aggregate&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If orte_base_help_aggregate is true, duplicate 
</span><br>
<span class="quotelev1">&gt; help messages will be aggregated rather than displayed individually.  This
</span><br>
<span class="quotelev1">&gt;                           can be helpful for parallel jobs that 
</span><br>
<span class="quotelev1">&gt; experience multiple identical failures; rather than print out the same 
</span><br>
<span class="quotelev1">&gt; help/failure
</span><br>
<span class="quotelev1">&gt;                           message N times, display it once with a count 
</span><br>
<span class="quotelev1">&gt; of how many processes sent the same message.
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_tmpdir_base&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Base of the session directory tree
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_no_session_dirs&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Prohibited locations for session directories 
</span><br>
<span class="quotelev1">&gt; (multiple locations separated by ',', default=NULL)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug&quot; (current value: &quot;0&quot;, 
</span><br>
<span class="quotelev1">&gt; data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Top-level ORTE debug switch (default 
</span><br>
<span class="quotelev1">&gt; verbosity: 1)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for ORTE debug messages 
</span><br>
<span class="quotelev1">&gt; (default: 1)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug_daemons&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to debug the ORTE daemons or not
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug_daemons_file&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether want stdout/stderr of daemons to go to 
</span><br>
<span class="quotelev1">&gt; a file or not
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_leave_session_attached&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether applications and/or daemons should 
</span><br>
<span class="quotelev1">&gt; leave their sessions attached so that any output can be received - this 
</span><br>
<span class="quotelev1">&gt; allows X
</span><br>
<span class="quotelev1">&gt;                           forwarding without all the attendant debugging 
</span><br>
<span class="quotelev1">&gt; output
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_do_not_launch&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Perform all necessary operations to prepare to 
</span><br>
<span class="quotelev1">&gt; launch the application, but do not actually launch it
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_daemon_spin&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Have any orteds spin until we can connect a 
</span><br>
<span class="quotelev1">&gt; debugger to them
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_daemon_fail&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Have the specified orted fail after init for 
</span><br>
<span class="quotelev1">&gt; debugging purposes
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_daemon_fail_delay&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Have the specified orted fail after specified 
</span><br>
<span class="quotelev1">&gt; number of seconds (default: 0 =&gt; no delay)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_heartbeat_rate&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Seconds between checks for daemon 
</span><br>
<span class="quotelev1">&gt; state-of-health (default: 0 =&gt; do not check)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_startup_timeout&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Milliseconds/daemon to wait for startup before 
</span><br>
<span class="quotelev1">&gt; declaring failed_to_start (default: 0 =&gt; do not check)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_timing&quot; (current value: &quot;0&quot;, 
</span><br>
<span class="quotelev1">&gt; data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Request that critical timing loops be measured
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_base_user_debugger&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;totalview @mpirun@ -a @mpirun_args@ : ddt -n @np@ -start 
</span><br>
<span class="quotelev1">&gt; @executable@
</span><br>
<span class="quotelev1">&gt;                           @executable_argv@ @single_app@ : fxp @mpirun@ 
</span><br>
<span class="quotelev1">&gt; -a @mpirun_args@&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Sequence of user-level debuggers to search for 
</span><br>
<span class="quotelev1">&gt; in orterun
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_abort_timeout&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Max time to wait [in secs] before aborting an 
</span><br>
<span class="quotelev1">&gt; ORTE operation (default: 1sec)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_timeout_step&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;1000&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Time to wait [in usecs/proc] before aborting 
</span><br>
<span class="quotelev1">&gt; an ORTE operation (default: 1000 usec/proc)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_default_hostfile&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Name of the default hostfile (relative or 
</span><br>
<span class="quotelev1">&gt; absolute path)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_rankfile&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source: default value, synonyms: rmaps_rank_file_path)
</span><br>
<span class="quotelev1">&gt;                           Name of the rankfile to be used for mapping 
</span><br>
<span class="quotelev1">&gt; processes (relative or absolute path)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_keep_fqdn_hostnames&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether or not to keep FQDN hostnames 
</span><br>
<span class="quotelev1">&gt; [default: no]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_contiguous_nodes&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Number of nodes after which contiguous 
</span><br>
<span class="quotelev1">&gt; nodename encoding will automatically be used [default: INT_MAX]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_tag_output&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Tag all output with [job,rank] (default: false)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_xml_output&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Display all output in XML format (default: false)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_xml_file&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Provide all output in XML format to the 
</span><br>
<span class="quotelev1">&gt; specified file
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_timestamp_output&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Timestamp all application process output 
</span><br>
<span class="quotelev1">&gt; (default: false)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_output_filename&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Redirect output from application processes 
</span><br>
<span class="quotelev1">&gt; into filename.rank [default: NULL]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_show_resolved_nodenames&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Display any node names that are resolved to a 
</span><br>
<span class="quotelev1">&gt; different name (default: false)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_hetero_apps&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Indicates that multiple app_contexts are being 
</span><br>
<span class="quotelev1">&gt; provided that are a mix of 32/64 bit binaries (default: false)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_launch_agent&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;orted&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Command used to start processes on remote 
</span><br>
<span class="quotelev1">&gt; nodes (default: orted)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_allocation_required&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether or not an allocation by a resource 
</span><br>
<span class="quotelev1">&gt; manager is required [default: no]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_xterm&quot; (current value: &lt;none&gt;, 
</span><br>
<span class="quotelev1">&gt; data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Create a new xterm window and display output 
</span><br>
<span class="quotelev1">&gt; from the specified ranks there [default: none]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_forward_job_control&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Forward SIGTSTP (after converting to SIGSTOP) 
</span><br>
<span class="quotelev1">&gt; and SIGCONT signals to the application procs [default: no]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_report_launch_progress&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Output a brief periodic report on launch 
</span><br>
<span class="quotelev1">&gt; progress [default: no]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_num_boards&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Number of processor boards/node (1-256) 
</span><br>
<span class="quotelev1">&gt; [default: 1]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_num_sockets&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Number of sockets/board (1-256)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_num_cores&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Number of cores/socket (1-256)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_cpu_set&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Comma-separated list of ranges specifying 
</span><br>
<span class="quotelev1">&gt; logical cpus allocated to this job [default: none]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_process_binding&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Policy for binding processes [none | core | 
</span><br>
<span class="quotelev1">&gt; socket | board] (supported qualifier: if-avail)
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_net_private_ipv4&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;10.0.0.0/8;172.16.0.0/12;192.168.0.0/16;169.254.0.0/16&quot;, data 
</span><br>
<span class="quotelev1">&gt; source:
</span><br>
<span class="quotelev1">&gt;                           default value)
</span><br>
<span class="quotelev1">&gt;                           Semicolon-delimited list of CIDR notation 
</span><br>
<span class="quotelev1">&gt; entries specifying what networks are considered &quot;private&quot; (default value 
</span><br>
<span class="quotelev1">&gt; based on
</span><br>
<span class="quotelev1">&gt;                           RFC1918 and RFC3330)
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_signal&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;6,10,8,11&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of integer signal numbers 
</span><br>
<span class="quotelev1">&gt; to Open MPI to attempt to intercept.  Upon receipt of the intercepted
</span><br>
<span class="quotelev1">&gt;                           signal, Open MPI will display a stack trace 
</span><br>
<span class="quotelev1">&gt; and abort.  Open MPI will *not* replace signals if handlers are already
</span><br>
<span class="quotelev1">&gt;                           installed by the time MPI_INIT is invoked. 
</span><br>
<span class="quotelev1">&gt; Optionally append &quot;:complain&quot; to any signal number in the 
</span><br>
<span class="quotelev1">&gt; comma-delimited list
</span><br>
<span class="quotelev1">&gt;                           to make Open MPI complain if it detects 
</span><br>
<span class="quotelev1">&gt; another signal handler (and therefore does not insert its own).
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_set_max_sys_limits&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Set to non-zero to automatically set any 
</span><br>
<span class="quotelev1">&gt; system-imposed limits to the maximum allowed
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_event_include&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;poll&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of libevent subsystems to 
</span><br>
<span class="quotelev1">&gt; use (devpoll, poll, select -- available on your platform)
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_paffinity_alone&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value, synonyms: mpi_paffinity_alone)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, assume that this job is the only 
</span><br>
<span class="quotelev1">&gt; (set of) process(es) running on each node and bind processes to processors,
</span><br>
<span class="quotelev1">&gt;                           starting with processor ID 0
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace&quot; (current value: &lt;none&gt;, 
</span><br>
<span class="quotelev1">&gt; data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; backtrace framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace_base_verbose&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the backtrace framework (0 
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace_printstack_priority&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;           MCA memchecker: parameter &quot;memchecker&quot; (current value: &lt;none&gt;, 
</span><br>
<span class="quotelev1">&gt; data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; memchecker framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory&quot; (current value: &lt;none&gt;, 
</span><br>
<span class="quotelev1">&gt; data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; memory framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_base_verbose&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the memory framework (0 = 
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_malloc_solaris_priority&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: parameter &quot;paffinity_base_verbose&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level of the paffinity framework
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: parameter &quot;paffinity&quot; (current value: &lt;none&gt;, 
</span><br>
<span class="quotelev1">&gt; data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; paffinity framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA carto: parameter &quot;carto_base_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level of the carto framework
</span><br>
<span class="quotelev1">&gt;                MCA carto: parameter &quot;carto&quot; (current value: &lt;none&gt;, data 
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; carto framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter &quot;maffinity_base_verbose&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level of the maffinity framework
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter &quot;maffinity&quot; (current value: &lt;none&gt;, 
</span><br>
<span class="quotelev1">&gt; data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; maffinity framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer&quot; (current value: &lt;none&gt;, data 
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; timer framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer_base_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the timer framework (0 = 
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer_solaris_priority&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA dpm: parameter &quot;dpm&quot; (current value: &lt;none&gt;, data 
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; dpm framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: parameter &quot;pubsub&quot; (current value: &lt;none&gt;, 
</span><br>
<span class="quotelev1">&gt; data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; pubsub framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: parameter &quot;pubsub_base_verbose&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the pubsub framework (0 = 
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator&quot; (current value: &lt;none&gt;, 
</span><br>
<span class="quotelev1">&gt; data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; allocator framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_base_verbose&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the allocator framework (0 
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll&quot; (current value: &lt;none&gt;, data 
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; coll framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_base_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the coll framework (0 = no 
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_freelist_initial_size&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;16&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Initial MPI-2 IO request freelist size
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_freelist_max_size&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;64&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Max size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_freelist_increment&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;16&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Increment size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io&quot; (current value: &lt;none&gt;, data 
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the io 
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the io framework (0 = no 
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool&quot; (current value: &lt;none&gt;, data 
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; mpool framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_base_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the mpool framework (0 = 
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_base_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level of the PML framework
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml&quot; (current value: &lt;none&gt;, data 
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; pml framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache&quot; (current value: &lt;none&gt;, 
</span><br>
<span class="quotelev1">&gt; data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; rcache framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache_base_verbose&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rcache framework (0 = 
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level of the BTL framework
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;, data 
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; btl framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_include&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_exclude&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_warn_component_unused&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           This parameter is used to turn on warning 
</span><br>
<span class="quotelev1">&gt; messages when certain NICs are not used
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: parameter &quot;mtl&quot; (current value: &lt;none&gt;, data 
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; mtl framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: parameter &quot;mtl_base_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the mtl framework (0 = no 
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: parameter &quot;topo&quot; (current value: &lt;none&gt;, data 
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; topo framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: parameter &quot;topo_base_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the topo framework (0 = no 
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc&quot; (current value: &lt;none&gt;, data 
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; osc framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_base_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the osc framework (0 = no 
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof&quot; (current value: &lt;none&gt;, data 
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; iof framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the iof framework (0 = no 
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob&quot; (current value: &lt;none&gt;, data 
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; oob framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_base_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the oob framework (0 = no 
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA odls: parameter &quot;odls_base_sigkill_timeout&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Time to wait for a process to die after 
</span><br>
<span class="quotelev1">&gt; issuing a kill signal to it
</span><br>
<span class="quotelev1">&gt;                 MCA odls: parameter &quot;odls_base_report_bindings&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Report process bindings [default: no]
</span><br>
<span class="quotelev1">&gt;                 MCA odls: parameter &quot;odls&quot; (current value: &lt;none&gt;, data 
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; odls framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                 MCA odls: parameter &quot;odls_base_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the odls framework (0 = no 
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_base_display_alloc&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to display the allocation after it is 
</span><br>
<span class="quotelev1">&gt; determined
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_base_display_devel_alloc&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to display a developer-detail 
</span><br>
<span class="quotelev1">&gt; allocation after it is determined
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras&quot; (current value: &lt;none&gt;, data 
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; ras framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_base_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the ras framework (0 = no 
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_rank_file_path&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;, data source: default value, synonym of: orte_rankfile)
</span><br>
<span class="quotelev1">&gt;                           Name of the rankfile to be used for mapping 
</span><br>
<span class="quotelev1">&gt; processes (relative or absolute path)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_schedule_policy&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;slot&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Scheduling Policy for RMAPS. [slot 
</span><br>
<span class="quotelev1">&gt; (alias:core) | socket | board | node]
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_pernode&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Launch one ppn as directed
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_n_pernode&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Launch n procs/node
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_n_perboard&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Launch n procs/board
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_n_persocket&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Launch n procs/socket
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_loadbalance&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Balance total number of procs across all 
</span><br>
<span class="quotelev1">&gt; allocated nodes
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_cpus_per_proc&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;, data source: default value, synonyms: rmaps_base_cpus_per_rank)
</span><br>
<span class="quotelev1">&gt;                           Number of cpus to use for each rank [1-2**15 
</span><br>
<span class="quotelev1">&gt; (default=1)]
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_cpus_per_rank&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;, data source: default value, synonym of:
</span><br>
<span class="quotelev1">&gt;                           rmaps_base_cpus_per_proc)
</span><br>
<span class="quotelev1">&gt;                           Number of cpus to use for each rank [1-2**15 
</span><br>
<span class="quotelev1">&gt; (default=1)]
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_stride&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           When binding multiple cores to a rank, the 
</span><br>
<span class="quotelev1">&gt; step size to use between cores [1-2**15 (default: 1)]
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_slot_list&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           List of processor IDs to bind MPI processes to 
</span><br>
<span class="quotelev1">&gt; (e.g., used in conjunction with rank files) [default=NULL]
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_no_schedule_local&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If false, allow scheduling MPI applications on 
</span><br>
<span class="quotelev1">&gt; the same node as mpirun (default).  If true, do not schedule any MPI
</span><br>
<span class="quotelev1">&gt;                           applications on the same node as mpirun
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_no_oversubscribe&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If true, then do not allow oversubscription of 
</span><br>
<span class="quotelev1">&gt; nodes - mpirun will return an error if there aren't enough nodes to launch
</span><br>
<span class="quotelev1">&gt;                           all processes without oversubscribing
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_display_map&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to display the process map after it is 
</span><br>
<span class="quotelev1">&gt; computed
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_display_devel_map&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to display a developer-detail process 
</span><br>
<span class="quotelev1">&gt; map after it is computed
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps&quot; (current value: &lt;none&gt;, data 
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; rmaps framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rmaps framework (0 = 
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_wrapper&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Use a Wrapper component around the selected 
</span><br>
<span class="quotelev1">&gt; RML component
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml&quot; (current value: &lt;none&gt;, data 
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; rml framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_base_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rml framework (0 = no 
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA routed: parameter &quot;routed&quot; (current value: &lt;none&gt;, 
</span><br>
<span class="quotelev1">&gt; data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; routed framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA routed: parameter &quot;routed_base_verbose&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the routed framework (0 = 
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm&quot; (current value: &lt;none&gt;, data 
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; plm framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_base_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the plm framework (0 = no 
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA filem: parameter &quot;filem&quot; (current value: &lt;none&gt;, data 
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Which Filem component to use (empty = 
</span><br>
<span class="quotelev1">&gt; auto-select)
</span><br>
<span class="quotelev1">&gt;                MCA filem: parameter &quot;filem_base_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the filem framework (0 = 
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr&quot; (current value: &lt;none&gt;, 
</span><br>
<span class="quotelev1">&gt; data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; errmgr framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_base_verbose&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the errmgr framework (0 = 
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: parameter &quot;ess&quot; (current value: &lt;none&gt;, data 
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; ess framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: parameter &quot;ess_base_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the ess framework (0 = no 
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: parameter &quot;grpcomm&quot; (current value: &lt;none&gt;, 
</span><br>
<span class="quotelev1">&gt; data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; grpcomm framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: parameter &quot;grpcomm_base_verbose&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the grpcomm framework (0 = 
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12354/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12355.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Previous message:</strong> <a href="12353.php">Dr. David Kirkby: "[OMPI users] make check failure on Solaris 10 (SPARC)"</a>
<li><strong>In reply to:</strong> <a href="12353.php">Dr. David Kirkby: "[OMPI users] make check failure on Solaris 10 (SPARC)"</a>
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
