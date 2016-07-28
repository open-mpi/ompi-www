<?
$subject_val = "[OMPI devel] RFC: fix frameworks usage of opal_output";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 15:45:02 2012" -->
<!-- isoreceived="20121101194502" -->
<!-- sent="Thu, 1 Nov 2012 13:44:58 -0600" -->
<!-- isosent="20121101194458" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: fix frameworks usage of opal_output" -->
<!-- id="20121101194458.GA19330_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: fix frameworks usage of opal_output<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-01 15:44:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11735.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>Previous message:</strong> <a href="11733.php">David Shrader: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11735.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>Reply:</strong> <a href="11735.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: On close some frameworks either:
<br>
&nbsp;&nbsp;1) close their output twice (calling both opal_output_close and mca_base_components_close), or
<br>
&nbsp;&nbsp;2) don't close their output.
<br>
<p>This patch ensures that all frameworks that call opal_output_open have exactly one call to either opal_output_close OR mca_base_components_close.
<br>
<p>Why: I am working on cleaning up the MCA system in preparation for adding support for MPI_T_cvar_write. I came across this potential problem and figured it should probably be fixed.
<br>
<p>When: Since this patch shouldn't take long to review I am setting a very short timeout: tomorrow (Nov 2), 12:00pm MDT.
<br>
<p>Questions? Comments?
<br>
<p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11734/fix_framework_output_usage.patch">fix_framework_output_usage.patch</a>
</ul>
<!-- attachment="fix_framework_output_usage.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11735.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>Previous message:</strong> <a href="11733.php">David Shrader: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11735.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
<li><strong>Reply:</strong> <a href="11735.php">George Bosilca: "Re: [OMPI devel] RFC: fix frameworks usage of opal_output"</a>
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
