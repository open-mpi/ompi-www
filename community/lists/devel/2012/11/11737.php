<?
$subject_val = "Re: [OMPI devel] RFC: fix frameworks usage of opal_output";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 18:50:36 2012" -->
<!-- isoreceived="20121101225036" -->
<!-- sent="Thu, 1 Nov 2012 18:50:30 -0400" -->
<!-- isosent="20121101225030" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: fix frameworks usage of opal_output" -->
<!-- id="F03CC10B-94C8-46E5-B07F-E86D49C3B29E_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20121101201854.GC19330_at_pantheralanlgov.local" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-01 18:50:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11738.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>Previous message:</strong> <a href="11736.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>In reply to:</strong> <a href="11736.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11738.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>Reply:</strong> <a href="11738.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 1, 2012, at 16:18 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Nov 01, 2012 at 04:07:32PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Nathan,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is a quick question regarding the topi framework. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - The mca_topo_base_output is opened unconditionally in topo_base_open.c:62
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - with your patch, mca_topo_base_output is closed conditionally in topo_base_close.c:46, but only in case mca_topo_base_components_opened_valid and mca_topo_base_components_available_valid are NULL. However, mca_topo_base_output is set to -1 in all cases right after.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Why is that so?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_base_components_close closes the output if the third argument is NULL. So in this case calling opal_output_close after mca_base_components_close will result in a second call to opal_output_close.
</span><br>
<p>Indeed, the behavior of the mca_base_components_close seems quite weird to me, as it lack of consistency.
<br>
- the symmetric function (mca_components_open) doesn't open the output stream
<br>
- the stream is close but the corresponding variable is not set to a meaningful value (-1)
<br>
- it force us to have one specific output for each framework.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In fact I think the mca_topo_base_close is entirely wrong. It should close all mca_topo_base_components_opened_valid component, then all mca_topo_base_components_available_valid components and then close the mca_topo_base_output and set it to -1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I looked into this as well. The select function for topo OBJ_DESTRUCTs mca_topo_base_components_opened and sets mca_topo_base_components_opened_valid to false. So if mca_topo_base_components_opened_valid is false it isn't safe to call mca_base_components_close. It is a little confusing and I don't know why the author if topo decided to do it that way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-3, LANL
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
<li><strong>Next message:</strong> <a href="11738.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>Previous message:</strong> <a href="11736.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>In reply to:</strong> <a href="11736.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11738.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>Reply:</strong> <a href="11738.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
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
