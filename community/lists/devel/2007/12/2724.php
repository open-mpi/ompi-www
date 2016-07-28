<?
$subject_val = "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 11:09:18 2007" -->
<!-- isoreceived="20071205160918" -->
<!-- sent="Wed, 05 Dec 2007 10:08:29 -0600" -->
<!-- isosent="20071205160829" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue" -->
<!-- id="4756CCFD.1040806_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20071205005711.GE17358_at_opengridcomputing.com" -->
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
<strong>Date:</strong> 2007-12-05 11:08:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2725.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Previous message:</strong> <a href="2723.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<li><strong>In reply to:</strong> <a href="2717.php">Jon Mason: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2730.php">Arlin Davis: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>Reply:</strong> <a href="2730.php">Arlin Davis: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jon Mason wrote:
<br>
<span class="quotelev1">&gt; On Tue, Dec 04, 2007 at 11:40:17AM -0800, Arlin Davis wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Jon Mason wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While working on OMPI udapl btl, I have noticed some &quot;interesting&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; behavior.  OFA udapl wants the evd queues to be a power of 2 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then will subtract 1 for book keeping (ie, so that internal head and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tail pointers never touch except when the ring is empty).  OFA udapl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will report the queue length as this number (and not the original
</span><br>
<span class="quotelev3">&gt;&gt;&gt; size requested) when queried.  This becomes interesting when a power
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of 2 is passed in and then queried.  For example, a requested queue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of length 256 will report a length of 255 when queried.  
</span><br>
<span class="quotelev2">&gt;&gt; Something is not right. You should ALWAYS get at least what you request. On 
</span><br>
<span class="quotelev2">&gt;&gt; my system with an mthca, a request of 256 gets you 511. It is the verbs 
</span><br>
<span class="quotelev2">&gt;&gt; provider that is rounding up, not uDAPL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is my uDAPL debug output (DAPL_DBG_TYPE=0xffff) using dtest:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  cq_object_create: (0x519bb0,0x519d00)
</span><br>
<span class="quotelev2">&gt;&gt; dapls_ib_cq_alloc: evd 0x519bb0 cqlen=256
</span><br>
<span class="quotelev2">&gt;&gt; dapls_ib_cq_alloc: new_cq 0x519d60 cqlen=511
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is before and after the ibv_create_cq call. uDAPL builds it's EVD 
</span><br>
<span class="quotelev2">&gt;&gt; resources based on what is returned from this call.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I modified dtest to double check the dat_evd_query and I get the same:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 8962 dto_rcv_evd created 0x519e80
</span><br>
<span class="quotelev2">&gt;&gt; 8962 dto_req_evd QLEN - requested 256 and actual 511
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What OFED release and device are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running OFED 1.2.5 and using Chelsio.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The behavior of the iwch_create_cq in
</span><br>
<span class="quotelev1">&gt; drivers/infiniband/hw/cxgb3/iwch_provider.c is to allocate the amount
</span><br>
<span class="quotelev1">&gt; given (rounded to the power of 2).  So this function will give 256 if
</span><br>
<span class="quotelev1">&gt; 256 is requested, but uDAPL will consume one of those for book keeping
</span><br>
<span class="quotelev1">&gt; and thus only have 255.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For my clarification, the provider should take into account the
</span><br>
<span class="quotelev1">&gt; bookkeeping of uDAPL and roundup to the next power of 2 when given a
</span><br>
<span class="quotelev1">&gt; power of 2 size?  I'm probably being thick, but why doesn't uDAPL
</span><br>
<span class="quotelev1">&gt; increase the size requested by one before passing the request to the
</span><br>
<span class="quotelev1">&gt; provider (or is this the documented behavior of the function and the
</span><br>
<span class="quotelev1">&gt; provider should conform)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jon
</span><br>
<p>&nbsp;From the linux rdma verbs perspective, ibv_create_cq() will create a cq 
<br>
that is &gt;= the requested depth.  The fact that mthca always bumps the 
<br>
size up to the next power of 2 isn't something udapl can rely on.
<br>
<p>Here's the crux:  If creating a udapl evd of 256 results in a cq of 256 
<br>
and the udapl returns a evd with size 255, then udapl is broken...
<br>
<p>My 2 cents...
<br>
<p>Stevo.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2725.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Previous message:</strong> <a href="2723.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<li><strong>In reply to:</strong> <a href="2717.php">Jon Mason: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2730.php">Arlin Davis: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>Reply:</strong> <a href="2730.php">Arlin Davis: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
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
