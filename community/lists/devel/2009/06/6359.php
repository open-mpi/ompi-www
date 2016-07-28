<?
$subject_val = "Re: [OMPI devel] sm BTL flow management";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 06:53:19 2009" -->
<!-- isoreceived="20090626105319" -->
<!-- sent="Fri, 26 Jun 2009 06:52:22 -0400" -->
<!-- isosent="20090626105222" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm BTL flow management" -->
<!-- id="4A44A866.7050307_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A4463E2.4060909_at_sun.com" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-26 06:52:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6360.php">George Bosilca: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6358.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>In reply to:</strong> <a href="6358.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6360.php">George Bosilca: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6360.php">George Bosilca: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff, Eugene, and I had a long discussion this morning on the sm BTL 
</span><br>
<span class="quotelev2">&gt;&gt; flow management issues and came to a couple of conclusions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Jeff, Eugene, and I are all convinced that Eugene's addition of 
</span><br>
<span class="quotelev2">&gt;&gt; polling the receive queue to drain acks when sends start backing up 
</span><br>
<span class="quotelev2">&gt;&gt; is required for deadlock avoidance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * We're also convinced that George's proposal, while a good idea in 
</span><br>
<span class="quotelev2">&gt;&gt; general, is not sufficient.  The send path doesn't appear to 
</span><br>
<span class="quotelev2">&gt;&gt; sufficiently progress the btl to avoid the deadlocks we're seeing 
</span><br>
<span class="quotelev2">&gt;&gt; with the SM btl today.  Therefore, while I still recommend sizing the 
</span><br>
<span class="quotelev2">&gt;&gt; fifo appropriately and limiting the freelist size, I think it's not 
</span><br>
<span class="quotelev2">&gt;&gt; sufficient to solve all problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Finally, it took an hour, but we did determine one of the major 
</span><br>
<span class="quotelev2">&gt;&gt; differences between 1.2.8 and 1.3.0 in terms of sm is how messages 
</span><br>
<span class="quotelev2">&gt;&gt; were pulled off the FIFO.  In 1.2.8 (and all earlier versions), we 
</span><br>
<span class="quotelev2">&gt;&gt; return from btl_progress after a single message is received (ack or 
</span><br>
<span class="quotelev2">&gt;&gt; message) or the fifo was empty.  In 1.3.0 (pre-srq work Eugene did), 
</span><br>
<span class="quotelev2">&gt;&gt; we changed to completely draining all queues before returning from 
</span><br>
<span class="quotelev2">&gt;&gt; btl_progress.  This has led to a situation where a single call to 
</span><br>
<span class="quotelev2">&gt;&gt; btl_progress can make a large number of callbacks into the PML 
</span><br>
<span class="quotelev2">&gt;&gt; (900,000 times in one of Eugene's test case).  The change was made to 
</span><br>
<span class="quotelev2">&gt;&gt; resolve an issue Terry was having with performance of a benchmark.  
</span><br>
<span class="quotelev2">&gt;&gt; We've decided that it would be adventageous to try something between 
</span><br>
<span class="quotelev2">&gt;&gt; the two points and drain X number of messages from the queue, then 
</span><br>
<span class="quotelev2">&gt;&gt; return, where X is 100 or so at most.  This should cover the 
</span><br>
<span class="quotelev2">&gt;&gt; performance issues Terry saw, but still not cause the huge number of 
</span><br>
<span class="quotelev2">&gt;&gt; messages added to the unexpected queue with a single call to 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Recv.  Since a recv that is matched on the unexpected queue 
</span><br>
<span class="quotelev2">&gt;&gt; doesn't result in a call to opal_progress, this should help balance 
</span><br>
<span class="quotelev2">&gt;&gt; the load a little bit better.  Eugene's going to take a stab at 
</span><br>
<span class="quotelev2">&gt;&gt; implementing this short term.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked with Terry and we can't really recover the history here.  
</span><br>
<span class="quotelev1">&gt; Perhaps draining ACKs is good enough.  After the first message, we can 
</span><br>
<span class="quotelev1">&gt; return.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Ok recovering history here, not sure it matters though.  First the 
<br>
performance issue George and I discussed and fixed is documented in 
<br>
thread <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4158.php">http://www.open-mpi.org/community/lists/devel/2008/06/4158.php</a>
<br>
As was mentioned this was only to retrieve ack packets and should not 
<br>
have any bearing on expanding the unexpected queue.   The original 
<br>
change was r18724 and did not add line 432 mentioned below.
<br>
<span class="quotelev1">&gt; That's a one-line change.  Just comment out line 432 (&quot;goto 
</span><br>
<span class="quotelev1">&gt; recheck_peer;&quot;) in 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/btl/sm/btl_sm_component.c#432">https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/btl/sm/btl_sm_component.c#432</a> 
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt;
</span><br>
Line 432 was introduced by r19309 to fix ticket #1378.  However 
<br>
something is more at hand because since Eugene's experiement show's 
<br>
removing this line doesn't help reduce the amount of unexpecteds. 
<br>
<span class="quotelev1">&gt; Problem is, that doesn't &quot;fix&quot; things.  That is, my deadlock avoidance 
</span><br>
<span class="quotelev1">&gt; stuff (hg workspace on milliways that I sent out a pointer to) seems 
</span><br>
<span class="quotelev1">&gt; to be enough to, well, avoid deadlock, but unexpected-message queues 
</span><br>
<span class="quotelev1">&gt; are still growing like mad I think.  Even when sm progress returns 
</span><br>
<span class="quotelev1">&gt; after the first message fragment is received.  (X=1.)  I think it's 
</span><br>
<span class="quotelev1">&gt; even true if the max free-list size is capped at something small.  I 
</span><br>
<span class="quotelev1">&gt; *think* (but am too tired to &quot;know&quot;) that the issue is we poll the 
</span><br>
<span class="quotelev1">&gt; FIFO often anyhow.  We have to for sends to reclaim fragments.  We 
</span><br>
<span class="quotelev1">&gt; have to for receives, to pull out messages of interest.  Maybe things 
</span><br>
<span class="quotelev1">&gt; would be better if we had one FIFO for in-coming fragments and another 
</span><br>
<span class="quotelev1">&gt; for returning fragments.  We could poll the latter only when we needed 
</span><br>
<span class="quotelev1">&gt; another fragment for sending.
</span><br>
<span class="quotelev1">&gt;
</span><br>
So is the issue that Eugene describing is that one rank is flooding the 
<br>
other with so many messages that the flooded victim cannot see the 
<br>
FRAG_ACKs without draining the real (flooding) messages from the FIFO first?
<br>
<p>This seems like either having a separate  FIFOs, as Eugene describes 
<br>
above, or instituting some type of flow control (number of inflight 
<br>
messages allowed) might help.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; But I'm under pressure to shift my attention to other activities.  So, 
</span><br>
<span class="quotelev1">&gt; I think I'm going to abandon this effort.  The flow control problem 
</span><br>
<span class="quotelev1">&gt; seems thorny.  I can think of fixes as fast as I can identify 
</span><br>
<span class="quotelev1">&gt; flow-control problems, but the rate of new flow-control problems just 
</span><br>
<span class="quotelev1">&gt; doesn't seem to abate.  Meanwhile, my unexpected-work queue grows 
</span><br>
<span class="quotelev1">&gt; unbounded.  :^)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think the combination of Euegene's deadlock avoidance fix and the 
</span><br>
<span class="quotelev2">&gt;&gt; careful queue draining should make me comfortable enough to start 
</span><br>
<span class="quotelev2">&gt;&gt; another round of testing, but at least explains the bottom line issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6360.php">George Bosilca: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6358.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>In reply to:</strong> <a href="6358.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6360.php">George Bosilca: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6360.php">George Bosilca: "Re: [OMPI devel] sm BTL flow management"</a>
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
