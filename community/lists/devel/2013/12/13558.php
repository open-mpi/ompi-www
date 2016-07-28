<?
$subject_val = "Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 22 10:44:29 2013" -->
<!-- isoreceived="20131222154429" -->
<!-- sent="Sun, 22 Dec 2013 16:44:27 +0100" -->
<!-- isosent="20131222154427" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion" -->
<!-- id="20131222154427.GE367_at_lisas.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="9B035D64-40F3-499D-B167-64F585EDA86A_at_icl.utk.edu" -->
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
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-22 10:44:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13559.php">Igor Ivanov: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13557.php">George Bosilca: "Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion"</a>
<li><strong>In reply to:</strong> <a href="13557.php">George Bosilca: "Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That works. Thanks for your fix.
<br>
<p>On Sun, Dec 22, 2013 at 12:23:44AM +0100, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Adrian,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, your patch is correct. However, I noticed that each framework clean it&#226;&#128;&#153;s modules differently, so I tried to enforce some level of consistency. Please try r30045 and let me know if it fixes your issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 21, 2013, at 22:05 , Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Trying to run Open MPI with C/R enabled I get the following error
</span><br>
<span class="quotelev2">&gt; &gt; with --enable-debug:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [dcbz:20360] orte_rml_base_select: initializing rml component oob
</span><br>
<span class="quotelev2">&gt; &gt; [dcbz:20360] orte_rml_base_select: initializing rml component ftrm
</span><br>
<span class="quotelev2">&gt; &gt; [dcbz:20360] orte_rml_base_select: module ftrm unloaded
</span><br>
<span class="quotelev2">&gt; &gt; orterun: ../../opal/class/opal_list.c:69: opal_list_item_destruct: Assertion `0 == item-&gt;opal_list_item_refcount' failed.
</span><br>
<span class="quotelev2">&gt; &gt; [dcbz:20360] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [dcbz:20360] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt; &gt; [dcbz:20360] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I fixed it like this:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/rml/base/rml_base_frame.c b/orte/mca/rml/base/rml_base_frame.c
</span><br>
<span class="quotelev2">&gt; &gt; index 8759180..968884f 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/rml/base/rml_base_frame.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/rml/base/rml_base_frame.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -181,6 +181,7 @@ int orte_rml_base_select(void)
</span><br>
<span class="quotelev2">&gt; &gt;                                 component-&gt;rml_version.mca_component_name);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;             mca_base_component_repository_release((mca_base_component_t *) component);
</span><br>
<span class="quotelev2">&gt; &gt; +            opal_list_remove_item(&amp;orte_rml_base_framework.framework_components, item);
</span><br>
<span class="quotelev2">&gt; &gt;             OBJ_RELEASE(item);
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;         item = next;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is this the correct way to solve an error like this? And the
</span><br>
<span class="quotelev2">&gt; &gt; correct place.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 		Adrian
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13559.php">Igor Ivanov: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13557.php">George Bosilca: "Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion"</a>
<li><strong>In reply to:</strong> <a href="13557.php">George Bosilca: "Re: [OMPI devel] C/R code: opal_list_item_destruct: Assertion"</a>
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
