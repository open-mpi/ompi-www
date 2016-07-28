<?
$subject_val = "Re: [OMPI users] Configuring openib on openmpi 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 09:56:28 2014" -->
<!-- isoreceived="20140730135628" -->
<!-- sent="Wed, 30 Jul 2014 06:56:23 -0700" -->
<!-- isosent="20140730135623" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configuring openib on openmpi 1.8.1" -->
<!-- id="FFEE0211-A42B-4D7D-9F41-B8F1A29AEB8F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADB=1m8ciLdZ7nDCzO53qmW-U9r=XgBwDAvaNq2aKyg9h_6dew_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configuring openib on openmpi 1.8.1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 09:56:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24896.php">Gus Correa: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24894.php">Chaitra Kumar: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24894.php">Chaitra Kumar: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24896.php">Gus Correa: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24896.php">Gus Correa: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24897.php">Chaitra Kumar: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does &quot;polaris&quot; have the same rpm's as the host where you checked in your prior email?
<br>
<p>Try adding &quot;--level 9&quot; to your ompi_info command line - the MCA param system changed somewhat and the params may just not be getting shown by default
<br>
<p><p>On Jul 30, 2014, at 2:35 AM, Chaitra Kumar &lt;chaitragkumar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The command: 'ompi_info --param btl openib' doesnt return any openib component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I try to use command like: ' mpirun --mca btl self,sm,openib ...'
</span><br>
<span class="quotelev1">&gt; it throws an error: 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host:      polaris
</span><br>
<span class="quotelev1">&gt; Framework: btl
</span><br>
<span class="quotelev1">&gt; Component: openib
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Chaitra
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 30, 2014 at 2:40 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; According to your output, you *do* have the IB components available:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What made you think that you don't have them?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 30, 2014, at 12:10 AM, Chaitra Kumar &lt;chaitragkumar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Howard,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The attached file &quot;config,out&quot; has the output of configure.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Output of ompi_info command:
</span><br>
<span class="quotelev2">&gt;&gt;                  Package: Open MPI padmanac_at_polaris-4 Distribution
</span><br>
<span class="quotelev2">&gt;&gt;                 Open MPI: 1.8.1
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI repo revision: r31483
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI release date: Apr 22, 2014
</span><br>
<span class="quotelev2">&gt;&gt;                 Open RTE: 1.8.1
</span><br>
<span class="quotelev2">&gt;&gt;   Open RTE repo revision: r31483
</span><br>
<span class="quotelev2">&gt;&gt;    Open RTE release date: Apr 22, 2014
</span><br>
<span class="quotelev2">&gt;&gt;                     OPAL: 1.8.1
</span><br>
<span class="quotelev2">&gt;&gt;       OPAL repo revision: r31483
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL release date: Apr 22, 2014
</span><br>
<span class="quotelev2">&gt;&gt;                  MPI API: 3.0
</span><br>
<span class="quotelev2">&gt;&gt;             Ident string: 1.8.1
</span><br>
<span class="quotelev2">&gt;&gt;                   Prefix: /home/padmanac/openmpi181
</span><br>
<span class="quotelev2">&gt;&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: polaris-4
</span><br>
<span class="quotelev2">&gt;&gt;            Configured by: padmanac
</span><br>
<span class="quotelev2">&gt;&gt;            Configured on: Tue Jul 29 11:41:12 PDT 2014
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: polaris-4
</span><br>
<span class="quotelev2">&gt;&gt;                 Built by: padmanac
</span><br>
<span class="quotelev2">&gt;&gt;                 Built on: Tue Jul 29 11:57:53 PDT 2014
</span><br>
<span class="quotelev2">&gt;&gt;               Built host: polaris-4
</span><br>
<span class="quotelev2">&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;              Fort mpif.h: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;             Fort use mpi: yes (limited: overloading)
</span><br>
<span class="quotelev2">&gt;&gt;        Fort use mpi size: deprecated-ompi-info-value
</span><br>
<span class="quotelev2">&gt;&gt;         Fort use mpi_f08: no
</span><br>
<span class="quotelev2">&gt;&gt;  Fort mpi_f08 compliance: The mpi_f08 module was not built
</span><br>
<span class="quotelev2">&gt;&gt;   Fort mpi_f08 subarrays: no
</span><br>
<span class="quotelev2">&gt;&gt;            Java bindings: no
</span><br>
<span class="quotelev2">&gt;&gt;   Wrapper compiler rpath: runpath
</span><br>
<span class="quotelev2">&gt;&gt;               C compiler: gcc
</span><br>
<span class="quotelev2">&gt;&gt;      C compiler absolute: /opt/gcc/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;   C compiler family name: GNU
</span><br>
<span class="quotelev2">&gt;&gt;       C compiler version: 4.8.2
</span><br>
<span class="quotelev2">&gt;&gt;             C++ compiler: g++
</span><br>
<span class="quotelev2">&gt;&gt;    C++ compiler absolute: /opt/gcc/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt;            Fort compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt;        Fort compiler abs: /opt/gcc/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;          Fort ignore TKR: no
</span><br>
<span class="quotelev2">&gt;&gt;    Fort 08 assumed shape: no
</span><br>
<span class="quotelev2">&gt;&gt;       Fort optional args: no
</span><br>
<span class="quotelev2">&gt;&gt;       Fort BIND(C) (all): no
</span><br>
<span class="quotelev2">&gt;&gt;       Fort ISO_C_BINDING: no
</span><br>
<span class="quotelev2">&gt;&gt;  Fort SUBROUTINE BIND(C): no
</span><br>
<span class="quotelev2">&gt;&gt;        Fort TYPE,BIND(C): no
</span><br>
<span class="quotelev2">&gt;&gt;  Fort T,BIND(C,name=&quot;a&quot;): no
</span><br>
<span class="quotelev2">&gt;&gt;             Fort PRIVATE: no
</span><br>
<span class="quotelev2">&gt;&gt;           Fort PROTECTED: no
</span><br>
<span class="quotelev2">&gt;&gt;            Fort ABSTRACT: no
</span><br>
<span class="quotelev2">&gt;&gt;        Fort ASYNCHRONOUS: no
</span><br>
<span class="quotelev2">&gt;&gt;           Fort PROCEDURE: no
</span><br>
<span class="quotelev2">&gt;&gt;  Fort f08 using wrappers: no
</span><br>
<span class="quotelev2">&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;    Fort mpif.h profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;   Fort use mpi profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;    Fort use mpi_f08 prof: no
</span><br>
<span class="quotelev2">&gt;&gt;           C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;           Thread support: posix (MPI_THREAD_MULTIPLE: no, OPAL support: yes,
</span><br>
<span class="quotelev2">&gt;&gt;                           OMPI progress: no, ORTE progress: yes, Event lib:
</span><br>
<span class="quotelev2">&gt;&gt;                           yes)
</span><br>
<span class="quotelev2">&gt;&gt;            Sparse Groups: no
</span><br>
<span class="quotelev2">&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;   MPI interface warnings: yes
</span><br>
<span class="quotelev2">&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev2">&gt;&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev2">&gt;&gt;      Symbol vis. support: yes
</span><br>
<span class="quotelev2">&gt;&gt;    Host topology support: yes
</span><br>
<span class="quotelev2">&gt;&gt;           MPI extensions:
</span><br>
<span class="quotelev2">&gt;&gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev2">&gt;&gt;    C/R Enabled Debugging: no
</span><br>
<span class="quotelev2">&gt;&gt;      VampirTrace support: yes
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev2">&gt;&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA compress: bzip (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA compress: gzip (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA crs: none (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA db: hash (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA db: print (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA event: libevent2021 (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA hwloc: hwloc172 (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA if: posix_ipv4 (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA if: linux_ipv6 (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA memory: linux (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pstat: linux (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sec: basic (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA shmem: posix (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA dfs: app (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA dfs: orted (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA dfs: test (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: default_app (MCA v2.0, API v3.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: default_hnp (MCA v2.0, API v3.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: default_orted (MCA v2.0, API v3.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;                           v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: default_tool (MCA v2.0, API v3.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: env (MCA v2.0, API v3.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: hnp (MCA v2.0, API v3.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: singleton (MCA v2.0, API v3.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: slurm (MCA v2.0, API v3.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: tool (MCA v2.0, API v3.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA filem: raw (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: mr_hnp (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: mr_orted (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA plm: isolated (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: simulator (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: lama (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: mindist (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: ppr (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: staged (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA routed: debruijn (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA routed: radix (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA state: app (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA state: hnp (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA state: novm (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA state: orted (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA state: staged_hnp (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA state: staged_orted (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA state: tool (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA bcol: basesmuma (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA bcol: ptpcoll (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: vader (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: libnbc (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: ml (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA fbtl: posix (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA fcoll: dynamic (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA fcoll: individual (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA fcoll: static (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA fcoll: two_phase (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA fcoll: ylib (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA fs: ufs (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: ompio (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: romio (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: grdma (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mtl: psm (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: rdma (MCA v2.0, API v3.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: sm (MCA v2.0, API v3.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: bfo (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: cm (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rte: orte (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA sbgp: basesmsocket (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA sbgp: basesmuma (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA sbgp: p2p (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA sharedfp: individual (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA sharedfp: lockedfile (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA sharedfp: sm (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA topo: basic (MCA v2.0, API v2.1, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA vprotocol: pessimist (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The command  'rpm -qa | grep ibverbs' lists following libraries.
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs-devel-static-1.1.7-1.x86_64
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs-devel-1.1.7-1.x86_64
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs-1.1.7-1.x86_64
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs-debuginfo-1.1.7-1.x86_64
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs-utils-1.1.7-1.x86_64
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know what i am missing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Chaitra
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 30, 2014 at 8:13 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Chaitra,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could you send the output from your configure and output from ompi_info?
</span><br>
<span class="quotelev2">&gt;&gt; Could you also send the output from the node where you are building ompi
</span><br>
<span class="quotelev2">&gt;&gt; of
</span><br>
<span class="quotelev2">&gt;&gt; rpm -qa | grep ibverbs
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If this command indicates an libibverbs-devel was installed on the system,
</span><br>
<span class="quotelev2">&gt;&gt; you should check to see if it was installed in the default location or for some
</span><br>
<span class="quotelev2">&gt;&gt; reason was relocated.  If you don't see that a libibverbs-devel rpm was installed,
</span><br>
<span class="quotelev2">&gt;&gt; then you need a sysadmin to install it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2014-07-29 19:35 GMT-06:00 Chaitra Kumar &lt;chaitragkumar_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Team,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to setup openmpi 1.8.1 on a system with infiniband.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am using the default configure options. I am not using any multithreading option.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After installation, no openib components are available.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried even with flag: '--with-verbs', still no use.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Should i use any other flag to enable openib? am I missing any step?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Chaitra
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24889.php">http://www.open-mpi.org/community/lists/users/2014/07/24889.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24891.php">http://www.open-mpi.org/community/lists/users/2014/07/24891.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;config.out&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24892.php">http://www.open-mpi.org/community/lists/users/2014/07/24892.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24893.php">http://www.open-mpi.org/community/lists/users/2014/07/24893.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24894.php">http://www.open-mpi.org/community/lists/users/2014/07/24894.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24895/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24896.php">Gus Correa: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24894.php">Chaitra Kumar: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24894.php">Chaitra Kumar: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24896.php">Gus Correa: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24896.php">Gus Correa: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24897.php">Chaitra Kumar: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
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
