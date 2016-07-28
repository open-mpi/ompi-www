<?
$subject_val = "[OMPI devel] Setting CQ depth";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 25 16:05:49 2008" -->
<!-- isoreceived="20080225210549" -->
<!-- sent="Mon, 25 Feb 2008 15:05:43 -0600" -->
<!-- isosent="20080225210543" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="[OMPI devel] Setting CQ depth" -->
<!-- id="20080225210543.GC19285_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Setting CQ depth<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-25 16:05:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3301.php">Si Hammond: "[OMPI devel] Error Running Executable Linking C++, C, F77 and F90"</a>
<li><strong>Previous message:</strong> <a href="3299.php">Jeff Squyres: "[OMPI devel] plpa"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3302.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Setting CQ depth"</a>
<li><strong>Reply:</strong> <a href="3302.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Setting CQ depth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A quick sanity check.
<br>
<p>When setting the cq depth in the openib btl, it checks the calculated
<br>
depth against the maxmium cq depth allowed and sets the minimum of those
<br>
two.  However, I think it is checking the wrong variable.  If I
<br>
understand correctly, ib_dev_attr.max_cq represents the maximum number
<br>
of cqs while ib_dev_attr.max_cqe represents the max depth allowed in
<br>
each individual cq.  Is this correct?
<br>
<p>If the above is true, then I'll apply the patch below.
<br>
<p>Thanks,
<br>
Jon
<br>
<p>Index: ompi/mca/btl/openib/btl_openib.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/btl_openib.c    (revision 17472)
<br>
+++ ompi/mca/btl/openib/btl_openib.c    (working copy)
<br>
@@ -140,8 +140,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(cq_size &lt; mca_btl_openib_component.ib_cq_size[cq])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cq_size = mca_btl_openib_component.ib_cq_size[cq];
<br>
<p>-    if(cq_size &gt; (uint32_t)hca-&gt;ib_dev_attr.max_cq)
<br>
-        cq_size = hca-&gt;ib_dev_attr.max_cq;
<br>
+    if(cq_size &gt; (uint32_t)hca-&gt;ib_dev_attr.max_cqe)
<br>
+        cq_size = hca-&gt;ib_dev_attr.max_cqe;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(NULL == hca-&gt;ib_cq[cq]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hca-&gt;ib_cq[cq] = ibv_create_cq_compat(hca-&gt;ib_dev_context, cq_size,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3301.php">Si Hammond: "[OMPI devel] Error Running Executable Linking C++, C, F77 and F90"</a>
<li><strong>Previous message:</strong> <a href="3299.php">Jeff Squyres: "[OMPI devel] plpa"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3302.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Setting CQ depth"</a>
<li><strong>Reply:</strong> <a href="3302.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Setting CQ depth"</a>
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
