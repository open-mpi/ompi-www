<?
$subject_val = "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 13:52:18 2012" -->
<!-- isoreceived="20120302185218" -->
<!-- sent="Fri, 02 Mar 2012 19:52:13 +0100" -->
<!-- isosent="20120302185213" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid OpenMPI / OpenMP programming" -->
<!-- id="4F5116DD.2020708_at_rz.rwth-aachen.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EF8292E4-0893-43DF-AAA1-5057E5F3ABE2_at_open-mpi.org" -->
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
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 13:52:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18670.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<li><strong>Previous message:</strong> <a href="18668.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18623.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18670.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<li><strong>Reply:</strong> <a href="18670.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph,
<br>
I've some questions on placement and -cpus-per-rank.
<br>
<p><span class="quotelev1">&gt; First, use the --cpus-per-rank option to separate the ranks from each other. 
</span><br>
<span class="quotelev1">&gt; In other words, instead of --bind-to-socket -bysocket, you do:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bind-to-core -cpus-per-rank N
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will take each rank and bind it to a unique set of N cores, 
</span><br>
<span class="quotelev1">&gt; thereby cleanly separating them on the node.
</span><br>
<p>Yes, it helps a lot,  but the placement arranged in this way is still not 
<br>
optimal, I believe.
<br>
The cores are assigned from 0 on in incremental order. On a 2-socket, 12-core 
<br>
machine:
<br>
(0,1,2,3,4,  5[,12,13,14,15,16,17])
<br>
(6,7,8,9,10,11[,18,19,20,21,22,23])
<br>
&nbsp;&nbsp;^cores^         ^hypercores^
<br>
<p>running 2 processes with 5 threads lead to this:
<br>
<p>0 &lt;#&gt; linuxbdc07.rz.RWTH-Aachen.DE &lt;#&gt; physcpubind: 0 1 2 3 4
<br>
1 &lt;#&gt; linuxbdc07.rz.RWTH-Aachen.DE &lt;#&gt; physcpubind: 5 6 7 8 9
<br>
(not used cores: 10, 11; not used hypercores: 12-23)
<br>
That is, there is an MPI Process bound to core 0 (which is sweet-pot for may 
<br>
kernel things), and the threads of the 2nd process are spawned over both sockets.
<br>
<p>- is there a way to say to the system to spawn the processes (= slot chunks 
<br>
defined by -cpus-per-rank N) over the sockets in round-robin model?
<br>
- is there a way to say &quot;do not use this core number!&quot; in order to add some 
<br>
alignment in core numbering?
<br>
- in there a way to use the hypercores in company with the real cores?
<br>
<p>And last but not least, I found out that the starting and running the program on 
<br>
differing hardware is problematic.
<br>
<p>Trying to start 2-rank, 5-thread on 2x6 core computer from my 4-core 
<br>
workstation, I get the below error message.
<br>
<p>Seem that the calculation of core numbers / pinning determination is a part of 
<br>
*mpiexec* process instead of being run on the target node? *puzzled*
<br>
<p><p><p><p>$ mpiexec -np 1 -H linuxbdc01 -bind-to-core -cpus-per-rank 5 ompi_testpin.sh 
<br>
MPI_FastTest.exe
<br>
--------------------------------------------------------------------------
<br>
Your job has requested more cpus per process(rank) than there
<br>
are cpus in a socket:
<br>
<p>&nbsp;&nbsp;&nbsp;Cpus/rank: 5
<br>
&nbsp;&nbsp;&nbsp;#cpus/socket: 4
<br>
<p>Please correct one or both of these values and try again.
<br>
--------------------------------------------------------------------------
<br>
<p>$ ssh linuxbdc01 cat /proc/cpuinfo | grep processor | wc -l
<br>
24
<br>
<p>$ cat /proc/cpuinfo | grep processor | wc -l
<br>
4
<br>
<p><p><p>Best,
<br>
<p>Paul
<br>
<p>P.S. Using Open MPI 1.5.3, waiting for 1.5.5 :o)
<br>
<p>P.S.2. any update on this? 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2012/01/18240.php">http://www.open-mpi.org/community/lists/users/2012/01/18240.php</a>
<br>
<p>P.S.3. on the same 16-way, 128 core hardware as in P.S.2, also -cpus-per-rank 
<br>
goes crazy:
<br>
<p>$ mpiexec -mca btl_openib_warn_default_gid_prefix=0 -np 2 -H linuxbcsc21 
<br>
-bind-to-core -cpus-per-rank 5 --report-bindings  ompi_testpin.sh MPI_FastTest.exe
<br>
[linuxbcsc21.rz.RWTH-Aachen.DE:106342] [[55934,0],1] odls:default:fork binding 
<br>
child [[55934,1],0] to cpus 1000100010001
<br>
[linuxbcsc21.rz.RWTH-Aachen.DE:106342] [[55934,0],1] odls:default:fork binding 
<br>
child [[55934,1],1] to cpus 20002
<br>
0 &lt;#&gt; linuxbcsc21.rz.RWTH-Aachen.DE &lt;#&gt; physcpubind: 0 16 32 48
<br>
1 &lt;#&gt; linuxbcsc21.rz.RWTH-Aachen.DE &lt;#&gt; physcpubind: 1 17
<br>
<p><p>So, -cpus-per-rank 5, but one process get 4 cores, the other one - only two..
<br>
<p><p><p><p><span class="quotelev1">&gt; What you can do is &quot;entice&quot; it away from your processes by leaving 1-2 cores for its own use. For example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -npernode 2 -bind-to-core -cpus-per-rank 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; would run two MPI ranks on each node, each rank exclusively bound to 3 cores.
</span><br>
<span class="quotelev1">&gt; This leaves 2 cores on each node for Linux. When the scheduler sees the 6 
</span><br>
<span class="quotelev1">&gt; cores of your MPI/MP procs working hard, and 2 cores sitting idle, 
</span><br>
<span class="quotelev1">&gt; it will tend to use those 2 cores for everything else - 
</span><br>
<span class="quotelev1">&gt; and not be tempted to push you aside to gain access to &quot;your&quot; cores.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 29, 2012, at 3:08 AM, Auclair Francis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open-MPI users,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our code is currently running Open-MPI (1.5.4) with SLURM on a NUMA machine (2 sockets by nodes and 4 cores by socket) with basically two
</span><br>
<span class="quotelev2">&gt;&gt; levels of implementation for Open-MPI:
</span><br>
<span class="quotelev2">&gt;&gt; - at lower level n &quot;Master&quot; MPI-processes (one by socket) are
</span><br>
<span class="quotelev2">&gt;&gt; simultaneously runned by dividing classically the physical domain into n
</span><br>
<span class="quotelev2">&gt;&gt; sub-domains
</span><br>
<span class="quotelev2">&gt;&gt; - while at higher level 4n MPI-processes are spawn to run a sparse Poisson solver.
</span><br>
<span class="quotelev2">&gt;&gt; At each time step, the code is thus going back and forth between these two levels of implementation using two MPI communicators. This also means that during about half of the computation time, 3n cores are at best sleeping (if not 'waiting' at a barrier) when not inside &quot;Solver routines&quot;. We consequently decided to implement OpenMP functionality in our code when solver was not running (we declare one single &quot;parallel&quot; region and use the omp &quot;master&quot; command when OpenMP threads are not active). We however face several difficulties:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; a) It seems that both the 3n-MPI processes and the OpenMP threads 'consume processor cycles while waiting'. We consequently tried: mpirun
</span><br>
<span class="quotelev2">&gt;&gt; -mpi_yield_when_idle 1 , export OMP_WAIT_POLICY=passive or export
</span><br>
<span class="quotelev2">&gt;&gt; KMP_BLOCKTIME=0 ... The latest finally leads to an interesting reduction
</span><br>
<span class="quotelev2">&gt;&gt; of computing time but worsens the second problem we have to face (see
</span><br>
<span class="quotelev2">&gt;&gt; bellow).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; b) We managed to have a &quot;correct&quot; (?) implementation of our MPI-processes
</span><br>
<span class="quotelev2">&gt;&gt; on our sockets by using: mpirun -bind-to-socket -bysocket -np 4n 
</span><br>
<span class="quotelev2">&gt;&gt; However if OpenMP threads initially seem to scatter on each socket (one
</span><br>
<span class="quotelev2">&gt;&gt; thread by core) they slowly migrate to the same core as their 'Master MPI process' or gather on one or two cores by socket
</span><br>
<span class="quotelev2">&gt;&gt; We play around with the environment variable KMP_AFFINITY but the best we could obtain was a pinning of the OpenMP threads to their own core... disorganizing at the same time the implementation of the 4n Level-2 MPI processes. When added, neither the specification of a rankfile nor the mpirun option -x IPATH_NO_CPUAFFINITY=1 seem to change significantly the situation.
</span><br>
<span class="quotelev2">&gt;&gt; This comportment looks rather inefficient but so far we did not manage to prevent the migration of the 4 threads to at most a couple of cores !
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there something wrong in our &quot;Hybrid&quot; implementation?
</span><br>
<span class="quotelev2">&gt;&gt; Do you have any advices?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev2">&gt;&gt; Francis
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18669/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18670.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<li><strong>Previous message:</strong> <a href="18668.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18623.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18670.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<li><strong>Reply:</strong> <a href="18670.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
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
