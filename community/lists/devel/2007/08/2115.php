<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 10:34:29 2007" -->
<!-- isoreceived="20070813143429" -->
<!-- sent="Mon, 13 Aug 2007 10:34:20 -0400" -->
<!-- isosent="20070813143420" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="6E08B9BA-54AE-47B9-BC6B-F6BA2595122E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070812194919.GA23182_at_minantech.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 10:34:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2116.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2114.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>In reply to:</strong> <a href="2107.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2117.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2117.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2124.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 12, 2007, at 3:49 PM, Gleb Natapov wrote:
<br>
<p><span class="quotelev2">&gt;&gt; - Mellanox tested MVAPICH with the header caching; latency was around
</span><br>
<span class="quotelev2">&gt;&gt; 1.4us
</span><br>
<span class="quotelev2">&gt;&gt; - Mellanox tested MVAPICH without the header caching; latency was
</span><br>
<span class="quotelev2">&gt;&gt; around 1.9us
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; As far as I remember Mellanox results and according to our testing
</span><br>
<span class="quotelev1">&gt; difference between MVAPICH with header caching and OMPI is 0.2-0.3us.
</span><br>
<span class="quotelev1">&gt; Not 0.5us. And MVAPICH without header caching is actually worse then
</span><br>
<span class="quotelev1">&gt; OMPI for small messages.
</span><br>
<p>I guess reading the graph that Pasha sent is difficult; Pasha -- can  
<br>
you send the actual numbers?
<br>
<p><span class="quotelev2">&gt;&gt; Given that OMPI is the lone outlier around 1.9us, I think we have no
</span><br>
<span class="quotelev2">&gt;&gt; choice except to implement the header caching and/or examine our
</span><br>
<span class="quotelev2">&gt;&gt; header to see if we can shrink it.  Mellanox has volunteered to
</span><br>
<span class="quotelev2">&gt;&gt; implement header caching in the openib btl.
</span><br>
<span class="quotelev1">&gt; I think we have a chose. Not implement header caching, but just  
</span><br>
<span class="quotelev1">&gt; change the
</span><br>
<span class="quotelev1">&gt; osu_latency benchmark to send each message with different tag :)
</span><br>
<p>If only.  :-)
<br>
<p>But that misses the point (and the fact that all the common ping-pong  
<br>
benchmarks use a single tag: NetPIPE, IMB, osu_latency, etc.).  *All  
<br>
other MPI's* give us latency around 1.4us, but Open MPI is around  
<br>
1.9us.  So we need to do something.
<br>
<p>Are we optimizing for a benchmark?  Yes.  But we have to do it.  Many  
<br>
people know that these benchmarks are fairly useless, but not enough  
<br>
-- too many customers do not, and education is not enough.  &quot;Sure  
<br>
this MPI looks slower but, really, it isn't.  Trust me; my name is  
<br>
Joe Isuzu.&quot;  That's a hard sell.
<br>
<p><span class="quotelev1">&gt; I am not against header caching per se, but if it will complicate code
</span><br>
<span class="quotelev1">&gt; even a little bit I don't think we should implemented it just to  
</span><br>
<span class="quotelev1">&gt; benefit one
</span><br>
<span class="quotelev1">&gt; fabricated benchmark (AFAIR before header caching was implemented in
</span><br>
<span class="quotelev1">&gt; MVAPICH mpi_latency actually sent messages with different tags).
</span><br>
<p>That may be true and a reason for us to wail and gnash our teeth, but  
<br>
it doesn't change the current reality.
<br>
<p><span class="quotelev1">&gt; Also there is really nothing to cache in openib BTL. Openin BTL  
</span><br>
<span class="quotelev1">&gt; header is 4
</span><br>
<span class="quotelev1">&gt; bytes long. The caching will have to be done in OB1 and there it will
</span><br>
<span class="quotelev1">&gt; affect every other interconnect.
</span><br>
<p>Surely there is *something* we can do -- what, exactly, is the  
<br>
objection to peeking inside the PML header down in the btl?  Is it  
<br>
really so horrible for a btl to look inside the upper layer's  
<br>
header?  I agree that the PML looking into a btl header would  
<br>
[obviously] be Bad.
<br>
<p>All this being said -- is there another reason to lower our latency?   
<br>
My main goal here is to lower the latency.  If header caching is  
<br>
unattractive, then another method would be fine.
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
<li><strong>Next message:</strong> <a href="2116.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2114.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>In reply to:</strong> <a href="2107.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2117.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2117.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2124.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
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
