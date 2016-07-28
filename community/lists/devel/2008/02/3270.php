<?
$subject_val = "Re: [OMPI devel] RDMA pipeline";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 04:30:05 2008" -->
<!-- isoreceived="20080220093005" -->
<!-- sent="Wed, 20 Feb 2008 11:29:57 +0200" -->
<!-- isosent="20080220092957" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RDMA pipeline" -->
<!-- id="20080220092957.GA9305_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="28104828-3E22-4704-BACC-25576C93D042_at_eecs.utk.edu" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-20 04:29:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3271.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3269.php">George Bosilca: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>In reply to:</strong> <a href="3269.php">George Bosilca: "Re: [OMPI devel] RDMA pipeline"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3273.php">George Bosilca: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>Reply:</strong> <a href="3273.php">George Bosilca: "Re: [OMPI devel] RDMA pipeline"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Feb 19, 2008 at 10:40:46PM -0500, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Actually, it restores the original behavior. The RDMA operations were  
</span><br>
<span class="quotelev1">&gt; pipelined before the r15247 commit, independent of the fact that they  
</span><br>
<span class="quotelev1">&gt; had mpool or not. We were actively using this behavior in the message  
</span><br>
<span class="quotelev1">&gt; logging framework to hide the cost of the local storage of the payload, 
</span><br>
<span class="quotelev1">&gt; and we were quite surprised when we realized that it disappeared.
</span><br>
I checked v1.2 with tcp BTL (I can't test mx or elan, but tcp also
<br>
support RDMA and has no mpool) and no matter what btl_tcp_max_rdma_size
<br>
I provide the whole buffer is sent in one rdma operation. And here is
<br>
explanation why this happens:
<br>
&nbsp;1. If BTL is RDMA capable but does not provide mpool
<br>
&nbsp;mca_pml_ob1_rdma_btls() assumes that memory is always registered. This
<br>
&nbsp;function will always return non zero value for any buffer it is called
<br>
&nbsp;with in our case.
<br>
<p>&nbsp;2. When mca_pml_ob1_send_request_start_btl() chooses what function to
<br>
&nbsp;use for rendezvous send it checks if buffer is contiguous and if it is
<br>
&nbsp;then it check if buffer is already registered by checking non zero value
<br>
&nbsp;returned by mca_pml_ob1_rdma_btls() and for BTLs without mpool
<br>
&nbsp;mca_pml_ob1_send_request_start_rdma() is always chosen.
<br>
<p>&nbsp;3. Receiver checks if local buffer is registered by calling
<br>
&nbsp;mca_pml_ob1_rdma_btls() on it (see pml_ob1_recvreq.c:259):
<br>
<p>&nbsp;&nbsp;recvreq-&gt;req_rdma_cnt = mca_pml_ob1_rdma_btls(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bml_endpoint,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(unsigned char*) base,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvreq-&gt;req_recv.req_bytes_packed,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvreq-&gt;req_rdma);
<br>
&nbsp;So recvreq-&gt;req_rdma_cnt is set to non zero value (if receive buffer is
<br>
&nbsp;contiguous of cause).
<br>
<p>&nbsp;4. Receiver send PUT messages to a senders in
<br>
&nbsp;mca_pml_ob1_recv_request_schedule_exclusive(). Here is the code snip
<br>
&nbsp;from the function (see pml_ob1_recvreq.c:684):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* makes sure that we don't exceed BTL max rdma size
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* if memory is not pinned already */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(0 == recvreq-&gt;req_rdma_cnt &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bml_btl-&gt;btl_max_rdma_size != 0 &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size &gt; bml_btl-&gt;btl_max_rdma_size)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size = bml_btl-&gt;btl_max_rdma_size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;Pay special attention to a comment. If recvreq-&gt;req_rdma_cnt is not
<br>
&nbsp;zero btl_max_rdma_size is ignored and message is send by one big RDMA
<br>
&nbsp;operation.
<br>
<p>So what I have shown here is that there was no pipeline for TCP btl in
<br>
v1.2 and that the code specifically written to behave this way.
<br>
If you still think that there is a difference in behaviour between v1.2
<br>
and the trunk can you explain what code path is executed in v1.2 for
<br>
your test case and how trunk behaves differently.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If a BTL don't want to use pipeline for RDMA operations, it can set the 
</span><br>
<span class="quotelev1">&gt; RDMA fragment size to the max value, and this will automatically disable 
</span><br>
<span class="quotelev1">&gt; the pipeline. However, if the BTL support pipeline with the trunk version 
</span><br>
<span class="quotelev1">&gt; today it is not possible to activate it. Moreover, in the current version 
</span><br>
<span class="quotelev1">&gt; the parameters that define the BTL behavior are blatantly ignored, as the 
</span><br>
<span class="quotelev1">&gt; PML make high level assumption about what they want to do.
</span><br>
I am not defending current behaviour. If you want to change it we can
<br>
discuss exact semantics that you want to see. But before that I what to
<br>
make sure that trunk is indeed different from v1.2 in this regard like
<br>
you claim it to be. Can you provide me with a test case that works
<br>
differently in v1.2 and the trunk?
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3271.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3269.php">George Bosilca: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>In reply to:</strong> <a href="3269.php">George Bosilca: "Re: [OMPI devel] RDMA pipeline"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3273.php">George Bosilca: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>Reply:</strong> <a href="3273.php">George Bosilca: "Re: [OMPI devel] RDMA pipeline"</a>
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
