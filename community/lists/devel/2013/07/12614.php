<?
$subject_val = "[OMPI devel] RFC: add support for large counts using derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 16 15:14:32 2013" -->
<!-- isoreceived="20130716191432" -->
<!-- sent="Tue, 16 Jul 2013 13:14:28 -0600" -->
<!-- isosent="20130716191428" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: add support for large counts using derived datatypes" -->
<!-- id="20130716191428.GH18047_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: add support for large counts using derived datatypes<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-16 15:14:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12615.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12613.php">Eugene Loh: "Re: [OMPI devel] Annual OMPI membership review: SVN accounts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12615.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Reply:</strong> <a href="12615.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Add support for the MPI-3 MPI_Count datatype and functions: MPI_Get_elements_x, MPI_Status_set_elements_x, MPI_Type_get_extent_x, MPI_Type_get_true_extent_x, and MPI_Type_size_x. This will be CMR'd to 1.7.3 if there are no objections.
<br>
<p>Why: MPI_Count is required by the MPI 3.0 standard. This will add another checkmark by MPI 3 support.
<br>
<p>When: Setting a short timeout of one week (Tues, July 23, 2013). Most of the changes add the new functionality but there are some changes that affect the datatype engine.
<br>
<p>Details follow.
<br>
<p>-Nathan
<br>
<p>Repository @ github: <a href="https://github.com/hjelmn/ompi-count.git">https://github.com/hjelmn/ompi-count.git</a>
<br>
<p>Relevant commits:
<br>
General support: <a href="https://github.com/hjelmn/ompi-count/commit/db54d13404a241642fa783d5b3cc74edcb1103f2">https://github.com/hjelmn/ompi-count/commit/db54d13404a241642fa783d5b3cc74edcb1103f2</a>
<br>
Fortran support: <a href="https://github.com/hjelmn/ompi-count/commit/293adf84be52c2cd8acfe31be19cfe0afe14752d">https://github.com/hjelmn/ompi-count/commit/293adf84be52c2cd8acfe31be19cfe0afe14752d</a>
<br>
Others: <a href="https://github.com/hjelmn/ompi-count/commit/6c6ca8e539da675632c249c891ff93fdbc9d8de8">https://github.com/hjelmn/ompi-count/commit/6c6ca8e539da675632c249c891ff93fdbc9d8de8</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/hjelmn/ompi-count/commit/9638ef1f245f12bb98abbf5f47e1ecfd1a018862">https://github.com/hjelmn/ompi-count/commit/9638ef1f245f12bb98abbf5f47e1ecfd1a018862</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/hjelmn/ompi-count/commit/e158aa152d122e554b89498f5a71284ce1361a99">https://github.com/hjelmn/ompi-count/commit/e158aa152d122e554b89498f5a71284ce1361a99</a>
<br>
<p>Add support for MPI_Count type and MPI_COUNT datatype and add the required
<br>
MPI-3 functions MPI_Get_elements_x, MPI_Status_set_elements_x,
<br>
MPI_Type_get_extent_x, MPI_Type_get_true_extent_x, and MPI_Type_size_x.
<br>
This commit adds only the C bindings. Fortran bindins will be added in
<br>
another commit. For now the MPI_Count type is define to have the same size
<br>
as MPI_Offset. The type is required to be at least as large as MPI_Offset
<br>
and MPI_Aint. The type was initially intended to be a ssize_t (if it was
<br>
the same size as a long long) but there were issues compiling romio with
<br>
that definition (despite the inclusion of stddef.h).
<br>
<p>I updated the datatype engine to use size_t instead of uint32_t to support
<br>
large datatypes. This will require some review to make sure that 1) the
<br>
changes are beneficial, 2) nothing was broken by the change (I doubt
<br>
anything was), and 3) there are no performance regressions due to this
<br>
change.
<br>
<p>George, please look over these changes and let me know if you see anything wrong with my updates to the datatype engine.
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12615.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12613.php">Eugene Loh: "Re: [OMPI devel] Annual OMPI membership review: SVN accounts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12615.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Reply:</strong> <a href="12615.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
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
