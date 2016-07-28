<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 31 19:34:38 2006" -->
<!-- isoreceived="20060531233438" -->
<!-- sent="Wed, 31 May 2006 19:34:35 -0400" -->
<!-- isosent="20060531233435" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted" -->
<!-- id="447E280B.5000205_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="447DF154.8050505_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-05-31 19:34:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0910.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Previous message:</strong> <a href="0908.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>In reply to:</strong> <a href="0908.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0910.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Reply:</strong> <a href="0910.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev3">&gt;&gt;&gt; First, the fact that an orted already exists on a node is not 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sufficient to allow us to use it again for another application. The 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orted must be persistent or else we do not allow a new application to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; re-use it. This is required because the existing orted will go away 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when its original application is done executing - if we use it as our 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent to launch another child, then the new application process will 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;die&quot; when the original one completes. Obviously, that isn't desirable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; okay. I used to think that if orted is able to stay and fork other 
</span><br>
<span class="quotelev2">&gt;&gt; processes, but I didn't realize orted will go away once the parent 
</span><br>
<span class="quotelev2">&gt;&gt; process finishes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know how to get around this problem for non-persistent orteds. 
</span><br>
<span class="quotelev1">&gt; Perhaps we can devise some mechanism. The problem is that mpirun needs 
</span><br>
<span class="quotelev1">&gt; to exit when it finishes the associated application. Without a 
</span><br>
<span class="quotelev1">&gt; persistent orted, mpirun serves as the parent process for everything 
</span><br>
<span class="quotelev1">&gt; that is executing, including the daemons. So, for mpirun to exit, that 
</span><br>
<span class="quotelev1">&gt; means all of its children must also terminate.
</span><br>
<p>wow, that's a thought. Do you mean that after we start a SGE 
<br>
(interactive/batch) job, we first have the user to fire up persistent 
<br>
orted, in order to have 'qrsh' to launch the persistent orted onto all 
<br>
of the SGE nodes, and have them running for the duration of the SGE job. 
<br>
So that way, the subsequent mpirun will not need to use qrsh again to 
<br>
launch on the remote nodes. I think that may actually solve the problem.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If we try to link one mpirun to another, then we have the problem that 
</span><br>
<span class="quotelev1">&gt; we must force the first mpirun to &quot;stay alive&quot; until the second one 
</span><br>
<span class="quotelev1">&gt; completes. This could be done, but seems problematic and contrary to 
</span><br>
<span class="quotelev1">&gt; normal user expectations.
</span><br>
<p>agree, that is not good.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Second, even though you can launch persistent orteds today, none of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the current components in the resource management subsystems actually 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know how to use them yet. This is something we planned to implement 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the future, but there simply hasn't been time to do so yet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So the bottom line is that there really is no way around the need to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch a new orted on each node every time the user issues an mpirun 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope that answers your question. If not, please don't hesitate to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; let me know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for pointing out these issues. I was hoping something I didn't 
</span><br>
<span class="quotelev2">&gt;&gt; know may solve my problem. I guess there may not be a good workaround 
</span><br>
<span class="quotelev2">&gt;&gt; for this limitation due to SGE slots. We could try to track and set 
</span><br>
<span class="quotelev2">&gt;&gt; some top limit for the number of times that qrsh can exec, before the 
</span><br>
<span class="quotelev2">&gt;&gt; spawn program uses up all the available SGE slots and errors out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmm...it sounds to me like the problem here is that the second OpenRTE 
</span><br>
<span class="quotelev1">&gt; universe (the one created by the second mpirun) has no knowledge of what 
</span><br>
<span class="quotelev1">&gt; the other universe may already have done. 
</span><br>
<p>it sounds like a good assumption but it actually turns out that the 
<br>
orted for both the spawner (parent) and spawnee (child) belong to the 
<br>
same universe. So, it may not be the case as you mention.
<br>
<p>parent:
<br>
&nbsp;&nbsp;15923 ??       S  0:00 orted --no-daemonize --bootproxy 1 --name 0.0.1 
<br>
--num_procs 2 --vpid_start 0 --nodename burl-ct-v440-5 --universe 
<br>
paklui_at_burl-ct-v440-5:default-universe --nsreplica 
<br>
&quot;0.0.0;tcp://10.8.30.128:47797&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://10.8.30.128:47797&quot; --mpi-call-yield 0
<br>
<p>child on the same node as parent:
<br>
&nbsp;&nbsp;15935 ??       S  0:00 orted --no-daemonize --bootproxy 2 --name 0.0.3 
<br>
--num_procs 4 --vpid_start 0 --nodename burl-ct-v440-5 --universe 
<br>
paklui_at_burl-ct-v440-5:default-universe --nsreplica 
<br>
&quot;0.0.0;tcp://10.8.30.128:47797&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://10.8.30.128:47797&quot; --mpi-call-yield 0
<br>
<p>child on the different node:
<br>
&nbsp;&nbsp;&nbsp;5563 ??       S  0:00 orted --no-daemonize --bootproxy 2 --name 0.0.2 
<br>
--num_procs 4 --vpid_start 0 --nodename burl-ct-v440-4 --universe 
<br>
paklui_at_burl-ct-v440-5:default-universe --nsreplica 
<br>
&quot;0.0.0;tcp://10.8.30.128:47797&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://10.8.30.128:47797&quot; --mpi-call-yield 0
<br>
<p>I assume when you say the second mpirun it means internally the 
<br>
MPI_Comm_spawn is treated as a mpirun (or orterun). I use only 1 mpirun 
<br>
to run the spawner executable, just to clarify.
<br>
<p>So, the RAS in the second
<br>
<span class="quotelev1">&gt; universe reads the qrsh environmental variable to see how many slots are 
</span><br>
<span class="quotelev1">&gt; available - and doesn't know that the other mpirun already used some. 
</span><br>
<p>I can definately agree with that. In fact, there's actually no easy way 
<br>
(no env vars) to find out out many slots (for qrsh tasks) have been used 
<br>
up already. The SGE engineer that I worked with also agrees that can be 
<br>
useful, not just for us, but for other MPI implementations out there as 
<br>
well. So it's something I might need to work out with them.
<br>
<p>I
<br>
<span class="quotelev1">&gt; assume, therefore, that the other mpirun is basically being run in the 
</span><br>
<span class="quotelev1">&gt; background - we don't complete it first before letting the next one 
</span><br>
<span class="quotelev1">&gt; begin executing?
</span><br>
<p>there is only 1 mpirun, but the orted for both the parent and child are 
<br>
actually running in parallel at the same time.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only solution I can think of to that problem would be to kickoff a 
</span><br>
<span class="quotelev1">&gt; persistent daemon to act as the &quot;seed&quot; for the entire time we are in the 
</span><br>
<span class="quotelev1">&gt; shell (either interactive or batch). This will ensure that the knowledge 
</span><br>
<span class="quotelev1">&gt; of resource usage carries over from one execution to the next. We 
</span><br>
<span class="quotelev1">&gt; actually do this with the Eclipse folks, so I know the mechanism works. 
</span><br>
<span class="quotelev1">&gt; We also actually kickoff a daemon that does the launch in many of the 
</span><br>
<span class="quotelev1">&gt; different systems - only difference here is that we normally don't make 
</span><br>
<span class="quotelev1">&gt; it persistent (it is just a child of mpirun). Problem here is to figure 
</span><br>
<span class="quotelev1">&gt; out how to handle the persistent part of this transparently to the user.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What we could do is bury this in an appropriate component somewhere (I 
</span><br>
<span class="quotelev1">&gt; have an idea where it might go, but need to think a little more to be 
</span><br>
<span class="quotelev1">&gt; sure). If this is the first mpirun within a given shell, then we kickoff 
</span><br>
<span class="quotelev1">&gt; a persistent orted to act as the seed and connect ourselves to it (we 
</span><br>
<span class="quotelev1">&gt; have functions in the system to do this already). If we are not the 
</span><br>
<span class="quotelev1">&gt; first mpirun, then we just connect to the existing &quot;seed&quot;. The &quot;seed&quot; 
</span><br>
<span class="quotelev1">&gt; does all the actual launching of applications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This lets each mpirun exit as usual - only the seed keeps alive. We 
</span><br>
<span class="quotelev1">&gt; would need to establish a way to kill the seed when all the mpiruns are 
</span><br>
<span class="quotelev1">&gt; complete - sort of a &quot;last-one-out kills the orted&quot; procedure. That 
</span><br>
<span class="quotelev1">&gt; would take a little care as we don't want a race condition to creep into 
</span><br>
<span class="quotelev1">&gt; the system - if another mpirun is coming, but the prior one exits 
</span><br>
<span class="quotelev1">&gt; quickly, we don't want the seed to die just yet.
</span><br>
<p>this is good information, but I haven't played around with persistent 
<br>
daemons at all. It should all make sense after a day or two. I'll get 
<br>
back to you on this later.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope all that helps. We may be able to resolve this in a fairly 
</span><br>
<span class="quotelev1">&gt; straightforward manner - I think a lot of the necessary tools are 
</span><br>
<span class="quotelev1">&gt; already in the system, we just need to &quot;hook them up&quot; appropriately for SGE.
</span><br>
<p>yup, that's the goal.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pak Lui wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I run a spawn program over rsh/ssh, I notice that each time the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; child program gets spawned, it will need to establish a new rsh/ssh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; connection to the remote node to launch orted on that node, even the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parent executable and the orted are running on that node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So I wonder if there is any way that we can use the parent orted to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; launch the child program if they happen to be on the same node?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I try to compare to the spawn program to the scenario where I run 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; multiple executables in one mpirun command. For this run, I only 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; establish one connection to the remote node only, and both 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; executables shared the same remote connection.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; % ./mpirun -np 2 -host burl-ct-v440-5 -prefix `pwd`/.. sleep 12 : -np 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sleep 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Password:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 15015 /workspace/paklui/ompi/trunk/builds/sparc32-g/bin/../bin/orted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --bootprox
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    15017 sleep 12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    15019 sleep 12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    15021 sleep 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    15023 sleep 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The reason that I want to find out if it is possible for orted to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; launch child executable(s) without having to establish a new 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; connection, is because the number of times that I can run 'qrsh' in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SGE (or N1GE) is actually depended on the number of slots that the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; user initially allocated. That the slot number corresponds to the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; number of CPUs on a node. Each slot allows one 'qrsh' connection.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The issue is when I try to run a spawn job on a single node, or a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cluster of many 1-cpu nodes under SGE. The number of times that the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program can spawn is limited by 'qrsh', that it forbids the child 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program to connect to the same node where the parent executable's 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orted might be already running there.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am curious to see if I can find some solution to the problem here. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am also looking to see if there are some tricks in SGE to get 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; around this issue, but workaround I can see aren't pretty though. So 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I welcome your questions, comments or suggestions on this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="0910.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Previous message:</strong> <a href="0908.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>In reply to:</strong> <a href="0908.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0910.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Reply:</strong> <a href="0910.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
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
