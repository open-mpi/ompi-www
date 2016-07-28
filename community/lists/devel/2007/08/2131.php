<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 12:56:21 2007" -->
<!-- isoreceived="20070813165621" -->
<!-- sent="Mon, 13 Aug 2007 12:56:15 -0400" -->
<!-- isosent="20070813165615" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="F15266A0-9B2E-49E4-9F9C-9AE5582E684C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="300C8212-F941-4AFF-AAEC-7D451DCF2780_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2007-08-13 12:56:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2132.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2130.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2125.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2111.php">Scott Atchley: "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 13, 2007, at 11:28 AM, George Bosilca wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Such a scheme is certainly possible, but I see even less use for it
</span><br>
<span class="quotelev2">&gt;&gt; than use cases for the existing microbenchmarks.  Specifically,
</span><br>
<span class="quotelev2">&gt;&gt; header caching *can* happen in real applications (i.e., repeatedly
</span><br>
<span class="quotelev2">&gt;&gt; send short messages with the same MPI signature), but repeatedly
</span><br>
<span class="quotelev2">&gt;&gt; sending to the same peer with exactly the same signature *and*
</span><br>
<span class="quotelev2">&gt;&gt; exactly the same &quot;long-enough&quot; data (i.e., more than a small number
</span><br>
<span class="quotelev2">&gt;&gt; of ints that an app could use for its own message data caching) is
</span><br>
<span class="quotelev2">&gt;&gt; indicative of a poorly-written MPI application IMHO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you look at the message size distribution for most of the HPC
</span><br>
<span class="quotelev1">&gt; applications (at least one that get investigated in the papers) you
</span><br>
<span class="quotelev1">&gt; will see that very small messages are only an non-significant
</span><br>
<span class="quotelev1">&gt; percentage of messages.
</span><br>
<p>This would be different than what Patrick has told us about Myricom's  
<br>
analysis of real world MPI applications and one of the strong points  
<br>
of QLogic's HCAs (that it's all about short message latency /  
<br>
injection rate; bandwidth issues are [at least currently]  
<br>
secondary).  :-)
<br>
<p><span class="quotelev1">&gt; As this &quot;optimization&quot; only address these
</span><br>
<span class="quotelev1">&gt; kind of messages, I doubt there is any real benefit from applications
</span><br>
<span class="quotelev1">&gt; point of view (obviously there will be few exceptions as usual). The
</span><br>
<span class="quotelev1">&gt; header caching only make sense for very small messages (MVAPICH only
</span><br>
<span class="quotelev1">&gt; implement header caching for messages up to 155 bytes [that's less
</span><br>
<span class="quotelev1">&gt; than 20 doubles] if I remember well), which make it a real benchmark
</span><br>
<span class="quotelev1">&gt; optimization.
</span><br>
<p>I don't have enough data to say.  But I'm sure there are at least  
<br>
*some* applications out there that would benefit from it.  Probably  
<br>
somewhere between 1 and 99%.  ;-)
<br>
<p>But just to reiterate/be clear: my goal here is to reduce latency.   
<br>
If header caching is not the way to go, then so be it.
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
<li><strong>Next message:</strong> <a href="2132.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2130.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2125.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2111.php">Scott Atchley: "Re: [OMPI devel] openib btl header caching"</a>
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
