<?
$subject_val = "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 01:51:29 2015" -->
<!-- isoreceived="20150220065129" -->
<!-- sent="Fri, 20 Feb 2015 12:21:28 +0530" -->
<!-- isosent="20150220065128" -->
<!-- name="Sachin Krishnan" -->
<!-- email="sachkris_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Several Bcast calls in a loop causing the code to hang" -->
<!-- id="CAC_-9jwfTPVsMqB662k-4uGrGETAv5ytKX=6XKUFqjDj7V=3Tg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] Several Bcast calls in a loop causing the code to hang" -->
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
<strong>From:</strong> Sachin Krishnan (<em>sachkris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-20 01:51:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26364.php">Harald Servat: "[OMPI users] Fix small typo in man"</a>
<li><strong>Previous message:</strong> <a href="26362.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Maybe in reply to:</strong> <a href="26338.php">Sachin Krishnan: "[OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26366.php">Joshua Ladd: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<li><strong>Reply:</strong> <a href="26366.php">Joshua Ladd: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Josh,
<br>
<p>The command i use to compile the code is:
<br>
<p>mpicc bcast_loop.c
<br>
<p><p>To run the code I use:
<br>
<p>mpirun -np 2 ./a.out
<br>
<p>Output is unpredictable. It gets stuck at different places.
<br>
<p>Im attaching lstopo and ompi_info outputs. Do you need any other info?
<br>
<p><p>lstopo-no-graphics output:
<br>
<p>Machine (3433MB)
<br>
<p>&nbsp;&nbsp;Socket L#0 + L3 L#0 (8192KB)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#0 (P#0)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#1 (P#4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#2 (P#1)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#3 (P#5)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#4 (P#2)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#5 (P#6)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#6 (P#3)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#7 (P#7)
<br>
<p>&nbsp;&nbsp;HostBridge L#0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:0162
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPU L#0 &quot;card0&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPU L#1 &quot;renderD128&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPU L#2 &quot;controlD64&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:1502
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#3 &quot;eth0&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:1e02
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#4 &quot;sda&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#5 &quot;sr0&quot;
<br>
<p><p>ompi_info output:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI builduser_at_anatol Distribution
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.8.4
<br>
<p>&nbsp;&nbsp;Open MPI repo revision: v1.8.3-330-g0344f04
<br>
<p>&nbsp;&nbsp;&nbsp;Open MPI release date: Dec 19, 2014
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.8.4
<br>
<p>&nbsp;&nbsp;Open RTE repo revision: v1.8.3-330-g0344f04
<br>
<p>&nbsp;&nbsp;&nbsp;Open RTE release date: Dec 19, 2014
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.8.4
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: v1.8.3-330-g0344f04
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Dec 19, 2014
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI API: 3.0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.8.4
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /usr
<br>
<p>&nbsp;Configured architecture: i686-pc-linux-gnu
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: anatol
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: builduser
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Sat Dec 20 17:00:34 PST 2014
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: anatol
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: builduser
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Sat Dec 20 17:12:16 PST 2014
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: anatol
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort mpif.h: yes (all)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort use mpi: yes (full: ignore TKR)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort use mpi size: deprecated-ompi-info-value
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort use mpi_f08: yes
<br>
<p>&nbsp;Fort mpi_f08 compliance: The mpi_f08 module is available, but due to
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;limitations in the /usr/bin/gfortran compiler,
<br>
does
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not support the following: array subsections,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;direct passthru (where possible) to underlying
<br>
Open
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI's C functionality
<br>
<p>&nbsp;&nbsp;Fort mpi_f08 subarrays: no
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java bindings: no
<br>
<p>&nbsp;&nbsp;Wrapper compiler rpath: runpath
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
<p>&nbsp;&nbsp;C compiler family name: GNU
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler version: 4.9.2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
<p>&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort compiler: /usr/bin/gfortran
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort compiler abs:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort ignore TKR: yes (!GCC$ ATTRIBUTES NO_ARG_CHECK ::)
<br>
<p>&nbsp;&nbsp;&nbsp;Fort 08 assumed shape: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort optional args: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort INTERFACE: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Fort ISO_FORTRAN_ENV: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort STORAGE_SIZE: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort BIND(C) (all): yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort ISO_C_BINDING: yes
<br>
<p>&nbsp;Fort SUBROUTINE BIND(C): yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort TYPE,BIND(C): yes
<br>
<p>&nbsp;Fort T,BIND(C,name=&quot;a&quot;): yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort PRIVATE: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort PROTECTED: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort ABSTRACT: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort ASYNCHRONOUS: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort PROCEDURE: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort C_FUNLOC: yes
<br>
<p>&nbsp;Fort f08 using wrappers: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort MPI_SIZEOF: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
<p>&nbsp;&nbsp;&nbsp;Fort mpif.h profiling: yes
<br>
<p>&nbsp;&nbsp;Fort use mpi profiling: yes
<br>
<p>&nbsp;&nbsp;&nbsp;Fort use mpi_f08 prof: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (MPI_THREAD_MULTIPLE: no, OPAL support: yes,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI progress: no, ORTE progress: yes, Event lib:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yes)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
<p>&nbsp;&nbsp;Internal debug support: no
<br>
<p>&nbsp;&nbsp;MPI interface warnings: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
<p>Memory profiling support: no
<br>
<p>Memory debugging support: no
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
<p>&nbsp;&nbsp;&nbsp;Heterogeneous support: no
<br>
<p>&nbsp;mpirun default --prefix: no
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: gettimeofday
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Symbol vis. support: yes
<br>
<p>&nbsp;&nbsp;&nbsp;Host topology support: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI extensions:
<br>
<p>&nbsp;&nbsp;&nbsp;FT Checkpoint support: no (checkpoint thread: no)
<br>
<p>&nbsp;&nbsp;&nbsp;C/R Enabled Debugging: no
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VampirTrace support: yes
<br>
<p>&nbsp;&nbsp;MPI_MAX_PROCESSOR_NAME: 256
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_ERROR_STRING: 256
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_OBJECT_NAME: 64
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_INFO_KEY: 36
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_INFO_VAL: 256
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_PORT_NAME: 1024
<br>
<p>&nbsp;&nbsp;MPI_MAX_DATAREP_STRING: 128
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA compress: bzip (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA compress: gzip (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA crs: none (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA db: hash (MCA v2.0, API v1.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA db: print (MCA v2.0, API v1.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA event: libevent2021 (MCA v2.0, API v2.0, Component
<br>
v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA hwloc: external (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA if: posix_ipv4 (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA if: linux_ipv6 (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memchecker: valgrind (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: linux (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pstat: linux (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sec: basic (MCA v2.0, API v1.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA shmem: posix (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA dfs: app (MCA v2.0, API v1.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA dfs: orted (MCA v2.0, API v1.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA dfs: test (MCA v2.0, API v1.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: default_app (MCA v2.0, API v3.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: default_hnp (MCA v2.0, API v3.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: default_orted (MCA v2.0, API v3.0, Component
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: default_tool (MCA v2.0, API v3.0, Component
<br>
v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: env (MCA v2.0, API v3.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: hnp (MCA v2.0, API v3.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: singleton (MCA v2.0, API v3.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: tool (MCA v2.0, API v3.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA filem: raw (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: hnp (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: mr_hnp (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: mr_orted (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: orted (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: tool (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA odls: default (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: isolated (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: rsh (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: simulator (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: lama (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: mindist (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: ppr (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: staged (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: binomial (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: debruijn (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: direct (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: radix (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA state: app (MCA v2.0, API v1.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA state: hnp (MCA v2.0, API v1.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA state: novm (MCA v2.0, API v1.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA state: orted (MCA v2.0, API v1.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA state: staged_hnp (MCA v2.0, API v1.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA state: staged_orted (MCA v2.0, API v1.0, Component
<br>
v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA state: tool (MCA v2.0, API v1.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bcol: basesmuma (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bcol: ptpcoll (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: vader (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: inter (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: libnbc (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: ml (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: tuned (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA dpm: orte (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA fbtl: posix (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA fcoll: dynamic (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA fcoll: individual (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA fcoll: static (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA fcoll: two_phase (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA fcoll: ylib (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA fs: ufs (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: ompio (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: grdma (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: rdma (MCA v2.0, API v3.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: sm (MCA v2.0, API v3.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: v (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: bfo (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: cm (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: vma (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rte: orte (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sbgp: basesmsocket (MCA v2.0, API v2.0, Component
<br>
v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sbgp: basesmuma (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sbgp: p2p (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sharedfp: individual (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sharedfp: lockedfile (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sharedfp: sm (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: basic (MCA v2.0, API v2.1, Component v1.8.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA vprotocol: pessimist (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>Sachin
<br>
<p><span class="quotelev1">&gt;Sachin,
</span><br>
<p><span class="quotelev1">&gt;Can you, please, provide a command line? Additional information about your
</span><br>
<span class="quotelev1">&gt;system could be helpful also.
</span><br>
<p><span class="quotelev1">&gt;Josh
</span><br>
<p><span class="quotelev2">&gt;&gt;On Wed, Feb 18, 2015 at 3:43 AM, Sachin Krishnan &lt;sachkris_at_[hidden]&gt;
</span><br>
wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am new to MPI and also this list.
</span><br>
<span class="quotelev2">&gt;&gt; I wrote an MPI code with several MPI_Bcast calls in a loop. My code was
</span><br>
<span class="quotelev2">&gt;&gt; getting stuck at random points, ie it was not systematic. After a few
</span><br>
hours
<br>
<span class="quotelev2">&gt;&gt; of debugging and googling, I found that the issue may be with the
</span><br>
several
<br>
<span class="quotelev2">&gt;&gt; MPI_Bcast calls in a loop.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I stumbled on this test code which can reproduce the issue:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/fintler/ompi/blob/master/orte/test/mpi/bcast_loop.c">https://github.com/fintler/ompi/blob/master/orte/test/mpi/bcast_loop.c</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Im using OpenMPI v1.8.4 installed from official Arch Linux repo.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it a known issue with OpenMPI?
</span><br>
<span class="quotelev2">&gt;&gt; Is it some problem with the way openmpi is configured in my system?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sachin
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26338.php">http://www.open-mpi.org/community/lists/users/2015/02/26338.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26363/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26364.php">Harald Servat: "[OMPI users] Fix small typo in man"</a>
<li><strong>Previous message:</strong> <a href="26362.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Maybe in reply to:</strong> <a href="26338.php">Sachin Krishnan: "[OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26366.php">Joshua Ladd: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<li><strong>Reply:</strong> <a href="26366.php">Joshua Ladd: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
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
