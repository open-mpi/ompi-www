diff -r 9aad663adc9f ompi/config/ompi_check_openib.m4
--- a/ompi/config/ompi_check_openib.m4	Sun Oct 25 08:29:01 2009 -0700
+++ b/ompi/config/ompi_check_openib.m4	Sun Nov 01 12:17:03 2009 +0200
@@ -13,7 +13,7 @@
 # Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
 # Copyright (c) 2006-2007 Los Alamos National Security, LLC.  All rights
 #                         reserved.
-# Copyright (c) 2006-2008 Mellanox Technologies. All rights reserved.
+# Copyright (c) 2006-2009 Mellanox Technologies. All rights reserved.
 # $COPYRIGHT$
 # 
 # Additional copyrights may follow
@@ -204,6 +204,21 @@
                        [$1_have_ibcm=1
                        $1_LIBS="-libcm $$1_LIBS"])])
            fi
+
+           # Check support for RDMAoE devices
+           $1_have_rdmaoe=0
+           AC_CHECK_DECLS([RDMA_TRANSPORT_RDMAOE],
+                          [$1_have_rdmaoe=1], [],
+                          [#include <infiniband/verbs.h>])
+
+           AC_MSG_CHECKING([if RDMAoE support is enabled])
+           if test "1" = "$$1_have_rdmaoe"; then
+                AC_DEFINE_UNQUOTED([OMPI_HAVE_RDMAOE], [$$1_have_rdmaoe], [Enable RDMAoE support])
+                AC_MSG_RESULT([yes])
+           else
+                AC_MSG_RESULT([no])
+           fi
+
           ])
 
     # Check to see if <infiniband/driver.h> works.  It is known to
diff -r 9aad663adc9f ompi/mca/btl/openib/btl_openib.c
--- a/ompi/mca/btl/openib/btl_openib.c	Sun Oct 25 08:29:01 2009 -0700
+++ b/ompi/mca/btl/openib/btl_openib.c	Sun Nov 01 12:17:03 2009 +0200
@@ -354,6 +354,13 @@
         }
 #endif
 
+#ifdef OMPI_HAVE_RDMAOE
+        if(RDMA_TRANSPORT_RDMAOE == (openib_btl->ib_port_attr.transport) && 
+                OPAL_PROC_ON_LOCAL_NODE(ompi_proc->proc_flags)) {
+            continue;
+        }
+#endif
+
         if(NULL == (ib_proc = mca_btl_openib_proc_create(ompi_proc))) {
             return OMPI_ERR_OUT_OF_RESOURCE;
         }
diff -r 9aad663adc9f ompi/mca/btl/openib/btl_openib_endpoint.c
--- a/ompi/mca/btl/openib/btl_openib_endpoint.c	Sun Oct 25 08:29:01 2009 -0700
+++ b/ompi/mca/btl/openib/btl_openib_endpoint.c	Sun Nov 01 12:17:03 2009 +0200
@@ -556,7 +556,6 @@
 {
     /* If the CPC uses the CTS protocol, then start it up */
     if (endpoint->endpoint_local_cpc->cbm_uses_cts) {
-        int transport_type_ib_p = 0;
         /* Post our receives, which will make credit management happy
            (i.e., rd_credits will be 0) */
         if (OMPI_SUCCESS != mca_btl_openib_endpoint_post_recvs(endpoint)) {
@@ -572,16 +571,13 @@
            receives this side's CTS).  Also send the CTS if we already
            received the peer's CTS (e.g., if this process was slow to
            call cpc_complete(). */
-#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE)
-        transport_type_ib_p = (IBV_TRANSPORT_IB == endpoint->endpoint_btl->device->ib_dev->transport_type);
-#endif
+
         OPAL_OUTPUT((-1, "cpc_complete to peer %s: is IB %d, initiatior %d, cts received: %d",
                      endpoint->endpoint_proc->proc_ompi->proc_hostname,
                      transport_type_ib_p,
                      endpoint->endpoint_initiator,
                      endpoint->endpoint_cts_received));
-        if (transport_type_ib_p ||
-            endpoint->endpoint_initiator ||
+        if (endpoint->endpoint_initiator ||
             endpoint->endpoint_cts_received) {
             mca_btl_openib_endpoint_send_cts(endpoint);
 
diff -r 9aad663adc9f ompi/mca/btl/openib/connect/base.h
--- a/ompi/mca/btl/openib/connect/base.h	Sun Oct 25 08:29:01 2009 -0700
+++ b/ompi/mca/btl/openib/connect/base.h	Sun Nov 01 12:17:03 2009 +0200
@@ -1,6 +1,6 @@
 /*
  * Copyright (c) 2007-2008 Cisco Systems, Inc.  All rights reserved.
- *
+ * Copyright (c) 2009      Mellanox Technologies.  All rights reserved.
  * $COPYRIGHT$
  * 
  * Additional copyrights may follow
@@ -13,6 +13,17 @@
 
 #include "connect/connect.h"
 
+#ifdef OMPI_HAVE_RDMAOE
+#define BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)                       \
+        (((IBV_TRANSPORT_IB != ((btl)->device->ib_dev->transport_type)) || \
+        (RDMA_TRANSPORT_RDMAOE == ((btl)->ib_port_attr.transport))) ?      \
+        true : false)
+#else
+#define BTL_OPENIB_CONNECT_BASE_CHECK_TRANSPORT_TYPE(btl)                  \
+        ((IBV_TRANSPORT_IB != ((btl)->device->ib_dev->transport_type)) ?   \
+        true : false)
+#endif
+
 BEGIN_C_DECLS
 
 /*
diff -r 9aad663adc9f ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c
--- a/ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	Sun Oct 25 08:29:01 2009 -0700
+++ b/ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	Sun Nov 01 12:17:03 2009 +0200
@@ -1,6 +1,6 @@
 /*
  * Copyright (c) 2007-2009 Cisco Systems, Inc.  All rights reserved.
- * Copyright (c) 2008      Mellanox Technologies. All rights reserved.
+ * Copyright (c) 2008-2009 Mellanox Technologies. All rights reserved.
  *
  * $COPYRIGHT$
  * 
@@ -653,7 +653,7 @@
        we're in an old version of OFED that is IB only (i.e., no
        iWarp), so we can safely assume that we can use this CPC. */
 #if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE)
-    if (IBV_TRANSPORT_IB != btl->device->ib_dev->transport_type) {
+    if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
         BTL_VERBOSE(("ibcm CPC only supported on InfiniBand; skipped on %s:%d",
                      ibv_get_device_name(btl->device->ib_dev),
                      openib_btl->port_num));
diff -r 9aad663adc9f ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
--- a/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	Sun Oct 25 08:29:01 2009 -0700
+++ b/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	Sun Nov 01 12:17:03 2009 +0200
@@ -12,7 +12,7 @@
  * Copyright (c) 2006-2009 Cisco Systems, Inc.  All rights reserved.
  * Copyright (c) 2006      Los Alamos National Security, LLC.  All rights
  *                         reserved. 
- * Copyright (c) 2008      Mellanox Technologies.  All rights reserved.
+ * Copyright (c) 2008-2009 Mellanox Technologies.  All rights reserved.
  *
  * $COPYRIGHT$
  * 
@@ -120,7 +120,7 @@
        transport_type member, then we must be < OFED v1.2, and
        therefore we must be IB. */   
 #if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE)
-    if (IBV_TRANSPORT_IB != btl->device->ib_dev->transport_type) {
+    if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
         opal_output_verbose(5, mca_btl_base_output,
                             "openib BTL: oob CPC only supported on InfiniBand; skipped on  %s:%d",
                             ibv_get_device_name(btl->device->ib_dev),
diff -r 9aad663adc9f ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c
--- a/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c	Sun Oct 25 08:29:01 2009 -0700
+++ b/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c	Sun Nov 01 12:17:03 2009 +0200
@@ -1,7 +1,7 @@
 /*
  * Copyright (c) 2007-2009 Cisco Systems, Inc.  All rights reserved.
  * Copyright (c) 2007-2008 Chelsio, Inc. All rights reserved.
- * Copyright (c) 2008      Mellanox Technologies. All rights reserved.
+ * Copyright (c) 2008-2009 Mellanox Technologies. All rights reserved.
  * Copyright (c) 2009      Sandia National Laboratories. All rights reserved.
  *
  * $COPYRIGHT$
@@ -857,34 +857,38 @@
         goto out;
     }
 
-    /* Post a single receive buffer on the smallest QP for the CTS
-       protocol */
-    if (mca_btl_openib_component.credits_qp == qpnum) {
-        struct ibv_recv_wr *bad_wr, *wr;
+    if(endpoint->endpoint_local_cpc->cbm_uses_cts) { 
+        /* Post a single receive buffer on the smallest QP for the CTS
+           protocol */
+        if (mca_btl_openib_component.credits_qp == qpnum) {
+            struct ibv_recv_wr *bad_wr, *wr;
 
-        if (OMPI_SUCCESS != 
-            ompi_btl_openib_connect_base_alloc_cts(endpoint)) {
-            BTL_ERROR(("Failed to alloc CTS frag"));
-            goto out1;
+            if (OMPI_SUCCESS != 
+                    ompi_btl_openib_connect_base_alloc_cts(endpoint)) {
+                BTL_ERROR(("Failed to alloc CTS frag"));
+                goto out1;
+            }
+            wr = &(endpoint->endpoint_cts_frag.rd_desc);
+            assert(NULL != wr);
+            wr->next = NULL;
+
+            if (0 != ibv_post_recv(endpoint->qps[qpnum].qp->lcl_qp, 
+                        wr, &bad_wr)) {
+                BTL_ERROR(("failed to post CTS recv buffer"));
+                goto out1;
+            }
+            OPAL_OUTPUT((-1, "Posted CTS receiver buffer (%p) for peer %s, qp index %d (QP num %d), WR ID %p, SG addr %p, len %d, lkey %d",
+                        (void*) wr->sg_list[0].addr,
+                        endpoint->endpoint_proc->proc_ompi->proc_hostname,
+                        qpnum,
+                        endpoint->qps[qpnum].qp->lcl_qp->qp_num,
+                        (void*) wr->wr_id,
+                        (void*) wr->sg_list[0].addr,
+                        wr->sg_list[0].length,
+                        wr->sg_list[0].lkey));
         }
-        wr = &(endpoint->endpoint_cts_frag.rd_desc);
-        assert(NULL != wr);
-        wr->next = NULL;
-
-        if (0 != ibv_post_recv(endpoint->qps[qpnum].qp->lcl_qp, 
-                               wr, &bad_wr)) {
-            BTL_ERROR(("failed to post CTS recv buffer"));
-            goto out1;
-        }
-        OPAL_OUTPUT((-1, "Posted CTS receiver buffer (%p) for peer %s, qp index %d (QP num %d), WR ID %p, SG addr %p, len %d, lkey %d",
-                     (void*) wr->sg_list[0].addr,
-                     endpoint->endpoint_proc->proc_ompi->proc_hostname,
-                     qpnum,
-                     endpoint->qps[qpnum].qp->lcl_qp->qp_num,
-                     (void*) wr->wr_id,
-                     (void*) wr->sg_list[0].addr,
-                     wr->sg_list[0].length,
-                     wr->sg_list[0].lkey));
+    } else { /* NOT IWARP */
+        mca_btl_openib_endpoint_post_recvs(endpoint);
     }
 
     /* Since the event id is already created (since we're the server),
@@ -1327,27 +1331,31 @@
             goto out;
         }
 
-        if (mca_btl_openib_component.credits_qp == context->qpnum) {
-            /* Post a single receive buffer on the smallest QP for the CTS
-               protocol */
-            
-            struct ibv_recv_wr *bad_wr, *wr;
-            assert(NULL != contents->endpoint->endpoint_cts_frag.super.super.base.super.ptr);
-            wr = &(contents->endpoint->endpoint_cts_frag.rd_desc);
-            assert(NULL != wr);
-            wr->next = NULL;
-            
-            if (0 != ibv_post_recv(contents->endpoint->qps[context->qpnum].qp->lcl_qp, 
-                                   wr, &bad_wr)) {
-                BTL_ERROR(("failed to post CTS recv buffer"));
-                goto out1;
+        if (contents->endpoint->endpoint_local_cpc->cbm_uses_cts) {
+            if (mca_btl_openib_component.credits_qp == context->qpnum) {
+                /* Post a single receive buffer on the smallest QP for the CTS
+                   protocol */
+
+                struct ibv_recv_wr *bad_wr, *wr;
+                assert(NULL != contents->endpoint->endpoint_cts_frag.super.super.base.super.ptr);
+                wr = &(contents->endpoint->endpoint_cts_frag.rd_desc);
+                assert(NULL != wr);
+                wr->next = NULL;
+
+                if (0 != ibv_post_recv(contents->endpoint->qps[context->qpnum].qp->lcl_qp, 
+                            wr, &bad_wr)) {
+                    BTL_ERROR(("failed to post CTS recv buffer"));
+                    goto out1;
+                }
+                OPAL_OUTPUT((-1, "Posted initiator CTS buffer (%p, length %d) for peer %s, qp index %d (QP num %d)",
+                            (void*) wr->sg_list[0].addr,
+                            wr->sg_list[0].length,
+                            contents->endpoint->endpoint_proc->proc_ompi->proc_hostname,
+                            context->qpnum,
+                            contents->endpoint->qps[context->qpnum].qp->lcl_qp->qp_num));
             }
-            OPAL_OUTPUT((-1, "Posted initiator CTS buffer (%p, length %d) for peer %s, qp index %d (QP num %d)",
-                         (void*) wr->sg_list[0].addr,
-                         wr->sg_list[0].length,
-                         contents->endpoint->endpoint_proc->proc_ompi->proc_hostname,
-                         context->qpnum,
-                         contents->endpoint->qps[context->qpnum].qp->lcl_qp->qp_num));
+        } else { /* NOT IWARP */
+            mca_btl_openib_endpoint_post_recvs(contents->endpoint);
         }
     } else {
         /* If we are establishing a connection in the "wrong" direction,
@@ -1809,7 +1817,12 @@
     (*cpc)->cbm_finalize = NULL;
     /* Setting uses_cts=true also guarantees that we'll only be
        selected if QP 0 is PP */
-    (*cpc)->cbm_uses_cts = true;
+
+    if(IBV_TRANSPORT_IWARP == (openib_btl->device->ib_dev->transport_type)) {
+        (*cpc)->cbm_uses_cts = true;
+    } else {
+        (*cpc)->cbm_uses_cts = false;
+    }
 
     server = OBJ_NEW(rdmacm_contents_t);
     if (NULL == server) {
