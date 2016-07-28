<?
$subject_val = "Re: [OMPI devel] RFC: add support for large counts using derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 16 16:22:40 2013" -->
<!-- isoreceived="20130716202240" -->
<!-- sent="Tue, 16 Jul 2013 22:22:33 +0200" -->
<!-- isosent="20130716202233" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add support for large counts using derived datatypes" -->
<!-- id="6D2F3374-5115-4577-9491-7ABA45F9A0FC_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20130716191428.GH18047_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add support for large counts using derived datatypes<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-16 16:22:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12616.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<li><strong>Previous message:</strong> <a href="12614.php">Nathan Hjelm: "[OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="12614.php">Nathan Hjelm: "[OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12616.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<li><strong>Reply:</strong> <a href="12616.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<li><strong>Reply:</strong> <a href="12617.php">David Goodell (dgoodell): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<li><strong>Reply:</strong> <a href="12619.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Reply:</strong> <a href="12623.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>I read your code and it's definitively looking good. I have however few minor issues with your patch.
<br>
<p>1. MPI_Aint is unsigned as it must represent the difference between two memory arbitrary locations. In your MPI_Type_get_[true_]extent_x you go through size_t possibly reducing it's extent. I would suggest you used ssize_t instead.
<br>
2. In several other locations size_t is used as a conversion base. In some of these location there is even a comment talking about ssize_t &#133; 
<br>
3. We had a policy that we only export one single MPI level function per file in the mpi directory. You changed this as some of the files exports now two function (the original function together with the _x version).
<br>
4. In the OPAL datatype stuff sometimes you use size_t and sometimes ssize_t for the same type of logic (set and get count as an example). Why?
<br>
5. You change the comments in the opal_datatype.h with &quot;question marks&quot;? the cache boundary must be known, it can't be somewhere between x-y bytes ago &#133;
<br>
6. I'm not sure the change of nbElems from uint32_t to size_t (in opal/datatype/opal_datatype.h) is doing what you expect&#133;
<br>
<p><p>Btw, I have a question to you fellow MPI Forum attendees. I just can't remember why the MPI forum felt there was a need for the MPI_Type_get[_true]_extent_x? MPI_Count can't be bigger than MPI_Aint, so I don't see what is the benefit of extending the MPI_Type_get_true_extent(MPI_Datatype, MPI_Aint*, MPI_Aint*) and MPI_Type_get_extent(MPI_Datatype, MPI_Aint*, MPI_Aint*) with the corresponding _X versions?
<br>
<p>George.
<br>
<p>On Jul 16, 2013, at 21:14 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What: Add support for the MPI-3 MPI_Count datatype and functions: MPI_Get_elements_x, MPI_Status_set_elements_x, MPI_Type_get_extent_x, MPI_Type_get_true_extent_x, and MPI_Type_size_x. This will be CMR'd to 1.7.3 if there are no objections.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why: MPI_Count is required by the MPI 3.0 standard. This will add another checkmark by MPI 3 support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When: Setting a short timeout of one week (Tues, July 23, 2013). Most of the changes add the new functionality but there are some changes that affect the datatype engine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Details follow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Repository @ github: <a href="https://github.com/hjelmn/ompi-count.git">https://github.com/hjelmn/ompi-count.git</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Relevant commits:
</span><br>
<span class="quotelev1">&gt; General support: <a href="https://github.com/hjelmn/ompi-count/commit/db54d13404a241642fa783d5b3cc74edcb1103f2">https://github.com/hjelmn/ompi-count/commit/db54d13404a241642fa783d5b3cc74edcb1103f2</a>
</span><br>
<span class="quotelev1">&gt; Fortran support: <a href="https://github.com/hjelmn/ompi-count/commit/293adf84be52c2cd8acfe31be19cfe0afe14752d">https://github.com/hjelmn/ompi-count/commit/293adf84be52c2cd8acfe31be19cfe0afe14752d</a>
</span><br>
<span class="quotelev1">&gt; Others: <a href="https://github.com/hjelmn/ompi-count/commit/6c6ca8e539da675632c249c891ff93fdbc9d8de8">https://github.com/hjelmn/ompi-count/commit/6c6ca8e539da675632c249c891ff93fdbc9d8de8</a>
</span><br>
<span class="quotelev1">&gt;        <a href="https://github.com/hjelmn/ompi-count/commit/9638ef1f245f12bb98abbf5f47e1ecfd1a018862">https://github.com/hjelmn/ompi-count/commit/9638ef1f245f12bb98abbf5f47e1ecfd1a018862</a>
</span><br>
<span class="quotelev1">&gt;        <a href="https://github.com/hjelmn/ompi-count/commit/e158aa152d122e554b89498f5a71284ce1361a99">https://github.com/hjelmn/ompi-count/commit/e158aa152d122e554b89498f5a71284ce1361a99</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Add support for MPI_Count type and MPI_COUNT datatype and add the required
</span><br>
<span class="quotelev1">&gt; MPI-3 functions MPI_Get_elements_x, MPI_Status_set_elements_x,
</span><br>
<span class="quotelev1">&gt; MPI_Type_get_extent_x, MPI_Type_get_true_extent_x, and MPI_Type_size_x.
</span><br>
<span class="quotelev1">&gt; This commit adds only the C bindings. Fortran bindins will be added in
</span><br>
<span class="quotelev1">&gt; another commit. For now the MPI_Count type is define to have the same size
</span><br>
<span class="quotelev1">&gt; as MPI_Offset. The type is required to be at least as large as MPI_Offset
</span><br>
<span class="quotelev1">&gt; and MPI_Aint. The type was initially intended to be a ssize_t (if it was
</span><br>
<span class="quotelev1">&gt; the same size as a long long) but there were issues compiling romio with
</span><br>
<span class="quotelev1">&gt; that definition (despite the inclusion of stddef.h).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I updated the datatype engine to use size_t instead of uint32_t to support
</span><br>
<span class="quotelev1">&gt; large datatypes. This will require some review to make sure that 1) the
</span><br>
<span class="quotelev1">&gt; changes are beneficial, 2) nothing was broken by the change (I doubt
</span><br>
<span class="quotelev1">&gt; anything was), and 3) there are no performance regressions due to this
</span><br>
<span class="quotelev1">&gt; change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George, please look over these changes and let me know if you see anything wrong with my updates to the datatype engine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
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
<li><strong>Next message:</strong> <a href="12616.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<li><strong>Previous message:</strong> <a href="12614.php">Nathan Hjelm: "[OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="12614.php">Nathan Hjelm: "[OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12616.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<li><strong>Reply:</strong> <a href="12616.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<li><strong>Reply:</strong> <a href="12617.php">David Goodell (dgoodell): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<li><strong>Reply:</strong> <a href="12619.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Reply:</strong> <a href="12623.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
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
