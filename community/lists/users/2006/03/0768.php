<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar  3 03:32:57 2006" -->
<!-- isoreceived="20060303083257" -->
<!-- sent="Fri, 03 Mar 2006 09:26:35 +0100" -->
<!-- isosent="20060303082635" -->
<!-- name="Jean Latour" -->
<!-- email="latour_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn and distribution of slaves" -->
<!-- id="4407FDBB.30400_at_fujitsu.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="44074C37.9000508_at_cs.uh.edu" -->
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
<strong>From:</strong> Jean Latour (<em>latour_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-03 03:26:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0769.php">Jean Latour: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="0767.php">Brian Barrett: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<li><strong>In reply to:</strong> <a href="0760.php">Edgar Gabriel: "Re: [OMPI users] Spawn and distribution of slaves"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your answer. Your example address one possible situation 
<br>
where a parallel
<br>
application is spawned by a driver with MPI_Comm_Spawn, or multiple 
<br>
parallel applications
<br>
are spawned at the same time with a MPI_Comm_Span_Multiple, over a set 
<br>
of processors
<br>
described in the machinefile. It is OK if the next spawn occurs after 
<br>
some processes at the
<br>
beginning of the machinefile have stopped.
<br>
However I have in hands another case where the spawn processes are 
<br>
really dynamic over
<br>
time. Any child processes can stop (not necessarily the first in the 
<br>
machinefile), and thus
<br>
they are freeing some processors on which the new spawned processes must 
<br>
be running.
<br>
With LAM_MPI this situation has a satisfactory solution with the INFO 
<br>
parameter of the
<br>
MPI_Comm_Spawn. It allows to specify a &quot;local&quot; machinefile for these 
<br>
spawned processes,
<br>
instead of taking always the same machinefile from the beginning as in 
<br>
your example.
<br>
<p>Do you know if this specific feature will be implemented in Open-MPI (I 
<br>
hope it will be),
<br>
and possibly when ?
<br>
Dynamic applications really need this.
<br>
<p>Best Regards,
<br>
Jean Latour
<br>
<p>Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt;so for my tests, Open MPI did follow the machinefile (see output)
</span><br>
<span class="quotelev1">&gt;further below, however, for each spawn operation it starts from the very
</span><br>
<span class="quotelev1">&gt;beginning of the machinefile...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The following example spawns 5 child processes (with a single
</span><br>
<span class="quotelev1">&gt;MPI_Comm_spawn), and each child prints its rank and the hostname.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;gabriel_at_linux12 ~/dyncomm $ mpirun -hostfile machinefile  -np 3
</span><br>
<span class="quotelev1">&gt;./dyncomm_spawn_father
</span><br>
<span class="quotelev1">&gt;  Checking for MPI_Comm_spawn.....................working
</span><br>
<span class="quotelev1">&gt;Hello world from child 0 on host linux12
</span><br>
<span class="quotelev1">&gt;Hello world from child 1 on host linux13
</span><br>
<span class="quotelev1">&gt;Hello world from child 3 on host linux15
</span><br>
<span class="quotelev1">&gt;Hello world from child 4 on host linux16
</span><br>
<span class="quotelev1">&gt;      Testing Send/Recv on the intercomm..........working
</span><br>
<span class="quotelev1">&gt;Hello world from child 2 on host linux14
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;with the machinefile being:
</span><br>
<span class="quotelev1">&gt;gabriel_at_linux12 ~/dyncomm $ cat machinefile
</span><br>
<span class="quotelev1">&gt;linux12
</span><br>
<span class="quotelev1">&gt;linux13
</span><br>
<span class="quotelev1">&gt;linux14
</span><br>
<span class="quotelev1">&gt;linux15
</span><br>
<span class="quotelev1">&gt;linux16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In your code, you always spawn 1 process at the time, and that's why 
</span><br>
<span class="quotelev1">&gt;they are all located on the same node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hope this helps...
</span><br>
<span class="quotelev1">&gt;Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;as far as I know, Open MPI should follow the machinefile for spawn 
</span><br>
<span class="quotelev2">&gt;&gt;operations, starting however for every spawn at the beginning of the 
</span><br>
<span class="quotelev2">&gt;&gt;machinefile again. An info object such as 'lam_sched_round_robin' is 
</span><br>
<span class="quotelev2">&gt;&gt;currently not available/implemented. Let me look into this...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Jean Latour wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Testing the MPI_Comm_Spawn function of Open MPI version 1.0.1, I have an 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;example that works OK,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;except that it shows that the spawned processes do not follow the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&quot;machinefile&quot; setting of processors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;In this example a master process spawns first 2 processes, then 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;disconnects from them and spawn 2 more
</span><br>
<span class="quotelev3">&gt;&gt;&gt;processes. Running on a Quad Opteron node, all processes are running on 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;the same node, although the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;machinefile specifies that the slaves should run on different nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;With the actual version of OpenMPI is it possible to direct the spawned 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;processes on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;a specific node ? (the node distribution could be given in the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&quot;machinefile&quot; file, as with LAM MPI)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;The code (Fortran 90) of this example and makefile is attached as a tar 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;	
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Thank you very much
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Jean Latour
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0769.php">Jean Latour: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="0767.php">Brian Barrett: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<li><strong>In reply to:</strong> <a href="0760.php">Edgar Gabriel: "Re: [OMPI users] Spawn and distribution of slaves"</a>
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
