<?
$subject_val = "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 09:08:12 2008" -->
<!-- isoreceived="20081001130812" -->
<!-- sent="Wed, 1 Oct 2008 07:08:03 -0600" -->
<!-- isosent="20081001130803" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment" -->
<!-- id="7AEBBE54-F4F4-4197-9CBE-D83CBABD4270_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48E32D39.9060606_at_tekno-soft.it" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-01 09:08:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6801.php">saparicio_at_[hidden]: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6799.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6799.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6803.php">Roberto Fichera: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="6803.php">Roberto Fichera: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="6806.php">Roberto Fichera: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I believe I understand the problem. What this error is telling  
<br>
you is that the Torque MOM is refusing our connection request because  
<br>
it is already busy. So we cannot spawn another process.
<br>
<p>If I understand your application correctly, you are spinning off  
<br>
multiple threads, each attempting to comm_spawn a single process -  
<br>
true? The problem with that design is that - since OMPI is not thread  
<br>
safe yet - these threads are all attempting to connect to the MOM at  
<br>
the same time. The MOM will only allow one connection at a time, and  
<br>
so at some point we are requesting a connection while already connected.
<br>
<p>Since we are some ways off from attaining thread safety in these  
<br>
scenarios, you really have three choices:
<br>
<p>1. you could do this with a single comm_spawn call. Remember, you can  
<br>
provide an MPI_Info key to comm_spawn essentially telling it where to  
<br>
place the various process ranks. Unless you truly want each new  
<br>
process to be in its own comm_world, there is no real need to do this  
<br>
with 10000 individual calls to comm_spawn.
<br>
<p>2. you could execute your own thread locking scheme in your  
<br>
application so that only one thread calls comm_spawn at a time.
<br>
<p>3. remove the threaded launch scenario and just call comm_spawn in a  
<br>
loop.
<br>
<p>In truth, the threaded approach to spawning all these procs isn't  
<br>
gaining you anything. Torque will only do one launch at a time anyway,  
<br>
so you will launch them serially no matter what. You may just be  
<br>
adding complexity for no real net gain.
<br>
<p>Ralph
<br>
<p>On Oct 1, 2008, at 1:56 AM, Roberto Fichera wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain ha scritto:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Roberto
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is something wrong with this cmd line - perhaps it wasn't  
</span><br>
<span class="quotelev2">&gt;&gt; copied
</span><br>
<span class="quotelev2">&gt;&gt; correctly?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --verbose --debug-daemons --mca obl -np 1 -wdir `pwd`
</span><br>
<span class="quotelev2">&gt;&gt; testmaster 10000 $PBS_NODEFILE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Specifically, the following is incomplete: --mca obl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure if this is the problem or not, but I am unaware of such
</span><br>
<span class="quotelev2">&gt;&gt; an option and believe it could cause mpirun to become confused.
</span><br>
<span class="quotelev1">&gt; Ops! Sorry, I copied the wrong log, below there the right one:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [roberto_at_master TestOpenMPI]$ qsub -I testmaster.pbs
</span><br>
<span class="quotelev1">&gt; qsub: waiting for job 920.master.tekno-soft.it to start
</span><br>
<span class="quotelev1">&gt; qsub: job 920.master.tekno-soft.it ready
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [roberto_at_master TestMPICH2]$ cd /data/roberto/MPI/TestOpenMPI/
</span><br>
<span class="quotelev1">&gt; [roberto_at_master TestOpenMPI]$ mpirun --debug-daemons --mca btl  
</span><br>
<span class="quotelev1">&gt; tcp,self
</span><br>
<span class="quotelev1">&gt; -wdir &quot;`pwd`&quot; -np 1 testmaster 100000 $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05407] [[11340,0],0] orted_cmd: received
</span><br>
<span class="quotelev1">&gt; add_local_procs
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05407] [[11340,0],0] node[0].name master  
</span><br>
<span class="quotelev1">&gt; daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05407] [[11340,0],0] node[1].name cluster4  
</span><br>
<span class="quotelev1">&gt; daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05407] [[11340,0],0] node[2].name cluster3  
</span><br>
<span class="quotelev1">&gt; daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05407] [[11340,0],0] node[3].name cluster2  
</span><br>
<span class="quotelev1">&gt; daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05407] [[11340,0],0] node[4].name cluster1  
</span><br>
<span class="quotelev1">&gt; daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; Initializing MPI ...
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05407] [[11340,0],0] orted_recv: received
</span><br>
<span class="quotelev1">&gt; sync+nidmap from local proc [[11340,1],0]
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05407] [[11340,0],0] orted_cmd: received
</span><br>
<span class="quotelev1">&gt; collective data cmd
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05407] [[11340,0],0] orted_cmd: received
</span><br>
<span class="quotelev1">&gt; message_local_procs
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05407] [[11340,0],0] orted_cmd: received
</span><br>
<span class="quotelev1">&gt; collective data cmd
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05407] [[11340,0],0] orted_cmd: received
</span><br>
<span class="quotelev1">&gt; message_local_procs
</span><br>
<span class="quotelev1">&gt; Loading the node's ring from file
</span><br>
<span class="quotelev1">&gt; '/var/torque/aux//920.master.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; ... adding node #1 host is 'cluster4.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; ... adding node #2 host is 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; ... adding node #3 host is 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; ... adding node #4 host is 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; A 4 node's ring has been made
</span><br>
<span class="quotelev1">&gt; At least one node is available, let's start to distribute 100000 job
</span><br>
<span class="quotelev1">&gt; across 4 nodes!!!
</span><br>
<span class="quotelev1">&gt; ****************** Starting job #1
</span><br>
<span class="quotelev1">&gt; ****************** Starting job #2
</span><br>
<span class="quotelev1">&gt; ****************** Starting job #3
</span><br>
<span class="quotelev1">&gt; Setting up the host as 'cluster4.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev1">&gt; Spawning a task 'testslave' on node 'cluster4.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; Setting up the host as 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev1">&gt; Spawning a task 'testslave' on node 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; Setting up the host as 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev1">&gt; Spawning a task 'testslave' on node 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; Setting up the host as 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev1">&gt; Spawning a task 'testslave' on node 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt; ****************** Starting job #4
</span><br>
<span class="quotelev1">&gt; Daemon was launched on cluster3.tekno-soft.it - beginning to  
</span><br>
<span class="quotelev1">&gt; initialize
</span><br>
<span class="quotelev1">&gt; Daemon [[11340,0],1] checking in as pid 9487 on host cluster3.tekno- 
</span><br>
<span class="quotelev1">&gt; soft.it
</span><br>
<span class="quotelev1">&gt; Daemon [[11340,0],1] not using static ports
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while  
</span><br>
<span class="quotelev1">&gt; attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev1">&gt; have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05407] [[11340,0],0] ORTE_ERROR_LOG: Resource  
</span><br>
<span class="quotelev1">&gt; busy
</span><br>
<span class="quotelev1">&gt; in file base/plm_base_receive.c at line 169
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05414] [[11340,1],0] ORTE_ERROR_LOG: The  
</span><br>
<span class="quotelev1">&gt; specified
</span><br>
<span class="quotelev1">&gt; application failed to start in file dpm_orte.c at line 677
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05414] *** An error occurred in MPI_Comm_spawn
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05414] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05414] *** MPI_ERR_SPAWN: could not spawn  
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05414] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05407] [[11340,0],0] ORTE_ERROR_LOG: Resource  
</span><br>
<span class="quotelev1">&gt; busy
</span><br>
<span class="quotelev1">&gt; in file base/plm_base_receive.c at line 169
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05407] [[11340,0],0] orted_cmd: received
</span><br>
<span class="quotelev1">&gt; add_local_procs
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05407] [[11340,0],0] node[0].name master  
</span><br>
<span class="quotelev1">&gt; daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05407] [[11340,0],0] node[1].name cluster4  
</span><br>
<span class="quotelev1">&gt; daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05407] [[11340,0],0] node[2].name cluster3  
</span><br>
<span class="quotelev1">&gt; daemon
</span><br>
<span class="quotelev1">&gt; 1 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05407] [[11340,0],0] node[3].name cluster2  
</span><br>
<span class="quotelev1">&gt; daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [master.tekno-soft.it:05407] [[11340,0],0] node[4].name cluster1  
</span><br>
<span class="quotelev1">&gt; daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster3.tekno-soft.it:09487] [[11340,0],1] orted: up and running -
</span><br>
<span class="quotelev1">&gt; waiting for commands!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 30, 2008, at 8:24 AM, Roberto Fichera wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Roberto Fichera ha scritto:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi All on the list,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm trying to execute dynamic MPI applications using  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Comm_spawn().
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The application I'm using for tests, basically is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; composed by a master, which spawn a slave in each assigned node  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; multithreading fashion. The master is started with a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; number of jobs to perform and a filename, containing the list of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; assigned nodes. The idea is to handle all the dispatching
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; logic within the application, so that the master will try to take  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; busy as possible each assigned node. Said that, for each spawned
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; job, the master allocate a thread for spawning and handling the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communication, than generate a random number, send it to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; slave which simply send it back to the master. Finally the slave
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; terminate its job and the relative node become free for a new one.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The things will continue until all the requested jobs are done.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The test program I'm using *doesn't* work flawless in mpich2  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; because it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; has a ~24k spawned job limitation, due to a monotonically
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; increasing of its internal context id which basically stops the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; application due to a library internal overflow. The internal  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; context
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; id,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for each terminated spawned job, are never recycled at moment. The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unique MPI-2 implementation, so supporting MPI_Comm_spawn(),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which was able to complete the test is currently the HP MPI. So  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; now I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would start to check OpenMPI if it's suitable for our dynamic  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parallel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; applications.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The test application is linked against OpenMPI v1.3a1r19645,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; running of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fedora8 x86_64 + all updates.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My first attempt end up on the error below which I basically  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; don't know
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where to look further. Note that I've already checked PATHs and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH, the application is basically configured correctly
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; since
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it uses two scripts for starting and all the paths are set there.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Basically I need to start *one* master application which will  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; handle
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the things for managing slave applications. The communication is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *only*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; master &lt;-&gt; slave and never collective, at moment.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The test program is available on request.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does any one have an idea what's going on?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Roberto Fichera.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [roberto_at_cluster4 TestOpenMPI]$ orterun -wdir
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /data/roberto/MPI/TestOpenMPI -np
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 testmaster 10000 $PBS_NODEFILE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Initializing MPI ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Loading the node's ring from file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; '/var/torque/aux//909.master.tekno-soft.it'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ... adding node #1 host is 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ... adding node #2 host is 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ... adding node #3 host is 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ... adding node #4 host is 'master.tekno-soft.it'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A 4 node's ring has been made
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At least one node is available, let's start to distribute 10000 job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; across 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes!!!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ****************** Starting job #1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ****************** Starting job #2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ****************** Starting job #3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ****************** Starting job #4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Setting up the host as 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Spawning a task './testslave.sh' on node 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Setting up the host as 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Spawning a task './testslave.sh' on node 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Setting up the host as 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Spawning a task './testslave.sh' on node 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Setting up the host as 'master.tekno-soft.it'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Spawning a task './testslave.sh' on node 'master.tekno-soft.it'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; attempting to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There may be more information reported by the environment (see  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cluster4.tekno-soft.it:21287] [[30014,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Resource busy in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file base/plm_base_receive.c at line 169
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cluster4.tekno-soft.it:21287] [[30014,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Resource busy in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file base/plm_base_receive.c at line 169
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="6801.php">saparicio_at_[hidden]: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6799.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6799.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6803.php">Roberto Fichera: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="6803.php">Roberto Fichera: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="6806.php">Roberto Fichera: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
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
