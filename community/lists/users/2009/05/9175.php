<?
$subject_val = "[OMPI users] Fw: users Digest, Vol 1217, Issue 2, Message3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 04:35:01 2009" -->
<!-- isoreceived="20090504083501" -->
<!-- sent="Mon, 4 May 2009 16:34:26 +0800" -->
<!-- isosent="20090504083426" -->
<!-- name="jan" -->
<!-- email="jan_at_[hidden]" -->
<!-- subject="[OMPI users] Fw: users Digest, Vol 1217, Issue 2, Message3" -->
<!-- id="003301c9cc93$299aa7f0$0263a8c0_at_xx02" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Fw: users Digest, Vol 1217, Issue 2, Message3<br>
<strong>From:</strong> jan (<em>jan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-04 04:34:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9176.php">Simone Pellegrini: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Previous message:</strong> <a href="9174.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9178.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Reply:</strong> <a href="9178.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I have updated the firmware of Infiniband module on Dell M600, but the 
<br>
problem still occured.
<br>
<p>===========================================================================
<br>
<p>$ mpirun -hostfile clusternode -np 16 --byslot --mca btl openib,sm,self 
<br>
$HOME/test/cpi
<br>
Process 1 on node1
<br>
Process 11 on node2
<br>
Process 8 on node2
<br>
Process 6 on node1
<br>
Process 4 on node1
<br>
Process 14 on node2
<br>
Process 3 on node1
<br>
Process 2 on node1
<br>
Process 9 on node2
<br>
Process 5 on node1
<br>
Process 0 on node1
<br>
Process 7 on node1
<br>
Process 10 on node2
<br>
Process 15 on node2
<br>
Process 13 on node2
<br>
Process 12 on node2
<br>
[node1][[3175,1],0][btl_openib_component.c:3029:poll_device] error polling 
<br>
HP CQ with -2 errno says Success
<br>
=============================================================================
<br>
<p>Is this problem unsolvable?
<br>
<p><p>Best Regards,
<br>
<p>&nbsp;Gloria Jan
<br>
Wavelink Technology Inc
<br>
<p><p><span class="quotelev3">&gt;&gt;&gt; I can confirm that I have exactly the same problem, also on Dell
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system, even with latest openpmpi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Our system is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dell M905
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenSUSE 11.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kernel: 2.6.27.21-0.1-default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ofed-1.4-21.12 from SUSE repositories.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI-1.3.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But what I can also add, it not only affect openmpi, if this messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are triggered after mpirun:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node032][[9340,1],11][btl_openib_component.c:3002:poll_device] error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then IB stack hangs. You cannot even reload it, have to reboot node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Something that severe should not be able to be caused by Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; Specifically: Open MPI should not be able to hang the OFED stack.
</span><br>
<span class="quotelev2">&gt;&gt; Have you run layer 0 diagnostics to know that your fabric is clean?
</span><br>
<span class="quotelev2">&gt;&gt; You might want to contact your IB vendor to find out how to do that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 24, 2009, at 5:21 AM, jan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Sir,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I?m running a cluster with OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $mpirun --mca mpi_show_mpi_alloc_mem_leaks 8 --mca
</span><br>
<span class="quotelev2">&gt;&gt; mpi_show_handle_leaks 1 $HOME/test/cpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I got the error message as job failed:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process 15 on node2
</span><br>
<span class="quotelev2">&gt;&gt; Process 6 on node1
</span><br>
<span class="quotelev2">&gt;&gt; Process 14 on node2
</span><br>
<span class="quotelev2">&gt;&gt; ? ? ?
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 on node1
</span><br>
<span class="quotelev2">&gt;&gt; Process 10 on node2
</span><br>
<span class="quotelev2">&gt;&gt; [node2][[9340,1],13][btl_openib_component.c:3002:poll_device] error
</span><br>
<span class="quotelev2">&gt;&gt; polling HP C
</span><br>
<span class="quotelev2">&gt;&gt; Q with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [node2][[9340,1],9][btl_openib_component.c:3002:poll_device] error
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ
</span><br>
<span class="quotelev2">&gt;&gt;  with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [node2][[9340,1],10][btl_openib_component.c:3002:poll_device] error
</span><br>
<span class="quotelev2">&gt;&gt; polling HP C
</span><br>
<span class="quotelev2">&gt;&gt; Q with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [node2][[9340,1],11][btl_openib_component.c:3002:poll_device] error
</span><br>
<span class="quotelev2">&gt;&gt; polling HP C
</span><br>
<span class="quotelev2">&gt;&gt; Q with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [node2][[9340,1],8][btl_openib_component.c:3002:poll_device] error
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ
</span><br>
<span class="quotelev2">&gt;&gt;  with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [node2][[9340,1],15][btl_openib_component.c:3002:poll_device] [node2]
</span><br>
<span class="quotelev2">&gt;&gt; [[9340,1],1
</span><br>
<span class="quotelev2">&gt;&gt; 2][btl_openib_component.c:3002:poll_device] error polling HP CQ with
</span><br>
<span class="quotelev2">&gt;&gt; -2 errno sa
</span><br>
<span class="quotelev2">&gt;&gt; ys Success
</span><br>
<span class="quotelev2">&gt;&gt; error polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [node2][[9340,1],14][btl_openib_component.c:3002:poll_device] error
</span><br>
<span class="quotelev2">&gt;&gt; polling HP C
</span><br>
<span class="quotelev2">&gt;&gt; Q with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 0 with PID 28438 on node node1
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal
</span><br>
<span class="quotelev2">&gt;&gt;  0 (Unknown signal 0).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and got the message as job success
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 on node1
</span><br>
<span class="quotelev2">&gt;&gt; Process 2 on node1
</span><br>
<span class="quotelev2">&gt;&gt; ? ? ?
</span><br>
<span class="quotelev2">&gt;&gt; Process 13 on node2
</span><br>
<span class="quotelev2">&gt;&gt; Process 14 on node2
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; The following memory locations were allocated via MPI_ALLOC_MEM but
</span><br>
<span class="quotelev2">&gt;&gt; not freed via MPI_FREE_MEM before invoking MPI_FINALIZE:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process ID: [[13692,1],12]
</span><br>
<span class="quotelev2">&gt;&gt; Hostname:   node2
</span><br>
<span class="quotelev2">&gt;&gt; PID:        30183
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (null)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [node1:32276] 15 more processes have sent help message help-mpool-
</span><br>
<span class="quotelev2">&gt;&gt; base.txt / all
</span><br>
<span class="quotelev2">&gt;&gt;  mem leaks
</span><br>
<span class="quotelev2">&gt;&gt; [node1:32276] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
</span><br>
<span class="quotelev2">&gt;&gt; see all help
</span><br>
<span class="quotelev2">&gt;&gt; / error messages
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It  occurred periodic, ie. twice success, then twice failed, twice
</span><br>
<span class="quotelev2">&gt;&gt; success, then twice failed ? . I download the OFED-1.4.1-rc3 from
</span><br>
<span class="quotelev2">&gt;&gt; The OpenFabrics Alliance and installed on Dell PowerEdge M600 Blade
</span><br>
<span class="quotelev2">&gt;&gt; Server. The infiniband Mezzanine Cards is Mellanox ConnectX QDR &amp;
</span><br>
<span class="quotelev2">&gt;&gt; DDR. And infiniband switch module is Mellanox M2401G. OS is CentOS
</span><br>
<span class="quotelev2">&gt;&gt; 5.3, kernel  2.6.18-128.1.6.el5, with PGI V7.2-5 compiler. It?s
</span><br>
<span class="quotelev2">&gt;&gt; running OpenSM subnet manager.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gloria Jan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Wavelink Technology Inc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The output of the &quot;ompi_info --all&quot; command as:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  Package: Open MPI root_at_vortex Distribution
</span><br>
<span class="quotelev2">&gt;&gt;                 Open MPI: 1.3.1
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI SVN revision: r20826
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI release date: Mar 18, 2009
</span><br>
<span class="quotelev2">&gt;&gt;                 Open RTE: 1.3.1
</span><br>
<span class="quotelev2">&gt;&gt;    Open RTE SVN revision: r20826
</span><br>
<span class="quotelev2">&gt;&gt;    Open RTE release date: Mar 18, 2009
</span><br>
<span class="quotelev2">&gt;&gt;                     OPAL: 1.3.1
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL SVN revision: r20826
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL release date: Mar 18, 2009
</span><br>
<span class="quotelev2">&gt;&gt;             Ident string: 1.3.1
</span><br>
<span class="quotelev2">&gt;&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA carto: auto_detect (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA carto: file (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: sync (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: romio (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: fake (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: cm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: ofud (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: tm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA routed: linear (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA plm: tm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA filem: rsh (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: env (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: slurm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: tool (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   Prefix: /usr/mpi/pgi/openmpi-1.3.1
</span><br>
<span class="quotelev2">&gt;&gt;              Exec_prefix: /usr/mpi/pgi/openmpi-1.3.1
</span><br>
<span class="quotelev2">&gt;&gt;                   Bindir: /usr/mpi/pgi/openmpi-1.3.1/bin
</span><br>
<span class="quotelev2">&gt;&gt;                  Sbindir: /usr/mpi/pgi/openmpi-1.3.1/sbin
</span><br>
<span class="quotelev2">&gt;&gt;                   Libdir: /usr/mpi/pgi/openmpi-1.3.1/lib64
</span><br>
<span class="quotelev2">&gt;&gt;                   Incdir: /usr/mpi/pgi/openmpi-1.3.1/include
</span><br>
<span class="quotelev2">&gt;&gt;                   Mandir: /usr/mpi/pgi/openmpi-1.3.1/share/man
</span><br>
<span class="quotelev2">&gt;&gt;                Pkglibdir: /usr/mpi/pgi/openmpi-1.3.1/lib64/openmpi
</span><br>
<span class="quotelev2">&gt;&gt;               Libexecdir: /usr/mpi/pgi/openmpi-1.3.1/libexec
</span><br>
<span class="quotelev2">&gt;&gt;              Datarootdir: /usr/mpi/pgi/openmpi-1.3.1/share
</span><br>
<span class="quotelev2">&gt;&gt;                  Datadir: /usr/mpi/pgi/openmpi-1.3.1/share
</span><br>
<span class="quotelev2">&gt;&gt;               Sysconfdir: /usr/mpi/pgi/openmpi-1.3.1/etc
</span><br>
<span class="quotelev2">&gt;&gt;           Sharedstatedir: /usr/mpi/pgi/openmpi-1.3.1/com
</span><br>
<span class="quotelev2">&gt;&gt;            Localstatedir: /var                 Infodir: /usr/share/
</span><br>
<span class="quotelev2">&gt;&gt; info
</span><br>
<span class="quotelev2">&gt;&gt;               Pkgdatadir: /usr/mpi/pgi/openmpi-1.3.1/share/openmpi
</span><br>
<span class="quotelev2">&gt;&gt;                Pkglibdir: /usr/mpi/pgi/openmpi-1.3.1/lib64/openmpi
</span><br>
<span class="quotelev2">&gt;&gt;            Pkgincludedir: /usr/mpi/pgi/openmpi-1.3.1/include/openmpi
</span><br>
<span class="quotelev2">&gt;&gt;  Configured architecture: x86_64-redhat-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: vortex
</span><br>
<span class="quotelev2">&gt;&gt;            Configured by: root
</span><br>
<span class="quotelev2">&gt;&gt;            Configured on: Sun Apr 12 23:23:14 CST 2009
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: vortex
</span><br>
<span class="quotelev2">&gt;&gt;                 Built by: root
</span><br>
<span class="quotelev2">&gt;&gt;                 Built on: Sun Apr 12 23:28:52 CST 2009
</span><br>
<span class="quotelev2">&gt;&gt;               Built host: vortex
</span><br>
<span class="quotelev2">&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev2">&gt;&gt;               C compiler: pgcc
</span><br>
<span class="quotelev2">&gt;&gt;      C compiler absolute: /opt/pgi/linux86-64/7.2-5/bin/pgcc
</span><br>
<span class="quotelev2">&gt;&gt;              C char size: 1
</span><br>
<span class="quotelev2">&gt;&gt;              C bool size: 1
</span><br>
<span class="quotelev2">&gt;&gt;             C short size: 2
</span><br>
<span class="quotelev2">&gt;&gt;               C int size: 4
</span><br>
<span class="quotelev2">&gt;&gt;              C long size: 8
</span><br>
<span class="quotelev2">&gt;&gt;             C float size: 4
</span><br>
<span class="quotelev2">&gt;&gt;            C double size: 8
</span><br>
<span class="quotelev2">&gt;&gt;           C pointer size: 8
</span><br>
<span class="quotelev2">&gt;&gt;             C char align: 1
</span><br>
<span class="quotelev2">&gt;&gt;             C bool align: 1
</span><br>
<span class="quotelev2">&gt;&gt;              C int align: 4
</span><br>
<span class="quotelev2">&gt;&gt;            C float align: 4
</span><br>
<span class="quotelev2">&gt;&gt;           C double align: 8
</span><br>
<span class="quotelev2">&gt;&gt;             C++ compiler: pgCC
</span><br>
<span class="quotelev2">&gt;&gt;    C++ compiler absolute: /opt/pgi/linux86-64/7.2-5/bin/pgCC
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 compiler: pgf77
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran77 compiler abs: /opt/pgi/linux86-64/7.2-5/bin/pgf77
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 compiler: pgf90
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran90 compiler abs: /opt/pgi/linux86-64/7.2-5/bin/pgf90
</span><br>
<span class="quotelev2">&gt;&gt;        Fort integer size: 4
</span><br>
<span class="quotelev2">&gt;&gt;        Fort logical size: 4
</span><br>
<span class="quotelev2">&gt;&gt;  Fort logical value true: -1
</span><br>
<span class="quotelev2">&gt;&gt;       Fort have integer1: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fort have integer2: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fort have integer4: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fort have integer8: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fort have integer16: no
</span><br>
<span class="quotelev2">&gt;&gt;          Fort have real4: yes
</span><br>
<span class="quotelev2">&gt;&gt;          Fort have real8: yes
</span><br>
<span class="quotelev2">&gt;&gt;         Fort have real16: no
</span><br>
<span class="quotelev2">&gt;&gt;       Fort have complex8: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fort have complex16: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fort have complex32: no
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer1 size: 1
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer2 size: 2
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer4 size: 4
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer8 size: 8
</span><br>
<span class="quotelev2">&gt;&gt;      Fort integer16 size: -1
</span><br>
<span class="quotelev2">&gt;&gt;           Fort real size: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Fort real4 size: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Fort real8 size: 8
</span><br>
<span class="quotelev2">&gt;&gt;         Fort real16 size: -1
</span><br>
<span class="quotelev2">&gt;&gt;       Fort dbl prec size: 4
</span><br>
<span class="quotelev2">&gt;&gt;           Fort cplx size: 4
</span><br>
<span class="quotelev2">&gt;&gt;       Fort dbl cplx size: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Fort cplx8 size: 8
</span><br>
<span class="quotelev2">&gt;&gt;         Fort cplx16 size: 16
</span><br>
<span class="quotelev2">&gt;&gt;         Fort cplx32 size: -1
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer align: 4
</span><br>
<span class="quotelev2">&gt;&gt;      Fort integer1 align: 1
</span><br>
<span class="quotelev2">&gt;&gt;      Fort integer2 align: 2
</span><br>
<span class="quotelev2">&gt;&gt;      Fort integer4 align: 4
</span><br>
<span class="quotelev2">&gt;&gt;      Fort integer8 align: 8
</span><br>
<span class="quotelev2">&gt;&gt;     Fort integer16 align: -1
</span><br>
<span class="quotelev2">&gt;&gt;          Fort real align: 4
</span><br>
<span class="quotelev2">&gt;&gt;         Fort real4 align: 4
</span><br>
<span class="quotelev2">&gt;&gt;         Fort real8 align: 8
</span><br>
<span class="quotelev2">&gt;&gt;        Fort real16 align: -1
</span><br>
<span class="quotelev2">&gt;&gt;      Fort dbl prec align: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Fort cplx align: 4
</span><br>
<span class="quotelev2">&gt;&gt;      Fort dbl cplx align: 4
</span><br>
<span class="quotelev2">&gt;&gt;         Fort cplx8 align: 4
</span><br>
<span class="quotelev2">&gt;&gt;        Fort cplx16 align: 8
</span><br>
<span class="quotelev2">&gt;&gt;        Fort cplx32 align: -1
</span><br>
<span class="quotelev2">&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ profiling: yes         Thread support: posix (mpi:
</span><br>
<span class="quotelev2">&gt;&gt; no, progress: no)
</span><br>
<span class="quotelev2">&gt;&gt;            Sparse Groups: no
</span><br>
<span class="quotelev2">&gt;&gt;             Build CFLAGS: -O -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt;           Build CXXFLAGS: -O -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt;             Build FFLAGS:
</span><br>
<span class="quotelev2">&gt;&gt;            Build FCFLAGS: -O2
</span><br>
<span class="quotelev2">&gt;&gt;            Build LDFLAGS: -export-dynamic
</span><br>
<span class="quotelev2">&gt;&gt;               Build LIBS: -lnsl -lutil  -lpthread
</span><br>
<span class="quotelev2">&gt;&gt;     Wrapper extra CFLAGS:
</span><br>
<span class="quotelev2">&gt;&gt;   Wrapper extra CXXFLAGS:   -fpic
</span><br>
<span class="quotelev2">&gt;&gt;     Wrapper extra FFLAGS:
</span><br>
<span class="quotelev2">&gt;&gt;    Wrapper extra FCFLAGS:
</span><br>
<span class="quotelev2">&gt;&gt;    Wrapper extra LDFLAGS:
</span><br>
<span class="quotelev2">&gt;&gt;       Wrapper extra LIBS:   -ldl   -Wl,--export-dynamic -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; -lpthread -ldl
</span><br>
<span class="quotelev2">&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun default --prefix: yes
</span><br>
<span class="quotelev2">&gt;&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev2">&gt;&gt; Symbol visibility support: no
</span><br>
<span class="quotelev2">&gt;&gt;    FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mca: parameter &quot;mca_param_files&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;/home/alpha/.openmpi/mca-params.conf:/usr/mpi/pgi/open
</span><br>
<span class="quotelev2">&gt;&gt; mpi-1.3.1/etc/openmpi-mca-params.conf&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Path for MCA configuration files
</span><br>
<span class="quotelev2">&gt;&gt; containing default parameter values
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mca: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_base_param_file_prefix&quot; (current value: &lt;none&gt;, data source:
</span><br>
<span class="quotelev2">&gt;&gt; default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Aggregate MCA parameter file sets
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mca: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_base_param_file_path&quot; (current value: &quot;/usr/mpi/pgi/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3.1/share/openmpi/amca
</span><br>
<span class="quotelev2">&gt;&gt; -param-sets:/home/alpha&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Aggregate MCA parameter Search path
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mca: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_base_param_file_path_force&quot; (current value: &lt;none&gt;, data
</span><br>
<span class="quotelev2">&gt;&gt; source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Forced Aggregate MCA parameter Search path
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mca: parameter &quot;mca_component_path&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;/usr/mpi/pgi/openmpi-1.3.1/lib64/openmpi:/home/alph
</span><br>
<span class="quotelev2">&gt;&gt; a/.openmpi/components&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Path where to look for Open MPI and ORTE
</span><br>
<span class="quotelev2">&gt;&gt; components
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mca: parameter &quot;mca_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Top-level verbosity parameter
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mca: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_component_show_load_errors&quot; (current value: &quot;1&quot;, data source:
</span><br>
<span class="quotelev2">&gt;&gt; default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to show errors for components that
</span><br>
<span class="quotelev2">&gt;&gt; failed to load or not
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mca: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_component_disable_dlopen&quot; (current value: &quot;0&quot;, data source:
</span><br>
<span class="quotelev2">&gt;&gt; default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to attempt to disable opening
</span><br>
<span class="quotelev2">&gt;&gt; dynamic components or not
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_param_check&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether you want MPI API parameters
</span><br>
<span class="quotelev2">&gt;&gt; checked at run-time or not.  Possible values are 0 (no checking
</span><br>
<span class="quotelev2">&gt;&gt; ) and 1 (perform checking at run-time)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Yield the processor when waiting for MPI
</span><br>
<span class="quotelev2">&gt;&gt; communication (for MPI processes, will default to 1 when o
</span><br>
<span class="quotelev2">&gt;&gt; versubscribing nodes)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           How often to progress TCP communications
</span><br>
<span class="quotelev2">&gt;&gt; (0 = never, otherwise specified in microseconds)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_show_handle_leaks&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;, data source: environment)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether MPI_FINALIZE shows all MPI handles
</span><br>
<span class="quotelev2">&gt;&gt; that were not freed or not
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;, data source: environment)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to actually free MPI objects when
</span><br>
<span class="quotelev2">&gt;&gt; their handles are freed
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpi_show_mpi_alloc_mem_leaks&quot; (current value: &quot;8&quot;, data source:
</span><br>
<span class="quotelev2">&gt;&gt; environment)
</span><br>
<span class="quotelev2">&gt;&gt;                           If &gt;0, MPI_FINALIZE will show up to this
</span><br>
<span class="quotelev2">&gt;&gt; many instances of memory allocated by MPI_ALLOC_MEM that w
</span><br>
<span class="quotelev2">&gt;&gt; as not freed by MPI_FREE_MEM
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to show all MCA parameter values
</span><br>
<span class="quotelev2">&gt;&gt; during MPI_INIT or not (good for reproducability of MPI jo
</span><br>
<span class="quotelev2">&gt;&gt; bs for debug purposes). Accepted values are all, default, file, api,
</span><br>
<span class="quotelev2">&gt;&gt; and enviro - or a comma delimited combination of them
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpi_show_mca_params_file&quot; (current value: &lt;none&gt;, data source:
</span><br>
<span class="quotelev2">&gt;&gt; default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           If mpi_show_mca_params is true, setting
</span><br>
<span class="quotelev2">&gt;&gt; this string to a valid filename tells Open MPI to dump all
</span><br>
<span class="quotelev2">&gt;&gt; the MCA parameter values into a file suitable for reading via the
</span><br>
<span class="quotelev2">&gt;&gt; mca_param_files parameter (good for reproducability of MPI
</span><br>
<span class="quotelev2">&gt;&gt; jobs)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpi_keep_peer_hostnames&quot; (current value: &quot;1&quot;, data source: default
</span><br>
<span class="quotelev2">&gt;&gt; value)
</span><br>
<span class="quotelev2">&gt;&gt;                           If nonzero, save the string hostnames of
</span><br>
<span class="quotelev2">&gt;&gt; all MPI peer processes (mostly for error / debugging outpu
</span><br>
<span class="quotelev2">&gt;&gt; t messages).  This can add quite a bit of memory usage to each MPI
</span><br>
<span class="quotelev2">&gt;&gt; process.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_abort_delay&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           If nonzero, print out an identifying
</span><br>
<span class="quotelev2">&gt;&gt; message when MPI_ABORT is invoked (hostname, PID of the proces
</span><br>
<span class="quotelev2">&gt;&gt; s that called MPI_ABORT) and delay for that many seconds before
</span><br>
<span class="quotelev2">&gt;&gt; exiting (a negative delay value means to never abort).  This
</span><br>
<span class="quotelev2">&gt;&gt; allows attaching of a debugger before quitting the job.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_abort_print_stack&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           If nonzero, print out a stack trace when
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ABORT is invoked
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_preconnect_mpi&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;, data source: default value, synonyms: mpi_preco
</span><br>
<span class="quotelev2">&gt;&gt; nnect_all)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to force MPI processes to fully
</span><br>
<span class="quotelev2">&gt;&gt; wire-up the MPI connections between MPI processes during MP
</span><br>
<span class="quotelev2">&gt;&gt; I_INIT (vs. making connections lazily -- upon the first MPI traffic
</span><br>
<span class="quotelev2">&gt;&gt; between each process peer pair)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;, data source: default value, deprecated, synonym
</span><br>
<span class="quotelev2">&gt;&gt;  of: mpi_preconnect_mpi)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to force MPI processes to fully
</span><br>
<span class="quotelev2">&gt;&gt; wire-up the MPI connections between MPI processes during MP
</span><br>
<span class="quotelev2">&gt;&gt; I_INIT (vs. making connections lazily -- upon the first MPI traffic
</span><br>
<span class="quotelev2">&gt;&gt; between each process peer pair)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;, data source: environment)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to use the &quot;leave pinned&quot; protocol
</span><br>
<span class="quotelev2">&gt;&gt; or not.  Enabling this setting can help bandwidth perfor
</span><br>
<span class="quotelev2">&gt;&gt; mance when repeatedly sending and receiving large messages with the
</span><br>
<span class="quotelev2">&gt;&gt; same buffers over RDMA-based networks (0 = do not use &quot;le
</span><br>
<span class="quotelev2">&gt;&gt; ave pinned&quot; protocol, 1 = use &quot;leave pinned&quot; protocol, -1 = allow
</span><br>
<span class="quotelev2">&gt;&gt; network to choose at runtime).
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpi_leave_pinned_pipeline&quot; (current value: &quot;0&quot;, data source:
</span><br>
<span class="quotelev2">&gt;&gt; default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to use the &quot;leave pinned pipeline&quot;
</span><br>
<span class="quotelev2">&gt;&gt; protocol or not.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           If nonzero, assume that this job is the
</span><br>
<span class="quotelev2">&gt;&gt; only (set of) process(es) running on each node and bind pro
</span><br>
<span class="quotelev2">&gt;&gt; cesses to processors, starting with processor ID 0
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_warn_on_fork&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           If nonzero, issue a warning if program
</span><br>
<span class="quotelev2">&gt;&gt; forks under conditions that could cause system errors
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: information
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpi_have_sparse_group_storage&quot; (value: &quot;0&quot;, data source: default
</span><br>
<span class="quotelev2">&gt;&gt; value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether this Open MPI installation
</span><br>
<span class="quotelev2">&gt;&gt; supports storing of data in MPI groups in &quot;sparse&quot; formats (good
</span><br>
<span class="quotelev2">&gt;&gt;  for extremely large process count MPI jobs that create many
</span><br>
<span class="quotelev2">&gt;&gt; communicators/groups)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpi_use_sparse_group_storage&quot; (current value: &quot;0&quot;, data source:
</span><br>
<span class="quotelev2">&gt;&gt; default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to use &quot;sparse&quot; storage formats
</span><br>
<span class="quotelev2">&gt;&gt; for MPI groups (only relevant if mpi_have_sparse_group_storage is 1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orte_base_help_aggregate&quot; (current value: &quot;1&quot;, data source: default
</span><br>
<span class="quotelev2">&gt;&gt; value)
</span><br>
<span class="quotelev2">&gt;&gt;                           If orte_base_help_aggregate is true,
</span><br>
<span class="quotelev2">&gt;&gt; duplicate help messages will be aggregated rather than display
</span><br>
<span class="quotelev2">&gt;&gt; ed individually.  This can be helpful for parallel jobs that
</span><br>
<span class="quotelev2">&gt;&gt; experience multiple identical failures; rather than print out th
</span><br>
<span class="quotelev2">&gt;&gt; e same help/failure message N times, display it once with a count of
</span><br>
<span class="quotelev2">&gt;&gt; how many processes sent the same message.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_tmpdir_base&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Base of the session directory tree
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_no_session_dirs&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Prohibited locations for session
</span><br>
<span class="quotelev2">&gt;&gt; directories (multiple locations separated by ',', default=NULL)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_debug&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Top-level ORTE debug switch (default
</span><br>
<span class="quotelev2">&gt;&gt; verbosity: 1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_debug_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for ORTE debug messages
</span><br>
<span class="quotelev2">&gt;&gt; (default: 1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_debug_daemons&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to debug the ORTE daemons or not
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orte_debug_daemons_file&quot; (current value: &quot;0&quot;, data source: default
</span><br>
<span class="quotelev2">&gt;&gt; value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether want stdout/stderr of daemons to
</span><br>
<span class="quotelev2">&gt;&gt; go to a file or not
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orte_leave_session_attached&quot; (current value: &quot;0&quot;, data source:
</span><br>
<span class="quotelev2">&gt;&gt; default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether applications and/or daemons should
</span><br>
<span class="quotelev2">&gt;&gt; leave their sessions attached so that any output can be
</span><br>
<span class="quotelev2">&gt;&gt; received - this allows X forwarding without all the attendant
</span><br>
<span class="quotelev2">&gt;&gt; debugging output
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_do_not_launch&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Perform all necessary operations to
</span><br>
<span class="quotelev2">&gt;&gt; prepare to launch the application, but do not actually launch it
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_daemon_spin&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Have any orteds spin until we can connect
</span><br>
<span class="quotelev2">&gt;&gt; a debugger to them
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_daemon_fail&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Have the specified orted fail after init
</span><br>
<span class="quotelev2">&gt;&gt; for debugging purposes
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orte_daemon_fail_delay&quot; (current value: &quot;0&quot;, data source: default
</span><br>
<span class="quotelev2">&gt;&gt; value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Have the specified orted fail after
</span><br>
<span class="quotelev2">&gt;&gt; specified number of seconds (default: 0 =&gt; no delay)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_heartbeat_rate&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Seconds between checks for daemon state-of-
</span><br>
<span class="quotelev2">&gt;&gt; health (default: 0 =&gt; do not check)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_startup_timeout&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Milliseconds/daemon to wait for startup
</span><br>
<span class="quotelev2">&gt;&gt; before declaring failed_to_start (default: 0 =&gt; do not chec
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;           C++ exceptions: nok)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_timing&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Request that critical timing loops be
</span><br>
<span class="quotelev2">&gt;&gt; measured
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orte_base_user_debugger&quot; (current value: &quot;totalview @mpirun@ -a
</span><br>
<span class="quotelev2">&gt;&gt; @mpirun_args@ : ddt -n @
</span><br>
<span class="quotelev2">&gt;&gt; np@ -start @executable@ @executable_argv@ @single_app@ : fxp
</span><br>
<span class="quotelev2">&gt;&gt; @mpirun@ -a @mpirun_args@&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Sequence of user-level debuggers to search
</span><br>
<span class="quotelev2">&gt;&gt; for in orterun
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_abort_timeout&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Max time to wait [in secs] before aborting
</span><br>
<span class="quotelev2">&gt;&gt; an ORTE operation (default: 1sec)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_timeout_step&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1000&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Time to wait [in usecs/proc] before
</span><br>
<span class="quotelev2">&gt;&gt; aborting an ORTE operation (default: 1000 usec/proc)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_default_hostfile&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Name of the default hostfile (relative or
</span><br>
<span class="quotelev2">&gt;&gt; absolute path)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orte_keep_fqdn_hostnames&quot; (current value: &quot;0&quot;, data source: default
</span><br>
<span class="quotelev2">&gt;&gt; value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether or not to keep FQDN hostnames
</span><br>
<span class="quotelev2">&gt;&gt; [default: no]
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_contiguous_nodes&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;2147483647&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Number of nodes after which contiguous
</span><br>
<span class="quotelev2">&gt;&gt; nodename encoding will automatically be used [default: INT_MAX]
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_tag_output&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Tag all output with [job,rank] (default:
</span><br>
<span class="quotelev2">&gt;&gt; false)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_xml_output&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Display all output in XML format (default:
</span><br>
<span class="quotelev2">&gt;&gt; false)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_timestamp_output&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Timestamp all application process output
</span><br>
<span class="quotelev2">&gt;&gt; (default: false)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_output_filename&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Redirect output from application processes
</span><br>
<span class="quotelev2">&gt;&gt; into filename.rank [default: NULL]
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orte_show_resolved_nodenames&quot; (current value: &quot;0&quot;, data source:
</span><br>
<span class="quotelev2">&gt;&gt; default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Display any node names that are resolved
</span><br>
<span class="quotelev2">&gt;&gt; to a different name (default: false)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_hetero_apps&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Indicates that multiple app_contexts are
</span><br>
<span class="quotelev2">&gt;&gt; being provided that are a mix of 32/64 bit binaries (default: false)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_launch_agent&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;orted&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Command used to start processes on remote
</span><br>
<span class="quotelev2">&gt;&gt; nodes (default: orted)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orte_allocation_required&quot; (current value: &quot;0&quot;, data source: default
</span><br>
<span class="quotelev2">&gt;&gt; value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether or not an allocation by a resource
</span><br>
<span class="quotelev2">&gt;&gt; manager is required [default: no]
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_xterm&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Create a new xterm window and display
</span><br>
<span class="quotelev2">&gt;&gt; output from the specified ranks there [default: none]
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orte_forward_job_control&quot; (current value: &quot;0&quot;, data source: default
</span><br>
<span class="quotelev2">&gt;&gt; value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Forward SIGTSTP (after converting to
</span><br>
<span class="quotelev2">&gt;&gt; SIGSTOP) and SIGCONT signals to the application procs [default: no]
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA opal: parameter &quot;opal_signal&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;6,7,8,11&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           If a signal is received, display the stack
</span><br>
<span class="quotelev2">&gt;&gt; trace frame
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA opal: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;opal_set_max_sys_limits&quot; (current value: &quot;0&quot;, data source: default
</span><br>
<span class="quotelev2">&gt;&gt; value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Set to non-zero to automatically set any
</span><br>
<span class="quotelev2">&gt;&gt; system-imposed limits to the maximum allowed
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA opal: parameter &quot;opal_event_include&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;poll&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt; ... ... ...
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9176.php">Simone Pellegrini: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Previous message:</strong> <a href="9174.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9178.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Reply:</strong> <a href="9178.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
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
