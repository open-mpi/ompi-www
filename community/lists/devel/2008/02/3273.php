<?
$subject_val = "Re: [OMPI devel] RDMA pipeline";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 16:08:59 2008" -->
<!-- isoreceived="20080220210859" -->
<!-- sent="Wed, 20 Feb 2008 16:08:46 -0500" -->
<!-- isosent="20080220210846" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RDMA pipeline" -->
<!-- id="4407FACC-438D-4DAE-80AC-92CF614A0373_at_EECS.UTK.EDU" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080220092957.GA9305_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RDMA pipeline<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-20 16:08:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3274.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>Previous message:</strong> <a href="3272.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>In reply to:</strong> <a href="3270.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3274.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>Reply:</strong> <a href="3274.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I tracked this issue and it seems that the new behavior was  
<br>
introduced one year ago by the commit 12433. Starting from this  
<br>
commit, there was no pipeline in the RDMA protocol. That make sense as  
<br>
we usually don't use NetPipe all the time to check the performances of  
<br>
the message logging (we use real applications). However, last week, we  
<br>
did a NetPipe and that's how we realized the lack of pipelining for  
<br>
the RDMA case.
<br>
<p>I would be in favor of having a consistent behavior everywhere. In  
<br>
other words don't ask the user to know if there is or not an mpool  
<br>
associated with a particular device, in order to figure out what  
<br>
protocol we use internally. Actually, it's not only for users, it  
<br>
might help us as well.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 20, 2008, at 4:29 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Feb 19, 2008 at 10:40:46PM -0500, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Actually, it restores the original behavior. The RDMA operations were
</span><br>
<span class="quotelev2">&gt;&gt; pipelined before the r15247 commit, independent of the fact that they
</span><br>
<span class="quotelev2">&gt;&gt; had mpool or not. We were actively using this behavior in the message
</span><br>
<span class="quotelev2">&gt;&gt; logging framework to hide the cost of the local storage of the  
</span><br>
<span class="quotelev2">&gt;&gt; payload,
</span><br>
<span class="quotelev2">&gt;&gt; and we were quite surprised when we realized that it disappeared.
</span><br>
<span class="quotelev1">&gt; I checked v1.2 with tcp BTL (I can't test mx or elan, but tcp also
</span><br>
<span class="quotelev1">&gt; support RDMA and has no mpool) and no matter what  
</span><br>
<span class="quotelev1">&gt; btl_tcp_max_rdma_size
</span><br>
<span class="quotelev1">&gt; I provide the whole buffer is sent in one rdma operation. And here is
</span><br>
<span class="quotelev1">&gt; explanation why this happens:
</span><br>
<span class="quotelev1">&gt; 1. If BTL is RDMA capable but does not provide mpool
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_rdma_btls() assumes that memory is always registered. This
</span><br>
<span class="quotelev1">&gt; function will always return non zero value for any buffer it is called
</span><br>
<span class="quotelev1">&gt; with in our case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. When mca_pml_ob1_send_request_start_btl() chooses what function to
</span><br>
<span class="quotelev1">&gt; use for rendezvous send it checks if buffer is contiguous and if it is
</span><br>
<span class="quotelev1">&gt; then it check if buffer is already registered by checking non zero  
</span><br>
<span class="quotelev1">&gt; value
</span><br>
<span class="quotelev1">&gt; returned by mca_pml_ob1_rdma_btls() and for BTLs without mpool
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_send_request_start_rdma() is always chosen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Receiver checks if local buffer is registered by calling
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_rdma_btls() on it (see pml_ob1_recvreq.c:259):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  recvreq-&gt;req_rdma_cnt = mca_pml_ob1_rdma_btls(
</span><br>
<span class="quotelev1">&gt;          bml_endpoint,
</span><br>
<span class="quotelev1">&gt;          (unsigned char*) base,
</span><br>
<span class="quotelev1">&gt;          recvreq-&gt;req_recv.req_bytes_packed,
</span><br>
<span class="quotelev1">&gt;          recvreq-&gt;req_rdma);
</span><br>
<span class="quotelev1">&gt; So recvreq-&gt;req_rdma_cnt is set to non zero value (if receive buffer  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; contiguous of cause).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. Receiver send PUT messages to a senders in
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_recv_request_schedule_exclusive(). Here is the code snip
</span><br>
<span class="quotelev1">&gt; from the function (see pml_ob1_recvreq.c:684):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       /* makes sure that we don't exceed BTL max rdma size
</span><br>
<span class="quotelev1">&gt;        * if memory is not pinned already */
</span><br>
<span class="quotelev1">&gt;       if(0 == recvreq-&gt;req_rdma_cnt &amp;&amp;
</span><br>
<span class="quotelev1">&gt;             bml_btl-&gt;btl_max_rdma_size != 0 &amp;&amp;
</span><br>
<span class="quotelev1">&gt;             size &gt; bml_btl-&gt;btl_max_rdma_size)
</span><br>
<span class="quotelev1">&gt;       {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           size = bml_btl-&gt;btl_max_rdma_size;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt; Pay special attention to a comment. If recvreq-&gt;req_rdma_cnt is not
</span><br>
<span class="quotelev1">&gt; zero btl_max_rdma_size is ignored and message is send by one big RDMA
</span><br>
<span class="quotelev1">&gt; operation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So what I have shown here is that there was no pipeline for TCP btl in
</span><br>
<span class="quotelev1">&gt; v1.2 and that the code specifically written to behave this way.
</span><br>
<span class="quotelev1">&gt; If you still think that there is a difference in behaviour between  
</span><br>
<span class="quotelev1">&gt; v1.2
</span><br>
<span class="quotelev1">&gt; and the trunk can you explain what code path is executed in v1.2 for
</span><br>
<span class="quotelev1">&gt; your test case and how trunk behaves differently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If a BTL don't want to use pipeline for RDMA operations, it can set  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; RDMA fragment size to the max value, and this will automatically  
</span><br>
<span class="quotelev2">&gt;&gt; disable
</span><br>
<span class="quotelev2">&gt;&gt; the pipeline. However, if the BTL support pipeline with the trunk  
</span><br>
<span class="quotelev2">&gt;&gt; version
</span><br>
<span class="quotelev2">&gt;&gt; today it is not possible to activate it. Moreover, in the current  
</span><br>
<span class="quotelev2">&gt;&gt; version
</span><br>
<span class="quotelev2">&gt;&gt; the parameters that define the BTL behavior are blatantly ignored,  
</span><br>
<span class="quotelev2">&gt;&gt; as the
</span><br>
<span class="quotelev2">&gt;&gt; PML make high level assumption about what they want to do.
</span><br>
<span class="quotelev1">&gt; I am not defending current behaviour. If you want to change it we can
</span><br>
<span class="quotelev1">&gt; discuss exact semantics that you want to see. But before that I what  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; make sure that trunk is indeed different from v1.2 in this regard like
</span><br>
<span class="quotelev1">&gt; you claim it to be. Can you provide me with a test case that works
</span><br>
<span class="quotelev1">&gt; differently in v1.2 and the trunk?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3273/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3274.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>Previous message:</strong> <a href="3272.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>In reply to:</strong> <a href="3270.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3274.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>Reply:</strong> <a href="3274.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
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
