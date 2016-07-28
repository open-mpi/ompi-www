<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 31 11:58:55 2005" -->
<!-- isoreceived="20051031165855" -->
<!-- sent="Mon, 31 Oct 2005 18:57:59 +0200" -->
<!-- isosent="20051031165759" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[PATCH] casting is bad!" -->
<!-- id="20051031165759.GA3261_at_minantech.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-31 11:57:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0511.php">Gleb Natapov: "[PATCH] same for mvapi"</a>
<li><strong>Previous message:</strong> <a href="0509.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0512.php">Tim S. Woodall: "Re:  [PATCH] casting is bad!"</a>
<li><strong>Reply:</strong> <a href="0512.php">Tim S. Woodall: "Re:  [PATCH] casting is bad!"</a>
<li><strong>Reply:</strong> <a href="0513.php">Galen M. Shipman: "Re:  [PATCH] casting is bad!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Index: ompi/mca/btl/openib/btl_openib_component.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/btl_openib_component.c	(revision 7935)
<br>
+++ ompi/mca/btl/openib/btl_openib_component.c	(working copy)
<br>
@@ -165,7 +165,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_param_register_int(&quot;ib_retry_count&quot;, &quot;IB transmit retry count&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7, (int*) &amp;mca_btl_openib_component.ib_retry_count); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_param_register_int(&quot;ib_rnr_retry&quot;, &quot;IB rnr retry&quot;, 
<br>
-                                      7, (int*) mca_btl_openib_component.ib_rnr_retry); 
<br>
+                                      7, (int*) &amp;mca_btl_openib_component.ib_rnr_retry); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_param_register_int(&quot;ib_max_rdma_dst_ops&quot;, &quot;IB max rdma destination operations&quot;, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16, (int*) &amp;mca_btl_openib_component.ib_max_rdma_dst_ops); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_param_register_int(&quot;ib_service_level&quot;, &quot;IB service level&quot;, 
<br>
<pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0511.php">Gleb Natapov: "[PATCH] same for mvapi"</a>
<li><strong>Previous message:</strong> <a href="0509.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0512.php">Tim S. Woodall: "Re:  [PATCH] casting is bad!"</a>
<li><strong>Reply:</strong> <a href="0512.php">Tim S. Woodall: "Re:  [PATCH] casting is bad!"</a>
<li><strong>Reply:</strong> <a href="0513.php">Galen M. Shipman: "Re:  [PATCH] casting is bad!"</a>
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
