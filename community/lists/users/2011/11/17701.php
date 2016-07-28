<?
$subject_val = "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  4 08:45:18 2011" -->
<!-- isoreceived="20111104124518" -->
<!-- sent="Fri, 4 Nov 2011 08:45:13 -0400" -->
<!-- isosent="20111104124513" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce" -->
<!-- id="23ED754E-7423-4F60-8950-53D138A20E17_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1319389910.1674.38.camel_at_laika" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-04 08:45:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17702.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17700.php">Jeff Squyres: "Re: [OMPI users] Technical details of various MPI APIs"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/10/17592.php">Pedro Gonnet: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17762.php">Pedro Gonnet: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying.
<br>
<p>I think you need to use MPI_INIT_THREAD with a level of MPI_THREAD_MULTIPLE instead of MPI_INIT.  This sets up internal locking in Open MPI to protect against multiple threads inside the progress engine, etc.
<br>
<p>Be aware that only some of Open MPI's transports are THREAD_MULTIPLE safe -- see the README for more detail.
<br>
<p><p>On Oct 23, 2011, at 1:11 PM, Pedro Gonnet wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As promised, I implemented a small program reproducing the error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program's main routine spawns a pthread which calls the function
</span><br>
<span class="quotelev1">&gt; &quot;exchange&quot;. &quot;exchange&quot; uses MPI_Isend/MPI_Irecv/MPI_Waitany to exchange
</span><br>
<span class="quotelev1">&gt; a buffer of double-precision numbers with all other nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At the same time, the &quot;main&quot; routine exchanges the sum of all the
</span><br>
<span class="quotelev1">&gt; buffers using MPI_Allreduce.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To compile and run the program, do the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        mpicc -g -Wall mpitest.c -pthread
</span><br>
<span class="quotelev1">&gt;        mpirun -np 8 ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Timing is, of course, of the essence and you may have to run the program
</span><br>
<span class="quotelev1">&gt; a few times or twiddle with the value of &quot;usleep&quot; in line 146 for it to
</span><br>
<span class="quotelev1">&gt; hang. To see where things go bad, you can do the following
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        mpirun -np 8 xterm -e gdb -ex run ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Things go bad when MPI_Allreduce is called while any of the threads are
</span><br>
<span class="quotelev1">&gt; in MPI_Waitany. The value of &quot;usleep&quot; in line 146 should be long enough
</span><br>
<span class="quotelev1">&gt; for all the nodes to have started exchanging data but small enough so
</span><br>
<span class="quotelev1">&gt; that they are not done yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Pedro
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, 2011-10-20 at 11:25 +0100, Pedro Gonnet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Short update:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just installed version 1.4.4 from source (compiled with
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-threads), and the problem persists.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I should also point out that if, in thread (ii), I wait for the
</span><br>
<span class="quotelev2">&gt;&gt; nonblocking communication in thread (i) to finish, nothing bad happens.
</span><br>
<span class="quotelev2">&gt;&gt; But this makes the nonblocking communication somewhat pointless.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Pedro
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 2011-10-20 at 10:42 +0100, Pedro Gonnet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am currently working on a multi-threaded hybrid parallel simulation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which uses both pthreads and OpenMPI. The simulation uses several
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pthreads per MPI node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My code uses the nonblocking routines MPI_Isend/MPI_Irecv/MPI_Waitany
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quite successfully to implement the node-to-node communication. When I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; try to interleave other computations during this communication, however,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bad things happen.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have two MPI nodes with two threads each: one thread (i) doing the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nonblocking communication and the other (ii) doing other computations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At some point, the threads (ii) need to exchange data using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Allreduce, which fails if the first thread (i) has not completed all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the communication, i.e. if thread (i) is still in MPI_Waitany.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using the in-place MPI_Allreduce, I get a re-run of this bug:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2011/09/17432.php">http://www.open-mpi.org/community/lists/users/2011/09/17432.php</a>. If I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't use in-place, the call to MPI_Waitany (thread ii) on one of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI nodes waits forever. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My guess is that when the thread (ii) calls MPI_Allreduce, it gets
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whatever the other node sent with MPI_Isend to thread (i), drops
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whatever it should have been getting from the other node's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Allreduce, and the call to MPI_Waitall hangs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this a known issue? Is MPI_Allreduce not designed to work alongside
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the nonblocking routines? Is there a &quot;safe&quot; variant of MPI_Allreduce I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should be using instead?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using OpenMPI version 1.4.3 (version 1.4.3-1ubuntu3 of the package
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-bin in Ubuntu). Both MPI nodes are run on the same dual-core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; computer (Lenovo x201 laptop).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you need more information, please do let me know! I'll also try to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cook-up a small program reproducing this problem...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers and kind regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pedro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;mpitest.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17702.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17700.php">Jeff Squyres: "Re: [OMPI users] Technical details of various MPI APIs"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/10/17592.php">Pedro Gonnet: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17762.php">Pedro Gonnet: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
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
