<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun  5 14:43:30 2007" -->
<!-- isoreceived="20070605184330" -->
<!-- sent="Tue, 5 Jun 2007 21:43:24 +0300" -->
<!-- isosent="20070605184324" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-NIC support" -->
<!-- id="20070605184324.GA1935_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F009D5E6-DD78-4F79-A9B5-EDB117A1405E_at_cs.utk.edu" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-05 14:43:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1618.php">Mohamad Chaarawi: "[OMPI devel] btl_openib_exclusivity"</a>
<li><strong>Previous message:</strong> <a href="1616.php">George Bosilca: "[OMPI devel] Multi-NIC support"</a>
<li><strong>In reply to:</strong> <a href="1616.php">George Bosilca: "[OMPI devel] Multi-NIC support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK. I wanted to post my patch later this week, but you beat me to it, so
<br>
here it is attached. But my approach is completely different and may
<br>
coexist with yours.
<br>
<p>On Tue, Jun 05, 2007 at 12:03:55PM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; The multi-NIC support was broken for a while. This patch correct it  
</span><br>
It was always completely broken as far as I can tell.
<br>
<p><span class="quotelev1">&gt; and take it back to the original performances (sum of bandwidths).  
</span><br>
Do you have sum of bandwidths between TCP and IB without leave_pinned just
<br>
by using this patch. I doubt it. The problem with current code is that if
<br>
you have mix of two networks and one of them doesn't need memory registration
<br>
(like TCP) it hijacks all the traffic unless leave_pinned is in use. The reason is
<br>
that memory is always appears to be registered on TCP and OB1 never
<br>
tries to use something different for RDMA.
<br>
<p><span class="quotelev1">&gt; The idea behind is to decide in the beginning how to split the  
</span><br>
<span class="quotelev1">&gt; message in fragments and their sizes and then only reschedule on the  
</span><br>
<span class="quotelev1">&gt; BTLs that complete a fragment. So Instead of using a round-robin over  
</span><br>
<span class="quotelev1">&gt; the BTL when we select a new BTL, we keep trace of the last BTL and  
</span><br>
<span class="quotelev1">&gt; schedule the new fragment over it.
</span><br>
Are you sure you attached correct patch? What the patch does doesn't
<br>
match your description. It schedules new rdma fragment upon completion
<br>
of the previous instead of blindly do round-robin and this is very good
<br>
idea, but unfortunately implementation breaks threaded support (and this
<br>
is not good as was decided today). Current assumption is that OB1
<br>
schedules one request only on one CPU at a time. When you call new
<br>
mca_pml_ob1_recv_request_schedule_btl_exclusive() function schedule loop
<br>
may run on another CPU.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This way, we get good performance even when the relative difference  
</span><br>
<span class="quotelev1">&gt; between the characteristics of the BTLs are huge. This patch was on  
</span><br>
<span class="quotelev1">&gt; my modified versions for a while and it was used on one of our multi- 
</span><br>
<span class="quotelev1">&gt; NIC clusters by several users for few months.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I suppose all NICs are ethernet?
<br>
<p>My approach is to pre calculate how much data should be send on each BTL
<br>
in advance according to relative weight before we start scheduling.
<br>
During schedule function there is no more calculation just chop data in
<br>
rdma_frag_length peaces and send it. The current code doesn't do balance
<br>
according to btl_weight at all if rdma_frag_length is much smaller
<br>
than message length (it is INT_MAX for TCP, so TCP is special in this regard
<br>
too). The reason is that each time schedule loop calculates how much data should
<br>
be send it calculates a fragment size according to btl_weight and then chops it
<br>
according to rdma_frag_length and lose any information it got from previous
<br>
calculation. Just look at the code and do a simulation. You don't see it
<br>
when all BTL have same bandwidth because no matter what relative
<br>
bandwidth BTLs have OB1 will always schedule more or less same number of
<br>
bytes on each one.
<br>
<p><pre>
--
			Gleb.

</pre>
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1617/fair_schedule.diff">fair_schedule.diff</a>
</ul>
<!-- attachment="fair_schedule.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1618.php">Mohamad Chaarawi: "[OMPI devel] btl_openib_exclusivity"</a>
<li><strong>Previous message:</strong> <a href="1616.php">George Bosilca: "[OMPI devel] Multi-NIC support"</a>
<li><strong>In reply to:</strong> <a href="1616.php">George Bosilca: "[OMPI devel] Multi-NIC support"</a>
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
