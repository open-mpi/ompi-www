<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 11:44:12 2007" -->
<!-- isoreceived="20070813154412" -->
<!-- sent="Mon, 13 Aug 2007 09:43:48 -0600" -->
<!-- isosent="20070813154348" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="D100BCCF-1053-4C55-86F3-08B546CF1558_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 11:43:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2128.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2126.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2126.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2130.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2130.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 13, 2007, at 9:33 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 13, 2007, at 11:28 AM, Pavel Shamis (Pasha) wrote:
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
<span class="quotelev2">&gt;&gt; In mvapich the header caching decrease the header size from  
</span><br>
<span class="quotelev2">&gt;&gt; 56bytes to
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
<p>Pasha -- Is your build of Open MPI built with --disable- 
<br>
heterogeneous?  If not, our headers all grow slightly to support  
<br>
heterogeneous operations.  For the heterogeneous case, a 1 byte  
<br>
message includes:
<br>
<p>&nbsp;&nbsp;&nbsp;16 bytes for the match header
<br>
&nbsp;&nbsp;&nbsp;4 bytes for the Open IB header
<br>
&nbsp;&nbsp;&nbsp;1 byte for the payload
<br>
&nbsp;&nbsp;----
<br>
&nbsp;&nbsp;&nbsp;21 bytes total
<br>
<p>If you are using eager RDMA, there's an extra 4 bytes for the RDMA  
<br>
length in the footer.  Without heterogeneous support, 2 bytes get  
<br>
knocked off the size of the match header, so the whole thing will be  
<br>
19 bytes (+ 4 for the eager RDMA footer).
<br>
<p>There are also considerably more ifs in the code if heterogeneous is  
<br>
used, especially on x86 machines.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2128.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2126.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2126.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2130.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2130.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
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
