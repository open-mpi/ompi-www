<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26329";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 16:43:53 2012" -->
<!-- isoreceived="20120424204353" -->
<!-- sent="Tue, 24 Apr 2012 16:43:48 -0400" -->
<!-- isosent="20120424204348" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26329" -->
<!-- id="A6F40711-C88A-4840-A969-0457FF197ACD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201204242018.q3OKIv8i003848_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26329<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-24 16:43:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10916.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26329"</a>
<li><strong>Previous message:</strong> <a href="10914.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10916.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26329"</a>
<li><strong>Reply:</strong> <a href="10916.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26329"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There's some pretty extensive ob1 changes in here.
<br>
<p>Can we get these reviewed?  Brian / George?
<br>
<p><p>On Apr 24, 2012, at 4:18 PM, hjelmn_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: hjelmn
</span><br>
<span class="quotelev1">&gt; Date: 2012-04-24 16:18:56 EDT (Tue, 24 Apr 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 26329
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26329">https://svn.open-mpi.org/trac/ompi/changeset/26329</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; ob1: add support for get fallback on put/send
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/ugni/btl_ugni_get.c     |    17 ----                                    
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/ugni/btl_ugni_put.c     |    48 --------------                          
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/ugni/btl_ugni_rdma.h    |     7 --                                      
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/ugni/btl_ugni_smsg.c    |     5 -                                       
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/ugni/btl_ugni_smsg.h    |     1                                         
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1.c           |     5 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1.h           |     2                                         
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_component.c |     4                                         
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_recvfrag.c  |    15 +++-                                    
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.c   |    94 ++++++++++++++++++++++++++--            
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.c   |   131 ++++++++++++++++++++++----------------- 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.h   |     2                                         
</span><br>
<span class="quotelev1">&gt;   12 files changed, 182 insertions(+), 149 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/ugni/btl_ugni_get.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/ugni/btl_ugni_get.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/ugni/btl_ugni_get.c	2012-04-24 16:18:56 EDT (Tue, 24 Apr 2012)
</span><br>
<span class="quotelev1">&gt; @@ -13,19 +13,6 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;btl_ugni_rdma.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;btl_ugni_smsg.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -static int mca_btl_ugni_init_put (struct mca_btl_base_module_t *btl,
</span><br>
<span class="quotelev1">&gt; -                                  mca_btl_ugni_base_frag_t *frag) {
</span><br>
<span class="quotelev1">&gt; -    /* off alignment/off size. switch to put */
</span><br>
<span class="quotelev1">&gt; -    frag-&gt;hdr.rdma.src_seg = frag-&gt;base.des_src[0];
</span><br>
<span class="quotelev1">&gt; -    frag-&gt;hdr.rdma.dst_seg = frag-&gt;base.des_dst[0];
</span><br>
<span class="quotelev1">&gt; -    frag-&gt;hdr.rdma.ctx     = (void *) frag;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* send the fragment header using smsg. ignore local completion */
</span><br>
<span class="quotelev1">&gt; -    return ompi_mca_btl_ugni_smsg_send (frag, true, &amp;frag-&gt;hdr.rdma,
</span><br>
<span class="quotelev1">&gt; -                                        sizeof (frag-&gt;hdr.rdma), NULL, 0,
</span><br>
<span class="quotelev1">&gt; -                                        MCA_BTL_UGNI_TAG_PUT_INIT);
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt;  * Initiate a get operation.
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt; @@ -54,7 +41,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (OPAL_UNLIKELY(check || size &gt; mca_btl_ugni_component.ugni_get_limit)) {
</span><br>
<span class="quotelev1">&gt;         /* switch to put */
</span><br>
<span class="quotelev1">&gt; -        return mca_btl_ugni_init_put (btl, frag);
</span><br>
<span class="quotelev1">&gt; +        return OMPI_ERR_NOT_AVAILABLE;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (NULL != frag-&gt;base.des_cbfunc) {
</span><br>
<span class="quotelev1">&gt; @@ -68,7 +55,7 @@
</span><br>
<span class="quotelev1">&gt;     return mca_btl_ugni_post_bte (frag, GNI_POST_RDMA_GET, des-&gt;des_dst, des-&gt;des_src);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -void mca_btl_ugni_callback_rdma_complete (mca_btl_ugni_base_frag_t *frag, int rc)
</span><br>
<span class="quotelev1">&gt; +static void mca_btl_ugni_callback_rdma_complete (mca_btl_ugni_base_frag_t *frag, int rc)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     BTL_VERBOSE((&quot;rdma operation for rem_ctx %p complete&quot;, frag-&gt;hdr.rdma.ctx));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/ugni/btl_ugni_put.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/ugni/btl_ugni_put.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/ugni/btl_ugni_put.c	2012-04-24 16:18:56 EDT (Tue, 24 Apr 2012)
</span><br>
<span class="quotelev1">&gt; @@ -46,51 +46,3 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return mca_btl_ugni_post_bte (frag, GNI_POST_RDMA_PUT, des-&gt;des_src, des-&gt;des_dst);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/* reversed get */
</span><br>
<span class="quotelev1">&gt; -static void mca_btl_ugni_callback_put_retry (mca_btl_ugni_base_frag_t *frag, int rc)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    (void) mca_btl_ugni_start_put(frag-&gt;endpoint, frag-&gt;hdr.rdma, frag);
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -int mca_btl_ugni_start_put (mca_btl_base_endpoint_t *ep,
</span><br>
<span class="quotelev1">&gt; -                            mca_btl_ugni_rdma_frag_hdr_t hdr,
</span><br>
<span class="quotelev1">&gt; -                            mca_btl_ugni_base_frag_t *frag)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    int rc;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    BTL_VERBOSE((&quot;starting reverse get (put) for remote ctx: %p&quot;, hdr.ctx));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (NULL == frag) {
</span><br>
<span class="quotelev1">&gt; -        rc = MCA_BTL_UGNI_FRAG_ALLOC_RDMA_INT(ep, frag);
</span><br>
<span class="quotelev1">&gt; -        if (OPAL_UNLIKELY(NULL == frag)) {
</span><br>
<span class="quotelev1">&gt; -            BTL_ERROR((&quot;error allocating rdma frag for reverse get. rc = %d. fl_num_allocated = %d&quot;, rc,
</span><br>
<span class="quotelev1">&gt; -                       ep-&gt;btl-&gt;rdma_int_frags.fl_num_allocated));
</span><br>
<span class="quotelev1">&gt; -            return rc;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    frag-&gt;hdr.rdma = hdr;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    frag-&gt;base.des_cbfunc = NULL;
</span><br>
<span class="quotelev1">&gt; -    frag-&gt;base.des_flags  = MCA_BTL_DES_FLAGS_BTL_OWNERSHIP;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    frag-&gt;segments[0] = hdr.src_seg;
</span><br>
<span class="quotelev1">&gt; -    frag-&gt;base.des_src = frag-&gt;segments;
</span><br>
<span class="quotelev1">&gt; -    frag-&gt;base.des_src_cnt = 1;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    frag-&gt;segments[1] = hdr.dst_seg;
</span><br>
<span class="quotelev1">&gt; -    frag-&gt;base.des_dst = frag-&gt;segments + 1;
</span><br>
<span class="quotelev1">&gt; -    frag-&gt;base.des_dst_cnt = 1;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    rc = mca_btl_ugni_put (&amp;ep-&gt;btl-&gt;super, ep, &amp;frag-&gt;base);
</span><br>
<span class="quotelev1">&gt; -    if (OPAL_UNLIKELY(OMPI_SUCCESS != rc)) {
</span><br>
<span class="quotelev1">&gt; -        frag-&gt;cbfunc = mca_btl_ugni_callback_put_retry;
</span><br>
<span class="quotelev1">&gt; -        opal_list_append (&amp;ep-&gt;btl-&gt;failed_frags, (opal_list_item_t *) frag);
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    frag-&gt;cbfunc = mca_btl_ugni_callback_rdma_complete;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/ugni/btl_ugni_rdma.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/ugni/btl_ugni_rdma.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/ugni/btl_ugni_rdma.h	2012-04-24 16:18:56 EDT (Tue, 24 Apr 2012)
</span><br>
<span class="quotelev1">&gt; @@ -16,17 +16,10 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;btl_ugni.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;btl_ugni_frag.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -/* mca_btl_ugni_start_put: get operation could not be completed. start put instead */
</span><br>
<span class="quotelev1">&gt; -int mca_btl_ugni_start_put (mca_btl_base_endpoint_t *ep,
</span><br>
<span class="quotelev1">&gt; -                            mca_btl_ugni_rdma_frag_hdr_t hdr,
</span><br>
<span class="quotelev1">&gt; -                            mca_btl_ugni_base_frag_t *frag);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; int mca_btl_ugni_start_eager_get (mca_btl_base_endpoint_t *ep,
</span><br>
<span class="quotelev1">&gt;                                   mca_btl_ugni_eager_ex_frag_hdr_t hdr,
</span><br>
<span class="quotelev1">&gt;                                   mca_btl_ugni_base_frag_t *frag);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -void mca_btl_ugni_callback_rdma_complete (mca_btl_ugni_base_frag_t *frag, int rc);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; static inline int init_gni_post_desc(mca_btl_ugni_base_frag_t *frag,
</span><br>
<span class="quotelev1">&gt;                                      gni_post_type_t op_type,
</span><br>
<span class="quotelev1">&gt;                                      uint64_t lcl_addr, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/ugni/btl_ugni_smsg.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/ugni/btl_ugni_smsg.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/ugni/btl_ugni_smsg.c	2012-04-24 16:18:56 EDT (Tue, 24 Apr 2012)
</span><br>
<span class="quotelev1">&gt; @@ -78,11 +78,6 @@
</span><br>
<span class="quotelev1">&gt;             reg-&gt;cbfunc(&amp;ep-&gt;btl-&gt;super, tag, &amp;(frag.base), reg-&gt;cbdata);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             break;
</span><br>
<span class="quotelev1">&gt; -        case MCA_BTL_UGNI_TAG_PUT_INIT:
</span><br>
<span class="quotelev1">&gt; -            frag.hdr.rdma = ((mca_btl_ugni_rdma_frag_hdr_t *) data_ptr)[0];
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -            mca_btl_ugni_start_put (ep, frag.hdr.rdma, NULL);
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt;         case MCA_BTL_UGNI_TAG_GET_INIT:
</span><br>
<span class="quotelev1">&gt;             frag.hdr.eager_ex = ((mca_btl_ugni_eager_ex_frag_hdr_t *) data_ptr)[0];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/ugni/btl_ugni_smsg.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/ugni/btl_ugni_smsg.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/ugni/btl_ugni_smsg.h	2012-04-24 16:18:56 EDT (Tue, 24 Apr 2012)
</span><br>
<span class="quotelev1">&gt; @@ -21,7 +21,6 @@
</span><br>
<span class="quotelev1">&gt; typedef enum {
</span><br>
<span class="quotelev1">&gt;     MCA_BTL_UGNI_TAG_SEND,
</span><br>
<span class="quotelev1">&gt;     MCA_BTL_UGNI_TAG_DISCONNECT,
</span><br>
<span class="quotelev1">&gt; -    MCA_BTL_UGNI_TAG_PUT_INIT,
</span><br>
<span class="quotelev1">&gt;     MCA_BTL_UGNI_TAG_GET_INIT,
</span><br>
<span class="quotelev1">&gt;     MCA_BTL_UGNI_TAG_RDMA_COMPLETE
</span><br>
<span class="quotelev1">&gt; } mca_btl_ugni_smsg_tag_t;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1.c	2012-04-24 16:18:56 EDT (Tue, 24 Apr 2012)
</span><br>
<span class="quotelev1">&gt; @@ -147,6 +147,7 @@
</span><br>
<span class="quotelev1">&gt;     OBJ_CONSTRUCT(&amp;mca_pml_ob1.recv_pending, opal_list_t);
</span><br>
<span class="quotelev1">&gt;     OBJ_CONSTRUCT(&amp;mca_pml_ob1.pckt_pending, opal_list_t);
</span><br>
<span class="quotelev1">&gt;     OBJ_CONSTRUCT(&amp;mca_pml_ob1.rdma_pending, opal_list_t);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     /* missing communicator pending list */
</span><br>
<span class="quotelev1">&gt;     OBJ_CONSTRUCT(&amp;mca_pml_ob1.non_existing_communicator_pending, opal_list_t);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -599,8 +600,10 @@
</span><br>
<span class="quotelev1">&gt;         OPAL_THREAD_UNLOCK(&amp;mca_pml_ob1.lock);
</span><br>
<span class="quotelev1">&gt;         if(NULL == frag)
</span><br>
<span class="quotelev1">&gt;             break;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        frag-&gt;retries++;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;         if(frag-&gt;rdma_state == MCA_PML_OB1_RDMA_PUT) {
</span><br>
<span class="quotelev1">&gt; -            frag-&gt;retries++;
</span><br>
<span class="quotelev1">&gt;             rc = mca_pml_ob1_send_request_put_frag(frag);
</span><br>
<span class="quotelev1">&gt;         } else {
</span><br>
<span class="quotelev1">&gt;             rc = mca_pml_ob1_recv_request_get_frag(frag);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1.h	2012-04-24 16:18:56 EDT (Tue, 24 Apr 2012)
</span><br>
<span class="quotelev1">&gt; @@ -52,7 +52,7 @@
</span><br>
<span class="quotelev1">&gt;     int free_list_inc;      /* number of elements to grow free list */
</span><br>
<span class="quotelev1">&gt;     size_t send_pipeline_depth;
</span><br>
<span class="quotelev1">&gt;     size_t recv_pipeline_depth;
</span><br>
<span class="quotelev1">&gt; -    size_t rdma_put_retries_limit;
</span><br>
<span class="quotelev1">&gt; +    size_t rdma_retries_limit;
</span><br>
<span class="quotelev1">&gt;     int max_rdma_per_request;
</span><br>
<span class="quotelev1">&gt;     int max_send_per_range;
</span><br>
<span class="quotelev1">&gt;     bool leave_pinned; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_component.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_component.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_component.c	2012-04-24 16:18:56 EDT (Tue, 24 Apr 2012)
</span><br>
<span class="quotelev1">&gt; @@ -112,8 +112,8 @@
</span><br>
<span class="quotelev1">&gt;         mca_pml_ob1_param_register_int(&quot;send_pipeline_depth&quot;, 3);
</span><br>
<span class="quotelev1">&gt;     mca_pml_ob1.recv_pipeline_depth =
</span><br>
<span class="quotelev1">&gt;         mca_pml_ob1_param_register_int(&quot;recv_pipeline_depth&quot;, 4);
</span><br>
<span class="quotelev1">&gt; -    mca_pml_ob1.rdma_put_retries_limit =
</span><br>
<span class="quotelev1">&gt; -        mca_pml_ob1_param_register_int(&quot;rdma_put_retries_limit&quot;, 5);
</span><br>
<span class="quotelev1">&gt; +    mca_pml_ob1.rdma_retries_limit =
</span><br>
<span class="quotelev1">&gt; +        mca_pml_ob1_param_register_int(&quot;rdma_retries_limit&quot;, 5);
</span><br>
<span class="quotelev1">&gt;     mca_pml_ob1.max_rdma_per_request =
</span><br>
<span class="quotelev1">&gt;         mca_pml_ob1_param_register_int(&quot;max_rdma_per_request&quot;, 4);
</span><br>
<span class="quotelev1">&gt;     mca_pml_ob1.max_send_per_range =
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_recvfrag.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_recvfrag.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_recvfrag.c	2012-04-24 16:18:56 EDT (Tue, 24 Apr 2012)
</span><br>
<span class="quotelev1">&gt; @@ -294,15 +294,22 @@
</span><br>
<span class="quotelev1">&gt;     if( OPAL_UNLIKELY(segments-&gt;seg_len &lt; sizeof(mca_pml_ob1_common_hdr_t)) ) {
</span><br>
<span class="quotelev1">&gt;          return;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     ob1_hdr_ntoh(hdr, MCA_PML_OB1_HDR_TYPE_ACK);
</span><br>
<span class="quotelev1">&gt;     sendreq = (mca_pml_ob1_send_request_t*)hdr-&gt;hdr_ack.hdr_src_req.pval;
</span><br>
<span class="quotelev1">&gt;     sendreq-&gt;req_recv = hdr-&gt;hdr_ack.hdr_dst_req;
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     /* if the request should be delivered entirely by copy in/out
</span><br>
<span class="quotelev1">&gt;      * then throttle sends */
</span><br>
<span class="quotelev1">&gt; -    if(hdr-&gt;hdr_common.hdr_flags &amp; MCA_PML_OB1_HDR_FLAGS_NORDMA)
</span><br>
<span class="quotelev1">&gt; +    if(hdr-&gt;hdr_common.hdr_flags &amp; MCA_PML_OB1_HDR_FLAGS_NORDMA) {
</span><br>
<span class="quotelev1">&gt; +        if (NULL != sendreq-&gt;src_des) {
</span><br>
<span class="quotelev1">&gt; +            /* release registered memory */
</span><br>
<span class="quotelev1">&gt; +            mca_bml_base_free (sendreq-&gt;req_rdma[0].bml_btl, sendreq-&gt;src_des);
</span><br>
<span class="quotelev1">&gt; +            sendreq-&gt;src_des = NULL;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;         sendreq-&gt;req_throttle_sends = true;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mca_pml_ob1_send_request_copy_in_out(sendreq,
</span><br>
<span class="quotelev1">&gt;                                          hdr-&gt;hdr_ack.hdr_send_offset,
</span><br>
<span class="quotelev1">&gt; @@ -324,7 +331,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if(send_request_pml_complete_check(sendreq) == false)
</span><br>
<span class="quotelev1">&gt;         mca_pml_ob1_send_request_schedule(sendreq);
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     return;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.c	2012-04-24 16:18:56 EDT (Tue, 24 Apr 2012)
</span><br>
<span class="quotelev1">&gt; @@ -352,6 +352,66 @@
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +static int mca_pml_ob1_init_get_fallback (mca_pml_ob1_rdma_frag_t *frag,
</span><br>
<span class="quotelev1">&gt; +                                          mca_btl_base_descriptor_t *dst) {
</span><br>
<span class="quotelev1">&gt; +    mca_pml_ob1_recv_request_t *recvreq = (mca_pml_ob1_recv_request_t *) frag-&gt;rdma_req;
</span><br>
<span class="quotelev1">&gt; +    mca_bml_base_btl_t *bml_btl = frag-&gt;rdma_bml;
</span><br>
<span class="quotelev1">&gt; +    mca_btl_base_descriptor_t *ctl;
</span><br>
<span class="quotelev1">&gt; +    mca_pml_ob1_rdma_hdr_t *hdr;
</span><br>
<span class="quotelev1">&gt; +    size_t hdr_size;
</span><br>
<span class="quotelev1">&gt; +    unsigned int i;
</span><br>
<span class="quotelev1">&gt; +    int rc;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* prepare a descriptor for rdma control message */
</span><br>
<span class="quotelev1">&gt; +    hdr_size = sizeof (mca_pml_ob1_rdma_hdr_t);
</span><br>
<span class="quotelev1">&gt; +    if (dst-&gt;des_dst_cnt &gt; 1) {
</span><br>
<span class="quotelev1">&gt; +        hdr_size += (sizeof (mca_btl_base_segment_t) *
</span><br>
<span class="quotelev1">&gt; +                     (dst-&gt;des_dst_cnt-1));
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    mca_bml_base_alloc (bml_btl, &amp;ctl, MCA_BTL_NO_ORDER, hdr_size,
</span><br>
<span class="quotelev1">&gt; +                        MCA_BTL_DES_FLAGS_PRIORITY | MCA_BTL_DES_FLAGS_BTL_OWNERSHIP |
</span><br>
<span class="quotelev1">&gt; +                        MCA_BTL_DES_SEND_ALWAYS_CALLBACK);
</span><br>
<span class="quotelev1">&gt; +    if (OPAL_UNLIKELY(NULL == ctl)) {
</span><br>
<span class="quotelev1">&gt; +        return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    ctl-&gt;des_cbfunc = mca_pml_ob1_recv_ctl_completion;
</span><br>
<span class="quotelev1">&gt; +        
</span><br>
<span class="quotelev1">&gt; +    /* fill in rdma header */
</span><br>
<span class="quotelev1">&gt; +    hdr = (mca_pml_ob1_rdma_hdr_t *) ctl-&gt;des_src-&gt;seg_addr.pval;
</span><br>
<span class="quotelev1">&gt; +    hdr-&gt;hdr_common.hdr_type = MCA_PML_OB1_HDR_TYPE_PUT;
</span><br>
<span class="quotelev1">&gt; +    hdr-&gt;hdr_common.hdr_flags =
</span><br>
<span class="quotelev1">&gt; +        (!recvreq-&gt;req_ack_sent) ? MCA_PML_OB1_HDR_TYPE_ACK : 0;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    hdr-&gt;hdr_req = frag-&gt;rdma_hdr.hdr_rget.hdr_rndv.hdr_src_req;
</span><br>
<span class="quotelev1">&gt; +    hdr-&gt;hdr_rdma_offset = recvreq-&gt;req_rdma_offset;
</span><br>
<span class="quotelev1">&gt; +    hdr-&gt;hdr_des.pval = dst;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    hdr-&gt;hdr_seg_cnt = dst-&gt;des_dst_cnt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    for (i = 0 ; i &lt; dst-&gt;des_dst_cnt ; ++i) {
</span><br>
<span class="quotelev1">&gt; +        hdr-&gt;hdr_segs[i].seg_addr.lval = ompi_ptr_ptol(dst-&gt;des_dst[i].seg_addr.pval);
</span><br>
<span class="quotelev1">&gt; +        hdr-&gt;hdr_segs[i].seg_len       = dst-&gt;des_dst[i].seg_len;
</span><br>
<span class="quotelev1">&gt; +        hdr-&gt;hdr_segs[i].seg_key.key64[0] = dst-&gt;des_dst[i].seg_key.key64[0];
</span><br>
<span class="quotelev1">&gt; +        hdr-&gt;hdr_segs[i].seg_key.key64[1] = dst-&gt;des_dst[i].seg_key.key64[1];
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    dst-&gt;des_cbfunc = mca_pml_ob1_put_completion;
</span><br>
<span class="quotelev1">&gt; +    dst-&gt;des_cbdata = recvreq;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (!recvreq-&gt;req_ack_sent)
</span><br>
<span class="quotelev1">&gt; +        recvreq-&gt;req_ack_sent = true;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* send rdma request to peer */
</span><br>
<span class="quotelev1">&gt; +    rc = mca_bml_base_send (bml_btl, ctl, MCA_PML_OB1_HDR_TYPE_PUT);
</span><br>
<span class="quotelev1">&gt; +    if (OPAL_UNLIKELY(rc &lt; 0)) {
</span><br>
<span class="quotelev1">&gt; +        mca_bml_base_free (bml_btl, ctl);
</span><br>
<span class="quotelev1">&gt; +        return rc;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; @@ -371,14 +431,25 @@
</span><br>
<span class="quotelev1">&gt;                               0,
</span><br>
<span class="quotelev1">&gt;                               &amp;frag-&gt;rdma_length,
</span><br>
<span class="quotelev1">&gt;                               MCA_BTL_DES_FLAGS_BTL_OWNERSHIP | MCA_BTL_DES_SEND_ALWAYS_CALLBACK |
</span><br>
<span class="quotelev1">&gt; -			      MCA_BTL_DES_FLAGS_GET,
</span><br>
<span class="quotelev1">&gt; +                              MCA_BTL_DES_FLAGS_GET,
</span><br>
<span class="quotelev1">&gt;                               &amp;descriptor );
</span><br>
<span class="quotelev1">&gt;     if( OPAL_UNLIKELY(NULL == descriptor) ) {
</span><br>
<span class="quotelev1">&gt; -        frag-&gt;rdma_length = save_size;
</span><br>
<span class="quotelev1">&gt; -        OPAL_THREAD_LOCK(&amp;mca_pml_ob1.lock);
</span><br>
<span class="quotelev1">&gt; -        opal_list_append(&amp;mca_pml_ob1.rdma_pending, (opal_list_item_t*)frag);
</span><br>
<span class="quotelev1">&gt; -        OPAL_THREAD_UNLOCK(&amp;mca_pml_ob1.lock);
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; +        if (frag-&gt;retries &lt; mca_pml_ob1.rdma_retries_limit) {
</span><br>
<span class="quotelev1">&gt; +            frag-&gt;rdma_length = save_size;
</span><br>
<span class="quotelev1">&gt; +            OPAL_THREAD_LOCK(&amp;mca_pml_ob1.lock);
</span><br>
<span class="quotelev1">&gt; +            opal_list_append(&amp;mca_pml_ob1.rdma_pending, (opal_list_item_t*)frag);
</span><br>
<span class="quotelev1">&gt; +            OPAL_THREAD_UNLOCK(&amp;mca_pml_ob1.lock);
</span><br>
<span class="quotelev1">&gt; +            return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; +        } else {
</span><br>
<span class="quotelev1">&gt; +            ompi_proc_t *proc = (ompi_proc_t *) recvreq-&gt;req_recv.req_base.req_proc;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /* tell peer to fall back on send */
</span><br>
<span class="quotelev1">&gt; +            recvreq-&gt;req_send_offset = 0;
</span><br>
<span class="quotelev1">&gt; +            rc = mca_pml_ob1_recv_request_ack_send(proc, frag-&gt;rdma_hdr.hdr_rget.hdr_rndv.hdr_src_req.lval,
</span><br>
<span class="quotelev1">&gt; +                                                   recvreq, recvreq-&gt;req_send_offset, true);
</span><br>
<span class="quotelev1">&gt; +            MCA_PML_OB1_RDMA_FRAG_RETURN(frag);
</span><br>
<span class="quotelev1">&gt; +            return rc;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     descriptor-&gt;des_src = frag-&gt;rdma_segs;
</span><br>
<span class="quotelev1">&gt; @@ -393,6 +464,11 @@
</span><br>
<span class="quotelev1">&gt;     /* queue up get request */
</span><br>
<span class="quotelev1">&gt;     rc = mca_bml_base_get(bml_btl,descriptor);
</span><br>
<span class="quotelev1">&gt;     if( OPAL_UNLIKELY(OMPI_SUCCESS != rc) ) {
</span><br>
<span class="quotelev1">&gt; +        if (OPAL_UNLIKELY(OMPI_ERR_NOT_AVAILABLE == rc)) {
</span><br>
<span class="quotelev1">&gt; +            /* get isn't supported for this transfer. tell peer to fallback on put */
</span><br>
<span class="quotelev1">&gt; +            rc = mca_pml_ob1_init_get_fallback (frag, descriptor);
</span><br>
<span class="quotelev1">&gt; +         }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;         if(OMPI_ERR_OUT_OF_RESOURCE == rc) {
</span><br>
<span class="quotelev1">&gt;             mca_bml_base_free(bml_btl, descriptor);
</span><br>
<span class="quotelev1">&gt;             OPAL_THREAD_LOCK(&amp;mca_pml_ob1.lock);
</span><br>
<span class="quotelev1">&gt; @@ -400,7 +476,7 @@
</span><br>
<span class="quotelev1">&gt;                     (opal_list_item_t*)frag);
</span><br>
<span class="quotelev1">&gt;             OPAL_THREAD_UNLOCK(&amp;mca_pml_ob1.lock);
</span><br>
<span class="quotelev1">&gt;             return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; -        } else {
</span><br>
<span class="quotelev1">&gt; +        } else if (OPAL_UNLIKELY(OMPI_SUCCESS != rc)) {
</span><br>
<span class="quotelev1">&gt;             ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;             orte_errmgr.abort(-1, NULL);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; @@ -551,7 +627,9 @@
</span><br>
<span class="quotelev1">&gt;         orte_errmgr.abort(-1, NULL);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; #endif /* OMPI_CUDA_SUPPORT */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     frag-&gt;rdma_hdr.hdr_rget = *hdr;
</span><br>
<span class="quotelev1">&gt; +    frag-&gt;retries = 0;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;rdma_req = recvreq;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;rdma_ep = bml_endpoint;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;rdma_length = size;
</span><br>
<span class="quotelev1">&gt; @@ -792,7 +870,7 @@
</span><br>
<span class="quotelev1">&gt;         mca_bml_base_prepare_dst(bml_btl, reg, 
</span><br>
<span class="quotelev1">&gt;                                  &amp;recvreq-&gt;req_recv.req_base.req_convertor,
</span><br>
<span class="quotelev1">&gt;                                  MCA_BTL_NO_ORDER, 0, &amp;size, MCA_BTL_DES_FLAGS_BTL_OWNERSHIP |
</span><br>
<span class="quotelev1">&gt; -				 MCA_BTL_DES_FLAGS_PUT, &amp;dst);
</span><br>
<span class="quotelev1">&gt; +                                 MCA_BTL_DES_FLAGS_PUT, &amp;dst);
</span><br>
<span class="quotelev1">&gt;         OPAL_THREAD_UNLOCK(&amp;recvreq-&gt;lock);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         if(OPAL_UNLIKELY(dst == NULL)) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.c	2012-04-24 16:18:56 EDT (Tue, 24 Apr 2012)
</span><br>
<span class="quotelev1">&gt; @@ -264,6 +264,7 @@
</span><br>
<span class="quotelev1">&gt;     MCA_PML_OB1_COMPUTE_SEGMENT_LENGTH( des-&gt;des_src, des-&gt;des_src_cnt,
</span><br>
<span class="quotelev1">&gt;                                         0, req_bytes_delivered );
</span><br>
<span class="quotelev1">&gt;     OPAL_THREAD_ADD_SIZE_T(&amp;sendreq-&gt;req_bytes_delivered, req_bytes_delivered);
</span><br>
<span class="quotelev1">&gt; +    sendreq-&gt;src_des = NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     send_request_pml_complete_check(sendreq);
</span><br>
<span class="quotelev1">&gt;     /* free the descriptor */
</span><br>
<span class="quotelev1">&gt; @@ -639,6 +640,8 @@
</span><br>
<span class="quotelev1">&gt;     bool need_local_cb = false;
</span><br>
<span class="quotelev1">&gt;     int rc;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    sendreq-&gt;src_des = NULL;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     bml_btl = sendreq-&gt;req_rdma[0].bml_btl;
</span><br>
<span class="quotelev1">&gt;     if((sendreq-&gt;req_rdma_cnt == 1) &amp;&amp; (bml_btl-&gt;btl_flags &amp; (MCA_BTL_FLAGS_GET | MCA_BTL_FLAGS_CUDA_GET))) {
</span><br>
<span class="quotelev1">&gt;         mca_mpool_base_registration_t* reg = sendreq-&gt;req_rdma[0].btl_reg;
</span><br>
<span class="quotelev1">&gt; @@ -657,10 +660,8 @@
</span><br>
<span class="quotelev1">&gt;         mca_bml_base_prepare_src( bml_btl, 
</span><br>
<span class="quotelev1">&gt;                                   reg,
</span><br>
<span class="quotelev1">&gt;                                   &amp;sendreq-&gt;req_send.req_base.req_convertor,
</span><br>
<span class="quotelev1">&gt; -                                  MCA_BTL_NO_ORDER,
</span><br>
<span class="quotelev1">&gt; -                                  0,
</span><br>
<span class="quotelev1">&gt; -                                  &amp;size,
</span><br>
<span class="quotelev1">&gt; -                                  MCA_BTL_DES_FLAGS_GET,
</span><br>
<span class="quotelev1">&gt; +                                  MCA_BTL_NO_ORDER, 0, &amp;size,
</span><br>
<span class="quotelev1">&gt; +                                  MCA_BTL_DES_FLAGS_GET | MCA_BTL_DES_FLAGS_BTL_OWNERSHIP,
</span><br>
<span class="quotelev1">&gt;                                   &amp;src );
</span><br>
<span class="quotelev1">&gt;         MEMCHECKER(
</span><br>
<span class="quotelev1">&gt;             memchecker_call(&amp;opal_memchecker_base_mem_noaccess,
</span><br>
<span class="quotelev1">&gt; @@ -676,6 +677,8 @@
</span><br>
<span class="quotelev1">&gt;         src-&gt;des_cbfunc = mca_pml_ob1_rget_completion;
</span><br>
<span class="quotelev1">&gt;         src-&gt;des_cbdata = sendreq;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +        sendreq-&gt;src_des = src;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;         /* allocate space for get hdr + segment list */
</span><br>
<span class="quotelev1">&gt;         mca_bml_base_alloc(bml_btl, &amp;des, MCA_BTL_NO_ORDER,
</span><br>
<span class="quotelev1">&gt;                            sizeof(mca_pml_ob1_rget_hdr_t) +
</span><br>
<span class="quotelev1">&gt; @@ -782,8 +785,9 @@
</span><br>
<span class="quotelev1">&gt;         return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     mca_bml_base_free(bml_btl, des);
</span><br>
<span class="quotelev1">&gt; -    if (NULL != src) {
</span><br>
<span class="quotelev1">&gt; -        mca_bml_base_free (bml_btl, src);
</span><br>
<span class="quotelev1">&gt; +    if (sendreq-&gt;src_des) {
</span><br>
<span class="quotelev1">&gt; +        mca_bml_base_free (bml_btl, sendreq-&gt;src_des);
</span><br>
<span class="quotelev1">&gt; +        sendreq-&gt;src_des = NULL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return rc;
</span><br>
<span class="quotelev1">&gt; @@ -1133,63 +1137,71 @@
</span><br>
<span class="quotelev1">&gt;     MCA_PML_OB1_PROGRESS_PENDING(bml_btl);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -int mca_pml_ob1_send_request_put_frag( mca_pml_ob1_rdma_frag_t* frag )
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    mca_mpool_base_registration_t* reg = NULL;
</span><br>
<span class="quotelev1">&gt; -    mca_bml_base_btl_t* bml_btl = frag-&gt;rdma_bml;
</span><br>
<span class="quotelev1">&gt; -    mca_btl_base_descriptor_t* des;
</span><br>
<span class="quotelev1">&gt; +int mca_pml_ob1_send_request_put_frag( mca_pml_ob1_rdma_frag_t *frag )
</span><br>
<span class="quotelev1">&gt; +{ 
</span><br>
<span class="quotelev1">&gt; +    mca_pml_ob1_send_request_t* sendreq = (mca_pml_ob1_send_request_t*)frag-&gt;rdma_req;
</span><br>
<span class="quotelev1">&gt; +    mca_mpool_base_registration_t *reg = NULL;
</span><br>
<span class="quotelev1">&gt; +    mca_bml_base_btl_t *bml_btl = frag-&gt;rdma_bml;
</span><br>
<span class="quotelev1">&gt; +    mca_btl_base_descriptor_t *des;
</span><br>
<span class="quotelev1">&gt;     size_t save_size = frag-&gt;rdma_length;
</span><br>
<span class="quotelev1">&gt;     int rc;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    /* setup descriptor */
</span><br>
<span class="quotelev1">&gt; -    mca_bml_base_prepare_src( bml_btl, 
</span><br>
<span class="quotelev1">&gt; -                              reg,
</span><br>
<span class="quotelev1">&gt; -                              &amp;frag-&gt;convertor, 
</span><br>
<span class="quotelev1">&gt; -                              MCA_BTL_NO_ORDER,
</span><br>
<span class="quotelev1">&gt; -                              0,
</span><br>
<span class="quotelev1">&gt; -                              &amp;frag-&gt;rdma_length,
</span><br>
<span class="quotelev1">&gt; -                              MCA_BTL_DES_FLAGS_BTL_OWNERSHIP |
</span><br>
<span class="quotelev1">&gt; -                              MCA_BTL_DES_FLAGS_PUT,
</span><br>
<span class="quotelev1">&gt; -                              &amp;des );
</span><br>
<span class="quotelev1">&gt; +    if (OPAL_LIKELY(NULL == sendreq-&gt;src_des)) {
</span><br>
<span class="quotelev1">&gt; +        /* setup descriptor */
</span><br>
<span class="quotelev1">&gt; +        mca_bml_base_prepare_src( bml_btl, 
</span><br>
<span class="quotelev1">&gt; +                                  reg,
</span><br>
<span class="quotelev1">&gt; +                                  &amp;frag-&gt;convertor, 
</span><br>
<span class="quotelev1">&gt; +                                  MCA_BTL_NO_ORDER,
</span><br>
<span class="quotelev1">&gt; +                                  0,
</span><br>
<span class="quotelev1">&gt; +                                  &amp;frag-&gt;rdma_length,
</span><br>
<span class="quotelev1">&gt; +                                  MCA_BTL_DES_FLAGS_BTL_OWNERSHIP |
</span><br>
<span class="quotelev1">&gt; +                                  MCA_BTL_DES_FLAGS_PUT,
</span><br>
<span class="quotelev1">&gt; +                                  &amp;des );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    if( OPAL_UNLIKELY(NULL == des) ) {
</span><br>
<span class="quotelev1">&gt; -        if(frag-&gt;retries &lt; mca_pml_ob1.rdma_put_retries_limit) {
</span><br>
<span class="quotelev1">&gt; -            size_t offset = (size_t)frag-&gt;rdma_hdr.hdr_rdma.hdr_rdma_offset;
</span><br>
<span class="quotelev1">&gt; -            frag-&gt;rdma_length = save_size; 
</span><br>
<span class="quotelev1">&gt; -            opal_convertor_set_position(&amp;frag-&gt;convertor, &amp;offset);
</span><br>
<span class="quotelev1">&gt; -            OPAL_THREAD_LOCK(&amp;mca_pml_ob1.lock);
</span><br>
<span class="quotelev1">&gt; -            opal_list_append(&amp;mca_pml_ob1.rdma_pending, (opal_list_item_t*)frag);
</span><br>
<span class="quotelev1">&gt; -            OPAL_THREAD_UNLOCK(&amp;mca_pml_ob1.lock);
</span><br>
<span class="quotelev1">&gt; -        } else {
</span><br>
<span class="quotelev1">&gt; -            mca_pml_ob1_send_request_t *sendreq =
</span><br>
<span class="quotelev1">&gt; -                (mca_pml_ob1_send_request_t*)frag-&gt;rdma_req;
</span><br>
<span class="quotelev1">&gt; +        if( OPAL_UNLIKELY(NULL == des) ) {
</span><br>
<span class="quotelev1">&gt; +            if(frag-&gt;retries &lt; mca_pml_ob1.rdma_retries_limit) {
</span><br>
<span class="quotelev1">&gt; +                size_t offset = (size_t)frag-&gt;rdma_hdr.hdr_rdma.hdr_rdma_offset;
</span><br>
<span class="quotelev1">&gt; +                frag-&gt;rdma_length = save_size; 
</span><br>
<span class="quotelev1">&gt; +                opal_convertor_set_position(&amp;frag-&gt;convertor, &amp;offset);
</span><br>
<span class="quotelev1">&gt; +                OPAL_THREAD_LOCK(&amp;mca_pml_ob1.lock);
</span><br>
<span class="quotelev1">&gt; +                opal_list_append(&amp;mca_pml_ob1.rdma_pending, (opal_list_item_t*)frag);
</span><br>
<span class="quotelev1">&gt; +                OPAL_THREAD_UNLOCK(&amp;mca_pml_ob1.lock);
</span><br>
<span class="quotelev1">&gt; +            } else {
</span><br>
<span class="quotelev1">&gt; +                mca_pml_ob1_send_request_t *sendreq =
</span><br>
<span class="quotelev1">&gt; +                    (mca_pml_ob1_send_request_t*)frag-&gt;rdma_req;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                /* tell receiver to unregister memory */
</span><br>
<span class="quotelev1">&gt; +                mca_pml_ob1_send_fin(sendreq-&gt;req_send.req_base.req_proc,
</span><br>
<span class="quotelev1">&gt; +                                     bml_btl, frag-&gt;rdma_hdr.hdr_rdma.hdr_des,
</span><br>
<span class="quotelev1">&gt; +                                     MCA_BTL_NO_ORDER, 1);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                /* send fragment by copy in/out */
</span><br>
<span class="quotelev1">&gt; +                mca_pml_ob1_send_request_copy_in_out(sendreq,
</span><br>
<span class="quotelev1">&gt; +                                                     frag-&gt;rdma_hdr.hdr_rdma.hdr_rdma_offset, frag-&gt;rdma_length);
</span><br>
<span class="quotelev1">&gt; +                /* if a pointer to a receive request is not set it means that
</span><br>
<span class="quotelev1">&gt; +                 * ACK was not yet received. Don't schedule sends before ACK */
</span><br>
<span class="quotelev1">&gt; +                if(NULL != sendreq-&gt;req_recv.pval)
</span><br>
<span class="quotelev1">&gt; +                    mca_pml_ob1_send_request_schedule(sendreq);
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -            /* tell receiver to unregister memory */
</span><br>
<span class="quotelev1">&gt; -            mca_pml_ob1_send_fin(sendreq-&gt;req_send.req_base.req_proc,
</span><br>
<span class="quotelev1">&gt; -                    bml_btl, frag-&gt;rdma_hdr.hdr_rdma.hdr_des,
</span><br>
<span class="quotelev1">&gt; -                    MCA_BTL_NO_ORDER, 1);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -            /* send fragment by copy in/out */
</span><br>
<span class="quotelev1">&gt; -            mca_pml_ob1_send_request_copy_in_out(sendreq,
</span><br>
<span class="quotelev1">&gt; -                    frag-&gt;rdma_hdr.hdr_rdma.hdr_rdma_offset, frag-&gt;rdma_length);
</span><br>
<span class="quotelev1">&gt; -            /* if a pointer to a receive request is not set it means that
</span><br>
<span class="quotelev1">&gt; -             * ACK was not yet received. Don't schedule sends before ACK */
</span><br>
<span class="quotelev1">&gt; -            if(NULL != sendreq-&gt;req_recv.pval)
</span><br>
<span class="quotelev1">&gt; -                mca_pml_ob1_send_request_schedule(sendreq);
</span><br>
<span class="quotelev1">&gt; +            return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +        /* already have a source descriptor */
</span><br>
<span class="quotelev1">&gt; +        des = sendreq-&gt;src_des;
</span><br>
<span class="quotelev1">&gt; +        sendreq-&gt;src_des = NULL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; -    des-&gt;des_dst = frag-&gt;rdma_segs;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    des-&gt;des_dst     = frag-&gt;rdma_segs;
</span><br>
<span class="quotelev1">&gt;     des-&gt;des_dst_cnt = frag-&gt;rdma_hdr.hdr_rdma.hdr_seg_cnt;
</span><br>
<span class="quotelev1">&gt; -    des-&gt;des_cbfunc = mca_pml_ob1_put_completion;
</span><br>
<span class="quotelev1">&gt; -    des-&gt;des_cbdata = frag;
</span><br>
<span class="quotelev1">&gt; +    des-&gt;des_cbfunc  = mca_pml_ob1_put_completion;
</span><br>
<span class="quotelev1">&gt; +    des-&gt;des_cbdata  = frag;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     PERUSE_TRACE_COMM_OMPI_EVENT( PERUSE_COMM_REQ_XFER_CONTINUE,
</span><br>
<span class="quotelev1">&gt;                                   &amp;(((mca_pml_ob1_send_request_t*)frag-&gt;rdma_req)-&gt;req_send.req_base), save_size, PERUSE_SEND );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     rc = mca_bml_base_put(bml_btl, des);
</span><br>
<span class="quotelev1">&gt; -    if( OPAL_UNLIKELY(OMPI_SUCCESS != rc) ) {
</span><br>
<span class="quotelev1">&gt; +    if (OPAL_UNLIKELY(OMPI_SUCCESS != rc)) {
</span><br>
<span class="quotelev1">&gt;         mca_bml_base_free(bml_btl, des);
</span><br>
<span class="quotelev1">&gt;         frag-&gt;rdma_length = save_size;
</span><br>
<span class="quotelev1">&gt;         if(OMPI_ERR_OUT_OF_RESOURCE == rc) {
</span><br>
<span class="quotelev1">&gt; @@ -1203,6 +1215,7 @@
</span><br>
<span class="quotelev1">&gt;             orte_errmgr.abort(-1, NULL);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -1261,21 +1274,25 @@
</span><br>
<span class="quotelev1">&gt;     frag-&gt;reg = NULL;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;retries = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    if (OPAL_UNLIKELY(NULL != sendreq-&gt;src_des)) {
</span><br>
<span class="quotelev1">&gt; +        /* get fallback path */
</span><br>
<span class="quotelev1">&gt; +        sendreq-&gt;req_state = 0;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     /* lookup the corresponding registration */
</span><br>
<span class="quotelev1">&gt;     for(i=0; i&lt;sendreq-&gt;req_rdma_cnt; i++) {
</span><br>
<span class="quotelev1">&gt; -       if(sendreq-&gt;req_rdma[i].bml_btl == frag-&gt;rdma_bml) {
</span><br>
<span class="quotelev1">&gt; -           frag-&gt;reg = sendreq-&gt;req_rdma[i].btl_reg;
</span><br>
<span class="quotelev1">&gt; -           break;
</span><br>
<span class="quotelev1">&gt; -       }
</span><br>
<span class="quotelev1">&gt; -    } 
</span><br>
<span class="quotelev1">&gt; +        if(sendreq-&gt;req_rdma[i].bml_btl == frag-&gt;rdma_bml) {
</span><br>
<span class="quotelev1">&gt; +            frag-&gt;reg = sendreq-&gt;req_rdma[i].btl_reg;
</span><br>
<span class="quotelev1">&gt; +            break;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /*  RDMA writes may proceed in parallel to send and to each other, so
</span><br>
<span class="quotelev1">&gt;      *  create clone of the convertor for each RDMA fragment
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     size = hdr-&gt;hdr_rdma_offset;
</span><br>
<span class="quotelev1">&gt;     opal_convertor_clone_with_position(&amp;sendreq-&gt;req_send.req_base.req_convertor,
</span><br>
<span class="quotelev1">&gt; -            &amp;frag-&gt;convertor, 0, &amp;size);
</span><br>
<span class="quotelev1">&gt; +                                       &amp;frag-&gt;convertor, 0, &amp;size);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mca_pml_ob1_send_request_put_frag(frag);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.h	2012-04-24 16:18:56 EDT (Tue, 24 Apr 2012)
</span><br>
<span class="quotelev1">&gt; @@ -54,6 +54,7 @@
</span><br>
<span class="quotelev1">&gt;     mca_pml_ob1_send_pending_t req_pending;
</span><br>
<span class="quotelev1">&gt;     opal_mutex_t req_send_range_lock; 
</span><br>
<span class="quotelev1">&gt;     opal_list_t req_send_ranges;
</span><br>
<span class="quotelev1">&gt; +    mca_btl_base_descriptor_t *src_des;
</span><br>
<span class="quotelev1">&gt;     mca_pml_ob1_com_btl_t req_rdma[1]; 
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; typedef struct mca_pml_ob1_send_request_t mca_pml_ob1_send_request_t;
</span><br>
<span class="quotelev1">&gt; @@ -129,6 +130,7 @@
</span><br>
<span class="quotelev1">&gt;             OMPI_FREE_LIST_WAIT(&amp;mca_pml_base_send_requests, item, rc); \
</span><br>
<span class="quotelev1">&gt;             sendreq = (mca_pml_ob1_send_request_t*)item;                \
</span><br>
<span class="quotelev1">&gt;             sendreq-&gt;req_send.req_base.req_proc = proc;                 \
</span><br>
<span class="quotelev1">&gt; +            sendreq-&gt;src_des = NULL;                                    \
</span><br>
<span class="quotelev1">&gt;         }                                                               \
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="10916.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26329"</a>
<li><strong>Previous message:</strong> <a href="10914.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10916.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26329"</a>
<li><strong>Reply:</strong> <a href="10916.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26329"</a>
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
