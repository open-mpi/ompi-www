<?
$subject_val = "[OMPI devel] Adding support for RDMAoE devices.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  1 06:47:44 2009" -->
<!-- isoreceived="20091101114744" -->
<!-- sent="Sun, 01 Nov 2009 13:44:24 +0200" -->
<!-- isosent="20091101114424" -->
<!-- name="Vasily Philipov" -->
<!-- email="vasily_at_[hidden]" -->
<!-- subject="[OMPI devel] Adding support for RDMAoE devices." -->
<!-- id="4AED7498.7020809_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Adding support for RDMAoE devices.<br>
<strong>From:</strong> Vasily Philipov (<em>vasily_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-01 06:44:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7064.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/7062.php">Jeff Squyres: "[OMPI devel] Open MPI 1.3.4rc3 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7064.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<li><strong>Reply:</strong> <a href="7064.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<li><strong>Reply:</strong> <a href="7068.php">Jeff Squyres: "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The attached patch adds support for RDMAoE (RDMA over Ethernet) devices 
<br>
to Openib BTL. The code changes are very minimal, actually we only 
<br>
modified the RDMACM code to provide better support for IB and RDMAoE 
<br>
devices. Please let me know if you have any comments.
<br>
<p>Regards,Vasily.
<br>
<p><p>
<p>
diff -r 9aad663adc9f ompi/config/ompi_check_openib.m4
<br>
--- a/ompi/config/ompi_check_openib.m4	Sun Oct 25 08:29:01 2009 -0700
<br>
+++ b/ompi/config/ompi_check_openib.m4	Sun Nov 01 12:17:03 2009 +0200
<br>
@@ -13,7 +13,7 @@
<br>
&nbsp;# Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;# Copyright (c) 2006-2007 Los Alamos National Security, LLC.  All rights
<br>
&nbsp;#                         reserved.
<br>
-# Copyright (c) 2006-2008 Mellanox Technologies. All rights reserved.
<br>
+# Copyright (c) 2006-2009 Mellanox Technologies. All rights reserved.
<br>
&nbsp;# $COPYRIGHT$
<br>
&nbsp;# 
<br>
&nbsp;# Additional copyrights may follow
<br>
@@ -204,6 +204,21 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[$1_have_ibcm=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$1_LIBS=&quot;-libcm $$1_LIBS&quot;])])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
+
<br>
+           # Check support for RDMAoE devices
<br>
+           $1_have_rdmaoe=0
<br>
+           AC_CHECK_DECLS([RDMA_TRANSPORT_RDMAOE],
<br>
+                          [$1_have_rdmaoe=1], [],
<br>
+                          [#include &lt;infiniband/verbs.h&gt;])
<br>
+
<br>
+           AC_MSG_CHECKING([if RDMAoE support is enabled])
<br>
+           if test &quot;1&quot; = &quot;$$1_have_rdmaoe&quot;; then
<br>
+                AC_DEFINE_UNQUOTED([OMPI_HAVE_RDMAOE], [$$1_have_rdmaoe], [Enable RDMAoE support])
<br>
+                AC_MSG_RESULT([yes])
<br>
+           else
<br>
+                AC_MSG_RESULT([no])
<br>
+           fi
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;])
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Check to see if &lt;infiniband/driver.h&gt; works.  It is known to
<br>
diff -r 9aad663adc9f ompi/mca/btl/openib/btl_openib.c
<br>
--- a/ompi/mca/btl/openib/btl_openib.c	Sun Oct 25 08:29:01 2009 -0700
<br>
+++ b/ompi/mca/btl/openib/btl_openib.c	Sun Nov 01 12:17:03 2009 +0200
<br>
@@ -354,6 +354,13 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;#endif
<br>
&nbsp;
<br>
+#ifdef OMPI_HAVE_RDMAOE
<br>
+        if(RDMA_TRANSPORT_RDMAOE == (openib_btl-&gt;ib_port_attr.transport) &amp;&amp; 
<br>
+                OPAL_PROC_ON_LOCAL_NODE(ompi_proc-&gt;proc_flags)) {
<br>
+            continue;
<br>
+        }
<br>
+#endif
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(NULL == (ib_proc = mca_btl_openib_proc_create(ompi_proc))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERR_OUT_OF_RESOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
diff -r 9aad663adc9f ompi/mca/btl/openib/btl_openib_endpoint.c
<br>
--- a/ompi/mca/btl/openib/btl_openib_endpoint.c	Sun Oct 25 08:29:01 2009 -0700
<br>
+++ b/ompi/mca/btl/openib/btl_openib_endpoint.c	Sun Nov 01 12:17:03 2009 +0200
<br>
@@ -556,7 +556,6 @@
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* If the CPC uses the CTS protocol, then start it up */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (endpoint-&gt;endpoint_local_cpc-&gt;cbm_uses_cts) {
<br>
-        int transport_type_ib_p = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Post our receives, which will make credit management happy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i.e., rd_credits will be 0) */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OMPI_SUCCESS != mca_btl_openib_endpoint_post_recvs(endpoint)) {
<br>
@@ -572,16 +571,13 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;receives this side's CTS).  Also send the CTS if we already
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;received the peer's CTS (e.g., if this process was slow to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call cpc_complete(). */
<br>
-#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE)
<br>
-        transport_type_ib_p = (IBV_TRANSPORT_IB == endpoint-&gt;endpoint_btl-&gt;device-&gt;ib_dev-&gt;transport_type);
<br>
-#endif
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_OUTPUT((-1, &quot;cpc_complete to peer %s: is IB %d, initiatior %d, cts received: %d&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endpoint-&gt;endpoint_proc-&gt;proc_ompi-&gt;proc_hostname,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transport_type_ib_p,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endpoint-&gt;endpoint_initiator,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endpoint-&gt;endpoint_cts_received));
<br>
-        if (transport_type_ib_p ||
<br>
-            endpoint-&gt;endpoint_initiator ||
<br>
+        if (endpoint-&gt;endpoint_initiator ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endpoint-&gt;endpoint_cts_received) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_endpoint_send_cts(endpoint);
<br>
&nbsp;
<br>
diff -r 9aad663adc9f ompi/mca/btl/openib/connect/base.h
<br>
--- a/ompi/mca/btl/openib/connect/base.h	Sun Oct 25 08:29:01 2009 -0700
<br>
+++ b/ompi/mca/btl/openib/connect/base.h	Sun Nov 01 12:17:03 2009 +0200
<br>
@@ -1,6 +1,6 @@
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Copyright (c) 2007-2008 Cisco Systems, Inc.  All rights reserved.
<br>
- *
<br>
+ * Copyright (c) 2009      Mellanox Technologies.  All rights reserved.
<br>
&nbsp;&nbsp;* $COPYRIGHT$
<br>
&nbsp;&nbsp;* 
<br>
&nbsp;&nbsp;* Additional copyrights may follow
<br>
@@ -13,6 +13,17 @@
<br>
&nbsp;
<br>
&nbsp;#include &quot;connect/connect.h&quot;
<br>
&nbsp;
<br>
+#ifdef OMPI_HAVE_RDMAOE
<br>
+#define BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)                       \
<br>
+        (((IBV_TRANSPORT_IB != ((btl)-&gt;device-&gt;ib_dev-&gt;transport_type)) || \
<br>
+        (RDMA_TRANSPORT_RDMAOE == ((btl)-&gt;ib_port_attr.transport))) ?      \
<br>
+        true : false)
<br>
+#else
<br>
+#define BTL_OPENIB_CONNECT_BASE_CHECK_TRANSPORT_TYPE(btl)                  \
<br>
+        ((IBV_TRANSPORT_IB != ((btl)-&gt;device-&gt;ib_dev-&gt;transport_type)) ?   \
<br>
+        true : false)
<br>
+#endif
<br>
+
<br>
&nbsp;BEGIN_C_DECLS
<br>
&nbsp;
<br>
&nbsp;/*
<br>
diff -r 9aad663adc9f ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c
<br>
--- a/ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	Sun Oct 25 08:29:01 2009 -0700
<br>
+++ b/ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	Sun Nov 01 12:17:03 2009 +0200
<br>
@@ -1,6 +1,6 @@
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Copyright (c) 2007-2009 Cisco Systems, Inc.  All rights reserved.
<br>
- * Copyright (c) 2008      Mellanox Technologies. All rights reserved.
<br>
+ * Copyright (c) 2008-2009 Mellanox Technologies. All rights reserved.
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* $COPYRIGHT$
<br>
&nbsp;&nbsp;* 
<br>
@@ -653,7 +653,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;we're in an old version of OFED that is IB only (i.e., no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iWarp), so we can safely assume that we can use this CPC. */
<br>
&nbsp;#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE)
<br>
-    if (IBV_TRANSPORT_IB != btl-&gt;device-&gt;ib_dev-&gt;transport_type) {
<br>
+    if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTL_VERBOSE((&quot;ibcm CPC only supported on InfiniBand; skipped on %s:%d&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openib_btl-&gt;port_num));
<br>
diff -r 9aad663adc9f ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
<br>
--- a/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	Sun Oct 25 08:29:01 2009 -0700
<br>
+++ b/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	Sun Nov 01 12:17:03 2009 +0200
<br>
@@ -12,7 +12,7 @@
<br>
&nbsp;&nbsp;* Copyright (c) 2006-2009 Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2006      Los Alamos National Security, LLC.  All rights
<br>
&nbsp;&nbsp;*                         reserved. 
<br>
- * Copyright (c) 2008      Mellanox Technologies.  All rights reserved.
<br>
+ * Copyright (c) 2008-2009 Mellanox Technologies.  All rights reserved.
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* $COPYRIGHT$
<br>
&nbsp;&nbsp;* 
<br>
@@ -120,7 +120,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transport_type member, then we must be &lt; OFED v1.2, and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;therefore we must be IB. */   
<br>
&nbsp;#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE)
<br>
-    if (IBV_TRANSPORT_IB != btl-&gt;device-&gt;ib_dev-&gt;transport_type) {
<br>
+    if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output_verbose(5, mca_btl_base_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;openib BTL: oob CPC only supported on InfiniBand; skipped on  %s:%d&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
<br>
diff -r 9aad663adc9f ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c
<br>
--- a/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c	Sun Oct 25 08:29:01 2009 -0700
<br>
+++ b/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c	Sun Nov 01 12:17:03 2009 +0200
<br>
@@ -1,7 +1,7 @@
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Copyright (c) 2007-2009 Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2007-2008 Chelsio, Inc. All rights reserved.
<br>
- * Copyright (c) 2008      Mellanox Technologies. All rights reserved.
<br>
+ * Copyright (c) 2008-2009 Mellanox Technologies. All rights reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2009      Sandia National Laboratories. All rights reserved.
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* $COPYRIGHT$
<br>
@@ -857,34 +857,38 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto out;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
-    /* Post a single receive buffer on the smallest QP for the CTS
<br>
-       protocol */
<br>
-    if (mca_btl_openib_component.credits_qp == qpnum) {
<br>
-        struct ibv_recv_wr *bad_wr, *wr;
<br>
+    if(endpoint-&gt;endpoint_local_cpc-&gt;cbm_uses_cts) { 
<br>
+        /* Post a single receive buffer on the smallest QP for the CTS
<br>
+           protocol */
<br>
+        if (mca_btl_openib_component.credits_qp == qpnum) {
<br>
+            struct ibv_recv_wr *bad_wr, *wr;
<br>
&nbsp;
<br>
-        if (OMPI_SUCCESS != 
<br>
-            ompi_btl_openib_connect_base_alloc_cts(endpoint)) {
<br>
-            BTL_ERROR((&quot;Failed to alloc CTS frag&quot;));
<br>
-            goto out1;
<br>
+            if (OMPI_SUCCESS != 
<br>
+                    ompi_btl_openib_connect_base_alloc_cts(endpoint)) {
<br>
+                BTL_ERROR((&quot;Failed to alloc CTS frag&quot;));
<br>
+                goto out1;
<br>
+            }
<br>
+            wr = &amp;(endpoint-&gt;endpoint_cts_frag.rd_desc);
<br>
+            assert(NULL != wr);
<br>
+            wr-&gt;next = NULL;
<br>
+
<br>
+            if (0 != ibv_post_recv(endpoint-&gt;qps[qpnum].qp-&gt;lcl_qp, 
<br>
+                        wr, &amp;bad_wr)) {
<br>
+                BTL_ERROR((&quot;failed to post CTS recv buffer&quot;));
<br>
+                goto out1;
<br>
+            }
<br>
+            OPAL_OUTPUT((-1, &quot;Posted CTS receiver buffer (%p) for peer %s, qp index %d (QP num %d), WR ID %p, SG addr %p, len %d, lkey %d&quot;,
<br>
+                        (void*) wr-&gt;sg_list[0].addr,
<br>
+                        endpoint-&gt;endpoint_proc-&gt;proc_ompi-&gt;proc_hostname,
<br>
+                        qpnum,
<br>
+                        endpoint-&gt;qps[qpnum].qp-&gt;lcl_qp-&gt;qp_num,
<br>
+                        (void*) wr-&gt;wr_id,
<br>
+                        (void*) wr-&gt;sg_list[0].addr,
<br>
+                        wr-&gt;sg_list[0].length,
<br>
+                        wr-&gt;sg_list[0].lkey));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-        wr = &amp;(endpoint-&gt;endpoint_cts_frag.rd_desc);
<br>
-        assert(NULL != wr);
<br>
-        wr-&gt;next = NULL;
<br>
-
<br>
-        if (0 != ibv_post_recv(endpoint-&gt;qps[qpnum].qp-&gt;lcl_qp, 
<br>
-                               wr, &amp;bad_wr)) {
<br>
-            BTL_ERROR((&quot;failed to post CTS recv buffer&quot;));
<br>
-            goto out1;
<br>
-        }
<br>
-        OPAL_OUTPUT((-1, &quot;Posted CTS receiver buffer (%p) for peer %s, qp index %d (QP num %d), WR ID %p, SG addr %p, len %d, lkey %d&quot;,
<br>
-                     (void*) wr-&gt;sg_list[0].addr,
<br>
-                     endpoint-&gt;endpoint_proc-&gt;proc_ompi-&gt;proc_hostname,
<br>
-                     qpnum,
<br>
-                     endpoint-&gt;qps[qpnum].qp-&gt;lcl_qp-&gt;qp_num,
<br>
-                     (void*) wr-&gt;wr_id,
<br>
-                     (void*) wr-&gt;sg_list[0].addr,
<br>
-                     wr-&gt;sg_list[0].length,
<br>
-                     wr-&gt;sg_list[0].lkey));
<br>
+    } else { /* NOT IWARP */
<br>
+        mca_btl_openib_endpoint_post_recvs(endpoint);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Since the event id is already created (since we're the server),
<br>
@@ -1327,27 +1331,31 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto out;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
-        if (mca_btl_openib_component.credits_qp == context-&gt;qpnum) {
<br>
-            /* Post a single receive buffer on the smallest QP for the CTS
<br>
-               protocol */
<br>
-            
<br>
-            struct ibv_recv_wr *bad_wr, *wr;
<br>
-            assert(NULL != contents-&gt;endpoint-&gt;endpoint_cts_frag.super.super.base.super.ptr);
<br>
-            wr = &amp;(contents-&gt;endpoint-&gt;endpoint_cts_frag.rd_desc);
<br>
-            assert(NULL != wr);
<br>
-            wr-&gt;next = NULL;
<br>
-            
<br>
-            if (0 != ibv_post_recv(contents-&gt;endpoint-&gt;qps[context-&gt;qpnum].qp-&gt;lcl_qp, 
<br>
-                                   wr, &amp;bad_wr)) {
<br>
-                BTL_ERROR((&quot;failed to post CTS recv buffer&quot;));
<br>
-                goto out1;
<br>
+        if (contents-&gt;endpoint-&gt;endpoint_local_cpc-&gt;cbm_uses_cts) {
<br>
+            if (mca_btl_openib_component.credits_qp == context-&gt;qpnum) {
<br>
+                /* Post a single receive buffer on the smallest QP for the CTS
<br>
+                   protocol */
<br>
+
<br>
+                struct ibv_recv_wr *bad_wr, *wr;
<br>
+                assert(NULL != contents-&gt;endpoint-&gt;endpoint_cts_frag.super.super.base.super.ptr);
<br>
+                wr = &amp;(contents-&gt;endpoint-&gt;endpoint_cts_frag.rd_desc);
<br>
+                assert(NULL != wr);
<br>
+                wr-&gt;next = NULL;
<br>
+
<br>
+                if (0 != ibv_post_recv(contents-&gt;endpoint-&gt;qps[context-&gt;qpnum].qp-&gt;lcl_qp, 
<br>
+                            wr, &amp;bad_wr)) {
<br>
+                    BTL_ERROR((&quot;failed to post CTS recv buffer&quot;));
<br>
+                    goto out1;
<br>
+                }
<br>
+                OPAL_OUTPUT((-1, &quot;Posted initiator CTS buffer (%p, length %d) for peer %s, qp index %d (QP num %d)&quot;,
<br>
+                            (void*) wr-&gt;sg_list[0].addr,
<br>
+                            wr-&gt;sg_list[0].length,
<br>
+                            contents-&gt;endpoint-&gt;endpoint_proc-&gt;proc_ompi-&gt;proc_hostname,
<br>
+                            context-&gt;qpnum,
<br>
+                            contents-&gt;endpoint-&gt;qps[context-&gt;qpnum].qp-&gt;lcl_qp-&gt;qp_num));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-            OPAL_OUTPUT((-1, &quot;Posted initiator CTS buffer (%p, length %d) for peer %s, qp index %d (QP num %d)&quot;,
<br>
-                         (void*) wr-&gt;sg_list[0].addr,
<br>
-                         wr-&gt;sg_list[0].length,
<br>
-                         contents-&gt;endpoint-&gt;endpoint_proc-&gt;proc_ompi-&gt;proc_hostname,
<br>
-                         context-&gt;qpnum,
<br>
-                         contents-&gt;endpoint-&gt;qps[context-&gt;qpnum].qp-&gt;lcl_qp-&gt;qp_num));
<br>
+        } else { /* NOT IWARP */
<br>
+            mca_btl_openib_endpoint_post_recvs(contents-&gt;endpoint);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* If we are establishing a connection in the &quot;wrong&quot; direction,
<br>
@@ -1809,7 +1817,12 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(*cpc)-&gt;cbm_finalize = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Setting uses_cts=true also guarantees that we'll only be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;selected if QP 0 is PP */
<br>
-    (*cpc)-&gt;cbm_uses_cts = true;
<br>
+
<br>
+    if(IBV_TRANSPORT_IWARP == (openib_btl-&gt;device-&gt;ib_dev-&gt;transport_type)) {
<br>
+        (*cpc)-&gt;cbm_uses_cts = true;
<br>
+    } else {
<br>
+        (*cpc)-&gt;cbm_uses_cts = false;
<br>
+    }
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;server = OBJ_NEW(rdmacm_contents_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == server) {
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7064.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/7062.php">Jeff Squyres: "[OMPI devel] Open MPI 1.3.4rc3 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7064.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<li><strong>Reply:</strong> <a href="7064.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<li><strong>Reply:</strong> <a href="7068.php">Jeff Squyres: "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
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
