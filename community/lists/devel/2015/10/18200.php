<?
$subject_val = "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 05:43:08 2015" -->
<!-- isoreceived="20151020094308" -->
<!-- sent="Tue, 20 Oct 2015 18:42:59 +0900" -->
<!-- isosent="20151020094259" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1" -->
<!-- id="6t75u37cmrih79gfn6q3j4gj.1445334179667_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-20 05:42:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18201.php">Tobias Hilbrich: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<li><strong>Previous message:</strong> <a href="18199.php">Gilles Gouaillardet: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="18198.php">Tobias Hilbrich: "[OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18201.php">Tobias Hilbrich: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<li><strong>Reply:</strong> <a href="18201.php">Tobias Hilbrich: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<li><strong>Reply:</strong> <a href="18202.php">Tobias Hilbrich: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tobias,
<br>
<p>Btw, did you recompile ompi with this xcode ?
<br>
Iirc, we do similar comparisons in ompi itself
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Tobias Hilbrich &lt;tobias.hilbrich_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;a wonderful puzzle for the OSX folks in your team (Reproducer attached):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Attached source file builds with Xcode 7.0.0, but fails since the release of Xcode 7.0.1. I post it here since it results from an &quot;if (MPI_COMM_NULL == MPI_COMM_SELF)&quot;. I am actually curious whether this is somehow off by itself, or whether it has something to do with how you define these constants. Overall, the situation is that this worked with previous clang compilers (and that it again works for more recent versions from mac-ports), so likely not your fault at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The issue I get is:
</span><br>
<span class="quotelev1">&gt;$ mpicc osx-10.10.5-xcode-7.0.1-openmpi-problem.c 
</span><br>
<span class="quotelev1">&gt;clang: error: unable to execute command: Segmentation fault: 11
</span><br>
<span class="quotelev1">&gt;clang: error: clang frontend command failed due to signal (use -v to see invocation)
</span><br>
<span class="quotelev1">&gt;Apple LLVM version 7.0.0 (clang-700.0.72)
</span><br>
<span class="quotelev1">&gt;Target: x86_64-apple-darwin14.5.0
</span><br>
<span class="quotelev1">&gt;Thread model: posix
</span><br>
<span class="quotelev1">&gt;clang: note: diagnostic msg: PLEASE submit a bug report to <a href="http://developer.apple.com/bugreporter/">http://developer.apple.com/bugreporter/</a> and include the crash backtrace, preprocessed source, and associated run script.
</span><br>
<span class="quotelev1">&gt;clang: note: diagnostic msg: 
</span><br>
<span class="quotelev1">&gt;********************
</span><br>
<span class="quotelev1">&gt;PLEASE ATTACH THE FOLLOWING FILES TO THE BUG REPORT:
</span><br>
<span class="quotelev1">&gt;...
</span><br>
<span class="quotelev1">&gt;********************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;As I said above the culprit is &quot;if (MPI_COMM_NULL == MPI_COMM_SELF)&quot;.
</span><br>
<span class="quotelev1">&gt;Also, this doesn't works either:
</span><br>
<span class="quotelev1">&gt;-  &quot;if (MPI_COMM_SELF == MPI_COMM_NULL)&quot;
</span><br>
<span class="quotelev1">&gt;But then, these work:
</span><br>
<span class="quotelev1">&gt;-  &quot;if (MPI_COMM_SELF == MPI_COMM_WORLD)&quot;
</span><br>
<span class="quotelev1">&gt;-  &quot;if (MPI_COMM_WORLD == MPI_COMM_SELF)&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So it appears it has something to do with MPI_COMM_NULL specifically.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Maybe you already know of the issue. Maybe you can provide something to alleviate this issue in your releases, since it may take a while until we get a newer Xcode version on most OSX'es.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;My &quot;ompi_info&quot; is at the bottom of the mail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;With that thanks for your looking into this, and many thanks for your wonderful MPI implementation,
</span><br>
<span class="quotelev1">&gt;-Tobias
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;$ ompi_info 
</span><br>
<span class="quotelev1">&gt;               Package: Open MPI saibot_at_Tobiass-MacBook-Pro.local
</span><br>
<span class="quotelev1">&gt;                        Distribution
</span><br>
<span class="quotelev1">&gt;              Open MPI: 1.8.4
</span><br>
<span class="quotelev1">&gt;Open MPI repo revision: v1.8.3-330-g0344f04
</span><br>
<span class="quotelev1">&gt; Open MPI release date: Dec 19, 2014
</span><br>
<span class="quotelev1">&gt;              Open RTE: 1.8.4
</span><br>
<span class="quotelev1">&gt;Open RTE repo revision: v1.8.3-330-g0344f04
</span><br>
<span class="quotelev1">&gt; Open RTE release date: Dec 19, 2014
</span><br>
<span class="quotelev1">&gt;                  OPAL: 1.8.4
</span><br>
<span class="quotelev1">&gt;    OPAL repo revision: v1.8.3-330-g0344f04
</span><br>
<span class="quotelev1">&gt;     OPAL release date: Dec 19, 2014
</span><br>
<span class="quotelev1">&gt;               MPI API: 3.0
</span><br>
<span class="quotelev1">&gt;          Ident string: 1.8.4
</span><br>
<span class="quotelev1">&gt;                Prefix: /Users/saibot/local/openmpi-1.8.4
</span><br>
<span class="quotelev1">&gt;Configured architecture: x86_64-apple-darwin14.0.0
</span><br>
<span class="quotelev1">&gt;        Configure host: Tobiass-MacBook-Pro.local
</span><br>
<span class="quotelev1">&gt;         Configured by: saibot
</span><br>
<span class="quotelev1">&gt;         Configured on: Sun Jan  4 09:27:07 CET 2015
</span><br>
<span class="quotelev1">&gt;        Configure host: Tobiass-MacBook-Pro.local
</span><br>
<span class="quotelev1">&gt;              Built by: saibot
</span><br>
<span class="quotelev1">&gt;              Built on: Sun Jan  4 09:33:26 CET 2015
</span><br>
<span class="quotelev1">&gt;            Built host: Tobiass-MacBook-Pro.local
</span><br>
<span class="quotelev1">&gt;            C bindings: yes
</span><br>
<span class="quotelev1">&gt;          C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;           Fort mpif.h: no
</span><br>
<span class="quotelev1">&gt;          Fort use mpi: no
</span><br>
<span class="quotelev1">&gt;     Fort use mpi size: deprecated-ompi-info-value
</span><br>
<span class="quotelev1">&gt;      Fort use mpi_f08: no
</span><br>
<span class="quotelev1">&gt;Fort mpi_f08 compliance: The mpi_f08 module was not built
</span><br>
<span class="quotelev1">&gt;Fort mpi_f08 subarrays: no
</span><br>
<span class="quotelev1">&gt;         Java bindings: no
</span><br>
<span class="quotelev1">&gt;Wrapper compiler rpath: unnecessary
</span><br>
<span class="quotelev1">&gt;            C compiler: gcc
</span><br>
<span class="quotelev1">&gt;   C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;C compiler family name: GNU
</span><br>
<span class="quotelev1">&gt;    C compiler version: 4.2.1
</span><br>
<span class="quotelev1">&gt;          C++ compiler: g++
</span><br>
<span class="quotelev1">&gt; C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;         Fort compiler: none
</span><br>
<span class="quotelev1">&gt;     Fort compiler abs: none
</span><br>
<span class="quotelev1">&gt;       Fort ignore TKR: no
</span><br>
<span class="quotelev1">&gt; Fort 08 assumed shape: no
</span><br>
<span class="quotelev1">&gt;    Fort optional args: no
</span><br>
<span class="quotelev1">&gt;        Fort INTERFACE: no
</span><br>
<span class="quotelev1">&gt;  Fort ISO_FORTRAN_ENV: no
</span><br>
<span class="quotelev1">&gt;     Fort STORAGE_SIZE: no
</span><br>
<span class="quotelev1">&gt;    Fort BIND(C) (all): no
</span><br>
<span class="quotelev1">&gt;    Fort ISO_C_BINDING: no
</span><br>
<span class="quotelev1">&gt;Fort SUBROUTINE BIND(C): no
</span><br>
<span class="quotelev1">&gt;     Fort TYPE,BIND(C): no
</span><br>
<span class="quotelev1">&gt;Fort T,BIND(C,name=&quot;a&quot;): no
</span><br>
<span class="quotelev1">&gt;          Fort PRIVATE: no
</span><br>
<span class="quotelev1">&gt;        Fort PROTECTED: no
</span><br>
<span class="quotelev1">&gt;         Fort ABSTRACT: no
</span><br>
<span class="quotelev1">&gt;     Fort ASYNCHRONOUS: no
</span><br>
<span class="quotelev1">&gt;        Fort PROCEDURE: no
</span><br>
<span class="quotelev1">&gt;         Fort C_FUNLOC: no
</span><br>
<span class="quotelev1">&gt;Fort f08 using wrappers: no
</span><br>
<span class="quotelev1">&gt;       Fort MPI_SIZEOF: no
</span><br>
<span class="quotelev1">&gt;           C profiling: yes
</span><br>
<span class="quotelev1">&gt;         C++ profiling: yes
</span><br>
<span class="quotelev1">&gt; Fort mpif.h profiling: no
</span><br>
<span class="quotelev1">&gt;Fort use mpi profiling: no
</span><br>
<span class="quotelev1">&gt; Fort use mpi_f08 prof: no
</span><br>
<span class="quotelev1">&gt;        C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;        Thread support: posix (MPI_THREAD_MULTIPLE: no, OPAL support: yes,
</span><br>
<span class="quotelev1">&gt;                        OMPI progress: no, ORTE progress: yes, Event lib:
</span><br>
<span class="quotelev1">&gt;                        yes)
</span><br>
<span class="quotelev1">&gt;         Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;Internal debug support: no
</span><br>
<span class="quotelev1">&gt;MPI interface warnings: yes
</span><br>
<span class="quotelev1">&gt;   MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt;Memory profiling support: no
</span><br>
<span class="quotelev1">&gt;Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;       libltdl support: yes
</span><br>
<span class="quotelev1">&gt; Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;       MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;     MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt;   Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt; Host topology support: yes
</span><br>
<span class="quotelev1">&gt;        MPI extensions: 
</span><br>
<span class="quotelev1">&gt; FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt; C/R Enabled Debugging: no
</span><br>
<span class="quotelev1">&gt;   VampirTrace support: yes
</span><br>
<span class="quotelev1">&gt;MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev1">&gt;  MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev1">&gt;   MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev1">&gt;      MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev1">&gt;      MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev1">&gt;     MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev1">&gt;MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev1">&gt;         MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;          MCA compress: bzip (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;          MCA compress: gzip (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA crs: none (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA db: hash (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA db: print (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA event: libevent2021 (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA hwloc: hwloc191 (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA if: bsdx_ipv6 (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA if: posix_ipv4 (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;       MCA installdirs: env (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;       MCA installdirs: config (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA pstat: test (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA sec: basic (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA shmem: posix (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA timer: darwin (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA dfs: app (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA dfs: orted (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA dfs: test (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;            MCA errmgr: default_app (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;            MCA errmgr: default_hnp (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;            MCA errmgr: default_orted (MCA v2.0, API v3.0, Component
</span><br>
<span class="quotelev1">&gt;                        v1.8.4)
</span><br>
<span class="quotelev1">&gt;            MCA errmgr: default_tool (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA ess: env (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA ess: hnp (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA ess: singleton (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA ess: slurm (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA ess: tool (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA filem: raw (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;           MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA iof: hnp (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA iof: mr_hnp (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA iof: mr_orted (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA iof: orted (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA iof: tool (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;              MCA odls: default (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA oob: tcp (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA plm: isolated (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA plm: rsh (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA plm: slurm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA ras: simulator (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA ras: slurm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA rmaps: lama (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA rmaps: mindist (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA rmaps: ppr (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA rmaps: staged (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA rml: oob (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;            MCA routed: binomial (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;            MCA routed: debruijn (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;            MCA routed: direct (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;            MCA routed: radix (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA state: app (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA state: hnp (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA state: novm (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA state: orted (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA state: staged_hnp (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA state: staged_orted (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA state: tool (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;         MCA allocator: basic (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;         MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;              MCA bcol: basesmuma (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;              MCA bcol: ptpcoll (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA bml: r2 (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA btl: self (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA btl: sm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA btl: tcp (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA btl: vader (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;              MCA coll: basic (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;              MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;              MCA coll: inter (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;              MCA coll: libnbc (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;              MCA coll: ml (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;              MCA coll: self (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;              MCA coll: sm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;              MCA coll: tuned (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA dpm: orte (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;              MCA fbtl: posix (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA fcoll: dynamic (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA fcoll: individual (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA fcoll: static (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA fcoll: two_phase (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA fcoll: ylib (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA fs: ufs (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA io: ompio (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;                MCA io: romio (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA mpool: grdma (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;             MCA mpool: sm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA osc: rdma (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA osc: sm (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA pml: v (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA pml: bfo (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA pml: cm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;            MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;            MCA rcache: vma (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;               MCA rte: orte (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;              MCA sbgp: basesmsocket (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;              MCA sbgp: basesmuma (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;              MCA sbgp: p2p (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;          MCA sharedfp: individual (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;          MCA sharedfp: lockedfile (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;          MCA sharedfp: sm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;              MCA topo: basic (MCA v2.0, API v2.1, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;         MCA vprotocol: pessimist (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18201.php">Tobias Hilbrich: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<li><strong>Previous message:</strong> <a href="18199.php">Gilles Gouaillardet: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="18198.php">Tobias Hilbrich: "[OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18201.php">Tobias Hilbrich: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<li><strong>Reply:</strong> <a href="18201.php">Tobias Hilbrich: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<li><strong>Reply:</strong> <a href="18202.php">Tobias Hilbrich: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
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
