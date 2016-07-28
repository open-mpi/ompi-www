<?
$subject_val = "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 21 12:12:55 2014" -->
<!-- isoreceived="20140221171255" -->
<!-- sent="Fri, 21 Feb 2014 10:12:54 -0700" -->
<!-- isosent="20140221171254" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable" -->
<!-- id="20140221171254.GB36469_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140221162110.GE30628_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-21 12:12:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14211.php">Josh Hursey: "Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c"</a>
<li><strong>Previous message:</strong> <a href="14209.php">Adrian Reber: "[OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<li><strong>In reply to:</strong> <a href="14209.php">Adrian Reber: "[OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14278.php">Adrian Reber: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14278.php">Adrian Reber: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Feb 21, 2014 at 05:21:10PM +0100, Adrian Reber wrote:
<br>
<span class="quotelev1">&gt; There is a variable in the FT code which is not defined and therefore
</span><br>
<span class="quotelev1">&gt; currently #ifdef'd out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1)
</span><br>
<span class="quotelev1">&gt; #ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev1">&gt;     /* FIXME_FT
</span><br>
<span class="quotelev1">&gt;      *
</span><br>
<span class="quotelev1">&gt;      * the variable mca_base_component_distill_checkpoint_ready
</span><br>
<span class="quotelev1">&gt;      * was removed by commit 8181c8273c486bba59b3dead324939eac1a58b8c (r28237)
</span><br>
<span class="quotelev1">&gt;      * &quot;Introduce the MCA framework system. This formalizes the interface frameworks must provide.&quot;
</span><br>
<span class="quotelev1">&gt;      *
</span><br>
<span class="quotelev1">&gt;      * */
</span><br>
<span class="quotelev1">&gt;     if (mca_base_component_distill_checkpoint_ready) {
</span><br>
<span class="quotelev1">&gt;         open_only_flags |= MCA_BASE_METADATA_PARAM_CHECKPOINT;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; #endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev1">&gt; #endif  /* (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1) */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The variable 'mca_base_component_distill_checkpoint_ready' used to exist but was removed
</span><br>
<span class="quotelev1">&gt; with commit 'r28237':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#if (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1)
</span><br>
<span class="quotelev1">&gt; -    {
</span><br>
<span class="quotelev1">&gt; -        int param_id = -1;
</span><br>
<span class="quotelev1">&gt; -        int param_val = 0;
</span><br>
<span class="quotelev1">&gt; -        /*
</span><br>
<span class="quotelev1">&gt; -         * Extract supported mca parameters for selection contraints
</span><br>
<span class="quotelev1">&gt; -         * Supported Options:
</span><br>
<span class="quotelev1">&gt; -         *   - mca_base_component_distill_checkpoint_ready = Checkpoint Ready
</span><br>
<span class="quotelev1">&gt; -         */
</span><br>
<span class="quotelev1">&gt; -        param_id = mca_base_param_reg_int_name(&quot;mca&quot;, &quot;base_component_distill_checkpoint_ready&quot;,
</span><br>
<span class="quotelev1">&gt; -                                               &quot;Distill only those components that are Checkpoint Ready&quot;, 
</span><br>
<span class="quotelev1">&gt; -                                               false, false,
</span><br>
<span class="quotelev1">&gt; -                                               0, &amp;param_val);
</span><br>
<span class="quotelev1">&gt; -        if( 0 != param_val ) { /* Select Checkpoint Ready */
</span><br>
<span class="quotelev1">&gt; -            open_only_flags |= MCA_BASE_METADATA_PARAM_CHECKPOINT;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -#endif  /* (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1) */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The variable is defined in contrib/amca-param-sets/ft-enable-cr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_base_component_distill_checkpoint_ready=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at the name of other variable I would say it should be called
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal_base_distill_checkpoint_ready
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and probably created with mca_base_var_register() or mca_base_component_var_register().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What would be the best place to create the variable so that it can be used again in
</span><br>
<span class="quotelev1">&gt; the FT code?
</span><br>
<p>Some variables are registered in opal/runtime/opal_params.c. That might
<br>
be a good place to add it.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14210/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14211.php">Josh Hursey: "Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c"</a>
<li><strong>Previous message:</strong> <a href="14209.php">Adrian Reber: "[OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<li><strong>In reply to:</strong> <a href="14209.php">Adrian Reber: "[OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14278.php">Adrian Reber: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14278.php">Adrian Reber: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
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
