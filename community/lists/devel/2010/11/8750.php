<?
$subject_val = "Re: [OMPI devel] Sending large messages over RDMA fails";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 15:30:41 2010" -->
<!-- isoreceived="20101130203041" -->
<!-- sent="Tue, 30 Nov 2010 15:30:36 -0500" -->
<!-- isosent="20101130203036" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Sending large messages over RDMA fails" -->
<!-- id="2AF9A210-70C2-4D1E-A5DC-3F858B8C6920_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6D1AA8ED7402FF49AFAB26F0C948ACF501F79D4B_at_exil.voltaire.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Sending large messages over RDMA fails<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-30 15:30:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8751.php">Ralph Castain: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>Previous message:</strong> <a href="8749.php">Damien Guinier: "[OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>In reply to:</strong> <a href="8722.php">Doron Shoham: "[OMPI devel] Sending large messages over RDMA fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8763.php">Doron Shoham: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8763.php">Doron Shoham: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 29, 2010, at 3:51 AM, Doron Shoham wrote:
<br>
<p><span class="quotelev1">&gt; If only the PUT flag is set and/or the btl supports only PUT method then the sender will allocate a rendezvous header and will not eager send any data. The receiver will schedule rdma PUT(s) of the entire message.
</span><br>
<span class="quotelev1">&gt; It is done in mca_pml_ob1_recv_request_schedule_once()
</span><br>
<span class="quotelev1">&gt; (ompi/mca/pml/ob1/pml_ob1_recvreq.c:683).
</span><br>
<span class="quotelev1">&gt; We can limit the size passing to mca_bml_base_prepare_dst() to be minimum between btl.max_message_size supported by the HCA and the actual message size.
</span><br>
<span class="quotelev1">&gt; The will result a fragmentation of the RDMA write messages.
</span><br>
<p>I would think that we should set btl.max_message_size during init to be the minimum of the MCA param and the max supported by the HCA, right?  Then there's no need for this min() in the critical path.
<br>
<p>Additionally, the message must be smaller than the max message size of *both* HCAs, right?  So it might be necessary to add the max message size into the openib BTL modex data so that you can use it in mca_bml_base_prepare_dst() (or whatever -- been a long time since I've mucked around in there...) to compute the min between the two peers.
<br>
<p>So you might still need a min, but for a different reason than what you originally mentioned.
<br>
<p><span class="quotelev1">&gt; The bigger problem is when using the GET flow.
</span><br>
<span class="quotelev1">&gt; In this flow the receiver allocate one big buffer to receive the message with RDMA read in one chunk.
</span><br>
<span class="quotelev1">&gt; There is no fragmentation mechanism in this flow which make it harder to solve this issue
</span><br>
<p>Doh.  I'm afraid I don't know why this was done this way originally...
<br>
<p><span class="quotelev1">&gt; Reading the max message size supported by the HCA can be done by using verbs.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The second approach is to use RDMA direct only if the message size is smaller than the max message size supported by the HCA.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Here is where the long message protocol is chosen:
</span><br>
<span class="quotelev1">&gt; ompi/mca/pml/ob1/pml_ob1_sendreq.h line 382.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; We could use the second approach until a fragmentation mechanism will be added to the RDMA direct GET flow.
</span><br>
<p>Are you suggesting that pml_ob1_sendreq.h:382 compare the message length to the btl.max_message_size and choose RDMA direct vs. RDMA pipelined?  If so, that might be sufficient.
<br>
<p>But what to do about the peer's max message size?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8751.php">Ralph Castain: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>Previous message:</strong> <a href="8749.php">Damien Guinier: "[OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>In reply to:</strong> <a href="8722.php">Doron Shoham: "[OMPI devel] Sending large messages over RDMA fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8763.php">Doron Shoham: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8763.php">Doron Shoham: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
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
