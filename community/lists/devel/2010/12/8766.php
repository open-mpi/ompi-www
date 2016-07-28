<?
$subject_val = "Re: [OMPI devel] Sending large messages over RDMA fails";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  7 21:21:15 2010" -->
<!-- isoreceived="20101208022115" -->
<!-- sent="Tue, 7 Dec 2010 18:21:09 -0800" -->
<!-- isosent="20101208022109" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Sending large messages over RDMA fails" -->
<!-- id="14E22120-9EB0-4F46-B108-D64EC973BF17_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CFBBD95.4030400_at_voltaire.com" -->
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
<strong>Date:</strong> 2010-12-07 21:21:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8767.php">Ralph Castain: "[OMPI devel] Gatekeeper request"</a>
<li><strong>Previous message:</strong> <a href="8765.php">Nathan Hjelm: "[OMPI devel] rfc: backport of orte debugger framework to 1.5 branch"</a>
<li><strong>In reply to:</strong> <a href="8763.php">Doron Shoham: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Doron --
<br>
<p>I chatted with George about this today (we're both at the Forum together this week).  We're in this situation because of some complicated history.
<br>
<p>1. At one time, both PUT and GET protocols worked fine in OB1.
<br>
2. PUT was the default.
<br>
3. Over time, GET got broken (because it was rarely used).
<br>
4. Someone eventually fixed the GET protocol, but did not implement pipelining.
<br>
<p>Hence, the problem is in the OB1 PML: the PUT protocol has pipelining implemented, but the GET protocol does not.  More specifically, PUT goes something like this:
<br>
<p>1. MPI_SEND is invoked with a 10GB message
<br>
2. ...some setup and intermediate stuff...
<br>
3. OB1 send calls a back-end BTL's PUT with the buffer pointer and a length of 10GB
<br>
4. The BTL does a PUT of the largest message it can (e.g., 2GB) and returns back up to OB1 saying, &quot;Sorry, I was only able to PUT 2GB&quot;
<br>
5. OB1 then falls back to the pipelined protocol
<br>
<p>The GET protocol won't fall back to pipelining -- as I understand it (and George please correct me if this is wrong), that code simply doesn't exist at this point.
<br>
<p>So I think there's 2 options on how to go forward:
<br>
<p>A. add the GET pipelining code to OB1 (probably similar to the PUT scheme; let the BTL fail and say &quot;I was only able to GET 2GB...&quot;, etc.).
<br>
<p>B. disable the GET protocol (maybe only in the openib BTL...?).  Only openib and GM cared about GET/PUT in ob1 and gm is long dead.  
<br>
<p>I think that A. is preferable because the ob1 GET protocol has the advantage of having hardware acceleration of RDMA GET.  As opposed to involving the sender OB1 stack in PUT -- meaning additional latency, not only because the sender OB1 is involved, but also because the sender may not be in OB1 when the receiver CTS arrives.
<br>
<p>Make sense?
<br>
<p><p><p>On Dec 5, 2010, at 8:28 AM, Doron Shoham wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 29, 2010, at 3:51 AM, Doron Shoham wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If only the PUT flag is set and/or the btl supports only PUT method then the sender will allocate a rendezvous header and will not eager send any data. The receiver will schedule rdma PUT(s) of the entire message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is done in mca_pml_ob1_recv_request_schedule_once()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ompi/mca/pml/ob1/pml_ob1_recvreq.c:683).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We can limit the size passing to mca_bml_base_prepare_dst() to be minimum between btl.max_message_size supported by the HCA and the actual message size.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The will result a fragmentation of the RDMA write messages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would think that we should set btl.max_message_size during init to be the minimum of the MCA param and the max supported by the HCA, right?  Then there's no need for this min() in the critical path.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Additionally, the message must be smaller than the max message size of *both* HCAs, right?  So it might be necessary to add the max message size into the openib BTL modex data so that you can use it in mca_bml_base_prepare_dst() (or whatever -- been a long time since I've mucked around in there...) to compute the min between the two peers.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So you might still need a min, but for a different reason than what you originally mentioned.
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; It is my mistake - the btl.max_message_size is a different parameter. It is more like software limitation rather then hardware limitation from the HCA.
</span><br>
<span class="quotelev1">&gt; I don't think that in RDMA flow it has any meaning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you please explain a bit more about the openib BTL modex?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The bigger problem is when using the GET flow.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In this flow the receiver allocate one big buffer to receive the message with RDMA read in one chunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is no fragmentation mechanism in this flow which make it harder to solve this issue
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Doh.  I'm afraid I don't know why this was done this way originally...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reading the max message size supported by the HCA can be done by using verbs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The second approach is to use RDMA direct only if the message size is smaller than the max message size supported by the HCA.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is where the long message protocol is chosen:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/mca/pml/ob1/pml_ob1_sendreq.h line 382.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We could use the second approach until a fragmentation mechanism will be added to the RDMA direct GET flow.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are you suggesting that pml_ob1_sendreq.h:382 compare the message length to the btl.max_message_size and choose RDMA direct vs. RDMA pipelined?  If so, that might be sufficient.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But what to do about the peer's max message size?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought of a different approach:
</span><br>
<span class="quotelev1">&gt; Instead of limiting the passing to the mca_bml_base_prepare_dst(), we can limit the size in mca_btl_openib_prepare_dst().
</span><br>
<span class="quotelev1">&gt; I believe this is better solution because it only effects the internal behavior of the openib btl.
</span><br>
<span class="quotelev1">&gt; In mca_btl_openib_prepare_dst() we have access to both max_msg_sz (local and endpoint).
</span><br>
<span class="quotelev1">&gt; This will fix the PUT flow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the GET flow, maybe we should check in mca_pml_ob1_send_request_start_rdma() -
</span><br>
<span class="quotelev1">&gt; if the message size is larger then the minimum between both endpoints' max_msg_sz force it use the PUT flow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that I'm not sure how to do it without an *ugly hack*.
</span><br>
<span class="quotelev1">&gt; We need to to access the openib btl parameters from the  mca_pml_ob1_send_request_start_rdma().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The second options it to do it from  pml_ob1_sendreq.h:382, but then again, it requires access to the openib btl parameters...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Doron
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="8767.php">Ralph Castain: "[OMPI devel] Gatekeeper request"</a>
<li><strong>Previous message:</strong> <a href="8765.php">Nathan Hjelm: "[OMPI devel] rfc: backport of orte debugger framework to 1.5 branch"</a>
<li><strong>In reply to:</strong> <a href="8763.php">Doron Shoham: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
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
