<?
$subject_val = "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 13:28:53 2015" -->
<!-- isoreceived="20150220182853" -->
<!-- sent="Fri, 20 Feb 2015 13:28:50 -0500" -->
<!-- isosent="20150220182850" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Several Bcast calls in a loop causing the code to hang" -->
<!-- id="CAG4F6z9C6Eqeut8vLcCv8cKgiAfDK3Lpn8ZKfW-eme1D6O+8RA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAC_-9jwfTPVsMqB662k-4uGrGETAv5ytKX=6XKUFqjDj7V=3Tg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Several Bcast calls in a loop causing the code to hang<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-20 13:28:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26367.php">Sachin Krishnan: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<li><strong>Previous message:</strong> <a href="26365.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fix small typo in man"</a>
<li><strong>In reply to:</strong> <a href="26363.php">Sachin Krishnan: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26367.php">Sachin Krishnan: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<li><strong>Reply:</strong> <a href="26367.php">Sachin Krishnan: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sachin,
<br>
<p>Are you running this on a single host or across multiple hosts (i.e. are
<br>
you communicating between processes via networking.) If it's on a single
<br>
host, then it might be an issue with shared memory.
<br>
<p>Josh
<br>
<p>On Fri, Feb 20, 2015 at 1:51 AM, Sachin Krishnan &lt;sachkris_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The command i use to compile the code is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc bcast_loop.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To run the code I use:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Output is unpredictable. It gets stuck at different places.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Im attaching lstopo and ompi_info outputs. Do you need any other info?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lstopo-no-graphics output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Machine (3433MB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Socket L#0 + L3 L#0 (8192KB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       PU L#1 (P#4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       PU L#2 (P#1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       PU L#3 (P#5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       PU L#4 (P#2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       PU L#5 (P#6)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       PU L#6 (P#3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       PU L#7 (P#7)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   HostBridge L#0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     PCI 8086:0162
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       GPU L#0 &quot;card0&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       GPU L#1 &quot;renderD128&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       GPU L#2 &quot;controlD64&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     PCI 8086:1502
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Net L#3 &quot;eth0&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     PCI 8086:1e02
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Block L#4 &quot;sda&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Block L#5 &quot;sr0&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Package: Open MPI builduser_at_anatol Distribution
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.8.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Open MPI repo revision: v1.8.3-330-g0344f04
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Open MPI release date: Dec 19, 2014
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.8.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Open RTE repo revision: v1.8.3-330-g0344f04
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Open RTE release date: Dec 19, 2014
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.8.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       OPAL repo revision: v1.8.3-330-g0344f04
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        OPAL release date: Dec 19, 2014
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MPI API: 3.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Ident string: 1.8.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Configure host: anatol
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Configured by: builduser
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Configured on: Sat Dec 20 17:00:34 PST 2014
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Configure host: anatol
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Built by: builduser
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Built on: Sat Dec 20 17:12:16 PST 2014
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               Built host: anatol
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Fort mpif.h: yes (all)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Fort use mpi: yes (full: ignore TKR)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        Fort use mpi size: deprecated-ompi-info-value
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Fort use mpi_f08: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Fort mpi_f08 compliance: The mpi_f08 module is available, but due to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           limitations in the /usr/bin/gfortran compiler,
</span><br>
<span class="quotelev1">&gt; does
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           not support the following: array subsections,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           direct passthru (where possible) to underlying
</span><br>
<span class="quotelev1">&gt; Open
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           MPI's C functionality
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Fort mpi_f08 subarrays: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Java bindings: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Wrapper compiler rpath: runpath
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   C compiler family name: GNU
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       C compiler version: 4.9.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Fort compiler: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        Fort compiler abs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          Fort ignore TKR: yes (!GCC$ ATTRIBUTES NO_ARG_CHECK ::)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Fort 08 assumed shape: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Fort optional args: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Fort INTERFACE: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Fort ISO_FORTRAN_ENV: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        Fort STORAGE_SIZE: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Fort BIND(C) (all): yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Fort ISO_C_BINDING: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Fort SUBROUTINE BIND(C): yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        Fort TYPE,BIND(C): yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Fort T,BIND(C,name=&quot;a&quot;): yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Fort PRIVATE: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Fort PROTECTED: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Fort ABSTRACT: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        Fort ASYNCHRONOUS: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Fort PROCEDURE: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Fort C_FUNLOC: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Fort f08 using wrappers: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          Fort MPI_SIZEOF: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Fort mpif.h profiling: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Fort use mpi profiling: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Fort use mpi_f08 prof: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (MPI_THREAD_MULTIPLE: no, OPAL support:
</span><br>
<span class="quotelev1">&gt; yes,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           OMPI progress: no, ORTE progress: yes, Event lib:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           yes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI interface warnings: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Host topology support: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           MPI extensions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    C/R Enabled Debugging: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      VampirTrace support: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             MCA compress: bzip (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             MCA compress: gzip (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA crs: none (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   MCA db: hash (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   MCA db: print (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA event: libevent2021 (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: external (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   MCA if: posix_ipv4 (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   MCA if: linux_ipv6 (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           MCA memchecker: valgrind (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               MCA memory: linux (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA pstat: linux (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA sec: basic (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA shmem: posix (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA dfs: app (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA dfs: orted (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA dfs: test (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: default_app (MCA v2.0, API v3.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: default_hnp (MCA v2.0, API v3.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: default_orted (MCA v2.0, API v3.0, Component
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: default_tool (MCA v2.0, API v3.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA ess: env (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA ess: hnp (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA ess: singleton (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA ess: tool (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA filem: raw (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA iof: mr_hnp (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA iof: mr_orted (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA plm: isolated (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA ras: loadleveler (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA ras: simulator (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: lama (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: mindist (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: ppr (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: staged (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               MCA routed: debruijn (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               MCA routed: radix (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA state: app (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA state: hnp (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA state: novm (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA state: orted (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA state: staged_hnp (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA state: staged_orted (MCA v2.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA state: tool (MCA v2.0, API v1.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: basesmuma (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: ptpcoll (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA btl: vader (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: libnbc (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: ml (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 MCA fbtl: posix (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: dynamic (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: individual (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: static (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: two_phase (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: ylib (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   MCA fs: ufs (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   MCA io: ompio (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA mpool: grdma (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA osc: rdma (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA osc: sm (MCA v2.0, API v3.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA pml: bfo (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA rte: orte (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 MCA sbgp: basesmsocket (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 MCA sbgp: basesmuma (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 MCA sbgp: p2p (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             MCA sharedfp: individual (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             MCA sharedfp: lockedfile (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             MCA sharedfp: sm (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 MCA topo: basic (MCA v2.0, API v2.1, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            MCA vprotocol: pessimist (MCA v2.0, API v2.0, Component v1.8.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sachin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Sachin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Can you, please, provide a command line? Additional information about
</span><br>
<span class="quotelev1">&gt; your
</span><br>
<span class="quotelev2">&gt; &gt;system could be helpful also.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;On Wed, Feb 18, 2015 at 3:43 AM, Sachin Krishnan &lt;sachkris_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am new to MPI and also this list.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I wrote an MPI code with several MPI_Bcast calls in a loop. My code was
</span><br>
<span class="quotelev3">&gt; &gt;&gt; getting stuck at random points, ie it was not systematic. After a few
</span><br>
<span class="quotelev1">&gt; hours
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of debugging and googling, I found that the issue may be with the
</span><br>
<span class="quotelev1">&gt; several
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Bcast calls in a loop.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I stumbled on this test code which can reproduce the issue:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="https://github.com/fintler/ompi/blob/master/orte/test/mpi/bcast_loop.c">https://github.com/fintler/ompi/blob/master/orte/test/mpi/bcast_loop.c</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Im using OpenMPI v1.8.4 installed from official Arch Linux repo.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is it a known issue with OpenMPI?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is it some problem with the way openmpi is configured in my system?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sachin
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26338.php">http://www.open-mpi.org/community/lists/users/2015/02/26338.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26363.php">http://www.open-mpi.org/community/lists/users/2015/02/26363.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26366/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26367.php">Sachin Krishnan: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<li><strong>Previous message:</strong> <a href="26365.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fix small typo in man"</a>
<li><strong>In reply to:</strong> <a href="26363.php">Sachin Krishnan: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26367.php">Sachin Krishnan: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<li><strong>Reply:</strong> <a href="26367.php">Sachin Krishnan: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
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
