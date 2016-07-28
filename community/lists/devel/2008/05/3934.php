<?
$subject_val = "Re: [OMPI devel] Threaded progress for CPCs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 13:48:55 2008" -->
<!-- isoreceived="20080519174855" -->
<!-- sent="Mon, 19 May 2008 13:38:53 -0400" -->
<!-- isosent="20080519173853" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threaded progress for CPCs" -->
<!-- id="9F4EABC7-F325-4CCB-94D5-9E9CE1BBD8B8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080519122555.GT21806_at_minantech.com" -->
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
<strong>Date:</strong> 2008-05-19 13:38:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3935.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3933.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3929.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3936.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3936.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3943.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3944.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 19, 2008, at 8:25 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; Is it possible to have sane SRQ implementation without HW flow  
</span><br>
<span class="quotelev1">&gt; control?
</span><br>
<p>It seems pretty unlikely if the only available HW flow control is to  
<br>
terminate the connection.  ;-)
<br>
<p><span class="quotelev2">&gt;&gt; Even if we can get the iWARP semantics to work, this feels kinda
</span><br>
<span class="quotelev2">&gt;&gt; icky.  Perhaps I'm overreacting and this isn't a problem that needs  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; be fixed -- after all, this situation is no different than what
</span><br>
<span class="quotelev2">&gt;&gt; happens after the initial connection, but it still feels icky.
</span><br>
<span class="quotelev1">&gt; What is so icky about it? Sender is faster than a receiver so flow  
</span><br>
<span class="quotelev1">&gt; control
</span><br>
<span class="quotelev1">&gt; kicks in.
</span><br>
<p>My point is that we have no real flow control for SRQ.
<br>
<p><span class="quotelev2">&gt;&gt; 2. The CM progress thread posts its own receive buffers when creating
</span><br>
<span class="quotelev2">&gt;&gt; a QP (which is a necessary step in both CMs).  However, this is
</span><br>
<span class="quotelev2">&gt;&gt; problematic in two cases:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; [skip]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't like 1,2 and 3. :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. Have a separate mpool for drawing initial receive buffers for the
</span><br>
<span class="quotelev2">&gt;&gt; CM-posted RQs.  We'd probably want this mpool to be always empty (or
</span><br>
<span class="quotelev2">&gt;&gt; close to empty) -- it's ok to be slow to allocate / register more
</span><br>
<span class="quotelev2">&gt;&gt; memory when a new connection request arrives.  The memory obtained
</span><br>
<span class="quotelev2">&gt;&gt; from this mpool should be able to be returned to the &quot;main&quot; mpool
</span><br>
<span class="quotelev2">&gt;&gt; after it is consumed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is slightly better, but still...
</span><br>
<p>Agreed; my reactions were pretty much the same as yours.
<br>
<p><span class="quotelev2">&gt;&gt; 5. ...?
</span><br>
<span class="quotelev1">&gt; What about moving posting of receive buffers into main thread. With
</span><br>
<span class="quotelev1">&gt; SRQ it is easy: don't post anything in CPC thread. Main thread will
</span><br>
<span class="quotelev1">&gt; prepost buffers automatically after first fragment received on the
</span><br>
<span class="quotelev1">&gt; endpoint (in btl_openib_handle_incoming()). With PPRQ it's more
</span><br>
<span class="quotelev1">&gt; complicated. What if we'll prepost dummy buffers (not from free list)
</span><br>
<span class="quotelev1">&gt; during IBCM connection stage and will run another three way handshake
</span><br>
<span class="quotelev1">&gt; protocol using those buffers, but from the main thread. We will need  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; prepost one buffer on the active side and two buffers on the passive  
</span><br>
<span class="quotelev1">&gt; side.
</span><br>
<p><p>This is probably the most viable alternative -- it would be easiest if  
<br>
we did this for all CPC's, not just for IBCM:
<br>
<p>- for PPRQ: CPCs only post a small number of receive buffers, suitable  
<br>
for another handshake that will run in the upper-level openib BTL
<br>
- for SRQ: CPCs don't post anything (because the SRQ already &quot;belongs&quot;  
<br>
to the upper level openib BTL)
<br>
<p>Do we have a BSRQ restriction that there *must* be at least one PPRQ?   
<br>
If so, we could always run the upper-level openib BTL really-post-the- 
<br>
buffers handshake over the smallest buffer size BSRQ RC PPRQ (i.e.,  
<br>
have the CPC post a single receive on this QP -- see below), which  
<br>
would make things much easier.  If we don't already have this  
<br>
restriction, would we mind adding it?  We have one PPRQ in our default  
<br>
receive_queues value, anyway.
<br>
<p>With this rationale, once the CPC says &quot;ok, all BSRQ QP's are  
<br>
connected&quot;, then _endpoint.c can run a CTS handshake to post the  
<br>
&quot;real&quot; buffers, where each side does the following:
<br>
<p>- CPC calls _endpoint_connected() to tell the upper level BTL that it  
<br>
is fully connected (the function is invoked in the main thread)
<br>
- _endpoint_connected() posts all the &quot;real&quot; buffers to all the BSRQ  
<br>
QP's on the endpoint
<br>
- _endpoint_connected() then sends a CTS control message to remote  
<br>
peer via smallest RC PPRQ
<br>
- upon receipt of CTS:
<br>
&nbsp;&nbsp;&nbsp;- release the buffer (***)
<br>
&nbsp;&nbsp;&nbsp;- set endpoint state of CONNECTED and let all pending messages  
<br>
flow... (as it happens today)
<br>
<p>So it actually doesn't even have to be a handshake -- it's just an  
<br>
additional CTS sent over the newly-created RC QP.  Since it's RC, we  
<br>
don't have to do much -- just wait for the CTS to know that the remote  
<br>
side has actually posted all the receives that we expect it to have.   
<br>
Since the CTS flows over a PPRQ, there's no issue about receiving the  
<br>
CTS on an SRQ (because the SRQ may not have any buffers posted at any  
<br>
given time).
<br>
<p>(***) The CTS can even be a zero byte message (maybe with inline data  
<br>
if we need it?); we're just waiting for the *first* message to arrive  
<br>
on the smallest BSRQ PPQP.  Here's a dumb question (because I've never  
<br>
tried it and am on a plane where I can't try it) -- can you post a 0  
<br>
byte buffer (or NULL) for a receive?  This would make returning the  
<br>
buffer to the CPC much easier (i.e., you won't have to) because the  
<br>
CPC [thread] will post the receive, but the upper level openib BTL  
<br>
[main thread] will actually receive it.
<br>
<p>We still have to solve what happens with iWARP on SRQ's, but that's  
<br>
really a different issue.  I don't know if the iWARP vendors have  
<br>
thought about this much yet...?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3935.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3933.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3929.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3936.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3936.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3943.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3944.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
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
