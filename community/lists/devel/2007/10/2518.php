<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Oct 28 10:55:51 2007" -->
<!-- isoreceived="20071028145551" -->
<!-- sent="Sun, 28 Oct 2007 08:55:45 -0600" -->
<!-- isosent="20071028145545" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bml_btl-&amp;gt;btl_alloc() instead of mca_bml_base_alloc() in OSC" -->
<!-- id="55F92BC0-2060-4197-97AE-EAFF0E1554EA_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071028131348.GN12525_at_minantech.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-28 10:55:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2519.php">Sajjad Tabib: "[OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<li><strong>Previous message:</strong> <a href="2517.php">Gleb Natapov: "[OMPI devel] bml_btl-&gt;btl_alloc() instead of mca_bml_base_alloc() in OSC"</a>
<li><strong>In reply to:</strong> <a href="2517.php">Gleb Natapov: "[OMPI devel] bml_btl-&gt;btl_alloc() instead of mca_bml_base_alloc() in OSC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can't think of any good reason -- the patch should be fine.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p>On Oct 28, 2007, at 7:13 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; Hi Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Is there a special reason why you call btl functions directly instead
</span><br>
<span class="quotelev1">&gt; of using bml wrappers? What about applying this patch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/osc/rdma/osc_rdma_component.c b/ompi/mca/osc/ 
</span><br>
<span class="quotelev1">&gt; rdma/osc_rdma_component.c
</span><br>
<span class="quotelev1">&gt; index 2d0dc06..302dd9e 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/osc/rdma/osc_rdma_component.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/osc/rdma/osc_rdma_component.c
</span><br>
<span class="quotelev1">&gt; @@ -1044,9 +1044,8 @@ rdma_send_info_send(ompi_osc_rdma_module_t  
</span><br>
<span class="quotelev1">&gt; *module,
</span><br>
<span class="quotelev1">&gt;     ompi_osc_rdma_rdma_info_header_t *header = NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     bml_btl = peer_send_info-&gt;bml_btl;
</span><br>
<span class="quotelev1">&gt; -    descriptor = bml_btl-&gt;btl_alloc(bml_btl-&gt;btl,
</span><br>
<span class="quotelev1">&gt; -                                    MCA_BTL_NO_ORDER,
</span><br>
<span class="quotelev1">&gt; -                                     
</span><br>
<span class="quotelev1">&gt; sizeof(ompi_osc_rdma_rdma_info_header_t));
</span><br>
<span class="quotelev1">&gt; +    mca_bml_base_alloc(bml_btl, &amp;descriptor, MCA_BTL_NO_ORDER,
</span><br>
<span class="quotelev1">&gt; +            sizeof(ompi_osc_rdma_rdma_info_header_t));
</span><br>
<span class="quotelev1">&gt;     if (NULL == descriptor) {
</span><br>
<span class="quotelev1">&gt;         ret = OMPI_ERR_TEMP_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;         goto cleanup;
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/osc/rdma/osc_rdma_data_move.c b/ompi/mca/osc/ 
</span><br>
<span class="quotelev1">&gt; rdma/osc_rdma_data_move.c
</span><br>
<span class="quotelev1">&gt; index e9fd17c..e7b5813 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/osc/rdma/osc_rdma_data_move.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/osc/rdma/osc_rdma_data_move.c
</span><br>
<span class="quotelev1">&gt; @@ -454,10 +454,10 @@  
</span><br>
<span class="quotelev1">&gt; ompi_osc_rdma_sendreq_send(ompi_osc_rdma_module_t *module,
</span><br>
<span class="quotelev1">&gt;         /* get a buffer... */
</span><br>
<span class="quotelev1">&gt;         endpoint = (mca_bml_base_endpoint_t*) sendreq- 
</span><br>
<span class="quotelev2">&gt; &gt;req_target_proc-&gt;proc_bml;
</span><br>
<span class="quotelev1">&gt;         bml_btl = mca_bml_base_btl_array_get_next(&amp;endpoint- 
</span><br>
<span class="quotelev2">&gt; &gt;btl_eager);
</span><br>
<span class="quotelev1">&gt; -        descriptor = bml_btl-&gt;btl_alloc(bml_btl-&gt;btl,
</span><br>
<span class="quotelev1">&gt; -                                        MCA_BTL_NO_ORDER,
</span><br>
<span class="quotelev1">&gt; -                                        module-&gt;m_use_buffers ?  
</span><br>
<span class="quotelev1">&gt; bml_btl-&gt;btl_eager_limit : needed_len &lt; bml_btl-&gt;btl_eager_limit ?  
</span><br>
<span class="quotelev1">&gt; needed_len :
</span><br>
<span class="quotelev1">&gt; -                                        bml_btl-&gt;btl_eager_limit);
</span><br>
<span class="quotelev1">&gt; +        mca_bml_base_alloc(bml_btl, &amp;descriptor, MCA_BTL_NO_ORDER,
</span><br>
<span class="quotelev1">&gt; +                module-&gt;m_use_buffers ? bml_btl-&gt;btl_eager_limit :
</span><br>
<span class="quotelev1">&gt; +                needed_len &lt; bml_btl-&gt;btl_eager_limit ? needed_len :
</span><br>
<span class="quotelev1">&gt; +                bml_btl-&gt;btl_eager_limit);
</span><br>
<span class="quotelev1">&gt;         if (NULL == descriptor) {
</span><br>
<span class="quotelev1">&gt;             ret = OMPI_ERR_TEMP_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;             goto cleanup;
</span><br>
<span class="quotelev1">&gt; @@ -698,9 +698,8 @@  
</span><br>
<span class="quotelev1">&gt; ompi_osc_rdma_replyreq_send(ompi_osc_rdma_module_t *module,
</span><br>
<span class="quotelev1">&gt;     /* Get a BTL and a fragment to go with it */
</span><br>
<span class="quotelev1">&gt;     endpoint = (mca_bml_base_endpoint_t*) replyreq-&gt;rep_origin_proc- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_bml;
</span><br>
<span class="quotelev1">&gt;     bml_btl = mca_bml_base_btl_array_get_next(&amp;endpoint-&gt;btl_eager);
</span><br>
<span class="quotelev1">&gt; -    descriptor = bml_btl-&gt;btl_alloc(bml_btl-&gt;btl,
</span><br>
<span class="quotelev1">&gt; -                                    MCA_BTL_NO_ORDER,
</span><br>
<span class="quotelev1">&gt; -                                    bml_btl-&gt;btl_eager_limit);
</span><br>
<span class="quotelev1">&gt; +    mca_bml_base_alloc(bml_btl, &amp;descriptor, MCA_BTL_NO_ORDER,
</span><br>
<span class="quotelev1">&gt; +            bml_btl-&gt;btl_eager_limit);
</span><br>
<span class="quotelev1">&gt;     if (NULL == descriptor) {
</span><br>
<span class="quotelev1">&gt;         ret = OMPI_ERR_TEMP_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;         goto cleanup;
</span><br>
<span class="quotelev1">&gt; @@ -1260,9 +1259,8 @@  
</span><br>
<span class="quotelev1">&gt; ompi_osc_rdma_control_send(ompi_osc_rdma_module_t *module,
</span><br>
<span class="quotelev1">&gt;     /* Get a BTL and a fragment to go with it */
</span><br>
<span class="quotelev1">&gt;     endpoint = (mca_bml_base_endpoint_t*) proc-&gt;proc_bml;
</span><br>
<span class="quotelev1">&gt;     bml_btl = mca_bml_base_btl_array_get_next(&amp;endpoint-&gt;btl_eager);
</span><br>
<span class="quotelev1">&gt; -    descriptor = bml_btl-&gt;btl_alloc(bml_btl-&gt;btl,
</span><br>
<span class="quotelev1">&gt; -                                    MCA_BTL_NO_ORDER,
</span><br>
<span class="quotelev1">&gt; -                                     
</span><br>
<span class="quotelev1">&gt; sizeof(ompi_osc_rdma_control_header_t));
</span><br>
<span class="quotelev1">&gt; +    mca_bml_base_alloc(bml_btl, &amp;descriptor, MCA_BTL_NO_ORDER,
</span><br>
<span class="quotelev1">&gt; +            sizeof(ompi_osc_rdma_control_header_t));
</span><br>
<span class="quotelev1">&gt;     if (NULL == descriptor) {
</span><br>
<span class="quotelev1">&gt;         ret = OMPI_ERR_TEMP_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;         goto cleanup;
</span><br>
<span class="quotelev1">&gt; @@ -1322,9 +1320,8 @@  
</span><br>
<span class="quotelev1">&gt; ompi_osc_rdma_rdma_ack_send(ompi_osc_rdma_module_t *module,
</span><br>
<span class="quotelev1">&gt;     ompi_osc_rdma_control_header_t *header = NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* Get a BTL and a fragment to go with it */
</span><br>
<span class="quotelev1">&gt; -    descriptor = bml_btl-&gt;btl_alloc(bml_btl-&gt;btl,
</span><br>
<span class="quotelev1">&gt; -                                    rdma_btl-&gt;rdma_order,
</span><br>
<span class="quotelev1">&gt; -                                     
</span><br>
<span class="quotelev1">&gt; sizeof(ompi_osc_rdma_control_header_t));
</span><br>
<span class="quotelev1">&gt; +    mca_bml_base_alloc(bml_btl, &amp;descriptor, rdma_btl-&gt;rdma_order,
</span><br>
<span class="quotelev1">&gt; +            sizeof(ompi_osc_rdma_control_header_t));
</span><br>
<span class="quotelev1">&gt;     if (NULL == descriptor) {
</span><br>
<span class="quotelev1">&gt;         ret = OMPI_ERR_TEMP_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;         goto cleanup;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2519.php">Sajjad Tabib: "[OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<li><strong>Previous message:</strong> <a href="2517.php">Gleb Natapov: "[OMPI devel] bml_btl-&gt;btl_alloc() instead of mca_bml_base_alloc() in OSC"</a>
<li><strong>In reply to:</strong> <a href="2517.php">Gleb Natapov: "[OMPI devel] bml_btl-&gt;btl_alloc() instead of mca_bml_base_alloc() in OSC"</a>
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
