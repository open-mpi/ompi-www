<?
$subject_val = "Re: [OMPI users] orte has lost communication";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 06:51:50 2016" -->
<!-- isoreceived="20160412105150" -->
<!-- sent="Tue, 12 Apr 2016 19:51:48 +0900" -->
<!-- isosent="20160412105148" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte has lost communication" -->
<!-- id="CAAkFZ5sRqURqYEvq4sa=rs8XBTw=SEYn-HRaTeexdoMq5=UqkQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20160412091943.GA1487_at_woyzeck" -->
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
<strong>Subject:</strong> Re: [OMPI users] orte has lost communication<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-12 06:51:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28926.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>Previous message:</strong> <a href="28924.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>In reply to:</strong> <a href="28924.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28926.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>Reply:</strong> <a href="28926.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Stefan,
<br>
<p>what if you
<br>
ulimit -c unlimited
<br>
<p>do orted generate some core dump ?
<br>
<p>Cheers
<br>
<p>Gilles
<br>
<p>On Tuesday, April 12, 2016, Stefan Friedel &lt;
<br>
stefan.friedel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Apr 12, 2016 at 05:11:59PM +0900, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt; Dear Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which version of OpenMPI are you using ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; as I wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    openmpi-1.10.2, slurm-15.08.9; homes mounted via NFS/RDMA/ipoib, mpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when does the error occur ?
</span><br>
<span class="quotelev2">&gt;&gt; is it before MPI_Init() completes ?
</span><br>
<span class="quotelev2">&gt;&gt; is it in the middle of the job ? if yes, are you sure no task invoked
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Abort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; During the setup of the job (in most cases) and there is no output from the
</span><br>
<span class="quotelev1">&gt; application. I will build a minimal program to get some printf debugging
</span><br>
<span class="quotelev1">&gt; ...I'll
</span><br>
<span class="quotelev1">&gt; report...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; also, you might want to check the system logs and make sure there was no
</span><br>
<span class="quotelev2">&gt;&gt; OOM
</span><br>
<span class="quotelev2">&gt;&gt; (Out Of Memory).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; No OOM messages from the nodes. No relevant messages at all from the
</span><br>
<span class="quotelev1">&gt; nodes...(remote syslog is running from all nodes to a central system)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca oob_tcp_if_include eth0 ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I already tested this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl tcp,vader,self --mca btl_tcp_if_include eth0 ...
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl tcp,vader,self --mca btl_tcp_if_include ib0 ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Just tested this on 350 nodes - two out of seven jobs spawned one after
</span><br>
<span class="quotelev1">&gt; each
</span><br>
<span class="quotelev1">&gt; other were successfull but subsequent jobs were failing again:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *tcp,vader,self eth0 failed
</span><br>
<span class="quotelev1">&gt; *tcp,sm,self eth0 failed
</span><br>
<span class="quotelev1">&gt; *tcp,vader,self ib0 failed
</span><br>
<span class="quotelev1">&gt; *tcp,sm,self ib0 success!
</span><br>
<span class="quotelev1">&gt; *tcp,sm,self ib0 failed :-/
</span><br>
<span class="quotelev1">&gt; *tcp,sm,self ib0 success again!
</span><br>
<span class="quotelev1">&gt; *tcp,sm,self ib0 failed...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hhmmm. tcp+sm is a little bit more reliable??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the sake of completeness - I forgot the ompi_info output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Package: Open MPI root_at_dyaus Distribution
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.10.2
</span><br>
<span class="quotelev1">&gt;  Open MPI repo revision: v1.10.1-145-g799148f
</span><br>
<span class="quotelev1">&gt;   Open MPI release date: Jan 21, 2016
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.10.2
</span><br>
<span class="quotelev1">&gt;  Open RTE repo revision: v1.10.1-145-g799148f
</span><br>
<span class="quotelev1">&gt;   Open RTE release date: Jan 21, 2016
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.10.2
</span><br>
<span class="quotelev1">&gt;      OPAL repo revision: v1.10.1-145-g799148f
</span><br>
<span class="quotelev1">&gt;       OPAL release date: Jan 21, 2016
</span><br>
<span class="quotelev1">&gt;                 MPI API: 3.0.0
</span><br>
<span class="quotelev1">&gt;            Ident string: 1.10.2
</span><br>
<span class="quotelev1">&gt;                  Prefix: /opt/openmpi/1.10.2/gcc/4.9.2
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt;          Configure host: dyaus
</span><br>
<span class="quotelev1">&gt;           Configured by: root
</span><br>
<span class="quotelev1">&gt;           Configured on: Mon Apr 11 09:54:21 CEST 2016
</span><br>
<span class="quotelev1">&gt;          Configure host: dyaus
</span><br>
<span class="quotelev1">&gt;                Built by: root
</span><br>
<span class="quotelev1">&gt;                Built on: Mon Apr 11 10:12:25 CEST 2016
</span><br>
<span class="quotelev1">&gt;              Built host: dyaus
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
<span class="quotelev1">&gt; limitations in the gfortran compiler, does not support the following: array
</span><br>
<span class="quotelev1">&gt; subsections, direct passthru (where possible) to underlying Open MPI's C
</span><br>
<span class="quotelev1">&gt; functionality
</span><br>
<span class="quotelev1">&gt;  Fort mpi_f08 subarrays: no
</span><br>
<span class="quotelev1">&gt;           Java bindings: no
</span><br>
<span class="quotelev1">&gt;  Wrapper compiler rpath: runpath
</span><br>
<span class="quotelev1">&gt;              C compiler: gcc
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;  C compiler family name: GNU
</span><br>
<span class="quotelev1">&gt;      C compiler version: 4.9.2
</span><br>
<span class="quotelev1">&gt;            C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;   C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;           Fort compiler: gfortran
</span><br>
<span class="quotelev1">&gt;       Fort compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;         Fort ignore TKR: yes (!GCC$ ATTRIBUTES NO_ARG_CHECK ::)
</span><br>
<span class="quotelev1">&gt;   Fort 08 assumed shape: yes
</span><br>
<span class="quotelev1">&gt;      Fort optional args: yes
</span><br>
<span class="quotelev1">&gt;          Fort INTERFACE: yes
</span><br>
<span class="quotelev1">&gt;    Fort ISO_FORTRAN_ENV: yes
</span><br>
<span class="quotelev1">&gt;       Fort STORAGE_SIZE: yes
</span><br>
<span class="quotelev1">&gt;      Fort BIND(C) (all): yes
</span><br>
<span class="quotelev1">&gt;      Fort ISO_C_BINDING: yes
</span><br>
<span class="quotelev1">&gt; Fort SUBROUTINE BIND(C): yes
</span><br>
<span class="quotelev1">&gt;       Fort TYPE,BIND(C): yes
</span><br>
<span class="quotelev1">&gt; Fort T,BIND(C,name=&quot;a&quot;): yes
</span><br>
<span class="quotelev1">&gt;            Fort PRIVATE: yes
</span><br>
<span class="quotelev1">&gt;          Fort PROTECTED: yes
</span><br>
<span class="quotelev1">&gt;           Fort ABSTRACT: yes
</span><br>
<span class="quotelev1">&gt;       Fort ASYNCHRONOUS: yes
</span><br>
<span class="quotelev1">&gt;          Fort PROCEDURE: yes
</span><br>
<span class="quotelev1">&gt;         Fort USE...ONLY: yes
</span><br>
<span class="quotelev1">&gt;           Fort C_FUNLOC: yes
</span><br>
<span class="quotelev1">&gt; Fort f08 using wrappers: yes
</span><br>
<span class="quotelev1">&gt;         Fort MPI_SIZEOF: yes
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
<span class="quotelev1">&gt;          C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;          Thread support: posix (MPI_THREAD_MULTIPLE: no, OPAL support:
</span><br>
<span class="quotelev1">&gt; yes, OMPI progress: no, ORTE progress: yes, Event lib: yes)
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
<span class="quotelev1">&gt;              dl support: yes
</span><br>
<span class="quotelev1">&gt;   Heterogeneous support: no
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
<span class="quotelev1">&gt;          MPI extensions:   FT Checkpoint support: no (checkpoint thread:
</span><br>
<span class="quotelev1">&gt; no)
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
<span class="quotelev1">&gt;           MCA backtrace: execinfo (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;            MCA compress: gzip (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;            MCA compress: bzip (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA crs: none (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                  MCA db: hash (MCA v2.0.0, API v1.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                  MCA db: print (MCA v2.0.0, API v1.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                  MCA dl: dlopen (MCA v2.0.0, API v1.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA event: libevent2021 (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA hwloc: hwloc191 (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;                  MCA if: posix_ipv4 (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;                  MCA if: linux_ipv6 (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: env (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: config (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;              MCA memory: linux (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA pstat: linux (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA sec: basic (MCA v2.0.0, API v1.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA shmem: posix (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA shmem: sysv (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA shmem: mmap (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA timer: linux (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA dfs: app (MCA v2.0.0, API v1.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA dfs: test (MCA v2.0.0, API v1.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA dfs: orted (MCA v2.0.0, API v1.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default_tool (MCA v2.0.0, API v3.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default_hnp (MCA v2.0.0, API v3.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default_app (MCA v2.0.0, API v3.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default_orted (MCA v2.0.0, API v3.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: slurm (MCA v2.0.0, API v3.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: tool (MCA v2.0.0, API v3.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: singleton (MCA v2.0.0, API v3.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: env (MCA v2.0.0, API v3.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: hnp (MCA v2.0.0, API v3.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA filem: raw (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: bad (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: orted (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: hnp (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: mr_hnp (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: tool (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: mr_orted (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;                MCA odls: default (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: tcp (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: isolated (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: slurm (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: rsh (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: simulator (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: slurm (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: loadleveler (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: ppr (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: resilient (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: rank_file (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: mindist (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: staged (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: seq (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: oob (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;              MCA routed: binomial (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;              MCA routed: radix (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;              MCA routed: direct (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;              MCA routed: debruijn (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA state: staged_orted (MCA v2.0.0, API v1.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA state: dvm (MCA v2.0.0, API v1.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA state: orted (MCA v2.0.0, API v1.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA state: tool (MCA v2.0.0, API v1.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA state: app (MCA v2.0.0, API v1.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA state: novm (MCA v2.0.0, API v1.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA state: staged_hnp (MCA v2.0.0, API v1.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA state: hnp (MCA v2.0.0, API v1.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: bucket (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: basic (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                MCA bcol: basesmuma (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;                MCA bcol: ptpcoll (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA bml: r2 (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: openib (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: self (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: tcp (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: sm (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: vader (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: tuned (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: self (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: basic (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sm (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: inter (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: ml (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: libnbc (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: hierarch (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA dpm: orte (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                MCA fbtl: posix (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA fcoll: individual (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA fcoll: two_phase (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA fcoll: static (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA fcoll: dynamic (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA fcoll: ylib (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                  MCA fs: ufs (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                  MCA io: romio (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                  MCA io: ompio (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: grdma (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: sm (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA mtl: psm (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: pt2pt (MCA v2.0.0, API v3.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: sm (MCA v2.0.0, API v3.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: v (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: ob1 (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: cm (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: bfo (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;              MCA pubsub: orte (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;              MCA rcache: vma (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rte: orte (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                MCA sbgp: basesmuma (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;                MCA sbgp: p2p (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;                MCA sbgp: basesmsocket (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;            MCA sharedfp: lockedfile (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;            MCA sharedfp: sm (MCA v2.0.0, API v2.0.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;            MCA sharedfp: individual (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;                MCA topo: basic (MCA v2.0.0, API v2.1.0, Component v1.10.2)
</span><br>
<span class="quotelev1">&gt;           MCA vprotocol: pessimist (MCA v2.0.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v1.10.2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MfG/Sincerely
</span><br>
<span class="quotelev1">&gt; Stefan Friedel
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; IWR * 4.317 * INF205 * 69120 Heidelberg
</span><br>
<span class="quotelev1">&gt; T +49 6221 5414404 * F +49 6221 5414427
</span><br>
<span class="quotelev1">&gt; stefan.friedel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28925/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28926.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>Previous message:</strong> <a href="28924.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>In reply to:</strong> <a href="28924.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28926.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>Reply:</strong> <a href="28926.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
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
