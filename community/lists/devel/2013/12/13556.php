<?
$subject_val = "Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 21 17:16:51 2013" -->
<!-- isoreceived="20131221221651" -->
<!-- sent="Sat, 21 Dec 2013 14:16:19 -0800" -->
<!-- isosent="20131221221619" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion" -->
<!-- id="094C9439-6D30-4077-A18B-E857748FE337_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131221210510.GC367_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-21 17:16:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13557.php">George Bosilca: "Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion"</a>
<li><strong>Previous message:</strong> <a href="13555.php">Adrian Reber: "[OMPI devel] C/R code: opal_list_item_destruct: Assertion"</a>
<li><strong>In reply to:</strong> <a href="13555.php">Adrian Reber: "[OMPI devel] C/R code: opal_list_item_destruct: Assertion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13557.php">George Bosilca: "Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
should be okay
<br>
<p>On Dec 21, 2013, at 1:05 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Trying to run Open MPI with C/R enabled I get the following error
</span><br>
<span class="quotelev1">&gt; with --enable-debug:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [dcbz:20360] orte_rml_base_select: initializing rml component oob
</span><br>
<span class="quotelev1">&gt; [dcbz:20360] orte_rml_base_select: initializing rml component ftrm
</span><br>
<span class="quotelev1">&gt; [dcbz:20360] orte_rml_base_select: module ftrm unloaded
</span><br>
<span class="quotelev1">&gt; orterun: ../../opal/class/opal_list.c:69: opal_list_item_destruct: Assertion `0 == item-&gt;opal_list_item_refcount' failed.
</span><br>
<span class="quotelev1">&gt; [dcbz:20360] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [dcbz:20360] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [dcbz:20360] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I fixed it like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/rml/base/rml_base_frame.c b/orte/mca/rml/base/rml_base_frame.c
</span><br>
<span class="quotelev1">&gt; index 8759180..968884f 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/rml/base/rml_base_frame.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/rml/base/rml_base_frame.c
</span><br>
<span class="quotelev1">&gt; @@ -181,6 +181,7 @@ int orte_rml_base_select(void)
</span><br>
<span class="quotelev1">&gt;                                 component-&gt;rml_version.mca_component_name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             mca_base_component_repository_release((mca_base_component_t *) component);
</span><br>
<span class="quotelev1">&gt; +            opal_list_remove_item(&amp;orte_rml_base_framework.framework_components, item);
</span><br>
<span class="quotelev1">&gt;             OBJ_RELEASE(item);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         item = next;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this the correct way to solve an error like this? And the
</span><br>
<span class="quotelev1">&gt; correct place.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
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
<li><strong>Next message:</strong> <a href="13557.php">George Bosilca: "Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion"</a>
<li><strong>Previous message:</strong> <a href="13555.php">Adrian Reber: "[OMPI devel] C/R code: opal_list_item_destruct: Assertion"</a>
<li><strong>In reply to:</strong> <a href="13555.php">Adrian Reber: "[OMPI devel] C/R code: opal_list_item_destruct: Assertion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13557.php">George Bosilca: "Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion"</a>
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
