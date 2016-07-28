<?
$subject_val = "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 10:15:01 2015" -->
<!-- isoreceived="20151020141501" -->
<!-- sent="Tue, 20 Oct 2015 14:14:33 +0000" -->
<!-- isosent="20151020141433" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1" -->
<!-- id="8BD5C93A-1BD0-4835-9FC0-42F6B9490324_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F044AFAD-5B07-49ED-964B-37DB37D18F6E_at_tu-dresden.de" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-20 10:14:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18204.php">Geoffrey Paulsen: "[OMPI devel] IBM Innovation Center Reserved for Open MPI Face-2-Face"</a>
<li><strong>Previous message:</strong> <a href="18202.php">Tobias Hilbrich: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<li><strong>In reply to:</strong> <a href="18202.php">Tobias Hilbrich: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18221.php">Gilles Gouaillardet: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<li><strong>Reply:</strong> <a href="18221.php">Gilles Gouaillardet: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tobias -- 
<br>
<p>I'm able to replicate the problem with 1.8.4 and 1.8.8 and 1.10.0 on OS X 10.10.5 (Yosemite) and Xcode 7.0.1.  I'd suggest filing a bug at bugreporter.apple.com with the information that clang provided in their output.
<br>
<p>If there's a bug in the compiler, there's not much that we here at OMPI can do without digging in deep to understand the actual bug (not just one of its symptoms/manifestations) and then putting in a workaround.  We've been a bit resistant to putting in compiler workarounds in the past, because that would be a nightmare (since Open MPI supports so many compilers).  Instead, we've encouraged compiler vendors to fix their compilers.
<br>
<p><p><p><span class="quotelev1">&gt; On Oct 20, 2015, at 7:07 AM, Tobias Hilbrich &lt;tobias.hilbrich_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as for that, recompiling OpenMPI works, but causes no change here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Tobias
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dr.-Ing. Tobias Hilbrich
</span><br>
<span class="quotelev1">&gt; Research Assistant
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Technische Universitaet Dresden, Germany
</span><br>
<span class="quotelev1">&gt; Tel.: +49 (351) 463-38485
</span><br>
<span class="quotelev1">&gt; E-Mail: tobias.hilbrich_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 20 Oct 2015, at 11:42, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tobias,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Btw, did you recompile ompi with this xcode ?
</span><br>
<span class="quotelev2">&gt;&gt; Iirc, we do similar comparisons in ompi itself
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tobias Hilbrich &lt;tobias.hilbrich_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a wonderful puzzle for the OSX folks in your team (Reproducer attached):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attached source file builds with Xcode 7.0.0, but fails since the release of Xcode 7.0.1. I post it here since it results from an &quot;if (MPI_COMM_NULL == MPI_COMM_SELF)&quot;. I am actually curious whether this is somehow off by itself, or whether it has something to do with how you define these constants. Overall, the situation is that this worked with previous clang compilers (and that it again works for more recent versions from mac-ports), so likely not your fault at all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The issue I get is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpicc osx-10.10.5-xcode-7.0.1-openmpi-problem.c 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clang: error: unable to execute command: Segmentation fault: 11
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clang: error: clang frontend command failed due to signal (use -v to see invocation)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Apple LLVM version 7.0.0 (clang-700.0.72)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Target: x86_64-apple-darwin14.5.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clang: note: diagnostic msg: PLEASE submit a bug report to <a href="http://developer.apple.com/bugreporter/">http://developer.apple.com/bugreporter/</a> and include the crash backtrace, preprocessed source, and associated run script.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clang: note: diagnostic msg: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ********************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PLEASE ATTACH THE FOLLOWING FILES TO THE BUG REPORT:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ********************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I said above the culprit is &quot;if (MPI_COMM_NULL == MPI_COMM_SELF)&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, this doesn't works either:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  &quot;if (MPI_COMM_SELF == MPI_COMM_NULL)&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But then, these work:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  &quot;if (MPI_COMM_SELF == MPI_COMM_WORLD)&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  &quot;if (MPI_COMM_WORLD == MPI_COMM_SELF)&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So it appears it has something to do with MPI_COMM_NULL specifically.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe you already know of the issue. Maybe you can provide something to alleviate this issue in your releases, since it may take a while until we get a newer Xcode version on most OSX'es.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My &quot;ompi_info&quot; is at the bottom of the mail.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With that thanks for your looking into this, and many thanks for your wonderful MPI implementation,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Tobias
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ompi_info 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Package: Open MPI saibot_at_Tobiass-MacBook-Pro.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      Distribution
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Open MPI: 1.8.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI repo revision: v1.8.3-330-g0344f04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI release date: Dec 19, 2014
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Open RTE: 1.8.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open RTE repo revision: v1.8.3-330-g0344f04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open RTE release date: Dec 19, 2014
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                OPAL: 1.8.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OPAL repo revision: v1.8.3-330-g0344f04
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   OPAL release date: Dec 19, 2014
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MPI API: 3.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Ident string: 1.8.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Prefix: /Users/saibot/local/openmpi-1.8.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Configured architecture: x86_64-apple-darwin14.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Configure host: Tobiass-MacBook-Pro.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Configured by: saibot
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Configured on: Sun Jan  4 09:27:07 CET 2015
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Configure host: Tobiass-MacBook-Pro.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Built by: saibot
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Built on: Sun Jan  4 09:33:26 CET 2015
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Built host: Tobiass-MacBook-Pro.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          C bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        C++ bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Fort mpif.h: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Fort use mpi: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fort use mpi size: deprecated-ompi-info-value
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Fort use mpi_f08: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fort mpi_f08 compliance: The mpi_f08 module was not built
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fort mpi_f08 subarrays: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Java bindings: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wrapper compiler rpath: unnecessary
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          C compiler: gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C compiler family name: GNU
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  C compiler version: 4.2.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        C++ compiler: g++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fort compiler: none
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fort compiler abs: none
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Fort ignore TKR: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fort 08 assumed shape: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Fort optional args: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Fort INTERFACE: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fort ISO_FORTRAN_ENV: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fort STORAGE_SIZE: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Fort BIND(C) (all): no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Fort ISO_C_BINDING: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fort SUBROUTINE BIND(C): no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fort TYPE,BIND(C): no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fort T,BIND(C,name=&quot;a&quot;): no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Fort PRIVATE: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Fort PROTECTED: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fort ABSTRACT: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fort ASYNCHRONOUS: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Fort PROCEDURE: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fort C_FUNLOC: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fort f08 using wrappers: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Fort MPI_SIZEOF: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         C profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       C++ profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fort mpif.h profiling: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fort use mpi profiling: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fort use mpi_f08 prof: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      C++ exceptions: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Thread support: posix (MPI_THREAD_MULTIPLE: no, OPAL support: yes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      OMPI progress: no, ORTE progress: yes, Event lib:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      yes)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Sparse Groups: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Internal debug support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI interface warnings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI parameter check: runtime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     libltdl support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Heterogeneous support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI I/O support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Symbol vis. support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host topology support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI extensions: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C/R Enabled Debugging: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; VampirTrace support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MCA compress: bzip (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MCA compress: gzip (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA crs: none (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA db: hash (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA db: print (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA event: libevent2021 (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA hwloc: hwloc191 (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA if: bsdx_ipv6 (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA if: posix_ipv4 (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MCA installdirs: env (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MCA installdirs: config (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA pstat: test (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA sec: basic (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA shmem: posix (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA timer: darwin (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA dfs: app (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA dfs: orted (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA dfs: test (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA errmgr: default_app (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA errmgr: default_hnp (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA errmgr: default_orted (MCA v2.0, API v3.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA errmgr: default_tool (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA ess: env (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA ess: hnp (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA ess: singleton (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA ess: slurm (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA ess: tool (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA filem: raw (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA iof: hnp (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA iof: mr_hnp (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA iof: mr_orted (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA iof: orted (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA iof: tool (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA odls: default (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA oob: tcp (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA plm: isolated (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA plm: rsh (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA plm: slurm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA ras: simulator (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA ras: slurm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA rmaps: lama (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA rmaps: mindist (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA rmaps: ppr (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA rmaps: staged (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA rml: oob (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA routed: binomial (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA routed: debruijn (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA routed: direct (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA routed: radix (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA state: app (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA state: hnp (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA state: novm (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA state: orted (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA state: staged_hnp (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA state: staged_orted (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA state: tool (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       MCA allocator: basic (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA bcol: basesmuma (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA bcol: ptpcoll (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA bml: r2 (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA btl: self (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA btl: sm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA btl: tcp (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA btl: vader (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA coll: basic (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA coll: inter (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA coll: libnbc (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA coll: ml (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA coll: self (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA coll: sm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA coll: tuned (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA dpm: orte (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA fbtl: posix (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA fcoll: dynamic (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA fcoll: individual (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA fcoll: static (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA fcoll: two_phase (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA fcoll: ylib (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA fs: ufs (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA io: ompio (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA io: romio (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA mpool: grdma (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA mpool: sm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA osc: rdma (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA osc: sm (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA pml: v (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA pml: bfo (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA pml: cm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA rcache: vma (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA rte: orte (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA sbgp: basesmsocket (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA sbgp: basesmuma (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA sbgp: p2p (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MCA sharedfp: individual (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MCA sharedfp: lockedfile (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MCA sharedfp: sm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA topo: basic (MCA v2.0, API v2.1, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       MCA vprotocol: pessimist (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18200.php">http://www.open-mpi.org/community/lists/devel/2015/10/18200.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18202.php">http://www.open-mpi.org/community/lists/devel/2015/10/18202.php</a>
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
<li><strong>Next message:</strong> <a href="18204.php">Geoffrey Paulsen: "[OMPI devel] IBM Innovation Center Reserved for Open MPI Face-2-Face"</a>
<li><strong>Previous message:</strong> <a href="18202.php">Tobias Hilbrich: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<li><strong>In reply to:</strong> <a href="18202.php">Tobias Hilbrich: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18221.php">Gilles Gouaillardet: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<li><strong>Reply:</strong> <a href="18221.php">Gilles Gouaillardet: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
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
