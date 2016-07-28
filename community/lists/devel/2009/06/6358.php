<?
$subject_val = "Re: [OMPI devel] sm BTL flow management";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 01:59:56 2009" -->
<!-- isoreceived="20090626055956" -->
<!-- sent="Thu, 25 Jun 2009 23:00:02 -0700" -->
<!-- isosent="20090626060002" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm BTL flow management" -->
<!-- id="4A4463E2.4060909_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.1.10.0906251514480.2932_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] sm BTL flow management<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-26 02:00:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6359.php">Terry Dontje: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6357.php">Ralph Castain: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
<li><strong>In reply to:</strong> <a href="6353.php">Brian W. Barrett: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6359.php">Terry Dontje: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6359.php">Terry Dontje: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; All -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff, Eugene, and I had a long discussion this morning on the sm BTL 
</span><br>
<span class="quotelev1">&gt; flow management issues and came to a couple of conclusions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Jeff, Eugene, and I are all convinced that Eugene's addition of 
</span><br>
<span class="quotelev1">&gt; polling the receive queue to drain acks when sends start backing up is 
</span><br>
<span class="quotelev1">&gt; required for deadlock avoidance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * We're also convinced that George's proposal, while a good idea in 
</span><br>
<span class="quotelev1">&gt; general, is not sufficient.  The send path doesn't appear to 
</span><br>
<span class="quotelev1">&gt; sufficiently progress the btl to avoid the deadlocks we're seeing with 
</span><br>
<span class="quotelev1">&gt; the SM btl today.  Therefore, while I still recommend sizing the fifo 
</span><br>
<span class="quotelev1">&gt; appropriately and limiting the freelist size, I think it's not 
</span><br>
<span class="quotelev1">&gt; sufficient to solve all problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Finally, it took an hour, but we did determine one of the major 
</span><br>
<span class="quotelev1">&gt; differences between 1.2.8 and 1.3.0 in terms of sm is how messages 
</span><br>
<span class="quotelev1">&gt; were pulled off the FIFO.  In 1.2.8 (and all earlier versions), we 
</span><br>
<span class="quotelev1">&gt; return from btl_progress after a single message is received (ack or 
</span><br>
<span class="quotelev1">&gt; message) or the fifo was empty.  In 1.3.0 (pre-srq work Eugene did), 
</span><br>
<span class="quotelev1">&gt; we changed to completely draining all queues before returning from 
</span><br>
<span class="quotelev1">&gt; btl_progress.  This has led to a situation where a single call to 
</span><br>
<span class="quotelev1">&gt; btl_progress can make a large number of callbacks into the PML 
</span><br>
<span class="quotelev1">&gt; (900,000 times in one of Eugene's test case).  The change was made to 
</span><br>
<span class="quotelev1">&gt; resolve an issue Terry was having with performance of a benchmark.  
</span><br>
<span class="quotelev1">&gt; We've decided that it would be adventageous to try something between 
</span><br>
<span class="quotelev1">&gt; the two points and drain X number of messages from the queue, then 
</span><br>
<span class="quotelev1">&gt; return, where X is 100 or so at most.  This should cover the 
</span><br>
<span class="quotelev1">&gt; performance issues Terry saw, but still not cause the huge number of 
</span><br>
<span class="quotelev1">&gt; messages added to the unexpected queue with a single call to 
</span><br>
<span class="quotelev1">&gt; MPI_Recv.  Since a recv that is matched on the unexpected queue 
</span><br>
<span class="quotelev1">&gt; doesn't result in a call to opal_progress, this should help balance 
</span><br>
<span class="quotelev1">&gt; the load a little bit better.  Eugene's going to take a stab at 
</span><br>
<span class="quotelev1">&gt; implementing this short term.
</span><br>
<p>I checked with Terry and we can't really recover the history here.  
<br>
Perhaps draining ACKs is good enough.  After the first message, we can 
<br>
return.
<br>
<p>That's a one-line change.  Just comment out line 432 (&quot;goto 
<br>
recheck_peer;&quot;) in 
<br>
<a href="https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/btl/sm/btl_sm_component.c#432">https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/btl/sm/btl_sm_component.c#432</a> 
<br>
.
<br>
<p>Problem is, that doesn't &quot;fix&quot; things.  That is, my deadlock avoidance 
<br>
stuff (hg workspace on milliways that I sent out a pointer to) seems to 
<br>
be enough to, well, avoid deadlock, but unexpected-message queues are 
<br>
still growing like mad I think.  Even when sm progress returns after the 
<br>
first message fragment is received.  (X=1.)  I think it's even true if 
<br>
the max free-list size is capped at something small.  I *think* (but am 
<br>
too tired to &quot;know&quot;) that the issue is we poll the FIFO often anyhow.  
<br>
We have to for sends to reclaim fragments.  We have to for receives, to 
<br>
pull out messages of interest.  Maybe things would be better if we had 
<br>
one FIFO for in-coming fragments and another for returning fragments.  
<br>
We could poll the latter only when we needed another fragment for sending.
<br>
<p>But I'm under pressure to shift my attention to other activities.  So, I 
<br>
think I'm going to abandon this effort.  The flow control problem seems 
<br>
thorny.  I can think of fixes as fast as I can identify flow-control 
<br>
problems, but the rate of new flow-control problems just doesn't seem to 
<br>
abate.  Meanwhile, my unexpected-work queue grows unbounded.  :^)
<br>
<p><span class="quotelev1">&gt; I think the combination of Euegene's deadlock avoidance fix and the 
</span><br>
<span class="quotelev1">&gt; careful queue draining should make me comfortable enough to start 
</span><br>
<span class="quotelev1">&gt; another round of testing, but at least explains the bottom line issues.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6359.php">Terry Dontje: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6357.php">Ralph Castain: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
<li><strong>In reply to:</strong> <a href="6353.php">Brian W. Barrett: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6359.php">Terry Dontje: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6359.php">Terry Dontje: "Re: [OMPI devel] sm BTL flow management"</a>
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
