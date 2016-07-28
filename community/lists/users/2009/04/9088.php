<?
$subject_val = "Re: [OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 24 08:27:18 2009" -->
<!-- isoreceived="20090424122718" -->
<!-- sent="Fri, 24 Apr 2009 08:27:10 -0400" -->
<!-- isosent="20090424122710" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb" -->
<!-- id="2F767F50-D406-40F7-86F9-B360D5F547D2_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="000e01c9c4be$0e7a5ba0$1e63a8c0_at_xx30" -->
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
<strong>Subject:</strong> Re: [OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-24 08:27:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9089.php">Jeff Squyres: "Re: [OMPI users] Open-MPI Presentation"</a>
<li><strong>Previous message:</strong> <a href="9087.php">shan axida: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9086.php">jan: "[OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per <a href="http://www.open-mpi.org/community/lists/announce/2009/03/0029.php">http://www.open-mpi.org/community/lists/announce/2009/03/0029.php</a>,  
<br>
can you try upgrading to Open MPI v1.3.2?
<br>
<p><p>On Apr 24, 2009, at 5:21 AM, jan wrote:
<br>
<p><span class="quotelev1">&gt; Dear Sir,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;m running a cluster with OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $mpirun --mca mpi_show_mpi_alloc_mem_leaks 8 --mca  
</span><br>
<span class="quotelev1">&gt; mpi_show_handle_leaks 1 $HOME/test/cpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got the error message as job failed:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process 15 on node2
</span><br>
<span class="quotelev1">&gt; Process 6 on node1
</span><br>
<span class="quotelev1">&gt; Process 14 on node2
</span><br>
<span class="quotelev1">&gt; &#133; &#133; &#133;
</span><br>
<span class="quotelev1">&gt; Process 0 on node1
</span><br>
<span class="quotelev1">&gt; Process 10 on node2
</span><br>
<span class="quotelev1">&gt; [node2][[9340,1],13][btl_openib_component.c:3002:poll_device] error  
</span><br>
<span class="quotelev1">&gt; polling HP C
</span><br>
<span class="quotelev1">&gt; Q with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [node2][[9340,1],9][btl_openib_component.c:3002:poll_device] error  
</span><br>
<span class="quotelev1">&gt; polling HP CQ
</span><br>
<span class="quotelev1">&gt;  with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [node2][[9340,1],10][btl_openib_component.c:3002:poll_device] error  
</span><br>
<span class="quotelev1">&gt; polling HP C
</span><br>
<span class="quotelev1">&gt; Q with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [node2][[9340,1],11][btl_openib_component.c:3002:poll_device] error  
</span><br>
<span class="quotelev1">&gt; polling HP C
</span><br>
<span class="quotelev1">&gt; Q with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [node2][[9340,1],8][btl_openib_component.c:3002:poll_device] error  
</span><br>
<span class="quotelev1">&gt; polling HP CQ
</span><br>
<span class="quotelev1">&gt;  with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [node2][[9340,1],15][btl_openib_component.c:3002:poll_device] [node2] 
</span><br>
<span class="quotelev1">&gt; [[9340,1],1
</span><br>
<span class="quotelev1">&gt; 2][btl_openib_component.c:3002:poll_device] error polling HP CQ with  
</span><br>
<span class="quotelev1">&gt; -2 errno sa
</span><br>
<span class="quotelev1">&gt; ys Success
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [node2][[9340,1],14][btl_openib_component.c:3002:poll_device] error  
</span><br>
<span class="quotelev1">&gt; polling HP C
</span><br>
<span class="quotelev1">&gt; Q with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 28438 on node node1  
</span><br>
<span class="quotelev1">&gt; exited on signal
</span><br>
<span class="quotelev1">&gt;  0 (Unknown signal 0).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and got the message as job success
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process 1 on node1
</span><br>
<span class="quotelev1">&gt; Process 2 on node1
</span><br>
<span class="quotelev1">&gt; &#133; &#133; &#133;
</span><br>
<span class="quotelev1">&gt; Process 13 on node2
</span><br>
<span class="quotelev1">&gt; Process 14 on node2
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The following memory locations were allocated via MPI_ALLOC_MEM but
</span><br>
<span class="quotelev1">&gt; not freed via MPI_FREE_MEM before invoking MPI_FINALIZE:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process ID: [[13692,1],12]
</span><br>
<span class="quotelev1">&gt; Hostname:   node2
</span><br>
<span class="quotelev1">&gt; PID:        30183
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (null)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [node1:32276] 15 more processes have sent help message help-mpool- 
</span><br>
<span class="quotelev1">&gt; base.txt / all
</span><br>
<span class="quotelev1">&gt;  mem leaks
</span><br>
<span class="quotelev1">&gt; [node1:32276] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to  
</span><br>
<span class="quotelev1">&gt; see all help
</span><br>
<span class="quotelev1">&gt; / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It  occurred periodic, ie. twice success, then twice failed, twice  
</span><br>
<span class="quotelev1">&gt; success, then twice failed &#133; . I download the OFED-1.4.1-rc3 from  
</span><br>
<span class="quotelev1">&gt; The OpenFabrics Alliance and installed on Dell PowerEdge M600 Blade  
</span><br>
<span class="quotelev1">&gt; Server. The infiniband Mezzanine Cards is Mellanox ConnectX QDR &amp;  
</span><br>
<span class="quotelev1">&gt; DDR. And infiniband switch module is Mellanox M2401G. OS is CentOS  
</span><br>
<span class="quotelev1">&gt; 5.3, kernel  2.6.18-128.1.6.el5, with PGI V7.2-5 compiler. It&#146;s  
</span><br>
<span class="quotelev1">&gt; running OpenSM subnet manager.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gloria Jan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wavelink Technology Inc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output of the &quot;ompi_info --all&quot; command as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Package: Open MPI root_at_vortex Distribution
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.3.1
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r20826
</span><br>
<span class="quotelev1">&gt;    Open MPI release date: Mar 18, 2009
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.3.1
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r20826
</span><br>
<span class="quotelev1">&gt;    Open RTE release date: Mar 18, 2009
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.3.1
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r20826
</span><br>
<span class="quotelev1">&gt;        OPAL release date: Mar 18, 2009
</span><br>
<span class="quotelev1">&gt;             Ident string: 1.3.1
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                MCA carto: auto_detect (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev1">&gt;                MCA carto: file (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sync (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: fake (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: ofud (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: tm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev1">&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev1">&gt;               MCA routed: linear (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: tm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                MCA filem: rsh (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: env (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: slurm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: tool (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr/mpi/pgi/openmpi-1.3.1
</span><br>
<span class="quotelev1">&gt;              Exec_prefix: /usr/mpi/pgi/openmpi-1.3.1
</span><br>
<span class="quotelev1">&gt;                   Bindir: /usr/mpi/pgi/openmpi-1.3.1/bin
</span><br>
<span class="quotelev1">&gt;                  Sbindir: /usr/mpi/pgi/openmpi-1.3.1/sbin
</span><br>
<span class="quotelev1">&gt;                   Libdir: /usr/mpi/pgi/openmpi-1.3.1/lib64
</span><br>
<span class="quotelev1">&gt;                   Incdir: /usr/mpi/pgi/openmpi-1.3.1/include
</span><br>
<span class="quotelev1">&gt;                   Mandir: /usr/mpi/pgi/openmpi-1.3.1/share/man
</span><br>
<span class="quotelev1">&gt;                Pkglibdir: /usr/mpi/pgi/openmpi-1.3.1/lib64/openmpi
</span><br>
<span class="quotelev1">&gt;               Libexecdir: /usr/mpi/pgi/openmpi-1.3.1/libexec
</span><br>
<span class="quotelev1">&gt;              Datarootdir: /usr/mpi/pgi/openmpi-1.3.1/share
</span><br>
<span class="quotelev1">&gt;                  Datadir: /usr/mpi/pgi/openmpi-1.3.1/share
</span><br>
<span class="quotelev1">&gt;               Sysconfdir: /usr/mpi/pgi/openmpi-1.3.1/etc
</span><br>
<span class="quotelev1">&gt;           Sharedstatedir: /usr/mpi/pgi/openmpi-1.3.1/com
</span><br>
<span class="quotelev1">&gt;            Localstatedir: /var                 Infodir: /usr/share/ 
</span><br>
<span class="quotelev1">&gt; info
</span><br>
<span class="quotelev1">&gt;               Pkgdatadir: /usr/mpi/pgi/openmpi-1.3.1/share/openmpi
</span><br>
<span class="quotelev1">&gt;                Pkglibdir: /usr/mpi/pgi/openmpi-1.3.1/lib64/openmpi
</span><br>
<span class="quotelev1">&gt;            Pkgincludedir: /usr/mpi/pgi/openmpi-1.3.1/include/openmpi
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-redhat-linux-gnu
</span><br>
<span class="quotelev1">&gt;           Configure host: vortex
</span><br>
<span class="quotelev1">&gt;            Configured by: root
</span><br>
<span class="quotelev1">&gt;            Configured on: Sun Apr 12 23:23:14 CST 2009
</span><br>
<span class="quotelev1">&gt;           Configure host: vortex
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: Sun Apr 12 23:28:52 CST 2009
</span><br>
<span class="quotelev1">&gt;               Built host: vortex
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
<span class="quotelev1">&gt;               C compiler: pgcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /opt/pgi/linux86-64/7.2-5/bin/pgcc
</span><br>
<span class="quotelev1">&gt;              C char size: 1
</span><br>
<span class="quotelev1">&gt;              C bool size: 1
</span><br>
<span class="quotelev1">&gt;             C short size: 2
</span><br>
<span class="quotelev1">&gt;               C int size: 4
</span><br>
<span class="quotelev1">&gt;              C long size: 8
</span><br>
<span class="quotelev1">&gt;             C float size: 4
</span><br>
<span class="quotelev1">&gt;            C double size: 8
</span><br>
<span class="quotelev1">&gt;           C pointer size: 8
</span><br>
<span class="quotelev1">&gt;             C char align: 1
</span><br>
<span class="quotelev1">&gt;             C bool align: 1
</span><br>
<span class="quotelev1">&gt;              C int align: 4
</span><br>
<span class="quotelev1">&gt;            C float align: 4
</span><br>
<span class="quotelev1">&gt;           C double align: 8
</span><br>
<span class="quotelev1">&gt;             C++ compiler: pgCC
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /opt/pgi/linux86-64/7.2-5/bin/pgCC
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: pgf77
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /opt/pgi/linux86-64/7.2-5/bin/pgf77
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: pgf90
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /opt/pgi/linux86-64/7.2-5/bin/pgf90
</span><br>
<span class="quotelev1">&gt;        Fort integer size: 4
</span><br>
<span class="quotelev1">&gt;        Fort logical size: 4
</span><br>
<span class="quotelev1">&gt;  Fort logical value true: -1
</span><br>
<span class="quotelev1">&gt;       Fort have integer1: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer2: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer4: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer8: yes
</span><br>
<span class="quotelev1">&gt;      Fort have integer16: no
</span><br>
<span class="quotelev1">&gt;          Fort have real4: yes
</span><br>
<span class="quotelev1">&gt;          Fort have real8: yes
</span><br>
<span class="quotelev1">&gt;         Fort have real16: no
</span><br>
<span class="quotelev1">&gt;       Fort have complex8: yes
</span><br>
<span class="quotelev1">&gt;      Fort have complex16: yes
</span><br>
<span class="quotelev1">&gt;      Fort have complex32: no
</span><br>
<span class="quotelev1">&gt;       Fort integer1 size: 1
</span><br>
<span class="quotelev1">&gt;       Fort integer2 size: 2
</span><br>
<span class="quotelev1">&gt;       Fort integer4 size: 4
</span><br>
<span class="quotelev1">&gt;       Fort integer8 size: 8
</span><br>
<span class="quotelev1">&gt;      Fort integer16 size: -1
</span><br>
<span class="quotelev1">&gt;           Fort real size: 4
</span><br>
<span class="quotelev1">&gt;          Fort real4 size: 4
</span><br>
<span class="quotelev1">&gt;          Fort real8 size: 8
</span><br>
<span class="quotelev1">&gt;         Fort real16 size: -1
</span><br>
<span class="quotelev1">&gt;       Fort dbl prec size: 4
</span><br>
<span class="quotelev1">&gt;           Fort cplx size: 4
</span><br>
<span class="quotelev1">&gt;       Fort dbl cplx size: 4
</span><br>
<span class="quotelev1">&gt;          Fort cplx8 size: 8
</span><br>
<span class="quotelev1">&gt;         Fort cplx16 size: 16
</span><br>
<span class="quotelev1">&gt;         Fort cplx32 size: -1
</span><br>
<span class="quotelev1">&gt;       Fort integer align: 4
</span><br>
<span class="quotelev1">&gt;      Fort integer1 align: 1
</span><br>
<span class="quotelev1">&gt;      Fort integer2 align: 2
</span><br>
<span class="quotelev1">&gt;      Fort integer4 align: 4
</span><br>
<span class="quotelev1">&gt;      Fort integer8 align: 8
</span><br>
<span class="quotelev1">&gt;     Fort integer16 align: -1
</span><br>
<span class="quotelev1">&gt;          Fort real align: 4
</span><br>
<span class="quotelev1">&gt;         Fort real4 align: 4
</span><br>
<span class="quotelev1">&gt;         Fort real8 align: 8
</span><br>
<span class="quotelev1">&gt;        Fort real16 align: -1
</span><br>
<span class="quotelev1">&gt;      Fort dbl prec align: 4
</span><br>
<span class="quotelev1">&gt;          Fort cplx align: 4
</span><br>
<span class="quotelev1">&gt;      Fort dbl cplx align: 4
</span><br>
<span class="quotelev1">&gt;         Fort cplx8 align: 4
</span><br>
<span class="quotelev1">&gt;        Fort cplx16 align: 8
</span><br>
<span class="quotelev1">&gt;        Fort cplx32 align: -1
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes         Thread support: posix (mpi:  
</span><br>
<span class="quotelev1">&gt; no, progress: no)
</span><br>
<span class="quotelev1">&gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;             Build CFLAGS: -O -DNDEBUG
</span><br>
<span class="quotelev1">&gt;           Build CXXFLAGS: -O -DNDEBUG
</span><br>
<span class="quotelev1">&gt;             Build FFLAGS:
</span><br>
<span class="quotelev1">&gt;            Build FCFLAGS: -O2
</span><br>
<span class="quotelev1">&gt;            Build LDFLAGS: -export-dynamic
</span><br>
<span class="quotelev1">&gt;               Build LIBS: -lnsl -lutil  -lpthread
</span><br>
<span class="quotelev1">&gt;     Wrapper extra CFLAGS:
</span><br>
<span class="quotelev1">&gt;   Wrapper extra CXXFLAGS:   -fpic
</span><br>
<span class="quotelev1">&gt;     Wrapper extra FFLAGS:
</span><br>
<span class="quotelev1">&gt;    Wrapper extra FCFLAGS:
</span><br>
<span class="quotelev1">&gt;    Wrapper extra LDFLAGS:
</span><br>
<span class="quotelev1">&gt;       Wrapper extra LIBS:   -ldl   -Wl,--export-dynamic -lnsl -lutil  
</span><br>
<span class="quotelev1">&gt; -lpthread -ldl
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
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
<span class="quotelev1">&gt;  mpirun default --prefix: yes
</span><br>
<span class="quotelev1">&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt; Symbol visibility support: no
</span><br>
<span class="quotelev1">&gt;    FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_param_files&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;/home/alpha/.openmpi/mca-params.conf:/usr/mpi/pgi/open
</span><br>
<span class="quotelev1">&gt; mpi-1.3.1/etc/openmpi-mca-params.conf&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Path for MCA configuration files  
</span><br>
<span class="quotelev1">&gt; containing default parameter values
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mca_base_param_file_prefix&quot; (current value: &lt;none&gt;, data source:  
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt;                           Aggregate MCA parameter file sets
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mca_base_param_file_path&quot; (current value: &quot;/usr/mpi/pgi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.1/share/openmpi/amca
</span><br>
<span class="quotelev1">&gt; -param-sets:/home/alpha&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Aggregate MCA parameter Search path
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mca_base_param_file_path_force&quot; (current value: &lt;none&gt;, data  
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Forced Aggregate MCA parameter Search path
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_path&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;/usr/mpi/pgi/openmpi-1.3.1/lib64/openmpi:/home/alph
</span><br>
<span class="quotelev1">&gt; a/.openmpi/components&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Path where to look for Open MPI and ORTE  
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_verbose&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Top-level verbosity parameter
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mca_component_show_load_errors&quot; (current value: &quot;1&quot;, data source:  
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to show errors for components that  
</span><br>
<span class="quotelev1">&gt; failed to load or not
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mca_component_disable_dlopen&quot; (current value: &quot;0&quot;, data source:  
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to attempt to disable opening  
</span><br>
<span class="quotelev1">&gt; dynamic components or not
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_param_check&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether you want MPI API parameters  
</span><br>
<span class="quotelev1">&gt; checked at run-time or not.  Possible values are 0 (no checking
</span><br>
<span class="quotelev1">&gt; ) and 1 (perform checking at run-time)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Yield the processor when waiting for MPI  
</span><br>
<span class="quotelev1">&gt; communication (for MPI processes, will default to 1 when o
</span><br>
<span class="quotelev1">&gt; versubscribing nodes)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           How often to progress TCP communications  
</span><br>
<span class="quotelev1">&gt; (0 = never, otherwise specified in microseconds)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_handle_leaks&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;, data source: environment)
</span><br>
<span class="quotelev1">&gt;                           Whether MPI_FINALIZE shows all MPI handles  
</span><br>
<span class="quotelev1">&gt; that were not freed or not
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: environment)
</span><br>
<span class="quotelev1">&gt;                           Whether to actually free MPI objects when  
</span><br>
<span class="quotelev1">&gt; their handles are freed
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpi_show_mpi_alloc_mem_leaks&quot; (current value: &quot;8&quot;, data source:  
</span><br>
<span class="quotelev1">&gt; environment)
</span><br>
<span class="quotelev1">&gt;                           If &gt;0, MPI_FINALIZE will show up to this  
</span><br>
<span class="quotelev1">&gt; many instances of memory allocated by MPI_ALLOC_MEM that w
</span><br>
<span class="quotelev1">&gt; as not freed by MPI_FREE_MEM
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to show all MCA parameter values  
</span><br>
<span class="quotelev1">&gt; during MPI_INIT or not (good for reproducability of MPI jo
</span><br>
<span class="quotelev1">&gt; bs for debug purposes). Accepted values are all, default, file, api,  
</span><br>
<span class="quotelev1">&gt; and enviro - or a comma delimited combination of them
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpi_show_mca_params_file&quot; (current value: &lt;none&gt;, data source:  
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt;                           If mpi_show_mca_params is true, setting  
</span><br>
<span class="quotelev1">&gt; this string to a valid filename tells Open MPI to dump all
</span><br>
<span class="quotelev1">&gt; the MCA parameter values into a file suitable for reading via the  
</span><br>
<span class="quotelev1">&gt; mca_param_files parameter (good for reproducability of MPI
</span><br>
<span class="quotelev1">&gt; jobs)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpi_keep_peer_hostnames&quot; (current value: &quot;1&quot;, data source: default  
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, save the string hostnames of  
</span><br>
<span class="quotelev1">&gt; all MPI peer processes (mostly for error / debugging outpu
</span><br>
<span class="quotelev1">&gt; t messages).  This can add quite a bit of memory usage to each MPI  
</span><br>
<span class="quotelev1">&gt; process.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_abort_delay&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, print out an identifying  
</span><br>
<span class="quotelev1">&gt; message when MPI_ABORT is invoked (hostname, PID of the proces
</span><br>
<span class="quotelev1">&gt; s that called MPI_ABORT) and delay for that many seconds before  
</span><br>
<span class="quotelev1">&gt; exiting (a negative delay value means to never abort).  This
</span><br>
<span class="quotelev1">&gt; allows attaching of a debugger before quitting the job.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_abort_print_stack&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, print out a stack trace when  
</span><br>
<span class="quotelev1">&gt; MPI_ABORT is invoked
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_preconnect_mpi&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value, synonyms: mpi_preco
</span><br>
<span class="quotelev1">&gt; nnect_all)
</span><br>
<span class="quotelev1">&gt;                           Whether to force MPI processes to fully  
</span><br>
<span class="quotelev1">&gt; wire-up the MPI connections between MPI processes during MP
</span><br>
<span class="quotelev1">&gt; I_INIT (vs. making connections lazily -- upon the first MPI traffic  
</span><br>
<span class="quotelev1">&gt; between each process peer pair)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value, deprecated, synonym
</span><br>
<span class="quotelev1">&gt;  of: mpi_preconnect_mpi)
</span><br>
<span class="quotelev1">&gt;                           Whether to force MPI processes to fully  
</span><br>
<span class="quotelev1">&gt; wire-up the MPI connections between MPI processes during MP
</span><br>
<span class="quotelev1">&gt; I_INIT (vs. making connections lazily -- upon the first MPI traffic  
</span><br>
<span class="quotelev1">&gt; between each process peer pair)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: environment)
</span><br>
<span class="quotelev1">&gt;                           Whether to use the &quot;leave pinned&quot; protocol  
</span><br>
<span class="quotelev1">&gt; or not.  Enabling this setting can help bandwidth perfor
</span><br>
<span class="quotelev1">&gt; mance when repeatedly sending and receiving large messages with the  
</span><br>
<span class="quotelev1">&gt; same buffers over RDMA-based networks (0 = do not use &quot;le
</span><br>
<span class="quotelev1">&gt; ave pinned&quot; protocol, 1 = use &quot;leave pinned&quot; protocol, -1 = allow  
</span><br>
<span class="quotelev1">&gt; network to choose at runtime).
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpi_leave_pinned_pipeline&quot; (current value: &quot;0&quot;, data source:  
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to use the &quot;leave pinned pipeline&quot;  
</span><br>
<span class="quotelev1">&gt; protocol or not.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, assume that this job is the  
</span><br>
<span class="quotelev1">&gt; only (set of) process(es) running on each node and bind pro
</span><br>
<span class="quotelev1">&gt; cesses to processors, starting with processor ID 0
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_warn_on_fork&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, issue a warning if program  
</span><br>
<span class="quotelev1">&gt; forks under conditions that could cause system errors
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: information  
</span><br>
<span class="quotelev1">&gt; &quot;mpi_have_sparse_group_storage&quot; (value: &quot;0&quot;, data source: default  
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;                           Whether this Open MPI installation  
</span><br>
<span class="quotelev1">&gt; supports storing of data in MPI groups in &quot;sparse&quot; formats (good
</span><br>
<span class="quotelev1">&gt;  for extremely large process count MPI jobs that create many  
</span><br>
<span class="quotelev1">&gt; communicators/groups)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpi_use_sparse_group_storage&quot; (current value: &quot;0&quot;, data source:  
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to use &quot;sparse&quot; storage formats  
</span><br>
<span class="quotelev1">&gt; for MPI groups (only relevant if mpi_have_sparse_group_storage is 1)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;orte_base_help_aggregate&quot; (current value: &quot;1&quot;, data source: default  
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;                           If orte_base_help_aggregate is true,  
</span><br>
<span class="quotelev1">&gt; duplicate help messages will be aggregated rather than display
</span><br>
<span class="quotelev1">&gt; ed individually.  This can be helpful for parallel jobs that  
</span><br>
<span class="quotelev1">&gt; experience multiple identical failures; rather than print out th
</span><br>
<span class="quotelev1">&gt; e same help/failure message N times, display it once with a count of  
</span><br>
<span class="quotelev1">&gt; how many processes sent the same message.
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_tmpdir_base&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Base of the session directory tree
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_no_session_dirs&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Prohibited locations for session  
</span><br>
<span class="quotelev1">&gt; directories (multiple locations separated by ',', default=NULL)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Top-level ORTE debug switch (default  
</span><br>
<span class="quotelev1">&gt; verbosity: 1)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for ORTE debug messages  
</span><br>
<span class="quotelev1">&gt; (default: 1)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug_daemons&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to debug the ORTE daemons or not
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;orte_debug_daemons_file&quot; (current value: &quot;0&quot;, data source: default  
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;                           Whether want stdout/stderr of daemons to  
</span><br>
<span class="quotelev1">&gt; go to a file or not
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;orte_leave_session_attached&quot; (current value: &quot;0&quot;, data source:  
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt;                           Whether applications and/or daemons should  
</span><br>
<span class="quotelev1">&gt; leave their sessions attached so that any output can be
</span><br>
<span class="quotelev1">&gt; received - this allows X forwarding without all the attendant  
</span><br>
<span class="quotelev1">&gt; debugging output
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_do_not_launch&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Perform all necessary operations to  
</span><br>
<span class="quotelev1">&gt; prepare to launch the application, but do not actually launch it
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_daemon_spin&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Have any orteds spin until we can connect  
</span><br>
<span class="quotelev1">&gt; a debugger to them
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_daemon_fail&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Have the specified orted fail after init  
</span><br>
<span class="quotelev1">&gt; for debugging purposes
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;orte_daemon_fail_delay&quot; (current value: &quot;0&quot;, data source: default  
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;                           Have the specified orted fail after  
</span><br>
<span class="quotelev1">&gt; specified number of seconds (default: 0 =&gt; no delay)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_heartbeat_rate&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Seconds between checks for daemon state-of- 
</span><br>
<span class="quotelev1">&gt; health (default: 0 =&gt; do not check)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_startup_timeout&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Milliseconds/daemon to wait for startup  
</span><br>
<span class="quotelev1">&gt; before declaring failed_to_start (default: 0 =&gt; do not chec
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: nok)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_timing&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Request that critical timing loops be  
</span><br>
<span class="quotelev1">&gt; measured
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;orte_base_user_debugger&quot; (current value: &quot;totalview @mpirun@ -a  
</span><br>
<span class="quotelev1">&gt; @mpirun_args@ : ddt -n @
</span><br>
<span class="quotelev1">&gt; np@ -start @executable@ @executable_argv@ @single_app@ : fxp  
</span><br>
<span class="quotelev1">&gt; @mpirun@ -a @mpirun_args@&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Sequence of user-level debuggers to search  
</span><br>
<span class="quotelev1">&gt; for in orterun
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_abort_timeout&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Max time to wait [in secs] before aborting  
</span><br>
<span class="quotelev1">&gt; an ORTE operation (default: 1sec)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_timeout_step&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;1000&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Time to wait [in usecs/proc] before  
</span><br>
<span class="quotelev1">&gt; aborting an ORTE operation (default: 1000 usec/proc)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_default_hostfile&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Name of the default hostfile (relative or  
</span><br>
<span class="quotelev1">&gt; absolute path)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;orte_keep_fqdn_hostnames&quot; (current value: &quot;0&quot;, data source: default  
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;                           Whether or not to keep FQDN hostnames  
</span><br>
<span class="quotelev1">&gt; [default: no]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_contiguous_nodes&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Number of nodes after which contiguous  
</span><br>
<span class="quotelev1">&gt; nodename encoding will automatically be used [default: INT_MAX]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_tag_output&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Tag all output with [job,rank] (default:  
</span><br>
<span class="quotelev1">&gt; false)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_xml_output&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Display all output in XML format (default:  
</span><br>
<span class="quotelev1">&gt; false)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_timestamp_output&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Timestamp all application process output  
</span><br>
<span class="quotelev1">&gt; (default: false)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_output_filename&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Redirect output from application processes  
</span><br>
<span class="quotelev1">&gt; into filename.rank [default: NULL]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;orte_show_resolved_nodenames&quot; (current value: &quot;0&quot;, data source:  
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt;                           Display any node names that are resolved  
</span><br>
<span class="quotelev1">&gt; to a different name (default: false)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_hetero_apps&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Indicates that multiple app_contexts are  
</span><br>
<span class="quotelev1">&gt; being provided that are a mix of 32/64 bit binaries (default: false)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_launch_agent&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;orted&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Command used to start processes on remote  
</span><br>
<span class="quotelev1">&gt; nodes (default: orted)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;orte_allocation_required&quot; (current value: &quot;0&quot;, data source: default  
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;                           Whether or not an allocation by a resource  
</span><br>
<span class="quotelev1">&gt; manager is required [default: no]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_xterm&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Create a new xterm window and display  
</span><br>
<span class="quotelev1">&gt; output from the specified ranks there [default: none]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;orte_forward_job_control&quot; (current value: &quot;0&quot;, data source: default  
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;                           Forward SIGTSTP (after converting to  
</span><br>
<span class="quotelev1">&gt; SIGSTOP) and SIGCONT signals to the application procs [default: no]
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_signal&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;6,7,8,11&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If a signal is received, display the stack  
</span><br>
<span class="quotelev1">&gt; trace frame
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;opal_set_max_sys_limits&quot; (current value: &quot;0&quot;, data source: default  
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;                           Set to non-zero to automatically set any  
</span><br>
<span class="quotelev1">&gt; system-imposed limits to the maximum allowed
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_event_include&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;poll&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; ... ... ...
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9089.php">Jeff Squyres: "Re: [OMPI users] Open-MPI Presentation"</a>
<li><strong>Previous message:</strong> <a href="9087.php">shan axida: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9086.php">jan: "[OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb"</a>
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
