<?
$subject_val = "Re: [OMPI users] Configuring openib on openmpi 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 05:06:10 2014" -->
<!-- isoreceived="20140731090610" -->
<!-- sent="Thu, 31 Jul 2014 14:36:09 +0530" -->
<!-- isosent="20140731090609" -->
<!-- name="Chaitra Kumar" -->
<!-- email="chaitragkumar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configuring openib on openmpi 1.8.1" -->
<!-- id="CADB=1m-8yzHBdCftUjw_zKASPRYfY0XhHmJ8h_8--2B0BahKmQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADB=1m99vMv-ix3UkwJWyaMmt6ULS7dJp=RZ+4BeUoH7iRLgww_at_mail.gmail.com" -->
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
<strong>From:</strong> Chaitra Kumar (<em>chaitragkumar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-31 05:06:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/08/24900.php">Ralph Castain: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<li><strong>Previous message:</strong> <a href="24898.php">Per B Solibakke: "[OMPI users] Run-time error using Open-mpi-1.8.1 with configure option --with-cuda"</a>
<li><strong>In reply to:</strong> <a href="24897.php">Chaitra Kumar: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I am able to run the program.. Thanks a lot  for your help.
<br>
<p>Regards,
<br>
Chaitra
<br>
<p><p><p><p><p>On Thu, Jul 31, 2014 at 1:10 AM, Chaitra Kumar &lt;chaitragkumar_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Yes, both machines have same prm's installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I add --level 9 to ompi_info, it listed many openib components.
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should I add any other flag to 'mpirun *--mca btl self,sm,openib'* to
</span><br>
<span class="quotelev1">&gt; make openib components visible to mpirun.
</span><br>
<span class="quotelev1">&gt; I set PATH and LD_LIBRARY_PATH before running these commands. so it is not
</span><br>
<span class="quotelev1">&gt; environment issue*.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 30, 2014 at 7:26 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does &quot;polaris&quot; have the same rpm's as the host where you checked in your
</span><br>
<span class="quotelev2">&gt;&gt; prior email?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try adding &quot;--level 9&quot; to your ompi_info command line - the MCA param
</span><br>
<span class="quotelev2">&gt;&gt; system changed somewhat and the params may just not be getting shown by
</span><br>
<span class="quotelev2">&gt;&gt; default
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 30, 2014, at 2:35 AM, Chaitra Kumar &lt;chaitragkumar_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The command: 'ompi_info --param btl openib' doesnt return any openib
</span><br>
<span class="quotelev2">&gt;&gt; component.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I try to use command like: ' mpirun *--mca btl self,sm,openib* ...'
</span><br>
<span class="quotelev2">&gt;&gt; it throws an error:
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev2">&gt;&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev2">&gt;&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev2">&gt;&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Host:      polaris
</span><br>
<span class="quotelev2">&gt;&gt; Framework: btl
</span><br>
<span class="quotelev2">&gt;&gt; Component: openib
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 30, 2014 at 2:40 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; According to your output, you *do* have the IB components available:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What made you think that you don't have them?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 30, 2014, at 12:10 AM, Chaitra Kumar &lt;chaitragkumar_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Howard,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The attached file &quot;config,out&quot; has the output of configure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Output of ompi_info command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  Package: Open MPI padmanac_at_polaris-4 Distribution
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Open MPI: 1.8.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Open MPI repo revision: r31483
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open MPI release date: Apr 22, 2014
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Open RTE: 1.8.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Open RTE repo revision: r31483
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open RTE release date: Apr 22, 2014
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     OPAL: 1.8.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       OPAL repo revision: r31483
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OPAL release date: Apr 22, 2014
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MPI API: 3.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Ident string: 1.8.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Prefix: /home/padmanac/openmpi181
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Configure host: polaris-4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Configured by: padmanac
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Configured on: Tue Jul 29 11:41:12 PDT 2014
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Configure host: polaris-4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Built by: padmanac
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Built on: Tue Jul 29 11:57:53 PDT 2014
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Built host: polaris-4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Fort mpif.h: yes (all)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Fort use mpi: yes (limited: overloading)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Fort use mpi size: deprecated-ompi-info-value
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Fort use mpi_f08: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Fort mpi_f08 compliance: The mpi_f08 module was not built
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fort mpi_f08 subarrays: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Java bindings: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Wrapper compiler rpath: runpath
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               C compiler: gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      C compiler absolute: /opt/gcc/bin/gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   C compiler family name: GNU
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       C compiler version: 4.8.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             C++ compiler: g++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    C++ compiler absolute: /opt/gcc/bin/g++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Fort compiler: gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Fort compiler abs: /opt/gcc/bin/gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Fort ignore TKR: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Fort 08 assumed shape: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fort optional args: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fort BIND(C) (all): no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fort ISO_C_BINDING: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Fort SUBROUTINE BIND(C): no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Fort TYPE,BIND(C): no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Fort T,BIND(C,name=&quot;a&quot;): no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Fort PRIVATE: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Fort PROTECTED: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Fort ABSTRACT: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Fort ASYNCHRONOUS: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Fort PROCEDURE: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Fort f08 using wrappers: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Fort mpif.h profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fort use mpi profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Fort use mpi_f08 prof: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           C++ exceptions: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Thread support: posix (MPI_THREAD_MULTIPLE: no, OPAL support:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           OMPI progress: no, ORTE progress: yes, Event
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lib:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           yes)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Sparse Groups: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI interface warnings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Symbol vis. support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Host topology support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MPI extensions:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    C/R Enabled Debugging: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      VampirTrace support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA compress: bzip (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA compress: gzip (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA crs: none (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA db: hash (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA db: print (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA event: libevent2021 (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA hwloc: hwloc172 (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA if: posix_ipv4 (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA if: linux_ipv6 (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA memory: linux (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA pstat: linux (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA sec: basic (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA shmem: posix (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA dfs: app (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA dfs: orted (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA dfs: test (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA errmgr: default_app (MCA v2.0, API v3.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA errmgr: default_hnp (MCA v2.0, API v3.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA errmgr: default_orted (MCA v2.0, API v3.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA errmgr: default_tool (MCA v2.0, API v3.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ess: env (MCA v2.0, API v3.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ess: hnp (MCA v2.0, API v3.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ess: singleton (MCA v2.0, API v3.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ess: slurm (MCA v2.0, API v3.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ess: tool (MCA v2.0, API v3.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA filem: raw (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA iof: mr_hnp (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA iof: mr_orted (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA plm: isolated (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: loadleveler (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: simulator (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: lama (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: mindist (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: ppr (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: resilient (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: staged (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA routed: debruijn (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA routed: radix (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA state: app (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA state: hnp (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA state: novm (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA state: orted (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA state: staged_hnp (MCA v2.0, API v1.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA state: staged_orted (MCA v2.0, API v1.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA state: tool (MCA v2.0, API v1.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA bcol: basesmuma (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA bcol: ptpcoll (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: vader (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: libnbc (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: ml (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA fbtl: posix (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA fcoll: dynamic (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA fcoll: individual (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA fcoll: static (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA fcoll: two_phase (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA fcoll: ylib (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA fs: ufs (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA io: ompio (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA io: romio (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA mpool: grdma (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA mtl: psm (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA osc: rdma (MCA v2.0, API v3.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA osc: sm (MCA v2.0, API v3.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pml: bfo (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pml: cm (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA rte: orte (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA sbgp: basesmsocket (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA sbgp: basesmuma (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA sbgp: p2p (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA sharedfp: individual (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA sharedfp: lockedfile (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA sharedfp: sm (MCA v2.0, API v2.0, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA topo: basic (MCA v2.0, API v2.1, Component v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA vprotocol: pessimist (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The command  'rpm -qa | grep ibverbs' lists following libraries.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs-devel-static-1.1.7-1.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs-devel-1.1.7-1.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs-1.1.7-1.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs-debuginfo-1.1.7-1.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs-utils-1.1.7-1.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please let me know what i am missing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chaitra
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jul 30, 2014 at 8:13 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Chaitra,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could you send the output from your configure and output from ompi_info?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could you also send the output from the node where you are building ompi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rpm -qa | grep ibverbs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If this command indicates an libibverbs-devel was installed on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; system,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you should check to see if it was installed in the default location or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reason was relocated.  If you don't see that a libibverbs-devel rpm was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; installed,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then you need a sysadmin to install it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2014-07-29 19:35 GMT-06:00 Chaitra Kumar &lt;chaitragkumar_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Team,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am trying to setup openmpi 1.8.1 on a system with infiniband.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Am using the default configure options. I am not using any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; multithreading option.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; After installation, no openib components are available.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I tried even with flag: '--with-verbs', still no use.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Should i use any other flag to enable openib? am I missing any step?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Chaitra
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24889.php">http://www.open-mpi.org/community/lists/users/2014/07/24889.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24891.php">http://www.open-mpi.org/community/lists/users/2014/07/24891.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;config.out&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24892.php">http://www.open-mpi.org/community/lists/users/2014/07/24892.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24893.php">http://www.open-mpi.org/community/lists/users/2014/07/24893.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24894.php">http://www.open-mpi.org/community/lists/users/2014/07/24894.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24895.php">http://www.open-mpi.org/community/lists/users/2014/07/24895.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24899/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/08/24900.php">Ralph Castain: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<li><strong>Previous message:</strong> <a href="24898.php">Per B Solibakke: "[OMPI users] Run-time error using Open-mpi-1.8.1 with configure option --with-cuda"</a>
<li><strong>In reply to:</strong> <a href="24897.php">Chaitra Kumar: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
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
