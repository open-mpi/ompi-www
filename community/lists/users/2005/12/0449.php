<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 23 09:19:36 2005" -->
<!-- isoreceived="20051223141936" -->
<!-- sent="Fri, 23 Dec 2005 15:19:28 +0100 (MET)" -->
<!-- isosent="20051223141928" -->
<!-- name="Carsten Kutzner" -->
<!-- email="ckutzne_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet" -->
<!-- id="Pine.OSF.4.58.0512231407280.301464_at_gwdu70.gwdg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="862CBEFC-D244-40BF-9751-61C25963E8AD_at_cs.utk.edu" -->
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
<strong>From:</strong> Carsten Kutzner (<em>ckutzne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-23 09:19:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0450.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0448.php">Christophe Peyret: "[O-MPI users] High Virtual Memory"</a>
<li><strong>In reply to:</strong> <a href="0447.php">George Bosilca: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0450.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0450.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 20 Dec 2005, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 20, 2005, at 3:19 AM, Carsten Kutzner wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I don't see how you deduct that adding barriers increase the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; congestion ? It increase the latency for the all-to-all but for me
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I do an all-to-all a lot of times, I see that the time for a
</span><br>
<span class="quotelev2">&gt; &gt; single
</span><br>
<span class="quotelev2">&gt; &gt; all-to-all varies a lot. My time measurement:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; do 100 times
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Barrier
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Wtime
</span><br>
<span class="quotelev2">&gt; &gt;   ALLTOALL
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Barrier
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Wtime
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This way of computing the time for collective operations is not
</span><br>
<span class="quotelev1">&gt; considered as the best approach. Even for p2p communications if you
</span><br>
<span class="quotelev1">&gt; time them like that, you will find a huge standard deviation. Way too
</span><br>
<span class="quotelev1">&gt; many things are involved in any communications, and they usually have
</span><br>
<span class="quotelev1">&gt; a big effect on the duration. For collectives the effect of this
</span><br>
<span class="quotelev1">&gt; approach on standard deviation is even more drastic. A better way is
</span><br>
<span class="quotelev1">&gt; to split the loop in 2 loops:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    do 10 times
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      MPI_Barrier
</span><br>
<span class="quotelev1">&gt;      start &lt;- MPI_Wtime
</span><br>
<span class="quotelev1">&gt;      do 10 times
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt;        ALLTOALL
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      end &lt;- MPI_Wtime
</span><br>
<span class="quotelev1">&gt;      total_time = (end - start) / 10
</span><br>
<span class="quotelev1">&gt;      MPI_Barrier
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You will get results that make more sense. There is another problem
</span><br>
<p>Hi George,
<br>
<p>thanks for pointing out better ways to measure MPI performance. I get
<br>
slightly faster timings this way, clearly 10 alltoalls in a row can
<br>
execute faster than 10 barrier-separated alltoalls (even without
<br>
counting the barriers).
<br>
<p>On the other hand, this smoothing actually hides the real problem: I have
<br>
a code that, besides doing calculations, executes two all-to-alls every
<br>
time step. These alltoalls normally execute in around 0.065 seconds, but
<br>
sometimes they need around 0.25 seconds (always same data volume). Since
<br>
the whole time step is only around 0.5 seconds long (or much less on
<br>
a large number of CPUs), I do not gain anything anymore by running in
<br>
parallel, if the alltoall calls are delayed for some reason.
<br>
<p>Because of this I initially decided to measure the duration of the
<br>
alltoall by putting it between barriers and leaving away the rest of my code.
<br>
What I then get is a bi-modal distribution: one part of the time values clusters
<br>
around e.g. 0.065 seconds while the rest of the values cluster around 0.25 seconds.
<br>
If the typical alltoall executes in 0.065 seconds, why not (nearly) all?
<br>
<p>If I look at MPE logfiles of my ring-Sendrecv alltoall (see attachment,
<br>
x=time, y=processor, yellow=MPI_Barrier, green=MPI_Sendrecv,
<br>
arrows=messages), then most of the Sendrecvs are fast, while just
<br>
individual ones are delayed by 0.2 seconds (=congestion (?)). There are
<br>
more delayed Sendrecvs when there is a barrier between them.
<br>
There must be a way to eliminate these delays.
<br>
<p><span class="quotelev1">&gt; with your code. If we look on how the MPI standard define the
</span><br>
<span class="quotelev1">&gt; MPI_Barrier, we can see that the only requirement is that all nodes
</span><br>
<span class="quotelev1">&gt; belonging to the same communicator reach the barrier. It does not
</span><br>
<span class="quotelev1">&gt; means they leave the barrier in same time ! It depend on how the
</span><br>
<span class="quotelev1">&gt; barrier is implemented. If it use a linear approach (node 0 get a
</span><br>
<span class="quotelev1">&gt; message from everybody else and then send a message to everybody
</span><br>
<span class="quotelev1">&gt; else), it is clear that the node 0 has more chances to get out of the
</span><br>
<span class="quotelev1">&gt; barrier last. Therefore, when he will reach the next ALLTOALL, the
</span><br>
<span class="quotelev1">&gt; messages will be already there, as all the others nodes are on the
</span><br>
<span class="quotelev1">&gt; alltoall. Now, as he reach the alltoall later, imagine   the effect
</span><br>
<span class="quotelev1">&gt; that it will have on the communications between the others nodes. If
</span><br>
<span class="quotelev1">&gt; it late enough, then there will be congestion as all others will be
</span><br>
<span class="quotelev1">&gt; waiting for a sendrecv with the node 0.
</span><br>
<p>Yes, but in the ring-Sendrecv case with barrier just one node waits for a
<br>
send *from* node 0 and one other sends *to* node 0. Only after node0 is
<br>
itself in the barrier all the nodes may proceed to the next communication phase.
<br>
To my understanding this should never cause problems.
<br>
<p>I have also tried the tuned alltoalls and they are really great!! Only for
<br>
very few message sizes in the case of 4 CPUs on a node one of my alltoalls
<br>
performed better. Are these tuned collectives ready to be used for
<br>
production runs?
<br>
<p>&nbsp;&nbsp;Carsten
<br>
<p>
<br><hr>
<img src="http://www.open-mpi.org/community/lists/users/att-0449/mpe.jpg" alt="mpe.jpg">
<!-- attachment="mpe.jpg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0450.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0448.php">Christophe Peyret: "[O-MPI users] High Virtual Memory"</a>
<li><strong>In reply to:</strong> <a href="0447.php">George Bosilca: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0450.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0450.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
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
