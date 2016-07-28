<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 31 23:24:15 2006" -->
<!-- isoreceived="20060601032415" -->
<!-- sent="Wed, 31 May 2006 23:24:12 -0400" -->
<!-- isosent="20060601032412" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted" -->
<!-- id="447E5DDC.6000208_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="447E2FAC.1000106_at_lanl.gov" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-31 23:24:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0912.php">Neil Ludban: "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<li><strong>Previous message:</strong> <a href="0910.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>In reply to:</strong> <a href="0910.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
okay, sorry that I might have confused you before, but at least we are 
<br>
all clear about the issues. It now sounds like I'll have to try 
<br>
restricting the number of times the &quot;qrsh&quot; gets called in the sge pls 
<br>
module for the current release as I initially though, and revisit this 
<br>
issue later in ORTE 2.0.
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hmmm...no, it appears that we are not talking about the same problem at 
</span><br>
<span class="quotelev1">&gt; all. An internal comm_spawn is not at all equivalent to an external 
</span><br>
<span class="quotelev1">&gt; execution of another mpirun command - even though the same functions may 
</span><br>
<span class="quotelev1">&gt; get called, there is a very large fundamental difference between the two 
</span><br>
<span class="quotelev1">&gt; scenarios: one executes inside of the same universe, and the other does not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't understand that this was a comm_spawn problem - my bad.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can disregard the entire prior discussion - this has nothing to do 
</span><br>
<span class="quotelev1">&gt; with persistent vs non-persistent orteds. Everything is executing just 
</span><br>
<span class="quotelev1">&gt; fine within one common universe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is a known issue with comm_spawn. The current implementation 
</span><br>
<span class="quotelev1">&gt; was a pre-production prototype - we simply have not had the time to go 
</span><br>
<span class="quotelev1">&gt; back and clean it all up. Hence, it works fine in *most* cases, but has 
</span><br>
<span class="quotelev1">&gt; definite problems in the more unusual cases. Unfortunately, SGE falls 
</span><br>
<span class="quotelev1">&gt; into that latter category because it imposes a strict limit on the 
</span><br>
<span class="quotelev1">&gt; available resources.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I actually noted the problem you are encountering in my OpenRTE 2.0 
</span><br>
<span class="quotelev1">&gt; documentation, though that doesn't help here. The problem is that the 
</span><br>
<span class="quotelev1">&gt; majority of our systems do *not* count the daemons against any resource 
</span><br>
<span class="quotelev1">&gt; reservation. Hence, in the current implementation of the mapper and 
</span><br>
<span class="quotelev1">&gt; other resource manager components, we never count the daemons against 
</span><br>
<span class="quotelev1">&gt; the number of process slots available to us.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is further aggravated by two other facts:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (a) currently, we always start our mapping from the first node in the 
</span><br>
<span class="quotelev1">&gt; reservation list, even when we comm_spawn multiple times. Hence, we 
</span><br>
<span class="quotelev1">&gt; always drop the first process on the first node - instead of starting 
</span><br>
<span class="quotelev1">&gt; where we last left off.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (b) our rsh/ssh launcher doesn't know how to re-use daemons on the 
</span><br>
<span class="quotelev1">&gt; compute nodes, so it always launches a new one every time it launches 
</span><br>
<span class="quotelev1">&gt; processes on the node. Hence, the number of &quot;uncounted&quot; processes on a 
</span><br>
<span class="quotelev1">&gt; node rises with each launch. A comm_spawn counts as a single launch in 
</span><br>
<span class="quotelev1">&gt; your environment, as does mpirun - thus, if your application does a 
</span><br>
<span class="quotelev1">&gt; comm_spawn, you wind up with two (uncounted) daemons + some number of 
</span><br>
<span class="quotelev1">&gt; application processes trying to run on each node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fixing this would be a significant effort that I believe is best put off 
</span><br>
<span class="quotelev1">&gt; until version 2.0. It requires a fairly significant overhaul of the 
</span><br>
<span class="quotelev1">&gt; rsh/ssh launcher, as well as several of the default ras and rmap base 
</span><br>
<span class="quotelev1">&gt; component support functions. Since these are getting overhauled anyway 
</span><br>
<span class="quotelev1">&gt; in the next major version, we had decided a while ago to hold off fixing 
</span><br>
<span class="quotelev1">&gt; the base problem of comm_spawn until that time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, that decision may need to be revisited - depends just how big 
</span><br>
<span class="quotelev1">&gt; an issue this is, relative release dates, other commitments, etc. etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pak Lui wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; First, the fact that an orted already exists on a node is not 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sufficient to allow us to use it again for another application. The 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orted must be persistent or else we do not allow a new application 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to re-use it. This is required because the existing orted will go 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; away when its original application is done executing - if we use it 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; as our parent to launch another child, then the new application 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process will &quot;die&quot; when the original one completes. Obviously, that 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; isn't desirable.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; okay. I used to think that if orted is able to stay and fork other 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes, but I didn't realize orted will go away once the parent 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process finishes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't know how to get around this problem for non-persistent 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orteds. Perhaps we can devise some mechanism. The problem is that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun needs to exit when it finishes the associated application. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Without a persistent orted, mpirun serves as the parent process for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; everything that is executing, including the daemons. So, for mpirun 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to exit, that means all of its children must also terminate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wow, that's a thought. Do you mean that after we start a SGE 
</span><br>
<span class="quotelev2">&gt;&gt; (interactive/batch) job, we first have the user to fire up persistent 
</span><br>
<span class="quotelev2">&gt;&gt; orted, in order to have 'qrsh' to launch the persistent orted onto all 
</span><br>
<span class="quotelev2">&gt;&gt; of the SGE nodes, and have them running for the duration of the SGE 
</span><br>
<span class="quotelev2">&gt;&gt; job. So that way, the subsequent mpirun will not need to use qrsh 
</span><br>
<span class="quotelev2">&gt;&gt; again to launch on the remote nodes. I think that may actually solve 
</span><br>
<span class="quotelev2">&gt;&gt; the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If we try to link one mpirun to another, then we have the problem 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that we must force the first mpirun to &quot;stay alive&quot; until the second 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one completes. This could be done, but seems problematic and contrary 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to normal user expectations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; agree, that is not good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Second, even though you can launch persistent orteds today, none of 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the current components in the resource management subsystems 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; actually know how to use them yet. This is something we planned to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; implement in the future, but there simply hasn't been time to do so 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; yet.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So the bottom line is that there really is no way around the need 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to launch a new orted on each node every time the user issues an 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun command.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I hope that answers your question. If not, please don't hesitate to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; let me know.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for pointing out these issues. I was hoping something I 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; didn't know may solve my problem. I guess there may not be a good 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; workaround for this limitation due to SGE slots. We could try to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; track and set some top limit for the number of times that qrsh can 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exec, before the spawn program uses up all the available SGE slots 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and errors out.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmmm...it sounds to me like the problem here is that the second 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenRTE universe (the one created by the second mpirun) has no 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; knowledge of what the other universe may already have done. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it sounds like a good assumption but it actually turns out that the 
</span><br>
<span class="quotelev2">&gt;&gt; orted for both the spawner (parent) and spawnee (child) belong to the 
</span><br>
<span class="quotelev2">&gt;&gt; same universe. So, it may not be the case as you mention.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; parent:
</span><br>
<span class="quotelev2">&gt;&gt;  15923 ??       S  0:00 orted --no-daemonize --bootproxy 1 --name 
</span><br>
<span class="quotelev2">&gt;&gt; 0.0.1 --num_procs 2 --vpid_start 0 --nodename burl-ct-v440-5 
</span><br>
<span class="quotelev2">&gt;&gt; --universe paklui_at_burl-ct-v440-5:default-universe --nsreplica 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0.0.0;tcp://10.8.30.128:47797&quot; --gprreplica 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0.0.0;tcp://10.8.30.128:47797&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; child on the same node as parent:
</span><br>
<span class="quotelev2">&gt;&gt;  15935 ??       S  0:00 orted --no-daemonize --bootproxy 2 --name 
</span><br>
<span class="quotelev2">&gt;&gt; 0.0.3 --num_procs 4 --vpid_start 0 --nodename burl-ct-v440-5 
</span><br>
<span class="quotelev2">&gt;&gt; --universe paklui_at_burl-ct-v440-5:default-universe --nsreplica 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0.0.0;tcp://10.8.30.128:47797&quot; --gprreplica 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0.0.0;tcp://10.8.30.128:47797&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; child on the different node:
</span><br>
<span class="quotelev2">&gt;&gt;   5563 ??       S  0:00 orted --no-daemonize --bootproxy 2 --name 
</span><br>
<span class="quotelev2">&gt;&gt; 0.0.2 --num_procs 4 --vpid_start 0 --nodename burl-ct-v440-4 
</span><br>
<span class="quotelev2">&gt;&gt; --universe paklui_at_burl-ct-v440-5:default-universe --nsreplica 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0.0.0;tcp://10.8.30.128:47797&quot; --gprreplica 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0.0.0;tcp://10.8.30.128:47797&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I assume when you say the second mpirun it means internally the 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_spawn is treated as a mpirun (or orterun). I use only 1 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun to run the spawner executable, just to clarify.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, the RAS in the second
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; universe reads the qrsh environmental variable to see how many slots 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are available - and doesn't know that the other mpirun already used 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can definately agree with that. In fact, there's actually no easy 
</span><br>
<span class="quotelev2">&gt;&gt; way (no env vars) to find out out many slots (for qrsh tasks) have 
</span><br>
<span class="quotelev2">&gt;&gt; been used up already. The SGE engineer that I worked with also agrees 
</span><br>
<span class="quotelev2">&gt;&gt; that can be useful, not just for us, but for other MPI implementations 
</span><br>
<span class="quotelev2">&gt;&gt; out there as well. So it's something I might need to work out with them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assume, therefore, that the other mpirun is basically being run in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the background - we don't complete it first before letting the next 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one begin executing?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; there is only 1 mpirun, but the orted for both the parent and child 
</span><br>
<span class="quotelev2">&gt;&gt; are actually running in parallel at the same time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The only solution I can think of to that problem would be to kickoff 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a persistent daemon to act as the &quot;seed&quot; for the entire time we are 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the shell (either interactive or batch). This will ensure that the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; knowledge of resource usage carries over from one execution to the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; next. We actually do this with the Eclipse folks, so I know the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mechanism works. We also actually kickoff a daemon that does the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch in many of the different systems - only difference here is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that we normally don't make it persistent (it is just a child of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun). Problem here is to figure out how to handle the persistent 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; part of this transparently to the user.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What we could do is bury this in an appropriate component somewhere 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (I have an idea where it might go, but need to think a little more to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be sure). If this is the first mpirun within a given shell, then we 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kickoff a persistent orted to act as the seed and connect ourselves 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to it (we have functions in the system to do this already). If we are 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not the first mpirun, then we just connect to the existing &quot;seed&quot;. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The &quot;seed&quot; does all the actual launching of applications.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This lets each mpirun exit as usual - only the seed keeps alive. We 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would need to establish a way to kill the seed when all the mpiruns 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are complete - sort of a &quot;last-one-out kills the orted&quot; procedure. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That would take a little care as we don't want a race condition to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; creep into the system - if another mpirun is coming, but the prior 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one exits quickly, we don't want the seed to die just yet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this is good information, but I haven't played around with persistent 
</span><br>
<span class="quotelev2">&gt;&gt; daemons at all. It should all make sense after a day or two. I'll get 
</span><br>
<span class="quotelev2">&gt;&gt; back to you on this later.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hope all that helps. We may be able to resolve this in a fairly 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; straightforward manner - I think a lot of the necessary tools are 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; already in the system, we just need to &quot;hook them up&quot; appropriately 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for SGE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; yup, that's the goal.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Pak Lui wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When I run a spawn program over rsh/ssh, I notice that each time the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; child program gets spawned, it will need to establish a new rsh/ssh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; connection to the remote node to launch orted on that node, even the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; parent executable and the orted are running on that node.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So I wonder if there is any way that we can use the parent orted to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; launch the child program if they happen to be on the same node?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I try to compare to the spawn program to the scenario where I run 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; multiple executables in one mpirun command. For this run, I only 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; establish one connection to the remote node only, and both 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; executables shared the same remote connection.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; % ./mpirun -np 2 -host burl-ct-v440-5 -prefix `pwd`/.. sleep 12 : 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -np 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; sleep 10
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Password:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 15015 /workspace/paklui/ompi/trunk/builds/sparc32-g/bin/../bin/orted
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --bootprox
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    15017 sleep 12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    15019 sleep 12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    15021 sleep 10
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    15023 sleep 10
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The reason that I want to find out if it is possible for orted to 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; launch child executable(s) without having to establish a new 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; connection, is because the number of times that I can run 'qrsh' 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in SGE (or N1GE) is actually depended on the number of slots that 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the user initially allocated. That the slot number corresponds to 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the number of CPUs on a node. Each slot allows one 'qrsh' connection.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The issue is when I try to run a spawn job on a single node, or a 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cluster of many 1-cpu nodes under SGE. The number of times that 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the program can spawn is limited by 'qrsh', that it forbids the 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; child program to connect to the same node where the parent 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; executable's orted might be already running there.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am curious to see if I can find some solution to the problem 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; here. I am also looking to see if there are some tricks in SGE to 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; get around this issue, but workaround I can see aren't pretty 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; though. So I welcome your questions, comments or suggestions on this.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Thanks,
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0912.php">Neil Ludban: "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<li><strong>Previous message:</strong> <a href="0910.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>In reply to:</strong> <a href="0910.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
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
