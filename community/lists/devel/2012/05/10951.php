<?
$subject_val = "[OMPI devel] Potential ob1 bug";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 10:55:39 2012" -->
<!-- isoreceived="20120501145539" -->
<!-- sent="Tue, 1 May 2012 14:55:34 +0000" -->
<!-- isosent="20120501145534" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] Potential ob1 bug" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D71516FBC7C2_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Potential ob1 bug<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 10:55:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10952.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  libevent socket code"</a>
<li><strong>Previous message:</strong> <a href="10950.php">Hjelm, Nathan T: "Re: [OMPI devel] libevent socket code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10963.php">George Bosilca: "Re: [OMPI devel] Potential ob1 bug"</a>
<li><strong>Reply:</strong> <a href="10963.php">George Bosilca: "Re: [OMPI devel] Potential ob1 bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ran across a problem in a failure path of start_prepare in ob1. If prepare_src succeed but send fails the send request convertor needs to be rolled back to the correct position. Can someone with more knowledge of ob1 check if this is indeed an error. Patch is below.
<br>
<p>-Nathan
<br>
<p>diff --git a/ompi/mca/pml/ob1/pml_ob1_sendreq.c b/ompi/mca/pml/ob1/pml_ob1_sendreq.c
<br>
index 2a8ac03..5505918 100644
<br>
--- a/ompi/mca/pml/ob1/pml_ob1_sendreq.c
<br>
+++ b/ompi/mca/pml/ob1/pml_ob1_sendreq.c
<br>
@@ -570,6 +570,7 @@ int mca_pml_ob1_send_request_start_prepare( mca_pml_ob1_send_request_t* sendreq,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_bml_base_btl_t* bml_btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t size )
<br>
&nbsp;{
<br>
+    size_t old_position = sendreq-&gt;req_send.req_base.req_convertor.bConverted;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_base_descriptor_t* des;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_base_segment_t* segment;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_hdr_t* hdr;
<br>
@@ -614,6 +615,9 @@ int mca_pml_ob1_send_request_start_prepare( mca_pml_ob1_send_request_t* sendreq,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_bml_base_free(bml_btl, des );
<br>
+
<br>
+    opal_convertor_set_position(&amp;sendreq-&gt;req_send.req_base.req_convertor,
<br>
+                                &amp;old_position);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;}
<br>
&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10952.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  libevent socket code"</a>
<li><strong>Previous message:</strong> <a href="10950.php">Hjelm, Nathan T: "Re: [OMPI devel] libevent socket code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10963.php">George Bosilca: "Re: [OMPI devel] Potential ob1 bug"</a>
<li><strong>Reply:</strong> <a href="10963.php">George Bosilca: "Re: [OMPI devel] Potential ob1 bug"</a>
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
