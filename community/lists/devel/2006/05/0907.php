<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 31 15:31:39 2006" -->
<!-- isoreceived="20060531193139" -->
<!-- sent="Wed, 31 May 2006 15:31:33 -0400" -->
<!-- isosent="20060531193133" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted" -->
<!-- id="447DEF15.2050800_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="447DE06E.3040303_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-05-31 15:31:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0908.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Previous message:</strong> <a href="0906.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>In reply to:</strong> <a href="0906.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0908.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi Pak
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm afraid I don't fully understand your question, so forgive me if I 
</span><br>
<span class="quotelev1">&gt; don't seem to address the problem adequately. As I understand it, you 
</span><br>
<span class="quotelev1">&gt; are asking about the scenario where someone wants to execute multiple 
</span><br>
<span class="quotelev1">&gt; calls of mpirun, with the applications executing on the same set of 
</span><br>
<span class="quotelev1">&gt; nodes. Your question is: why does OpenRTE spawn a new daemon (orted) on 
</span><br>
<span class="quotelev1">&gt; the node each time we execute mpirun - why doesn't it just use the 
</span><br>
<span class="quotelev1">&gt; existing one to launch the new application process(es)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Assuming I have the question right, the short answers are &quot;may not be 
</span><br>
<span class="quotelev1">&gt; permitted&quot; and &quot;not yet implemented&quot;.  :-)
</span><br>
<p>yes, Ralph, that is precisely the question. good thing that you've 
<br>
figured that out :)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, the fact that an orted already exists on a node is not sufficient 
</span><br>
<span class="quotelev1">&gt; to allow us to use it again for another application. The orted must be 
</span><br>
<span class="quotelev1">&gt; persistent or else we do not allow a new application to re-use it. This 
</span><br>
<span class="quotelev1">&gt; is required because the existing orted will go away when its original 
</span><br>
<span class="quotelev1">&gt; application is done executing - if we use it as our parent to launch 
</span><br>
<span class="quotelev1">&gt; another child, then the new application process will &quot;die&quot; when the 
</span><br>
<span class="quotelev1">&gt; original one completes. Obviously, that isn't desirable.
</span><br>
<p>okay. I used to think that if orted is able to stay and fork other 
<br>
processes, but I didn't realize orted will go away once the parent 
<br>
process finishes.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Second, even though you can launch persistent orteds today, none of the 
</span><br>
<span class="quotelev1">&gt; current components in the resource management subsystems actually know 
</span><br>
<span class="quotelev1">&gt; how to use them yet. This is something we planned to implement in the 
</span><br>
<span class="quotelev1">&gt; future, but there simply hasn't been time to do so yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the bottom line is that there really is no way around the need to 
</span><br>
<span class="quotelev1">&gt; launch a new orted on each node every time the user issues an mpirun 
</span><br>
<span class="quotelev1">&gt; command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope that answers your question. If not, please don't hesitate to let 
</span><br>
<span class="quotelev1">&gt; me know.
</span><br>
<p>Thanks for pointing out these issues. I was hoping something I didn't 
<br>
know may solve my problem. I guess there may not be a good workaround 
<br>
for this limitation due to SGE slots. We could try to track and set some 
<br>
top limit for the number of times that qrsh can exec, before the spawn 
<br>
program uses up all the available SGE slots and errors out.
<br>
<p><span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pak Lui wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I run a spawn program over rsh/ssh, I notice that each time the
</span><br>
<span class="quotelev2">&gt;&gt; child program gets spawned, it will need to establish a new rsh/ssh
</span><br>
<span class="quotelev2">&gt;&gt; connection to the remote node to launch orted on that node, even the
</span><br>
<span class="quotelev2">&gt;&gt; parent executable and the orted are running on that node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I wonder if there is any way that we can use the parent orted to
</span><br>
<span class="quotelev2">&gt;&gt; launch the child program if they happen to be on the same node?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I try to compare to the spawn program to the scenario where I run 
</span><br>
<span class="quotelev2">&gt;&gt; multiple executables in one mpirun command. For this run, I only 
</span><br>
<span class="quotelev2">&gt;&gt; establish one connection to the remote node only, and both executables 
</span><br>
<span class="quotelev2">&gt;&gt; shared the same remote connection.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; % ./mpirun -np 2 -host burl-ct-v440-5 -prefix `pwd`/.. sleep 12 : -np 2
</span><br>
<span class="quotelev2">&gt;&gt; sleep 10
</span><br>
<span class="quotelev2">&gt;&gt; Password:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 15015 /workspace/paklui/ompi/trunk/builds/sparc32-g/bin/../bin/orted
</span><br>
<span class="quotelev2">&gt;&gt; --bootprox
</span><br>
<span class="quotelev2">&gt;&gt;    15017 sleep 12
</span><br>
<span class="quotelev2">&gt;&gt;    15019 sleep 12
</span><br>
<span class="quotelev2">&gt;&gt;    15021 sleep 10
</span><br>
<span class="quotelev2">&gt;&gt;    15023 sleep 10
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The reason that I want to find out if it is possible for orted to 
</span><br>
<span class="quotelev2">&gt;&gt; launch child executable(s) without having to establish a new 
</span><br>
<span class="quotelev2">&gt;&gt; connection, is because the number of times that I can run 'qrsh' in 
</span><br>
<span class="quotelev2">&gt;&gt; SGE (or N1GE) is actually depended on the number of slots that the 
</span><br>
<span class="quotelev2">&gt;&gt; user initially allocated. That the slot number corresponds to the 
</span><br>
<span class="quotelev2">&gt;&gt; number of CPUs on a node. Each slot allows one 'qrsh' connection.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The issue is when I try to run a spawn job on a single node, or a 
</span><br>
<span class="quotelev2">&gt;&gt; cluster of many 1-cpu nodes under SGE. The number of times that the 
</span><br>
<span class="quotelev2">&gt;&gt; program can spawn is limited by 'qrsh', that it forbids the child 
</span><br>
<span class="quotelev2">&gt;&gt; program to connect to the same node where the parent executable's 
</span><br>
<span class="quotelev2">&gt;&gt; orted might be already running there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am curious to see if I can find some solution to the problem here. I 
</span><br>
<span class="quotelev2">&gt;&gt; am also looking to see if there are some tricks in SGE to get around 
</span><br>
<span class="quotelev2">&gt;&gt; this issue, but workaround I can see aren't pretty though. So I 
</span><br>
<span class="quotelev2">&gt;&gt; welcome your questions, comments or suggestions on this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
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
<li><strong>Next message:</strong> <a href="0908.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Previous message:</strong> <a href="0906.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>In reply to:</strong> <a href="0906.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0908.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
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
