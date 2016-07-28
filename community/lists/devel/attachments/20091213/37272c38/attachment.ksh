diff -r 579353424d0c ompi/config/ompi_check_openib.m4
--- a/ompi/config/ompi_check_openib.m4	Fri Dec 11 14:00:16 2009 -0800
+++ b/ompi/config/ompi_check_openib.m4	Sun Dec 13 14:43:00 2009 +0200
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
+           AC_CHECK_DECLS([IBV_LINK_LAYER_ETHERNET],
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
diff -r 579353424d0c ompi/mca/btl/openib/btl_openib.c
--- a/ompi/mca/btl/openib/btl_openib.c	Fri Dec 11 14:00:16 2009 -0800
+++ b/ompi/mca/btl/openib/btl_openib.c	Sun Dec 13 14:43:00 2009 +0200
@@ -354,6 +354,13 @@
         }
 #endif
 
+#ifdef OMPI_HAVE_RDMAOE
+        if(IBV_LINK_LAYER_ETHERNET == openib_btl->ib_port_attr.link_layer &&
+                OPAL_PROC_ON_LOCAL_NODE(ompi_proc->proc_flags)) {
+            continue;
+        }
+#endif
+
         if(NULL == (ib_proc = mca_btl_openib_proc_create(ompi_proc))) {
             return OMPI_ERR_OUT_OF_RESOURCE;
         }
diff -r 579353424d0c ompi/mca/btl/openib/connect/base.h
--- a/ompi/mca/btl/openib/connect/base.h	Fri Dec 11 14:00:16 2009 -0800
+++ b/ompi/mca/btl/openib/connect/base.h	Sun Dec 13 14:43:00 2009 +0200
@@ -1,6 +1,7 @@
 /*
  * Copyright (c) 2007-2008 Cisco Systems, Inc.  All rights reserved.
  *
+ * Copyright (c) 2009      Mellanox Technologies.  All rights reserved.
  * $COPYRIGHT$
  * 
  * Additional copyrights may follow
@@ -13,6 +14,17 @@
 
 #include "connect/connect.h"
 
+#ifdef OMPI_HAVE_RDMAOE
+#define BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)                       \
+        (((IBV_TRANSPORT_IB != ((btl)->device->ib_dev->transport_type)) || \
+        (IBV_LINK_LAYER_ETHERNET == ((btl)->ib_port_attr.link_layer))) ?   \
+        true : false)
+#else
+#define BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)                       \
+        ((IBV_TRANSPORT_IB != ((btl)->device->ib_dev->transport_type)) ?   \
+        true : false)
+#endif
+
 BEGIN_C_DECLS
 
 /*
diff -r 579353424d0c ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c
--- a/ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	Fri Dec 11 14:00:16 2009 -0800
+++ b/ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	Sun Dec 13 14:43:00 2009 +0200
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
diff -r 579353424d0c ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
--- a/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	Fri Dec 11 14:00:16 2009 -0800
+++ b/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	Sun Dec 13 14:43:00 2009 +0200
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
