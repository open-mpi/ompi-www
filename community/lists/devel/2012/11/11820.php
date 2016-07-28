<?
$subject_val = "Re: [OMPI devel] RFC: make mca_base_param_deregister actually work";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 20 19:27:37 2012" -->
<!-- isoreceived="20121121002737" -->
<!-- sent="Tue, 20 Nov 2012 19:27:32 -0500" -->
<!-- isosent="20121121002732" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: make mca_base_param_deregister actually work" -->
<!-- id="219C5BE6-8582-4F80-AF6D-A91974883FF1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20121119205640.GA87531_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: make mca_base_param_deregister actually work<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-20 19:27:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11821.php">Iliev, Hristo: "Re: [OMPI devel] FOSS for scientists devroom at FOSDEM 2013"</a>
<li><strong>Previous message:</strong> <a href="11819.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11808.php">Nathan Hjelm: "[OMPI devel] RFC: make mca_base_param_deregister actually work"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have not tested this, but the patch looks reasonable to me.
<br>
<p><p>On Nov 19, 2012, at 3:56 PM, Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; What: mca_base_param provides a deregister function. In the trunk this function is only used in a ft path:
</span><br>
<span class="quotelev1">&gt; ompi-trunk hjelmn$ find . -name \*.[ch] | xargs grep mca_base_param_deregister
</span><br>
<span class="quotelev1">&gt; ./ompi/mca/bml/r2/bml_r2_ft.c:        mca_base_param_deregister(param_type);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right now this function is broken for two reasons:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) LEAK: The function does not destruct the mca_base_param_t it is deregistering.
</span><br>
<span class="quotelev1">&gt; 2) It removes the parameter from the array and moves every parameter after it up by one index. This will break any code which stores and later uses the parameter index! This isn't a big problem now but will 
</span><br>
<span class="quotelev1">&gt; become one as MPI_T functionality is added to Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached patch does the following:
</span><br>
<span class="quotelev1">&gt; - modify mca_base_param_deregister to correctly clean up the deleted parameter,
</span><br>
<span class="quotelev1">&gt; - modify the mca_base_param_t destructor to set the type to MCA_BASE_PARAM_TYPE_MAX, and
</span><br>
<span class="quotelev1">&gt; - added parameter validity checks where they were missing (an invalid parameter has type MCA_BASE_PARAM_TYPE_MAX.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why: If MCA is to support deregistering mca parameters (I don't see why it shouldn't) it needs to be done correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When: This patch is not critical but I would like feedback on it soon. Timeout set for next Monday (Nov. 26 @ 12:00PM MST).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Background: This is another part of a larger cleanup of the MCA system in preperation for supporting the MPI tool interface specified in MPI-3.0. In this case mca has a function that can change parameter ind
</span><br>
<span class="quotelev1">&gt; ices. This is not allowed by the MPI_T standard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please review the patch for correctness, bugs, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-3, LANL
</span><br>
<span class="quotelev1">&gt; &lt;mca_base_param_deregister_fix.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11821.php">Iliev, Hristo: "Re: [OMPI devel] FOSS for scientists devroom at FOSDEM 2013"</a>
<li><strong>Previous message:</strong> <a href="11819.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11808.php">Nathan Hjelm: "[OMPI devel] RFC: make mca_base_param_deregister actually work"</a>
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
