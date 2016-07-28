<?
$subject_val = "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 11 13:31:15 2012" -->
<!-- isoreceived="20121011173115" -->
<!-- sent="Thu, 11 Oct 2012 19:31:07 +0200" -->
<!-- isosent="20121011173107" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param" -->
<!-- id="36D4D4CE-4C6A-4A31-818E-8441B37BA9E9_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20121011165937.GA42271_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-11 13:31:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11594.php">Shigang Li: "[OMPI devel] Question about collective communication optimization for shared memory"</a>
<li><strong>Previous message:</strong> <a href="11592.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param (w patch)"</a>
<li><strong>In reply to:</strong> <a href="11590.php">Nathan Hjelm: "[OMPI devel] RFC: Remove deprecated functions from mca_base_param"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good riddance.
<br>
<p>While you are looking at the MCA, there is one important thing pending for years on the MCA front. There are quite a lot of places in the MCA base where we leak memory (string duplication most of the time). I don't know how hard this can be to fix, but it does make sense to fix it while cleaning up the MCA base.
<br>

<br>
&nbsp;&nbsp;george.
<br>
<p>PS: A simple &quot;valgrind --tool=memcheck ompi_info&quot; will show most of them.
<br>
<p><p>On Oct 11, 2012, at 18:59 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What: Remove deprecated functions. This includes removing ocl_mca_type_name and ocl_mca_component_name from opal_cmd_line_init_t and removing the following functions from mca_base_param.[ch]:
</span><br>
<span class="quotelev1">&gt; mca_base_param_register_int
</span><br>
<span class="quotelev1">&gt; mca_base_param_register_string
</span><br>
<span class="quotelev1">&gt; mca_base_param_environ_variable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additionally, I updated all uses of these functions to their modern equivalents. If your component/framework uses any of the above functions please take a look at the patch and let me know if you see any problems the changes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When: 8am EST October 15, 2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why: I am in the process of cleaning up the mca system in preparation for adding support for the MPI-3.0 tools interface. Jeff and I discussed this in detail and agreed the changes to mca should be done in phases. This RFC represents phase 0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The removed functions were marked as deprecated in r14072 about 6 years ago. I think we can all agree that is long enough to warn developers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will be CMRd to 1.7.
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
<li><strong>Next message:</strong> <a href="11594.php">Shigang Li: "[OMPI devel] Question about collective communication optimization for shared memory"</a>
<li><strong>Previous message:</strong> <a href="11592.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param (w patch)"</a>
<li><strong>In reply to:</strong> <a href="11590.php">Nathan Hjelm: "[OMPI devel] RFC: Remove deprecated functions from mca_base_param"</a>
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
