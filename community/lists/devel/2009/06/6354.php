<?
$subject_val = "Re: [OMPI devel] sm BTL flow management";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 16:45:34 2009" -->
<!-- isoreceived="20090625204534" -->
<!-- sent="Thu, 25 Jun 2009 16:45:30 -0400 (EDT)" -->
<!-- isosent="20090625204530" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm BTL flow management" -->
<!-- id="alpine.DEB.1.10.0906251617220.2932_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A43D9B5.1040602_at_sun.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 16:45:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6355.php">Paul H. Hargrove: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6353.php">Brian W. Barrett: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>In reply to:</strong> <a href="6352.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6353.php">Brian W. Barrett: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 25 Jun 2009, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I spoke with Brian and Jeff about this earlier today.  Presumably, up through 
</span><br>
<span class="quotelev1">&gt; 1.2, mca_btl_component_progress would poll and if it received a message 
</span><br>
<span class="quotelev1">&gt; fragment would return.  Then, presumably in 1.3.0, behavior was changed to 
</span><br>
<span class="quotelev1">&gt; keep polling until the FIFO was empty.  Brian said this was based on Terry's 
</span><br>
<span class="quotelev1">&gt; desire to keep latency as low as possible in benchmarks.  Namely, reaching 
</span><br>
<span class="quotelev1">&gt; down into a progress call was a long code path.  It would be better to pick 
</span><br>
<span class="quotelev1">&gt; up multiple messages, if available on the FIFO, and queue extras up in the 
</span><br>
<span class="quotelev1">&gt; unexpected queue.  Then, a subsequent call could more efficiently find the 
</span><br>
<span class="quotelev1">&gt; anticipated message fragment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see how the behavior would impact short-message pingpongs (the 
</span><br>
<span class="quotelev1">&gt; typical way to measure latency) one way or the other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I asked Terry, who struggled to remember the issue and pointed me at this 
</span><br>
<span class="quotelev1">&gt; thread:  <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4158.php">http://www.open-mpi.org/community/lists/devel/2008/06/4158.php</a> . 
</span><br>
<span class="quotelev1">&gt; But that is related to an issue that's solved if one keeps polling as long as 
</span><br>
<span class="quotelev1">&gt; one gets ACKs (but returns as soon as a real message fragment is found).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone shed some light on the history here?  Why keep polling even when a 
</span><br>
<span class="quotelev1">&gt; message fragment has been found?  The downside of polling too aggressively is 
</span><br>
<span class="quotelev1">&gt; that the unexpected queue can grow (without bounds).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian's proposal is to set some variable that determines how many message 
</span><br>
<span class="quotelev1">&gt; fragments a single mca_btl_sm_component_progress call can drain from the FIFO 
</span><br>
<span class="quotelev1">&gt; before returning.
</span><br>
<p>I checked, and 1.3.2 definitely drains all messages until the fifo is 
<br>
empty.  If we were to switch to drain until we receive a data message and 
<br>
that fixes Terry's issue, that seems like a rational change and would not 
<br>
require the fix I suggested.  My assumption had been that we needed to 
<br>
drain more than one data message per call to component_progress in order 
<br>
to work around Terry's issue.  If not, then let's go with the simple fix 
<br>
and only drain one data message per enterance to component_progress (but 
<br>
drain multiple acks if we have a bunch of acks and then a data message in 
<br>
the queue).
<br>
<p>Unfortunately I have no more history than what Terry proposed, but it 
<br>
looks like the changes were made around that time.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6355.php">Paul H. Hargrove: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6353.php">Brian W. Barrett: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>In reply to:</strong> <a href="6352.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6353.php">Brian W. Barrett: "Re: [OMPI devel] sm BTL flow management"</a>
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
