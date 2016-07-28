<?
$subject_val = "[OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 26 07:20:01 2011" -->
<!-- isoreceived="20111026112001" -->
<!-- sent="Wed, 26 Oct 2011 12:19:56 +0100" -->
<!-- isosent="20111026111956" -->
<!-- name="Pedro Gonnet" -->
<!-- email="gonnet_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce" -->
<!-- id="1319627996.1674.70.camel_at_laika" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce<br>
<strong>From:</strong> Pedro Gonnet (<em>gonnet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-26 07:19:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9876.php">George Bosilca: "Re: [OMPI devel] Problem-Bug with MPI_Intercomm_create()"</a>
<li><strong>Previous message:</strong> <a href="9874.php">Ralph Castain: "Re: [OMPI devel] Problem-Bug with MPI_Intercomm_create()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9895.php">Jeff Squyres: "Re: [OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9895.php">Jeff Squyres: "Re: [OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10166.php">Pedro Gonnet: "Re: [OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10199.php">Pedro Gonnet: "Re: [OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm forwarding this message from the &quot;users&quot; mailing list as it wasn't
<br>
getting any attention there and I believe this is a bona-fide bug.
<br>
<p>The issue is that if an MPI node has two threads, one exchanging data
<br>
with other nodes through the non-blocking routines, the other exchanging
<br>
data with MPI_Allreduce, the system hangs.
<br>
<p>The attached example program reproduces this bug. It can be compiled and
<br>
run using the following:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicc -g -Wall mpitest.c -pthread
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 8 xterm -e gdb -ex run ./a.out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
Note that you may need to fiddle with the delay in line 146 to reproduce
<br>
the problem.
<br>
<p>Many thanks,
<br>
Pedro
<br>
<p><p><p>-------- Forwarded Message --------
<br>
From: Pedro Gonnet &lt;gonnet_at_[hidden]&gt;
<br>
To: users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and
<br>
MPI_Allreduce
<br>
Date: Sun, 23 Oct 2011 18:11:50 +0100
<br>
<p>Hi again,
<br>
<p>As promised, I implemented a small program reproducing the error.
<br>
<p>The program's main routine spawns a pthread which calls the function
<br>
&quot;exchange&quot;. &quot;exchange&quot; uses MPI_Isend/MPI_Irecv/MPI_Waitany to exchange
<br>
a buffer of double-precision numbers with all other nodes.
<br>
<p>At the same time, the &quot;main&quot; routine exchanges the sum of all the
<br>
buffers using MPI_Allreduce.
<br>
<p>To compile and run the program, do the following:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicc -g -Wall mpitest.c -pthread
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 8 ./a.out
<br>
<p>Timing is, of course, of the essence and you may have to run the program
<br>
a few times or twiddle with the value of &quot;usleep&quot; in line 146 for it to
<br>
hang. To see where things go bad, you can do the following
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 8 xterm -e gdb -ex run ./a.out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
Things go bad when MPI_Allreduce is called while any of the threads are
<br>
in MPI_Waitany. The value of &quot;usleep&quot; in line 146 should be long enough
<br>
for all the nodes to have started exchanging data but small enough so
<br>
that they are not done yet.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
Cheers,
<br>
Pedro
<br>
<p><p><p>On Thu, 2011-10-20 at 11:25 +0100, Pedro Gonnet wrote:
<br>
<span class="quotelev1">&gt; Short update:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just installed version 1.4.4 from source (compiled with
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads), and the problem persists.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I should also point out that if, in thread (ii), I wait for the
</span><br>
<span class="quotelev1">&gt; nonblocking communication in thread (i) to finish, nothing bad happens.
</span><br>
<span class="quotelev1">&gt; But this makes the nonblocking communication somewhat pointless.
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
<span class="quotelev1">&gt; On Thu, 2011-10-20 at 10:42 +0100, Pedro Gonnet wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am currently working on a multi-threaded hybrid parallel simulation
</span><br>
<span class="quotelev2">&gt; &gt; which uses both pthreads and OpenMPI. The simulation uses several
</span><br>
<span class="quotelev2">&gt; &gt; pthreads per MPI node.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My code uses the nonblocking routines MPI_Isend/MPI_Irecv/MPI_Waitany
</span><br>
<span class="quotelev2">&gt; &gt; quite successfully to implement the node-to-node communication. When I
</span><br>
<span class="quotelev2">&gt; &gt; try to interleave other computations during this communication, however,
</span><br>
<span class="quotelev2">&gt; &gt; bad things happen.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have two MPI nodes with two threads each: one thread (i) doing the
</span><br>
<span class="quotelev2">&gt; &gt; nonblocking communication and the other (ii) doing other computations.
</span><br>
<span class="quotelev2">&gt; &gt; At some point, the threads (ii) need to exchange data using
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Allreduce, which fails if the first thread (i) has not completed all
</span><br>
<span class="quotelev2">&gt; &gt; the communication, i.e. if thread (i) is still in MPI_Waitany.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Using the in-place MPI_Allreduce, I get a re-run of this bug:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2011/09/17432.php">http://www.open-mpi.org/community/lists/users/2011/09/17432.php</a>. If I
</span><br>
<span class="quotelev2">&gt; &gt; don't use in-place, the call to MPI_Waitany (thread ii) on one of the
</span><br>
<span class="quotelev2">&gt; &gt; MPI nodes waits forever. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My guess is that when the thread (ii) calls MPI_Allreduce, it gets
</span><br>
<span class="quotelev2">&gt; &gt; whatever the other node sent with MPI_Isend to thread (i), drops
</span><br>
<span class="quotelev2">&gt; &gt; whatever it should have been getting from the other node's
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Allreduce, and the call to MPI_Waitall hangs.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is this a known issue? Is MPI_Allreduce not designed to work alongside
</span><br>
<span class="quotelev2">&gt; &gt; the nonblocking routines? Is there a &quot;safe&quot; variant of MPI_Allreduce I
</span><br>
<span class="quotelev2">&gt; &gt; should be using instead?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am using OpenMPI version 1.4.3 (version 1.4.3-1ubuntu3 of the package
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-bin in Ubuntu). Both MPI nodes are run on the same dual-core
</span><br>
<span class="quotelev2">&gt; &gt; computer (Lenovo x201 laptop).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If you need more information, please do let me know! I'll also try to
</span><br>
<span class="quotelev2">&gt; &gt; cook-up a small program reproducing this problem...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Cheers and kind regards,
</span><br>
<span class="quotelev2">&gt; &gt; Pedro
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p>
<br><p>
<p><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9875/mpitest.c">mpitest.c</a>
</ul>
<!-- attachment="mpitest.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9876.php">George Bosilca: "Re: [OMPI devel] Problem-Bug with MPI_Intercomm_create()"</a>
<li><strong>Previous message:</strong> <a href="9874.php">Ralph Castain: "Re: [OMPI devel] Problem-Bug with MPI_Intercomm_create()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9895.php">Jeff Squyres: "Re: [OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9895.php">Jeff Squyres: "Re: [OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10166.php">Pedro Gonnet: "Re: [OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10199.php">Pedro Gonnet: "Re: [OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
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
