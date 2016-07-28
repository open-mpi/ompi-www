<?
$subject_val = "[OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 10:56:49 2012" -->
<!-- isoreceived="20120301155649" -->
<!-- sent="Thu, 1 Mar 2012 08:56:43 -0700 (MST)" -->
<!-- isosent="20120301155643" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)" -->
<!-- id="alpine.OSX.2.00.1203010854150.12520_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 10:56:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10650.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>Previous message:</strong> <a href="10648.php">Y.MATSUMOTO: "[OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10650.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>Reply:</strong> <a href="10650.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>Reply:</strong> <a href="10653.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>Reply:</strong> <a href="10655.php">Christopher Samuel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Found a pretty nasty frag leak (and a minor one) in ob1 (see commit below). If this fix addresses some hangs we are seeing on infiniband LANL might want a 1.4.6 rolled (or a faster rollout for 1.6.0).
<br>
<p>-Nathan
<br>
<p>---------- Forwarded message ----------
<br>
Date: Thu, 1 Mar 2012 08:53:39 -0700
<br>
From: hjelmn_at_[hidden]
<br>
Reply-To: devel_at_[hidden]
<br>
To: svn_at_[hidden]
<br>
Subject: [OMPI svn] svn:open-mpi r26077
<br>
<p>Author: hjelmn
<br>
Date: 2012-03-01 10:53:39 EST (Thu, 01 Mar 2012)
<br>
New Revision: 26077
<br>
URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26077">https://svn.open-mpi.org/trac/ompi/changeset/26077</a>
<br>
<p>Log:
<br>
ob1: fix two fragment leaks
<br>
&nbsp;&nbsp;- MAJOR! get src descriptor leaks if mca_bml_base_send fails
<br>
&nbsp;&nbsp;- minor. descriptor leaked in mca_pml_send_request_start_copy if the btl returns OMPI_ERR_RESOURCE_BUSY.
<br>
Text files modified:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.c |    27 ++++++++++++++++-----------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1 files changed, 16 insertions(+), 11 deletions(-)
<br>
<p>Modified: trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.c
<br>
==============================================================================
<br>
--- trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.c	(original)
<br>
+++ trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.c	2012-03-01 10:53:39 EST (Thu, 01 Mar 2012)
<br>
@@ -1,3 +1,4 @@
<br>
+/* -*- Mode: C; c-basic-offset:4 ; indent-tabs-mode:nil -*- */
<br>
&nbsp;&nbsp;/*
<br>
&nbsp;&nbsp;&nbsp;* Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
<br>
&nbsp;&nbsp;&nbsp;*                         University Research and Technology
<br>
@@ -12,6 +13,8 @@
<br>
&nbsp;&nbsp;&nbsp;* Copyright (c) 2008      UT-Battelle, LLC. All rights reserved.
<br>
&nbsp;&nbsp;&nbsp;* Copyright (c) 2010      Oracle and/or its affiliates.  All rights reserved.
<br>
&nbsp;&nbsp;&nbsp;* Copyright (c) 2012      NVIDIA Corporation.  All rights reserved.
<br>
+ * Copyright (c) 2012      Los Alamos National Security, LLC. All rights
<br>
+ *                         reserved.
<br>
&nbsp;&nbsp;&nbsp;* $COPYRIGHT$
<br>
&nbsp;&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;&nbsp;* Additional copyrights may follow
<br>
@@ -546,15 +549,14 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-    switch(OPAL_SOS_GET_ERROR_CODE(rc)) {
<br>
-        case OMPI_ERR_RESOURCE_BUSY:
<br>
-            /* No more resources. Allow the upper level to queue the send */
<br>
-            rc = OMPI_ERR_OUT_OF_RESOURCE;
<br>
-            break;
<br>
-        default:
<br>
-            mca_bml_base_free(bml_btl, des);
<br>
-            break;
<br>
+
<br>
+    if (OMPI_ERR_RESOURCE_BUSY == OPAL_SOS_GET_ERROR_CODE(rc)) {
<br>
+        /* No more resources. Allow the upper level to queue the send */
<br>
+        rc = OMPI_ERR_OUT_OF_RESOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+
<br>
+    mca_bml_base_free (bml_btl, des);
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;&nbsp;}
<br>
<p>@@ -631,7 +633,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* operation is achieved.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
<p>-    mca_btl_base_descriptor_t* des;
<br>
+    mca_btl_base_descriptor_t *des, *src = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_base_segment_t* segment;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_hdr_t* hdr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool need_local_cb = false;
<br>
@@ -640,7 +642,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bml_btl = sendreq-&gt;req_rdma[0].bml_btl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((sendreq-&gt;req_rdma_cnt == 1) &amp;&amp; (bml_btl-&gt;btl_flags &amp; (MCA_BTL_FLAGS_GET | MCA_BTL_FLAGS_CUDA_GET))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_mpool_base_registration_t* reg = sendreq-&gt;req_rdma[0].btl_reg;
<br>
-        mca_btl_base_descriptor_t* src;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t old_position = sendreq-&gt;req_send.req_base.req_convertor.bConverted;
<br>
<p>@@ -781,6 +782,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_bml_base_free(bml_btl, des);
<br>
+    if (NULL != src) {
<br>
+        mca_bml_base_free (bml_btl, src);
<br>
+    }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;&nbsp;}
<br>
<p>@@ -1144,7 +1149,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;frag-&gt;rdma_length,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_DES_FLAGS_BTL_OWNERSHIP |
<br>
-			      MCA_BTL_DES_FLAGS_PUT,
<br>
+                              MCA_BTL_DES_FLAGS_PUT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;des );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( OPAL_UNLIKELY(NULL == des) ) {
<br>
_______________________________________________
<br>
svn mailing list
<br>
svn_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10650.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>Previous message:</strong> <a href="10648.php">Y.MATSUMOTO: "[OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10650.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>Reply:</strong> <a href="10650.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>Reply:</strong> <a href="10653.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>Reply:</strong> <a href="10655.php">Christopher Samuel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
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
