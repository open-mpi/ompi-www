<?
$subject_val = "[OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 06:18:30 2008" -->
<!-- isoreceived="20080930101830" -->
<!-- sent="Tue, 30 Sep 2008 12:16:20 +0200" -->
<!-- isosent="20080930101620" -->
<!-- name="Roberto Fichera" -->
<!-- email="kernel_at_[hidden]" -->
<!-- subject="[OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment" -->
<!-- id="48E1FC74.2070402_at_tekno-soft.it" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment<br>
<strong>From:</strong> Roberto Fichera (<em>kernel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-30 06:16:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6788.php">André Gaul: "[OMPI users] possible bug: child stdout not redirected after MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6786.php">arun dhakne: "[OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6790.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="6790.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All on the list,
<br>
<p>I'm trying to execute dynamic MPI applications using MPI_Comm_spawn().
<br>
The application I'm using for tests, basically is
<br>
composed by a master, which spawn a slave in each assigned node in a
<br>
multithreading fashion. The master is started with a
<br>
number of jobs to perform and a filename, containing the list of
<br>
assigned nodes. The idea is to handle all the dispatching
<br>
logic within the application, so that the master will try to take as
<br>
busy as possible each assigned node. Said that, for each spawned
<br>
job, the master allocate a thread for spawning and handling the
<br>
communication, than generate a random number, send it to the
<br>
slave which simply send it back to the master. Finally the slave
<br>
terminate its job and the relative node become free for a new one.
<br>
The things will continue until all the requested jobs are done.
<br>
<p>The test program I'm using *doesn't* work flawless in mpich2 because it
<br>
has a ~24k spawned job limitation, due to a monotonically
<br>
increasing of its internal context id which basically stops the
<br>
application due to a library internal overflow. The internal context id,
<br>
allocated
<br>
for each terminated spawned job, are never recycled at moment. The
<br>
unique MPI-2 implementation, so supporting MPI_Comm_spawn(),
<br>
which was able to complete the test is currently the HP MPI. So now I
<br>
would start to check OpenMPI if it's suitable for our dynamic parallel
<br>
applications.
<br>
<p>The test application is linked against OpenMPI v1.3a1r19645, running of
<br>
Fedora8 x86_64 + all updates.
<br>
<p>My first attempt end up on the error below which I basically don't know
<br>
where to look further. Note that I've already checked PATHs and
<br>
LD_LIBRARY_PATH, the application is basically configured correctly since
<br>
it uses two scripts for starting and all the paths are set there.
<br>
Basically I need to start *one* master application which will handle all
<br>
the things for managing slave applications. The communication is *only*
<br>
master &lt;-&gt; slave and never collective, at moment.
<br>
<p>The test program is available on request.
<br>
<p>Does any one have an idea what's going on?
<br>
<p>Thanks in advance,
<br>
Roberto Fichera.
<br>
<p>[roberto_at_cluster4 TestOpenMPI]$ orterun -wdir /data/roberto/MPI/TestOpenMPI -np
<br>
1 testmaster 10000 $PBS_NODEFILE
<br>
Initializing MPI ...
<br>
Loading the node's ring from file '/var/torque/aux//909.master.tekno-soft.it'
<br>
... adding node #1 host is 'cluster3.tekno-soft.it'
<br>
... adding node #2 host is 'cluster2.tekno-soft.it'
<br>
... adding node #3 host is 'cluster1.tekno-soft.it'
<br>
... adding node #4 host is 'master.tekno-soft.it'
<br>
A 4 node's ring has been made
<br>
At least one node is available, let's start to distribute 10000 job across 4
<br>
nodes!!!
<br>
****************** Starting job #1
<br>
****************** Starting job #2
<br>
****************** Starting job #3
<br>
****************** Starting job #4
<br>
Setting up the host as 'cluster3.tekno-soft.it'
<br>
Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
<br>
Spawning a task './testslave.sh' on node 'cluster3.tekno-soft.it'
<br>
Setting up the host as 'cluster2.tekno-soft.it'
<br>
Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
<br>
Spawning a task './testslave.sh' on node 'cluster2.tekno-soft.it'
<br>
Setting up the host as 'cluster1.tekno-soft.it'
<br>
Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
<br>
Spawning a task './testslave.sh' on node 'cluster1.tekno-soft.it'
<br>
Setting up the host as 'master.tekno-soft.it'
<br>
Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
<br>
Spawning a task './testslave.sh' on node 'master.tekno-soft.it'
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
[cluster4.tekno-soft.it:21287] [[30014,0],0] ORTE_ERROR_LOG: Resource busy in
<br>
file base/plm_base_receive.c at line 169
<br>
[cluster4.tekno-soft.it:21287] [[30014,0],0] ORTE_ERROR_LOG: Resource busy in
<br>
file base/plm_base_receive.c at line 169
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6788.php">André Gaul: "[OMPI users] possible bug: child stdout not redirected after MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6786.php">arun dhakne: "[OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6790.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="6790.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
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
