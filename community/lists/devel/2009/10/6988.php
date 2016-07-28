<?
$subject_val = "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 14:06:43 2009" -->
<!-- isoreceived="20091021180643" -->
<!-- sent="Wed, 21 Oct 2009 14:06:33 -0400" -->
<!-- isosent="20091021180633" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?" -->
<!-- id="AEA53D90-E794-4645-87FB-70BC991524A1_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A57D53B5-3486-40B9-805F-0EC6C9D97E24_at_myri.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 14:06:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6989.php">Ralph Castain: "Re: [OMPI devel] Trunk is brokem ?"</a>
<li><strong>Previous message:</strong> <a href="6987.php">Jeff Squyres: "Re: [OMPI devel] trac ticket emails"</a>
<li><strong>In reply to:</strong> <a href="6985.php">Scott Atchley: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6991.php">Brice Goglin: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>Reply:</strong> <a href="6991.php">Brice Goglin: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 21, 2009, at 13:42 , Scott Atchley wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 21, 2009, at 1:25 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Because MX doesn't provide a real RMA protocol, we created a fake  
</span><br>
<span class="quotelev2">&gt;&gt; one on top of point-to-point. The two peers have to agree on a  
</span><br>
<span class="quotelev2">&gt;&gt; unique tag, then the receiver posts it before the sender starts the  
</span><br>
<span class="quotelev2">&gt;&gt; send. However, as this is integrated with the real RMA protocol,  
</span><br>
<span class="quotelev2">&gt;&gt; where only one side knows about the completion of the RMA  
</span><br>
<span class="quotelev2">&gt;&gt; operation, we still exchange the ACK at the end. Therefore, the  
</span><br>
<span class="quotelev2">&gt;&gt; receiver doesn't need to know when the receive is completed, as it  
</span><br>
<span class="quotelev2">&gt;&gt; will get an ACK from the sender. At least this was the original idea.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I can see how this might fails if the short ACK from the sender  
</span><br>
<span class="quotelev2">&gt;&gt; manage to pass the RMA operation on the wire. I was under the  
</span><br>
<span class="quotelev2">&gt;&gt; impression (based on the fact that MX respect the ordering) that  
</span><br>
<span class="quotelev2">&gt;&gt; the mx_send will trigger the completion only when all data is on  
</span><br>
<span class="quotelev2">&gt;&gt; the wire/nic memory so I supposed there is _absolutely_ no way for  
</span><br>
<span class="quotelev2">&gt;&gt; the ACK to bypass the last RMA fragments and to reach the receiver  
</span><br>
<span class="quotelev2">&gt;&gt; before the recv is really completed. If my supposition is not  
</span><br>
<span class="quotelev2">&gt;&gt; correct, then we should remove the mx_forget and make sure the that  
</span><br>
<span class="quotelev2">&gt;&gt; before we mark a fragment as completed we got both completions (the  
</span><br>
<span class="quotelev2">&gt;&gt; one from mx_recv and the remote one).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When is the ACK sent? After the &quot;PUT&quot; completion returns (via mx_test 
</span><br>
<span class="quotelev1">&gt; (), etc) or simply after calling mx_isend() for the &quot;PUT&quot; but before  
</span><br>
<span class="quotelev1">&gt; the completion?
</span><br>
<p>The ACK is sent by the PML layer. If I'm not mistaken, it is sent when  
<br>
the completion callback is triggered, which should happen only when  
<br>
the MX BTL detect the completion of the mx_isend (using the mx_test).  
<br>
Therefore, I think the ACK is sent in response to the completion of  
<br>
the mx_isend.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; If the former, the ACK cannot pass the data. If the latter, it is  
</span><br>
<span class="quotelev1">&gt; easily possible especially if there is a lot of contention (and thus  
</span><br>
<span class="quotelev1">&gt; a lot of route dispersion).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MX only guarantees order of matching (two identical tags will match  
</span><br>
<span class="quotelev1">&gt; in order), not order of completion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
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
<li><strong>Next message:</strong> <a href="6989.php">Ralph Castain: "Re: [OMPI devel] Trunk is brokem ?"</a>
<li><strong>Previous message:</strong> <a href="6987.php">Jeff Squyres: "Re: [OMPI devel] trac ticket emails"</a>
<li><strong>In reply to:</strong> <a href="6985.php">Scott Atchley: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6991.php">Brice Goglin: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>Reply:</strong> <a href="6991.php">Brice Goglin: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
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
