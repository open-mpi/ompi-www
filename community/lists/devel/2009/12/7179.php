<?
$subject_val = "[OMPI devel] [PATCH] Not optimal SRQ resource allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 10:22:25 2009" -->
<!-- isoreceived="20091202152225" -->
<!-- sent="Wed, 02 Dec 2009 17:20:08 +0200" -->
<!-- isosent="20091202152008" -->
<!-- name="Vasily Philipov" -->
<!-- email="vasily_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] Not optimal SRQ resource allocation" -->
<!-- id="4B1685A8.6000106_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] Not optimal SRQ resource allocation<br>
<strong>From:</strong> Vasily Philipov (<em>vasily_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-02 10:20:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7180.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7178.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (v1.4) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7187.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Not optimal SRQ resource allocation"</a>
<li><strong>Reply:</strong> <a href="7187.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Not optimal SRQ resource allocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The attach patch should resolve the long pending issue that we have on 
<br>
our track <a href="https://svn.open-mpi.org/trac/ompi/ticket/1912">https://svn.open-mpi.org/trac/ompi/ticket/1912</a>. 
<br>
<p>The issue: As process of OpenIB BTL creation we also create set of  SRQs 
<br>
and corresponding receive fragments are allocated and posted on all 
<br>
SRQs. It mean that a processes that do not have active communication 
<br>
will keep bunch on unused memory on SRQ,
<br>
<p>The Solution: The patch modify openib btl to pre-post very limited 
<br>
number of receive fragments on each SRQ. If the number of receive 
<br>
buffers will not be enough, openib btl will get SRQ limit event and will 
<br>
pre-post additional fragments.
<br>
<p>&nbsp;
<br>
<p>Please review.
<br>
<p><p>
<p>
diff -r a5938d9dcada ompi/mca/btl/openib/btl_openib.c
<br>
--- a/ompi/mca/btl/openib/btl_openib.c	Mon Nov 23 19:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/btl_openib.c	Wed Dec 02 16:24:55 2009 +0200
<br>
@@ -214,6 +214,7 @@
<br>
&nbsp;static int create_srq(mca_btl_openib_module_t *openib_btl)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int qp;
<br>
+    int32_t rd_num, rd_curr_num; 
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* create the SRQ's */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(qp = 0; qp &lt; mca_btl_openib_component.num_qps; qp++) {
<br>
@@ -242,6 +243,24 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+
<br>
+            rd_num = mca_btl_openib_component.qp_infos[qp].rd_num;
<br>
+            rd_curr_num = openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num = mca_btl_openib_component.qp_infos[qp].u.srq_qp.rd_init;
<br>
+
<br>
+            if(true == mca_btl_openib_component.enable_srq_resize) {
<br>
+                if(0 == rd_curr_num) {
<br>
+                    openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num = 1;
<br>
+                }
<br>
+
<br>
+                openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local = rd_curr_num - (rd_curr_num &gt;&gt; 2);
<br>
+                openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag = true;
<br>
+            } else {
<br>
+                openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num = rd_num;
<br>
+                openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local = mca_btl_openib_component.qp_infos[qp].rd_low;
<br>
+                /* Not used in this case, but we don't need a garbage */
<br>
+                mca_btl_openib_component.qp_infos[qp].u.srq_qp.srq_limit = 0;
<br>
+                openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag = false;
<br>
+            }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
diff -r a5938d9dcada ompi/mca/btl/openib/btl_openib.h
<br>
--- a/ompi/mca/btl/openib/btl_openib.h	Mon Nov 23 19:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/btl_openib.h	Wed Dec 02 16:24:55 2009 +0200
<br>
@@ -87,6 +87,12 @@
<br>
&nbsp;
<br>
&nbsp;struct mca_btl_openib_srq_qp_info_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int32_t sd_max;
<br>
+    /* The init value for rd_curr_num variables of all SRQs */
<br>
+    int32_t rd_init;
<br>
+    /* The watermark, threshold - if the number of WQEs in SRQ is less then this value =&gt;
<br>
+       the SRQ limit event (IBV_EVENT_SRQ_LIMIT_REACHED) will be generated on corresponding SRQ.
<br>
+       As result the maximal number of pre-posted WQEs on the SRQ will be increased */
<br>
+    int32_t srq_limit;
<br>
&nbsp;}; typedef struct mca_btl_openib_srq_qp_info_t mca_btl_openib_srq_qp_info_t;
<br>
&nbsp;
<br>
&nbsp;struct mca_btl_openib_qp_info_t {
<br>
@@ -254,6 +260,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_t recv_user_free;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/**&lt; frags for coalesced massages */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_t send_free_coalesced;
<br>
+    /**&lt; Whether we want a dynamically resizing srq, enabled by default */
<br>
+    bool enable_srq_resize;
<br>
&nbsp;}; typedef struct mca_btl_openib_component_t mca_btl_openib_component_t;
<br>
&nbsp;
<br>
&nbsp;OMPI_MODULE_DECLSPEC extern mca_btl_openib_component_t mca_btl_openib_component;
<br>
@@ -348,6 +356,16 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int32_t sd_credits;  /* the max number of outstanding sends on a QP when using SRQ */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*  i.e. the number of frags that  can be outstanding (down counter) */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_t pending_frags[2];    /**&lt; list of high/low prio frags */
<br>
+    /**&lt; The number of max rd that we can post in the current time.
<br>
+         The value may be increased in the IBV_EVENT_SRQ_LIMIT_REACHED
<br>
+         event handler. The value starts from (rd_num / 4) and increased up to rd_num */
<br>
+    int32_t rd_curr_num;
<br>
+    /**&lt; We post additional WQEs only if a number of WQEs (in specific SRQ) is less of this value.
<br>
+         The value increased together with rd_curr_num. The value is unique for every SRQ. */
<br>
+    int32_t rd_low_local;
<br>
+    /**&lt; The flag points if we want to get the 
<br>
+         IBV_EVENT_SRQ_LIMIT_REACHED events for dynamically resizing SRQ */
<br>
+    bool srq_limit_event_flag;
<br>
&nbsp;}; typedef struct mca_btl_openib_module_srq_qp_t mca_btl_openib_module_srq_qp_t;
<br>
&nbsp;
<br>
&nbsp;struct mca_btl_openib_module_qp_t {
<br>
diff -r a5938d9dcada ompi/mca/btl/openib/btl_openib_async.c
<br>
--- a/ompi/mca/btl/openib/btl_openib_async.c	Mon Nov 23 19:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/btl_openib_async.c	Wed Dec 02 16:24:55 2009 +0200
<br>
@@ -1,5 +1,5 @@
<br>
&nbsp;/*
<br>
- * Copyright (c) 2008 Mellanox Technologies. All rights reserved.
<br>
+ * Copyright (c) 2008-2009 Mellanox Technologies. All rights reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2007-2009 Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2006-2007 Voltaire All rights reserved.
<br>
&nbsp;&nbsp;* $COPYRIGHT$
<br>
@@ -226,10 +226,51 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;}
<br>
&nbsp;
<br>
+/* The main idea of resizing SRQ algorithm - 
<br>
+   We create a SRQ with size = rd_num, but for efficient usage of resources
<br>
+   the number of WQEs that we post = rd_curr_num &lt; rd_num and this value is
<br>
+   increased (by needs) in IBV_EVENT_SRQ_LIMIT_REACHED event handler (i.e. in this function),
<br>
+   the event will thrown by device if number of WQEs in SRQ will be less than srq_limit */
<br>
+static int btl_openib_async_srq_limit_event(struct ibv_srq* srq, 
<br>
+                                              mca_btl_openib_module_t *openib_btl)
<br>
+{
<br>
+    int qp;
<br>
+
<br>
+    for(qp = 0; qp &lt; mca_btl_openib_component.num_qps; qp++) {
<br>
+        if (!BTL_OPENIB_QP_TYPE_PP(qp)) {
<br>
+            if(openib_btl-&gt;qps[qp].u.srq_qp.srq == srq) {
<br>
+                break;
<br>
+            }
<br>
+        }
<br>
+    }
<br>
+
<br>
+    if(qp &gt;= mca_btl_openib_component.num_qps) {
<br>
+        BTL_ERROR((&quot;The srq doesn't found on %s.&quot;, ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev)));
<br>
+        return OMPI_ERROR;
<br>
+    }
<br>
+
<br>
+    /* dynamically re-size the SRQ to be larger */
<br>
+    openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num &lt;&lt;= 1;
<br>
+
<br>
+    if(openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num &gt;= mca_btl_openib_component.qp_infos[qp].rd_num) {
<br>
+        openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num = mca_btl_openib_component.qp_infos[qp].rd_num;
<br>
+        openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local = mca_btl_openib_component.qp_infos[qp].rd_low;
<br>
+
<br>
+        openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag = false;
<br>
+
<br>
+        return OMPI_SUCCESS;
<br>
+    }
<br>
+
<br>
+    openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local &lt;&lt;= 1;
<br>
+    openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag = true;
<br>
+
<br>
+    return OMPI_SUCCESS;
<br>
+}
<br>
+
<br>
&nbsp;/* Function handle async device events */
<br>
&nbsp;static int btl_openib_async_deviceh(struct mca_btl_openib_async_poll *devices_poll, int index)
<br>
&nbsp;{
<br>
-    int j;
<br>
+    int j, btl_index = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_device_t *device = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct ibv_async_event event;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool xrc_event = false;
<br>
@@ -240,6 +281,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mca_btl_openib_component.openib_btls[j]-&gt;device-&gt;ib_dev_context-&gt;async_fd ==
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;devices_poll-&gt;async_pollfd[index].fd ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;device = mca_btl_openib_component.openib_btls[j]-&gt;device;
<br>
+            btl_index = j;
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
@@ -306,7 +349,15 @@
<br>
&nbsp;#if HAVE_DECL_IBV_EVENT_CLIENT_REREGISTER
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case IBV_EVENT_CLIENT_REREGISTER:
<br>
&nbsp;#endif
<br>
+                break;
<br>
+            /* The event is signaled when number of prepost receive WQEs is going
<br>
+                                            under predefined threshold - srq_limit */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case IBV_EVENT_SRQ_LIMIT_REACHED:
<br>
+                if(OMPI_SUCCESS != btl_openib_async_srq_limit_event(event.element.srq, 
<br>
+                                     mca_btl_openib_component.openib_btls[btl_index])) {
<br>
+                    return OMPI_ERROR;
<br>
+                }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;of unknown event&quot;,
<br>
diff -r a5938d9dcada ompi/mca/btl/openib/btl_openib_component.c
<br>
--- a/ompi/mca/btl/openib/btl_openib_component.c	Mon Nov 23 19:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/btl_openib_component.c	Wed Dec 02 16:24:55 2009 +0200
<br>
@@ -1361,8 +1361,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;true, rd_win, rd_num - rd_low);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
-            int32_t sd_max;
<br>
-            if (count &lt; 3 || count &gt; 5) {
<br>
+            int32_t sd_max, rd_init, srq_limit;
<br>
+            if (count &lt; 3 || count &gt; 7) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;invalid srq specification&quot;, true,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_process_info.nodename, queues[qp]);
<br>
@@ -1376,15 +1376,47 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* by default set rd_low to be 3/4 of rd_num */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rd_low = atoi_param(P(3), rd_num - (rd_num / 4));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sd_max = atoi_param(P(4), rd_low / 4);
<br>
-            BTL_VERBOSE((&quot;srq: rd_num is %d rd_low is %d sd_max is %d&quot;,
<br>
-                         rd_num, rd_low, sd_max));
<br>
+            /* rd_init is initial value for rd_curr_num of all SRQs, 1/4 of rd_num by default */
<br>
+            rd_init = atoi_param(P(5), rd_num / 4);
<br>
+            /* by default set srq_limit to be 3/16 of rd_init (it's 1/4 of rd_low_local,
<br>
+               the value of rd_low_local we calculate in create_srq function) */
<br>
+            srq_limit = atoi_param(P(6), (rd_init - (rd_init / 4)) / 4);
<br>
+
<br>
+            /* If we set srq_limit less or greater than rd_init
<br>
+               (init value for rd_curr_num) =&gt; we receive the IBV_EVENT_SRQ_LIMIT_REACHED
<br>
+               event immediately and the value of rd_curr_num will be increased */
<br>
+
<br>
+            /* If we set srq_limit to zero, but size of SRQ greater than 1 and
<br>
+               it is not a user request (param number 6 in --mca btl_openib_receive_queues) =&gt; set it to be 1 */
<br>
+            if((0 == srq_limit) &amp;&amp; (1 &lt; rd_num) &amp;&amp; (0 != P(6))) {
<br>
+                srq_limit = 1;
<br>
+            }
<br>
+
<br>
+            BTL_VERBOSE((&quot;srq: rd_num is %d rd_low is %d sd_max is %d rd_max is %d srq_limit is %d&quot;,
<br>
+                         rd_num, rd_low, sd_max, rd_init, srq_limit));
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Calculate the smallest freelist size that can be allowed */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rd_num &gt; min_freelist_size) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;min_freelist_size = rd_num;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
+            if (rd_num &lt; rd_init) {
<br>
+                orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;rd_num must be &gt;= rd_init&quot;,
<br>
+                        true, orte_process_info.nodename, queues[qp]);
<br>
+                ret = OMPI_ERR_BAD_PARAM;
<br>
+                goto error;
<br>
+            }
<br>
+
<br>
+            if (rd_num &lt; srq_limit) {
<br>
+                orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;srq_limit must be &gt; rd_num&quot;,
<br>
+                        true, orte_process_info.nodename, queues[qp]);
<br>
+                ret = OMPI_ERR_BAD_PARAM;
<br>
+                goto error;
<br>
+            }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_component.qp_infos[qp].u.srq_qp.sd_max = sd_max;
<br>
+            mca_btl_openib_component.qp_infos[qp].u.srq_qp.rd_init = rd_init;
<br>
+            mca_btl_openib_component.qp_infos[qp].u.srq_qp.srq_limit = srq_limit;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rd_num &lt;= rd_low) {
<br>
@@ -3185,19 +3217,19 @@
<br>
&nbsp;
<br>
&nbsp;int mca_btl_openib_post_srr(mca_btl_openib_module_t* openib_btl, const int qp)
<br>
&nbsp;{
<br>
-    int rd_low = mca_btl_openib_component.qp_infos[qp].rd_low;
<br>
-    int rd_num = mca_btl_openib_component.qp_infos[qp].rd_num;
<br>
+    int rd_low_local = openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local;
<br>
+    int rd_curr_num = openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int num_post, i, rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct ibv_recv_wr *bad_wr, *wr_list = NULL, *wr = NULL;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(!BTL_OPENIB_QP_TYPE_PP(qp));
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;openib_btl-&gt;ib_lock);
<br>
-    if(openib_btl-&gt;qps[qp].u.srq_qp.rd_posted &gt; rd_low) {
<br>
+    if(openib_btl-&gt;qps[qp].u.srq_qp.rd_posted &gt; rd_low_local) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;openib_btl-&gt;ib_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-    num_post = rd_num - openib_btl-&gt;qps[qp].u.srq_qp.rd_posted;
<br>
+    num_post = rd_curr_num - openib_btl-&gt;qps[qp].u.srq_qp.rd_posted;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i = 0; i &lt; num_post; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_item_t* item;
<br>
@@ -3214,7 +3246,26 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = ibv_post_srq_recv(openib_btl-&gt;qps[qp].u.srq_qp.srq, wr_list, &amp;bad_wr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(OPAL_LIKELY(0 == rc)) {
<br>
+        struct ibv_srq_attr srq_attr;
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_ADD32(&amp;openib_btl-&gt;qps[qp].u.srq_qp.rd_posted, num_post);
<br>
+
<br>
+        if(true == openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag) {
<br>
+            srq_attr.max_wr = openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num;
<br>
+            srq_attr.max_sge = 1;
<br>
+            srq_attr.srq_limit = mca_btl_openib_component.qp_infos[qp].u.srq_qp.srq_limit;
<br>
+
<br>
+            openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag = false;
<br>
+            if(ibv_modify_srq(openib_btl-&gt;qps[qp].u.srq_qp.srq, &amp;srq_attr, IBV_SRQ_LIMIT)) {
<br>
+                BTL_ERROR((&quot;Failed to request limit event for srq on  %s.  &quot;
<br>
+                   &quot;Fatal error, stoping asynch event thread&quot;,
<br>
+                   ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev)));
<br>
+
<br>
+                OPAL_THREAD_UNLOCK(&amp;openib_btl-&gt;ib_lock);
<br>
+                return OMPI_ERROR;
<br>
+            }
<br>
+        }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;openib_btl-&gt;ib_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
diff -r a5938d9dcada ompi/mca/btl/openib/btl_openib_mca.c
<br>
--- a/ompi/mca/btl/openib/btl_openib_mca.c	Mon Nov 23 19:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/btl_openib_mca.c	Wed Dec 02 16:24:55 2009 +0200
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
@@ -163,6 +163,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1, &amp;ival, 0));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_component.warn_nonexistent_if = (0 != ival);
<br>
&nbsp;
<br>
+    CHECK(reg_int(&quot;enable_srq_resize&quot;, NULL,
<br>
+                  &quot;Enable/Disable on demand SRQ resize. &quot;
<br>
+                  &quot;(0 = without resizing, nonzero = with resizing)&quot;, 1, &amp;ival, 0));
<br>
+    mca_btl_openib_component.enable_srq_resize = (0 != ival);
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OMPI_HAVE_IBV_FORK_INIT) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ival2 = -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
diff -r a5938d9dcada ompi/mca/btl/openib/help-mpi-btl-openib.txt
<br>
--- a/ompi/mca/btl/openib/help-mpi-btl-openib.txt	Mon Nov 23 19:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/help-mpi-btl-openib.txt	Wed Dec 02 16:24:55 2009 +0200
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
@@ -414,6 +414,24 @@
<br>
&nbsp;&nbsp;&nbsp;Local host: %s
<br>
&nbsp;&nbsp;&nbsp;Bad queue specification: %s
<br>
&nbsp;#
<br>
+[rd_num must be &gt;= rd_init]
<br>
+WARNING: The number of buffers for a queue pair specified via the
<br>
+btl_openib_receive_queues MCA parameter (parametr #2) must be
<br>
+greater or equal to the init srq size (parametr #5).
<br>
+The OpenFabrics (openib) BTL will therefore be deactivated for this run.
<br>
+
<br>
+  Local host: %s
<br>
+  Bad queue specification: %s
<br>
+#
<br>
+[srq_limit must be &gt; rd_num]
<br>
+WARNING: The number of buffers for a queue pair specified via the
<br>
+btl_openib_receive_queues MCA parameter (parametr #2) must be greater than the limit
<br>
+buffer count (parametr #6).  The OpenFabrics (openib) BTL will therefore
<br>
+be deactivated for this run.
<br>
+
<br>
+  Local host: %s
<br>
+  Bad queue specification: %s
<br>
+#
<br>
&nbsp;[biggest qp size is too small]
<br>
&nbsp;WARNING: The largest queue pair buffer size specified in the
<br>
&nbsp;btl_openib_receive_queues MCA parameter is smaller than the maximum
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7180.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7178.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (v1.4) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7187.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Not optimal SRQ resource allocation"</a>
<li><strong>Reply:</strong> <a href="7187.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Not optimal SRQ resource allocation"</a>
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
