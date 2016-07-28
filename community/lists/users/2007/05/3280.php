<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 16 03:08:50 2007" -->
<!-- isoreceived="20070516070850" -->
<!-- sent="Wed, 16 May 2007 09:08:43 +0200" -->
<!-- isosent="20070516070843" -->
<!-- name="Luis Kornblueh" -->
<!-- email="luis.kornblueh_at_[hidden]" -->
<!-- subject="[OMPI users] patch for openmpi 1.2.1 for sun cc on linux" -->
<!-- id="20070516070843.GA16033_at_creus.mpi.zmaw.de" -->
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
<strong>From:</strong> Luis Kornblueh (<em>luis.kornblueh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-16 03:08:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3281.php">Jeff Squyres: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
<li><strong>Previous message:</strong> <a href="3279.php">George Bosilca: "Re: [OMPI users] where did liborte/libopal go?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3281.php">Jeff Squyres: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
<li><strong>Reply:</strong> <a href="3281.php">Jeff Squyres: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody,
<br>
<p>we tried to install openmpi with Sun cc on Linux. IT required some 
<br>
patches. I add the necessary pathces here. I hope you can include 
<br>
those.
<br>
<p>Cheerio,
<br>
Luis
<br>
<p>diff -Naur openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi.c openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi.c
<br>
--- openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi.c	2007-04-19 18:30:54.000000000 +0200
<br>
+++ openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi.c	2007-05-09 14:33:24.000000000 +0200
<br>
@@ -463,7 +463,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_mvapi_frag_t* frag = (mca_btl_mvapi_frag_t*)descriptor; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;endpoint = endpoint; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;hdr-&gt;tag = tag; 
<br>
-    frag-&gt;sr_desc.opcode = VAPI_SEND;
<br>
+    frag-&gt;desc.sr_desc.opcode = VAPI_SEND;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return mca_btl_mvapi_endpoint_send(endpoint, frag);
<br>
&nbsp;}
<br>
&nbsp;
<br>
@@ -481,7 +481,7 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* setup for queued requests */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;endpoint = endpoint;
<br>
-    frag-&gt;sr_desc.opcode = VAPI_RDMA_WRITE; 
<br>
+    frag-&gt;desc.sr_desc.opcode = VAPI_RDMA_WRITE; 
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* check for a send wqe */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_THREAD_ADD32(&amp;endpoint-&gt;sd_wqe_lp,-1) &lt; 0) {
<br>
@@ -494,12 +494,12 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* post descriptor */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
-        frag-&gt;sr_desc.remote_qp = endpoint-&gt;rem_info.rem_qp_num_lp; 
<br>
-        frag-&gt;sr_desc.remote_addr = (VAPI_virt_addr_t) frag-&gt;base.des_dst-&gt;seg_addr.lval; 
<br>
-        frag-&gt;sr_desc.r_key = frag-&gt;base.des_dst-&gt;seg_key.key32[0]; 
<br>
+        frag-&gt;desc.sr_desc.remote_qp = endpoint-&gt;rem_info.rem_qp_num_lp; 
<br>
+        frag-&gt;desc.sr_desc.remote_addr = (VAPI_virt_addr_t) frag-&gt;base.des_dst-&gt;seg_addr.lval; 
<br>
+        frag-&gt;desc.sr_desc.r_key = frag-&gt;base.des_dst-&gt;seg_key.key32[0]; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;sg_entry.addr = (VAPI_virt_addr_t) (MT_virt_addr_t) frag-&gt;base.des_src-&gt;seg_addr.pval; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;sg_entry.len  = frag-&gt;base.des_src-&gt;seg_len; 
<br>
-        if(VAPI_OK != VAPI_post_sr(mvapi_btl-&gt;nic, endpoint-&gt;lcl_qp_hndl_lp, &amp;frag-&gt;sr_desc)) {
<br>
+        if(VAPI_OK != VAPI_post_sr(mvapi_btl-&gt;nic, endpoint-&gt;lcl_qp_hndl_lp, &amp;frag-&gt;desc.sr_desc)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc =  OMPI_ERROR; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else { 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = OMPI_SUCCESS; 
<br>
@@ -531,7 +531,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_mvapi_frag_t* frag = (mca_btl_mvapi_frag_t*) descriptor; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;endpoint = endpoint;
<br>
-    frag-&gt;sr_desc.opcode = VAPI_RDMA_READ; 
<br>
+    frag-&gt;desc.sr_desc.opcode = VAPI_RDMA_READ; 
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* check for a send wqe */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_THREAD_ADD32(&amp;endpoint-&gt;sd_wqe_lp,-1) &lt; 0) {
<br>
@@ -555,13 +555,13 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
-        frag-&gt;sr_desc.remote_qp = endpoint-&gt;rem_info.rem_qp_num_lp; 
<br>
-        frag-&gt;sr_desc.remote_addr = (VAPI_virt_addr_t) frag-&gt;base.des_src-&gt;seg_addr.lval; 
<br>
-        frag-&gt;sr_desc.r_key = frag-&gt;base.des_src-&gt;seg_key.key32[0]; 
<br>
+        frag-&gt;desc.sr_desc.remote_qp = endpoint-&gt;rem_info.rem_qp_num_lp; 
<br>
+        frag-&gt;desc.sr_desc.remote_addr = (VAPI_virt_addr_t) frag-&gt;base.des_src-&gt;seg_addr.lval; 
<br>
+        frag-&gt;desc.sr_desc.r_key = frag-&gt;base.des_src-&gt;seg_key.key32[0]; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;sg_entry.addr = (VAPI_virt_addr_t) (MT_virt_addr_t) frag-&gt;base.des_dst-&gt;seg_addr.pval; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;sg_entry.len  = frag-&gt;base.des_dst-&gt;seg_len; 
<br>
&nbsp;
<br>
-        if(VAPI_OK != VAPI_post_sr(mvapi_btl-&gt;nic, endpoint-&gt;lcl_qp_hndl_lp, &amp;frag-&gt;sr_desc)) {
<br>
+        if(VAPI_OK != VAPI_post_sr(mvapi_btl-&gt;nic, endpoint-&gt;lcl_qp_hndl_lp, &amp;frag-&gt;desc.sr_desc)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc =  OMPI_ERROR; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else { 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = OMPI_SUCCESS; 
<br>
diff -Naur openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi_endpoint.c openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi_endpoint.c
<br>
--- openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi_endpoint.c	2007-04-19 18:30:54.000000000 +0200
<br>
+++ openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi_endpoint.c	2007-05-09 14:45:31.000000000 +0200
<br>
@@ -143,7 +143,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
-    frag-&gt;sr_desc.remote_qkey = 0; 
<br>
+    frag-&gt;desc.sr_desc.remote_qkey = 0; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;sg_entry.addr = (VAPI_virt_addr_t) (MT_virt_addr_t) frag-&gt;hdr; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;sg_entry.len =
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;segment.seg_len + sizeof(mca_btl_mvapi_header_t) + 
<br>
@@ -153,14 +153,14 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_mvapi_footer_t* ftr =
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(mca_btl_mvapi_footer_t*)(((char*)frag-&gt;segment.seg_addr.pval) +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;segment.seg_len);
<br>
-        frag-&gt;sr_desc.opcode = VAPI_RDMA_WRITE;
<br>
+        frag-&gt;desc.sr_desc.opcode = VAPI_RDMA_WRITE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_MVAPI_RDMA_FRAG_SET_SIZE(ftr, frag-&gt;sg_entry.len);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_MVAPI_RDMA_MAKE_LOCAL(ftr);
<br>
&nbsp;#ifdef OMPI_ENABLE_DEBUG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ftr-&gt;seq = endpoint-&gt;eager_rdma_remote.seq++;
<br>
&nbsp;#endif
<br>
-        frag-&gt;sr_desc.r_key = (VAPI_rkey_t)endpoint-&gt;eager_rdma_remote.rkey;
<br>
-        frag-&gt;sr_desc.remote_addr = (VAPI_virt_addr_t)
<br>
+        frag-&gt;desc.sr_desc.r_key = (VAPI_rkey_t)endpoint-&gt;eager_rdma_remote.rkey;
<br>
+        frag-&gt;desc.sr_desc.remote_addr = (VAPI_virt_addr_t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endpoint-&gt;eager_rdma_remote.base.lval +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endpoint-&gt;eager_rdma_remote.head *
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mvapi_btl-&gt;eager_rdma_frag_size +
<br>
@@ -168,17 +168,17 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sizeof(mca_btl_mvapi_header_t) +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;size +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sizeof(mca_btl_mvapi_footer_t);
<br>
-        frag-&gt;sr_desc.remote_addr -= frag-&gt;sg_entry.len;
<br>
+        frag-&gt;desc.sr_desc.remote_addr -= frag-&gt;sg_entry.len;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_MVAPI_RDMA_NEXT_INDEX (endpoint-&gt;eager_rdma_remote.head);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
-        frag-&gt;sr_desc.opcode = VAPI_SEND;
<br>
+        frag-&gt;desc.sr_desc.opcode = VAPI_SEND;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(frag-&gt;sg_entry.len &lt;= mvapi_btl-&gt;ib_inline_max) { 
<br>
-        ret = EVAPI_post_inline_sr(mvapi_btl-&gt;nic, qp_hndl, &amp;frag-&gt;sr_desc); 
<br>
+        ret = EVAPI_post_inline_sr(mvapi_btl-&gt;nic, qp_hndl, &amp;frag-&gt;desc.sr_desc); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else { 
<br>
-        ret = VAPI_post_sr(mvapi_btl-&gt;nic, qp_hndl, &amp;frag-&gt;sr_desc); 
<br>
+        ret = VAPI_post_sr(mvapi_btl-&gt;nic, qp_hndl, &amp;frag-&gt;desc.sr_desc); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(VAPI_OK != ret) {
<br>
@@ -1072,15 +1072,15 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_ADD32(&amp;endpoint-&gt;rd_credits_lp, -frag-&gt;hdr-&gt;credits);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((mca_btl_mvapi_control_header_t *)frag-&gt;segment.seg_addr.pval)-&gt;type = MCA_BTL_MVAPI_CONTROL_NOOP;
<br>
&nbsp;
<br>
-    frag-&gt;sr_desc.opcode = VAPI_SEND; 
<br>
+    frag-&gt;desc.sr_desc.opcode = VAPI_SEND; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;sg_entry.addr = (VAPI_virt_addr_t) (MT_virt_addr_t) frag-&gt;hdr; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;sg_entry.len = sizeof(mca_btl_mvapi_header_t) +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sizeof(mca_btl_mvapi_control_header_t);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(sizeof(mca_btl_mvapi_header_t) &lt;= mvapi_btl-&gt;ib_inline_max) {
<br>
-        ret = EVAPI_post_inline_sr(mvapi_btl-&gt;nic, endpoint-&gt;lcl_qp_hndl_lp, &amp;frag-&gt;sr_desc);
<br>
+        ret = EVAPI_post_inline_sr(mvapi_btl-&gt;nic, endpoint-&gt;lcl_qp_hndl_lp, &amp;frag-&gt;desc.sr_desc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
-        ret = VAPI_post_sr(mvapi_btl-&gt;nic, endpoint-&gt;lcl_qp_hndl_lp, &amp;frag-&gt;sr_desc);
<br>
+        ret = VAPI_post_sr(mvapi_btl-&gt;nic, endpoint-&gt;lcl_qp_hndl_lp, &amp;frag-&gt;desc.sr_desc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(ret != VAPI_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_ADD32(&amp;endpoint-&gt;sd_credits_lp, -1);
<br>
@@ -1151,15 +1151,15 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((mca_btl_mvapi_control_header_t *)frag-&gt;segment.seg_addr.pval)-&gt;type = MCA_BTL_MVAPI_CONTROL_NOOP;
<br>
&nbsp;
<br>
&nbsp;
<br>
-    frag-&gt;sr_desc.opcode = VAPI_SEND; 
<br>
+    frag-&gt;desc.sr_desc.opcode = VAPI_SEND; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;sg_entry.addr = (VAPI_virt_addr_t) (MT_virt_addr_t) frag-&gt;hdr; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;sg_entry.len = sizeof(mca_btl_mvapi_header_t) +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sizeof(mca_btl_mvapi_control_header_t);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(sizeof(mca_btl_mvapi_header_t) &lt;= mvapi_btl-&gt;ib_inline_max) {
<br>
-        ret = EVAPI_post_inline_sr(mvapi_btl-&gt;nic, endpoint-&gt;lcl_qp_hndl_hp, &amp;frag-&gt;sr_desc);
<br>
+        ret = EVAPI_post_inline_sr(mvapi_btl-&gt;nic, endpoint-&gt;lcl_qp_hndl_hp, &amp;frag-&gt;desc.sr_desc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
-        ret = VAPI_post_sr(mvapi_btl-&gt;nic, endpoint-&gt;lcl_qp_hndl_hp, &amp;frag-&gt;sr_desc);
<br>
+        ret = VAPI_post_sr(mvapi_btl-&gt;nic, endpoint-&gt;lcl_qp_hndl_hp, &amp;frag-&gt;desc.sr_desc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(ret != VAPI_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_ADD32(&amp;endpoint-&gt;sd_credits_lp, -1);
<br>
diff -Naur openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi_endpoint.h openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi_endpoint.h
<br>
--- openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi_endpoint.h	2007-04-19 18:30:54.000000000 +0200
<br>
+++ openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi_endpoint.h	2007-05-09 14:38:43.000000000 +0200
<br>
@@ -234,7 +234,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;sg_entry.len = frag-&gt;size + \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((unsigned char*) frag-&gt;segment.seg_addr.pval-  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(unsigned char*) frag-&gt;hdr);  \
<br>
-       desc_post[i] = frag-&gt;rr_desc; \
<br>
+       desc_post[i] = frag-&gt;desc.rr_desc; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = EVAPI_post_rr_list( nic, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;qp, \
<br>
diff -Naur openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi_frag.c openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi_frag.c
<br>
--- openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi_frag.c	2007-04-19 18:30:54.000000000 +0200
<br>
+++ openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi_frag.c	2007-05-09 14:47:38.000000000 +0200
<br>
@@ -43,12 +43,12 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;base.des_dst = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;base.des_dst_cnt = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
-    frag-&gt;sr_desc.comp_type = VAPI_SIGNALED; 
<br>
-    frag-&gt;sr_desc.opcode = VAPI_SEND; 
<br>
-    frag-&gt;sr_desc.remote_qkey = 0; 
<br>
-    frag-&gt;sr_desc.sg_lst_len = 1; 
<br>
-    frag-&gt;sr_desc.sg_lst_p = &amp;frag-&gt;sg_entry; 
<br>
-    frag-&gt;sr_desc.id = (VAPI_virt_addr_t) (MT_virt_addr_t) frag; 
<br>
+    frag-&gt;desc.sr_desc.comp_type = VAPI_SIGNALED; 
<br>
+    frag-&gt;desc.sr_desc.opcode = VAPI_SEND; 
<br>
+    frag-&gt;desc.sr_desc.remote_qkey = 0; 
<br>
+    frag-&gt;desc.sr_desc.sg_lst_len = 1; 
<br>
+    frag-&gt;desc.sr_desc.sg_lst_p = &amp;frag-&gt;sg_entry; 
<br>
+    frag-&gt;desc.sr_desc.id = (VAPI_virt_addr_t) (MT_virt_addr_t) frag; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;}
<br>
&nbsp;
<br>
@@ -61,11 +61,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;base.des_src = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;base.des_src_cnt = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
-    frag-&gt;rr_desc.comp_type = VAPI_SIGNALED; 
<br>
-    frag-&gt;rr_desc.opcode = VAPI_RECEIVE; 
<br>
-    frag-&gt;rr_desc.sg_lst_len = 1; 
<br>
-    frag-&gt;rr_desc.sg_lst_p = &amp;frag-&gt;sg_entry; 
<br>
-    frag-&gt;rr_desc.id = (VAPI_virt_addr_t) (MT_virt_addr_t) frag; 
<br>
+    frag-&gt;desc.rr_desc.comp_type = VAPI_SIGNALED; 
<br>
+    frag-&gt;desc.rr_desc.opcode = VAPI_RECEIVE; 
<br>
+    frag-&gt;desc.rr_desc.sg_lst_len = 1; 
<br>
+    frag-&gt;desc.rr_desc.sg_lst_p = &amp;frag-&gt;sg_entry; 
<br>
+    frag-&gt;desc.rr_desc.id = (VAPI_virt_addr_t) (MT_virt_addr_t) frag; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;}
<br>
diff -Naur openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi_frag.h openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi_frag.h
<br>
--- openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi_frag.h	2007-04-19 18:30:54.000000000 +0200
<br>
+++ openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi_frag.h	2007-05-09 14:31:08.000000000 +0200
<br>
@@ -92,7 +92,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;union{ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VAPI_rr_desc_t rr_desc; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VAPI_sr_desc_t sr_desc; 
<br>
-    }; 
<br>
+    } desc; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VAPI_sg_lst_entry_t sg_entry;  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_mvapi_header_t *hdr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_mvapi_footer_t *ftr;
<br>
@@ -165,7 +165,7 @@
<br>
&nbsp;
<br>
&nbsp;#define MCA_BTL_IB_FRAG_PROGRESS(frag) \
<br>
&nbsp;do { \
<br>
-    switch(frag-&gt;sr_desc.opcode) { \
<br>
+    switch(frag-&gt;desc.sr_desc.opcode) { \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case VAPI_SEND: \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(OMPI_SUCCESS !=  mca_btl_mvapi_endpoint_send(frag-&gt;endpoint, frag)) { \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTL_ERROR((&quot;error in posting pending send\n&quot;)); \
<br>
@@ -186,7 +186,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default: \
<br>
-        BTL_ERROR((&quot;error in posting pending operation, invalide opcode %d\n&quot;, frag-&gt;sr_desc.opcode)); \
<br>
+        BTL_ERROR((&quot;error in posting pending operation, invalide opcode %d\n&quot;, frag-&gt;desc.sr_desc.opcode)); \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} \
<br>
&nbsp;} while (0)
<br>
diff -Naur openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi.h openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi.h
<br>
--- openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi.h	2007-04-19 18:30:54.000000000 +0200
<br>
+++ openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi.h	2007-05-09 14:37:23.000000000 +0200
<br>
@@ -260,7 +260,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;sg_entry.len = frag-&gt;size + \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((unsigned char*) frag-&gt;segment.seg_addr.pval-  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(unsigned char*) frag-&gt;hdr);  \
<br>
-       desc_post[i] = frag-&gt;rr_desc; \
<br>
+       desc_post[i] = frag-&gt;desc.rr_desc; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = VAPI_post_srq( nic, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;srq_hndl, \
<br>
<p><p><pre>
-- 
                             \\\\\\
                             (-0^0-)
--------------------------oOO--(_)--OOo-----------------------------
 Luis Kornblueh                           Tel. : +49-40-41173289
 Max-Planck-Institute for Meteorology     Fax. : +49-40-41173298
 Bundesstr. 53              
 D-20146 Hamburg                   Email: luis.kornblueh_at_[hidden]
 Federal Republic of Germany                                               
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3281.php">Jeff Squyres: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
<li><strong>Previous message:</strong> <a href="3279.php">George Bosilca: "Re: [OMPI users] where did liborte/libopal go?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3281.php">Jeff Squyres: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
<li><strong>Reply:</strong> <a href="3281.php">Jeff Squyres: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
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
