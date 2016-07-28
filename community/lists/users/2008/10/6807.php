<?
$subject_val = "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 11:06:23 2008" -->
<!-- isoreceived="20081001150623" -->
<!-- sent="Wed, 01 Oct 2008 17:04:04 +0200" -->
<!-- isosent="20081001150404" -->
<!-- name="Roberto Fichera" -->
<!-- email="kernel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment" -->
<!-- id="48E39164.6090703_at_tekno-soft.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7AEBBE54-F4F4-4197-9CBE-D83CBABD4270_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment<br>
<strong>From:</strong> Roberto Fichera (<em>kernel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-01 11:04:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6808.php">V. Ram: "[OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Previous message:</strong> <a href="6806.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6803.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6812.php">Ralph Castain: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="6812.php">Ralph Castain: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain ha scritto:
<br>
<span class="quotelev1">&gt; Okay, I believe I understand the problem. What this error is telling
</span><br>
<span class="quotelev1">&gt; you is that the Torque MOM is refusing our connection request because
</span><br>
<span class="quotelev1">&gt; it is already busy. So we cannot spawn another process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I understand your application correctly, you are spinning off
</span><br>
<span class="quotelev1">&gt; multiple threads, each attempting to comm_spawn a single process -
</span><br>
<span class="quotelev1">&gt; true? The problem with that design is that - since OMPI is not thread
</span><br>
<span class="quotelev1">&gt; safe yet - these threads are all attempting to connect to the MOM at
</span><br>
<span class="quotelev1">&gt; the same time. The MOM will only allow one connection at a time, and
</span><br>
<span class="quotelev1">&gt; so at some point we are requesting a connection while already connected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since we are some ways off from attaining thread safety in these
</span><br>
<span class="quotelev1">&gt; scenarios, you really have three choices:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. you could do this with a single comm_spawn call. Remember, you can
</span><br>
<span class="quotelev1">&gt; provide an MPI_Info key to comm_spawn essentially telling it where to
</span><br>
<span class="quotelev1">&gt; place the various process ranks. Unless you truly want each new
</span><br>
<span class="quotelev1">&gt; process to be in its own comm_world, there is no real need to do this
</span><br>
<span class="quotelev1">&gt; with 10000 individual calls to comm_spawn.
</span><br>
I need only a master to single slave communication, the slaves *doesn't*
<br>
need to communicate all together. The logic within the test program
<br>
is quite easy, it will dispatch as many jobs as the user need across the
<br>
assigned nodes, try to take it busy as much as possible. That's because
<br>
our algorithms need a tree evolution where a node is master of a bounch
<br>
of slaves, and a slave can be a sub-master of a bounch of slaves, this
<br>
depends by how the each leaf will evolve in its computation. Generally
<br>
we don't go to much than 5 o 6 levels in deep. But we need a very
<br>
dynamic logic for dispatching jobs.
<br>
<span class="quotelev1">&gt; 2. you could execute your own thread locking scheme in your
</span><br>
<span class="quotelev1">&gt; application so that only one thread calls comm_spawn at a time.
</span><br>
I done it with and without _tm_ support and using a mutex to serialize
<br>
the MPI_Comm_spawn().
<br>
The log below is using the torque/pbs support compiled in:
<br>
<p>[roberto_at_master TestOpenMPI]$ mpirun --verbose --debug-daemons -wdir
<br>
&quot;`pwd`&quot; -np 1 testmaster 100000 $PBS_NODEFILE
<br>
[master.tekno-soft.it:07844] [[10231,0],0] orted_cmd: received
<br>
add_local_procs
<br>
[master.tekno-soft.it:07844] [[10231,0],0] node[0].name master daemon 0
<br>
arch ffc91200
<br>
[master.tekno-soft.it:07844] [[10231,0],0] node[1].name cluster4 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:07844] [[10231,0],0] node[2].name cluster3 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:07844] [[10231,0],0] node[3].name cluster2 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:07844] [[10231,0],0] node[4].name cluster1 daemon
<br>
INVALID arch ffc91200
<br>
Initializing MPI ...
<br>
[master.tekno-soft.it:07844] [[10231,0],0] orted_recv: received
<br>
sync+nidmap from local proc [[10231,1],0]
<br>
[master.tekno-soft.it:07844] [[10231,0],0] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:07844] [[10231,0],0] orted_cmd: received
<br>
message_local_procs
<br>
[master.tekno-soft.it:07844] [[10231,0],0] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:07844] [[10231,0],0] orted_cmd: received
<br>
message_local_procs
<br>
Loading the node's ring from file
<br>
'/var/torque/aux//929.master.tekno-soft.it'
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
****************** Starting job #4
<br>
Setting up the host as 'cluster4.tekno-soft.it'
<br>
Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
<br>
Spawning a task 'testslave.sh' on node 'cluster4.tekno-soft.it'
<br>
Setting up the host as 'cluster3.tekno-soft.it'
<br>
Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
<br>
Spawning a task 'testslave.sh' on node 'cluster3.tekno-soft.it'
<br>
Setting up the host as 'cluster2.tekno-soft.it'
<br>
Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
<br>
Spawning a task 'testslave.sh' on node 'cluster2.tekno-soft.it'
<br>
Setting up the host as 'cluster1.tekno-soft.it'
<br>
Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
<br>
Spawning a task 'testslave.sh' on node 'cluster1.tekno-soft.it'
<br>
Daemon was launched on cluster4.tekno-soft.it - beginning to initialize
<br>
Daemon [[10231,0],1] checking in as pid 4869 on host cluster4.tekno-soft.it
<br>
Daemon [[10231,0],1] not using static ports
<br>
[cluster4.tekno-soft.it:04869] [[10231,0],1] orted: up and running -
<br>
waiting for commands!
<br>
[master.tekno-soft.it:07844] [[10231,0],0] orted_cmd: received
<br>
add_local_procs
<br>
[master.tekno-soft.it:07844] [[10231,0],0] node[0].name master daemon 0
<br>
arch ffc91200
<br>
[master.tekno-soft.it:07844] [[10231,0],0] node[1].name cluster4 daemon
<br>
1 arch ffc91200
<br>
[master.tekno-soft.it:07844] [[10231,0],0] node[2].name cluster3 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:07844] [[10231,0],0] node[3].name cluster2 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:07844] [[10231,0],0] node[4].name cluster1 daemon
<br>
INVALID arch ffc91200
<br>
[cluster4.tekno-soft.it:04869] [[10231,0],1] orted_cmd: received
<br>
add_local_procs
<br>
[cluster4.tekno-soft.it:04869] [[10231,0],1] node[0].name master daemon
<br>
0 arch ffc91200
<br>
[cluster4.tekno-soft.it:04869] [[10231,0],1] node[1].name cluster4
<br>
daemon 1 arch ffc91200
<br>
[cluster4.tekno-soft.it:04869] [[10231,0],1] node[2].name cluster3
<br>
daemon INVALID arch ffc91200
<br>
[cluster4.tekno-soft.it:04869] [[10231,0],1] node[3].name cluster2
<br>
daemon INVALID arch ffc91200
<br>
[cluster4.tekno-soft.it:04869] [[10231,0],1] node[4].name cluster1
<br>
daemon INVALID arch ffc91200
<br>
[cluster4.tekno-soft.it:04869] [[10231,0],1] orted_recv: received
<br>
sync+nidmap from local proc [[10231,2],0]
<br>
[cluster4.tekno-soft.it:04869] [[10231,0],1] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:07844] [[10231,0],0] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:07844] [[10231,0],0] orted_cmd: received
<br>
message_local_procs
<br>
[cluster4.tekno-soft.it:04869] [[10231,0],1] orted_cmd: received
<br>
message_local_procs
<br>
[cluster4.tekno-soft.it:04869] [[10231,0],1] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:07844] [[10231,0],0] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:07844] [[10231,0],0] orted_cmd: received
<br>
message_local_procs
<br>
[cluster4.tekno-soft.it:04869] [[10231,0],1] orted_cmd: received
<br>
message_local_procs
<br>
Killed
<br>
[cluster4.tekno-soft.it:04869] [[10231,0],1] routed:binomial: Connection
<br>
to lifeline [[10231,0],0] lost
<br>
[cluster4.tekno-soft.it:04869] [[10231,0],1] routed:binomial: Connection
<br>
to lifeline [[10231,0],0] lost
<br>
[roberto_at_master TestOpenMPI]$
<br>
<p>this one is *without-tm*
<br>
<p>[roberto_at_master TestOpenMPI]$ mpirun --verbose --debug-daemons -wdir
<br>
&quot;`pwd`&quot; -np 1 testmaster 100000 $PBS_NODEFILE
<br>
[master.tekno-soft.it:25143] [[23396,0],0] orted_cmd: received
<br>
add_local_procs
<br>
[master.tekno-soft.it:25143] [[23396,0],0] node[0].name master daemon 0
<br>
arch ffc91200
<br>
[master.tekno-soft.it:25143] [[23396,0],0] node[1].name cluster4 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:25143] [[23396,0],0] node[2].name cluster3 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:25143] [[23396,0],0] node[3].name cluster2 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:25143] [[23396,0],0] node[4].name cluster1 daemon
<br>
INVALID arch ffc91200
<br>
Initializing MPI ...
<br>
[master.tekno-soft.it:25143] [[23396,0],0] orted_recv: received
<br>
sync+nidmap from local proc [[23396,1],0]
<br>
[master.tekno-soft.it:25143] [[23396,0],0] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:25143] [[23396,0],0] orted_cmd: received
<br>
message_local_procs
<br>
[master.tekno-soft.it:25143] [[23396,0],0] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:25143] [[23396,0],0] orted_cmd: received
<br>
message_local_procs
<br>
Loading the node's ring from file
<br>
'/var/torque/aux//928.master.tekno-soft.it'
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
****************** Starting job #4
<br>
Setting up the host as 'cluster4.tekno-soft.it'
<br>
Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
<br>
Spawning a task 'testslave.sh' on node 'cluster4.tekno-soft.it'
<br>
Setting up the host as 'cluster3.tekno-soft.it'
<br>
Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
<br>
Spawning a task 'testslave.sh' on node 'cluster3.tekno-soft.it'
<br>
Setting up the host as 'cluster2.tekno-soft.it'
<br>
Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
<br>
Spawning a task 'testslave.sh' on node 'cluster2.tekno-soft.it'
<br>
Setting up the host as 'cluster1.tekno-soft.it'
<br>
Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
<br>
Spawning a task 'testslave.sh' on node 'cluster1.tekno-soft.it'
<br>
[master.tekno-soft.it:25143] [[23396,0],0] orted_cmd: received
<br>
add_local_procs
<br>
[master.tekno-soft.it:25143] [[23396,0],0] node[0].name master daemon 0
<br>
arch ffc91200
<br>
[master.tekno-soft.it:25143] [[23396,0],0] node[1].name cluster4 daemon
<br>
1 arch ffc91200
<br>
[master.tekno-soft.it:25143] [[23396,0],0] node[2].name cluster3 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:25143] [[23396,0],0] node[3].name cluster2 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:25143] [[23396,0],0] node[4].name cluster1 daemon
<br>
INVALID arch ffc91200
<br>
Daemon was launched on cluster4.tekno-soft.it - beginning to initialize
<br>
Daemon [[23396,0],1] checking in as pid 3653 on host cluster4.tekno-soft.it
<br>
Daemon [[23396,0],1] not using static ports
<br>
[cluster4.tekno-soft.it:03653] [[23396,0],1] orted: up and running -
<br>
waiting for commands!
<br>
[cluster4.tekno-soft.it:03653] [[23396,0],1] orted_cmd: received
<br>
add_local_procs
<br>
[cluster4.tekno-soft.it:03653] [[23396,0],1] node[0].name master daemon
<br>
0 arch ffc91200
<br>
[cluster4.tekno-soft.it:03653] [[23396,0],1] node[1].name cluster4
<br>
daemon 1 arch ffc91200
<br>
[cluster4.tekno-soft.it:03653] [[23396,0],1] node[2].name cluster3
<br>
daemon INVALID arch ffc91200
<br>
[cluster4.tekno-soft.it:03653] [[23396,0],1] node[3].name cluster2
<br>
daemon INVALID arch ffc91200
<br>
[cluster4.tekno-soft.it:03653] [[23396,0],1] node[4].name cluster1
<br>
daemon INVALID arch ffc91200
<br>
[cluster4.tekno-soft.it:03653] [[23396,0],1] orted_recv: received
<br>
sync+nidmap from local proc [[23396,2],0]
<br>
[cluster4.tekno-soft.it:03653] [[23396,0],1] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:25143] [[23396,0],0] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:25143] [[23396,0],0] orted_cmd: received
<br>
message_local_procs
<br>
[cluster4.tekno-soft.it:03653] [[23396,0],1] orted_cmd: received
<br>
message_local_procs
<br>
[cluster4.tekno-soft.it:03653] [[23396,0],1] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:25143] [[23396,0],0] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:25143] [[23396,0],0] orted_cmd: received
<br>
message_local_procs
<br>
[cluster4.tekno-soft.it:03653] [[23396,0],1] orted_cmd: received
<br>
message_local_procs
<br>
<p>[... got a freeze here ... than ^C ...]
<br>
<p>mpirun: killing job...
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 25150 on node
<br>
master.tekno-soft.it exited on signal 0 (Unknown signal 0).
<br>
--------------------------------------------------------------------------
<br>
[cluster4.tekno-soft.it:03653] [[23396,0],1] orted_cmd: received exit
<br>
[cluster4.tekno-soft.it:03653] [[23396,0],1] orted: finalizing
<br>
mpirun: clean termination accomplished
<br>
<p>[cluster4:03653] *** Process received signal ***
<br>
[cluster4:03653] Signal: Segmentation fault (11)
<br>
[cluster4:03653] Signal code: Address not mapped (1)
<br>
[cluster4:03653] Failing at address: 0x2aaaab784af0
<br>
<p>So it seem that we have some problem in other places, maybe some other
<br>
functions are not
<br>
thread safe.
<br>
<p><span class="quotelev1">&gt; 3. remove the threaded launch scenario and just call comm_spawn in a
</span><br>
<span class="quotelev1">&gt; loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In truth, the threaded approach to spawning all these procs isn't
</span><br>
<span class="quotelev1">&gt; gaining you anything. Torque will only do one launch at a time anyway,
</span><br>
<span class="quotelev1">&gt; so you will launch them serially no matter what. You may just be
</span><br>
<span class="quotelev1">&gt; adding complexity for no real net gain.
</span><br>
Talking about torque/pbs/maui, that's ok! It doen't handle multiple
<br>
spawn at the same time.
<br>
But in general, if I don't used _tm_ any more, I guess that we can get a
<br>
gain on executing parallel spawn,
<br>
because the spawn will be done using ssh/rsh.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 1, 2008, at 1:56 AM, Roberto Fichera wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain ha scritto:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Roberto
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is something wrong with this cmd line - perhaps it wasn't copied
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correctly?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --verbose --debug-daemons --mca obl -np 1 -wdir `pwd`
</span><br>
<span class="quotelev3">&gt;&gt;&gt; testmaster 10000 $PBS_NODEFILE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Specifically, the following is incomplete: --mca obl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure if this is the problem or not, but I am unaware of such
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an option and believe it could cause mpirun to become confused.
</span><br>
<span class="quotelev2">&gt;&gt; Ops! Sorry, I copied the wrong log, below there the right one:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [roberto_at_master TestOpenMPI]$ qsub -I testmaster.pbs
</span><br>
<span class="quotelev2">&gt;&gt; qsub: waiting for job 920.master.tekno-soft.it to start
</span><br>
<span class="quotelev2">&gt;&gt; qsub: job 920.master.tekno-soft.it ready
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [roberto_at_master TestMPICH2]$ cd /data/roberto/MPI/TestOpenMPI/
</span><br>
<span class="quotelev2">&gt;&gt; [roberto_at_master TestOpenMPI]$ mpirun --debug-daemons --mca btl tcp,self
</span><br>
<span class="quotelev2">&gt;&gt; -wdir &quot;`pwd`&quot; -np 1 testmaster 100000 $PBS_NODEFILE
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05407] [[11340,0],0] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; add_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05407] [[11340,0],0] node[0].name master daemon 0
</span><br>
<span class="quotelev2">&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05407] [[11340,0],0] node[1].name cluster4 daemon
</span><br>
<span class="quotelev2">&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05407] [[11340,0],0] node[2].name cluster3 daemon
</span><br>
<span class="quotelev2">&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05407] [[11340,0],0] node[3].name cluster2 daemon
</span><br>
<span class="quotelev2">&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05407] [[11340,0],0] node[4].name cluster1 daemon
</span><br>
<span class="quotelev2">&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; Initializing MPI ...
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05407] [[11340,0],0] orted_recv: received
</span><br>
<span class="quotelev2">&gt;&gt; sync+nidmap from local proc [[11340,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05407] [[11340,0],0] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; collective data cmd
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05407] [[11340,0],0] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; message_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05407] [[11340,0],0] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; collective data cmd
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05407] [[11340,0],0] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; message_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; Loading the node's ring from file
</span><br>
<span class="quotelev2">&gt;&gt; '/var/torque/aux//920.master.tekno-soft.it'
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
<span class="quotelev2">&gt;&gt; ****************** Starting job #1
</span><br>
<span class="quotelev2">&gt;&gt; ****************** Starting job #2
</span><br>
<span class="quotelev2">&gt;&gt; ****************** Starting job #3
</span><br>
<span class="quotelev2">&gt;&gt; Setting up the host as 'cluster4.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev2">&gt;&gt; Spawning a task 'testslave' on node 'cluster4.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; Setting up the host as 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev2">&gt;&gt; Spawning a task 'testslave' on node 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; Setting up the host as 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev2">&gt;&gt; Spawning a task 'testslave' on node 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; Setting up the host as 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev2">&gt;&gt; Spawning a task 'testslave' on node 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev2">&gt;&gt; ****************** Starting job #4
</span><br>
<span class="quotelev2">&gt;&gt; Daemon was launched on cluster3.tekno-soft.it - beginning to initialize
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[11340,0],1] checking in as pid 9487 on host
</span><br>
<span class="quotelev2">&gt;&gt; cluster3.tekno-soft.it
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[11340,0],1] not using static ports
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev2">&gt;&gt; attempting to
</span><br>
<span class="quotelev2">&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05407] [[11340,0],0] ORTE_ERROR_LOG: Resource busy
</span><br>
<span class="quotelev2">&gt;&gt; in file base/plm_base_receive.c at line 169
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05414] [[11340,1],0] ORTE_ERROR_LOG: The specified
</span><br>
<span class="quotelev2">&gt;&gt; application failed to start in file dpm_orte.c at line 677
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05414] *** An error occurred in MPI_Comm_spawn
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05414] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05414] *** MPI_ERR_SPAWN: could not spawn
</span><br>
<span class="quotelev2">&gt;&gt; processes
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05414] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05407] [[11340,0],0] ORTE_ERROR_LOG: Resource busy
</span><br>
<span class="quotelev2">&gt;&gt; in file base/plm_base_receive.c at line 169
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05407] [[11340,0],0] orted_cmd: received
</span><br>
<span class="quotelev2">&gt;&gt; add_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05407] [[11340,0],0] node[0].name master daemon 0
</span><br>
<span class="quotelev2">&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05407] [[11340,0],0] node[1].name cluster4 daemon
</span><br>
<span class="quotelev2">&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05407] [[11340,0],0] node[2].name cluster3 daemon
</span><br>
<span class="quotelev2">&gt;&gt; 1 arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05407] [[11340,0],0] node[3].name cluster2 daemon
</span><br>
<span class="quotelev2">&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [master.tekno-soft.it:05407] [[11340,0],0] node[4].name cluster1 daemon
</span><br>
<span class="quotelev2">&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster3.tekno-soft.it:09487] [[11340,0],1] orted: up and running -
</span><br>
<span class="quotelev2">&gt;&gt; waiting for commands!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 30, 2008, at 8:24 AM, Roberto Fichera wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Roberto Fichera ha scritto:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi All on the list,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm trying to execute dynamic MPI applications using
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Comm_spawn().
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The application I'm using for tests, basically is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; composed by a master, which spawn a slave in each assigned node in a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; multithreading fashion. The master is started with a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; number of jobs to perform and a filename, containing the list of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; assigned nodes. The idea is to handle all the dispatching
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; logic within the application, so that the master will try to take as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; busy as possible each assigned node. Said that, for each spawned
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; job, the master allocate a thread for spawning and handling the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communication, than generate a random number, send it to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; slave which simply send it back to the master. Finally the slave
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; terminate its job and the relative node become free for a new one.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The things will continue until all the requested jobs are done.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The test program I'm using *doesn't* work flawless in mpich2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; because it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; has a ~24k spawned job limitation, due to a monotonically
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; increasing of its internal context id which basically stops the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; application due to a library internal overflow. The internal context
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; id,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allocated
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for each terminated spawned job, are never recycled at moment. The
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; unique MPI-2 implementation, so supporting MPI_Comm_spawn(),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; which was able to complete the test is currently the HP MPI. So now I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would start to check OpenMPI if it's suitable for our dynamic
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parallel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; applications.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The test application is linked against OpenMPI v1.3a1r19645,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; running of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Fedora8 x86_64 + all updates.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My first attempt end up on the error below which I basically don't
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; know
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; where to look further. Note that I've already checked PATHs and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH, the application is basically configured correctly
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; since
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it uses two scripts for starting and all the paths are set there.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Basically I need to start *one* master application which will handle
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the things for managing slave applications. The communication is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *only*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; master &lt;-&gt; slave and never collective, at moment.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The test program is available on request.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Does any one have an idea what's going on?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Roberto Fichera.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [roberto_at_cluster4 TestOpenMPI]$ orterun -wdir
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /data/roberto/MPI/TestOpenMPI -np
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1 testmaster 10000 $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Initializing MPI ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Loading the node's ring from file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '/var/torque/aux//909.master.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ... adding node #1 host is 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ... adding node #2 host is 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ... adding node #3 host is 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ... adding node #4 host is 'master.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A 4 node's ring has been made
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; At least one node is available, let's start to distribute 10000 job
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; across 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes!!!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ****************** Starting job #1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ****************** Starting job #2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ****************** Starting job #3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ****************** Starting job #4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Setting up the host as 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Spawning a task './testslave.sh' on node 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Setting up the host as 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Spawning a task './testslave.sh' on node 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Setting up the host as 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Spawning a task './testslave.sh' on node 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Setting up the host as 'master.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Spawning a task './testslave.sh' on node 'master.tekno-soft.it'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; attempting to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; above).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; shared
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [cluster4.tekno-soft.it:21287] [[30014,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Resource busy in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file base/plm_base_receive.c at line 169
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [cluster4.tekno-soft.it:21287] [[30014,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Resource busy in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file base/plm_base_receive.c at line 169
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="6808.php">V. Ram: "[OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Previous message:</strong> <a href="6806.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6803.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6812.php">Ralph Castain: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="6812.php">Ralph Castain: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
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
