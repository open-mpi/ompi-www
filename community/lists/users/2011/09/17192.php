<?
$subject_val = "Re: [OMPI users] Problem with MPI_BARRIER";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  8 10:16:16 2011" -->
<!-- isoreceived="20110908141616" -->
<!-- sent="Thu, 8 Sep 2011 10:16:10 -0400" -->
<!-- isosent="20110908141610" -->
<!-- name="Teng Ma" -->
<!-- email="tma_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_BARRIER" -->
<!-- id="2569483f3a4bfb1135d99bdc25911e06.squirrel_at_webmail.eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5878AB43-3DB5-4893-8F97-358EADC9E5CC_at_coria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_BARRIER<br>
<strong>From:</strong> Teng Ma (<em>tma_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-08 10:16:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17193.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="17191.php">Rolf Riesen: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="17187.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17193.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="17193.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess you forget to count the &quot;leaving time&quot;(fan-out).  When everyone
<br>
hits the barrier, it still needs &quot;ack&quot; to leave.  And remember in most
<br>
cases, leader process will send out &quot;acks&quot; in a sequence way.  It's very
<br>
possible:
<br>
<p>P0 barrier time = 29 + send/recv ack 0
<br>
P1 barrier time = 14 + send ack 0  + send/recv ack 1
<br>
P2 barrier time = 0 + send ack 0 + send ack 1 + send/recv ack 2
<br>
<p>That's your measure time.
<br>
<p>Teng
<br>
<span class="quotelev1">&gt; This problem as nothing to do with stdout...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Example with 3 processes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P0 hits barrier at t=12
</span><br>
<span class="quotelev1">&gt; P1 hits barrier at t=27
</span><br>
<span class="quotelev1">&gt; P2 hits barrier at t=41
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this situation:
</span><br>
<span class="quotelev1">&gt; P0 waits 41-12 = 29
</span><br>
<span class="quotelev1">&gt; P1 waits 41-27 = 14
</span><br>
<span class="quotelev1">&gt; P2 waits 41-41 = 00
</span><br>
<p><p><p><span class="quotelev1">&gt; So I should see something  like (no ordering is expected):
</span><br>
<span class="quotelev1">&gt; barrier_time = 14
</span><br>
<span class="quotelev1">&gt; barrier_time = 00
</span><br>
<span class="quotelev1">&gt; barrier_time = 29
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But what I see is much more like
</span><br>
<span class="quotelev1">&gt; barrier_time = 22
</span><br>
<span class="quotelev1">&gt; barrier_time = 29
</span><br>
<span class="quotelev1">&gt; barrier_time = 25
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See? No process has a barrier_time equal to zero !!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 8 sept. 2011 &#224; 14:55, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The order in which you see stdout printed from mpirun is not necessarily
</span><br>
<span class="quotelev2">&gt;&gt; reflective of what order things were actually printers.  Remember that
</span><br>
<span class="quotelev2">&gt;&gt; the stdout from each MPI process needs to flow through at least 3
</span><br>
<span class="quotelev2">&gt;&gt; processes and potentially across the network before it is actually
</span><br>
<span class="quotelev2">&gt;&gt; displayed on mpirun's stdout.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI process -&gt; local Open MPI daemon -&gt; mpirun -&gt; printed to mpirun's
</span><br>
<span class="quotelev2">&gt;&gt; stdout
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hence, the ordering of stdout can get transposed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 8, 2011, at 8:49 AM, Ghislain Lartigue wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you for this explanation but indeed this confirms that the LAST
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process that hits the barrier should go through nearly instantaneously
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (except for the broadcast time for the acknowledgment signal).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And this is not what happens in my code : EVERY process waits for a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; very long time before going through the barrier (thousands of times
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more than a broadcast)...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 8 sept. 2011 &#224; 14:26, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Order in which processes hit the barrier is only one factor in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; time it takes for that process to finish the barrier.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; An easy way to think of a barrier implementation is a &quot;fan in/fan out&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; model.  When each nonzero rank process calls MPI_BARRIER, it sends a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message saying &quot;I have hit the barrier!&quot; (it usually sends it to its
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parent in a tree of all MPI processes in the communicator, but you can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; simplify this model and consider that it sends it to rank 0).  Rank 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collects all of these messages.  When it has messages from all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes in the communicator, it sends out &quot;ok, you can leave the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; barrier now&quot; messages (again, it's usually via a tree distribution,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but you can pretend that it directly, linearly sends a message to each
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; peer process in the communicator).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hence, the time that any individual process spends in the communicator
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is relative to when every other process enters the communicator.  But
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it's also dependent upon communication speed, congestion in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; network, etc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 8, 2011, at 6:20 AM, Ghislain Lartigue wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; at a given point in my (Fortran90) program, I write:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ===================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; start_time = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; call MPI_BARRIER(...)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; new_time = MPI_Wtime() - start_time
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; write(*,*) &quot;barrier time =&quot;,new_time
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ==================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and then I run my code...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I expected that the values of &quot;new_time&quot; would range from 0 to Tmax
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (1700 in my case)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As I understand it, the first process that hits the barrier should
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; print Tmax and the last process that hits the barrier should print 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (or a very low value).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But this is not the case: all processes print values in the range
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1400-1700!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any explanation?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ghislain.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PS:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This small code behaves perfectly in other parts of my code...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
<p><p>| Teng Ma          Univ. of Tennessee |
<br>
| tma_at_[hidden]        Knoxville, TN |
<br>
| <a href="http://web.eecs.utk.edu/~tma/">http://web.eecs.utk.edu/~tma/</a>       |
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17193.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="17191.php">Rolf Riesen: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="17187.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17193.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="17193.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
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
