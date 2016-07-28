<?
$subject_val = "Re: [OMPI devel] Threaded progress for CPCs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 15:08:59 2008" -->
<!-- isoreceived="20080519190859" -->
<!-- sent="Mon, 19 May 2008 14:09:50 -0500" -->
<!-- isosent="20080519190950" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threaded progress for CPCs" -->
<!-- id="20080519190950.GB27773_at_opengridcomputing.com" -->
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
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-19 15:09:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3937.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3935.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3934.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3943.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, May 19, 2008 at 01:38:53PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 19, 2008, at 8:25 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is it possible to have sane SRQ implementation without HW flow  
</span><br>
<span class="quotelev2">&gt; &gt; control?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems pretty unlikely if the only available HW flow control is to  
</span><br>
<span class="quotelev1">&gt; terminate the connection.  ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Even if we can get the iWARP semantics to work, this feels kinda
</span><br>
<span class="quotelev3">&gt; &gt;&gt; icky.  Perhaps I'm overreacting and this isn't a problem that needs  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; be fixed -- after all, this situation is no different than what
</span><br>
<span class="quotelev3">&gt; &gt;&gt; happens after the initial connection, but it still feels icky.
</span><br>
<span class="quotelev2">&gt; &gt; What is so icky about it? Sender is faster than a receiver so flow  
</span><br>
<span class="quotelev2">&gt; &gt; control
</span><br>
<span class="quotelev2">&gt; &gt; kicks in.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My point is that we have no real flow control for SRQ.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2. The CM progress thread posts its own receive buffers when creating
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a QP (which is a necessary step in both CMs).  However, this is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problematic in two cases:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [skip]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't like 1,2 and 3. :(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 4. Have a separate mpool for drawing initial receive buffers for the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; CM-posted RQs.  We'd probably want this mpool to be always empty (or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; close to empty) -- it's ok to be slow to allocate / register more
</span><br>
<span class="quotelev3">&gt; &gt;&gt; memory when a new connection request arrives.  The memory obtained
</span><br>
<span class="quotelev3">&gt; &gt;&gt; from this mpool should be able to be returned to the &quot;main&quot; mpool
</span><br>
<span class="quotelev3">&gt; &gt;&gt; after it is consumed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is slightly better, but still...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Agreed; my reactions were pretty much the same as yours.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
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
<span class="quotelev1">&gt; If so, we could always run the upper-level openib BTL really-post-the- 
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
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (***) The CTS can even be a zero byte message (maybe with inline data  
</span><br>
<span class="quotelev1">&gt; if we need it?); we're just waiting for the *first* message to arrive  
</span><br>
<span class="quotelev1">&gt; on the smallest BSRQ PPQP.  Here's a dumb question (because I've never  
</span><br>
<span class="quotelev1">&gt; tried it and am on a plane where I can't try it) -- can you post a 0  
</span><br>
<span class="quotelev1">&gt; byte buffer (or NULL) for a receive?  This would make returning the  
</span><br>
<span class="quotelev1">&gt; buffer to the CPC much easier (i.e., you won't have to) because the  
</span><br>
<span class="quotelev1">&gt; CPC [thread] will post the receive, but the upper level openib BTL  
</span><br>
<span class="quotelev1">&gt; [main thread] will actually receive it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We still have to solve what happens with iWARP on SRQ's, but that's  
</span><br>
<span class="quotelev1">&gt; really a different issue.  I don't know if the iWARP vendors have  
</span><br>
<span class="quotelev1">&gt; thought about this much yet...?
</span><br>
<p>I like the idea of the cpc only posting enough buffers to handle its
<br>
connection setup.  This sounds the most optimal for RDMACM, and there
<br>
can even be HW specific chunks if SRQ enabled iWARP adapters have
<br>
needs different from others.  This also removes the need to muck with
<br>
the credits if a QP gets torn down for a reconnection (or to setup
<br>
dummy qps like we currently do in RDMACM).
<br>
<p>Thanks,
<br>
Jon
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="3937.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3935.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3934.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3943.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
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
