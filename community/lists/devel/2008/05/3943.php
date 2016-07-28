<?
$subject_val = "Re: [OMPI devel] Threaded progress for CPCs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 20 06:02:31 2008" -->
<!-- isoreceived="20080520100231" -->
<!-- sent="Tue, 20 May 2008 13:02:21 +0300" -->
<!-- isosent="20080520100221" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threaded progress for CPCs" -->
<!-- id="20080520100221.GW21806_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9F4EABC7-F325-4CCB-94D5-9E9CE1BBD8B8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Threaded progress for CPCs<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-20 06:02:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3944.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3942.php">Steve Wise: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3934.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3945.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3945.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, May 19, 2008 at 01:38:53PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev3">&gt; &gt;&gt; 5. ...?
</span><br>
<span class="quotelev2">&gt; &gt; What about moving posting of receive buffers into main thread. With
</span><br>
<span class="quotelev2">&gt; &gt; SRQ it is easy: don't post anything in CPC thread. Main thread will
</span><br>
<span class="quotelev2">&gt; &gt; prepost buffers automatically after first fragment received on the
</span><br>
<span class="quotelev2">&gt; &gt; endpoint (in btl_openib_handle_incoming()). With PPRQ it's more
</span><br>
<span class="quotelev2">&gt; &gt; complicated. What if we'll prepost dummy buffers (not from free list)
</span><br>
<span class="quotelev2">&gt; &gt; during IBCM connection stage and will run another three way handshake
</span><br>
<span class="quotelev2">&gt; &gt; protocol using those buffers, but from the main thread. We will need  
</span><br>
<span class="quotelev2">&gt; &gt; to
</span><br>
<span class="quotelev2">&gt; &gt; prepost one buffer on the active side and two buffers on the passive  
</span><br>
<span class="quotelev2">&gt; &gt; side.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is probably the most viable alternative -- it would be easiest if  
</span><br>
<span class="quotelev1">&gt; we did this for all CPC's, not just for IBCM:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - for PPRQ: CPCs only post a small number of receive buffers, suitable  
</span><br>
<span class="quotelev1">&gt; for another handshake that will run in the upper-level openib BTL
</span><br>
<span class="quotelev1">&gt; - for SRQ: CPCs don't post anything (because the SRQ already &quot;belongs&quot;  
</span><br>
<span class="quotelev1">&gt; to the upper level openib BTL)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do we have a BSRQ restriction that there *must* be at least one PPRQ?   
</span><br>
No. We don't have such restriction and I wouldn't want to add it.
<br>
<p><span class="quotelev1">&gt; If so, we could always run the upper-level openib BTL really-post-the- 
</span><br>
<span class="quotelev1">&gt; buffers handshake over the smallest buffer size BSRQ RC PPRQ (i.e.,  
</span><br>
<span class="quotelev1">&gt; have the CPC post a single receive on this QP -- see below), which  
</span><br>
<span class="quotelev1">&gt; would make things much easier.  If we don't already have this  
</span><br>
<span class="quotelev1">&gt; restriction, would we mind adding it?  We have one PPRQ in our default  
</span><br>
<span class="quotelev1">&gt; receive_queues value, anyway.
</span><br>
If there is not PPRQ then we can relay on RNR/retransmit logic in case
<br>
there is not enough buffer in SRQ. We do that anyway in openib BTL code.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With this rationale, once the CPC says &quot;ok, all BSRQ QP's are  
</span><br>
<span class="quotelev1">&gt; connected&quot;, then _endpoint.c can run a CTS handshake to post the  
</span><br>
<span class="quotelev1">&gt; &quot;real&quot; buffers, where each side does the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - CPC calls _endpoint_connected() to tell the upper level BTL that it  
</span><br>
<span class="quotelev1">&gt; is fully connected (the function is invoked in the main thread)
</span><br>
<span class="quotelev1">&gt; - _endpoint_connected() posts all the &quot;real&quot; buffers to all the BSRQ  
</span><br>
<span class="quotelev1">&gt; QP's on the endpoint
</span><br>
<span class="quotelev1">&gt; - _endpoint_connected() then sends a CTS control message to remote  
</span><br>
<span class="quotelev1">&gt; peer via smallest RC PPRQ
</span><br>
<span class="quotelev1">&gt; - upon receipt of CTS:
</span><br>
<span class="quotelev1">&gt;    - release the buffer (***)
</span><br>
<span class="quotelev1">&gt;    - set endpoint state of CONNECTED and let all pending messages  
</span><br>
<span class="quotelev1">&gt; flow... (as it happens today)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it actually doesn't even have to be a handshake -- it's just an  
</span><br>
<span class="quotelev1">&gt; additional CTS sent over the newly-created RC QP.  Since it's RC, we  
</span><br>
<span class="quotelev1">&gt; don't have to do much -- just wait for the CTS to know that the remote  
</span><br>
<span class="quotelev1">&gt; side has actually posted all the receives that we expect it to have.   
</span><br>
<span class="quotelev1">&gt; Since the CTS flows over a PPRQ, there's no issue about receiving the  
</span><br>
<span class="quotelev1">&gt; CTS on an SRQ (because the SRQ may not have any buffers posted at any  
</span><br>
<span class="quotelev1">&gt; given time).
</span><br>
Correct. Full handshake is not needed. The trick is to allocate those
<br>
initial buffers in a smart way. IMO initial buffer should be very
<br>
small (a couple of bytes only) and be preallocated on endpoint creation.
<br>
This will solve locking problem.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3944.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3942.php">Steve Wise: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3934.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3945.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3945.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
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
