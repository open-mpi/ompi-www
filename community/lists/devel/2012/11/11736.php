<?
$subject_val = "Re: [OMPI devel] RFC: fix frameworks usage of opal_output";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 16:18:58 2012" -->
<!-- isoreceived="20121101201858" -->
<!-- sent="Thu, 1 Nov 2012 14:18:54 -0600" -->
<!-- isosent="20121101201854" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: fix frameworks usage of opal_output" -->
<!-- id="20121101201854.GC19330_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D2F47BDD-7169-483F-A604-11F8439EBFE3_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: fix frameworks usage of opal_output<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-01 16:18:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11737.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>Previous message:</strong> <a href="11735.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>In reply to:</strong> <a href="11735.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11737.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>Reply:</strong> <a href="11737.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Nov 01, 2012 at 04:07:32PM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is a quick question regarding the topi framework. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - The mca_topo_base_output is opened unconditionally in topo_base_open.c:62
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - with your patch, mca_topo_base_output is closed conditionally in topo_base_close.c:46, but only in case mca_topo_base_components_opened_valid and mca_topo_base_components_available_valid are NULL. However, mca_topo_base_output is set to -1 in all cases right after.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why is that so?
</span><br>
<p>mca_base_components_close closes the output if the third argument is NULL. So in this case calling opal_output_close after mca_base_components_close will result in a second call to opal_output_close.
<br>
<p><span class="quotelev1">&gt; In fact I think the mca_topo_base_close is entirely wrong. It should close all mca_topo_base_components_opened_valid component, then all mca_topo_base_components_available_valid components and then close the mca_topo_base_output and set it to -1.
</span><br>
<p>I looked into this as well. The select function for topo OBJ_DESTRUCTs mca_topo_base_components_opened and sets mca_topo_base_components_opened_valid to false. So if mca_topo_base_components_opened_valid is false it isn't safe to call mca_base_components_close. It is a little confusing and I don't know why the author if topo decided to do it that way.
<br>
<p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11737.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>Previous message:</strong> <a href="11735.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>In reply to:</strong> <a href="11735.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11737.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>Reply:</strong> <a href="11737.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
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
