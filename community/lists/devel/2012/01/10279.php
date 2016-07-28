<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 17:38:53 2012" -->
<!-- isoreceived="20120130223853" -->
<!-- sent="Mon, 30 Jan 2012 22:38:21 +0000" -->
<!-- isosent="20120130223821" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813" -->
<!-- id="CB4C60CA.B639%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FFA73C89-4DFA-40D3-89E1-DF015F3436C1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 17:38:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10280.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
<li><strong>Previous message:</strong> <a href="10278.php">Jeff Squyres: "[OMPI devel] 1.4.5rc3 released"</a>
<li><strong>In reply to:</strong> <a href="10277.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25813"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10280.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
<li><strong>Reply:</strong> <a href="10280.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, the MXM component is an MTL, not a PML, so Jeff's option
<br>
wouldn't work.
<br>
<p>I'm not sure this is any better than saying &quot;--mca pml cm&quot; versus &quot;--mca
<br>
pml ob1&quot;, other than there's at least some rational names involved.
<br>
However, it does seem awful silly to thread the enabled through the
<br>
module; just check it and return not available.
<br>
<p>Brian
<br>
<p>On 1/30/12 6:06 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Mellanox -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Isn't this redundant with the &quot;pml&quot; MCA parameter?  For example, you can
</span><br>
<span class="quotelev1">&gt;disable MXM via:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpirun --mca pml ^mxm ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(I said the same thing on #2988, the CMR to move this commit to v1.5.5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jan 30, 2012, at 6:14 AM, miked_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: miked
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2012-01-30 06:14:20 EST (Mon, 30 Jan 2012)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 25813
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25813">https://svn.open-mpi.org/trac/ompi/changeset/25813</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; add mca param to enable/disable mxm
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c |    11 +++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;                 
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm_types.h     |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;                 
</span><br>
<span class="quotelev2">&gt;&gt;   2 files changed, 12 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;=========================================================================
</span><br>
<span class="quotelev2">&gt;&gt;=====
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c    2012-01-30 06:14:20
</span><br>
<span class="quotelev2">&gt;&gt;EST (Mon, 30 Jan 2012)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -72,6 +72,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;                            0,
</span><br>
<span class="quotelev2">&gt;&gt;                            &amp;ompi_mtl_mxm.verbose);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +    mca_base_param_reg_int(&amp;mca_mtl_mxm_component.super.mtl_version,
</span><br>
<span class="quotelev2">&gt;&gt;&quot;enable&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                           &quot;Enable/Disable MXM component&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                           false, false,
</span><br>
<span class="quotelev2">&gt;&gt; +                           1,
</span><br>
<span class="quotelev2">&gt;&gt; +                           &amp;ompi_mtl_mxm.enabled);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -82,6 +88,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;     mca_mtl_mxm_output = opal_output_open(NULL);
</span><br>
<span class="quotelev2">&gt;&gt;     opal_output_set_verbosity(mca_mtl_mxm_output, ompi_mtl_mxm.verbose);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +    if (0 == ompi_mtl_mxm.enabled) {
</span><br>
<span class="quotelev2">&gt;&gt; +        MXM_VERBOSE(1, &quot;MTL/MXM was disabled on user request&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +        return OPAL_ERR_NOT_AVAILABLE;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;     mxm_fill_context_opts(&amp;ompi_mtl_mxm.mxm_opts);
</span><br>
<span class="quotelev2">&gt;&gt;     err = mxm_init(&amp;ompi_mtl_mxm.mxm_opts, &amp;ompi_mtl_mxm.mxm_context);
</span><br>
<span class="quotelev2">&gt;&gt;     if (MXM_OK != err) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_types.h
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;=========================================================================
</span><br>
<span class="quotelev2">&gt;&gt;=====
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_types.h    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_types.h    2012-01-30 06:14:20 EST
</span><br>
<span class="quotelev2">&gt;&gt;(Mon, 30 Jan 2012)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -27,6 +27,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; typedef struct mca_mtl_mxm_module_t {
</span><br>
<span class="quotelev2">&gt;&gt;     mca_mtl_base_module_t super; /**&lt; base MTL interface */
</span><br>
<span class="quotelev2">&gt;&gt;     int                   verbose;
</span><br>
<span class="quotelev2">&gt;&gt; +    int                   enabled;
</span><br>
<span class="quotelev2">&gt;&gt;     mxm_h                 mxm_context;
</span><br>
<span class="quotelev2">&gt;&gt;     mxm_context_opts_t    mxm_opts;
</span><br>
<span class="quotelev2">&gt;&gt;     mxm_ep_h              ep;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10280.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
<li><strong>Previous message:</strong> <a href="10278.php">Jeff Squyres: "[OMPI devel] 1.4.5rc3 released"</a>
<li><strong>In reply to:</strong> <a href="10277.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25813"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10280.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
<li><strong>Reply:</strong> <a href="10280.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
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
