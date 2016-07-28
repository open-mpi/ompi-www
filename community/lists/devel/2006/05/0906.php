<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 31 14:29:07 2006" -->
<!-- isoreceived="20060531182907" -->
<!-- sent="Wed, 31 May 2006 12:29:02 -0600" -->
<!-- isosent="20060531182902" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted" -->
<!-- id="447DE06E.3040303_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="447DDC4D.8030302_at_Sun.COM" -->
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
<strong>Date:</strong> 2006-05-31 14:29:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0907.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Previous message:</strong> <a href="0905.php">Pak Lui: "[OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>In reply to:</strong> <a href="0905.php">Pak Lui: "[OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0907.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Reply:</strong> <a href="0907.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Pak
<br>
<p>I'm afraid I don't fully understand your question, so forgive me if I 
<br>
don't seem to address the problem adequately. As I understand it, you 
<br>
are asking about the scenario where someone wants to execute multiple 
<br>
calls of mpirun, with the applications executing on the same set of 
<br>
nodes. Your question is: why does OpenRTE spawn a new daemon (orted) on 
<br>
the node each time we execute mpirun - why doesn't it just use the 
<br>
existing one to launch the new application process(es)?
<br>
<p>Assuming I have the question right, the short answers are &quot;may not be 
<br>
permitted&quot; and &quot;not yet implemented&quot;.  :-)
<br>
<p>First, the fact that an orted already exists on a node is not sufficient 
<br>
to allow us to use it again for another application. The orted must be 
<br>
persistent or else we do not allow a new application to re-use it. This 
<br>
is required because the existing orted will go away when its original 
<br>
application is done executing - if we use it as our parent to launch 
<br>
another child, then the new application process will &quot;die&quot; when the 
<br>
original one completes. Obviously, that isn't desirable.
<br>
<p>Second, even though you can launch persistent orteds today, none of the 
<br>
current components in the resource management subsystems actually know 
<br>
how to use them yet. This is something we planned to implement in the 
<br>
future, but there simply hasn't been time to do so yet.
<br>
<p>So the bottom line is that there really is no way around the need to 
<br>
launch a new orted on each node every time the user issues an mpirun 
<br>
command.
<br>
<p>I hope that answers your question. If not, please don't hesitate to let 
<br>
me know.
<br>
Ralph
<br>
<p><p><p>Pak Lui wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run a spawn program over rsh/ssh, I notice that each time the
</span><br>
<span class="quotelev1">&gt; child program gets spawned, it will need to establish a new rsh/ssh
</span><br>
<span class="quotelev1">&gt; connection to the remote node to launch orted on that node, even the
</span><br>
<span class="quotelev1">&gt; parent executable and the orted are running on that node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I wonder if there is any way that we can use the parent orted to
</span><br>
<span class="quotelev1">&gt; launch the child program if they happen to be on the same node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I try to compare to the spawn program to the scenario where I run 
</span><br>
<span class="quotelev1">&gt; multiple executables in one mpirun command. For this run, I only 
</span><br>
<span class="quotelev1">&gt; establish one connection to the remote node only, and both executables 
</span><br>
<span class="quotelev1">&gt; shared the same remote connection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % ./mpirun -np 2 -host burl-ct-v440-5 -prefix `pwd`/.. sleep 12 : -np 2
</span><br>
<span class="quotelev1">&gt; sleep 10
</span><br>
<span class="quotelev1">&gt; Password:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 15015 /workspace/paklui/ompi/trunk/builds/sparc32-g/bin/../bin/orted
</span><br>
<span class="quotelev1">&gt; --bootprox
</span><br>
<span class="quotelev1">&gt;    15017 sleep 12
</span><br>
<span class="quotelev1">&gt;    15019 sleep 12
</span><br>
<span class="quotelev1">&gt;    15021 sleep 10
</span><br>
<span class="quotelev1">&gt;    15023 sleep 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason that I want to find out if it is possible for orted to launch 
</span><br>
<span class="quotelev1">&gt; child executable(s) without having to establish a new connection, is 
</span><br>
<span class="quotelev1">&gt; because the number of times that I can run 'qrsh' in SGE (or N1GE) is 
</span><br>
<span class="quotelev1">&gt; actually depended on the number of slots that the user initially 
</span><br>
<span class="quotelev1">&gt; allocated. That the slot number corresponds to the number of CPUs on a 
</span><br>
<span class="quotelev1">&gt; node. Each slot allows one 'qrsh' connection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The issue is when I try to run a spawn job on a single node, or a 
</span><br>
<span class="quotelev1">&gt; cluster of many 1-cpu nodes under SGE. The number of times that the 
</span><br>
<span class="quotelev1">&gt; program can spawn is limited by 'qrsh', that it forbids the child 
</span><br>
<span class="quotelev1">&gt; program to connect to the same node where the parent executable's orted 
</span><br>
<span class="quotelev1">&gt; might be already running there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am curious to see if I can find some solution to the problem here. I 
</span><br>
<span class="quotelev1">&gt; am also looking to see if there are some tricks in SGE to get around 
</span><br>
<span class="quotelev1">&gt; this issue, but workaround I can see aren't pretty though. So I welcome 
</span><br>
<span class="quotelev1">&gt; your questions, comments or suggestions on this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0907.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Previous message:</strong> <a href="0905.php">Pak Lui: "[OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>In reply to:</strong> <a href="0905.php">Pak Lui: "[OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0907.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Reply:</strong> <a href="0907.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
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
