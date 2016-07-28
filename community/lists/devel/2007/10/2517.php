<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Oct 28 09:13:57 2007" -->
<!-- isoreceived="20071028131357" -->
<!-- sent="Sun, 28 Oct 2007 15:13:48 +0200" -->
<!-- isosent="20071028131348" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[OMPI devel] bml_btl-&amp;gt;btl_alloc() instead of mca_bml_base_alloc() in OSC" -->
<!-- id="20071028131348.GN12525_at_minantech.com" -->
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
<strong>Date:</strong> 2007-10-28 09:13:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2518.php">Brian Barrett: "Re: [OMPI devel] bml_btl-&gt;btl_alloc() instead of mca_bml_base_alloc() in OSC"</a>
<li><strong>Previous message:</strong> <a href="2516.php">Jeff Squyres: "[OMPI devel] more vt-integration questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2518.php">Brian Barrett: "Re: [OMPI devel] bml_btl-&gt;btl_alloc() instead of mca_bml_base_alloc() in OSC"</a>
<li><strong>Reply:</strong> <a href="2518.php">Brian Barrett: "Re: [OMPI devel] bml_btl-&gt;btl_alloc() instead of mca_bml_base_alloc() in OSC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian,
<br>
<p>&nbsp;&nbsp;Is there a special reason why you call btl functions directly instead
<br>
of using bml wrappers? What about applying this patch?
<br>
<p><p>diff --git a/ompi/mca/osc/rdma/osc_rdma_component.c b/ompi/mca/osc/rdma/osc_rdma_component.c
<br>
index 2d0dc06..302dd9e 100644
<br>
--- a/ompi/mca/osc/rdma/osc_rdma_component.c
<br>
+++ b/ompi/mca/osc/rdma/osc_rdma_component.c
<br>
@@ -1044,9 +1044,8 @@ rdma_send_info_send(ompi_osc_rdma_module_t *module,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_osc_rdma_rdma_info_header_t *header = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bml_btl = peer_send_info-&gt;bml_btl;
<br>
-    descriptor = bml_btl-&gt;btl_alloc(bml_btl-&gt;btl,
<br>
-                                    MCA_BTL_NO_ORDER,
<br>
-                                    sizeof(ompi_osc_rdma_rdma_info_header_t));
<br>
+    mca_bml_base_alloc(bml_btl, &amp;descriptor, MCA_BTL_NO_ORDER,
<br>
+            sizeof(ompi_osc_rdma_rdma_info_header_t));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == descriptor) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = OMPI_ERR_TEMP_OUT_OF_RESOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto cleanup;
<br>
diff --git a/ompi/mca/osc/rdma/osc_rdma_data_move.c b/ompi/mca/osc/rdma/osc_rdma_data_move.c
<br>
index e9fd17c..e7b5813 100644
<br>
--- a/ompi/mca/osc/rdma/osc_rdma_data_move.c
<br>
+++ b/ompi/mca/osc/rdma/osc_rdma_data_move.c
<br>
@@ -454,10 +454,10 @@ ompi_osc_rdma_sendreq_send(ompi_osc_rdma_module_t *module,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* get a buffer... */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endpoint = (mca_bml_base_endpoint_t*) sendreq-&gt;req_target_proc-&gt;proc_bml;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bml_btl = mca_bml_base_btl_array_get_next(&amp;endpoint-&gt;btl_eager);
<br>
-        descriptor = bml_btl-&gt;btl_alloc(bml_btl-&gt;btl,
<br>
-                                        MCA_BTL_NO_ORDER,
<br>
-                                        module-&gt;m_use_buffers ? bml_btl-&gt;btl_eager_limit : needed_len &lt; bml_btl-&gt;btl_eager_limit ? needed_len :
<br>
-                                        bml_btl-&gt;btl_eager_limit);
<br>
+        mca_bml_base_alloc(bml_btl, &amp;descriptor, MCA_BTL_NO_ORDER,
<br>
+                module-&gt;m_use_buffers ? bml_btl-&gt;btl_eager_limit :
<br>
+                needed_len &lt; bml_btl-&gt;btl_eager_limit ? needed_len :
<br>
+                bml_btl-&gt;btl_eager_limit);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == descriptor) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = OMPI_ERR_TEMP_OUT_OF_RESOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto cleanup;
<br>
@@ -698,9 +698,8 @@ ompi_osc_rdma_replyreq_send(ompi_osc_rdma_module_t *module,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Get a BTL and a fragment to go with it */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endpoint = (mca_bml_base_endpoint_t*) replyreq-&gt;rep_origin_proc-&gt;proc_bml;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bml_btl = mca_bml_base_btl_array_get_next(&amp;endpoint-&gt;btl_eager);
<br>
-    descriptor = bml_btl-&gt;btl_alloc(bml_btl-&gt;btl,
<br>
-                                    MCA_BTL_NO_ORDER,
<br>
-                                    bml_btl-&gt;btl_eager_limit);
<br>
+    mca_bml_base_alloc(bml_btl, &amp;descriptor, MCA_BTL_NO_ORDER,
<br>
+            bml_btl-&gt;btl_eager_limit);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == descriptor) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = OMPI_ERR_TEMP_OUT_OF_RESOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto cleanup;
<br>
@@ -1260,9 +1259,8 @@ ompi_osc_rdma_control_send(ompi_osc_rdma_module_t *module,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Get a BTL and a fragment to go with it */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endpoint = (mca_bml_base_endpoint_t*) proc-&gt;proc_bml;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bml_btl = mca_bml_base_btl_array_get_next(&amp;endpoint-&gt;btl_eager);
<br>
-    descriptor = bml_btl-&gt;btl_alloc(bml_btl-&gt;btl,
<br>
-                                    MCA_BTL_NO_ORDER,
<br>
-                                    sizeof(ompi_osc_rdma_control_header_t));
<br>
+    mca_bml_base_alloc(bml_btl, &amp;descriptor, MCA_BTL_NO_ORDER,
<br>
+            sizeof(ompi_osc_rdma_control_header_t));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == descriptor) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = OMPI_ERR_TEMP_OUT_OF_RESOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto cleanup;
<br>
@@ -1322,9 +1320,8 @@ ompi_osc_rdma_rdma_ack_send(ompi_osc_rdma_module_t *module,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_osc_rdma_control_header_t *header = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Get a BTL and a fragment to go with it */
<br>
-    descriptor = bml_btl-&gt;btl_alloc(bml_btl-&gt;btl,
<br>
-                                    rdma_btl-&gt;rdma_order,
<br>
-                                    sizeof(ompi_osc_rdma_control_header_t));
<br>
+    mca_bml_base_alloc(bml_btl, &amp;descriptor, rdma_btl-&gt;rdma_order,
<br>
+            sizeof(ompi_osc_rdma_control_header_t));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == descriptor) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = OMPI_ERR_TEMP_OUT_OF_RESOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto cleanup;
<br>
<pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2518.php">Brian Barrett: "Re: [OMPI devel] bml_btl-&gt;btl_alloc() instead of mca_bml_base_alloc() in OSC"</a>
<li><strong>Previous message:</strong> <a href="2516.php">Jeff Squyres: "[OMPI devel] more vt-integration questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2518.php">Brian Barrett: "Re: [OMPI devel] bml_btl-&gt;btl_alloc() instead of mca_bml_base_alloc() in OSC"</a>
<li><strong>Reply:</strong> <a href="2518.php">Brian Barrett: "Re: [OMPI devel] bml_btl-&gt;btl_alloc() instead of mca_bml_base_alloc() in OSC"</a>
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
