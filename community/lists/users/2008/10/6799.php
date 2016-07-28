<?
$subject_val = "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 03:58:54 2008" -->
<!-- isoreceived="20081001075854" -->
<!-- sent="Wed, 01 Oct 2008 09:56:41 +0200" -->
<!-- isosent="20081001075641" -->
<!-- name="Roberto Fichera" -->
<!-- email="kernel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment" -->
<!-- id="48E32D39.9060606_at_tekno-soft.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9923038A-D040-4D21-9B6E-D8ECBF3B6ECC_at_lanl.gov" -->
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
<strong>From:</strong> Roberto Fichera (<em>kernel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-01 03:56:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6800.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6798.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="../../2008/09/6797.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6800.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="6800.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain ha scritto:
<br>
<span class="quotelev1">&gt; Hi Roberto
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is something wrong with this cmd line - perhaps it wasn't copied
</span><br>
<span class="quotelev1">&gt; correctly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --verbose --debug-daemons --mca obl -np 1 -wdir `pwd`
</span><br>
<span class="quotelev1">&gt; testmaster 10000 $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically, the following is incomplete: --mca obl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure if this is the problem or not, but I am unaware of such
</span><br>
<span class="quotelev1">&gt; an option and believe it could cause mpirun to become confused.
</span><br>
Ops! Sorry, I copied the wrong log, below there the right one:
<br>
<p>[roberto_at_master TestOpenMPI]$ qsub -I testmaster.pbs
<br>
qsub: waiting for job 920.master.tekno-soft.it to start
<br>
qsub: job 920.master.tekno-soft.it ready
<br>
<p>[roberto_at_master TestMPICH2]$ cd /data/roberto/MPI/TestOpenMPI/
<br>
[roberto_at_master TestOpenMPI]$ mpirun --debug-daemons --mca btl tcp,self
<br>
-wdir &quot;`pwd`&quot; -np 1 testmaster 100000 $PBS_NODEFILE
<br>
[master.tekno-soft.it:05407] [[11340,0],0] orted_cmd: received
<br>
add_local_procs
<br>
[master.tekno-soft.it:05407] [[11340,0],0] node[0].name master daemon 0
<br>
arch ffc91200
<br>
[master.tekno-soft.it:05407] [[11340,0],0] node[1].name cluster4 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:05407] [[11340,0],0] node[2].name cluster3 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:05407] [[11340,0],0] node[3].name cluster2 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:05407] [[11340,0],0] node[4].name cluster1 daemon
<br>
INVALID arch ffc91200
<br>
Initializing MPI ...
<br>
[master.tekno-soft.it:05407] [[11340,0],0] orted_recv: received
<br>
sync+nidmap from local proc [[11340,1],0]
<br>
[master.tekno-soft.it:05407] [[11340,0],0] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:05407] [[11340,0],0] orted_cmd: received
<br>
message_local_procs
<br>
[master.tekno-soft.it:05407] [[11340,0],0] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:05407] [[11340,0],0] orted_cmd: received
<br>
message_local_procs
<br>
Loading the node's ring from file
<br>
'/var/torque/aux//920.master.tekno-soft.it'
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
****************** Starting job #1
<br>
****************** Starting job #2
<br>
****************** Starting job #3
<br>
Setting up the host as 'cluster4.tekno-soft.it'
<br>
Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
<br>
Spawning a task 'testslave' on node 'cluster4.tekno-soft.it'
<br>
Setting up the host as 'cluster3.tekno-soft.it'
<br>
Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
<br>
Spawning a task 'testslave' on node 'cluster3.tekno-soft.it'
<br>
Setting up the host as 'cluster2.tekno-soft.it'
<br>
Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
<br>
Spawning a task 'testslave' on node 'cluster2.tekno-soft.it'
<br>
Setting up the host as 'cluster1.tekno-soft.it'
<br>
Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
<br>
Spawning a task 'testslave' on node 'cluster1.tekno-soft.it'
<br>
****************** Starting job #4
<br>
Daemon was launched on cluster3.tekno-soft.it - beginning to initialize
<br>
Daemon [[11340,0],1] checking in as pid 9487 on host cluster3.tekno-soft.it
<br>
Daemon [[11340,0],1] not using static ports
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
[master.tekno-soft.it:05407] [[11340,0],0] ORTE_ERROR_LOG: Resource busy
<br>
in file base/plm_base_receive.c at line 169
<br>
[master.tekno-soft.it:05414] [[11340,1],0] ORTE_ERROR_LOG: The specified
<br>
application failed to start in file dpm_orte.c at line 677
<br>
[master.tekno-soft.it:05414] *** An error occurred in MPI_Comm_spawn
<br>
[master.tekno-soft.it:05414] *** on communicator MPI_COMM_WORLD
<br>
[master.tekno-soft.it:05414] *** MPI_ERR_SPAWN: could not spawn processes
<br>
[master.tekno-soft.it:05414] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>[master.tekno-soft.it:05407] [[11340,0],0] ORTE_ERROR_LOG: Resource busy
<br>
in file base/plm_base_receive.c at line 169
<br>
[master.tekno-soft.it:05407] [[11340,0],0] orted_cmd: received
<br>
add_local_procs
<br>
[master.tekno-soft.it:05407] [[11340,0],0] node[0].name master daemon 0
<br>
arch ffc91200
<br>
[master.tekno-soft.it:05407] [[11340,0],0] node[1].name cluster4 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:05407] [[11340,0],0] node[2].name cluster3 daemon
<br>
1 arch ffc91200
<br>
[master.tekno-soft.it:05407] [[11340,0],0] node[3].name cluster2 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:05407] [[11340,0],0] node[4].name cluster1 daemon
<br>
INVALID arch ffc91200
<br>
[cluster3.tekno-soft.it:09487] [[11340,0],1] orted: up and running -
<br>
waiting for commands!
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 30, 2008, at 8:24 AM, Roberto Fichera wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Roberto Fichera ha scritto:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi All on the list,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to execute dynamic MPI applications using MPI_Comm_spawn().
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The application I'm using for tests, basically is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; composed by a master, which spawn a slave in each assigned node in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multithreading fashion. The master is started with a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number of jobs to perform and a filename, containing the list of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assigned nodes. The idea is to handle all the dispatching
</span><br>
<span class="quotelev3">&gt;&gt;&gt; logic within the application, so that the master will try to take as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; busy as possible each assigned node. Said that, for each spawned
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job, the master allocate a thread for spawning and handling the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communication, than generate a random number, send it to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slave which simply send it back to the master. Finally the slave
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminate its job and the relative node become free for a new one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The things will continue until all the requested jobs are done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The test program I'm using *doesn't* work flawless in mpich2 because it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has a ~24k spawned job limitation, due to a monotonically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; increasing of its internal context id which basically stops the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application due to a library internal overflow. The internal context
</span><br>
<span class="quotelev3">&gt;&gt;&gt; id,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for each terminated spawned job, are never recycled at moment. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unique MPI-2 implementation, so supporting MPI_Comm_spawn(),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which was able to complete the test is currently the HP MPI. So now I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would start to check OpenMPI if it's suitable for our dynamic parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; applications.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The test application is linked against OpenMPI v1.3a1r19645, running of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fedora8 x86_64 + all updates.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My first attempt end up on the error below which I basically don't know
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where to look further. Note that I've already checked PATHs and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH, the application is basically configured correctly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; since
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it uses two scripts for starting and all the paths are set there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Basically I need to start *one* master application which will handle
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the things for managing slave applications. The communication is *only*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; master &lt;-&gt; slave and never collective, at moment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The test program is available on request.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does any one have an idea what's going on?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Roberto Fichera.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [roberto_at_cluster4 TestOpenMPI]$ orterun -wdir
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /data/roberto/MPI/TestOpenMPI -np
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 testmaster 10000 $PBS_NODEFILE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Initializing MPI ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Loading the node's ring from file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/var/torque/aux//909.master.tekno-soft.it'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ... adding node #1 host is 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ... adding node #2 host is 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ... adding node #3 host is 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ... adding node #4 host is 'master.tekno-soft.it'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A 4 node's ring has been made
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At least one node is available, let's start to distribute 10000 job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; across 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes!!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ****************** Starting job #1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ****************** Starting job #2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ****************** Starting job #3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ****************** Starting job #4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Setting up the host as 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Spawning a task './testslave.sh' on node 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Setting up the host as 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Spawning a task './testslave.sh' on node 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Setting up the host as 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Spawning a task './testslave.sh' on node 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Setting up the host as 'master.tekno-soft.it'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Spawning a task './testslave.sh' on node 'master.tekno-soft.it'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attempting to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster4.tekno-soft.it:21287] [[30014,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Resource busy in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file base/plm_base_receive.c at line 169
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster4.tekno-soft.it:21287] [[30014,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Resource busy in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file base/plm_base_receive.c at line 169
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6800.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6798.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="../../2008/09/6797.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6800.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="6800.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment"</a>
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
