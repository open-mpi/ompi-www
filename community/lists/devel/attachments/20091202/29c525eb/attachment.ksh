diff -r a5938d9dcada ompi/mca/btl/openib/btl_openib.c
--- a/ompi/mca/btl/openib/btl_openib.c	Mon Nov 23 19:00:16 2009 -0800
+++ b/ompi/mca/btl/openib/btl_openib.c	Wed Dec 02 16:24:55 2009 +0200
@@ -214,6 +214,7 @@
 static int create_srq(mca_btl_openib_module_t *openib_btl)
 {
     int qp;
+    int32_t rd_num, rd_curr_num; 
 
     /* create the SRQ's */
     for(qp = 0; qp < mca_btl_openib_component.num_qps; qp++) {
@@ -242,6 +243,24 @@
                                                ibv_get_device_name(openib_btl->device->ib_dev));
                 return OMPI_ERROR;
             }
+
+            rd_num = mca_btl_openib_component.qp_infos[qp].rd_num;
+            rd_curr_num = openib_btl->qps[qp].u.srq_qp.rd_curr_num = mca_btl_openib_component.qp_infos[qp].u.srq_qp.rd_init;
+
+            if(true == mca_btl_openib_component.enable_srq_resize) {
+                if(0 == rd_curr_num) {
+                    openib_btl->qps[qp].u.srq_qp.rd_curr_num = 1;
+                }
+
+                openib_btl->qps[qp].u.srq_qp.rd_low_local = rd_curr_num - (rd_curr_num >> 2);
+                openib_btl->qps[qp].u.srq_qp.srq_limit_event_flag = true;
+            } else {
+                openib_btl->qps[qp].u.srq_qp.rd_curr_num = rd_num;
+                openib_btl->qps[qp].u.srq_qp.rd_low_local = mca_btl_openib_component.qp_infos[qp].rd_low;
+                /* Not used in this case, but we don't need a garbage */
+                mca_btl_openib_component.qp_infos[qp].u.srq_qp.srq_limit = 0;
+                openib_btl->qps[qp].u.srq_qp.srq_limit_event_flag = false;
+            }
         }
     }
 
diff -r a5938d9dcada ompi/mca/btl/openib/btl_openib.h
--- a/ompi/mca/btl/openib/btl_openib.h	Mon Nov 23 19:00:16 2009 -0800
+++ b/ompi/mca/btl/openib/btl_openib.h	Wed Dec 02 16:24:55 2009 +0200
@@ -87,6 +87,12 @@
 
 struct mca_btl_openib_srq_qp_info_t {
     int32_t sd_max;
+    /* The init value for rd_curr_num variables of all SRQs */
+    int32_t rd_init;
+    /* The watermark, threshold - if the number of WQEs in SRQ is less then this value =>
+       the SRQ limit event (IBV_EVENT_SRQ_LIMIT_REACHED) will be generated on corresponding SRQ.
+       As result the maximal number of pre-posted WQEs on the SRQ will be increased */
+    int32_t srq_limit;
 }; typedef struct mca_btl_openib_srq_qp_info_t mca_btl_openib_srq_qp_info_t;
 
 struct mca_btl_openib_qp_info_t {
@@ -254,6 +260,8 @@
     ompi_free_list_t recv_user_free;
     /**< frags for coalesced massages */
     ompi_free_list_t send_free_coalesced;
+    /**< Whether we want a dynamically resizing srq, enabled by default */
+    bool enable_srq_resize;
 }; typedef struct mca_btl_openib_component_t mca_btl_openib_component_t;
 
 OMPI_MODULE_DECLSPEC extern mca_btl_openib_component_t mca_btl_openib_component;
@@ -348,6 +356,16 @@
     int32_t sd_credits;  /* the max number of outstanding sends on a QP when using SRQ */
                          /*  i.e. the number of frags that  can be outstanding (down counter) */
     opal_list_t pending_frags[2];    /**< list of high/low prio frags */
+    /**< The number of max rd that we can post in the current time.
+         The value may be increased in the IBV_EVENT_SRQ_LIMIT_REACHED
+         event handler. The value starts from (rd_num / 4) and increased up to rd_num */
+    int32_t rd_curr_num;
+    /**< We post additional WQEs only if a number of WQEs (in specific SRQ) is less of this value.
+         The value increased together with rd_curr_num. The value is unique for every SRQ. */
+    int32_t rd_low_local;
+    /**< The flag points if we want to get the 
+         IBV_EVENT_SRQ_LIMIT_REACHED events for dynamically resizing SRQ */
+    bool srq_limit_event_flag;
 }; typedef struct mca_btl_openib_module_srq_qp_t mca_btl_openib_module_srq_qp_t;
 
 struct mca_btl_openib_module_qp_t {
diff -r a5938d9dcada ompi/mca/btl/openib/btl_openib_async.c
--- a/ompi/mca/btl/openib/btl_openib_async.c	Mon Nov 23 19:00:16 2009 -0800
+++ b/ompi/mca/btl/openib/btl_openib_async.c	Wed Dec 02 16:24:55 2009 +0200
@@ -1,5 +1,5 @@
 /*
- * Copyright (c) 2008 Mellanox Technologies. All rights reserved.
+ * Copyright (c) 2008-2009 Mellanox Technologies. All rights reserved.
  * Copyright (c) 2007-2009 Cisco Systems, Inc.  All rights reserved.
  * Copyright (c) 2006-2007 Voltaire All rights reserved.
  * $COPYRIGHT$
@@ -226,10 +226,51 @@
     return OMPI_SUCCESS;
 }
 
+/* The main idea of resizing SRQ algorithm - 
+   We create a SRQ with size = rd_num, but for efficient usage of resources
+   the number of WQEs that we post = rd_curr_num < rd_num and this value is
+   increased (by needs) in IBV_EVENT_SRQ_LIMIT_REACHED event handler (i.e. in this function),
+   the event will thrown by device if number of WQEs in SRQ will be less than srq_limit */
+static int btl_openib_async_srq_limit_event(struct ibv_srq* srq, 
+                                              mca_btl_openib_module_t *openib_btl)
+{
+    int qp;
+
+    for(qp = 0; qp < mca_btl_openib_component.num_qps; qp++) {
+        if (!BTL_OPENIB_QP_TYPE_PP(qp)) {
+            if(openib_btl->qps[qp].u.srq_qp.srq == srq) {
+                break;
+            }
+        }
+    }
+
+    if(qp >= mca_btl_openib_component.num_qps) {
+        BTL_ERROR(("The srq doesn't found on %s.", ibv_get_device_name(openib_btl->device->ib_dev)));
+        return OMPI_ERROR;
+    }
+
+    /* dynamically re-size the SRQ to be larger */
+    openib_btl->qps[qp].u.srq_qp.rd_curr_num <<= 1;
+
+    if(openib_btl->qps[qp].u.srq_qp.rd_curr_num >= mca_btl_openib_component.qp_infos[qp].rd_num) {
+        openib_btl->qps[qp].u.srq_qp.rd_curr_num = mca_btl_openib_component.qp_infos[qp].rd_num;
+        openib_btl->qps[qp].u.srq_qp.rd_low_local = mca_btl_openib_component.qp_infos[qp].rd_low;
+
+        openib_btl->qps[qp].u.srq_qp.srq_limit_event_flag = false;
+
+        return OMPI_SUCCESS;
+    }
+
+    openib_btl->qps[qp].u.srq_qp.rd_low_local <<= 1;
+    openib_btl->qps[qp].u.srq_qp.srq_limit_event_flag = true;
+
+    return OMPI_SUCCESS;
+}
+
 /* Function handle async device events */
 static int btl_openib_async_deviceh(struct mca_btl_openib_async_poll *devices_poll, int index)
 {
-    int j;
+    int j, btl_index = 0;
     mca_btl_openib_device_t *device = NULL;
     struct ibv_async_event event;
     bool xrc_event = false;
@@ -240,6 +281,8 @@
         if (mca_btl_openib_component.openib_btls[j]->device->ib_dev_context->async_fd ==
                 devices_poll->async_pollfd[index].fd ) {
             device = mca_btl_openib_component.openib_btls[j]->device;
+            btl_index = j;
+
             break;
         }
     }
@@ -306,7 +349,15 @@
 #if HAVE_DECL_IBV_EVENT_CLIENT_REREGISTER
             case IBV_EVENT_CLIENT_REREGISTER:
 #endif
+                break;
+            /* The event is signaled when number of prepost receive WQEs is going
+                                            under predefined threshold - srq_limit */
             case IBV_EVENT_SRQ_LIMIT_REACHED:
+                if(OMPI_SUCCESS != btl_openib_async_srq_limit_event(event.element.srq, 
+                                     mca_btl_openib_component.openib_btls[btl_index])) {
+                    return OMPI_ERROR;
+                }
+
                 break;
             default:
                 orte_show_help("help-mpi-btl-openib.txt", "of unknown event",
diff -r a5938d9dcada ompi/mca/btl/openib/btl_openib_component.c
--- a/ompi/mca/btl/openib/btl_openib_component.c	Mon Nov 23 19:00:16 2009 -0800
+++ b/ompi/mca/btl/openib/btl_openib_component.c	Wed Dec 02 16:24:55 2009 +0200
@@ -1361,8 +1361,8 @@
                         true, rd_win, rd_num - rd_low);
             }
         } else {
-            int32_t sd_max;
-            if (count < 3 || count > 5) {
+            int32_t sd_max, rd_init, srq_limit;
+            if (count < 3 || count > 7) {
                 orte_show_help("help-mpi-btl-openib.txt",
                                "invalid srq specification", true,
                                orte_process_info.nodename, queues[qp]);
@@ -1376,15 +1376,47 @@
             /* by default set rd_low to be 3/4 of rd_num */
             rd_low = atoi_param(P(3), rd_num - (rd_num / 4));
             sd_max = atoi_param(P(4), rd_low / 4);
-            BTL_VERBOSE(("srq: rd_num is %d rd_low is %d sd_max is %d",
-                         rd_num, rd_low, sd_max));
+            /* rd_init is initial value for rd_curr_num of all SRQs, 1/4 of rd_num by default */
+            rd_init = atoi_param(P(5), rd_num / 4);
+            /* by default set srq_limit to be 3/16 of rd_init (it's 1/4 of rd_low_local,
+               the value of rd_low_local we calculate in create_srq function) */
+            srq_limit = atoi_param(P(6), (rd_init - (rd_init / 4)) / 4);
+
+            /* If we set srq_limit less or greater than rd_init
+               (init value for rd_curr_num) => we receive the IBV_EVENT_SRQ_LIMIT_REACHED
+               event immediately and the value of rd_curr_num will be increased */
+
+            /* If we set srq_limit to zero, but size of SRQ greater than 1 and
+               it is not a user request (param number 6 in --mca btl_openib_receive_queues) => set it to be 1 */
+            if((0 == srq_limit) && (1 < rd_num) && (0 != P(6))) {
+                srq_limit = 1;
+            }
+
+            BTL_VERBOSE(("srq: rd_num is %d rd_low is %d sd_max is %d rd_max is %d srq_limit is %d",
+                         rd_num, rd_low, sd_max, rd_init, srq_limit));
 
             /* Calculate the smallest freelist size that can be allowed */
             if (rd_num > min_freelist_size) {
                 min_freelist_size = rd_num;
             }
 
+            if (rd_num < rd_init) {
+                orte_show_help("help-mpi-btl-openib.txt", "rd_num must be >= rd_init",
+                        true, orte_process_info.nodename, queues[qp]);
+                ret = OMPI_ERR_BAD_PARAM;
+                goto error;
+            }
+
+            if (rd_num < srq_limit) {
+                orte_show_help("help-mpi-btl-openib.txt", "srq_limit must be > rd_num",
+                        true, orte_process_info.nodename, queues[qp]);
+                ret = OMPI_ERR_BAD_PARAM;
+                goto error;
+            }
+
             mca_btl_openib_component.qp_infos[qp].u.srq_qp.sd_max = sd_max;
+            mca_btl_openib_component.qp_infos[qp].u.srq_qp.rd_init = rd_init;
+            mca_btl_openib_component.qp_infos[qp].u.srq_qp.srq_limit = srq_limit;
         }
 
         if (rd_num <= rd_low) {
@@ -3185,19 +3217,19 @@
 
 int mca_btl_openib_post_srr(mca_btl_openib_module_t* openib_btl, const int qp)
 {
-    int rd_low = mca_btl_openib_component.qp_infos[qp].rd_low;
-    int rd_num = mca_btl_openib_component.qp_infos[qp].rd_num;
+    int rd_low_local = openib_btl->qps[qp].u.srq_qp.rd_low_local;
+    int rd_curr_num = openib_btl->qps[qp].u.srq_qp.rd_curr_num;
     int num_post, i, rc;
     struct ibv_recv_wr *bad_wr, *wr_list = NULL, *wr = NULL;
 
     assert(!BTL_OPENIB_QP_TYPE_PP(qp));
 
     OPAL_THREAD_LOCK(&openib_btl->ib_lock);
-    if(openib_btl->qps[qp].u.srq_qp.rd_posted > rd_low) {
+    if(openib_btl->qps[qp].u.srq_qp.rd_posted > rd_low_local) {
         OPAL_THREAD_UNLOCK(&openib_btl->ib_lock);
         return OMPI_SUCCESS;
     }
-    num_post = rd_num - openib_btl->qps[qp].u.srq_qp.rd_posted;
+    num_post = rd_curr_num - openib_btl->qps[qp].u.srq_qp.rd_posted;
 
     for(i = 0; i < num_post; i++) {
         ompi_free_list_item_t* item;
@@ -3214,7 +3246,26 @@
 
     rc = ibv_post_srq_recv(openib_btl->qps[qp].u.srq_qp.srq, wr_list, &bad_wr);
     if(OPAL_LIKELY(0 == rc)) {
+        struct ibv_srq_attr srq_attr;
+
         OPAL_THREAD_ADD32(&openib_btl->qps[qp].u.srq_qp.rd_posted, num_post);
+
+        if(true == openib_btl->qps[qp].u.srq_qp.srq_limit_event_flag) {
+            srq_attr.max_wr = openib_btl->qps[qp].u.srq_qp.rd_curr_num;
+            srq_attr.max_sge = 1;
+            srq_attr.srq_limit = mca_btl_openib_component.qp_infos[qp].u.srq_qp.srq_limit;
+
+            openib_btl->qps[qp].u.srq_qp.srq_limit_event_flag = false;
+            if(ibv_modify_srq(openib_btl->qps[qp].u.srq_qp.srq, &srq_attr, IBV_SRQ_LIMIT)) {
+                BTL_ERROR(("Failed to request limit event for srq on  %s.  "
+                   "Fatal error, stoping asynch event thread",
+                   ibv_get_device_name(openib_btl->device->ib_dev)));
+
+                OPAL_THREAD_UNLOCK(&openib_btl->ib_lock);
+                return OMPI_ERROR;
+            }
+        }
+
         OPAL_THREAD_UNLOCK(&openib_btl->ib_lock);
         return OMPI_SUCCESS;
     }
diff -r a5938d9dcada ompi/mca/btl/openib/btl_openib_mca.c
--- a/ompi/mca/btl/openib/btl_openib_mca.c	Mon Nov 23 19:00:16 2009 -0800
+++ b/ompi/mca/btl/openib/btl_openib_mca.c	Wed Dec 02 16:24:55 2009 +0200
@@ -10,7 +10,7 @@
  * Copyright (c) 2004-2005 The Regents of the University of California.
  *                         All rights reserved.
  * Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
- * Copyright (c) 2006-2008 Mellanox Technologies. All rights reserved.
+ * Copyright (c) 2006-2009 Mellanox Technologies. All rights reserved.
  * Copyright (c) 2006-2007 Los Alamos National Security, LLC.  All rights
  *                         reserved.
  * Copyright (c) 2006-2007 Voltaire All rights reserved.
@@ -163,6 +163,11 @@
                   1, &ival, 0));
     mca_btl_openib_component.warn_nonexistent_if = (0 != ival);
 
+    CHECK(reg_int("enable_srq_resize", NULL,
+                  "Enable/Disable on demand SRQ resize. "
+                  "(0 = without resizing, nonzero = with resizing)", 1, &ival, 0));
+    mca_btl_openib_component.enable_srq_resize = (0 != ival);
+
     if (OMPI_HAVE_IBV_FORK_INIT) {
         ival2 = -1;
     } else {
diff -r a5938d9dcada ompi/mca/btl/openib/help-mpi-btl-openib.txt
--- a/ompi/mca/btl/openib/help-mpi-btl-openib.txt	Mon Nov 23 19:00:16 2009 -0800
+++ b/ompi/mca/btl/openib/help-mpi-btl-openib.txt	Wed Dec 02 16:24:55 2009 +0200
@@ -11,7 +11,7 @@
 # Copyright (c) 2004-2006 The Regents of the University of California.
 #                         All rights reserved.
 # Copyright (c) 2006-2009 Cisco Systems, Inc.  All rights reserved.
-# Copyright (c) 2007-2008 Mellanox Technologies. All rights reserved.
+# Copyright (c) 2007-2009 Mellanox Technologies. All rights reserved.
 # Copyright (c) 2009      Sun Microsystems, Inc.  All rights reserved.
 # $COPYRIGHT$
 # 
@@ -414,6 +414,24 @@
   Local host: %s
   Bad queue specification: %s
 #
+[rd_num must be >= rd_init]
+WARNING: The number of buffers for a queue pair specified via the
+btl_openib_receive_queues MCA parameter (parametr #2) must be
+greater or equal to the init srq size (parametr #5).
+The OpenFabrics (openib) BTL will therefore be deactivated for this run.
+
+  Local host: %s
+  Bad queue specification: %s
+#
+[srq_limit must be > rd_num]
+WARNING: The number of buffers for a queue pair specified via the
+btl_openib_receive_queues MCA parameter (parametr #2) must be greater than the limit
+buffer count (parametr #6).  The OpenFabrics (openib) BTL will therefore
+be deactivated for this run.
+
+  Local host: %s
+  Bad queue specification: %s
+#
 [biggest qp size is too small]
 WARNING: The largest queue pair buffer size specified in the
 btl_openib_receive_queues MCA parameter is smaller than the maximum
