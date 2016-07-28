<?
$subject_val = "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 18:51:24 2012" -->
<!-- isoreceived="20120229235124" -->
<!-- sent="Wed, 29 Feb 2012 16:51:15 -0700" -->
<!-- isosent="20120229235115" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid OpenMPI / OpenMP programming" -->
<!-- id="EF8292E4-0893-43DF-AAA1-5057E5F3ABE2_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4F4DF909.4070400_at_aero.obs-mip.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hybrid OpenMPI / OpenMP programming<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 18:51:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18624.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Previous message:</strong> <a href="18622.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>In reply to:</strong> <a href="18590.php">Auclair Francis: "[OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18669.php">Paul Kapinos: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18669.php">Paul Kapinos: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It sounds like you are running into an issue with the Linux scheduler. I have an item to add an API &quot;bind-this-thread-to-&lt;core, socket,&#133;&gt;&quot;, but that won't be available until sometime in the future.
<br>
<p>Couple of things you could try in the meantime. First, use the --cpus-per-rank option to separate the ranks from each other. In other words, instead of --bind-to-socket -bysocket, you do:
<br>
<p>-bind-to-core -cpus-per-rank N
<br>
<p>This will take each rank and bind it to a unique set of N cores, thereby cleanly separating them on the node.
<br>
<p>Second, the Linux scheduler tends to become jealous of the way MPI procs &quot;hog&quot; the resources. The scheduler needs room to run all those daemons and other processes too. So it tends to squeeze you aside a little, just to create some room for the rest of the stuff.
<br>
<p>What you can do is &quot;entice&quot; it away from your processes by leaving 1-2 cores for its own use. For example:
<br>
<p>-npernode 2 -bind-to-core -cpus-per-rank 3
<br>
<p>would run two MPI ranks on each node, each rank exclusively bound to 3 cores. This leaves 2 cores on each node for Linux. When the scheduler sees the 6 cores of your MPI/MP procs working hard, and 2 cores sitting idle, it will tend to use those 2 cores for everything else - and not be tempted to push you aside to gain access to &quot;your&quot; cores.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Feb 29, 2012, at 3:08 AM, Auclair Francis wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open-MPI users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our code is currently running Open-MPI (1.5.4) with SLURM on a NUMA machine (2 sockets by nodes and 4 cores by socket) with basically two
</span><br>
<span class="quotelev1">&gt; levels of implementation for Open-MPI:
</span><br>
<span class="quotelev1">&gt; - at lower level n &quot;Master&quot; MPI-processes (one by socket) are
</span><br>
<span class="quotelev1">&gt; simultaneously runned by dividing classically the physical domain into n
</span><br>
<span class="quotelev1">&gt; sub-domains
</span><br>
<span class="quotelev1">&gt; - while at higher level 4n MPI-processes are spawn to run a sparse Poisson solver.
</span><br>
<span class="quotelev1">&gt; At each time step, the code is thus going back and forth between these two levels of implementation using two MPI communicators. This also means that during about half of the computation time, 3n cores are at best sleeping (if not 'waiting' at a barrier) when not inside &quot;Solver routines&quot;. We consequently decided to implement OpenMP functionality in our code when solver was not running (we declare one single &quot;parallel&quot; region and use the omp &quot;master&quot; command when OpenMP threads are not active). We however face several difficulties:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a) It seems that both the 3n-MPI processes and the OpenMP threads 'consume processor cycles while waiting'. We consequently tried: mpirun
</span><br>
<span class="quotelev1">&gt; -mpi_yield_when_idle 1 , export OMP_WAIT_POLICY=passive or export
</span><br>
<span class="quotelev1">&gt; KMP_BLOCKTIME=0 ... The latest finally leads to an interesting reduction
</span><br>
<span class="quotelev1">&gt; of computing time but worsens the second problem we have to face (see
</span><br>
<span class="quotelev1">&gt; bellow).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; b) We managed to have a &quot;correct&quot; (?) implementation of our MPI-processes
</span><br>
<span class="quotelev1">&gt; on our sockets by using: mpirun -bind-to-socket -bysocket -np 4n 
</span><br>
<span class="quotelev1">&gt; However if OpenMP threads initially seem to scatter on each socket (one
</span><br>
<span class="quotelev1">&gt; thread by core) they slowly migrate to the same core as their 'Master MPI process' or gather on one or two cores by socket
</span><br>
<span class="quotelev1">&gt; We play around with the environment variable KMP_AFFINITY but the best we could obtain was a pinning of the OpenMP threads to their own core... disorganizing at the same time the implementation of the 4n Level-2 MPI processes. When added, neither the specification of a rankfile nor the mpirun option -x IPATH_NO_CPUAFFINITY=1 seem to change significantly the situation.
</span><br>
<span class="quotelev1">&gt; This comportment looks rather inefficient but so far we did not manage to prevent the migration of the 4 threads to at most a couple of cores !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there something wrong in our &quot;Hybrid&quot; implementation?
</span><br>
<span class="quotelev1">&gt; Do you have any advices?
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt; Francis
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18624.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Previous message:</strong> <a href="18622.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>In reply to:</strong> <a href="18590.php">Auclair Francis: "[OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18669.php">Paul Kapinos: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18669.php">Paul Kapinos: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
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
