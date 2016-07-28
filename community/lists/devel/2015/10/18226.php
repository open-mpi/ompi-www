<?
$subject_val = "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 04:32:15 2015" -->
<!-- isoreceived="20151021083215" -->
<!-- sent="Wed, 21 Oct 2015 10:32:04 +0200" -->
<!-- isosent="20151021083204" -->
<!-- name="Tobias Hilbrich" -->
<!-- email="tobias.hilbrich_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1" -->
<!-- id="E3216CFD-F007-4785-9B62-BDB3A7A1728F_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5tQnFDdyAW1Ox+R4FBwPP9iW2OGiAGoax3OMprVYk5_yg_at_mail.gmail.com" -->
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
<strong>From:</strong> Tobias Hilbrich (<em>tobias.hilbrich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-21 04:32:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18227.php">Atchley, Scott: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18225.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<li><strong>In reply to:</strong> <a href="18221.php">Gilles Gouaillardet: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, Hi Gilles,
<br>
<p>many thanks for your input and work. Good to hear your opinion, and if someone reports a related issue in the future it may help to know things already.
<br>
<p>Best,
<br>
-Tobias
<br>
<p><pre>
-- 
Dr.-Ing. Tobias Hilbrich
Research Assistant
Technische Universitaet Dresden, Germany
Tel.: +49 (351) 463-38485
E-Mail: tobias.hilbrich_at_[hidden]
&gt; On 21 Oct 2015, at 04:00, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
&gt; 
&gt; Tobias and Jeff,
&gt; 
&gt; here is attached a simple reproducer.
&gt; 
&gt; i reported it to apple with id 23195613
&gt; 
&gt; /*
&gt; you need to replace
&gt; #define EXTERN
&gt; with
&gt; #define EXTERN extern
&gt; so the compilation successes with an other compiler
&gt; (otherwise, compilation fails but compiler does not crash)
&gt; */
&gt; 
&gt; Cheers,
&gt; 
&gt; Gilles
&gt; 
&gt; On Tue, Oct 20, 2015 at 11:14 PM, Jeff Squyres (jsquyres)
&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
&gt;&gt; Tobias --
&gt;&gt; 
&gt;&gt; I'm able to replicate the problem with 1.8.4 and 1.8.8 and 1.10.0 on OS X 10.10.5 (Yosemite) and Xcode 7.0.1.  I'd suggest filing a bug at bugreporter.apple.com with the information that clang provided in their output.
&gt;&gt; 
&gt;&gt; If there's a bug in the compiler, there's not much that we here at OMPI can do without digging in deep to understand the actual bug (not just one of its symptoms/manifestations) and then putting in a workaround.  We've been a bit resistant to putting in compiler workarounds in the past, because that would be a nightmare (since Open MPI supports so many compilers).  Instead, we've encouraged compiler vendors to fix their compilers.
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt;&gt; On Oct 20, 2015, at 7:07 AM, Tobias Hilbrich &lt;tobias.hilbrich_at_[hidden]&gt; wrote:
&gt;&gt;&gt; 
&gt;&gt;&gt; Hi Gilles,
&gt;&gt;&gt; 
&gt;&gt;&gt; as for that, recompiling OpenMPI works, but causes no change here.
&gt;&gt;&gt; 
&gt;&gt;&gt; -Tobias
&gt;&gt;&gt; 
&gt;&gt;&gt; --
&gt;&gt;&gt; Dr.-Ing. Tobias Hilbrich
&gt;&gt;&gt; Research Assistant
&gt;&gt;&gt; 
&gt;&gt;&gt; Technische Universitaet Dresden, Germany
&gt;&gt;&gt; Tel.: +49 (351) 463-38485
&gt;&gt;&gt; E-Mail: tobias.hilbrich_at_[hidden]
&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; On 20 Oct 2015, at 11:42, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Tobias,
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Btw, did you recompile ompi with this xcode ?
&gt;&gt;&gt;&gt; Iirc, we do similar comparisons in ompi itself
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Cheers,
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Gilles
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Tobias Hilbrich &lt;tobias.hilbrich_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;&gt; Hi all,
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; a wonderful puzzle for the OSX folks in your team (Reproducer attached):
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; Attached source file builds with Xcode 7.0.0, but fails since the release of Xcode 7.0.1. I post it here since it results from an &quot;if (MPI_COMM_NULL == MPI_COMM_SELF)&quot;. I am actually curious whether this is somehow off by itself, or whether it has something to do with how you define these constants. Overall, the situation is that this worked with previous clang compilers (and that it again works for more recent versions from mac-ports), so likely not your fault at all.
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; The issue I get is:
&gt;&gt;&gt;&gt;&gt; $ mpicc osx-10.10.5-xcode-7.0.1-openmpi-problem.c
&gt;&gt;&gt;&gt;&gt; clang: error: unable to execute command: Segmentation fault: 11
&gt;&gt;&gt;&gt;&gt; clang: error: clang frontend command failed due to signal (use -v to see invocation)
&gt;&gt;&gt;&gt;&gt; Apple LLVM version 7.0.0 (clang-700.0.72)
&gt;&gt;&gt;&gt;&gt; Target: x86_64-apple-darwin14.5.0
&gt;&gt;&gt;&gt;&gt; Thread model: posix
&gt;&gt;&gt;&gt;&gt; clang: note: diagnostic msg: PLEASE submit a bug report to <a href="http://developer.apple.com/bugreporter/">http://developer.apple.com/bugreporter/</a> and include the crash backtrace, preprocessed source, and associated run script.
&gt;&gt;&gt;&gt;&gt; clang: note: diagnostic msg:
&gt;&gt;&gt;&gt;&gt; ********************
&gt;&gt;&gt;&gt;&gt; PLEASE ATTACH THE FOLLOWING FILES TO THE BUG REPORT:
&gt;&gt;&gt;&gt;&gt; ...
&gt;&gt;&gt;&gt;&gt; ********************
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; As I said above the culprit is &quot;if (MPI_COMM_NULL == MPI_COMM_SELF)&quot;.
&gt;&gt;&gt;&gt;&gt; Also, this doesn't works either:
&gt;&gt;&gt;&gt;&gt; -  &quot;if (MPI_COMM_SELF == MPI_COMM_NULL)&quot;
&gt;&gt;&gt;&gt;&gt; But then, these work:
&gt;&gt;&gt;&gt;&gt; -  &quot;if (MPI_COMM_SELF == MPI_COMM_WORLD)&quot;
&gt;&gt;&gt;&gt;&gt; -  &quot;if (MPI_COMM_WORLD == MPI_COMM_SELF)&quot;
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; So it appears it has something to do with MPI_COMM_NULL specifically.
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; Maybe you already know of the issue. Maybe you can provide something to alleviate this issue in your releases, since it may take a while until we get a newer Xcode version on most OSX'es.
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; My &quot;ompi_info&quot; is at the bottom of the mail.
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; With that thanks for your looking into this, and many thanks for your wonderful MPI implementation,
&gt;&gt;&gt;&gt;&gt; -Tobias
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; $ ompi_info
&gt;&gt;&gt;&gt;&gt;            Package: Open MPI saibot_at_Tobiass-MacBook-Pro.local
&gt;&gt;&gt;&gt;&gt;                     Distribution
&gt;&gt;&gt;&gt;&gt;           Open MPI: 1.8.4
&gt;&gt;&gt;&gt;&gt; Open MPI repo revision: v1.8.3-330-g0344f04
&gt;&gt;&gt;&gt;&gt; Open MPI release date: Dec 19, 2014
&gt;&gt;&gt;&gt;&gt;           Open RTE: 1.8.4
&gt;&gt;&gt;&gt;&gt; Open RTE repo revision: v1.8.3-330-g0344f04
&gt;&gt;&gt;&gt;&gt; Open RTE release date: Dec 19, 2014
&gt;&gt;&gt;&gt;&gt;               OPAL: 1.8.4
&gt;&gt;&gt;&gt;&gt; OPAL repo revision: v1.8.3-330-g0344f04
&gt;&gt;&gt;&gt;&gt;  OPAL release date: Dec 19, 2014
&gt;&gt;&gt;&gt;&gt;            MPI API: 3.0
&gt;&gt;&gt;&gt;&gt;       Ident string: 1.8.4
&gt;&gt;&gt;&gt;&gt;             Prefix: /Users/saibot/local/openmpi-1.8.4
&gt;&gt;&gt;&gt;&gt; Configured architecture: x86_64-apple-darwin14.0.0
&gt;&gt;&gt;&gt;&gt;     Configure host: Tobiass-MacBook-Pro.local
&gt;&gt;&gt;&gt;&gt;      Configured by: saibot
&gt;&gt;&gt;&gt;&gt;      Configured on: Sun Jan  4 09:27:07 CET 2015
&gt;&gt;&gt;&gt;&gt;     Configure host: Tobiass-MacBook-Pro.local
&gt;&gt;&gt;&gt;&gt;           Built by: saibot
&gt;&gt;&gt;&gt;&gt;           Built on: Sun Jan  4 09:33:26 CET 2015
&gt;&gt;&gt;&gt;&gt;         Built host: Tobiass-MacBook-Pro.local
&gt;&gt;&gt;&gt;&gt;         C bindings: yes
&gt;&gt;&gt;&gt;&gt;       C++ bindings: yes
&gt;&gt;&gt;&gt;&gt;        Fort mpif.h: no
&gt;&gt;&gt;&gt;&gt;       Fort use mpi: no
&gt;&gt;&gt;&gt;&gt;  Fort use mpi size: deprecated-ompi-info-value
&gt;&gt;&gt;&gt;&gt;   Fort use mpi_f08: no
&gt;&gt;&gt;&gt;&gt; Fort mpi_f08 compliance: The mpi_f08 module was not built
&gt;&gt;&gt;&gt;&gt; Fort mpi_f08 subarrays: no
&gt;&gt;&gt;&gt;&gt;      Java bindings: no
&gt;&gt;&gt;&gt;&gt; Wrapper compiler rpath: unnecessary
&gt;&gt;&gt;&gt;&gt;         C compiler: gcc
&gt;&gt;&gt;&gt;&gt; C compiler absolute: /usr/bin/gcc
&gt;&gt;&gt;&gt;&gt; C compiler family name: GNU
&gt;&gt;&gt;&gt;&gt; C compiler version: 4.2.1
&gt;&gt;&gt;&gt;&gt;       C++ compiler: g++
&gt;&gt;&gt;&gt;&gt; C++ compiler absolute: /usr/bin/g++
&gt;&gt;&gt;&gt;&gt;      Fort compiler: none
&gt;&gt;&gt;&gt;&gt;  Fort compiler abs: none
&gt;&gt;&gt;&gt;&gt;    Fort ignore TKR: no
&gt;&gt;&gt;&gt;&gt; Fort 08 assumed shape: no
&gt;&gt;&gt;&gt;&gt; Fort optional args: no
&gt;&gt;&gt;&gt;&gt;     Fort INTERFACE: no
&gt;&gt;&gt;&gt;&gt; Fort ISO_FORTRAN_ENV: no
&gt;&gt;&gt;&gt;&gt;  Fort STORAGE_SIZE: no
&gt;&gt;&gt;&gt;&gt; Fort BIND(C) (all): no
&gt;&gt;&gt;&gt;&gt; Fort ISO_C_BINDING: no
&gt;&gt;&gt;&gt;&gt; Fort SUBROUTINE BIND(C): no
&gt;&gt;&gt;&gt;&gt;  Fort TYPE,BIND(C): no
&gt;&gt;&gt;&gt;&gt; Fort T,BIND(C,name=&quot;a&quot;): no
&gt;&gt;&gt;&gt;&gt;       Fort PRIVATE: no
&gt;&gt;&gt;&gt;&gt;     Fort PROTECTED: no
&gt;&gt;&gt;&gt;&gt;      Fort ABSTRACT: no
&gt;&gt;&gt;&gt;&gt;  Fort ASYNCHRONOUS: no
&gt;&gt;&gt;&gt;&gt;     Fort PROCEDURE: no
&gt;&gt;&gt;&gt;&gt;      Fort C_FUNLOC: no
&gt;&gt;&gt;&gt;&gt; Fort f08 using wrappers: no
&gt;&gt;&gt;&gt;&gt;    Fort MPI_SIZEOF: no
&gt;&gt;&gt;&gt;&gt;        C profiling: yes
&gt;&gt;&gt;&gt;&gt;      C++ profiling: yes
&gt;&gt;&gt;&gt;&gt; Fort mpif.h profiling: no
&gt;&gt;&gt;&gt;&gt; Fort use mpi profiling: no
&gt;&gt;&gt;&gt;&gt; Fort use mpi_f08 prof: no
&gt;&gt;&gt;&gt;&gt;     C++ exceptions: no
&gt;&gt;&gt;&gt;&gt;     Thread support: posix (MPI_THREAD_MULTIPLE: no, OPAL support: yes,
&gt;&gt;&gt;&gt;&gt;                     OMPI progress: no, ORTE progress: yes, Event lib:
&gt;&gt;&gt;&gt;&gt;                     yes)
&gt;&gt;&gt;&gt;&gt;      Sparse Groups: no
&gt;&gt;&gt;&gt;&gt; Internal debug support: no
&gt;&gt;&gt;&gt;&gt; MPI interface warnings: yes
&gt;&gt;&gt;&gt;&gt; MPI parameter check: runtime
&gt;&gt;&gt;&gt;&gt; Memory profiling support: no
&gt;&gt;&gt;&gt;&gt; Memory debugging support: no
&gt;&gt;&gt;&gt;&gt;    libltdl support: yes
&gt;&gt;&gt;&gt;&gt; Heterogeneous support: no
&gt;&gt;&gt;&gt;&gt; mpirun default --prefix: no
&gt;&gt;&gt;&gt;&gt;    MPI I/O support: yes
&gt;&gt;&gt;&gt;&gt;  MPI_WTIME support: gettimeofday
&gt;&gt;&gt;&gt;&gt; Symbol vis. support: yes
&gt;&gt;&gt;&gt;&gt; Host topology support: yes
&gt;&gt;&gt;&gt;&gt;     MPI extensions:
&gt;&gt;&gt;&gt;&gt; FT Checkpoint support: no (checkpoint thread: no)
&gt;&gt;&gt;&gt;&gt; C/R Enabled Debugging: no
&gt;&gt;&gt;&gt;&gt; VampirTrace support: yes
&gt;&gt;&gt;&gt;&gt; MPI_MAX_PROCESSOR_NAME: 256
&gt;&gt;&gt;&gt;&gt; MPI_MAX_ERROR_STRING: 256
&gt;&gt;&gt;&gt;&gt; MPI_MAX_OBJECT_NAME: 64
&gt;&gt;&gt;&gt;&gt;   MPI_MAX_INFO_KEY: 36
&gt;&gt;&gt;&gt;&gt;   MPI_MAX_INFO_VAL: 256
&gt;&gt;&gt;&gt;&gt;  MPI_MAX_PORT_NAME: 1024
&gt;&gt;&gt;&gt;&gt; MPI_MAX_DATAREP_STRING: 128
&gt;&gt;&gt;&gt;&gt;      MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;       MCA compress: bzip (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;       MCA compress: gzip (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA crs: none (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;             MCA db: hash (MCA v2.0, API v1.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;             MCA db: print (MCA v2.0, API v1.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA event: libevent2021 (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA hwloc: hwloc191 (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;             MCA if: bsdx_ipv6 (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;             MCA if: posix_ipv4 (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;    MCA installdirs: env (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;    MCA installdirs: config (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA pstat: test (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA sec: basic (MCA v2.0, API v1.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA shmem: posix (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA timer: darwin (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA dfs: app (MCA v2.0, API v1.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA dfs: orted (MCA v2.0, API v1.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA dfs: test (MCA v2.0, API v1.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;         MCA errmgr: default_app (MCA v2.0, API v3.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;         MCA errmgr: default_hnp (MCA v2.0, API v3.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;         MCA errmgr: default_orted (MCA v2.0, API v3.0, Component
&gt;&gt;&gt;&gt;&gt;                     v1.8.4)
&gt;&gt;&gt;&gt;&gt;         MCA errmgr: default_tool (MCA v2.0, API v3.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA ess: env (MCA v2.0, API v3.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA ess: hnp (MCA v2.0, API v3.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA ess: singleton (MCA v2.0, API v3.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA ess: slurm (MCA v2.0, API v3.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA ess: tool (MCA v2.0, API v3.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA filem: raw (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;        MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA iof: hnp (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA iof: mr_hnp (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA iof: mr_orted (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA iof: orted (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA iof: tool (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;           MCA odls: default (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA oob: tcp (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA plm: isolated (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA plm: rsh (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA plm: slurm (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA ras: simulator (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA ras: slurm (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA rmaps: lama (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA rmaps: mindist (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA rmaps: ppr (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA rmaps: staged (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA rml: oob (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;         MCA routed: binomial (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;         MCA routed: debruijn (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;         MCA routed: direct (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;         MCA routed: radix (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA state: app (MCA v2.0, API v1.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA state: hnp (MCA v2.0, API v1.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA state: novm (MCA v2.0, API v1.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA state: orted (MCA v2.0, API v1.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA state: staged_hnp (MCA v2.0, API v1.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA state: staged_orted (MCA v2.0, API v1.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA state: tool (MCA v2.0, API v1.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;      MCA allocator: basic (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;      MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;           MCA bcol: basesmuma (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;           MCA bcol: ptpcoll (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA bml: r2 (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA btl: self (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA btl: sm (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA btl: tcp (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA btl: vader (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;           MCA coll: basic (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;           MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;           MCA coll: inter (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;           MCA coll: libnbc (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;           MCA coll: ml (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;           MCA coll: self (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;           MCA coll: sm (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;           MCA coll: tuned (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA dpm: orte (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;           MCA fbtl: posix (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA fcoll: dynamic (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA fcoll: individual (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA fcoll: static (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA fcoll: two_phase (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA fcoll: ylib (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;             MCA fs: ufs (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;             MCA io: ompio (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;             MCA io: romio (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA mpool: grdma (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;          MCA mpool: sm (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA osc: rdma (MCA v2.0, API v3.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA osc: sm (MCA v2.0, API v3.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA pml: v (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA pml: bfo (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA pml: cm (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;         MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;         MCA rcache: vma (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;            MCA rte: orte (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;           MCA sbgp: basesmsocket (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;           MCA sbgp: basesmuma (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;           MCA sbgp: p2p (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;       MCA sharedfp: individual (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;       MCA sharedfp: lockedfile (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;       MCA sharedfp: sm (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;           MCA topo: basic (MCA v2.0, API v2.1, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt;      MCA vprotocol: pessimist (MCA v2.0, API v2.0, Component v1.8.4)
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18200.php">http://www.open-mpi.org/community/lists/devel/2015/10/18200.php</a>
&gt;&gt;&gt; 
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18202.php">http://www.open-mpi.org/community/lists/devel/2015/10/18202.php</a>
&gt;&gt; 
&gt;&gt; 
&gt;&gt; --
&gt;&gt; Jeff Squyres
&gt;&gt; jsquyres_at_[hidden]
&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18203.php">http://www.open-mpi.org/community/lists/devel/2015/10/18203.php</a>
&gt; &lt;xcode_7_0_1_clang_crash-da8742.c&gt;_______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18221.php">http://www.open-mpi.org/community/lists/devel/2015/10/18221.php</a>

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18226/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18227.php">Atchley, Scott: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18225.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<li><strong>In reply to:</strong> <a href="18221.php">Gilles Gouaillardet: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<!-- nextthread="start" -->
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
