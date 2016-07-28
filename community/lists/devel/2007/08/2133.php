<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 14:01:29 2007" -->
<!-- isoreceived="20070813180129" -->
<!-- sent="Mon, 13 Aug 2007 14:00:03 -0400" -->
<!-- isosent="20070813180003" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="C2E61463.A0E9%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="61377607-3106-44FE-B617-0C247784E6B3_at_lanl.gov" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 14:00:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2134.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2132.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2129.php">Galen Shipman: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2120.php">Christian Bell: "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/13/07 12:34 PM, &quot;Galen Shipman&quot; &lt;gshipman_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ok here is the numbers on my machines:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0 bytes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mvapich with header caching: 1.56
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mvapich without  header caching: 1.79
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi 1.2: 1.59
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So on zero bytes ompi not so bad. Also we can see that header
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; caching
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; decrease the mvapich latency on 0.23
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 bytes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mvapich with header caching: 1.58
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mvapich without  header caching: 1.83
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi 1.2: 1.73
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this just convertor initialization cost?
</span><br>
<p>Last night I measured the cost of the convertor initialization in ob1 on my
<br>
dual processor mac, using ompi-tests/simple/ping/mpi-ping, and it costs 0.02
<br>
to 0.03 microseconds. To be specific, I commented out the check for 0 byte
<br>
message size, and the latency went up from about 0.59 usec (this is with
<br>
modified code in tmp/latency) to about 0.62 usec.
<br>
<p>Rich
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Galen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And here ompi make some latency jump.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In mvapich the header caching decrease the header size from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 56bytes to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 12bytes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What is the header size (pml + btl) in ompi ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The match header size is 16 bytes, so it looks like ours is already
</span><br>
<span class="quotelev3">&gt;&gt;&gt; optimized ...
</span><br>
<span class="quotelev2">&gt;&gt; So for 0 bytes message we are sending only 16bytes on the wire , is it
</span><br>
<span class="quotelev2">&gt;&gt; correct ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Pasha.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Pasha
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="2134.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2132.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2129.php">Galen Shipman: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2120.php">Christian Bell: "Re: [OMPI devel] openib btl header caching"</a>
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
