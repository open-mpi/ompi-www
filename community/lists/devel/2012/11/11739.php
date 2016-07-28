<?
$subject_val = "Re: [OMPI devel] RFC: fix frameworks usage of opal_output";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 19:22:48 2012" -->
<!-- isoreceived="20121101232248" -->
<!-- sent="Thu, 1 Nov 2012 19:22:42 -0400" -->
<!-- isosent="20121101232242" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: fix frameworks usage of opal_output" -->
<!-- id="E1C75F5C-8591-4132-B0BD-4720D215AD84_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20121101230745.GE19330_at_pantheralanlgov.local" -->
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
<strong>Date:</strong> 2012-11-01 19:22:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11740.php">Josh Hursey: "Re: [OMPI devel] Open MPI MTT is moving"</a>
<li><strong>Previous message:</strong> <a href="11738.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>In reply to:</strong> <a href="11738.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11755.php">Nathan Hjelm: "[OMPI devel] RFC: fix frameworks usage of opal_output (updated)"</a>
<li><strong>Reply:</strong> <a href="11755.php">Nathan Hjelm: "[OMPI devel] RFC: fix frameworks usage of opal_output (updated)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 1, 2012, at 19:07 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I was going to address this second inconsistency with another patch but now seems like a good time to get a see if anyone has an opinion about how this should be fixed. I can think of two simple fixes:
</span><br>
<span class="quotelev1">&gt; 1) Since mca_base_components_open calls OBJ_CONSTRUCT should mca_base_components_close call OBJ_DESTRUCT?
</span><br>
<span class="quotelev1">&gt; 2) Should the caller be responsible for both the OBJ_CONSTRUCT and OBJ_DESTRUCT calls?
</span><br>
<p>I'm fine either way, but I do have a slight preference for 1.
<br>
<p><span class="quotelev2">&gt;&gt; - it force us to have one specific output for each framework
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This isn't the case at the moment since frameworks can call opal_output_close on any extra output streams. It would be better if frameworks have t close all open output streams using opal_output_close instead of using mca_base_components_close. If we want to change the semantics of mca_base_components_close I can redo this patch. Anyone have an opinion on this?
</span><br>
<p>mca_base_components_close should not close an output stream opened by another entity (or if it does the arguments should be changed to int* and it should set it to -1). I think that counts as having an opinion ;)
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="11740.php">Josh Hursey: "Re: [OMPI devel] Open MPI MTT is moving"</a>
<li><strong>Previous message:</strong> <a href="11738.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>In reply to:</strong> <a href="11738.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11755.php">Nathan Hjelm: "[OMPI devel] RFC: fix frameworks usage of opal_output (updated)"</a>
<li><strong>Reply:</strong> <a href="11755.php">Nathan Hjelm: "[OMPI devel] RFC: fix frameworks usage of opal_output (updated)"</a>
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
