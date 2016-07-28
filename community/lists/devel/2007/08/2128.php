<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 11:50:00 2007" -->
<!-- isoreceived="20070813155000" -->
<!-- sent="Mon, 13 Aug 2007 18:52:06 +0300" -->
<!-- isosent="20070813155206" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="46C07E26.10602_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="767125A7-E2FC-4414-97A5-A5A7640A0D7B_at_eecs.utk.edu" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 11:52:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2129.php">Galen Shipman: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2127.php">Brian Barrett: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2126.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2129.php">Galen Shipman: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2129.php">Galen Shipman: "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 13, 2007, at 11:28 AM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess reading the graph that Pasha sent is difficult; Pasha -- can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you send the actual numbers?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok here is the numbers on my machines:
</span><br>
<span class="quotelev2">&gt;&gt; 0 bytes
</span><br>
<span class="quotelev2">&gt;&gt; mvapich with header caching: 1.56
</span><br>
<span class="quotelev2">&gt;&gt; mvapich without  header caching: 1.79
</span><br>
<span class="quotelev2">&gt;&gt; ompi 1.2: 1.59
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So on zero bytes ompi not so bad. Also we can see that header caching
</span><br>
<span class="quotelev2">&gt;&gt; decrease the mvapich latency on 0.23
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1 bytes
</span><br>
<span class="quotelev2">&gt;&gt; mvapich with header caching: 1.58
</span><br>
<span class="quotelev2">&gt;&gt; mvapich without  header caching: 1.83
</span><br>
<span class="quotelev2">&gt;&gt; ompi 1.2: 1.73
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And here ompi make some latency jump.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In mvapich the header caching decrease the header size from 56bytes to
</span><br>
<span class="quotelev2">&gt;&gt; 12bytes.
</span><br>
<span class="quotelev2">&gt;&gt; What is the header size (pml + btl) in ompi ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The match header size is 16 bytes, so it looks like ours is already 
</span><br>
<span class="quotelev1">&gt; optimized ...
</span><br>
So for 0 bytes message we are sending only 16bytes on the wire , is it 
<br>
correct ?
<br>
<p><p>Pasha.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pasha
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2129.php">Galen Shipman: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2127.php">Brian Barrett: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2126.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2129.php">Galen Shipman: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2129.php">Galen Shipman: "Re: [OMPI devel] openib btl header caching"</a>
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
