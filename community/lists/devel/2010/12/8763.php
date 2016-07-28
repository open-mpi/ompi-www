<?
$subject_val = "Re: [OMPI devel] Sending large messages over RDMA fails";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  5 11:28:12 2010" -->
<!-- isoreceived="20101205162812" -->
<!-- sent="Sun, 5 Dec 2010 18:28:05 +0200" -->
<!-- isosent="20101205162805" -->
<!-- name="Doron Shoham" -->
<!-- email="dorons_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Sending large messages over RDMA fails" -->
<!-- id="4CFBBD95.4030400_at_voltaire.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2AF9A210-70C2-4D1E-A5DC-3F858B8C6920_at_cisco.com" -->
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
<strong>From:</strong> Doron Shoham (<em>dorons_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-05 11:28:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8764.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8762.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8750.php">Jeff Squyres: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8766.php">Jeff Squyres: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
<li><strong>Reply:</strong> <a href="8766.php">Jeff Squyres: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 29, 2010, at 3:51 AM, Doron Shoham wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; If only the PUT flag is set and/or the btl supports only PUT method then the sender will allocate a rendezvous header and will not eager send any data. The receiver will schedule rdma PUT(s) of the entire message.
</span><br>
<span class="quotelev2">&gt;&gt; It is done in mca_pml_ob1_recv_request_schedule_once()
</span><br>
<span class="quotelev2">&gt;&gt; (ompi/mca/pml/ob1/pml_ob1_recvreq.c:683).
</span><br>
<span class="quotelev2">&gt;&gt; We can limit the size passing to mca_bml_base_prepare_dst() to be minimum between btl.max_message_size supported by the HCA and the actual message size.
</span><br>
<span class="quotelev2">&gt;&gt; The will result a fragmentation of the RDMA write messages.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would think that we should set btl.max_message_size during init to be the minimum of the MCA param and the max supported by the HCA, right?  Then there's no need for this min() in the critical path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, the message must be smaller than the max message size of *both* HCAs, right?  So it might be necessary to add the max message size into the openib BTL modex data so that you can use it in mca_bml_base_prepare_dst() (or whatever -- been a long time since I've mucked around in there...) to compute the min between the two peers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So you might still need a min, but for a different reason than what you originally mentioned.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
It is my mistake - the btl.max_message_size is a different parameter. It 
<br>
is more like software limitation rather then hardware limitation from 
<br>
the HCA.
<br>
I don't think that in RDMA flow it has any meaning.
<br>
<p>Can you please explain a bit more about the openib BTL modex?
<br>
<p><span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; The bigger problem is when using the GET flow.
</span><br>
<span class="quotelev2">&gt;&gt; In this flow the receiver allocate one big buffer to receive the message with RDMA read in one chunk.
</span><br>
<span class="quotelev2">&gt;&gt; There is no fragmentation mechanism in this flow which make it harder to solve this issue
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doh.  I'm afraid I don't know why this was done this way originally...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Reading the max message size supported by the HCA can be done by using verbs.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; The second approach is to use RDMA direct only if the message size is smaller than the max message size supported by the HCA.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Here is where the long message protocol is chosen:
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/pml/ob1/pml_ob1_sendreq.h line 382.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; We could use the second approach until a fragmentation mechanism will be added to the RDMA direct GET flow.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you suggesting that pml_ob1_sendreq.h:382 compare the message length to the btl.max_message_size and choose RDMA direct vs. RDMA pipelined?  If so, that might be sufficient.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But what to do about the peer's max message size?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I thought of a different approach:
<br>
Instead of limiting the passing to the mca_bml_base_prepare_dst(), we 
<br>
can limit the size in mca_btl_openib_prepare_dst().
<br>
I believe this is better solution because it only effects the internal 
<br>
behavior of the openib btl.
<br>
In mca_btl_openib_prepare_dst() we have access to both max_msg_sz (local 
<br>
and endpoint).
<br>
This will fix the PUT flow.
<br>
<p>For the GET flow, maybe we should check in 
<br>
mca_pml_ob1_send_request_start_rdma() -
<br>
if the message size is larger then the minimum between both endpoints' 
<br>
max_msg_sz force it use the PUT flow.
<br>
<p>The problem is that I'm not sure how to do it without an *ugly hack*.
<br>
We need to to access the openib btl parameters from the  
<br>
mca_pml_ob1_send_request_start_rdma().
<br>
<p>The second options it to do it from  pml_ob1_sendreq.h:382, but then 
<br>
again, it requires access to the openib btl parameters...
<br>
<p>Any thoughts?
<br>
<p>Thanks,
<br>
Doron
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8763/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8764.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8762.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8750.php">Jeff Squyres: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8766.php">Jeff Squyres: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
<li><strong>Reply:</strong> <a href="8766.php">Jeff Squyres: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
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
