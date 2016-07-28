<?
$subject_val = "Re: [OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 11:28:58 2007" -->
<!-- isoreceived="20071128162858" -->
<!-- sent="Wed, 28 Nov 2007 11:27:51 -0500" -->
<!-- isosent="20071128162751" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4" -->
<!-- id="A4A155BC-88E7-4D7F-A1E2-B165E5E9DE01_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071125234536.GA31524_at_burgas.des.udc.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-28 11:27:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4538.php">Jeff Squyres: "Re: [OMPI users] Newbie: Using hostfile"</a>
<li><strong>Previous message:</strong> <a href="4536.php">geetha r: "[OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)"</a>
<li><strong>In reply to:</strong> <a href="4516.php">Emilio J. Padron: "[OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4542.php">Emilio J. Padron: "Re: [OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4"</a>
<li><strong>Reply:</strong> <a href="4542.php">Emilio J. Padron: "Re: [OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is to be expected.  OMPI's support for THREAD_MULTIPLE is  
<br>
incomplete and most likely doesn't work.
<br>
<p><p>On Nov 25, 2007, at 6:45 PM, Emilio J. Padron wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it's my fist message here so greetings to everyone (and sorry about my
</span><br>
<span class="quotelev1">&gt; poor english) :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm coding a parallel algorithm and I've decided to upgrade the  
</span><br>
<span class="quotelev1">&gt; openmpi
</span><br>
<span class="quotelev1">&gt; version used in our cluster (1.2.3) this week. After that, problems  
</span><br>
<span class="quotelev1">&gt; arise :-/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There seems to be any problem with multithreding support in OpenMPI  
</span><br>
<span class="quotelev1">&gt; 1.2.4, at
</span><br>
<span class="quotelev1">&gt; least in my installation. Problem appears when more than one process
</span><br>
<span class="quotelev1">&gt; per node is spawned. A simple *hello world* program (with no snd/ 
</span><br>
<span class="quotelev1">&gt; rcvs) works
</span><br>
<span class="quotelev1">&gt; ok in MPI_THREAD_SINGLE mode, but when I tried MPI_THREAD_MULTIPLE  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; error arises:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun -np 2 -machinefile /home/users/emilioj/ 
</span><br>
<span class="quotelev1">&gt; machinefileOpenMPI --debug-daemons justhi
</span><br>
<span class="quotelev1">&gt; Daemon [0,0,1] checking in as pid 5446 on host c0-0
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0.local:05446] [0,0,1] orted: received launch  
</span><br>
<span class="quotelev1">&gt; callback
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05447] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05447] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05447] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05447] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05448] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05448] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05448] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05448] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05448] [ 0] /lib/tls/libpthread.so.0 [0xbb2890]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05448] [ 1] /opt/openmpi/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_bml_r2.so(mca_bml_r2_progress+0x39) [0x4b1d99]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05448] [ 2] /opt/openmpi/lib/libopen-pal.so. 
</span><br>
<span class="quotelev1">&gt; 0(opal_progress+0x65) [0x592265]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05448] [ 3] /opt/openmpi/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp.so(mca_oob_tcp_msg_wait+0x29) [0x20a731]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05448] [ 4] /opt/openmpi/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp.so(mca_oob_tcp_recv+0x365) [0x20f301]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05448] [ 5] /opt/openmpi/lib/libopen-rte.so. 
</span><br>
<span class="quotelev1">&gt; 0(mca_oob_recv_packed+0x38) [0x13c6a0]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05448] [ 6] /opt/openmpi/lib/libopen-rte.so. 
</span><br>
<span class="quotelev1">&gt; 0(mca_oob_xcast+0xa0e) [0x13d36a]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05448] [ 7] /opt/openmpi/lib/libmpi.so. 
</span><br>
<span class="quotelev1">&gt; 0(ompi_mpi_init+0x566) [0xda9f22]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05447] [ 0] /lib/tls/libpthread.so.0 [0xbb2890]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05447] [ 1] /opt/openmpi/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_bml_r2.so(mca_bml_r2_progress+0x39) [0x305d99]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05447] [ 2] /opt/openmpi/lib/libopen-pal.so. 
</span><br>
<span class="quotelev1">&gt; 0(opal_progress+0x65) [0x9fb265]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05447] [ 3] /opt/openmpi/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp.so(mca_oob_tcp_msg_wait+0x29) [0x2ed731]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05447] [ 4] /opt/openmpi/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp.so(mca_oob_tcp_recv+0x365) [0x2f2301]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05447] [ 5] /opt/openmpi/lib/libopen-rte.so. 
</span><br>
<span class="quotelev1">&gt; 0(mca_oob_recv_packed+0x38) [0x53c6a0]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05447] [ 6] /opt/openmpi/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_gpr_proxy.so(orte_gpr_proxy_put+0x1b0) [0x2c4fc8]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05447] [ 7] /opt/openmpi/lib/libopen-rte.so. 
</span><br>
<span class="quotelev1">&gt; 0(orte_smr_base_set_proc_state+0x244) [0x551420]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05447] [ 8] /opt/openmpi/lib/libmpi.so. 
</span><br>
<span class="quotelev1">&gt; 0(ompi_mpi_init+0x52e) [0x13ceea]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05447] [ 9] /opt/openmpi/lib/libmpi.so. 
</span><br>
<span class="quotelev1">&gt; 0(PMPI_Init_thread+0x5c) [0x15e844]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05447] [10] justhi(main+0x36) [0x8048782]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05448] [ 8] /opt/openmpi/lib/libmpi.so. 
</span><br>
<span class="quotelev1">&gt; 0(PMPI_Init_thread+0x5c) [0xdcb844]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05448] [ 9] justhi(main+0x36) [0x8048782]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05448] [10] /lib/tls/libc.so.6(__libc_start_main 
</span><br>
<span class="quotelev1">&gt; +0xd3) [0x970de3]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05448] [11] justhi [0x80486c5]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05448] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05447] [11] /lib/tls/libc.so.6(__libc_start_main 
</span><br>
<span class="quotelev1">&gt; +0xd3) [0x1a0de3]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05447] [12] justhi [0x80486c5]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0:05447] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0.local:05446] [0,0,1] orted_recv_pls: received  
</span><br>
<span class="quotelev1">&gt; message from [0,0,0]
</span><br>
<span class="quotelev1">&gt; [pvfs2-compute-0-0.local:05446] [0,0,1] orted_recv_pls: received  
</span><br>
<span class="quotelev1">&gt; kill_local_procs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Ctrl+Z and kill -9 is needed to finish the execution]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The machinefile contains:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; c0-0 slots=4
</span><br>
<span class="quotelev1">&gt; c0-1 slots=4
</span><br>
<span class="quotelev1">&gt; c0-2 slots=4
</span><br>
<span class="quotelev1">&gt; c0-3 slots=4
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If processes are forced to be spawned in different nodes (c0-0  
</span><br>
<span class="quotelev1">&gt; slots=1,
</span><br>
<span class="quotelev1">&gt; c0-1 slots=1, c0-2 slots=1, c0-3 slots=1...) then there is no  
</span><br>
<span class="quotelev1">&gt; error :-?
</span><br>
<span class="quotelev1">&gt; With 1.2.3 version (same *configure* options) everything runs  
</span><br>
<span class="quotelev1">&gt; perfectly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ompi_info for my openmpi 1.2.4 installation:
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.2.4
</span><br>
<span class="quotelev1">&gt;   Open MPI SVN revision: r16187
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.2.4
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: r16187
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.2.4
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: r16187
</span><br>
<span class="quotelev1">&gt;                  Prefix: /opt/openmpi
</span><br>
<span class="quotelev1">&gt; Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt;           Configured by: root
</span><br>
<span class="quotelev1">&gt;           Configured on: Sun Nov 25 20:13:42 CET 2007
</span><br>
<span class="quotelev1">&gt;          Configure host: pvfs2-compute-0-0.local
</span><br>
<span class="quotelev1">&gt;                Built by: root
</span><br>
<span class="quotelev1">&gt;                Built on: Sun Nov 25 20:19:55 CET 2007
</span><br>
<span class="quotelev1">&gt;              Built host: pvfs2-compute-0-0.local
</span><br>
<span class="quotelev1">&gt;              C bindings: yes
</span><br>
<span class="quotelev1">&gt;            C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 bindings: no
</span><br>
<span class="quotelev1">&gt;      Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt;              C compiler: gcc
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;            C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;   C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;      Fortran77 compiler: none
</span><br>
<span class="quotelev1">&gt;  Fortran77 compiler abs: none
</span><br>
<span class="quotelev1">&gt;      Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt;  Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt;             C profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran77 profiling: no
</span><br>
<span class="quotelev1">&gt;     Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;          C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;          Thread support: posix (mpi: yes, progress: no)
</span><br>
<span class="quotelev1">&gt;  Internal debug support: no
</span><br>
<span class="quotelev1">&gt;     MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;         libltdl support: yes
</span><br>
<span class="quotelev1">&gt;   Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;           MCA backtrace: execinfo (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev1">&gt;              MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev1">&gt;           MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: libnuma (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev1">&gt;               MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                MCA coll: self (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA io: romio (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;              MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA gpr: replica (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ns: replica (MCA v1.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: dash_host (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: gridengine (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: localhost (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA rds: hostfile (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA rds: resfile (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: gridengine (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: env (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: singleton (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the naive program I'm testing:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat justhi.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Status status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main( int argc, char *argv[] )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int myid, nprocs, threadlevel = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Init_thread (&amp;argc, &amp;argv, MPI_THREAD_MULTIPLE, &amp;threadlevel);
</span><br>
<span class="quotelev1">&gt; //  MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size (MPI_COMM_WORLD, &amp;nprocs);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if (myid &lt; 0)
</span><br>
<span class="quotelev1">&gt;    MPI_Abort (MPI_COMM_WORLD, 1);
</span><br>
<span class="quotelev1">&gt;  if (myid != 0) {
</span><br>
<span class="quotelev1">&gt;    fprintf (stdout, &quot;Hi, P%d ready sir!\n&quot;, myid);
</span><br>
<span class="quotelev1">&gt;  } else {
</span><br>
<span class="quotelev1">&gt;    fprintf (stdout, &quot;\nWho rules here!! (%d procs - thread-level: %d) 
</span><br>
<span class="quotelev1">&gt; \n\n&quot;, nprocs, threadlevel);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  return (0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compiled with:
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpicc -Wall -o justhi justhi.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance :-)
</span><br>
<span class="quotelev1">&gt; Emilio.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4538.php">Jeff Squyres: "Re: [OMPI users] Newbie: Using hostfile"</a>
<li><strong>Previous message:</strong> <a href="4536.php">geetha r: "[OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)"</a>
<li><strong>In reply to:</strong> <a href="4516.php">Emilio J. Padron: "[OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4542.php">Emilio J. Padron: "Re: [OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4"</a>
<li><strong>Reply:</strong> <a href="4542.php">Emilio J. Padron: "Re: [OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4"</a>
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
