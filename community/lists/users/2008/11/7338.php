<?
$subject_val = "[OMPI users] Memchecker report on v1.3b2 (includes potential bug reports)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 03:08:14 2008" -->
<!-- isoreceived="20081119080814" -->
<!-- sent="Wed, 19 Nov 2008 09:08:01 +0100" -->
<!-- isosent="20081119080801" -->
<!-- name="Fran&#231;ois PELLEGRINI" -->
<!-- email="francois.pellegrini_at_[hidden]" -->
<!-- subject="[OMPI users] Memchecker report on v1.3b2 (includes potential bug reports)" -->
<!-- id="4923C961.20100_at_labri.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Memchecker report on v1.3b2 (includes potential bug reports)<br>
<strong>From:</strong> Fran&#231;ois PELLEGRINI (<em>francois.pellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-19 03:08:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7339.php">Stephen Wornom: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7337.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7340.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Reply:</strong> <a href="7340.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p><p>I am the main developer of the Scotch parallel graph partitioning
<br>
package, which uses both MPI and Posix Pthreads. I have been doing
<br>
a great deal of testing of my program on various platforms and
<br>
libraries, searching for potential bugs (there may still be some ;-) ).
<br>
<p>The new memchecker tool proposed in v1.3 is indeed interesting
<br>
to me, so I tried it on my Linux platform. I used the following
<br>
configuration options :
<br>
<p>% ./configure --enable-debug --enable-mem-debug --enable-memchecker
<br>
--with-valgrind=/usr/bin --enable-mpi-threads
<br>
--prefix=/home/pastix/pelegrin/openmpi
<br>
<p>% ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI pelegrin_at_laurel Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.3b2
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r19927
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: Nov 04, 2008
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.3b2
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r19927
<br>
&nbsp;&nbsp;&nbsp;Open RTE release date: Nov 04, 2008
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.3b2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r19927
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Nov 04, 2008
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.3b2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /home/pastix/pelegrin/openmpi
<br>
&nbsp;Configured architecture: x86_64-unknown-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: laurel
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: pelegrin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Wed Nov 19 00:50:50 CET 2008
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: laurel
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: pelegrin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: mercredi 19 novembre 2008, 00:55:59 (UTC+0100)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: laurel
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran90 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: yes, progress: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
&nbsp;&nbsp;Internal debug support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: no
<br>
&nbsp;mpirun default --prefix: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: gettimeofday
<br>
Symbol visibility support: yes
<br>
&nbsp;&nbsp;&nbsp;FT Checkpoint support: no  (checkpoint thread: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memchecker: valgrind (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA carto: file (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA dpm: orte (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: inter (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: tuned (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: cm (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: v (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: vma (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: rdma (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: hnp (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: orted (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: tool (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA odls: default (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: binomial (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: direct (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: linear (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: rsh (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: slurm (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA filem: rsh (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: default (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: env (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: hnp (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: singleton (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: slurm (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: tool (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.3)
<br>
<p>% gcc --version
<br>
gcc (Debian 4.3.2-1) 4.3.2
<br>
Copyright (C) 2008 Free Software Foundation, Inc.
<br>
<p>I launched my program under valgrind on two procs and got the following report:
<br>
<p>% mpirun -np 2 valgrind ../bin/dgord ~/paral/graph/altr4.grf.gz /dev/null -vt
<br>
==10978== Memcheck, a memory error detector.
<br>
==10978== Copyright (C) 2002-2007, and GNU GPL'd, by Julian Seward et al.
<br>
==10978== Using LibVEX rev 1854, a library for dynamic binary translation.
<br>
==10978== Copyright (C) 2004-2007, and GNU GPL'd, by OpenWorks LLP.
<br>
==10978== Using valgrind-3.3.1-Debian, a dynamic binary instrumentation framework.
<br>
==10978== Copyright (C) 2000-2007, and GNU GPL'd, by Julian Seward et al.
<br>
==10978== For more details, rerun with: -v
<br>
==10978==
<br>
==10979== Memcheck, a memory error detector.
<br>
==10979== Copyright (C) 2002-2007, and GNU GPL'd, by Julian Seward et al.
<br>
==10979== Using LibVEX rev 1854, a library for dynamic binary translation.
<br>
==10979== Copyright (C) 2004-2007, and GNU GPL'd, by OpenWorks LLP.
<br>
==10979== Using valgrind-3.3.1-Debian, a dynamic binary instrumentation framework.
<br>
==10979== Copyright (C) 2000-2007, and GNU GPL'd, by Julian Seward et al.
<br>
==10979== For more details, rerun with: -v
<br>
==10979==
<br>
==10979== Syscall param sched_setaffinity(mask) points to unaddressable
<br>
byte(s)==10978== Syscall param sched_setaffinity(mask) points to unaddressable
<br>
byte(s)
<br>
==10978==    at 0x65FB269: syscall (in /lib/libc-2.7.so)
<br>
<p>==10978==    by 0x6C8365A: opal_paffinity_linux_plpa_api_probe_init
<br>
(plpa_api_probe.c:43)
<br>
==10978==    by 0x6C83BB8: opal_paffinity_linux_plpa_init (plpa_runtime.c:36)
<br>
==10978==    by 0x6C84984: opal_paffinity_linux_plpa_have_topology_information
<br>
(plpa_map.c:501)
<br>
==10978==    by 0x6C83129: linux_module_init (paffinity_linux_module.c:119)
<br>
==10978==    by 0x5AB35EA: opal_paffinity_base_select (paffinity_base_select.c:64)
<br>
==10978==    by 0x5A7DE99: opal_init (opal_init.c:292)
<br>
==10978==    by 0x580087A: orte_init (orte_init.c:76)
<br>
==10978==    by 0x551675F: ompi_mpi_init (ompi_mpi_init.c:343)
<br>
==10978==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
<br>
==10978==    by 0x4067CF: main (dgord.c:123)
<br>
==10978==  Address 0x0 is not stack'd, malloc'd or (recently) free'd
<br>
==10979==    at 0x65FB269: syscall (in /lib/libc-2.7.so)
<br>
==10979==    by 0x6C8365A: opal_paffinity_linux_plpa_api_probe_init
<br>
(plpa_api_probe.c:43)
<br>
==10979==    by 0x6C83BB8: opal_paffinity_linux_plpa_init (plpa_runtime.c:36)
<br>
==10979==    by 0x6C84984: opal_paffinity_linux_plpa_have_topology_information
<br>
(plpa_map.c:501)
<br>
==10979==    by 0x6C83129: linux_module_init (paffinity_linux_module.c:119)
<br>
==10979==    by 0x5AB35EA: opal_paffinity_base_select (paffinity_base_select.c:64)
<br>
==10979==    by 0x5A7DE99: opal_init (opal_init.c:292)
<br>
==10979==    by 0x580087A: orte_init (orte_init.c:76)
<br>
==10979==    by 0x551675F: ompi_mpi_init (ompi_mpi_init.c:343)
<br>
==10979==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
<br>
==10979==    by 0x4067CF: main (dgord.c:123)
<br>
==10979==  Address 0x0 is not stack'd, malloc'd or (recently) free'd
<br>
==10978== Warning: set address range perms: large range 134217728 (defined)
<br>
==10979== Warning: set address range perms: large range 134217728 (defined)
<br>
==10978==
<br>
==10978== Conditional jump or move depends on uninitialised value(s)
<br>
==10978==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
<br>
==10978==    by 0x972EBD4: mpool_calloc (btl_sm.c:109)
<br>
==10978==    by 0x972F6A8: sm_btl_first_time_init (btl_sm.c:314)
<br>
==10978==    by 0x972FCE3: mca_btl_sm_add_procs (btl_sm.c:488)
<br>
==10978==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
<br>
==10978==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
<br>
==10978==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
<br>
==10978==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
<br>
==10978==    by 0x4067CF: main (dgord.c:123)
<br>
==10978==
<br>
==10978== Conditional jump or move depends on uninitialised value(s)
<br>
==10978==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
<br>
==10978==    by 0x972EBD4: mpool_calloc (btl_sm.c:109)
<br>
==10978==    by 0x972EC85: init_fifos (btl_sm.c:125)
<br>
==10978==    by 0x972F6CB: sm_btl_first_time_init (btl_sm.c:317)
<br>
==10978==    by 0x972FCE3: mca_btl_sm_add_procs (btl_sm.c:488)
<br>
==10978==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
<br>
==10978==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
<br>
==10978==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
<br>
==10978==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
<br>
==10978==    by 0x4067CF: main (dgord.c:123)
<br>
==10978==
<br>
==10978== Conditional jump or move depends on uninitialised value(s)
<br>
==10978==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
<br>
==10978==    by 0x54E660E: ompi_free_list_grow (ompi_free_list.c:198)
<br>
==10978==    by 0x54E6435: ompi_free_list_init_ex_new (ompi_free_list.c:163)
<br>
==10978==    by 0x972F9D3: ompi_free_list_init_new (ompi_free_list.h:169)
<br>
==10978==    by 0x972F864: sm_btl_first_time_init (btl_sm.c:343)
<br>
==10978==    by 0x972FCE3: mca_btl_sm_add_procs (btl_sm.c:488)
<br>
==10978==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
<br>
==10978==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
<br>
==10978==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
<br>
==10978==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
<br>
==10978==    by 0x4067CF: main (dgord.c:123)
<br>
==10979==
<br>
==10979== Conditional jump or move depends on uninitialised value(s)
<br>
==10979==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
<br>
==10979==    by 0x972EBD4: mpool_calloc (btl_sm.c:109)
<br>
==10979==    by 0x972F6A8: sm_btl_first_time_init (btl_sm.c:314)
<br>
==10979==    by 0x972FCE3: mca_btl_sm_add_procs (btl_sm.c:488)
<br>
==10979==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
<br>
==10979==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
<br>
==10979==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
<br>
==10979==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
<br>
==10979==    by 0x4067CF: main (dgord.c:123)
<br>
==10979==
<br>
==10979== Conditional jump or move depends on uninitialised value(s)
<br>
==10979==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
<br>
==10979==    by 0x972EBD4: mpool_calloc (btl_sm.c:109)
<br>
==10979==    by 0x972EC85: init_fifos (btl_sm.c:125)
<br>
==10979==    by 0x972F6CB: sm_btl_first_time_init (btl_sm.c:317)
<br>
==10979==    by 0x972FCE3: mca_btl_sm_add_procs (btl_sm.c:488)
<br>
==10979==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
<br>
==10979==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
<br>
==10979==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
<br>
==10979==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
<br>
==10979==    by 0x4067CF: main (dgord.c:123)
<br>
==10979==
<br>
==10979== Conditional jump or move depends on uninitialised value(s)
<br>
==10979==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
<br>
==10979==    by 0x54E660E: ompi_free_list_grow (ompi_free_list.c:198)
<br>
==10979==    by 0x54E6435: ompi_free_list_init_ex_new (ompi_free_list.c:163)
<br>
==10979==    by 0x972F9D3: ompi_free_list_init_new (ompi_free_list.h:169)
<br>
==10979==    by 0x972F864: sm_btl_first_time_init (btl_sm.c:343)
<br>
==10979==    by 0x972FCE3: mca_btl_sm_add_procs (btl_sm.c:488)
<br>
==10979==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
<br>
==10979==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
<br>
==10979==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
<br>
==10979==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
<br>
==10979==    by 0x4067CF: main (dgord.c:123)
<br>
==10979==
<br>
==10979== Conditional jump or move depends on uninitialised value(s)
<br>
==10979==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
<br>
==10979==    by 0x9730165: ompi_fifo_init (ompi_fifo.h:280)
<br>
==10979==    by 0x9730044: mca_btl_sm_add_procs (btl_sm.c:538)
<br>
==10979==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
<br>
==10979==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
<br>
==10979==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
<br>
==10979==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
<br>
==10979==    by 0x4067CF: main (dgord.c:123)
<br>
==10979==
<br>
==10979== Conditional jump or move depends on uninitialised value(s)
<br>
==10979==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
<br>
==10979==    by 0x97302C4: ompi_cb_fifo_init (ompi_circular_buffer_fifo.h:158)
<br>
==10979==    by 0x97301BA: ompi_fifo_init (ompi_fifo.h:288)
<br>
==10979==    by 0x9730044: mca_btl_sm_add_procs (btl_sm.c:538)
<br>
==10979==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
<br>
==10979==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
<br>
==10979==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
<br>
==10979==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
<br>
==10979==    by 0x4067CF: main (dgord.c:123)
<br>
==10979==
<br>
==10979== Conditional jump or move depends on uninitialised value(s)
<br>
==10979==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
<br>
==10979==    by 0x97303B3: ompi_cb_fifo_init (ompi_circular_buffer_fifo.h:180)
<br>
==10979==    by 0x97301BA: ompi_fifo_init (ompi_fifo.h:288)
<br>
==10979==    by 0x9730044: mca_btl_sm_add_procs (btl_sm.c:538)
<br>
==10979==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
<br>
==10979==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
<br>
==10979==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
<br>
==10979==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
<br>
==10979==    by 0x4067CF: main (dgord.c:123)
<br>
==10978==
<br>
==10978== Conditional jump or move depends on uninitialised value(s)
<br>
==10978==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
<br>
==10978==    by 0x9730165: ompi_fifo_init (ompi_fifo.h:280)
<br>
==10978==    by 0x9730044: mca_btl_sm_add_procs (btl_sm.c:538)
<br>
==10978==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
<br>
==10978==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
<br>
==10978==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
<br>
==10978==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
<br>
==10978==    by 0x4067CF: main (dgord.c:123)
<br>
==10978==
<br>
==10978== Conditional jump or move depends on uninitialised value(s)
<br>
==10978==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
<br>
==10978==    by 0x97302C4: ompi_cb_fifo_init (ompi_circular_buffer_fifo.h:158)
<br>
==10978==    by 0x97301BA: ompi_fifo_init (ompi_fifo.h:288)
<br>
==10978==    by 0x9730044: mca_btl_sm_add_procs (btl_sm.c:538)
<br>
==10978==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
<br>
==10978==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
<br>
==10978==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
<br>
==10978==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
<br>
==10978==    by 0x4067CF: main (dgord.c:123)
<br>
==10978==
<br>
==10978== Conditional jump or move depends on uninitialised value(s)
<br>
==10978==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
<br>
==10978==    by 0x97303B3: ompi_cb_fifo_init (ompi_circular_buffer_fifo.h:180)
<br>
==10978==    by 0x97301BA: ompi_fifo_init (ompi_fifo.h:288)
<br>
==10978==    by 0x9730044: mca_btl_sm_add_procs (btl_sm.c:538)
<br>
==10978==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
<br>
==10978==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
<br>
==10978==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
<br>
==10978==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
<br>
==10978==    by 0x4067CF: main (dgord.c:123)
<br>
==10979==
<br>
==10979== Uninitialised byte(s) found during client check request
<br>
==10979==    at 0x5AB2C87: valgrind_module_isdefined
<br>
(memchecker_valgrind_module.c:112)
<br>
==10979==    by 0x5AB26CB: opal_memchecker_base_isdefined
<br>
(memchecker_base_wrappers.c:34)
<br>
==10979==    by 0x553F067: memchecker_call (memchecker.h:96)
<br>
==10979==    by 0x553ECDF: PMPI_Bcast (pbcast.c:41)
<br>
==10979==    by 0x40BB82: _SCOTCHdgraphLoad (dgraph_io_load.c:226)
<br>
==10979==    by 0x406B32: main (dgord.c:265)
<br>
==10979==  Address 0x7feffff74 is on thread 1's stack
<br>
==10978==
<br>
==10978== Invalid read of size 8
<br>
==10978==    at 0x8F0D85A: memchecker_call (memchecker.h:94)
<br>
==10978==    by 0x8F0D812: mca_pml_ob1_send_request_free (pml_ob1_sendreq.c:107)
<br>
==10978==    by 0x55154DA: ompi_request_free (request.h:354)
<br>
==10978==    by 0x5515B05: ompi_request_default_wait_all (req_wait.c:344)
<br>
==10978==    by 0x556EA00: PMPI_Waitall (pwaitall.c:68)
<br>
==10978==    by 0x41FC2D: _SCOTCHdgraphCoarsen (dgraph_coarsen.c:711)
<br>
==10978==    by 0x415B34: vdgraphSeparateMl2 (vdgraph_separate_ml.c:99)==10979==
<br>
==10979== Invalid read of size 8
<br>
==10979==    at 0x8F0D85A: memchecker_call (memchecker.h:94)
<br>
==10979==    by 0x8F0D812: mca_pml_ob1_send_request_free (pml_ob1_sendreq.c:107)
<br>
==10979==    by 0x55154DA: ompi_request_free (request.h:354)
<br>
==10979==    by 0x5515B05: ompi_request_default_wait_all (req_wait.c:344)
<br>
==10979==    by 0x556EA00: PMPI_Waitall (pwaitall.c:68)
<br>
==10979==    by 0x41FC2D: _SCOTCHdgraphCoarsen (dgraph_coarsen.c:711)
<br>
==10979==    by 0x415B34: vdgraphSeparateMl2 (vdgraph_separate_ml.c:99)
<br>
==10979==    by 0x415D96: _SCOTCHvdgraphSeparateMl (vdgraph_separate_ml.c:660)
<br>
==10979==    by 0x40EC49: _SCOTCHvdgraphSeparateSt (vdgraph_separate_st.c:327)
<br>
==10979==    by 0x412F52: _SCOTCHhdgraphOrderNd (hdgraph_order_nd.c:294)
<br>
==10979==    by 0x40EB26: _SCOTCHhdgraphOrderSt (hdgraph_order_st.c:216)
<br>
==10979==    by 0x40734A: SCOTCH_dgraphOrderComputeList
<br>
(library_dgraph_order.c:220)
<br>
==10979==  Address 0x28 is not stack'd, malloc'd or (recently) free'd
<br>
<p>==10978==    by 0x415D96: _SCOTCHvdgraphSeparateMl (vdgraph_separate_ml.c:660)
<br>
==10978==    by 0x40EC49: _SCOTCHvdgraphSeparateSt (vdgraph_separate_st.c:327)
<br>
==10978==    by 0x412F52: _SCOTCHhdgraphOrderNd (hdgraph_order_nd.c:294)
<br>
==10978==    by 0x40EB26: _SCOTCHhdgraphOrderSt (hdgraph_order_st.c:216)
<br>
==10978==    by 0x40734A: SCOTCH_dgraphOrderComputeList
<br>
(library_dgraph_order.c:220)
<br>
==10978==  Address 0x28 is not stack'd, malloc'd or (recently) free'd
<br>
[laurel:10979] *** Process received signal ***
<br>
[laurel:10978] *** Process received signal ***
<br>
[laurel:10979] Signal: Segmentation fault (11)
<br>
[laurel:10979] Signal code: Address not mapped (1)
<br>
[laurel:10979] Failing at address: 0x28
<br>
[laurel:10978] Signal: Segmentation fault (11)
<br>
[laurel:10978] Signal code: Address not mapped (1)
<br>
[laurel:10978] Failing at address: 0x28
<br>
[laurel:10979] [ 0] /lib/libpthread.so.0 [0x6321a80]
<br>
[laurel:10979] [ 1] /home/pastix/pelegrin/openmpi/lib/openmpi/mca_pml_ob1.so
<br>
[0x8f0d85a]
<br>
[laurel:10979] [ 2] /home/pastix/pelegrin/openmpi/lib/openmpi/mca_pml_ob1.so
<br>
[0x8f0d813]
<br>
[laurel:10979] [ 3] /home/pastix/pelegrin/openmpi/lib/libmpi.so.0 [0x55154db]
<br>
[laurel:10979] [ 4] /home/pastix/pelegrin/openmpi/lib/libmpi.so.0 [0x5515b06]
<br>
[laurel:10979] [ 5]
<br>
/home/pastix/pelegrin/openmpi/lib/libmpi.so.0(PMPI_Waitall+0x15d) [0x556ea01]
<br>
[laurel:10979] [ 6] ../bin/dgord(_SCOTCHdgraphCoarsen+0x13ce) [0x41fc2e]
<br>
[laurel:10979] [ 7] ../bin/dgord [0x415b35]
<br>
[laurel:10979] [ 8] ../bin/dgord(_SCOTCHvdgraphSeparateMl+0x27) [0x415d97]
<br>
[laurel:10979] [ 9] ../bin/dgord(_SCOTCHvdgraphSeparateSt+0x5a) [0x40ec4a]
<br>
[laurel:10978] [ 0] /lib/libpthread.so.0 [0x6321a80]
<br>
[laurel:10979] [10] ../bin/dgord(_SCOTCHhdgraphOrderNd+0xe3) [0x412f53]
<br>
[laurel:10979] [11] ../bin/dgord(_SCOTCHhdgraphOrderSt+0x67) [0x40eb27]
<br>
[laurel:10978] [ 1] /home/pastix/pelegrin/openmpi/lib/openmpi/mca_pml_ob1.so
<br>
[0x8f0d85a]
<br>
[laurel:10979] [12] ../bin/dgord(SCOTCH_dgraphOrderComputeList+0xeb) [0x40734b]
<br>
[laurel:10979] [13] ../bin/dgord(main+0x3ec) [0x406b7c]
<br>
[laurel:10979] [14] /lib/libc.so.6(__libc_start_main+0xe6) [0x654d1a6]
<br>
[laurel:10979] [15] ../bin/dgord [0x406669]
<br>
[laurel:10978] [ 2] /home/pastix/pelegrin/openmpi/lib/openmpi/mca_pml_ob1.so
<br>
[0x8f0d813]
<br>
[laurel:10978] [ 3] /home/pastix/pelegrin/openmpi/lib/libmpi.so.0 [0x55154db]
<br>
[laurel:10978] [ 4] /home/pastix/pelegrin/openmpi/lib/libmpi.so.0 [0x5515b06]
<br>
[laurel:10978] [ 5]
<br>
/home/pastix/pelegrin/openmpi/lib/libmpi.so.0(PMPI_Waitall+0x15d) [0x556ea01]
<br>
[laurel:10978] [ 6] ../bin/dgord(_SCOTCHdgraphCoarsen+0x13ce) [0x41fc2e]
<br>
[laurel:10978] [ 7] ../bin/dgord [0x415b35]
<br>
[laurel:10978] [ 8] ../bin/dgord(_SCOTCHvdgraphSeparateMl+0x27) [0x415d97]
<br>
[laurel:10978] [ 9] ../bin/dgord(_SCOTCHvdgraphSeparateSt+0x5a) [0x40ec4a]
<br>
[laurel:10979] *** End of error message ***
<br>
[laurel:10978] [10] ../bin/dgord(_SCOTCHhdgraphOrderNd+0xe3) [0x412f53]
<br>
[laurel:10978] [11] ../bin/dgord(_SCOTCHhdgraphOrderSt+0x67) [0x40eb27]
<br>
[laurel:10978] [12] ../bin/dgord(SCOTCH_dgraphOrderComputeList+0xeb) [0x40734b]
<br>
[laurel:10978] [13] ../bin/dgord(main+0x3ec) [0x406b7c]
<br>
[laurel:10978] [14] /lib/libc.so.6(__libc_start_main+0xe6) [0x654d1a6]
<br>
[laurel:10978] [15] ../bin/dgord [0x406669]
<br>
==10979== [laurel:10978] *** End of error message ***
<br>
<p>==10979== Process terminating with default action of signal 11 (SIGSEGV)
<br>
==10979==  Access not within mapped region at address 0x29
<br>
==10979==    at 0x8F0D85A: memchecker_call (memchecker.h:94)
<br>
==10978==
<br>
==10978== Process terminating with default action of signal 11 (SIGSEGV)
<br>
==10978==  Access not within mapped region at address 0x29
<br>
==10978==    at 0x8F0D85A: memchecker_call (memchecker.h:94)
<br>
==10978==    by 0x8F0D812: mca_pml_ob1_send_request_free (pml_ob1_sendreq.c:107)
<br>
==10978==    by 0x55154DA: ompi_request_free (request.h:354)
<br>
==10978==    by 0x5515B05: ompi_request_default_wait_all (req_wait.c:344)
<br>
==10978==    by 0x556EA00: PMPI_Waitall (pwaitall.c:68)
<br>
==10978==    by 0x41FC2D: _SCOTCHdgraphCoarsen (dgraph_coarsen.c:711)
<br>
==10978==    by 0x415B34: vdgraphSeparateMl2 (vdgraph_separate_ml.c:99)
<br>
==10978==    by 0x415D96: _SCOTCHvdgraphSeparateMl (vdgraph_separate_ml.c:660)
<br>
==10978==    by 0x40EC49: _SCOTCHvdgraphSeparateSt (vdgraph_separate_st.c:327)
<br>
==10978==    by 0x412F52: _SCOTCHhdgraphOrderNd (hdgraph_order_nd.c:294)
<br>
==10978==    by 0x40EB26: _SCOTCHhdgraphOrderSt (hdgraph_order_st.c:216)
<br>
==10978==    by 0x40734A: SCOTCH_dgraphOrderComputeList
<br>
(library_dgraph_order.c:220)
<br>
==10979==    by 0x8F0D812: mca_pml_ob1_send_request_free (pml_ob1_sendreq.c:107)
<br>
==10979==    by 0x55154DA: ompi_request_free (request.h:354)
<br>
==10979==    by 0x5515B05: ompi_request_default_wait_all (req_wait.c:344)
<br>
==10979==    by 0x556EA00: PMPI_Waitall (pwaitall.c:68)
<br>
==10979==    by 0x41FC2D: _SCOTCHdgraphCoarsen (dgraph_coarsen.c:711)
<br>
==10979==    by 0x415B34: vdgraphSeparateMl2 (vdgraph_separate_ml.c:99)
<br>
==10979==    by 0x415D96: _SCOTCHvdgraphSeparateMl (vdgraph_separate_ml.c:660)
<br>
==10979==    by 0x40EC49: _SCOTCHvdgraphSeparateSt (vdgraph_separate_st.c:327)
<br>
==10979==    by 0x412F52: _SCOTCHhdgraphOrderNd (hdgraph_order_nd.c:294)
<br>
==10979==    by 0x40EB26: _SCOTCHhdgraphOrderSt (hdgraph_order_st.c:216)
<br>
==10979==    by 0x40734A: SCOTCH_dgraphOrderComputeList
<br>
(library_dgraph_order.c:220)
<br>
==10979==
<br>
==10979== ERROR SUMMARY: 14 errors from 9 contexts (suppressed: 264 from 3)
<br>
==10979== malloc/free: in use at exit: 4,626,295 bytes in 2,614 blocks.==10978==
<br>
==10978== ERROR SUMMARY: 13 errors from 8 contexts (suppressed: 264 from 3)
<br>
<p>==10979== malloc/free: 9,296 allocs, 6,682 frees, 11,121,335 bytes allocated.
<br>
==10979== For counts of detected errors, rerun with: -v==10978== malloc/free:
<br>
in use at exit: 4,671,068 bytes in 2,627 blocks.
<br>
==10978== malloc/free: 9,315 allocs, 6,688 frees, 13,108,494 bytes allocated.
<br>
==10978== For counts of detected errors, rerun with: -v
<br>
<p>====10979== searching for pointers to 2,614 not-freed blocks.
<br>
10978== searching for pointers to 2,627 not-freed blocks.
<br>
==10978== checked 138,090,848 bytes.
<br>
==10978== ==10979== checked 138,047,136 bytes.
<br>
==10979==
<br>
==10979== LEAK SUMMARY:
<br>
==10979==    definitely lost: 2,049 bytes in 25 blocks.
<br>
==10979==      possibly lost: 2,405,098 bytes in 60 blocks.
<br>
==10979==    still reachable: 2,219,148 bytes in 2,529 blocks.
<br>
==10979==         suppressed: 0 bytes in 0 blocks.
<br>
==10979== Rerun with --leak-check=full to see details of leaked memory.
<br>
<p>==10978== LEAK SUMMARY:
<br>
==10978==    definitely lost: 2,125 bytes in 27 blocks.
<br>
==10978==      possibly lost: 2,445,353 bytes in 63 blocks.
<br>
==10978==    still reachable: 2,223,590 bytes in 2,537 blocks.
<br>
==10978==         suppressed: 0 bytes in 0 blocks.
<br>
==10978== Rerun with --leak-check=full to see details of leaked memory.
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 10979 on node laurel exited on
<br>
signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p><p>I want to report the following issues :
<br>
<p>1)- The &quot;Conditional jump or move depends on uninitialised value(s)&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;messages are quite puzzling. Do they correspond to real problems
<br>
&nbsp;&nbsp;&nbsp;&nbsp;in OpenMPI or should they just be ignored ?
<br>
<p>2)- The MPI_Waitall call which causes the problem spans across a set
<br>
&nbsp;&nbsp;&nbsp;&nbsp;of former receive requests already set to MPI_REQUEST_NULL, and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to a set of matching (and hence matched) Isend requests.
<br>
<p>3)- Memchecker also complaints (I think wrongfully) in the case of a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bcast where the receivers have not pre-set all of their receive array.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I guess in the memcheck process the sender side and the receiver
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sides should get different treatment, since only one data array is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;passed, which is either to be read or written depending on the root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;process number.
<br>
<p>4)- It also complaints when two Isend's correspond to overlapping regions
<br>
&nbsp;&nbsp;&nbsp;&nbsp;of the same memory area. It seems that the first Isend sets flags on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the region as &quot;non-readable&quot;, while it should just be &quot;non-writeable&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;isn't it ?
<br>
<p>5)- Keep doing the good job ! Congrats.  ;-)
<br>
<p><p>Sincerely yours,
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f.p.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7339.php">Stephen Wornom: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7337.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7340.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Reply:</strong> <a href="7340.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
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
