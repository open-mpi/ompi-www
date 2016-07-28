<?
$subject_val = "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 26 15:19:16 2011" -->
<!-- isoreceived="20110726191916" -->
<!-- sent="Tue, 26 Jul 2011 19:19:01 +0000" -->
<!-- isosent="20110726191901" -->
<!-- name="Lane, William" -->
<!-- email="William.Lane_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that" -->
<!-- id="434F2BB0AF80484CA04DE0D8C0738BF20342C6_at_cshsmsgmbx02.CSMC.EDU" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F03FABEB-E2A2-47F0-B112-0009F249A5D2_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that<br>
<strong>From:</strong> Lane, William (<em>William.Lane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-26 15:19:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16983.php">Reuti: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<li><strong>Previous message:</strong> <a href="16981.php">Wood, Justin Contractor, SAIC: "[OMPI users] Seg fault with PBS Pro 10.4"</a>
<li><strong>In reply to:</strong> <a href="16980.php">Ralph Castain: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in cluster, but nothing more than that"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16983.php">Reuti: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<li><strong>Reply:</strong> <a href="16983.php">Reuti: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<li><strong>Reply:</strong> <a href="16984.php">Ralph Castain: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I can successfully run the MPI testcode via OpenMPI 1.3.3 on less than 87 slots w/both the btl_tcp_if_exclude and btl_tcp_if_include switches
<br>
passed to mpirun.
<br>
<p>SGE always allocates the qsub jobs from the 24 slot nodes first -- up to the 96 slots that these 4 nodes have available (on the largeMem.q). The rest of the 602 slots are allocated
<br>
from 2 slot nodes (all.q). All requests of up to 96 slots are serviced by the largeMem.q nodes (which have 24 slots apiece). Anything over 96 slots is serviced first by the largeMem.q
<br>
nodes then by the all.q nodes.
<br>
<p>Here's the PE that I'm using:
<br>
<p>mpich PE (Parallel Environment) queue:
<br>
<p>pe_name            mpich
<br>
slots              9999
<br>
user_lists         NONE
<br>
xuser_lists        NONE
<br>
start_proc_args    /opt/gridengine/mpi/startmpi.sh -catch_rsh $pe_hostfile
<br>
stop_proc_args     /opt/gridengine/mpi/stopmpi.sh
<br>
allocation_rule    $fill_up
<br>
control_slaves     TRUE
<br>
job_is_first_task  FALSE
<br>
urgency_slots      min
<br>
accounting_summary TRUE
<br>
<p>Wouldn't the -bynode allocation be really inefficient? Does the -bynode switch imply only one slot is used on each node before it moves on to the next?
<br>
<p>Thanks for your help Ralph. At least I have some ideas on where to look now.
<br>
<p>-Bill
<br>
________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Tuesday, July 26, 2011 6:32 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in      cluster, but nothing more than that
<br>
<p>A few thoughts:
<br>
<p>* including both btl_tcp_if_include and btl_tcp_if_exclude is problematic as they are mutually exclusive options. I'm not sure which one will take precedence. I would suggest only using one of them.
<br>
<p>* the default mapping algorithm is byslot - i.e., OMPI will place procs on each node of the cluster until all slots on that node have been filled, and then moves to the next node. Depending on what you have in your machinefile, it is possible that all 88 procs are being placed on the first node. You might try spreading your procs across all nodes with -bynode on the cmd line, or check to ensure that the machinefile is correctly specifying the number of slots on each node. Note: OMPI will automatically read the SGE environment to get the host allocation, so the only reason for providing a machinefile is if you don't want the full allocation used.
<br>
<p>* 88*88 = 7744. MPI transport connections are point-to-point - i.e., each proc opens a unique connection to another proc. If your procs are all winding up on the same node, for example, then the system will want at least 7744 file descriptors on that node, assuming your application does a complete wireup across all procs.
<br>
<p>Updating to 1.4.3 would be a good idea as it is more stable, but it may not resolve this problem if the issue is one of the above.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Jul 25, 2011, at 11:23 PM, Lane, William wrote:
<br>
<p><span class="quotelev1">&gt; Please help me resolve the following problems with a 306 node Rocks cluster using SGE. Please note I can run the
</span><br>
<span class="quotelev1">&gt; job successfully on &lt;87 slots, but not anymore than that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're running SGE and I'm submitting my jobs via the SGE CLI utility qsub and the following lines from a script:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n $NSLOTS  -machinefile $TMPDIR/machines --mca btl_tcp_if_include eth0 --mca btl_tcp_if_exclude eth1 --mca oob_tcp_if_exclude eth1 --mca opal_set_max_sys_limits 1 --mca pls_gridengine_verbose 1 /stf/billstst/ProcessColors2MPICH1
</span><br>
<span class="quotelev1">&gt; echo &quot;MPICH1 mpirun returned #?&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth1 is the connection to the Isilon NAS, where the object file is  located.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error messages returned are of the form:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WRT ORTE_ERROR_LOG: The system limit on number of pipes a process can open was reached
</span><br>
<span class="quotelev1">&gt; WRT ORTE_ERROR_LOG: The system limit on number of network connections a process can open was reached in file oob_tcp.c at line 447
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have increased the open file limit to 4096 from 1024, problem still exists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can run the same test code via MPICH2 successfully on all 696 slots of the cluster, but I can't run the
</span><br>
<span class="quotelev1">&gt; same code (compiled via OpenMPI version 1.3.3) on any more than 86 slots.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the details on the installed version of Open MPI:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root}# ./ompi_info
</span><br>
<span class="quotelev1">&gt;                 Package: Open MPI root_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.3.3
</span><br>
<span class="quotelev1">&gt;   Open MPI SVN revision: r21666
</span><br>
<span class="quotelev1">&gt;   Open MPI release date: Jul 14, 2009
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.3.3
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: r21666
</span><br>
<span class="quotelev1">&gt;   Open RTE release date: Jul 14, 2009
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.3.3
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: r21666
</span><br>
<span class="quotelev1">&gt;       OPAL release date: Jul 14, 2009
</span><br>
<span class="quotelev1">&gt;            Ident string: 1.3.3
</span><br>
<span class="quotelev1">&gt;                  Prefix: /opt/openmpi
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;          Configure host: build-x86-64.rocksclusters.org
</span><br>
<span class="quotelev1">&gt;           Configured by: root
</span><br>
<span class="quotelev1">&gt;           Configured on: Sat Dec 12 16:29:23 PST 2009
</span><br>
<span class="quotelev1">&gt;          Configure host: build-x86-64.rocksclusters.org
</span><br>
<span class="quotelev1">&gt;                Built by: bruno
</span><br>
<span class="quotelev1">&gt;                Built on: Sat Dec 12 16:42:52 PST 2009
</span><br>
<span class="quotelev1">&gt;              Built host: build-x86-64.rocksclusters.org
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
<span class="quotelev1">&gt;          Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;           Sparse Groups: no
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
<span class="quotelev1">&gt;   Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;         MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;       MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev1">&gt;   FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;           MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;           MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA carto: file (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA timer: linux (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: env (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: config (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA dpm: orte (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: basic (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: basic (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: inter (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: self (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sync (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: tuned (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                  MCA io: romio (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: fake (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: sm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: cm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: csum (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: v (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA bml: r2 (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA rcache: vma (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: self (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: sm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: tcp (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA topo: unity (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: rdma (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: hnp (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: orted (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: tool (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: tcp (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                MCA odls: default (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: slurm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: oob (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA routed: binomial (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA routed: direct (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA routed: linear (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: rsh (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: slurm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;               MCA filem: rsh (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: env (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: hnp (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: singleton (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: slurm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: tool (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would upgrading to the latest version of OpenMPI (1.4.3) resolve this issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Bill Lane
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation.
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING:  This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by
</span><br>
<span class="quotelev1">&gt; applicable law.  If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have received this message in error, please notify us immediately
</span><br>
<span class="quotelev1">&gt; by calling (310) 423-6428 and destroy the related message.  Thank You for your cooperation.
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
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation.
<br>
IMPORTANT WARNING:  This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by
<br>
applicable law.  If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED.
<br>
<p>If you have received this message in error, please notify us immediately
<br>
by calling (310) 423-6428 and destroy the related message.  Thank You for your cooperation.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16983.php">Reuti: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<li><strong>Previous message:</strong> <a href="16981.php">Wood, Justin Contractor, SAIC: "[OMPI users] Seg fault with PBS Pro 10.4"</a>
<li><strong>In reply to:</strong> <a href="16980.php">Ralph Castain: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in cluster, but nothing more than that"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16983.php">Reuti: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<li><strong>Reply:</strong> <a href="16983.php">Reuti: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<li><strong>Reply:</strong> <a href="16984.php">Ralph Castain: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
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
