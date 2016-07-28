<?
$subject_val = "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 19:57:21 2007" -->
<!-- isoreceived="20071205005721" -->
<!-- sent="Tue, 4 Dec 2007 18:57:15 -0600" -->
<!-- isosent="20071205005715" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue" -->
<!-- id="20071205005711.GE17358_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4755AD21.4080001_at_ichips.intel.com" -->
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
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-04 19:57:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2718.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<li><strong>Previous message:</strong> <a href="2716.php">Arlin Davis: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>In reply to:</strong> <a href="2716.php">Arlin Davis: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2724.php">Steve Wise: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>Reply:</strong> <a href="2724.php">Steve Wise: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec 04, 2007 at 11:40:17AM -0800, Arlin Davis wrote:
<br>
<span class="quotelev1">&gt; Jon Mason wrote:
</span><br>
<span class="quotelev2">&gt;&gt; While working on OMPI udapl btl, I have noticed some &quot;interesting&quot;
</span><br>
<span class="quotelev2">&gt;&gt; behavior.  OFA udapl wants the evd queues to be a power of 2 and
</span><br>
<span class="quotelev2">&gt;&gt; then will subtract 1 for book keeping (ie, so that internal head and
</span><br>
<span class="quotelev2">&gt;&gt; tail pointers never touch except when the ring is empty).  OFA udapl
</span><br>
<span class="quotelev2">&gt;&gt; will report the queue length as this number (and not the original
</span><br>
<span class="quotelev2">&gt;&gt; size requested) when queried.  This becomes interesting when a power
</span><br>
<span class="quotelev2">&gt;&gt; of 2 is passed in and then queried.  For example, a requested queue
</span><br>
<span class="quotelev2">&gt;&gt; of length 256 will report a length of 255 when queried.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Something is not right. You should ALWAYS get at least what you request. On 
</span><br>
<span class="quotelev1">&gt; my system with an mthca, a request of 256 gets you 511. It is the verbs 
</span><br>
<span class="quotelev1">&gt; provider that is rounding up, not uDAPL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is my uDAPL debug output (DAPL_DBG_TYPE=0xffff) using dtest:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  cq_object_create: (0x519bb0,0x519d00)
</span><br>
<span class="quotelev1">&gt; dapls_ib_cq_alloc: evd 0x519bb0 cqlen=256
</span><br>
<span class="quotelev1">&gt; dapls_ib_cq_alloc: new_cq 0x519d60 cqlen=511
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is before and after the ibv_create_cq call. uDAPL builds it's EVD 
</span><br>
<span class="quotelev1">&gt; resources based on what is returned from this call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I modified dtest to double check the dat_evd_query and I get the same:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 8962 dto_rcv_evd created 0x519e80
</span><br>
<span class="quotelev1">&gt; 8962 dto_req_evd QLEN - requested 256 and actual 511
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What OFED release and device are you using?
</span><br>
<p>I'm running OFED 1.2.5 and using Chelsio.
<br>
<p>The behavior of the iwch_create_cq in
<br>
drivers/infiniband/hw/cxgb3/iwch_provider.c is to allocate the amount
<br>
given (rounded to the power of 2).  So this function will give 256 if
<br>
256 is requested, but uDAPL will consume one of those for book keeping
<br>
and thus only have 255.
<br>
<p>For my clarification, the provider should take into account the
<br>
bookkeeping of uDAPL and roundup to the next power of 2 when given a
<br>
power of 2 size?  I'm probably being thick, but why doesn't uDAPL
<br>
increase the size requested by one before passing the request to the
<br>
provider (or is this the documented behavior of the function and the
<br>
provider should conform)?
<br>
<p>Thanks,
<br>
Jon
<br>
<p><span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2718.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<li><strong>Previous message:</strong> <a href="2716.php">Arlin Davis: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>In reply to:</strong> <a href="2716.php">Arlin Davis: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2724.php">Steve Wise: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>Reply:</strong> <a href="2724.php">Steve Wise: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
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
