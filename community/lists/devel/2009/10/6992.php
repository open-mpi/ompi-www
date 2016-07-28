<?
$subject_val = "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 16:02:14 2009" -->
<!-- isoreceived="20091021200214" -->
<!-- sent="Wed, 21 Oct 2009 16:02:01 -0400" -->
<!-- isosent="20091021200201" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?" -->
<!-- id="6A3FB1B7-B341-424C-88AE-F49C5C02314E_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4ADF61DE.9030407_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 16:02:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6993.php">Lisandro Dalcin: "[OMPI devel] MPI_Group_{incl|exc} with nranks=0 and ranks=NULL"</a>
<li><strong>Previous message:</strong> <a href="6991.php">Brice Goglin: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>In reply to:</strong> <a href="6991.php">Brice Goglin: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 21, 2009, at 3:32 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 21, 2009, at 13:42 , Scott Atchley wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 21, 2009, at 1:25 PM, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Because MX doesn't provide a real RMA protocol, we created a fake
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one on top of point-to-point. The two peers have to agree on a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unique tag, then the receiver posts it before the sender starts the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; send. However, as this is integrated with the real RMA protocol,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where only one side knows about the completion of the RMA  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; operation,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we still exchange the ACK at the end. Therefore, the receiver
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doesn't need to know when the receive is completed, as it will get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an ACK from the sender. At least this was the original idea.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But I can see how this might fails if the short ACK from the sender
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; manage to pass the RMA operation on the wire. I was under the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; impression (based on the fact that MX respect the ordering) that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mx_send will trigger the completion only when all data is on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wire/nic memory so I supposed there is _absolutely_ no way for the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ACK to bypass the last RMA fragments and to reach the receiver
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; before the recv is really completed. If my supposition is not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; correct, then we should remove the mx_forget and make sure the that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; before we mark a fragment as completed we got both completions (the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one from mx_recv and the remote one).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When is the ACK sent? After the &quot;PUT&quot; completion returns (via
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mx_test(), etc) or simply after calling mx_isend() for the &quot;PUT&quot; but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before the completion?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The ACK is sent by the PML layer. If I'm not mistaken, it is sent  
</span><br>
<span class="quotelev2">&gt;&gt; when
</span><br>
<span class="quotelev2">&gt;&gt; the completion callback is triggered, which should happen only when
</span><br>
<span class="quotelev2">&gt;&gt; the MX BTL detect the completion of the mx_isend (using the mx_test).
</span><br>
<span class="quotelev2">&gt;&gt; Therefore, I think the ACK is sent in response to the completion of
</span><br>
<span class="quotelev2">&gt;&gt; the mx_isend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before or after mx_test() doesn't actually matter if it's a
</span><br>
<span class="quotelev1">&gt; small/medium. Even if the send(PUT) completes in mx_test(), the data
</span><br>
<span class="quotelev1">&gt; could still be on the wire in case of packet loss or so: if it's a
</span><br>
<span class="quotelev1">&gt; tiny/small/medium message (it's was a medium in my crash), the MX lib
</span><br>
<span class="quotelev1">&gt; opportunistically completes the request on the sender before it's
</span><br>
<span class="quotelev1">&gt; actually acked by the receiver. Matching is in order, request  
</span><br>
<span class="quotelev1">&gt; completion
</span><br>
<span class="quotelev1">&gt; is not. There's no strong delivery guarantee here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<p>Yes, I was thinking of the rendezvous case (&gt;32 kB) only.
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6993.php">Lisandro Dalcin: "[OMPI devel] MPI_Group_{incl|exc} with nranks=0 and ranks=NULL"</a>
<li><strong>Previous message:</strong> <a href="6991.php">Brice Goglin: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>In reply to:</strong> <a href="6991.php">Brice Goglin: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<!-- nextthread="start" -->
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
