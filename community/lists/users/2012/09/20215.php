<?
$subject_val = "Re: [OMPI users] segmentation fault in openmpi-1.9a1r27285";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 14 09:55:08 2012" -->
<!-- isoreceived="20120914135508" -->
<!-- sent="Fri, 14 Sep 2012 06:54:59 -0700" -->
<!-- isosent="20120914135459" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault in openmpi-1.9a1r27285" -->
<!-- id="AF89D763-06B4-49FC-AE5D-DCF1B30E4434_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201209141251.q8ECpu41028544_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] segmentation fault in openmpi-1.9a1r27285<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-14 09:54:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20216.php">Ralph Castain: "Re: [OMPI users] problem with openmpi-1.7a1r27338 on Solaris 10"</a>
<li><strong>Previous message:</strong> <a href="20214.php">Siegmar Gross: "[OMPI users] segmentation fault in openmpi-1.9a1r27285"</a>
<li><strong>In reply to:</strong> <a href="20214.php">Siegmar Gross: "[OMPI users] segmentation fault in openmpi-1.9a1r27285"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you look at the ompi_info output, you'll see this:
<br>
<p>&nbsp;&nbsp;FT Checkpoint support: no (checkpoint thread: no)
<br>
&nbsp;&nbsp;C/R Enabled Debugging: no
<br>
<p>FT is correctly disabled. As I said before, I believe your prior test was using the previously-built version where you had explicitly enabled FT. This sometimes happens because people forget to clear out the prefix location before doing another configure/build. This leaves old libraries laying around, which get picked up when we execute. Remember, when we install, we don't remove anything - so if we don't build something, we can still pickup the library from a prior build and attempt to use it.
<br>
<p>On Sep 14, 2012, at 5:51 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in openmpi-1.9a1r27285 I got a segmentation fault while somehow
</span><br>
<span class="quotelev1">&gt; &quot;FT Checkpoint support&quot; was enabled. When I compile openmpi-1.7a1r27338
</span><br>
<span class="quotelev1">&gt; with the same configuration options &quot;FT Checkpoint&quot; is disabled so that
</span><br>
<span class="quotelev1">&gt; in my opinion it will be automatically enabled in openmpi-1.9a1r27285.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.7a1r27338/configure --prefix=/usr/local/openmpi-1.7_64_gcc \
</span><br>
<span class="quotelev1">&gt;  --libdir=/usr/local/openmpi-1.7_64_gcc/lib64 \
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
<span class="quotelev1">&gt;  --with-wrapper-cflags=-m64 \
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
<span class="quotelev1">&gt;  --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 122 ompi_info
</span><br>
<span class="quotelev1">&gt;                 Package: Open MPI fd1026_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                          Distribution
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.7a1r27338
</span><br>
<span class="quotelev1">&gt;  Open MPI repo revision: r27338
</span><br>
<span class="quotelev1">&gt;   Open MPI release date: Sep 13, 2012 (nightly snapshot tarball)
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.7a1r27338
</span><br>
<span class="quotelev1">&gt;  Open RTE repo revision: r27338
</span><br>
<span class="quotelev1">&gt;   Open RTE release date: Sep 13, 2012 (nightly snapshot tarball)
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.7a1r27338
</span><br>
<span class="quotelev1">&gt;      OPAL repo revision: r27338
</span><br>
<span class="quotelev1">&gt;       OPAL release date: Sep 13, 2012 (nightly snapshot tarball)
</span><br>
<span class="quotelev1">&gt;                 MPI API: 2.1
</span><br>
<span class="quotelev1">&gt;            Ident string: 1.7a1r27338
</span><br>
<span class="quotelev1">&gt;                  Prefix: /usr/local/openmpi-1.7_64_cc
</span><br>
<span class="quotelev1">&gt; Configured architecture: sparc-sun-solaris2.10
</span><br>
<span class="quotelev1">&gt;          Configure host: tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;           Configured by: fd1026
</span><br>
<span class="quotelev1">&gt;           Configured on: Fri Sep 14 10:48:04 CEST 2012
</span><br>
<span class="quotelev1">&gt;          Configure host: tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;                Built by: fd1026
</span><br>
<span class="quotelev1">&gt;                Built on: Fri Sep 14 12:04:50 CEST 2012
</span><br>
<span class="quotelev1">&gt;              Built host: tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;              C bindings: yes
</span><br>
<span class="quotelev1">&gt;            C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;             Fort mpif.h: yes (all)
</span><br>
<span class="quotelev1">&gt;            Fort use mpi: yes (full: ignore TKR)
</span><br>
<span class="quotelev1">&gt;       Fort use mpi size: deprecated-ompi-info-value
</span><br>
<span class="quotelev1">&gt;        Fort use mpi_f08: yes
</span><br>
<span class="quotelev1">&gt; Fort mpi_f08 compliance: The mpi_f08 module is available, but due to
</span><br>
<span class="quotelev1">&gt;                          limitations in the f95 compiler, does not support
</span><br>
<span class="quotelev1">&gt;                          the following: array subsections, ABSTRACT
</span><br>
<span class="quotelev1">&gt;                          INTERFACE function pointers, Fortran '08-specified
</span><br>
<span class="quotelev1">&gt;                          ASYNCHRONOUS behavior, PROCEDUREs, direct passthru
</span><br>
<span class="quotelev1">&gt;                          (where possible) to underlying Open MPI's C
</span><br>
<span class="quotelev1">&gt;                          functionality
</span><br>
<span class="quotelev1">&gt;  Fort mpi_f08 subarrays: no
</span><br>
<span class="quotelev1">&gt;           Java bindings: no
</span><br>
<span class="quotelev1">&gt;              C compiler: cc
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /opt/solstudio12.3/bin/cc
</span><br>
<span class="quotelev1">&gt;  C compiler family name: SUN
</span><br>
<span class="quotelev1">&gt;      C compiler version: 0x5120
</span><br>
<span class="quotelev1">&gt;            C++ compiler: CC
</span><br>
<span class="quotelev1">&gt;   C++ compiler absolute: /opt/solstudio12.3/bin/CC
</span><br>
<span class="quotelev1">&gt;           Fort compiler: f95
</span><br>
<span class="quotelev1">&gt;       Fort compiler abs: /opt/solstudio12.3/bin/f95
</span><br>
<span class="quotelev1">&gt;         Fort ignore TKR: yes (!$PRAGMA IGNORE_TKR)
</span><br>
<span class="quotelev1">&gt;   Fort 08 assumed shape: no
</span><br>
<span class="quotelev1">&gt;      Fort optional args: yes
</span><br>
<span class="quotelev1">&gt;            Fort BIND(C): yes
</span><br>
<span class="quotelev1">&gt;            Fort PRIVATE: yes
</span><br>
<span class="quotelev1">&gt;           Fort ABSTRACT: no
</span><br>
<span class="quotelev1">&gt;       Fort ASYNCHRONOUS: no
</span><br>
<span class="quotelev1">&gt;          Fort PROCEDURE: no
</span><br>
<span class="quotelev1">&gt; Fort f08 using wrappers: yes
</span><br>
<span class="quotelev1">&gt;             C profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;   Fort mpif.h profiling: yes
</span><br>
<span class="quotelev1">&gt;  Fort use mpi profiling: yes
</span><br>
<span class="quotelev1">&gt;   Fort use mpi_f08 prof: yes
</span><br>
<span class="quotelev1">&gt;          C++ exceptions: yes
</span><br>
<span class="quotelev1">&gt;          Thread support: posix (MPI_THREAD_MULTIPLE: yes, progress: no)
</span><br>
<span class="quotelev1">&gt;           Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;  Internal debug support: no
</span><br>
<span class="quotelev1">&gt;  MPI interface warnings: yes
</span><br>
<span class="quotelev1">&gt;     MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;         libltdl support: yes
</span><br>
<span class="quotelev1">&gt;   Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: yes
</span><br>
<span class="quotelev1">&gt;         MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;       MPI_WTIME support: native
</span><br>
<span class="quotelev1">&gt;     Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt;   Host topology support: yes
</span><br>
<span class="quotelev1">&gt;          MPI extensions: 
</span><br>
<span class="quotelev1">&gt;   FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;   C/R Enabled Debugging: no
</span><br>
<span class="quotelev1">&gt;     VampirTrace support: yes
</span><br>
<span class="quotelev1">&gt;  MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev1">&gt;    MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev1">&gt;     MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev1">&gt;        MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev1">&gt;        MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev1">&gt;       MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev1">&gt;  MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev1">&gt;           MCA backtrace: printstack (MCA v2.0, API v2.0, Component v1.7)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Afraid I have no earthly idea what is going on with your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installation - like I said, that code cannot build with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure line you've shown me, so something must be getting confused.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Afraid I'll have to punt :-(
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; I played with some other commands as well.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; tyr bin 140 orte-info
</span><br>
<span class="quotelev2">&gt;&gt;                 Package: Open MPI fd1026_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; Distribution
</span><br>
<span class="quotelev2">&gt;&gt;                Open RTE: 1.9a1r27285
</span><br>
<span class="quotelev2">&gt;&gt;  Open RTE repo revision: r27285
</span><br>
<span class="quotelev2">&gt;&gt;   Open RTE release date: Sep 10, 2012 (nightly snapshot tarball)
</span><br>
<span class="quotelev2">&gt;&gt;                    OPAL: 1.9a1r27285
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;   FT Checkpoint support: yes (checkpoint thread: yes)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do you see where I can have enabled &quot;FT Checkpoint support&quot; in my
</span><br>
<span class="quotelev2">&gt;&gt; configure command?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ../openmpi-1.9a1r27285/configure --prefix=/usr/local/openmpi-1.9_64_cc \
</span><br>
<span class="quotelev2">&gt;&gt;  --libdir=/usr/local/openmpi-1.9_64_cc/lib64 \
</span><br>
<span class="quotelev2">&gt;&gt;  LDFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;  CC=&quot;cc&quot; CXX=&quot;CC&quot; F77=&quot;f77&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;  FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;  C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;  OBJC_INCLUDE_PATH=&quot;&quot; MPIHOME=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;  --without-udapl --without-openib \
</span><br>
<span class="quotelev2">&gt;&gt;  --enable-mpi-f90 --with-mpi-f90-size=small \
</span><br>
<span class="quotelev2">&gt;&gt;  --enable-heterogeneous --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt;&gt;  --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev2">&gt;&gt;  --with-threads=posix --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev2">&gt;&gt;  --enable-opal-multi-threads \
</span><br>
<span class="quotelev2">&gt;&gt;  --with-hwloc=internal \
</span><br>
<span class="quotelev2">&gt;&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anybody know why &quot;FT Checkpoint&quot; is enabled in openmpi-1.9a1r27285?
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20216.php">Ralph Castain: "Re: [OMPI users] problem with openmpi-1.7a1r27338 on Solaris 10"</a>
<li><strong>Previous message:</strong> <a href="20214.php">Siegmar Gross: "[OMPI users] segmentation fault in openmpi-1.9a1r27285"</a>
<li><strong>In reply to:</strong> <a href="20214.php">Siegmar Gross: "[OMPI users] segmentation fault in openmpi-1.9a1r27285"</a>
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
