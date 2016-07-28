<?
$subject_val = "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 12:38:43 2008" -->
<!-- isoreceived="20081003163843" -->
<!-- sent="Fri, 03 Oct 2008 18:36:21 +0200" -->
<!-- isosent="20081003163621" -->
<!-- name="Roberto Fichera" -->
<!-- email="kernel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment" -->
<!-- id="48E64A05.60508_at_tekno-soft.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71693B6F-777B-4D47-8588-2D6833BE94F9_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-10-03 12:36:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6851.php">kyron_at_[hidden]: "Re: [OMPI users] Tuned Collective MCA params"</a>
<li><strong>Previous message:</strong> <a href="6849.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6849.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6862.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="6862.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain ha scritto:
<br>
<span class="quotelev1">&gt; Interesting. I ran a loop calling comm_spawn 1000 times without a
</span><br>
<span class="quotelev1">&gt; problem. I suspect it is the threading that is causing the trouble here.
</span><br>
I think so! My guessing is that at low level there is some trouble when
<br>
handling *concurrent*
<br>
orted spawning. Maybe
<br>
<span class="quotelev1">&gt; You are welcome to send me the code. You can find my loop code in your
</span><br>
<span class="quotelev1">&gt; code distribution under orte/test/mpi - look for loop_spawn and
</span><br>
<span class="quotelev1">&gt; loop_child.
</span><br>
In the attached code the spawing logic is currently under a loop in the
<br>
main of the testmaster, so it's completly
<br>
unthreaded at least until the MPI_Comm_spawn() terminate its work. If
<br>
you wish like to test multithreading spawing
<br>
you can comment the NodeThread_spawnSlave() in the main loop and
<br>
uncomment the same function in the
<br>
NodeThread_threadMain(). Finally if you want multithreading spawning but
<br>
serialized against a mutex than uncomment
<br>
the pthread_mutex_lock/unlock() in the NodeThread_threadMain().
<br>
<p>This code run *without* any trouble in the HP MPI implementation. It
<br>
works not so well in mpich2 trunk version due
<br>
to two problems: limit of ~24.4K context id and/or a race in poll()
<br>
while waiting a termination under MPI_Comm_disconnect()
<br>
concurrently with a MPI_Comm_spawn().
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2008, at 9:11 AM, Roberto Fichera wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain ha scritto:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 3, 2008, at 7:14 AM, Roberto Fichera wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph Castain ha scritto:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I committed something to the trunk yesterday. Given the complexity of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the fix, I don't plan to bring it over to the 1.3 branch until
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sometime mid-to-end next week so it can be adequately tested.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ok! So it means that I can checkout from the SVN/trunk to get you fix,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; right?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, though note that I don't claim it is fully correct yet. Still
</span><br>
<span class="quotelev3">&gt;&gt;&gt; needs testing. However, I have tested it a fair amount and it seems
</span><br>
<span class="quotelev3">&gt;&gt;&gt; okay.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you do test it, please let me know how it goes.
</span><br>
<span class="quotelev2">&gt;&gt; I execute my test on the svn/trunk below
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                Open MPI: 1.4a1r19677
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI SVN revision: r19677
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI release date: Unreleased developer copy
</span><br>
<span class="quotelev2">&gt;&gt;                Open RTE: 1.4a1r19677
</span><br>
<span class="quotelev2">&gt;&gt;   Open RTE SVN revision: r19677
</span><br>
<span class="quotelev2">&gt;&gt;   Open RTE release date: Unreleased developer copy
</span><br>
<span class="quotelev2">&gt;&gt;                    OPAL: 1.4a1r19677
</span><br>
<span class="quotelev2">&gt;&gt;       OPAL SVN revision: r19677
</span><br>
<span class="quotelev2">&gt;&gt;       OPAL release date: Unreleased developer copy
</span><br>
<span class="quotelev2">&gt;&gt;            Ident string: 1.4a1r19677
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; below is the output which seems to freeze just after the second spawn.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [roberto_at_master TestOpenMPI]$ mpirun --verbose --debug-daemons
</span><br>
<span class="quotelev2">&gt;&gt; --hostfile $PBS_NODEFILE -wdir &quot;`pwd`&quot; -np 1 testmaster 100000
</span><br>
<span class="quotelev2">&gt;&gt; $PBS_NODEFILE
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; add_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[0].name master daemon 0
</span><br>
<span class="quotelev2">&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[1].name cluster4 daemon
</span><br>
<span class="quotelev2">&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[2].name cluster3 daemon
</span><br>
<span class="quotelev2">&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[3].name cluster2 daemon
</span><br>
<span class="quotelev2">&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[4].name cluster1 daemon
</span><br>
<span class="quotelev2">&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; Initializing MPI ...
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_recv: received
</span><br>
<span class="quotelev2">&gt;&gt; sync+nidmap from local proc [[19516,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; collective data cmd
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; message_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; collective data cmd
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; message_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; Loading the node's ring from file
</span><br>
<span class="quotelev2">&gt;&gt; '/var/torque/aux//932.master.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; ... adding node #1 host is 'cluster4.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; ... adding node #2 host is 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; ... adding node #3 host is 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; ... adding node #4 host is 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; A 4 node's ring has been made
</span><br>
<span class="quotelev2">&gt;&gt; At least one node is available, let's start to distribute 100000 job
</span><br>
<span class="quotelev2">&gt;&gt; across 4 nodes!!!
</span><br>
<span class="quotelev2">&gt;&gt; Setting up the host as 'cluster4.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev2">&gt;&gt; Spawning a task 'testslave.sh' on node 'cluster4.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; Daemon was launched on cluster4.tekno-soft.it - beginning to initialize
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[19516,0],1] checking in as pid 25123 on host
</span><br>
<span class="quotelev2">&gt;&gt; cluster4.tekno-soft.it
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[19516,0],1] not using static ports
</span><br>
<span class="quotelev2">&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted: up and running -
</span><br>
<span class="quotelev2">&gt;&gt; waiting for commands!
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; add_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[0].name master daemon 0
</span><br>
<span class="quotelev2">&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[1].name cluster4 daemon
</span><br>
<span class="quotelev2">&gt;&gt; 1 arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[2].name cluster3 daemon
</span><br>
<span class="quotelev2">&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[3].name cluster2 daemon
</span><br>
<span class="quotelev2">&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[4].name cluster1 daemon
</span><br>
<span class="quotelev2">&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; add_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] node[0].name master daemon
</span><br>
<span class="quotelev2">&gt;&gt; 0 arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] node[1].name cluster4
</span><br>
<span class="quotelev2">&gt;&gt; daemon 1 arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] node[2].name cluster3
</span><br>
<span class="quotelev2">&gt;&gt; daemon INVALID arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] node[3].name cluster2
</span><br>
<span class="quotelev2">&gt;&gt; daemon INVALID arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] node[4].name cluster1
</span><br>
<span class="quotelev2">&gt;&gt; daemon INVALID arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted_recv: received
</span><br>
<span class="quotelev2">&gt;&gt; sync+nidmap from local proc [[19516,2],0]
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; collective data cmd
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; message_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; collective data cmd
</span><br>
<span class="quotelev2">&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; message_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; collective data cmd
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; collective data cmd
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; message_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; message_local_procs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me know if you need my test program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Oct 3, 2008, at 5:02 AM, Roberto Fichera wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph Castain ha scritto:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Actually, it just occurred to me that you may be seeing a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; comm_spawn itself that I am currently chasing down. It is in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; branch and has to do with comm_spawning procs on subsets of nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (instead of across all nodes). Could be related to this - you might
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; want to give me a chance to complete the fix. I have identified the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem and should have it fixed later today in our trunk -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; probably
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; won't move to the 1.3 branch for several days.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Do you have any news about the above fix? Does the fix is already
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; available for testing?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<p><p>
<br><hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6850/testspawn.tar.bz2">testspawn.tar.bz2</a>
</ul>
<!-- attachment="testspawn.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6851.php">kyron_at_[hidden]: "Re: [OMPI users] Tuned Collective MCA params"</a>
<li><strong>Previous message:</strong> <a href="6849.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6849.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6862.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="6862.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
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
