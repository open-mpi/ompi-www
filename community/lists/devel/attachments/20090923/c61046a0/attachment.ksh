diff -r f5dd40f84bc6 ompi/mca/btl/openib/btl_openib.c
--- a/ompi/mca/btl/openib/btl_openib.c	Mon Aug 31 00:00:16 2009 -0700
+++ b/ompi/mca/btl/openib/btl_openib.c	Thu Sep 17 18:23:58 2009 +0300
@@ -39,6 +39,8 @@
 #include "ompi/runtime/ompi_cr.h"
 #endif
 
+#include "btl_openib_ini.h"
+
 #include "btl_openib.h"
 #include "btl_openib_frag.h"
 #include "btl_openib_proc.h"
@@ -287,6 +289,99 @@
     return rc;
 }
 
+static int tune_endpoint(mca_btl_openib_device_t* device, 
+                                        mca_btl_base_endpoint_t* endpoint)
+{
+    int ret = OMPI_SUCCESS;
+
+    char* recv_qps = NULL;
+    uint32_t inline_data = 0;
+
+    ompi_btl_openib_ini_values_t values;
+
+    memset(&values, 0, sizeof(ompi_btl_openib_ini_values_t));
+    ret = ompi_btl_openib_ini_query(endpoint->vendor_id,
+                          endpoint->vendor_part_id, &values);
+
+    if(OMPI_SUCCESS != ret) {
+        return ret;
+    }
+
+    if(device->mtu < endpoint->rem_info.rem_mtu) {
+        endpoint->rem_info.rem_mtu = device->mtu; 
+    }
+
+    endpoint->use_eager_rdma = device->use_eager_rdma &
+                            endpoint->use_eager_rdma;
+
+    if(1 == values.max_inline_data_set) {
+        inline_data =  values.max_inline_data;
+    } else if(-1 != mca_btl_openib_component.ib_max_inline_data) {
+        inline_data = mca_btl_openib_component.ib_max_inline_data;
+    } 
+    /* else inline_data = 0 */
+
+    endpoint->max_inline_data = ((device->max_inline_data <
+                                                inline_data) ?
+                                     device->max_inline_data :
+                                                inline_data);
+
+    /* Receive queues checking */
+    switch(mca_btl_openib_component.receive_queues_source) {
+        case BTL_OPENIB_RQ_SOURCE_MCA:
+        case BTL_OPENIB_RQ_SOURCE_MAX:
+            break;
+
+        case BTL_OPENIB_RQ_SOURCE_DEVICE_INI:
+            if(NULL != values.receive_queues) {
+                recv_qps = values.receive_queues;
+            } else {
+                recv_qps = mca_btl_openib_component.default_recv_qps;
+            }
+
+            if(0 != strcmp(mca_btl_openib_component.receive_queues,
+                                                         recv_qps)) {
+                orte_show_help("help-mpi-btl-openib.txt",
+                               "unsupported queues configuration", true,
+                               orte_process_info.nodename,
+                               ibv_get_device_name(device->ib_dev),
+                               (device->ib_dev_attr).vendor_id,
+                               (device->ib_dev_attr).vendor_part_id,
+                               mca_btl_openib_component.receive_queues,
+                               endpoint->endpoint_proc->proc_ompi->proc_hostname,
+                               endpoint->vendor_id,
+                               endpoint->vendor_part_id,
+                               recv_qps);
+
+                return OMPI_ERROR;
+            }
+            break;
+
+        case  BTL_OPENIB_RQ_SOURCE_DEFAULT:
+            if(NULL != values.receive_queues) {
+                if(0 != strcmp(mca_btl_openib_component.receive_queues,
+                                                values.receive_queues)) {
+                     orte_show_help("help-mpi-btl-openib.txt",
+                               "unsupported queues configuration", true,
+                               orte_process_info.nodename,
+                               ibv_get_device_name(device->ib_dev),
+                               (device->ib_dev_attr).vendor_id,
+                               (device->ib_dev_attr).vendor_part_id,
+                               mca_btl_openib_component.receive_queues,
+                               endpoint->endpoint_proc->proc_ompi->proc_hostname,
+                               endpoint->vendor_id,
+                               endpoint->vendor_part_id,
+                               values.receive_queues);
+
+                    return OMPI_ERROR;
+                }
+            }
+            break;
+    }
+
+    return OMPI_SUCCESS;
+}
+
 /*
  *  add a proc to this btl module
  *    creates an endpoint that is setup on the
@@ -471,6 +566,10 @@
             continue;
         }
 
+         if(OMPI_SUCCESS != tune_endpoint(openib_btl->device, endpoint)) {
+            return OMPI_ERROR;
+        }
+
         endpoint->index = opal_pointer_array_add(openib_btl->device->endpoints, (void*)endpoint);
         if( 0 > endpoint->index ) {
             OBJ_RELEASE(endpoint);
diff -r f5dd40f84bc6 ompi/mca/btl/openib/btl_openib.h
--- a/ompi/mca/btl/openib/btl_openib.h	Mon Aug 31 00:00:16 2009 -0700
+++ b/ompi/mca/btl/openib/btl_openib.h	Thu Sep 17 18:23:58 2009 +0300
@@ -254,6 +254,8 @@
     ompi_free_list_t recv_user_free;
     /**< frags for coalesced massages */
     ompi_free_list_t send_free_coalesced;
+    /**< Default receive queues */
+    char* default_recv_qps;
 }; typedef struct mca_btl_openib_component_t mca_btl_openib_component_t;
 
 OMPI_MODULE_DECLSPEC extern mca_btl_openib_component_t mca_btl_openib_component;
@@ -272,6 +274,10 @@
     uint16_t apm_lid;
     /** The MTU used by this port */
     uint8_t mtu;
+    /** vendor id define device type and tuning */
+    uint32_t vendor_id;
+    /** vendor part id define device type and tuning */
+    uint32_t vendor_part_id;
     /** Dummy field used to calculate the real length */
     uint8_t end;
 } mca_btl_openib_modex_message_t;
diff -r f5dd40f84bc6 ompi/mca/btl/openib/btl_openib_component.c
--- a/ompi/mca/btl/openib/btl_openib_component.c	Mon Aug 31 00:00:16 2009 -0700
+++ b/ompi/mca/btl/openib/btl_openib_component.c	Thu Sep 17 18:23:58 2009 +0300
@@ -143,6 +143,7 @@
     OBJ_CONSTRUCT(&mca_btl_openib_component.devices, opal_pointer_array_t);
     mca_btl_openib_component.devices_count = 0;
     mca_btl_openib_component.cpc_explicitly_defined = false;
+    mca_btl_openib_component.default_recv_qps = NULL;
 
     /* initialize objects */
     OBJ_CONSTRUCT(&mca_btl_openib_component.ib_procs, opal_list_t);
@@ -196,6 +197,10 @@
         free(mca_btl_openib_component.receive_queues);
     }
 
+    if (NULL != mca_btl_openib_component.default_recv_qps) {
+        free(mca_btl_openib_component.default_recv_qps);
+    }
+
     return rc;
 }
 
@@ -303,6 +308,13 @@
 
         /* Pack the modex common message struct.  */
         size = modex_message_size;
+
+        (mca_btl_openib_component.openib_btls[i]->port_info).vendor_id =
+            (mca_btl_openib_component.openib_btls[i]->device->ib_dev_attr).vendor_id;
+
+        (mca_btl_openib_component.openib_btls[i]->port_info).vendor_part_id =
+            (mca_btl_openib_component.openib_btls[i]->device->ib_dev_attr).vendor_part_id;
+
         memcpy(offset, 
                &(mca_btl_openib_component.openib_btls[i]->port_info), 
                size);
@@ -1657,45 +1669,6 @@
         ibv_destroy_cq(cq);
     }
 
-    /* If the user specified btl_openib_receive_queues MCA param, it
-       overrides all device INI params */
-    if (BTL_OPENIB_RQ_SOURCE_MCA != 
-        mca_btl_openib_component.receive_queues_source && 
-        NULL != values.receive_queues) {
-        /* If a prior device's INI values set a different value for
-           receive_queues, this is unsupported (see
-           https://svn.open-mpi.org/trac/ompi/ticket/1285) */
-        if (BTL_OPENIB_RQ_SOURCE_DEVICE_INI ==
-            mca_btl_openib_component.receive_queues_source) {
-            if (0 != strcmp(values.receive_queues, 
-                            mca_btl_openib_component.receive_queues)) {
-                orte_show_help("help-mpi-btl-openib.txt",
-                               "conflicting receive_queues", true,
-                               orte_process_info.nodename,
-                               ibv_get_device_name(device->ib_dev),
-                               device->ib_dev_attr.vendor_id,
-                               device->ib_dev_attr.vendor_part_id,
-                               values.receive_queues,
-                               ibv_get_device_name(receive_queues_device->ib_dev),
-                               receive_queues_device->ib_dev_attr.vendor_id,
-                               receive_queues_device->ib_dev_attr.vendor_part_id,
-                               mca_btl_openib_component.receive_queues,
-                               opal_install_dirs.pkgdatadir);
-                ret = OMPI_ERR_RESOURCE_BUSY;
-                goto error;
-            }
-        } else {
-            if (NULL != mca_btl_openib_component.receive_queues) {
-                free(mca_btl_openib_component.receive_queues);
-            }
-            receive_queues_device = device;
-            mca_btl_openib_component.receive_queues = 
-                strdup(values.receive_queues);
-            mca_btl_openib_component.receive_queues_source =
-                BTL_OPENIB_RQ_SOURCE_DEVICE_INI;
-        }
-    }
-
     /* Should we use RDMA for short / eager messages?  First check MCA
        param, then check INI file values. */
     if (mca_btl_openib_component.use_eager_rdma >= 0) {
@@ -1795,6 +1768,45 @@
                            "apm not enough ports", true);
             mca_btl_openib_component.apm_ports = 0;
         }
+        
+        /* If the user specified btl_openib_receive_queues MCA param, it
+           overrides all device INI params */
+        if (BTL_OPENIB_RQ_SOURCE_MCA != 
+            mca_btl_openib_component.receive_queues_source &&
+            NULL != values.receive_queues) {
+            /* If a prior device's INI values set a different value for
+               receive_queues, this is unsupported (see
+               https://svn.open-mpi.org/trac/ompi/ticket/1285) */
+            if (BTL_OPENIB_RQ_SOURCE_DEVICE_INI ==
+                mca_btl_openib_component.receive_queues_source) {
+                if (0 != strcmp(values.receive_queues,
+                                mca_btl_openib_component.receive_queues)) {
+                    orte_show_help("help-mpi-btl-openib.txt",
+                                   "conflicting receive_queues", true,
+                                   orte_process_info.nodename,
+                                   ibv_get_device_name(device->ib_dev),
+                                   device->ib_dev_attr.vendor_id,
+                                   device->ib_dev_attr.vendor_part_id,
+                                   values.receive_queues,
+                                   ibv_get_device_name(receive_queues_device->ib_dev),
+                                   receive_queues_device->ib_dev_attr.vendor_id,
+                                   receive_queues_device->ib_dev_attr.vendor_part_id,
+                                   mca_btl_openib_component.receive_queues,
+                                   opal_install_dirs.pkgdatadir);
+                    ret = OMPI_ERR_RESOURCE_BUSY;
+                    goto error;  
+                }
+            } else {
+                if (NULL != mca_btl_openib_component.receive_queues) {
+                    free(mca_btl_openib_component.receive_queues);
+                }
+                receive_queues_device = device;
+                mca_btl_openib_component.receive_queues =
+                    strdup(values.receive_queues);
+                mca_btl_openib_component.receive_queues_source =
+                    BTL_OPENIB_RQ_SOURCE_DEVICE_INI;
+            }
+        }
         return OMPI_SUCCESS;
     }
 
diff -r f5dd40f84bc6 ompi/mca/btl/openib/btl_openib_endpoint.c
--- a/ompi/mca/btl/openib/btl_openib_endpoint.c	Mon Aug 31 00:00:16 2009 -0700
+++ b/ompi/mca/btl/openib/btl_openib_endpoint.c	Thu Sep 17 18:23:58 2009 +0300
@@ -310,6 +310,9 @@
                 ep->rem_info.rem_subnet_id,
                 ep->rem_info.rem_mtu);
 
+    ep->vendor_id = (remote_proc_info->pm_port_info).vendor_id;
+    ep->vendor_part_id = (remote_proc_info->pm_port_info).vendor_part_id;
+
     for (qp = 0; qp < mca_btl_openib_component.num_qps; qp++) {
         endpoint_init_qp(ep, qp);
     }
diff -r f5dd40f84bc6 ompi/mca/btl/openib/btl_openib_endpoint.h
--- a/ompi/mca/btl/openib/btl_openib_endpoint.h	Mon Aug 31 00:00:16 2009 -0700
+++ b/ompi/mca/btl/openib/btl_openib_endpoint.h	Thu Sep 17 18:23:58 2009 +0300
@@ -246,6 +246,12 @@
     /** Whether we've send out CTS to the peer or not (only used in
         CTS protocol) */
     bool endpoint_cts_sent;
+
+    uint32_t vendor_id;
+    uint32_t vendor_part_id;
+
+    uint32_t max_inline_data;
+
 };
 
 typedef struct mca_btl_base_endpoint_t mca_btl_base_endpoint_t;
diff -r f5dd40f84bc6 ompi/mca/btl/openib/btl_openib_mca.c
--- a/ompi/mca/btl/openib/btl_openib_mca.c	Mon Aug 31 00:00:16 2009 -0700
+++ b/ompi/mca/btl/openib/btl_openib_mca.c	Thu Sep 17 18:23:58 2009 +0300
@@ -10,7 +10,7 @@
  * Copyright (c) 2004-2005 The Regents of the University of California.
  *                         All rights reserved.
  * Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
- * Copyright (c) 2006-2008 Mellanox Technologies. All rights reserved.
+ * Copyright (c) 2006-2009 Mellanox Technologies. All rights reserved.
  * Copyright (c) 2006-2007 Los Alamos National Security, LLC.  All rights
  *                         reserved.
  * Copyright (c) 2006-2007 Voltaire All rights reserved.
@@ -526,6 +526,13 @@
             mid_qp_size,
             (uint32_t)mca_btl_openib_module.super.btl_eager_limit,
             (uint32_t)mca_btl_openib_module.super.btl_max_send_size);
+
+    mca_btl_openib_component.default_recv_qps = strdup(default_qps);
+    if(NULL == mca_btl_openib_component.default_recv_qps) {
+        BTL_ERROR(("Unable to allocate memory for default receive queues string.\n"));
+        return OMPI_ERROR;
+    }
+
     CHECK(reg_string("receive_queues", NULL,
                      "Colon-delimited, comma delimited list of receive queues: P,4096,8,6,4:P,32768,8,6,4",
                      default_qps, &mca_btl_openib_component.receive_queues, 
diff -r f5dd40f84bc6 ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c
--- a/ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	Mon Aug 31 00:00:16 2009 -0700
+++ b/ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	Thu Sep 17 18:23:58 2009 +0300
@@ -1,6 +1,6 @@
 /*
  * Copyright (c) 2007-2009 Cisco Systems, Inc.  All rights reserved.
- * Copyright (c) 2008      Mellanox Technologies. All rights reserved.
+ * Copyright (c) 2008-2009 Mellanox Technologies. All rights reserved.
  *
  * $COPYRIGHT$
  * 
@@ -874,9 +874,9 @@
  *******************************************************************/
 
 /* Returns max inlne size for qp #N */
-static uint32_t max_inline_size(int qp, mca_btl_openib_device_t *device)
+static uint32_t max_inline_size(int qp, mca_btl_base_endpoint_t* endpoint)
 {
-    if (mca_btl_openib_component.qp_infos[qp].size <= device->max_inline_data) {
+    if (mca_btl_openib_component.qp_infos[qp].size <= endpoint->max_inline_data) {
         /* If qp message size is smaller than max_inline_data,
          * we should enable inline messages */
         return mca_btl_openib_component.qp_infos[qp].size;
@@ -884,7 +884,7 @@
         /* If qp message size is bigger that max_inline_data, we
          * should enable inline messages only for RDMA QP (for PUT/GET
          * fin messages) and for the first qp */
-        return device->max_inline_data;
+        return endpoint->max_inline_data;
     }
     /* Otherway it is no reason for inline */
     return 0;
@@ -910,7 +910,7 @@
     init_attr.recv_cq = openib_btl->device->ib_cq[qp_cq_prio(qp)];
     init_attr.srq = srq;
     init_attr.cap.max_inline_data = req_inline = 
-        max_inline_size(qp, openib_btl->device);
+        max_inline_size(qp, endpoint);
     init_attr.cap.max_send_sge = 1;
     init_attr.cap.max_recv_sge = 1; /* we do not use SG list */
     if(BTL_OPENIB_QP_TYPE_PP(qp)) {
diff -r f5dd40f84bc6 ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
--- a/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	Mon Aug 31 00:00:16 2009 -0700
+++ b/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	Thu Sep 17 18:23:58 2009 +0300
@@ -12,7 +12,7 @@
  * Copyright (c) 2006-2009 Cisco Systems, Inc.  All rights reserved.
  * Copyright (c) 2006      Los Alamos National Security, LLC.  All rights
  *                         reserved. 
- * Copyright (c) 2008      Mellanox Technologies.  All rights reserved.
+ * Copyright (c) 2008-2009 Mellanox Technologies.  All rights reserved.
  *
  * $COPYRIGHT$
  * 
@@ -412,9 +412,9 @@
 
 
 /* Returns max inlne size for qp #N */
-static uint32_t max_inline_size(int qp, mca_btl_openib_device_t *device)
+static uint32_t max_inline_size(int qp, mca_btl_base_endpoint_t* endpoint)
 {
-    if (mca_btl_openib_component.qp_infos[qp].size <= device->max_inline_data) {
+    if (mca_btl_openib_component.qp_infos[qp].size <= endpoint->max_inline_data) {
         /* If qp message size is smaller than max_inline_data,
          * we should enable inline messages */
         return mca_btl_openib_component.qp_infos[qp].size;
@@ -422,7 +422,7 @@
         /* If qp message size is bigger that max_inline_data, we
          * should enable inline messages only for RDMA QP (for PUT/GET
          * fin messages) and for the first qp */
-        return device->max_inline_data;
+        return endpoint->max_inline_data;
     }
     /* Otherway it is no reason for inline */
     return 0;
@@ -449,7 +449,7 @@
     init_attr.recv_cq = openib_btl->device->ib_cq[qp_cq_prio(qp)];
     init_attr.srq     = srq;
     init_attr.cap.max_inline_data = req_inline = 
-        max_inline_size(qp, openib_btl->device);
+        max_inline_size(qp, endpoint);
     init_attr.cap.max_send_sge = 1;
     init_attr.cap.max_recv_sge = 1; /* we do not use SG list */
     if(BTL_OPENIB_QP_TYPE_PP(qp)) {
diff -r f5dd40f84bc6 ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c
--- a/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c	Mon Aug 31 00:00:16 2009 -0700
+++ b/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c	Thu Sep 17 18:23:58 2009 +0300
@@ -1,7 +1,7 @@
 /*
  * Copyright (c) 2007-2009 Cisco Systems, Inc.  All rights reserved.
  * Copyright (c) 2007-2008 Chelsio, Inc. All rights reserved.
- * Copyright (c) 2008      Mellanox Technologies. All rights reserved.
+ * Copyright (c) 2008-2009 Mellanox Technologies. All rights reserved.
  * Copyright (c) 2009      Sandia National Laboratories. All rights reserved.
  *
  * $COPYRIGHT$
@@ -347,9 +347,9 @@
 /*
  * Returns max inlne size for qp #N 
  */
-static uint32_t max_inline_size(int qp, mca_btl_openib_device_t *device)
+static uint32_t max_inline_size(int qp, mca_btl_openib_endpoint_t *endpoint)
 {
-    if (mca_btl_openib_component.qp_infos[qp].size <= device->max_inline_data) {
+    if (mca_btl_openib_component.qp_infos[qp].size <= endpoint->max_inline_data) {
         /* If qp message size is smaller than max_inline_data,
          * we should enable inline messages */
         return mca_btl_openib_component.qp_infos[qp].size;
@@ -357,7 +357,7 @@
         /* If qp message size is bigger that max_inline_data, we
          * should enable inline messages only for RDMA QP (for PUT/GET
          * fin messages) and for the first qp */
-        return device->max_inline_data;
+        return endpoint->max_inline_data;
     }
     /* Otherwise it is no reason for inline */
     return 0;
@@ -409,7 +409,7 @@
     }
     attr.cap.max_send_wr = max_send_wr;
     attr.cap.max_inline_data = req_inline = 
-        max_inline_size(qpnum, contents->openib_btl->device);
+        max_inline_size(qpnum, endpoint);
     attr.cap.max_send_sge = 1;
     attr.cap.max_recv_sge = 1; /* we do not use SG list */
 
diff -r f5dd40f84bc6 ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c
--- a/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	Mon Aug 31 00:00:16 2009 -0700
+++ b/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	Thu Sep 17 18:23:58 2009 +0300
@@ -397,7 +397,7 @@
     qp_init_attr.cap.max_recv_wr = 0;
     qp_init_attr.cap.max_send_wr = send_wr;
     qp_init_attr.cap.max_inline_data = req_inline =
-        openib_btl->device->max_inline_data;
+        endpoint->max_inline_data;
     qp_init_attr.cap.max_send_sge = 1;
     /* this one is ignored by driver */
     qp_init_attr.cap.max_recv_sge = 1; /* we do not use SG list */
diff -r f5dd40f84bc6 ompi/mca/btl/openib/help-mpi-btl-openib.txt
--- a/ompi/mca/btl/openib/help-mpi-btl-openib.txt	Mon Aug 31 00:00:16 2009 -0700
+++ b/ompi/mca/btl/openib/help-mpi-btl-openib.txt	Thu Sep 17 18:23:58 2009 +0300
@@ -11,7 +11,7 @@
 # Copyright (c) 2004-2006 The Regents of the University of California.
 #                         All rights reserved.
 # Copyright (c) 2006-2009 Cisco Systems, Inc.  All rights reserved.
-# Copyright (c) 2007-2008 Mellanox Technologies. All rights reserved.
+# Copyright (c) 2007-2009 Mellanox Technologies. All rights reserved.
 # Copyright (c) 2009      Sun Microsystems, Inc.  All rights reserved.
 # $COPYRIGHT$
 # 
@@ -590,3 +590,15 @@
   Local host: %s
   Value:      %s
   Message:    %s
+#
+[unsupported queues configuration]
+The remote and local queues were automatically configured for different 
+devices and as result Open MPI failed to find optimal configuration.
+Please use MCA parameters in order define Open Fabrics queues configuration.
+
+  Local host:  %s
+  Adapter 1:   %s (vendor 0x%x, part ID %d)
+  Queues:      %s
+  Remote host: %s
+  Adapter 2:   remote adapter (vendor 0x%x, part ID %d)
+  Queues:      %s