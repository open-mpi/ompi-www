<?
$subject_val = "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 20 12:31:43 2014" -->
<!-- isoreceived="20140720163143" -->
<!-- sent="Sun, 20 Jul 2014 09:30:37 -0700" -->
<!-- isosent="20140720163037" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun 1.5.4  problems when request &amp;gt; 28 slots" -->
<!-- id="5488D7CE-80D8-481E-A3BC-B33DAF2050D8_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293E243B2_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-20 12:30:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24827.php">Tobias Kloeffel: "Re: [OMPI users] Help with multirail configuration"</a>
<li><strong>Previous message:</strong> <a href="24825.php">Ralph Castain: "Re: [OMPI users] Help with multirail configuration"</a>
<li><strong>In reply to:</strong> <a href="24819.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24832.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<li><strong>Reply:</strong> <a href="24832.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm unaware of any CentOS-OMPI bug, and I've been using CentOS throughout the 6.x series running OMPI 1.6.x and above.
<br>
<p>I can't speak to the older versions of CentOS and/or the older versions of OMPI.
<br>
<p>On Jul 19, 2014, at 8:14 PM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes there is a second HPC Sun Grid Engine cluster on which I've run
</span><br>
<span class="quotelev1">&gt; this openMPI test code dozens of times on upwards of 400 slots
</span><br>
<span class="quotelev1">&gt; through SGE using qsub and qrsh, but this was using a much
</span><br>
<span class="quotelev1">&gt; older version of openMPI (1.3.3 I believe). On that particular cluster the
</span><br>
<span class="quotelev1">&gt; open files hard and soft limits were an issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have noticed that there has been a new (as of July 2014) CentOS openMPI bug that
</span><br>
<span class="quotelev1">&gt; occurs when CentOS is upgraded from 6.2 to 6.3. I'm not sure if that
</span><br>
<span class="quotelev1">&gt; bug applies to this situation though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This particular problem occurs whether or not I submit jobs through SGE (via qrsh
</span><br>
<span class="quotelev1">&gt; or qsub) or outside of SGE which leads me to believe it is an openMPI and/or CentOS
</span><br>
<span class="quotelev1">&gt; issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Bill Lane
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, July 19, 2014 3:21 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not for this test case size. You should be just fine with the default values.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I understand you correctly, you've run this app at scale before on another cluster without problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 19, 2014, at 1:34 PM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It's hard to imagine it's the openMPI code because I've tested this code
</span><br>
<span class="quotelev2">&gt;&gt; extensively on another cluster with 400 nodes and never had any problems.
</span><br>
<span class="quotelev2">&gt;&gt; But I'll try using the hello_c example in any case. Is it still recommended to
</span><br>
<span class="quotelev2">&gt;&gt; raise the open files soft and hard limits to 4096? Or should even larger values
</span><br>
<span class="quotelev2">&gt;&gt; be necessary?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your help.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Bill Lane
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Saturday, July 19, 2014 8:07 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's a pretty old OMPI version, and we don't really support it any longer. However, I can provide some advice:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * have you tried running the simple &quot;hello_c&quot; example we provide? This would at least tell you if the problem is in your app, which is what I'd expect given your description
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * try using gdb (or pick your debugger) to look at the corefile and see where it is failing
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'd also suggest updating OMPI to the 1.6.5 or 1.8.1 versions, but I doubt that's the issue behind this problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 19, 2014, at 1:05 AM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm getting consistent errors of the form:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpirun noticed that process rank 3 with PID 802 on node csclprd3-0-8 exited on signal 11 (Segmentation fault).&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whenever I request more than 28 slots. These
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errors even occur when I run mpirun locally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on a compute node that has 32 slots (8 cores, 16 with hyperthreading).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I run less than 28 slots I have no problems whatsoever.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OS: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CentOS release 6.3 (Final)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openMPI information:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  Package: Open MPI mockbuild_at_[hidden] Distribution
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Open MPI: 1.5.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open MPI SVN revision: r25060
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open MPI release date: Aug 18, 2011
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Open RTE: 1.5.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open RTE SVN revision: r25060
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open RTE release date: Aug 18, 2011
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     OPAL: 1.5.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OPAL SVN revision: r25060
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OPAL release date: Aug 18, 2011
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Ident string: 1.5.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Prefix: /usr/lib64/openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Configure host: c6b8.bsys.dev.centos.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Configured by: mockbuild
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Configured on: Fri Jun 22 06:42:03 UTC 2012
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Configure host: c6b8.bsys.dev.centos.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Built by: mockbuild
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Built on: Fri Jun 22 06:46:48 UTC 2012
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Built host: c6b8.bsys.dev.centos.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               C compiler: gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   C compiler family name: GNU
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       C compiler version: 4.4.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             C++ compiler: g++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           C++ exceptions: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Sparse Groups: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI interface warnings: no
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
<span class="quotelev3">&gt;&gt;&gt;           MPI extensions: affinity example
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    FT Checkpoint support: no (checkpoint thread: no)
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
<span class="quotelev3">&gt;&gt;&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA memchecker: valgrind (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA memory: linux (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA carto: file (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: sync (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA mpool: fake (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pml: bfo (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pml: csum (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: ofud (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: cm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA routed: cm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA routed: linear (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA routed: radix (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA routed: slave (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA plm: rshd (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA filem: rsh (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ess: env (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ess: slave (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ess: slurm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ess: tool (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA notifier: command (MCA v2.0, API v1.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA notifier: smtp (MCA v2.0, API v1.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.5.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation. _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24815.php">http://www.open-mpi.org/community/lists/users/2014/07/24815.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation. _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24817.php">http://www.open-mpi.org/community/lists/users/2014/07/24817.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation. _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24819.php">http://www.open-mpi.org/community/lists/users/2014/07/24819.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24826/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24827.php">Tobias Kloeffel: "Re: [OMPI users] Help with multirail configuration"</a>
<li><strong>Previous message:</strong> <a href="24825.php">Ralph Castain: "Re: [OMPI users] Help with multirail configuration"</a>
<li><strong>In reply to:</strong> <a href="24819.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24832.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<li><strong>Reply:</strong> <a href="24832.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
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
