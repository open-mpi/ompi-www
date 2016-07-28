<?
$subject_val = "[OMPI devel] RFC: make mca_base_param_deregister actually work";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 15:56:45 2012" -->
<!-- isoreceived="20121119205645" -->
<!-- sent="Mon, 19 Nov 2012 13:56:40 -0700" -->
<!-- isosent="20121119205640" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: make mca_base_param_deregister actually work" -->
<!-- id="20121119205640.GA87531_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: make mca_base_param_deregister actually work<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-19 15:56:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11809.php">Sylwester Arabas: "[OMPI devel] FOSS for scientists devroom at FOSDEM 2013"</a>
<li><strong>Previous message:</strong> <a href="11807.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11820.php">Jeff Squyres: "Re: [OMPI devel] RFC: make mca_base_param_deregister actually work"</a>
<li><strong>Reply:</strong> <a href="11820.php">Jeff Squyres: "Re: [OMPI devel] RFC: make mca_base_param_deregister actually work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: mca_base_param provides a deregister function. In the trunk this function is only used in a ft path:
<br>
ompi-trunk hjelmn$ find . -name \*.[ch] | xargs grep mca_base_param_deregister
<br>
./ompi/mca/bml/r2/bml_r2_ft.c:        mca_base_param_deregister(param_type);
<br>
<p>Right now this function is broken for two reasons:
<br>
<p>1) LEAK: The function does not destruct the mca_base_param_t it is deregistering.
<br>
2) It removes the parameter from the array and moves every parameter after it up by one index. This will break any code which stores and later uses the parameter index! This isn't a big problem now but will 
<br>
become one as MPI_T functionality is added to Open MPI.
<br>
<p>The attached patch does the following:
<br>
&nbsp;- modify mca_base_param_deregister to correctly clean up the deleted parameter,
<br>
&nbsp;- modify the mca_base_param_t destructor to set the type to MCA_BASE_PARAM_TYPE_MAX, and
<br>
&nbsp;- added parameter validity checks where they were missing (an invalid parameter has type MCA_BASE_PARAM_TYPE_MAX.
<br>
<p>Why: If MCA is to support deregistering mca parameters (I don't see why it shouldn't) it needs to be done correctly.
<br>
<p>When: This patch is not critical but I would like feedback on it soon. Timeout set for next Monday (Nov. 26 @ 12:00PM MST).
<br>
<p>Background: This is another part of a larger cleanup of the MCA system in preperation for supporting the MPI tool interface specified in MPI-3.0. In this case mca has a function that can change parameter ind
<br>
ices. This is not allowed by the MPI_T standard.
<br>
<p>Please review the patch for correctness, bugs, etc.
<br>
<p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11808/mca_base_param_deregister_fix.patch">mca_base_param_deregister_fix.patch</a>
</ul>
<!-- attachment="mca_base_param_deregister_fix.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11809.php">Sylwester Arabas: "[OMPI devel] FOSS for scientists devroom at FOSDEM 2013"</a>
<li><strong>Previous message:</strong> <a href="11807.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11820.php">Jeff Squyres: "Re: [OMPI devel] RFC: make mca_base_param_deregister actually work"</a>
<li><strong>Reply:</strong> <a href="11820.php">Jeff Squyres: "Re: [OMPI devel] RFC: make mca_base_param_deregister actually work"</a>
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
