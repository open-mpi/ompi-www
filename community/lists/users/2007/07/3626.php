<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 14:46:28 2007" -->
<!-- isoreceived="20070710184628" -->
<!-- sent="Tue, 10 Jul 2007 12:46:06 -0600" -->
<!-- isosent="20070710184606" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection to HNP lost" -->
<!-- id="DF8A4476-B5FA-4EA6-A7E8-90A7738B29A3_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2B91EE5.9DDE%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 14:46:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3627.php">Tim Prins: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Previous message:</strong> <a href="3625.php">George Bosilca: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>In reply to:</strong> <a href="3622.php">Ralph H Castain: "Re: [OMPI users] Connection to HNP lost"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3634.php">Glenn Carver: "Re: [OMPI users] Connection to HNP lost"</a>
<li><strong>Reply:</strong> <a href="3634.php">Glenn Carver: "Re: [OMPI users] Connection to HNP lost"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What Ralph said is generally true.  If your application completed,  
<br>
this is nothing to worry about.  It means that an error occurred on  
<br>
the socket between mpirun ad some other process.  However, combind  
<br>
with the travor0 errors in the log files, it could mean that your  
<br>
IPoIB network is acting flaky.  That would have me slightly  
<br>
concerned.  Enough that I'd consider running some TCP stress tests on  
<br>
the network to make sure it's acting normally.
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p>On Jul 10, 2007, at 11:32 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/10/07 11:08 AM, &quot;Glenn Carver&quot; &lt;Glenn.Carver_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd be grateful if someone could explain the meaning of this error
</span><br>
<span class="quotelev2">&gt;&gt; message to me and whether it indicates a hardware problem or
</span><br>
<span class="quotelev2">&gt;&gt; application software issue:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [node2:11881] OOB: Connection to HNP lost
</span><br>
<span class="quotelev2">&gt;&gt; [node1:09876] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This message is nothing to be concerned about - all it indicates is  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; mpirun exited before our daemon on your backend nodes did. It's  
</span><br>
<span class="quotelev1">&gt; relatively
</span><br>
<span class="quotelev1">&gt; harmless and probably should be eliminated in some future version  
</span><br>
<span class="quotelev1">&gt; (except
</span><br>
<span class="quotelev1">&gt; when developers are running in debug mode).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The message can appear when the timing changes between front and  
</span><br>
<span class="quotelev1">&gt; backend
</span><br>
<span class="quotelev1">&gt; nodes. What happens is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. mpirun detects that your processes have all completed. It then  
</span><br>
<span class="quotelev1">&gt; orders the
</span><br>
<span class="quotelev1">&gt; shutdown of the daemons on your backend nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. each daemon does an orderly shutdown. Just before it terminates,  
</span><br>
<span class="quotelev1">&gt; it tells
</span><br>
<span class="quotelev1">&gt; mpirun that it is done cleaning up and is about to exit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. when mpirun hears that all daemons are done cleaning up, it  
</span><br>
<span class="quotelev1">&gt; exits itself.
</span><br>
<span class="quotelev1">&gt; This is where the timing issue comes into play - if mpirun exits  
</span><br>
<span class="quotelev1">&gt; before the
</span><br>
<span class="quotelev1">&gt; daemon, then you get that error message as the daemon is terminating.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it's all a question of whether mpirun completes the last few  
</span><br>
<span class="quotelev1">&gt; steps to
</span><br>
<span class="quotelev1">&gt; exit before the daemons do. In most cases, the daemons complete  
</span><br>
<span class="quotelev1">&gt; first as
</span><br>
<span class="quotelev1">&gt; they have less to do. Sometimes, mpirun manages to get out first,  
</span><br>
<span class="quotelev1">&gt; and you
</span><br>
<span class="quotelev1">&gt; get the message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I doubt it has anything to do with your hardware issues.  
</span><br>
<span class="quotelev1">&gt; Personally, I would
</span><br>
<span class="quotelev1">&gt; just ignore the message - I'll see it gets removed in later  
</span><br>
<span class="quotelev1">&gt; releases to
</span><br>
<span class="quotelev1">&gt; avoid unnecessary confusion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a small cluster which until last week was just fine.
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately we were hit by a sudden power dip which brought the
</span><br>
<span class="quotelev2">&gt;&gt; cluster down and did significant damage to other servers (blew power
</span><br>
<span class="quotelev2">&gt;&gt; supplies and disk).  Although the cluster machines and the Infiniband
</span><br>
<span class="quotelev2">&gt;&gt; link is up and running jobs I am now getting these errors in user
</span><br>
<span class="quotelev2">&gt;&gt; applications which we've never had before.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The system messages file reports (for node2):
</span><br>
<span class="quotelev2">&gt;&gt; Jul  5 12:08:28 node1 genunix: [ID 408789 kern.notice] NOTICE:
</span><br>
<span class="quotelev2">&gt;&gt; tavor0: fault cleared external to device; service available
</span><br>
<span class="quotelev2">&gt;&gt; Jul  5 12:08:28 node1 genunix: [ID 451854 kern.notice] NOTICE:
</span><br>
<span class="quotelev2">&gt;&gt; tavor0: port 1 up
</span><br>
<span class="quotelev2">&gt;&gt; Jul  7 16:18:32 node1 genunix: [ID 408114 kern.info]
</span><br>
<span class="quotelev2">&gt;&gt; /pci_at_1,0/pci1022,7450_at_2/pci15b3,5a46_at_1/pci15b3,5a44_at_0 (tavor0) online
</span><br>
<span class="quotelev2">&gt;&gt; Jul  7 16:18:32 node1 ib: [ID 842868 kern.info] IB device:  
</span><br>
<span class="quotelev2">&gt;&gt; daplt_at_0, daplt0
</span><br>
<span class="quotelev2">&gt;&gt; Jul  7 16:18:32 node1 genunix: [ID 936769 kern.info] daplt0 is /ib/ 
</span><br>
<span class="quotelev2">&gt;&gt; daplt_at_0
</span><br>
<span class="quotelev2">&gt;&gt; Jul  7 16:18:32 node1 genunix: [ID 408114 kern.info] /ib/daplt_at_0
</span><br>
<span class="quotelev2">&gt;&gt; (daplt0) online
</span><br>
<span class="quotelev2">&gt;&gt; Jul  7 16:18:32 node1 genunix: [ID 834635 kern.info] /ib/daplt_at_0
</span><br>
<span class="quotelev2">&gt;&gt; (daplt0) multipath status: degraded, path
</span><br>
<span class="quotelev2">&gt;&gt; /pci_at_1,0/pci1022,7450_at_2/pci15
</span><br>
<span class="quotelev2">&gt;&gt; b3,5a46_at_1/pci15b3,5a44_at_0 (tavor0) to target address: daplt,0 is
</span><br>
<span class="quotelev2">&gt;&gt; online Load balancing: round-robin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if this messages are indicative of a hardware problem,
</span><br>
<span class="quotelev2">&gt;&gt; possibly on the Infiniband switch or the host adapters on the cluster
</span><br>
<span class="quotelev2">&gt;&gt; machines.  The cluster software has not been altered but there have
</span><br>
<span class="quotelev2">&gt;&gt; been small changes to the application codes. But I want to rule out
</span><br>
<span class="quotelev2">&gt;&gt; hardware issues because of the power dip first.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyone seen this message before and know whether to investigate
</span><br>
<span class="quotelev2">&gt;&gt; hardware first?  I did check the archives but it didn't help. More
</span><br>
<span class="quotelev2">&gt;&gt; info provided below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help appreciate, thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               Glenn
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Details:
</span><br>
<span class="quotelev2">&gt;&gt; Cluster uses mix of Sun's X4100/X4200 machines linked with Sun
</span><br>
<span class="quotelev2">&gt;&gt; supplied Infiniband and host adapters. All machines are running
</span><br>
<span class="quotelev2">&gt;&gt; Solaris 10_x86 (11/06) with latest kernel patches
</span><br>
<span class="quotelev2">&gt;&gt; Software is Sun Clustertools 7.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Node2 $ ifconfig ibd1
</span><br>
<span class="quotelev2">&gt;&gt; ibd1: flags=1000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4&gt; mtu 2044  
</span><br>
<span class="quotelev2">&gt;&gt; index 3
</span><br>
<span class="quotelev2">&gt;&gt;          inet 192.168.50.202 netmask ffffff00 broadcast  
</span><br>
<span class="quotelev2">&gt;&gt; 192.168.50.255
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Node1 $ ifconfig ibd1
</span><br>
<span class="quotelev2">&gt;&gt; ibd1: flags=1000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4&gt; mtu 2044  
</span><br>
<span class="quotelev2">&gt;&gt; index 3
</span><br>
<span class="quotelev2">&gt;&gt;          inet 192.168.50.201 netmask ffffff00 broadcast  
</span><br>
<span class="quotelev2">&gt;&gt; 192.168.50.255
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info -a
</span><br>
<span class="quotelev2">&gt;&gt;                  Open MPI: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev2">&gt;&gt;     Open MPI SVN revision: 0
</span><br>
<span class="quotelev2">&gt;&gt;                  Open RTE: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev2">&gt;&gt;     Open RTE SVN revision: 0
</span><br>
<span class="quotelev2">&gt;&gt;                      OPAL: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev2">&gt;&gt;         OPAL SVN revision: 0
</span><br>
<span class="quotelev2">&gt;&gt;             MCA backtrace: printstack (MCA v1.0, API v1.0,  
</span><br>
<span class="quotelev2">&gt;&gt; Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA paffinity: solaris (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA maffinity: first_use (MCA v1.0, API v1.0,  
</span><br>
<span class="quotelev2">&gt;&gt; Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA timer: solaris (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA allocator: bucket (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: basic (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: self (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: tuned (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA io: romio (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA mpool: udapl (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rcache: rb (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: self (MCA v1.0, API v1.0.1, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: sm (MCA v1.0, API v1.0.1, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: udapl (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA topo: unity (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA osc: pt2pt (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA errmgr: orted (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA errmgr: proxy (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA gpr: null (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA gpr: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA gpr: replica (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA iof: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA ns: proxy (MCA v1.0, API v2.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA ns: replica (MCA v1.0, API v2.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: dash_host (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev2">&gt;&gt; Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: gridengine (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev2">&gt;&gt; Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: localhost (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev2">&gt;&gt; Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rds: hostfile (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rds: proxy (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rds: resfile (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmaps: round_robin (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev2">&gt;&gt; Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rmgr: proxy (MCA v1.0, API v2.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: gridengine (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev2">&gt;&gt; Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: proxy (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA sds: env (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA sds: pipe (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA sds: seed (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA sds: singleton (MCA v1.0, API v1.0,  
</span><br>
<span class="quotelev2">&gt;&gt; Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                    Prefix: /opt/SUNWhpc/HPC7.0
</span><br>
<span class="quotelev2">&gt;&gt;                    Bindir: /opt/SUNWhpc/HPC7.0/bin
</span><br>
<span class="quotelev2">&gt;&gt;                    Libdir: /opt/SUNWhpc/HPC7.0/lib
</span><br>
<span class="quotelev2">&gt;&gt;                    Incdir: /opt/SUNWhpc/HPC7.0/include
</span><br>
<span class="quotelev2">&gt;&gt;                 Pkglibdir: /opt/SUNWhpc/HPC7.0/lib/openmpi
</span><br>
<span class="quotelev2">&gt;&gt;                Sysconfdir: /opt/SUNWhpc/HPC7.0/etc
</span><br>
<span class="quotelev2">&gt;&gt;   Configured architecture: i386-pc-solaris2.10
</span><br>
<span class="quotelev2">&gt;&gt;             Configured by: root
</span><br>
<span class="quotelev2">&gt;&gt;             Configured on: Fri Mar 30 13:40:12 EDT 2007
</span><br>
<span class="quotelev2">&gt;&gt;            Configure host: burpen-csx10-0
</span><br>
<span class="quotelev2">&gt;&gt;                  Built by: root
</span><br>
<span class="quotelev2">&gt;&gt;                  Built on: Fri Mar 30 13:57:25 EDT 2007
</span><br>
<span class="quotelev2">&gt;&gt;                Built host: burpen-csx10-0
</span><br>
<span class="quotelev2">&gt;&gt;                C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;              C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;        Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;        Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran90 bindings size: trivial
</span><br>
<span class="quotelev2">&gt;&gt;                C compiler: cc
</span><br>
<span class="quotelev2">&gt;&gt;       C compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/cc
</span><br>
<span class="quotelev2">&gt;&gt;               C char size: 1
</span><br>
<span class="quotelev2">&gt;&gt;               C bool size: 1
</span><br>
<span class="quotelev2">&gt;&gt;              C short size: 2
</span><br>
<span class="quotelev2">&gt;&gt;                C int size: 4
</span><br>
<span class="quotelev2">&gt;&gt;               C long size: 4
</span><br>
<span class="quotelev2">&gt;&gt;              C float size: 4
</span><br>
<span class="quotelev2">&gt;&gt;             C double size: 8
</span><br>
<span class="quotelev2">&gt;&gt;            C pointer size: 4
</span><br>
<span class="quotelev2">&gt;&gt;              C char align: 1
</span><br>
<span class="quotelev2">&gt;&gt;              C bool align: 1
</span><br>
<span class="quotelev2">&gt;&gt;               C int align: 4
</span><br>
<span class="quotelev2">&gt;&gt;             C float align: 4
</span><br>
<span class="quotelev2">&gt;&gt;            C double align: 4
</span><br>
<span class="quotelev2">&gt;&gt;              C++ compiler: CC
</span><br>
<span class="quotelev2">&gt;&gt;     C++ compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/CC
</span><br>
<span class="quotelev2">&gt;&gt;        Fortran77 compiler: f77
</span><br>
<span class="quotelev2">&gt;&gt;    Fortran77 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f77
</span><br>
<span class="quotelev2">&gt;&gt;        Fortran90 compiler: f95
</span><br>
<span class="quotelev2">&gt;&gt;    Fortran90 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f95
</span><br>
<span class="quotelev2">&gt;&gt;         Fort integer size: 4
</span><br>
<span class="quotelev2">&gt;&gt;         Fort logical size: 4
</span><br>
<span class="quotelev2">&gt;&gt;   Fort logical value true: 1
</span><br>
<span class="quotelev2">&gt;&gt;        Fort have integer1: yes
</span><br>
<span class="quotelev2">&gt;&gt;        Fort have integer2: yes
</span><br>
<span class="quotelev2">&gt;&gt;        Fort have integer4: yes
</span><br>
<span class="quotelev2">&gt;&gt;        Fort have integer8: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fort have integer16: no
</span><br>
<span class="quotelev2">&gt;&gt;           Fort have real4: yes
</span><br>
<span class="quotelev2">&gt;&gt;           Fort have real8: yes
</span><br>
<span class="quotelev2">&gt;&gt;          Fort have real16: no
</span><br>
<span class="quotelev2">&gt;&gt;        Fort have complex8: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fort have complex16: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fort have complex32: no
</span><br>
<span class="quotelev2">&gt;&gt;        Fort integer1 size: 1
</span><br>
<span class="quotelev2">&gt;&gt;        Fort integer2 size: 2
</span><br>
<span class="quotelev2">&gt;&gt;        Fort integer4 size: 4
</span><br>
<span class="quotelev2">&gt;&gt;        Fort integer8 size: 8
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer16 size: -1
</span><br>
<span class="quotelev2">&gt;&gt;            Fort real size: 4
</span><br>
<span class="quotelev2">&gt;&gt;           Fort real4 size: 4
</span><br>
<span class="quotelev2">&gt;&gt;           Fort real8 size: 8
</span><br>
<span class="quotelev2">&gt;&gt;          Fort real16 size: -1
</span><br>
<span class="quotelev2">&gt;&gt;        Fort dbl prec size: 4
</span><br>
<span class="quotelev2">&gt;&gt;            Fort cplx size: 4
</span><br>
<span class="quotelev2">&gt;&gt;        Fort dbl cplx size: 4
</span><br>
<span class="quotelev2">&gt;&gt;           Fort cplx8 size: 8
</span><br>
<span class="quotelev2">&gt;&gt;          Fort cplx16 size: 16
</span><br>
<span class="quotelev2">&gt;&gt;          Fort cplx32 size: -1
</span><br>
<span class="quotelev2">&gt;&gt;        Fort integer align: 4
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer1 align: 1
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer2 align: 2
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer4 align: 4
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer8 align: 4
</span><br>
<span class="quotelev2">&gt;&gt;      Fort integer16 align: -1
</span><br>
<span class="quotelev2">&gt;&gt;           Fort real align: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Fort real4 align: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Fort real8 align: 4
</span><br>
<span class="quotelev2">&gt;&gt;         Fort real16 align: -1
</span><br>
<span class="quotelev2">&gt;&gt;       Fort dbl prec align: 4
</span><br>
<span class="quotelev2">&gt;&gt;           Fort cplx align: 4
</span><br>
<span class="quotelev2">&gt;&gt;       Fort dbl cplx align: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Fort cplx8 align: 4
</span><br>
<span class="quotelev2">&gt;&gt;         Fort cplx16 align: 4
</span><br>
<span class="quotelev2">&gt;&gt;         Fort cplx32 align: -1
</span><br>
<span class="quotelev2">&gt;&gt;               C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;             C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ exceptions: yes
</span><br>
<span class="quotelev2">&gt;&gt;            Thread support: no
</span><br>
<span class="quotelev2">&gt;&gt;              Build CFLAGS: -DNDEBUG -xtarget=opteron -xarch=sse2 - 
</span><br>
<span class="quotelev2">&gt;&gt; xprefetch
</span><br>
<span class="quotelev2">&gt;&gt;                            -xprefetch_level=2 -xvector=simd
</span><br>
<span class="quotelev2">&gt;&gt; -xdepend=yes -xbuiltin=%all
</span><br>
<span class="quotelev2">&gt;&gt;                            -xO5
</span><br>
<span class="quotelev2">&gt;&gt;            Build CXXFLAGS: -DNDEBUG -xtarget=opteron -xarch=sse2 - 
</span><br>
<span class="quotelev2">&gt;&gt; xprefetch
</span><br>
<span class="quotelev2">&gt;&gt;                            -xprefetch_level=2 -xvector=simd
</span><br>
<span class="quotelev2">&gt;&gt; -xdepend=yes -xbuiltin=%all
</span><br>
<span class="quotelev2">&gt;&gt;                            -xO5
</span><br>
<span class="quotelev2">&gt;&gt;              Build FFLAGS: -xtarget=opteron -xarch=sse2 -xprefetch
</span><br>
<span class="quotelev2">&gt;&gt; -xprefetch_level=2
</span><br>
<span class="quotelev2">&gt;&gt;                            -xvector=simd -stackvar -xO5
</span><br>
<span class="quotelev2">&gt;&gt;             Build FCFLAGS: -xtarget=opteron -xarch=sse2 -xprefetch
</span><br>
<span class="quotelev2">&gt;&gt; -xprefetch_level=2
</span><br>
<span class="quotelev2">&gt;&gt;                            -xvector=simd -stackvar -xO5
</span><br>
<span class="quotelev2">&gt;&gt;             Build LDFLAGS: -export-dynamic    -R/opt/mx/lib
</span><br>
<span class="quotelev2">&gt;&gt; -R/opt/SUNWhpc/HPC7.0/lib
</span><br>
<span class="quotelev2">&gt;&gt;                            -R/opt/mx/lib/amd64 -R/opt/SUNWhpc/ 
</span><br>
<span class="quotelev2">&gt;&gt; HPC7.0/lib/amd64
</span><br>
<span class="quotelev2">&gt;&gt;                            -R/opt/mx/lib -R/opt/SUNWhpc/HPC7.0/lib
</span><br>
<span class="quotelev2">&gt;&gt; -R/opt/mx/lib/amd64
</span><br>
<span class="quotelev2">&gt;&gt;                            -R/opt/SUNWhpc/HPC7.0/lib/amd64 -R/opt/ 
</span><br>
<span class="quotelev2">&gt;&gt; mx/lib
</span><br>
<span class="quotelev2">&gt;&gt;                            -R/opt/SUNWhpc/HPC7.0/lib -R/opt/mx/lib/ 
</span><br>
<span class="quotelev2">&gt;&gt; amd64
</span><br>
<span class="quotelev2">&gt;&gt;                            -R/opt/SUNWhpc/HPC7.0/lib/amd64
</span><br>
<span class="quotelev2">&gt;&gt;                Build LIBS: -lsocket -lnsl  -lrt -lm
</span><br>
<span class="quotelev2">&gt;&gt;      Wrapper extra CFLAGS:
</span><br>
<span class="quotelev2">&gt;&gt;    Wrapper extra CXXFLAGS:
</span><br>
<span class="quotelev2">&gt;&gt;      Wrapper extra FFLAGS:
</span><br>
<span class="quotelev2">&gt;&gt;     Wrapper extra FCFLAGS:
</span><br>
<span class="quotelev2">&gt;&gt;     Wrapper extra LDFLAGS:     -R/opt/mx/lib -R/opt/SUNWhpc/HPC7.0/ 
</span><br>
<span class="quotelev2">&gt;&gt; lib
</span><br>
<span class="quotelev2">&gt;&gt; -R/opt/mx/lib/amd64
</span><br>
<span class="quotelev2">&gt;&gt;                            -R/opt/SUNWhpc/HPC7.0/lib/amd64
</span><br>
<span class="quotelev2">&gt;&gt;        Wrapper extra LIBS:      -lsocket -lnsl -lrt -lm -ldl
</span><br>
<span class="quotelev2">&gt;&gt;    Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;       MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;           libltdl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;     Heterogeneous support: yes
</span><br>
<span class="quotelev2">&gt;&gt;   mpirun default --prefix: yes
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mca: parameter &quot;mca_param_files&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/home/tomcat/.openmpi/mca-params.conf:/opt/SUNWhpc/HPC7.0/etc/ 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-mca-par
</span><br>
<span class="quotelev2">&gt;&gt; ams.conf&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Path for MCA configuration files  
</span><br>
<span class="quotelev2">&gt;&gt; containing
</span><br>
<span class="quotelev2">&gt;&gt; default parameter
</span><br>
<span class="quotelev2">&gt;&gt;                            values
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mca: parameter &quot;mca_component_path&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/opt/SUNWhpc/HPC7.0/lib/openmpi:/home/tomcat/.openmpi/components&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Path where to look for Open MPI and  
</span><br>
<span class="quotelev2">&gt;&gt; ORTE components
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mca: parameter &quot;mca_verbose&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Top-level verbosity parameter
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mca: parameter &quot;mca_component_show_load_errors&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Whether to show errors for components that
</span><br>
<span class="quotelev2">&gt;&gt; failed to load or
</span><br>
<span class="quotelev2">&gt;&gt;                            not
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mca: parameter &quot;mca_component_disable_dlopen&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Whether to attempt to disable opening
</span><br>
<span class="quotelev2">&gt;&gt; dynamic components or not
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mpi: parameter &quot;mpi_param_check&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Whether you want MPI API parameters  
</span><br>
<span class="quotelev2">&gt;&gt; checked
</span><br>
<span class="quotelev2">&gt;&gt; at run-time or not.
</span><br>
<span class="quotelev2">&gt;&gt;                            Possible values are 0 (no checking) and 1
</span><br>
<span class="quotelev2">&gt;&gt; (perform checking at
</span><br>
<span class="quotelev2">&gt;&gt;                            run-time)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mpi: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpi_yield_when_idle&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Yield the processor when waiting for MPI
</span><br>
<span class="quotelev2">&gt;&gt; communication (for MPI
</span><br>
<span class="quotelev2">&gt;&gt;                            processes, will default to 1 when
</span><br>
<span class="quotelev2">&gt;&gt; oversubscribing nodes)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mpi: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpi_event_tick_rate&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            How often to progress TCP  
</span><br>
<span class="quotelev2">&gt;&gt; communications (0
</span><br>
<span class="quotelev2">&gt;&gt; = never, otherwise
</span><br>
<span class="quotelev2">&gt;&gt;                            specified in microseconds)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mpi: parameter &quot;mpi_show_handle_leaks&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Whether MPI_FINALIZE shows all MPI handles
</span><br>
<span class="quotelev2">&gt;&gt; that were not freed
</span><br>
<span class="quotelev2">&gt;&gt;                            or not
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mpi: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpi_no_free_handles&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Whether to actually free MPI objects when
</span><br>
<span class="quotelev2">&gt;&gt; their handles are
</span><br>
<span class="quotelev2">&gt;&gt;                            freed
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mpi: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpi_show_mca_params&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Whether to show all MCA parameter value
</span><br>
<span class="quotelev2">&gt;&gt; during MPI_INIT or not
</span><br>
<span class="quotelev2">&gt;&gt;                            (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mpi: parameter &quot;mpi_show_mca_params_file&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            If mpi_show_mca_params is true, setting
</span><br>
<span class="quotelev2">&gt;&gt; this string to a valid
</span><br>
<span class="quotelev2">&gt;&gt;                            filename tells Open MPI to dump all the  
</span><br>
<span class="quotelev2">&gt;&gt; MCA
</span><br>
<span class="quotelev2">&gt;&gt; parameter values
</span><br>
<span class="quotelev2">&gt;&gt;                            into a file suitable for reading via the
</span><br>
<span class="quotelev2">&gt;&gt; mca_param_files
</span><br>
<span class="quotelev2">&gt;&gt;                            parameter (good for reproducability of  
</span><br>
<span class="quotelev2">&gt;&gt; MPI jobs)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mpi: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpi_paffinity_alone&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            If nonzero, assume that this job is the  
</span><br>
<span class="quotelev2">&gt;&gt; only (set
</span><br>
<span class="quotelev2">&gt;&gt; of)
</span><br>
<span class="quotelev2">&gt;&gt;                            process(es) running on each node and bind
</span><br>
<span class="quotelev2">&gt;&gt; processes to
</span><br>
<span class="quotelev2">&gt;&gt;                            processors, starting with processor ID 0
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mpi: parameter &quot;mpi_keep_peer_hostnames&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            If nonzero, save the string hostnames of
</span><br>
<span class="quotelev2">&gt;&gt; all MPI peer processes
</span><br>
<span class="quotelev2">&gt;&gt;                            (mostly for error / debugging output
</span><br>
<span class="quotelev2">&gt;&gt; messages).  This can add
</span><br>
<span class="quotelev2">&gt;&gt;                            quite a bit of memory usage to each MPI  
</span><br>
<span class="quotelev2">&gt;&gt; process.
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mpi: parameter &quot;mpi_abort_delay&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            If nonzero, print out an identifying
</span><br>
<span class="quotelev2">&gt;&gt; message when MPI_ABORT is
</span><br>
<span class="quotelev2">&gt;&gt;                            invoked (hostname, PID of the process that
</span><br>
<span class="quotelev2">&gt;&gt; called MPI_ABORT) and
</span><br>
<span class="quotelev2">&gt;&gt;                            delay for that many seconds before exiting
</span><br>
<span class="quotelev2">&gt;&gt; (a negative delay
</span><br>
<span class="quotelev2">&gt;&gt;                            value means to never abort).  This allows
</span><br>
<span class="quotelev2">&gt;&gt; attaching of a
</span><br>
<span class="quotelev2">&gt;&gt;                            debugger before quitting the job.
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mpi: information  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpi_abort_print_stack&quot; (value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            If nonzero, print out a stack trace when
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ABORT is invoked
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Whether to force MPI processes to create
</span><br>
<span class="quotelev2">&gt;&gt; connections / warmup
</span><br>
<span class="quotelev2">&gt;&gt;                            with *all* peers during MPI_INIT (vs.
</span><br>
<span class="quotelev2">&gt;&gt; making connections lazily
</span><br>
<span class="quotelev2">&gt;&gt;                            -- upon the first MPI traffic between each
</span><br>
<span class="quotelev2">&gt;&gt; process peer pair)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mpi: parameter &quot;mpi_preconnect_oob&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Whether to force MPI processes to fully
</span><br>
<span class="quotelev2">&gt;&gt; wire-up the OOB system
</span><br>
<span class="quotelev2">&gt;&gt;                            between MPI processes.
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Whether to use the &quot;leave pinned&quot; protocol
</span><br>
<span class="quotelev2">&gt;&gt; or not.  Enabling
</span><br>
<span class="quotelev2">&gt;&gt;                            this setting can help bandwidth  
</span><br>
<span class="quotelev2">&gt;&gt; performance
</span><br>
<span class="quotelev2">&gt;&gt; when repeatedly
</span><br>
<span class="quotelev2">&gt;&gt;                            sending and receiving large messages with
</span><br>
<span class="quotelev2">&gt;&gt; the same buffers over
</span><br>
<span class="quotelev2">&gt;&gt;                            RDMA-based networks.
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mpi: parameter &quot;mpi_leave_pinned_pipeline&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Whether to use the &quot;leave pinned pipeline&quot;
</span><br>
<span class="quotelev2">&gt;&gt; protocol or not.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA orte: parameter &quot;orte_debug&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Top-level ORTE debug switch
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA orte: parameter &quot;orte_no_daemonize&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Whether to properly daemonize the ORTE  
</span><br>
<span class="quotelev2">&gt;&gt; daemons or
</span><br>
<span class="quotelev2">&gt;&gt; not
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA orte: parameter &quot;orte_base_user_debugger&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;totalview
</span><br>
<span class="quotelev2">&gt;&gt;                            @mpirun@ -a @mpirun_args@ : fxp  
</span><br>
<span class="quotelev2">&gt;&gt; @mpirun@ -a
</span><br>
<span class="quotelev2">&gt;&gt; @mpirun_args@&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Sequence of user-level debuggers to search
</span><br>
<span class="quotelev2">&gt;&gt; for in orterun
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA orte: parameter &quot;orte_abort_timeout&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Time to wait [in seconds] before giving up
</span><br>
<span class="quotelev2">&gt;&gt; on aborting an ORTE
</span><br>
<span class="quotelev2">&gt;&gt;                            operation
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA orte: parameter &quot;orte_timing&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Request that critical timing loops be  
</span><br>
<span class="quotelev2">&gt;&gt; measured
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA opal: parameter &quot;opal_signal&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;6,10,8,11&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            If a signal is received, display the stack
</span><br>
<span class="quotelev2">&gt;&gt; trace frame
</span><br>
<span class="quotelev2">&gt;&gt;             MCA backtrace: parameter &quot;backtrace&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; backtrace framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA backtrace: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;backtrace_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Verbosity level for the backtrace  
</span><br>
<span class="quotelev2">&gt;&gt; framework
</span><br>
<span class="quotelev2">&gt;&gt; (0 = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA backtrace: parameter &quot;backtrace_printstack_priority&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA memory: parameter &quot;memory&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; memory framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA memory: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;memory_base_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Verbosity level for the memory  
</span><br>
<span class="quotelev2">&gt;&gt; framework (0
</span><br>
<span class="quotelev2">&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA paffinity: parameter &quot;paffinity&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; paffinity framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA paffinity: parameter &quot;paffinity_solaris_priority&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Priority of the solaris paffinity  
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;             MCA maffinity: parameter &quot;maffinity&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; maffinity framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA maffinity: parameter &quot;maffinity_first_use_priority&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Priority of the first_use maffinity  
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA timer: parameter &quot;timer&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; timer framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA timer: parameter &quot;timer_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Verbosity level for the timer framework (0
</span><br>
<span class="quotelev2">&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA timer: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;timer_solaris_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA allocator: parameter &quot;allocator&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; allocator framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA allocator: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;allocator_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Verbosity level for the allocator  
</span><br>
<span class="quotelev2">&gt;&gt; framework
</span><br>
<span class="quotelev2">&gt;&gt; (0 = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA allocator: parameter &quot;allocator_basic_priority&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA allocator: parameter &quot;allocator_bucket_num_buckets&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;30&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA allocator: parameter &quot;allocator_bucket_priority&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: parameter &quot;coll&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; coll framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: parameter &quot;coll_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Verbosity level for the coll framework  
</span><br>
<span class="quotelev2">&gt;&gt; (0 =
</span><br>
<span class="quotelev2">&gt;&gt; no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_basic_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Priority of the basic coll component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_basic_crossover&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Minimum number of processes in a
</span><br>
<span class="quotelev2">&gt;&gt; communicator before using the
</span><br>
<span class="quotelev2">&gt;&gt;                            logarithmic algorithms
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: parameter &quot;coll_self_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;75&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: parameter &quot;coll_sm_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Priority of the sm coll component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: parameter &quot;coll_sm_control_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Length of the control data -- should
</span><br>
<span class="quotelev2">&gt;&gt; usually be either the
</span><br>
<span class="quotelev2">&gt;&gt;                            length of a cache line on most SMPs, or  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; size of a page on
</span><br>
<span class="quotelev2">&gt;&gt;                            machines that support direct memory
</span><br>
<span class="quotelev2">&gt;&gt; affinity page placement (in
</span><br>
<span class="quotelev2">&gt;&gt;                            bytes)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: parameter &quot;coll_sm_bootstrap_filename&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value:
</span><br>
<span class="quotelev2">&gt;&gt;                            &quot;shared_mem_sm_bootstrap&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Filename (in the Open MPI session
</span><br>
<span class="quotelev2">&gt;&gt; directory) of the coll sm
</span><br>
<span class="quotelev2">&gt;&gt;                            component bootstrap rendezvous mmap file
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: parameter &quot;coll_sm_bootstrap_num_segments&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Number of segments in the bootstrap file
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: parameter &quot;coll_sm_fragment_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;8192&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Fragment size (in bytes) used for passing
</span><br>
<span class="quotelev2">&gt;&gt; data through shared
</span><br>
<span class="quotelev2">&gt;&gt;                            memory (will be rounded up to the nearest
</span><br>
<span class="quotelev2">&gt;&gt; control_size size)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: parameter &quot;coll_sm_mpool&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;sm&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Name of the mpool component to use
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: parameter &quot;coll_sm_comm_in_use_flags&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;2&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Number of &quot;in use&quot; flags, used to mark a
</span><br>
<span class="quotelev2">&gt;&gt; message passing area
</span><br>
<span class="quotelev2">&gt;&gt;                            segment as currently being used or not
</span><br>
<span class="quotelev2">&gt;&gt; (must be &gt;= 2 and &lt;=
</span><br>
<span class="quotelev2">&gt;&gt;                            comm_num_segments)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: parameter &quot;coll_sm_comm_num_segments&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Number of segments in each communicator's
</span><br>
<span class="quotelev2">&gt;&gt; shared memory message
</span><br>
<span class="quotelev2">&gt;&gt;                            passing area (must be &gt;= 2, and must be  
</span><br>
<span class="quotelev2">&gt;&gt; a multiple
</span><br>
<span class="quotelev2">&gt;&gt; of
</span><br>
<span class="quotelev2">&gt;&gt;                            comm_in_use_flags)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_sm_tree_degree&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Degree of the tree for tree-based
</span><br>
<span class="quotelev2">&gt;&gt; operations (must be =&gt; 1 and
</span><br>
<span class="quotelev2">&gt;&gt;                            &lt;= min(control_size, 255))
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: information
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_sm_shared_mem_used_bootstrap&quot; (value: &quot;160&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Amount of shared memory used in the shared
</span><br>
<span class="quotelev2">&gt;&gt; memory bootstrap area
</span><br>
<span class="quotelev2">&gt;&gt;                            (in bytes)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_sm_info_num_procs&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Number of processes to use for the  
</span><br>
<span class="quotelev2">&gt;&gt; calculation of
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;                            shared_mem_size MCA information parameter
</span><br>
<span class="quotelev2">&gt;&gt; (must be =&gt; 2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: information &quot;coll_sm_shared_mem_used_data&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (value: &quot;548864&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Amount of shared memory used in the shared
</span><br>
<span class="quotelev2">&gt;&gt; memory data area for
</span><br>
<span class="quotelev2">&gt;&gt;                            info_num_procs processes (in bytes)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_tuned_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;30&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Priority of the tuned coll component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_tuned_pre_allocate_memory_comm_size_limit&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                            (current value: &quot;32768&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Size of communicator were we stop
</span><br>
<span class="quotelev2">&gt;&gt; pre-allocating memory for the
</span><br>
<span class="quotelev2">&gt;&gt;                            fixed internal buffer used for message
</span><br>
<span class="quotelev2">&gt;&gt; requests etc that is hung
</span><br>
<span class="quotelev2">&gt;&gt;                            off the communicator data segment. I.e. if
</span><br>
<span class="quotelev2">&gt;&gt; you have a 100'000
</span><br>
<span class="quotelev2">&gt;&gt;                            nodes you might not want to pre-allocate
</span><br>
<span class="quotelev2">&gt;&gt; 200'000 request handle
</span><br>
<span class="quotelev2">&gt;&gt;                            slots per communicator instance!
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: parameter &quot;coll_tuned_init_tree_fanout&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Inital fanout used in the tree topologies
</span><br>
<span class="quotelev2">&gt;&gt; for each communicator.
</span><br>
<span class="quotelev2">&gt;&gt;                            This is only an initial guess, if a tuned
</span><br>
<span class="quotelev2">&gt;&gt; collective needs a
</span><br>
<span class="quotelev2">&gt;&gt;                            different fanout for an operation, it  
</span><br>
<span class="quotelev2">&gt;&gt; build
</span><br>
<span class="quotelev2">&gt;&gt; it dynamically. This
</span><br>
<span class="quotelev2">&gt;&gt;                            parameter is only for the first guess and
</span><br>
<span class="quotelev2">&gt;&gt; might save a little
</span><br>
<span class="quotelev2">&gt;&gt;                            time
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: parameter &quot;coll_tuned_init_chain_fanout&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Inital fanout used in the chain (fanout
</span><br>
<span class="quotelev2">&gt;&gt; followed by pipeline)
</span><br>
<span class="quotelev2">&gt;&gt;                            topologies for each communicator. This is
</span><br>
<span class="quotelev2">&gt;&gt; only an initial guess,
</span><br>
<span class="quotelev2">&gt;&gt;                            if a tuned collective needs a different
</span><br>
<span class="quotelev2">&gt;&gt; fanout for an operation,
</span><br>
<span class="quotelev2">&gt;&gt;                            it build it dynamically. This parameter is
</span><br>
<span class="quotelev2">&gt;&gt; only for the first
</span><br>
<span class="quotelev2">&gt;&gt;                            guess and might save a little time
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: parameter &quot;coll_tuned_use_dynamic_rules&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Switch used to decide if we use static
</span><br>
<span class="quotelev2">&gt;&gt; (compiled/if statements)
</span><br>
<span class="quotelev2">&gt;&gt;                            or dynamic (built at runtime) decision  
</span><br>
<span class="quotelev2">&gt;&gt; function
</span><br>
<span class="quotelev2">&gt;&gt; rules
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA io: parameter &quot;io_base_freelist_initial_size&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Initial MPI-2 IO request freelist size
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA io: parameter &quot;io_base_freelist_max_size&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Max size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA io: parameter &quot;io_base_freelist_increment&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Increment size of the MPI-2 IO request  
</span><br>
<span class="quotelev2">&gt;&gt; freelist
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA io: parameter &quot;io&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; io framework (&lt;none&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                            means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA io: parameter &quot;io_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Verbosity level for the io framework (0 =
</span><br>
<span class="quotelev2">&gt;&gt; no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA io: parameter &quot;io_romio_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Priority of the io romio component
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA io: parameter &quot;io_romio_delete_priority&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Delete priority of the io romio component
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA io: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;io_romio_enable_parallel_optimizations&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt;                            value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Enable set of Open MPI-added options to
</span><br>
<span class="quotelev2">&gt;&gt; improve collective file
</span><br>
<span class="quotelev2">&gt;&gt;                            i/o performance
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA mpool: parameter &quot;mpool&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; mpool framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA mpool: parameter &quot;mpool_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Verbosity level for the mpool framework (0
</span><br>
<span class="quotelev2">&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;bucket&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Name of allocator component to use with  
</span><br>
<span class="quotelev2">&gt;&gt; sm mpool
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA mpool: parameter &quot;mpool_sm_max_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;536870912&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Maximum size of the sm mpool shared  
</span><br>
<span class="quotelev2">&gt;&gt; memory file
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA mpool: parameter &quot;mpool_sm_min_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;134217728&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Minimum size of the sm mpool shared  
</span><br>
<span class="quotelev2">&gt;&gt; memory file
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA mpool: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpool_sm_per_peer_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;33554432&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Size (in bytes) to allocate per local peer
</span><br>
<span class="quotelev2">&gt;&gt; in the sm mpool
</span><br>
<span class="quotelev2">&gt;&gt;                            shared memory file, bounded by min_size  
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; max_size
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA mpool: parameter &quot;mpool_sm_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA mpool: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpool_udapl_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA mpool: parameter &quot;mpool_base_use_mem_hooks&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            use memory hooks for deregistering  
</span><br>
<span class="quotelev2">&gt;&gt; freed memory
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA mpool: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpool_use_mem_hooks&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            (deprecated, use mpool_base_use_mem_hooks)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: parameter &quot;pml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; pml framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: parameter &quot;pml_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Verbosity level for the pml framework (0 =
</span><br>
<span class="quotelev2">&gt;&gt; no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pml_cm_free_list_num&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Initial size of request free lists
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: parameter &quot;pml_cm_free_list_max&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Maximum size of request free lists
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: parameter &quot;pml_cm_free_list_inc&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;64&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Number of elements to add when growing
</span><br>
<span class="quotelev2">&gt;&gt; request free lists
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: parameter &quot;pml_cm_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;30&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            CM PML selection priority
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: parameter &quot;pml_ob1_free_list_num&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: parameter &quot;pml_ob1_free_list_max&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: parameter &quot;pml_ob1_free_list_inc&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;64&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: parameter &quot;pml_ob1_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;20&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: parameter &quot;pml_ob1_eager_limit&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: parameter &quot;pml_ob1_send_pipeline_depth&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;3&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: parameter &quot;pml_ob1_recv_pipeline_depth&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA bml: parameter &quot;bml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; bml framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA bml: parameter &quot;bml_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Verbosity level for the bml framework (0 =
</span><br>
<span class="quotelev2">&gt;&gt; no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA bml: parameter &quot;bml_r2_show_unreach_errors&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Show error message when procs are  
</span><br>
<span class="quotelev2">&gt;&gt; unreachable
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA bml: parameter &quot;bml_r2_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rcache: parameter &quot;rcache&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; rcache framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rcache: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;rcache_base_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Verbosity level for the rcache  
</span><br>
<span class="quotelev2">&gt;&gt; framework (0
</span><br>
<span class="quotelev2">&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rcache: parameter &quot;rcache_rb_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rcache: parameter &quot;rcache_vma_mru_len&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;256&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            The maximum size IN ENTRIES of the MRU
</span><br>
<span class="quotelev2">&gt;&gt; (most recently used)
</span><br>
<span class="quotelev2">&gt;&gt;                            rcache list
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rcache: parameter &quot;rcache_vma_mru_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1073741824&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            The maximum size IN BYTES of the MRU (most
</span><br>
<span class="quotelev2">&gt;&gt; recently used) rcache
</span><br>
<span class="quotelev2">&gt;&gt;                            list
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rcache: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;rcache_vma_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_base_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            If btl_base_debug is 1 standard debug is
</span><br>
<span class="quotelev2">&gt;&gt; output, if &gt; 1 verbose
</span><br>
<span class="quotelev2">&gt;&gt;                            debug is output
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; btl framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Verbosity level for the btl framework (0 =
</span><br>
<span class="quotelev2">&gt;&gt; no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_self_free_list_num&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Number of fragments by default
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_self_free_list_max&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Maximum number of fragments
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_self_free_list_inc&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;32&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Increment by this number of fragments
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_self_eager_limit&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Eager size fragmeng (before the rendez- 
</span><br>
<span class="quotelev2">&gt;&gt; vous
</span><br>
<span class="quotelev2">&gt;&gt; ptotocol)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_self_min_send_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;262144&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Minimum fragment size after the rendez- 
</span><br>
<span class="quotelev2">&gt;&gt; vous
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_self_max_send_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;262144&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Maximum fragment size after the rendez- 
</span><br>
<span class="quotelev2">&gt;&gt; vous
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_self_min_rdma_size&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt;                            &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Maximum fragment size for the RDMA  
</span><br>
<span class="quotelev2">&gt;&gt; transfer
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_self_max_rdma_size&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt;                            &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Maximum fragment size for the RDMA  
</span><br>
<span class="quotelev2">&gt;&gt; transfer
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_self_exclusivity&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Device exclusivity
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_self_flags&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Active behavior flags
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_self_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_sm_free_list_num&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;64&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;65535&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_sm_latency&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;100&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_sm_max_procs&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;2&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_sm_mpool&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;sm&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_sm_max_frag_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;32768&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_sm_size_of_cb_queue&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_sm_cb_lazy_free_freq&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;120&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_sm_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_if_include&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;lo&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;32&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_tcp_endpoint_cache&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;30720&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_tcp_exclusivity&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_min_send_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_flags&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;122&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_free_list_num&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Initial size of free lists (must be &gt;= 1).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_free_list_max&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Maximum size of free lists (-1 = infinite,
</span><br>
<span class="quotelev2">&gt;&gt; otherwise must be &gt;=
</span><br>
<span class="quotelev2">&gt;&gt;                            1).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_free_list_inc&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Increment size of free lists (must be  
</span><br>
<span class="quotelev3">&gt;&gt; &gt;= 1).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_mpool&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;udapl&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Name of the memory pool to be used.
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_max_modules&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Maximum number of supported HCAs.
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_udapl_num_recvs&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Total number of receive buffers to keep
</span><br>
<span class="quotelev2">&gt;&gt; posted per endpoint
</span><br>
<span class="quotelev2">&gt;&gt;                            (must be &gt;= 1).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_udapl_num_sends&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;7&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Maximum number of sends to post on an
</span><br>
<span class="quotelev2">&gt;&gt; endpoint (must be &gt;= 1).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_sr_win&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Window size at which point an explicit
</span><br>
<span class="quotelev2">&gt;&gt; credit message will be
</span><br>
<span class="quotelev2">&gt;&gt;                            generated (must be &gt;= 1).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_eager_rdma_num&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Number of RDMA buffers to allocate for
</span><br>
<span class="quotelev2">&gt;&gt; small messages (must be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 1).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_max_eager_rdma_peers&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value:
</span><br>
<span class="quotelev2">&gt;&gt;                            &quot;16&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Maximum number of peers allowed to use  
</span><br>
<span class="quotelev2">&gt;&gt; RDMA
</span><br>
<span class="quotelev2">&gt;&gt; for short messages
</span><br>
<span class="quotelev2">&gt;&gt;                            (independently RDMA will still be used for
</span><br>
<span class="quotelev2">&gt;&gt; large messages, (must
</span><br>
<span class="quotelev2">&gt;&gt;                            be &gt;= 0; if zero then RDMA will not be  
</span><br>
<span class="quotelev2">&gt;&gt; used for
</span><br>
<span class="quotelev2">&gt;&gt; short
</span><br>
<span class="quotelev2">&gt;&gt;                            messages).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_eager_rdma_win&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;28&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Window size at which point an explicit
</span><br>
<span class="quotelev2">&gt;&gt; credit message will be
</span><br>
<span class="quotelev2">&gt;&gt;                            generated (must be &gt;= 1).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_timeout&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;10000000&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Connection timeout, in microseconds.
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_conn_priv_data&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Use connect private data to establish
</span><br>
<span class="quotelev2">&gt;&gt; connections (not supported
</span><br>
<span class="quotelev2">&gt;&gt;                            by all uDAPL implementations).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_udapl_async_events&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;100000000&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            The asynchronous event queue will only be
</span><br>
<span class="quotelev2">&gt;&gt; checked after entering
</span><br>
<span class="quotelev2">&gt;&gt;                            progress this number of times.
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_buffer_alignment&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Preferred communication buffer alignment,
</span><br>
<span class="quotelev2">&gt;&gt; in bytes (must be &gt;=
</span><br>
<span class="quotelev2">&gt;&gt;                            1).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_async_evd_qlen&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            The asynchronous event dispatcher queue  
</span><br>
<span class="quotelev2">&gt;&gt; length.
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_conn_evd_qlen&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            The connection event dispatcher queue
</span><br>
<span class="quotelev2">&gt;&gt; length is a function of
</span><br>
<span class="quotelev2">&gt;&gt;                            the number of connections expected.
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_udapl_dto_evd_qlen&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;256&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            The data transfer operation event
</span><br>
<span class="quotelev2">&gt;&gt; dispatcher queue length is a
</span><br>
<span class="quotelev2">&gt;&gt;                            function of the number of connections as
</span><br>
<span class="quotelev2">&gt;&gt; well as the maximum
</span><br>
<span class="quotelev2">&gt;&gt;                            number of outstanding data transfer  
</span><br>
<span class="quotelev2">&gt;&gt; operations.
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_max_request_dtos&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;76&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Maximum number of outstanding submitted
</span><br>
<span class="quotelev2">&gt;&gt; sends and rdma
</span><br>
<span class="quotelev2">&gt;&gt;                            operations per endpoint, (see Section  
</span><br>
<span class="quotelev2">&gt;&gt; 6.6.6
</span><br>
<span class="quotelev2">&gt;&gt; of uDAPL Spec.).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_max_recv_dtos&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Maximum number of outstanding submitted
</span><br>
<span class="quotelev2">&gt;&gt; receive operations per
</span><br>
<span class="quotelev2">&gt;&gt;                            endpoint, (see Section 6.6.6 of uDAPL  
</span><br>
<span class="quotelev2">&gt;&gt; Spec.).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_exclusivity&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1014&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            uDAPL BTL exclusivity (must be &gt;= 0).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_eager_limit&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;8192&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Eager send limit, in bytes (must be &gt;= 1).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_min_send_size&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;16384&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Minimum send size, in bytes (must be &gt;=  
</span><br>
<span class="quotelev2">&gt;&gt; 1).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_max_send_size&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Maximum send size, in bytes (must be &gt;=  
</span><br>
<span class="quotelev2">&gt;&gt; 1).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_min_rdma_size&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;524288&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Minimum RDMA size, in bytes (must be &gt;=  
</span><br>
<span class="quotelev2">&gt;&gt; 1).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_max_rdma_size&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Maximum RDMA size, in bytes (must be &gt;=  
</span><br>
<span class="quotelev2">&gt;&gt; 1).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_flags&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;2&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            BTL flags, added together: PUT=2  
</span><br>
<span class="quotelev2">&gt;&gt; (cannot be 0).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_bandwidth&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;225&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Approximate maximum bandwidth of network
</span><br>
<span class="quotelev2">&gt;&gt; (must be &gt;= 1).
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_udapl_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_base_include&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_base_exclude&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: parameter &quot;btl_base_warn_component_unused&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            This parameter is used to turn on warning
</span><br>
<span class="quotelev2">&gt;&gt; messages when certain
</span><br>
<span class="quotelev2">&gt;&gt;                            NICs are not used
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mtl: parameter &quot;mtl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; mtl framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA mtl: parameter &quot;mtl_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Verbosity level for the mtl framework (0 =
</span><br>
<span class="quotelev2">&gt;&gt; no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA topo: parameter &quot;topo&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; topo framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA topo: parameter &quot;topo_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Verbosity level for the topo framework  
</span><br>
<span class="quotelev2">&gt;&gt; (0 =
</span><br>
<span class="quotelev2">&gt;&gt; no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA osc: parameter &quot;osc&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; osc framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA osc: parameter &quot;osc_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Verbosity level for the osc framework (0 =
</span><br>
<span class="quotelev2">&gt;&gt; no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA osc: parameter &quot;osc_pt2pt_no_locks&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Enable optimizations available only if
</span><br>
<span class="quotelev2">&gt;&gt; MPI_LOCK is not used.
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA osc: parameter &quot;osc_pt2pt_eager_limit&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;16384&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Max size of eagerly sent data
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA osc: parameter &quot;osc_pt2pt_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA errmgr: parameter &quot;errmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; errmgr framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA errmgr: parameter &quot;errmgr_hnp_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA errmgr: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;errmgr_hnp_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA errmgr: parameter &quot;errmgr_orted_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA errmgr: parameter &quot;errmgr_orted_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA errmgr: parameter &quot;errmgr_proxy_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA errmgr: parameter &quot;errmgr_proxy_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA gpr: parameter &quot;gpr_base_maxsize&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA gpr: parameter &quot;gpr_base_blocksize&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;512&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA gpr: parameter &quot;gpr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; gpr framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA gpr: parameter &quot;gpr_null_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA gpr: parameter &quot;gpr_proxy_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA gpr: parameter &quot;gpr_proxy_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA gpr: parameter &quot;gpr_replica_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA gpr: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;gpr_replica_isolate&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA gpr: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;gpr_replica_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA iof: parameter &quot;iof_base_window_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA iof: parameter &quot;iof_base_service&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0.0.0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA iof: parameter &quot;iof&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; iof framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA iof: parameter &quot;iof_proxy_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA iof: parameter &quot;iof_proxy_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA iof: parameter &quot;iof_svc_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA iof: parameter &quot;iof_svc_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA ns: parameter &quot;ns&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; ns framework (&lt;none&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                            means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA ns: parameter &quot;ns_proxy_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA ns: parameter &quot;ns_proxy_maxsize&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA ns: parameter &quot;ns_proxy_blocksize&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;512&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA ns: parameter &quot;ns_proxy_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA ns: parameter &quot;ns_replica_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA ns: parameter &quot;ns_replica_isolate&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA ns: parameter &quot;ns_replica_maxsize&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA ns: parameter &quot;ns_replica_blocksize&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;512&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA ns: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ns_replica_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA oob: parameter &quot;oob&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; oob framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA oob: parameter &quot;oob_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Verbosity level for the oob framework (0 =
</span><br>
<span class="quotelev2">&gt;&gt; no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;60&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_include&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_exclude&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_connect_timeout&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;600&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            connect() timeout in seconds, before  
</span><br>
<span class="quotelev2">&gt;&gt; trying
</span><br>
<span class="quotelev2">&gt;&gt; next interface
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_connect_sleep&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Enable (1) /Disable (0)  random sleep for
</span><br>
<span class="quotelev2">&gt;&gt; connection wireup
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_listen_mode&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;event&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Mode for HNP to accept incoming  
</span><br>
<span class="quotelev2">&gt;&gt; connections: event,
</span><br>
<span class="quotelev2">&gt;&gt;                            listen_thread
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA oob: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;oob_tcp_listen_thread_max_queue&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value:
</span><br>
<span class="quotelev2">&gt;&gt;                            &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            High water mark for queued accepted  
</span><br>
<span class="quotelev2">&gt;&gt; socket list
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_listen_thread_max_time&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value:
</span><br>
<span class="quotelev2">&gt;&gt;                            &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Maximum amount of time (in  
</span><br>
<span class="quotelev2">&gt;&gt; milliseconds) to
</span><br>
<span class="quotelev2">&gt;&gt; wait between
</span><br>
<span class="quotelev2">&gt;&gt;                            processing accepted socket list
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_accept_spin_count&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Number of times to let accept return
</span><br>
<span class="quotelev2">&gt;&gt; EWOULDBLOCK before updating
</span><br>
<span class="quotelev2">&gt;&gt;                            accepted socket list
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: parameter &quot;ras&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ras_dash_host_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;5&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Selection priority for the dash_host  
</span><br>
<span class="quotelev2">&gt;&gt; RAS component
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ras_gridengine_debug&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Enable debugging output for the gridengine
</span><br>
<span class="quotelev2">&gt;&gt; ras component
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: parameter &quot;ras_gridengine_priority&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Priority of the gridengine ras component
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ras_gridengine_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Enable verbose output for the gridengine
</span><br>
<span class="quotelev2">&gt;&gt; ras component
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: parameter &quot;ras_gridengine_show_jobid&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Show the JOB_ID of the Grid Engine job
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ras_localhost_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Selection priority for the localhost  
</span><br>
<span class="quotelev2">&gt;&gt; RAS component
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: parameter &quot;ras_tm_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;100&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Priority of the tm ras component
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rds: parameter &quot;rds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rds: parameter &quot;rds_hostfile_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Toggle debug output for hostfile RDS  
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rds: parameter &quot;rds_hostfile_path&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value:
</span><br>
<span class="quotelev2">&gt;&gt;                            &quot;/opt/SUNWhpc/HPC7.0/etc/openmpi- 
</span><br>
<span class="quotelev2">&gt;&gt; default-hostfile&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            ORTE Host filename
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rds: parameter &quot;rds_hostfile_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rds: parameter &quot;rds_proxy_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rds: parameter &quot;rds_resfile_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Toggle debug output for resfile RDS  
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rds: parameter &quot;rds_resfile_name&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            ORTE Resource filename
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rds: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;rds_resfile_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmaps: parameter &quot;rmaps_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Verbosity level for the rmaps framework
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmaps: parameter &quot;rmaps_base_schedule_policy&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value:
</span><br>
<span class="quotelev2">&gt;&gt;                            &quot;unspec&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Scheduling Policy for RMAPS. [slot | node]
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmaps: parameter &quot;rmaps_base_pernode&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Launch one ppn as directed
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmaps: parameter &quot;rmaps_base_n_pernode&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Launch n procs/node
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmaps: parameter &quot;rmaps_base_schedule_local&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            If nonzero, allow scheduling MPI
</span><br>
<span class="quotelev2">&gt;&gt; applications on the same node
</span><br>
<span class="quotelev2">&gt;&gt;                            as mpirun (default).  If zero, do not
</span><br>
<span class="quotelev2">&gt;&gt; schedule any MPI
</span><br>
<span class="quotelev2">&gt;&gt;                            applications on the same node as mpirun
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmaps: parameter &quot;rmaps_base_no_oversubscribe&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            If nonzero, then do not allow
</span><br>
<span class="quotelev2">&gt;&gt; oversubscription of nodes - mpirun
</span><br>
<span class="quotelev2">&gt;&gt;                            will return an error if there aren't  
</span><br>
<span class="quotelev2">&gt;&gt; enough
</span><br>
<span class="quotelev2">&gt;&gt; nodes to launch all
</span><br>
<span class="quotelev2">&gt;&gt;                            processes without oversubscribing
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmaps: parameter &quot;rmaps&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; rmaps framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmaps: parameter &quot;rmaps_round_robin_debug&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Toggle debug output for Round Robin  
</span><br>
<span class="quotelev2">&gt;&gt; RMAPS component
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmaps: parameter &quot;rmaps_round_robin_priority&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Selection priority for Round Robin  
</span><br>
<span class="quotelev2">&gt;&gt; RMAPS component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rmgr: parameter &quot;rmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; rmgr framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rmgr: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;rmgr_proxy_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rmgr: parameter &quot;rmgr_urm_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rml: parameter &quot;rml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; rml framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rml: parameter &quot;rml_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Verbosity level for the rml framework (0 =
</span><br>
<span class="quotelev2">&gt;&gt; no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rml: parameter &quot;rml_oob_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pls_base_reuse_daemons&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            If nonzero, reuse daemons to launch
</span><br>
<span class="quotelev2">&gt;&gt; dynamically spawned
</span><br>
<span class="quotelev2">&gt;&gt;                            processes.  If zero, do not reuse  
</span><br>
<span class="quotelev2">&gt;&gt; daemons (default)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter &quot;pls&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; pls framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter &quot;pls_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Verbosity level for the pls framework (0 =
</span><br>
<span class="quotelev2">&gt;&gt; no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pls_gridengine_debug&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Enable debugging of gridengine pls  
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pls_gridengine_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Enable verbose output of the gridengine
</span><br>
<span class="quotelev2">&gt;&gt; qrsh -inherit command
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter &quot;pls_gridengine_priority&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Priority of the gridengine pls component
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter &quot;pls_gridengine_orted&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;orted&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            The command name that the gridengine pls
</span><br>
<span class="quotelev2">&gt;&gt; component will invoke
</span><br>
<span class="quotelev2">&gt;&gt;                            for the ORTE daemon
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter &quot;pls_proxy_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter &quot;pls_rsh_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Whether or not to enable debugging output
</span><br>
<span class="quotelev2">&gt;&gt; for the rsh pls
</span><br>
<span class="quotelev2">&gt;&gt;                            component (0 or 1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pls_rsh_num_concurrent&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;128&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            How many pls_rsh_agent instances to invoke
</span><br>
<span class="quotelev2">&gt;&gt; concurrently (must be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter &quot;pls_rsh_force_rsh&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Force the launcher to always use rsh, even
</span><br>
<span class="quotelev2">&gt;&gt; for local daemons
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter &quot;pls_rsh_orted&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;orted&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            The command name that the rsh pls  
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt; will invoke for the
</span><br>
<span class="quotelev2">&gt;&gt;                            ORTE daemon
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter &quot;pls_rsh_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Priority of the rsh pls component
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter &quot;pls_rsh_delay&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Delay (in seconds) between invocations of
</span><br>
<span class="quotelev2">&gt;&gt; the remote agent, but
</span><br>
<span class="quotelev2">&gt;&gt;                            only used when the &quot;debug&quot; MCA  
</span><br>
<span class="quotelev2">&gt;&gt; parameter is
</span><br>
<span class="quotelev2">&gt;&gt; true, or the
</span><br>
<span class="quotelev2">&gt;&gt;                            top-level MCA debugging is enabled
</span><br>
<span class="quotelev2">&gt;&gt; (otherwise this value is
</span><br>
<span class="quotelev2">&gt;&gt;                            ignored)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter &quot;pls_rsh_reap&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            If set to 1, wait for all the processes to
</span><br>
<span class="quotelev2">&gt;&gt; complete before
</span><br>
<span class="quotelev2">&gt;&gt;                            exiting.  Otherwise, quit immediately --
</span><br>
<span class="quotelev2">&gt;&gt; without waiting for
</span><br>
<span class="quotelev2">&gt;&gt;                            confirmation that all other processes  
</span><br>
<span class="quotelev2">&gt;&gt; in the job
</span><br>
<span class="quotelev2">&gt;&gt; have
</span><br>
<span class="quotelev2">&gt;&gt;                            completed.
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter &quot;pls_rsh_assume_same_shell&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            If set to 1, assume that the shell on the
</span><br>
<span class="quotelev2">&gt;&gt; remote node is the
</span><br>
<span class="quotelev2">&gt;&gt;                            same as the shell on the local node.
</span><br>
<span class="quotelev2">&gt;&gt; Otherwise, probe for what
</span><br>
<span class="quotelev2">&gt;&gt;                            the remote shell.
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter &quot;pls_rsh_agent&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ssh : rsh&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            The command used to launch executables on
</span><br>
<span class="quotelev2">&gt;&gt; remote nodes
</span><br>
<span class="quotelev2">&gt;&gt;                            (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter &quot;pls_tm_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Enable debugging of the TM pls
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter &quot;pls_tm_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Enable verbose output of the TM pls
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter &quot;pls_tm_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;75&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection priority
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter &quot;pls_tm_orted&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;orted&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Command to use to start proxy orted
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pls_tm_want_path_check&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Whether the launching process should check
</span><br>
<span class="quotelev2">&gt;&gt; for the pls_tm_orted
</span><br>
<span class="quotelev2">&gt;&gt;                            executable in the PATH before launching
</span><br>
<span class="quotelev2">&gt;&gt; (the TM API does not
</span><br>
<span class="quotelev2">&gt;&gt;                            give an idication of failure; this is a
</span><br>
<span class="quotelev2">&gt;&gt; somewhat-lame
</span><br>
<span class="quotelev2">&gt;&gt;                            workaround; non-zero values enable this  
</span><br>
<span class="quotelev2">&gt;&gt; check)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA sds: parameter &quot;sds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; sds framework
</span><br>
<span class="quotelev2">&gt;&gt;                            (&lt;none&gt; means &quot;use all components that  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA sds: parameter &quot;sds_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                            Verbosity level for the sds framework (0 =
</span><br>
<span class="quotelev2">&gt;&gt; no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA sds: parameter &quot;sds_env_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA sds: parameter &quot;sds_pipe_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA sds: parameter &quot;sds_seed_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA sds: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;sds_singleton_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3627.php">Tim Prins: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Previous message:</strong> <a href="3625.php">George Bosilca: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>In reply to:</strong> <a href="3622.php">Ralph H Castain: "Re: [OMPI users] Connection to HNP lost"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3634.php">Glenn Carver: "Re: [OMPI users] Connection to HNP lost"</a>
<li><strong>Reply:</strong> <a href="3634.php">Glenn Carver: "Re: [OMPI users] Connection to HNP lost"</a>
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
