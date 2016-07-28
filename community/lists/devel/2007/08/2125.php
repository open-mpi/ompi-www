<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 11:28:36 2007" -->
<!-- isoreceived="20070813152836" -->
<!-- sent="Mon, 13 Aug 2007 11:28:28 -0400" -->
<!-- isosent="20070813152828" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="300C8212-F941-4AFF-AAEC-7D451DCF2780_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B8A9E161-F117-46DD-B91C-A8CE4A588B82_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 11:28:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2126.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2124.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2121.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2131.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2131.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 13, 2007, at 11:07 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Such a scheme is certainly possible, but I see even less use for it
</span><br>
<span class="quotelev1">&gt; than use cases for the existing microbenchmarks.  Specifically,
</span><br>
<span class="quotelev1">&gt; header caching *can* happen in real applications (i.e., repeatedly
</span><br>
<span class="quotelev1">&gt; send short messages with the same MPI signature), but repeatedly
</span><br>
<span class="quotelev1">&gt; sending to the same peer with exactly the same signature *and*
</span><br>
<span class="quotelev1">&gt; exactly the same &quot;long-enough&quot; data (i.e., more than a small number
</span><br>
<span class="quotelev1">&gt; of ints that an app could use for its own message data caching) is
</span><br>
<span class="quotelev1">&gt; indicative of a poorly-written MPI application IMHO.
</span><br>
<p>If you look at the message size distribution for most of the HPC  
<br>
applications (at least one that get investigated in the papers) you  
<br>
will see that very small messages are only an non-significant  
<br>
percentage of messages. As this &quot;optimization&quot; only address these  
<br>
kind of messages, I doubt there is any real benefit from applications  
<br>
point of view (obviously there will be few exceptions as usual). The  
<br>
header caching only make sense for very small messages (MVAPICH only  
<br>
implement header caching for messages up to 155 bytes [that's less  
<br>
than 20 doubles] if I remember well), which make it a real benchmark  
<br>
optimization.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But don't complain if your Linpack run fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume you're talking about bugs in the implementation; not a
</span><br>
<span class="quotelev1">&gt; problem with the approach, right?
</span><br>
<p>Of course, there is no apparent problem with my approach :) It is  
<br>
called an educated guess based on repetitive human behaviors analysis.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2126.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2124.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2121.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2131.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2131.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
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
