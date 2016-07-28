<?
$subject_val = "Re: [OMPI devel] Threaded progress for CPCs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 20 12:38:07 2008" -->
<!-- isoreceived="20080520163807" -->
<!-- sent="Tue, 20 May 2008 12:37:10 -0400" -->
<!-- isosent="20080520163710" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threaded progress for CPCs" -->
<!-- id="05240C9F-F4E5-47D5-B7C8-D1FBE2C9103F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080520100221.GW21806_at_minantech.com" -->
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
<strong>Date:</strong> 2008-05-20 12:37:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3946.php">Pak Lui: "[OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<li><strong>Previous message:</strong> <a href="3944.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3943.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3955.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3955.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I think we're mostly converged on a solution.  This might not get  
<br>
implemented immediately (got some other pending v1.3 stuff to bug fix,  
<br>
etc.), but it'll happen for v1.3.
<br>
<p>- endpoint creation will mpool alloc/register a small buffer for  
<br>
handshake
<br>
- cpc does not need to call _post_recvs()); instead, it can just post  
<br>
the single small buffer on each BSRQ QP (from the small buffer on the  
<br>
endpoint)
<br>
- cpc will call _connected() (in the main thread, not the CPC progress  
<br>
thread) when all BSRQ QPs are connected
<br>
&nbsp;&nbsp;&nbsp;- if _post_recvs() was previously called, do the normal &quot;finish  
<br>
setting up&quot; stuff and declare the endpoint CONNECTED
<br>
&nbsp;&nbsp;&nbsp;- if _post_recvs() was not previously called, then:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- call _post_recvs()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- send a short CTS message on the 1st BSRQ QP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- wait for CTS from peer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- when both CTS from peer has arrived *and* we have sent our CTS,  
<br>
declare endpoint CONNECTED
<br>
<p>Doing it this way adds no overhead to OOB/XOOB (who don't need this  
<br>
extra handshake).  I think the code can be factored nicely to make  
<br>
this not too complicated.
<br>
<p>I'll work on this once I figure out the memory corruption I'm seeing  
<br>
in the receive_queues patch...
<br>
<p>Note that this addresses the wireup multi-threading issues -- not  
<br>
iWarp SRQ issues. We'll tackle those separately, and possibly not for  
<br>
the initial v1.3.0 release.
<br>
<p><p>On May 20, 2008, at 6:02 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, May 19, 2008 at 01:38:53PM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 5. ...?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What about moving posting of receive buffers into main thread. With
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SRQ it is easy: don't post anything in CPC thread. Main thread will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prepost buffers automatically after first fragment received on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; endpoint (in btl_openib_handle_incoming()). With PPRQ it's more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; complicated. What if we'll prepost dummy buffers (not from free  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; during IBCM connection stage and will run another three way  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; handshake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; protocol using those buffers, but from the main thread. We will need
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prepost one buffer on the active side and two buffers on the passive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; side.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is probably the most viable alternative -- it would be easiest  
</span><br>
<span class="quotelev2">&gt;&gt; if
</span><br>
<span class="quotelev2">&gt;&gt; we did this for all CPC's, not just for IBCM:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - for PPRQ: CPCs only post a small number of receive buffers,  
</span><br>
<span class="quotelev2">&gt;&gt; suitable
</span><br>
<span class="quotelev2">&gt;&gt; for another handshake that will run in the upper-level openib BTL
</span><br>
<span class="quotelev2">&gt;&gt; - for SRQ: CPCs don't post anything (because the SRQ already  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;belongs&quot;
</span><br>
<span class="quotelev2">&gt;&gt; to the upper level openib BTL)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do we have a BSRQ restriction that there *must* be at least one PPRQ?
</span><br>
<span class="quotelev1">&gt; No. We don't have such restriction and I wouldn't want to add it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If so, we could always run the upper-level openib BTL really-post- 
</span><br>
<span class="quotelev2">&gt;&gt; the-
</span><br>
<span class="quotelev2">&gt;&gt; buffers handshake over the smallest buffer size BSRQ RC PPRQ (i.e.,
</span><br>
<span class="quotelev2">&gt;&gt; have the CPC post a single receive on this QP -- see below), which
</span><br>
<span class="quotelev2">&gt;&gt; would make things much easier.  If we don't already have this
</span><br>
<span class="quotelev2">&gt;&gt; restriction, would we mind adding it?  We have one PPRQ in our  
</span><br>
<span class="quotelev2">&gt;&gt; default
</span><br>
<span class="quotelev2">&gt;&gt; receive_queues value, anyway.
</span><br>
<span class="quotelev1">&gt; If there is not PPRQ then we can relay on RNR/retransmit logic in case
</span><br>
<span class="quotelev1">&gt; there is not enough buffer in SRQ. We do that anyway in openib BTL  
</span><br>
<span class="quotelev1">&gt; code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With this rationale, once the CPC says &quot;ok, all BSRQ QP's are
</span><br>
<span class="quotelev2">&gt;&gt; connected&quot;, then _endpoint.c can run a CTS handshake to post the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;real&quot; buffers, where each side does the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - CPC calls _endpoint_connected() to tell the upper level BTL that it
</span><br>
<span class="quotelev2">&gt;&gt; is fully connected (the function is invoked in the main thread)
</span><br>
<span class="quotelev2">&gt;&gt; - _endpoint_connected() posts all the &quot;real&quot; buffers to all the BSRQ
</span><br>
<span class="quotelev2">&gt;&gt; QP's on the endpoint
</span><br>
<span class="quotelev2">&gt;&gt; - _endpoint_connected() then sends a CTS control message to remote
</span><br>
<span class="quotelev2">&gt;&gt; peer via smallest RC PPRQ
</span><br>
<span class="quotelev2">&gt;&gt; - upon receipt of CTS:
</span><br>
<span class="quotelev2">&gt;&gt;   - release the buffer (***)
</span><br>
<span class="quotelev2">&gt;&gt;   - set endpoint state of CONNECTED and let all pending messages
</span><br>
<span class="quotelev2">&gt;&gt; flow... (as it happens today)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So it actually doesn't even have to be a handshake -- it's just an
</span><br>
<span class="quotelev2">&gt;&gt; additional CTS sent over the newly-created RC QP.  Since it's RC, we
</span><br>
<span class="quotelev2">&gt;&gt; don't have to do much -- just wait for the CTS to know that the  
</span><br>
<span class="quotelev2">&gt;&gt; remote
</span><br>
<span class="quotelev2">&gt;&gt; side has actually posted all the receives that we expect it to have.
</span><br>
<span class="quotelev2">&gt;&gt; Since the CTS flows over a PPRQ, there's no issue about receiving the
</span><br>
<span class="quotelev2">&gt;&gt; CTS on an SRQ (because the SRQ may not have any buffers posted at any
</span><br>
<span class="quotelev2">&gt;&gt; given time).
</span><br>
<span class="quotelev1">&gt; Correct. Full handshake is not needed. The trick is to allocate those
</span><br>
<span class="quotelev1">&gt; initial buffers in a smart way. IMO initial buffer should be very
</span><br>
<span class="quotelev1">&gt; small (a couple of bytes only) and be preallocated on endpoint  
</span><br>
<span class="quotelev1">&gt; creation.
</span><br>
<span class="quotelev1">&gt; This will solve locking problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
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
<li><strong>Next message:</strong> <a href="3946.php">Pak Lui: "[OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<li><strong>Previous message:</strong> <a href="3944.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3943.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3955.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3955.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
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
