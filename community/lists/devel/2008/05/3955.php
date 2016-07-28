<?
$subject_val = "Re: [OMPI devel] Threaded progress for CPCs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 09:26:46 2008" -->
<!-- isoreceived="20080521132646" -->
<!-- sent="Wed, 21 May 2008 09:26:15 -0400" -->
<!-- isosent="20080521132615" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threaded progress for CPCs" -->
<!-- id="2919A494-F760-49D2-8BF5-BB3515577AA0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="05240C9F-F4E5-47D5-B7C8-D1FBE2C9103F_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 09:26:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3956.php">Jeff Squyres: "[OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3954.php">Pak Lui: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<li><strong>In reply to:</strong> <a href="3945.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3944.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One more point that Pasha and I hashed out yesterday in IM...
<br>
<p>To avoid the problem of posting a short handshake buffer to already- 
<br>
existing SRQs, we will only do the extra handshake if there are PPRQ's  
<br>
in receive_queues.  The handshake will go across the smallest PPRQ,  
<br>
and represent all QPs in receive_queues (even the SRQs).
<br>
<p>If there are no PPRQ's in the receive_queues value, we'll just skip  
<br>
the handshake and rely on IB's SRQ RNR retransmitting to fix any race  
<br>
conditions.
<br>
<p>One point that needs clarification: whether IBCM and RDMACM *require*  
<br>
posting receive buffers on the new QP's.  If so, this scheme will run  
<br>
into trouble because we do not want to post any buffers on SRQs; that  
<br>
gets racy and difficult to synchronize right (especially if multiple  
<br>
remote peers are simultaneously trying to connect to a single SRQ).   
<br>
I'll check this out today or tomorrow.
<br>
<p>We'll have to re-visit this when iWARP NICs start supporting SRQ, but  
<br>
if the above assumption is true (no need to post any receive buffers  
<br>
for IBCM and RDMACM), it will be good enough for v1.3.
<br>
<p><p>On May 20, 2008, at 12:37 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Ok, I think we're mostly converged on a solution.  This might not get
</span><br>
<span class="quotelev1">&gt; implemented immediately (got some other pending v1.3 stuff to bug fix,
</span><br>
<span class="quotelev1">&gt; etc.), but it'll happen for v1.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - endpoint creation will mpool alloc/register a small buffer for
</span><br>
<span class="quotelev1">&gt; handshake
</span><br>
<span class="quotelev1">&gt; - cpc does not need to call _post_recvs()); instead, it can just post
</span><br>
<span class="quotelev1">&gt; the single small buffer on each BSRQ QP (from the small buffer on the
</span><br>
<span class="quotelev1">&gt; endpoint)
</span><br>
<span class="quotelev1">&gt; - cpc will call _connected() (in the main thread, not the CPC progress
</span><br>
<span class="quotelev1">&gt; thread) when all BSRQ QPs are connected
</span><br>
<span class="quotelev1">&gt;   - if _post_recvs() was previously called, do the normal &quot;finish
</span><br>
<span class="quotelev1">&gt; setting up&quot; stuff and declare the endpoint CONNECTED
</span><br>
<span class="quotelev1">&gt;   - if _post_recvs() was not previously called, then:
</span><br>
<span class="quotelev1">&gt;     - call _post_recvs()
</span><br>
<span class="quotelev1">&gt;     - send a short CTS message on the 1st BSRQ QP
</span><br>
<span class="quotelev1">&gt;     - wait for CTS from peer
</span><br>
<span class="quotelev1">&gt;     - when both CTS from peer has arrived *and* we have sent our CTS,
</span><br>
<span class="quotelev1">&gt; declare endpoint CONNECTED
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doing it this way adds no overhead to OOB/XOOB (who don't need this
</span><br>
<span class="quotelev1">&gt; extra handshake).  I think the code can be factored nicely to make
</span><br>
<span class="quotelev1">&gt; this not too complicated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll work on this once I figure out the memory corruption I'm seeing
</span><br>
<span class="quotelev1">&gt; in the receive_queues patch...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that this addresses the wireup multi-threading issues -- not
</span><br>
<span class="quotelev1">&gt; iWarp SRQ issues. We'll tackle those separately, and possibly not for
</span><br>
<span class="quotelev1">&gt; the initial v1.3.0 release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 20, 2008, at 6:02 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, May 19, 2008 at 01:38:53PM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 5. ...?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What about moving posting of receive buffers into main thread. With
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SRQ it is easy: don't post anything in CPC thread. Main thread will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; prepost buffers automatically after first fragment received on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; endpoint (in btl_openib_handle_incoming()). With PPRQ it's more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; complicated. What if we'll prepost dummy buffers (not from free
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; list)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; during IBCM connection stage and will run another three way
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; handshake
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; protocol using those buffers, but from the main thread. We will  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; need
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; prepost one buffer on the active side and two buffers on the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; passive
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; side.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is probably the most viable alternative -- it would be easiest
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we did this for all CPC's, not just for IBCM:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - for PPRQ: CPCs only post a small number of receive buffers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suitable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for another handshake that will run in the upper-level openib BTL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - for SRQ: CPCs don't post anything (because the SRQ already
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;belongs&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the upper level openib BTL)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do we have a BSRQ restriction that there *must* be at least one  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PPRQ?
</span><br>
<span class="quotelev2">&gt;&gt; No. We don't have such restriction and I wouldn't want to add it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If so, we could always run the upper-level openib BTL really-post-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; buffers handshake over the smallest buffer size BSRQ RC PPRQ (i.e.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have the CPC post a single receive on this QP -- see below), which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would make things much easier.  If we don't already have this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restriction, would we mind adding it?  We have one PPRQ in our
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; receive_queues value, anyway.
</span><br>
<span class="quotelev2">&gt;&gt; If there is not PPRQ then we can relay on RNR/retransmit logic in  
</span><br>
<span class="quotelev2">&gt;&gt; case
</span><br>
<span class="quotelev2">&gt;&gt; there is not enough buffer in SRQ. We do that anyway in openib BTL
</span><br>
<span class="quotelev2">&gt;&gt; code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With this rationale, once the CPC says &quot;ok, all BSRQ QP's are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connected&quot;, then _endpoint.c can run a CTS handshake to post the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;real&quot; buffers, where each side does the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - CPC calls _endpoint_connected() to tell the upper level BTL that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is fully connected (the function is invoked in the main thread)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - _endpoint_connected() posts all the &quot;real&quot; buffers to all the BSRQ
</span><br>
<span class="quotelev3">&gt;&gt;&gt; QP's on the endpoint
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - _endpoint_connected() then sends a CTS control message to remote
</span><br>
<span class="quotelev3">&gt;&gt;&gt; peer via smallest RC PPRQ
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - upon receipt of CTS:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - release the buffer (***)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - set endpoint state of CONNECTED and let all pending messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flow... (as it happens today)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So it actually doesn't even have to be a handshake -- it's just an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; additional CTS sent over the newly-created RC QP.  Since it's RC, we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't have to do much -- just wait for the CTS to know that the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remote
</span><br>
<span class="quotelev3">&gt;&gt;&gt; side has actually posted all the receives that we expect it to have.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since the CTS flows over a PPRQ, there's no issue about receiving  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CTS on an SRQ (because the SRQ may not have any buffers posted at  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; given time).
</span><br>
<span class="quotelev2">&gt;&gt; Correct. Full handshake is not needed. The trick is to allocate those
</span><br>
<span class="quotelev2">&gt;&gt; initial buffers in a smart way. IMO initial buffer should be very
</span><br>
<span class="quotelev2">&gt;&gt; small (a couple of bytes only) and be preallocated on endpoint
</span><br>
<span class="quotelev2">&gt;&gt; creation.
</span><br>
<span class="quotelev2">&gt;&gt; This will solve locking problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; 			Gleb.
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
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3956.php">Jeff Squyres: "[OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3954.php">Pak Lui: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<li><strong>In reply to:</strong> <a href="3945.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3944.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
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
