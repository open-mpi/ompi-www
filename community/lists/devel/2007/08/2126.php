<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 11:33:16 2007" -->
<!-- isoreceived="20070813153316" -->
<!-- sent="Mon, 13 Aug 2007 11:33:09 -0400" -->
<!-- isosent="20070813153309" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="767125A7-E2FC-4414-97A5-A5A7640A0D7B_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46C0789A.3020805_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2007-08-13 11:33:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2127.php">Brian Barrett: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2125.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2124.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2127.php">Brian Barrett: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2127.php">Brian Barrett: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2128.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 13, 2007, at 11:28 AM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I guess reading the graph that Pasha sent is difficult; Pasha -- can
</span><br>
<span class="quotelev2">&gt;&gt; you send the actual numbers?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Ok here is the numbers on my machines:
</span><br>
<span class="quotelev1">&gt; 0 bytes
</span><br>
<span class="quotelev1">&gt; mvapich with header caching: 1.56
</span><br>
<span class="quotelev1">&gt; mvapich without  header caching: 1.79
</span><br>
<span class="quotelev1">&gt; ompi 1.2: 1.59
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So on zero bytes ompi not so bad. Also we can see that header caching
</span><br>
<span class="quotelev1">&gt; decrease the mvapich latency on 0.23
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1 bytes
</span><br>
<span class="quotelev1">&gt; mvapich with header caching: 1.58
</span><br>
<span class="quotelev1">&gt; mvapich without  header caching: 1.83
</span><br>
<span class="quotelev1">&gt; ompi 1.2: 1.73
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And here ompi make some latency jump.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In mvapich the header caching decrease the header size from 56bytes to
</span><br>
<span class="quotelev1">&gt; 12bytes.
</span><br>
<span class="quotelev1">&gt; What is the header size (pml + btl) in ompi ?
</span><br>
<p>The match header size is 16 bytes, so it looks like ours is already  
<br>
optimized ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha
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
<li><strong>Next message:</strong> <a href="2127.php">Brian Barrett: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2125.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2124.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2127.php">Brian Barrett: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2127.php">Brian Barrett: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2128.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
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
