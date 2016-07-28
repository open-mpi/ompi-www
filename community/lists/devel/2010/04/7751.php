<?
$subject_val = "[OMPI devel] Elimination of des-&gt;des_context entry";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 15 14:52:29 2010" -->
<!-- isoreceived="20100415185229" -->
<!-- sent="Thu, 15 Apr 2010 14:50:34 -0400" -->
<!-- isosent="20100415185034" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rolf.vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Elimination of des-&amp;gt;des_context entry" -->
<!-- id="4BC75FFA.3070301_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] Elimination of des-&gt;des_context entry<br>
<strong>From:</strong> Rolf vandeVaart (<em>rolf.vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-15 14:50:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7752.php">Jeff Squyres: "[OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Previous message:</strong> <a href="7750.php">Ralph Castain: "[OMPI devel] 1.4.2rc1 available for test"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George or Brian:
<br>
Last week I submitted an RFC for making some changes in the BML layer.  
<br>
However, with further thought, I am thinking of another way to solve my 
<br>
issue.  The main idea is that I want to eliminate the use of the cached 
<br>
pointer to the mca_bml_base_btl_t in the descriptor because in the case 
<br>
of failover, the cached pointer may become stale. (George, we talked 
<br>
about this at the last forum)
<br>
<p>The idea is that we can use a pointer to the btl module in almost all 
<br>
areas where we currently are using a cached pointer to the 
<br>
mca_bml_base_btl_t.  An example of the change I want to make is shown 
<br>
below.   First is the old version of the mca_pml_ob1_rget_completion 
<br>
function and then the version I am proposing.  Note that the 
<br>
mca_bml_base_btl_t* is no longer used in the second version.  And note 
<br>
that we do not need to use des-&gt;des_context.
<br>
<p>Does anyone have an issue with this change?
<br>
<p>OLD:
<br>
static void
<br>
mca_pml_ob1_rget_completion( mca_btl_base_module_t* btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_endpoint_t* ep,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_descriptor_t* des,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int status )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_send_request_t* sendreq = 
<br>
(mca_pml_ob1_send_request_t*)des-&gt;des_cbdata;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca_bml_base_btl_t* bml_btl = (mca_bml_base_btl_t*)des-&gt;des_context;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;size_t req_bytes_delivered = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* count bytes of user data actually delivered and check for request 
<br>
completion */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_OB1_COMPUTE_SEGMENT_LENGTH( des-&gt;des_src, des-&gt;des_src_cnt,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0, req_bytes_delivered );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_ADD_SIZE_T(&amp;sendreq-&gt;req_bytes_delivered, 
<br>
req_bytes_delivered);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;send_request_pml_complete_check(sendreq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* free the descriptor */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca_bml_base_free(bml_btl, des);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_OB1_PROGRESS_PENDING(bml_btl);
<br>
}
<br>
<p><p>NEW:
<br>
static void
<br>
mca_pml_ob1_rget_completion( mca_btl_base_module_t* btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_endpoint_t* ep,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_descriptor_t* des,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int status )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_send_request_t* sendreq = 
<br>
(mca_pml_ob1_send_request_t*)des-&gt;des_cbdata;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;size_t req_bytes_delivered = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* count bytes of user data actually delivered and check for request 
<br>
completion */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_OB1_COMPUTE_SEGMENT_LENGTH( des-&gt;des_src, des-&gt;des_src_cnt,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0, req_bytes_delivered );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_ADD_SIZE_T(&amp;sendreq-&gt;req_bytes_delivered, 
<br>
req_bytes_delivered);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;send_request_pml_complete_check(sendreq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* free the descriptor */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;btl-&gt;btl_free(btl, des);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_OB1_PROGRESS_PENDING(btl);
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7752.php">Jeff Squyres: "[OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Previous message:</strong> <a href="7750.php">Ralph Castain: "[OMPI devel] 1.4.2rc1 available for test"</a>
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
