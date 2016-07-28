<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 08:30:08 2009" -->
<!-- isoreceived="20090504123008" -->
<!-- sent="Mon, 4 May 2009 08:30:01 -0400" -->
<!-- isosent="20090504123001" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3" -->
<!-- id="2DE24CFB-026A-4750-91B4-27ADA89FC5CF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="003301c9cc93$299aa7f0$0263a8c0_at_xx02" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-04 08:30:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9179.php">Kritiraj Sajadah: "[OMPI users] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<li><strong>Previous message:</strong> <a href="9177.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9175.php">jan: "[OMPI users] Fw: users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As I've indicated a few times in this thread:
<br>
<p><span class="quotelev2"> &gt;&gt; Have you run layer 0 diagnostics to know that your fabric is clean?
</span><br>
<span class="quotelev2"> &gt;&gt; You might want to contact your IB vendor to find out how to do that.
</span><br>
<p><p><p>On May 4, 2009, at 4:34 AM, jan wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have updated the firmware of Infiniband module on Dell M600, but the
</span><br>
<span class="quotelev1">&gt; problem still occured.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -hostfile clusternode -np 16 --byslot --mca btl  
</span><br>
<span class="quotelev1">&gt; openib,sm,self
</span><br>
<span class="quotelev1">&gt; $HOME/test/cpi
</span><br>
<span class="quotelev1">&gt; Process 1 on node1
</span><br>
<span class="quotelev1">&gt; Process 11 on node2
</span><br>
<span class="quotelev1">&gt; Process 8 on node2
</span><br>
<span class="quotelev1">&gt; Process 6 on node1
</span><br>
<span class="quotelev1">&gt; Process 4 on node1
</span><br>
<span class="quotelev1">&gt; Process 14 on node2
</span><br>
<span class="quotelev1">&gt; Process 3 on node1
</span><br>
<span class="quotelev1">&gt; Process 2 on node1
</span><br>
<span class="quotelev1">&gt; Process 9 on node2
</span><br>
<span class="quotelev1">&gt; Process 5 on node1
</span><br>
<span class="quotelev1">&gt; Process 0 on node1
</span><br>
<span class="quotelev1">&gt; Process 7 on node1
</span><br>
<span class="quotelev1">&gt; Process 10 on node2
</span><br>
<span class="quotelev1">&gt; Process 15 on node2
</span><br>
<span class="quotelev1">&gt; Process 13 on node2
</span><br>
<span class="quotelev1">&gt; Process 12 on node2
</span><br>
<span class="quotelev1">&gt; [node1][[3175,1],0][btl_openib_component.c:3029:poll_device] error  
</span><br>
<span class="quotelev1">&gt; polling
</span><br>
<span class="quotelev1">&gt; HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this problem unsolvable?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Gloria Jan
</span><br>
<span class="quotelev1">&gt; Wavelink Technology Inc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I can confirm that I have exactly the same problem, also on Dell
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; system, even with latest openpmpi.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Our system is:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Dell M905
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OpenSUSE 11.1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; kernel: 2.6.27.21-0.1-default
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ofed-1.4-21.12 from SUSE repositories.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OpenMPI-1.3.2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; But what I can also add, it not only affect openmpi, if this  
</span><br>
<span class="quotelev1">&gt; messages
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; are triggered after mpirun:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node032][[9340,1],11][btl_openib_component.c:3002:poll_device]  
</span><br>
<span class="quotelev1">&gt; error
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Then IB stack hangs. You cannot even reload it, have to reboot  
</span><br>
<span class="quotelev1">&gt; node.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Something that severe should not be able to be caused by Open MPI.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Specifically: Open MPI should not be able to hang the OFED stack.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Have you run layer 0 diagnostics to know that your fabric is clean?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You might want to contact your IB vendor to find out how to do  
</span><br>
<span class="quotelev1">&gt; that.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 24, 2009, at 5:21 AM, jan wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dear Sir,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I?m running a cluster with OpenMPI.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $mpirun --mca mpi_show_mpi_alloc_mem_leaks 8 --mca
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpi_show_handle_leaks 1 $HOME/test/cpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I got the error message as job failed:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 15 on node2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 6 on node1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 14 on node2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ? ? ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0 on node1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 10 on node2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node2][[9340,1],13][btl_openib_component.c:3002:poll_device] error
</span><br>
<span class="quotelev3">&gt; &gt;&gt; polling HP C
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Q with -2 errno says Success
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node2][[9340,1],9][btl_openib_component.c:3002:poll_device] error
</span><br>
<span class="quotelev3">&gt; &gt;&gt; polling HP CQ
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  with -2 errno says Success
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node2][[9340,1],10][btl_openib_component.c:3002:poll_device] error
</span><br>
<span class="quotelev3">&gt; &gt;&gt; polling HP C
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Q with -2 errno says Success
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node2][[9340,1],11][btl_openib_component.c:3002:poll_device] error
</span><br>
<span class="quotelev3">&gt; &gt;&gt; polling HP C
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Q with -2 errno says Success
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node2][[9340,1],8][btl_openib_component.c:3002:poll_device] error
</span><br>
<span class="quotelev3">&gt; &gt;&gt; polling HP CQ
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  with -2 errno says Success
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node2][[9340,1],15][btl_openib_component.c:3002:poll_device]  
</span><br>
<span class="quotelev1">&gt; [node2]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [[9340,1],1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2][btl_openib_component.c:3002:poll_device] error polling HP CQ  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -2 errno sa
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ys Success
</span><br>
<span class="quotelev3">&gt; &gt;&gt; error polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node2][[9340,1],14][btl_openib_component.c:3002:poll_device] error
</span><br>
<span class="quotelev3">&gt; &gt;&gt; polling HP C
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Q with -2 errno says Success
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun noticed that process rank 0 with PID 28438 on node node1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; exited on signal
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  0 (Unknown signal 0).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and got the message as job success
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 1 on node1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 2 on node1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ? ? ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 13 on node2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 14 on node2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The following memory locations were allocated via MPI_ALLOC_MEM but
</span><br>
<span class="quotelev3">&gt; &gt;&gt; not freed via MPI_FREE_MEM before invoking MPI_FINALIZE:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process ID: [[13692,1],12]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hostname:   node2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PID:        30183
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (null)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node1:32276] 15 more processes have sent help message help-mpool-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; base.txt / all
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  mem leaks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node1:32276] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; see all help
</span><br>
<span class="quotelev3">&gt; &gt;&gt; / error messages
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It  occurred periodic, ie. twice success, then twice failed, twice
</span><br>
<span class="quotelev3">&gt; &gt;&gt; success, then twice failed ? . I download the OFED-1.4.1-rc3 from
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The OpenFabrics Alliance and installed on Dell PowerEdge M600 Blade
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Server. The infiniband Mezzanine Cards is Mellanox ConnectX QDR &amp;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; DDR. And infiniband switch module is Mellanox M2401G. OS is CentOS
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 5.3, kernel  2.6.18-128.1.6.el5, with PGI V7.2-5 compiler. It?s
</span><br>
<span class="quotelev3">&gt; &gt;&gt; running OpenSM subnet manager.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gloria Jan
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Wavelink Technology Inc.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The output of the &quot;ompi_info --all&quot; command as:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  Package: Open MPI root_at_vortex Distribution
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 Open MPI: 1.3.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Open MPI SVN revision: r20826
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Open MPI release date: Mar 18, 2009
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 Open RTE: 1.3.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Open RTE SVN revision: r20826
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Open RTE release date: Mar 18, 2009
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                     OPAL: 1.3.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        OPAL SVN revision: r20826
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        OPAL release date: Mar 18, 2009
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             Ident string: 1.3.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            MCA paffinity: linux (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA carto: auto_detect (MCA v2.0, API v2.0,  
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA carto: file (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA coll: sync (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                   MCA io: romio (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA mpool: fake (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA pml: cm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA btl: ofud (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA ras: tm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0,  
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               MCA routed: linear (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA plm: tm (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA filem: rsh (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA ess: env (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA ess: slurm (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA ess: tool (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                   Prefix: /usr/mpi/pgi/openmpi-1.3.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              Exec_prefix: /usr/mpi/pgi/openmpi-1.3.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                   Bindir: /usr/mpi/pgi/openmpi-1.3.1/bin
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  Sbindir: /usr/mpi/pgi/openmpi-1.3.1/sbin
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                   Libdir: /usr/mpi/pgi/openmpi-1.3.1/lib64
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                   Incdir: /usr/mpi/pgi/openmpi-1.3.1/include
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                   Mandir: /usr/mpi/pgi/openmpi-1.3.1/share/man
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                Pkglibdir: /usr/mpi/pgi/openmpi-1.3.1/lib64/openmpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               Libexecdir: /usr/mpi/pgi/openmpi-1.3.1/libexec
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              Datarootdir: /usr/mpi/pgi/openmpi-1.3.1/share
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  Datadir: /usr/mpi/pgi/openmpi-1.3.1/share
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               Sysconfdir: /usr/mpi/pgi/openmpi-1.3.1/etc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           Sharedstatedir: /usr/mpi/pgi/openmpi-1.3.1/com
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Localstatedir: /var                 Infodir: /usr/share/
</span><br>
<span class="quotelev3">&gt; &gt;&gt; info
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               Pkgdatadir: /usr/mpi/pgi/openmpi-1.3.1/share/openmpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                Pkglibdir: /usr/mpi/pgi/openmpi-1.3.1/lib64/openmpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Pkgincludedir: /usr/mpi/pgi/openmpi-1.3.1/include/ 
</span><br>
<span class="quotelev1">&gt; openmpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Configured architecture: x86_64-redhat-linux-gnu
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           Configure host: vortex
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Configured by: root
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Configured on: Sun Apr 12 23:23:14 CST 2009
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           Configure host: vortex
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 Built by: root
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 Built on: Sun Apr 12 23:28:52 CST 2009
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               Built host: vortex
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               C compiler: pgcc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      C compiler absolute: /opt/pgi/linux86-64/7.2-5/bin/pgcc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              C char size: 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              C bool size: 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             C short size: 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               C int size: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              C long size: 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             C float size: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            C double size: 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           C pointer size: 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             C char align: 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             C bool align: 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              C int align: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            C float align: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           C double align: 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             C++ compiler: pgCC
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    C++ compiler absolute: /opt/pgi/linux86-64/7.2-5/bin/pgCC
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fortran77 compiler: pgf77
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Fortran77 compiler abs: /opt/pgi/linux86-64/7.2-5/bin/pgf77
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fortran90 compiler: pgf90
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Fortran90 compiler abs: /opt/pgi/linux86-64/7.2-5/bin/pgf90
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Fort integer size: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Fort logical size: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Fort logical value true: -1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fort have integer1: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fort have integer2: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fort have integer4: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fort have integer8: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Fort have integer16: no
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          Fort have real4: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          Fort have real8: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Fort have real16: no
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fort have complex8: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Fort have complex16: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Fort have complex32: no
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fort integer1 size: 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fort integer2 size: 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fort integer4 size: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fort integer8 size: 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Fort integer16 size: -1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           Fort real size: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          Fort real4 size: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          Fort real8 size: 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Fort real16 size: -1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fort dbl prec size: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           Fort cplx size: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fort dbl cplx size: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          Fort cplx8 size: 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Fort cplx16 size: 16
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Fort cplx32 size: -1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fort integer align: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Fort integer1 align: 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Fort integer2 align: 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Fort integer4 align: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Fort integer8 align: 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Fort integer16 align: -1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          Fort real align: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Fort real4 align: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Fort real8 align: 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Fort real16 align: -1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Fort dbl prec align: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          Fort cplx align: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Fort dbl cplx align: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Fort cplx8 align: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Fort cplx16 align: 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Fort cplx32 align: -1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            C++ profiling: yes         Thread support: posix (mpi:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; no, progress: no)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Sparse Groups: no
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             Build CFLAGS: -O -DNDEBUG
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           Build CXXFLAGS: -O -DNDEBUG
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             Build FFLAGS:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Build FCFLAGS: -O2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Build LDFLAGS: -export-dynamic
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               Build LIBS: -lnsl -lutil  -lpthread
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Wrapper extra CFLAGS:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Wrapper extra CXXFLAGS:   -fpic
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Wrapper extra FFLAGS:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Wrapper extra FCFLAGS:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Wrapper extra LDFLAGS:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Wrapper extra LIBS:   -ldl   -Wl,--export-dynamic -lnsl - 
</span><br>
<span class="quotelev1">&gt; lutil
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -lpthread -ldl
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  mpirun default --prefix: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Symbol visibility support: no
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mca: parameter &quot;mca_param_files&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;/home/alpha/.openmpi/mca-params.conf:/usr/mpi/pgi/open
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpi-1.3.1/etc/openmpi-mca-params.conf&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Path for MCA configuration files
</span><br>
<span class="quotelev3">&gt; &gt;&gt; containing default parameter values
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mca: parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;mca_base_param_file_prefix&quot; (current value: &lt;none&gt;, data source:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Aggregate MCA parameter file sets
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mca: parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;mca_base_param_file_path&quot; (current value: &quot;/usr/mpi/pgi/
</span><br>
<span class="quotelev3">&gt; &gt;&gt; openmpi-1.3.1/share/openmpi/amca
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -param-sets:/home/alpha&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Aggregate MCA parameter Search path
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mca: parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;mca_base_param_file_path_force&quot; (current value: &lt;none&gt;, data
</span><br>
<span class="quotelev3">&gt; &gt;&gt; source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Forced Aggregate MCA parameter Search  
</span><br>
<span class="quotelev1">&gt; path
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mca: parameter &quot;mca_component_path&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;/usr/mpi/pgi/openmpi-1.3.1/lib64/openmpi:/home/alph
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a/.openmpi/components&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Path where to look for Open MPI and ORTE
</span><br>
<span class="quotelev3">&gt; &gt;&gt; components
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mca: parameter &quot;mca_verbose&quot; (current value:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Top-level verbosity parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mca: parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;mca_component_show_load_errors&quot; (current value: &quot;1&quot;, data source:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Whether to show errors for components  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; failed to load or not
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mca: parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;mca_component_disable_dlopen&quot; (current value: &quot;0&quot;, data source:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Whether to attempt to disable opening
</span><br>
<span class="quotelev3">&gt; &gt;&gt; dynamic components or not
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mpi: parameter &quot;mpi_param_check&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Whether you want MPI API parameters
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checked at run-time or not.  Possible values are 0 (no checking
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ) and 1 (perform checking at run-time)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Yield the processor when waiting for MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; communication (for MPI processes, will default to 1 when o
</span><br>
<span class="quotelev3">&gt; &gt;&gt; versubscribing nodes)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           How often to progress TCP communications
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (0 = never, otherwise specified in microseconds)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mpi: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpi_show_handle_leaks&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;1&quot;, data source: environment)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Whether MPI_FINALIZE shows all MPI  
</span><br>
<span class="quotelev1">&gt; handles
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that were not freed or not
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;0&quot;, data source: environment)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Whether to actually free MPI objects when
</span><br>
<span class="quotelev3">&gt; &gt;&gt; their handles are freed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mpi: parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;mpi_show_mpi_alloc_mem_leaks&quot; (current value: &quot;8&quot;, data source:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; environment)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           If &gt;0, MPI_FINALIZE will show up to this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; many instances of memory allocated by MPI_ALLOC_MEM that w
</span><br>
<span class="quotelev3">&gt; &gt;&gt; as not freed by MPI_FREE_MEM
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Whether to show all MCA parameter values
</span><br>
<span class="quotelev3">&gt; &gt;&gt; during MPI_INIT or not (good for reproducability of MPI jo
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bs for debug purposes). Accepted values are all, default, file,  
</span><br>
<span class="quotelev1">&gt; api,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and enviro - or a comma delimited combination of them
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mpi: parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;mpi_show_mca_params_file&quot; (current value: &lt;none&gt;, data source:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           If mpi_show_mca_params is true, setting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this string to a valid filename tells Open MPI to dump all
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the MCA parameter values into a file suitable for reading via the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mca_param_files parameter (good for reproducability of MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jobs)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mpi: parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;mpi_keep_peer_hostnames&quot; (current value: &quot;1&quot;, data source: default
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           If nonzero, save the string hostnames of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; all MPI peer processes (mostly for error / debugging outpu
</span><br>
<span class="quotelev3">&gt; &gt;&gt; t messages).  This can add quite a bit of memory usage to each MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; process.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mpi: parameter &quot;mpi_abort_delay&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           If nonzero, print out an identifying
</span><br>
<span class="quotelev3">&gt; &gt;&gt; message when MPI_ABORT is invoked (hostname, PID of the proces
</span><br>
<span class="quotelev3">&gt; &gt;&gt; s that called MPI_ABORT) and delay for that many seconds before
</span><br>
<span class="quotelev3">&gt; &gt;&gt; exiting (a negative delay value means to never abort).  This
</span><br>
<span class="quotelev3">&gt; &gt;&gt; allows attaching of a debugger before quitting the job.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mpi: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpi_abort_print_stack&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           If nonzero, print out a stack trace when
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_ABORT is invoked
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mpi: parameter &quot;mpi_preconnect_mpi&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;0&quot;, data source: default value, synonyms: mpi_preco
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nnect_all)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Whether to force MPI processes to fully
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wire-up the MPI connections between MPI processes during MP
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I_INIT (vs. making connections lazily -- upon the first MPI traffic
</span><br>
<span class="quotelev3">&gt; &gt;&gt; between each process peer pair)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;0&quot;, data source: default value, deprecated, synonym
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  of: mpi_preconnect_mpi)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Whether to force MPI processes to fully
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wire-up the MPI connections between MPI processes during MP
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I_INIT (vs. making connections lazily -- upon the first MPI traffic
</span><br>
<span class="quotelev3">&gt; &gt;&gt; between each process peer pair)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;0&quot;, data source: environment)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Whether to use the &quot;leave pinned&quot;  
</span><br>
<span class="quotelev1">&gt; protocol
</span><br>
<span class="quotelev3">&gt; &gt;&gt; or not.  Enabling this setting can help bandwidth perfor
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mance when repeatedly sending and receiving large messages with the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; same buffers over RDMA-based networks (0 = do not use &quot;le
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ave pinned&quot; protocol, 1 = use &quot;leave pinned&quot; protocol, -1 = allow
</span><br>
<span class="quotelev3">&gt; &gt;&gt; network to choose at runtime).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mpi: parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;mpi_leave_pinned_pipeline&quot; (current value: &quot;0&quot;, data source:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Whether to use the &quot;leave pinned  
</span><br>
<span class="quotelev1">&gt; pipeline&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; protocol or not.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           If nonzero, assume that this job is the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; only (set of) process(es) running on each node and bind pro
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cesses to processors, starting with processor ID 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mpi: parameter &quot;mpi_warn_on_fork&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           If nonzero, issue a warning if program
</span><br>
<span class="quotelev3">&gt; &gt;&gt; forks under conditions that could cause system errors
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mpi: information
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;mpi_have_sparse_group_storage&quot; (value: &quot;0&quot;, data source: default
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Whether this Open MPI installation
</span><br>
<span class="quotelev3">&gt; &gt;&gt; supports storing of data in MPI groups in &quot;sparse&quot; formats (good
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  for extremely large process count MPI jobs that create many
</span><br>
<span class="quotelev3">&gt; &gt;&gt; communicators/groups)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mpi: parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;mpi_use_sparse_group_storage&quot; (current value: &quot;0&quot;, data source:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Whether to use &quot;sparse&quot; storage formats
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for MPI groups (only relevant if mpi_have_sparse_group_storage is  
</span><br>
<span class="quotelev1">&gt; 1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;orte_base_help_aggregate&quot; (current value: &quot;1&quot;, data source:  
</span><br>
<span class="quotelev1">&gt; default
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           If orte_base_help_aggregate is true,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; duplicate help messages will be aggregated rather than display
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ed individually.  This can be helpful for parallel jobs that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; experience multiple identical failures; rather than print out th
</span><br>
<span class="quotelev3">&gt; &gt;&gt; e same help/failure message N times, display it once with a count  
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; how many processes sent the same message.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter &quot;orte_tmpdir_base&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Base of the session directory tree
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter &quot;orte_no_session_dirs&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Prohibited locations for session
</span><br>
<span class="quotelev3">&gt; &gt;&gt; directories (multiple locations separated by ',', default=NULL)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter &quot;orte_debug&quot; (current value:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Top-level ORTE debug switch (default
</span><br>
<span class="quotelev3">&gt; &gt;&gt; verbosity: 1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter &quot;orte_debug_verbose&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Verbosity level for ORTE debug messages
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (default: 1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter &quot;orte_debug_daemons&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Whether to debug the ORTE daemons or not
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;orte_debug_daemons_file&quot; (current value: &quot;0&quot;, data source: default
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Whether want stdout/stderr of daemons to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; go to a file or not
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;orte_leave_session_attached&quot; (current value: &quot;0&quot;, data source:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Whether applications and/or daemons  
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev3">&gt; &gt;&gt; leave their sessions attached so that any output can be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; received - this allows X forwarding without all the attendant
</span><br>
<span class="quotelev3">&gt; &gt;&gt; debugging output
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter &quot;orte_do_not_launch&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Perform all necessary operations to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; prepare to launch the application, but do not actually launch it
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter &quot;orte_daemon_spin&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Have any orteds spin until we can connect
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a debugger to them
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter &quot;orte_daemon_fail&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Have the specified orted fail after init
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for debugging purposes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;orte_daemon_fail_delay&quot; (current value: &quot;0&quot;, data source: default
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Have the specified orted fail after
</span><br>
<span class="quotelev3">&gt; &gt;&gt; specified number of seconds (default: 0 =&gt; no delay)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter &quot;orte_heartbeat_rate&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Seconds between checks for daemon state- 
</span><br>
<span class="quotelev1">&gt; of-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; health (default: 0 =&gt; do not check)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter &quot;orte_startup_timeout&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Milliseconds/daemon to wait for startup
</span><br>
<span class="quotelev3">&gt; &gt;&gt; before declaring failed_to_start (default: 0 =&gt; do not chec
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           C++ exceptions: nok)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter &quot;orte_timing&quot; (current value:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Request that critical timing loops be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; measured
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;orte_base_user_debugger&quot; (current value: &quot;totalview @mpirun@ -a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @mpirun_args@ : ddt -n @
</span><br>
<span class="quotelev3">&gt; &gt;&gt; np@ -start @executable@ @executable_argv@ @single_app@ : fxp
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @mpirun@ -a @mpirun_args@&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Sequence of user-level debuggers to  
</span><br>
<span class="quotelev1">&gt; search
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for in orterun
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter &quot;orte_abort_timeout&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Max time to wait [in secs] before  
</span><br>
<span class="quotelev1">&gt; aborting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; an ORTE operation (default: 1sec)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter &quot;orte_timeout_step&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;1000&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Time to wait [in usecs/proc] before
</span><br>
<span class="quotelev3">&gt; &gt;&gt; aborting an ORTE operation (default: 1000 usec/proc)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;orte_default_hostfile&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Name of the default hostfile (relative or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; absolute path)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;orte_keep_fqdn_hostnames&quot; (current value: &quot;0&quot;, data source:  
</span><br>
<span class="quotelev1">&gt; default
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Whether or not to keep FQDN hostnames
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [default: no]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;orte_contiguous_nodes&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;2147483647&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Number of nodes after which contiguous
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nodename encoding will automatically be used [default: INT_MAX]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter &quot;orte_tag_output&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Tag all output with [job,rank] (default:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; false)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter &quot;orte_xml_output&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Display all output in XML format  
</span><br>
<span class="quotelev1">&gt; (default:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; false)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;orte_timestamp_output&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Timestamp all application process output
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (default: false)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter &quot;orte_output_filename&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Redirect output from application  
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; into filename.rank [default: NULL]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;orte_show_resolved_nodenames&quot; (current value: &quot;0&quot;, data source:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Display any node names that are resolved
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to a different name (default: false)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter &quot;orte_hetero_apps&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Indicates that multiple app_contexts are
</span><br>
<span class="quotelev3">&gt; &gt;&gt; being provided that are a mix of 32/64 bit binaries (default:  
</span><br>
<span class="quotelev1">&gt; false)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter &quot;orte_launch_agent&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;orted&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Command used to start processes on remote
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nodes (default: orted)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;orte_allocation_required&quot; (current value: &quot;0&quot;, data source:  
</span><br>
<span class="quotelev1">&gt; default
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Whether or not an allocation by a  
</span><br>
<span class="quotelev1">&gt; resource
</span><br>
<span class="quotelev3">&gt; &gt;&gt; manager is required [default: no]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter &quot;orte_xterm&quot; (current value:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Create a new xterm window and display
</span><br>
<span class="quotelev3">&gt; &gt;&gt; output from the specified ranks there [default: none]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA orte: parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;orte_forward_job_control&quot; (current value: &quot;0&quot;, data source:  
</span><br>
<span class="quotelev1">&gt; default
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Forward SIGTSTP (after converting to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; SIGSTOP) and SIGCONT signals to the application procs [default: no]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA opal: parameter &quot;opal_signal&quot; (current value:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;6,7,8,11&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           If a signal is received, display the  
</span><br>
<span class="quotelev1">&gt; stack
</span><br>
<span class="quotelev3">&gt; &gt;&gt; trace frame
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA opal: parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;opal_set_max_sys_limits&quot; (current value: &quot;0&quot;, data source: default
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Set to non-zero to automatically set any
</span><br>
<span class="quotelev3">&gt; &gt;&gt; system-imposed limits to the maximum allowed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA opal: parameter &quot;opal_event_include&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;poll&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ... ... ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="9179.php">Kritiraj Sajadah: "[OMPI users] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<li><strong>Previous message:</strong> <a href="9177.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9175.php">jan: "[OMPI users] Fw: users Digest, Vol 1217, Issue 2, Message3"</a>
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
