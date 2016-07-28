<?
$subject_val = "[OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  5 03:40:44 2013" -->
<!-- isoreceived="20130405074044" -->
<!-- sent="Fri, 5 Apr 2013 09:33:33 +0200 (CEST)" -->
<!-- isosent="20130405073333" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris" -->
<!-- id="201304050733.r357XXdq002000_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-05 03:33:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21683.php">Reuti: "Re: [OMPI users] configure problem"</a>
<li><strong>Previous message:</strong> <a href="21681.php">Alan Sayre: "[OMPI users] problems building openmpi v 1.6.4 using a local build of gcc 4.7.2 on rhel6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21690.php">Ralph Castain: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>Reply:</strong> <a href="21690.php">Ralph Castain: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="21692.php">Siegmar Gross: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="21693.php">Siegmar Gross: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>today I tried to install openmpi-1.9r28290 and got the following errors.
<br>
<p>Solaris 10, Sparc, Sun C 5.12, 32-bit version of openmpi
<br>
Solaris 10, x86_64, Sun C 5.12, 32-bit version of openmpi
<br>
Solaris 10, Sparc, Sun C 5.12, 64-bit version of openmpi
<br>
Solaris 10, x86_64, Sun C 5.12, 64-bit version of openmpi
<br>
---------------------------------------------------------
<br>
<p>...
<br>
&nbsp;&nbsp;CC       topology-solaris.lo
<br>
&quot;../../../../../../../openmpi-1.9r28290/opal/mca/hwloc/hwloc152/hwloc/src/topolo
<br>
gy-solaris.c&quot;, line 226: undefined symbol: binding
<br>
&quot;../../../../../../../openmpi-1.9r28290/opal/mca/hwloc/hwloc152/hwloc/src/topolo
<br>
gy-solaris.c&quot;, line 227: undefined symbol: hwloc_set
<br>
&quot;../../../../../../../openmpi-1.9r28290/opal/mca/hwloc/hwloc152/hwloc/src/topolo
<br>
gy-solaris.c&quot;, line 227: warning: improper pointer/integer combination: arg #1
<br>
cc: acomp failed for ../../../../../../../openmpi-1.9r28290/opal/mca/hwloc/hwloc
<br>
152/hwloc/src/topology-solaris.c
<br>
make[4]: *** [topology-solaris.lo] Error 1
<br>
...
<br>
<p><p><p><p>openSuSE Linux 12.1, x86_64, Sun C 5.12, 32-bit version of openmpi
<br>
openSuSE Linux 12.1, x86_64, Sun C 5.12, 64-bit version of openmpi
<br>
------------------------------------------------------------------
<br>
<p>...
<br>
&nbsp;&nbsp;PPFC     mpi-f08-sizeof.lo
<br>
&nbsp;&nbsp;PPFC     mpi-f08.lo
<br>
&quot;../../../../../openmpi-1.9r28290/ompi/mpi/fortran/use-mpi-f08/mpi-f08.F90&quot;, Lin
<br>
e = 1, Column = 1: INTERNAL: Interrupt: Segmentation fault
<br>
make[2]: *** [mpi-f08.lo] Error 1
<br>
make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9-Linux.x86_64.32
<br>
_cc/ompi/mpi/fortran/use-mpi-f08'
<br>
make[1]: *** [all-recursive] Error 1
<br>
...
<br>
<p><p>I could built an older version.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI root_at_linpc1 Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9r28209
<br>
&nbsp;&nbsp;Open MPI repo revision: r28209
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: Mar 25, 2013 (nightly snapshot tarball)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.9
<br>
&nbsp;&nbsp;Open RTE repo revision: r28134M
<br>
&nbsp;&nbsp;&nbsp;Open RTE release date: Feb 28, 2013
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: r28134M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Feb 28, 2013
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI API: 2.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.9r28209
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /usr/local/ompi-java_64_cc
<br>
&nbsp;Configured architecture: x86_64-unknown-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: linpc1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Tue Mar 26 15:54:59 CET 2013
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: linpc1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Tue Mar 26 16:31:01 CET 2013
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: linpc1
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
limitations in the f95 compiler, does not support the following: array 
<br>
subsections, ABSTRACT INTERFACE function pointers, Fortran '08-specified 
<br>
ASYNCHRONOUS behavior, PROCEDUREs, direct passthru (where possible) to 
<br>
underlying Open MPI's C functionality
<br>
&nbsp;&nbsp;Fort mpi_f08 subarrays: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java bindings: yes
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (MPI_THREAD_MULTIPLE: yes, OPAL support: yes, 
<br>
OMPI progress: no, ORTE progress: no, Event lib: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
&nbsp;&nbsp;Internal debug support: yes
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
&nbsp;mpirun default --prefix: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: gettimeofday
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA event: libevent2019 (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA hwloc: hwloc152 (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA if: linux_ipv6 (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA if: posix_ipv4 (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: linux (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA shmem: posix (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA dfs: app (MCA v2.0, API v1.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA dfs: orted (MCA v2.0, API v1.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA dfs: test (MCA v2.0, API v1.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: default_app (MCA v2.0, API v3.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: default_hnp (MCA v2.0, API v3.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: default_orted (MCA v2.0, API v3.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: env (MCA v2.0, API v3.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: hnp (MCA v2.0, API v3.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: singleton (MCA v2.0, API v3.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: slurm (MCA v2.0, API v3.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: tool (MCA v2.0, API v3.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA filem: raw (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA filem: rsh (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: hnp (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: mr_hnp (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: mr_orted (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: orted (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: tool (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA odls: default (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: rsh (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: slurm (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: simulator (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: lama (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: ppr (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: staged (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: binomial (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: debruijn (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: direct (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: radix (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA state: app (MCA v2.0, API v1.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA state: hnp (MCA v2.0, API v1.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA state: novm (MCA v2.0, API v1.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA state: orted (MCA v2.0, API v1.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA state: staged_hnp (MCA v2.0, API v1.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA state: staged_orted (MCA v2.0, API v1.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: inter (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: libnbc (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: tuned (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA fbtl: posix (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA fcoll: dynamic (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA fcoll: individual (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA fcoll: static (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA fcoll: two_phase (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA fcoll: ylib (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA fs: ufs (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: ompio (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: grdma (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: rdma (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: v (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: bfo (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: dr (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: vma (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sharedfp: dummy (MCA v2.0, API v2.0, Component v1.9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v2.0, API v2.0, Component v1.9)
<br>
<p><p>I would be grateful, if somebody can fix the problems. Thank you
<br>
very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21683.php">Reuti: "Re: [OMPI users] configure problem"</a>
<li><strong>Previous message:</strong> <a href="21681.php">Alan Sayre: "[OMPI users] problems building openmpi v 1.6.4 using a local build of gcc 4.7.2 on rhel6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21690.php">Ralph Castain: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>Reply:</strong> <a href="21690.php">Ralph Castain: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="21692.php">Siegmar Gross: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="21693.php">Siegmar Gross: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
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
