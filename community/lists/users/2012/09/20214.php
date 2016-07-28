<?
$subject_val = "[OMPI users] segmentation fault in openmpi-1.9a1r27285";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 14 08:58:52 2012" -->
<!-- isoreceived="20120914125852" -->
<!-- sent="Fri, 14 Sep 2012 14:51:56 +0200 (CEST)" -->
<!-- isosent="20120914125156" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] segmentation fault in openmpi-1.9a1r27285" -->
<!-- id="201209141251.q8ECpu41028544_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] segmentation fault in openmpi-1.9a1r27285<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-14 08:51:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20215.php">Ralph Castain: "Re: [OMPI users] segmentation fault in openmpi-1.9a1r27285"</a>
<li><strong>Previous message:</strong> <a href="20213.php">Siegmar Gross: "[OMPI users] problem with openmpi-1.7a1r27338 on Solaris 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20215.php">Ralph Castain: "Re: [OMPI users] segmentation fault in openmpi-1.9a1r27285"</a>
<li><strong>Reply:</strong> <a href="20215.php">Ralph Castain: "Re: [OMPI users] segmentation fault in openmpi-1.9a1r27285"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>in openmpi-1.9a1r27285 I got a segmentation fault while somehow
<br>
&quot;FT Checkpoint support&quot; was enabled. When I compile openmpi-1.7a1r27338
<br>
with the same configuration options &quot;FT Checkpoint&quot; is disabled so that
<br>
in my opinion it will be automatically enabled in openmpi-1.9a1r27285.
<br>
<p>../openmpi-1.7a1r27338/configure --prefix=/usr/local/openmpi-1.7_64_gcc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.7_64_gcc/lib64 \
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
&nbsp;&nbsp;--with-wrapper-cflags=-m64 \
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
&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
<p><p>tyr small_prog 122 ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI fd1026_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.7a1r27338
<br>
&nbsp;&nbsp;Open MPI repo revision: r27338
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: Sep 13, 2012 (nightly snapshot tarball)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.7a1r27338
<br>
&nbsp;&nbsp;Open RTE repo revision: r27338
<br>
&nbsp;&nbsp;&nbsp;Open RTE release date: Sep 13, 2012 (nightly snapshot tarball)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.7a1r27338
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: r27338
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Sep 13, 2012 (nightly snapshot tarball)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI API: 2.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.7a1r27338
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /usr/local/openmpi-1.7_64_cc
<br>
&nbsp;Configured architecture: sparc-sun-solaris2.10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: tyr.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: fd1026
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Fri Sep 14 10:48:04 CEST 2012
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: tyr.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: fd1026
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Fri Sep 14 12:04:50 CEST 2012
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: tyr.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort mpif.h: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort use mpi: yes (full: ignore TKR)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort use mpi size: deprecated-ompi-info-value
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort use mpi_f08: yes
<br>
&nbsp;Fort mpi_f08 compliance: The mpi_f08 module is available, but due to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;limitations in the f95 compiler, does not support
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the following: array subsections, ABSTRACT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTERFACE function pointers, Fortran '08-specified
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASYNCHRONOUS behavior, PROCEDUREs, direct passthru
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(where possible) to underlying Open MPI's C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;functionality
<br>
&nbsp;&nbsp;Fort mpi_f08 subarrays: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java bindings: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: cc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /opt/solstudio12.3/bin/cc
<br>
&nbsp;&nbsp;C compiler family name: SUN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler version: 0x5120
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: CC
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /opt/solstudio12.3/bin/CC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort compiler: f95
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort compiler abs: /opt/solstudio12.3/bin/f95
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort ignore TKR: yes (!$PRAGMA IGNORE_TKR)
<br>
&nbsp;&nbsp;&nbsp;Fort 08 assumed shape: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort optional args: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort BIND(C): yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort PRIVATE: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort ABSTRACT: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort ASYNCHRONOUS: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort PROCEDURE: no
<br>
&nbsp;Fort f08 using wrappers: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;Fort mpif.h profiling: yes
<br>
&nbsp;&nbsp;Fort use mpi profiling: yes
<br>
&nbsp;&nbsp;&nbsp;Fort use mpi_f08 prof: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (MPI_THREAD_MULTIPLE: yes, progress: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;MPI interface warnings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: yes
<br>
&nbsp;mpirun default --prefix: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: native
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Symbol vis. support: yes
<br>
&nbsp;&nbsp;&nbsp;Host topology support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI extensions: 
<br>
&nbsp;&nbsp;&nbsp;FT Checkpoint support: no (checkpoint thread: no)
<br>
&nbsp;&nbsp;&nbsp;C/R Enabled Debugging: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VampirTrace support: yes
<br>
&nbsp;&nbsp;MPI_MAX_PROCESSOR_NAME: 256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_ERROR_STRING: 256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_OBJECT_NAME: 64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_INFO_KEY: 36
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_INFO_VAL: 256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_PORT_NAME: 1024
<br>
&nbsp;&nbsp;MPI_MAX_DATAREP_STRING: 128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: printstack (MCA v2.0, API v2.0, Component v1.7)
<br>
...
<br>
<p><p><span class="quotelev2">&gt; &gt; Afraid I have no earthly idea what is going on with your
</span><br>
<span class="quotelev2">&gt; &gt; installation - like I said, that code cannot build with the
</span><br>
<span class="quotelev2">&gt; &gt; configure line you've shown me, so something must be getting confused.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Afraid I'll have to punt :-(
</span><br>
...
<br>
<span class="quotelev1">&gt; I played with some other commands as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr bin 140 orte-info
</span><br>
<span class="quotelev1">&gt;                  Package: Open MPI fd1026_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; Distribution
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.9a1r27285
</span><br>
<span class="quotelev1">&gt;   Open RTE repo revision: r27285
</span><br>
<span class="quotelev1">&gt;    Open RTE release date: Sep 10, 2012 (nightly snapshot tarball)
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.9a1r27285
</span><br>
...
<br>
<span class="quotelev1">&gt;    FT Checkpoint support: yes (checkpoint thread: yes)
</span><br>
...
<br>
<p><span class="quotelev1">&gt; Do you see where I can have enabled &quot;FT Checkpoint support&quot; in my
</span><br>
<span class="quotelev1">&gt; configure command?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.9a1r27285/configure --prefix=/usr/local/openmpi-1.9_64_cc \
</span><br>
<span class="quotelev1">&gt;   --libdir=/usr/local/openmpi-1.9_64_cc/lib64 \
</span><br>
<span class="quotelev1">&gt;   LDFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   CC=&quot;cc&quot; CXX=&quot;CC&quot; F77=&quot;f77&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev1">&gt;   CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;   CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
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
<span class="quotelev1">&gt;   --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;   --with-threads=posix --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;   --enable-opal-multi-threads \
</span><br>
<span class="quotelev1">&gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<p>Does anybody know why &quot;FT Checkpoint&quot; is enabled in openmpi-1.9a1r27285?
<br>
Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20215.php">Ralph Castain: "Re: [OMPI users] segmentation fault in openmpi-1.9a1r27285"</a>
<li><strong>Previous message:</strong> <a href="20213.php">Siegmar Gross: "[OMPI users] problem with openmpi-1.7a1r27338 on Solaris 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20215.php">Ralph Castain: "Re: [OMPI users] segmentation fault in openmpi-1.9a1r27285"</a>
<li><strong>Reply:</strong> <a href="20215.php">Ralph Castain: "Re: [OMPI users] segmentation fault in openmpi-1.9a1r27285"</a>
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
