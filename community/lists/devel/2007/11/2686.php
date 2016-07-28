<?
$subject_val = "[OMPI devel] Branch for iWARP uDAPL enablement";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 20:50:01 2007" -->
<!-- isoreceived="20071130015001" -->
<!-- sent="Thu, 29 Nov 2007 19:49:56 -0600" -->
<!-- isosent="20071130014956" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="[OMPI devel] Branch for iWARP uDAPL enablement" -->
<!-- id="20071130014956.GA12944_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> [OMPI devel] Branch for iWARP uDAPL enablement<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-29 20:49:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2687.php">Tim Prins: "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<li><strong>Previous message:</strong> <a href="2685.php">Aurelien Bouteiller: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I created a public branch to make available the patch which gets OPMI
<br>
uDAPL to kinda work on iWARP.  The branch can be found at:
<br>
<a href="http://svn.open-mpi.org/svn/ompi/tmp-public/iwarp-ompi-v1.2/">http://svn.open-mpi.org/svn/ompi/tmp-public/iwarp-ompi-v1.2/</a>
<br>
<p>The branch contains an updated version of the patch Steve Wise sent out
<br>
some time ago.  Below is the patch (on top of the ompi v1.2 tree) that
<br>
enables this.
<br>
<p>I am currently focusing on other issues, and might not be able to get
<br>
back to it for a while.  Therefore, I wanted to make this patch
<br>
available to anyone who might need it or want to work on flushing out
<br>
the existing bugs.  Feel free to contact me if there are any questions.
<br>
<p>Thanks,
<br>
Jon
<br>
<p>======================
<br>
<p>This patch gets OPMI uDAPL to kinda work on iWARP.
<br>
<p>Specifically, this patch address 3 issues needed for iWARP to work:
<br>
1. Force the first DTO from connecting side
<br>
2. Post receive buffers for the connection
<br>
3. Flush outstanding writes with a 0B read
<br>
<p>This patch enforces the rule that all connections must come from the
<br>
connecting side.
<br>
<p>On iWARP, the connection may be TERMINATED if a SEND arrives on a QP
<br>
and no corresponding RECV buffer is posted.  This patch posts the
<br>
receive buffers prior to the connection setup completing.
<br>
<p>There is a race condition where a the receive buffers for a large
<br>
write may be freed prior to the completion of the write.  This patch
<br>
to post the 0B read after a large write and use the 0B read completion
<br>
to trigger the write completion to the upper layers.
<br>
<p>With this patch some MPI test cases using the uDAPL BTL will run,
<br>
while others continue to fail.  Without this patch, no MPI programs
<br>
will run if using the uDAPL BTL.
<br>
<p>This patch breaks IB support, and should not be checked in to the
<br>
regular tree until that is fixed.
<br>
<p>Index: ompi/mca/btl/udapl/btl_udapl_endpoint.c
<br>
===================================================================
<br>
--- ompi/mca/btl/udapl/btl_udapl_endpoint.c	(revision 16805)
<br>
+++ ompi/mca/btl/udapl/btl_udapl_endpoint.c	(working copy)
<br>
@@ -130,7 +130,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;remote_buffer.segment_length = frag-&gt;triplet.segment_length;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* write the data out */
<br>
-    cookie.as_ptr = frag;
<br>
+    cookie.as_ptr = frag; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = dat_ep_post_rdma_write(endpoint-&gt;endpoint_eager,        
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;(frag-&gt;triplet),
<br>
@@ -367,7 +367,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} 
<br>
&nbsp;
<br>
-    (*ep_attr).max_recv_dtos = btl-&gt;udapl_max_recv_dtos;
<br>
+    (*ep_attr).max_recv_dtos = btl-&gt;udapl_max_recv_dtos + 1;
<br>
+    (*ep_attr).max_rdma_read_in = 4;
<br>
+    (*ep_attr).max_rdma_read_out = 4;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Set max_request_dtos :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* The max_request_dtos should equal the max number of
<br>
@@ -429,6 +431,74 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;}
<br>
&nbsp;
<br>
+int mca_btl_udapl_addrdata_send(mca_btl_udapl_module_t* btl,
<br>
+        DAT_EP_HANDLE endpoint)
<br>
+{
<br>
+    mca_btl_udapl_frag_t* frag;
<br>
+    DAT_DTO_COOKIE cookie;
<br>
+    static int32_t connection_seq = 1;
<br>
+    int rc;
<br>
+
<br>
+    /* Send our local address data over this EP */
<br>
+    frag = (mca_btl_udapl_frag_t*)mca_btl_udapl_alloc(
<br>
+            (mca_btl_base_module_t*)btl, sizeof(mca_btl_udapl_addr_t) +
<br>
+            sizeof(int32_t));
<br>
+    cookie.as_ptr = frag;
<br>
+
<br>
+    memcpy(frag-&gt;segment.seg_addr.pval,
<br>
+            &amp;btl-&gt;udapl_addr, sizeof(mca_btl_udapl_addr_t));
<br>
+    memcpy((char *)frag-&gt;segment.seg_addr.pval + sizeof(mca_btl_udapl_addr_t),
<br>
+            &amp;connection_seq, sizeof(int32_t));
<br>
+    connection_seq++;
<br>
+
<br>
+    frag-&gt;type = MCA_BTL_UDAPL_CONN_SEND;
<br>
+
<br>
+    rc = dat_ep_post_send(endpoint, 1,
<br>
+            &amp;frag-&gt;triplet, cookie, DAT_COMPLETION_DEFAULT_FLAG);
<br>
+    if(DAT_SUCCESS != rc) {
<br>
+        char* major;
<br>
+        char* minor;
<br>
+
<br>
+        dat_strerror(rc, (const char**)&amp;major,
<br>
+            (const char**)&amp;minor);
<br>
+        BTL_ERROR((&quot;ERROR: %s %s %s\n&quot;, &quot;dat_ep_post_send&quot;,
<br>
+            major, minor));
<br>
+        return OMPI_ERROR;
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
+static inline int mca_btl_udapl_addrdata_recv(mca_btl_udapl_module_t* btl,
<br>
+        DAT_EP_HANDLE endpoint)
<br>
+{
<br>
+    mca_btl_udapl_frag_t* frag;
<br>
+    DAT_DTO_COOKIE cookie;
<br>
+    int rc;
<br>
+
<br>
+    /* Post a receive to get the peer's address data */
<br>
+    frag = (mca_btl_udapl_frag_t*)mca_btl_udapl_alloc(
<br>
+            (mca_btl_base_module_t*)btl, sizeof(mca_btl_udapl_addr_t) +
<br>
+            sizeof(int32_t));
<br>
+    cookie.as_ptr = frag;
<br>
+
<br>
+    frag-&gt;type = MCA_BTL_UDAPL_CONN_RECV;
<br>
+
<br>
+    rc = dat_ep_post_recv(endpoint, 1,
<br>
+            &amp;frag-&gt;triplet, cookie, DAT_COMPLETION_DEFAULT_FLAG);
<br>
+    if(DAT_SUCCESS != rc) {
<br>
+        char* major;
<br>
+        char* minor;
<br>
+
<br>
+        dat_strerror(rc, (const char**)&amp;major,
<br>
+            (const char**)&amp;minor);
<br>
+        BTL_ERROR((&quot;ERROR: %s %s %s\n&quot;, &quot;dat_ep_post_recv&quot;,
<br>
+            major, minor));
<br>
+        return OMPI_ERROR;
<br>
+    }
<br>
+    return OMPI_SUCCESS;
<br>
+}
<br>
+
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Create a uDAPL endpoint
<br>
&nbsp;&nbsp;*
<br>
@@ -457,6 +527,15 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;major, minor));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dat_ep_free(udapl_endpoint);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;udapl_endpoint = DAT_HANDLE_NULL;
<br>
+    } else {
<br>
+	DAT_CONTEXT c;
<br>
+
<br>
+        /* pre-post recv buffer for exchanging address data */
<br>
+        mca_btl_udapl_addrdata_recv(btl, *udapl_endpoint);
<br>
+
<br>
+        /* context gets set to 1 for active connections */
<br>
+	c.as_64 = 0;
<br>
+	dat_set_consumer_context(*udapl_endpoint, c);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
@@ -567,6 +646,7 @@
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_udapl_module_t* btl = endpoint-&gt;endpoint_btl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
+    DAT_CONTEXT c;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;endpoint-&gt;endpoint_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_ADD32(&amp;(btl-&gt;udapl_connect_inprogress), 1);
<br>
@@ -590,6 +670,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto failure_create;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
+    /* post eager recv buffers */
<br>
+    mca_btl_udapl_endpoint_post_recv(endpoint,
<br>
+            mca_btl_udapl_component.udapl_eager_frag_size);
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = dat_ep_connect(endpoint-&gt;endpoint_eager, &amp;endpoint-&gt;endpoint_addr.addr,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endpoint-&gt;endpoint_addr.port, mca_btl_udapl_component.udapl_timeout,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sizeof(mca_btl_udapl_addr_t), &amp;btl-&gt;udapl_addr, 0, DAT_CONNECT_DEFAULT_FLAG);
<br>
@@ -604,6 +688,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto failure;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
+    /* set context to 1 indicating active connect */
<br>
+    c.as_64 = 1;
<br>
+    dat_set_consumer_context(endpoint-&gt;endpoint_eager, c);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endpoint-&gt;endpoint_state = MCA_BTL_UDAPL_CONN_EAGER;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;endpoint-&gt;endpoint_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
@@ -633,7 +720,21 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_base_endpoint_t* ep;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
+    DAT_CONTEXT c;
<br>
+    bool passive;
<br>
&nbsp;
<br>
+    /* 
<br>
+     * get consumer context from the endpoint. 
<br>
+     * 1 == active side, 0 == passive side.
<br>
+     */
<br>
+    dat_get_consumer_context(endpoint, &amp;c);
<br>
+    passive = (bool)!c.as_64;
<br>
+
<br>
+    /* 
<br>
+     * active side - finish the connection. 
<br>
+     * server side - post recvs, send addr data and finish the connection. 
<br>
+     */
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Search for the matching BTL EP */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(proc = (mca_btl_udapl_proc_t*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_get_first(&amp;mca_btl_udapl_component.udapl_procs);
<br>
@@ -653,6 +754,15 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ep-&gt;endpoint_connection_seq = (NULL != connection_seq) ?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*connection_seq:0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ep-&gt;endpoint_eager = endpoint;
<br>
+		    if (passive) {
<br>
+
<br>
+			/* post max recv buffers */
<br>
+			mca_btl_udapl_endpoint_post_recv(ep,
<br>
+				mca_btl_udapl_component.udapl_eager_frag_size);
<br>
+
<br>
+			/* send address data */
<br>
+		        mca_btl_udapl_addrdata_send(btl, endpoint);
<br>
+		    }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = mca_btl_udapl_endpoint_finish_eager(ep);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if(MCA_BTL_UDAPL_CONN_MAX == ep-&gt;endpoint_state) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Check to see order of messages received are in
<br>
@@ -673,6 +783,15 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ep-&gt;endpoint_eager = endpoint;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
+		    if(passive) {
<br>
+
<br>
+			/* post max recv buffers */
<br>
+			mca_btl_udapl_endpoint_post_recv(ep,
<br>
+				mca_btl_udapl_component.udapl_max_frag_size);
<br>
+			
<br>
+			/* send address data */
<br>
+		        mca_btl_udapl_addrdata_send(btl, endpoint);
<br>
+		    }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = mca_btl_udapl_endpoint_finish_max(ep);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_OUTPUT((0, &quot;btl_udapl ERROR invalid EP state %d\n&quot;,
<br>
@@ -699,6 +818,7 @@
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_udapl_module_t* btl = endpoint-&gt;endpoint_btl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
+    DAT_CONTEXT c;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endpoint-&gt;endpoint_state = MCA_BTL_UDAPL_CONN_MAX;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;endpoint-&gt;endpoint_lock);
<br>
@@ -721,6 +841,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
+        /* post max recv buffers */
<br>
+        mca_btl_udapl_endpoint_post_recv(endpoint,
<br>
+                mca_btl_udapl_component.udapl_max_frag_size);
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = dat_ep_connect(endpoint-&gt;endpoint_max,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;endpoint-&gt;endpoint_addr.addr, endpoint-&gt;endpoint_addr.port,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_udapl_component.udapl_timeout,
<br>
@@ -737,6 +861,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dat_ep_free(endpoint-&gt;endpoint_max);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+
<br>
+	/* set context to 1 indicating active connect */
<br>
+        c.as_64 = 1;
<br>
+        dat_set_consumer_context(endpoint-&gt;endpoint_max, c);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
@@ -753,12 +881,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endpoint-&gt;endpoint_state = MCA_BTL_UDAPL_CONNECTED;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_ADD32(&amp;(endpoint-&gt;endpoint_btl-&gt;udapl_connect_inprogress), -1);
<br>
&nbsp;
<br>
-    /* post eager/max recv buffers */
<br>
-    mca_btl_udapl_endpoint_post_recv(endpoint,
<br>
-            mca_btl_udapl_component.udapl_eager_frag_size);
<br>
-    mca_btl_udapl_endpoint_post_recv(endpoint,
<br>
-            mca_btl_udapl_component.udapl_max_frag_size);
<br>
-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* post queued sends */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(endpoint-&gt;endpoint_eager_sends ==
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_udapl_component.udapl_num_sends);
<br>
@@ -835,7 +957,7 @@
<br>
&nbsp;&nbsp;* Post receive buffers for a newly established endpoint connection.
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;
<br>
-static int mca_btl_udapl_endpoint_post_recv(mca_btl_udapl_endpoint_t* endpoint,
<br>
+int mca_btl_udapl_endpoint_post_recv(mca_btl_udapl_endpoint_t* endpoint,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t size)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_udapl_frag_t* frag = NULL;
<br>
Index: ompi/mca/btl/udapl/btl_udapl.c
<br>
===================================================================
<br>
--- ompi/mca/btl/udapl/btl_udapl.c	(revision 16805)
<br>
+++ ompi/mca/btl/udapl/btl_udapl.c	(working copy)
<br>
@@ -497,7 +497,13 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;major, minor));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
-        if (udapl_btl-&gt;udapl_dto_evd_qlen &gt; evd_param.evd_qlen) {
<br>
+	/* evd queue length is stored as the length requested minus
<br>
+	 * one. Therefore, we must compare against the length returned
<br>
+	 * above plus one or we could try to alloc the same size we
<br>
+	 * already have (and thus throw an error and bail....and no
<br>
+	 * one wants that).
<br>
+	 */ 
<br>
+        if (udapl_btl-&gt;udapl_dto_evd_qlen &gt; evd_param.evd_qlen + 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* resize dto event dispatcher queue length */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dat_rc = dat_evd_resize(udapl_btl-&gt;udapl_evd_dto,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;udapl_btl-&gt;udapl_dto_evd_qlen);
<br>
@@ -1030,8 +1036,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;endpoint = endpoint;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;type = MCA_BTL_UDAPL_PUT;
<br>
&nbsp;
<br>
-    if(OPAL_THREAD_ADD32(&amp;endpoint-&gt;endpoint_sr_tokens[BTL_UDAPL_MAX_CONNECTION], -1) &lt; 0) {
<br>
-        OPAL_THREAD_ADD32(&amp;endpoint-&gt;endpoint_sr_tokens[BTL_UDAPL_MAX_CONNECTION], 1);
<br>
+    if(OPAL_THREAD_ADD32(&amp;endpoint-&gt;endpoint_sr_tokens[BTL_UDAPL_MAX_CONNECTION], -2) &lt; 0) {
<br>
+        OPAL_THREAD_ADD32(&amp;endpoint-&gt;endpoint_sr_tokens[BTL_UDAPL_MAX_CONNECTION], 2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;endpoint-&gt;endpoint_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_append(&amp;endpoint-&gt;endpoint_max_frags,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(opal_list_item_t*)frag);
<br>
@@ -1046,7 +1052,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(DAT_VADDR)dst_segment-&gt;seg_addr.lval;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;remote_buffer.segment_length = dst_segment-&gt;seg_len;
<br>
&nbsp;
<br>
-        cookie.as_ptr = frag;
<br>
+        cookie.as_ptr = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;endpoint-&gt;endpoint_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = dat_ep_post_rdma_write(endpoint-&gt;endpoint_max,
<br>
@@ -1054,8 +1060,36 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;frag-&gt;triplet,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cookie,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;remote_buffer,
<br>
+            DAT_COMPLETION_SUPPRESS_FLAG);
<br>
+        if(DAT_SUCCESS != rc) {
<br>
+            char* major;
<br>
+            char* minor;
<br>
+
<br>
+	    OPAL_THREAD_UNLOCK(&amp;endpoint-&gt;endpoint_lock);
<br>
+            dat_strerror(rc, (const char**)&amp;major,
<br>
+                (const char**)&amp;minor);
<br>
+            BTL_ERROR((&quot;ERROR: %s %s %s\n&quot;, &quot;dat_ep_post_rdma_write&quot;,
<br>
+                major, minor));
<br>
+            rc = OMPI_ERROR;
<br>
+	    goto out;
<br>
+        }
<br>
+
<br>
+        remote_buffer.rmr_context =
<br>
+            (DAT_RMR_CONTEXT)dst_segment-&gt;seg_key.key32[0];
<br>
+        remote_buffer.target_address =
<br>
+            (DAT_VADDR)dst_segment-&gt;seg_addr.lval;
<br>
+        remote_buffer.segment_length = 0;
<br>
+        cookie.as_ptr = frag;
<br>
+
<br>
+        rc = dat_ep_post_rdma_read(endpoint-&gt;endpoint_max,
<br>
+            1,
<br>
+            &amp;frag-&gt;triplet,
<br>
+            cookie,
<br>
+            &amp;remote_buffer,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DAT_COMPLETION_DEFAULT_FLAG);
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;endpoint-&gt;endpoint_lock);
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(DAT_SUCCESS != rc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char* major;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char* minor;
<br>
@@ -1067,7 +1101,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = OMPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-    
<br>
+out: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;}
<br>
&nbsp;
<br>
Index: ompi/mca/btl/udapl/btl_udapl_endpoint.h
<br>
===================================================================
<br>
--- ompi/mca/btl/udapl/btl_udapl_endpoint.h	(revision 16805)
<br>
+++ ompi/mca/btl/udapl/btl_udapl_endpoint.h	(working copy)
<br>
@@ -187,6 +187,9 @@
<br>
&nbsp;int mca_btl_udapl_endpoint_send_sr_credits(mca_btl_base_endpoint_t* endpoint,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int connection);
<br>
&nbsp;
<br>
+int mca_btl_udapl_addrdata_send(struct mca_btl_udapl_module_t* btl,
<br>
+        DAT_EP_HANDLE endpoint);
<br>
+
<br>
&nbsp;#if defined(c_plusplus) || defined(__cplusplus)
<br>
&nbsp;}
<br>
&nbsp;#endif
<br>
Index: ompi/mca/btl/udapl/btl_udapl_component.c
<br>
===================================================================
<br>
--- ompi/mca/btl/udapl/btl_udapl_component.c	(revision 16805)
<br>
+++ ompi/mca/btl/udapl/btl_udapl_component.c	(working copy)
<br>
@@ -420,66 +420,6 @@
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;
<br>
-static inline int mca_btl_udapl_sendrecv(mca_btl_udapl_module_t* btl,
<br>
-        DAT_EP_HANDLE* endpoint)
<br>
-{
<br>
-    mca_btl_udapl_frag_t* frag;
<br>
-    DAT_DTO_COOKIE cookie;
<br>
-    static int32_t connection_seq = 1;
<br>
-    int rc;
<br>
-
<br>
-    /* Post a receive to get the peer's address data */
<br>
-    frag = (mca_btl_udapl_frag_t*)mca_btl_udapl_alloc(
<br>
-            (mca_btl_base_module_t*)btl, sizeof(mca_btl_udapl_addr_t) +
<br>
-            sizeof(int32_t));
<br>
-    cookie.as_ptr = frag;
<br>
-
<br>
-    frag-&gt;type = MCA_BTL_UDAPL_CONN_RECV;
<br>
-
<br>
-    rc = dat_ep_post_recv(endpoint, 1,
<br>
-            &amp;frag-&gt;triplet, cookie, DAT_COMPLETION_DEFAULT_FLAG);
<br>
-    if(DAT_SUCCESS != rc) {
<br>
-        char* major;
<br>
-        char* minor;
<br>
-
<br>
-        dat_strerror(rc, (const char**)&amp;major,
<br>
-            (const char**)&amp;minor);
<br>
-        BTL_ERROR((&quot;ERROR: %s %s %s\n&quot;, &quot;dat_ep_post_recv&quot;,
<br>
-            major, minor));
<br>
-        return OMPI_ERROR;
<br>
-    }
<br>
-
<br>
-
<br>
-    /* Send our local address data over this EP */
<br>
-    frag = (mca_btl_udapl_frag_t*)mca_btl_udapl_alloc(
<br>
-            (mca_btl_base_module_t*)btl, sizeof(mca_btl_udapl_addr_t) +
<br>
-            sizeof(int32_t));
<br>
-    cookie.as_ptr = frag;
<br>
-
<br>
-    memcpy(frag-&gt;segment.seg_addr.pval,
<br>
-            &amp;btl-&gt;udapl_addr, sizeof(mca_btl_udapl_addr_t));
<br>
-    memcpy((char *)frag-&gt;segment.seg_addr.pval + sizeof(mca_btl_udapl_addr_t),
<br>
-            &amp;connection_seq, sizeof(int32_t));
<br>
-    connection_seq++;
<br>
-
<br>
-    frag-&gt;type = MCA_BTL_UDAPL_CONN_SEND;
<br>
-
<br>
-    rc = dat_ep_post_send(endpoint, 1,
<br>
-            &amp;frag-&gt;triplet, cookie, DAT_COMPLETION_DEFAULT_FLAG);
<br>
-    if(DAT_SUCCESS != rc) {
<br>
-        char* major;
<br>
-        char* minor;
<br>
-
<br>
-        dat_strerror(rc, (const char**)&amp;major,
<br>
-            (const char**)&amp;minor);
<br>
-        BTL_ERROR((&quot;ERROR: %s %s %s\n&quot;, &quot;dat_ep_post_send&quot;,
<br>
-            major, minor));
<br>
-        return OMPI_ERROR;
<br>
-    }
<br>
-
<br>
-    return OMPI_SUCCESS;
<br>
-}
<br>
-
<br>
&nbsp;static inline int mca_btl_udapl_frag_progress_one(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_udapl_module_t* udapl_btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_udapl_frag_t* frag)
<br>
@@ -744,7 +684,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;base.des_cbfunc(&amp;btl-&gt;super, frag-&gt;endpoint,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;frag-&gt;base, OMPI_SUCCESS);
<br>
&nbsp;
<br>
-                    OPAL_THREAD_ADD32(&amp;(frag-&gt;endpoint-&gt;endpoint_sr_tokens[BTL_UDAPL_MAX_CONNECTION]), 1);
<br>
+                    OPAL_THREAD_ADD32(&amp;(frag-&gt;endpoint-&gt;endpoint_sr_tokens[BTL_UDAPL_MAX_CONNECTION]), 2); /* LSW */
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_udapl_frag_progress_pending(btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;endpoint,
<br>
@@ -789,6 +729,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;count++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case DAT_CONNECTION_EVENT_ESTABLISHED:
<br>
+# if NOT_IWARP 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Both the client and server side of a connection generate
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this event */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mca_btl_udapl_component.udapl_conn_priv_data) {
<br>
@@ -802,6 +743,20 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_udapl_sendrecv(btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;event.event_data.connect_event_data.ep_handle);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+#else
<br>
+		{
<br>
+                   DAT_CONTEXT c;
<br>
+
<br>
+                    /* Both the client and server side of a connection generate
<br>
+                       this event */
<br>
+                   dat_get_consumer_context(event.event_data.connect_event_data.ep_handle, &amp;c);
<br>
+
<br>
+                   /* active side starts sendrecv exchange */
<br>
+                   if (c.as_64) {
<br>
+                           mca_btl_udapl_addrdata_send(btl, event.event_data.connect_event_data.ep_handle);
<br>
+                   }
<br>
+		}
<br>
+#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;count++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case DAT_CONNECTION_EVENT_PEER_REJECTED:
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2687.php">Tim Prins: "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<li><strong>Previous message:</strong> <a href="2685.php">Aurelien Bouteiller: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
<!-- nextthread="start" -->
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
