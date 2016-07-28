<?
$subject_val = "Re: [OMPI users] mpi_type_create_struct not working for large counts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 11:07:35 2015" -->
<!-- isoreceived="20150414150735" -->
<!-- sent="Tue, 14 Apr 2015 15:07:28 +0000" -->
<!-- isosent="20150414150728" -->
<!-- name="MOHR STEPHAN 239883" -->
<!-- email="STEPHAN.MOHR_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_type_create_struct not working for large counts" -->
<!-- id="FC64FEF6471E804DA9CA2F6DBDCFD62B014C6625_at_EXDAG0-B2.intra.cea.fr" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150414144417.GA21644_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_type_create_struct not working for large counts<br>
<strong>From:</strong> MOHR STEPHAN 239883 (<em>STEPHAN.MOHR_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-14 11:07:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26721.php">George Bosilca: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>Previous message:</strong> <a href="26719.php">Nathan Hjelm: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>In reply to:</strong> <a href="26719.php">Nathan Hjelm: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26721.php">George Bosilca: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>Reply:</strong> <a href="26721.php">George Bosilca: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nathan,

I tried with send/recv, but the outcome is the same. It works for small counts (e.g. n=100), but hangs for larger ones (e.g. n=1000).
I attached my modified program.

Thanks,
Stephan
________________________________________
From: users [users-bounces_at_[hidden]] on behalf of Nathan Hjelm [hjelmn_at_[hidden]]
Sent: Tuesday, April 14, 2015 16:44
To: Open MPI Users
Subject: Re: [OMPI users] mpi_type_create_struct not working for large counts

Can you try using send/recv with the datatype in question? It could be a
problem with either the one-sided code or the datatype code. Could you
also give master a try?

-Nathan

On Tue, Apr 14, 2015 at 06:43:31AM +0000, MOHR STEPHAN 239883 wrote:
&gt;    Hi Howard,
&gt;
&gt;    I tried with 1.8.5rc1, but it doesn't work either.
&gt;
&gt;    The output of ompi_info is attached.
&gt;
&gt;    Thanks,
&gt;    Stephan
&gt;
&gt;      ----------------------------------------------------------------------
&gt;
&gt;    From: users [users-bounces_at_[hidden]] on behalf of Howard Pritchard
&gt;    [hppritcha_at_[hidden]]
&gt;    Sent: Monday, April 13, 2015 19:41
&gt;    To: Open MPI Users
&gt;    Subject: Re: [OMPI users] mpi_type_create_struct not working for large
&gt;    counts
&gt;    HI Stephan,
&gt;    For starters, would you mind sending the output you get when you run the
&gt;    ompi_info command?
&gt;    If you could, it would be great if you could try running the test against
&gt;    the latest 1.8.5rc1?
&gt;    The test appears to work without problem using mpich, at least with 4
&gt;    ranks.
&gt;    Thanks,
&gt;    Howard
&gt;    2015-04-13 10:40 GMT-06:00 MOHR STEPHAN 239883 &lt;STEPHAN.MOHR_at_[hidden]&gt;:
&gt;
&gt;      Hi there,
&gt;
&gt;      I've got an issue when using a derived data type created by
&gt;      mpi_type_create_struct in a one-sided communication.
&gt;
&gt;      The problem can be reproduced using the small standalone program which I
&gt;      attached. It just creates a type which should be equivalent to n
&gt;      contiguous elements. This type is then used in a mpi_get. With a value
&gt;      n=100 it works fine, but with n=1000 it either hangs (version 1.8.1) or
&gt;      crashes (version 1.6.5).
&gt;
&gt;      Any help is appreciated.
&gt;
&gt;      Best regards,
&gt;      Stephan
&gt;      _______________________________________________
&gt;      users mailing list
&gt;      users_at_[hidden]
&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;      Link to this post:
&gt;      <a href="http://www.open-mpi.org/community/lists/users/2015/04/26695.php">http://www.open-mpi.org/community/lists/users/2015/04/26695.php</a>

&gt;                  Package: Open MPI stephanm_at_girofle Distribution
&gt;                 Open MPI: 1.8.5rc1
&gt;   Open MPI repo revision: v1.8.4-184-g481d751
&gt;    Open MPI release date: Apr 05, 2015
&gt;                 Open RTE: 1.8.5rc1
&gt;   Open RTE repo revision: v1.8.4-184-g481d751
&gt;    Open RTE release date: Apr 05, 2015
&gt;                     OPAL: 1.8.5rc1
&gt;       OPAL repo revision: v1.8.4-184-g481d751
&gt;        OPAL release date: Apr 05, 2015
&gt;                  MPI API: 3.0
&gt;             Ident string: 1.8.5rc1
&gt;                   Prefix: /local/stephanm/openmpi-1.8.5rc1_intel
&gt;  Configured architecture: x86_64-unknown-linux-gnu
&gt;           Configure host: girofle
&gt;            Configured by: stephanm
&gt;            Configured on: Tue Apr 14 07:32:10 CEST 2015
&gt;           Configure host: girofle
&gt;                 Built by: stephanm
&gt;                 Built on: Tue Apr 14 08:05:43 CEST 2015
&gt;               Built host: girofle
&gt;               C bindings: yes
&gt;             C++ bindings: yes
&gt;              Fort mpif.h: yes (all)
&gt;             Fort use mpi: yes (full: ignore TKR)
&gt;        Fort use mpi size: deprecated-ompi-info-value
&gt;         Fort use mpi_f08: yes
&gt;  Fort mpi_f08 compliance: The mpi_f08 module is available, but due to limitations in the ifort compiler, does not support the following: array subsections, direct passthru (where possible) to underlying Open MPI's C functionality
&gt;   Fort mpi_f08 subarrays: no
&gt;            Java bindings: no
&gt;   Wrapper compiler rpath: runpath
&gt;               C compiler: icc
&gt;      C compiler absolute: /local/stephanm/composer_xe_2013_sp1.0.080/bin/intel64/icc
&gt;   C compiler family name: INTEL
&gt;       C compiler version: 1400.20130728
&gt;             C++ compiler: icpc
&gt;    C++ compiler absolute: /local/stephanm/composer_xe_2013_sp1.0.080/bin/intel64/icpc
&gt;            Fort compiler: ifort
&gt;        Fort compiler abs: /local/stephanm/composer_xe_2013_sp1.0.080/bin/intel64/ifort
&gt;          Fort ignore TKR: yes (!DEC$ ATTRIBUTES NO_ARG_CHECK ::)
&gt;    Fort 08 assumed shape: no
&gt;       Fort optional args: yes
&gt;           Fort INTERFACE: yes
&gt;     Fort ISO_FORTRAN_ENV: yes
&gt;        Fort STORAGE_SIZE: yes
&gt;       Fort BIND(C) (all): yes
&gt;       Fort ISO_C_BINDING: yes
&gt;  Fort SUBROUTINE BIND(C): yes
&gt;        Fort TYPE,BIND(C): yes
&gt;  Fort T,BIND(C,name=&quot;a&quot;): yes
&gt;             Fort PRIVATE: yes
&gt;           Fort PROTECTED: yes
&gt;            Fort ABSTRACT: yes
&gt;        Fort ASYNCHRONOUS: yes
&gt;           Fort PROCEDURE: yes
&gt;            Fort C_FUNLOC: yes
&gt;  Fort f08 using wrappers: yes
&gt;          Fort MPI_SIZEOF: yes
&gt;              C profiling: yes
&gt;            C++ profiling: yes
&gt;    Fort mpif.h profiling: yes
&gt;   Fort use mpi profiling: yes
&gt;    Fort use mpi_f08 prof: yes
&gt;           C++ exceptions: no
&gt;           Thread support: posix (MPI_THREAD_MULTIPLE: no, OPAL support: yes, OMPI progress: no, ORTE progress: yes, Event lib: yes)
&gt;            Sparse Groups: no
&gt;   Internal debug support: no
&gt;   MPI interface warnings: yes
&gt;      MPI parameter check: runtime
&gt; Memory profiling support: no
&gt; Memory debugging support: no
&gt;          libltdl support: yes
&gt;    Heterogeneous support: no
&gt;  mpirun default --prefix: no
&gt;          MPI I/O support: yes
&gt;        MPI_WTIME support: gettimeofday
&gt;      Symbol vis. support: yes
&gt;    Host topology support: yes
&gt;           MPI extensions:
&gt;    FT Checkpoint support: no (checkpoint thread: no)
&gt;    C/R Enabled Debugging: no
&gt;      VampirTrace support: yes
&gt;   MPI_MAX_PROCESSOR_NAME: 256
&gt;     MPI_MAX_ERROR_STRING: 256
&gt;      MPI_MAX_OBJECT_NAME: 64
&gt;         MPI_MAX_INFO_KEY: 36
&gt;         MPI_MAX_INFO_VAL: 256
&gt;        MPI_MAX_PORT_NAME: 1024
&gt;   MPI_MAX_DATAREP_STRING: 128
&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.8.5)
&gt;             MCA compress: bzip (MCA v2.0, API v2.0, Component v1.8.5)
&gt;             MCA compress: gzip (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA crs: none (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                   MCA db: hash (MCA v2.0, API v1.0, Component v1.8.5)
&gt;                   MCA db: print (MCA v2.0, API v1.0, Component v1.8.5)
&gt;                MCA event: libevent2021 (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA hwloc: hwloc191 (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                   MCA if: posix_ipv4 (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                   MCA if: linux_ipv6 (MCA v2.0, API v2.0, Component v1.8.5)
&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.8.5)
&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.8.5)
&gt;               MCA memory: linux (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA pstat: linux (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA sec: basic (MCA v2.0, API v1.0, Component v1.8.5)
&gt;                MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA shmem: posix (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA dfs: app (MCA v2.0, API v1.0, Component v1.8.5)
&gt;                  MCA dfs: orted (MCA v2.0, API v1.0, Component v1.8.5)
&gt;                  MCA dfs: test (MCA v2.0, API v1.0, Component v1.8.5)
&gt;               MCA errmgr: default_app (MCA v2.0, API v3.0, Component v1.8.5)
&gt;               MCA errmgr: default_hnp (MCA v2.0, API v3.0, Component v1.8.5)
&gt;               MCA errmgr: default_orted (MCA v2.0, API v3.0, Component v1.8.5)
&gt;               MCA errmgr: default_tool (MCA v2.0, API v3.0, Component v1.8.5)
&gt;                  MCA ess: env (MCA v2.0, API v3.0, Component v1.8.5)
&gt;                  MCA ess: hnp (MCA v2.0, API v3.0, Component v1.8.5)
&gt;                  MCA ess: singleton (MCA v2.0, API v3.0, Component v1.8.5)
&gt;                  MCA ess: slurm (MCA v2.0, API v3.0, Component v1.8.5)
&gt;                  MCA ess: tool (MCA v2.0, API v3.0, Component v1.8.5)
&gt;                MCA filem: raw (MCA v2.0, API v2.0, Component v1.8.5)
&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA iof: mr_hnp (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA iof: mr_orted (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA plm: isolated (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA ras: simulator (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA rmaps: lama (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA rmaps: mindist (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA rmaps: ppr (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA rmaps: staged (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.8.5)
&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.8.5)
&gt;               MCA routed: debruijn (MCA v2.0, API v2.0, Component v1.8.5)
&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component v1.8.5)
&gt;               MCA routed: radix (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA state: app (MCA v2.0, API v1.0, Component v1.8.5)
&gt;                MCA state: hnp (MCA v2.0, API v1.0, Component v1.8.5)
&gt;                MCA state: novm (MCA v2.0, API v1.0, Component v1.8.5)
&gt;                MCA state: orted (MCA v2.0, API v1.0, Component v1.8.5)
&gt;                MCA state: staged_hnp (MCA v2.0, API v1.0, Component v1.8.5)
&gt;                MCA state: staged_orted (MCA v2.0, API v1.0, Component v1.8.5)
&gt;                MCA state: tool (MCA v2.0, API v1.0, Component v1.8.5)
&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.8.5)
&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                 MCA bcol: basesmuma (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                 MCA bcol: ptpcoll (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA btl: vader (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                 MCA coll: libnbc (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                 MCA coll: ml (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                 MCA fbtl: posix (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA fcoll: dynamic (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA fcoll: individual (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA fcoll: static (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA fcoll: two_phase (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA fcoll: ylib (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                   MCA fs: ufs (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                   MCA io: ompio (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                   MCA io: romio (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA mpool: grdma (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA osc: rdma (MCA v2.0, API v3.0, Component v1.8.5)
&gt;                  MCA osc: sm (MCA v2.0, API v3.0, Component v1.8.5)
&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA pml: bfo (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA pml: cm (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.8.5)
&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.8.5)
&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                  MCA rte: orte (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                 MCA sbgp: basesmsocket (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                 MCA sbgp: basesmuma (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                 MCA sbgp: p2p (MCA v2.0, API v2.0, Component v1.8.5)
&gt;             MCA sharedfp: individual (MCA v2.0, API v2.0, Component v1.8.5)
&gt;             MCA sharedfp: lockedfile (MCA v2.0, API v2.0, Component v1.8.5)
&gt;             MCA sharedfp: sm (MCA v2.0, API v2.0, Component v1.8.5)
&gt;                 MCA topo: basic (MCA v2.0, API v2.1, Component v1.8.5)
&gt;            MCA vprotocol: pessimist (MCA v2.0, API v2.0, Component v1.8.5)

&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26713.php">http://www.open-mpi.org/community/lists/users/2015/04/26713.php</a>


<br>

<br><hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26720/test_mpi_sendrecv.f90">test_mpi_sendrecv.f90</a>
</ul>
<!-- attachment="test_mpi_sendrecv.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26721.php">George Bosilca: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>Previous message:</strong> <a href="26719.php">Nathan Hjelm: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>In reply to:</strong> <a href="26719.php">Nathan Hjelm: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26721.php">George Bosilca: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>Reply:</strong> <a href="26721.php">George Bosilca: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
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
