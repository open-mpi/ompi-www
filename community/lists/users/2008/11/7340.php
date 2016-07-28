<?
$subject_val = "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 09:56:56 2008" -->
<!-- isoreceived="20081119145656" -->
<!-- sent="Wed, 19 Nov 2008 15:56:46 +0100" -->
<!-- isosent="20081119145646" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)" -->
<!-- id="4924292D.5010602_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4923C961.20100_at_labri.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-19 09:56:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7341.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Previous message:</strong> <a href="7339.php">Stephen Wornom: "Re: [OMPI users] Hybrid program"</a>
<li><strong>In reply to:</strong> <a href="7338.php">Fran&#231;ois PELLEGRINI: "[OMPI users] Memchecker report on v1.3b2 (includes potential bug reports)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7344.php">François PELLEGRINI: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Reply:</strong> <a href="7344.php">François PELLEGRINI: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Fran&#231;ois,
<br>
<p>Thanks a lot for your report, it's really a great help for us. :-)
<br>
<p>For the issues:
<br>
<p>1)  When you got &quot;Conditional jump&quot; errors, normally that means some 
<br>
uninitialized(or undefined) values were used. The parameters that passed 
<br>
into  PMPI_Init_thread might contain uninitialized values, which could 
<br>
cause errors (even seg-fault) later. I need some time to run your 
<br>
application to check where these values exactly are. I'll post another 
<br>
email when it's done.
<br>
<p><p>2)  You're right. We shouldn't check the buffer when the request is 
<br>
completed and released. I'll fix that.
<br>
<p>3)  Absolutely correct. I'll fix that.
<br>
<p>4)  Well, this sounds reasonable, but according to the MPI-1 standard 
<br>
(see page 40 for non-blocking send/recv, a more detailed explanation in 
<br>
page 30):
<br>
<p>&quot;A nonblocking send call indicates that the system may start copying 
<br>
data out of the send buffer. The sender should */not access*/ any part 
<br>
of the send buffer after a nonblocking send operation is called, until 
<br>
the send completes.&quot;
<br>
<p>So before calling MPI_Wait to complete an isend operation, any access to 
<br>
the send buffer is illegal. It might be a little strict, but we have to 
<br>
do what the standard says.
<br>
<p>5)  Your feedbacks are alway welcome and, most importantly, helpful for 
<br>
us to make improvements. ;-) Thanks again.
<br>
<p><p><p>Best Regards,
<br>
Shiqing
<br>
<p><p><p>Fran&#231;ois PELLEGRINI wrote:
<br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am the main developer of the Scotch parallel graph partitioning
</span><br>
<span class="quotelev1">&gt; package, which uses both MPI and Posix Pthreads. I have been doing
</span><br>
<span class="quotelev1">&gt; a great deal of testing of my program on various platforms and
</span><br>
<span class="quotelev1">&gt; libraries, searching for potential bugs (there may still be some ;-) ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The new memchecker tool proposed in v1.3 is indeed interesting
</span><br>
<span class="quotelev1">&gt; to me, so I tried it on my Linux platform. I used the following
</span><br>
<span class="quotelev1">&gt; configuration options :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % ./configure --enable-debug --enable-mem-debug --enable-memchecker
</span><br>
<span class="quotelev1">&gt; --with-valgrind=/usr/bin --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt; --prefix=/home/pastix/pelegrin/openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % ompi_info
</span><br>
<span class="quotelev1">&gt;                  Package: Open MPI pelegrin_at_laurel Distribution
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.3b2
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r19927
</span><br>
<span class="quotelev1">&gt;    Open MPI release date: Nov 04, 2008
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.3b2
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r19927
</span><br>
<span class="quotelev1">&gt;    Open RTE release date: Nov 04, 2008
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.3b2
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r19927
</span><br>
<span class="quotelev1">&gt;        OPAL release date: Nov 04, 2008
</span><br>
<span class="quotelev1">&gt;             Ident string: 1.3b2
</span><br>
<span class="quotelev1">&gt;                   Prefix: /home/pastix/pelegrin/openmpi
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;           Configure host: laurel
</span><br>
<span class="quotelev1">&gt;            Configured by: pelegrin
</span><br>
<span class="quotelev1">&gt;            Configured on: Wed Nov 19 00:50:50 CET 2008
</span><br>
<span class="quotelev1">&gt;           Configure host: laurel
</span><br>
<span class="quotelev1">&gt;                 Built by: pelegrin
</span><br>
<span class="quotelev1">&gt;                 Built on: mercredi 19 novembre 2008, 00:55:59 (UTC+0100)
</span><br>
<span class="quotelev1">&gt;               Built host: laurel
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: yes, progress: no)
</span><br>
<span class="quotelev1">&gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;   Internal debug support: yes
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: yes
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev1">&gt;    FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;           MCA memchecker: valgrind (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA carto: file (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;               MCA routed: linear (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA filem: rsh (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: env (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: slurm (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: tool (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % gcc --version
</span><br>
<span class="quotelev1">&gt; gcc (Debian 4.3.2-1) 4.3.2
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2008 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I launched my program under valgrind on two procs and got the following report:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % mpirun -np 2 valgrind ../bin/dgord ~/paral/graph/altr4.grf.gz /dev/null -vt
</span><br>
<span class="quotelev1">&gt; ==10978== Memcheck, a memory error detector.
</span><br>
<span class="quotelev1">&gt; ==10978== Copyright (C) 2002-2007, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==10978== Using LibVEX rev 1854, a library for dynamic binary translation.
</span><br>
<span class="quotelev1">&gt; ==10978== Copyright (C) 2004-2007, and GNU GPL'd, by OpenWorks LLP.
</span><br>
<span class="quotelev1">&gt; ==10978== Using valgrind-3.3.1-Debian, a dynamic binary instrumentation framework.
</span><br>
<span class="quotelev1">&gt; ==10978== Copyright (C) 2000-2007, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==10978== For more details, rerun with: -v
</span><br>
<span class="quotelev1">&gt; ==10978==
</span><br>
<span class="quotelev1">&gt; ==10979== Memcheck, a memory error detector.
</span><br>
<span class="quotelev1">&gt; ==10979== Copyright (C) 2002-2007, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==10979== Using LibVEX rev 1854, a library for dynamic binary translation.
</span><br>
<span class="quotelev1">&gt; ==10979== Copyright (C) 2004-2007, and GNU GPL'd, by OpenWorks LLP.
</span><br>
<span class="quotelev1">&gt; ==10979== Using valgrind-3.3.1-Debian, a dynamic binary instrumentation framework.
</span><br>
<span class="quotelev1">&gt; ==10979== Copyright (C) 2000-2007, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==10979== For more details, rerun with: -v
</span><br>
<span class="quotelev1">&gt; ==10979==
</span><br>
<span class="quotelev1">&gt; ==10979== Syscall param sched_setaffinity(mask) points to unaddressable
</span><br>
<span class="quotelev1">&gt; byte(s)==10978== Syscall param sched_setaffinity(mask) points to unaddressable
</span><br>
<span class="quotelev1">&gt; byte(s)
</span><br>
<span class="quotelev1">&gt; ==10978==    at 0x65FB269: syscall (in /lib/libc-2.7.so)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x6C8365A: opal_paffinity_linux_plpa_api_probe_init
</span><br>
<span class="quotelev1">&gt; (plpa_api_probe.c:43)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x6C83BB8: opal_paffinity_linux_plpa_init (plpa_runtime.c:36)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x6C84984: opal_paffinity_linux_plpa_have_topology_information
</span><br>
<span class="quotelev1">&gt; (plpa_map.c:501)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x6C83129: linux_module_init (paffinity_linux_module.c:119)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x5AB35EA: opal_paffinity_base_select (paffinity_base_select.c:64)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x5A7DE99: opal_init (opal_init.c:292)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x580087A: orte_init (orte_init.c:76)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x551675F: ompi_mpi_init (ompi_mpi_init.c:343)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x4067CF: main (dgord.c:123)
</span><br>
<span class="quotelev1">&gt; ==10978==  Address 0x0 is not stack'd, malloc'd or (recently) free'd
</span><br>
<span class="quotelev1">&gt; ==10979==    at 0x65FB269: syscall (in /lib/libc-2.7.so)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x6C8365A: opal_paffinity_linux_plpa_api_probe_init
</span><br>
<span class="quotelev1">&gt; (plpa_api_probe.c:43)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x6C83BB8: opal_paffinity_linux_plpa_init (plpa_runtime.c:36)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x6C84984: opal_paffinity_linux_plpa_have_topology_information
</span><br>
<span class="quotelev1">&gt; (plpa_map.c:501)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x6C83129: linux_module_init (paffinity_linux_module.c:119)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x5AB35EA: opal_paffinity_base_select (paffinity_base_select.c:64)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x5A7DE99: opal_init (opal_init.c:292)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x580087A: orte_init (orte_init.c:76)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x551675F: ompi_mpi_init (ompi_mpi_init.c:343)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x4067CF: main (dgord.c:123)
</span><br>
<span class="quotelev1">&gt; ==10979==  Address 0x0 is not stack'd, malloc'd or (recently) free'd
</span><br>
<span class="quotelev1">&gt; ==10978== Warning: set address range perms: large range 134217728 (defined)
</span><br>
<span class="quotelev1">&gt; ==10979== Warning: set address range perms: large range 134217728 (defined)
</span><br>
<span class="quotelev1">&gt; ==10978==
</span><br>
<span class="quotelev1">&gt; ==10978== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==10978==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x972EBD4: mpool_calloc (btl_sm.c:109)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x972F6A8: sm_btl_first_time_init (btl_sm.c:314)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x972FCE3: mca_btl_sm_add_procs (btl_sm.c:488)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x4067CF: main (dgord.c:123)
</span><br>
<span class="quotelev1">&gt; ==10978==
</span><br>
<span class="quotelev1">&gt; ==10978== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==10978==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x972EBD4: mpool_calloc (btl_sm.c:109)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x972EC85: init_fifos (btl_sm.c:125)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x972F6CB: sm_btl_first_time_init (btl_sm.c:317)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x972FCE3: mca_btl_sm_add_procs (btl_sm.c:488)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x4067CF: main (dgord.c:123)
</span><br>
<span class="quotelev1">&gt; ==10978==
</span><br>
<span class="quotelev1">&gt; ==10978== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==10978==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x54E660E: ompi_free_list_grow (ompi_free_list.c:198)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x54E6435: ompi_free_list_init_ex_new (ompi_free_list.c:163)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x972F9D3: ompi_free_list_init_new (ompi_free_list.h:169)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x972F864: sm_btl_first_time_init (btl_sm.c:343)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x972FCE3: mca_btl_sm_add_procs (btl_sm.c:488)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x4067CF: main (dgord.c:123)
</span><br>
<span class="quotelev1">&gt; ==10979==
</span><br>
<span class="quotelev1">&gt; ==10979== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==10979==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x972EBD4: mpool_calloc (btl_sm.c:109)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x972F6A8: sm_btl_first_time_init (btl_sm.c:314)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x972FCE3: mca_btl_sm_add_procs (btl_sm.c:488)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x4067CF: main (dgord.c:123)
</span><br>
<span class="quotelev1">&gt; ==10979==
</span><br>
<span class="quotelev1">&gt; ==10979== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==10979==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x972EBD4: mpool_calloc (btl_sm.c:109)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x972EC85: init_fifos (btl_sm.c:125)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x972F6CB: sm_btl_first_time_init (btl_sm.c:317)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x972FCE3: mca_btl_sm_add_procs (btl_sm.c:488)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x4067CF: main (dgord.c:123)
</span><br>
<span class="quotelev1">&gt; ==10979==
</span><br>
<span class="quotelev1">&gt; ==10979== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==10979==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x54E660E: ompi_free_list_grow (ompi_free_list.c:198)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x54E6435: ompi_free_list_init_ex_new (ompi_free_list.c:163)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x972F9D3: ompi_free_list_init_new (ompi_free_list.h:169)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x972F864: sm_btl_first_time_init (btl_sm.c:343)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x972FCE3: mca_btl_sm_add_procs (btl_sm.c:488)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x4067CF: main (dgord.c:123)
</span><br>
<span class="quotelev1">&gt; ==10979==
</span><br>
<span class="quotelev1">&gt; ==10979== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==10979==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x9730165: ompi_fifo_init (ompi_fifo.h:280)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x9730044: mca_btl_sm_add_procs (btl_sm.c:538)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x4067CF: main (dgord.c:123)
</span><br>
<span class="quotelev1">&gt; ==10979==
</span><br>
<span class="quotelev1">&gt; ==10979== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==10979==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x97302C4: ompi_cb_fifo_init (ompi_circular_buffer_fifo.h:158)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x97301BA: ompi_fifo_init (ompi_fifo.h:288)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x9730044: mca_btl_sm_add_procs (btl_sm.c:538)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x4067CF: main (dgord.c:123)
</span><br>
<span class="quotelev1">&gt; ==10979==
</span><br>
<span class="quotelev1">&gt; ==10979== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==10979==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x97303B3: ompi_cb_fifo_init (ompi_circular_buffer_fifo.h:180)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x97301BA: ompi_fifo_init (ompi_fifo.h:288)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x9730044: mca_btl_sm_add_procs (btl_sm.c:538)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x4067CF: main (dgord.c:123)
</span><br>
<span class="quotelev1">&gt; ==10978==
</span><br>
<span class="quotelev1">&gt; ==10978== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==10978==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x9730165: ompi_fifo_init (ompi_fifo.h:280)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x9730044: mca_btl_sm_add_procs (btl_sm.c:538)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x4067CF: main (dgord.c:123)
</span><br>
<span class="quotelev1">&gt; ==10978==
</span><br>
<span class="quotelev1">&gt; ==10978== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==10978==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x97302C4: ompi_cb_fifo_init (ompi_circular_buffer_fifo.h:158)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x97301BA: ompi_fifo_init (ompi_fifo.h:288)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x9730044: mca_btl_sm_add_procs (btl_sm.c:538)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x4067CF: main (dgord.c:123)
</span><br>
<span class="quotelev1">&gt; ==10978==
</span><br>
<span class="quotelev1">&gt; ==10978== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==10978==    at 0x88E8F1A: mca_mpool_sm_alloc (mpool_sm_module.c:80)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x97303B3: ompi_cb_fifo_init (ompi_circular_buffer_fifo.h:180)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x97301BA: ompi_fifo_init (ompi_fifo.h:288)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x9730044: mca_btl_sm_add_procs (btl_sm.c:538)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x9322C33: mca_bml_r2_add_procs (bml_r2.c:206)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x8EFD000: mca_pml_ob1_add_procs (pml_ob1.c:237)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x5516F4C: ompi_mpi_init (ompi_mpi_init.c:678)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x55546B9: PMPI_Init_thread (pinit_thread.c:82)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x4067CF: main (dgord.c:123)
</span><br>
<span class="quotelev1">&gt; ==10979==
</span><br>
<span class="quotelev1">&gt; ==10979== Uninitialised byte(s) found during client check request
</span><br>
<span class="quotelev1">&gt; ==10979==    at 0x5AB2C87: valgrind_module_isdefined
</span><br>
<span class="quotelev1">&gt; (memchecker_valgrind_module.c:112)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x5AB26CB: opal_memchecker_base_isdefined
</span><br>
<span class="quotelev1">&gt; (memchecker_base_wrappers.c:34)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x553F067: memchecker_call (memchecker.h:96)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x553ECDF: PMPI_Bcast (pbcast.c:41)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x40BB82: _SCOTCHdgraphLoad (dgraph_io_load.c:226)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x406B32: main (dgord.c:265)
</span><br>
<span class="quotelev1">&gt; ==10979==  Address 0x7feffff74 is on thread 1's stack
</span><br>
<span class="quotelev1">&gt; ==10978==
</span><br>
<span class="quotelev1">&gt; ==10978== Invalid read of size 8
</span><br>
<span class="quotelev1">&gt; ==10978==    at 0x8F0D85A: memchecker_call (memchecker.h:94)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x8F0D812: mca_pml_ob1_send_request_free (pml_ob1_sendreq.c:107)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x55154DA: ompi_request_free (request.h:354)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x5515B05: ompi_request_default_wait_all (req_wait.c:344)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x556EA00: PMPI_Waitall (pwaitall.c:68)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x41FC2D: _SCOTCHdgraphCoarsen (dgraph_coarsen.c:711)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x415B34: vdgraphSeparateMl2 (vdgraph_separate_ml.c:99)==10979==
</span><br>
<span class="quotelev1">&gt; ==10979== Invalid read of size 8
</span><br>
<span class="quotelev1">&gt; ==10979==    at 0x8F0D85A: memchecker_call (memchecker.h:94)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x8F0D812: mca_pml_ob1_send_request_free (pml_ob1_sendreq.c:107)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x55154DA: ompi_request_free (request.h:354)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x5515B05: ompi_request_default_wait_all (req_wait.c:344)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x556EA00: PMPI_Waitall (pwaitall.c:68)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x41FC2D: _SCOTCHdgraphCoarsen (dgraph_coarsen.c:711)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x415B34: vdgraphSeparateMl2 (vdgraph_separate_ml.c:99)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x415D96: _SCOTCHvdgraphSeparateMl (vdgraph_separate_ml.c:660)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x40EC49: _SCOTCHvdgraphSeparateSt (vdgraph_separate_st.c:327)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x412F52: _SCOTCHhdgraphOrderNd (hdgraph_order_nd.c:294)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x40EB26: _SCOTCHhdgraphOrderSt (hdgraph_order_st.c:216)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x40734A: SCOTCH_dgraphOrderComputeList
</span><br>
<span class="quotelev1">&gt; (library_dgraph_order.c:220)
</span><br>
<span class="quotelev1">&gt; ==10979==  Address 0x28 is not stack'd, malloc'd or (recently) free'd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x415D96: _SCOTCHvdgraphSeparateMl (vdgraph_separate_ml.c:660)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x40EC49: _SCOTCHvdgraphSeparateSt (vdgraph_separate_st.c:327)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x412F52: _SCOTCHhdgraphOrderNd (hdgraph_order_nd.c:294)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x40EB26: _SCOTCHhdgraphOrderSt (hdgraph_order_st.c:216)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x40734A: SCOTCH_dgraphOrderComputeList
</span><br>
<span class="quotelev1">&gt; (library_dgraph_order.c:220)
</span><br>
<span class="quotelev1">&gt; ==10978==  Address 0x28 is not stack'd, malloc'd or (recently) free'd
</span><br>
<span class="quotelev1">&gt; [laurel:10979] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [laurel:10978] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [laurel:10979] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [laurel:10979] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [laurel:10979] Failing at address: 0x28
</span><br>
<span class="quotelev1">&gt; [laurel:10978] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [laurel:10978] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [laurel:10978] Failing at address: 0x28
</span><br>
<span class="quotelev1">&gt; [laurel:10979] [ 0] /lib/libpthread.so.0 [0x6321a80]
</span><br>
<span class="quotelev1">&gt; [laurel:10979] [ 1] /home/pastix/pelegrin/openmpi/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; [0x8f0d85a]
</span><br>
<span class="quotelev1">&gt; [laurel:10979] [ 2] /home/pastix/pelegrin/openmpi/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; [0x8f0d813]
</span><br>
<span class="quotelev1">&gt; [laurel:10979] [ 3] /home/pastix/pelegrin/openmpi/lib/libmpi.so.0 [0x55154db]
</span><br>
<span class="quotelev1">&gt; [laurel:10979] [ 4] /home/pastix/pelegrin/openmpi/lib/libmpi.so.0 [0x5515b06]
</span><br>
<span class="quotelev1">&gt; [laurel:10979] [ 5]
</span><br>
<span class="quotelev1">&gt; /home/pastix/pelegrin/openmpi/lib/libmpi.so.0(PMPI_Waitall+0x15d) [0x556ea01]
</span><br>
<span class="quotelev1">&gt; [laurel:10979] [ 6] ../bin/dgord(_SCOTCHdgraphCoarsen+0x13ce) [0x41fc2e]
</span><br>
<span class="quotelev1">&gt; [laurel:10979] [ 7] ../bin/dgord [0x415b35]
</span><br>
<span class="quotelev1">&gt; [laurel:10979] [ 8] ../bin/dgord(_SCOTCHvdgraphSeparateMl+0x27) [0x415d97]
</span><br>
<span class="quotelev1">&gt; [laurel:10979] [ 9] ../bin/dgord(_SCOTCHvdgraphSeparateSt+0x5a) [0x40ec4a]
</span><br>
<span class="quotelev1">&gt; [laurel:10978] [ 0] /lib/libpthread.so.0 [0x6321a80]
</span><br>
<span class="quotelev1">&gt; [laurel:10979] [10] ../bin/dgord(_SCOTCHhdgraphOrderNd+0xe3) [0x412f53]
</span><br>
<span class="quotelev1">&gt; [laurel:10979] [11] ../bin/dgord(_SCOTCHhdgraphOrderSt+0x67) [0x40eb27]
</span><br>
<span class="quotelev1">&gt; [laurel:10978] [ 1] /home/pastix/pelegrin/openmpi/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; [0x8f0d85a]
</span><br>
<span class="quotelev1">&gt; [laurel:10979] [12] ../bin/dgord(SCOTCH_dgraphOrderComputeList+0xeb) [0x40734b]
</span><br>
<span class="quotelev1">&gt; [laurel:10979] [13] ../bin/dgord(main+0x3ec) [0x406b7c]
</span><br>
<span class="quotelev1">&gt; [laurel:10979] [14] /lib/libc.so.6(__libc_start_main+0xe6) [0x654d1a6]
</span><br>
<span class="quotelev1">&gt; [laurel:10979] [15] ../bin/dgord [0x406669]
</span><br>
<span class="quotelev1">&gt; [laurel:10978] [ 2] /home/pastix/pelegrin/openmpi/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; [0x8f0d813]
</span><br>
<span class="quotelev1">&gt; [laurel:10978] [ 3] /home/pastix/pelegrin/openmpi/lib/libmpi.so.0 [0x55154db]
</span><br>
<span class="quotelev1">&gt; [laurel:10978] [ 4] /home/pastix/pelegrin/openmpi/lib/libmpi.so.0 [0x5515b06]
</span><br>
<span class="quotelev1">&gt; [laurel:10978] [ 5]
</span><br>
<span class="quotelev1">&gt; /home/pastix/pelegrin/openmpi/lib/libmpi.so.0(PMPI_Waitall+0x15d) [0x556ea01]
</span><br>
<span class="quotelev1">&gt; [laurel:10978] [ 6] ../bin/dgord(_SCOTCHdgraphCoarsen+0x13ce) [0x41fc2e]
</span><br>
<span class="quotelev1">&gt; [laurel:10978] [ 7] ../bin/dgord [0x415b35]
</span><br>
<span class="quotelev1">&gt; [laurel:10978] [ 8] ../bin/dgord(_SCOTCHvdgraphSeparateMl+0x27) [0x415d97]
</span><br>
<span class="quotelev1">&gt; [laurel:10978] [ 9] ../bin/dgord(_SCOTCHvdgraphSeparateSt+0x5a) [0x40ec4a]
</span><br>
<span class="quotelev1">&gt; [laurel:10979] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [laurel:10978] [10] ../bin/dgord(_SCOTCHhdgraphOrderNd+0xe3) [0x412f53]
</span><br>
<span class="quotelev1">&gt; [laurel:10978] [11] ../bin/dgord(_SCOTCHhdgraphOrderSt+0x67) [0x40eb27]
</span><br>
<span class="quotelev1">&gt; [laurel:10978] [12] ../bin/dgord(SCOTCH_dgraphOrderComputeList+0xeb) [0x40734b]
</span><br>
<span class="quotelev1">&gt; [laurel:10978] [13] ../bin/dgord(main+0x3ec) [0x406b7c]
</span><br>
<span class="quotelev1">&gt; [laurel:10978] [14] /lib/libc.so.6(__libc_start_main+0xe6) [0x654d1a6]
</span><br>
<span class="quotelev1">&gt; [laurel:10978] [15] ../bin/dgord [0x406669]
</span><br>
<span class="quotelev1">&gt; ==10979== [laurel:10978] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==10979== Process terminating with default action of signal 11 (SIGSEGV)
</span><br>
<span class="quotelev1">&gt; ==10979==  Access not within mapped region at address 0x29
</span><br>
<span class="quotelev1">&gt; ==10979==    at 0x8F0D85A: memchecker_call (memchecker.h:94)
</span><br>
<span class="quotelev1">&gt; ==10978==
</span><br>
<span class="quotelev1">&gt; ==10978== Process terminating with default action of signal 11 (SIGSEGV)
</span><br>
<span class="quotelev1">&gt; ==10978==  Access not within mapped region at address 0x29
</span><br>
<span class="quotelev1">&gt; ==10978==    at 0x8F0D85A: memchecker_call (memchecker.h:94)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x8F0D812: mca_pml_ob1_send_request_free (pml_ob1_sendreq.c:107)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x55154DA: ompi_request_free (request.h:354)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x5515B05: ompi_request_default_wait_all (req_wait.c:344)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x556EA00: PMPI_Waitall (pwaitall.c:68)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x41FC2D: _SCOTCHdgraphCoarsen (dgraph_coarsen.c:711)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x415B34: vdgraphSeparateMl2 (vdgraph_separate_ml.c:99)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x415D96: _SCOTCHvdgraphSeparateMl (vdgraph_separate_ml.c:660)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x40EC49: _SCOTCHvdgraphSeparateSt (vdgraph_separate_st.c:327)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x412F52: _SCOTCHhdgraphOrderNd (hdgraph_order_nd.c:294)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x40EB26: _SCOTCHhdgraphOrderSt (hdgraph_order_st.c:216)
</span><br>
<span class="quotelev1">&gt; ==10978==    by 0x40734A: SCOTCH_dgraphOrderComputeList
</span><br>
<span class="quotelev1">&gt; (library_dgraph_order.c:220)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x8F0D812: mca_pml_ob1_send_request_free (pml_ob1_sendreq.c:107)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x55154DA: ompi_request_free (request.h:354)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x5515B05: ompi_request_default_wait_all (req_wait.c:344)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x556EA00: PMPI_Waitall (pwaitall.c:68)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x41FC2D: _SCOTCHdgraphCoarsen (dgraph_coarsen.c:711)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x415B34: vdgraphSeparateMl2 (vdgraph_separate_ml.c:99)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x415D96: _SCOTCHvdgraphSeparateMl (vdgraph_separate_ml.c:660)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x40EC49: _SCOTCHvdgraphSeparateSt (vdgraph_separate_st.c:327)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x412F52: _SCOTCHhdgraphOrderNd (hdgraph_order_nd.c:294)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x40EB26: _SCOTCHhdgraphOrderSt (hdgraph_order_st.c:216)
</span><br>
<span class="quotelev1">&gt; ==10979==    by 0x40734A: SCOTCH_dgraphOrderComputeList
</span><br>
<span class="quotelev1">&gt; (library_dgraph_order.c:220)
</span><br>
<span class="quotelev1">&gt; ==10979==
</span><br>
<span class="quotelev1">&gt; ==10979== ERROR SUMMARY: 14 errors from 9 contexts (suppressed: 264 from 3)
</span><br>
<span class="quotelev1">&gt; ==10979== malloc/free: in use at exit: 4,626,295 bytes in 2,614 blocks.==10978==
</span><br>
<span class="quotelev1">&gt; ==10978== ERROR SUMMARY: 13 errors from 8 contexts (suppressed: 264 from 3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==10979== malloc/free: 9,296 allocs, 6,682 frees, 11,121,335 bytes allocated.
</span><br>
<span class="quotelev1">&gt; ==10979== For counts of detected errors, rerun with: -v==10978== malloc/free:
</span><br>
<span class="quotelev1">&gt; in use at exit: 4,671,068 bytes in 2,627 blocks.
</span><br>
<span class="quotelev1">&gt; ==10978== malloc/free: 9,315 allocs, 6,688 frees, 13,108,494 bytes allocated.
</span><br>
<span class="quotelev1">&gt; ==10978== For counts of detected errors, rerun with: -v
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ====10979== searching for pointers to 2,614 not-freed blocks.
</span><br>
<span class="quotelev1">&gt; 10978== searching for pointers to 2,627 not-freed blocks.
</span><br>
<span class="quotelev1">&gt; ==10978== checked 138,090,848 bytes.
</span><br>
<span class="quotelev1">&gt; ==10978== ==10979== checked 138,047,136 bytes.
</span><br>
<span class="quotelev1">&gt; ==10979==
</span><br>
<span class="quotelev1">&gt; ==10979== LEAK SUMMARY:
</span><br>
<span class="quotelev1">&gt; ==10979==    definitely lost: 2,049 bytes in 25 blocks.
</span><br>
<span class="quotelev1">&gt; ==10979==      possibly lost: 2,405,098 bytes in 60 blocks.
</span><br>
<span class="quotelev1">&gt; ==10979==    still reachable: 2,219,148 bytes in 2,529 blocks.
</span><br>
<span class="quotelev1">&gt; ==10979==         suppressed: 0 bytes in 0 blocks.
</span><br>
<span class="quotelev1">&gt; ==10979== Rerun with --leak-check=full to see details of leaked memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==10978== LEAK SUMMARY:
</span><br>
<span class="quotelev1">&gt; ==10978==    definitely lost: 2,125 bytes in 27 blocks.
</span><br>
<span class="quotelev1">&gt; ==10978==      possibly lost: 2,445,353 bytes in 63 blocks.
</span><br>
<span class="quotelev1">&gt; ==10978==    still reachable: 2,223,590 bytes in 2,537 blocks.
</span><br>
<span class="quotelev1">&gt; ==10978==         suppressed: 0 bytes in 0 blocks.
</span><br>
<span class="quotelev1">&gt; ==10978== Rerun with --leak-check=full to see details of leaked memory.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 10979 on node laurel exited on
</span><br>
<span class="quotelev1">&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to report the following issues :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1)- The &quot;Conditional jump or move depends on uninitialised value(s)&quot;
</span><br>
<span class="quotelev1">&gt;     messages are quite puzzling. Do they correspond to real problems
</span><br>
<span class="quotelev1">&gt;     in OpenMPI or should they just be ignored ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2)- The MPI_Waitall call which causes the problem spans across a set
</span><br>
<span class="quotelev1">&gt;     of former receive requests already set to MPI_REQUEST_NULL, and
</span><br>
<span class="quotelev1">&gt;     to a set of matching (and hence matched) Isend requests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3)- Memchecker also complaints (I think wrongfully) in the case of a
</span><br>
<span class="quotelev1">&gt;     Bcast where the receivers have not pre-set all of their receive array.
</span><br>
<span class="quotelev1">&gt;     I guess in the memcheck process the sender side and the receiver
</span><br>
<span class="quotelev1">&gt;     sides should get different treatment, since only one data array is
</span><br>
<span class="quotelev1">&gt;     passed, which is either to be read or written depending on the root
</span><br>
<span class="quotelev1">&gt;     process number.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4)- It also complaints when two Isend's correspond to overlapping regions
</span><br>
<span class="quotelev1">&gt;     of the same memory area. It seems that the first Isend sets flags on
</span><br>
<span class="quotelev1">&gt;     the region as &quot;non-readable&quot;, while it should just be &quot;non-writeable&quot;,
</span><br>
<span class="quotelev1">&gt;     isn't it ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5)- Keep doing the good job ! Congrats.  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely yours,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 					f.p.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7341.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Previous message:</strong> <a href="7339.php">Stephen Wornom: "Re: [OMPI users] Hybrid program"</a>
<li><strong>In reply to:</strong> <a href="7338.php">Fran&#231;ois PELLEGRINI: "[OMPI users] Memchecker report on v1.3b2 (includes potential bug reports)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7344.php">François PELLEGRINI: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Reply:</strong> <a href="7344.php">François PELLEGRINI: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
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
