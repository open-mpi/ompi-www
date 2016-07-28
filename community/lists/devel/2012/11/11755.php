<?
$subject_val = "[OMPI devel] RFC: fix frameworks usage of opal_output (updated)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 14:05:22 2012" -->
<!-- isoreceived="20121105190522" -->
<!-- sent="Mon, 5 Nov 2012 12:05:17 -0700" -->
<!-- isosent="20121105190517" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: fix frameworks usage of opal_output (updated)" -->
<!-- id="20121105190517.GB31953_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E1C75F5C-8591-4132-B0BD-4720D215AD84_at_icl.utk.edu" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: fix frameworks usage of opal_output (updated)<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-05 14:05:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11756.php">Nathan Hjelm: "[OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<li><strong>Previous message:</strong> <a href="11754.php">Jeff Squyres: "[OMPI devel] MPI-3 feature list"</a>
<li><strong>In reply to:</strong> <a href="11739.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Nov 01, 2012 at 07:22:42PM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 1, 2012, at 19:07 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I was going to address this second inconsistency with another patch but now seems like a good time to get a see if anyone has an opinion about how this should be fixed. I can think of two simple fixes:
</span><br>
<span class="quotelev2">&gt; &gt; 1) Since mca_base_components_open calls OBJ_CONSTRUCT should mca_base_components_close call OBJ_DESTRUCT?
</span><br>
<span class="quotelev2">&gt; &gt; 2) Should the caller be responsible for both the OBJ_CONSTRUCT and OBJ_DESTRUCT calls?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm fine either way, but I do have a slight preference for 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - it force us to have one specific output for each framework
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This isn't the case at the moment since frameworks can call opal_output_close on any extra output streams. It would be better if frameworks have t close all open output streams using opal_output_close instead of using mca_base_components_close. If we want to change the semantics of mca_base_components_close I can redo this patch. Anyone have an opinion on this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_base_components_close should not close an output stream opened by another entity (or if it does the arguments should be changed to int* and it should set it to -1). I think that counts as having an opinion ;)
</span><br>
<p>I agree and there seems to be no other opinions on this matter. So, attached is a new version of the change that modifies the behavior of mca_base_components_close to not close the output. I made the appropriate changes to each framework to reflect this change.
<br>
<p>I will RFC another patch to further modify the behavior of mca_base_components_close to call OBJ_DESTRUCT on the available components iff the list is empty. This will be a big step towards valgrind safety.
<br>
<p><p><p>New What: Modify the behavior of mca_base_components_close to not close the opal_output. Any component that calls opal_output_open MUST always call opal_output_close.
<br>
<p>New When: Tomorrow (Nov 6) @ 12:00PM MST
<br>
<p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11755/fix_framework_output_usagev2.patch">fix_framework_output_usagev2.patch</a>
</ul>
<!-- attachment="fix_framework_output_usagev2.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11756.php">Nathan Hjelm: "[OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<li><strong>Previous message:</strong> <a href="11754.php">Jeff Squyres: "[OMPI devel] MPI-3 feature list"</a>
<li><strong>In reply to:</strong> <a href="11739.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
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
