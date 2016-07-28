<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 11:27:02 2007" -->
<!-- isoreceived="20070813152702" -->
<!-- sent="Mon, 13 Aug 2007 18:28:26 +0300" -->
<!-- isosent="20070813152826" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="46C0789A.3020805_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6E08B9BA-54AE-47B9-BC6B-F6BA2595122E_at_cisco.com" -->
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
<strong>Date:</strong> 2007-08-13 11:28:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2125.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2123.php">Galen Shipman: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2115.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2126.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2126.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I guess reading the graph that Pasha sent is difficult; Pasha -- can  
</span><br>
<span class="quotelev1">&gt; you send the actual numbers?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Ok here is the numbers on my machines:
<br>
0 bytes
<br>
mvapich with header caching: 1.56
<br>
mvapich without  header caching: 1.79
<br>
ompi 1.2: 1.59
<br>
<p>So on zero bytes ompi not so bad. Also we can see that header caching 
<br>
decrease the mvapich latency on 0.23
<br>
<p>1 bytes
<br>
mvapich with header caching: 1.58
<br>
mvapich without  header caching: 1.83
<br>
ompi 1.2: 1.73
<br>
<p>And here ompi make some latency jump.
<br>
<p>In mvapich the header caching decrease the header size from 56bytes to 
<br>
12bytes.
<br>
What is the header size (pml + btl) in ompi ?
<br>
<p>Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2125.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2123.php">Galen Shipman: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2115.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2126.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2126.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
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
