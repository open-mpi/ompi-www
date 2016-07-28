<?
$subject_val = "Re: [OMPI users] Problem moving from 1.4 to 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 30 14:13:40 2014" -->
<!-- isoreceived="20140630181340" -->
<!-- sent="Mon, 30 Jun 2014 11:13:28 -0700" -->
<!-- isosent="20140630181328" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem moving from 1.4 to 1.6" -->
<!-- id="4B0FA059-7A92-4955-8208-B8CD9F4962ED_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF52F9DAFB.F9826697-ON85257D04.006C9AE9-85257D07.00637781_at_notes.aero.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem moving from 1.4 to 1.6<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-30 14:13:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24733.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Previous message:</strong> <a href="24731.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>In reply to:</strong> <a href="24731.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24733.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Reply:</strong> <a href="24733.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, this was built with a bunch of stuff you don't want. Are you trying to just run with TCP and not Infiniband? If so, then you want
<br>
<p>mpirun -mca btl tcp,sm,self ....
<br>
<p>and the problem should go away.
<br>
<p><p>On Jun 30, 2014, at 11:06 AM, Jeffrey A Cummings &lt;Jeffrey.A.Cummings_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Output from ompi_info: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  Package: Open MPI root_at_centos-6-5-x86-64-1.localdomain Distribution
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.6.2
</span><br>
<span class="quotelev1">&gt;   Open MPI SVN revision: r27344
</span><br>
<span class="quotelev1">&gt;   Open MPI release date: Sep 18, 2012
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.6.2
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: r27344
</span><br>
<span class="quotelev1">&gt;   Open RTE release date: Sep 18, 2012
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.6.2
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: r27344
</span><br>
<span class="quotelev1">&gt;       OPAL release date: Sep 18, 2012
</span><br>
<span class="quotelev1">&gt;                 MPI API: 2.1
</span><br>
<span class="quotelev1">&gt;            Ident string: 1.6.2
</span><br>
<span class="quotelev1">&gt;                  Prefix: /opt/openmpi
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;          Configure host: centos-6-5-x86-64-1.localdomain
</span><br>
<span class="quotelev1">&gt;           Configured by: root
</span><br>
<span class="quotelev1">&gt;           Configured on: Mon Apr 14 02:23:27 PDT 2014
</span><br>
<span class="quotelev1">&gt;          Configure host: centos-6-5-x86-64-1.localdomain
</span><br>
<span class="quotelev1">&gt;                Built by: root
</span><br>
<span class="quotelev1">&gt;                Built on: Mon Apr 14 02:33:37 PDT 2014
</span><br>
<span class="quotelev1">&gt;              Built host: centos-6-5-x86-64-1.localdomain
</span><br>
<span class="quotelev1">&gt;              C bindings: yes
</span><br>
<span class="quotelev1">&gt;            C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;      Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;              C compiler: gcc
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;  C compiler family name: GNU
</span><br>
<span class="quotelev1">&gt;      C compiler version: 4.4.7
</span><br>
<span class="quotelev1">&gt;            C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;   C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;      Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;      Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;             C profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;          C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;          Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
</span><br>
<span class="quotelev1">&gt;           Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;  Internal debug support: no
</span><br>
<span class="quotelev1">&gt;  MPI interface warnings: no
</span><br>
<span class="quotelev1">&gt;     MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;         libltdl support: yes
</span><br>
<span class="quotelev1">&gt;   Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;         MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;       MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt;     Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt;   Host topology support: yes
</span><br>
<span class="quotelev1">&gt;          MPI extensions: affinity example
</span><br>
<span class="quotelev1">&gt;   FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;     VampirTrace support: yes
</span><br>
<span class="quotelev1">&gt;  MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev1">&gt;    MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev1">&gt;     MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev1">&gt;        MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev1">&gt;        MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev1">&gt;       MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev1">&gt;  MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev1">&gt;           MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;              MCA memory: linux (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;           MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;               MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;               MCA carto: file (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;               MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;               MCA shmem: posix (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;               MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;               MCA timer: linux (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;             MCA sysinfo: linux (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;               MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA dpm: orte (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;              MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: basic (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: basic (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: inter (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: self (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sm (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sync (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: tuned (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                  MCA io: romio (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: fake (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: sm (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: bfo (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: csum (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: v (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA bml: r2 (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;              MCA rcache: vma (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: self (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: ofud (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: openib (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: sm (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: tcp (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: udapl (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                MCA topo: unity (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: rdma (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: hnp (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: orted (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: tool (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: tcp (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                MCA odls: default (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: cm (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: slurm (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: oob (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;              MCA routed: binomial (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;              MCA routed: cm (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;              MCA routed: direct (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;              MCA routed: linear (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;              MCA routed: radix (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;              MCA routed: slave (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: rsh (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: slurm (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;               MCA filem: rsh (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: env (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: hnp (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: singleton (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: slave (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: slurm (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: tool (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;            MCA notifier: command (MCA v2.0, API v1.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt;            MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeffrey A. Cummings
</span><br>
<span class="quotelev1">&gt; Engineering Specialist
</span><br>
<span class="quotelev1">&gt; Performance Modeling and Analysis Department
</span><br>
<span class="quotelev1">&gt; Systems Analysis and Simulation Subdivision
</span><br>
<span class="quotelev1">&gt; Systems Engineering Division
</span><br>
<span class="quotelev1">&gt; Engineering and Technology Group
</span><br>
<span class="quotelev1">&gt; The Aerospace Corporation
</span><br>
<span class="quotelev1">&gt; 571-307-4220
</span><br>
<span class="quotelev1">&gt; jeffrey.a.cummings_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From:        Ralph Castain &lt;rhc_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; To:        Open MPI Users &lt;users_at_[hidden]&gt;, 
</span><br>
<span class="quotelev1">&gt; Date:        06/27/2014 03:42 PM 
</span><br>
<span class="quotelev1">&gt; Subject:        Re: [OMPI users] Problem moving from 1.4 to 1.6 
</span><br>
<span class="quotelev1">&gt; Sent by:        &quot;users&quot; &lt;users-bounces_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me steer you on a different course. Can you run &quot;ompi_info&quot; and paste the output here? It looks to me like someone installed a version that includes uDAPL support, so you may have to disable some additional things to get it to run. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 27, 2014, at 9:53 AM, Jeffrey A Cummings &lt;Jeffrey.A.Cummings_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have recently upgraded our cluster to a version of Linux which comes with openMPI version 1.6.2. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An application which ran previously (using some version of 1.4) now errors out with the following messages: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        librdmacm: Fatal: no RDMA devices found 
</span><br>
<span class="quotelev1">&gt;        librdmacm: Fatal: no RDMA devices found 
</span><br>
<span class="quotelev1">&gt;        librdmacm: Fatal: no RDMA devices found 
</span><br>
<span class="quotelev1">&gt;        -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;        WARNING: Failed to open &quot;OpenIB-cma&quot; [DAT_INTERNAL_ERROR:]. 
</span><br>
<span class="quotelev1">&gt;        This may be a real error or it may be an invalid entry in the uDAPL 
</span><br>
<span class="quotelev1">&gt;        Registry which is contained in the dat.conf file. Contact your local 
</span><br>
<span class="quotelev1">&gt;        System Administrator to confirm the availability of the interfaces in 
</span><br>
<span class="quotelev1">&gt;        the dat.conf file. 
</span><br>
<span class="quotelev1">&gt;        -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;        [tupile:25363] 2 more processes have sent help message help-mpi-btl-udapl.txt / dat_ia_open fail 
</span><br>
<span class="quotelev1">&gt;        [tupile:25363] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The mpirun command line contains the argument '--mca btl ^openib', which I thought told mpi to not look for the ib interface. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone suggest what the problem might be?  Did the relevant syntax change between versions 1.4 and 1.6? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeffrey A. Cummings
</span><br>
<span class="quotelev1">&gt; Engineering Specialist
</span><br>
<span class="quotelev1">&gt; Performance Modeling and Analysis Department
</span><br>
<span class="quotelev1">&gt; Systems Analysis and Simulation Subdivision
</span><br>
<span class="quotelev1">&gt; Systems Engineering Division
</span><br>
<span class="quotelev1">&gt; Engineering and Technology Group
</span><br>
<span class="quotelev1">&gt; The Aerospace Corporation
</span><br>
<span class="quotelev1">&gt; 571-307-4220
</span><br>
<span class="quotelev1">&gt; jeffrey.a.cummings_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24721.php">http://www.open-mpi.org/community/lists/users/2014/06/24721.php</a> 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24727.php">http://www.open-mpi.org/community/lists/users/2014/06/24727.php</a> 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24731.php">http://www.open-mpi.org/community/lists/users/2014/06/24731.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24732/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24733.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Previous message:</strong> <a href="24731.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>In reply to:</strong> <a href="24731.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24733.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Reply:</strong> <a href="24733.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
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
