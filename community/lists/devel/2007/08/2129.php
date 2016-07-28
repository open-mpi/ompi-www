<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 12:35:11 2007" -->
<!-- isoreceived="20070813163511" -->
<!-- sent="Mon, 13 Aug 2007 10:34:24 -0600" -->
<!-- isosent="20070813163424" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="61377607-3106-44FE-B617-0C247784E6B3_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46C07E26.10602_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 12:34:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2130.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2128.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2128.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2133.php">Richard Graham: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2133.php">Richard Graham: "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
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
<span class="quotelev3">&gt;&gt;&gt; So on zero bytes ompi not so bad. Also we can see that header  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; caching
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
<p><p>Is this just convertor initialization cost?
<br>
<p>- Galen
<br>
<p><span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And here ompi make some latency jump.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In mvapich the header caching decrease the header size from  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 56bytes to
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
<span class="quotelev1">&gt; So for 0 bytes message we are sending only 16bytes on the wire , is it
</span><br>
<span class="quotelev1">&gt; correct ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pasha
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="2130.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2128.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2128.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2133.php">Richard Graham: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2133.php">Richard Graham: "Re: [OMPI devel] openib btl header caching"</a>
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
