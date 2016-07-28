<?
$subject_val = "[OMPI devel] RFC: Remove deprecated functions from mca_base_param";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 11 12:59:43 2012" -->
<!-- isoreceived="20121011165943" -->
<!-- sent="Thu, 11 Oct 2012 10:59:38 -0600" -->
<!-- isosent="20121011165938" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Remove deprecated functions from mca_base_param" -->
<!-- id="20121011165937.GA42271_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Remove deprecated functions from mca_base_param<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-11 12:59:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11591.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param (w patch)"</a>
<li><strong>Previous message:</strong> <a href="11589.php">Kevin Buckley: "[OMPI devel] rpmbuild of 1.6.2 fails when build_all_in_one_rpm is 0, works when 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11591.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param (w patch)"</a>
<li><strong>Reply:</strong> <a href="11591.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param (w patch)"</a>
<li><strong>Reply:</strong> <a href="11593.php">George Bosilca: "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Remove deprecated functions. This includes removing ocl_mca_type_name and ocl_mca_component_name from opal_cmd_line_init_t and removing the following functions from mca_base_param.[ch]:
<br>
&nbsp;mca_base_param_register_int
<br>
&nbsp;mca_base_param_register_string
<br>
&nbsp;mca_base_param_environ_variable
<br>
<p>Additionally, I updated all uses of these functions to their modern equivalents. If your component/framework uses any of the above functions please take a look at the patch and let me know if you see any problems the changes.
<br>
<p>When: 8am EST October 15, 2012
<br>
<p>Why: I am in the process of cleaning up the mca system in preparation for adding support for the MPI-3.0 tools interface. Jeff and I discussed this in detail and agreed the changes to mca should be done in phases. This RFC represents phase 0.
<br>
<p>The removed functions were marked as deprecated in r14072 about 6 years ago. I think we can all agree that is long enough to warn developers.
<br>
<p>This will be CMRd to 1.7.
<br>
<p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11591.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param (w patch)"</a>
<li><strong>Previous message:</strong> <a href="11589.php">Kevin Buckley: "[OMPI devel] rpmbuild of 1.6.2 fails when build_all_in_one_rpm is 0, works when 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11591.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param (w patch)"</a>
<li><strong>Reply:</strong> <a href="11591.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param (w patch)"</a>
<li><strong>Reply:</strong> <a href="11593.php">George Bosilca: "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param"</a>
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
