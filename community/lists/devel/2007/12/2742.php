<?
$subject_val = "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 07:53:02 2007" -->
<!-- isoreceived="20071206125302" -->
<!-- sent="Thu, 06 Dec 2007 06:52:08 -0600" -->
<!-- isosent="20071206125208" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue" -->
<!-- id="4757F078.7000304_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4756E6A1.2010005_at_ichips.intel.com" -->
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
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 07:52:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2743.php">Tim Prins: "[OMPI devel] opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="2741.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: remove	excess	ompi_btl_openib_connect_base_open call"</a>
<li><strong>In reply to:</strong> <a href="2730.php">Arlin Davis: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Arlin Davis wrote:
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm running OFED 1.2.5 and using Chelsio.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  From the linux rdma verbs perspective, ibv_create_cq() will create a 
</span><br>
<span class="quotelev2">&gt;&gt; cq that is &gt;= the requested depth.  The fact that mthca always bumps 
</span><br>
<span class="quotelev2">&gt;&gt; the size up to the next power of 2 isn't something udapl can rely on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It doesn't.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; uDAPL passes the users requested qlen directly to the verbs 
</span><br>
<span class="quotelev1">&gt; ibv_create_cq call (dapl_openib_cq.c) and then uses the returned qlen to 
</span><br>
<span class="quotelev1">&gt; allocate EVD's (dapl_evd_util.c) and a ring buffer 
</span><br>
<span class="quotelev1">&gt; (dapl_ring_buffer_util.c) for managing the free and pending events.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The EVD's are allocated based on returned qlen from verbs and the 
</span><br>
<span class="quotelev1">&gt; ring_buffer is allocated based on qlen, next power of 2 minus 1. Unless 
</span><br>
<span class="quotelev1">&gt; I am missing something, I don't see how we can get less then what is 
</span><br>
<span class="quotelev1">&gt; requested.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the crux:  If creating a udapl evd of 256 results in a cq of 
</span><br>
<span class="quotelev2">&gt;&gt; 256 and the udapl returns a evd with size 255, then udapl is broken...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I agree. But I don't see how this is happening.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is output from my dtest when requesting 256 and verbs returning the 
</span><br>
<span class="quotelev1">&gt; same qlen. You can see before and after verbs we get 256, the rbufs are 
</span><br>
<span class="quotelev1">&gt; 511, and the query EVD call returns 256 to the user.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  cq_object_create: (0x519bb0,0x519d00)
</span><br>
<span class="quotelev1">&gt; dapls_ib_cq_alloc: evd 0x519bb0 cqlen=256
</span><br>
<span class="quotelev1">&gt; dapls_ib_cq_alloc: new_cq 0x519d60 cqlen=256
</span><br>
<span class="quotelev1">&gt;  setup_async_cb: ia 0x518270 type 2 hdl 0x519bb0 cb 0x2a957c8e70 ctx 
</span><br>
<span class="quotelev1">&gt; 0x519bb0
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; rbuf_alloc: size 256 rsize 511
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; rbuf_alloc: size 256 rsize 511
</span><br>
<span class="quotelev1">&gt; dapl_evd_create () returns 0x0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 9920 dto_req_evd QLEN - requested 256 and actual 256
</span><br>
<span class="quotelev1">&gt; 9920 Create events done
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you turn up DAPL debug(DAPL_DBG_TYPE=0xffff) so I can see what is 
</span><br>
<span class="quotelev1">&gt; happening?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -arlin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Sorry for the noise guys.  Looks like this is a cxgb3 bug.
<br>
<p><p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2743.php">Tim Prins: "[OMPI devel] opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="2741.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: remove	excess	ompi_btl_openib_connect_base_open call"</a>
<li><strong>In reply to:</strong> <a href="2730.php">Arlin Davis: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
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
