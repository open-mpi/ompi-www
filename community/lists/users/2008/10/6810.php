<?
$subject_val = "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 12:02:07 2008" -->
<!-- isoreceived="20081001160207" -->
<!-- sent="Wed, 01 Oct 2008 17:59:44 +0200" -->
<!-- isosent="20081001155944" -->
<!-- name="Roberto Fichera" -->
<!-- email="kernel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment" -->
<!-- id="48E39E70.60806_at_tekno-soft.it" -->
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
<strong>Date:</strong> 2008-10-01 11:59:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6811.php">Leonardo Fialho: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Previous message:</strong> <a href="6809.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>In reply to:</strong> <a href="6803.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain ha scritto:
<br>
<span class="quotelev1">&gt; 3. remove the threaded launch scenario and just call comm_spawn in a
</span><br>
<span class="quotelev1">&gt; loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Below you find how openmpi works, if I put the MPI_Comm_spawn() in a
<br>
loop and I drive
<br>
the rest of the communication in a thread. Basically it freeze in the
<br>
same place as I see
<br>
<p>[roberto_at_master TestOpenMPI]$ mpirun --verbose --debug-daemons -wdir
<br>
&quot;`pwd`&quot; -np 1 testmaster 100000 $PBS_NODEFILE
<br>
[master.tekno-soft.it:13161] [[2618,0],0] orted_cmd: received
<br>
add_local_procs
<br>
[master.tekno-soft.it:13161] [[2618,0],0] node[0].name master daemon 0
<br>
arch ffc91200
<br>
[master.tekno-soft.it:13161] [[2618,0],0] node[1].name cluster4 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:13161] [[2618,0],0] node[2].name cluster3 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:13161] [[2618,0],0] node[3].name cluster2 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:13161] [[2618,0],0] node[4].name cluster1 daemon
<br>
INVALID arch ffc91200
<br>
Initializing MPI ...
<br>
[master.tekno-soft.it:13161] [[2618,0],0] orted_recv: received
<br>
sync+nidmap from local proc [[2618,1],0]
<br>
[master.tekno-soft.it:13161] [[2618,0],0] orted_cmd: received collective
<br>
data cmd
<br>
[master.tekno-soft.it:13161] [[2618,0],0] orted_cmd: received
<br>
message_local_procs
<br>
[master.tekno-soft.it:13161] [[2618,0],0] orted_cmd: received collective
<br>
data cmd
<br>
[master.tekno-soft.it:13161] [[2618,0],0] orted_cmd: received
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
Setting up the host as 'cluster4.tekno-soft.it'
<br>
Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
<br>
Spawning a task 'testslave.sh' on node 'cluster4.tekno-soft.it'
<br>
Daemon was launched on cluster4.tekno-soft.it - beginning to initialize
<br>
Daemon [[2618,0],1] checking in as pid 10029 on host cluster4.tekno-soft.it
<br>
Daemon [[2618,0],1] not using static ports
<br>
[cluster4.tekno-soft.it:10029] [[2618,0],1] orted: up and running -
<br>
waiting for commands!
<br>
[master.tekno-soft.it:13161] [[2618,0],0] orted_cmd: received
<br>
add_local_procs
<br>
[master.tekno-soft.it:13161] [[2618,0],0] node[0].name master daemon 0
<br>
arch ffc91200
<br>
[master.tekno-soft.it:13161] [[2618,0],0] node[1].name cluster4 daemon 1
<br>
arch ffc91200
<br>
[master.tekno-soft.it:13161] [[2618,0],0] node[2].name cluster3 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:13161] [[2618,0],0] node[3].name cluster2 daemon
<br>
INVALID arch ffc91200
<br>
[master.tekno-soft.it:13161] [[2618,0],0] node[4].name cluster1 daemon
<br>
INVALID arch ffc91200
<br>
[cluster4.tekno-soft.it:10029] [[2618,0],1] orted_cmd: received
<br>
add_local_procs
<br>
[cluster4.tekno-soft.it:10029] [[2618,0],1] node[0].name master daemon 0
<br>
arch ffc91200
<br>
[cluster4.tekno-soft.it:10029] [[2618,0],1] node[1].name cluster4 daemon
<br>
1 arch ffc91200
<br>
[cluster4.tekno-soft.it:10029] [[2618,0],1] node[2].name cluster3 daemon
<br>
INVALID arch ffc91200
<br>
[cluster4.tekno-soft.it:10029] [[2618,0],1] node[3].name cluster2 daemon
<br>
INVALID arch ffc91200
<br>
[cluster4.tekno-soft.it:10029] [[2618,0],1] node[4].name cluster1 daemon
<br>
INVALID arch ffc91200
<br>
[cluster4.tekno-soft.it:10029] [[2618,0],1] orted_recv: received
<br>
sync+nidmap from local proc [[2618,2],0]
<br>
[cluster4.tekno-soft.it:10029] [[2618,0],1] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:13161] [[2618,0],0] orted_cmd: received collective
<br>
data cmd
<br>
[master.tekno-soft.it:13161] [[2618,0],0] orted_cmd: received
<br>
message_local_procs
<br>
[cluster4.tekno-soft.it:10029] [[2618,0],1] orted_cmd: received
<br>
message_local_procs
<br>
[cluster4.tekno-soft.it:10029] [[2618,0],1] orted_cmd: received
<br>
collective data cmd
<br>
[master.tekno-soft.it:13161] [[2618,0],0] orted_cmd: received collective
<br>
data cmd
<br>
[master.tekno-soft.it:13161] [[2618,0],0] orted_cmd: received
<br>
message_local_procs
<br>
[cluster4.tekno-soft.it:10029] [[2618,0],1] orted_cmd: received
<br>
message_local_procs
<br>
Killed
<br>
[cluster4.tekno-soft.it:10029] [[2618,0],1] routed:binomial: Connection
<br>
to lifeline [[2618,0],0] lost
<br>
[roberto_at_master TestOpenMPI]$
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6811.php">Leonardo Fialho: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Previous message:</strong> <a href="6809.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>In reply to:</strong> <a href="6803.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment"</a>
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
