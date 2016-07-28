<?
$subject_val = "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param (w patch)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 11 13:25:22 2012" -->
<!-- isoreceived="20121011172522" -->
<!-- sent="Thu, 11 Oct 2012 13:25:17 -0400" -->
<!-- isosent="20121011172517" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param (w patch)" -->
<!-- id="2FEE3574-1C08-40BA-A4B7-06C4F0BD7ABF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20121011170601.GC42271_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param (w patch)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-11 13:25:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11593.php">George Bosilca: "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param"</a>
<li><strong>Previous message:</strong> <a href="11591.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param (w patch)"</a>
<li><strong>In reply to:</strong> <a href="11591.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param (w patch)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11593.php">George Bosilca: "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have not tried the patch, but it generally looks good to me.
<br>
<p>On Oct 11, 2012, at 1:06 PM, Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; Patch attached this time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-3, LANL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 11, 2012 at 10:59:38AM -0600, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; What: Remove deprecated functions. This includes removing ocl_mca_type_name and ocl_mca_component_name from opal_cmd_line_init_t and removing the following functions from mca_base_param.[ch]:
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_param_register_int
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_param_register_string
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_param_environ_variable
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Additionally, I updated all uses of these functions to their modern equivalents. If your component/framework uses any of the above functions please take a look at the patch and let me know if you see any problems the changes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When: 8am EST October 15, 2012
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Why: I am in the process of cleaning up the mca system in preparation for adding support for the MPI-3.0 tools interface. Jeff and I discussed this in detail and agreed the changes to mca should be done in phases. This RFC represents phase 0.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The removed functions were marked as deprecated in r14072 about 6 years ago. I think we can all agree that is long enough to warn developers.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This will be CMRd to 1.7.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan Hjelm
</span><br>
<span class="quotelev2">&gt;&gt; HPC-3, LANL
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &lt;mca_cleanup_r0.patch&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="11593.php">George Bosilca: "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param"</a>
<li><strong>Previous message:</strong> <a href="11591.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param (w patch)"</a>
<li><strong>In reply to:</strong> <a href="11591.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param (w patch)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11593.php">George Bosilca: "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param"</a>
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
