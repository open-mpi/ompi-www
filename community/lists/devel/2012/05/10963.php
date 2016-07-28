<?
$subject_val = "Re: [OMPI devel] Potential ob1 bug";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  3 09:22:37 2012" -->
<!-- isoreceived="20120503132237" -->
<!-- sent="Thu, 3 May 2012 09:22:33 -0400" -->
<!-- isosent="20120503132233" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Potential ob1 bug" -->
<!-- id="105BA91C-ADB5-4617-BE9F-C8E04554FB4A_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D71516FBC7C2_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-03 09:22:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10964.php">Eugene Loh: "[OMPI devel] mpirun hostname hangs on trunk r26380?"</a>
<li><strong>Previous message:</strong> <a href="10962.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="10951.php">Hjelm, Nathan T: "[OMPI devel] Potential ob1 bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10977.php">Nathan Hjelm: "Re: [OMPI devel] Potential ob1 bug"</a>
<li><strong>Reply:</strong> <a href="10977.php">Nathan Hjelm: "Re: [OMPI devel] Potential ob1 bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>You're right, when we loop trying to restart a failed request we must reset the convertor. However:
<br>
1. the position in this case is always zero, so we don't have to save the previous position in order to restore it.
<br>
2. all cases must be protected, not only the mca_pml_ob1_send_request_start_prepare.
<br>
<p>Therefore there are 2 ways of doing this without affecting performance. We remove the initialization of the convertor in the send_init function, and force the convertor position to zero on every call to mca_pml_ob1_send_request_start_btl. Or, we reset the convertor position to zero every time we withdraw a failed request from the pending queue in order to restart it (in mca_pml_ob1_progress and in mca_pml_ob1_send_request_process_pending).
<br>
<p>However, with the multiplication of send strategies in the OB1 (CUDA as an example) someone else should take a look in that code to apply the same logic.
<br>
<p>Please find below a patch implementing the second method.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>Index: ompi/mca/pml/ob1/pml_ob1_progress.c
<br>
===================================================================
<br>
--- ompi/mca/pml/ob1/pml_ob1_progress.c	(revision 26381)
<br>
+++ ompi/mca/pml/ob1/pml_ob1_progress.c	(working copy)
<br>
@@ -53,6 +53,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;completed_requests++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case MCA_PML_OB1_SEND_PENDING_START:
<br>
+            MCA_PML_OB1_SEND_REQUEST_RESET(sendreq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endpoint = sendreq-&gt;req_endpoint;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send_succedded = false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(j = 0; j &lt; (int)mca_bml_base_btl_array_get_size(&amp;endpoint-&gt;btl_eager); j++) {
<br>
Index: ompi/mca/pml/ob1/pml_ob1_sendreq.c
<br>
===================================================================
<br>
--- ompi/mca/pml/ob1/pml_ob1_sendreq.c	(revision 26381)
<br>
+++ ompi/mca/pml/ob1/pml_ob1_sendreq.c	(working copy)
<br>
@@ -70,7 +70,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;add_request_to_send_pending(sendreq,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_OB1_SEND_PENDING_START, true);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
-                rc = mca_pml_ob1_send_request_start_btl(sendreq, send_dst);
<br>
+                 MCA_PML_OB1_SEND_REQUEST_RESET(sendreq);
<br>
+                 rc = mca_pml_ob1_send_request_start_btl(sendreq, send_dst);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OMPI_ERR_OUT_OF_RESOURCE == rc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* No more resources on this btl so prepend to the pending
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* list to minimize reordering and give up for now. */
<br>
Index: ompi/mca/pml/ob1/pml_ob1_sendreq.h
<br>
===================================================================
<br>
--- ompi/mca/pml/ob1/pml_ob1_sendreq.h	(revision 26381)
<br>
+++ ompi/mca/pml/ob1/pml_ob1_sendreq.h	(working copy)
<br>
@@ -159,6 +159,13 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(sendreq)-&gt;req_recv.pval = NULL;                                \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
+#define MCA_PML_OB1_SEND_REQUEST_RESET(sendreq)                             \
<br>
+{                                                                           \
<br>
+    size_t _position = 0;                                                   \
<br>
+    opal_convertor_set_position(&amp;sendreq-&gt;req_send.req_base.req_convertor,  \
<br>
+                                &amp;_position);                                \
<br>
+    assert( 0 == _position );                                               \
<br>
+}
<br>
&nbsp;
<br>
&nbsp;static inline void mca_pml_ob1_free_rdma_resources(mca_pml_ob1_send_request_t* sendreq)
<br>
&nbsp;{
<br>
<p><p>On May 1, 2012, at 10:55 , Hjelm, Nathan T wrote:
<br>
<p><span class="quotelev1">&gt; Ran across a problem in a failure path of start_prepare in ob1. If prepare_src succeed but send fails the send request convertor needs to be rolled back to the correct position. Can someone with more knowledge of ob1 check if this is indeed an error. Patch is below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/pml/ob1/pml_ob1_sendreq.c b/ompi/mca/pml/ob1/pml_ob1_sendreq.c
</span><br>
<span class="quotelev1">&gt; index 2a8ac03..5505918 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/pml/ob1/pml_ob1_sendreq.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/pml/ob1/pml_ob1_sendreq.c
</span><br>
<span class="quotelev1">&gt; @@ -570,6 +570,7 @@ int mca_pml_ob1_send_request_start_prepare( mca_pml_ob1_send_request_t* sendreq,
</span><br>
<span class="quotelev1">&gt;                                             mca_bml_base_btl_t* bml_btl,
</span><br>
<span class="quotelev1">&gt;                                             size_t size )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; +    size_t old_position = sendreq-&gt;req_send.req_base.req_convertor.bConverted;
</span><br>
<span class="quotelev1">&gt;     mca_btl_base_descriptor_t* des;
</span><br>
<span class="quotelev1">&gt;     mca_btl_base_segment_t* segment;
</span><br>
<span class="quotelev1">&gt;     mca_pml_ob1_hdr_t* hdr;
</span><br>
<span class="quotelev1">&gt; @@ -614,6 +615,9 @@ int mca_pml_ob1_send_request_start_prepare( mca_pml_ob1_send_request_t* sendreq,
</span><br>
<span class="quotelev1">&gt;         return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     mca_bml_base_free(bml_btl, des );
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    opal_convertor_set_position(&amp;sendreq-&gt;req_send.req_base.req_convertor,
</span><br>
<span class="quotelev1">&gt; +                                &amp;old_position);
</span><br>
<span class="quotelev1">&gt;     return rc;
</span><br>
<span class="quotelev1">&gt; }
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10964.php">Eugene Loh: "[OMPI devel] mpirun hostname hangs on trunk r26380?"</a>
<li><strong>Previous message:</strong> <a href="10962.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="10951.php">Hjelm, Nathan T: "[OMPI devel] Potential ob1 bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10977.php">Nathan Hjelm: "Re: [OMPI devel] Potential ob1 bug"</a>
<li><strong>Reply:</strong> <a href="10977.php">Nathan Hjelm: "Re: [OMPI devel] Potential ob1 bug"</a>
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
