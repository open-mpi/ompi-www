<?
$subject_val = "Re: [OMPI users] Open-mx issue with ompi 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 10 14:37:29 2012" -->
<!-- isoreceived="20120910183729" -->
<!-- sent="Mon, 10 Sep 2012 14:37:12 -0400" -->
<!-- isosent="20120910183712" -->
<!-- name="Douglas Eadline" -->
<!-- email="deadline_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-mx issue with ompi 1.6.1" -->
<!-- id="21ee055ee8832fb92d2430feb56f8536.squirrel_at_mail.eadline.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="76a9c1cc60d4bdb7fac80f5c8cfb3f85.squirrel_at_mail.eadline.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open-mx issue with ompi 1.6.1<br>
<strong>From:</strong> Douglas Eadline (<em>deadline_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-10 14:37:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20180.php">Brice Goglin: "Re: [OMPI users] [omx-devel]  Open-mx issue with ompi 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="20178.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20145.php">Douglas Eadline: "[OMPI users] Open-mx issue with ompi 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20180.php">Brice Goglin: "Re: [OMPI users] [omx-devel]  Open-mx issue with ompi 1.6.1"</a>
<li><strong>Reply:</strong> <a href="20180.php">Brice Goglin: "Re: [OMPI users] [omx-devel]  Open-mx issue with ompi 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I got no response for this question. Is Open-MX
<br>
no longer supported in Open MPI? Or is there someplace else
<br>
I should submit this information? I also attached my ompi_info
<br>
and omx_info output
<br>
<p><pre>
--
Doug
&gt; I built open-mpi 1.6.1 using the open-mx libraries.
&gt; This worked previously and now I get the following
&gt; error. Here is my system:
&gt;
&gt; kernel:  2.6.32-279.5.1.el6.x86_64
&gt; open-mx: 1.5.2
&gt;
&gt; BTW, open-mx worked previously with open-mpi and the current
&gt; version works with mpich2
&gt;
&gt;
&gt; $  mpiexec -np 8 -machinefile machines cpi
&gt; Process 0 on limulus
&gt; FatalError: Failed to lookup peer by addr, driver replied Bad file
&gt; descriptor
&gt; cpi: ../omx_misc.c:89: omx__ioctl_errno_to_return_checked: Assertion `0'
&gt; failed.
&gt; [limulus:04448] *** Process received signal ***
&gt; [limulus:04448] Signal: Aborted (6)
&gt; [limulus:04448] Signal code:  (-6)
&gt; [limulus:04448] [ 0] /lib64/libpthread.so.0() [0x3324e0f500]
&gt; [limulus:04448] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x33246328a5]
&gt; [limulus:04448] [ 2] /lib64/libc.so.6(abort+0x175) [0x3324634085]
&gt; [limulus:04448] [ 3] /lib64/libc.so.6() [0x332462ba1e]
&gt; [limulus:04448] [ 4] /lib64/libc.so.6(__assert_perror_fail+0)
&gt; [0x332462bae0]
&gt; [limulus:04448] [ 5]
&gt; /usr/open-mx/lib/libopen-mx.so.0(omx__ioctl_errno_to_return_checked+0x197)
&gt; [0x7fb587418b37]
&gt; [limulus:04448] [ 6]
&gt; /usr/open-mx/lib/libopen-mx.so.0(omx__peer_addr_to_index+0x55)
&gt; [0x7fb58741a5d5]
&gt; [limulus:04448] [ 7] /usr/open-mx/lib/libopen-mx.so.0(+0xdc7a)
&gt; [0x7fb587419c7a]
&gt; [limulus:04448] [ 8] /usr/open-mx/lib/libopen-mx.so.0(omx_connect+0x8c)
&gt; [0x7fb58741a27c]
&gt; [limulus:04448] [ 9] /usr/open-mx/lib/libopen-mx.so.0(mx_connect+0x15)
&gt; [0x7fb587425865]
&gt; [limulus:04448] [10]
&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(mca_btl_mx_proc_connect+0x5e)
&gt; [0x7fb5876fe40e]
&gt; [limulus:04448] [11]
&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(mca_btl_mx_send+0x2d4)
&gt; [0x7fb5876fbd94]
&gt; [limulus:04448] [12]
&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(mca_pml_ob1_send_request_start_prepare+0xcb)
&gt; [0x7fb58777d6fb]
&gt; [limulus:04448] [13]
&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(mca_pml_ob1_isend+0x4cb)
&gt; [0x7fb58777509b]
&gt; [limulus:04448] [14]
&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(ompi_coll_tuned_bcast_intra_generic+0x37b)
&gt; [0x7fb58770b55b]
&gt; [limulus:04448] [15]
&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(ompi_coll_tuned_bcast_intra_binomial+0xd8)
&gt; [0x7fb58770b8b8]
&gt; [limulus:04448] [16]
&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(ompi_coll_tuned_bcast_intra_dec_fixed+0xcc)
&gt; [0x7fb587702d8c]
&gt; [limulus:04448] [17]
&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(mca_coll_sync_bcast+0x78)
&gt; [0x7fb587712e88]
&gt; [limulus:04448] [18]
&gt; /opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(MPI_Bcast+0x130) [0x7fb5876ce1b0]
&gt; [limulus:04448] [19] cpi(main+0x10b) [0x400cc4]
&gt; [limulus:04448] [20] /lib64/libc.so.6(__libc_start_main+0xfd)
&gt; [0x332461ecdd]
&gt; [limulus:04448] [21] cpi() [0x400ac9]
&gt; [limulus:04448] *** End of error message ***
&gt; Process 2 on limulus
&gt; Process 4 on limulus
&gt; Process 6 on limulus
&gt; Process 1 on n0
&gt; Process 7 on n0
&gt; Process 3 on n0
&gt; Process 5 on n0
&gt; --------------------------------------------------------------------------
&gt; mpiexec noticed that process rank 0 with PID 4448 on node limulus exited
&gt; on signal 6 (Aborted).
&gt; --------------------------------------------------------------------------
&gt;
[root_at_limulus ~]# ompi_info
                 Package: Open MPI deadline_at_limulus Distribution
                Open MPI: 1.6.1
   Open MPI SVN revision: r27106
   Open MPI release date: Aug 22, 2012
                Open RTE: 1.6.1
   Open RTE SVN revision: r27106
   Open RTE release date: Aug 22, 2012
                    OPAL: 1.6.1
       OPAL SVN revision: r27106
       OPAL release date: Aug 22, 2012
                 MPI API: 2.1
            Ident string: 1.6.1
                  Prefix: /opt/mpi/openmpi-gnu4-1.6.1
 Configured architecture: x86_64-unknown-linux-gnu
          Configure host: limulus
           Configured by: deadline
           Configured on: Wed Sep  5 15:03:09 EDT 2012
          Configure host: limulus
                Built by: deadline
                Built on: Wed Sep  5 15:21:19 EDT 2012
              Built host: limulus
              C bindings: yes
            C++ bindings: yes
      Fortran77 bindings: yes (all)
      Fortran90 bindings: yes
 Fortran90 bindings size: small
              C compiler: gcc
     C compiler absolute: /usr/bin/gcc
  C compiler family name: GNU
      C compiler version: 4.4.6
            C++ compiler: g++
   C++ compiler absolute: /usr/bin/g++
      Fortran77 compiler: gfortran
  Fortran77 compiler abs: /usr/bin/gfortran
      Fortran90 compiler: /usr/bin/gfortran
  Fortran90 compiler abs:
             C profiling: yes
           C++ profiling: yes
     Fortran77 profiling: yes
     Fortran90 profiling: yes
          C++ exceptions: no
          Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
           Sparse Groups: no
  Internal debug support: no
  MPI interface warnings: no
     MPI parameter check: runtime
Memory profiling support: no
Memory debugging support: no
         libltdl support: yes
   Heterogeneous support: no
 mpirun default --prefix: no
         MPI I/O support: yes
       MPI_WTIME support: gettimeofday
     Symbol vis. support: yes
   Host topology support: yes
          MPI extensions: affinity example
   FT Checkpoint support: no (checkpoint thread: no)
     VampirTrace support: yes
  MPI_MAX_PROCESSOR_NAME: 256
    MPI_MAX_ERROR_STRING: 256
     MPI_MAX_OBJECT_NAME: 64
        MPI_MAX_INFO_KEY: 36
        MPI_MAX_INFO_VAL: 256
       MPI_MAX_PORT_NAME: 1024
  MPI_MAX_DATAREP_STRING: 128
           MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.1)
              MCA memory: linux (MCA v2.0, API v2.0, Component v1.6.1)
           MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.1)
               MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.6.1)
               MCA carto: file (MCA v2.0, API v2.0, Component v1.6.1)
               MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.6.1)
               MCA shmem: posix (MCA v2.0, API v2.0, Component v1.6.1)
               MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.6.1)
           MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.6.1)
           MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.1)
               MCA timer: linux (MCA v2.0, API v2.0, Component v1.6.1)
         MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.1)
         MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.1)
             MCA sysinfo: linux (MCA v2.0, API v2.0, Component v1.6.1)
               MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA dpm: orte (MCA v2.0, API v2.0, Component v1.6.1)
              MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.6.1)
           MCA allocator: basic (MCA v2.0, API v2.0, Component v1.6.1)
           MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.6.1)
                MCA coll: basic (MCA v2.0, API v2.0, Component v1.6.1)
                MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.6.1)
                MCA coll: inter (MCA v2.0, API v2.0, Component v1.6.1)
                MCA coll: self (MCA v2.0, API v2.0, Component v1.6.1)
                MCA coll: sm (MCA v2.0, API v2.0, Component v1.6.1)
                MCA coll: sync (MCA v2.0, API v2.0, Component v1.6.1)
                MCA coll: tuned (MCA v2.0, API v2.0, Component v1.6.1)
                  MCA io: romio (MCA v2.0, API v2.0, Component v1.6.1)
               MCA mpool: fake (MCA v2.0, API v2.0, Component v1.6.1)
               MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.6.1)
               MCA mpool: sm (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA pml: bfo (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA pml: cm (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA pml: csum (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA pml: v (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA bml: r2 (MCA v2.0, API v2.0, Component v1.6.1)
              MCA rcache: vma (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA btl: self (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA btl: mx (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA btl: sm (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA btl: tcp (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA mtl: mx (MCA v2.0, API v2.0, Component v1.6.1)
                MCA topo: unity (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA osc: rdma (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA iof: hnp (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA iof: orted (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA iof: tool (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA oob: tcp (MCA v2.0, API v2.0, Component v1.6.1)
                MCA odls: default (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA ras: cm (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA ras: slurm (MCA v2.0, API v2.0, Component v1.6.1)
               MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.6.1)
               MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.6.1)
               MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.6.1)
               MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.6.1)
               MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.6.1)
               MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA rml: oob (MCA v2.0, API v2.0, Component v1.6.1)
              MCA routed: binomial (MCA v2.0, API v2.0, Component v1.6.1)
              MCA routed: cm (MCA v2.0, API v2.0, Component v1.6.1)
              MCA routed: direct (MCA v2.0, API v2.0, Component v1.6.1)
              MCA routed: linear (MCA v2.0, API v2.0, Component v1.6.1)
              MCA routed: radix (MCA v2.0, API v2.0, Component v1.6.1)
              MCA routed: slave (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA plm: rsh (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA plm: slurm (MCA v2.0, API v2.0, Component v1.6.1)
               MCA filem: rsh (MCA v2.0, API v2.0, Component v1.6.1)
              MCA errmgr: default (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA ess: env (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA ess: hnp (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA ess: singleton (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA ess: slave (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA ess: slurm (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.6.1)
                 MCA ess: tool (MCA v2.0, API v2.0, Component v1.6.1)
             MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.6.1)
             MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.6.1)
             MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.6.1)
            MCA notifier: command (MCA v2.0, API v1.0, Component v1.6.1)
            MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.6.1)
[root_at_limulus ~]# /usr/open-mx/bin/omx_info
Open-MX version 1.5.2
 build: deadline_at_limulus:/raid1/home/deadline/rpms-sl6/BUILD/open-mx-1.5.2
Mon Sep 10 08:44:16 EDT 2012
Found 1 boards (32 max) supporting 32 endpoints each:
 limulus:0 (board #0 name eth0 addr e0:69:95:35:d7:71)
   managed by driver 'e1000e'
Peer table is ready, mapper is 00:00:00:00:00:00
================================================
  0) e0:69:95:35:d7:71 limulus:0
  1) 00:1c:c0:9b:66:d0 n1:0
  2) 00:1a:4d:4a:bf:85 n0:0
  3) 00:1a:4d:4a:bf:83 n2:0
--
Doug
-- 
Mailscanner: Clean
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20180.php">Brice Goglin: "Re: [OMPI users] [omx-devel]  Open-mx issue with ompi 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="20178.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20145.php">Douglas Eadline: "[OMPI users] Open-mx issue with ompi 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20180.php">Brice Goglin: "Re: [OMPI users] [omx-devel]  Open-mx issue with ompi 1.6.1"</a>
<li><strong>Reply:</strong> <a href="20180.php">Brice Goglin: "Re: [OMPI users] [omx-devel]  Open-mx issue with ompi 1.6.1"</a>
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
