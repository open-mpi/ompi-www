<?
$subject_val = "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 14:44:13 2007" -->
<!-- isoreceived="20071204194413" -->
<!-- sent="Tue, 04 Dec 2007 11:40:17 -0800" -->
<!-- isosent="20071204194017" -->
<!-- name="Arlin Davis" -->
<!-- email="ardavis_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue" -->
<!-- id="4755AD21.4080001_at_ichips.intel.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20071203224550.GF11990_at_opengridcomputing.com" -->
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
<strong>Date:</strong> 2007-12-04 14:40:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2717.php">Jon Mason: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>Previous message:</strong> <a href="2715.php">Jeff Squyres: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<li><strong>In reply to:</strong> <a href="2706.php">Jon Mason: "[OMPI devel] uDAPL EVD queue length issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2717.php">Jon Mason: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>Reply:</strong> <a href="2717.php">Jon Mason: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jon Mason wrote:
<br>
<span class="quotelev1">&gt; While working on OMPI udapl btl, I have noticed some &quot;interesting&quot;
</span><br>
<span class="quotelev1">&gt; behavior.  OFA udapl wants the evd queues to be a power of 2 and
</span><br>
<span class="quotelev1">&gt; then will subtract 1 for book keeping (ie, so that internal head and
</span><br>
<span class="quotelev1">&gt; tail pointers never touch except when the ring is empty).  OFA udapl
</span><br>
<span class="quotelev1">&gt; will report the queue length as this number (and not the original
</span><br>
<span class="quotelev1">&gt; size requested) when queried.  This becomes interesting when a power
</span><br>
<span class="quotelev1">&gt; of 2 is passed in and then queried.  For example, a requested queue
</span><br>
<span class="quotelev1">&gt; of length 256 will report a length of 255 when queried.  
</span><br>
<p>Something is not right. You should ALWAYS get at least what you request. 
<br>
On my system with an mthca, a request of 256 gets you 511. It is the 
<br>
verbs provider that is rounding up, not uDAPL.
<br>
<p>Here is my uDAPL debug output (DAPL_DBG_TYPE=0xffff) using dtest:
<br>
<p>&nbsp;&nbsp;cq_object_create: (0x519bb0,0x519d00)
<br>
dapls_ib_cq_alloc: evd 0x519bb0 cqlen=256
<br>
dapls_ib_cq_alloc: new_cq 0x519d60 cqlen=511
<br>
<p>This is before and after the ibv_create_cq call. uDAPL builds it's EVD 
<br>
resources based on what is returned from this call.
<br>
<p>I modified dtest to double check the dat_evd_query and I get the same:
<br>
<p>8962 dto_rcv_evd created 0x519e80
<br>
8962 dto_req_evd QLEN - requested 256 and actual 511
<br>
<p>What OFED release and device are you using?
<br>
<p>-arlin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2717.php">Jon Mason: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>Previous message:</strong> <a href="2715.php">Jeff Squyres: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<li><strong>In reply to:</strong> <a href="2706.php">Jon Mason: "[OMPI devel] uDAPL EVD queue length issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2717.php">Jon Mason: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>Reply:</strong> <a href="2717.php">Jon Mason: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
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
