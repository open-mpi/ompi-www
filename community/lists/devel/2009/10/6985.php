<?
$subject_val = "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 13:42:56 2009" -->
<!-- isoreceived="20091021174256" -->
<!-- sent="Wed, 21 Oct 2009 13:42:50 -0400" -->
<!-- isosent="20091021174250" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?" -->
<!-- id="A57D53B5-3486-40B9-805F-0EC6C9D97E24_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="06A9BD19-5C69-4B25-ABCD-F7AD519BB545_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2009-10-21 13:42:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6986.php">Jeff Squyres: "[OMPI devel] trac ticket emails"</a>
<li><strong>Previous message:</strong> <a href="6984.php">George Bosilca: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>In reply to:</strong> <a href="6984.php">George Bosilca: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6988.php">George Bosilca: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>Reply:</strong> <a href="6988.php">George Bosilca: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 21, 2009, at 1:25 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because MX doesn't provide a real RMA protocol, we created a fake  
</span><br>
<span class="quotelev1">&gt; one on top of point-to-point. The two peers have to agree on a  
</span><br>
<span class="quotelev1">&gt; unique tag, then the receiver posts it before the sender starts the  
</span><br>
<span class="quotelev1">&gt; send. However, as this is integrated with the real RMA protocol,  
</span><br>
<span class="quotelev1">&gt; where only one side knows about the completion of the RMA operation,  
</span><br>
<span class="quotelev1">&gt; we still exchange the ACK at the end. Therefore, the receiver  
</span><br>
<span class="quotelev1">&gt; doesn't need to know when the receive is completed, as it will get  
</span><br>
<span class="quotelev1">&gt; an ACK from the sender. At least this was the original idea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I can see how this might fails if the short ACK from the sender  
</span><br>
<span class="quotelev1">&gt; manage to pass the RMA operation on the wire. I was under the  
</span><br>
<span class="quotelev1">&gt; impression (based on the fact that MX respect the ordering) that the  
</span><br>
<span class="quotelev1">&gt; mx_send will trigger the completion only when all data is on the  
</span><br>
<span class="quotelev1">&gt; wire/nic memory so I supposed there is _absolutely_ no way for the  
</span><br>
<span class="quotelev1">&gt; ACK to bypass the last RMA fragments and to reach the receiver  
</span><br>
<span class="quotelev1">&gt; before the recv is really completed. If my supposition is not  
</span><br>
<span class="quotelev1">&gt; correct, then we should remove the mx_forget and make sure the that  
</span><br>
<span class="quotelev1">&gt; before we mark a fragment as completed we got both completions (the  
</span><br>
<span class="quotelev1">&gt; one from mx_recv and the remote one).
</span><br>
<p>George,
<br>
<p>When is the ACK sent? After the &quot;PUT&quot; completion returns (via  
<br>
mx_test(), etc) or simply after calling mx_isend() for the &quot;PUT&quot; but  
<br>
before the completion?
<br>
<p>If the former, the ACK cannot pass the data. If the latter, it is  
<br>
easily possible especially if there is a lot of contention (and thus a  
<br>
lot of route dispersion).
<br>
<p>MX only guarantees order of matching (two identical tags will match in  
<br>
order), not order of completion.
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6986.php">Jeff Squyres: "[OMPI devel] trac ticket emails"</a>
<li><strong>Previous message:</strong> <a href="6984.php">George Bosilca: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>In reply to:</strong> <a href="6984.php">George Bosilca: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6988.php">George Bosilca: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>Reply:</strong> <a href="6988.php">George Bosilca: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
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
