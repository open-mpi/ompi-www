<?
$subject_val = "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 13:25:37 2009" -->
<!-- isoreceived="20091021172537" -->
<!-- sent="Wed, 21 Oct 2009 13:25:28 -0400" -->
<!-- isosent="20091021172528" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?" -->
<!-- id="06A9BD19-5C69-4B25-ABCD-F7AD519BB545_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4ADEC75A.6030405_at_inria.fr" -->
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
<strong>Date:</strong> 2009-10-21 13:25:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6985.php">Scott Atchley: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>Previous message:</strong> <a href="6983.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Trunk is brokem ?"</a>
<li><strong>In reply to:</strong> <a href="6981.php">Brice Goglin: "[OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6985.php">Scott Atchley: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>Reply:</strong> <a href="6985.php">Scott Atchley: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice,
<br>
<p>Because MX doesn't provide a real RMA protocol, we created a fake one  
<br>
on top of point-to-point. The two peers have to agree on a unique tag,  
<br>
then the receiver posts it before the sender starts the send. However,  
<br>
as this is integrated with the real RMA protocol, where only one side  
<br>
knows about the completion of the RMA operation, we still exchange the  
<br>
ACK at the end. Therefore, the receiver doesn't need to know when the  
<br>
receive is completed, as it will get an ACK from the sender. At least  
<br>
this was the original idea.
<br>
<p>But I can see how this might fails if the short ACK from the sender  
<br>
manage to pass the RMA operation on the wire. I was under the  
<br>
impression (based on the fact that MX respect the ordering) that the  
<br>
mx_send will trigger the completion only when all data is on the wire/ 
<br>
nic memory so I supposed there is _absolutely_ no way for the ACK to  
<br>
bypass the last RMA fragments and to reach the receiver before the  
<br>
recv is really completed. If my supposition is not correct, then we  
<br>
should remove the mx_forget and make sure the that before we mark a  
<br>
fragment as completed we got both completions (the one from mx_recv  
<br>
and the remote one).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 21, 2009, at 04:33 , Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am debugging a crash with OMPI 1.3.3 BTL over Open-MX. It's crashing
</span><br>
<span class="quotelev1">&gt; will trying to store incoming data in the OMPI receive buffer, but  
</span><br>
<span class="quotelev1">&gt; OMPI
</span><br>
<span class="quotelev1">&gt; seems to have already freed the buffer even if the MX request is not
</span><br>
<span class="quotelev1">&gt; complete yet. It looks like this is caused by mca_btl_mx_prepare_dst()
</span><br>
<span class="quotelev1">&gt; posting the receive and then calling mx_forget() immediately. The OMPI
</span><br>
<span class="quotelev1">&gt; r17452 by George introduced this. Commit log says &quot;Improve the
</span><br>
<span class="quotelev1">&gt; performance of the MX BTL. Correct the fake PUT protocol.&quot; I don't
</span><br>
<span class="quotelev1">&gt; understand how this works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mx_forget() is supposed to be used when you don't care anymore about a
</span><br>
<span class="quotelev1">&gt; message or a request, not really for performance purpose. It should  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; help much in &quot;normal&quot; cases since you usually need to know when the
</span><br>
<span class="quotelev1">&gt; receive request is completed before you can actually use the received
</span><br>
<span class="quotelev1">&gt; data. And completion order is not guaranteed anyway, so it's hard to
</span><br>
<span class="quotelev1">&gt; guess when a request will complete if mx_forget() disabled the actual
</span><br>
<span class="quotelev1">&gt; completion notification.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you calling mx_forget() because you have another way to know when
</span><br>
<span class="quotelev1">&gt; the message will be received? If so, how?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When does OMPI free the fragment that is passed to mx_irecv in
</span><br>
<span class="quotelev1">&gt; mca_btl_mx_prepare_dst?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; Brice
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
<li><strong>Next message:</strong> <a href="6985.php">Scott Atchley: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>Previous message:</strong> <a href="6983.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Trunk is brokem ?"</a>
<li><strong>In reply to:</strong> <a href="6981.php">Brice Goglin: "[OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6985.php">Scott Atchley: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>Reply:</strong> <a href="6985.php">Scott Atchley: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
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
