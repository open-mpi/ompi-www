<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 08:54:18 2007" -->
<!-- isoreceived="20070813125418" -->
<!-- sent="Mon, 13 Aug 2007 08:54:08 -0400" -->
<!-- isosent="20070813125408" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="B293025E-7976-4A23-8A20-609CCA15F565_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46C010E8.6050206_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 08:54:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2112.php">Tim Prins: "[OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>Previous message:</strong> <a href="2110.php">Terry D. Dontje: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2108.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2115.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 13, 2007, at 4:06 AM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Any objections?  We can discuss what approaches we want to take
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (there's going to be some complications because of the PML driver,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; etc.); perhaps in the Tuesday Mellanox teleconf...?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My main objection is that the only reason you propose to do this  
</span><br>
<span class="quotelev2">&gt;&gt; is some
</span><br>
<span class="quotelev2">&gt;&gt; bogus benchmark?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Pallas, Presta (as i know) also use static rank. So lets start to fix
</span><br>
<span class="quotelev1">&gt; all &quot;bogus&quot; benchmarks :-) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha.
</span><br>
<p>Why not:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i=0; i &lt; ITERATIONS; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tag = i%MPI_TAG_UB;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>On a related note, we have often discussed the fact that benchmarks  
<br>
only give an upper-bound on performance. I would expect that some  
<br>
users would want to also know the lower-bound. For example, set a  
<br>
flag that causes the benchmark to use a different buffer each time in  
<br>
order to cause the registration cache to miss. I am sure we could  
<br>
come up with some other cases.
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2112.php">Tim Prins: "[OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>Previous message:</strong> <a href="2110.php">Terry D. Dontje: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2108.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2115.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
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
