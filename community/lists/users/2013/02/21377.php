<?
$subject_val = "Re: [OMPI users] Building 1.6.3 on OS X 10.8";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 14:46:21 2013" -->
<!-- isoreceived="20130211194621" -->
<!-- sent="Mon, 11 Feb 2013 14:46:16 -0500" -->
<!-- isosent="20130211194616" -->
<!-- name="Mark Bolstad" -->
<!-- email="the.render.dude_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 1.6.3 on OS X 10.8" -->
<!-- id="CAPa_DOA8qvvSsbda6K6VLge-jwEGgwp5rKVVDbn710LANUoaRw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CF310A_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building 1.6.3 on OS X 10.8<br>
<strong>From:</strong> Mark Bolstad (<em>the.render.dude_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-11 14:46:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21378.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Previous message:</strong> <a href="21376.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mmap and MPI_File_Read"</a>
<li><strong>In reply to:</strong> <a href="21373.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21378.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Reply:</strong> <a href="21378.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's what I noticed, no .so's (actually, I noticed that the dlname in the
<br>
.la file is empty. thank you, dtruss)
<br>
<p>I've built it two different ways:
<br>
--disable-mpi-f77
<br>
<p>and
<br>
&nbsp;--prefix=/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3
<br>
--disable-mpi-f77 --with-openib=no --enable-shared --disable-static
<br>
<p>Both give me the same errors and no .so's.
<br>
<p>I noticed that I point to the maports libtool (/opt/local/bin/libtool) so I
<br>
changed the path to find /usr/bin first to no avail. I changed the compiler
<br>
from gcc to clang and that didn't work either.
<br>
<p>Where do the shared objects get created in the build cycle?
<br>
<p>Mark
<br>
<p>On Mon, Feb 11, 2013 at 1:35 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Ah -- your plugins are all .a files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How did you configure/build Open MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 11, 2013, at 11:09 AM, Mark Bolstad &lt;the.render.dude_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; It's not just one plugin, it was about 6 of them. I just deleted the
</span><br>
<span class="quotelev1">&gt; error message from the others as I believed that opal_init was the problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, I have done a full build multiple times and have blown away all
</span><br>
<span class="quotelev1">&gt; the plugins and other remnants of the build and install and get the same
</span><br>
<span class="quotelev1">&gt; results every time.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here's the output from running ompi_info (same result with or w/o
</span><br>
<span class="quotelev1">&gt; OPAL_PREFIX are the same; LD_LIBRARY_PATH set; path points to both bin and
</span><br>
<span class="quotelev1">&gt; lib directory ):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:~/papillon/build/src] bolstadm% ompi_info
</span><br>
<span class="quotelev1">&gt;                          Package: Open MPI bolstadm_at_bolstadm-lm3Distribution
</span><br>
<span class="quotelev2">&gt; &gt;                 Open MPI: 1.6.3
</span><br>
<span class="quotelev2">&gt; &gt;    Open MPI SVN revision: r27472
</span><br>
<span class="quotelev2">&gt; &gt;    Open MPI release date: Oct 24, 2012
</span><br>
<span class="quotelev2">&gt; &gt;                 Open RTE: 1.6.3
</span><br>
<span class="quotelev2">&gt; &gt;    Open RTE SVN revision: r27472
</span><br>
<span class="quotelev2">&gt; &gt;    Open RTE release date: Oct 24, 2012
</span><br>
<span class="quotelev2">&gt; &gt;                     OPAL: 1.6.3
</span><br>
<span class="quotelev2">&gt; &gt;        OPAL SVN revision: r27472
</span><br>
<span class="quotelev2">&gt; &gt;        OPAL release date: Oct 24, 2012
</span><br>
<span class="quotelev2">&gt; &gt;                  MPI API: 2.1
</span><br>
<span class="quotelev2">&gt; &gt;             Ident string: 1.6.3
</span><br>
<span class="quotelev2">&gt; &gt;                   Prefix:
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3
</span><br>
<span class="quotelev2">&gt; &gt;  Configured architecture: x86_64-apple-darwin12.2.1
</span><br>
<span class="quotelev2">&gt; &gt;           Configure host: bolstadm-lm3
</span><br>
<span class="quotelev2">&gt; &gt;            Configured by: bolstadm
</span><br>
<span class="quotelev2">&gt; &gt;            Configured on: Sun Feb 10 19:09:36 EST 2013
</span><br>
<span class="quotelev2">&gt; &gt;           Configure host: bolstadm-lm3
</span><br>
<span class="quotelev2">&gt; &gt;                 Built by: bolstadm
</span><br>
<span class="quotelev2">&gt; &gt;                 Built on: Sun Feb 10 19:16:52 EST 2013
</span><br>
<span class="quotelev2">&gt; &gt;               Built host: bolstadm-lm3
</span><br>
<span class="quotelev2">&gt; &gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt; &gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran77 bindings: no
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev2">&gt; &gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev2">&gt; &gt;               C compiler: gcc
</span><br>
<span class="quotelev2">&gt; &gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt; &gt;   C compiler family name: GNU
</span><br>
<span class="quotelev2">&gt; &gt;       C compiler version: 4.2.1
</span><br>
<span class="quotelev2">&gt; &gt;             C++ compiler: g++
</span><br>
<span class="quotelev2">&gt; &gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev2">&gt; &gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev2">&gt; &gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev2">&gt; &gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;            C++ profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;      Fortran77 profiling: no
</span><br>
<span class="quotelev2">&gt; &gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev2">&gt; &gt;           C++ exceptions: no
</span><br>
<span class="quotelev2">&gt; &gt;           Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
</span><br>
<span class="quotelev2">&gt; &gt;            Sparse Groups: no
</span><br>
<span class="quotelev2">&gt; &gt;   Internal debug support: no
</span><br>
<span class="quotelev2">&gt; &gt;   MPI interface warnings: no
</span><br>
<span class="quotelev2">&gt; &gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt; &gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt; &gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt; &gt;          libltdl support: yes
</span><br>
<span class="quotelev2">&gt; &gt;    Heterogeneous support: no
</span><br>
<span class="quotelev2">&gt; &gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev2">&gt; &gt;          MPI I/O support: yes
</span><br>
<span class="quotelev2">&gt; &gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev2">&gt; &gt;      Symbol vis. support: yes
</span><br>
<span class="quotelev2">&gt; &gt;    Host topology support: yes
</span><br>
<span class="quotelev2">&gt; &gt;           MPI extensions: affinity example
</span><br>
<span class="quotelev2">&gt; &gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev2">&gt; &gt;      VampirTrace support: yes
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev2">&gt; &gt;      MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev2">&gt; &gt;        MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_paffinity_hwloc:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_carto_auto_detect:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_carto_file:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_shmem_mmap:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_shmem_posix:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_shmem_sysv:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_maffinity_first_use:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_maffinity_hwloc:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_sysinfo_darwin:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_errmgr_default:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_grpcomm_bad:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_grpcomm_basic:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_env:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_hnp:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_singleton:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_slave:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_slurm:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_slurmd:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_tool:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_notifier_command:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_notifier_syslog:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_oob_tcp:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_odls_default:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_iof_hnp:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_iof_orted:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_iof_tool:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ras_cm:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ras_slurm:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rmaps_load_balance:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rmaps_rank_file:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rmaps_resilient:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rmaps_round_robin:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rmaps_seq:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rmaps_topo:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rml_oob:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_routed_binomial:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_routed_cm:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_routed_direct:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_routed_linear:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_routed_radix:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_routed_slave:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_plm_rsh:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_plm_slurm:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_filem_rsh:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_allocator_basic:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_allocator_bucket:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_basic:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_hierarch:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_inter:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_self:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_sm:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_sync:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_tuned:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_io_romio:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rcache_vma:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_mpool_fake:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_mpool_rdma:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_mpool_sm:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_pml_bfo:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_pml_cm:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_pml_csum:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_pml_ob1:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_pml_v:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_osc_pt2pt:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_osc_rdma:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_btl_self:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_btl_sm:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_btl_tcp:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_topo_unity:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_pubsub_orte:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_dpm_orte:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA timer: darwin (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev2">&gt; &gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev2">&gt; &gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And here's an example of a plugin reported as an error:
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:~/papillon/build/src] bolstadm% l
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_paffinity_hwloc*
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_paffinity_hwloc.a
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_paffinity_hwloc.la*
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Feb 11, 2013 at 8:27 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; That's very idd; I cant think of why that would happen offhand. I build
</span><br>
<span class="quotelev1">&gt; and run all the time on ML with no problems. Can you deleted that plugin
</span><br>
<span class="quotelev1">&gt; and run ok?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 10, 2013, at 10:22 PM, &quot;Mark Bolstad&quot; &lt;the.render.dude_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I having some difficulties with building/running 1.6.3 on Mountain
</span><br>
<span class="quotelev1">&gt; Lion (10.8.2). I build with no errors and install into a prefix directory.
</span><br>
<span class="quotelev1">&gt; I get the following errors:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [bolstadm-lm3:38486] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_shmem_sysv:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It looks like opal_init failed for some reason; your parallel process
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt; &gt; &gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   opal_shmem_base_select failed
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [bolstadm-lm3:38486] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 79
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [bolstadm-lm3:38486] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; orterun.c at line 694
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I've fiddled with LD_LIBRARY_PATH, DYLD_LIBRARY_PATH, OPAL_PREFIX, in
</span><br>
<span class="quotelev1">&gt; combination and separately, and none of these seem to have much effect.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So, I decided to try a straight build. The only option was
</span><br>
<span class="quotelev1">&gt; --disable-mpi-f77. It installed into /usr/local. There is no other mpi
</span><br>
<span class="quotelev1">&gt; version installed on the system, and I still get the same errors.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; However, I did install the version from MacPorts (also 1.6.3), and it
</span><br>
<span class="quotelev1">&gt; works correctly.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I would appreciate if anyone had some insight into building on OS X
</span><br>
<span class="quotelev1">&gt; 10.8.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Mark
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21377/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21378.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Previous message:</strong> <a href="21376.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mmap and MPI_File_Read"</a>
<li><strong>In reply to:</strong> <a href="21373.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21378.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Reply:</strong> <a href="21378.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
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
