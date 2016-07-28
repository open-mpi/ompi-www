<?
$subject_val = "Re: [OMPI devel] sm BTL flow management";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 11:59:57 2009" -->
<!-- isoreceived="20090626155957" -->
<!-- sent="Fri, 26 Jun 2009 11:59:40 -0400" -->
<!-- isosent="20090626155940" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm BTL flow management" -->
<!-- id="4A4F143B-C602-4D0F-95B8-A79B68CE2CA2_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A44A866.7050307_at_sun.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-26 11:59:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6361.php">Lenny Verkhovsky: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
<li><strong>Previous message:</strong> <a href="6359.php">Terry Dontje: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>In reply to:</strong> <a href="6359.php">Terry Dontje: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As Terry described and based on the patch attached to the ticket on  
<br>
trac, the extra goto has slipped in the commit by mistake. It belongs  
<br>
to a totally different patch for shared memory I'm working on. I'll  
<br>
remove it.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 26, 2009, at 06:52 , Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff, Eugene, and I had a long discussion this morning on the sm  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTL flow management issues and came to a couple of conclusions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Jeff, Eugene, and I are all convinced that Eugene's addition of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; polling the receive queue to drain acks when sends start backing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; up is required for deadlock avoidance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * We're also convinced that George's proposal, while a good idea  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in general, is not sufficient.  The send path doesn't appear to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sufficiently progress the btl to avoid the deadlocks we're seeing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the SM btl today.  Therefore, while I still recommend sizing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the fifo appropriately and limiting the freelist size, I think  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it's not sufficient to solve all problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Finally, it took an hour, but we did determine one of the major  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; differences between 1.2.8 and 1.3.0 in terms of sm is how messages  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; were pulled off the FIFO.  In 1.2.8 (and all earlier versions), we  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; return from btl_progress after a single message is received (ack  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or message) or the fifo was empty.  In 1.3.0 (pre-srq work Eugene  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; did), we changed to completely draining all queues before  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; returning from btl_progress.  This has led to a situation where a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; single call to btl_progress can make a large number of callbacks  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into the PML (900,000 times in one of Eugene's test case).  The  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; change was made to resolve an issue Terry was having with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance of a benchmark.  We've decided that it would be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adventageous to try something between the two points and drain X  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number of messages from the queue, then return, where X is 100 or  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so at most.  This should cover the performance issues Terry saw,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but still not cause the huge number of messages added to the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unexpected queue with a single call to MPI_Recv.  Since a recv  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that is matched on the unexpected queue doesn't result in a call  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to opal_progress, this should help balance the load a little bit  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; better.  Eugene's going to take a stab at implementing this short  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; term.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I checked with Terry and we can't really recover the history here.   
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps draining ACKs is good enough.  After the first message, we  
</span><br>
<span class="quotelev2">&gt;&gt; can return.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Ok recovering history here, not sure it matters though.  First the  
</span><br>
<span class="quotelev1">&gt; performance issue George and I discussed and fixed is documented in  
</span><br>
<span class="quotelev1">&gt; thread <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4158.php">http://www.open-mpi.org/community/lists/devel/2008/06/4158.php</a>
</span><br>
<span class="quotelev1">&gt; As was mentioned this was only to retrieve ack packets and should  
</span><br>
<span class="quotelev1">&gt; not have any bearing on expanding the unexpected queue.   The  
</span><br>
<span class="quotelev1">&gt; original change was r18724 and did not add line 432 mentioned below.
</span><br>
<span class="quotelev2">&gt;&gt; That's a one-line change.  Just comment out line 432 (&quot;goto  
</span><br>
<span class="quotelev2">&gt;&gt; recheck_peer;&quot;) in <a href="https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/btl/sm/btl_sm_component.c">https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/btl/sm/btl_sm_component.c</a> 
</span><br>
<span class="quotelev2">&gt;&gt; #432 .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Line 432 was introduced by r19309 to fix ticket #1378.  However  
</span><br>
<span class="quotelev1">&gt; something is more at hand because since Eugene's experiement show's  
</span><br>
<span class="quotelev1">&gt; removing this line doesn't help reduce the amount of unexpecteds.
</span><br>
<span class="quotelev2">&gt;&gt; Problem is, that doesn't &quot;fix&quot; things.  That is, my deadlock  
</span><br>
<span class="quotelev2">&gt;&gt; avoidance stuff (hg workspace on milliways that I sent out a  
</span><br>
<span class="quotelev2">&gt;&gt; pointer to) seems to be enough to, well, avoid deadlock, but  
</span><br>
<span class="quotelev2">&gt;&gt; unexpected-message queues are still growing like mad I think.  Even  
</span><br>
<span class="quotelev2">&gt;&gt; when sm progress returns after the first message fragment is  
</span><br>
<span class="quotelev2">&gt;&gt; received.  (X=1.)  I think it's even true if the max free-list size  
</span><br>
<span class="quotelev2">&gt;&gt; is capped at something small.  I *think* (but am too tired to  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;know&quot;) that the issue is we poll the FIFO often anyhow.  We have  
</span><br>
<span class="quotelev2">&gt;&gt; to for sends to reclaim fragments.  We have to for receives, to  
</span><br>
<span class="quotelev2">&gt;&gt; pull out messages of interest.  Maybe things would be better if we  
</span><br>
<span class="quotelev2">&gt;&gt; had one FIFO for in-coming fragments and another for returning  
</span><br>
<span class="quotelev2">&gt;&gt; fragments.  We could poll the latter only when we needed another  
</span><br>
<span class="quotelev2">&gt;&gt; fragment for sending.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; So is the issue that Eugene describing is that one rank is flooding  
</span><br>
<span class="quotelev1">&gt; the other with so many messages that the flooded victim cannot see  
</span><br>
<span class="quotelev1">&gt; the FRAG_ACKs without draining the real (flooding) messages from the  
</span><br>
<span class="quotelev1">&gt; FIFO first?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems like either having a separate  FIFOs, as Eugene describes  
</span><br>
<span class="quotelev1">&gt; above, or instituting some type of flow control (number of inflight  
</span><br>
<span class="quotelev1">&gt; messages allowed) might help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; But I'm under pressure to shift my attention to other activities.   
</span><br>
<span class="quotelev2">&gt;&gt; So, I think I'm going to abandon this effort.  The flow control  
</span><br>
<span class="quotelev2">&gt;&gt; problem seems thorny.  I can think of fixes as fast as I can  
</span><br>
<span class="quotelev2">&gt;&gt; identify flow-control problems, but the rate of new flow-control  
</span><br>
<span class="quotelev2">&gt;&gt; problems just doesn't seem to abate.  Meanwhile, my unexpected-work  
</span><br>
<span class="quotelev2">&gt;&gt; queue grows unbounded.  :^)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think the combination of Euegene's deadlock avoidance fix and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the careful queue draining should make me comfortable enough to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start another round of testing, but at least explains the bottom  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line issues.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6361.php">Lenny Verkhovsky: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
<li><strong>Previous message:</strong> <a href="6359.php">Terry Dontje: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>In reply to:</strong> <a href="6359.php">Terry Dontje: "Re: [OMPI devel] sm BTL flow management"</a>
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
