<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 11:08:11 2007" -->
<!-- isoreceived="20070813150811" -->
<!-- sent="Mon, 13 Aug 2007 11:07:59 -0400" -->
<!-- isosent="20070813150759" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="B8A9E161-F117-46DD-B91C-A8CE4A588B82_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="14CEA6D4-97D0-4D39-9D50-452830D5BF0F_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2007-08-13 11:07:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2122.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2120.php">Christian Bell: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2119.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2125.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2125.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 13, 2007, at 10:49 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; You want a dirtier trick for benchmarks ... Here it is ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Implement a compression like algorithm based on checksum. The data-
</span><br>
<span class="quotelev1">&gt; type engine can compute a checksum for each fragment and if the
</span><br>
<span class="quotelev1">&gt; checksum match one in the peer [limitted] history (so we can claim
</span><br>
<span class="quotelev1">&gt; our communication protocol is adaptive), then we replace the actual
</span><br>
<span class="quotelev1">&gt; message content with the matched id in the common history. Checksums
</span><br>
<span class="quotelev1">&gt; are fairly cheap, lookup in a balanced tree is cheap too, so we will
</span><br>
<span class="quotelev1">&gt; end up with a lot of improvement (as instead of sending a full
</span><br>
<span class="quotelev1">&gt; fragment we will end-up sending one int). Based on the way most of
</span><br>
<span class="quotelev1">&gt; the benchmarks initialize the user data  (when they don't everything
</span><br>
<span class="quotelev1">&gt; is mostly 0), this trick might work on all cases for the
</span><br>
<span class="quotelev1">&gt; benchmarks ...
</span><br>
<p>Are you sure you didn't want to publish a paper about this before you  
<br>
sent it across a public list?  Now someone else is likely to &quot;invent&quot;  
<br>
this scheme and get credit for it.  ;-)
<br>
<p>Such a scheme is certainly possible, but I see even less use for it  
<br>
than use cases for the existing microbenchmarks.  Specifically,  
<br>
header caching *can* happen in real applications (i.e., repeatedly  
<br>
send short messages with the same MPI signature), but repeatedly  
<br>
sending to the same peer with exactly the same signature *and*  
<br>
exactly the same &quot;long-enough&quot; data (i.e., more than a small number  
<br>
of ints that an app could use for its own message data caching) is  
<br>
indicative of a poorly-written MPI application IMHO.
<br>
<p><span class="quotelev1">&gt; But don't complain if your Linpack run fails.
</span><br>
<p>I assume you're talking about bugs in the implementation; not a  
<br>
problem with the approach, right?
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
<li><strong>Next message:</strong> <a href="2122.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2120.php">Christian Bell: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2119.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2125.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2125.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
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
