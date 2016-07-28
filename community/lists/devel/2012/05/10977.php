<?
$subject_val = "Re: [OMPI devel] Potential ob1 bug";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  7 12:10:20 2012" -->
<!-- isoreceived="20120507161020" -->
<!-- sent="Mon, 7 May 2012 10:09:57 -0600 (MDT)" -->
<!-- isosent="20120507160957" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Potential ob1 bug" -->
<!-- id="alpine.OSX.2.00.1205071008200.25930_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="105BA91C-ADB5-4617-BE9F-C8E04554FB4A_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Potential ob1 bug<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-07 12:09:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10978.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10976.php">roswan ismail: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10963.php">George Bosilca: "Re: [OMPI devel] Potential ob1 bug"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George, thanks for taking a look. Your patch looks good and I can confirm it fixes the hang I am seeing on our XE6.
<br>
<p>-Nathan
<br>
<p>On Thu, 3 May 2012, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're right, when we loop trying to restart a failed request we must reset the convertor. However:
</span><br>
<span class="quotelev1">&gt; 1. the position in this case is always zero, so we don't have to save the previous position in order to restore it.
</span><br>
<span class="quotelev1">&gt; 2. all cases must be protected, not only the mca_pml_ob1_send_request_start_prepare.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Therefore there are 2 ways of doing this without affecting performance. We remove the initialization of the convertor in the send_init function, and force the convertor position to zero on every call to mca_pml_ob1_send_request_start_btl. Or, we reset the convertor position to zero every time we withdraw a failed request from the pending queue in order to restart it (in mca_pml_ob1_progress and in mca_pml_ob1_send_request_process_pending).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, with the multiplication of send strategies in the OB1 (CUDA as an example) someone else should take a look in that code to apply the same logic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please find below a patch implementing the second method.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/pml/ob1/pml_ob1_progress.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/pml/ob1/pml_ob1_progress.c	(revision 26381)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/pml/ob1/pml_ob1_progress.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -53,6 +53,7 @@
</span><br>
<span class="quotelev1">&gt;             completed_requests++;
</span><br>
<span class="quotelev1">&gt;             break;
</span><br>
<span class="quotelev1">&gt;         case MCA_PML_OB1_SEND_PENDING_START:
</span><br>
<span class="quotelev1">&gt; +            MCA_PML_OB1_SEND_REQUEST_RESET(sendreq);
</span><br>
<span class="quotelev1">&gt;             endpoint = sendreq-&gt;req_endpoint;
</span><br>
<span class="quotelev1">&gt;             send_succedded = false;
</span><br>
<span class="quotelev1">&gt;             for(j = 0; j &lt; (int)mca_bml_base_btl_array_get_size(&amp;endpoint-&gt;btl_eager); j++) {
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/pml/ob1/pml_ob1_sendreq.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/pml/ob1/pml_ob1_sendreq.c	(revision 26381)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/pml/ob1/pml_ob1_sendreq.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -70,7 +70,8 @@
</span><br>
<span class="quotelev1">&gt;                 add_request_to_send_pending(sendreq,
</span><br>
<span class="quotelev1">&gt;                         MCA_PML_OB1_SEND_PENDING_START, true);
</span><br>
<span class="quotelev1">&gt;             } else {
</span><br>
<span class="quotelev1">&gt; -                rc = mca_pml_ob1_send_request_start_btl(sendreq, send_dst);
</span><br>
<span class="quotelev1">&gt; +                 MCA_PML_OB1_SEND_REQUEST_RESET(sendreq);
</span><br>
<span class="quotelev1">&gt; +                 rc = mca_pml_ob1_send_request_start_btl(sendreq, send_dst);
</span><br>
<span class="quotelev1">&gt;                 if (OMPI_ERR_OUT_OF_RESOURCE == rc) {
</span><br>
<span class="quotelev1">&gt;                     /* No more resources on this btl so prepend to the pending
</span><br>
<span class="quotelev1">&gt;                      * list to minimize reordering and give up for now. */
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/pml/ob1/pml_ob1_sendreq.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/pml/ob1/pml_ob1_sendreq.h	(revision 26381)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/pml/ob1/pml_ob1_sendreq.h	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -159,6 +159,13 @@
</span><br>
<span class="quotelev1">&gt;         (sendreq)-&gt;req_recv.pval = NULL;                                \
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#define MCA_PML_OB1_SEND_REQUEST_RESET(sendreq)                             \
</span><br>
<span class="quotelev1">&gt; +{                                                                           \
</span><br>
<span class="quotelev1">&gt; +    size_t _position = 0;                                                   \
</span><br>
<span class="quotelev1">&gt; +    opal_convertor_set_position(&amp;sendreq-&gt;req_send.req_base.req_convertor,  \
</span><br>
<span class="quotelev1">&gt; +                                &amp;_position);                                \
</span><br>
<span class="quotelev1">&gt; +    assert( 0 == _position );                                               \
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static inline void mca_pml_ob1_free_rdma_resources(mca_pml_ob1_send_request_t* sendreq)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 1, 2012, at 10:55 , Hjelm, Nathan T wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ran across a problem in a failure path of start_prepare in ob1. If prepare_src succeed but send fails the send request convertor needs to be rolled back to the correct position. Can someone with more knowledge of ob1 check if this is indeed an error. Patch is below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/ompi/mca/pml/ob1/pml_ob1_sendreq.c b/ompi/mca/pml/ob1/pml_ob1_sendreq.c
</span><br>
<span class="quotelev2">&gt;&gt; index 2a8ac03..5505918 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/mca/pml/ob1/pml_ob1_sendreq.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/mca/pml/ob1/pml_ob1_sendreq.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -570,6 +570,7 @@ int mca_pml_ob1_send_request_start_prepare( mca_pml_ob1_send_request_t* sendreq,
</span><br>
<span class="quotelev2">&gt;&gt;                                             mca_bml_base_btl_t* bml_btl,
</span><br>
<span class="quotelev2">&gt;&gt;                                             size_t size )
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; +    size_t old_position = sendreq-&gt;req_send.req_base.req_convertor.bConverted;
</span><br>
<span class="quotelev2">&gt;&gt;     mca_btl_base_descriptor_t* des;
</span><br>
<span class="quotelev2">&gt;&gt;     mca_btl_base_segment_t* segment;
</span><br>
<span class="quotelev2">&gt;&gt;     mca_pml_ob1_hdr_t* hdr;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -614,6 +615,9 @@ int mca_pml_ob1_send_request_start_prepare( mca_pml_ob1_send_request_t* sendreq,
</span><br>
<span class="quotelev2">&gt;&gt;         return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     mca_bml_base_free(bml_btl, des );
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    opal_convertor_set_position(&amp;sendreq-&gt;req_send.req_base.req_convertor,
</span><br>
<span class="quotelev2">&gt;&gt; +                                &amp;old_position);
</span><br>
<span class="quotelev2">&gt;&gt;     return rc;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10978.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10976.php">roswan ismail: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10963.php">George Bosilca: "Re: [OMPI devel] Potential ob1 bug"</a>
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
