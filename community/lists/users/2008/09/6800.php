<?
$subject_val = "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 16:43:38 2008" -->
<!-- isoreceived="20080930204338" -->
<!-- sent="Tue, 30 Sep 2008 14:43:27 -0600" -->
<!-- isosent="20080930204327" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment" -->
<!-- id="9923038A-D040-4D21-9B6E-D8ECBF3B6ECC_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48E23689.4090100_at_tekno-soft.it" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-30 16:43:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6801.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6799.php">Joe Griffin: "[OMPI users] 1.2.2 to 1.2.7 differences."</a>
<li><strong>In reply to:</strong> <a href="6790.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6802.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6802.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Roberto
<br>
<p>There is something wrong with this cmd line - perhaps it wasn't copied  
<br>
correctly?
<br>
<p>mpirun --verbose --debug-daemons --mca obl -np 1 -wdir `pwd`  
<br>
testmaster 10000 $PBS_NODEFILE
<br>
<p>Specifically, the following is incomplete: --mca obl
<br>
<p>I'm not sure if this is the problem or not, but I am unaware of such  
<br>
an option and believe it could cause mpirun to become confused.
<br>
<p>Ralph
<br>
<p><p>On Sep 30, 2008, at 8:24 AM, Roberto Fichera wrote:
<br>
<p><span class="quotelev1">&gt; Roberto Fichera ha scritto:
</span><br>
<span class="quotelev2">&gt;&gt; Hi All on the list,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to execute dynamic MPI applications using  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_spawn().
</span><br>
<span class="quotelev2">&gt;&gt; The application I'm using for tests, basically is
</span><br>
<span class="quotelev2">&gt;&gt; composed by a master, which spawn a slave in each assigned node in a
</span><br>
<span class="quotelev2">&gt;&gt; multithreading fashion. The master is started with a
</span><br>
<span class="quotelev2">&gt;&gt; number of jobs to perform and a filename, containing the list of
</span><br>
<span class="quotelev2">&gt;&gt; assigned nodes. The idea is to handle all the dispatching
</span><br>
<span class="quotelev2">&gt;&gt; logic within the application, so that the master will try to take as
</span><br>
<span class="quotelev2">&gt;&gt; busy as possible each assigned node. Said that, for each spawned
</span><br>
<span class="quotelev2">&gt;&gt; job, the master allocate a thread for spawning and handling the
</span><br>
<span class="quotelev2">&gt;&gt; communication, than generate a random number, send it to the
</span><br>
<span class="quotelev2">&gt;&gt; slave which simply send it back to the master. Finally the slave
</span><br>
<span class="quotelev2">&gt;&gt; terminate its job and the relative node become free for a new one.
</span><br>
<span class="quotelev2">&gt;&gt; The things will continue until all the requested jobs are done.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The test program I'm using *doesn't* work flawless in mpich2  
</span><br>
<span class="quotelev2">&gt;&gt; because it
</span><br>
<span class="quotelev2">&gt;&gt; has a ~24k spawned job limitation, due to a monotonically
</span><br>
<span class="quotelev2">&gt;&gt; increasing of its internal context id which basically stops the
</span><br>
<span class="quotelev2">&gt;&gt; application due to a library internal overflow. The internal  
</span><br>
<span class="quotelev2">&gt;&gt; context id,
</span><br>
<span class="quotelev2">&gt;&gt; allocated
</span><br>
<span class="quotelev2">&gt;&gt; for each terminated spawned job, are never recycled at moment. The
</span><br>
<span class="quotelev2">&gt;&gt; unique MPI-2 implementation, so supporting MPI_Comm_spawn(),
</span><br>
<span class="quotelev2">&gt;&gt; which was able to complete the test is currently the HP MPI. So now I
</span><br>
<span class="quotelev2">&gt;&gt; would start to check OpenMPI if it's suitable for our dynamic  
</span><br>
<span class="quotelev2">&gt;&gt; parallel
</span><br>
<span class="quotelev2">&gt;&gt; applications.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The test application is linked against OpenMPI v1.3a1r19645,  
</span><br>
<span class="quotelev2">&gt;&gt; running of
</span><br>
<span class="quotelev2">&gt;&gt; Fedora8 x86_64 + all updates.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My first attempt end up on the error below which I basically don't  
</span><br>
<span class="quotelev2">&gt;&gt; know
</span><br>
<span class="quotelev2">&gt;&gt; where to look further. Note that I've already checked PATHs and
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH, the application is basically configured correctly  
</span><br>
<span class="quotelev2">&gt;&gt; since
</span><br>
<span class="quotelev2">&gt;&gt; it uses two scripts for starting and all the paths are set there.
</span><br>
<span class="quotelev2">&gt;&gt; Basically I need to start *one* master application which will  
</span><br>
<span class="quotelev2">&gt;&gt; handle all
</span><br>
<span class="quotelev2">&gt;&gt; the things for managing slave applications. The communication is  
</span><br>
<span class="quotelev2">&gt;&gt; *only*
</span><br>
<span class="quotelev2">&gt;&gt; master &lt;-&gt; slave and never collective, at moment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The test program is available on request.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does any one have an idea what's going on?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; Roberto Fichera.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [roberto_at_cluster4 TestOpenMPI]$ orterun -wdir /data/roberto/MPI/ 
</span><br>
<span class="quotelev2">&gt;&gt; TestOpenMPI -np
</span><br>
<span class="quotelev2">&gt;&gt; 1 testmaster 10000 $PBS_NODEFILE
</span><br>
<span class="quotelev2">&gt;&gt; Initializing MPI ...
</span><br>
<span class="quotelev2">&gt;&gt; Loading the node's ring from file '/var/torque/aux// 
</span><br>
<span class="quotelev2">&gt;&gt; 909.master.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; ... adding node #1 host is 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; ... adding node #2 host is 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; ... adding node #3 host is 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; ... adding node #4 host is 'master.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; A 4 node's ring has been made
</span><br>
<span class="quotelev2">&gt;&gt; At least one node is available, let's start to distribute 10000 job  
</span><br>
<span class="quotelev2">&gt;&gt; across 4
</span><br>
<span class="quotelev2">&gt;&gt; nodes!!!
</span><br>
<span class="quotelev2">&gt;&gt; ****************** Starting job #1
</span><br>
<span class="quotelev2">&gt;&gt; ****************** Starting job #2
</span><br>
<span class="quotelev2">&gt;&gt; ****************** Starting job #3
</span><br>
<span class="quotelev2">&gt;&gt; ****************** Starting job #4
</span><br>
<span class="quotelev2">&gt;&gt; Setting up the host as 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev2">&gt;&gt; Spawning a task './testslave.sh' on node 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; Setting up the host as 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev2">&gt;&gt; Spawning a task './testslave.sh' on node 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; Setting up the host as 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev2">&gt;&gt; Spawning a task './testslave.sh' on node 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; Setting up the host as 'master.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev2">&gt;&gt; Spawning a task './testslave.sh' on node 'master.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while  
</span><br>
<span class="quotelev2">&gt;&gt; attempting to
</span><br>
<span class="quotelev2">&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see  
</span><br>
<span class="quotelev2">&gt;&gt; above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev2">&gt;&gt; shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev2">&gt;&gt; have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [cluster4.tekno-soft.it:21287] [[30014,0],0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev2">&gt;&gt; Resource busy in
</span><br>
<span class="quotelev2">&gt;&gt; file base/plm_base_receive.c at line 169
</span><br>
<span class="quotelev2">&gt;&gt; [cluster4.tekno-soft.it:21287] [[30014,0],0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev2">&gt;&gt; Resource busy in
</span><br>
<span class="quotelev2">&gt;&gt; file base/plm_base_receive.c at line 169
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Just to say that I made a little progress, now seems that everything
</span><br>
<span class="quotelev1">&gt; starts, but  mpirun doesn't
</span><br>
<span class="quotelev1">&gt; find the executable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [roberto_at_cluster4 TestOpenMPI]$ mpirun --verbose --debug-daemons --mca
</span><br>
<span class="quotelev1">&gt; obl -np 1 -wdir `pwd` testmaster 10000 $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt; Daemon was launched on cluster3.tekno-soft.it - beginning to  
</span><br>
<span class="quotelev1">&gt; initialize
</span><br>
<span class="quotelev1">&gt; Daemon was launched on cluster2.tekno-soft.it - beginning to  
</span><br>
<span class="quotelev1">&gt; initialize
</span><br>
<span class="quotelev1">&gt; Daemon was launched on cluster1.tekno-soft.it - beginning to  
</span><br>
<span class="quotelev1">&gt; initialize
</span><br>
<span class="quotelev1">&gt; Daemon [[14600,0],2] checking in as pid 28732 on host cluster2.tekno- 
</span><br>
<span class="quotelev1">&gt; soft.it
</span><br>
<span class="quotelev1">&gt; Daemon [[14600,0],2] not using static ports
</span><br>
<span class="quotelev1">&gt; [cluster2.tekno-soft.it:28732] [[14600,0],2] orted: up and running -
</span><br>
<span class="quotelev1">&gt; waiting for commands!
</span><br>
<span class="quotelev1">&gt; Daemon [[14600,0],3] checking in as pid 2590 on host cluster1.tekno- 
</span><br>
<span class="quotelev1">&gt; soft.it
</span><br>
<span class="quotelev1">&gt; Daemon [[14600,0],3] not using static ports
</span><br>
<span class="quotelev1">&gt; [cluster1.tekno-soft.it:02590] [[14600,0],3] orted: up and running -
</span><br>
<span class="quotelev1">&gt; waiting for commands!
</span><br>
<span class="quotelev1">&gt; Daemon [[14600,0],1] checking in as pid 6969 on host cluster3.tekno- 
</span><br>
<span class="quotelev1">&gt; soft.it
</span><br>
<span class="quotelev1">&gt; Daemon [[14600,0],1] not using static ports
</span><br>
<span class="quotelev1">&gt; [cluster3.tekno-soft.it:06969] [[14600,0],1] orted: up and running -
</span><br>
<span class="quotelev1">&gt; waiting for commands!
</span><br>
<span class="quotelev1">&gt; Daemon was launched on master.tekno-soft.it - beginning to initialize
</span><br>
<span class="quotelev1">&gt; Daemon [[14600,0],4] checking in as pid 1113 on host master.tekno- 
</span><br>
<span class="quotelev1">&gt; soft.it
</span><br>
<span class="quotelev1">&gt; Daemon [[14600,0],4] not using static ports
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:01113] [[14600,0],4] orted: up and running -
</span><br>
<span class="quotelev1">&gt; waiting for commands!
</span><br>
<span class="quotelev1">&gt; [cluster4.tekno-soft.it:07953] [[14600,0],0] orted_cmd: received
</span><br>
<span class="quotelev1">&gt; add_local_procs
</span><br>
<span class="quotelev1">&gt; [cluster4.tekno-soft.it:07953] [[14600,0],0] node[0].name cluster4
</span><br>
<span class="quotelev1">&gt; daemon 0 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster4.tekno-soft.it:07953] [[14600,0],0] node[1].name cluster3
</span><br>
<span class="quotelev1">&gt; daemon 1 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster4.tekno-soft.it:07953] [[14600,0],0] node[2].name cluster2
</span><br>
<span class="quotelev1">&gt; daemon 2 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster4.tekno-soft.it:07953] [[14600,0],0] node[3].name cluster1
</span><br>
<span class="quotelev1">&gt; daemon 3 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster4.tekno-soft.it:07953] [[14600,0],0] node[4].name master  
</span><br>
<span class="quotelev1">&gt; daemon
</span><br>
<span class="quotelev1">&gt; 4 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster3.tekno-soft.it:06969] [[14600,0],1] orted_cmd: received
</span><br>
<span class="quotelev1">&gt; add_local_procs
</span><br>
<span class="quotelev1">&gt; [cluster2.tekno-soft.it:28732] [[14600,0],2] orted_cmd: received
</span><br>
<span class="quotelev1">&gt; add_local_procs
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:01113] [[14600,0],4] orted_cmd: received
</span><br>
<span class="quotelev1">&gt; add_local_procs
</span><br>
<span class="quotelev1">&gt; [cluster3.tekno-soft.it:06969] [[14600,0],1] node[0].name cluster4
</span><br>
<span class="quotelev1">&gt; daemon 0 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster3.tekno-soft.it:06969] [[14600,0],1] node[1].name cluster3
</span><br>
<span class="quotelev1">&gt; daemon 1 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster3.tekno-soft.it:06969] [[14600,0],1] node[2].name cluster2
</span><br>
<span class="quotelev1">&gt; daemon 2 [cluster2.tekno-soft.it:28732] [[14600,0],2] node[0].name
</span><br>
<span class="quotelev1">&gt; cluster4 daemon 0 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster2.tekno-soft.it:28732] [[14600,0],2] node[1].name cluster3
</span><br>
<span class="quotelev1">&gt; daemon 1 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster2.tekno-soft.it:28732] [[14600,0],2] node[2].name cluster2
</span><br>
<span class="quotelev1">&gt; daemon 2 [master.tekno-soft.it:01113] [[14600,0],4] node[0].name
</span><br>
<span class="quotelev1">&gt; cluster4 daemon 0 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:01113] [[14600,0],4] node[1].name cluster3  
</span><br>
<span class="quotelev1">&gt; daemon
</span><br>
<span class="quotelev1">&gt; 1 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:01113] [[14600,0],4] node[2].name cluster2  
</span><br>
<span class="quotelev1">&gt; daemon
</span><br>
<span class="quotelev1">&gt; 2 arch farch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster3.tekno-soft.it:06969] [[14600,0],1] node[3].name cluster1
</span><br>
<span class="quotelev1">&gt; daemon 3 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster3.tekno-soft.it:06969] [[14600,0],1] node[4].name master  
</span><br>
<span class="quotelev1">&gt; daemon
</span><br>
<span class="quotelev1">&gt; 4 arch ffc91200
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster2.tekno-soft.it:28732] [[14600,0],2] node[3].name cluster1
</span><br>
<span class="quotelev1">&gt; daemon 3 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster2.tekno-soft.it:28732] [[14600,0],2] node[4].name master  
</span><br>
<span class="quotelev1">&gt; daemon
</span><br>
<span class="quotelev1">&gt; 4 arch ffc91200
</span><br>
<span class="quotelev1">&gt; fc91200
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:01113] [[14600,0],4] node[3].name cluster1  
</span><br>
<span class="quotelev1">&gt; daemon
</span><br>
<span class="quotelev1">&gt; 3 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:01113] [[14600,0],4] node[4].name master  
</span><br>
<span class="quotelev1">&gt; daemon 4
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it could not
</span><br>
<span class="quotelev1">&gt; find an executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Executable: 1
</span><br>
<span class="quotelev1">&gt; Node: cluster4.tekno-soft.it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:01113] [[14600,0],4] orted_cmd: received exit
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:01113] [[14600,0],4] orted: finalizing
</span><br>
<span class="quotelev1">&gt; [cluster2.tekno-soft.it:28732] [[14600,0],2] orted_cmd: received exit
</span><br>
<span class="quotelev1">&gt; [cluster2.tekno-soft.it:28732] [[14600,0],2] orted: finalizing
</span><br>
<span class="quotelev1">&gt; [master:01113] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [cluster2:28732] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [cluster2:28732] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [cluster2:28732] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [cluster2:28732] Failing at address: 0x2aaaab784af0
</span><br>
<span class="quotelev1">&gt; [master:01113] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [master:01113] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [master:01113] Failing at address: 0x2aaaab786af0
</span><br>
<span class="quotelev1">&gt; mpirun: abort is already in progress...hit ctrl-c again to forcibly
</span><br>
<span class="quotelev1">&gt; terminate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cluster1.tekno-soft.it:02590] [[14600,0],3] routed:binomial:  
</span><br>
<span class="quotelev1">&gt; Connection
</span><br>
<span class="quotelev1">&gt; to lifeline [[14600,0],0] lost
</span><br>
<span class="quotelev1">&gt; [roberto_at_cluster4 TestOpenMPI]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6801.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6799.php">Joe Griffin: "[OMPI users] 1.2.2 to 1.2.7 differences."</a>
<li><strong>In reply to:</strong> <a href="6790.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6802.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6802.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment"</a>
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
