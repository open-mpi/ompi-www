<?
$subject_val = "Re: [OMPI devel] Threaded progress for CPCs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 20 06:36:18 2008" -->
<!-- isoreceived="20080520103618" -->
<!-- sent="Tue, 20 May 2008 13:36:10 +0300" -->
<!-- isosent="20080520103610" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threaded progress for CPCs" -->
<!-- id="4832A99A.7000500_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-20 06:36:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3945.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3943.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3934.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3932.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; Is it possible to have sane SRQ implementation without HW flow  
</span><br>
<span class="quotelev2">&gt;&gt; control?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems pretty unlikely if the only available HW flow control is to  
</span><br>
<span class="quotelev1">&gt; terminate the connection.  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Even if we can get the iWARP semantics to work, this feels kinda
</span><br>
<span class="quotelev3">&gt;&gt;&gt; icky.  Perhaps I'm overreacting and this isn't a problem that needs  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be fixed -- after all, this situation is no different than what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happens after the initial connection, but it still feels icky.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; What is so icky about it? Sender is faster than a receiver so flow  
</span><br>
<span class="quotelev2">&gt;&gt; control
</span><br>
<span class="quotelev2">&gt;&gt; kicks in.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My point is that we have no real flow control for SRQ.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. The CM progress thread posts its own receive buffers when creating
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a QP (which is a necessary step in both CMs).  However, this is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problematic in two cases:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; [skip]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't like 1,2 and 3. :(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. Have a separate mpool for drawing initial receive buffers for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CM-posted RQs.  We'd probably want this mpool to be always empty (or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; close to empty) -- it's ok to be slow to allocate / register more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory when a new connection request arrives.  The memory obtained
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from this mpool should be able to be returned to the &quot;main&quot; mpool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; after it is consumed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; This is slightly better, but still...
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agreed; my reactions were pretty much the same as yours.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5. ...?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; What about moving posting of receive buffers into main thread. With
</span><br>
<span class="quotelev2">&gt;&gt; SRQ it is easy: don't post anything in CPC thread. Main thread will
</span><br>
<span class="quotelev2">&gt;&gt; prepost buffers automatically after first fragment received on the
</span><br>
<span class="quotelev2">&gt;&gt; endpoint (in btl_openib_handle_incoming()). With PPRQ it's more
</span><br>
<span class="quotelev2">&gt;&gt; complicated. What if we'll prepost dummy buffers (not from free list)
</span><br>
<span class="quotelev2">&gt;&gt; during IBCM connection stage and will run another three way handshake
</span><br>
<span class="quotelev2">&gt;&gt; protocol using those buffers, but from the main thread. We will need  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; prepost one buffer on the active side and two buffers on the passive  
</span><br>
<span class="quotelev2">&gt;&gt; side.
</span><br>
<span class="quotelev2">&gt;&gt;     
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
Currently I Iwarp do not have SRQ at and and IMHO the SRQ in not 
<br>
possible without HW flow control
<br>
So lets resolve the problem only for PPRQ  ?
<br>
<p><span class="quotelev1">&gt; Do we have a BSRQ restriction that there *must* be at least one PPRQ?   
</span><br>
<span class="quotelev1">&gt;   
</span><br>
No it is not such restriction.
<br>
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
I don't see such reason to add such restrictions, at least for IB.
<br>
We may add it for Iwarp only (actually we already have it for Iwarp)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3945.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3943.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3934.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3932.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
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
