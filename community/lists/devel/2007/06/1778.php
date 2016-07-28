<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 27 10:06:23 2007" -->
<!-- isoreceived="20070627140623" -->
<!-- sent="Wed, 27 Jun 2007 17:06:17 +0300" -->
<!-- isosent="20070627140617" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Improve OB1 performance when multiple NICs are available" -->
<!-- id="20070627140617.GM1164_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0D330A29-F7B0-40C3-8A1F-10BA417E4648_at_cs.utk.edu" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-27 10:06:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1779.php">Terry D. Dontje: "Re: [OMPI devel] Modex"</a>
<li><strong>Previous message:</strong> <a href="1777.php">Brian Barrett: "Re: [OMPI devel] Modex"</a>
<li><strong>In reply to:</strong> <a href="1771.php">George Bosilca: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1780.php">George Bosilca: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Reply:</strong> <a href="1780.php">George Bosilca: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jun 26, 2007 at 05:42:05PM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Gleb,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Simplifying the code and getting better performance is always a good  
</span><br>
<span class="quotelev1">&gt; approach (at least from my perspective). However, your patch still  
</span><br>
<span class="quotelev1">&gt; dispatch the messages over the BTLs in a round robin fashion, which  
</span><br>
<span class="quotelev1">&gt; doesn't look to me as the best approach. How about merging your patch  
</span><br>
<span class="quotelev1">&gt; and mine ? We will get a better data distribution and a better  
</span><br>
<span class="quotelev1">&gt; scheduling (on-demand based on the network load).
</span><br>
Attached patch adds this on top of my previous patch. The performance on
<br>
my setup is little bit worse with this patch applied.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Btw, did you compare my patch with yours on your multi-NIC system ?  
</span><br>
<span class="quotelev1">&gt; With my patch on our system with 3 networks (2*1Gbs and one 100 Mbs)  
</span><br>
<span class="quotelev1">&gt; I'm close to 99% of the total bandwidth. I'll try to see what I get  
</span><br>
<span class="quotelev1">&gt; with yours.
</span><br>
Your patch SEGV on my setup. So can check and compare. I see this in
<br>
your patch:
<br>
+     reg = recvreq-&gt;req_rdma[bml_btl-&gt;btl_index].btl_reg;
<br>
But bml_btl-&gt;btl_index is not an index in req_rdma array and actually we
<br>
never initialize bml_btl-&gt;btl_index at all, so may be it would be a good
<br>
idea to remove this field at all. TCP never use reg so no problem there,
<br>
but for IB it should be valid. 
<br>
<p><pre>
--
			Gleb.

</pre>
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1778/patch.diff">patch.diff</a>
</ul>
<!-- attachment="patch.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1779.php">Terry D. Dontje: "Re: [OMPI devel] Modex"</a>
<li><strong>Previous message:</strong> <a href="1777.php">Brian Barrett: "Re: [OMPI devel] Modex"</a>
<li><strong>In reply to:</strong> <a href="1771.php">George Bosilca: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1780.php">George Bosilca: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Reply:</strong> <a href="1780.php">George Bosilca: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
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
