<?
$subject_val = "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 15:34:20 2009" -->
<!-- isoreceived="20091021193420" -->
<!-- sent="Wed, 21 Oct 2009 21:32:46 +0200" -->
<!-- isosent="20091021193246" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?" -->
<!-- id="4ADF61DE.9030407_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AEA53D90-E794-4645-87FB-70BC991524A1_at_eecs.utk.edu" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 15:32:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6992.php">Scott Atchley: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>Previous message:</strong> <a href="6990.php">Jeff Squyres: "[OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>In reply to:</strong> <a href="6988.php">George Bosilca: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6992.php">Scott Atchley: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>Reply:</strong> <a href="6992.php">Scott Atchley: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; On Oct 21, 2009, at 13:42 , Scott Atchley wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 21, 2009, at 1:25 PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Because MX doesn't provide a real RMA protocol, we created a fake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one on top of point-to-point. The two peers have to agree on a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unique tag, then the receiver posts it before the sender starts the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; send. However, as this is integrated with the real RMA protocol,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where only one side knows about the completion of the RMA operation,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we still exchange the ACK at the end. Therefore, the receiver
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't need to know when the receive is completed, as it will get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an ACK from the sender. At least this was the original idea.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I can see how this might fails if the short ACK from the sender
</span><br>
<span class="quotelev3">&gt;&gt;&gt; manage to pass the RMA operation on the wire. I was under the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; impression (based on the fact that MX respect the ordering) that the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mx_send will trigger the completion only when all data is on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wire/nic memory so I supposed there is _absolutely_ no way for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ACK to bypass the last RMA fragments and to reach the receiver
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before the recv is really completed. If my supposition is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correct, then we should remove the mx_forget and make sure the that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before we mark a fragment as completed we got both completions (the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one from mx_recv and the remote one).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When is the ACK sent? After the &quot;PUT&quot; completion returns (via
</span><br>
<span class="quotelev2">&gt;&gt; mx_test(), etc) or simply after calling mx_isend() for the &quot;PUT&quot; but
</span><br>
<span class="quotelev2">&gt;&gt; before the completion?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ACK is sent by the PML layer. If I'm not mistaken, it is sent when
</span><br>
<span class="quotelev1">&gt; the completion callback is triggered, which should happen only when
</span><br>
<span class="quotelev1">&gt; the MX BTL detect the completion of the mx_isend (using the mx_test).
</span><br>
<span class="quotelev1">&gt; Therefore, I think the ACK is sent in response to the completion of
</span><br>
<span class="quotelev1">&gt; the mx_isend.
</span><br>
<p>Before or after mx_test() doesn't actually matter if it's a
<br>
small/medium. Even if the send(PUT) completes in mx_test(), the data
<br>
could still be on the wire in case of packet loss or so: if it's a
<br>
tiny/small/medium message (it's was a medium in my crash), the MX lib
<br>
opportunistically completes the request on the sender before it's
<br>
actually acked by the receiver. Matching is in order, request completion
<br>
is not. There's no strong delivery guarantee here.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6992.php">Scott Atchley: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>Previous message:</strong> <a href="6990.php">Jeff Squyres: "[OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>In reply to:</strong> <a href="6988.php">George Bosilca: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6992.php">Scott Atchley: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>Reply:</strong> <a href="6992.php">Scott Atchley: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
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
