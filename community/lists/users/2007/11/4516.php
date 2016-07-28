<?
$subject_val = "[OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 25 18:45:42 2007" -->
<!-- isoreceived="20071125234542" -->
<!-- sent="Mon, 26 Nov 2007 00:45:36 +0100" -->
<!-- isosent="20071125234536" -->
<!-- name="Emilio J. Padron" -->
<!-- email="emilioj_at_[hidden]" -->
<!-- subject="[OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4" -->
<!-- id="20071125234536.GA31524_at_burgas.des.udc.es" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4<br>
<strong>From:</strong> Emilio J. Padron (<em>emilioj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-25 18:45:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4517.php">Warner Yuen: "Re: [OMPI users] users Digest, Vol 749, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="4515.php">Dirk Eddelbuettel: "Re: [OMPI users] Is anyone researching PGAPack"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4537.php">Jeff Squyres: "Re: [OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4"</a>
<li><strong>Reply:</strong> <a href="4537.php">Jeff Squyres: "Re: [OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>it's my fist message here so greetings to everyone (and sorry about my 
<br>
poor english) :-)
<br>
<p>I'm coding a parallel algorithm and I've decided to upgrade the openmpi 
<br>
version used in our cluster (1.2.3) this week. After that, problems arise :-/
<br>
<p>There seems to be any problem with multithreding support in OpenMPI 1.2.4, at 
<br>
least in my installation. Problem appears when more than one process 
<br>
per node is spawned. A simple *hello world* program (with no snd/rcvs) works 
<br>
ok in MPI_THREAD_SINGLE mode, but when I tried MPI_THREAD_MULTIPLE this 
<br>
error arises:
<br>
<p>/opt/openmpi/bin/mpirun -np 2 -machinefile /home/users/emilioj/machinefileOpenMPI --debug-daemons justhi
<br>
Daemon [0,0,1] checking in as pid 5446 on host c0-0
<br>
[pvfs2-compute-0-0.local:05446] [0,0,1] orted: received launch callback
<br>
[pvfs2-compute-0-0:05447] *** Process received signal ***
<br>
[pvfs2-compute-0-0:05447] Signal: Segmentation fault (11)
<br>
[pvfs2-compute-0-0:05447] Signal code: Address not mapped (1)
<br>
[pvfs2-compute-0-0:05447] Failing at address: (nil)
<br>
[pvfs2-compute-0-0:05448] *** Process received signal ***
<br>
[pvfs2-compute-0-0:05448] Signal: Segmentation fault (11)
<br>
[pvfs2-compute-0-0:05448] Signal code: Address not mapped (1)
<br>
[pvfs2-compute-0-0:05448] Failing at address: (nil)
<br>
[pvfs2-compute-0-0:05448] [ 0] /lib/tls/libpthread.so.0 [0xbb2890]
<br>
[pvfs2-compute-0-0:05448] [ 1] /opt/openmpi/lib/openmpi/mca_bml_r2.so(mca_bml_r2_progress+0x39) [0x4b1d99]
<br>
[pvfs2-compute-0-0:05448] [ 2] /opt/openmpi/lib/libopen-pal.so.0(opal_progress+0x65) [0x592265]
<br>
[pvfs2-compute-0-0:05448] [ 3] /opt/openmpi/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_wait+0x29) [0x20a731]
<br>
[pvfs2-compute-0-0:05448] [ 4] /opt/openmpi/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_recv+0x365) [0x20f301]
<br>
[pvfs2-compute-0-0:05448] [ 5] /opt/openmpi/lib/libopen-rte.so.0(mca_oob_recv_packed+0x38) [0x13c6a0]
<br>
[pvfs2-compute-0-0:05448] [ 6] /opt/openmpi/lib/libopen-rte.so.0(mca_oob_xcast+0xa0e) [0x13d36a]
<br>
[pvfs2-compute-0-0:05448] [ 7] /opt/openmpi/lib/libmpi.so.0(ompi_mpi_init+0x566) [0xda9f22]
<br>
[pvfs2-compute-0-0:05447] [ 0] /lib/tls/libpthread.so.0 [0xbb2890]
<br>
[pvfs2-compute-0-0:05447] [ 1] /opt/openmpi/lib/openmpi/mca_bml_r2.so(mca_bml_r2_progress+0x39) [0x305d99]
<br>
[pvfs2-compute-0-0:05447] [ 2] /opt/openmpi/lib/libopen-pal.so.0(opal_progress+0x65) [0x9fb265]
<br>
[pvfs2-compute-0-0:05447] [ 3] /opt/openmpi/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_wait+0x29) [0x2ed731]
<br>
[pvfs2-compute-0-0:05447] [ 4] /opt/openmpi/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_recv+0x365) [0x2f2301]
<br>
[pvfs2-compute-0-0:05447] [ 5] /opt/openmpi/lib/libopen-rte.so.0(mca_oob_recv_packed+0x38) [0x53c6a0]
<br>
[pvfs2-compute-0-0:05447] [ 6] /opt/openmpi/lib/openmpi/mca_gpr_proxy.so(orte_gpr_proxy_put+0x1b0) [0x2c4fc8]
<br>
[pvfs2-compute-0-0:05447] [ 7] /opt/openmpi/lib/libopen-rte.so.0(orte_smr_base_set_proc_state+0x244) [0x551420]
<br>
[pvfs2-compute-0-0:05447] [ 8] /opt/openmpi/lib/libmpi.so.0(ompi_mpi_init+0x52e) [0x13ceea]
<br>
[pvfs2-compute-0-0:05447] [ 9] /opt/openmpi/lib/libmpi.so.0(PMPI_Init_thread+0x5c) [0x15e844]
<br>
[pvfs2-compute-0-0:05447] [10] justhi(main+0x36) [0x8048782]
<br>
[pvfs2-compute-0-0:05448] [ 8] /opt/openmpi/lib/libmpi.so.0(PMPI_Init_thread+0x5c) [0xdcb844]
<br>
[pvfs2-compute-0-0:05448] [ 9] justhi(main+0x36) [0x8048782]
<br>
[pvfs2-compute-0-0:05448] [10] /lib/tls/libc.so.6(__libc_start_main+0xd3) [0x970de3]
<br>
[pvfs2-compute-0-0:05448] [11] justhi [0x80486c5]
<br>
[pvfs2-compute-0-0:05448] *** End of error message ***
<br>
[pvfs2-compute-0-0:05447] [11] /lib/tls/libc.so.6(__libc_start_main+0xd3) [0x1a0de3]
<br>
[pvfs2-compute-0-0:05447] [12] justhi [0x80486c5]
<br>
[pvfs2-compute-0-0:05447] *** End of error message ***
<br>
[pvfs2-compute-0-0.local:05446] [0,0,1] orted_recv_pls: received message from [0,0,0]
<br>
[pvfs2-compute-0-0.local:05446] [0,0,1] orted_recv_pls: received kill_local_procs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>[Ctrl+Z and kill -9 is needed to finish the execution]
<br>
<p>The machinefile contains:
<br>
<p>c0-0 slots=4
<br>
c0-1 slots=4
<br>
c0-2 slots=4
<br>
c0-3 slots=4
<br>
...
<br>
<p>If processes are forced to be spawned in different nodes (c0-0 slots=1, 
<br>
c0-1 slots=1, c0-2 slots=1, c0-3 slots=1...) then there is no error :-?
<br>
With 1.2.3 version (same *configure* options) everything runs perfectly.
<br>
<p>The ompi_info for my openmpi 1.2.4 installation:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.2.4
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r16187
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.2.4
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r16187
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.2.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r16187
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /opt/openmpi
<br>
&nbsp;Configured architecture: i686-pc-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Sun Nov 25 20:13:42 CET 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: pvfs2-compute-0-0.local
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Sun Nov 25 20:19:55 CET 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: pvfs2-compute-0-0.local
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: no
<br>
&nbsp;Fortran90 bindings size: na
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: none
<br>
&nbsp;&nbsp;Fortran77 compiler abs: none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: none
<br>
&nbsp;&nbsp;Fortran90 compiler abs: none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: yes, progress: no)
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: yes
<br>
&nbsp;mpirun default --prefix: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: env (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.4)
<br>
<p>and the naive program I'm testing:
<br>
<p>$ cat justhi.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>MPI_Status status;
<br>
<p>int main( int argc, char *argv[] )
<br>
{
<br>
&nbsp;&nbsp;int myid, nprocs, threadlevel = 0;
<br>
<p>&nbsp;&nbsp;MPI_Init_thread (&amp;argc, &amp;argv, MPI_THREAD_MULTIPLE, &amp;threadlevel);
<br>
//  MPI_Init (&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;MPI_Comm_rank (MPI_COMM_WORLD, &amp;myid);
<br>
<p>&nbsp;&nbsp;MPI_Comm_size (MPI_COMM_WORLD, &amp;nprocs);
<br>
<p>&nbsp;&nbsp;if (myid &lt; 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort (MPI_COMM_WORLD, 1);
<br>
&nbsp;&nbsp;if (myid != 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf (stdout, &quot;Hi, P%d ready sir!\n&quot;, myid);
<br>
&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf (stdout, &quot;\nWho rules here!! (%d procs - thread-level: %d)\n\n&quot;, nprocs, threadlevel);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Finalize ();
<br>
<p>&nbsp;&nbsp;return (0);
<br>
}
<br>
<p>compiled with:
<br>
/opt/openmpi/bin/mpicc -Wall -o justhi justhi.c
<br>
<p>Thanks in advance :-)
<br>
Emilio.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4517.php">Warner Yuen: "Re: [OMPI users] users Digest, Vol 749, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="4515.php">Dirk Eddelbuettel: "Re: [OMPI users] Is anyone researching PGAPack"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4537.php">Jeff Squyres: "Re: [OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4"</a>
<li><strong>Reply:</strong> <a href="4537.php">Jeff Squyres: "Re: [OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4"</a>
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
