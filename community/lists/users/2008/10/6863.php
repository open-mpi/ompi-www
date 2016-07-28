<?
$subject_val = "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 10:10:03 2008" -->
<!-- isoreceived="20081006141003" -->
<!-- sent="Mon, 06 Oct 2008 16:07:37 +0200" -->
<!-- isosent="20081006140737" -->
<!-- name="Roberto Fichera" -->
<!-- email="kernel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment" -->
<!-- id="48EA1BA9.6020400_at_tekno-soft.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E862919F-C578-4995-9AD6-D3065D4FB05C_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-10-06 10:07:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6864.php">Ethan Mallove: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>Previous message:</strong> <a href="6862.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6862.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6814.php">Roberto Fichera: "Re: [OMPI users] Running application	with	MPI_Comm_spawn()	in	multithreaded environment"</a>
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
<span class="quotelev1">&gt; My time is somewhat limited, so I couldn't review the code in detail.
</span><br>
<span class="quotelev1">&gt; However, I think I got the gist of it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A few observations:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. the code is rather inefficient, if all you want to do is spawn a
</span><br>
<span class="quotelev1">&gt; pattern of slave processes based on a file. Unless there is some
</span><br>
<span class="quotelev1">&gt; overriding reason for doing this one comm_spawn at a time, it would be
</span><br>
<span class="quotelev1">&gt; far faster to issue a single comm_spawn and just provide the hostfile
</span><br>
<span class="quotelev1">&gt; to us. You could use either the seq or rank_file mapper - both would
</span><br>
<span class="quotelev1">&gt; take the file and provide the outcome you seek. The only difference
</span><br>
<span class="quotelev1">&gt; would be that the child procs would all be in the same comm_world -
</span><br>
<span class="quotelev1">&gt; don't know if that is an issue or not.
</span><br>
I agree with you if the all the spawned slaves has to communicate in the
<br>
same
<br>
comm_world, but since that's not case, as I already told you each slave will
<br>
crunch different things, maybe also completly different data from the
<br>
other slaves.
<br>
The job's distribution will look like a tree or multi tree. The main
<br>
problem is that we
<br>
don't know in advance how to associate the slaves to the node, so we
<br>
need a very
<br>
dynamic distribution of the jobs while &quot;unrolling&quot; the algorithm,
<br>
basically the application
<br>
need to decide which is the best slave to run so that it can locally
<br>
converge in the solution
<br>
as better it can. That's why our distribution is quite *unusal* ... but,
<br>
I would say, legal in
<br>
the MPI-2 specs terms.
<br>
<span class="quotelev1">&gt; 2. OMPI definitely cannot handle the threaded version of this code at
</span><br>
<span class="quotelev1">&gt; this time - not sure when we will get to it.
</span><br>
We are talking about only MPI_Comm_spawn() or in general the whole
<br>
OpenMPI is not thread safe at moment?
<br>
<span class="quotelev1">&gt; 3. if you serialize the code, we -should- be able to handle it.
</span><br>
<span class="quotelev1">&gt; However, I'm not entirely sure your current method actually does that.
</span><br>
<span class="quotelev1">&gt; It looks like you call comm_spawn, and then create a new thread which
</span><br>
<span class="quotelev1">&gt; then calls comm_spawn. I'm afraid I can't quite figure out how the
</span><br>
<span class="quotelev1">&gt; thread locking would occur to prevent multiple threads continuing to
</span><br>
<span class="quotelev1">&gt; call comm_spawn - you might want to check it again and ensure it is
</span><br>
<span class="quotelev1">&gt; correct. Frankly, I'm not entirely sure what the thread creation is
</span><br>
<span class="quotelev1">&gt; gaining you - as I said, we can only call comm_spawn serially, so
</span><br>
<span class="quotelev1">&gt; having multiple threads would seem to be unnecessary...unless this
</span><br>
<span class="quotelev1">&gt; code is incomplete and you need the threads for some other purpose.
</span><br>
Could you explain, which part I have to serialize in order to meet the
<br>
OpenMPI expectation? Can I send/receive
<br>
in a multithreading fashion, for example?
<br>
<p>I need threading because each thread will handle one communication with
<br>
one slave. In my code, the comm_spawn() is called in a thread
<br>
and in the same thread I'll drive the MPI communication, when the slave
<br>
computation is terminated the thread will accordly terminate.
<br>
<span class="quotelev1">&gt; Again, you might look at that loop_spawn code I mentioned before to
</span><br>
<span class="quotelev1">&gt; see a working example. Alternatively, if your code works under HP MPI,
</span><br>
<span class="quotelev1">&gt; you might want to stick with it for now until we get the threading
</span><br>
<span class="quotelev1">&gt; support up to your required level.
</span><br>
About your example, I see that it does permit to merge slaves in one
<br>
intercommunicator, but what happen in
<br>
the intercommunicator if one or more slaves complete their work and I
<br>
would reuse it for doing other things.
<br>
Basically I need to pair the slave with the data to send it for its
<br>
related computation, that's why we create
<br>
different intercommunicator one for each slave because they aren't
<br>
related or at least we locally decide if we
<br>
need more than one slave for crunching data, in that case the spawn will
<br>
be instrumented to spawn say 10
<br>
nodes for a single computation. So only that case we &quot;fall back&quot; in the
<br>
&quot;standard usage&quot; ;-)!
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2008, at 10:36 AM, Roberto Fichera wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain ha scritto:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Interesting. I ran a loop calling comm_spawn 1000 times without a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem. I suspect it is the threading that is causing the trouble
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here.
</span><br>
<span class="quotelev2">&gt;&gt; I think so! My guessing is that at low level there is some trouble when
</span><br>
<span class="quotelev2">&gt;&gt; handling *concurrent*
</span><br>
<span class="quotelev2">&gt;&gt; orted spawning. Maybe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You are welcome to send me the code. You can find my loop code in your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code distribution under orte/test/mpi - look for loop_spawn and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loop_child.
</span><br>
<span class="quotelev2">&gt;&gt; In the attached code the spawing logic is currently under a loop in the
</span><br>
<span class="quotelev2">&gt;&gt; main of the testmaster, so it's completly
</span><br>
<span class="quotelev2">&gt;&gt; unthreaded at least until the MPI_Comm_spawn() terminate its work. If
</span><br>
<span class="quotelev2">&gt;&gt; you wish like to test multithreading spawing
</span><br>
<span class="quotelev2">&gt;&gt; you can comment the NodeThread_spawnSlave() in the main loop and
</span><br>
<span class="quotelev2">&gt;&gt; uncomment the same function in the
</span><br>
<span class="quotelev2">&gt;&gt; NodeThread_threadMain(). Finally if you want multithreading spawning but
</span><br>
<span class="quotelev2">&gt;&gt; serialized against a mutex than uncomment
</span><br>
<span class="quotelev2">&gt;&gt; the pthread_mutex_lock/unlock() in the NodeThread_threadMain().
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This code run *without* any trouble in the HP MPI implementation. It
</span><br>
<span class="quotelev2">&gt;&gt; works not so well in mpich2 trunk version due
</span><br>
<span class="quotelev2">&gt;&gt; to two problems: limit of ~24.4K context id and/or a race in poll()
</span><br>
<span class="quotelev2">&gt;&gt; while waiting a termination under MPI_Comm_disconnect()
</span><br>
<span class="quotelev2">&gt;&gt; concurrently with a MPI_Comm_spawn().
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 3, 2008, at 9:11 AM, Roberto Fichera wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph Castain ha scritto:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Oct 3, 2008, at 7:14 AM, Roberto Fichera wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph Castain ha scritto:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I committed something to the trunk yesterday. Given the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; complexity of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the fix, I don't plan to bring it over to the 1.3 branch until
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; sometime mid-to-end next week so it can be adequately tested.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ok! So it means that I can checkout from the SVN/trunk to get you
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fix,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; right?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Yes, though note that I don't claim it is fully correct yet. Still
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; needs testing. However, I have tested it a fair amount and it seems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; okay.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you do test it, please let me know how it goes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I execute my test on the svn/trunk below
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Open MPI: 1.4a1r19677
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Open MPI SVN revision: r19677
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Open MPI release date: Unreleased developer copy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Open RTE: 1.4a1r19677
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Open RTE SVN revision: r19677
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Open RTE release date: Unreleased developer copy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   OPAL: 1.4a1r19677
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      OPAL SVN revision: r19677
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      OPAL release date: Unreleased developer copy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           Ident string: 1.4a1r19677
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; below is the output which seems to freeze just after the second spawn.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [roberto_at_master TestOpenMPI]$ mpirun --verbose --debug-daemons
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --hostfile $PBS_NODEFILE -wdir &quot;`pwd`&quot; -np 1 testmaster 100000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $PBS_NODEFILE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; add_local_procs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[0].name master
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[1].name cluster4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; daemon
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[2].name cluster3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; daemon
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[3].name cluster2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; daemon
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[4].name cluster1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; daemon
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Initializing MPI ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_recv: received
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sync+nidmap from local proc [[19516,1],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collective data cmd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message_local_procs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collective data cmd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message_local_procs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Loading the node's ring from file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; '/var/torque/aux//932.master.tekno-soft.it'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ... adding node #1 host is 'cluster4.tekno-soft.it'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ... adding node #2 host is 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ... adding node #3 host is 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ... adding node #4 host is 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A 4 node's ring has been made
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At least one node is available, let's start to distribute 100000 job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; across 4 nodes!!!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Setting up the host as 'cluster4.tekno-soft.it'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Spawning a task 'testslave.sh' on node 'cluster4.tekno-soft.it'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Daemon was launched on cluster4.tekno-soft.it - beginning to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Daemon [[19516,0],1] checking in as pid 25123 on host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cluster4.tekno-soft.it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Daemon [[19516,0],1] not using static ports
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted: up and running -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; waiting for commands!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; add_local_procs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[0].name master
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[1].name cluster4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; daemon
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 arch ffc91200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[2].name cluster3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; daemon
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[3].name cluster2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; daemon
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[4].name cluster1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; daemon
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted_cmd: received
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; add_local_procs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] node[0].name master
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; daemon
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0 arch ffc91200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] node[1].name cluster4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; daemon 1 arch ffc91200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] node[2].name cluster3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; daemon INVALID arch ffc91200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] node[3].name cluster2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; daemon INVALID arch ffc91200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] node[4].name cluster1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; daemon INVALID arch ffc91200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted_recv: received
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sync+nidmap from local proc [[19516,2],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collective data cmd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message_local_procs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted_cmd: received
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collective data cmd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted_cmd: received
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message_local_procs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted_cmd: received
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collective data cmd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collective data cmd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message_local_procs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted_cmd: received
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message_local_procs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Let me know if you need my test program.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 3, 2008, at 5:02 AM, Roberto Fichera wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph Castain ha scritto:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Actually, it just occurred to me that you may be seeing a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; comm_spawn itself that I am currently chasing down. It is in the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; branch and has to do with comm_spawning procs on subsets of nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (instead of across all nodes). Could be related to this - you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; might
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; want to give me a chance to complete the fix. I have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; identified the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem and should have it fixed later today in our trunk -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; probably
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; won't move to the 1.3 branch for several days.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you have any news about the above fix? Does the fix is already
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; available for testing?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; &lt;testspawn.tar.bz2&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="6864.php">Ethan Mallove: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>Previous message:</strong> <a href="6862.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6862.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6814.php">Roberto Fichera: "Re: [OMPI users] Running application	with	MPI_Comm_spawn()	in	multithreaded environment"</a>
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
