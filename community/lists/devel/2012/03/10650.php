<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 13:36:29 2012" -->
<!-- isoreceived="20120301183629" -->
<!-- sent="Thu, 1 Mar 2012 13:36:23 -0500" -->
<!-- isosent="20120301183623" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)" -->
<!-- id="D63DDE4B-48B9-461B-B23F-5E9F97CABBA5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.00.1203010854150.12520_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 13:36:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10651.php">Gutierrez, Samuel K: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>Previous message:</strong> <a href="10649.php">Nathan Hjelm: "[OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>In reply to:</strong> <a href="10649.php">Nathan Hjelm: "[OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10651.php">Gutierrez, Samuel K: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>Reply:</strong> <a href="10651.php">Gutierrez, Samuel K: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>Reply:</strong> <a href="10652.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>Reply:</strong> <a href="10654.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
...or in 1.5.5.  
<br>
<p>How soon will you be able to tell if it fixes some hangs?
<br>
<p><p>On Mar 1, 2012, at 10:56 AM, Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; Found a pretty nasty frag leak (and a minor one) in ob1 (see commit below). If this fix addresses some hangs we are seeing on infiniband LANL might want a 1.4.6 rolled (or a faster rollout for 1.6.0).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev1">&gt; Date: Thu, 1 Mar 2012 08:53:39 -0700
</span><br>
<span class="quotelev1">&gt; From: hjelmn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Reply-To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn] svn:open-mpi r26077
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: hjelmn
</span><br>
<span class="quotelev1">&gt; Date: 2012-03-01 10:53:39 EST (Thu, 01 Mar 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 26077
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26077">https://svn.open-mpi.org/trac/ompi/changeset/26077</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; ob1: fix two fragment leaks
</span><br>
<span class="quotelev1">&gt; - MAJOR! get src descriptor leaks if mca_bml_base_send fails
</span><br>
<span class="quotelev1">&gt; - minor. descriptor leaked in mca_pml_send_request_start_copy if the btl returns OMPI_ERR_RESOURCE_BUSY.
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.c |    27 ++++++++++++++++-----------
</span><br>
<span class="quotelev1">&gt;   1 files changed, 16 insertions(+), 11 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.c	2012-03-01 10:53:39 EST (Thu, 01 Mar 2012)
</span><br>
<span class="quotelev1">&gt; @@ -1,3 +1,4 @@
</span><br>
<span class="quotelev1">&gt; +/* -*- Mode: C; c-basic-offset:4 ; indent-tabs-mode:nil -*- */
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev1">&gt;  *                         University Research and Technology
</span><br>
<span class="quotelev1">&gt; @@ -12,6 +13,8 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2008      UT-Battelle, LLC. All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2010      Oracle and/or its affiliates.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2012      NVIDIA Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2012      Los Alamos National Security, LLC. All rights
</span><br>
<span class="quotelev1">&gt; + *                         reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -546,15 +549,14 @@
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    switch(OPAL_SOS_GET_ERROR_CODE(rc)) {
</span><br>
<span class="quotelev1">&gt; -        case OMPI_ERR_RESOURCE_BUSY:
</span><br>
<span class="quotelev1">&gt; -            /* No more resources. Allow the upper level to queue the send */
</span><br>
<span class="quotelev1">&gt; -            rc = OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt; -        default:
</span><br>
<span class="quotelev1">&gt; -            mca_bml_base_free(bml_btl, des);
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (OMPI_ERR_RESOURCE_BUSY == OPAL_SOS_GET_ERROR_CODE(rc)) {
</span><br>
<span class="quotelev1">&gt; +        /* No more resources. Allow the upper level to queue the send */
</span><br>
<span class="quotelev1">&gt; +        rc = OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    mca_bml_base_free (bml_btl, des);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     return rc;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -631,7 +633,7 @@
</span><br>
<span class="quotelev1">&gt;      * operation is achieved.
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    mca_btl_base_descriptor_t* des;
</span><br>
<span class="quotelev1">&gt; +    mca_btl_base_descriptor_t *des, *src = NULL;
</span><br>
<span class="quotelev1">&gt;     mca_btl_base_segment_t* segment;
</span><br>
<span class="quotelev1">&gt;     mca_pml_ob1_hdr_t* hdr;
</span><br>
<span class="quotelev1">&gt;     bool need_local_cb = false;
</span><br>
<span class="quotelev1">&gt; @@ -640,7 +642,6 @@
</span><br>
<span class="quotelev1">&gt;     bml_btl = sendreq-&gt;req_rdma[0].bml_btl;
</span><br>
<span class="quotelev1">&gt;     if((sendreq-&gt;req_rdma_cnt == 1) &amp;&amp; (bml_btl-&gt;btl_flags &amp; (MCA_BTL_FLAGS_GET | MCA_BTL_FLAGS_CUDA_GET))) {
</span><br>
<span class="quotelev1">&gt;         mca_mpool_base_registration_t* reg = sendreq-&gt;req_rdma[0].btl_reg;
</span><br>
<span class="quotelev1">&gt; -        mca_btl_base_descriptor_t* src;
</span><br>
<span class="quotelev1">&gt;         size_t i;
</span><br>
<span class="quotelev1">&gt;         size_t old_position = sendreq-&gt;req_send.req_base.req_convertor.bConverted;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -781,6 +782,10 @@
</span><br>
<span class="quotelev1">&gt;         return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     mca_bml_base_free(bml_btl, des);
</span><br>
<span class="quotelev1">&gt; +    if (NULL != src) {
</span><br>
<span class="quotelev1">&gt; +        mca_bml_base_free (bml_btl, src);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     return rc;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -1144,7 +1149,7 @@
</span><br>
<span class="quotelev1">&gt;                               0,
</span><br>
<span class="quotelev1">&gt;                               &amp;frag-&gt;rdma_length,
</span><br>
<span class="quotelev1">&gt;                               MCA_BTL_DES_FLAGS_BTL_OWNERSHIP |
</span><br>
<span class="quotelev1">&gt; -			      MCA_BTL_DES_FLAGS_PUT,
</span><br>
<span class="quotelev1">&gt; +                              MCA_BTL_DES_FLAGS_PUT,
</span><br>
<span class="quotelev1">&gt;                               &amp;des );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if( OPAL_UNLIKELY(NULL == des) ) {
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10651.php">Gutierrez, Samuel K: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>Previous message:</strong> <a href="10649.php">Nathan Hjelm: "[OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>In reply to:</strong> <a href="10649.php">Nathan Hjelm: "[OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10651.php">Gutierrez, Samuel K: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>Reply:</strong> <a href="10651.php">Gutierrez, Samuel K: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>Reply:</strong> <a href="10652.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>Reply:</strong> <a href="10654.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
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
