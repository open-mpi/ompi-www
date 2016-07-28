<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 12:39:51 2007" -->
<!-- isoreceived="20070813163951" -->
<!-- sent="Mon, 13 Aug 2007 19:41:30 +0300" -->
<!-- isosent="20070813164130" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="46C089BA.10801_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D100BCCF-1053-4C55-86F3-08B546CF1558_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-08-13 12:41:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2131.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2129.php">Galen Shipman: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2127.php">Brian Barrett: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2128.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Aug 13, 2007, at 9:33 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 13, 2007, at 11:28 AM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I guess reading the graph that Pasha sent is difficult; Pasha -- can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you send the actual numbers?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok here is the numbers on my machines:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0 bytes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mvapich with header caching: 1.56
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mvapich without  header caching: 1.79
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi 1.2: 1.59
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So on zero bytes ompi not so bad. Also we can see that header caching
</span><br>
<span class="quotelev3">&gt;&gt;&gt; decrease the mvapich latency on 0.23
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 bytes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mvapich with header caching: 1.58
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mvapich without  header caching: 1.83
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi 1.2: 1.73
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And here ompi make some latency jump.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In mvapich the header caching decrease the header size from 56bytes to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 12bytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is the header size (pml + btl) in ompi ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The match header size is 16 bytes, so it looks like ours is already
</span><br>
<span class="quotelev2">&gt;&gt; optimized ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha -- Is your build of Open MPI built with 
</span><br>
<span class="quotelev1">&gt; --disable-heterogeneous?  If not, our headers all grow slightly to 
</span><br>
<span class="quotelev1">&gt; support heterogeneous operations.  For the heterogeneous case, a 1 
</span><br>
<span class="quotelev1">&gt; byte message includes:
</span><br>
I didn't build with &quot;--disable-heterogeneous&quot;. So the heterogeneous 
<br>
support was enabled in the build
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   16 bytes for the match header
</span><br>
<span class="quotelev1">&gt;   4 bytes for the Open IB header
</span><br>
<span class="quotelev1">&gt;   1 byte for the payload
</span><br>
<span class="quotelev1">&gt;  ----
</span><br>
<span class="quotelev1">&gt;   21 bytes total
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are using eager RDMA, there's an extra 4 bytes for the RDMA 
</span><br>
<span class="quotelev1">&gt; length in the footer.  Without heterogeneous support, 2 bytes get 
</span><br>
<span class="quotelev1">&gt; knocked off the size of the match header, so the whole thing will be 
</span><br>
<span class="quotelev1">&gt; 19 bytes (+ 4 for the eager RDMA footer).
</span><br>
I used eager rdma - it is faster than send.  So the message size on the 
<br>
wire for 1 byte in my case was - 25bytes  VS 13bytes in mvapich. And If 
<br>
i will --disable-heterogeneous it will decrease 2 bytes. So it sound 
<br>
like we are pretty optimized.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are also considerably more ifs in the code if heterogeneous is 
</span><br>
<span class="quotelev1">&gt; used, especially on x86 machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2131.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2129.php">Galen Shipman: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2127.php">Brian Barrett: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2128.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
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
