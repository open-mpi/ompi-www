<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 13:33:03 2007" -->
<!-- isoreceived="20070710173303" -->
<!-- sent="Tue, 10 Jul 2007 11:32:53 -0600" -->
<!-- isosent="20070710173253" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection to HNP lost" -->
<!-- id="C2B91EE5.9DDE%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="p05111b0ac2b963effd38_at_[10.0.1.6]" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 13:32:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3623.php">Scott Atchley: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Previous message:</strong> <a href="3621.php">Christopher D. Maestas: "[OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>In reply to:</strong> <a href="3620.php">Glenn Carver: "[OMPI users] Connection to HNP lost"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3626.php">Brian Barrett: "Re: [OMPI users] Connection to HNP lost"</a>
<li><strong>Reply:</strong> <a href="3626.php">Brian Barrett: "Re: [OMPI users] Connection to HNP lost"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/10/07 11:08 AM, &quot;Glenn Carver&quot; &lt;Glenn.Carver_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd be grateful if someone could explain the meaning of this error
</span><br>
<span class="quotelev1">&gt; message to me and whether it indicates a hardware problem or
</span><br>
<span class="quotelev1">&gt; application software issue:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [node2:11881] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt; [node1:09876] OOB: Connection to HNP lost
</span><br>
<p>This message is nothing to be concerned about - all it indicates is that
<br>
mpirun exited before our daemon on your backend nodes did. It's relatively
<br>
harmless and probably should be eliminated in some future version (except
<br>
when developers are running in debug mode).
<br>
<p>The message can appear when the timing changes between front and backend
<br>
nodes. What happens is:
<br>
<p>1. mpirun detects that your processes have all completed. It then orders the
<br>
shutdown of the daemons on your backend nodes.
<br>
<p>2. each daemon does an orderly shutdown. Just before it terminates, it tells
<br>
mpirun that it is done cleaning up and is about to exit
<br>
<p>3. when mpirun hears that all daemons are done cleaning up, it exits itself.
<br>
This is where the timing issue comes into play - if mpirun exits before the
<br>
daemon, then you get that error message as the daemon is terminating.
<br>
<p>So it's all a question of whether mpirun completes the last few steps to
<br>
exit before the daemons do. In most cases, the daemons complete first as
<br>
they have less to do. Sometimes, mpirun manages to get out first, and you
<br>
get the message.
<br>
<p>I doubt it has anything to do with your hardware issues. Personally, I would
<br>
just ignore the message - I'll see it gets removed in later releases to
<br>
avoid unnecessary confusion.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a small cluster which until last week was just fine.
</span><br>
<span class="quotelev1">&gt; Unfortunately we were hit by a sudden power dip which brought the
</span><br>
<span class="quotelev1">&gt; cluster down and did significant damage to other servers (blew power
</span><br>
<span class="quotelev1">&gt; supplies and disk).  Although the cluster machines and the Infiniband
</span><br>
<span class="quotelev1">&gt; link is up and running jobs I am now getting these errors in user
</span><br>
<span class="quotelev1">&gt; applications which we've never had before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The system messages file reports (for node2):
</span><br>
<span class="quotelev1">&gt; Jul  5 12:08:28 node1 genunix: [ID 408789 kern.notice] NOTICE:
</span><br>
<span class="quotelev1">&gt; tavor0: fault cleared external to device; service available
</span><br>
<span class="quotelev1">&gt; Jul  5 12:08:28 node1 genunix: [ID 451854 kern.notice] NOTICE:
</span><br>
<span class="quotelev1">&gt; tavor0: port 1 up
</span><br>
<span class="quotelev1">&gt; Jul  7 16:18:32 node1 genunix: [ID 408114 kern.info]
</span><br>
<span class="quotelev1">&gt; /pci_at_1,0/pci1022,7450_at_2/pci15b3,5a46_at_1/pci15b3,5a44_at_0 (tavor0) online
</span><br>
<span class="quotelev1">&gt; Jul  7 16:18:32 node1 ib: [ID 842868 kern.info] IB device: daplt_at_0, daplt0
</span><br>
<span class="quotelev1">&gt; Jul  7 16:18:32 node1 genunix: [ID 936769 kern.info] daplt0 is /ib/daplt_at_0
</span><br>
<span class="quotelev1">&gt; Jul  7 16:18:32 node1 genunix: [ID 408114 kern.info] /ib/daplt_at_0
</span><br>
<span class="quotelev1">&gt; (daplt0) online
</span><br>
<span class="quotelev1">&gt; Jul  7 16:18:32 node1 genunix: [ID 834635 kern.info] /ib/daplt_at_0
</span><br>
<span class="quotelev1">&gt; (daplt0) multipath status: degraded, path
</span><br>
<span class="quotelev1">&gt; /pci_at_1,0/pci1022,7450_at_2/pci15
</span><br>
<span class="quotelev1">&gt; b3,5a46_at_1/pci15b3,5a44_at_0 (tavor0) to target address: daplt,0 is
</span><br>
<span class="quotelev1">&gt; online Load balancing: round-robin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if this messages are indicative of a hardware problem,
</span><br>
<span class="quotelev1">&gt; possibly on the Infiniband switch or the host adapters on the cluster
</span><br>
<span class="quotelev1">&gt; machines.  The cluster software has not been altered but there have
</span><br>
<span class="quotelev1">&gt; been small changes to the application codes. But I want to rule out
</span><br>
<span class="quotelev1">&gt; hardware issues because of the power dip first.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyone seen this message before and know whether to investigate
</span><br>
<span class="quotelev1">&gt; hardware first?  I did check the archives but it didn't help. More
</span><br>
<span class="quotelev1">&gt; info provided below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help appreciate, thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;               Glenn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Details:
</span><br>
<span class="quotelev1">&gt; Cluster uses mix of Sun's X4100/X4200 machines linked with Sun
</span><br>
<span class="quotelev1">&gt; supplied Infiniband and host adapters. All machines are running
</span><br>
<span class="quotelev1">&gt; Solaris 10_x86 (11/06) with latest kernel patches
</span><br>
<span class="quotelev1">&gt; Software is Sun Clustertools 7.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Node2 $ ifconfig ibd1
</span><br>
<span class="quotelev1">&gt; ibd1: flags=1000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4&gt; mtu 2044 index 3
</span><br>
<span class="quotelev1">&gt;          inet 192.168.50.202 netmask ffffff00 broadcast 192.168.50.255
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Node1 $ ifconfig ibd1
</span><br>
<span class="quotelev1">&gt; ibd1: flags=1000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4&gt; mtu 2044 index 3
</span><br>
<span class="quotelev1">&gt;          inet 192.168.50.201 netmask ffffff00 broadcast 192.168.50.255
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info -a
</span><br>
<span class="quotelev1">&gt;                  Open MPI: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev1">&gt;     Open MPI SVN revision: 0
</span><br>
<span class="quotelev1">&gt;                  Open RTE: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev1">&gt;     Open RTE SVN revision: 0
</span><br>
<span class="quotelev1">&gt;                      OPAL: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev1">&gt;         OPAL SVN revision: 0
</span><br>
<span class="quotelev1">&gt;             MCA backtrace: printstack (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;             MCA paffinity: solaris (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;             MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA timer: solaris (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: self (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                    MCA io: romio (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: udapl (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: rb (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: udapl (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: env (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                    Prefix: /opt/SUNWhpc/HPC7.0
</span><br>
<span class="quotelev1">&gt;                    Bindir: /opt/SUNWhpc/HPC7.0/bin
</span><br>
<span class="quotelev1">&gt;                    Libdir: /opt/SUNWhpc/HPC7.0/lib
</span><br>
<span class="quotelev1">&gt;                    Incdir: /opt/SUNWhpc/HPC7.0/include
</span><br>
<span class="quotelev1">&gt;                 Pkglibdir: /opt/SUNWhpc/HPC7.0/lib/openmpi
</span><br>
<span class="quotelev1">&gt;                Sysconfdir: /opt/SUNWhpc/HPC7.0/etc
</span><br>
<span class="quotelev1">&gt;   Configured architecture: i386-pc-solaris2.10
</span><br>
<span class="quotelev1">&gt;             Configured by: root
</span><br>
<span class="quotelev1">&gt;             Configured on: Fri Mar 30 13:40:12 EDT 2007
</span><br>
<span class="quotelev1">&gt;            Configure host: burpen-csx10-0
</span><br>
<span class="quotelev1">&gt;                  Built by: root
</span><br>
<span class="quotelev1">&gt;                  Built on: Fri Mar 30 13:57:25 EDT 2007
</span><br>
<span class="quotelev1">&gt;                Built host: burpen-csx10-0
</span><br>
<span class="quotelev1">&gt;                C bindings: yes
</span><br>
<span class="quotelev1">&gt;              C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;        Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;        Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;   Fortran90 bindings size: trivial
</span><br>
<span class="quotelev1">&gt;                C compiler: cc
</span><br>
<span class="quotelev1">&gt;       C compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/cc
</span><br>
<span class="quotelev1">&gt;               C char size: 1
</span><br>
<span class="quotelev1">&gt;               C bool size: 1
</span><br>
<span class="quotelev1">&gt;              C short size: 2
</span><br>
<span class="quotelev1">&gt;                C int size: 4
</span><br>
<span class="quotelev1">&gt;               C long size: 4
</span><br>
<span class="quotelev1">&gt;              C float size: 4
</span><br>
<span class="quotelev1">&gt;             C double size: 8
</span><br>
<span class="quotelev1">&gt;            C pointer size: 4
</span><br>
<span class="quotelev1">&gt;              C char align: 1
</span><br>
<span class="quotelev1">&gt;              C bool align: 1
</span><br>
<span class="quotelev1">&gt;               C int align: 4
</span><br>
<span class="quotelev1">&gt;             C float align: 4
</span><br>
<span class="quotelev1">&gt;            C double align: 4
</span><br>
<span class="quotelev1">&gt;              C++ compiler: CC
</span><br>
<span class="quotelev1">&gt;     C++ compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/CC
</span><br>
<span class="quotelev1">&gt;        Fortran77 compiler: f77
</span><br>
<span class="quotelev1">&gt;    Fortran77 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f77
</span><br>
<span class="quotelev1">&gt;        Fortran90 compiler: f95
</span><br>
<span class="quotelev1">&gt;    Fortran90 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f95
</span><br>
<span class="quotelev1">&gt;         Fort integer size: 4
</span><br>
<span class="quotelev1">&gt;         Fort logical size: 4
</span><br>
<span class="quotelev1">&gt;   Fort logical value true: 1
</span><br>
<span class="quotelev1">&gt;        Fort have integer1: yes
</span><br>
<span class="quotelev1">&gt;        Fort have integer2: yes
</span><br>
<span class="quotelev1">&gt;        Fort have integer4: yes
</span><br>
<span class="quotelev1">&gt;        Fort have integer8: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer16: no
</span><br>
<span class="quotelev1">&gt;           Fort have real4: yes
</span><br>
<span class="quotelev1">&gt;           Fort have real8: yes
</span><br>
<span class="quotelev1">&gt;          Fort have real16: no
</span><br>
<span class="quotelev1">&gt;        Fort have complex8: yes
</span><br>
<span class="quotelev1">&gt;       Fort have complex16: yes
</span><br>
<span class="quotelev1">&gt;       Fort have complex32: no
</span><br>
<span class="quotelev1">&gt;        Fort integer1 size: 1
</span><br>
<span class="quotelev1">&gt;        Fort integer2 size: 2
</span><br>
<span class="quotelev1">&gt;        Fort integer4 size: 4
</span><br>
<span class="quotelev1">&gt;        Fort integer8 size: 8
</span><br>
<span class="quotelev1">&gt;       Fort integer16 size: -1
</span><br>
<span class="quotelev1">&gt;            Fort real size: 4
</span><br>
<span class="quotelev1">&gt;           Fort real4 size: 4
</span><br>
<span class="quotelev1">&gt;           Fort real8 size: 8
</span><br>
<span class="quotelev1">&gt;          Fort real16 size: -1
</span><br>
<span class="quotelev1">&gt;        Fort dbl prec size: 4
</span><br>
<span class="quotelev1">&gt;            Fort cplx size: 4
</span><br>
<span class="quotelev1">&gt;        Fort dbl cplx size: 4
</span><br>
<span class="quotelev1">&gt;           Fort cplx8 size: 8
</span><br>
<span class="quotelev1">&gt;          Fort cplx16 size: 16
</span><br>
<span class="quotelev1">&gt;          Fort cplx32 size: -1
</span><br>
<span class="quotelev1">&gt;        Fort integer align: 4
</span><br>
<span class="quotelev1">&gt;       Fort integer1 align: 1
</span><br>
<span class="quotelev1">&gt;       Fort integer2 align: 2
</span><br>
<span class="quotelev1">&gt;       Fort integer4 align: 4
</span><br>
<span class="quotelev1">&gt;       Fort integer8 align: 4
</span><br>
<span class="quotelev1">&gt;      Fort integer16 align: -1
</span><br>
<span class="quotelev1">&gt;           Fort real align: 4
</span><br>
<span class="quotelev1">&gt;          Fort real4 align: 4
</span><br>
<span class="quotelev1">&gt;          Fort real8 align: 4
</span><br>
<span class="quotelev1">&gt;         Fort real16 align: -1
</span><br>
<span class="quotelev1">&gt;       Fort dbl prec align: 4
</span><br>
<span class="quotelev1">&gt;           Fort cplx align: 4
</span><br>
<span class="quotelev1">&gt;       Fort dbl cplx align: 4
</span><br>
<span class="quotelev1">&gt;          Fort cplx8 align: 4
</span><br>
<span class="quotelev1">&gt;         Fort cplx16 align: 4
</span><br>
<span class="quotelev1">&gt;         Fort cplx32 align: -1
</span><br>
<span class="quotelev1">&gt;               C profiling: yes
</span><br>
<span class="quotelev1">&gt;             C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;       Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ exceptions: yes
</span><br>
<span class="quotelev1">&gt;            Thread support: no
</span><br>
<span class="quotelev1">&gt;              Build CFLAGS: -DNDEBUG -xtarget=opteron -xarch=sse2 -xprefetch
</span><br>
<span class="quotelev1">&gt;                            -xprefetch_level=2 -xvector=simd
</span><br>
<span class="quotelev1">&gt; -xdepend=yes -xbuiltin=%all
</span><br>
<span class="quotelev1">&gt;                            -xO5
</span><br>
<span class="quotelev1">&gt;            Build CXXFLAGS: -DNDEBUG -xtarget=opteron -xarch=sse2 -xprefetch
</span><br>
<span class="quotelev1">&gt;                            -xprefetch_level=2 -xvector=simd
</span><br>
<span class="quotelev1">&gt; -xdepend=yes -xbuiltin=%all
</span><br>
<span class="quotelev1">&gt;                            -xO5
</span><br>
<span class="quotelev1">&gt;              Build FFLAGS: -xtarget=opteron -xarch=sse2 -xprefetch
</span><br>
<span class="quotelev1">&gt; -xprefetch_level=2
</span><br>
<span class="quotelev1">&gt;                            -xvector=simd -stackvar -xO5
</span><br>
<span class="quotelev1">&gt;             Build FCFLAGS: -xtarget=opteron -xarch=sse2 -xprefetch
</span><br>
<span class="quotelev1">&gt; -xprefetch_level=2
</span><br>
<span class="quotelev1">&gt;                            -xvector=simd -stackvar -xO5
</span><br>
<span class="quotelev1">&gt;             Build LDFLAGS: -export-dynamic    -R/opt/mx/lib
</span><br>
<span class="quotelev1">&gt; -R/opt/SUNWhpc/HPC7.0/lib
</span><br>
<span class="quotelev1">&gt;                            -R/opt/mx/lib/amd64 -R/opt/SUNWhpc/HPC7.0/lib/amd64
</span><br>
<span class="quotelev1">&gt;                            -R/opt/mx/lib -R/opt/SUNWhpc/HPC7.0/lib
</span><br>
<span class="quotelev1">&gt; -R/opt/mx/lib/amd64
</span><br>
<span class="quotelev1">&gt;                            -R/opt/SUNWhpc/HPC7.0/lib/amd64 -R/opt/mx/lib
</span><br>
<span class="quotelev1">&gt;                            -R/opt/SUNWhpc/HPC7.0/lib -R/opt/mx/lib/amd64
</span><br>
<span class="quotelev1">&gt;                            -R/opt/SUNWhpc/HPC7.0/lib/amd64
</span><br>
<span class="quotelev1">&gt;                Build LIBS: -lsocket -lnsl  -lrt -lm
</span><br>
<span class="quotelev1">&gt;      Wrapper extra CFLAGS:
</span><br>
<span class="quotelev1">&gt;    Wrapper extra CXXFLAGS:
</span><br>
<span class="quotelev1">&gt;      Wrapper extra FFLAGS:
</span><br>
<span class="quotelev1">&gt;     Wrapper extra FCFLAGS:
</span><br>
<span class="quotelev1">&gt;     Wrapper extra LDFLAGS:     -R/opt/mx/lib -R/opt/SUNWhpc/HPC7.0/lib
</span><br>
<span class="quotelev1">&gt; -R/opt/mx/lib/amd64
</span><br>
<span class="quotelev1">&gt;                            -R/opt/SUNWhpc/HPC7.0/lib/amd64
</span><br>
<span class="quotelev1">&gt;        Wrapper extra LIBS:      -lsocket -lnsl -lrt -lm -ldl
</span><br>
<span class="quotelev1">&gt;    Internal debug support: no
</span><br>
<span class="quotelev1">&gt;       MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;           libltdl support: yes
</span><br>
<span class="quotelev1">&gt;     Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt;   mpirun default --prefix: yes
</span><br>
<span class="quotelev1">&gt;                   MCA mca: parameter &quot;mca_param_files&quot; (current value:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &quot;/home/tomcat/.openmpi/mca-params.conf:/opt/SUNWhpc/HPC7.0/etc/openmpi-mca-par
</span><br>
<span class="quotelev1">&gt; ams.conf&quot;)
</span><br>
<span class="quotelev1">&gt;                            Path for MCA configuration files containing
</span><br>
<span class="quotelev1">&gt; default parameter
</span><br>
<span class="quotelev1">&gt;                            values
</span><br>
<span class="quotelev1">&gt;                   MCA mca: parameter &quot;mca_component_path&quot; (current value:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &quot;/opt/SUNWhpc/HPC7.0/lib/openmpi:/home/tomcat/.openmpi/components&quot;)
</span><br>
<span class="quotelev1">&gt;                            Path where to look for Open MPI and ORTE components
</span><br>
<span class="quotelev1">&gt;                   MCA mca: parameter &quot;mca_verbose&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Top-level verbosity parameter
</span><br>
<span class="quotelev1">&gt;                   MCA mca: parameter &quot;mca_component_show_load_errors&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether to show errors for components that
</span><br>
<span class="quotelev1">&gt; failed to load or
</span><br>
<span class="quotelev1">&gt;                            not
</span><br>
<span class="quotelev1">&gt;                   MCA mca: parameter &quot;mca_component_disable_dlopen&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether to attempt to disable opening
</span><br>
<span class="quotelev1">&gt; dynamic components or not
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_param_check&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether you want MPI API parameters checked
</span><br>
<span class="quotelev1">&gt; at run-time or not.
</span><br>
<span class="quotelev1">&gt;                            Possible values are 0 (no checking) and 1
</span><br>
<span class="quotelev1">&gt; (perform checking at
</span><br>
<span class="quotelev1">&gt;                            run-time)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Yield the processor when waiting for MPI
</span><br>
<span class="quotelev1">&gt; communication (for MPI
</span><br>
<span class="quotelev1">&gt;                            processes, will default to 1 when
</span><br>
<span class="quotelev1">&gt; oversubscribing nodes)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                            How often to progress TCP communications (0
</span><br>
<span class="quotelev1">&gt; = never, otherwise
</span><br>
<span class="quotelev1">&gt;                            specified in microseconds)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_show_handle_leaks&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether MPI_FINALIZE shows all MPI handles
</span><br>
<span class="quotelev1">&gt; that were not freed
</span><br>
<span class="quotelev1">&gt;                            or not
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether to actually free MPI objects when
</span><br>
<span class="quotelev1">&gt; their handles are
</span><br>
<span class="quotelev1">&gt;                            freed
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether to show all MCA parameter value
</span><br>
<span class="quotelev1">&gt; during MPI_INIT or not
</span><br>
<span class="quotelev1">&gt;                            (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_show_mca_params_file&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            If mpi_show_mca_params is true, setting
</span><br>
<span class="quotelev1">&gt; this string to a valid
</span><br>
<span class="quotelev1">&gt;                            filename tells Open MPI to dump all the MCA
</span><br>
<span class="quotelev1">&gt; parameter values
</span><br>
<span class="quotelev1">&gt;                            into a file suitable for reading via the
</span><br>
<span class="quotelev1">&gt; mca_param_files
</span><br>
<span class="quotelev1">&gt;                            parameter (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, assume that this job is the only (set
</span><br>
<span class="quotelev1">&gt; of)
</span><br>
<span class="quotelev1">&gt;                            process(es) running on each node and bind
</span><br>
<span class="quotelev1">&gt; processes to
</span><br>
<span class="quotelev1">&gt;                            processors, starting with processor ID 0
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_keep_peer_hostnames&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, save the string hostnames of
</span><br>
<span class="quotelev1">&gt; all MPI peer processes
</span><br>
<span class="quotelev1">&gt;                            (mostly for error / debugging output
</span><br>
<span class="quotelev1">&gt; messages).  This can add
</span><br>
<span class="quotelev1">&gt;                            quite a bit of memory usage to each MPI process.
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_abort_delay&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, print out an identifying
</span><br>
<span class="quotelev1">&gt; message when MPI_ABORT is
</span><br>
<span class="quotelev1">&gt;                            invoked (hostname, PID of the process that
</span><br>
<span class="quotelev1">&gt; called MPI_ABORT) and
</span><br>
<span class="quotelev1">&gt;                            delay for that many seconds before exiting
</span><br>
<span class="quotelev1">&gt; (a negative delay
</span><br>
<span class="quotelev1">&gt;                            value means to never abort).  This allows
</span><br>
<span class="quotelev1">&gt; attaching of a
</span><br>
<span class="quotelev1">&gt;                            debugger before quitting the job.
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: information &quot;mpi_abort_print_stack&quot; (value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, print out a stack trace when
</span><br>
<span class="quotelev1">&gt; MPI_ABORT is invoked
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether to force MPI processes to create
</span><br>
<span class="quotelev1">&gt; connections / warmup
</span><br>
<span class="quotelev1">&gt;                            with *all* peers during MPI_INIT (vs.
</span><br>
<span class="quotelev1">&gt; making connections lazily
</span><br>
<span class="quotelev1">&gt;                            -- upon the first MPI traffic between each
</span><br>
<span class="quotelev1">&gt; process peer pair)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_preconnect_oob&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether to force MPI processes to fully
</span><br>
<span class="quotelev1">&gt; wire-up the OOB system
</span><br>
<span class="quotelev1">&gt;                            between MPI processes.
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether to use the &quot;leave pinned&quot; protocol
</span><br>
<span class="quotelev1">&gt; or not.  Enabling
</span><br>
<span class="quotelev1">&gt;                            this setting can help bandwidth performance
</span><br>
<span class="quotelev1">&gt; when repeatedly
</span><br>
<span class="quotelev1">&gt;                            sending and receiving large messages with
</span><br>
<span class="quotelev1">&gt; the same buffers over
</span><br>
<span class="quotelev1">&gt;                            RDMA-based networks.
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_leave_pinned_pipeline&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether to use the &quot;leave pinned pipeline&quot;
</span><br>
<span class="quotelev1">&gt; protocol or not.
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Top-level ORTE debug switch
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_no_daemonize&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether to properly daemonize the ORTE daemons or
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_base_user_debugger&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;totalview
</span><br>
<span class="quotelev1">&gt;                            @mpirun@ -a @mpirun_args@ : fxp @mpirun@ -a
</span><br>
<span class="quotelev1">&gt; @mpirun_args@&quot;)
</span><br>
<span class="quotelev1">&gt;                            Sequence of user-level debuggers to search
</span><br>
<span class="quotelev1">&gt; for in orterun
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_abort_timeout&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            Time to wait [in seconds] before giving up
</span><br>
<span class="quotelev1">&gt; on aborting an ORTE
</span><br>
<span class="quotelev1">&gt;                            operation
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_timing&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Request that critical timing loops be measured
</span><br>
<span class="quotelev1">&gt;                  MCA opal: parameter &quot;opal_signal&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;6,10,8,11&quot;)
</span><br>
<span class="quotelev1">&gt;                            If a signal is received, display the stack
</span><br>
<span class="quotelev1">&gt; trace frame
</span><br>
<span class="quotelev1">&gt;             MCA backtrace: parameter &quot;backtrace&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; backtrace framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;             MCA backtrace: parameter &quot;backtrace_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the backtrace framework
</span><br>
<span class="quotelev1">&gt; (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;             MCA backtrace: parameter &quot;backtrace_printstack_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA memory: parameter &quot;memory&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; memory framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA memory: parameter &quot;memory_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the memory framework (0
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;             MCA paffinity: parameter &quot;paffinity&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; paffinity framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;             MCA paffinity: parameter &quot;paffinity_solaris_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            Priority of the solaris paffinity component
</span><br>
<span class="quotelev1">&gt;             MCA maffinity: parameter &quot;maffinity&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; maffinity framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;             MCA maffinity: parameter &quot;maffinity_first_use_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            Priority of the first_use maffinity component
</span><br>
<span class="quotelev1">&gt;                 MCA timer: parameter &quot;timer&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; timer framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA timer: parameter &quot;timer_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the timer framework (0
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA timer: parameter &quot;timer_solaris_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: parameter &quot;allocator&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; allocator framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: parameter &quot;allocator_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the allocator framework
</span><br>
<span class="quotelev1">&gt; (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: parameter &quot;allocator_basic_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: parameter &quot;allocator_bucket_num_buckets&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: parameter &quot;allocator_bucket_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; coll framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the coll framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_basic_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            Priority of the basic coll component
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_basic_crossover&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                            Minimum number of processes in a
</span><br>
<span class="quotelev1">&gt; communicator before using the
</span><br>
<span class="quotelev1">&gt;                            logarithmic algorithms
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_self_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Priority of the sm coll component
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_control_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                            Length of the control data -- should
</span><br>
<span class="quotelev1">&gt; usually be either the
</span><br>
<span class="quotelev1">&gt;                            length of a cache line on most SMPs, or the
</span><br>
<span class="quotelev1">&gt; size of a page on
</span><br>
<span class="quotelev1">&gt;                            machines that support direct memory
</span><br>
<span class="quotelev1">&gt; affinity page placement (in
</span><br>
<span class="quotelev1">&gt;                            bytes)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_bootstrap_filename&quot;
</span><br>
<span class="quotelev1">&gt; (current value:
</span><br>
<span class="quotelev1">&gt;                            &quot;shared_mem_sm_bootstrap&quot;)
</span><br>
<span class="quotelev1">&gt;                            Filename (in the Open MPI session
</span><br>
<span class="quotelev1">&gt; directory) of the coll sm
</span><br>
<span class="quotelev1">&gt;                            component bootstrap rendezvous mmap file
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_bootstrap_num_segments&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                            Number of segments in the bootstrap file
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_fragment_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;8192&quot;)
</span><br>
<span class="quotelev1">&gt;                            Fragment size (in bytes) used for passing
</span><br>
<span class="quotelev1">&gt; data through shared
</span><br>
<span class="quotelev1">&gt;                            memory (will be rounded up to the nearest
</span><br>
<span class="quotelev1">&gt; control_size size)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_mpool&quot; (current value: &quot;sm&quot;)
</span><br>
<span class="quotelev1">&gt;                            Name of the mpool component to use
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_comm_in_use_flags&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;                            Number of &quot;in use&quot; flags, used to mark a
</span><br>
<span class="quotelev1">&gt; message passing area
</span><br>
<span class="quotelev1">&gt;                            segment as currently being used or not
</span><br>
<span class="quotelev1">&gt; (must be &gt;= 2 and &lt;=
</span><br>
<span class="quotelev1">&gt;                            comm_num_segments)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_comm_num_segments&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                            Number of segments in each communicator's
</span><br>
<span class="quotelev1">&gt; shared memory message
</span><br>
<span class="quotelev1">&gt;                            passing area (must be &gt;= 2, and must be a multiple
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt;                            comm_in_use_flags)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_tree_degree&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                            Degree of the tree for tree-based
</span><br>
<span class="quotelev1">&gt; operations (must be =&gt; 1 and
</span><br>
<span class="quotelev1">&gt;                            &lt;= min(control_size, 255))
</span><br>
<span class="quotelev1">&gt;                  MCA coll: information
</span><br>
<span class="quotelev1">&gt; &quot;coll_sm_shared_mem_used_bootstrap&quot; (value: &quot;160&quot;)
</span><br>
<span class="quotelev1">&gt;                            Amount of shared memory used in the shared
</span><br>
<span class="quotelev1">&gt; memory bootstrap area
</span><br>
<span class="quotelev1">&gt;                            (in bytes)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_info_num_procs&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                            Number of processes to use for the calculation of
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt;                            shared_mem_size MCA information parameter
</span><br>
<span class="quotelev1">&gt; (must be =&gt; 2)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: information &quot;coll_sm_shared_mem_used_data&quot;
</span><br>
<span class="quotelev1">&gt; (value: &quot;548864&quot;)
</span><br>
<span class="quotelev1">&gt;                            Amount of shared memory used in the shared
</span><br>
<span class="quotelev1">&gt; memory data area for
</span><br>
<span class="quotelev1">&gt;                            info_num_procs processes (in bytes)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_tuned_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;                            Priority of the tuned coll component
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter
</span><br>
<span class="quotelev1">&gt; &quot;coll_tuned_pre_allocate_memory_comm_size_limit&quot;
</span><br>
<span class="quotelev1">&gt;                            (current value: &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;                            Size of communicator were we stop
</span><br>
<span class="quotelev1">&gt; pre-allocating memory for the
</span><br>
<span class="quotelev1">&gt;                            fixed internal buffer used for message
</span><br>
<span class="quotelev1">&gt; requests etc that is hung
</span><br>
<span class="quotelev1">&gt;                            off the communicator data segment. I.e. if
</span><br>
<span class="quotelev1">&gt; you have a 100'000
</span><br>
<span class="quotelev1">&gt;                            nodes you might not want to pre-allocate
</span><br>
<span class="quotelev1">&gt; 200'000 request handle
</span><br>
<span class="quotelev1">&gt;                            slots per communicator instance!
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_tuned_init_tree_fanout&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                            Inital fanout used in the tree topologies
</span><br>
<span class="quotelev1">&gt; for each communicator.
</span><br>
<span class="quotelev1">&gt;                            This is only an initial guess, if a tuned
</span><br>
<span class="quotelev1">&gt; collective needs a
</span><br>
<span class="quotelev1">&gt;                            different fanout for an operation, it build
</span><br>
<span class="quotelev1">&gt; it dynamically. This
</span><br>
<span class="quotelev1">&gt;                            parameter is only for the first guess and
</span><br>
<span class="quotelev1">&gt; might save a little
</span><br>
<span class="quotelev1">&gt;                            time
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_tuned_init_chain_fanout&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                            Inital fanout used in the chain (fanout
</span><br>
<span class="quotelev1">&gt; followed by pipeline)
</span><br>
<span class="quotelev1">&gt;                            topologies for each communicator. This is
</span><br>
<span class="quotelev1">&gt; only an initial guess,
</span><br>
<span class="quotelev1">&gt;                            if a tuned collective needs a different
</span><br>
<span class="quotelev1">&gt; fanout for an operation,
</span><br>
<span class="quotelev1">&gt;                            it build it dynamically. This parameter is
</span><br>
<span class="quotelev1">&gt; only for the first
</span><br>
<span class="quotelev1">&gt;                            guess and might save a little time
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_tuned_use_dynamic_rules&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Switch used to decide if we use static
</span><br>
<span class="quotelev1">&gt; (compiled/if statements)
</span><br>
<span class="quotelev1">&gt;                            or dynamic (built at runtime) decision function
</span><br>
<span class="quotelev1">&gt; rules
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter &quot;io_base_freelist_initial_size&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                            Initial MPI-2 IO request freelist size
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter &quot;io_base_freelist_max_size&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                            Max size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter &quot;io_base_freelist_increment&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                            Increment size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter &quot;io&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; io framework (&lt;none&gt;
</span><br>
<span class="quotelev1">&gt;                            means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter &quot;io_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the io framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter &quot;io_romio_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            Priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter &quot;io_romio_delete_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            Delete priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter
</span><br>
<span class="quotelev1">&gt; &quot;io_romio_enable_parallel_optimizations&quot; (current
</span><br>
<span class="quotelev1">&gt;                            value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Enable set of Open MPI-added options to
</span><br>
<span class="quotelev1">&gt; improve collective file
</span><br>
<span class="quotelev1">&gt;                            i/o performance
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; mpool framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the mpool framework (0
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;bucket&quot;)
</span><br>
<span class="quotelev1">&gt;                            Name of allocator component to use with sm mpool
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_sm_max_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;536870912&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum size of the sm mpool shared memory file
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_sm_min_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;134217728&quot;)
</span><br>
<span class="quotelev1">&gt;                            Minimum size of the sm mpool shared memory file
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_sm_per_peer_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;33554432&quot;)
</span><br>
<span class="quotelev1">&gt;                            Size (in bytes) to allocate per local peer
</span><br>
<span class="quotelev1">&gt; in the sm mpool
</span><br>
<span class="quotelev1">&gt;                            shared memory file, bounded by min_size and
</span><br>
<span class="quotelev1">&gt; max_size
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_sm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_udapl_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_base_use_mem_hooks&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            use memory hooks for deregistering freed memory
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_use_mem_hooks&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            (deprecated, use mpool_base_use_mem_hooks)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; pml framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the pml framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_cm_free_list_num&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                            Initial size of request free lists
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_cm_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum size of request free lists
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_cm_free_list_inc&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                            Number of elements to add when growing 
</span><br>
<span class="quotelev1">&gt; request free lists
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_cm_priority&quot; (current value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;                            CM PML selection priority
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_free_list_num&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_free_list_max&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_free_list_inc&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_priority&quot; (current value: &quot;20&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_eager_limit&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_send_pipeline_depth&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;3&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_recv_pipeline_depth&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA bml: parameter &quot;bml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; bml framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be 
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA bml: parameter &quot;bml_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the bml framework (0 = 
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA bml: parameter &quot;bml_r2_show_unreach_errors&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Show error message when procs are unreachable
</span><br>
<span class="quotelev1">&gt;                   MCA bml: parameter &quot;bml_r2_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: parameter &quot;rcache&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; rcache framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be 
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: parameter &quot;rcache_base_verbose&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the rcache framework (0 
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: parameter &quot;rcache_rb_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: parameter &quot;rcache_vma_mru_len&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                            The maximum size IN ENTRIES of the MRU 
</span><br>
<span class="quotelev1">&gt; (most recently used)
</span><br>
<span class="quotelev1">&gt;                            rcache list
</span><br>
<span class="quotelev1">&gt;                MCA rcache: parameter &quot;rcache_vma_mru_size&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;1073741824&quot;)
</span><br>
<span class="quotelev1">&gt;                            The maximum size IN BYTES of the MRU (most 
</span><br>
<span class="quotelev1">&gt; recently used) rcache
</span><br>
<span class="quotelev1">&gt;                            list
</span><br>
<span class="quotelev1">&gt;                MCA rcache: parameter &quot;rcache_vma_priority&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_base_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            If btl_base_debug is 1 standard debug is 
</span><br>
<span class="quotelev1">&gt; output, if &gt; 1 verbose
</span><br>
<span class="quotelev1">&gt;                            debug is output
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; btl framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be 
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the btl framework (0 = 
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_free_list_num&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Number of fragments by default
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_free_list_max&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum number of fragments
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_free_list_inc&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                            Increment by this number of fragments
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_eager_limit&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                            Eager size fragmeng (before the rendez-vous 
</span><br>
<span class="quotelev1">&gt; ptotocol)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_min_send_size&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;                            Minimum fragment size after the rendez-vous
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_max_send_size&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum fragment size after the rendez-vous
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_min_rdma_size&quot; (current value:
</span><br>
<span class="quotelev1">&gt;                            &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum fragment size for the RDMA transfer
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_max_rdma_size&quot; (current value:
</span><br>
<span class="quotelev1">&gt;                            &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum fragment size for the RDMA transfer
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_exclusivity&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                            Device exclusivity
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_flags&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            Active behavior flags
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;65535&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_latency&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_max_procs&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_mpool&quot; (current value: &quot;sm&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_max_frag_size&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_size_of_cb_queue&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_cb_lazy_free_freq&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;120&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_if_include&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;lo&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_endpoint_cache&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;30720&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_min_send_size&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_flags&quot; (current value: &quot;122&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_free_list_num&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                            Initial size of free lists (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_free_list_max&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum size of free lists (-1 = infinite, 
</span><br>
<span class="quotelev1">&gt; otherwise must be &gt;=
</span><br>
<span class="quotelev1">&gt;                            1).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_free_list_inc&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                            Increment size of free lists (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_mpool&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;udapl&quot;)
</span><br>
<span class="quotelev1">&gt;                            Name of the memory pool to be used.
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_max_modules&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum number of supported HCAs.
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_num_recvs&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                            Total number of receive buffers to keep 
</span><br>
<span class="quotelev1">&gt; posted per endpoint
</span><br>
<span class="quotelev1">&gt;                            (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_num_sends&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;7&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum number of sends to post on an 
</span><br>
<span class="quotelev1">&gt; endpoint (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_sr_win&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                            Window size at which point an explicit 
</span><br>
<span class="quotelev1">&gt; credit message will be
</span><br>
<span class="quotelev1">&gt;                            generated (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_eager_rdma_num&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                            Number of RDMA buffers to allocate for 
</span><br>
<span class="quotelev1">&gt; small messages (must be
</span><br>
<span class="quotelev2">&gt;&gt; = 1).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_max_eager_rdma_peers&quot; 
</span><br>
<span class="quotelev1">&gt; (current value:
</span><br>
<span class="quotelev1">&gt;                            &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum number of peers allowed to use RDMA 
</span><br>
<span class="quotelev1">&gt; for short messages
</span><br>
<span class="quotelev1">&gt;                            (independently RDMA will still be used for 
</span><br>
<span class="quotelev1">&gt; large messages, (must
</span><br>
<span class="quotelev1">&gt;                            be &gt;= 0; if zero then RDMA will not be used for 
</span><br>
<span class="quotelev1">&gt; short
</span><br>
<span class="quotelev1">&gt;                            messages).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_eager_rdma_win&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;28&quot;)
</span><br>
<span class="quotelev1">&gt;                            Window size at which point an explicit 
</span><br>
<span class="quotelev1">&gt; credit message will be
</span><br>
<span class="quotelev1">&gt;                            generated (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_timeout&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;10000000&quot;)
</span><br>
<span class="quotelev1">&gt;                            Connection timeout, in microseconds.
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_conn_priv_data&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Use connect private data to establish 
</span><br>
<span class="quotelev1">&gt; connections (not supported
</span><br>
<span class="quotelev1">&gt;                            by all uDAPL implementations).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_async_events&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;100000000&quot;)
</span><br>
<span class="quotelev1">&gt;                            The asynchronous event queue will only be 
</span><br>
<span class="quotelev1">&gt; checked after entering
</span><br>
<span class="quotelev1">&gt;                            progress this number of times.
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_buffer_alignment&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                            Preferred communication buffer alignment, 
</span><br>
<span class="quotelev1">&gt; in bytes (must be &gt;=
</span><br>
<span class="quotelev1">&gt;                            1).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_async_evd_qlen&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                            The asynchronous event dispatcher queue length.
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_conn_evd_qlen&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                            The connection event dispatcher queue 
</span><br>
<span class="quotelev1">&gt; length is a function of
</span><br>
<span class="quotelev1">&gt;                            the number of connections expected.
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_dto_evd_qlen&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                            The data transfer operation event 
</span><br>
<span class="quotelev1">&gt; dispatcher queue length is a
</span><br>
<span class="quotelev1">&gt;                            function of the number of connections as 
</span><br>
<span class="quotelev1">&gt; well as the maximum
</span><br>
<span class="quotelev1">&gt;                            number of outstanding data transfer operations.
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_max_request_dtos&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;76&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum number of outstanding submitted 
</span><br>
<span class="quotelev1">&gt; sends and rdma
</span><br>
<span class="quotelev1">&gt;                            operations per endpoint, (see Section 6.6.6 
</span><br>
<span class="quotelev1">&gt; of uDAPL Spec.).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_max_recv_dtos&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum number of outstanding submitted 
</span><br>
<span class="quotelev1">&gt; receive operations per
</span><br>
<span class="quotelev1">&gt;                            endpoint, (see Section 6.6.6 of uDAPL Spec.).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_exclusivity&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;1014&quot;)
</span><br>
<span class="quotelev1">&gt;                            uDAPL BTL exclusivity (must be &gt;= 0).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_eager_limit&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;8192&quot;)
</span><br>
<span class="quotelev1">&gt;                            Eager send limit, in bytes (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_min_send_size&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;16384&quot;)
</span><br>
<span class="quotelev1">&gt;                            Minimum send size, in bytes (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_max_send_size&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum send size, in bytes (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_min_rdma_size&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;524288&quot;)
</span><br>
<span class="quotelev1">&gt;                            Minimum RDMA size, in bytes (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_max_rdma_size&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum RDMA size, in bytes (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_flags&quot; (current value: &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;                            BTL flags, added together: PUT=2 (cannot be 0).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_bandwidth&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;225&quot;)
</span><br>
<span class="quotelev1">&gt;                            Approximate maximum bandwidth of network 
</span><br>
<span class="quotelev1">&gt; (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_udapl_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_base_include&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_base_exclude&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_base_warn_component_unused&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            This parameter is used to turn on warning 
</span><br>
<span class="quotelev1">&gt; messages when certain
</span><br>
<span class="quotelev1">&gt;                            NICs are not used
</span><br>
<span class="quotelev1">&gt;                   MCA mtl: parameter &quot;mtl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; mtl framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be 
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA mtl: parameter &quot;mtl_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the mtl framework (0 = 
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA topo: parameter &quot;topo&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; topo framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be 
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA topo: parameter &quot;topo_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the topo framework (0 = 
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; osc framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be 
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the osc framework (0 = 
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc_pt2pt_no_locks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Enable optimizations available only if 
</span><br>
<span class="quotelev1">&gt; MPI_LOCK is not used.
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc_pt2pt_eager_limit&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;16384&quot;)
</span><br>
<span class="quotelev1">&gt;                            Max size of eagerly sent data
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc_pt2pt_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: parameter &quot;errmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; errmgr framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be 
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: parameter &quot;errmgr_hnp_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: parameter &quot;errmgr_hnp_priority&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: parameter &quot;errmgr_orted_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: parameter &quot;errmgr_orted_priority&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: parameter &quot;errmgr_proxy_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: parameter &quot;errmgr_proxy_priority&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: parameter &quot;gpr_base_maxsize&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: parameter &quot;gpr_base_blocksize&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: parameter &quot;gpr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; gpr framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be 
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: parameter &quot;gpr_null_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: parameter &quot;gpr_proxy_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: parameter &quot;gpr_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: parameter &quot;gpr_replica_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: parameter &quot;gpr_replica_isolate&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: parameter &quot;gpr_replica_priority&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: parameter &quot;iof_base_window_size&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: parameter &quot;iof_base_service&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: parameter &quot;iof&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; iof framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be 
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: parameter &quot;iof_proxy_debug&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: parameter &quot;iof_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: parameter &quot;iof_svc_debug&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: parameter &quot;iof_svc_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: parameter &quot;ns&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; ns framework (&lt;none&gt;
</span><br>
<span class="quotelev1">&gt;                            means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: parameter &quot;ns_proxy_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: parameter &quot;ns_proxy_maxsize&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: parameter &quot;ns_proxy_blocksize&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: parameter &quot;ns_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: parameter &quot;ns_replica_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: parameter &quot;ns_replica_isolate&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: parameter &quot;ns_replica_maxsize&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: parameter &quot;ns_replica_blocksize&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: parameter &quot;ns_replica_priority&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; oob framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be 
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the oob framework (0 = 
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;60&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_include&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_exclude&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_connect_timeout&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;600&quot;)
</span><br>
<span class="quotelev1">&gt;                            connect() timeout in seconds, before trying 
</span><br>
<span class="quotelev1">&gt; next interface
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_connect_sleep&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Enable (1) /Disable (0)  random sleep for 
</span><br>
<span class="quotelev1">&gt; connection wireup
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_listen_mode&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;event&quot;)
</span><br>
<span class="quotelev1">&gt;                            Mode for HNP to accept incoming connections: event,
</span><br>
<span class="quotelev1">&gt;                            listen_thread
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_listen_thread_max_queue&quot; 
</span><br>
<span class="quotelev1">&gt; (current value:
</span><br>
<span class="quotelev1">&gt;                            &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            High water mark for queued accepted socket list 
</span><br>
<span class="quotelev1">&gt; size
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_listen_thread_max_time&quot; 
</span><br>
<span class="quotelev1">&gt; (current value:
</span><br>
<span class="quotelev1">&gt;                            &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum amount of time (in milliseconds) to 
</span><br>
<span class="quotelev1">&gt; wait between
</span><br>
<span class="quotelev1">&gt;                            processing accepted socket list
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_accept_spin_count&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            Number of times to let accept return 
</span><br>
<span class="quotelev1">&gt; EWOULDBLOCK before updating
</span><br>
<span class="quotelev1">&gt;                            accepted socket list
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter &quot;ras&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter &quot;ras_dash_host_priority&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;5&quot;)
</span><br>
<span class="quotelev1">&gt;                            Selection priority for the dash_host RAS component
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter &quot;ras_gridengine_debug&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Enable debugging output for the gridengine 
</span><br>
<span class="quotelev1">&gt; ras component
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter &quot;ras_gridengine_priority&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                            Priority of the gridengine ras component
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter &quot;ras_gridengine_verbose&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Enable verbose output for the gridengine 
</span><br>
<span class="quotelev1">&gt; ras component
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter &quot;ras_gridengine_show_jobid&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Show the JOB_ID of the Grid Engine job
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter &quot;ras_localhost_priority&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Selection priority for the localhost RAS component
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter &quot;ras_tm_priority&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                            Priority of the tm ras component
</span><br>
<span class="quotelev1">&gt;                   MCA rds: parameter &quot;rds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: parameter &quot;rds_hostfile_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Toggle debug output for hostfile RDS component
</span><br>
<span class="quotelev1">&gt;                   MCA rds: parameter &quot;rds_hostfile_path&quot; (current value:
</span><br>
<span class="quotelev1">&gt;                            &quot;/opt/SUNWhpc/HPC7.0/etc/openmpi-default-hostfile&quot;)
</span><br>
<span class="quotelev1">&gt;                            ORTE Host filename
</span><br>
<span class="quotelev1">&gt;                   MCA rds: parameter &quot;rds_hostfile_priority&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: parameter &quot;rds_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: parameter &quot;rds_resfile_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Toggle debug output for resfile RDS component
</span><br>
<span class="quotelev1">&gt;                   MCA rds: parameter &quot;rds_resfile_name&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            ORTE Resource filename
</span><br>
<span class="quotelev1">&gt;                   MCA rds: parameter &quot;rds_resfile_priority&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the rmaps framework
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_schedule_policy&quot; 
</span><br>
<span class="quotelev1">&gt; (current value:
</span><br>
<span class="quotelev1">&gt;                            &quot;unspec&quot;)
</span><br>
<span class="quotelev1">&gt;                            Scheduling Policy for RMAPS. [slot | node]
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_pernode&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Launch one ppn as directed
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_n_pernode&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Launch n procs/node
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_schedule_local&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, allow scheduling MPI 
</span><br>
<span class="quotelev1">&gt; applications on the same node
</span><br>
<span class="quotelev1">&gt;                            as mpirun (default).  If zero, do not 
</span><br>
<span class="quotelev1">&gt; schedule any MPI
</span><br>
<span class="quotelev1">&gt;                            applications on the same node as mpirun
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_no_oversubscribe&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, then do not allow 
</span><br>
<span class="quotelev1">&gt; oversubscription of nodes - mpirun
</span><br>
<span class="quotelev1">&gt;                            will return an error if there aren't enough 
</span><br>
<span class="quotelev1">&gt; nodes to launch all
</span><br>
<span class="quotelev1">&gt;                            processes without oversubscribing
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; rmaps framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be 
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_round_robin_debug&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Toggle debug output for Round Robin RMAPS component
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_round_robin_priority&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Selection priority for Round Robin RMAPS component
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: parameter &quot;rmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; rmgr framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be 
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: parameter &quot;rmgr_proxy_priority&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: parameter &quot;rmgr_urm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA rml: parameter &quot;rml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; rml framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be 
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA rml: parameter &quot;rml_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the rml framework (0 = 
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA rml: parameter &quot;rml_oob_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_base_reuse_daemons&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, reuse daemons to launch 
</span><br>
<span class="quotelev1">&gt; dynamically spawned
</span><br>
<span class="quotelev1">&gt;                            processes.  If zero, do not reuse daemons (default)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; pls framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be 
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the pls framework (0 = 
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_gridengine_debug&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Enable debugging of gridengine pls component
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_gridengine_verbose&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Enable verbose output of the gridengine 
</span><br>
<span class="quotelev1">&gt; qrsh -inherit command
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_gridengine_priority&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                            Priority of the gridengine pls component
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_gridengine_orted&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                            The command name that the gridengine pls 
</span><br>
<span class="quotelev1">&gt; component will invoke
</span><br>
<span class="quotelev1">&gt;                            for the ORTE daemon
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_rsh_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether or not to enable debugging output 
</span><br>
<span class="quotelev1">&gt; for the rsh pls
</span><br>
<span class="quotelev1">&gt;                            component (0 or 1)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_rsh_num_concurrent&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;                            How many pls_rsh_agent instances to invoke 
</span><br>
<span class="quotelev1">&gt; concurrently (must be
</span><br>
<span class="quotelev2">&gt;&gt; 0)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_rsh_force_rsh&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Force the launcher to always use rsh, even 
</span><br>
<span class="quotelev1">&gt; for local daemons
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_rsh_orted&quot; (current value: &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                            The command name that the rsh pls component 
</span><br>
<span class="quotelev1">&gt; will invoke for the
</span><br>
<span class="quotelev1">&gt;                            ORTE daemon
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_rsh_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            Priority of the rsh pls component
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_rsh_delay&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Delay (in seconds) between invocations of 
</span><br>
<span class="quotelev1">&gt; the remote agent, but
</span><br>
<span class="quotelev1">&gt;                            only used when the &quot;debug&quot; MCA parameter is 
</span><br>
<span class="quotelev1">&gt; true, or the
</span><br>
<span class="quotelev1">&gt;                            top-level MCA debugging is enabled 
</span><br>
<span class="quotelev1">&gt; (otherwise this value is
</span><br>
<span class="quotelev1">&gt;                            ignored)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_rsh_reap&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            If set to 1, wait for all the processes to 
</span><br>
<span class="quotelev1">&gt; complete before
</span><br>
<span class="quotelev1">&gt;                            exiting.  Otherwise, quit immediately -- 
</span><br>
<span class="quotelev1">&gt; without waiting for
</span><br>
<span class="quotelev1">&gt;                            confirmation that all other processes in the job 
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt;                            completed.
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_rsh_assume_same_shell&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            If set to 1, assume that the shell on the 
</span><br>
<span class="quotelev1">&gt; remote node is the
</span><br>
<span class="quotelev1">&gt;                            same as the shell on the local node. 
</span><br>
<span class="quotelev1">&gt; Otherwise, probe for what
</span><br>
<span class="quotelev1">&gt;                            the remote shell.
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_rsh_agent&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;ssh : rsh&quot;)
</span><br>
<span class="quotelev1">&gt;                            The command used to launch executables on 
</span><br>
<span class="quotelev1">&gt; remote nodes
</span><br>
<span class="quotelev1">&gt;                            (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_tm_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Enable debugging of the TM pls
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_tm_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Enable verbose output of the TM pls
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_tm_priority&quot; (current value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                            Default selection priority
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_tm_orted&quot; (current value: &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                            Command to use to start proxy orted
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_tm_want_path_check&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether the launching process should check 
</span><br>
<span class="quotelev1">&gt; for the pls_tm_orted
</span><br>
<span class="quotelev1">&gt;                            executable in the PATH before launching 
</span><br>
<span class="quotelev1">&gt; (the TM API does not
</span><br>
<span class="quotelev1">&gt;                            give an idication of failure; this is a 
</span><br>
<span class="quotelev1">&gt; somewhat-lame
</span><br>
<span class="quotelev1">&gt;                            workaround; non-zero values enable this check)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: parameter &quot;sds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for the 
</span><br>
<span class="quotelev1">&gt; sds framework
</span><br>
<span class="quotelev1">&gt;                            (&lt;none&gt; means &quot;use all components that can be 
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: parameter &quot;sds_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the sds framework (0 = 
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: parameter &quot;sds_env_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: parameter &quot;sds_pipe_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: parameter &quot;sds_seed_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: parameter &quot;sds_singleton_priority&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
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
<li><strong>Next message:</strong> <a href="3623.php">Scott Atchley: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Previous message:</strong> <a href="3621.php">Christopher D. Maestas: "[OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>In reply to:</strong> <a href="3620.php">Glenn Carver: "[OMPI users] Connection to HNP lost"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3626.php">Brian Barrett: "Re: [OMPI users] Connection to HNP lost"</a>
<li><strong>Reply:</strong> <a href="3626.php">Brian Barrett: "Re: [OMPI users] Connection to HNP lost"</a>
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
