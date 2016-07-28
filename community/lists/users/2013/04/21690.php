<?
$subject_val = "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  5 13:44:58 2013" -->
<!-- isoreceived="20130405174458" -->
<!-- sent="Fri, 5 Apr 2013 10:44:50 -0700" -->
<!-- isosent="20130405174450" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris" -->
<!-- id="19FA2064-7B7E-4F7B-BBB4-3B164E90E478_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201304050733.r357XXdq002000_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-05 13:44:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21691.php">Eric Chamberland: "Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<li><strong>Previous message:</strong> <a href="21689.php">Eric Chamberland: "[OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<li><strong>In reply to:</strong> <a href="21682.php">Siegmar Gross: "[OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21692.php">Siegmar Gross: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 5, 2013, at 12:33 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; today I tried to install openmpi-1.9r28290 and got the following errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Solaris 10, Sparc, Sun C 5.12, 32-bit version of openmpi
</span><br>
<span class="quotelev1">&gt; Solaris 10, x86_64, Sun C 5.12, 32-bit version of openmpi
</span><br>
<span class="quotelev1">&gt; Solaris 10, Sparc, Sun C 5.12, 64-bit version of openmpi
</span><br>
<span class="quotelev1">&gt; Solaris 10, x86_64, Sun C 5.12, 64-bit version of openmpi
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  CC       topology-solaris.lo
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../../../openmpi-1.9r28290/opal/mca/hwloc/hwloc152/hwloc/src/topolo
</span><br>
<span class="quotelev1">&gt; gy-solaris.c&quot;, line 226: undefined symbol: binding
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../../../openmpi-1.9r28290/opal/mca/hwloc/hwloc152/hwloc/src/topolo
</span><br>
<span class="quotelev1">&gt; gy-solaris.c&quot;, line 227: undefined symbol: hwloc_set
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../../../openmpi-1.9r28290/opal/mca/hwloc/hwloc152/hwloc/src/topolo
</span><br>
<span class="quotelev1">&gt; gy-solaris.c&quot;, line 227: warning: improper pointer/integer combination: arg #1
</span><br>
<span class="quotelev1">&gt; cc: acomp failed for ../../../../../../../openmpi-1.9r28290/opal/mca/hwloc/hwloc
</span><br>
<span class="quotelev1">&gt; 152/hwloc/src/topology-solaris.c
</span><br>
<span class="quotelev1">&gt; make[4]: *** [topology-solaris.lo] Error 1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Found a missing variable declaration - try with r28293 or above.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openSuSE Linux 12.1, x86_64, Sun C 5.12, 32-bit version of openmpi
</span><br>
<span class="quotelev1">&gt; openSuSE Linux 12.1, x86_64, Sun C 5.12, 64-bit version of openmpi
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  PPFC     mpi-f08-sizeof.lo
</span><br>
<span class="quotelev1">&gt;  PPFC     mpi-f08.lo
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.9r28290/ompi/mpi/fortran/use-mpi-f08/mpi-f08.F90&quot;, Lin
</span><br>
<span class="quotelev1">&gt; e = 1, Column = 1: INTERNAL: Interrupt: Segmentation fault
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mpi-f08.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.32
</span><br>
<span class="quotelev1">&gt; _cc/ompi/mpi/fortran/use-mpi-f08'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I have to defer the Fortran stuff to Jeff.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I could built an older version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 Package: Open MPI root_at_linpc1 Distribution
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.9r28209
</span><br>
<span class="quotelev1">&gt;  Open MPI repo revision: r28209
</span><br>
<span class="quotelev1">&gt;   Open MPI release date: Mar 25, 2013 (nightly snapshot tarball)
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.9
</span><br>
<span class="quotelev1">&gt;  Open RTE repo revision: r28134M
</span><br>
<span class="quotelev1">&gt;   Open RTE release date: Feb 28, 2013
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.9
</span><br>
<span class="quotelev1">&gt;      OPAL repo revision: r28134M
</span><br>
<span class="quotelev1">&gt;       OPAL release date: Feb 28, 2013
</span><br>
<span class="quotelev1">&gt;                 MPI API: 2.1
</span><br>
<span class="quotelev1">&gt;            Ident string: 1.9r28209
</span><br>
<span class="quotelev1">&gt;                  Prefix: /usr/local/ompi-java_64_cc
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;          Configure host: linpc1
</span><br>
<span class="quotelev1">&gt;           Configured by: root
</span><br>
<span class="quotelev1">&gt;           Configured on: Tue Mar 26 15:54:59 CET 2013
</span><br>
<span class="quotelev1">&gt;          Configure host: linpc1
</span><br>
<span class="quotelev1">&gt;                Built by: root
</span><br>
<span class="quotelev1">&gt;                Built on: Tue Mar 26 16:31:01 CET 2013
</span><br>
<span class="quotelev1">&gt;              Built host: linpc1
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
<span class="quotelev1">&gt; limitations in the f95 compiler, does not support the following: array 
</span><br>
<span class="quotelev1">&gt; subsections, ABSTRACT INTERFACE function pointers, Fortran '08-specified 
</span><br>
<span class="quotelev1">&gt; ASYNCHRONOUS behavior, PROCEDUREs, direct passthru (where possible) to 
</span><br>
<span class="quotelev1">&gt; underlying Open MPI's C functionality
</span><br>
<span class="quotelev1">&gt;  Fort mpi_f08 subarrays: no
</span><br>
<span class="quotelev1">&gt;           Java bindings: yes
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
<span class="quotelev1">&gt;          Thread support: posix (MPI_THREAD_MULTIPLE: yes, OPAL support: yes, 
</span><br>
<span class="quotelev1">&gt; OMPI progress: no, ORTE progress: no, Event lib: no)
</span><br>
<span class="quotelev1">&gt;           Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;  Internal debug support: yes
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
<span class="quotelev1">&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;         MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;       MPI_WTIME support: gettimeofday
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
<span class="quotelev1">&gt;           MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA event: libevent2019 (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA hwloc: hwloc152 (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                  MCA if: linux_ipv6 (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                  MCA if: posix_ipv4 (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: env (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: config (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;              MCA memory: linux (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA shmem: posix (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA timer: linux (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA dfs: app (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA dfs: orted (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA dfs: test (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default_app (MCA v2.0, API v3.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default_hnp (MCA v2.0, API v3.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default_orted (MCA v2.0, API v3.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: env (MCA v2.0, API v3.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: hnp (MCA v2.0, API v3.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: singleton (MCA v2.0, API v3.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: slurm (MCA v2.0, API v3.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: tool (MCA v2.0, API v3.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA filem: raw (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA filem: rsh (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: hnp (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: mr_hnp (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: mr_orted (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: orted (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: tool (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA odls: default (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: tcp (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: rsh (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: slurm (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: simulator (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: slurm (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: lama (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: ppr (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: staged (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: oob (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;              MCA routed: binomial (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;              MCA routed: debruijn (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;              MCA routed: direct (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;              MCA routed: radix (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA state: app (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA state: hnp (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA state: novm (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA state: orted (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA state: staged_hnp (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA state: staged_orted (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: basic (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA bml: r2 (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: self (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: sm (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: tcp (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA coll: basic (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA coll: inter (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA coll: libnbc (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA coll: self (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sm (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA coll: tuned (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA fbtl: posix (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA fcoll: dynamic (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA fcoll: individual (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA fcoll: static (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA fcoll: two_phase (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA fcoll: ylib (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                  MCA fs: ufs (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                  MCA io: ompio (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                  MCA io: romio (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: grdma (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: sm (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: rdma (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: v (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: bfo (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: dr (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;              MCA rcache: vma (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;            MCA sharedfp: dummy (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA topo: unity (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful, if somebody can fix the problems. Thank you
</span><br>
<span class="quotelev1">&gt; very much for any help in advance.
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
<li><strong>Next message:</strong> <a href="21691.php">Eric Chamberland: "Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<li><strong>Previous message:</strong> <a href="21689.php">Eric Chamberland: "[OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<li><strong>In reply to:</strong> <a href="21682.php">Siegmar Gross: "[OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21692.php">Siegmar Gross: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
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
