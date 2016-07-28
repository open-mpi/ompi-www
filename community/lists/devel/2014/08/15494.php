<?
$subject_val = "[OMPI devel] canceling buffered send request with pml/cm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 09:49:26 2014" -->
<!-- isoreceived="20140804134926" -->
<!-- sent="Mon, 4 Aug 2014 13:49:22 +0000" -->
<!-- isosent="20140804134922" -->
<!-- name="Yossi Etigin" -->
<!-- email="yosefe_at_[hidden]" -->
<!-- subject="[OMPI devel] canceling buffered send request with pml/cm" -->
<!-- id="fb4f0a2be4254fecb9220a517f1dfb6f_at_DB3PR05MB427.eurprd05.prod.outlook.com" -->
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
<strong>Subject:</strong> [OMPI devel] canceling buffered send request with pml/cm<br>
<strong>From:</strong> Yossi Etigin (<em>yosefe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-04 09:49:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15495.php">Pritchard Jr., Howard: "[OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>Previous message:</strong> <a href="15493.php">Paul Hargrove: "[OMPI devel] 1.8.2rc3 cosmetic issues in configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15522.php">George Bosilca: "Re: [OMPI devel] canceling buffered send request with pml/cm"</a>
<li><strong>Reply:</strong> <a href="15522.php">George Bosilca: "Re: [OMPI devel] canceling buffered send request with pml/cm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Seems like it's impossible to cancel buffered sends with pml/cm.
<br>
<p><span class="quotelev1">&gt;From one hand, pml/cm completes the buffered send immediately (MCA_PML_CM_HVY_SEND_REQUEST_START):
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(OMPI_SUCCESS == ret &amp;&amp;                                                \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sendreq-&gt;req_send.req_send_mode == MCA_PML_BASE_SEND_BUFFERED) {      \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sendreq-&gt;req_send.req_base.req_ompi.req_status.MPI_ERROR = 0;        \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_complete(&amp;(sendreq)-&gt;req_send.req_base.req_ompi, true); \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>So, if the user is doing Bsend()/Cancel()/Wait()/Test_canceled(), the Wait() would be a no-op.
<br>
Therefore when mtl_cancel() was called, it had to either cancel/guarantee completion *immediately*, otherwise the return from Test_canceled would be undefined.
<br>
However, it's not always possible to cancel immediately, because need to make sure the peer has not matched it yet (fox example, with mtl mxm).
<br>
<p>IMHO it's wrong for pml_cm to complete a buffered send immediately.
<br>
What do you think?
<br>
<p>--Yossi
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15494/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15495.php">Pritchard Jr., Howard: "[OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>Previous message:</strong> <a href="15493.php">Paul Hargrove: "[OMPI devel] 1.8.2rc3 cosmetic issues in configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15522.php">George Bosilca: "Re: [OMPI devel] canceling buffered send request with pml/cm"</a>
<li><strong>Reply:</strong> <a href="15522.php">George Bosilca: "Re: [OMPI devel] canceling buffered send request with pml/cm"</a>
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
