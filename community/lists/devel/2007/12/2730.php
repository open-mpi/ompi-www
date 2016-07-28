<?
$subject_val = "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 12:58:02 2007" -->
<!-- isoreceived="20071205175802" -->
<!-- sent="Wed, 05 Dec 2007 09:57:53 -0800" -->
<!-- isosent="20071205175753" -->
<!-- name="Arlin Davis" -->
<!-- email="ardavis_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue" -->
<!-- id="4756E6A1.2010005_at_ichips.intel.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4756CCFD.1040806_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue<br>
<strong>From:</strong> Arlin Davis (<em>ardavis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 12:57:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2731.php">Karol Mroz: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<li><strong>Previous message:</strong> <a href="2729.php">Terry Dontje: "Re: [OMPI devel] vt integration"</a>
<li><strong>In reply to:</strong> <a href="2724.php">Steve Wise: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2742.php">Steve Wise: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>Reply:</strong> <a href="2742.php">Steve Wise: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm running OFED 1.2.5 and using Chelsio.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  From the linux rdma verbs perspective, ibv_create_cq() will create a cq 
</span><br>
<span class="quotelev1">&gt; that is &gt;= the requested depth.  The fact that mthca always bumps the 
</span><br>
<span class="quotelev1">&gt; size up to the next power of 2 isn't something udapl can rely on.
</span><br>
<p>It doesn't.
<br>
<p>uDAPL passes the users requested qlen directly to the verbs 
<br>
ibv_create_cq call (dapl_openib_cq.c) and then uses the returned qlen to 
<br>
allocate EVD's (dapl_evd_util.c) and a ring buffer 
<br>
(dapl_ring_buffer_util.c) for managing the free and pending events.
<br>
<p>The EVD's are allocated based on returned qlen from verbs and the 
<br>
ring_buffer is allocated based on qlen, next power of 2 minus 1. Unless 
<br>
I am missing something, I don't see how we can get less then what is 
<br>
requested.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the crux:  If creating a udapl evd of 256 results in a cq of 256 
</span><br>
<span class="quotelev1">&gt; and the udapl returns a evd with size 255, then udapl is broken...
</span><br>
<p>Yes, I agree. But I don't see how this is happening.
<br>
<p>Here is output from my dtest when requesting 256 and verbs returning the 
<br>
same qlen. You can see before and after verbs we get 256, the rbufs are 
<br>
511, and the query EVD call returns 256 to the user.
<br>
<p>&nbsp;&nbsp;cq_object_create: (0x519bb0,0x519d00)
<br>
dapls_ib_cq_alloc: evd 0x519bb0 cqlen=256
<br>
dapls_ib_cq_alloc: new_cq 0x519d60 cqlen=256
<br>
&nbsp;&nbsp;setup_async_cb: ia 0x518270 type 2 hdl 0x519bb0 cb 0x2a957c8e70 ctx 
<br>
0x519bb0
<br>
<span class="quotelev3">  &gt;&gt;&gt; rbuf_alloc: size 256 rsize 511
</span><br>
<span class="quotelev3">  &gt;&gt;&gt; rbuf_alloc: size 256 rsize 511
</span><br>
dapl_evd_create () returns 0x0
<br>
<p>9920 dto_req_evd QLEN - requested 256 and actual 256
<br>
9920 Create events done
<br>
<p>Can you turn up DAPL debug(DAPL_DBG_TYPE=0xffff) so I can see what is 
<br>
happening?
<br>
<p>Thanks,
<br>
<p>-arlin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2731.php">Karol Mroz: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<li><strong>Previous message:</strong> <a href="2729.php">Terry Dontje: "Re: [OMPI devel] vt integration"</a>
<li><strong>In reply to:</strong> <a href="2724.php">Steve Wise: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2742.php">Steve Wise: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>Reply:</strong> <a href="2742.php">Steve Wise: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
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
