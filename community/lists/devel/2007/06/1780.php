<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 27 14:27:44 2007" -->
<!-- isoreceived="20070627182744" -->
<!-- sent="Wed, 27 Jun 2007 14:27:34 -0400" -->
<!-- isosent="20070627182734" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Improve OB1 performance when multiple NICs are available" -->
<!-- id="F9291DE3-FD0C-422E-B819-BC13487EDBED_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070627140617.GM1164_at_minantech.com" -->
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
<strong>Date:</strong> 2007-06-27 14:27:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1781.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Previous message:</strong> <a href="1779.php">Terry D. Dontje: "Re: [OMPI devel] Modex"</a>
<li><strong>In reply to:</strong> <a href="1778.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1781.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Reply:</strong> <a href="1781.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 27, 2007, at 10:06 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Btw, did you compare my patch with yours on your multi-NIC system ?
</span><br>
<span class="quotelev2">&gt;&gt; With my patch on our system with 3 networks (2*1Gbs and one 100 Mbs)
</span><br>
<span class="quotelev2">&gt;&gt; I'm close to 99% of the total bandwidth. I'll try to see what I get
</span><br>
<span class="quotelev2">&gt;&gt; with yours.
</span><br>
<span class="quotelev1">&gt; Your patch SEGV on my setup. So can check and compare. I see this in
</span><br>
<span class="quotelev1">&gt; your patch:
</span><br>
<span class="quotelev1">&gt; +     reg = recvreq-&gt;req_rdma[bml_btl-&gt;btl_index].btl_reg;
</span><br>
<span class="quotelev1">&gt; But bml_btl-&gt;btl_index is not an index in req_rdma array and  
</span><br>
<span class="quotelev1">&gt; actually we
</span><br>
<span class="quotelev1">&gt; never initialize bml_btl-&gt;btl_index at all, so may be it would be a  
</span><br>
<span class="quotelev1">&gt; good
</span><br>
<span class="quotelev1">&gt; idea to remove this field at all. TCP never use reg so no problem  
</span><br>
<span class="quotelev1">&gt; there,
</span><br>
<span class="quotelev1">&gt; but for IB it should be valid.
</span><br>
<p>My patch is so old I don't remember. I was quite sure that in the  
<br>
beginning I copy and paste from the other function, the one that  
<br>
don't take the BTL as an argument. If you replace in the faulty line  
<br>
bml_btl-&gt;btl_index by recvreq-&gt;req_rdma_idx that should work again.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1780/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1781.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Previous message:</strong> <a href="1779.php">Terry D. Dontje: "Re: [OMPI devel] Modex"</a>
<li><strong>In reply to:</strong> <a href="1778.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1781.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Reply:</strong> <a href="1781.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
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
