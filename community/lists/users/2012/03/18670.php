<?
$subject_val = "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 14:07:36 2012" -->
<!-- isoreceived="20120302190736" -->
<!-- sent="Fri, 2 Mar 2012 12:07:27 -0700" -->
<!-- isosent="20120302190727" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid OpenMPI / OpenMP programming" -->
<!-- id="AF32C2A7-EBCE-4D0A-8F67-34ACA5DF4590_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4F5116DD.2020708_at_rz.rwth-aachen.de" -->
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
<strong>Date:</strong> 2012-03-02 14:07:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18671.php">Jianzhang He: "Re: [OMPI users] run orterun with more than 200 processes"</a>
<li><strong>Previous message:</strong> <a href="18669.php">Paul Kapinos: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<li><strong>In reply to:</strong> <a href="18669.php">Paul Kapinos: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 2, 2012, at 11:52 AM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; Hello Ralph,
</span><br>
<span class="quotelev1">&gt; I've some questions on placement and -cpus-per-rank.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; First, use the --cpus-per-rank option to separate the ranks from each other. In other words, instead of --bind-to-socket -bysocket, you do:
</span><br>
<span class="quotelev2">&gt;&gt; -bind-to-core -cpus-per-rank N
</span><br>
<span class="quotelev2">&gt;&gt; This will take each rank and bind it to a unique set of N cores, thereby cleanly separating them on the node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, it helps a lot,  but the placement arranged in this way is still not optimal, I believe.
</span><br>
<span class="quotelev1">&gt; The cores are assigned from 0 on in incremental order. On a 2-socket, 12-core machine:
</span><br>
<span class="quotelev1">&gt; (0,1,2,3,4,  5[,12,13,14,15,16,17])
</span><br>
<span class="quotelev1">&gt; (6,7,8,9,10,11[,18,19,20,21,22,23])
</span><br>
<span class="quotelev1">&gt; ^cores^         ^hypercores^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; running 2 processes with 5 threads lead to this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0 &lt;#&gt; linuxbdc07.rz.RWTH-Aachen.DE &lt;#&gt; physcpubind: 0 1 2 3 4
</span><br>
<span class="quotelev1">&gt; 1 &lt;#&gt; linuxbdc07.rz.RWTH-Aachen.DE &lt;#&gt; physcpubind: 5 6 7 8 9
</span><br>
<span class="quotelev1">&gt; (not used cores: 10, 11; not used hypercores: 12-23)
</span><br>
<span class="quotelev1">&gt; That is, there is an MPI Process bound to core 0 (which is sweet-pot for may kernel things), and the threads of the 2nd process are spawned over both sockets.
</span><br>
<p>Yeah, the current implementation isn't quite as good as we'd like. We rewrote the entire binding system for the trunk/upcoming 1.7 series.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - is there a way to say to the system to spawn the processes (= slot chunks defined by -cpus-per-rank N) over the sockets in round-robin model?
</span><br>
<p>No, but I should add it
<br>
<p><span class="quotelev1">&gt; - is there a way to say &quot;do not use this core number!&quot; in order to add some alignment in core numbering?
</span><br>
<p>No, but again, I should add it
<br>
<p><span class="quotelev1">&gt; - in there a way to use the hypercores in company with the real cores?
</span><br>
<p>Not in the 1.5 series, but on the trunk you can
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And last but not least, I found out that the starting and running the program on differing hardware is problematic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Trying to start 2-rank, 5-thread on 2x6 core computer from my 4-core workstation, I get the below error message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seem that the calculation of core numbers / pinning determination is a part of *mpiexec* process instead of being run on the target node? *puzzled*
</span><br>
<p>No, it is done on the backend. I suspect there is a bug, though, that is causing the number of cores/socket to be *sensed* on the mpiexec node and then *passed* back to the daemon. Hasn't surfaced before because the only folks using this option are on homogeneous systems.
<br>
<p>FWIW: the trunk resolves this problem, but I haven't checked the cpus-per-rank support on it yet.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpiexec -np 1 -H linuxbdc01 -bind-to-core -cpus-per-rank 5 ompi_testpin.sh MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Your job has requested more cpus per process(rank) than there
</span><br>
<span class="quotelev1">&gt; are cpus in a socket:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Cpus/rank: 5
</span><br>
<span class="quotelev1">&gt;  #cpus/socket: 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please correct one or both of these values and try again.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ssh linuxbdc01 cat /proc/cpuinfo | grep processor | wc -l
</span><br>
<span class="quotelev1">&gt; 24
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat /proc/cpuinfo | grep processor | wc -l
</span><br>
<span class="quotelev1">&gt; 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. Using Open MPI 1.5.3, waiting for 1.5.5 :o)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S.2. any update on this? <a href="http://www.open-mpi.org/community/lists/users/2012/01/18240.php">http://www.open-mpi.org/community/lists/users/2012/01/18240.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S.3. on the same 16-way, 128 core hardware as in P.S.2, also -cpus-per-rank goes crazy:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpiexec -mca btl_openib_warn_default_gid_prefix=0 -np 2 -H linuxbcsc21 -bind-to-core -cpus-per-rank 5 --report-bindings  ompi_testpin.sh MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; [linuxbcsc21.rz.RWTH-Aachen.DE:106342] [[55934,0],1] odls:default:fork binding child [[55934,1],0] to cpus 1000100010001
</span><br>
<span class="quotelev1">&gt; [linuxbcsc21.rz.RWTH-Aachen.DE:106342] [[55934,0],1] odls:default:fork binding child [[55934,1],1] to cpus 20002
</span><br>
<span class="quotelev1">&gt; 0 &lt;#&gt; linuxbcsc21.rz.RWTH-Aachen.DE &lt;#&gt; physcpubind: 0 16 32 48
</span><br>
<span class="quotelev1">&gt; 1 &lt;#&gt; linuxbcsc21.rz.RWTH-Aachen.DE &lt;#&gt; physcpubind: 1 17
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, -cpus-per-rank 5, but one process get 4 cores, the other one - only two..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What you can do is &quot;entice&quot; it away from your processes by leaving 1-2 cores for its own use. For example:
</span><br>
<span class="quotelev2">&gt;&gt; -npernode 2 -bind-to-core -cpus-per-rank 3
</span><br>
<span class="quotelev2">&gt;&gt; would run two MPI ranks on each node, each rank exclusively bound to 3 cores.
</span><br>
<span class="quotelev2">&gt;&gt; This leaves 2 cores on each node for Linux. When the scheduler sees the 6 cores of your MPI/MP procs working hard, and 2 cores sitting idle, it will tend to use those 2 cores for everything else - and not be tempted to push you aside to gain access to &quot;your&quot; cores.
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 29, 2012, at 3:08 AM, Auclair Francis wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Open-MPI users,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Our code is currently running Open-MPI (1.5.4) with SLURM on a NUMA machine (2 sockets by nodes and 4 cores by socket) with basically two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; levels of implementation for Open-MPI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - at lower level n &quot;Master&quot; MPI-processes (one by socket) are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simultaneously runned by dividing classically the physical domain into n
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sub-domains
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - while at higher level 4n MPI-processes are spawn to run a sparse Poisson solver.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At each time step, the code is thus going back and forth between these two levels of implementation using two MPI communicators. This also means that during about half of the computation time, 3n cores are at best sleeping (if not 'waiting' at a barrier) when not inside &quot;Solver routines&quot;. We consequently decided to implement OpenMP functionality in our code when solver was not running (we declare one single &quot;parallel&quot; region and use the omp &quot;master&quot; command when OpenMP threads are not active). We however face several difficulties:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a) It seems that both the 3n-MPI processes and the OpenMP threads 'consume processor cycles while waiting'. We consequently tried: mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mpi_yield_when_idle 1 , export OMP_WAIT_POLICY=passive or export
</span><br>
<span class="quotelev3">&gt;&gt;&gt; KMP_BLOCKTIME=0 ... The latest finally leads to an interesting reduction
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of computing time but worsens the second problem we have to face (see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bellow).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; b) We managed to have a &quot;correct&quot; (?) implementation of our MPI-processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on our sockets by using: mpirun -bind-to-socket -bysocket -np 4n However if OpenMP threads initially seem to scatter on each socket (one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thread by core) they slowly migrate to the same core as their 'Master MPI process' or gather on one or two cores by socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We play around with the environment variable KMP_AFFINITY but the best we could obtain was a pinning of the OpenMP threads to their own core... disorganizing at the same time the implementation of the 4n Level-2 MPI processes. When added, neither the specification of a rankfile nor the mpirun option -x IPATH_NO_CPUAFFINITY=1 seem to change significantly the situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This comportment looks rather inefficient but so far we did not manage to prevent the migration of the 4 threads to at most a couple of cores !
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there something wrong in our &quot;Hybrid&quot; implementation?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have any advices?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Francis
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
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
<li><strong>Next message:</strong> <a href="18671.php">Jianzhang He: "Re: [OMPI users] run orterun with more than 200 processes"</a>
<li><strong>Previous message:</strong> <a href="18669.php">Paul Kapinos: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<li><strong>In reply to:</strong> <a href="18669.php">Paul Kapinos: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
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
