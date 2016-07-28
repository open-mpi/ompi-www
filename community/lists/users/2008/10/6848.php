<?
$subject_val = "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 11:13:30 2008" -->
<!-- isoreceived="20081003151330" -->
<!-- sent="Fri, 03 Oct 2008 17:11:13 +0200" -->
<!-- isosent="20081003151113" -->
<!-- name="Roberto Fichera" -->
<!-- email="kernel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment" -->
<!-- id="48E63611.8070606_at_tekno-soft.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D3F9299-90C9-4F43-88B6-E40BCBBAF468_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment<br>
<strong>From:</strong> Roberto Fichera (<em>kernel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-03 11:11:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6849.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6847.php">George Bosilca: "Re: [OMPI users] Tuned Collective MCA params"</a>
<li><strong>In reply to:</strong> <a href="6846.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6849.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="6849.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain ha scritto:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2008, at 7:14 AM, Roberto Fichera wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain ha scritto:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I committed something to the trunk yesterday. Given the complexity of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the fix, I don't plan to bring it over to the 1.3 branch until
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sometime mid-to-end next week so it can be adequately tested.
</span><br>
<span class="quotelev2">&gt;&gt; Ok! So it means that I can checkout from the SVN/trunk to get you fix,
</span><br>
<span class="quotelev2">&gt;&gt; right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, though note that I don't claim it is fully correct yet. Still
</span><br>
<span class="quotelev1">&gt; needs testing. However, I have tested it a fair amount and it seems okay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you do test it, please let me know how it goes.
</span><br>
I execute my test on the svn/trunk below
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.4a1r19677
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r19677
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: Unreleased developer copy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.4a1r19677
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r19677
<br>
&nbsp;&nbsp;&nbsp;Open RTE release date: Unreleased developer copy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.4a1r19677
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r19677
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Unreleased developer copy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.4a1r19677
<br>
&nbsp;
<br>
below is the output which seems to freeze just after the second spawn.
<br>
<p>[roberto_at_master TestOpenMPI]$ mpirun --verbose --debug-daemons
<br>
--hostfile $PBS_NODEFILE -wdir &quot;`pwd`&quot; -np 1 testmaster 100000 $PBS_NODEFILE
<br>
[master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
<br>
add_local_procs
<br>
[master.tekno-soft.it:30063] [[19516,0],0] node[0].name master daemon 0
<br>
arch ffc91200
<br>
[master.tekno-soft.it:30063] [[19516,0],0] node[1].name cluster4 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:30063] [[19516,0],0] node[2].name cluster3 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:30063] [[19516,0],0] node[3].name cluster2 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:30063] [[19516,0],0] node[4].name cluster1 daemon
<br>
INVALID arch ffc91200
<br>
Initializing MPI ...
<br>
[master.tekno-soft.it:30063] [[19516,0],0] orted_recv: received
<br>
sync+nidmap from local proc [[19516,1],0]
<br>
[master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
<br>
message_local_procs
<br>
[master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
<br>
message_local_procs
<br>
Loading the node's ring from file
<br>
'/var/torque/aux//932.master.tekno-soft.it'
<br>
... adding node #1 host is 'cluster4.tekno-soft.it'
<br>
... adding node #2 host is 'cluster3.tekno-soft.it'
<br>
... adding node #3 host is 'cluster2.tekno-soft.it'
<br>
... adding node #4 host is 'cluster1.tekno-soft.it'
<br>
A 4 node's ring has been made
<br>
At least one node is available, let's start to distribute 100000 job
<br>
across 4 nodes!!!
<br>
Setting up the host as 'cluster4.tekno-soft.it'
<br>
Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
<br>
Spawning a task 'testslave.sh' on node 'cluster4.tekno-soft.it'
<br>
Daemon was launched on cluster4.tekno-soft.it - beginning to initialize
<br>
Daemon [[19516,0],1] checking in as pid 25123 on host cluster4.tekno-soft.it
<br>
Daemon [[19516,0],1] not using static ports
<br>
[cluster4.tekno-soft.it:25123] [[19516,0],1] orted: up and running -
<br>
waiting for commands!
<br>
[master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
<br>
add_local_procs
<br>
[master.tekno-soft.it:30063] [[19516,0],0] node[0].name master daemon 0
<br>
arch ffc91200
<br>
[master.tekno-soft.it:30063] [[19516,0],0] node[1].name cluster4 daemon
<br>
1 arch ffc91200
<br>
[master.tekno-soft.it:30063] [[19516,0],0] node[2].name cluster3 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:30063] [[19516,0],0] node[3].name cluster2 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:30063] [[19516,0],0] node[4].name cluster1 daemon
<br>
INVALID arch ffc91200
<br>
[cluster4.tekno-soft.it:25123] [[19516,0],1] orted_cmd: received
<br>
add_local_procs
<br>
[cluster4.tekno-soft.it:25123] [[19516,0],1] node[0].name master daemon
<br>
0 arch ffc91200
<br>
[cluster4.tekno-soft.it:25123] [[19516,0],1] node[1].name cluster4
<br>
daemon 1 arch ffc91200
<br>
[cluster4.tekno-soft.it:25123] [[19516,0],1] node[2].name cluster3
<br>
daemon INVALID arch ffc91200
<br>
[cluster4.tekno-soft.it:25123] [[19516,0],1] node[3].name cluster2
<br>
daemon INVALID arch ffc91200
<br>
[cluster4.tekno-soft.it:25123] [[19516,0],1] node[4].name cluster1
<br>
daemon INVALID arch ffc91200
<br>
[cluster4.tekno-soft.it:25123] [[19516,0],1] orted_recv: received
<br>
sync+nidmap from local proc [[19516,2],0]
<br>
[master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
<br>
message_local_procs
<br>
[cluster4.tekno-soft.it:25123] [[19516,0],1] orted_cmd: received
<br>
collective data cmd
<br>
[cluster4.tekno-soft.it:25123] [[19516,0],1] orted_cmd: received
<br>
message_local_procs
<br>
[cluster4.tekno-soft.it:25123] [[19516,0],1] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
<br>
message_local_procs
<br>
[cluster4.tekno-soft.it:25123] [[19516,0],1] orted_cmd: received
<br>
message_local_procs
<br>
<p>Let me know if you need my test program.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 3, 2008, at 5:02 AM, Roberto Fichera wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph Castain ha scritto:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Actually, it just occurred to me that you may be seeing a problem in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; comm_spawn itself that I am currently chasing down. It is in the 1.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; branch and has to do with comm_spawning procs on subsets of nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (instead of across all nodes). Could be related to this - you might
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; want to give me a chance to complete the fix. I have identified the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problem and should have it fixed later today in our trunk - probably
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; won't move to the 1.3 branch for several days.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you have any news about the above fix? Does the fix is already
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available for testing?
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6849.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6847.php">George Bosilca: "Re: [OMPI users] Tuned Collective MCA params"</a>
<li><strong>In reply to:</strong> <a href="6846.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6849.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="6849.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
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
