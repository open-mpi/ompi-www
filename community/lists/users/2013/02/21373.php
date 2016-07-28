<?
$subject_val = "Re: [OMPI users] Building 1.6.3 on OS X 10.8";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 13:35:38 2013" -->
<!-- isoreceived="20130211183538" -->
<!-- sent="Mon, 11 Feb 2013 18:35:32 +0000" -->
<!-- isosent="20130211183532" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 1.6.3 on OS X 10.8" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CF310A_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAPa_DODs0XgNEQVvBTygydEkWuDAFrEt-66pT1Dyou===mff=A_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-11 13:35:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Previous message:</strong> <a href="21372.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>In reply to:</strong> <a href="21368.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21377.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Reply:</strong> <a href="21377.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah -- your plugins are all .a files.
<br>
<p>How did you configure/build Open MPI?
<br>
<p><p>On Feb 11, 2013, at 11:09 AM, Mark Bolstad &lt;the.render.dude_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It's not just one plugin, it was about 6 of them. I just deleted the error message from the others as I believed that opal_init was the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I have done a full build multiple times and have blown away all the plugins and other remnants of the build and install and get the same results every time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the output from running ompi_info (same result with or w/o OPAL_PREFIX are the same; LD_LIBRARY_PATH set; path points to both bin and lib directory ):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:~/papillon/build/src] bolstadm% ompi_info                                          Package: Open MPI bolstadm_at_bolstadm-lm3 Distribution
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.6.3
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r27472
</span><br>
<span class="quotelev1">&gt;    Open MPI release date: Oct 24, 2012
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.6.3
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r27472
</span><br>
<span class="quotelev1">&gt;    Open RTE release date: Oct 24, 2012
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.6.3
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r27472
</span><br>
<span class="quotelev1">&gt;        OPAL release date: Oct 24, 2012
</span><br>
<span class="quotelev1">&gt;                  MPI API: 2.1
</span><br>
<span class="quotelev1">&gt;             Ident string: 1.6.3
</span><br>
<span class="quotelev1">&gt;                   Prefix: /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-apple-darwin12.2.1
</span><br>
<span class="quotelev1">&gt;           Configure host: bolstadm-lm3
</span><br>
<span class="quotelev1">&gt;            Configured by: bolstadm
</span><br>
<span class="quotelev1">&gt;            Configured on: Sun Feb 10 19:09:36 EST 2013
</span><br>
<span class="quotelev1">&gt;           Configure host: bolstadm-lm3
</span><br>
<span class="quotelev1">&gt;                 Built by: bolstadm
</span><br>
<span class="quotelev1">&gt;                 Built on: Sun Feb 10 19:16:52 EST 2013
</span><br>
<span class="quotelev1">&gt;               Built host: bolstadm-lm3
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: no
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;   C compiler family name: GNU
</span><br>
<span class="quotelev1">&gt;       C compiler version: 4.2.1
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: no
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
</span><br>
<span class="quotelev1">&gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;   MPI interface warnings: no
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
<span class="quotelev1">&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt;      Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt;    Host topology support: yes
</span><br>
<span class="quotelev1">&gt;           MPI extensions: affinity example
</span><br>
<span class="quotelev1">&gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;      VampirTrace support: yes
</span><br>
<span class="quotelev1">&gt;   MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev1">&gt;     MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev1">&gt;      MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev1">&gt;         MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev1">&gt;         MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev1">&gt;        MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev1">&gt;   MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_paffinity_hwloc: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_carto_auto_detect: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_carto_file: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_shmem_mmap: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_shmem_posix: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_shmem_sysv: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_maffinity_first_use: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_maffinity_hwloc: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_sysinfo_darwin: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_errmgr_default: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_grpcomm_bad: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_grpcomm_basic: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_env: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_hnp: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_singleton: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_slave: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_slurm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_slurmd: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ess_tool: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_notifier_command: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_notifier_syslog: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_oob_tcp: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_odls_default: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_iof_hnp: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_iof_orted: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_iof_tool: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ras_cm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_ras_slurm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rmaps_load_balance: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rmaps_rank_file: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rmaps_resilient: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rmaps_round_robin: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rmaps_seq: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rmaps_topo: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rml_oob: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_routed_binomial: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_routed_cm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_routed_direct: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_routed_linear: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_routed_radix: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_routed_slave: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_plm_rsh: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_plm_slurm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_filem_rsh: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_allocator_basic: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_allocator_bucket: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_basic: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_hierarch: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_inter: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_self: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_sm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_sync: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_coll_tuned: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_io_romio: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_rcache_vma: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_mpool_fake: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_mpool_rdma: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_mpool_sm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_pml_bfo: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_pml_cm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_pml_csum: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_pml_ob1: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_pml_v: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_osc_pt2pt: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_osc_rdma: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_btl_self: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_btl_sm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_btl_tcp: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_topo_unity: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_pubsub_orte: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_dpm_orte: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev1">&gt;                MCA timer: darwin (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And here's an example of a plugin reported as an error:
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:~/papillon/build/src] bolstadm% l /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_paffinity_hwloc*
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_paffinity_hwloc.a
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_paffinity_hwloc.la*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 11, 2013 at 8:27 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; That's very idd; I cant think of why that would happen offhand. I build and run all the time on ML with no problems. Can you deleted that plugin and run ok?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 10, 2013, at 10:22 PM, &quot;Mark Bolstad&quot; &lt;the.render.dude_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I having some difficulties with building/running 1.6.3 on Mountain Lion (10.8.2). I build with no errors and install into a prefix directory. I get the following errors:
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:38486] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_shmem_sysv: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   opal_shmem_base_select failed
</span><br>
<span class="quotelev2">&gt; &gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:38486] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
</span><br>
<span class="quotelev2">&gt; &gt; [bolstadm-lm3:38486] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c at line 694
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've fiddled with LD_LIBRARY_PATH, DYLD_LIBRARY_PATH, OPAL_PREFIX, in combination and separately, and none of these seem to have much effect.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, I decided to try a straight build. The only option was --disable-mpi-f77. It installed into /usr/local. There is no other mpi version installed on the system, and I still get the same errors.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, I did install the version from MacPorts (also 1.6.3), and it works correctly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would appreciate if anyone had some insight into building on OS X 10.8.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mark
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
<li><strong>Next message:</strong> <a href="21374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Previous message:</strong> <a href="21372.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>In reply to:</strong> <a href="21368.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21377.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Reply:</strong> <a href="21377.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
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
