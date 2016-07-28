<?
$subject_val = "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 26 15:49:12 2011" -->
<!-- isoreceived="20110726194912" -->
<!-- sent="Tue, 26 Jul 2011 13:49:03 -0600" -->
<!-- isosent="20110726194903" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that" -->
<!-- id="EC4BCAD7-0614-4348-9570-A0448024F2E9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF20342C6_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-26 15:49:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16985.php">Ralph Castain: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<li><strong>Previous message:</strong> <a href="16983.php">Reuti: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<li><strong>In reply to:</strong> <a href="16982.php">Lane, William: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 26, 2011, at 1:19 PM, Lane, William wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can successfully run the MPI testcode via OpenMPI 1.3.3 on less than 87 slots w/both the btl_tcp_if_exclude and btl_tcp_if_include switches
</span><br>
<span class="quotelev1">&gt; passed to mpirun.
</span><br>
<p>Understood - just pointing out that this is an error, even though we (sadly) don't output an error message (which we should do).
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SGE always allocates the qsub jobs from the 24 slot nodes first -- up to the 96 slots that these 4 nodes have available (on the largeMem.q). The rest of the 602 slots are allocated
</span><br>
<span class="quotelev1">&gt; from 2 slot nodes (all.q). All requests of up to 96 slots are serviced by the largeMem.q nodes (which have 24 slots apiece). Anything over 96 slots is serviced first by the largeMem.q
</span><br>
<span class="quotelev1">&gt; nodes then by the all.q nodes.
</span><br>
<p>So basically the 88 procs would be executing on 4 nodes, with 24 procs/node on the first three and 12 procs on the last one. If we do a complete wireup, then we need a minimum of 88*24 = 2112 sockets on each node, plus sockets for each proc to connect to their local daemon, etc. Should be within your 4096 limit.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the PE that I'm using:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpich PE (Parallel Environment) queue:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pe_name            mpich
</span><br>
<span class="quotelev1">&gt; slots              9999
</span><br>
<span class="quotelev1">&gt; user_lists         NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists        NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args    /opt/gridengine/mpi/startmpi.sh -catch_rsh $pe_hostfile
</span><br>
<span class="quotelev1">&gt; stop_proc_args     /opt/gridengine/mpi/stopmpi.sh
</span><br>
<span class="quotelev1">&gt; allocation_rule    $fill_up
</span><br>
<span class="quotelev1">&gt; control_slaves     TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev1">&gt; urgency_slots      min
</span><br>
<span class="quotelev1">&gt; accounting_summary TRUE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wouldn't the -bynode allocation be really inefficient?
</span><br>
<p>Depends on your communication pattern - it will use all the nodes, but provides a more balanced loading. If rank N always communicates with rank N+1, then it will be inefficient as the comm will always go over TCP instead of shared memory.
<br>
<p>Still, it might help to debug the problem...
<br>
<p><span class="quotelev1">&gt; Does the -bynode switch imply only one slot is used on each node before it moves on to the next?
</span><br>
<p>Yes, but it wraps around.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help Ralph. At least I have some ideas on where to look now.
</span><br>
<p>You might look at your overall limit settings - could be that the error message is inaccurate. You might also add --display-map to your cmd line to see where mpirun actually placed your processes, just to be sure they aren't overloading a node.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Bill
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, July 26, 2011 6:32 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in      cluster, but nothing more than that
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A few thoughts:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * including both btl_tcp_if_include and btl_tcp_if_exclude is problematic as they are mutually exclusive options. I'm not sure which one will take precedence. I would suggest only using one of them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * the default mapping algorithm is byslot - i.e., OMPI will place procs on each node of the cluster until all slots on that node have been filled, and then moves to the next node. Depending on what you have in your machinefile, it is possible that all 88 procs are being placed on the first node. You might try spreading your procs across all nodes with -bynode on the cmd line, or check to ensure that the machinefile is correctly specifying the number of slots on each node. Note: OMPI will automatically read the SGE environment to get the host allocation, so the only reason for providing a machinefile is if you don't want the full allocation used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * 88*88 = 7744. MPI transport connections are point-to-point - i.e., each proc opens a unique connection to another proc. If your procs are all winding up on the same node, for example, then the system will want at least 7744 file descriptors on that node, assuming your application does a complete wireup across all procs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Updating to 1.4.3 would be a good idea as it is more stable, but it may not resolve this problem if the issue is one of the above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 25, 2011, at 11:23 PM, Lane, William wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please help me resolve the following problems with a 306 node Rocks cluster using SGE. Please note I can run the
</span><br>
<span class="quotelev2">&gt;&gt; job successfully on &lt;87 slots, but not anymore than that.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We're running SGE and I'm submitting my jobs via the SGE CLI utility qsub and the following lines from a script:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n $NSLOTS  -machinefile $TMPDIR/machines --mca btl_tcp_if_include eth0 --mca btl_tcp_if_exclude eth1 --mca oob_tcp_if_exclude eth1 --mca opal_set_max_sys_limits 1 --mca pls_gridengine_verbose 1 /stf/billstst/ProcessColors2MPICH1
</span><br>
<span class="quotelev2">&gt;&gt; echo &quot;MPICH1 mpirun returned #?&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; eth1 is the connection to the Isilon NAS, where the object file is  located.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The error messages returned are of the form:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WRT ORTE_ERROR_LOG: The system limit on number of pipes a process can open was reached
</span><br>
<span class="quotelev2">&gt;&gt; WRT ORTE_ERROR_LOG: The system limit on number of network connections a process can open was reached in file oob_tcp.c at line 447
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have increased the open file limit to 4096 from 1024, problem still exists.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can run the same test code via MPICH2 successfully on all 696 slots of the cluster, but I can't run the
</span><br>
<span class="quotelev2">&gt;&gt; same code (compiled via OpenMPI version 1.3.3) on any more than 86 slots.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's the details on the installed version of Open MPI:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [root}# ./ompi_info
</span><br>
<span class="quotelev2">&gt;&gt;                Package: Open MPI root_at_[hidden] Distribution
</span><br>
<span class="quotelev2">&gt;&gt;               Open MPI: 1.3.3
</span><br>
<span class="quotelev2">&gt;&gt;  Open MPI SVN revision: r21666
</span><br>
<span class="quotelev2">&gt;&gt;  Open MPI release date: Jul 14, 2009
</span><br>
<span class="quotelev2">&gt;&gt;               Open RTE: 1.3.3
</span><br>
<span class="quotelev2">&gt;&gt;  Open RTE SVN revision: r21666
</span><br>
<span class="quotelev2">&gt;&gt;  Open RTE release date: Jul 14, 2009
</span><br>
<span class="quotelev2">&gt;&gt;                   OPAL: 1.3.3
</span><br>
<span class="quotelev2">&gt;&gt;      OPAL SVN revision: r21666
</span><br>
<span class="quotelev2">&gt;&gt;      OPAL release date: Jul 14, 2009
</span><br>
<span class="quotelev2">&gt;&gt;           Ident string: 1.3.3
</span><br>
<span class="quotelev2">&gt;&gt;                 Prefix: /opt/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;         Configure host: build-x86-64.rocksclusters.org
</span><br>
<span class="quotelev2">&gt;&gt;          Configured by: root
</span><br>
<span class="quotelev2">&gt;&gt;          Configured on: Sat Dec 12 16:29:23 PST 2009
</span><br>
<span class="quotelev2">&gt;&gt;         Configure host: build-x86-64.rocksclusters.org
</span><br>
<span class="quotelev2">&gt;&gt;               Built by: bruno
</span><br>
<span class="quotelev2">&gt;&gt;               Built on: Sat Dec 12 16:42:52 PST 2009
</span><br>
<span class="quotelev2">&gt;&gt;             Built host: build-x86-64.rocksclusters.org
</span><br>
<span class="quotelev2">&gt;&gt;             C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;           C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev2">&gt;&gt;             C compiler: gcc
</span><br>
<span class="quotelev2">&gt;&gt;    C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;           C++ compiler: g++
</span><br>
<span class="quotelev2">&gt;&gt;  C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran77 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt; Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran90 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt; Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;            C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;          C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;    Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;    Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;         C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;         Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev2">&gt;&gt;          Sparse Groups: no
</span><br>
<span class="quotelev2">&gt;&gt; Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;    MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;        libltdl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;  Heterogeneous support: no
</span><br>
<span class="quotelev2">&gt;&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev2">&gt;&gt;        MPI I/O support: yes
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev2">&gt;&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev2">&gt;&gt;  FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA carto: file (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA timer: linux (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;        MCA installdirs: env (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;        MCA installdirs: config (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA dpm: orte (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA allocator: basic (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: basic (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: inter (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: self (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: sm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: sync (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: tuned (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA io: romio (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA mpool: fake (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA mpool: sm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pml: cm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pml: csum (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pml: v (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA bml: r2 (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA rcache: vma (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: self (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: sm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: tcp (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA topo: unity (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA osc: rdma (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA iof: hnp (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA iof: orted (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA iof: tool (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA oob: tcp (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA odls: default (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ras: slurm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rml: oob (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA routed: binomial (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA routed: direct (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA routed: linear (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA plm: rsh (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA plm: slurm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA filem: rsh (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA errmgr: default (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ess: env (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ess: hnp (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ess: singleton (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ess: slurm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ess: tool (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Would upgrading to the latest version of OpenMPI (1.4.3) resolve this issue?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Bill Lane
</span><br>
<span class="quotelev2">&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation.
</span><br>
<span class="quotelev2">&gt;&gt; IMPORTANT WARNING:  This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by
</span><br>
<span class="quotelev2">&gt;&gt; applicable law.  If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you have received this message in error, please notify us immediately
</span><br>
<span class="quotelev2">&gt;&gt; by calling (310) 423-6428 and destroy the related message.  Thank You for your cooperation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16985.php">Ralph Castain: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<li><strong>Previous message:</strong> <a href="16983.php">Reuti: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<li><strong>In reply to:</strong> <a href="16982.php">Lane, William: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
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
