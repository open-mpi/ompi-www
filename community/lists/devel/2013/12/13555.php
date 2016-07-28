<?
$subject_val = "[OMPI devel] C/R code: opal_list_item_destruct: Assertion";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 21 16:05:11 2013" -->
<!-- isoreceived="20131221210511" -->
<!-- sent="Sat, 21 Dec 2013 22:05:10 +0100" -->
<!-- isosent="20131221210510" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] C/R code: opal_list_item_destruct: Assertion" -->
<!-- id="20131221210510.GC367_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] C/R code: opal_list_item_destruct: Assertion<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-21 16:05:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13556.php">Ralph Castain: "Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion"</a>
<li><strong>Previous message:</strong> <a href="13554.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13556.php">Ralph Castain: "Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion"</a>
<li><strong>Reply:</strong> <a href="13556.php">Ralph Castain: "Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion"</a>
<li><strong>Reply:</strong> <a href="13557.php">George Bosilca: "Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Trying to run Open MPI with C/R enabled I get the following error
<br>
with --enable-debug:
<br>
<p>[dcbz:20360] orte_rml_base_select: initializing rml component oob
<br>
[dcbz:20360] orte_rml_base_select: initializing rml component ftrm
<br>
[dcbz:20360] orte_rml_base_select: module ftrm unloaded
<br>
orterun: ../../opal/class/opal_list.c:69: opal_list_item_destruct: Assertion `0 == item-&gt;opal_list_item_refcount' failed.
<br>
[dcbz:20360] *** Process received signal ***
<br>
[dcbz:20360] Signal: Aborted (6)
<br>
[dcbz:20360] Signal code:  (-6)
<br>
<p>I fixed it like this:
<br>
<p>diff --git a/orte/mca/rml/base/rml_base_frame.c b/orte/mca/rml/base/rml_base_frame.c
<br>
index 8759180..968884f 100644
<br>
--- a/orte/mca/rml/base/rml_base_frame.c
<br>
+++ b/orte/mca/rml/base/rml_base_frame.c
<br>
@@ -181,6 +181,7 @@ int orte_rml_base_select(void)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;component-&gt;rml_version.mca_component_name);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_base_component_repository_release((mca_base_component_t *) component);
<br>
+            opal_list_remove_item(&amp;orte_rml_base_framework.framework_components, item);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(item);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item = next;
<br>
<p><p>Is this the correct way to solve an error like this? And the
<br>
correct place.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13556.php">Ralph Castain: "Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion"</a>
<li><strong>Previous message:</strong> <a href="13554.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13556.php">Ralph Castain: "Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion"</a>
<li><strong>Reply:</strong> <a href="13556.php">Ralph Castain: "Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion"</a>
<li><strong>Reply:</strong> <a href="13557.php">George Bosilca: "Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion"</a>
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
