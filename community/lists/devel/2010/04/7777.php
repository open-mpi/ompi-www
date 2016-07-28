<?
$subject_val = "[OMPI devel] RFC: Calling BTL directly from PML";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 19 15:43:49 2010" -->
<!-- isoreceived="20100419194349" -->
<!-- sent="Mon, 19 Apr 2010 15:42:43 -0400" -->
<!-- isosent="20100419194243" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rolf.vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Calling BTL directly from PML" -->
<!-- id="4BCCB233.90408_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Calling BTL directly from PML<br>
<strong>From:</strong> Rolf vandeVaart (<em>rolf.vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-19 15:42:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7778.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun options"</a>
<li><strong>Previous message:</strong> <a href="7776.php">Eugene Loh: "[OMPI devel] RFC: mpirun options"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Change many of the functions on the PML layer to use the btl
<br>
directly instead of going through the BML layer.  [NOTE: I withdraw
<br>
my earlier RFC from 04/07/2010 as it was flawed]
<br>
<p>WHY: Some PMLs (like the failover one I am working on) may add or
<br>
delete BTLs while the program is running.  Currently, the act of
<br>
mapping out a BTL for communication means removing an entry from the
<br>
bml_base_btl_array and shuffling the remaining entries.  The problem
<br>
is that pointers to entries in the bml_base_btl_array are cached in
<br>
the descriptor.  After mapping out a BTL, these pointers may no longer
<br>
be valid since the entries they are pointing to may have been moved.
<br>
It turns out there is no need to cache these pointers as we can
<br>
just access the BTL information directly from the PML.
<br>
<p>WHERE:
<br>
ompi/mca/pml/ob1/pml_ob1_recvreq.c
<br>
ompi/mca/pml/ob1/pml_ob1_sendreq.c
<br>
ompi/mca/pml/ob1/pml_ob1_recvfrag.c
<br>
(and maybe a few other places)
<br>
<p>MORE DETAILS:
<br>
I sent an email last week, but basically I want to make changes
<br>
similar to the example shown below.  Note that des-&gt;des_context is no
<br>
longer used and the free function just calls the btl-&gt;btl_free
<br>
function directly.  My concern is that I might be violating some
<br>
PML-&gt;BML-&gt;BTL abstractions.  However, the division between these three
<br>
layers seems somewhat fluid, so it may be OK what I am suggesting.
<br>
<p>EXAMPLE:
<br>
ORIGINAL CODE:
<br>
static void
<br>
mca_pml_ob1_rget_completion( mca_btl_base_module_t* btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_endpoint_t* ep,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_descriptor_t* des,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int status )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;mca_pml_ob1_send_request_t* sendreq = 
<br>
(mca_pml_ob1_send_request_t*)des-&gt;des_cbdata;
<br>
&nbsp;&nbsp;&nbsp;mca_bml_base_btl_t* bml_btl = (mca_bml_base_btl_t*)des-&gt;des_context;
<br>
&nbsp;&nbsp;&nbsp;size_t req_bytes_delivered = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;/* count bytes of user data actually delivered and check for request 
<br>
completion */
<br>
&nbsp;&nbsp;&nbsp;MCA_PML_OB1_COMPUTE_SEGMENT_LENGTH( des-&gt;des_src, des-&gt;des_src_cnt,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0, req_bytes_delivered );
<br>
&nbsp;&nbsp;&nbsp;OPAL_THREAD_ADD_SIZE_T(&amp;sendreq-&gt;req_bytes_delivered, 
<br>
req_bytes_delivered);
<br>
<p>&nbsp;&nbsp;&nbsp;send_request_pml_complete_check(sendreq);
<br>
&nbsp;&nbsp;&nbsp;/* free the descriptor */
<br>
&nbsp;&nbsp;&nbsp;mca_bml_base_free(bml_btl, des);
<br>
&nbsp;&nbsp;&nbsp;MCA_PML_OB1_PROGRESS_PENDING(bml_btl);
<br>
}
<br>
<p><p>NEW CODE:
<br>
static void
<br>
mca_pml_ob1_rget_completion( mca_btl_base_module_t* btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_endpoint_t* ep,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_descriptor_t* des,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int status )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;mca_pml_ob1_send_request_t* sendreq = 
<br>
(mca_pml_ob1_send_request_t*)des-&gt;des_cbdata;
<br>
&nbsp;&nbsp;&nbsp;size_t req_bytes_delivered = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;/* count bytes of user data actually delivered and check for request 
<br>
completion */
<br>
&nbsp;&nbsp;&nbsp;MCA_PML_OB1_COMPUTE_SEGMENT_LENGTH( des-&gt;des_src, des-&gt;des_src_cnt,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0, req_bytes_delivered );
<br>
&nbsp;&nbsp;&nbsp;OPAL_THREAD_ADD_SIZE_T(&amp;sendreq-&gt;req_bytes_delivered, 
<br>
req_bytes_delivered);
<br>
<p>&nbsp;&nbsp;&nbsp;send_request_pml_complete_check(sendreq);
<br>
&nbsp;&nbsp;&nbsp;/* free the descriptor */
<br>
&nbsp;&nbsp;&nbsp;btl-&gt;btl_free(btl, des);
<br>
&nbsp;&nbsp;&nbsp;MCA_PML_OB1_PROGRESS_PENDING(btl);
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7778.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun options"</a>
<li><strong>Previous message:</strong> <a href="7776.php">Eugene Loh: "[OMPI devel] RFC: mpirun options"</a>
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
