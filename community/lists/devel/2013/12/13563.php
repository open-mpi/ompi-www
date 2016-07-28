<?
$subject_val = "[OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 27 15:46:59 2013" -->
<!-- isoreceived="20131227204659" -->
<!-- sent="Fri, 27 Dec 2013 21:46:58 +0100" -->
<!-- isosent="20131227204658" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c" -->
<!-- id="20131227204658.GB32485_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-27 15:46:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13564.php">Josh Hursey: "Re: [OMPI devel] [PATCH v2 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13562.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30076 Missing Mellanox vendor ID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13567.php">Josh Hursey: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13567.php">Josh Hursey: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Right now the C/R code fails because of a change introduced in
<br>
opal/mca/compress/base/compress_base_open.c in 2013 with commit
<br>
<p>git 734c724ff76d9bf814f3ab0396bcd9ee6fddcd1b
<br>
svn r28239
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Update OPAL frameworks to use the MCA framework system.
<br>
<p>This commit changed a lot but also the return value of the function from
<br>
OPAL_SUCCESS to OPAL_ERR_NOT_AVAILABLE. With following patch I can make
<br>
it work again:
<br>
<p>diff --git a/opal/mca/compress/base/compress_base_open.c b/opal/mca/compress/base/compress_base_open.c
<br>
index a09fe59..69eabfa 100644
<br>
--- a/opal/mca/compress/base/compress_base_open.c
<br>
+++ b/opal/mca/compress/base/compress_base_open.c
<br>
@@ -45,11 +45,11 @@ MCA_BASE_FRAMEWORK_DECLARE(opal, compress, NULL, opal_compress_base_register, op
<br>
&nbsp;
<br>
&nbsp;static int opal_compress_base_register (mca_base_register_flag_t flags)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Compression currently only used with C/R */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( !opal_cr_is_enabled ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output_verbose(10, opal_compress_base_framework.framework_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;compress:open: FT is not enabled, skipping!&quot;);
<br>
-        return OPAL_ERR_NOT_AVAILABLE;
<br>
+        return OPAL_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_SUCCESS;
<br>
<p><p>My question is if OPAL_ERR_NOT_AVAILABLE is indeed the correct return value
<br>
and the function calling opal_compress_base_register() should actually
<br>
handle OPAL_ERR_NOT_AVAILABLE or if returning OPAL_SUCCESS is still the right
<br>
return value?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13564.php">Josh Hursey: "Re: [OMPI devel] [PATCH v2 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13562.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30076 Missing Mellanox vendor ID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13567.php">Josh Hursey: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13567.php">Josh Hursey: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
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
