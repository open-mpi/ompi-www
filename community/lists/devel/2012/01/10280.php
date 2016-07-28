<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 17:53:46 2012" -->
<!-- isoreceived="20120130225346" -->
<!-- sent="Mon, 30 Jan 2012 17:53:41 -0500" -->
<!-- isosent="20120130225341" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813" -->
<!-- id="B9861D1B-9A1C-4CDE-AD3A-123FBF683E6E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CB4C60CA.B639%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 17:53:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10281.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
<li><strong>Previous message:</strong> <a href="10279.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
<li><strong>In reply to:</strong> <a href="10279.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10281.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
<li><strong>Reply:</strong> <a href="10281.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 30, 2012, at 5:38 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; Actually, the MXM component is an MTL, not a PML, so Jeff's option
</span><br>
<span class="quotelev1">&gt; wouldn't work.
</span><br>
<p>Oh, right.  Duh.
<br>
<p><span class="quotelev1">&gt; I'm not sure this is any better than saying &quot;--mca pml cm&quot; versus &quot;--mca
</span><br>
<span class="quotelev1">&gt; pml ob1&quot;, other than there's at least some rational names involved.
</span><br>
<span class="quotelev1">&gt; However, it does seem awful silly to thread the enabled through the
</span><br>
<span class="quotelev1">&gt; module; just check it and return not available.
</span><br>
<p>I think you could also do
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --mca mtl ^mxm ...
<br>
<p>I don't use MTLs often -- I'm *assuming* that if cm doesn't find any active MTLs, it'll just disqualify itself, thereby falling back to ob1.
<br>
<p>Right?
<br>
<p><p><span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/30/12 6:06 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox -- 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Isn't this redundant with the &quot;pml&quot; MCA parameter?  For example, you can
</span><br>
<span class="quotelev2">&gt;&gt; disable MXM via:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   mpirun --mca pml ^mxm ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (I said the same thing on #2988, the CMR to move this commit to v1.5.5)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 30, 2012, at 6:14 AM, miked_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: miked
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2012-01-30 06:14:20 EST (Mon, 30 Jan 2012)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 25813
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25813">https://svn.open-mpi.org/trac/ompi/changeset/25813</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; add mca param to enable/disable mxm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c |    11 +++++++++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/mtl/mxm/mtl_mxm_types.h     |     1 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  2 files changed, 12 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =====
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c    (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c    2012-01-30 06:14:20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EST (Mon, 30 Jan 2012)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -72,6 +72,12 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           &amp;ompi_mtl_mxm.verbose);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    mca_base_param_reg_int(&amp;mca_mtl_mxm_component.super.mtl_version,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;enable&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                           &quot;Enable/Disable MXM component&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                           false, false,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                           1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                           &amp;ompi_mtl_mxm.enabled);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    return OMPI_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -82,6 +88,11 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mca_mtl_mxm_output = opal_output_open(NULL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    opal_output_set_verbosity(mca_mtl_mxm_output, ompi_mtl_mxm.verbose);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (0 == ompi_mtl_mxm.enabled) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        MXM_VERBOSE(1, &quot;MTL/MXM was disabled on user request&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        return OPAL_ERR_NOT_AVAILABLE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mxm_fill_context_opts(&amp;ompi_mtl_mxm.mxm_opts);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    err = mxm_init(&amp;ompi_mtl_mxm.mxm_opts, &amp;ompi_mtl_mxm.mxm_context);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (MXM_OK != err) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_types.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =====
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_types.h    (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_types.h    2012-01-30 06:14:20 EST
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Mon, 30 Jan 2012)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -27,6 +27,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; typedef struct mca_mtl_mxm_module_t {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mca_mtl_base_module_t super; /**&lt; base MTL interface */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    int                   verbose;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    int                   enabled;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mxm_h                 mxm_context;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mxm_context_opts_t    mxm_opts;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mxm_ep_h              ep;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10281.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
<li><strong>Previous message:</strong> <a href="10279.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
<li><strong>In reply to:</strong> <a href="10279.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10281.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
<li><strong>Reply:</strong> <a href="10281.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
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
