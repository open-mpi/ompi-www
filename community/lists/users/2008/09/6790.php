<?
$subject_val = "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 10:26:28 2008" -->
<!-- isoreceived="20080930142628" -->
<!-- sent="Tue, 30 Sep 2008 16:24:09 +0200" -->
<!-- isosent="20080930142409" -->
<!-- name="Roberto Fichera" -->
<!-- email="kernel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment" -->
<!-- id="48E23689.4090100_at_tekno-soft.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48E1FC74.2070402_at_tekno-soft.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment<br>
<strong>From:</strong> Roberto Fichera (<em>kernel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-30 10:24:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6791.php">Jeff Squyres: "Re: [OMPI users] possible bug: child stdout not redirected after MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6789.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE on MPI_Testsome"</a>
<li><strong>In reply to:</strong> <a href="6787.php">Roberto Fichera: "[OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6800.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="6800.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Roberto Fichera ha scritto:
<br>
<span class="quotelev1">&gt; Hi All on the list,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to execute dynamic MPI applications using MPI_Comm_spawn().
</span><br>
<span class="quotelev1">&gt; The application I'm using for tests, basically is
</span><br>
<span class="quotelev1">&gt; composed by a master, which spawn a slave in each assigned node in a
</span><br>
<span class="quotelev1">&gt; multithreading fashion. The master is started with a
</span><br>
<span class="quotelev1">&gt; number of jobs to perform and a filename, containing the list of
</span><br>
<span class="quotelev1">&gt; assigned nodes. The idea is to handle all the dispatching
</span><br>
<span class="quotelev1">&gt; logic within the application, so that the master will try to take as
</span><br>
<span class="quotelev1">&gt; busy as possible each assigned node. Said that, for each spawned
</span><br>
<span class="quotelev1">&gt; job, the master allocate a thread for spawning and handling the
</span><br>
<span class="quotelev1">&gt; communication, than generate a random number, send it to the
</span><br>
<span class="quotelev1">&gt; slave which simply send it back to the master. Finally the slave
</span><br>
<span class="quotelev1">&gt; terminate its job and the relative node become free for a new one.
</span><br>
<span class="quotelev1">&gt; The things will continue until all the requested jobs are done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test program I'm using *doesn't* work flawless in mpich2 because it
</span><br>
<span class="quotelev1">&gt; has a ~24k spawned job limitation, due to a monotonically
</span><br>
<span class="quotelev1">&gt; increasing of its internal context id which basically stops the
</span><br>
<span class="quotelev1">&gt; application due to a library internal overflow. The internal context id,
</span><br>
<span class="quotelev1">&gt; allocated
</span><br>
<span class="quotelev1">&gt; for each terminated spawned job, are never recycled at moment. The
</span><br>
<span class="quotelev1">&gt; unique MPI-2 implementation, so supporting MPI_Comm_spawn(),
</span><br>
<span class="quotelev1">&gt; which was able to complete the test is currently the HP MPI. So now I
</span><br>
<span class="quotelev1">&gt; would start to check OpenMPI if it's suitable for our dynamic parallel
</span><br>
<span class="quotelev1">&gt; applications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test application is linked against OpenMPI v1.3a1r19645, running of
</span><br>
<span class="quotelev1">&gt; Fedora8 x86_64 + all updates.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My first attempt end up on the error below which I basically don't know
</span><br>
<span class="quotelev1">&gt; where to look further. Note that I've already checked PATHs and
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH, the application is basically configured correctly since
</span><br>
<span class="quotelev1">&gt; it uses two scripts for starting and all the paths are set there.
</span><br>
<span class="quotelev1">&gt; Basically I need to start *one* master application which will handle all
</span><br>
<span class="quotelev1">&gt; the things for managing slave applications. The communication is *only*
</span><br>
<span class="quotelev1">&gt; master &lt;-&gt; slave and never collective, at moment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test program is available on request.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does any one have an idea what's going on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Roberto Fichera.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [roberto_at_cluster4 TestOpenMPI]$ orterun -wdir /data/roberto/MPI/TestOpenMPI -np
</span><br>
<span class="quotelev1">&gt; 1 testmaster 10000 $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt; Initializing MPI ...
</span><br>
<span class="quotelev1">&gt; Loading the node's ring from file '/var/torque/aux//909.master.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; ... adding node #1 host is 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; ... adding node #2 host is 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; ... adding node #3 host is 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; ... adding node #4 host is 'master.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; A 4 node's ring has been made
</span><br>
<span class="quotelev1">&gt; At least one node is available, let's start to distribute 10000 job across 4
</span><br>
<span class="quotelev1">&gt; nodes!!!
</span><br>
<span class="quotelev1">&gt; ****************** Starting job #1
</span><br>
<span class="quotelev1">&gt; ****************** Starting job #2
</span><br>
<span class="quotelev1">&gt; ****************** Starting job #3
</span><br>
<span class="quotelev1">&gt; ****************** Starting job #4
</span><br>
<span class="quotelev1">&gt; Setting up the host as 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev1">&gt; Spawning a task './testslave.sh' on node 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; Setting up the host as 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev1">&gt; Spawning a task './testslave.sh' on node 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; Setting up the host as 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev1">&gt; Spawning a task './testslave.sh' on node 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; Setting up the host as 'master.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev1">&gt; Spawning a task './testslave.sh' on node 'master.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [cluster4.tekno-soft.it:21287] [[30014,0],0] ORTE_ERROR_LOG: Resource busy in
</span><br>
<span class="quotelev1">&gt; file base/plm_base_receive.c at line 169
</span><br>
<span class="quotelev1">&gt; [cluster4.tekno-soft.it:21287] [[30014,0],0] ORTE_ERROR_LOG: Resource busy in
</span><br>
<span class="quotelev1">&gt; file base/plm_base_receive.c at line 169
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Just to say that I made a little progress, now seems that everything
<br>
starts, but  mpirun doesn't
<br>
find the executable
<br>
<p>[roberto_at_cluster4 TestOpenMPI]$ mpirun --verbose --debug-daemons --mca
<br>
obl -np 1 -wdir `pwd` testmaster 10000 $PBS_NODEFILE
<br>
Daemon was launched on cluster3.tekno-soft.it - beginning to initialize
<br>
Daemon was launched on cluster2.tekno-soft.it - beginning to initialize
<br>
Daemon was launched on cluster1.tekno-soft.it - beginning to initialize
<br>
Daemon [[14600,0],2] checking in as pid 28732 on host cluster2.tekno-soft.it
<br>
Daemon [[14600,0],2] not using static ports
<br>
[cluster2.tekno-soft.it:28732] [[14600,0],2] orted: up and running -
<br>
waiting for commands!
<br>
Daemon [[14600,0],3] checking in as pid 2590 on host cluster1.tekno-soft.it
<br>
Daemon [[14600,0],3] not using static ports
<br>
[cluster1.tekno-soft.it:02590] [[14600,0],3] orted: up and running -
<br>
waiting for commands!
<br>
Daemon [[14600,0],1] checking in as pid 6969 on host cluster3.tekno-soft.it
<br>
Daemon [[14600,0],1] not using static ports
<br>
[cluster3.tekno-soft.it:06969] [[14600,0],1] orted: up and running -
<br>
waiting for commands!
<br>
Daemon was launched on master.tekno-soft.it - beginning to initialize
<br>
Daemon [[14600,0],4] checking in as pid 1113 on host master.tekno-soft.it
<br>
Daemon [[14600,0],4] not using static ports
<br>
[master.tekno-soft.it:01113] [[14600,0],4] orted: up and running -
<br>
waiting for commands!
<br>
[cluster4.tekno-soft.it:07953] [[14600,0],0] orted_cmd: received
<br>
add_local_procs
<br>
[cluster4.tekno-soft.it:07953] [[14600,0],0] node[0].name cluster4
<br>
daemon 0 arch ffc91200
<br>
[cluster4.tekno-soft.it:07953] [[14600,0],0] node[1].name cluster3
<br>
daemon 1 arch ffc91200
<br>
[cluster4.tekno-soft.it:07953] [[14600,0],0] node[2].name cluster2
<br>
daemon 2 arch ffc91200
<br>
[cluster4.tekno-soft.it:07953] [[14600,0],0] node[3].name cluster1
<br>
daemon 3 arch ffc91200
<br>
[cluster4.tekno-soft.it:07953] [[14600,0],0] node[4].name master daemon
<br>
4 arch ffc91200
<br>
[cluster3.tekno-soft.it:06969] [[14600,0],1] orted_cmd: received
<br>
add_local_procs
<br>
[cluster2.tekno-soft.it:28732] [[14600,0],2] orted_cmd: received
<br>
add_local_procs
<br>
[master.tekno-soft.it:01113] [[14600,0],4] orted_cmd: received
<br>
add_local_procs
<br>
[cluster3.tekno-soft.it:06969] [[14600,0],1] node[0].name cluster4
<br>
daemon 0 arch ffc91200
<br>
[cluster3.tekno-soft.it:06969] [[14600,0],1] node[1].name cluster3
<br>
daemon 1 arch ffc91200
<br>
[cluster3.tekno-soft.it:06969] [[14600,0],1] node[2].name cluster2
<br>
daemon 2 [cluster2.tekno-soft.it:28732] [[14600,0],2] node[0].name
<br>
cluster4 daemon 0 arch ffc91200
<br>
[cluster2.tekno-soft.it:28732] [[14600,0],2] node[1].name cluster3
<br>
daemon 1 arch ffc91200
<br>
[cluster2.tekno-soft.it:28732] [[14600,0],2] node[2].name cluster2
<br>
daemon 2 [master.tekno-soft.it:01113] [[14600,0],4] node[0].name
<br>
cluster4 daemon 0 arch ffc91200
<br>
[master.tekno-soft.it:01113] [[14600,0],4] node[1].name cluster3 daemon
<br>
1 arch ffc91200
<br>
[master.tekno-soft.it:01113] [[14600,0],4] node[2].name cluster2 daemon
<br>
2 arch farch ffc91200
<br>
[cluster3.tekno-soft.it:06969] [[14600,0],1] node[3].name cluster1
<br>
daemon 3 arch ffc91200
<br>
[cluster3.tekno-soft.it:06969] [[14600,0],1] node[4].name master daemon
<br>
4 arch ffc91200
<br>
arch ffc91200
<br>
[cluster2.tekno-soft.it:28732] [[14600,0],2] node[3].name cluster1
<br>
daemon 3 arch ffc91200
<br>
[cluster2.tekno-soft.it:28732] [[14600,0],2] node[4].name master daemon
<br>
4 arch ffc91200
<br>
fc91200
<br>
[master.tekno-soft.it:01113] [[14600,0],4] node[3].name cluster1 daemon
<br>
3 arch ffc91200
<br>
[master.tekno-soft.it:01113] [[14600,0],4] node[4].name master daemon 4
<br>
arch ffc91200
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it could not
<br>
find an executable:
<br>
<p>Executable: 1
<br>
Node: cluster4.tekno-soft.it
<br>
<p>while attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
[master.tekno-soft.it:01113] [[14600,0],4] orted_cmd: received exit
<br>
[master.tekno-soft.it:01113] [[14600,0],4] orted: finalizing
<br>
[cluster2.tekno-soft.it:28732] [[14600,0],2] orted_cmd: received exit
<br>
[cluster2.tekno-soft.it:28732] [[14600,0],2] orted: finalizing
<br>
[master:01113] *** Process received signal ***
<br>
[cluster2:28732] *** Process received signal ***
<br>
[cluster2:28732] Signal: Segmentation fault (11)
<br>
[cluster2:28732] Signal code: Address not mapped (1)
<br>
[cluster2:28732] Failing at address: 0x2aaaab784af0
<br>
[master:01113] Signal: Segmentation fault (11)
<br>
[master:01113] Signal code: Address not mapped (1)
<br>
[master:01113] Failing at address: 0x2aaaab786af0
<br>
mpirun: abort is already in progress...hit ctrl-c again to forcibly
<br>
terminate
<br>
<p>[cluster1.tekno-soft.it:02590] [[14600,0],3] routed:binomial: Connection
<br>
to lifeline [[14600,0],0] lost
<br>
[roberto_at_cluster4 TestOpenMPI]$     
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6791.php">Jeff Squyres: "Re: [OMPI users] possible bug: child stdout not redirected after MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6789.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE on MPI_Testsome"</a>
<li><strong>In reply to:</strong> <a href="6787.php">Roberto Fichera: "[OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6800.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="6800.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
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
