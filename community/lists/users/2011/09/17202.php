<?
$subject_val = "Re: [OMPI users] Problem with MPI_BARRIER";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  8 11:35:39 2011" -->
<!-- isoreceived="20110908153539" -->
<!-- sent="Thu, 8 Sep 2011 11:35:34 -0400" -->
<!-- isosent="20110908153534" -->
<!-- name="Teng Ma" -->
<!-- email="tma_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_BARRIER" -->
<!-- id="cf51581a61adba1126fa65bf07c68cd2.squirrel_at_webmail.eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="81d84af923866565493acfa07faf48d7.squirrel_at_webmail.eecs.utk.edu" -->
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
<strong>Date:</strong> 2011-09-08 11:35:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17203.php">Eugene Loh: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="17201.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="17200.php">Teng Ma: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If barrier/time/barrier/time solves your problem in each measure, that
<br>
means your computation above/below your barrier is not too &quot;synchronized&quot;.
<br>
Their overhead is diverse for each process.  on 2nd/3rd/... round, the
<br>
time to enter barrier is too diverse, maybe range from [1, 1400]. This
<br>
Barrier becomes a huge overhead in your code.
<br>
<p>Teng
<br>
<p><span class="quotelev1">&gt; do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; barrier/time/barrier/time
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and run your code again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Teng
</span><br>
<span class="quotelev2">&gt;&gt; I will check that, but as I said in first email, this strange behaviour
</span><br>
<span class="quotelev2">&gt;&gt; happens only in one place in my code.
</span><br>
<span class="quotelev2">&gt;&gt; I have the same time/barrier/time procedure in other places (in the same
</span><br>
<span class="quotelev2">&gt;&gt; code) and it works perfectly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At one place I have the following output (sorted)
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA1 LOOP 1 barrier       1.0
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA1 LOOP 1 barrier       1.0
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA1 LOOP 1 barrier      14.2
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA1 LOOP 1 barrier      16.3
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA1 LOOP 1 barrier      25.1
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA1 LOOP 1 barrier      28.4
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA1 LOOP 1 barrier      32.6
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA1 LOOP 1 barrier      35.3
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA1 LOOP 1 barrier      90.1
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA1 LOOP 1 barrier      96.3
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA1 LOOP 1 barrier      99.5
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA1 LOOP 1 barrier     101.2
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA1 LOOP 1 barrier     119.3
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA1 LOOP 1 barrier     169.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but in the place that concerns me I have (sorted)
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA2 LOOP 2 barrier    1386.9
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA2 LOOP 2 barrier    1401.5
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA2 LOOP 2 barrier    1412.9
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA2 LOOP 2 barrier    1414.1
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA2 LOOP 2 barrier    1419.6
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA2 LOOP 2 barrier    1428.1
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA2 LOOP 2 barrier    1430.4
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA2 LOOP 2 barrier    1632.7
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA2 LOOP 2 barrier    1635.7
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA2 LOOP 2 barrier    1660.6
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA2 LOOP 2 barrier    1685.1
</span><br>
<span class="quotelev2">&gt;&gt; &lt;00&gt;(0) CAST GHOST DATA2 LOOP 2 barrier    1699.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These are the same units...
</span><br>
<span class="quotelev2">&gt;&gt; You see that in the first place, the &quot;time&quot; to &quot;hit/wait/leave&quot; can be
</span><br>
<span class="quotelev2">&gt;&gt; very small compared to the last output...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 8 sept. 2011 &#224; 16:35, Teng Ma a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You'd better check process-core binding in your case.  It looks to me
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and P1 on the same node and P2 on another node, which makes ack to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P0/P1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; go through share memory and ack to P2 through networking.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1000x is very possible. sm latency can be about 0.03microsec. ethernet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; latency is about 20-30 microsec.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just my guess......
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Teng
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I understand this but the delays that I measure are huge compared to a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; classical ack procedure... (1000x more)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And this is repeatable: as far as I understand it, this shows that the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; network is not involved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ghislain.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 8 sept. 2011 &#224; 16:16, Teng Ma a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I guess you forget to count the &quot;leaving time&quot;(fan-out).  When
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; everyone
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hits the barrier, it still needs &quot;ack&quot; to leave.  And remember in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; most
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cases, leader process will send out &quot;acks&quot; in a sequence way.  It's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; very
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; possible:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; P0 barrier time = 29 + send/recv ack 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; P1 barrier time = 14 + send ack 0  + send/recv ack 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; P2 barrier time = 0 + send ack 0 + send ack 1 + send/recv ack 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That's your measure time.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Teng
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This problem as nothing to do with stdout...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Example with 3 processes:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; P0 hits barrier at t=12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; P1 hits barrier at t=27
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; P2 hits barrier at t=41
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; In this situation:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; P0 waits 41-12 = 29
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; P1 waits 41-27 = 14
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; P2 waits 41-41 = 00
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So I should see something  like (no ordering is expected):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; barrier_time = 14
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; barrier_time = 00
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; barrier_time = 29
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; But what I see is much more like
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; barrier_time = 22
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; barrier_time = 29
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; barrier_time = 25
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; See? No process has a barrier_time equal to zero !!!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Le 8 sept. 2011 &#224; 14:55, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The order in which you see stdout printed from mpirun is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; necessarily
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; reflective of what order things were actually printers.  Remember
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the stdout from each MPI process needs to flow through at least 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; processes and potentially across the network before it is actually
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; displayed on mpirun's stdout.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI process -&gt; local Open MPI daemon -&gt; mpirun -&gt; printed to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; stdout
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hence, the ordering of stdout can get transposed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 8, 2011, at 8:49 AM, Ghislain Lartigue wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you for this explanation but indeed this confirms that the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; LAST
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; process that hits the barrier should go through nearly
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; instantaneously
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (except for the broadcast time for the acknowledgment signal).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; And this is not what happens in my code : EVERY process waits for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; very long time before going through the barrier (thousands of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; times
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; more than a broadcast)...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Le 8 sept. 2011 &#224; 14:26, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Order in which processes hit the barrier is only one factor in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; time it takes for that process to finish the barrier.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; An easy way to think of a barrier implementation is a &quot;fan in/fan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; out&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; model.  When each nonzero rank process calls MPI_BARRIER, it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sends
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; message saying &quot;I have hit the barrier!&quot; (it usually sends it to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; its
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; parent in a tree of all MPI processes in the communicator, but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; simplify this model and consider that it sends it to rank 0).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Rank
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; collects all of these messages.  When it has messages from all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; processes in the communicator, it sends out &quot;ok, you can leave
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; barrier now&quot; messages (again, it's usually via a tree
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; distribution,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; but you can pretend that it directly, linearly sends a message to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; each
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; peer process in the communicator).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hence, the time that any individual process spends in the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; communicator
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; is relative to when every other process enters the communicator.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; But
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; it's also dependent upon communication speed, congestion in the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; network, etc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 8, 2011, at 6:20 AM, Ghislain Lartigue wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at a given point in my (Fortran90) program, I write:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ===================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; start_time = MPI_Wtime()
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; call MPI_BARRIER(...)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; new_time = MPI_Wtime() - start_time
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; write(*,*) &quot;barrier time =&quot;,new_time
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and then I run my code...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I expected that the values of &quot;new_time&quot; would range from 0 to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tmax
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (1700 in my case)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; As I understand it, the first process that hits the barrier
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; should
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; print Tmax and the last process that hits the barrier should
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; print
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (or a very low value).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; But this is not the case: all processes print values in the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; range
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1400-1700!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any explanation?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ghislain.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PS:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This small code behaves perfectly in other parts of my code...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; | Teng Ma          Univ. of Tennessee |
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; | tma_at_[hidden]        Knoxville, TN |
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; | <a href="http://web.eecs.utk.edu/~tma/">http://web.eecs.utk.edu/~tma/</a>       |
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; | Teng Ma          Univ. of Tennessee |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | tma_at_[hidden]        Knoxville, TN |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | <a href="http://web.eecs.utk.edu/~tma/">http://web.eecs.utk.edu/~tma/</a>       |
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17203.php">Eugene Loh: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="17201.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="17200.php">Teng Ma: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
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
