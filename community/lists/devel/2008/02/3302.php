<?
$subject_val = "Re: [OMPI devel] Setting CQ depth";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 26 03:07:45 2008" -->
<!-- isoreceived="20080226080745" -->
<!-- sent="Tue, 26 Feb 2008 10:07:35 +0200" -->
<!-- isosent="20080226080735" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Setting CQ depth" -->
<!-- id="47C3C8C7.3000804_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080225210543.GC19285_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Setting CQ depth<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-26 03:07:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3303.php">Sharon Melamed: "Re: [OMPI devel] plpa"</a>
<li><strong>Previous message:</strong> <a href="3301.php">Si Hammond: "[OMPI devel] Error Running Executable Linking C++, C, F77 and F90"</a>
<li><strong>In reply to:</strong> <a href="3300.php">Jon Mason: "[OMPI devel] Setting CQ depth"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please apply. It should be cqe.
<br>
Pasha.
<br>
<p>Jon Mason wrote:
<br>
<span class="quotelev1">&gt; A quick sanity check.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When setting the cq depth in the openib btl, it checks the calculated
</span><br>
<span class="quotelev1">&gt; depth against the maxmium cq depth allowed and sets the minimum of those
</span><br>
<span class="quotelev1">&gt; two.  However, I think it is checking the wrong variable.  If I
</span><br>
<span class="quotelev1">&gt; understand correctly, ib_dev_attr.max_cq represents the maximum number
</span><br>
<span class="quotelev1">&gt; of cqs while ib_dev_attr.max_cqe represents the max depth allowed in
</span><br>
<span class="quotelev1">&gt; each individual cq.  Is this correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the above is true, then I'll apply the patch below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/btl_openib.c    (revision 17472)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/btl_openib.c    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -140,8 +140,8 @@
</span><br>
<span class="quotelev1">&gt;       if(cq_size &lt; mca_btl_openib_component.ib_cq_size[cq])
</span><br>
<span class="quotelev1">&gt;          cq_size = mca_btl_openib_component.ib_cq_size[cq];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if(cq_size &gt; (uint32_t)hca-&gt;ib_dev_attr.max_cq)
</span><br>
<span class="quotelev1">&gt; -        cq_size = hca-&gt;ib_dev_attr.max_cq;
</span><br>
<span class="quotelev1">&gt; +    if(cq_size &gt; (uint32_t)hca-&gt;ib_dev_attr.max_cqe)
</span><br>
<span class="quotelev1">&gt; +        cq_size = hca-&gt;ib_dev_attr.max_cqe;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if(NULL == hca-&gt;ib_cq[cq]) {
</span><br>
<span class="quotelev1">&gt;          hca-&gt;ib_cq[cq] = ibv_create_cq_compat(hca-&gt;ib_dev_context, cq_size,
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Pavel Shamis (Pasha)
Mellanox Technologies
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3303.php">Sharon Melamed: "Re: [OMPI devel] plpa"</a>
<li><strong>Previous message:</strong> <a href="3301.php">Si Hammond: "[OMPI devel] Error Running Executable Linking C++, C, F77 and F90"</a>
<li><strong>In reply to:</strong> <a href="3300.php">Jon Mason: "[OMPI devel] Setting CQ depth"</a>
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
