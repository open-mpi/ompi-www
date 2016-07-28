<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 16 10:08:59 2007" -->
<!-- isoreceived="20070516140859" -->
<!-- sent="Wed, 16 May 2007 16:08:53 +0200" -->
<!-- isosent="20070516140853" -->
<!-- name="Luis Kornblueh" -->
<!-- email="luis.kornblueh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux" -->
<!-- id="20070516140853.GA18602_at_creus.mpi.zmaw.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F11FDFB-59F5-4A27-A64E-63E91E321919_at_cisco.com" -->
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
<strong>Date:</strong> 2007-05-16 10:08:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3283.php">Jeff Squyres: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
<li><strong>Previous message:</strong> <a href="3281.php">Jeff Squyres: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
<li><strong>In reply to:</strong> <a href="3281.php">Jeff Squyres: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3283.php">Jeff Squyres: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
<li><strong>Reply:</strong> <a href="3283.php">Jeff Squyres: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>well we currently try to change over to ofed. The same time we try to change
<br>
to openmpi-1.2.1 from openpi-1.2b3, unfortunately we get a SEGV in mpiexec ;-)
<br>
<p>Cheerio,
<br>
Luis
<br>
<p><span class="quotelev1">&gt; Greetings and thanks for the patch!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We actually made this change on the development trunk but never moved  
</span><br>
<span class="quotelev1">&gt; it to the release branch.  See <a href="https://svn.open-mpi.org/trac/ompi/">https://svn.open-mpi.org/trac/ompi/</a> 
</span><br>
<span class="quotelev1">&gt; changeset/13709
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that we accidentally used a gcc-ism in the mvapi BTL  
</span><br>
<span class="quotelev1">&gt; (i.e., the older InfiniBand driver).  We didn't think too many people  
</span><br>
<span class="quotelev1">&gt; were using the mvapi BTL, and therefore didn't move it over to the  
</span><br>
<span class="quotelev1">&gt; v1.2 branch.  Sorry about that!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have a strong requirement for using mvapi?  Specifically, is  
</span><br>
<span class="quotelev1">&gt; there any chance that you can upgrade to OFED?  I ask because all  
</span><br>
<span class="quotelev1">&gt; current and future OMPI work for InfiniBand is being done in the  
</span><br>
<span class="quotelev1">&gt; openib BTL (not the mvapi BTL -- other than this fix, we haven't made  
</span><br>
<span class="quotelev1">&gt; any changes to the mvapi BTL for a long, long time).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See <a href="http://www.open-mpi.org/faq/?category=openfabrics#vapi-support">http://www.open-mpi.org/faq/?category=openfabrics#vapi-support</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 16, 2007, at 12:08 AM, Luis Kornblueh wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi everybody,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; we tried to install openmpi with Sun cc on Linux. IT required some
</span><br>
<span class="quotelev2">&gt; &gt; patches. I add the necessary pathces here. I hope you can include
</span><br>
<span class="quotelev2">&gt; &gt; those.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheerio,
</span><br>
<span class="quotelev2">&gt; &gt; Luis
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff -Naur openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi.c  
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi.c
</span><br>
<span class="quotelev2">&gt; &gt; --- openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi.c	2007-04-19  
</span><br>
<span class="quotelev2">&gt; &gt; 18:30:54.000000000 +0200
</span><br>
<span class="quotelev2">&gt; &gt; +++ openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi.c	2007-05-09  
</span><br>
<span class="quotelev2">&gt; &gt; 14:33:24.000000000 +0200
</span><br>
<span class="quotelev2">&gt; &gt; @@ -463,7 +463,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;      mca_btl_mvapi_frag_t* frag = (mca_btl_mvapi_frag_t*)descriptor;
</span><br>
<span class="quotelev2">&gt; &gt;      frag-&gt;endpoint = endpoint;
</span><br>
<span class="quotelev2">&gt; &gt;      frag-&gt;hdr-&gt;tag = tag;
</span><br>
<span class="quotelev2">&gt; &gt; -    frag-&gt;sr_desc.opcode = VAPI_SEND;
</span><br>
<span class="quotelev2">&gt; &gt; +    frag-&gt;desc.sr_desc.opcode = VAPI_SEND;
</span><br>
<span class="quotelev2">&gt; &gt;      return mca_btl_mvapi_endpoint_send(endpoint, frag);
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -481,7 +481,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      /* setup for queued requests */
</span><br>
<span class="quotelev2">&gt; &gt;      frag-&gt;endpoint = endpoint;
</span><br>
<span class="quotelev2">&gt; &gt; -    frag-&gt;sr_desc.opcode = VAPI_RDMA_WRITE;
</span><br>
<span class="quotelev2">&gt; &gt; +    frag-&gt;desc.sr_desc.opcode = VAPI_RDMA_WRITE;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      /* check for a send wqe */
</span><br>
<span class="quotelev2">&gt; &gt;      if (OPAL_THREAD_ADD32(&amp;endpoint-&gt;sd_wqe_lp,-1) &lt; 0) {
</span><br>
<span class="quotelev2">&gt; &gt; @@ -494,12 +494,12 @@
</span><br>
<span class="quotelev2">&gt; &gt;      /* post descriptor */
</span><br>
<span class="quotelev2">&gt; &gt;      } else {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -        frag-&gt;sr_desc.remote_qp = endpoint-&gt;rem_info.rem_qp_num_lp;
</span><br>
<span class="quotelev2">&gt; &gt; -        frag-&gt;sr_desc.remote_addr = (VAPI_virt_addr_t) frag- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;base.des_dst-&gt;seg_addr.lval;
</span><br>
<span class="quotelev2">&gt; &gt; -        frag-&gt;sr_desc.r_key = frag-&gt;base.des_dst-&gt;seg_key.key32[0];
</span><br>
<span class="quotelev2">&gt; &gt; +        frag-&gt;desc.sr_desc.remote_qp = endpoint- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;rem_info.rem_qp_num_lp;
</span><br>
<span class="quotelev2">&gt; &gt; +        frag-&gt;desc.sr_desc.remote_addr = (VAPI_virt_addr_t) frag- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;base.des_dst-&gt;seg_addr.lval;
</span><br>
<span class="quotelev2">&gt; &gt; +        frag-&gt;desc.sr_desc.r_key = frag-&gt;base.des_dst- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;seg_key.key32[0];
</span><br>
<span class="quotelev2">&gt; &gt;          frag-&gt;sg_entry.addr = (VAPI_virt_addr_t) (MT_virt_addr_t)  
</span><br>
<span class="quotelev2">&gt; &gt; frag-&gt;base.des_src-&gt;seg_addr.pval;
</span><br>
<span class="quotelev2">&gt; &gt;          frag-&gt;sg_entry.len  = frag-&gt;base.des_src-&gt;seg_len;
</span><br>
<span class="quotelev2">&gt; &gt; -        if(VAPI_OK != VAPI_post_sr(mvapi_btl-&gt;nic, endpoint- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;lcl_qp_hndl_lp, &amp;frag-&gt;sr_desc)) {
</span><br>
<span class="quotelev2">&gt; &gt; +        if(VAPI_OK != VAPI_post_sr(mvapi_btl-&gt;nic, endpoint- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;lcl_qp_hndl_lp, &amp;frag-&gt;desc.sr_desc)) {
</span><br>
<span class="quotelev2">&gt; &gt;              rc =  OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt; &gt;          } else {
</span><br>
<span class="quotelev2">&gt; &gt;              rc = OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -531,7 +531,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;      mca_btl_mvapi_frag_t* frag = (mca_btl_mvapi_frag_t*) descriptor;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      frag-&gt;endpoint = endpoint;
</span><br>
<span class="quotelev2">&gt; &gt; -    frag-&gt;sr_desc.opcode = VAPI_RDMA_READ;
</span><br>
<span class="quotelev2">&gt; &gt; +    frag-&gt;desc.sr_desc.opcode = VAPI_RDMA_READ;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* check for a send wqe */
</span><br>
<span class="quotelev2">&gt; &gt;      if (OPAL_THREAD_ADD32(&amp;endpoint-&gt;sd_wqe_lp,-1) &lt; 0) {
</span><br>
<span class="quotelev2">&gt; &gt; @@ -555,13 +555,13 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      } else {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -        frag-&gt;sr_desc.remote_qp = endpoint-&gt;rem_info.rem_qp_num_lp;
</span><br>
<span class="quotelev2">&gt; &gt; -        frag-&gt;sr_desc.remote_addr = (VAPI_virt_addr_t) frag- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;base.des_src-&gt;seg_addr.lval;
</span><br>
<span class="quotelev2">&gt; &gt; -        frag-&gt;sr_desc.r_key = frag-&gt;base.des_src-&gt;seg_key.key32[0];
</span><br>
<span class="quotelev2">&gt; &gt; +        frag-&gt;desc.sr_desc.remote_qp = endpoint- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;rem_info.rem_qp_num_lp;
</span><br>
<span class="quotelev2">&gt; &gt; +        frag-&gt;desc.sr_desc.remote_addr = (VAPI_virt_addr_t) frag- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;base.des_src-&gt;seg_addr.lval;
</span><br>
<span class="quotelev2">&gt; &gt; +        frag-&gt;desc.sr_desc.r_key = frag-&gt;base.des_src- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;seg_key.key32[0];
</span><br>
<span class="quotelev2">&gt; &gt;          frag-&gt;sg_entry.addr = (VAPI_virt_addr_t) (MT_virt_addr_t)  
</span><br>
<span class="quotelev2">&gt; &gt; frag-&gt;base.des_dst-&gt;seg_addr.pval;
</span><br>
<span class="quotelev2">&gt; &gt;          frag-&gt;sg_entry.len  = frag-&gt;base.des_dst-&gt;seg_len;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -        if(VAPI_OK != VAPI_post_sr(mvapi_btl-&gt;nic, endpoint- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;lcl_qp_hndl_lp, &amp;frag-&gt;sr_desc)) {
</span><br>
<span class="quotelev2">&gt; &gt; +        if(VAPI_OK != VAPI_post_sr(mvapi_btl-&gt;nic, endpoint- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;lcl_qp_hndl_lp, &amp;frag-&gt;desc.sr_desc)) {
</span><br>
<span class="quotelev2">&gt; &gt;              rc =  OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt; &gt;          } else {
</span><br>
<span class="quotelev2">&gt; &gt;              rc = OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; diff -Naur openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi_endpoint.c  
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi_endpoint.c
</span><br>
<span class="quotelev2">&gt; &gt; --- openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi_endpoint.c	 
</span><br>
<span class="quotelev2">&gt; &gt; 2007-04-19 18:30:54.000000000 +0200
</span><br>
<span class="quotelev2">&gt; &gt; +++ openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi_endpoint.c	 
</span><br>
<span class="quotelev2">&gt; &gt; 2007-05-09 14:45:31.000000000 +0200
</span><br>
<span class="quotelev2">&gt; &gt; @@ -143,7 +143,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;          }
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    frag-&gt;sr_desc.remote_qkey = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +    frag-&gt;desc.sr_desc.remote_qkey = 0;
</span><br>
<span class="quotelev2">&gt; &gt;      frag-&gt;sg_entry.addr = (VAPI_virt_addr_t) (MT_virt_addr_t) frag- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;hdr;
</span><br>
<span class="quotelev2">&gt; &gt;      frag-&gt;sg_entry.len =
</span><br>
<span class="quotelev2">&gt; &gt;          frag-&gt;segment.seg_len + sizeof(mca_btl_mvapi_header_t) +
</span><br>
<span class="quotelev2">&gt; &gt; @@ -153,14 +153,14 @@
</span><br>
<span class="quotelev2">&gt; &gt;          mca_btl_mvapi_footer_t* ftr =
</span><br>
<span class="quotelev2">&gt; &gt;              (mca_btl_mvapi_footer_t*)(((char*)frag- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;segment.seg_addr.pval) +
</span><br>
<span class="quotelev2">&gt; &gt;                                         frag-&gt;segment.seg_len);
</span><br>
<span class="quotelev2">&gt; &gt; -        frag-&gt;sr_desc.opcode = VAPI_RDMA_WRITE;
</span><br>
<span class="quotelev2">&gt; &gt; +        frag-&gt;desc.sr_desc.opcode = VAPI_RDMA_WRITE;
</span><br>
<span class="quotelev2">&gt; &gt;          MCA_BTL_MVAPI_RDMA_FRAG_SET_SIZE(ftr, frag-&gt;sg_entry.len);
</span><br>
<span class="quotelev2">&gt; &gt;          MCA_BTL_MVAPI_RDMA_MAKE_LOCAL(ftr);
</span><br>
<span class="quotelev2">&gt; &gt;  #ifdef OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev2">&gt; &gt;          ftr-&gt;seq = endpoint-&gt;eager_rdma_remote.seq++;
</span><br>
<span class="quotelev2">&gt; &gt;  #endif
</span><br>
<span class="quotelev2">&gt; &gt; -        frag-&gt;sr_desc.r_key = (VAPI_rkey_t)endpoint- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;eager_rdma_remote.rkey;
</span><br>
<span class="quotelev2">&gt; &gt; -        frag-&gt;sr_desc.remote_addr = (VAPI_virt_addr_t)
</span><br>
<span class="quotelev2">&gt; &gt; +        frag-&gt;desc.sr_desc.r_key = (VAPI_rkey_t)endpoint- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;eager_rdma_remote.rkey;
</span><br>
<span class="quotelev2">&gt; &gt; +        frag-&gt;desc.sr_desc.remote_addr = (VAPI_virt_addr_t)
</span><br>
<span class="quotelev2">&gt; &gt;              endpoint-&gt;eager_rdma_remote.base.lval +
</span><br>
<span class="quotelev2">&gt; &gt;              endpoint-&gt;eager_rdma_remote.head *
</span><br>
<span class="quotelev2">&gt; &gt;              mvapi_btl-&gt;eager_rdma_frag_size +
</span><br>
<span class="quotelev2">&gt; &gt; @@ -168,17 +168,17 @@
</span><br>
<span class="quotelev2">&gt; &gt;              sizeof(mca_btl_mvapi_header_t) +
</span><br>
<span class="quotelev2">&gt; &gt;              frag-&gt;size +
</span><br>
<span class="quotelev2">&gt; &gt;              sizeof(mca_btl_mvapi_footer_t);
</span><br>
<span class="quotelev2">&gt; &gt; -        frag-&gt;sr_desc.remote_addr -= frag-&gt;sg_entry.len;
</span><br>
<span class="quotelev2">&gt; &gt; +        frag-&gt;desc.sr_desc.remote_addr -= frag-&gt;sg_entry.len;
</span><br>
<span class="quotelev2">&gt; &gt;          MCA_BTL_MVAPI_RDMA_NEXT_INDEX (endpoint- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;eager_rdma_remote.head);
</span><br>
<span class="quotelev2">&gt; &gt;      } else {
</span><br>
<span class="quotelev2">&gt; &gt; -        frag-&gt;sr_desc.opcode = VAPI_SEND;
</span><br>
<span class="quotelev2">&gt; &gt; +        frag-&gt;desc.sr_desc.opcode = VAPI_SEND;
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      if(frag-&gt;sg_entry.len &lt;= mvapi_btl-&gt;ib_inline_max) {
</span><br>
<span class="quotelev2">&gt; &gt; -        ret = EVAPI_post_inline_sr(mvapi_btl-&gt;nic, qp_hndl, &amp;frag- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;sr_desc);
</span><br>
<span class="quotelev2">&gt; &gt; +        ret = EVAPI_post_inline_sr(mvapi_btl-&gt;nic, qp_hndl, &amp;frag- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;desc.sr_desc);
</span><br>
<span class="quotelev2">&gt; &gt;      } else {
</span><br>
<span class="quotelev2">&gt; &gt; -        ret = VAPI_post_sr(mvapi_btl-&gt;nic, qp_hndl, &amp;frag-&gt;sr_desc);
</span><br>
<span class="quotelev2">&gt; &gt; +        ret = VAPI_post_sr(mvapi_btl-&gt;nic, qp_hndl, &amp;frag- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;desc.sr_desc);
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      if(VAPI_OK != ret) {
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1072,15 +1072,15 @@
</span><br>
<span class="quotelev2">&gt; &gt;      OPAL_THREAD_ADD32(&amp;endpoint-&gt;rd_credits_lp, -frag-&gt;hdr-&gt;credits);
</span><br>
<span class="quotelev2">&gt; &gt;      ((mca_btl_mvapi_control_header_t *)frag- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;segment.seg_addr.pval)-&gt;type = MCA_BTL_MVAPI_CONTROL_NOOP;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    frag-&gt;sr_desc.opcode = VAPI_SEND;
</span><br>
<span class="quotelev2">&gt; &gt; +    frag-&gt;desc.sr_desc.opcode = VAPI_SEND;
</span><br>
<span class="quotelev2">&gt; &gt;      frag-&gt;sg_entry.addr = (VAPI_virt_addr_t) (MT_virt_addr_t) frag- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;hdr;
</span><br>
<span class="quotelev2">&gt; &gt;      frag-&gt;sg_entry.len = sizeof(mca_btl_mvapi_header_t) +
</span><br>
<span class="quotelev2">&gt; &gt;          sizeof(mca_btl_mvapi_control_header_t);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      if(sizeof(mca_btl_mvapi_header_t) &lt;= mvapi_btl-&gt;ib_inline_max) {
</span><br>
<span class="quotelev2">&gt; &gt; -        ret = EVAPI_post_inline_sr(mvapi_btl-&gt;nic, endpoint- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;lcl_qp_hndl_lp, &amp;frag-&gt;sr_desc);
</span><br>
<span class="quotelev2">&gt; &gt; +        ret = EVAPI_post_inline_sr(mvapi_btl-&gt;nic, endpoint- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;lcl_qp_hndl_lp, &amp;frag-&gt;desc.sr_desc);
</span><br>
<span class="quotelev2">&gt; &gt;      } else {
</span><br>
<span class="quotelev2">&gt; &gt; -        ret = VAPI_post_sr(mvapi_btl-&gt;nic, endpoint- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;lcl_qp_hndl_lp, &amp;frag-&gt;sr_desc);
</span><br>
<span class="quotelev2">&gt; &gt; +        ret = VAPI_post_sr(mvapi_btl-&gt;nic, endpoint- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;lcl_qp_hndl_lp, &amp;frag-&gt;desc.sr_desc);
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;      if(ret != VAPI_SUCCESS) {
</span><br>
<span class="quotelev2">&gt; &gt;          OPAL_THREAD_ADD32(&amp;endpoint-&gt;sd_credits_lp, -1);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1151,15 +1151,15 @@
</span><br>
<span class="quotelev2">&gt; &gt;      ((mca_btl_mvapi_control_header_t *)frag- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;segment.seg_addr.pval)-&gt;type = MCA_BTL_MVAPI_CONTROL_NOOP;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    frag-&gt;sr_desc.opcode = VAPI_SEND;
</span><br>
<span class="quotelev2">&gt; &gt; +    frag-&gt;desc.sr_desc.opcode = VAPI_SEND;
</span><br>
<span class="quotelev2">&gt; &gt;      frag-&gt;sg_entry.addr = (VAPI_virt_addr_t) (MT_virt_addr_t) frag- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;hdr;
</span><br>
<span class="quotelev2">&gt; &gt;      frag-&gt;sg_entry.len = sizeof(mca_btl_mvapi_header_t) +
</span><br>
<span class="quotelev2">&gt; &gt;          sizeof(mca_btl_mvapi_control_header_t);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      if(sizeof(mca_btl_mvapi_header_t) &lt;= mvapi_btl-&gt;ib_inline_max) {
</span><br>
<span class="quotelev2">&gt; &gt; -        ret = EVAPI_post_inline_sr(mvapi_btl-&gt;nic, endpoint- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;lcl_qp_hndl_hp, &amp;frag-&gt;sr_desc);
</span><br>
<span class="quotelev2">&gt; &gt; +        ret = EVAPI_post_inline_sr(mvapi_btl-&gt;nic, endpoint- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;lcl_qp_hndl_hp, &amp;frag-&gt;desc.sr_desc);
</span><br>
<span class="quotelev2">&gt; &gt;      } else {
</span><br>
<span class="quotelev2">&gt; &gt; -        ret = VAPI_post_sr(mvapi_btl-&gt;nic, endpoint- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;lcl_qp_hndl_hp, &amp;frag-&gt;sr_desc);
</span><br>
<span class="quotelev2">&gt; &gt; +        ret = VAPI_post_sr(mvapi_btl-&gt;nic, endpoint- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;lcl_qp_hndl_hp, &amp;frag-&gt;desc.sr_desc);
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;      if(ret != VAPI_SUCCESS) {
</span><br>
<span class="quotelev2">&gt; &gt;          OPAL_THREAD_ADD32(&amp;endpoint-&gt;sd_credits_lp, -1);
</span><br>
<span class="quotelev2">&gt; &gt; diff -Naur openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi_endpoint.h  
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi_endpoint.h
</span><br>
<span class="quotelev2">&gt; &gt; --- openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi_endpoint.h	 
</span><br>
<span class="quotelev2">&gt; &gt; 2007-04-19 18:30:54.000000000 +0200
</span><br>
<span class="quotelev2">&gt; &gt; +++ openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi_endpoint.h	 
</span><br>
<span class="quotelev2">&gt; &gt; 2007-05-09 14:38:43.000000000 +0200
</span><br>
<span class="quotelev2">&gt; &gt; @@ -234,7 +234,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;          frag-&gt;sg_entry.len = frag-&gt;size + \
</span><br>
<span class="quotelev2">&gt; &gt;              ((unsigned char*) frag-&gt;segment.seg_addr.pval-  \
</span><br>
<span class="quotelev2">&gt; &gt;               (unsigned char*) frag-&gt;hdr);  \
</span><br>
<span class="quotelev2">&gt; &gt; -       desc_post[i] = frag-&gt;rr_desc; \
</span><br>
<span class="quotelev2">&gt; &gt; +       desc_post[i] = frag-&gt;desc.rr_desc; \
</span><br>
<span class="quotelev2">&gt; &gt;      }\
</span><br>
<span class="quotelev2">&gt; &gt;      rc = EVAPI_post_rr_list( nic, \
</span><br>
<span class="quotelev2">&gt; &gt;                               qp, \
</span><br>
<span class="quotelev2">&gt; &gt; diff -Naur openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi_frag.c  
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi_frag.c
</span><br>
<span class="quotelev2">&gt; &gt; --- openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi_frag.c	2007-04-19  
</span><br>
<span class="quotelev2">&gt; &gt; 18:30:54.000000000 +0200
</span><br>
<span class="quotelev2">&gt; &gt; +++ openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi_frag.c	 
</span><br>
<span class="quotelev2">&gt; &gt; 2007-05-09 14:47:38.000000000 +0200
</span><br>
<span class="quotelev2">&gt; &gt; @@ -43,12 +43,12 @@
</span><br>
<span class="quotelev2">&gt; &gt;      frag-&gt;base.des_dst = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;      frag-&gt;base.des_dst_cnt = 0;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    frag-&gt;sr_desc.comp_type = VAPI_SIGNALED;
</span><br>
<span class="quotelev2">&gt; &gt; -    frag-&gt;sr_desc.opcode = VAPI_SEND;
</span><br>
<span class="quotelev2">&gt; &gt; -    frag-&gt;sr_desc.remote_qkey = 0;
</span><br>
<span class="quotelev2">&gt; &gt; -    frag-&gt;sr_desc.sg_lst_len = 1;
</span><br>
<span class="quotelev2">&gt; &gt; -    frag-&gt;sr_desc.sg_lst_p = &amp;frag-&gt;sg_entry;
</span><br>
<span class="quotelev2">&gt; &gt; -    frag-&gt;sr_desc.id = (VAPI_virt_addr_t) (MT_virt_addr_t) frag;
</span><br>
<span class="quotelev2">&gt; &gt; +    frag-&gt;desc.sr_desc.comp_type = VAPI_SIGNALED;
</span><br>
<span class="quotelev2">&gt; &gt; +    frag-&gt;desc.sr_desc.opcode = VAPI_SEND;
</span><br>
<span class="quotelev2">&gt; &gt; +    frag-&gt;desc.sr_desc.remote_qkey = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +    frag-&gt;desc.sr_desc.sg_lst_len = 1;
</span><br>
<span class="quotelev2">&gt; &gt; +    frag-&gt;desc.sr_desc.sg_lst_p = &amp;frag-&gt;sg_entry;
</span><br>
<span class="quotelev2">&gt; &gt; +    frag-&gt;desc.sr_desc.id = (VAPI_virt_addr_t) (MT_virt_addr_t) frag;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -61,11 +61,11 @@
</span><br>
<span class="quotelev2">&gt; &gt;      frag-&gt;base.des_src = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;      frag-&gt;base.des_src_cnt = 0;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    frag-&gt;rr_desc.comp_type = VAPI_SIGNALED;
</span><br>
<span class="quotelev2">&gt; &gt; -    frag-&gt;rr_desc.opcode = VAPI_RECEIVE;
</span><br>
<span class="quotelev2">&gt; &gt; -    frag-&gt;rr_desc.sg_lst_len = 1;
</span><br>
<span class="quotelev2">&gt; &gt; -    frag-&gt;rr_desc.sg_lst_p = &amp;frag-&gt;sg_entry;
</span><br>
<span class="quotelev2">&gt; &gt; -    frag-&gt;rr_desc.id = (VAPI_virt_addr_t) (MT_virt_addr_t) frag;
</span><br>
<span class="quotelev2">&gt; &gt; +    frag-&gt;desc.rr_desc.comp_type = VAPI_SIGNALED;
</span><br>
<span class="quotelev2">&gt; &gt; +    frag-&gt;desc.rr_desc.opcode = VAPI_RECEIVE;
</span><br>
<span class="quotelev2">&gt; &gt; +    frag-&gt;desc.rr_desc.sg_lst_len = 1;
</span><br>
<span class="quotelev2">&gt; &gt; +    frag-&gt;desc.rr_desc.sg_lst_p = &amp;frag-&gt;sg_entry;
</span><br>
<span class="quotelev2">&gt; &gt; +    frag-&gt;desc.rr_desc.id = (VAPI_virt_addr_t) (MT_virt_addr_t) frag;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt; diff -Naur openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi_frag.h  
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi_frag.h
</span><br>
<span class="quotelev2">&gt; &gt; --- openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi_frag.h	2007-04-19  
</span><br>
<span class="quotelev2">&gt; &gt; 18:30:54.000000000 +0200
</span><br>
<span class="quotelev2">&gt; &gt; +++ openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi_frag.h	 
</span><br>
<span class="quotelev2">&gt; &gt; 2007-05-09 14:31:08.000000000 +0200
</span><br>
<span class="quotelev2">&gt; &gt; @@ -92,7 +92,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;      union{
</span><br>
<span class="quotelev2">&gt; &gt;          VAPI_rr_desc_t rr_desc;
</span><br>
<span class="quotelev2">&gt; &gt;          VAPI_sr_desc_t sr_desc;
</span><br>
<span class="quotelev2">&gt; &gt; -    };
</span><br>
<span class="quotelev2">&gt; &gt; +    } desc;
</span><br>
<span class="quotelev2">&gt; &gt;      VAPI_sg_lst_entry_t sg_entry;
</span><br>
<span class="quotelev2">&gt; &gt;      mca_btl_mvapi_header_t *hdr;
</span><br>
<span class="quotelev2">&gt; &gt;      mca_btl_mvapi_footer_t *ftr;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -165,7 +165,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  #define MCA_BTL_IB_FRAG_PROGRESS(frag) \
</span><br>
<span class="quotelev2">&gt; &gt;  do { \
</span><br>
<span class="quotelev2">&gt; &gt; -    switch(frag-&gt;sr_desc.opcode) { \
</span><br>
<span class="quotelev2">&gt; &gt; +    switch(frag-&gt;desc.sr_desc.opcode) { \
</span><br>
<span class="quotelev2">&gt; &gt;      case VAPI_SEND: \
</span><br>
<span class="quotelev2">&gt; &gt;          if(OMPI_SUCCESS !=  mca_btl_mvapi_endpoint_send(frag- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;endpoint, frag)) { \
</span><br>
<span class="quotelev2">&gt; &gt;              BTL_ERROR((&quot;error in posting pending send\n&quot;)); \
</span><br>
<span class="quotelev2">&gt; &gt; @@ -186,7 +186,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;          } \
</span><br>
<span class="quotelev2">&gt; &gt;          break; \
</span><br>
<span class="quotelev2">&gt; &gt;      default: \
</span><br>
<span class="quotelev2">&gt; &gt; -        BTL_ERROR((&quot;error in posting pending operation, invalide  
</span><br>
<span class="quotelev2">&gt; &gt; opcode %d\n&quot;, frag-&gt;sr_desc.opcode)); \
</span><br>
<span class="quotelev2">&gt; &gt; +        BTL_ERROR((&quot;error in posting pending operation, invalide  
</span><br>
<span class="quotelev2">&gt; &gt; opcode %d\n&quot;, frag-&gt;desc.sr_desc.opcode)); \
</span><br>
<span class="quotelev2">&gt; &gt;          break; \
</span><br>
<span class="quotelev2">&gt; &gt;      } \
</span><br>
<span class="quotelev2">&gt; &gt;  } while (0)
</span><br>
<span class="quotelev2">&gt; &gt; diff -Naur openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi.h  
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi.h
</span><br>
<span class="quotelev2">&gt; &gt; --- openmpi-1.2.1/ompi/mca/btl/mvapi/btl_mvapi.h	2007-04-19  
</span><br>
<span class="quotelev2">&gt; &gt; 18:30:54.000000000 +0200
</span><br>
<span class="quotelev2">&gt; &gt; +++ openmpi-1.2.1_patched/ompi/mca/btl/mvapi/btl_mvapi.h	2007-05-09  
</span><br>
<span class="quotelev2">&gt; &gt; 14:37:23.000000000 +0200
</span><br>
<span class="quotelev2">&gt; &gt; @@ -260,7 +260,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;          frag-&gt;sg_entry.len = frag-&gt;size + \
</span><br>
<span class="quotelev2">&gt; &gt;              ((unsigned char*) frag-&gt;segment.seg_addr.pval-  \
</span><br>
<span class="quotelev2">&gt; &gt;               (unsigned char*) frag-&gt;hdr);  \
</span><br>
<span class="quotelev2">&gt; &gt; -       desc_post[i] = frag-&gt;rr_desc; \
</span><br>
<span class="quotelev2">&gt; &gt; +       desc_post[i] = frag-&gt;desc.rr_desc; \
</span><br>
<span class="quotelev2">&gt; &gt;      }\
</span><br>
<span class="quotelev2">&gt; &gt;      ret = VAPI_post_srq( nic, \
</span><br>
<span class="quotelev2">&gt; &gt;                           srq_hndl, \
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt;                              \\\\\\
</span><br>
<span class="quotelev2">&gt; &gt;                              (-0^0-)
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------oOO--(_)--OOo-----------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Luis Kornblueh                           Tel. : +49-40-41173289
</span><br>
<span class="quotelev2">&gt; &gt;  Max-Planck-Institute for Meteorology     Fax. : +49-40-41173298
</span><br>
<span class="quotelev2">&gt; &gt;  Bundesstr. 53
</span><br>
<span class="quotelev2">&gt; &gt;  D-20146 Hamburg                   Email: luis.kornblueh_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;  Federal Republic of Germany
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="3283.php">Jeff Squyres: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
<li><strong>Previous message:</strong> <a href="3281.php">Jeff Squyres: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
<li><strong>In reply to:</strong> <a href="3281.php">Jeff Squyres: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3283.php">Jeff Squyres: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
<li><strong>Reply:</strong> <a href="3283.php">Jeff Squyres: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
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
