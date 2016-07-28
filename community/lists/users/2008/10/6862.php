<?
$subject_val = "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 09:26:36 2008" -->
<!-- isoreceived="20081006132636" -->
<!-- sent="Mon, 6 Oct 2008 07:26:29 -0600" -->
<!-- isosent="20081006132629" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment" -->
<!-- id="E862919F-C578-4995-9AD6-D3065D4FB05C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48E64A05.60508_at_tekno-soft.it" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-06 09:26:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6863.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6861.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>In reply to:</strong> <a href="6850.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6863.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="6863.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Roberto
<br>
<p>My time is somewhat limited, so I couldn't review the code in detail.  
<br>
However, I think I got the gist of it.
<br>
<p>A few observations:
<br>
<p>1. the code is rather inefficient, if all you want to do is spawn a  
<br>
pattern of slave processes based on a file. Unless there is some  
<br>
overriding reason for doing this one comm_spawn at a time, it would be  
<br>
far faster to issue a single comm_spawn and just provide the hostfile  
<br>
to us. You could use either the seq or rank_file mapper - both would  
<br>
take the file and provide the outcome you seek. The only difference  
<br>
would be that the child procs would all be in the same comm_world -  
<br>
don't know if that is an issue or not.
<br>
<p>2. OMPI definitely cannot handle the threaded version of this code at  
<br>
this time - not sure when we will get to it.
<br>
<p>3. if you serialize the code, we -should- be able to handle it.  
<br>
However, I'm not entirely sure your current method actually does that.  
<br>
It looks like you call comm_spawn, and then create a new thread which  
<br>
then calls comm_spawn. I'm afraid I can't quite figure out how the  
<br>
thread locking would occur to prevent multiple threads continuing to  
<br>
call comm_spawn - you might want to check it again and ensure it is  
<br>
correct. Frankly, I'm not entirely sure what the thread creation is  
<br>
gaining you - as I said, we can only call comm_spawn serially, so  
<br>
having multiple threads would seem to be unnecessary...unless this  
<br>
code is incomplete and you need the threads for some other purpose.
<br>
<p>Again, you might look at that loop_spawn code I mentioned before to  
<br>
see a working example. Alternatively, if your code works under HP MPI,  
<br>
you might want to stick with it for now until we get the threading  
<br>
support up to your required level.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p>On Oct 3, 2008, at 10:36 AM, Roberto Fichera wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain ha scritto:
</span><br>
<span class="quotelev2">&gt;&gt; Interesting. I ran a loop calling comm_spawn 1000 times without a
</span><br>
<span class="quotelev2">&gt;&gt; problem. I suspect it is the threading that is causing the trouble  
</span><br>
<span class="quotelev2">&gt;&gt; here.
</span><br>
<span class="quotelev1">&gt; I think so! My guessing is that at low level there is some trouble  
</span><br>
<span class="quotelev1">&gt; when
</span><br>
<span class="quotelev1">&gt; handling *concurrent*
</span><br>
<span class="quotelev1">&gt; orted spawning. Maybe
</span><br>
<span class="quotelev2">&gt;&gt; You are welcome to send me the code. You can find my loop code in  
</span><br>
<span class="quotelev2">&gt;&gt; your
</span><br>
<span class="quotelev2">&gt;&gt; code distribution under orte/test/mpi - look for loop_spawn and
</span><br>
<span class="quotelev2">&gt;&gt; loop_child.
</span><br>
<span class="quotelev1">&gt; In the attached code the spawing logic is currently under a loop in  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; main of the testmaster, so it's completly
</span><br>
<span class="quotelev1">&gt; unthreaded at least until the MPI_Comm_spawn() terminate its work. If
</span><br>
<span class="quotelev1">&gt; you wish like to test multithreading spawing
</span><br>
<span class="quotelev1">&gt; you can comment the NodeThread_spawnSlave() in the main loop and
</span><br>
<span class="quotelev1">&gt; uncomment the same function in the
</span><br>
<span class="quotelev1">&gt; NodeThread_threadMain(). Finally if you want multithreading spawning  
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev1">&gt; serialized against a mutex than uncomment
</span><br>
<span class="quotelev1">&gt; the pthread_mutex_lock/unlock() in the NodeThread_threadMain().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This code run *without* any trouble in the HP MPI implementation. It
</span><br>
<span class="quotelev1">&gt; works not so well in mpich2 trunk version due
</span><br>
<span class="quotelev1">&gt; to two problems: limit of ~24.4K context id and/or a race in poll()
</span><br>
<span class="quotelev1">&gt; while waiting a termination under MPI_Comm_disconnect()
</span><br>
<span class="quotelev1">&gt; concurrently with a MPI_Comm_spawn().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 3, 2008, at 9:11 AM, Roberto Fichera wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain ha scritto:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 3, 2008, at 7:14 AM, Roberto Fichera wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph Castain ha scritto:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I committed something to the trunk yesterday. Given the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; complexity of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the fix, I don't plan to bring it over to the 1.3 branch until
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; sometime mid-to-end next week so it can be adequately tested.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ok! So it means that I can checkout from the SVN/trunk to get  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you fix,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; right?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, though note that I don't claim it is fully correct yet. Still
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; needs testing. However, I have tested it a fair amount and it seems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; okay.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you do test it, please let me know how it goes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I execute my test on the svn/trunk below
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Open MPI: 1.4a1r19677
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Open MPI SVN revision: r19677
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Open MPI release date: Unreleased developer copy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Open RTE: 1.4a1r19677
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Open RTE SVN revision: r19677
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Open RTE release date: Unreleased developer copy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   OPAL: 1.4a1r19677
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OPAL SVN revision: r19677
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OPAL release date: Unreleased developer copy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Ident string: 1.4a1r19677
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; below is the output which seems to freeze just after the second  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spawn.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [roberto_at_master TestOpenMPI]$ mpirun --verbose --debug-daemons
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --hostfile $PBS_NODEFILE -wdir &quot;`pwd`&quot; -np 1 testmaster 100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $PBS_NODEFILE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; add_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[0].name master  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[1].name cluster4  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[2].name cluster3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[3].name cluster2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[4].name cluster1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Initializing MPI ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_recv: received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sync+nidmap from local proc [[19516,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collective data cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collective data cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Loading the node's ring from file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/var/torque/aux//932.master.tekno-soft.it'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ... adding node #1 host is 'cluster4.tekno-soft.it'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ... adding node #2 host is 'cluster3.tekno-soft.it'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ... adding node #3 host is 'cluster2.tekno-soft.it'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ... adding node #4 host is 'cluster1.tekno-soft.it'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A 4 node's ring has been made
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At least one node is available, let's start to distribute 100000 job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; across 4 nodes!!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Setting up the host as 'cluster4.tekno-soft.it'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Setting the work directory as '/data/roberto/MPI/TestOpenMPI'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Spawning a task 'testslave.sh' on node 'cluster4.tekno-soft.it'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daemon was launched on cluster4.tekno-soft.it - beginning to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daemon [[19516,0],1] checking in as pid 25123 on host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster4.tekno-soft.it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daemon [[19516,0],1] not using static ports
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted: up and running -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; waiting for commands!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; add_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[0].name master  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[1].name cluster4  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[2].name cluster3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[3].name cluster2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] node[4].name cluster1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted_cmd: received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; add_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] node[0].name master  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0 arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] node[1].name cluster4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon 1 arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] node[2].name cluster3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] node[3].name cluster2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] node[4].name cluster1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted_recv: received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sync+nidmap from local proc [[19516,2],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collective data cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted_cmd: received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collective data cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted_cmd: received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted_cmd: received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collective data cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collective data cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [master.tekno-soft.it:30063] [[19516,0],0] orted_cmd: received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster4.tekno-soft.it:25123] [[19516,0],1] orted_cmd: received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me know if you need my test program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Oct 3, 2008, at 5:02 AM, Roberto Fichera wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph Castain ha scritto:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Actually, it just occurred to me that you may be seeing a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; comm_spawn itself that I am currently chasing down. It is in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; branch and has to do with comm_spawning procs on subsets of  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (instead of across all nodes). Could be related to this - you  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; might
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; want to give me a chance to complete the fix. I have  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; identified the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem and should have it fixed later today in our trunk -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; probably
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; won't move to the 1.3 branch for several days.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you have any news about the above fix? Does the fix is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; already
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; available for testing?
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;testspawn.tar.bz2&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="6863.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6861.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>In reply to:</strong> <a href="6850.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6863.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="6863.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
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
