<?
$subject_val = "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusters support.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 16 10:48:59 2009" -->
<!-- isoreceived="20091116154859" -->
<!-- sent="Mon, 16 Nov 2009 17:46:21 +0200" -->
<!-- isosent="20091116154621" -->
<!-- name="Vasily Philipov" -->
<!-- email="vasily_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusters support." -->
<!-- id="4B0173CD.2010006_at_dev.mellanox.co.il" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4AB9E4E2.10203_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusters support.<br>
<strong>From:</strong> Vasily Philipov (<em>vasily_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-16 10:46:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7121.php">Christopher Yeoh: "Re: [OMPI devel] mpool rdma deadlock - malloc implementation issue"</a>
<li><strong>Previous message:</strong> <a href="7119.php">Vasily Philipov: "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6879.php">Vasily Filipov: "[OMPI devel] [PATCH] Improving heterogeneous IB clusters support."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7146.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusterssupport."</a>
<li><strong>Reply:</strong> <a href="7146.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusterssupport."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Vasily Filipov wrote:
<br>
<p>Hello.
<br>
Here is new patch for heterogeneous clusters supporting.
<br>
&nbsp;
<br>
Please comment.
<br>
<p>Regards,
<br>
Vasily
<br>
<p><p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some time ago Mellanox proposed design that should improve current 
</span><br>
<span class="quotelev1">&gt; support for heterogeneous clusters (see Design.txt).The design was 
</span><br>
<span class="quotelev1">&gt; accepted by IB vendors, and now we propose patch that adds a 
</span><br>
<span class="quotelev1">&gt; heterogeneous cluster support. The path leaves one issue that we do 
</span><br>
<span class="quotelev1">&gt; not resolve completely. If 2 different procs have different QPs 
</span><br>
<span class="quotelev1">&gt; configuration (P/S/X) we print nice warning message that describes 
</span><br>
<span class="quotelev1">&gt; that such configuration is not supported and it propose way to resolve 
</span><br>
<span class="quotelev1">&gt; the issue.  Theoretically it will be best to provide solution that 
</span><br>
<span class="quotelev1">&gt; automatically will resolve the problem, but it will require 
</span><br>
<span class="quotelev1">&gt; significant changes on openib blt that we don&#226;&#128;&#153;t want to introduce in 
</span><br>
<span class="quotelev1">&gt; this stage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please comment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Vasily
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<p>
diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib.c
<br>
--- a/ompi/mca/btl/openib/btl_openib.c	Fri Nov 06 12:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/btl_openib.c	Mon Nov 16 17:41:48 2009 +0200
<br>
@@ -39,6 +39,8 @@
<br>
&nbsp;#include &quot;ompi/runtime/ompi_cr.h&quot;
<br>
&nbsp;#endif
<br>
&nbsp;
<br>
+#include &quot;btl_openib_ini.h&quot;
<br>
+
<br>
&nbsp;#include &quot;btl_openib.h&quot;
<br>
&nbsp;#include &quot;btl_openib_frag.h&quot;
<br>
&nbsp;#include &quot;btl_openib_proc.h&quot;
<br>
@@ -287,6 +289,158 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;}
<br>
&nbsp;
<br>
+const char* btl_openib_get_transport_name(mca_btl_openib_transport_type_t transport_type)
<br>
+{
<br>
+    switch(transport_type) {
<br>
+        case MCA_BTL_OPENIB_TRANSPORT_RDMAOE:
<br>
+            return &quot;MCA_BTL_OPENIB_TRANSPORT_RDMAOE&quot;;
<br>
+
<br>
+        case MCA_BTL_OPENIB_TRANSPORT_IB:
<br>
+            return &quot;MCA_BTL_OPENIB_TRANSPORT_IB&quot;;
<br>
+
<br>
+        case MCA_BTL_OPENIB_TRANSPORT_IWARP:
<br>
+            return &quot;MCA_BTL_OPENIB_TRANSPORT_IWARP&quot;;
<br>
+
<br>
+        case MCA_BTL_OPENIB_TRANSPORT_UNKNOWN:
<br>
+        default:
<br>
+            return &quot;MCA_BTL_OPENIB_TRANSPORT_UNKNOWN&quot;;
<br>
+    }
<br>
+}
<br>
+
<br>
+mca_btl_openib_transport_type_t mca_btl_openib_get_transport_type(mca_btl_openib_module_t* openib_btl)
<br>
+{
<br>
+#ifdef OMPI_HAVE_RDMAOE
<br>
+    switch(openib_btl-&gt;ib_port_attr.transport) {
<br>
+        case RDMA_TRANSPORT_IB:
<br>
+            return MCA_BTL_OPENIB_TRANSPORT_IB;
<br>
+
<br>
+        case RDMA_TRANSPORT_IWARP:
<br>
+            return MCA_BTL_OPENIB_TRANSPORT_IWARP;
<br>
+
<br>
+        case RDMA_TRANSPORT_RDMAOE:
<br>
+            return MCA_BTL_OPENIB_TRANSPORT_RDMAOE;
<br>
+
<br>
+        default:
<br>
+            return MCA_BTL_OPENIB_TRANSPORT_UNKNOWN;
<br>
+    }
<br>
+#else
<br>
+#ifdef HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE
<br>
+    switch(openib_btl-&gt;device-&gt;ib_dev-&gt;transport_type) {
<br>
+        case IBV_TRANSPORT_IB:
<br>
+            return MCA_BTL_OPENIB_TRANSPORT_IB;
<br>
+
<br>
+        case IBV_TRANSPORT_IWARP:
<br>
+            return MCA_BTL_OPENIB_TRANSPORT_IWARP;
<br>
+
<br>
+        case IBV_TRANSPORT_UNKNOWN:		 
<br>
+        default:
<br>
+            return MCA_BTL_OPENIB_TRANSPORT_UNKNOWN;
<br>
+    }
<br>
+#endif
<br>
+    return MCA_BTL_OPENIB_TRANSPORT_IB;
<br>
+#endif
<br>
+}
<br>
+
<br>
+static int mca_btl_openib_tune_endpoint(mca_btl_openib_module_t* openib_btl, 
<br>
+                                            mca_btl_base_endpoint_t* endpoint)
<br>
+{
<br>
+    int ret = OMPI_SUCCESS;
<br>
+
<br>
+    char* recv_qps = NULL;
<br>
+
<br>
+    ompi_btl_openib_ini_values_t values;
<br>
+
<br>
+    if(mca_btl_openib_get_transport_type(openib_btl) != endpoint-&gt;rem_info.rem_transport_type) {
<br>
+        orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
<br>
+                &quot;conflicting transport types&quot;, true,
<br>
+                orte_process_info.nodename,
<br>
+                        ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev),
<br>
+                        (openib_btl-&gt;device-&gt;ib_dev_attr).vendor_id,
<br>
+                        (openib_btl-&gt;device-&gt;ib_dev_attr).vendor_part_id,
<br>
+                        btl_openib_get_transport_name(mca_btl_openib_get_transport_type(openib_btl)),
<br>
+                        endpoint-&gt;endpoint_proc-&gt;proc_ompi-&gt;proc_hostname,
<br>
+                        endpoint-&gt;rem_info.rem_vendor_id,
<br>
+                        endpoint-&gt;rem_info.rem_vendor_part_id,
<br>
+                        btl_openib_get_transport_name(endpoint-&gt;rem_info.rem_transport_type));
<br>
+    
<br>
+        return OMPI_ERROR;
<br>
+    }
<br>
+
<br>
+    memset(&amp;values, 0, sizeof(ompi_btl_openib_ini_values_t));
<br>
+    ret = ompi_btl_openib_ini_query(endpoint-&gt;rem_info.rem_vendor_id,
<br>
+                          endpoint-&gt;rem_info.rem_vendor_part_id, &amp;values);
<br>
+
<br>
+    if (OMPI_SUCCESS != ret &amp;&amp; OMPI_ERR_NOT_FOUND != ret) {
<br>
+        orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
<br>
+                       &quot;error in device init&quot;, true,
<br>
+                       orte_process_info.nodename,
<br>
+                       ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev));
<br>
+        return ret;
<br>
+    }
<br>
+
<br>
+    if(openib_btl-&gt;device-&gt;mtu &lt; endpoint-&gt;rem_info.rem_mtu) {
<br>
+        endpoint-&gt;rem_info.rem_mtu = openib_btl-&gt;device-&gt;mtu; 
<br>
+    }
<br>
+
<br>
+    endpoint-&gt;use_eager_rdma = openib_btl-&gt;device-&gt;use_eager_rdma &amp;
<br>
+                               endpoint-&gt;use_eager_rdma;
<br>
+
<br>
+    /* Receive queues checking */
<br>
+    switch(mca_btl_openib_component.receive_queues_source) {
<br>
+        case BTL_OPENIB_RQ_SOURCE_MCA:
<br>
+        case BTL_OPENIB_RQ_SOURCE_MAX:
<br>
+            break;
<br>
+
<br>
+        case BTL_OPENIB_RQ_SOURCE_DEVICE_INI:
<br>
+            if(NULL != values.receive_queues) {
<br>
+                recv_qps = values.receive_queues;
<br>
+            } else {
<br>
+                recv_qps = mca_btl_openib_component.default_recv_qps;
<br>
+            }
<br>
+
<br>
+            if(0 != strcmp(mca_btl_openib_component.receive_queues,
<br>
+                                                         recv_qps)) {
<br>
+                orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
<br>
+                               &quot;unsupported queues configuration&quot;, true,
<br>
+                               orte_process_info.nodename,
<br>
+                               ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev),
<br>
+                               (openib_btl-&gt;device-&gt;ib_dev_attr).vendor_id,
<br>
+                               (openib_btl-&gt;device-&gt;ib_dev_attr).vendor_part_id,
<br>
+                               mca_btl_openib_component.receive_queues,
<br>
+                               endpoint-&gt;endpoint_proc-&gt;proc_ompi-&gt;proc_hostname,
<br>
+                               endpoint-&gt;rem_info.rem_vendor_id,
<br>
+                               endpoint-&gt;rem_info.rem_vendor_part_id,
<br>
+                               recv_qps);
<br>
+
<br>
+                return OMPI_ERROR;
<br>
+            }
<br>
+            break;
<br>
+
<br>
+        case  BTL_OPENIB_RQ_SOURCE_DEFAULT:
<br>
+            if(NULL != values.receive_queues) {
<br>
+                if(0 != strcmp(mca_btl_openib_component.receive_queues,
<br>
+                                                values.receive_queues)) {
<br>
+                     orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
<br>
+                               &quot;unsupported queues configuration&quot;, true,
<br>
+                               orte_process_info.nodename,
<br>
+                               ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev),
<br>
+                               (openib_btl-&gt;device-&gt;ib_dev_attr).vendor_id,
<br>
+                               (openib_btl-&gt;device-&gt;ib_dev_attr).vendor_part_id,
<br>
+                               mca_btl_openib_component.receive_queues,
<br>
+                               endpoint-&gt;endpoint_proc-&gt;proc_ompi-&gt;proc_hostname,
<br>
+                               endpoint-&gt;rem_info.rem_vendor_id,
<br>
+                               endpoint-&gt;rem_info.rem_vendor_part_id,
<br>
+                               values.receive_queues);
<br>
+
<br>
+                    return OMPI_ERROR;
<br>
+                }
<br>
+            }
<br>
+            break;
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
&nbsp;/*
<br>
&nbsp;&nbsp;*  add a proc to this btl module
<br>
&nbsp;&nbsp;*    creates an endpoint that is setup on the
<br>
@@ -471,6 +625,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
+         if(OMPI_SUCCESS != mca_btl_openib_tune_endpoint(openib_btl, endpoint)) {
<br>
+            return OMPI_ERROR;
<br>
+        }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endpoint-&gt;index = opal_pointer_array_add(openib_btl-&gt;device-&gt;endpoints, (void*)endpoint);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( 0 &gt; endpoint-&gt;index ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(endpoint);
<br>
diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib.h
<br>
--- a/ompi/mca/btl/openib/btl_openib.h	Fri Nov 06 12:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/btl_openib.h	Mon Nov 16 17:41:48 2009 +0200
<br>
@@ -75,6 +75,13 @@
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;
<br>
&nbsp;typedef enum {
<br>
+    MCA_BTL_OPENIB_TRANSPORT_UNKNOWN    = -1,
<br>
+    MCA_BTL_OPENIB_TRANSPORT_IB    = 0,
<br>
+    MCA_BTL_OPENIB_TRANSPORT_IWARP,
<br>
+    MCA_BTL_OPENIB_TRANSPORT_RDMAOE
<br>
+} mca_btl_openib_transport_type_t;
<br>
+
<br>
+typedef enum {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_OPENIB_PP_QP,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_OPENIB_SRQ_QP,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_OPENIB_XRC_QP
<br>
@@ -254,6 +261,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_t recv_user_free;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/**&lt; frags for coalesced massages */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_t send_free_coalesced;
<br>
+    /**&lt; Default receive queues */
<br>
+    char* default_recv_qps;
<br>
&nbsp;}; typedef struct mca_btl_openib_component_t mca_btl_openib_component_t;
<br>
&nbsp;
<br>
&nbsp;OMPI_MODULE_DECLSPEC extern mca_btl_openib_component_t mca_btl_openib_component;
<br>
@@ -272,6 +281,12 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint16_t apm_lid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** The MTU used by this port */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint8_t mtu;
<br>
+    /** vendor id define device type and tuning */
<br>
+    uint32_t vendor_id;
<br>
+    /** vendor part id define device type and tuning */
<br>
+    uint32_t vendor_part_id;
<br>
+    /** Transport type of remote port */
<br>
+    uint8_t transport_type;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** Dummy field used to calculate the real length */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint8_t end;
<br>
&nbsp;} mca_btl_openib_modex_message_t;
<br>
@@ -633,6 +648,18 @@
<br>
&nbsp;
<br>
&nbsp;int mca_btl_openib_post_srr(mca_btl_openib_module_t* openib_btl, const int qp);
<br>
&nbsp;
<br>
+/**
<br>
+ * Get a transport name of btl by its transport type.
<br>
+ */
<br>
+
<br>
+const char* btl_openib_get_transport_name(mca_btl_openib_transport_type_t transport_type);
<br>
+
<br>
+/**
<br>
+ * Get a transport type of btl.
<br>
+ */
<br>
+
<br>
+mca_btl_openib_transport_type_t mca_btl_openib_get_transport_type(mca_btl_openib_module_t* openib_btl);
<br>
+
<br>
&nbsp;static inline int qp_cq_prio(const int qp)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(0 == qp)
<br>
diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib_component.c
<br>
--- a/ompi/mca/btl/openib/btl_openib_component.c	Fri Nov 06 12:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/btl_openib_component.c	Mon Nov 16 17:41:48 2009 +0200
<br>
@@ -143,6 +143,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CONSTRUCT(&amp;mca_btl_openib_component.devices, opal_pointer_array_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_component.devices_count = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_component.cpc_explicitly_defined = false;
<br>
+    mca_btl_openib_component.default_recv_qps = NULL;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* initialize objects */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CONSTRUCT(&amp;mca_btl_openib_component.ib_procs, opal_list_t);
<br>
@@ -196,6 +197,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(mca_btl_openib_component.receive_queues);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
+    if (NULL != mca_btl_openib_component.default_recv_qps) {
<br>
+        free(mca_btl_openib_component.default_recv_qps);
<br>
+    }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;}
<br>
&nbsp;
<br>
@@ -303,6 +308,16 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Pack the modex common message struct.  */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size = modex_message_size;
<br>
+
<br>
+        (mca_btl_openib_component.openib_btls[i]-&gt;port_info).vendor_id =
<br>
+            (mca_btl_openib_component.openib_btls[i]-&gt;device-&gt;ib_dev_attr).vendor_id;
<br>
+
<br>
+        (mca_btl_openib_component.openib_btls[i]-&gt;port_info).vendor_part_id =
<br>
+            (mca_btl_openib_component.openib_btls[i]-&gt;device-&gt;ib_dev_attr).vendor_part_id;
<br>
+
<br>
+        (mca_btl_openib_component.openib_btls[i]-&gt;port_info).transport_type =
<br>
+            mca_btl_openib_get_transport_type(mca_btl_openib_component.openib_btls[i]);
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memcpy(offset, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;(mca_btl_openib_component.openib_btls[i]-&gt;port_info), 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size);
<br>
@@ -1657,45 +1672,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibv_destroy_cq(cq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
-    /* If the user specified btl_openib_receive_queues MCA param, it
<br>
-       overrides all device INI params */
<br>
-    if (BTL_OPENIB_RQ_SOURCE_MCA != 
<br>
-        mca_btl_openib_component.receive_queues_source &amp;&amp; 
<br>
-        NULL != values.receive_queues) {
<br>
-        /* If a prior device's INI values set a different value for
<br>
-           receive_queues, this is unsupported (see
<br>
-           <a href="https://svn.open-mpi.org/trac/ompi/ticket/1285">https://svn.open-mpi.org/trac/ompi/ticket/1285</a>) */
<br>
-        if (BTL_OPENIB_RQ_SOURCE_DEVICE_INI ==
<br>
-            mca_btl_openib_component.receive_queues_source) {
<br>
-            if (0 != strcmp(values.receive_queues, 
<br>
-                            mca_btl_openib_component.receive_queues)) {
<br>
-                orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
<br>
-                               &quot;conflicting receive_queues&quot;, true,
<br>
-                               orte_process_info.nodename,
<br>
-                               ibv_get_device_name(device-&gt;ib_dev),
<br>
-                               device-&gt;ib_dev_attr.vendor_id,
<br>
-                               device-&gt;ib_dev_attr.vendor_part_id,
<br>
-                               values.receive_queues,
<br>
-                               ibv_get_device_name(receive_queues_device-&gt;ib_dev),
<br>
-                               receive_queues_device-&gt;ib_dev_attr.vendor_id,
<br>
-                               receive_queues_device-&gt;ib_dev_attr.vendor_part_id,
<br>
-                               mca_btl_openib_component.receive_queues,
<br>
-                               opal_install_dirs.pkgdatadir);
<br>
-                ret = OMPI_ERR_RESOURCE_BUSY;
<br>
-                goto error;
<br>
-            }
<br>
-        } else {
<br>
-            if (NULL != mca_btl_openib_component.receive_queues) {
<br>
-                free(mca_btl_openib_component.receive_queues);
<br>
-            }
<br>
-            receive_queues_device = device;
<br>
-            mca_btl_openib_component.receive_queues = 
<br>
-                strdup(values.receive_queues);
<br>
-            mca_btl_openib_component.receive_queues_source =
<br>
-                BTL_OPENIB_RQ_SOURCE_DEVICE_INI;
<br>
-        }
<br>
-    }
<br>
-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Should we use RDMA for short / eager messages?  First check MCA
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;param, then check INI file values. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mca_btl_openib_component.use_eager_rdma &gt;= 0) {
<br>
@@ -1795,6 +1771,45 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;apm not enough ports&quot;, true);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_component.apm_ports = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+
<br>
+        /* If the user specified btl_openib_receive_queues MCA param, it
<br>
+           overrides all device INI params */
<br>
+        if (BTL_OPENIB_RQ_SOURCE_MCA !=
<br>
+            mca_btl_openib_component.receive_queues_source &amp;&amp;
<br>
+            NULL != values.receive_queues) {
<br>
+            /* If a prior device's INI values set a different value for
<br>
+               receive_queues, this is unsupported (see
<br>
+               <a href="https://svn.open-mpi.org/trac/ompi/ticket/1285">https://svn.open-mpi.org/trac/ompi/ticket/1285</a>) */
<br>
+            if (BTL_OPENIB_RQ_SOURCE_DEVICE_INI ==
<br>
+                mca_btl_openib_component.receive_queues_source) {
<br>
+                if (0 != strcmp(values.receive_queues,
<br>
+                                mca_btl_openib_component.receive_queues)) {
<br>
+                    orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
<br>
+                                   &quot;conflicting receive_queues&quot;, true,
<br>
+                                   orte_process_info.nodename,
<br>
+                                   ibv_get_device_name(device-&gt;ib_dev),
<br>
+                                   device-&gt;ib_dev_attr.vendor_id,
<br>
+                                   device-&gt;ib_dev_attr.vendor_part_id,
<br>
+                                   values.receive_queues,
<br>
+                                   ibv_get_device_name(receive_queues_device-&gt;ib_dev),
<br>
+                                   receive_queues_device-&gt;ib_dev_attr.vendor_id,
<br>
+                                   receive_queues_device-&gt;ib_dev_attr.vendor_part_id,
<br>
+                                   mca_btl_openib_component.receive_queues,
<br>
+                                   opal_install_dirs.pkgdatadir);
<br>
+                    ret = OMPI_ERR_RESOURCE_BUSY;
<br>
+                    goto error;
<br>
+                }
<br>
+            } else {
<br>
+                if (NULL != mca_btl_openib_component.receive_queues) {
<br>
+                    free(mca_btl_openib_component.receive_queues);
<br>
+                }
<br>
+                receive_queues_device = device;
<br>
+                mca_btl_openib_component.receive_queues =
<br>
+                    strdup(values.receive_queues);
<br>
+                mca_btl_openib_component.receive_queues_source =
<br>
+                    BTL_OPENIB_RQ_SOURCE_DEVICE_INI;
<br>
+            }
<br>
+        }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib_endpoint.c
<br>
--- a/ompi/mca/btl/openib/btl_openib_endpoint.c	Fri Nov 06 12:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/btl_openib_endpoint.c	Mon Nov 16 17:41:48 2009 +0200
<br>
@@ -310,6 +310,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ep-&gt;rem_info.rem_subnet_id,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ep-&gt;rem_info.rem_mtu);
<br>
&nbsp;
<br>
+    ep-&gt;rem_info.rem_vendor_id = (remote_proc_info-&gt;pm_port_info).vendor_id;
<br>
+    ep-&gt;rem_info.rem_vendor_part_id = (remote_proc_info-&gt;pm_port_info).vendor_part_id;
<br>
+
<br>
+    ep-&gt;rem_info.rem_transport_type = (remote_proc_info-&gt;pm_port_info).transport_type;
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (qp = 0; qp &lt; mca_btl_openib_component.num_qps; qp++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endpoint_init_qp(ep, qp);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib_endpoint.h
<br>
--- a/ompi/mca/btl/openib/btl_openib_endpoint.h	Fri Nov 06 12:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/btl_openib_endpoint.h	Mon Nov 16 17:41:48 2009 +0200
<br>
@@ -94,6 +94,12 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_rem_qp_info_t *rem_qps;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Remote xrc_srq info, used only with XRC connections */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_rem_srq_info_t *rem_srqs;
<br>
+    /* Vendor id of remote HCA */
<br>
+    uint32_t rem_vendor_id;
<br>
+    /* Vendor part id of remote HCA */
<br>
+    uint32_t rem_vendor_part_id;
<br>
+    /* Transport type of remote port */
<br>
+    mca_btl_openib_transport_type_t rem_transport_type;
<br>
&nbsp;} mca_btl_openib_rem_info_t;
<br>
&nbsp;
<br>
&nbsp;
<br>
diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib_mca.c
<br>
--- a/ompi/mca/btl/openib/btl_openib_mca.c	Fri Nov 06 12:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/btl_openib_mca.c	Mon Nov 16 17:41:48 2009 +0200
<br>
@@ -10,7 +10,7 @@
<br>
&nbsp;&nbsp;* Copyright (c) 2004-2005 The Regents of the University of California.
<br>
&nbsp;&nbsp;*                         All rights reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
<br>
- * Copyright (c) 2006-2008 Mellanox Technologies. All rights reserved.
<br>
+ * Copyright (c) 2006-2009 Mellanox Technologies. All rights reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2006-2007 Los Alamos National Security, LLC.  All rights
<br>
&nbsp;&nbsp;*                         reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2006-2007 Voltaire All rights reserved.
<br>
@@ -526,6 +526,13 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mid_qp_size,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(uint32_t)mca_btl_openib_module.super.btl_eager_limit,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(uint32_t)mca_btl_openib_module.super.btl_max_send_size);
<br>
+
<br>
+    mca_btl_openib_component.default_recv_qps = strdup(default_qps);
<br>
+    if(NULL == mca_btl_openib_component.default_recv_qps) {
<br>
+        BTL_ERROR((&quot;Unable to allocate memory for default receive queues string.\n&quot;));
<br>
+        return OMPI_ERROR;
<br>
+    }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHECK(reg_string(&quot;receive_queues&quot;, NULL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Colon-delimited, comma delimited list of receive queues: P,4096,8,6,4:P,32768,8,6,4&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default_qps, &amp;mca_btl_openib_component.receive_queues, 
<br>
diff -r 521e5f4b161a ompi/mca/btl/openib/help-mpi-btl-openib.txt
<br>
--- a/ompi/mca/btl/openib/help-mpi-btl-openib.txt	Fri Nov 06 12:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/help-mpi-btl-openib.txt	Mon Nov 16 17:41:48 2009 +0200
<br>
@@ -11,7 +11,7 @@
<br>
&nbsp;# Copyright (c) 2004-2006 The Regents of the University of California.
<br>
&nbsp;#                         All rights reserved.
<br>
&nbsp;# Copyright (c) 2006-2009 Cisco Systems, Inc.  All rights reserved.
<br>
-# Copyright (c) 2007-2008 Mellanox Technologies. All rights reserved.
<br>
+# Copyright (c) 2007-2009 Mellanox Technologies. All rights reserved.
<br>
&nbsp;# Copyright (c) 2009      Sun Microsystems, Inc.  All rights reserved.
<br>
&nbsp;# $COPYRIGHT$
<br>
&nbsp;# 
<br>
@@ -590,3 +590,28 @@
<br>
&nbsp;&nbsp;&nbsp;Local host: %s
<br>
&nbsp;&nbsp;&nbsp;Value:      %s
<br>
&nbsp;&nbsp;&nbsp;Message:    %s
<br>
+#
<br>
+[unsupported queues configuration]
<br>
+The remote and local queues were automatically configured for different 
<br>
+devices and as result Open MPI failed to find optimal configuration.
<br>
+Please use MCA parameters in order define Open Fabrics queues configuration.
<br>
+
<br>
+  Local host:       %s
<br>
+  Local adapter:    %s (vendor 0x%x, part ID %d)
<br>
+  Local queues:     %s
<br>
+  
<br>
+  Remote host:      %s
<br>
+  Remote adapter:   remote adapter (vendor 0x%x, part ID %d)
<br>
+  Remote queues:    %s
<br>
+#
<br>
+[conflicting transport types]
<br>
+Open MPI detected two different OpenFabrics transport types in the same Infiniband network.
<br>
+Such mixed network trasport configuration is not supported by Open MPI.
<br>
+
<br>
+  Local host:            %s
<br>
+  Local adapter:         %s (vendor 0x%x, part ID %d)
<br>
+  Local transport type:  %s
<br>
+  
<br>
+  Remote host:           %s
<br>
+  Remote Adapter:        remote adapter (vendor 0x%x, part ID %d)
<br>
+  Remote transport type: %s
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7121.php">Christopher Yeoh: "Re: [OMPI devel] mpool rdma deadlock - malloc implementation issue"</a>
<li><strong>Previous message:</strong> <a href="7119.php">Vasily Philipov: "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6879.php">Vasily Filipov: "[OMPI devel] [PATCH] Improving heterogeneous IB clusters support."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7146.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusterssupport."</a>
<li><strong>Reply:</strong> <a href="7146.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusterssupport."</a>
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
