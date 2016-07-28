<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 27 14:39:01 2007" -->
<!-- isoreceived="20070627183901" -->
<!-- sent="Wed, 27 Jun 2007 21:38:55 +0300" -->
<!-- isosent="20070627183855" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Improve OB1 performance when multiple NICs are available" -->
<!-- id="20070627183855.GA12301_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F9291DE3-FD0C-422E-B819-BC13487EDBED_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2007-06-27 14:38:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1782.php">Jeff Squyres: "Re: [OMPI devel] problem with openib, was: send/recv during initialization"</a>
<li><strong>Previous message:</strong> <a href="1780.php">George Bosilca: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>In reply to:</strong> <a href="1780.php">George Bosilca: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1785.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Reply:</strong> <a href="1785.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jun 27, 2007 at 02:27:34PM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 27, 2007, at 10:06 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Btw, did you compare my patch with yours on your multi-NIC system ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;With my patch on our system with 3 networks (2*1Gbs and one 100 Mbs)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;I'm close to 99% of the total bandwidth. I'll try to see what I get
</span><br>
<span class="quotelev3">&gt; &gt;&gt;with yours.
</span><br>
<span class="quotelev2">&gt; &gt;Your patch SEGV on my setup. So can check and compare. I see this in
</span><br>
<span class="quotelev2">&gt; &gt;your patch:
</span><br>
<span class="quotelev2">&gt; &gt;+     reg = recvreq-&gt;req_rdma[bml_btl-&gt;btl_index].btl_reg;
</span><br>
<span class="quotelev2">&gt; &gt;But bml_btl-&gt;btl_index is not an index in req_rdma array and  
</span><br>
<span class="quotelev2">&gt; &gt;actually we
</span><br>
<span class="quotelev2">&gt; &gt;never initialize bml_btl-&gt;btl_index at all, so may be it would be a  
</span><br>
<span class="quotelev2">&gt; &gt;good
</span><br>
<span class="quotelev2">&gt; &gt;idea to remove this field at all. TCP never use reg so no problem  
</span><br>
<span class="quotelev2">&gt; &gt;there,
</span><br>
<span class="quotelev2">&gt; &gt;but for IB it should be valid.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My patch is so old I don't remember. I was quite sure that in the  
</span><br>
<span class="quotelev1">&gt; beginning I copy and paste from the other function, the one that  
</span><br>
<span class="quotelev1">&gt; don't take the BTL as an argument. If you replace in the faulty line  
</span><br>
<span class="quotelev1">&gt; bml_btl-&gt;btl_index by recvreq-&gt;req_rdma_idx that should work again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
No it will not.  recvreq-&gt;req_rdma[bml_btl-&gt;btl_index].bml_btl not
<br>
necessarily should be equal to bml_btl that was passed to the function
<br>
so recvreq-&gt;req_rdma[bml_btl-&gt;btl_index].reg may point to wrong
<br>
registration. The right thing to do is to loop over all entries of
<br>
recvreq-&gt;req_rdma array and find entry corespondent to provided bml_btl
<br>
and that is what I am doing in my patch.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1782.php">Jeff Squyres: "Re: [OMPI devel] problem with openib, was: send/recv during initialization"</a>
<li><strong>Previous message:</strong> <a href="1780.php">George Bosilca: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>In reply to:</strong> <a href="1780.php">George Bosilca: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1785.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Reply:</strong> <a href="1785.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
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
