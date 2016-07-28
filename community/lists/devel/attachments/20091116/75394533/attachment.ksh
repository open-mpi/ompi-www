diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib.c
--- a/ompi/mca/btl/openib/btl_openib.c	Fri Nov 06 12:00:16 2009 -0800
+++ b/ompi/mca/btl/openib/btl_openib.c	Mon Nov 16 17:41:48 2009 +0200
@@ -39,6 +39,8 @@
 #include "ompi/runtime/ompi_cr.h"
 #endif
 
+#include "btl_openib_ini.h"
+
 #include "btl_openib.h"
 #include "btl_openib_frag.h"
 #include "btl_openib_proc.h"
@@ -287,6 +289,158 @@
     return rc;
 }
 
+const char* btl_openib_get_transport_name(mca_btl_openib_transport_type_t transport_type)
+{
+    switch(transport_type) {
+        case MCA_BTL_OPENIB_TRANSPORT_RDMAOE:
+            return "MCA_BTL_OPENIB_TRANSPORT_RDMAOE";
+
+        case MCA_BTL_OPENIB_TRANSPORT_IB:
+            return "MCA_BTL_OPENIB_TRANSPORT_IB";
+
+        case MCA_BTL_OPENIB_TRANSPORT_IWARP:
+            return "MCA_BTL_OPENIB_TRANSPORT_IWARP";
+
+        case MCA_BTL_OPENIB_TRANSPORT_UNKNOWN:
+        default:
+            return "MCA_BTL_OPENIB_TRANSPORT_UNKNOWN";
+    }
+}
+
+mca_btl_openib_transport_type_t mca_btl_openib_get_transport_type(mca_btl_openib_module_t* openib_btl)
+{
+#ifdef OMPI_HAVE_RDMAOE
+    switch(openib_btl->ib_port_attr.transport) {
+        case RDMA_TRANSPORT_IB:
+            return MCA_BTL_OPENIB_TRANSPORT_IB;
+
+        case RDMA_TRANSPORT_IWARP:
+            return MCA_BTL_OPENIB_TRANSPORT_IWARP;
+
+        case RDMA_TRANSPORT_RDMAOE:
+            return MCA_BTL_OPENIB_TRANSPORT_RDMAOE;
+
+        default:
+            return MCA_BTL_OPENIB_TRANSPORT_UNKNOWN;
+    }
+#else
+#ifdef HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE
+    switch(openib_btl->device->ib_dev->transport_type) {
+        case IBV_TRANSPORT_IB:
+            return MCA_BTL_OPENIB_TRANSPORT_IB;
+
+        case IBV_TRANSPORT_IWARP:
+            return MCA_BTL_OPENIB_TRANSPORT_IWARP;
+
+        case IBV_TRANSPORT_UNKNOWN:		 
+        default:
+            return MCA_BTL_OPENIB_TRANSPORT_UNKNOWN;
+    }
+#endif
+    return MCA_BTL_OPENIB_TRANSPORT_IB;
+#endif
+}
+
+static int mca_btl_openib_tune_endpoint(mca_btl_openib_module_t* openib_btl, 
+                                            mca_btl_base_endpoint_t* endpoint)
+{
+    int ret = OMPI_SUCCESS;
+
+    char* recv_qps = NULL;
+
+    ompi_btl_openib_ini_values_t values;
+
+    if(mca_btl_openib_get_transport_type(openib_btl) != endpoint->rem_info.rem_transport_type) {
+        orte_show_help("help-mpi-btl-openib.txt",
+                "conflicting transport types", true,
+                orte_process_info.nodename,
+                        ibv_get_device_name(openib_btl->device->ib_dev),
+                        (openib_btl->device->ib_dev_attr).vendor_id,
+                        (openib_btl->device->ib_dev_attr).vendor_part_id,
+                        btl_openib_get_transport_name(mca_btl_openib_get_transport_type(openib_btl)),
+                        endpoint->endpoint_proc->proc_ompi->proc_hostname,
+                        endpoint->rem_info.rem_vendor_id,
+                        endpoint->rem_info.rem_vendor_part_id,
+                        btl_openib_get_transport_name(endpoint->rem_info.rem_transport_type));
+    
+        return OMPI_ERROR;
+    }
+
+    memset(&values, 0, sizeof(ompi_btl_openib_ini_values_t));
+    ret = ompi_btl_openib_ini_query(endpoint->rem_info.rem_vendor_id,
+                          endpoint->rem_info.rem_vendor_part_id, &values);
+
+    if (OMPI_SUCCESS != ret && OMPI_ERR_NOT_FOUND != ret) {
+        orte_show_help("help-mpi-btl-openib.txt",
+                       "error in device init", true,
+                       orte_process_info.nodename,
+                       ibv_get_device_name(openib_btl->device->ib_dev));
+        return ret;
+    }
+
+    if(openib_btl->device->mtu < endpoint->rem_info.rem_mtu) {
+        endpoint->rem_info.rem_mtu = openib_btl->device->mtu; 
+    }
+
+    endpoint->use_eager_rdma = openib_btl->device->use_eager_rdma &
+                               endpoint->use_eager_rdma;
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
+                               ibv_get_device_name(openib_btl->device->ib_dev),
+                               (openib_btl->device->ib_dev_attr).vendor_id,
+                               (openib_btl->device->ib_dev_attr).vendor_part_id,
+                               mca_btl_openib_component.receive_queues,
+                               endpoint->endpoint_proc->proc_ompi->proc_hostname,
+                               endpoint->rem_info.rem_vendor_id,
+                               endpoint->rem_info.rem_vendor_part_id,
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
+                               ibv_get_device_name(openib_btl->device->ib_dev),
+                               (openib_btl->device->ib_dev_attr).vendor_id,
+                               (openib_btl->device->ib_dev_attr).vendor_part_id,
+                               mca_btl_openib_component.receive_queues,
+                               endpoint->endpoint_proc->proc_ompi->proc_hostname,
+                               endpoint->rem_info.rem_vendor_id,
+                               endpoint->rem_info.rem_vendor_part_id,
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
@@ -471,6 +625,10 @@
             continue;
         }
 
+         if(OMPI_SUCCESS != mca_btl_openib_tune_endpoint(openib_btl, endpoint)) {
+            return OMPI_ERROR;
+        }
+
         endpoint->index = opal_pointer_array_add(openib_btl->device->endpoints, (void*)endpoint);
         if( 0 > endpoint->index ) {
             OBJ_RELEASE(endpoint);
diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib.h
--- a/ompi/mca/btl/openib/btl_openib.h	Fri Nov 06 12:00:16 2009 -0800
+++ b/ompi/mca/btl/openib/btl_openib.h	Mon Nov 16 17:41:48 2009 +0200
@@ -75,6 +75,13 @@
  */
 
 typedef enum {
+    MCA_BTL_OPENIB_TRANSPORT_UNKNOWN    = -1,
+    MCA_BTL_OPENIB_TRANSPORT_IB    = 0,
+    MCA_BTL_OPENIB_TRANSPORT_IWARP,
+    MCA_BTL_OPENIB_TRANSPORT_RDMAOE
+} mca_btl_openib_transport_type_t;
+
+typedef enum {
     MCA_BTL_OPENIB_PP_QP,
     MCA_BTL_OPENIB_SRQ_QP,
     MCA_BTL_OPENIB_XRC_QP
@@ -254,6 +261,8 @@
     ompi_free_list_t recv_user_free;
     /**< frags for coalesced massages */
     ompi_free_list_t send_free_coalesced;
+    /**< Default receive queues */
+    char* default_recv_qps;
 }; typedef struct mca_btl_openib_component_t mca_btl_openib_component_t;
 
 OMPI_MODULE_DECLSPEC extern mca_btl_openib_component_t mca_btl_openib_component;
@@ -272,6 +281,12 @@
     uint16_t apm_lid;
     /** The MTU used by this port */
     uint8_t mtu;
+    /** vendor id define device type and tuning */
+    uint32_t vendor_id;
+    /** vendor part id define device type and tuning */
+    uint32_t vendor_part_id;
+    /** Transport type of remote port */
+    uint8_t transport_type;
     /** Dummy field used to calculate the real length */
     uint8_t end;
 } mca_btl_openib_modex_message_t;
@@ -633,6 +648,18 @@
 
 int mca_btl_openib_post_srr(mca_btl_openib_module_t* openib_btl, const int qp);
 
+/**
+ * Get a transport name of btl by its transport type.
+ */
+
+const char* btl_openib_get_transport_name(mca_btl_openib_transport_type_t transport_type);
+
+/**
+ * Get a transport type of btl.
+ */
+
+mca_btl_openib_transport_type_t mca_btl_openib_get_transport_type(mca_btl_openib_module_t* openib_btl);
+
 static inline int qp_cq_prio(const int qp)
 {
     if(0 == qp)
diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib_component.c
--- a/ompi/mca/btl/openib/btl_openib_component.c	Fri Nov 06 12:00:16 2009 -0800
+++ b/ompi/mca/btl/openib/btl_openib_component.c	Mon Nov 16 17:41:48 2009 +0200
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
 
@@ -303,6 +308,16 @@
 
         /* Pack the modex common message struct.  */
         size = modex_message_size;
+
+        (mca_btl_openib_component.openib_btls[i]->port_info).vendor_id =
+            (mca_btl_openib_component.openib_btls[i]->device->ib_dev_attr).vendor_id;
+
+        (mca_btl_openib_component.openib_btls[i]->port_info).vendor_part_id =
+            (mca_btl_openib_component.openib_btls[i]->device->ib_dev_attr).vendor_part_id;
+
+        (mca_btl_openib_component.openib_btls[i]->port_info).transport_type =
+            mca_btl_openib_get_transport_type(mca_btl_openib_component.openib_btls[i]);
+
         memcpy(offset, 
                &(mca_btl_openib_component.openib_btls[i]->port_info), 
                size);
@@ -1657,45 +1672,6 @@
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
@@ -1795,6 +1771,45 @@
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
 
diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib_endpoint.c
--- a/ompi/mca/btl/openib/btl_openib_endpoint.c	Fri Nov 06 12:00:16 2009 -0800
+++ b/ompi/mca/btl/openib/btl_openib_endpoint.c	Mon Nov 16 17:41:48 2009 +0200
@@ -310,6 +310,11 @@
                 ep->rem_info.rem_subnet_id,
                 ep->rem_info.rem_mtu);
 
+    ep->rem_info.rem_vendor_id = (remote_proc_info->pm_port_info).vendor_id;
+    ep->rem_info.rem_vendor_part_id = (remote_proc_info->pm_port_info).vendor_part_id;
+
+    ep->rem_info.rem_transport_type = (remote_proc_info->pm_port_info).transport_type;
+
     for (qp = 0; qp < mca_btl_openib_component.num_qps; qp++) {
         endpoint_init_qp(ep, qp);
     }
diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib_endpoint.h
--- a/ompi/mca/btl/openib/btl_openib_endpoint.h	Fri Nov 06 12:00:16 2009 -0800
+++ b/ompi/mca/btl/openib/btl_openib_endpoint.h	Mon Nov 16 17:41:48 2009 +0200
@@ -94,6 +94,12 @@
     mca_btl_openib_rem_qp_info_t *rem_qps;
     /* Remote xrc_srq info, used only with XRC connections */
     mca_btl_openib_rem_srq_info_t *rem_srqs;
+    /* Vendor id of remote HCA */
+    uint32_t rem_vendor_id;
+    /* Vendor part id of remote HCA */
+    uint32_t rem_vendor_part_id;
+    /* Transport type of remote port */
+    mca_btl_openib_transport_type_t rem_transport_type;
 } mca_btl_openib_rem_info_t;
 
 
diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib_mca.c
--- a/ompi/mca/btl/openib/btl_openib_mca.c	Fri Nov 06 12:00:16 2009 -0800
+++ b/ompi/mca/btl/openib/btl_openib_mca.c	Mon Nov 16 17:41:48 2009 +0200
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
diff -r 521e5f4b161a ompi/mca/btl/openib/help-mpi-btl-openib.txt
--- a/ompi/mca/btl/openib/help-mpi-btl-openib.txt	Fri Nov 06 12:00:16 2009 -0800
+++ b/ompi/mca/btl/openib/help-mpi-btl-openib.txt	Mon Nov 16 17:41:48 2009 +0200
@@ -11,7 +11,7 @@
 # Copyright (c) 2004-2006 The Regents of the University of California.
 #                         All rights reserved.
 # Copyright (c) 2006-2009 Cisco Systems, Inc.  All rights reserved.
-# Copyright (c) 2007-2008 Mellanox Technologies. All rights reserved.
+# Copyright (c) 2007-2009 Mellanox Technologies. All rights reserved.
 # Copyright (c) 2009      Sun Microsystems, Inc.  All rights reserved.
 # $COPYRIGHT$
 # 
@@ -590,3 +590,28 @@
   Local host: %s
   Value:      %s
   Message:    %s
+#
+[unsupported queues configuration]
+The remote and local queues were automatically configured for different 
+devices and as result Open MPI failed to find optimal configuration.
+Please use MCA parameters in order define Open Fabrics queues configuration.
+
+  Local host:       %s
+  Local adapter:    %s (vendor 0x%x, part ID %d)
+  Local queues:     %s
+  
+  Remote host:      %s
+  Remote adapter:   remote adapter (vendor 0x%x, part ID %d)
+  Remote queues:    %s
+#
+[conflicting transport types]
+Open MPI detected two different OpenFabrics transport types in the same Infiniband network.
+Such mixed network trasport configuration is not supported by Open MPI.
+
+  Local host:            %s
+  Local adapter:         %s (vendor 0x%x, part ID %d)
+  Local transport type:  %s
+  
+  Remote host:           %s
+  Remote Adapter:        remote adapter (vendor 0x%x, part ID %d)
+  Remote transport type: %s