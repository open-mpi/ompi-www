<?
$subject_val = "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 13 06:15:22 2011" -->
<!-- isoreceived="20111113111522" -->
<!-- sent="Sun, 13 Nov 2011 11:15:13 +0000" -->
<!-- isosent="20111113111513" -->
<!-- name="Pedro Gonnet" -->
<!-- email="gonnet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce" -->
<!-- id="1321182913.1928.1.camel_at_laika" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce" -->
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
<strong>Subject:</strong> Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce<br>
<strong>From:</strong> Pedro Gonnet (<em>gonnet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-13 06:15:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17763.php">Jeff Squyres: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Previous message:</strong> <a href="17761.php">Radomir Szewczyk: "Re: [OMPI users] Printing information on computing nodes."</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/10/17582.php">Pedro Gonnet: "[OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17763.php">Jeff Squyres: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Reply:</strong> <a href="17763.php">Jeff Squyres: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the long delay on my behalf too.
<br>
<p>Using MPI_Init_thread with MPI_THREAD_MULTIPLE fixes this problem!
<br>
Should have had a closer look at the documentation...
<br>
<p>Cheers,
<br>
Pedro
<br>
<p><p><p><span class="quotelev1">&gt; Sorry for the delay in replying. 
</span><br>
<span class="quotelev1">&gt; I think you need to use MPI_INIT_THREAD with a level of
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE instead of MPI_INIT. This sets up internal locking
</span><br>
<span class="quotelev1">&gt; in Open MPI to protect against multiple threads inside the progress
</span><br>
<span class="quotelev1">&gt; engine, etc. 
</span><br>
<span class="quotelev1">&gt; Be aware that only some of Open MPI's transports are THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt; safe -- see the README for more detail. 
</span><br>
<span class="quotelev1">&gt; On Oct 23, 2011, at 1:11 PM, Pedro Gonnet wrote: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi again, 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As promised, I implemented a small program reproducing the error. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The program's main routine spawns a pthread which calls the
</span><br>
<span class="quotelev1">&gt; function 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;exchange&quot;. &quot;exchange&quot; uses MPI_Isend/MPI_Irecv/MPI_Waitany to
</span><br>
<span class="quotelev1">&gt; exchange 
</span><br>
<span class="quotelev2">&gt; &gt; a buffer of double-precision numbers with all other nodes. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; At the same time, the &quot;main&quot; routine exchanges the sum of all the 
</span><br>
<span class="quotelev2">&gt; &gt; buffers using MPI_Allreduce. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; To compile and run the program, do the following: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpicc -g -Wall mpitest.c -pthread 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 8 ./a.out 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Timing is, of course, of the essence and you may have to run the
</span><br>
<span class="quotelev1">&gt; program 
</span><br>
<span class="quotelev2">&gt; &gt; a few times or twiddle with the value of &quot;usleep&quot; in line 146 for it
</span><br>
<span class="quotelev1">&gt; to 
</span><br>
<span class="quotelev2">&gt; &gt; hang. To see where things go bad, you can do the following 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 8 xterm -e gdb -ex run ./a.out 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Things go bad when MPI_Allreduce is called while any of the threads
</span><br>
<span class="quotelev1">&gt; are 
</span><br>
<span class="quotelev2">&gt; &gt; in MPI_Waitany. The value of &quot;usleep&quot; in line 146 should be long
</span><br>
<span class="quotelev1">&gt; enough 
</span><br>
<span class="quotelev2">&gt; &gt; for all the nodes to have started exchanging data but small enough
</span><br>
<span class="quotelev1">&gt; so 
</span><br>
<span class="quotelev2">&gt; &gt; that they are not done yet. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Cheers, 
</span><br>
<span class="quotelev2">&gt; &gt; Pedro 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, 2011-10-20 at 11:25 +0100, Pedro Gonnet wrote: 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Short update: 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I just installed version 1.4.4 from source (compiled with 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --enable-mpi-threads), and the problem persists. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I should also point out that if, in thread (ii), I wait for the 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nonblocking communication in thread (i) to finish, nothing bad
</span><br>
<span class="quotelev1">&gt; happens. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But this makes the nonblocking communication somewhat pointless. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cheers, 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Pedro 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Thu, 2011-10-20 at 10:42 +0100, Pedro Gonnet wrote: 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi all, 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I am currently working on a multi-threaded hybrid parallel
</span><br>
<span class="quotelev1">&gt; simulation 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; which uses both pthreads and OpenMPI. The simulation uses several 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; pthreads per MPI node. 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; My code uses the nonblocking routines
</span><br>
<span class="quotelev1">&gt; MPI_Isend/MPI_Irecv/MPI_Waitany 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; quite successfully to implement the node-to-node communication.
</span><br>
<span class="quotelev1">&gt; When I 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; try to interleave other computations during this communication,
</span><br>
<span class="quotelev1">&gt; however, 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; bad things happen. 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have two MPI nodes with two threads each: one thread (i) doing
</span><br>
<span class="quotelev1">&gt; the 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; nonblocking communication and the other (ii) doing other
</span><br>
<span class="quotelev1">&gt; computations. 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; At some point, the threads (ii) need to exchange data using 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_Allreduce, which fails if the first thread (i) has not
</span><br>
<span class="quotelev1">&gt; completed all 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the communication, i.e. if thread (i) is still in MPI_Waitany. 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Using the in-place MPI_Allreduce, I get a re-run of this bug: 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2011/09/17432.php">http://www.open-mpi.org/community/lists/users/2011/09/17432.php</a>.
</span><br>
<span class="quotelev1">&gt; If I 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; don't use in-place, the call to MPI_Waitany (thread ii) on one of
</span><br>
<span class="quotelev1">&gt; the 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI nodes waits forever. 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; My guess is that when the thread (ii) calls MPI_Allreduce, it
</span><br>
<span class="quotelev1">&gt; gets 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; whatever the other node sent with MPI_Isend to thread (i), drops 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; whatever it should have been getting from the other node's 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_Allreduce, and the call to MPI_Waitall hangs. 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Is this a known issue? Is MPI_Allreduce not designed to work
</span><br>
<span class="quotelev1">&gt; alongside 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the nonblocking routines? Is there a &quot;safe&quot; variant of
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce I 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; should be using instead? 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I am using OpenMPI version 1.4.3 (version 1.4.3-1ubuntu3 of the
</span><br>
<span class="quotelev1">&gt; package 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; openmpi-bin in Ubuntu). Both MPI nodes are run on the same
</span><br>
<span class="quotelev1">&gt; dual-core 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; computer (Lenovo x201 laptop). 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If you need more information, please do let me know! I'll also try
</span><br>
<span class="quotelev1">&gt; to 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cook-up a small program reproducing this problem... 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Cheers and kind regards, 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Pedro 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mpitest.c&gt;_______________________________________________ 
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list 
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17763.php">Jeff Squyres: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Previous message:</strong> <a href="17761.php">Radomir Szewczyk: "Re: [OMPI users] Printing information on computing nodes."</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/10/17582.php">Pedro Gonnet: "[OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17763.php">Jeff Squyres: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Reply:</strong> <a href="17763.php">Jeff Squyres: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
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
