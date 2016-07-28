<?
$subject_val = "Re: [OMPI users] [omx-devel]  Open-mx issue with ompi 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 10 14:44:45 2012" -->
<!-- isoreceived="20120910184445" -->
<!-- sent="Mon, 10 Sep 2012 20:44:38 +0200" -->
<!-- isosent="20120910184438" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [omx-devel]  Open-mx issue with ompi 1.6.1" -->
<!-- id="504E3516.4010705_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="21ee055ee8832fb92d2430feb56f8536.squirrel_at_mail.eadline.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] [omx-devel]  Open-mx issue with ompi 1.6.1<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-10 14:44:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20181.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Previous message:</strong> <a href="20179.php">Douglas Eadline: "Re: [OMPI users] Open-mx issue with ompi 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="20179.php">Douglas Eadline: "Re: [OMPI users] Open-mx issue with ompi 1.6.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I replied a couple days ago (with OMPI users in CC) but got an error
<br>
last night:
<br>
<p>Action: failed
<br>
Status: 5.0.0 (permanent failure)
<br>
Diagnostic-Code: smtp; 5.4.7 - Delivery expired (message too old) 'timeout' (delivery attempts: 0)
<br>
<p><p>I resent the mail this morning, it looks like it wasn't delivered yet
<br>
either?
<br>
I'll try again with another SMTP.
<br>
<p>Brice
<br>
<p><p><p>Le 10/09/2012 20:37, Douglas Eadline a &#233;crit :
<br>
<span class="quotelev1">&gt; I got no response for this question. Is Open-MX
</span><br>
<span class="quotelev1">&gt; no longer supported in Open MPI? Or is there someplace else
</span><br>
<span class="quotelev1">&gt; I should submit this information? I also attached my ompi_info
</span><br>
<span class="quotelev1">&gt; and omx_info output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Doug
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I built open-mpi 1.6.1 using the open-mx libraries.
</span><br>
<span class="quotelev2">&gt;&gt; This worked previously and now I get the following
</span><br>
<span class="quotelev2">&gt;&gt; error. Here is my system:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; kernel:  2.6.32-279.5.1.el6.x86_64
</span><br>
<span class="quotelev2">&gt;&gt; open-mx: 1.5.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW, open-mx worked previously with open-mpi and the current
</span><br>
<span class="quotelev2">&gt;&gt; version works with mpich2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $  mpiexec -np 8 -machinefile machines cpi
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 on limulus
</span><br>
<span class="quotelev2">&gt;&gt; FatalError: Failed to lookup peer by addr, driver replied Bad file
</span><br>
<span class="quotelev2">&gt;&gt; descriptor
</span><br>
<span class="quotelev2">&gt;&gt; cpi: ../omx_misc.c:89: omx__ioctl_errno_to_return_checked: Assertion `0'
</span><br>
<span class="quotelev2">&gt;&gt; failed.
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [ 0] /lib64/libpthread.so.0() [0x3324e0f500]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x33246328a5]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [ 2] /lib64/libc.so.6(abort+0x175) [0x3324634085]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [ 3] /lib64/libc.so.6() [0x332462ba1e]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [ 4] /lib64/libc.so.6(__assert_perror_fail+0)
</span><br>
<span class="quotelev2">&gt;&gt; [0x332462bae0]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /usr/open-mx/lib/libopen-mx.so.0(omx__ioctl_errno_to_return_checked+0x197)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7fb587418b37]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /usr/open-mx/lib/libopen-mx.so.0(omx__peer_addr_to_index+0x55)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7fb58741a5d5]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [ 7] /usr/open-mx/lib/libopen-mx.so.0(+0xdc7a)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7fb587419c7a]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [ 8] /usr/open-mx/lib/libopen-mx.so.0(omx_connect+0x8c)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7fb58741a27c]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [ 9] /usr/open-mx/lib/libopen-mx.so.0(mx_connect+0x15)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7fb587425865]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [10]
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(mca_btl_mx_proc_connect+0x5e)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7fb5876fe40e]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [11]
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(mca_btl_mx_send+0x2d4)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7fb5876fbd94]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [12]
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(mca_pml_ob1_send_request_start_prepare+0xcb)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7fb58777d6fb]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [13]
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(mca_pml_ob1_isend+0x4cb)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7fb58777509b]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [14]
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(ompi_coll_tuned_bcast_intra_generic+0x37b)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7fb58770b55b]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [15]
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(ompi_coll_tuned_bcast_intra_binomial+0xd8)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7fb58770b8b8]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [16]
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(ompi_coll_tuned_bcast_intra_dec_fixed+0xcc)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7fb587702d8c]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [17]
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(mca_coll_sync_bcast+0x78)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7fb587712e88]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [18]
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(MPI_Bcast+0x130) [0x7fb5876ce1b0]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [19] cpi(main+0x10b) [0x400cc4]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [20] /lib64/libc.so.6(__libc_start_main+0xfd)
</span><br>
<span class="quotelev2">&gt;&gt; [0x332461ecdd]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] [21] cpi() [0x400ac9]
</span><br>
<span class="quotelev2">&gt;&gt; [limulus:04448] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Process 2 on limulus
</span><br>
<span class="quotelev2">&gt;&gt; Process 4 on limulus
</span><br>
<span class="quotelev2">&gt;&gt; Process 6 on limulus
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 on n0
</span><br>
<span class="quotelev2">&gt;&gt; Process 7 on n0
</span><br>
<span class="quotelev2">&gt;&gt; Process 3 on n0
</span><br>
<span class="quotelev2">&gt;&gt; Process 5 on n0
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec noticed that process rank 0 with PID 4448 on node limulus exited
</span><br>
<span class="quotelev2">&gt;&gt; on signal 6 (Aborted).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_limulus ~]# ompi_info
</span><br>
<span class="quotelev1">&gt;                  Package: Open MPI deadline_at_limulus Distribution
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.6.1
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r27106
</span><br>
<span class="quotelev1">&gt;    Open MPI release date: Aug 22, 2012
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.6.1
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r27106
</span><br>
<span class="quotelev1">&gt;    Open RTE release date: Aug 22, 2012
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.6.1
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r27106
</span><br>
<span class="quotelev1">&gt;        OPAL release date: Aug 22, 2012
</span><br>
<span class="quotelev1">&gt;                  MPI API: 2.1
</span><br>
<span class="quotelev1">&gt;             Ident string: 1.6.1
</span><br>
<span class="quotelev1">&gt;                   Prefix: /opt/mpi/openmpi-gnu4-1.6.1
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;           Configure host: limulus
</span><br>
<span class="quotelev1">&gt;            Configured by: deadline
</span><br>
<span class="quotelev1">&gt;            Configured on: Wed Sep  5 15:03:09 EDT 2012
</span><br>
<span class="quotelev1">&gt;           Configure host: limulus
</span><br>
<span class="quotelev1">&gt;                 Built by: deadline
</span><br>
<span class="quotelev1">&gt;                 Built on: Wed Sep  5 15:21:19 EDT 2012
</span><br>
<span class="quotelev1">&gt;               Built host: limulus
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
<span class="quotelev1">&gt;   C compiler family name: GNU
</span><br>
<span class="quotelev1">&gt;       C compiler version: 4.4.6
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs:
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
<span class="quotelev1">&gt;           Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
</span><br>
<span class="quotelev1">&gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;   MPI interface warnings: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
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
<span class="quotelev1">&gt;      Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt;    Host topology support: yes
</span><br>
<span class="quotelev1">&gt;           MPI extensions: affinity example
</span><br>
<span class="quotelev1">&gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;      VampirTrace support: yes
</span><br>
<span class="quotelev1">&gt;   MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev1">&gt;     MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev1">&gt;      MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev1">&gt;         MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev1">&gt;         MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev1">&gt;        MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev1">&gt;   MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;               MCA memory: linux (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                MCA carto: file (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                MCA shmem: posix (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;              MCA sysinfo: linux (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sync (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: fake (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: bfo (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: csum (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: mx (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: mx (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: cm (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;               MCA routed: cm (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;               MCA routed: linear (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;               MCA routed: radix (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;               MCA routed: slave (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                MCA filem: rsh (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: env (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: slave (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: slurm (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: tool (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;             MCA notifier: command (MCA v2.0, API v1.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;             MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_limulus ~]# /usr/open-mx/bin/omx_info
</span><br>
<span class="quotelev1">&gt; Open-MX version 1.5.2
</span><br>
<span class="quotelev1">&gt;  build: deadline_at_limulus:/raid1/home/deadline/rpms-sl6/BUILD/open-mx-1.5.2
</span><br>
<span class="quotelev1">&gt; Mon Sep 10 08:44:16 EDT 2012
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Found 1 boards (32 max) supporting 32 endpoints each:
</span><br>
<span class="quotelev1">&gt;  limulus:0 (board #0 name eth0 addr e0:69:95:35:d7:71)
</span><br>
<span class="quotelev1">&gt;    managed by driver 'e1000e'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Peer table is ready, mapper is 00:00:00:00:00:00
</span><br>
<span class="quotelev1">&gt; ================================================
</span><br>
<span class="quotelev1">&gt;   0) e0:69:95:35:d7:71 limulus:0
</span><br>
<span class="quotelev1">&gt;   1) 00:1c:c0:9b:66:d0 n1:0
</span><br>
<span class="quotelev1">&gt;   2) 00:1a:4d:4a:bf:85 n0:0
</span><br>
<span class="quotelev1">&gt;   3) 00:1a:4d:4a:bf:83 n2:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Doug
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20181.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Previous message:</strong> <a href="20179.php">Douglas Eadline: "Re: [OMPI users] Open-mx issue with ompi 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="20179.php">Douglas Eadline: "Re: [OMPI users] Open-mx issue with ompi 1.6.1"</a>
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
