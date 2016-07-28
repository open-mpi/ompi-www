<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25813";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 08:06:28 2012" -->
<!-- isoreceived="20120130130628" -->
<!-- sent="Mon, 30 Jan 2012 08:06:23 -0500" -->
<!-- isosent="20120130130623" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25813" -->
<!-- id="FFA73C89-4DFA-40D3-89E1-DF015F3436C1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201201301114.q0UBEL8n013878_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25813<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 08:06:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10278.php">Jeff Squyres: "[OMPI devel] 1.4.5rc3 released"</a>
<li><strong>Previous message:</strong> <a href="10276.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc2 more Solaris Studio compiler results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10279.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
<li><strong>Reply:</strong> <a href="10279.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mellanox -- 
<br>
<p>Isn't this redundant with the &quot;pml&quot; MCA parameter?  For example, you can disable MXM via:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca pml ^mxm ...
<br>
<p>(I said the same thing on #2988, the CMR to move this commit to v1.5.5)
<br>
<p><p>On Jan 30, 2012, at 6:14 AM, miked_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked
</span><br>
<span class="quotelev1">&gt; Date: 2012-01-30 06:14:20 EST (Mon, 30 Jan 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 25813
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25813">https://svn.open-mpi.org/trac/ompi/changeset/25813</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; add mca param to enable/disable mxm
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c |    11 +++++++++++                             
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm_types.h     |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   2 files changed, 12 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c	2012-01-30 06:14:20 EST (Mon, 30 Jan 2012)
</span><br>
<span class="quotelev1">&gt; @@ -72,6 +72,12 @@
</span><br>
<span class="quotelev1">&gt;                            0,
</span><br>
<span class="quotelev1">&gt;                            &amp;ompi_mtl_mxm.verbose);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    mca_base_param_reg_int(&amp;mca_mtl_mxm_component.super.mtl_version, &quot;enable&quot;,
</span><br>
<span class="quotelev1">&gt; +                           &quot;Enable/Disable MXM component&quot;,
</span><br>
<span class="quotelev1">&gt; +                           false, false,
</span><br>
<span class="quotelev1">&gt; +                           1,
</span><br>
<span class="quotelev1">&gt; +                           &amp;ompi_mtl_mxm.enabled);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -82,6 +88,11 @@
</span><br>
<span class="quotelev1">&gt;     mca_mtl_mxm_output = opal_output_open(NULL);
</span><br>
<span class="quotelev1">&gt;     opal_output_set_verbosity(mca_mtl_mxm_output, ompi_mtl_mxm.verbose);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    if (0 == ompi_mtl_mxm.enabled) {
</span><br>
<span class="quotelev1">&gt; +        MXM_VERBOSE(1, &quot;MTL/MXM was disabled on user request&quot;);
</span><br>
<span class="quotelev1">&gt; +        return OPAL_ERR_NOT_AVAILABLE;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     mxm_fill_context_opts(&amp;ompi_mtl_mxm.mxm_opts);
</span><br>
<span class="quotelev1">&gt;     err = mxm_init(&amp;ompi_mtl_mxm.mxm_opts, &amp;ompi_mtl_mxm.mxm_context);
</span><br>
<span class="quotelev1">&gt;     if (MXM_OK != err) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_types.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_types.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_types.h	2012-01-30 06:14:20 EST (Mon, 30 Jan 2012)
</span><br>
<span class="quotelev1">&gt; @@ -27,6 +27,7 @@
</span><br>
<span class="quotelev1">&gt; typedef struct mca_mtl_mxm_module_t {
</span><br>
<span class="quotelev1">&gt;     mca_mtl_base_module_t super; /**&lt; base MTL interface */
</span><br>
<span class="quotelev1">&gt;     int                   verbose;
</span><br>
<span class="quotelev1">&gt; +    int                   enabled;
</span><br>
<span class="quotelev1">&gt;     mxm_h                 mxm_context;
</span><br>
<span class="quotelev1">&gt;     mxm_context_opts_t    mxm_opts;
</span><br>
<span class="quotelev1">&gt;     mxm_ep_h              ep;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10278.php">Jeff Squyres: "[OMPI devel] 1.4.5rc3 released"</a>
<li><strong>Previous message:</strong> <a href="10276.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc2 more Solaris Studio compiler results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10279.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
<li><strong>Reply:</strong> <a href="10279.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
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
