<?
$subject_val = "[OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 18:59:07 2007" -->
<!-- isoreceived="20071211235907" -->
<!-- sent="Tue, 11 Dec 2007 17:59:03 -0600" -->
<!-- isosent="20071211235903" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's" -->
<!-- id="20071211235902.GA12801_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 18:59:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2798.php">Jeff Squyres: "[OMPI devel] Fwd: Subversion and trac outage"</a>
<li><strong>Previous message:</strong> <a href="2796.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2799.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>Reply:</strong> <a href="2799.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Currently, alternate CMs cannot be called because
<br>
ompi_btl_openib_connect_base_open forces a choice of either oob or xoob
<br>
(and goes into an erroneous error path if you pick something else).
<br>
This patch reorganizes ompi_btl_openib_connect_base_open so that new
<br>
functions can easily be added.  New Open functions were added to oob
<br>
and xoob for the error handling.
<br>
<p>I tested calling oob, xoob, and rdma_cm.  oob happily allows connections
<br>
to be established and throws no errors.  xoob fails because ompi does
<br>
not have it compiled in (and I have no connectx cards).  rdma_cm calls
<br>
the empty hooks and exits without connecting (thus throwing
<br>
non-connection errors).  All expected behavior.
<br>
<p>Since this patch fixes the existing behavior, and is not necessarily
<br>
tied to my implementing of rdma_cm, I think it is acceptable to go in
<br>
now.  
<br>
<p>Thanks,
<br>
Jon
<br>
<p>Index: ompi/mca/btl/openib/connect/btl_openib_connect_base.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/connect/btl_openib_connect_base.c	(revision 16937)
<br>
+++ ompi/mca/btl/openib/connect/btl_openib_connect_base.c	(working copy)
<br>
@@ -50,8 +50,8 @@
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;int ompi_btl_openib_connect_base_open(void)
<br>
&nbsp;{
<br>
-    int i;
<br>
-    char **temp, *a, *b;
<br>
+    char **temp, *a, *b, *defval;
<br>
+    int i, ret = OMPI_ERROR;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Make an MCA parameter to select which connect module to use */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;temp = NULL;
<br>
@@ -66,40 +66,23 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* For XRC qps we must to use XOOB connection manager */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mca_btl_openib_component.num_xrc_qps &gt; 0) {
<br>
-        mca_base_param_reg_string(&amp;mca_btl_openib_component.super.btl_version,
<br>
-                &quot;connect&quot;,
<br>
-                b, false, false,
<br>
-                &quot;xoob&quot;, &amp;param);
<br>
-        if (0 != strcmp(&quot;xoob&quot;, param)) {
<br>
-            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
<br>
-                    &quot;XRC with wrong OOB&quot;, true,
<br>
-                    orte_system_info.nodename,
<br>
-                    mca_btl_openib_component.num_xrc_qps);
<br>
-            return OMPI_ERROR;
<br>
-        }
<br>
+	defval = &quot;xoob&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else { /* For all others we should use OOB */
<br>
-        mca_base_param_reg_string(&amp;mca_btl_openib_component.super.btl_version,
<br>
-                &quot;connect&quot;,
<br>
-                b, false, false,
<br>
-                &quot;oob&quot;, &amp;param);
<br>
-        if (0 != strcmp(&quot;oob&quot;, param)) {
<br>
-            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
<br>
-                    &quot;SRQ or PP with wrong OOB&quot;, true,
<br>
-                    orte_system_info.nodename,
<br>
-                    mca_btl_openib_component.num_srq_qps,
<br>
-                    mca_btl_openib_component.num_pp_qps);
<br>
-            return OMPI_ERROR;
<br>
-        }
<br>
+	defval = &quot;oob&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
+    mca_base_param_reg_string(&amp;mca_btl_openib_component.super.btl_version,
<br>
+			      &quot;connect&quot;, b, false, false, defval, &amp;param);
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Call the open function on all the connect modules */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; NULL != all[i]; ++i) {
<br>
-        if (NULL != all[i]-&gt;bcf_open) {
<br>
-            all[i]-&gt;bcf_open();
<br>
+        if (0 == strcmp(all[i]-&gt;bcf_name, param)) {
<br>
+            ret = all[i]-&gt;bcf_open();
<br>
+	    break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
-    return OMPI_SUCCESS;
<br>
+    return ret;
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;
<br>
Index: ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	(revision 16937)
<br>
+++ ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	(working copy)
<br>
@@ -28,11 +28,7 @@
<br>
&nbsp;
<br>
&nbsp;static int ibcm_open(void)
<br>
&nbsp;{
<br>
-    mca_base_param_reg_int(&amp;mca_btl_openib_component.super.btl_version,
<br>
-                           &quot;btl_openib_connect_ibcm_foo&quot;,
<br>
-                           &quot;A dummy help message&quot;, false, false,
<br>
-                           17, NULL);
<br>
-
<br>
+    printf(&quot;ibcm open\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;}
<br>
&nbsp;
<br>
Index: ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	(revision 16937)
<br>
+++ ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	(working copy)
<br>
@@ -22,6 +22,8 @@
<br>
&nbsp;
<br>
&nbsp;#include &quot;ompi_config.h&quot;
<br>
&nbsp;
<br>
+#include &quot;opal/util/show_help.h&quot;
<br>
+
<br>
&nbsp;#include &quot;orte/mca/ns/base/base.h&quot;
<br>
&nbsp;#include &quot;orte/mca/oob/base/base.h&quot;
<br>
&nbsp;#include &quot;orte/mca/rml/rml.h&quot;
<br>
@@ -39,6 +41,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ENDPOINT_CONNECT_ACK
<br>
&nbsp;} connect_message_type_t;
<br>
&nbsp;
<br>
+static int oob_open(void);
<br>
&nbsp;static int oob_init(void);
<br>
&nbsp;static int oob_start_connect(mca_btl_base_endpoint_t *e);
<br>
&nbsp;static int oob_finalize(void);
<br>
@@ -67,8 +70,8 @@
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;ompi_btl_openib_connect_base_funcs_t ompi_btl_openib_connect_oob = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;oob&quot;,
<br>
-    /* No need for &quot;open */
<br>
-    NULL,
<br>
+    /* Open */
<br>
+    oob_open,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Init */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;oob_init,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Connect */
<br>
@@ -78,6 +81,23 @@
<br>
&nbsp;};
<br>
&nbsp;
<br>
&nbsp;/*
<br>
+ * Open function.
<br>
+ */
<br>
+static int oob_open(void)
<br>
+{
<br>
+    if (mca_btl_openib_component.num_xrc_qps &gt; 0) {
<br>
+            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
<br>
+                    &quot;SRQ or PP with wrong OOB&quot;, true,
<br>
+                    orte_system_info.nodename,
<br>
+                    mca_btl_openib_component.num_srq_qps,
<br>
+                    mca_btl_openib_component.num_pp_qps);
<br>
+            return OMPI_ERROR;
<br>
+    }
<br>
+
<br>
+    return OMPI_SUCCESS;
<br>
+}
<br>
+
<br>
+/*
<br>
&nbsp;&nbsp;* Init function.  Post non-blocking RML receive to accept incoming
<br>
&nbsp;&nbsp;* connection requests.
<br>
&nbsp;&nbsp;*/
<br>
Index: ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c	(revision 16937)
<br>
+++ ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c	(working copy)
<br>
@@ -28,11 +28,7 @@
<br>
&nbsp;
<br>
&nbsp;static int rdma_cm_open(void)
<br>
&nbsp;{
<br>
-    mca_base_param_reg_int(&amp;mca_btl_openib_component.super.btl_version,
<br>
-                           &quot;btl_openib_connect_rdma_cm_foo&quot;,
<br>
-                           &quot;A dummy help message&quot;, false, false,
<br>
-                           17, NULL);
<br>
-
<br>
+    printf(&quot;rdma cm open\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;}
<br>
&nbsp;
<br>
Index: ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	(revision 16937)
<br>
+++ ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	(working copy)
<br>
@@ -10,6 +10,8 @@
<br>
&nbsp;
<br>
&nbsp;#include &quot;ompi_config.h&quot;
<br>
&nbsp;
<br>
+#include &quot;opal/util/show_help.h&quot;
<br>
+
<br>
&nbsp;#include &quot;orte/mca/ns/base/base.h&quot;
<br>
&nbsp;#include &quot;orte/mca/oob/base/base.h&quot;
<br>
&nbsp;#include &quot;orte/mca/rml/rml.h&quot;
<br>
@@ -22,6 +24,7 @@
<br>
&nbsp;#include &quot;btl_openib_xrc.h&quot;
<br>
&nbsp;#include &quot;connect/connect.h&quot;
<br>
&nbsp;
<br>
+static int xoob_open(void);
<br>
&nbsp;static int xoob_init(void);
<br>
&nbsp;static int xoob_start_connect(mca_btl_base_endpoint_t *e);
<br>
&nbsp;static int xoob_finalize(void);
<br>
@@ -32,8 +35,8 @@
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;ompi_btl_openib_connect_base_funcs_t ompi_btl_openib_connect_xoob = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;xoob&quot;,
<br>
-    /* No need for &quot;open */
<br>
-    NULL,
<br>
+    /* Open */
<br>
+    xoob_open,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Init */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xoob_init,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Connect */
<br>
@@ -99,7 +102,24 @@
<br>
&nbsp;
<br>
&nbsp;static int init_rem_info(mca_btl_openib_rem_info_t *rem_info);
<br>
&nbsp;static void free_rem_info(mca_btl_openib_rem_info_t *rem_info);
<br>
+
<br>
&nbsp;/*
<br>
+ * Open function.
<br>
+ */
<br>
+static int xoob_open(void)
<br>
+{
<br>
+    if (mca_btl_openib_component.num_xrc_qps &lt;= 0) {
<br>
+            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
<br>
+                    &quot;XRC with wrong OOB&quot;, true,
<br>
+                    orte_system_info.nodename,
<br>
+                    mca_btl_openib_component.num_xrc_qps);
<br>
+            return OMPI_ERROR;
<br>
+    }
<br>
+
<br>
+    return OMPI_SUCCESS;
<br>
+}
<br>
+
<br>
+/*
<br>
&nbsp;&nbsp;* Init function.  Post non-blocking RML receive to accept incoming
<br>
&nbsp;&nbsp;* connection requests.
<br>
&nbsp;&nbsp;*/
<br>
@@ -834,6 +854,12 @@
<br>
&nbsp;
<br>
&nbsp;#else
<br>
&nbsp;/* In case if the XRC was disabled during compilation we will print message and return error */
<br>
+static int xoob_open(void)
<br>
+{
<br>
+    printf(&quot;xoob open\n&quot;);
<br>
+    return OMPI_ERR_NOT_IMPLEMENTED;
<br>
+}
<br>
+
<br>
&nbsp;static int xoob_init(void)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;xoob init\n&quot;);
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2798.php">Jeff Squyres: "[OMPI devel] Fwd: Subversion and trac outage"</a>
<li><strong>Previous message:</strong> <a href="2796.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2799.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>Reply:</strong> <a href="2799.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
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
