<?
$subject_val = "Re: [OMPI devel] RFC: fix frameworks usage of opal_output";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 19:07:49 2012" -->
<!-- isoreceived="20121101230749" -->
<!-- sent="Thu, 1 Nov 2012 17:07:45 -0600" -->
<!-- isosent="20121101230745" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: fix frameworks usage of opal_output" -->
<!-- id="20121101230745.GE19330_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F03CC10B-94C8-46E5-B07F-E86D49C3B29E_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2012-11-01 19:07:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11739.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>Previous message:</strong> <a href="11737.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>In reply to:</strong> <a href="11737.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11739.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>Reply:</strong> <a href="11739.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Nov 01, 2012 at 06:50:30PM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 1, 2012, at 16:18 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Nov 01, 2012 at 04:07:32PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nathan,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here is a quick question regarding the topi framework. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - The mca_topo_base_output is opened unconditionally in topo_base_open.c:62
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - with your patch, mca_topo_base_output is closed conditionally in topo_base_close.c:46, but only in case mca_topo_base_components_opened_valid and mca_topo_base_components_available_valid are NULL. However, mca_topo_base_output is set to -1 in all cases right after.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Why is that so?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_components_close closes the output if the third argument is NULL. So in this case calling opal_output_close after mca_base_components_close will result in a second call to opal_output_close.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, the behavior of the mca_base_components_close seems quite weird to me, as it lack of consistency.
</span><br>
<span class="quotelev1">&gt; - the symmetric function (mca_components_open) doesn't open the output stream
</span><br>
<span class="quotelev1">&gt; - the stream is close but the corresponding variable is not set to a meaningful value (-1)
</span><br>
<p>Exactly. There is more inconsistency between the two calls as well. mca_base_components_open calls OBJ_CONSTRUCT on the component list but mca_base_components_close does not call OBJ_DESTRUCT. Because of this we don't always OBJ_DESTRUCT the component list because some frameworks don't do it.
<br>
<p>I was going to address this second inconsistency with another patch but now seems like a good time to get a see if anyone has an opinion about how this should be fixed. I can think of two simple fixes:
<br>
1) Since mca_base_components_open calls OBJ_CONSTRUCT should mca_base_components_close call OBJ_DESTRUCT?
<br>
2) Should the caller be responsible for both the OBJ_CONSTRUCT and OBJ_DESTRUCT calls?
<br>
<p><p><span class="quotelev1">&gt; - it force us to have one specific output for each framework
</span><br>
<p>This isn't the case at the moment since frameworks can call opal_output_close on any extra output streams. It would be better if frameworks have t close all open output streams using opal_output_close instead of using mca_base_components_close. If we want to change the semantics of mca_base_components_close I can redo this patch. Anyone have an opinion on this?
<br>
<p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11739.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>Previous message:</strong> <a href="11737.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>In reply to:</strong> <a href="11737.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11739.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>Reply:</strong> <a href="11739.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
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
