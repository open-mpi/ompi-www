<?
$subject_val = "Re: [OMPI users] hybrid programming: cpu load issues";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 07:42:59 2015" -->
<!-- isoreceived="20150626114259" -->
<!-- sent="Fri, 26 Jun 2015 04:42:54 -0700" -->
<!-- isosent="20150626114254" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hybrid programming: cpu load issues" -->
<!-- id="CAMD57ocpNBLRTnHYscKnLKVPDV3BDFF2RnU5XyzMztSyLu-ssA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1435309201.4161.23.camel_at_tango.fis.unical.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] hybrid programming: cpu load issues<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-26 07:42:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27203.php">Nathan Hjelm: "Re: [OMPI users] vader/sm not being picked up"</a>
<li><strong>Previous message:</strong> <a href="27201.php">Fedele Stabile: "[OMPI users] hybrid programming: cpu load issues"</a>
<li><strong>In reply to:</strong> <a href="27201.php">Fedele Stabile: "[OMPI users] hybrid programming: cpu load issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27207.php">Fedele Stabile: "Re: [OMPI users] SOLVED hybrid programming: cpu load issues"</a>
<li><strong>Reply:</strong> <a href="27207.php">Fedele Stabile: "Re: [OMPI users] SOLVED hybrid programming: cpu load issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Starting in the 1.7 series, Open MPI automatically binds application
<br>
processes. By default, we bind to core if np &lt;= 2, otherwise we bind to
<br>
socket.. So your proc, and all its threads, are being bound to a single
<br>
core.
<br>
<p>What you probably want to do is add either &quot;--bind-to none&quot; or &quot;--bind-to
<br>
socket&quot; to your mpirun cmd line.
<br>
<p><p>On Fri, Jun 26, 2015 at 2:00 AM, Fedele Stabile &lt;
<br>
fedele.stabile_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I'm trying hybrid programming and I have this strange issue:
</span><br>
<span class="quotelev1">&gt; Running fortran code listed below it happens that it uses only the 200%
</span><br>
<span class="quotelev1">&gt; of cpu on each node also if I request 4 threads with the command
</span><br>
<span class="quotelev1">&gt; mpirun -n 2 -npernode 1  -x OMP_NUM_THREADS=4 ./pi_parallel_do.f.exe
</span><br>
<span class="quotelev1">&gt; I'll explain: four threads are created but it works as if they were only
</span><br>
<span class="quotelev1">&gt; two cores available
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; however if I run the OpenMP version it loads 400% of cpu, so it works on
</span><br>
<span class="quotelev1">&gt; four core.
</span><br>
<span class="quotelev1">&gt; This is the code and below is the output of ompi_info (as requested by
</span><br>
<span class="quotelev1">&gt; Howard Pritchard)
</span><br>
<span class="quotelev1">&gt; $ cat pi_parallel_do.f
</span><br>
<span class="quotelev1">&gt;         PROGRAM Compute_PI
</span><br>
<span class="quotelev1">&gt;            IMPLICIT NONE
</span><br>
<span class="quotelev1">&gt;         include &quot;mpif.h&quot;
</span><br>
<span class="quotelev1">&gt;         integer numprocs, rank, ierr
</span><br>
<span class="quotelev1">&gt;            INTEGER*8           N, i
</span><br>
<span class="quotelev1">&gt;            DOUBLE PRECISION  w, x, sum
</span><br>
<span class="quotelev1">&gt;            DOUBLE PRECISION  pi, mypi
</span><br>
<span class="quotelev1">&gt;            double precision n_mpi, pi_mpi
</span><br>
<span class="quotelev1">&gt;         call MPI_Init(ierr)
</span><br>
<span class="quotelev1">&gt;         call MPI_Comm_size(MPI_COMM_WORLD, numprocs, ierr)
</span><br>
<span class="quotelev1">&gt;         call MPI_Comm_rank(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev1">&gt;            N = 500000000         !! Number of intervals
</span><br>
<span class="quotelev1">&gt;            w = 1.0d0/(1.d0*N)          !! width of each interval
</span><br>
<span class="quotelev1">&gt;            sum = 0.0d0
</span><br>
<span class="quotelev1">&gt;         pi_mpi = 0.0
</span><br>
<span class="quotelev1">&gt; !$OMP    PARALLEL PRIVATE(x, mypi)
</span><br>
<span class="quotelev1">&gt;            mypi = 0.0d0
</span><br>
<span class="quotelev1">&gt; !$OMP    DO
</span><br>
<span class="quotelev1">&gt;            DO i = 0, N-1                !! Parallel Loop
</span><br>
<span class="quotelev1">&gt;              x = w * (i + 0.5d0)
</span><br>
<span class="quotelev1">&gt;              mypi = mypi + w*4.d0/(1.d0 + x * x)
</span><br>
<span class="quotelev1">&gt;            END DO
</span><br>
<span class="quotelev1">&gt; !$OMP    END DO
</span><br>
<span class="quotelev1">&gt; !$OMP CRITICAL
</span><br>
<span class="quotelev1">&gt;            pi_mpi = pi_mpi + mypi
</span><br>
<span class="quotelev1">&gt; !$OMP END CRITICAL
</span><br>
<span class="quotelev1">&gt; !$OMP    END PARALLEL
</span><br>
<span class="quotelev1">&gt;         call mpi_reduce(pi_mpi, pi, 1, MPI_DOUBLE_PRECISION, MPI_SUM, 0,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev1">&gt;            PRINT *, &quot;Pi = &quot;, pi
</span><br>
<span class="quotelev1">&gt;         call MPI_Finalize(ierr)
</span><br>
<span class="quotelev1">&gt;            END PROGRAM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and output of ompi_info:
</span><br>
<span class="quotelev1">&gt; $ ompi_info
</span><br>
<span class="quotelev1">&gt;                  Package: Open MPI root_at_newton-s Distribution
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.8.4
</span><br>
<span class="quotelev1">&gt;   Open MPI repo revision: v1.8.3-330-g0344f04
</span><br>
<span class="quotelev1">&gt;    Open MPI release date: Dec 19, 2014
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.8.4
</span><br>
<span class="quotelev1">&gt;   Open RTE repo revision: v1.8.3-330-g0344f04
</span><br>
<span class="quotelev1">&gt;    Open RTE release date: Dec 19, 2014
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.8.4
</span><br>
<span class="quotelev1">&gt;       OPAL repo revision: v1.8.3-330-g0344f04
</span><br>
<span class="quotelev1">&gt;        OPAL release date: Dec 19, 2014
</span><br>
<span class="quotelev1">&gt;                  MPI API: 3.0
</span><br>
<span class="quotelev1">&gt;             Ident string: 1.8.4
</span><br>
<span class="quotelev1">&gt;                   Prefix: /data/apps/mpi/openmpi-1.8.4-gnu
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;           Configure host: newton-s
</span><br>
<span class="quotelev1">&gt;            Configured by: root
</span><br>
<span class="quotelev1">&gt;            Configured on: Mon Apr 13 18:29:51 CEST 2015
</span><br>
<span class="quotelev1">&gt;           Configure host: newton-s
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: lun 13 apr 2015, 18.42.15, CEST
</span><br>
<span class="quotelev1">&gt;               Built host: newton-s
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;              Fort mpif.h: yes (all)
</span><br>
<span class="quotelev1">&gt;             Fort use mpi: yes (limited: overloading)
</span><br>
<span class="quotelev1">&gt;        Fort use mpi size: deprecated-ompi-info-value
</span><br>
<span class="quotelev1">&gt;         Fort use mpi_f08: no
</span><br>
<span class="quotelev1">&gt;  Fort mpi_f08 compliance: The mpi_f08 module was not built
</span><br>
<span class="quotelev1">&gt;   Fort mpi_f08 subarrays: no
</span><br>
<span class="quotelev1">&gt;            Java bindings: no
</span><br>
<span class="quotelev1">&gt;   Wrapper compiler rpath: runpath
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;   C compiler family name: GNU
</span><br>
<span class="quotelev1">&gt;       C compiler version: 4.4.7
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;            Fort compiler: gfortran
</span><br>
<span class="quotelev1">&gt;        Fort compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;          Fort ignore TKR: no
</span><br>
<span class="quotelev1">&gt;    Fort 08 assumed shape: no
</span><br>
<span class="quotelev1">&gt;       Fort optional args: no
</span><br>
<span class="quotelev1">&gt;           Fort INTERFACE: yes
</span><br>
<span class="quotelev1">&gt;     Fort ISO_FORTRAN_ENV: no
</span><br>
<span class="quotelev1">&gt;        Fort STORAGE_SIZE: no
</span><br>
<span class="quotelev1">&gt;       Fort BIND(C) (all): no
</span><br>
<span class="quotelev1">&gt;       Fort ISO_C_BINDING: yes
</span><br>
<span class="quotelev1">&gt;  Fort SUBROUTINE BIND(C): no
</span><br>
<span class="quotelev1">&gt;        Fort TYPE,BIND(C): no
</span><br>
<span class="quotelev1">&gt;  Fort T,BIND(C,name=&quot;a&quot;): no
</span><br>
<span class="quotelev1">&gt;             Fort PRIVATE: no
</span><br>
<span class="quotelev1">&gt;           Fort PROTECTED: no
</span><br>
<span class="quotelev1">&gt;            Fort ABSTRACT: no
</span><br>
<span class="quotelev1">&gt;        Fort ASYNCHRONOUS: no
</span><br>
<span class="quotelev1">&gt;           Fort PROCEDURE: no
</span><br>
<span class="quotelev1">&gt;            Fort C_FUNLOC: no
</span><br>
<span class="quotelev1">&gt;  Fort f08 using wrappers: no
</span><br>
<span class="quotelev1">&gt;          Fort MPI_SIZEOF: no
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;    Fort mpif.h profiling: yes
</span><br>
<span class="quotelev1">&gt;   Fort use mpi profiling: yes
</span><br>
<span class="quotelev1">&gt;    Fort use mpi_f08 prof: no
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (MPI_THREAD_MULTIPLE: yes, OPAL support:
</span><br>
<span class="quotelev1">&gt; yes,
</span><br>
<span class="quotelev1">&gt;                           OMPI progress: no, ORTE progress: yes, Event
</span><br>
<span class="quotelev1">&gt; lib:
</span><br>
<span class="quotelev1">&gt;                           yes)
</span><br>
<span class="quotelev1">&gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;   MPI interface warnings: yes
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
<span class="quotelev1">&gt;  mpirun default --prefix: yes
</span><br>
<span class="quotelev1">&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt;      Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt;    Host topology support: yes
</span><br>
<span class="quotelev1">&gt;           MPI extensions:
</span><br>
<span class="quotelev1">&gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;    C/R Enabled Debugging: no
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
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA compress: bzip (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA compress: gzip (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA crs: none (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                   MCA db: hash (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                   MCA db: print (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA event: libevent2021 (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: hwloc191 (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;                   MCA if: posix_ipv4 (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;                   MCA if: linux_ipv6 (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA memory: linux (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA pstat: linux (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA sec: basic (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA shmem: posix (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA dfs: app (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA dfs: orted (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA dfs: test (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: default_app (MCA v2.0, API v3.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: default_hnp (MCA v2.0, API v3.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: default_orted (MCA v2.0, API v3.0, Component
</span><br>
<span class="quotelev1">&gt;                           v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: default_tool (MCA v2.0, API v3.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: env (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: hnp (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: singleton (MCA v2.0, API v3.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: slurm (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: tm (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: tool (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA filem: raw (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: mr_hnp (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: mr_orted (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: isolated (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: tm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: loadleveler (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: simulator (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: tm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: lama (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: mindist (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: ppr (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: resilient (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: staged (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA routed: debruijn (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA routed: radix (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA state: app (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA state: hnp (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA state: novm (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA state: orted (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA state: staged_hnp (MCA v2.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA state: staged_orted (MCA v2.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA state: tool (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: basesmuma (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: ptpcoll (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: smcuda (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: vader (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: libnbc (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: ml (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                 MCA fbtl: posix (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: dynamic (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: individual (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: static (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: two_phase (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: ylib (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                   MCA fs: ufs (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                   MCA io: ompio (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: gpusm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: grdma (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rgpusm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: psm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: rdma (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: sm (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: bfo (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                  MCA rte: orte (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                 MCA sbgp: basesmsocket (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;                 MCA sbgp: basesmuma (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;                 MCA sbgp: p2p (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA sharedfp: individual (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA sharedfp: lockedfile (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA sharedfp: sm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: basic (MCA v2.0, API v2.1, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;            MCA vprotocol: pessimist (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27201.php">http://www.open-mpi.org/community/lists/users/2015/06/27201.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27202/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27203.php">Nathan Hjelm: "Re: [OMPI users] vader/sm not being picked up"</a>
<li><strong>Previous message:</strong> <a href="27201.php">Fedele Stabile: "[OMPI users] hybrid programming: cpu load issues"</a>
<li><strong>In reply to:</strong> <a href="27201.php">Fedele Stabile: "[OMPI users] hybrid programming: cpu load issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27207.php">Fedele Stabile: "Re: [OMPI users] SOLVED hybrid programming: cpu load issues"</a>
<li><strong>Reply:</strong> <a href="27207.php">Fedele Stabile: "Re: [OMPI users] SOLVED hybrid programming: cpu load issues"</a>
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
