<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 26 16:20:31 2005" -->
<!-- isoreceived="20050926212031" -->
<!-- sent="Mon, 26 Sep 2005 14:20:20 -0700" -->
<!-- isosent="20050926212020" -->
<!-- name="Roland Dreier" -->
<!-- email="rolandd_at_[hidden]" -->
<!-- subject="[PATCH] Update Open MPI for new libibverbs API" -->
<!-- id="52fyrrsezv.fsf_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="521x3btu1y.fsf_at_cisco.com" -->
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
<strong>From:</strong> Roland Dreier (<em>rolandd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-26 16:20:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0413.php">Galen M. Shipman: "Re:  p2p linpack ---"</a>
<li><strong>Previous message:</strong> <a href="0411.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component	--	linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0414.php">Brian Barrett: "Re:  [PATCH] Update Open MPI for new libibverbs API"</a>
<li><strong>Reply:</strong> <a href="0414.php">Brian Barrett: "Re:  [PATCH] Update Open MPI for new libibverbs API"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[It's somewhat annoying to have to subscribe to devel_at_[hidden]
<br>
just to be able to send patches, but oh well...]
<br>
<p><p>This patch updates Open MPI for the new ibv_create_cq() API.
<br>
<p>Signed-off-by: Roland Dreier &lt;rolandd_at_[hidden]&gt;
<br>
<p>--- ompi/mca/btl/openib/btl_openib.c	(revision 7507)
<br>
+++ ompi/mca/btl/openib/btl_openib.c	(working copy)
<br>
@@ -656,7 +656,8 @@ int mca_btl_openib_module_init(mca_btl_o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Create the low and high priority queue pairs */ 
<br>
-    openib_btl-&gt;ib_cq_low = ibv_create_cq(ctx, mca_btl_openib_component.ib_cq_size, NULL); 
<br>
+    openib_btl-&gt;ib_cq_low = ibv_create_cq(ctx, mca_btl_openib_component.ib_cq_size,
<br>
+		                          NULL, NULL, 0); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(NULL == openib_btl-&gt;ib_cq_low) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTL_ERROR((&quot;error creating low priority cq for %s errno says %s\n&quot;,
<br>
@@ -665,7 +666,8 @@ int mca_btl_openib_module_init(mca_btl_o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
-    openib_btl-&gt;ib_cq_high = ibv_create_cq(ctx, mca_btl_openib_component.ib_cq_size, NULL); 
<br>
+    openib_btl-&gt;ib_cq_high = ibv_create_cq(ctx, mca_btl_openib_component.ib_cq_size,
<br>
+		                           NULL, NULL, 0); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(NULL == openib_btl-&gt;ib_cq_high) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTL_ERROR((&quot;error creating high priority cq for %s errno says %s\n&quot;, 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0413.php">Galen M. Shipman: "Re:  p2p linpack ---"</a>
<li><strong>Previous message:</strong> <a href="0411.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component	--	linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0414.php">Brian Barrett: "Re:  [PATCH] Update Open MPI for new libibverbs API"</a>
<li><strong>Reply:</strong> <a href="0414.php">Brian Barrett: "Re:  [PATCH] Update Open MPI for new libibverbs API"</a>
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
