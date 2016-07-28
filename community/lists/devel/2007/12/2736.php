<?
$subject_val = "[OMPI devel] [PATCH] openib btl: remove excess	ompi_btl_openib_connect_base_open call";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 18:42:08 2007" -->
<!-- isoreceived="20071205234208" -->
<!-- sent="Wed, 5 Dec 2007 17:42:02 -0600" -->
<!-- isosent="20071205234202" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] openib btl: remove excess	ompi_btl_openib_connect_base_open call" -->
<!-- id="20071205234202.GA26444_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] openib btl: remove excess	ompi_btl_openib_connect_base_open call<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 18:42:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2737.php">Richard Graham: "Re: [OMPI devel] IB pow wow notes"</a>
<li><strong>Previous message:</strong> <a href="2735.php">Tim Prins: "[OMPI devel] opal_condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2739.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: remove excess	ompi_btl_openib_connect_base_open call"</a>
<li><strong>Reply:</strong> <a href="2739.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: remove excess	ompi_btl_openib_connect_base_open call"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a double call to ompi_btl_openib_connect_base_open in
<br>
mca_btl_openib_mca_setup_qps().  It looks like someone just forgot to
<br>
clean-up the previous call when they added the check for the return
<br>
code.
<br>
<p>I ran a quick IMB test over IB to verify everything is still working.
<br>
<p>Thanks,
<br>
Jon
<br>
<p><p>Index: ompi/mca/btl/openib/btl_openib_mca.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/btl_openib_mca.c	(revision 16855)
<br>
+++ ompi/mca/btl/openib/btl_openib_mca.c	(working copy)
<br>
@@ -672,10 +672,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_component.credits_qp = smallest_pp_qp;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Register any MCA params for the connect pseudo-components */
<br>
-
<br>
-    ompi_btl_openib_connect_base_open();
<br>
-
<br>
-    if ( OMPI_SUCCESS != ompi_btl_openib_connect_base_open())
<br>
+    if (OMPI_SUCCESS != ompi_btl_openib_connect_base_open())
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto error;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = OMPI_SUCCESS;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2737.php">Richard Graham: "Re: [OMPI devel] IB pow wow notes"</a>
<li><strong>Previous message:</strong> <a href="2735.php">Tim Prins: "[OMPI devel] opal_condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2739.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: remove excess	ompi_btl_openib_connect_base_open call"</a>
<li><strong>Reply:</strong> <a href="2739.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: remove excess	ompi_btl_openib_connect_base_open call"</a>
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
