<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  2 14:49:01 2006" -->
<!-- isoreceived="20060302194901" -->
<!-- sent="Thu, 02 Mar 2006 13:49:11 -0600" -->
<!-- isosent="20060302194911" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn and distribution of slaves" -->
<!-- id="44074C37.9000508_at_cs.uh.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="440726C4.3080105_at_cs.uh.edu" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-02 14:49:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0761.php">Jeff Squyres: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Previous message:</strong> <a href="0759.php">Xiaoning (David) Yang: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<li><strong>In reply to:</strong> <a href="0754.php">Edgar Gabriel: "Re: [OMPI users] Spawn and distribution of slaves"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0768.php">Jean Latour: "Re: [OMPI users] Spawn and distribution of slaves"</a>
<li><strong>Reply:</strong> <a href="0768.php">Jean Latour: "Re: [OMPI users] Spawn and distribution of slaves"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
so for my tests, Open MPI did follow the machinefile (see output)
<br>
further below, however, for each spawn operation it starts from the very
<br>
beginning of the machinefile...
<br>
<p>The following example spawns 5 child processes (with a single
<br>
MPI_Comm_spawn), and each child prints its rank and the hostname.
<br>
<p>gabriel_at_linux12 ~/dyncomm $ mpirun -hostfile machinefile  -np 3
<br>
./dyncomm_spawn_father
<br>
&nbsp;&nbsp;Checking for MPI_Comm_spawn.....................working
<br>
Hello world from child 0 on host linux12
<br>
Hello world from child 1 on host linux13
<br>
Hello world from child 3 on host linux15
<br>
Hello world from child 4 on host linux16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Testing Send/Recv on the intercomm..........working
<br>
Hello world from child 2 on host linux14
<br>
<p><p>with the machinefile being:
<br>
gabriel_at_linux12 ~/dyncomm $ cat machinefile
<br>
linux12
<br>
linux13
<br>
linux14
<br>
linux15
<br>
linux16
<br>
<p>In your code, you always spawn 1 process at the time, and that's why 
<br>
they are all located on the same node.
<br>
<p>Hope this helps...
<br>
Edgar
<br>
<p><p>Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; as far as I know, Open MPI should follow the machinefile for spawn 
</span><br>
<span class="quotelev1">&gt; operations, starting however for every spawn at the beginning of the 
</span><br>
<span class="quotelev1">&gt; machinefile again. An info object such as 'lam_sched_round_robin' is 
</span><br>
<span class="quotelev1">&gt; currently not available/implemented. Let me look into this...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jean Latour wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Testing the MPI_Comm_Spawn function of Open MPI version 1.0.1, I have an 
</span><br>
<span class="quotelev2">&gt;&gt;example that works OK,
</span><br>
<span class="quotelev2">&gt;&gt;except that it shows that the spawned processes do not follow the 
</span><br>
<span class="quotelev2">&gt;&gt;&quot;machinefile&quot; setting of processors.
</span><br>
<span class="quotelev2">&gt;&gt;In this example a master process spawns first 2 processes, then 
</span><br>
<span class="quotelev2">&gt;&gt;disconnects from them and spawn 2 more
</span><br>
<span class="quotelev2">&gt;&gt;processes. Running on a Quad Opteron node, all processes are running on 
</span><br>
<span class="quotelev2">&gt;&gt;the same node, although the
</span><br>
<span class="quotelev2">&gt;&gt;machinefile specifies that the slaves should run on different nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;With the actual version of OpenMPI is it possible to direct the spawned 
</span><br>
<span class="quotelev2">&gt;&gt;processes on
</span><br>
<span class="quotelev2">&gt;&gt;a specific node ? (the node distribution could be given in the 
</span><br>
<span class="quotelev2">&gt;&gt;&quot;machinefile&quot; file, as with LAM MPI)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The code (Fortran 90) of this example and makefile is attached as a tar 
</span><br>
<span class="quotelev2">&gt;&gt;file.
</span><br>
<span class="quotelev2">&gt;&gt;	
</span><br>
<span class="quotelev2">&gt;&gt;Thank you very much
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Jean Latour
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Department of Computer Science          email:gabriel_at_[hidden]
University of Houston                   <a href="http://www.cs.uh.edu/~gabriel">http://www.cs.uh.edu/~gabriel</a>
Philip G. Hoffman Hall, Room 524        Tel: +1 (713) 743-3857
Houston, TX-77204, USA                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0761.php">Jeff Squyres: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Previous message:</strong> <a href="0759.php">Xiaoning (David) Yang: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<li><strong>In reply to:</strong> <a href="0754.php">Edgar Gabriel: "Re: [OMPI users] Spawn and distribution of slaves"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0768.php">Jean Latour: "Re: [OMPI users] Spawn and distribution of slaves"</a>
<li><strong>Reply:</strong> <a href="0768.php">Jean Latour: "Re: [OMPI users] Spawn and distribution of slaves"</a>
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
