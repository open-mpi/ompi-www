<?
$subject_val = "Re: [OMPI devel] RFC: fix frameworks usage of opal_output";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 16:07:39 2012" -->
<!-- isoreceived="20121101200739" -->
<!-- sent="Thu, 1 Nov 2012 16:07:32 -0400" -->
<!-- isosent="20121101200732" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: fix frameworks usage of opal_output" -->
<!-- id="D2F47BDD-7169-483F-A604-11F8439EBFE3_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20121101194458.GA19330_at_pantheralanlgov.local" -->
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
<strong>Date:</strong> 2012-11-01 16:07:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11736.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>Previous message:</strong> <a href="11734.php">Nathan Hjelm: "[OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>In reply to:</strong> <a href="11734.php">Nathan Hjelm: "[OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11736.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>Reply:</strong> <a href="11736.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>Here is a quick question regarding the topi framework. 
<br>
<p>- The mca_topo_base_output is opened unconditionally in topo_base_open.c:62
<br>
<p>- with your patch, mca_topo_base_output is closed conditionally in topo_base_close.c:46, but only in case mca_topo_base_components_opened_valid and mca_topo_base_components_available_valid are NULL. However, mca_topo_base_output is set to -1 in all cases right after.
<br>
<p>Why is that so?
<br>
<p>In fact I think the mca_topo_base_close is entirely wrong. It should close all mca_topo_base_components_opened_valid component, then all mca_topo_base_components_available_valid components and then close the mca_topo_base_output and set it to -1.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Nov 1, 2012, at 15:44 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What: On close some frameworks either:
</span><br>
<span class="quotelev1">&gt;  1) close their output twice (calling both opal_output_close and mca_base_components_close), or
</span><br>
<span class="quotelev1">&gt;  2) don't close their output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This patch ensures that all frameworks that call opal_output_open have exactly one call to either opal_output_close OR mca_base_components_close.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why: I am working on cleaning up the MCA system in preparation for adding support for MPI_T_cvar_write. I came across this potential problem and figured it should probably be fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When: Since this patch shouldn't take long to review I am setting a very short timeout: tomorrow (Nov 2), 12:00pm MDT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Questions? Comments?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-3, LANL
</span><br>
<span class="quotelev1">&gt; &lt;fix_framework_output_usage.patch&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="11736.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>Previous message:</strong> <a href="11734.php">Nathan Hjelm: "[OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>In reply to:</strong> <a href="11734.php">Nathan Hjelm: "[OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11736.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>Reply:</strong> <a href="11736.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
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
