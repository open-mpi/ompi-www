<?
$subject_val = "Re: [OMPI devel] RDMA pipeline";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 04:32:56 2008" -->
<!-- isoreceived="20080221093256" -->
<!-- sent="Thu, 21 Feb 2008 11:32:46 +0200" -->
<!-- isosent="20080221093246" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RDMA pipeline" -->
<!-- id="20080221093245.GB26611_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4407FACC-438D-4DAE-80AC-92CF614A0373_at_EECS.UTK.EDU" -->
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
<strong>Date:</strong> 2008-02-21 04:32:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3275.php">Pavel Shamis (Pasha): "Re: [OMPI devel] 1.3 Release schedule and contents"</a>
<li><strong>Previous message:</strong> <a href="3273.php">George Bosilca: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>In reply to:</strong> <a href="3273.php">George Bosilca: "Re: [OMPI devel] RDMA pipeline"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb 20, 2008 at 04:08:46PM -0500, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; So I tracked this issue and it seems that the new behavior was  
</span><br>
<span class="quotelev1">&gt; introduced one year ago by the commit 12433. Starting from this commit, 
</span><br>
Except that the log message of this commit says:
<br>
<p>&nbsp;&nbsp;&nbsp;Fix regression from v1.1.
<br>
&nbsp;&nbsp;&nbsp;1) make the code do what comment says
<br>
&nbsp;&nbsp;&nbsp;2) if memory is prepinned don't send multiple PUT messages.
<br>
<p>And to be absolutely sure I checked v1.1 and of cause there is no
<br>
pipeline for TCP BTLs there as well.
<br>
<p><span class="quotelev1">&gt; there was no pipeline in the RDMA protocol. That make sense as we usually 
</span><br>
<span class="quotelev1">&gt; don't use NetPipe all the time to check the performances of the message 
</span><br>
<span class="quotelev1">&gt; logging (we use real applications). However, last week, we did a NetPipe 
</span><br>
<span class="quotelev1">&gt; and that's how we realized the lack of pipelining for the RDMA case.
</span><br>
Perhaps at the time you wrote message logging you relied on buggy
<br>
behaviour that was later fixed.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would be in favor of having a consistent behavior everywhere. In other 
</span><br>
<span class="quotelev1">&gt; words don't ask the user to know if there is or not an mpool associated 
</span><br>
<span class="quotelev1">&gt; with a particular device, in order to figure out what protocol we use 
</span><br>
<span class="quotelev1">&gt; internally. Actually, it's not only for users, it might help us as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
User indeed shouldn't care what protocol we use as long as performance
<br>
is good. Pipeline is need to improve performance of some &quot;insane&quot;
<br>
interconnects that need memory pinning. The heuristic of OB1 is very simple:
<br>
if send and receive message buffers are pinned do not use pipeline (no matter
<br>
what interconnect is in use) otherwise use pipeline protocol to hide pinning
<br>
cost. The only assumption OB1 does is that if BTL has not MPOOL then all memory
<br>
is always pinned. Think about pipeline as slow path and no pipeline as fast path.
<br>
For Infiniband we use every dirty trick in the book (registration cache +
<br>
ptmalloc) to go fast path and you want TCP/MX/ELAN to always go slow
<br>
path! This doesn't make sense to me.
<br>
<p>If you need pipeline in OB1 to hide message logging cost we may add another config
<br>
parameter that will always enable pipeline. We may even not expose it to
<br>
users, but set it automatically if message logging is enabled.
<br>
<p><p><span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 20, 2008, at 4:29 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Feb 19, 2008 at 10:40:46PM -0500, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Actually, it restores the original behavior. The RDMA operations were
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pipelined before the r15247 commit, independent of the fact that they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; had mpool or not. We were actively using this behavior in the message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; logging framework to hide the cost of the local storage of the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; payload,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and we were quite surprised when we realized that it disappeared.
</span><br>
<span class="quotelev2">&gt;&gt; I checked v1.2 with tcp BTL (I can't test mx or elan, but tcp also
</span><br>
<span class="quotelev2">&gt;&gt; support RDMA and has no mpool) and no matter what  
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_max_rdma_size
</span><br>
<span class="quotelev2">&gt;&gt; I provide the whole buffer is sent in one rdma operation. And here is
</span><br>
<span class="quotelev2">&gt;&gt; explanation why this happens:
</span><br>
<span class="quotelev2">&gt;&gt; 1. If BTL is RDMA capable but does not provide mpool
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1_rdma_btls() assumes that memory is always registered. This
</span><br>
<span class="quotelev2">&gt;&gt; function will always return non zero value for any buffer it is called
</span><br>
<span class="quotelev2">&gt;&gt; with in our case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. When mca_pml_ob1_send_request_start_btl() chooses what function to
</span><br>
<span class="quotelev2">&gt;&gt; use for rendezvous send it checks if buffer is contiguous and if it is
</span><br>
<span class="quotelev2">&gt;&gt; then it check if buffer is already registered by checking non zero  
</span><br>
<span class="quotelev2">&gt;&gt; value
</span><br>
<span class="quotelev2">&gt;&gt; returned by mca_pml_ob1_rdma_btls() and for BTLs without mpool
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1_send_request_start_rdma() is always chosen.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. Receiver checks if local buffer is registered by calling
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1_rdma_btls() on it (see pml_ob1_recvreq.c:259):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  recvreq-&gt;req_rdma_cnt = mca_pml_ob1_rdma_btls(
</span><br>
<span class="quotelev2">&gt;&gt;          bml_endpoint,
</span><br>
<span class="quotelev2">&gt;&gt;          (unsigned char*) base,
</span><br>
<span class="quotelev2">&gt;&gt;          recvreq-&gt;req_recv.req_bytes_packed,
</span><br>
<span class="quotelev2">&gt;&gt;          recvreq-&gt;req_rdma);
</span><br>
<span class="quotelev2">&gt;&gt; So recvreq-&gt;req_rdma_cnt is set to non zero value (if receive buffer  
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt; contiguous of cause).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. Receiver send PUT messages to a senders in
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1_recv_request_schedule_exclusive(). Here is the code snip
</span><br>
<span class="quotelev2">&gt;&gt; from the function (see pml_ob1_recvreq.c:684):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       /* makes sure that we don't exceed BTL max rdma size
</span><br>
<span class="quotelev2">&gt;&gt;        * if memory is not pinned already */
</span><br>
<span class="quotelev2">&gt;&gt;       if(0 == recvreq-&gt;req_rdma_cnt &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt;             bml_btl-&gt;btl_max_rdma_size != 0 &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt;             size &gt; bml_btl-&gt;btl_max_rdma_size)
</span><br>
<span class="quotelev2">&gt;&gt;       {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           size = bml_btl-&gt;btl_max_rdma_size;
</span><br>
<span class="quotelev2">&gt;&gt;       }
</span><br>
<span class="quotelev2">&gt;&gt; Pay special attention to a comment. If recvreq-&gt;req_rdma_cnt is not
</span><br>
<span class="quotelev2">&gt;&gt; zero btl_max_rdma_size is ignored and message is send by one big RDMA
</span><br>
<span class="quotelev2">&gt;&gt; operation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So what I have shown here is that there was no pipeline for TCP btl in
</span><br>
<span class="quotelev2">&gt;&gt; v1.2 and that the code specifically written to behave this way.
</span><br>
<span class="quotelev2">&gt;&gt; If you still think that there is a difference in behaviour between  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2
</span><br>
<span class="quotelev2">&gt;&gt; and the trunk can you explain what code path is executed in v1.2 for
</span><br>
<span class="quotelev2">&gt;&gt; your test case and how trunk behaves differently.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If a BTL don't want to use pipeline for RDMA operations, it can set  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RDMA fragment size to the max value, and this will automatically  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the pipeline. However, if the BTL support pipeline with the trunk  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; today it is not possible to activate it. Moreover, in the current  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the parameters that define the BTL behavior are blatantly ignored,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PML make high level assumption about what they want to do.
</span><br>
<span class="quotelev2">&gt;&gt; I am not defending current behaviour. If you want to change it we can
</span><br>
<span class="quotelev2">&gt;&gt; discuss exact semantics that you want to see. But before that I what  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; make sure that trunk is indeed different from v1.2 in this regard like
</span><br>
<span class="quotelev2">&gt;&gt; you claim it to be. Can you provide me with a test case that works
</span><br>
<span class="quotelev2">&gt;&gt; differently in v1.2 and the trunk?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; 			Gleb.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3275.php">Pavel Shamis (Pasha): "Re: [OMPI devel] 1.3 Release schedule and contents"</a>
<li><strong>Previous message:</strong> <a href="3273.php">George Bosilca: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>In reply to:</strong> <a href="3273.php">George Bosilca: "Re: [OMPI devel] RDMA pipeline"</a>
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
